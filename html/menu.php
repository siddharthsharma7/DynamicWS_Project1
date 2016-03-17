<?php
$dom = simplexml_load_file("../data/menu.xml");
foreach($dom->xpath("/menu/category") as $category)
{
  if (  $category->name == $_POST["test"]) {
    foreach($category->item as $item) {
      print "<div class=item>";
      print "<h4 >";
      print $item->item_name;
      print "</h4>";
      print "</div>";
  }
}
}

?>
