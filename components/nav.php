<?php 

$menuItems = [
    "Home" => "index.php",
    "Chats" => "cats.php",
    "Contact"  => "contact.php"    
];

$menuHTML = "<nav class='navbar'><ul>";

foreach($menuItems as $key => $value) {
    $menuHTML .= "<li><a href='$value'>$key</a></li>";
}

$menuHTML .= "</ul></nav>";

echo $menuHTML;

?>