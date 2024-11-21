<?php

// Sample Data
$html_content = '<p align="justify" style="orphans: 0; widows: 0; margin-left: 0.39cm;
margin-bottom: 0cm; border: none; padding: 0cm"><b>PARTY</b>2NAME<i>, </i>a
company incorporated under the laws of ROC2LAW having its Registered Office at
P1OFFICEADD. which expression, shall unless it be repugnant to the context or
meaning thereof, mean and include its successors and assigns (hereinafter referred
to as ‘‘ Service Provider’) of the ONE PART</p>';

// Text to Find and Replace
$find = array("PARTY2NAME", "P1OFFICEADD.");
$replace = array("Abc india pvt. Ltd.", "Mount Road,chennai-60014.");

// Replacing the text
$updated_html_content = str_replace($find, $replace, $html_content);

// Output the result
echo $updated_html_content;

?>
