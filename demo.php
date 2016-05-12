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
$address = new Address();



echo '<h2>Setting properties...</h2>';
$address->street_address_1 = '555 Fake Street';
$address->city_name = 'Townsville';
$address->subdivision_name = 'State';
$address->country_name = 'United States of America';
$address->address_type_id = 1;
echo $address;
echo '<h2>Testing magic __get and __set.</h2>';
unset($address->postal_code);
echo$address->display();

// Тестирование Address __construct с помощью массива
echo '<h2>Testing Address __construct with an array</h2>';
$address_2 = new Address(array(
    'street_address_1' => '123 Phone Ave',
    'city_name' => 'Villageland',
    'subdivision_name' => 'Region',
    'country_name' => 'Canada',
));
echo $address_2->display();

echo '<h2>Address __toString</h2>';
echo $address_2;
