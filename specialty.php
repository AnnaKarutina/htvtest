<?php
session_start();

require_once 'db_fcs.php';
require_once 'db_config.php';

$conn = connect(HOST, USER, PASS, DB);

// get form data
/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/

$defaultFormData = [
    'CNC_operaator' => 'Ei ole valitud',
    'Koostelukksepp' => 'Ei ole valitud',
    'Keevitaja' => 'Ei ole valitud',
    'Muu_eriala' => 'Ei ole lisatud'
];


$form_data = [];
foreach ($defaultFormData as $ItemName=>$ItemValue ){
    if(in_array($ItemName, array_keys($_POST))){
        $value = $_POST[$ItemName];
        if($value == 'on'){
            $value = 'Valitud';
        }
        if($value == ''){
            $value = $ItemValue;
        }
        $form_data[$ItemName] = $value;
    } else {
        $form_data[$ItemName] = $ItemValue;
    }
}
/*
echo '<pre>';
print_r($form_data);
echo '</pre>';
*/

// save data to db

$sql = 'INSERT into speciality SET '
    .'CNC_operaator = "'.$form_data['CNC_operaator'].'", '
    .'Koostelukksepp = "'.$form_data['Koostelukksepp'].'", '
    .'Keevitaja = "'.$form_data['Keevitaja'].'", '
    .'Muu_eriala = "'.$form_data['Muu_eriala'].'"';

//echo $sql;

$result = query($conn, $sql);
if($result) {
    $_SESSION['teavitus'] = 'Sinu vastused on salvestatud!';
} else {
    $_SESSION['teavitus'] = 'Tekkis tõrge, palun uuesti täita vorm ja saata!';
}

// data controll
$sql = 'SELECT * FROM speciality';
$data = getData($conn, $sql);
/*
echo '<pre>';
print_r($data);
echo '</pre>';
*/

// redirect to index.php
header('Location: index.php');


