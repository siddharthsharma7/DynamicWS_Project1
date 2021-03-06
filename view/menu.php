<?php
function populateMenu()
{
  print("<div class=menu>");
  $dom = simplexml_load_file(DATA_DIR . "menu.xml");
  $rowNumber = 0;
  foreach($dom->xpath("/menu/category") as $category)
  {
    print_category($category);
    print "<table class=item id='table'>";
    foreach($category->item as $item)
    {
      print_items($item, $rowNumber);
    }
    print "</table>";
  }
  print("</div>");
}

function print_category($category)
{
  print "<h2 class='category' id=category>";
  $category_name = $category->name;
  print $category_name;
  print "</h2>";
  print "<div class=item>";
  foreach($category->category_order as $category_order)
  {
    print ($category_order->category_size . "&nbsp&nbsp$" . $category_order->category_price. "&nbsp&nbsp&nbsp&nbsp");
  }
  print "</div>";
}

function print_items($item, $rowNumber)
{
  print ("<tr id=" . $rowNumber . ">");
  // print ("<tr id=" . $rowNumber . " onClick=funcSelectItem(" . $rowNumber .")>");
  print "<td class=item_left>";
  print "<h3 id=item_name>";
  print $item->item_name;
  print "</h3>";
  print "</td>";
  print "<td class=item_right>";
  print "<h3 id=item_price>";
  $rowNumber = $rowNumber + 1;
  foreach($item->item_order as $item_order)
  {
    print ("$" . $item_order->price . "&nbsp&nbsp&nbsp");
  }
  print "</h3>";
  print "</td>";
  print "</tr>";
}
?>
