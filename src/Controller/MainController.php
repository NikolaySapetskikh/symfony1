<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\Model;

class MainController extends AbstractController
{	
    /**
     * @Route("/main", name="main")
     */
    public function index()
    {
    	$this->model = new Model;
    	$data = $this->model->GetPageData();
    	return $this->render('main/index.html.twig', [
            'page_data' => $data
        ]);
    }
}