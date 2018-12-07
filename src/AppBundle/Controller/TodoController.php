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
    public function listAction(Request $request){

        $entities = $this->getDoctrine()->getRepository("AppBundle:Todo")->findAll();

        return $this->render('todo/index.html.twig',
            array('entities' => $entities));


        $information = $this->getDoctrine()->getRepository("AppBundle:Info")->findAll();

        return $this->render('todo/index.html.twig',
            array('information' => $information));

    }


    /**
     * @Route("/", name="todo_inform")
     * @param Request $request
     * @param $information
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function informAction(Request $request){

        $information = $this->getDoctrine()->getRepository("AppBundle:Info")->findAll();

        return $this->render('todo/information.html.twig',
            array('information' => $information));

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
