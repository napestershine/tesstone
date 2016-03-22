<?php

namespace WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // now extremally close watch
        // explanation:
        /**
         * symfony has high level form builder, if you have ever programmed in java, you should be familiar,
         * symfony forms are very objective. what this means is:
         * you havfe view, and have entity, and you have map input fields with entyti, so you create your own form
         * builder with validation, and so on. so any data passed via post should remap again to that antity that revalidate data over http
         *
         */
        $formFactory = $this->get('fos_user.registration.form.factory');
        $form = $formFactory->createForm();
        return $this->render('WebBundle:Default:index.html.twig',
            [
                'form' => $form->createView()
            ]); // because now integrate fos bundle temple, it requires form variable
    }
}
