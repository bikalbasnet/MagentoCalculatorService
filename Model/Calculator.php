<?php

namespace Bikal\CalculatorWebService\Model;

use Bikal\CalculatorWebService\Api\CalculatorInterface;
use Bikal\CalculatorWebService\Api\Data\CalculationResponseInterface;
use Bikal\CalculatorWebService\Api\Data\NumberInterface;
use Bikal\CalculatorWebService\Model\Data\CalculationResponse;

class Calculator implements CalculatorInterface
{

    /**
     * @inheridoc
     */
    public function add(int $num1, int $num2): int
    {
       return $num1 + $num2;
    }

    /**
     * @inheridoc
     */
    public function addMultiple(array $numbers): CalculationResponseInterface
    {
        $results = [];

        /** @var NumberInterface $number */
        foreach ($numbers as $number) {
            $results[] = $number->getNum1() + $number->getNum2();
        }

       return new CalculationResponse('success', $results);
    }

    /**
     * @inheridoc
     */
    public function subtract(NumberInterface $number): int
    {
        return $number->getNum1() - $number->getNum2();
    }
}
