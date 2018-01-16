<?php 

namespace Sapp\Backend\Bundle\AdminBundle\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends BaseAdminController
{
	/**
	 * @var ContainerBuilder
	 */
	protected $container;

	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;
	}

    /**
     * @Route("/", name="easyadmin")
     * @Route("/", name="admin")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $this->initialize($request);

        if (null === $request->query->get('entity')) {
            return $this->render('@SappBackendAdmin/dashboard.html.twig');
        }

        return parent::indexAction($request);
	}

	public function createNewUserEntity()
	{
		return $this->container->get('fos_user.user_manager')->createUser();
	}

	public function prePersistUserEntity($user)
	{
		$this->container->get('fos_user.user_manager')->updateUser($user, false);
	}

	public function preUpdateUserEntity($user)
	{
		$this->container->get('fos_user.user_manager')->updateUser($user, false);
	}
}