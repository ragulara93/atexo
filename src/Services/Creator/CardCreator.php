<?php

declare(strict_types=1);

namespace App\Services\Creator;

use App\Entity\Card;
use App\Services\Util\ArrayRandom;

class CardCreator
{
    /** @var ArrayRandom $arrayRandom */
    private $arrayRandom;

    public function __construct(ArrayRandom $arrayRandom)
    {
        $this->arrayRandom = $arrayRandom;
    }

    public function initCard(): array
    {
        $cards = array();

        $i = 0;
        while ($i < 10) {
            $cards[] = [
                "value" => $this->arrayRandom->getArrayRandomValues(Card::VALUES),
                "symbol" => $this->arrayRandom->getArrayRandomValues(Card::SYMBOL)
            ];
            $i++;
        }

        return $cards;
    }
}