<?php
/**
 * Created by PhpStorm.
 * User: micpi
 * Date: 01/12/2018
 * Time: 15:05
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends  AbstractController
{
    /**
     * @Route("/utilisateur", name="user_index")
     */
    public function index(): Response
    {
        return $this->render('utilisateurs/user.html.twig');
    }
}