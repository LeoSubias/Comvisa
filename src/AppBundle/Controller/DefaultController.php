<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\MentionLegale;
use AppBundle\Entity\Type_Annonce;
use AppBundle\Entity\Rubrique;
use AppBundle\Entity\Annonce;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository('AppBundle:Annonce')->findAll();
        $type_Annonces = $em->getRepository('AppBundle:Type_Annonce')->findAll();
        $mentionlegales = $em->getRepository('AppBundle:MentionLegale')->findAll();
        $rubriques = $em->getRepository('AppBundle:Rubrique')->findAll();
        
        return $this->render('default/index.html.twig', array(
                'annonces' => $annonces,
                'type_Annonces' => $type_Annonces,
                'mentionlegales' => $mentionlegales,
                'rubriques' => $rubriques,
        ));
    }

    /**
     * Finds and displays a rubrique entity.
     *
     * @Route("rubrique/{id}", name="rubrique_show")
     * @Method("GET")
     */

    public function rubriqueNameAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $rubrique = $this->getDoctrine()
            ->getRepository(Rubrique::class)->find($id);
        $rubriques = $this->getDoctrine()->getRepository(Rubrique::class)->findAll();


        return $this->render('default/rubrique.html.twig', array(
            'rubrique' => $rubrique,
            'rubriques' => $rubriques,
            
            
        ));
        
    }
}

