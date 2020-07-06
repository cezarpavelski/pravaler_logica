<?php

namespace App\Usina;

class Usina
{
    private const TOTAL_LOSS_IN_SECONDS = 120;

    public function calculate(float $bulkCompare): int
    {
        return self::TOTAL_LOSS_IN_SECONDS - (($bulkCompare - 0.01) * self::TOTAL_LOSS_IN_SECONDS);
    }
}
