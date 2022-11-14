<?php

require_once "vendor/autoload.php";
use App\classes\Product;
use App\classes\Category;

$category = new Category();
$categories = $category->getAllCategory();

if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        $product  = new Product();
        $products = $product->getAllProducts();
        include "pages/home.php";
    }
    elseif($_GET['page'] == 'detail'){
        $id            = $_GET['id'];
        $product       = new Product();
        $singleProduct = $product->getProductsById($id);
        include "pages/detail.php";
    }
    elseif($_GET['page'] == 'category'){
        $id            = $_GET['id'];
        $product       = new Product();
        $categoryProduct = $product->getProductByCategoryId($id);
        include "pages/category-product.php";
    }
}