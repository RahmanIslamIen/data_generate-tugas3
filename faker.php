<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('id_ID');

for($i=1;$i<=50;$i++){
// generate data by accessing properties
echo $faker->numerify('B ####'), '</br>';
echo $faker->name, '</br>';
echo $faker->randomElement($array = array ('pcs','rim','dus')), '</br>';
echo '</br>';
}