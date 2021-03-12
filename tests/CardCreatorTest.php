<?php

declare(strict_types=1);

namespace App\Tests;

use App\Entity\Card;
use App\Services\Creator\CardCreator;
use App\Services\Util\ArrayRandom;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Prophecy\PhpUnit\ProphecyTrait;
use Prophecy\Prophecy\ObjectProphecy;

class CardCreatorTest extends TestCase
{
    use ProphecyTrait;

    public function testCreateSetOfCards(): void
    {
        /** @var ArrayRandom|ObjectProphecy $arrayRandom */
        $arrayRandom = $this->prophesize(ArrayRandom::class);

        $cardCreator = new CardCreator($arrayRandom->reveal());

        $result = $cardCreator->initCard();

        $this->assertCount(10, $result);
        $this->assertIsArray($result);
        $arrayRandom->getArrayRandomValues(Argument::exact(Card::VALUES))->shouldBeCalledTimes(10);
        $arrayRandom->getArrayRandomValues(Argument::exact(Card::SYMBOL))->shouldBeCalledTimes(10);
    }

}