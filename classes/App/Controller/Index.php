<?php
namespace App\Controller;

use Fixin\Controller\HttpActionController;
use Fixin\Delivery\Cargo\HttpCargoInterface;

class Index extends HttpActionController
{
    public function indexAction(HttpCargoInterface $cargo): HttpCargoInterface
    {
        return $cargo->setContent('Hello, World!');
    }
}
