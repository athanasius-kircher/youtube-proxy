<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: boellmann
 * Date: 02.12.18
 * Time: 20:28
 */

namespace AthYoutubeProxy\Controller;


use Madcoda\Youtube\Youtube;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExploreYoutubeController extends AbstractController
{
    /**
     * @var string
     */
    private $youtubeApiKey;

    /**
     * ExploreYoutubeController constructor.
     * @param string $youtubeApiKey
     */
    public function __construct(string $youtubeApiKey)
    {
        $this->youtubeApiKey = $youtubeApiKey;
    }


    /**
     * @Route("/video-list")
     */
    public function videoList()
    {
        $youtube = new Youtube(array('key' => $this->youtubeApiKey));
        return $this->render('video/list.html.twig', [

        ]);
    }
}

{

}