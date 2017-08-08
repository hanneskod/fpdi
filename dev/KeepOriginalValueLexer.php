<?php

namespace fpdidev;

use PhpParser\Lexer\Emulative;
use PhpParser\Parser;

class KeepOriginalValueLexer extends Emulative
{
    public function getNextToken(&$value = null, &$startAttributes = null, &$endAttributes = null) {
        $tokenId = parent::getNextToken($value, $startAttributes, $endAttributes);

        if ($value === "preg_match_all") {
            $x=8;
        }
        
        if ($tokenId == Parser::T_CONSTANT_ENCAPSED_STRING || $tokenId == Parser::T_LNUMBER || $tokenId == Parser::T_DNUMBER) {
            $endAttributes['originalValue'] = $value;
        }

        return $tokenId;
    }
}