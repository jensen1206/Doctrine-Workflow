<?php

use ArtPicture\ORM\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

$container = require_once __DIR__ . '/dependency.php';


/** @var EntityManager $em */
$em = $container[EntityManagerInterface::class]();


// TODO find by ID
/** @var User $user */
try {
    $user = $em->find(User::class, 1);
} catch (Exception $e) {
    echo 'Exception abgefangen: ', $e->getMessage(), "\n";
    die();
}


// TODO Repository findAll
$findAll = $em->getRepository(User::class)->findAll();

$card_arr = [];
foreach ($findAll as $tmp) {
    foreach ($tmp->getCardProducts()->getIterator() as $cartProduct) {

        $card_item = [
            'username' => $tmp->getUsername(),
            'email' => $tmp->getEmail(),
            'product_title' => $cartProduct->getProduct()->getTitle(),
            'product_description' => $cartProduct->getProduct()->getDescription(),
            'product_price' => $cartProduct->getProduct()->getPrice(),
            'card_created' => date_format($cartProduct->getCreated(), "d.m.Y H:i:s")
        ];

        $card_arr[] = $card_item;
    }
}

print_r($card_arr);
