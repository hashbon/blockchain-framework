<?php declare(strict_types=1);

namespace BTCBridge\Api;

use BTCBridge\Exception\BEInvalidArgumentException;

/**
 * Class ListTransactionsOptions
 * This class contains options for method Handler::listtransactions
 *
 * @package BTCBridge\Api
 */
class ListTransactionsOptions
{

    /** Maximum limit for listtransactions method */
    const MAXIMUM_LIMIT  = 100;

    /** Default limit for listtransactions method */
    const DEFAULT_LIMIT  = 10;

    /** @var integer $limit */
    protected $limit;

    /** @var integer $confirmations */
    protected $confirmations;

    /** @var string $starttxid */
    protected $starttxid;

    /** @var string $finishtxid */
    protected $finishtxid;

    /** @var string $omit_addresses */
    protected $omit_addresses;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->confirmations = 0;
        $this->limit = self::DEFAULT_LIMIT;
        $this->omit_addresses = true;
    }

    /**
     * @return integer
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param integer $limit
     * @return $this
     * @throws BEInvalidArgumentException in case of error of this type
     */
    public function setLimit($limit)
    {
        if ((!is_int($limit)) || ($limit <= 0) || ($limit > self::MAXIMUM_LIMIT)) {
            if (!is_null($limit)) {
                throw new BEInvalidArgumentException(
                    'limit variable must be positive integer (less than ' . self::DEFAULT_LIMIT . ') or null.'
                );
            }
        }
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return integer
     */
    public function getConfirmations()
    {
        return $this->confirmations;
    }

    /**
     * @param integer $confirmations
     * @return $this
     * @throws BEInvalidArgumentException in case of error of this type
     */
    public function setConfirmations($confirmations)
    {
        if ((!is_int($confirmations)) || ($confirmations <= 0)) {
            if (!is_null($confirmations)) {
                throw new BEInvalidArgumentException(
                    'confirmation variable must be positive integer.'
                );
            }
        }
        $this->confirmations = $confirmations;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarttxid()
    {
        return $this->starttxid;
    }

    /**
     * @param string $starttxid
     * @return $this
     * @throws BEInvalidArgumentException in case of error of this type
     */
    public function setStarttxid($starttxid)
    {
        if ((!is_string($starttxid)) || (trim($starttxid) == '')) {
            if (!is_null($starttxid)) {
                throw new BEInvalidArgumentException(
                    'starttxid variable must be non empty string.'
                );
            }
        }
        $this->starttxid = $starttxid;
        return $this;
    }

    /**
     * @return string
     */
    public function getFinishtxid()
    {
        return $this->finishtxid;
    }

    /**
     * @param string $finishtxid
     * @return $this
     * @throws BEInvalidArgumentException in case of error of this type
     */
    public function setFinishtxid($finishtxid)
    {
        if ((!is_string($finishtxid)) || (trim($finishtxid) == '')) {
            if (!is_null($finishtxid)) {
                throw new BEInvalidArgumentException(
                    'starttxid variable must be non empty string.'
                );
            }
        }
        $this->finishtxid = $finishtxid;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getOmitAddresses()
    {
        return $this->omit_addresses;
    }

    /**
     * @param boolean $omit_addresses
     * @return $this
     * @throws BEInvalidArgumentException in case of error of this type
     */
    public function setOmitAddresses($omit_addresses)
    {
        if (!is_bool($omit_addresses)) {
            if (!is_null($omit_addresses)) {
                throw new BEInvalidArgumentException(
                    'omit_addresses variable must be boolean type or null.'
                );
            }
        }
        $this->omit_addresses = $omit_addresses;
        return $this;
    }
}
