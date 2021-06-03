<?php

namespace Bikal\CalculatorWebService\Model\Data;

use Magento\Framework\Model\AbstractModel;
use Bikal\CalculatorWebService\Api\Data\NumbersInterface;

class Numbers extends AbstractModel implements NumbersInterface
{
    /**
     * @inheridoc
     */
    public function getNumbers(): array
    {
        return $this->getData('numbers');
    }

    /**
     * @inheridoc
     */
    public function setNumbers(array $numbers)
    {
        exit('asd');
        $this->setData('numbers', $numbers);
    }
}
