// // Example starter JavaScript for disabling form submissions if there are invalid fields
// (function() {
//   "use strict";
//   window.addEventListener("load", function() {
//     var form = document.getElementById("support_form");
//     form.addEventListener("submit", function(event) {
//       if (form.checkValidity() == false) {
//         event.preventDefault();
//         event.stopPropagation();
//         var x = document.getElementById("banner_fail");
//         if (x.style.display === 'none') {
//             x.style.display = 'block';
//         } else {
//             x.style.display = 'none';
//         }
//       }
//       var y = document.getElementById("banner_succes");
//       if (y.style.display === 'none') {
//             y.style.display = 'block';
//         } else {
//             y.style.display = 'none';
//         }
//       form.classList.add("was-validated");
//     }, false);
//   }, false);
// }());

$( document ).ready(function() {
  $( ".submit_form" ).bind( "click", function( event ) {
    var form = $(this).parents('form')[0];
    if (form.checkValidity() == false) {
      $("#banner_fail").show();
      $("#banner_succes").hide();
    } else {
      $("#banner_succes").show();
      $("#banner_fail").hide();
      $(".invalid-feedback").hide();
      var data = $(this).parents('form').serialize();
      $.ajax({
        url: $(this).parents('form').attr('action'),
        type:   'POST',
        data: data,
        success: function(returnval){
          console.log('SUCCESS');
        },
        error: function(returnval){
          console.log('FAIL');
        }
      });
    }
    $( "#support_form" ).addClass("was-validated");
  });
});