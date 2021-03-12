<?php

declare(strict_types=1);

namespace App\Services\Util;

class ArrayRandom
{
    /**
     * @return int|string
     */
    public function getArrayRandomValues(array $listValues)
    {
        return array_rand(array_flip($listValues));
    }
}