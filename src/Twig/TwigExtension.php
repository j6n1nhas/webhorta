<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class TwigExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('preco', [$this, 'formatPreco']),
            new TwigFilter('slugify', [$this, 'slugifica']),
        ];
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('slugit', [$this, 'slugIt']),
        ];
    }

    public function slugIt(array $args): string
    {
        $result = '';
        foreach($args as $arg)
        {
            if($result != '')
                $result = $result.'-'.$arg;
            else
                $result = $arg;
        }
        return $result;
    }

    public function slugifica(string $args): string
    {
        $args = explode(' ', $args);
        $result = '';
        foreach($args as $arg)
        {
            if($result != '')
                $result = $result.'-'.$arg;
            else
                $result = $arg;
        }
        return $result;
    }

    public function formatPreco(float $numero, int $decimal = 2, string $decimalSep = ',', string $milSep = '.'): string
    {
        $preco = number_format($numero, $decimal, $decimalSep, $milSep);
        return $preco."€";
    }
}