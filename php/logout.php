<?php

@include 'config.php';

session_start();
session_unset();
session_destroy();

header('location:login_form.php');//cambiare e mettere il link alla home dopo il checkout

?>