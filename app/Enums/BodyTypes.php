<?php
/**
 * Created by PhpStorm.
 * User: bogdana
 * Date: 30.11.18
 * Time: 15:34
 */

namespace App\Enums;


class BodyTypes extends BaseEnum
{
        const HATCHBACK = 0;
        const SEDAN = 1;
        const MPV = 2;
        const SUV = 3;
        const CROSSOVER = 4;
        const COUPE = 5;
        const CONVERTIBLE = 6;

        public static $labels = [
            self::HATCHBACK => "Hatchback",
            self::SEDAN => "Sedan",
            self::MPV => "MPV",
            self::SUV => "SUV",
            self::CROSSOVER => "Crossover",
            self::COUPE => "Coupe",
            self::CONVERTIBLE => "Convertible",
        ];

}