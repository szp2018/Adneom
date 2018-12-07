<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Todo;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TodoController extends Controller{


    /**
     * @Route("/", name="todo_list")
     * @param Request $request
     * @param $todos
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction(Request $request,$listevideos){

        $listevideos = $this->getDoctrine()
            ->getRepository('AppBundle:Todo')
            ->findAll();
            //->find($id);

        return $this->render('todo/index.html.twig',array(
            'listevideos'=>$listevideos,
            'name' =>'name',
            'id' =>'id',
        ));


    }

    /**
     * @Route("/todo/details/{id}", name="todo_details")
     */
    public function detailsAction($id,Request $request)
    {
        //return $this->render('todo/details.html.twig');

        $todo = $this->getDoctrine()
            ->getRepository('AppBundle:Todo')
            ->find($id);

        return $this->render('todo/details.html.twig',array(
            'todo'=>$todo
        ));

    }

}
