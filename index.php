<?php
require_once 'StockManager.php';

$stock = new StockManager();
echo $stock->ajouterLot("1234567890123", "2027-01-01", 100);
echo "\n";

echo $stock->ajouterLot("123", "2027-01-01", 100);
echo "\n";

echo $stock->ajouterLot("1234567890123", "2020-01-01", 100);
?> 
