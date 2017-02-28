<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
  /**
  * @Route("/", name="welcome")
  */
  public function showAction(Request $request)
  {

    if (!$this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
      return $this->redirect($this->generateUrl('register'));
    }

    $repository = $this->getDoctrine()
    ->getRepository('AppBundle:UsersData');

    $a=$this->getUser()->getId();
    $query = $repository->createQueryBuilder('d')
    ->where('d.id = :uid')
    ->setParameter('uid', $a)
    ->orderBy('d.date', 'DESC')
    ->setMaxResults(1)
    ->getQuery();

    $lastdata = $query->getResult();

    $query = $repository->createQueryBuilder('d')
    ->where('d.id = :uid')
    ->setParameter('uid', $a)
    ->getQuery();




    return $this->render('default/index.html.twig', array(
      'lastdata' => $lastdata,
      'id'=> $a
    ));
  }
}
