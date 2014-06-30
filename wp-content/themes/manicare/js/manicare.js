$( document ).ready(function() {

  $('#nav-paypal').hide();

  $("#nav-pay-now").click(function() {
    $('#nav-paypal').toggle("slow");

  });

  // $('*').click(function(e) {

  //   if (e.target.id != 'nav-pay-now') {
  //     $('#nav-paypal').hide();
  //   } 

  // });


  //for inquiry form select 
  function getURLParameter(param) {
    var pageURL = window.location.search.substring(1);
    var parameterName = pageURL.split('=');
    if (parameterName[0] == param) {
      return parameterName[1];
    }
  }

  function fill_service_name_hidden() {
    $('.service-name-hidden input').val($( "#select-service-item option:selected" ).val());
  }

  var service = getURLParameter('service');

  if (service) {
    service = decodeURIComponent(service);
    $("#select-service-item").val(service);
    fill_service_name_hidden();
  } else {
    fill_service_name_hidden();
  }

  $( "#select-service-item" ).change(function() {
    fill_service_name_hidden();
  });  

});