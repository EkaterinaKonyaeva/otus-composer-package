<?php

namespace EkaterinaKonyaeva\OtusComposerPackage;

class MathOperations
{
    public static function sum($a, $b) {
        if (!is_numeric($a) || !is_numeric($b)) {
            return "введите числа!";
        }

        return $a + $b;
    }

    public static function subtract($a, $b) {
        if (!is_numeric($a) || !is_numeric($b)) {
            return "введите числа!";
        }

        return $a - $b;
    }

    public static function multiply($a, $b) {
        if (!is_numeric($a) || !is_numeric($b)) {
            return "введите числа!";
        }

        return $a * $b;
    }

    public static function divide($a, $b) {
        if (!is_numeric($a) || !is_numeric($b)) {
            return "введите числа!";
        }

        if ($b == 0) {
            return "На ноль делить нельзя!";
        }

        return $a / $b;
    }

}