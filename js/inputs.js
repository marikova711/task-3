 $(document).ready(function () {
     $('input[type="number"]').on('keydown', function(e){
         if(e.key.length == 1 && e.key.match(/[^0-9'".]/)){
             return false;
         };
     }).val('')
     $('input[type="number"]:first').on('input', function () {
         let width = $(this).val();
         if (width <= 1170) {
             $(".block").css('width', width);
         } else {
             $(this).val('');
         }
     })
     $('input[type="number"]:last').on('input', function () {
         let height = $(this).val();
         if (height <= 500) {
             $(".block").css('height', height);
         } else {
             $(this).val('');
         }
     })
 });