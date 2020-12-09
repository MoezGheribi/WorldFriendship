<?php

namespace ForumsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Forums/Default/forums.html.twig');
    }
    public function listAction()
    {
        return $this->render('@Forums/Default/list.html.twig');
    }
    public function commentAction()
    {
        return $this->render('@Forums/Default/comment.html.twig');
    }
}
