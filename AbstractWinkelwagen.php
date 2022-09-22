<?php

abstract class AbstractWinkelwagen
{
    private $store;
    private $maxProducts;

    public function __construct(string $store, int $maxProducts)
    {
        $this->store = $store;
        $this->maxProducts = $maxProducts;
    }

    public function getStoreName(): string
    {
        return $this->store;
    }

    public function getMaxProducts(): int
    {
        return $this->maxProducts;
    }
}