<?php

use src\Product\DigitalProduct;
use src\Product\PhysicalProduct;
use src\Product\ServiceProduct;

require_once "vendor/autoload.php";

// Creating physical products
$physicalProduct1 = new PhysicalProduct("iPhone 15", 1200.99, 1, 200);
$physicalProduct2 = new PhysicalProduct("iPhone 15 Pro", 1500.99, 2, 200);
$physicalProduct3 = new PhysicalProduct("iPhone 15 Pro Max", 1900.99, 1, 200);

// Creating digital products
$digitalProduct1 = new DigitalProduct("E-Book 1", 500.00, 3);
$digitalProduct2 = new DigitalProduct("Online Course", 200.00, 1);

// Creating service products
$serviceProduct1 = new ServiceProduct("EC2", 0.002, 8);
$serviceProduct2 = new ServiceProduct("Droplet", 0.0012, 10);

// Add items to cart
$cart = new src\Cart\Cart();
$cart->addProduct($physicalProduct1);
$cart->addProduct($physicalProduct2);;
$cart->addProduct($digitalProduct1);
$cart->addProduct($digitalProduct2);
$cart->addProduct($serviceProduct1);


// Get cart details
echo "Cart Details\n";
echo "================\n";
echo $cart->getCartDetails();

echo "Cart Total Amount : " . $cart->calculateTotalAmount();

// Remove item from cart
echo "\n================\n";
echo "Removing a non-existing product\n\n";
$cart->removeProduct($serviceProduct2);
echo "After removing item from cart\n\n";

echo $cart->getCartDetails();
echo "================\n";

// Promotion
echo "Applying promotion discount\n";
echo "Enter 1 for Black Friday Promotion or\n";
echo "Enter 2 for New Year Promotion : \n";

$promotionType = readline();

echo "Total Cart Amount Before Applying Promotion : " . $cart->calculateTotalAmount() . "\n";

switch ($promotionType) {
    case "1":
        $cart->applyPromotion(new \src\Promotion\BlackFridayPromotion());
        break;
    case "2":
        $cart->applyPromotion(new \src\Promotion\NewYearPromotion());
        break;
    default:
        echo "Invalid promotion type\n";
        break;
}

echo "================\n";
echo $cart->getCartDetails();
echo "Calculate Total Cart Amount After Applying Promotion : " . $cart->calculateTotalAmount() . "\n";