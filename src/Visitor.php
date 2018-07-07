<?php
declare(strict_types=1);

namespace akorezin;

/**
 * Class Visitor
 * @package akorezin
 */
class Visitor
{
    /**
     * @param Node $node
     */
    public function visit(Node $node): void
    {
        echo $node->getNodeName(),' => ', $node->getNodeValue(), PHP_EOL;
    }
}
