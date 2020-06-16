<?php
require_once 'CartListener.class.php';

/**
 * ConcreteObserverクラスに相当する
 */
class LoggingListener implements CartListener
{

    public function __construct()
    {
    }

    public function update(Cart $cart)
    {
        echo '<pre>';
        var_dump($cart->getItems());
        echo '</pre>';
    }
}