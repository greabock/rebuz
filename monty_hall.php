<?php


function attempts($attempts): Generator
{
    while ($attempts--) {

        $doors = [false, false, false];

        $doors[random_int(0, 2)] = true;

        yield $doors;
    }
}


function choice($doors, $choice): array
{
    return [$doors[$choice], !$doors[$choice]];
}


function calculate($attempts)
{
    $chosenCount = 0;
    $otherCount = 0;

    foreach (attempts($attempts) as $doors) {
        [$chosen, $other] = choice($doors, random_int(0, 2));

        if ($chosen) {
            $chosenCount++;
        }

        if ($other) {
            $otherCount++;
        }
    }

    return [$chosenCount / $attempts * 100, $otherCount / $attempts * 100];
}

[$chosen, $other] = calculate(1000000);
echo "No change: $chosen%" . PHP_EOL;
echo "with change: $other%" . PHP_EOL;
