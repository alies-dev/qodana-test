<?php declare(strict_types=1);

interface Store
{
    public function push(string $key, mixed $value): void;
}
