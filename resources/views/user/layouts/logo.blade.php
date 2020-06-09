<?php
// Instantiate new DOMDocument object
$svg = new DOMDocument();
// Load SVG file from public folder
$svg->load(public_path('user/img/Frame54-G.svg'));
// Add CSS class (you can omit this line)
$svg->documentElement->setAttribute("class", "frame-logo");
// Echo XML without version element
echo $svg->saveXML($svg->documentElement);
?>