<?php
// show all pages

echo '"login",<br/>';
echo '"error_404",<br/>';
echo '"error_500",<br/>';

$files = glob('../php/views/*.php', GLOB_BRACE);
foreach($files as $file) {
    $file = str_replace('../php/views/', '', $file);
    $file = str_replace('.php', '', $file);
    echo '"' . $file . '",<br/>';
}