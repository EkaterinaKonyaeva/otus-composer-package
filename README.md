# MathOperations

Калькулятор (сложение, вычитание, умножение, деление)

## Требования

- PHP 8.2

## Установка

composer require ekaterina-konyaeva/otus-composer-package

## Использование

<?php

$mathOperations = new MathOperations();

$resultSum =  $mathOperations->sum(1.5,-3);
$resultSubtract =  $mathOperations->subtract(1.5,-3);
$resultMultiply =  $mathOperations->multiply(1.5,-3);
$resultDivide =  $mathOperations->divide(1.5,-3);