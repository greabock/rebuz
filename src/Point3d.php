<?php

declare(strict_types=1);

class Point3d
{
    public float $x;
    public float $y;
    public float $z;

    public function __construct(float $x, float $y, float $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function range(Point3d $point): float
    {
        $maxX = max($this->x, $point->x);
        $maxY = max($this->y, $point->y);
        $maxZ = max($this->z, $point->z);

        $minX = min($this->x, $point->x);
        $minY = min($this->y, $point->y);
        $minZ = min($this->z, $point->z);

        $rangeX = $maxX - $minX;
        $rangeY = $maxY - $minY;
        $rangeZ = $maxZ - $minZ;

        return sqrt($rangeX ** 2 + $rangeY ** 2 + $rangeZ ** 2);
    }
}
