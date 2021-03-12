<?php

declare(strict_types=1);

namespace App\Services\Game;

class SortingLogic
{
    /**
     * array containing the order we want for the symbols
     */
    public const SYMBOL = [
        'club',
        'diamond',
        'spade',
        'heart'
    ];

    /**
     * array containing the order we want for the values
     * Here it will order by impair first then by pair numbers
     */
    public const VALUES = [
        'ace',
        '3',
        '5',
        '7',
        '9',
        'jack',
        'king',
        '2',
        '4',
        '6',
        '8',
        '10',
        'queen'
    ];
}