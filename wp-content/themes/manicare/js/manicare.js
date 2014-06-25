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

});