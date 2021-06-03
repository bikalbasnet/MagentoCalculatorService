<?php

namespace Bikal\CalculatorWebService\Model\Data;

use Magento\Framework\DataObject;
use Bikal\CalculatorWebService\Api\Data\CalculationResponseInterface;

class CalculationResponse implements CalculationResponseInterface
{
    /**
     * @var string
     */
    private $status;

    /**
     * @var array
     */
    private $results;

    /**
     * CalculationResponse constructor.
     * @param $status
     * @param array $results
     */
    public function __construct($status, array $results)
    {
        $this->status = $status;
        $this->results = $results;
    }

    /**
     * @inheridoc
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @inheridoc
     */
    public function getResults(): array
    {
        return $this->results;
    }
}
