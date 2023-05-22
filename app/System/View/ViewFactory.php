<?php

namespace App\System\View;

class ViewFactory
{
    public function build(string $path, array $attributes = []): \Twig\Environment
    {
        $loader = new \Twig\Loader\FilesystemLoader('./views/');
        $twig = new \Twig\Environment($loader, [
            'cache' => '/tmp/compilation_cache',
        ]);

        return $twig;
    }
}
