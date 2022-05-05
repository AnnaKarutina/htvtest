<?php
session_start();

require_once 'db_fcs.php';
require_once 'db_config.php';

$conn = connect(HOST, USER, PASS, DB);

// get form data
echo '<pre>';
print_r($_POST);
echo '</pre>';

// save data to db

// redirect to index.php
header('Location: index.php');