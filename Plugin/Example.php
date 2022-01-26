<?php


namespace Basic\Module\Plugin;

use Basic\Module\Model\ForTest;

class Example
{
//    public function beforeGetKey(ForTest $subject, ProductInterface $product, string $prefix = 'item')
//    {
//        $prefix = $product->getId() . '-'  . $prefix;
//        return [$product, $prefix];
//    }

//    public function afterGetKey(ForTest $subject, $result, ProductInterface $product, string $prefix = 'item')
//    {
//        return $result . ' ' . $product->getName();
//    }

    public function aroundGetContent(ForTest $subject, callable $proceed, ...$args)
    {
        $result =  $proceed(...$args);
        $result .= 'OK';
        return $result;
    }
}
