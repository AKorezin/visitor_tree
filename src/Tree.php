<?php
declare(strict_types=1);

namespace akorezin;

/**
 * Class Tree
 * @package akorezin
 */
class Tree
{
    /** @var Node $rootNode */
    private $rootNode;

    public function __construct()
    {
    }

    /**
     * @return Node
     */
    public function getRootNode(): Node
    {
        return $this->rootNode;
    }

    /**
     * @param Node $rootNode
     */
    public function setRootNode(Node $rootNode): void
    {
        $this->rootNode = $rootNode;
    }

    /**
     * @param Visitor $visitor
     */
    public function accept(Visitor $visitor): void
    {
        $this->rootNode->accept($visitor);
    }
}
