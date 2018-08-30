<?php declare(strict_types=1);

namespace BTCBridge\Api;

/**
 * Class SMOutput
 * Special Output exclusively for SendManyMethod
 *
 * @package BTCBridge\Api
 */
class SMOutput
{
    /** @var $address string */
    protected $address;

    /** @var $amount integer */
    protected $amount;

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = (string)$address;
        return $this;
    }

    /**
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param integer $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = (int)$amount;
        return $this;
    }
}
