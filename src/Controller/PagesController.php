<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\Model;

class PagesController extends AbstractController
{
    /**
     * @Route("/pages/{name}", name="pages")
     */
    public function index($name)
    {   
    	$this->model = new Model;
    	$data = $this->model->GetPageData();
        return $this->render('pages/index.html.twig', [
            'my_page' => $data[$name],
            'page_data' => $data
        ]);
    }
}
