<?php

namespace WebBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use WebBundle\Form\CustomType;

/**
 * Class WebController
 *
 * @Route("/web")
 * @package WebBundle\Controller
 */
class WebController extends Controller
{
    /**
     * This action throws
     * Expected argument of type "null", "Symfony\Component\HttpFoundation\Request" given
     *
     * @Route("/error")
     * @param Request $request
     * @return Response
     */
    public function errorAction(Request $request)
    {
        $form = $this->createForm(CustomType::class);
        $form->handleRequest($request);

        return new Response("OK");
    }

    /**
     * This action throws an action
     * Expected argument of type "null", "Symfony\Component\HttpFoundation\Request" given
     *
     * @Route("/no-error")
     * @param Request $request
     * @return Response
     */
    public function noError(Request $request)
    {
        $form = $this->createForm(ChoiceType::class);
        $form->handleRequest($request);

        return new Response("OK");
    }
}