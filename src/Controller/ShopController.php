<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class ShopController
{
    /** @var EngineInterface */
    private $templatingEngine;

    public function __construct(EngineInterface $templatingEngine)
    {
        $this->templatingEngine = $templatingEngine;
    }

    public function shop(Request $request): Response
    {
        return $this->templatingEngine->renderResponse('@SyliusShop/ShopPage/index.html.twig');
    }

    public function about(Request $request): Response
    {
        return $this->templatingEngine->renderResponse('@SyliusShop/AboutPage/index.html.twig');
    }
}

