$(document).ready(function() {
  //Submit form.
  console.log(document.location);
  $('form').submit(function(e){
    e.preventDefault();
    var form = $(this);
    var data ={};
    form.find('input').not('input[type=checkbox]').each(function() {
      var $el = $(this);
      var key = $el.attr('name');
      if (key) {
        data[key] = $el.val();
      }
    });
    form.find('input[type=checkbox]').each(function() {
      if ($(this).prop("checked")) {
        var key = $(this).attr('name');
        if (!data[key]) {
          data[key] = '';
        }
        if (key && $(this).val()) {
          var val_ob = data[key];
          val_ob += $(this).val() + ','
          data[key] = val_ob;
        }
      }
    });
    var yaCounter      = new Ya.Metrika();
    var yaCounterVal   = yaCounter.getClientID();
    data['ClientidYM'] = yaCounterVal;
    var formURL = document.location.pathname + '/integration_vtiger/post.php';
    formURL = formURL.replace('//', '/');
    $.post(formURL, data).done(function(done) {
      console.log(formURL);
      console.log(data);
      console.log(done);

      // $('input').attr('disabled','disabled');
      // $("button[type=submit]").val("Спасибо за заявку!");
      form.find('input').not('input[type=hidden], input[type=checkbox]').each(function() {
        $(this).val('');
      });
    })
    .fail(function(){
        alert('not good');
    });
    return false;
});
 

});