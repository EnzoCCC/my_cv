<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Formation;

use App\Entity\Experience;

use App\Entity\Loisirs;

use App\Entity\Competence;

class LoisirController extends AbstractController
{
    public function create()
    {
        $loisir = new Loisir();
        $form = $this->createForm(LoisirType::class, $loisir);
        
        return $this->render('loisir/create.html.twig', [
            'entity'=>$loisir,
            'form'=>$form->createView(),
            ]
        );
    }
}