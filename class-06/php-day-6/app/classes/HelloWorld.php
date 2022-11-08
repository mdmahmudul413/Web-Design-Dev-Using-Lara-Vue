<?php
namespace App\classes;

class HelloWorld
{
    public $message;
    public $i;
    public $data = [];

    public function __construct()
    {
        $this->message = "Hello World";
    }

    public function index(){
//        Repeated Statement(for, while, do while, foreach)
////        Repeated statement "for" example
//        for ($this->i = 10; $this->i > 15; $this->i++){
//            echo $this->message; //false condition
//        }

//        for ($this->i = 10; $this->i < 15; $this->i++){
//            echo $this->message . "<br>"; //true condition
//        }

//        To print 100 to 200
//        for ($this->i = 100; $this->i <= 200; $this->i++){
//            echo $this->i . " ";
//        }

//        To print 50 to 30
//        for ($this->i = 50; $this->i >= 30; $this->i--){
//            echo $this->i . " ";
//        }


////        Repeated statement "for" example
//        $this->i = 100;
//        while($this->i > 105){
//            echo $this->i . " "; // false condition
//            $this->i++;
//        }


//        $this->i = 100;
//        while($this->i < 105){
//            echo $this->i . "<br/>"; // true condition
//            $this->i++;
//        }

////        Repeated statement "do while" example

//        $this->i = 10;
//        do{
//            echo $this->i . ' ';//false condition but execute at least one time
//            $this->i++;
//        }while($this->i > 15);

//        $this->i = 10;
//        do{
//            echo $this->i . ' ';//true condition
//            $this->i++;
//        }while($this->i < 15);



//        Example of Array

//        This is not the real practice of array
//        $this->data = [10, 20, 30, 'BITM', 'BASIS', true, 100.200];
//        echo $this->data[9];


//        Now we will start the original practice array

//        This is not appropriate array
//        $this->data = ['Habib', 'habib@gmail.com','12345'];



//        But this is appropriate and meaningful array
//        suppose, we store a student details
//        $this->data = [
//            'name' => 'Habib',
//            'email' => 'habib@gmail.com',
//            'phone' => '12345'
//        ];


//        To print a single value
//        echo $this->data['name'];


////        To print all the value
//        foreach($this->data as $data){
//            echo $data . '  &nbsp;';
//        }

//        To print all the key and value
//        foreach($this->data as $key => $data){
//            echo $key . ':' . $data . '<br/>';
//        }



//        suppose, we store multiple students details
//        $this->data = [
//            0 => [
//                'name' => 'Habib',
//                'email' => 'habib@gmail.com',
//                'phone' => '12345'
//            ],
//            1 => [
//                'name' => 'Mahmud',
//                'email' => 'mahmud@gmail.com',
//                'phone' => '45254'
//            ],
//            2 => [
//                'name' => 'Riyad',
//                'email' => 'riyad@gmail.com',
//                'phone' => '674567'
//            ]
//        ];


//        To print a single value
//        echo $this->data[0]['name'] . '<br/>';
//        echo $this->data[0]['email'] . '<br/>';
//        echo $this->data[0]['phone'] . '<br/>';


//        To print only name
//        foreach ($this->data as $item){
//                echo $item['name'] . '<br/>';
//        }



//        To print all the value
//        foreach ($this->data as $key => $value){
//            echo ($key+1) . '.' . ' ';
//            foreach ($value as $key1 => $item){
//                echo $key1 .': '. $item . ' ';
//            }
//            echo '<br/>';
//        }



//        To print a specific index

//        foreach ($this->data as $key => $value){
//            if($key == 2){
//                echo ($key+1) . '.' . ' ';
//                foreach ($value as $key1 => $item){
//                    echo $key1 .': '. $item . ' ';
//                }
//                echo '<br/>';
//            }
//        }



//        To print a specific index

//        foreach ($this->data as $key => $value){
//            if($key == 2){
//                echo ($key+1) . '.' . ' ';
//                foreach ($value as $key1 => $item){
//                    echo $key1 .': '. $item . ' ';
//                }
//                echo '<br/>';
//            }
//        }



//        suppose, we store multiple students details and take multiple phone number

        $this->data = [
            0 => [
                'name' => 'Habib',
                'email' => 'habib@gmail.com',
                'phone' => [
                    'personal' => '12345',
                    'parent' => '1235'
                ]
            ],
            1 => [
                'name' => 'Mahmud',
                'email' => 'mahmud@gmail.com',
                'phone' => [
                    'personal' => '6543',
                    'parent' => '4567'
                ]
            ],
            2 => [
                'name' => 'Riyad',
                'email' => 'riyad@gmail.com',
                'phone' => [
                    'personal' => '567',
                    'parent' => '9876'
                ]
            ]
        ];



//        To print a specific index

        foreach ($this->data as $key => $value){
            echo ($key+1) . '.' . ' ';
            foreach ($value as $key1 => $item){
                if(is_array($item)){
//                    if we want to print just parent phone number
//                    echo $item['parent'];
                    echo $key1 . ':' . '[';
                    foreach ($item as $key2 => $v_item){
                        echo $key2 . ':' . $v_item . ' ';
                    }
                    echo ']';
                }
                else{
                    echo $key1 .': '. $item . ' ';
                }
            }
            echo '<br/>';

        }
















    }
}