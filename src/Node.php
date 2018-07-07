<?php
declare(strict_types=1);

namespace akorezin;

/**
 * Class Node
 * @package akorezin
 */
class Node
{
    /** @var string $nodeName */
    private $nodeName;
    /** @var Node[] $children */
    private $children = [];
    /** @var string $nodeValue */
    private $nodeValue;

    /**
     * Node constructor.
     * @param string $name
     * @param string $value
     */
    public function __construct(string $name = null, string $value = null)
    {
        $this->nodeName = $name;
        $this->nodeValue = $value;
    }

    /**
     * @param Visitor $visitor
     */
    public function accept(Visitor $visitor): void
    {
        $visitor->visit($this);
        foreach ($this->children as $child) {
            $child->accept($visitor);
        }
    }

    /**
     * @param Node $childNode
     */
    public function addChild(Node $childNode): void
    {
        $this->children[] = $childNode;
    }

    /**
     * @return string
     */
    public function getNodeName(): string
    {
        return $this->nodeName;
    }

    /**
     * @param string $nodeName
     */
    public function setNodeName(string $nodeName): void
    {
        $this->nodeName = $nodeName;
    }

    /**
     * @return Node[]
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * @param Node[] $children
     */
    public function setChildren(array $children): void
    {
        $this->children = $children;
    }

    /**
     * @return string
     */
    public function getNodeValue(): string
    {
        return $this->nodeValue;
    }

    /**
     * @param string $nodeValue
     */
    public function setNodeValue(string $nodeValue): void
    {
        $this->nodeValue = $nodeValue;
    }
}
