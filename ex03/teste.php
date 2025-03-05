<?php
require_once __DIR__ . '/vendor/autoload.php';

$faker = \Faker\Factory::create('pt_BR');

echo "Nome: " . $faker->name() . PHP_EOL;
echo "E-mail: " . $faker->email() . PHP_EOL;
echo "Cidade: " . $faker->city() . PHP_EOL;
