<?php

$json_data=file_get_contents('../js/checkout.js');

$decoded_data=json_decode($json_data);

echo $decoded_data;

echo 'ciao';

?>