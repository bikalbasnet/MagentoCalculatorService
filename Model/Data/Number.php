<?php

namespace Bikal\CalculatorWebService\Model\Data;

use Magento\Framework\DataObject;
use Magento\Framework\Model\AbstractModel;
use Bikal\CalculatorWebService\Api\Data\NumberInterface;

class Number extends AbstractModel implements NumberInterface
{
    public function getNum1(): int
    {
        return $this->getData('num1');
    }

    public function getNum2(): int
    {
        return $this->getData('num2');
    }

    public function setNum1($num)
    {
        $this->setData('num1', $num);
    }

    public function setNum2($num)
    {
        $this->setData('num2', $num);
    }
}
