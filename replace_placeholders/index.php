<?php

// Sample input string
$string = "@Name@ ipsum dolor sit amet, consectetur adipiscing elit.
Praesent in mollis magna. Donec eu elit pellentesque, maximus nisl vitae, cursus
velit. Sed Loremnibh sed elit auctor tincidunt. Donec tempor est id nunc
ullamcorper rhoncus. Phasellus nec arcu et dui varius ullamcorper commodo quis
ligula. Etiam ultrices nisi @Email@, ut euismod elit tempor sed. Vestibulum ante
ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Lorem
ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor turpis vel
nisi fermentum, a sodales magna egestas. Vestibulum lobortis elit sed neque
rhoncus, sit amet @Mobile@ magna blandit. @Designation@ nec leo ac diam
euismod fringilla.";

// Replacement values
$name = "RRRR";
$email = "RRR@RRR.com";
$mobile = "9988775566";
$designation = "Software Developer";

// Arrays for find and replace
$find = array("@Name@", "@Email@", "@Mobile@", "@Designation@");
$replace = array($name, $email, $mobile, $designation);

// Replacing the placeholders with actual values
$updated_string = str_replace($find, $replace, $string);

// Output the result
echo $updated_string;

?>
