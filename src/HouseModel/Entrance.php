<?php

declare(strict_types=1);

namespace HouseModel;

class Entrance
{
    protected array $apartments = [];

    public function addApartment(Apartment $apartment): static
    {
        $this->apartments[] = $apartment;

        return $this;
    }

    public function getApartmentsCount(): int
    {
        return count($this->apartments);
    }
}
