<?php

/**
 * Класс времени суток.
 * Реализовать функционал, позволяющий определить разницу между двумя моментами времени:
 * 1) в секундах (метод getTimeDiffInSec)
 * 2) в формате ЧЧ.ММ.СС (метод getTimeDiffFormated)
 * При создании объекта должно быть выполнено приведение данных к правильным значениям.
 * Например, при создании new DayTime(28, 15, 66) свойства объекта должны быть следующими: $h=4, $m=16, $s=6
 *
 * Методы вычисления разницы времени должны принимать в качестве аргумента экземпляр класса DayTime.
 */

class DayTime {
    /** @var  int  Часы */
    private $h;

    /** @var  int  Минуты */
    private $m;

    /** @var  int  Секунды */
    private $s;

    public function __construct($h, $m, $s) {
    }

    public function getTimeDiffInSec(DayTime $dtime){

    }

    public function getTimeDiffFormated(DayTime $dtime){

    }
}

