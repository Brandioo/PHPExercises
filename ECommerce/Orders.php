<?php

class Orders
{
    public $orderID;
//    public $product=[];
    public $product;
    public $quantity;
    public $orderDate;
    public $client;
    public $shippingMethod;

    /**
     * Orders constructor.
     * @param $orderID
     * @param $quantity
     * @param $orderDate
     */
    public function __construct($orderID, $quantity, $orderDate)
    {
        $this->orderID = $orderID;
        $this->quantity = $quantity;
        $this->orderDate = $orderDate;
    }

    /**
     * @param mixed $product
     */
    public function setProduct(Products $product): void
    {
        $this->product = $product;
    }

    /**
     * @param mixed $client
     */
    public function setClient(Client $client): void
    {
        $this->client = $client;
    }

    /**
     * @param mixed $shippingMethod
     */
    public function setShippingMethod(ShippingMethod $shippingMethod): void
    {
        $this->shippingMethod = $shippingMethod;
    }


}