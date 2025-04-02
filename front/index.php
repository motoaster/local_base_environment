<?
$json = file_get_contents('http://api');
$obj = json_decode($json);

$products = $obj->products;
foreach($products as $product) {
    echo "<li>$product</li>";
}


phpinfo()
?>