<?php

namespace Core\Database;

class Verification
{
    public static function cleanInput($value)
    {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);

        return $value;
    }

    static function checkLength($value, $min, $max)
    {
        $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
        return !$result;
    }

    public static function inputAudit($value)
    {
        if (!empty($value)) {
            if (self::checkLength($value, 2, 20))
            {
                return $value;
            }
            else {
                echo "<h1 style='color: red'>Введені некоректні дані</h1> <p><a href='/'>ПОВЕРНУТИСЯ НАЗАД</a></p>";
            }
        } else {
            echo "<h1 style='color: red'>Заповніть пусті поля</h1> <p><a href='/'>ПОВЕРНУТИСЯ НАЗАД</a></p>";
        }
    }
}