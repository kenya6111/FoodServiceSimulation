<?php
    require_once 'FoodItems/FoodItem.php';
    require_once 'FoodItems/CheeseBurger.php';
    require_once 'FoodItems/Fettuccine.php';
    require_once 'FoodItems/HawaiianPizza.php';
    require_once 'FoodItems/Spaghetti.php';
    require_once 'FoodOrders/FoodOrder.php';
    require_once 'Persons/Customers/Customer.php';
    require_once 'Persons/Employees/Chef.php';
    require_once 'Persons/Employees/Cashier.php';
    require_once 'Persons/Employees/Employee.php';
    require_once 'Restaurant/Restaurant.php';

//FoodItem
$cheeseBurger =new CheeseBurger("cheese burger","  a burger with cheese on top ",4.9);
$fettuccine = new Fettucine("fettucine", "like a small ribon", 5.5);
$hawaiianPizza = new HawaiianPizza("hawaiannPizza", "taste of hawaiaan,", 8.8);
$spagetthi = new Spaghetti("spagetthi", "made in form of long ,thi String ", 2.5);


echo $cheeseBurger ->getName();
echo $cheeseBurger ->getExplanation();
echo $cheeseBurger ->getPrice();
echo "\n";
echo $fettuccine ->getName();
echo $fettuccine ->getExplanation();
echo $fettuccine ->getPrice();
echo "\n";
echo $hawaiianPizza ->getName();
echo $hawaiianPizza ->getExplanation();
echo $hawaiianPizza ->getPrice();
echo "\n";
echo $spagetthi ->getName();
echo $spagetthi ->getExplanation();
echo $spagetthi ->getPrice();
echo "\n";

$foodList = array(
    0 => $cheeseBurger,
    1 => $fettuccine,
    2 => $hawaiianPizza,
    3 => $spagetthi
);

$foodOrder = new FoodOrder($foodList);
print_r($foodOrder -> getItems());
print_r($foodOrder -> getOrderTime());

//シェフとキャッシャー
$kenya = new Chef("1","30","kenya tanaka",24,"tokyo");
$nadia = new Cashier("2","50","nadia",41,"tokyo");

$personList = array(
    $kenya,
    $nadia
);

//サイゼリア
$saizeriya = new Restaurant($foodList,$personList);

$interestedMap =[
    "Burger" => 1,
    "pasta" => 2,
];

$Tom = new Customer("tom" , 22, "saitama",$interestedMap);

$invoice = $Tom ->order($saizeriya);

$invoice -> printInvoiceDetails();







