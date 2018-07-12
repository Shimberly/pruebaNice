<?php
$data = $_REQUEST['identificador'];
$datos = json_encode($data);
$file = 'info.json';

if (isset($datos)) {
    $fp = fopen($file, 'w');
    fwrite($fp, utf8_decode($datos));
    fclose($fp);
    //chmod($file, 0777);
    echo 'Se han guardado correctamente la información en el txt!';
}
else {
    echo 'No hay datos que guardar!';
}
?>