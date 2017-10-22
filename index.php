<?php

require_once 'lib/SxGeo/SxGeo.php';
$SxGeo = new SxGeo('lib/SxGeo/SxGeoCity.dat');

$ip = $_SERVER['REMOTE_ADDR'];
$country = $SxGeo->getCountry($ip);

if ($country == 'UA') {
       header('Location: uk.html'); die;
}

if ($country == 'PL') {
       header('Location: pl.html'); die;
}

header('Location: en.html'); die;