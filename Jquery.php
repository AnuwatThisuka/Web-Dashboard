$(document).ready(function() {
   $("#search").keyup(function() {
      var text = $('#search').val();
      if(text==""){
         $("#display").html(" ");
      }else{
         $.ajax({
            type: "POST",
            url: "search.php",
            data: {search: text},
            success: function(response) {
               $("#display").html(response);
            },
            error: function () {
               $("#display").html("something wrong with ajax...!!");
            }
         });
      }
   });      
});