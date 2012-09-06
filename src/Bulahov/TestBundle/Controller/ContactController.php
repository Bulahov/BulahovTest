<?php

namespace Bulahov\TestBundle\Controller;

use Bulahov\TestBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ContactController extends Controller
{
    
    public function indexAction(Request $request)
    {
        $message = '';
        $task = new Task();
        
        $form = $this->createFormBuilder($task)
                ->add('Subject', 'text')
                ->add('Body', 'textarea')
                ->add('Email', 'email')
                ->getForm();
        
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            if ($form->isValid()) {
                $mailer = $this->get('mailer');
                $message = \Swift_Message::newInstance()
                    ->setSubject($task->getSubject())
                    ->setFrom('temp@bulahov.com')
                    ->setTo($task->getEmail())
                    ->setBody("
Subject: " . $task->getSubject() . "
Email: " . $task->getEmail() .  "
Body: " . $task->getBody());
                if($mailer->send($message)) {
                    return $this->redirect($this->generateUrl('BulahovTestBundle_success'));
                } else {
                    $message = 'Сообщение не отправленно!';
                }
            }
        }
        
        return $this->render('BulahovTestBundle:Contact:index.html.twig', array('form' => $form->createView(), 'message' => $message));
    }
}
