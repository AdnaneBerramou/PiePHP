<?php
// src/Controller/AdvertController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;

/**
 * @Route("/advert")
 */
class AdvertController
{
  /**
   * @Route("/hello", name="oc_advert_index")
   */
  public function index(Environment $twig, Request $req)
  {
    $content = $twig->render('Advert/index.html.twig', ['name' => 'World']);
    return new Response($req->query->get('tag'));
  }

  /**
   * @Route("/lignes/{id}{o}", name="nb_saut_de_lignes", requirements={
   *    "id" = "\d{4}",
   *    "o"  = "\w{1}"
   * }, defaults={
   *    "o" = "a"
   * })
   */
  public function count($o, $id)
  {
    $str = '';

    for ($i=0; $i < $id ; $i++) {
        $str .= "$i => $o<br>";
    }

    return new Response($str);
  }

}