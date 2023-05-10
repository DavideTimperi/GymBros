<?php

$json_data=file_get_contents('../js/cart.js');

$decoded_data=json_decode($json_data);

echo $decoded_data;



?>