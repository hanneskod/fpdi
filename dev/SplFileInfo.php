<?php

namespace fpdidev;

use hanneskod\classtools\Iterator\SplFileInfo as BaseSplFileInfo;
use hanneskod\classtools\Transformer\Reader;

class SplFileInfo extends BaseSplFileInfo
{
    private $reader;
    
    /**
     * @param Reader $reader
     * @return SplFileInfo
     */
    public function setReader(Reader $reader): SplFileInfo
    {
        $this->reader = $reader;
        return $this;
    }

    /**
     * Get reader for the contents of this file
     *
     * @return Reader
     */
    public function getReader()
    {
        if (!isset($this->reader)) {
            $this->reader = parent::getReader();
        }

        return $this->reader;
    }
}