<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class TwigExtension extends AbstractExtension
{
    /**
     * @return array
     */
    public function getFilters()
    {
        return [
            new TwigFilter('preco', [$this, 'formatPreco']),
            new TwigFilter('slugify', [$this, 'slugifica']),
        ];
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('slugit', [$this, 'slugIt']),
            new TwigFunction('pluralize', [$this, 'pluralize']),
        ];
    }

    //Função que recebe uma string e consoante o argumento $num, pluraliza a string ou não
    public function pluralize(string $item, int $num=1)
    {
        if($num>1)
            return $item.'s';
        return $item;
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

    //Filtro para devolver o $numero formatado em preço em €uros
    public function formatPreco(float $numero, int $decimal = 2, string $decimalSep = ',', string $milSep = '.'): string
    {
        $preco = number_format($numero, $decimal, $decimalSep, $milSep);
        return $preco."€";
    }
}