<?php

namespace PBurggraf\CRC\CRC16;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class Profibus extends AbstractCRC16
{
    public function __construct()
    {
        $this->poly = 0x1dcf;
        $this->init = 0xffff;

        $this->reverseIn = false;
        $this->reverseOut = false;
        $this->xorOut = 0xffff;

        $this->lookupTable = $this->generateTable($this->poly);
    }
}
