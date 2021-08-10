<?php

declare(strict_types=1);

namespace HouseModel;

class House
{
    private array $entrances = [];
    private string $streetAddress;


    public function __construct($streetAddress)
    {
        $this->streetAddress = $streetAddress;
    }

    public function getAddress(): string
    {
        return $this->streetAddress;
    }

    public function addEntrance(Entrance $entrance): static
    {
        $this->entrances[] = $entrance;

        return $this;
    }

    public function getApartmentsCount(): int
    {
        return array_reduce(
            $this->entrances,
            static fn(int $carry, Entrance $entrance) => $carry + $entrance->getApartmentsCount(),
            0
        );
    }
}
