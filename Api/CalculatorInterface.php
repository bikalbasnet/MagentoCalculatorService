<?php

namespace Bikal\CalculatorWebService\Api;

use Bikal\CalculatorWebService\Api\Data\CalculationResponseInterface;
use Bikal\CalculatorWebService\Api\Data\NumberInterface;

interface CalculatorInterface
{
    /**
     * @param int $num1
     * @param int $num2
     * @return int
     */
    public function add(int $num1, int $num2): int;

    /**
     * @param NumberInterface[] $numbers
     * @return CalculationResponseInterface
     */
    public function addMultiple(array $numbers): CalculationResponseInterface;

    /**
     * @param NumberInterface $number
     * @return int
     */
    public function subtract(NumberInterface $number): int;
}
