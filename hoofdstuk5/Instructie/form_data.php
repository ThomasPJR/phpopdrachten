<?php
print_r($_GET);

echo $_GET["fName"] . $_GET["lName"];
$subject = $_GET["subject"];

if($subject == "js")
{
    echo "Dit is uitleg over het vak JavaScript";
}

elseif($subject == "php")
{
    echo "Dit is uitleg over het vak PHP";
}
?>