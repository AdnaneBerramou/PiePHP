<?php
namespace Controller;

class AppController extends \Core\Controller
{
    public function indexAction($page = 1)
    {
        $page = intval($page);
        if(isset($_SESSION['id'])){
            header('Location: '.BASE_URI.'/login');
        } else {
            $films = \Core\ORM::pagination('film', $page);
            self::render('index', ['films' => $films['elements'], 'nbPages' => $films['nbPages'], 'currentPage' => $films['currentPage']]);
        }
    }
}