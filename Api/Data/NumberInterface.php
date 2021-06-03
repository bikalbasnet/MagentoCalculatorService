<?php

namespace Bikal\CalculatorWebService\Api\Data;

interface NumberInterface
{
    /**
     * @return int
     */
    public function getNum1(): int;

    /**
     * @return int
     */
    public function getNum2(): int;

    /**
     * @param $num
     */
    public function setNum1($num);

    /**
     * @param $num
     */
    public function setNum2($num);
}
