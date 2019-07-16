<?php

namespace pattern\AbstractFactory;

require_once "Product.php";


class ProductFactory
{
    const SHIPPING_COSTS = 50;

    public function createShippableProduct(int $price): ShippableProduct
    {
        return new ShippableProduct($price, self::SHIPPING_COSTS);
    }

    public function createDigitalProduct(int $price): Product
    {
        return new DigitalProduct($price);
    }
}
