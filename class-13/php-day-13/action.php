<?php

require_once "vendor/autoload.php";
use App\classes\Product;
use App\classes\Category;
use App\classes\Brand;

$category = new Category();
$categories = $category->getAllCategory();

$brand = new Brand();
$brands = $brand->getAllBrand();

if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        $product   = new Product();
        $products  = $product->getAllProducts();
        include 'pages/home.php';
    }
    elseif($_GET['page'] == 'detail'){
        $id = $_GET['id'];
        $product   = new Product();
        $singleProduct   = $product->getProductsById($id);
        include 'pages/detail.php';
    }
    elseif($_GET['page'] == 'categoryProducts'){
        $id = $_GET['id'];
        $product   = new Product();
        $categoryProducts   = $product->getProductsByCategory($id);
        include 'pages/categoryProducts.php';
    }
    elseif($_GET['page'] == 'brandProducts'){
        $id = $_GET['id'];
        $product   = new Product();
        $brandProducts   = $product->getProductsByBrand($id);
        include 'pages/brandProducts.php';
    }
}