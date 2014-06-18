<?php

namespace Wayci\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$request = $this->getRequest();
 		$locale = $request->getLocale(); 	

        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('FrontendBundle:Comercio')->findAll();

        if (!$entity) {
           throw $this->createNotFoundException('Unable to find Comercio entity.');
        }

        return $this->render('FrontendBundle:Default:index.html.twig', array('lenguaje' => $locale,'entities' => $entity));
    }

    public function estaticaAction($name)
    {
    	$request = $this->getRequest();
 		$locale = $request->getLocale();
        return $this->render('FrontendBundle:Default:'.$name.'.html.twig', array('lenguaje' => $locale));
    }

    /**     
     * @Route("/ciudades", name="select_ciudades")
     * @Template()
     */ 
    public function ciudadesAction()
    {
        $pais_id = $this->getRequest()->request->get('pais_id');
        $em = $this->getDoctrine()->getManager();
        $ciudades = $em->getRepository('BackendBundle:Ciudad')->findByPaisId($pais_id);        
        return $this->render('FrontendBundle:Default:ciudades.html.twig', array('ciudades' => $ciudades));
    }
    
    /**     
     * @Route("/distritos", name="select_distritos")
     * @Template()
     */ 
    public function distritosAction()
    {
        $ciudad_id = $this->getRequest()->request->get('ciudad_id');
        $em = $this->getDoctrine()->getManager();
        $distritos = $em->getRepository('BackendBundle:Distrito')->findByCiudadId($ciudad_id);        
        return $this->render('FrontendBundle:Default:distritos.html.twig', array('distritos' => $distritos));
    }
}
