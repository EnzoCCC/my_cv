<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Formation;

use App\Entity\Experience;

use App\Entity\Loisirs;

use App\Entity\Competence;

class LuckyController extends AbstractController
{
    public function number()
    {
        $number = random_int(0, 100);
        $formations = $this->getDoctrine()->getRepository(Formation::class)->findAll();
        $experiences = $this->getDoctrine()->getRepository(Experience::class)->findAll();
        $competences = $this->getDoctrine()->getRepository(Competence::class)->findAll();
        
        return $this->render('Lucky/number.html.twig', array(
            'number' => $number,
            'formations' => $formations,
            'experiences' => $experiences,
            'competences' => $competences
        ));
    }
    
    public function formation()
    {
        $form = new Formation();
        $form->setName('Ma formation');
        $eManager = $this->getDoctrine()->getManager();
        $eManager->persist($form);
        $eManager->flush();
        
        return $this->redirectToRoute('app_lucky_number');
    }
    
    public function experience()
    {
        $form = new Experience();
        $form->setName('Mes expériences');
        $eManager = $this->getDoctrine()->getManager();
        $eManager->persist($form);
        $eManager->flush();
        
        return $this->redirectToRoute('app_lucky_number');
    }
    
    public function competence()
    {
        $form = new Competence();
        $form->setName('Mes compétences');
        $eManager = $this->getDoctrine()->getManager();
        $eManager->persist($form);
        $eManager->flush();
        
        return $this->redirectToRoute('app_lucky_number');
    }
    
    public function loisirs()
    {
        $form = new Loisirs();
        $form->setName('Mes loisirs');
        $eManager = $this->getDoctrine()->getManager();
        $eManager->persist($form);
        $eManager->flush();
        
        return $this->redirectToRoute('app_lucky_number');
    }
    
    public function admin()
    {
        return $this->redirectToRoute('app_lucky_number');
    }
    
}