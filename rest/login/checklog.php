<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
require_once('../../app/app.php');
$model = new app;
$requestMethod = $_SERVER["REQUEST_METHOD"];
$requestMethod = strtoupper($requestMethod);
switch ($requestMethod) {
    case 'GET':
        $data = json_decode(file_get_contents("php://input"));
        $nombreV = $data->nombre;
        $content = $model->showusers();
        $result  = json_decode($content);
        foreach ($result ->response as $value) {
           $idUser= $value->nombre;
           if ($idUser == $nombreV) {
            echo $value->nombre;
           }else{
            
           }
        }
        break;

    default:
        $model->showusers();

        break;
}
