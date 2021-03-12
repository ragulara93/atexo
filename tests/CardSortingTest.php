<?php

declare(strict_types=1);

namespace App\Tests;

use App\Services\Game\CardSorting;
use PHPUnit\Framework\TestCase;

class CardSortingTest extends TestCase
{
    public function testSortingCards(): void
    {
        $cardSorting = new CardSorting();

        $initialSetCard = [
            [
                "value" => "jack",
                "symbol" => "diamond"
            ],
            [
                "value" => 8,
                "symbol" => "spades"
            ],
            [
                "value" => "queen",
                "symbol" => "heart"
            ],
            [
                "value" => 9,
                "symbol" => "club"
            ],
            [
                "value" => 10,
                "symbol" => "diamond"
            ],
            [
                "value" => 4,
                "symbol" => "diamond"
            ],
        ];

        $expectedResult = [
            [
                "value" => 9,
                "symbol" => "club"
            ],
            [
                "value" => "jack",
                "symbol" => "diamond"
            ],
            [
                "value" => 4,
                "symbol" => "diamond"
            ],
            [
                "value" => 10,
                "symbol" => "diamond"
            ],
            [
                "value" => 8,
                "symbol" => "spades"
            ],
            [
                "value" => "queen",
                "symbol" => "heart"
            ],
        ];

        $this->assertSame($expectedResult, $cardSorting->sortBySortingLogic($initialSetCard));
    }

    public function testSortingEmptyCards(): void
    {
        $cardSorting = new CardSorting();

        $this->assertEmpty($cardSorting->sortBySortingLogic());
    }
}