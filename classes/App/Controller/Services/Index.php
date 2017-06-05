<?php
namespace App\Controller\Services;

use Fixin\Controller\HttpRestfulController;
use Fixin\Delivery\Cargo\HttpCargoInterface;

class Index extends HttpRestfulController
{
    public function getMethod(HttpCargoInterface $cargo): HttpCargoInterface
    {
        return $cargo->setContent(['answer' => 'Hello, World!']);
    }
}
