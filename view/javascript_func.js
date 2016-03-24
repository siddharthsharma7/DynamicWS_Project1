$(document).ready(function()
{
  /*
  $("tr, .item").hide();
  $("h2").click(function() {
  $("tr, .item").toggle();
  */
$("tr").click(function(){
  alert($("#item_name").text());
  alert($("#item_price").text());
  alert($("#category").text());

  // alert(document.getElementById('item_name').getText);
  localStorage.category = $("#category").text();
  localStorage.item_price = $("#item_price").text();
  localStorage.item_name = $("#item_name").text();

  appendToStorage('category', $("#category").text());

  function appendToStorage(name, data){
      var old = localStorage.getItem(name);
      if(old === null) old = "";
      localStorage.setItem(name, old + data);
  }

})
// $("h2").children("item").toggle();
});

// function funcSelectItem($id)
// {
//   alert(document.getElementById($id).innerHTML);
// }
// alert(this.gethtml());
  // document.write(selected_item);
  //  window.location="test.html";
  // });
