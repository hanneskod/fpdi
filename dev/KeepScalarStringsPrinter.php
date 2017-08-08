<?php

namespace fpdidev;

use hanneskod\classtools\Transformer\BracketingPrinter;
use PhpParser\Node\Scalar\String_;

class KeepScalarStringsPrinter extends BracketingPrinter
{
    public function pScalar_String(String_ $node) {
        $originalValue = $node->getAttribute('originalValue');
        
        if ($originalValue !== null) {
            return $this->pNoIndent($originalValue);
        } else {
            return '\'' . $this->pNoIndent(addcslashes($node->value, '\'\\')) . '\'';
        }
    }
}