<?php
declare(strict_types=1);

namespace akorezin;

/**
 * Class Main
 * @package akorezin
 */
class Main
{
    private $result = 0;

    public function init(): void
    {
    }

    /**
     * @return int
     */
    public function exec(): int
    {
        $treeExample = new Tree();
        $node = new Node('root', 'test');
        $treeExample->setRootNode($node);
        $visitor = new Visitor();
        $treeExample->accept($visitor);
        return $this->result;
    }
}
