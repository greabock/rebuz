<?php

declare(strict_types=1);

class Car
{
    public int $comfort;
    public int $volume;
    public float $fuel;
    public string $model;

    public function __construct(string $model, int $comfort, int $volume, float $fuel)
    {
        $this->comfort = $comfort;
        $this->volume = $volume;
        $this->fuel = $fuel;
        $this->model = $model;
    }

    public function calculateFuel(int $km): float
    {
        return ($km / 100) * ($this->fuel);
    }
}
