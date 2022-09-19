<?php
// src/Acme/TestBundle/AcmeTestBundle.php
namespace App\Dileepn0536\TestBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TestBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}