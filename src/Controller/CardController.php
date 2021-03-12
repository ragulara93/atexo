<?php

namespace App\Controller;

use App\Services\Creator\CardCreator;
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

    public function __construct(CardCreator $cardCreator)
    {
        $this->cardCreator = $cardCreator;
    }

    public function __invoke(): Response
    {
        // Create random set of 10 cards
        $firstCardSet = $this->cardCreator->initCard();
        // Display it
        // Put button to create sort
        // Sort sorted cards and display

//         dump(); die();

        return $this->render('card/index.html.twig', [
            'firstCardSet' => $firstCardSet,
        ]);
    }
}