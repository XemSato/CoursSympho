<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Post;
use App\Entity\Seller;
use App\Entity\Tag;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render(view: 'admin/dashboard.html.twig');
    }



    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('SymfonyCous');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Categories', 'fas fa-list', Category::class);
        yield MenuItem::linkToCrud('Sellers', 'fas fa-list', Seller::class);
        yield MenuItem::linkToCrud('Post', 'fas fa-list', Post::class);
        yield MenuItem::linkToCrud('Tags', 'fas fa-list', Tag::class);

    }
}
