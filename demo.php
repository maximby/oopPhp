<?php

//require 'class.Address.inc.php';
//require 'class.Database.inc.php';

/**
 * Define autoloader.
 * @param string $class_name
 */
function __autoload($class_name) {
    include 'class.'. $class_name . '.inc.php';
}

echo '<h2>Instantiating Address</h2>';
$address_residence = new AddressResidence();



echo '<h2>Setting properties...</h2>';
$address_residence->street_address_1 = '555 Fake Street';
$address_residence->city_name = 'Townsville';
$address_residence->subdivision_name = 'State';
$address_residence->country_name = 'United States of America';
//$address_residence->address_type_id = 1;
echo $address_residence;
echo '<tt><pre>' . var_export($address_residence, true) . '</pre></tt>';


// Тестирование Address __construct с помощью массива
echo '<h2>Testing Address __construct with an array</h2>';
$address_business = new AddressBusiness(array(
    'street_address_1' => '123 Phone Ave',
    'city_name' => 'Villageland',
    'subdivision_name' => 'Region',
    'country_name' => 'Canada',
));
echo $address_business;
echo '<tt><pre>' . var_export($address_business, true) . '</pre></tt>';

echo '<h2>Address __toString</h2>';
echo $address_business;

echo '<h2>Instantiating AddressPark</h2>';
$address_park = new AddressPark(array(
    'street_address_1' => '789 Missing Circle',
    'street_address_2' => 'Suite 0',
    'city_name' => 'Hamlet',
    'subdivision_name' => 'Territory',
    'country_name' => 'Australia',
));
echo $address_park;
echo '<tt><pre>' . var_export($address_park, true) . '</pre></tt>';

echo '<h2>Cloning AddressPark</h2>';
$address_park_clone = clone $address_park;
echo '<tt><pre>' . var_export($address_park_clone, true) . '</pre></tt>';
echo '$address_park_clone is ' .
    ($address_park ==  $address_park_clone ?
        ' ' : 'not ') . ' a copy of address_park';

echo '<h2>Testing typecasting to an object</h2>';
$test_object = (object) array (
    'hello' => 'world',
    'nested' => array('key' => 'value'),
);echo '<tt><pre>' . var_export($test_object, true) . '</pre></tt>';
