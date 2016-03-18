<?php
function populateMenu()
{
  print("<div class=menu>");
  $dom = simplexml_load_file(DATA_DIR . "menu.xml");
  foreach($dom->xpath("/menu/category") as $category)
  {
    print "<h2 class=category>";
    print $category->name;
    print "</h2>";
    foreach($category->item as $item)
    {
      print "<h3 class=item>";
      print $item->item_name;
      print "</h3>";
    }
  }
  print("</div>");
}
?>
