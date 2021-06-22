<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class QuestionController extends AbstractController{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response("what a bewitching controller we have conjured!");
    }
    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug){

        $answers = [
            'Make sure your cat is sitting purrrfectly still',
            'Honestly, I like furry shoes better than My cat',
            'Maybe... try saving the spell backwards?',
        ];
        return $this->render('question/show.html.twig',[
            'question'=>ucwords(str_replace('-',' ',$slug)),
            'answers'=>$answers
        ]);
        // return new Response(sprintf
        //     ('Future page to show the question "%s"!',
        //         ucwords(str_replace('-',' ',$slug))
        //     ));
    }

}