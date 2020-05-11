<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig');
    }

     /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('home/about.html.twig');
    }

     /**
     * @Route("/services", name="services")
     */
    public function services()
    {
        return $this->render('home/services.html.twig');
    }

     /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        /*MailerInterface $mailer
         $email = (new Email())
            ->from('3sympa@gmail.com')
            ->to('dah.kenangnon@gmail.com')
            ->subject('Message from Marronile.com')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');
        $mailer->send($email); */
        return $this->render('home/contact.html.twig');
    }

}
