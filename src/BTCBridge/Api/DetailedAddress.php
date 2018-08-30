<?php declare(strict_types=1);

namespace BTCBridge\Api;

/**
 * Class DetailedAddress
 * This class contains wif of address and all variants of address representation
 *
 * @package BTCBridge\Api
 */
class DetailedAddress
{
    /** @var \string $wif */
    protected $wif;

    /** @var \string $legacy */
    protected $legacy;

    /** @var \string $bech32 */
    protected $bech32;

    /** @var \string $p2sh */
    protected $p2sh;

    /**
     * @return string
     */
    public function getWif()
    {
        return $this->wif;
    }

    /**
     * @param \string $wif
     * @return $this
     */
    public function setWif($wif)
    {
        $this->wif = (string)$wif;
        return $this;
    }

    /**
     * @return string
     */
    public function getLegacy()
    {
        return $this->legacy;
    }

    /**
     * @param \string $legacy
     * @return $this
     */
    public function setLegacy($legacy)
    {
        $this->legacy = (string)$legacy;
        return $this;
    }

    /**
     * @return string
     */
    public function getBech32()
    {
        return $this->bech32;
    }

    /**
     * @param \string $bech32
     * @return $this
     */
    public function setBech32($bech32)
    {
        $this->bech32 = (string)$bech32;
        return $this;
    }

    /**
     * @return string
     */
    public function getP2sh()
    {
        return $this->p2sh;
    }

    /**
     * @param \string $p2sh
     * @return $this
     */
    public function setP2sh($p2sh)
    {
        $this->p2sh = (string)$p2sh;
        return $this;
    }
}
