<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SignInType;
use App\Form\SignUpType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    // #[Route('/login', name: 'app_login')]
    public function index(Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        $signInUser = new User();
        $signInForm = $this->createForm(SignInType::class, $signInUser);
        $signInForm->handleRequest($request);

        if ($signInForm->isSubmitted() && $signInForm->isValid()) {
            dd($signInForm);
        }

        $signUpUser = new User();
        $signUpForm = $this->createForm(SignUpType::class, $signUpUser);

        if ($signUpForm->isSubmitted() && $signUpForm->isValid()) {
            dd($signUpForm);
        }

        return $this->render('pages/login.html.twig', [
            "signInForm" => $signInForm,
            "signUpForm" => $signUpForm
        ]);
    }
}
