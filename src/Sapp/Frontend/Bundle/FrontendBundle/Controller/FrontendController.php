<?php 

namespace Sapp\Frontend\Bundle\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontendController extends Controller
{
	public function indexAction() 
	{
		return $this->render('SappFrontendFrontendBundle:Frontend:index.html.twig');
	}
}