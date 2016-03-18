/*
$(document).ready(function(){
    $(".category").click(function(){
        $(this).css("background-color","pink");
      //  $(.items).text = $(this).text
        getOutput($(this).text());
    });
});

// handles the click event, sends the query
function getOutput(c) {
   $.ajax({
      url:'../data/menu.php',
      type: 'post',
      data: {test: c},
      complete: function (response) {
          $('.items').html(response.responseText);
      },
  });
  return false;
}
*/
