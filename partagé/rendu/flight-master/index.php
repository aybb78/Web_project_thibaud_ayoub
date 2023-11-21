<?php
session_start();

require 'flight/Flight.php';

$link = mysqli_connect('u2.ensg.eu', 'geo', '', 'geobase');

Flight::set('db', $link); 

Flight::route('/', function() {
    Flight::render('accueil');
});

Flight::start();
?>
