<?php


namespace App\classes;
use App\classes\Category;
use App\classes\Brand;


class Home
{
//    Importing trait inside class. We can use multiple trait using comma(,)
    use Category, Brand;

    public $name = 'BITM';
    protected $city = 'Dhaka';
    private $country = 'Bangladesg';
    public static $contact = '34567';

    public static function edit(){
        echo "in edit";
    }

    public function index(){
//        After importing trait we can use it's property as usual way
//        $this->add();
        $this->goal();

//        we can use private resource inside public resource and use it from view
//        echo $this->manage();

//        to grab static property $contact, we have to use scope resolution operator(::)
//        echo self::$contact;
//        self::edit();
    }

    private function manage(){
        echo "Hello Laravel";
    }
}