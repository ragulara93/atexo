<?php

declare(strict_types=1);

namespace App\Services\Creator;

use App\Entity\Card;
use App\Services\Util\ArrayRandom;

class CardCreator
{
    /**
     * Setting const to set number of cards
     */
    private const NUMBER_OF_CARDS = 10;

    /** @var ArrayRandom $arrayRandom */
    private $arrayRandom;

    /**
     * CardCreator constructor.
     */
    public function __construct(ArrayRandom $arrayRandom)
    {
        $this->arrayRandom = $arrayRandom;
    }

    /**
     * Initialize array with a set of 10 cards picked randomly
     */
    public function initCard(): array
    {
        $cards = array();

        $i = 0;
        while ($i < self::NUMBER_OF_CARDS) {
            $cards[] = [
                "value" => $this->arrayRandom->getArrayRandomValues(Card::VALUES),
                "symbol" => $this->arrayRandom->getArrayRandomValues(Card::SYMBOL)
            ];
            $i++;
        }

        return $cards;
    }
}