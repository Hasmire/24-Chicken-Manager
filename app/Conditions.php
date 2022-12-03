<?php

$cpromo = new \Darryldecode\Cart\CartCondition(array(
    'name' => 'PROMO',
    'type' => 'promo',
    'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
    'value' => '-50',
));

$c1 = new \Darryldecode\Cart\CartCondition(array(
    'name' => 'Dine-in',
    'type' => 'order-type',
    'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
    'value' => '+10',
));

$c2 = new \Darryldecode\Cart\CartCondition(array(
    'name' => 'Take-out',
    'type' => 'order-type',
    'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
    'value' => '+15',
));

$c3 = new \Darryldecode\Cart\CartCondition(array(
    'name' => 'Delivery',
    'type' => 'order-type',
    'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
    'value' => '+50',
));
