<?php

namespace App\Entity;

class Card
{
    public const SYMBOL_NAME = "symbol";

    public const VALUE_NAME = "value";

    public const SYMBOL = [
        'heart',
        'club',
        'diamond',
        'spades'
    ];

    public const VALUES = [
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        'jack',
        'queen',
        'king',
        'ace'
    ];
}