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
use AppBundle\Entity\indexPage;
use AppBundle\Entity\Contact;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Map;

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
        $indexPages = $em->getRepository('AppBundle:indexPage')->findAll();
        
        return $this->render('default/index.html.twig', array(
                'annonces' => $annonces,
                'type_Annonces' => $type_Annonces,
                'mentionlegales' => $mentionlegales,
                'rubriques' => $rubriques,  
                'indexPages' => $indexPages,
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

    /**
     * Finds and displays a annonce entity.
     *
     * @Route("annonce/{id}", name="annonce_show_id")
     * @Method("GET")
     */

    public function annonceIdAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $annonce = $this->getDoctrine()
            ->getRepository(Annonce::class)->find($id);
        $annonces = $em->getRepository('AppBundle:Annonce')->findAll();
        $type_Annonces = $em->getRepository('AppBundle:Type_Annonce')->findAll();
        $mentionlegales = $em->getRepository('AppBundle:MentionLegale')->findAll();
        $rubriques = $em->getRepository('AppBundle:Rubrique')->findAll();
        
        return $this->render('default/annonceid.html.twig', array(
                'annonce' => $annonce,
                'annonces' => $annonces,
                'type_Annonces' => $type_Annonces,
                'mentionlegales' => $mentionlegales,
                'rubriques' => $rubriques,
        ));
        
    }


    /**
     * Finds and displays a rubrique entity.
     *
     * @Route("/annonce", name="annonce_show")
     * @Method("GET")
     */

    public function annonceAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository('AppBundle:Annonce')->findAll();
        $type_Annonces = $em->getRepository('AppBundle:Type_Annonce')->findAll();
        $mentionlegales = $em->getRepository('AppBundle:MentionLegale')->findAll();
        $rubriques = $em->getRepository('AppBundle:Rubrique')->findAll();
        
        return $this->render('default/annonce.html.twig', array(
                'annonces' => $annonces,
                'type_Annonces' => $type_Annonces,
                'mentionlegales' => $mentionlegales,
                'rubriques' => $rubriques,
        ));
    }

    /**
     * Finds and displays a contact entity.
     *
     * @Route("/contact", name="contact_show")
     * @Method("GET")
     */

    public function contactAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $mentionlegales = $em->getRepository('AppBundle:MentionLegale')->findAll();
        $rubriques = $em->getRepository('AppBundle:Rubrique')->findAll();
        $contacts = $em->getRepository('AppBundle:Contact')->findAll();
        
        return $this->render('default/contact.html.twig', array(
                'mentionlegales' => $mentionlegales,
                'rubriques' => $rubriques,
                'contacts' => $contacts,
        ));
    }

    /**
     * Finds and displays a mentionlegale entity.
     *
     * @Route("/mentionlegale", name="mentionlegale_show")
     * @Method("GET")
     */

    public function mentionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $mentionlegales = $em->getRepository('AppBundle:MentionLegale')->findAll();
        $rubriques = $em->getRepository('AppBundle:Rubrique')->findAll();
        $mentionlegales = $em->getRepository('AppBundle:MentionLegale')->findAll();
        
        return $this->render('default/mentionlegale.html.twig', array(
                'mentionlegales' => $mentionlegales,
                'rubriques' => $rubriques,
                'mentionlegales' => $mentionlegales
        ));
    }
}

