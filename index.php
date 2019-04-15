

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once('vendor/autoload.php');
$f3 = Base::instance();
$f3->set('DEBUG',3);
//Define a default route
$f3->route('GET /', function(){
    //echo '<h1>via GET Monday 04-15</h1>';
    //echo '<h1>Food!</h1>';
    //display a view
    $view = new Template();
    echo $view->render('views/home.html');

});
//Define a breakfast route
$f3->route('GET /breakfast', function(){
    //echo '<h1>Food!</h1>';
    $view = new Template();
        echo $view->render('views/breakfast.html');

});
//Define a lunch route
$f3->route('GET /lunch', function(){
    //echo '<h1>Food!</h1>';
        $view = new Template();
        echo $view->render('views/lunch.html');

});
//Define a continental breakfast route
$f3->route('GET /bfast-cont', function(){
    //echo '<h1>continental breakfast!</h1>';
    $view = new Template();
    echo $view->render('views/bfast-cont.html');

});
//Define a buffet route
$f3->route('GET /buffet/lunch', function(){
    //echo '<h1>Buffet!</h1>';
    $view = new Template();
    echo $view->render('views/buffet.html');

});
//Run fat free
$f3->run();