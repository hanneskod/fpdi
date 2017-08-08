<?php
namespace fpdidev;

use PhpParser\NodeVisitorAbstract;
use PhpParser\Node;
use PhpParser\Node\Scalar\String_;

class TcpdfResolver extends NodeVisitorAbstract
{
    public function leaveNode(Node $node) {
        if ($node instanceof String_) {
            $attributes = $node->getAttributes();
            if (isset($attributes['originalValue'])) {
                $attributes['originalValue'] = preg_replace('/^("|\')TCPDF/', '$1\\\\\\\\TCPDF', $attributes['originalValue']);
            }
            
//            throw wsc;
            return new String_($node->value, $attributes);
        }
    }
}
