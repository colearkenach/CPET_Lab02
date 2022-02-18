<?php

// require_once  'index.html'; // this loads the index.html file 

require_once(__DIR__ . '/router.php');
require_once(__DIR__ . '/php/authorController.php'); 

$router = new router(); 

// register routes

$router->get("/", function()
{
   require_once "html/authors.html"; 
});

//$router->get('/author', function($id)
//{
 //   require_once 'author.html';
//});

$router->get('/authors', function()
{
    authorController::authors();
});

$router->run();

?>