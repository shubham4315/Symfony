<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController{
    /**
     * @Route("/comments/{id<\d+>}/vote/{direction<up|down>} , methods="POST")
     */
    public function commentVote($id, $direction,LoggerInterface $Logger){
        if($direction == 'up')
        {
            $Logger->info('Voting up');
            $currentVoteCount = rand(7,100);
        }
        else{
            $Logger->info('Voting down');
            $currentVoteCount = rand(0,5);
        }

        return $this->json(['votes'=>$currentVoteCount]);
    }
}