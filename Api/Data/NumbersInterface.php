<?php

namespace Bikal\CalculatorWebService\Api\Data;

interface NumbersInterface
{
    /**
     * @return NumberInterface[]
     */
    public function getNumbers(): array;

    /**
     * @param NumberInterface[]
     */
    public function setNumbers(array $numbers);
}
