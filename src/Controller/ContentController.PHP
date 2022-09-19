<?php
namespace Dileepn0536\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContentController extends AbstractController
{
    public function index(string $str="Noting")
    {
        return $str;
    }
}
?>