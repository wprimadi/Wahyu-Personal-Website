<?php
header("Content-Type: image/svg+xml");
$image = file_get_contents('https://ghchart.rshah.org/wprimadi');
echo str_replace("fill:#eeeeee;", "fill:#d0d5d8;", $image);
exit();
?>