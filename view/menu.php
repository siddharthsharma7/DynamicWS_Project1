<?php
function parent_tree()
{
  print("<div class=categories>");
  $dom = simplexml_load_file(DATA_DIR . "menu.xml");
  foreach($dom->xpath("/menu/category") as $category)
  {
    print "<div class=categories>";
    print "<h2 class=category>";
    print $category->name;
    print "</h2>";
    print "</div>";
    foreach($category->item as $item)
    {
      print "<div class=item>";
      print "<h3 >";
      print $item->item_name;
      print "</h3>";
      print "</div>";
    }
  }
  print("</div>");
}
?>
