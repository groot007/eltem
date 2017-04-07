<?php

/**
 * Implements Class for work integration Vtiger.
 */

include('geoip/geo.php');

class ModelIntegration {

  // Hiddem fields.
  var $city;
  var $name;
  var $source  = 'unknown';
  var $keyword = 'unknown';
  var $adcamp  = 'unknown';
  var $publicid;
  var $hidden_input_form;

  var $config_array;

  function __construct() {
    // Get settings.
    $ini_array = parse_ini_file('config.ini');
    $this->publicid           = $ini_array['publicid'];
    $this->name               = $ini_array['name'];
    $this->hidden_input_form  = explode(', ', $ini_array['hidden_input_form']);
    if (isset($_GET['utm_source']) && $_GET['utm_source']) {
      $this->source  = isset($_GET['utm_source']) ? $_GET['utm_source'] : 'unknown';
      $this->adcamp  = isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : 'unknown';
      $this->keyword = isset($_GET['utm_term']) ? $_GET['utm_term'] : 'unknown';
    }    
    $this->city         = $this->get_city();
    $this->config_array = $ini_array;
  }

  /**
   * Method for generate hidden inputs to the form.
   */
  public function generate_hidden_inputs() {
    $input_names   = $this->hidden_input_form;
    $hidden_inputs = '';
    foreach ($input_names as $input_name) {
      $value_input    = (isset($this->{$input_name}) && $this->{$input_name}) ? $this->{$input_name} : '';
      $hidden_inputs .= "<input type='hidden' name={$input_name} value={$value_input}>";
    }
    return $hidden_inputs;
  }

  /**
   * Method for generate post query to crm Vtiger.
   */
  public function generate_post_query($post_data) {
    $fields_for_crm  = explode(', ', $this->config_array['fields_for_crm']);
    $fields_for_site = explode(', ', $this->config_array['fields_for_site']);

    $query = array();
    foreach ($fields_for_crm as $index => $value) {
      $index_field = $fields_for_site[$index];
      switch ($index_field) {
        case 'city':
        case 'source':
        case 'adcamp':
        case 'keyword':
          $value_field = ($post_data[$index_field]) ? $post_data[$index_field] : 'Неизвестно';
          $query[] = $value . '=' . $value_field;
          break;

        default:
          $query[] = $value . '=' . $post_data[$index_field];
          break;
      }
    }

    $query_post = implode('&', $query);
    return $query_post;
  }

  /**
   * Method for get city.
   */
  private function get_city() {
    $geo  = new Geo(); 
    $city = $geo->get_value('city', true);
    return $city;
  }

  /**
   * Method for get adsress.
   */
  public function get_address() {
    $address = $this->config_array['address'];
    return $address;
  }

  /**
   * Method for get form url.
   */
  public function get_form_url() {
    $form_url = $this->config_array['form_url'];
    return $form_url;
  }
  
}
