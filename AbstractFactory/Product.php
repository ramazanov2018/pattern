<?php
namespace pattern\AbstractFactory;

interface Product
{
    public function calculatePrice(): int;
}