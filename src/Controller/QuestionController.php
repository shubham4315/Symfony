<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController{
    /**
     * @Route("/",name="app_homepage")
     */
    public function homepage(Environment $twigEnvironment){
        //return new Response("what a bewitching controller we have conjured!");
        
        //return $this->render('question/homepage.html.twig');
        $html = $twigEnvironment->render('question/homepage.html.twig');
        return new Response($html);
    }
    /**
     * @Route("/questions/{slug}",name="app_question_show")
     */
    public function show($slug){

        $answers = [
            'Make sure your cat is sitting purrrfectly still',
            'Honestly, I like furry shoes better than My cat',
            'Maybe... try saving the spell backwards?',
        ];

        dump($slug,$this);
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