<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<script src="jquery-1.12.1.js"></script>
<script src="funcOnclick.js"></script>
<!--<script src="/Users/siddharthsharma/Documents/workspace/sid.dynamicws.net/htdocs/DynamicWS_Project1/js/funcOnclick.js"></script>-->
<body>

<h1>Three Aces Pizza</h1>

<div class=categories>
<?php
$dom = simplexml_load_file("../data/menu.xml");
foreach($dom->xpath("/menu/category") as $category)
{
    print "<div class=category>";
    print "<h4 class=category>";
    print $category->name;
    print "</h4>";
    print "</div>";
}

?>
</div>
<div class=items> </div>

<!--
print "<ul data-role='listview'>";
foreach($category->item as $item) {
  print "<li>";
  print $item->item_name;
  print "</li>";
}
print "</ul>"; -->



</body>
</html>
