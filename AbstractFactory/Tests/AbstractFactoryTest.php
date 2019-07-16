<?php
namespace pattern\AbstractFactory\Tests;

require_once "../DigitalProduct.php";
require_once "../ProductFactory.php";
require_once "../ShippableProduct.php";

use pattern\AbstractFactory\DigitalProduct;
use pattern\AbstractFactory\ProductFactory;
use pattern\AbstractFactory\ShippableProduct;

class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCanCreateDigitalProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createDigitalProduct(150);

        $this->assertInstanceOf(DigitalProduct::class, $product);
    }

    public function testCanCreateShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);

        $this->assertInstanceOf(ShippableProduct::class, $product);
    }

    public function testCanCalculatePriceForDigitalProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createDigitalProduct(150);

        $this->assertEquals(150, $product->calculatePrice());
    }

    public function testCanCalculatePriceForShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);

        $this->assertEquals(200, $product->calculatePrice());
    }
}
