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
        return $this->result;
    }
}
