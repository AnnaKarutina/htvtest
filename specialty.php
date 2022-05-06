<?php
session_start();

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

// save data to file
$file = 'data.csv';
// file control

if(isset($file) and is_file($file) and is_writable($file)){
    // open file to write
    $fp = fopen($file, 'a+');
    // save data to file
    $row = implode(";", $form_data);
    $row = $row."\n";
    $result = fwrite($fp, $row);
    if(!$result) {
        $_SESSION['teavitus'] = 'Tekkis tõrge, palun uuesti täita vorm ja saata!';
    }
    $_SESSION['teavitus'] = 'Sinu vastused on salvestatud!';
} else {
    $_SESSION['teavitus'] = 'Probleem andmete salvestamisega!';
}

// redirect to index.php
header('Location: index.php');


