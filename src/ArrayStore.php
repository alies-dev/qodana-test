<?php declare(strict_types=1);

final class ArrayStore implements Store
{
    private array $store = [];

    public function push(string $key, mixed $value): void
    {
        $this->store[$key] = is_array($this->store[$key])
            ? [$this->store[$key], ...[$value]]
            : [$value];
    }
}
