<?php

require "Field.php";
require "Text.php";
require "Boolean.php";
require "Radio.php";
require "Checkbox.php";

$object=[

$text=new Text("ahmed"),
$radio=new Radio("ahmed"),
$checkbox=new Checkbox("ahmed"),
$boolean=new Boolean("ahmed"),];

foreach ($object as $field)
{
    echo $field->render()."<br>";
}

