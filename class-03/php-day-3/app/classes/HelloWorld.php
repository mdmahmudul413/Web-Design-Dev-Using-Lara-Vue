<?php


namespace App\classes;


class HelloWorld
{
    public $message;

    public function __construct()
    {
        $this->message = 'Hello World';
    }

    public function index(){
        echo $this->message;
        echo '<br>';
        /*
         * The most important topic to work with php:
            1. Variable 2. Operator 3. Statement 4. Array

         * Variable
         * The rules for declaring php variable: There are 2 types of rules.
                a. Three major rules
                    * Starts with $
                    * We can use a-z, A-Z, 0-9, '-'
                    * No number in first
                b. Three Standard rules(standard rules are same for all language)
                    * Start with small letter
                    * Meaning full
                    * Readable
         * Operator
         * Operator: 4 types of operator
            a. Arithmetic operator: +, _, *, /, %, ++, __, (-)(negation)
            b. Assignment operator: =, +=, _=, *=, /=, %=, .=
            c. Conditional operator: >, <, >=, <=, ==, !=, ===, !==
            d. Logical operator: &&, || , !
         * */

        echo gettype($this->message);

    }
}