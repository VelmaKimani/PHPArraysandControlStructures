<?php
$list[] = array(
    "title" => "Laundry",
    "priority" => 2,
    "due" => "",
    "complete" => true,
);
$list[] = array(
    "title" => "Clean out the fridge",
    "priority" => 3,
    "due" => "07/30/2016",
    "complete" => false,
);
var_dump($list);
echo $list[0]["title"];
?>