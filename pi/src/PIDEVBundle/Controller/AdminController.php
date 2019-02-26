<?php

namespace PIDEVBundle\Controller;

use PIDEVBundle\Entity\Session;
use PIDEVBundle\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{


    public function readUserAction()
    {
        $em=$this->getDoctrine()->getManager();
        $users = $em->getRepository(Utilisateur::class)->findAll();
        return $this->render('PIDEVBundle:Admin:UserList.html.twig',array(
            'users'=>$users));

    }

    public function deleteUserAction($id,$etat)
    {
        $em=$this->getDoctrine()->getManager();
        $user = $em->getRepository(Utilisateur::class)->find($id);
        if($etat == "true")
            $user->setEnabled(1);
        else
            $user->setEnabled(0);
        $em->flush();
        $users = $em->getRepository(Utilisateur::class)->findAll();
        return $this->redirectToRoute('ListeUser');
    }
    public function recherche2Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if ($request->isXmlHttpRequest())
        {
            $search = $request->get('search2');
            dump($search);
            $session = new Session();
            $repo= $em->getRepository(Session::class);
            $session = $repo->findAnnonce($search);
            return $this->render('PIDEVBundle:Admin:search2.html.twig', array(
                    'm' => $session,
            ));
        }

    }
}
