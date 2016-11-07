<?php
/**
 * Created by PhpStorm.
 * User: Raffaello
 * Date: 19/10/16
 * Time: 08:29
 */

include "../../vendor/autoload.php";

use GuzzleHttp\Client ;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


//$apiKey = "AIzaSyB1TnpveG4hmgGdreUxutva9w4VHx9pJKA";
//$gogleCX = "000829998739172691271:npeu8eczido";

$apiKey = "AIzaSyA0dyiJxurpXpRoKfGISs7vW8B_pbivCQs";
$gogleCX = "008955699230195264666:s6ipgoocu9y";
$imprimirBonito = "false";



    $query = $_GET["q"];

    $http = new Client([
        "base_uri" => "https://www.googleapis.com/customsearch/v1?
        prettyPrint=".$imprimirBonito.
        "&key=".$apiKey.
        "&cx=".$gogleCX.
        "&q=".$query
    ]);
    $respuesta = $http->get("");
   	
	header('Content-Type: application/json'); 
    echo $respuesta->getBody();
    
    


/*
$app->get("/{query}/{index}", function (Request $request, Response $response){

    global $apiKey;
    global $gogleCX;
    global $imprimirBonito;

    $query = $request->getAttribute("query");

    $start = $request->getAttribute("index");

    $http = new Client([
        "base_uri" => "https://www.googleapis.com/customsearch/v1?
        prettyPrint=".$imprimirBonito.
            "&key=".$apiKey.
            "&cx=".$gogleCX.
            "&q=".$query.
            "&start=".$start
    ]);
    $resputesta = $http->get("");
    $response->getBody()->write($resputesta->getBody());
    $newResponse = $response->withAddedHeader('Content-type', 'application/json');
    return $newResponse;

}); */

/* Ejemplo de como crear una petición http.
 * $request = new Request('PUT', 'http://httpbin.org/put');
 * $response = $client->send($request, ['timeout' => 2]);
 */

//echo $resputesta->getBody();

//echo "\n\n";

