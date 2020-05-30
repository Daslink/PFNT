<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegisterController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $userPasswordEncoder){
        // 1) build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        // 2) handle the submit (will only happen an POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            //3) Encode the paswword (you could also do this via Doctrine listener)
            $paswword = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            //4) Save th User
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render(
            'registration/register.html.twig' ,
            array('form' => $form->createView())
        );

    }
    
}
