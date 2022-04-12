<?php
session_start();
$addToOrders=$_SESSION['addToOrders'];
$i=$_SESSION['i'];
include "../models/Db.php";
include "../controllers/addOrderContr.php";
$addO = new addOrderContr($addToOrders, $i);
//get order id
$addO->getOrder();
//add to order
$addO->addOrder();
//update tires
$addO->update_qty();
//delete in cart
$addO->deleteCart();

header("Location: ../index.php?success=addToOrder");
?>