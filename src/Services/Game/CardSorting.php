<?php

declare(strict_types=1);

namespace App\Services\Game;

use App\Entity\Card;

class CardSorting
{
    /**
     * Sorting initial array with sorting logic order in 2 steps, first order by values then by symbols
     */
    public function sortBySortingLogic(array $firstCardSet = []): array
    {
        // sort by values first
        $sortedByValues = $this->sortByCardKey($firstCardSet, SortingLogic::VALUES, Card::VALUE_NAME);

        // sort by symbols
        return $this->sortByCardKey($sortedByValues, SortingLogic::SYMBOL, Card::SYMBOL_NAME);
    }

    /**
     * Sort array of cards by key (symbol or value)
     */
    private function sortByCardKey(array $cards, array $orderingArray, string $cardKey): array
    {
        $result = array();
        foreach ($orderingArray as $key => $position) {
            foreach ($cards as $key2 => $position2) {
                if ($position == $position2[$cardKey]) {
                    $result[] = $position2;
                }
            }
        }

        return $result;
    }
}