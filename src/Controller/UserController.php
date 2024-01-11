<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Proveedor;

class UserController extends AbstractController{

    /*public function getProveedores(){
        $em = $this->getDoctrine()->getManager();
        $listProveedores = $em->getRepository(Proveedor::class)->findBy([],['nombre' => 'ASC']);
        return $this->render('proveedor/proveedores.html.twig',[
            'listProveedores' => $listProveedores
        ]);
    }*/
    public function getProveedores(EntityManagerInterface $entityManager): Response
    {
        $listProveedores = $entityManager->getRepository(Proveedor::class)->findBy([], ['nombre' => 'ASC']);
        return $this->render('proveedor/proveedores.html.twig', [
            'listProveedores' => $listProveedores
        ]);
    }

}
 