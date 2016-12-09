<?php

class Controller_Check extends Controller
{
    public function action_index()
    {
        echo '<pre>';
        echo 'FuelPHP version:' . Fuel::VERSION ."\n";
        echo 'locale:' . setlocale(LC_ALL,'0')."\n";
        echo 'date:' . Date::forge()->format('mysql')."\n";
        echo 'default_charset:' . ini_get('default_charset')."\n";
        echo '</pre>';

        //calculate money
        $jp = 82;
        $mmk = 1000;
        $fmmk = $mmk / $jp;
        $fjp = $jp / $mmk;
        $mam = 2440000;
        $jam = 200000;
        echo "myanamr amount =".number_format($mam)." kyats=>japan yen =".number_format($fjp * $mam)." yens<br>";
        echo "japan amount =".number_format($jam)." yens=>myanmar kyat =".number_format($fmmk * $jam)." kyats<br>";
    }
}