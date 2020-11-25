<?php
require 'lib/nusoap.php';
require 'db.php';

$server = new nusoap_server(); // Create a instance for nusoap server
$server->configureWSDL("Soap Demo","urn:soapdemo"); // Configure WSDL file
$server->register(
	"get_student_details", // name of function
	array("student_ID" => "xsd:string"),  // inputs
	array("return" => "xsd:string")   // outputs
);

$server->service(file_get_contents("php://input"));