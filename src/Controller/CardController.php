<?php

namespace App\Controller;

use App\Services\Creator\CardCreator;
use App\Services\Game\CardSorting;
use App\Services\Game\SortingLogic;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="card")
 */
class CardController extends AbstractController
{
    /** @var CardCreator $cardCreator */
    private $cardCreator;

    /** @var CardSorting $cardSorting */
    private $cardSorting;

    public function __construct(CardCreator $cardCreator, CardSorting $cardSorting)
    {
        $this->cardCreator = $cardCreator;
        $this->cardSorting = $cardSorting;
    }

    public function __invoke(): Response
    {
        // Create random set of 10 cards
        $firstCardSet = $this->cardCreator->initCard();

        return $this->render('card/index.html.twig', [
            'symbolOrderingStructure' => SortingLogic::SYMBOL,
            'valueOrderingStructure' => SortingLogic::VALUES,
            'firstCardSet' => $firstCardSet,
            'sortedCards' => $this->cardSorting->sortBySortingLogic($firstCardSet),
        ]);
    }
}