<?php


namespace Drupal\first_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;


class FirstController extends ControllerBase {
    
     public function first() {
        return new Response('Hello My First Module');
     }
}