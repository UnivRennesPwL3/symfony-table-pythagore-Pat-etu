<?php
namespace App\Controller;

use App\Utility\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PythagoreController extends AbstractController
{
    private $pythagoreUtility;

    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;
    }

    #[Route('/pythagore/view', name: 'pythagore_view')]  
    public function displayPythagoreAction(): Response
    {
        $pythagoreTable = $this->pythagoreUtility->display();

        return $this->render('displayPythagore.html.twig', [
            'pythagoreTable' => $pythagoreTable,
            'name' => 'Patrick MAUREL'
        ]);
    }
}