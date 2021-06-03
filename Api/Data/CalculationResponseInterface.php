<?php

namespace Bikal\CalculatorWebService\Api\Data;

interface CalculationResponseInterface
{
    /**
     * @return string
     */
    public function getStatus(): string;

    /**
     * @return array
     */
    public function getResults(): array;
}
