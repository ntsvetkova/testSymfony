<?php
/**
 * Created by PhpStorm.
 * User: vkalachikhin
 * Date: 25.08.15
 * Time: 12:33
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class TestController extends Controller
{
    /**
     * @return Response
     */
    public function testAction() {
        $number = rand(1,31);

        return new Response(
            '<html><body>Number: ' . $number . '</body></html>'
        );
    }
}