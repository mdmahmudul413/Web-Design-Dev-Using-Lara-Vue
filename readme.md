## **Class 1:**

    1. Difference between website and Web Application
        
        Everybody can access websites. But web application has limited access or predifined access.

    2. we can work with php language in two diferent ways.
        
        1. Procedural way 2. Object Oriented way

    3. Procedural Way vs Object Oriented way

        a. Procedural Way: There is no strick rules of programming in the Procedural way.

        b. Object Oriented way: There is a set of rules of programming in the Object Oriented way.

    4. The main things are about OOP

        a. Class b. Property c. Method d. Object

## **Class 2:**

    1. Changing the port of Apache server.

        There are so many ports in the ram xampp by default run in 80 port on ram. When port 80 is busy. Then we have to change the port to run apache server.

            How to change the port,

                1. Go to xampp control panel > Apache config
                2. In the file httpd.conf, find the line "Listen 80" and "ServerName    localhost:80"
                3. Then, change it like "Listen 8080" and "ServerName localhost:8080"
                4. Then, save it.
                5. Start the apache server.

    2. How to rename a folder.

        To rename a folder we should follow "php-day-2" or "php_day_2". "php-day-2" is a best practice.

    3. Capitalized and camelcase.

        Class name always should capitalized like "HelloWorld" and variable name should always be camelcase like "$helloWorld".

    4. Magic Method.

        The method that starts with "__" is called magic method. These methods are by default created by php. Magic methods are call automatically when class object is created. We can't change the spelling of magic methods.  example: __construct(){}, __destruct(){} etc.

    5. Own class object($this)

        '$this' is called the own class object. To catch the class property, we have to use '$this' keywords.

    6. String sign = ' ', " "

    7. Composer

        The dependency manager of php. PHP classes are resources. To load or manage php classes we need composer.

    8. "require", "require-dev", "autoload", "psr-4", "App\\", "app//"

        "require" 
        
            It contains the 3rd party resource details. Its only holds the details of 3rd party resource. The resources who don't change the file structure.

        "require-dev"
            
            It also contains the 3rd party resource details. It holds the details of 3rd party resource and also responsible for the changing of file structure.

        "autoload"
            
            From "autoload", we can know how the resources will automatically load.

        "psr-4"

            'psr-4' is a convention. It means its a Constitution of autoloading php resources.

        "App\\"
        
            This is the first word of class namespace.

        "app//"
    
            This is the name of 'app' folder of our file structure which is the root of 'classes' folder.
            
    9. Suggestion from IDE(phpstrom)

        To get suggestion from IDE we have to press ctrl + space.

    10. PHP opening(<?php) and closing(?>) 

        The script where we write only php codes, then if we want to ignore the php closing syntax, we can ignore it.

## **Class 3:**

    2. include, include_once, require, require_once

        include, include_once 
        
            These keywords are used to link that kind of php files where other codes like css, html etc. are available.

        require, require_once
        
            These keywords are used to link php files with other php files where only the php codes are available.

    3. Object Sign of PHP(->)

        In the form of php language, this is not a right arrow(->). This is php object sign.

    4. The standard writing style of creating an object

        The standard style of creating an object of an particular class is the variable name will same to the class name but variable name will be written in camelcase and the class name will be written in the capitalized form.

    5. camelCase, capitalized, Zend(The writing styles)

        camelCase: $helloWorld, 
        capitalized: $HelloWorld,  
        Zend: $hello_world

    6. The most important topic to work with php

        a. Variable 
        b. Operator 
        c. Statement 
        d. Array

    7. Variable

        variable is not a container. This is actually the name of the memory location.

    8. The rules for declaring php variable 

        There are 2 types of rules,

            a. Three major rules

                * Starts with $
                * We can use a-z, A-Z, 0-9, '-'
                * No number in first

            b. Three Standard rules(standard rules are same for all language)

                * Start with small letter
                * Meaning full
                * Readable

    9. variable = property = attribute

    10. function = method = behavior

    11. gettype() (built in function)

        This is a built in function of php which return the data type.

    12. Data Type

        Generally 4 types of data in php: 

            1. integer 
            2. double 
            3. string 
            4. boolean
            
    13. parse error, fatal error

        parse error: parse error means syntax error.

        fatal error: fatal error means logical error.

    14. concatenation sign(.)

        This is the string concatenation sign.

    15. &nbsp; (To take more than one space)

    16. Operator

        4 types of operator

            a. Arithmetic operator: +, _, *, /, %, ++, --, (-)(negation)
            b. Assignment operator: =, +=, _=, *=, /=, %=, .=
            c. Conditional operator: >, <, >=, <=, ==, !=, ===, !==
            d. Logical operator: &&, || , !

## **Class 4:**

    1. Class one to class three was repeated for the new comers.
    
## **Class 5:**

    1. Fatal error: Uncaught ArgumentCountError

        "Fatal error: Uncaught ArgumentCountError: Too few arguments to function App\classes\HelloWorld::__construct(), 
        0 passed" it means class constructor has some arguments but when class object is created then, no arguments pass.

    2. Declaring variable inside function is a bad practice

        Declaring variable inside function is a bad practice. We will declare variable as property inside class.

    3. Operator(Definition)

        Operators are some special syntax which are used to perform some execution inside our program.

    4. "echo $this->numberOne++;" Statement execution process:

        ==> A statement is created with 4 elements. Every programing language follow this thing.

            The elements are,

                1. syntax or keyword

                2. Value

                    a.fixed value: 10, 20, 30, 40
                    b.variable value: x = 10, x = 100(Both correct)

                3. Operator

                4. Expression: Expression is created with value and operator.

                    example: x + y = 20

        ==> In the above statement, here:

            1. syntax: "echo", "$", "this", "->", ";"
            2. Value: "$this->numberOne"(variable value)
            3. Operator: "++"
            4. Expression: "numberOne++"

        ==> "echo $this->numberOne++;" this is an statement. A statement executes in the server part by part.

             apache server first execute "echo $this->numberOne" then "++". So that firstly, we will see the general value of numberOne
             in the browser. Then apache server execute the incrementation "++". The incrementation will execute after the execution
             of "echo $this->numberOne". So now if we echo numberOne again, we will see the latest value.

        ==> "echo ++$this->numberOne;" Statement execution process: 
        
            In this case we will see the latest value in the browser because the incrementation will execute first.

    4. Arithmetic operator(Negation) example 

        Negation,

            x = 1;
            echo -x;(negation)
            result = -1

            x = -1;
            echo -x;(negation)
            result = 1

    7. Difference between Logical and other operator
    
        Other operators work with single value but Logical operator does not work with single value. Logical operator works with condition. 

    8. Behaviour of '&&', '||', '!':

        a. '&&', || operators work with at least two condition.

        b. There is a condition pattern
            
             If there are two conditions. The pattern will be 2^2=4 combination. If 3, the pattern will be 2^3=8 combination.

        c. When operator is &&. And there are two conditions.
        
            T && T = T
            T && F = F
            F && T = F
            F && F = F

        d. When operator is ||. And there are two conditions.

            T || T = T
            T || F = T
            F || T = T
            F || F = F

    
    10. False return blank in PHP in the browser.

    11. True return 1 in PHP in the browser.

    15. 3 types of statement

        a. Single Line Statement
        b. Conditional Statement
        c. Repeated Statement

    16. Single Line Statement

        $this->numberOne = 10;
        $this->numberTwo = 20;
        $this->numberThree = 30;
        echo $this->numberOne;

    16. Syntax of conditional statement(if, if else, if else if, switch)

        Conditional Statement: Conditional Statements will work when a condition is true.

    17. Syntax of conditional statement

        a. if
        b. if else
        c. if else if
        d. switch

    17. Behaviour of conditional statement "if else if"

        This "if else if" conditional scope will execute the first statement which condition is true. After executing the first statement
        which condition is true, it will not execute the remaining true condition. But if we create the conditional block with only 
        "if" syntax than, all the true condition statement will execute.

    18. Behaviour of conditional statement "switch"

        When switch get the first true case then, it will find only the 'break;'. So that if we don't use 'break;' then switch will execute all of the statement after the true case.
    
## **Class 6:**

    1. Works of a constructor

        The main work of a constructor is to assign value to the property. Another is to ensure the database connection.

    2. Repeated Statement

        1.for
        2. while
        3. do while
        4. foreach

    3. Repeated statement "for" example

        for ($this->i = 10; $this->i > 15; $this->i++){

            echo $this->message;

        }

        There are three parts in a for loop

            1. Initialization: $this->i = 10;

            2. Condition: $this->i > 15;

            3. Increment/Decrement: $this->i++

            Note: In the for loop if the condition is false, it will not enter the loop block or will not execute the statements inside for loop.

    4. Working process of "for" loop

        ==> We will consider the execution of upper for loop.

            There are three parts in a for loop. At first for loop initialize the variable "$this->i = 10;". so now the value of $i is 10.
            Then it will consider the condition part "$this->i > 15;". If the condition is true then, it will enter the loop block otherwise not.
            Here condition is false. If the condition was true, it will enter the loop block and execute the statement. After execution now it will
            consider the increment/decrement part "$this->i++". After increment $i with 1 now the value of $i is 11. Now again it will consider the condition.
            After that if the condition true, it will  enter the for loop block and execute the statement. Then again it will consider the increment/decrement
            part. Then it will consider the condition part. And if the condition again true, it will enter the for loop block and execute the statement and so
            on until the condition false.

    5. "for" loop is working anti clock wise behavior

        In the above execution of "for" loop initialization($this->i = 10;) this part will execute only one time. Then condition($this->i > 15;) part
        will execute. If condition true than, it will enter the loop block then increment/decrement part will execute. Then condition, then loop block
        then increment/decrement and so on. so it is circling like anti clock wise.

    6. Repeated statement "while" example

        $this->i = 100;

        while($this->i < 105){
             echo $this->i . " ";
             $this->i++;
        }

        *** while loop is same as for loop.

            1. Initialization = $this->i = 100;
            2. condition = while($this->i < 105)
            3. Increment/Decrement: $this->i++;

            Note: If the condition false, it will not execute the statements inside the loop.


    7. Ideal practice of writing HTML tag

        The tags that don't not have any closing tag, we should always use a slash(/) at that tag. Example: <br/>, <hr/>

    8. Characteristics of "do while"

        do while loop always run at least one time.

    9. Difference between "for, while" and "do while"

        for and while loop first check the condition then execute the statements but do while first time
        without checking the condition at least one time execute the statements. After executing the statements for the first time then
        "do while" loop check the condition. If condition true "do while" loop will continue iterating and if false "do while" loop 
        will break the iteration.

    10. Difference between "for, while, do while" and "foreach"

        "for, while, do while" is work with single valued property but "foreach" loop is work with multi valued property like array.

    11. Array

        Array is collection of data.

    12. Example of Array

    13. We use 4 types of data in php

        integer, string, double, boolean

    14. Warning: Array to string conversion

        If we directly echo an array this type of error will show. We have to consider array index to echo it. Without
        declaring an associative array, it will start from index 0.

    15. Warning: Undefined array key

        It means array key is undefined.

    16. Warning: Undefined property

        It means class property key is undefined.

    17. How to decrease memory loss in an array 

        We should store big integer like phone number in string form inside an array. It will decrease memory loss.

    18. Array Object Sign(=>)

    19. The Real Practice of Array(Vary Important)
    
## **class 7**

    2. Built in function "print_r()", "var_dump()"

    3. Use of html tag "<pre>"

    4. Global Array(Built in) of PHP

        For various reason, we have to pass data globally. For passing data globally, we can not use user created array. Because these user
        created array's access is limited. In this case we have to use global array. In PHP the global arrays are _POST, _GET, _SERVER, _SESSION, _COOKIE, _REQUEST, _ENV,
        _FILES.

    6. Built in function "header()" and it's meaning

        "header()" function is used To load another file from a specific file. This function accept a string.

        example:

            header("Location: action.php?page=home");

        In this statement,

            action.php   =    a php file
            ?            =    $_GET
            page=home    =    $_GET['page'] = 'home'

    7. Functionality of isset() 

        This is a built in function. It checks a variable has value or not.

    8. The use case of PHP and HTML

        To create a content, we use php and to show that content to the browser, we use html.

    9. What is HTML

        It's a tag based markup language. HTMl has 120± tags.

    10. Details about HTML default structure 

        <!doctype html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Document</title>
            </head>
            <body>
                <h1>This is a Heading.<h1/>
            </body>
            </html>

            Meaning of each tag:
            1. <!doctype html>: This determine that which version of html is using.
            2. <html><html/>: This is the mother tag of html.
            3. Total two parts in the html file. They are <head><head/> and <body><body/>
            4. In the <head> section the total things are supporting documents.
            5. <meta charset="UTF-8">: It mean's all language is supported.
            6. <meta name="viewport" ....>: To make it responsive.
            7. <meta http-equiv="X-UA-Compatible" ...>: This is responsible for browser issue.
            8. <title>Document</title>: It show the title of a page
            9.<body></body>: what we write inside body will appear in the browser.

    11. <link rel="stylesheet" href="style.css"/> Meaning

        rel = relation
        href = hyper reference

## **Class-8**

    3. Different way of declaring public property

        public $message
        public $blog;

        or,

        public $message, $blog;

    4. Common contants of any site

        Heading(<h1></h1>, <h2></h2>....), Paragraph(<p></p>), image(<img src="" alt="">).

    5. "../" Meaning

        "../" means one step upper directory.

    7. What is CSS?

        CSS is a class based stylesheet language.

    8. Basic syntex of CSS

        selector{
            property: value;
        }

    9. Three types of CSS selectors

        Three types of CSS selectors:
            1. HTML tags
            2. User defined name
            3. Special syntex

    10. Block level and Inline Elements

        Block level elements grab the full row. But inline elements doesn't grab the full row. It grabs the only the area which consume it's contents.

## **Class 9**
   
    2. The problem of adding additional height & width to the html elements

        When we add height and width to html elements, it does not get only the height & width. It also get same valued border and padding.

        suppose,

            .box-one{
                height: 300px;
            }

        So the box one class does not only get 300px heght. it also get 300px border and 300px padding. This is the limitation of html

        But first time the elements do not show the additional border and padding. When we use additional border and padding, 
        at that time the previous border and padding will add to the additional border or padding. That's why after adding 
        border or padding, the elements grow bigger and holds the excessive width and break the desired layout.

    3. Importance of CSS property "box-sizing: border-box;"

        border-box;": To eliminate the above problem of breaking down the desired layout,
        we have to use this CSS property "box-sizing: border-box;". This CSS property will remove the auto added
        border and padding.

    4. Disscuss some real life scenario of projects

        When the clients request us to create a website of their business then,
        our first concern as a web developer, should be the design outline or UI of the desired website. So that the first concern,
        make the layout structure. After successfully create the layout then the second concern is to create the contents of the
        website. Contents are like menu, sidebar, articles, paragraph, etc.

    5. Disscuss about CSS property Grid, Flex

        There are different types of CSS property to create the initial layout structure of
        a website name Grid, Flex. Both are popular.

    6. Grid system makes the screen full width equally 12 times

        Grid system maintain some rules. It says us to assume the screen full width 100% and divide it equally 12 times. So each portion will grab 8.33% of width. 
        Now we will maintain the portions to attach the elements to the width. Suppose, manu will holds total 12 portions. So that it will grab 100%
        of width. Otherwise sidebar will hold 3 portions, so that it will grab 3 X 8.33 = 25% of total width.

    7. "border: 2px solid" will take by defaul color black

    8. We will not concern about height, our main concern is width

    9. CSS Rules for adding common property to the elements [class*='col-']{...}

        [class*='col-']

## **Class 10**

    1. Industry Certified Page Layout Structure

        If we mistakenly give wrong width value to html element. It may be break the layout. To eliminate this problem we have to wrap each and every element inside a row. 
        This is a global industry certified technic. If we follow this rule, globally none can underestimate us. This is the most important rule of writing any kind of code.

        Example:

            <div class="row">
                <div class="col-2 h-200">LOGO</div>
                <div class="col-10 h-200">BANNER</div>
            </div>

    3. Pseudo Element & Pseudo Class

        Pseudo Elements & Pseudo Classes will not work all the time. These will work in while occur a decent scenario.  Example: :before{}, :after{}, :hover{}, etc.

    4. Pseudo class, elements writing style in CSS version 2

        In CSS version 2 pseudo classes are written with a single colon ":" and
        pseudo elements are written with double colon "::".

    5. Pseudo class, elements writing style in CSS version 3

        In CSS version 3 pseudo class and elements both are written with single colon ":".

    6. Difference between pseudo class and pseudo element

        If we want to change full property of a html element then we use pseudo
        class. But when we want partial change to a html element then we use pseudo elements.

        Example:

            pseudo class,
                .test:hover{
                    color: white;
                    background-color: red;
                }

            pseudo element,
                .test:first-letter{
                    color: white;
                    background-color: red;
                }

    7. The work of pseudo element ":after"

        When we use :after pseudo property to a html element, It will add the properties which are
        written inside ":after" will apply after that particular html element.

    8. Standard naming

        Every name has a standard form. Whatever the name is, It can be a class name, element name, etc. example: container, row, col, etc

    9. We should not wrap everything inside a single container class

        Previously we wrap everything inside a single container.But now we should not wrap everything inside a single container class because every section has 
        different different css property like background color, etc. The sequence is immediate parent of column will row. Then immediate parent of row will container class.

            Example:
                container > row > column.

            Note: Container will give only the margin of our page.

    10. Every html elements has some default margin and padding

        For this reason we should add globally margin, padding zero.

        example:

            *{
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

    11. Use case of class Column, Row, Container

        Column
            
            Column class specifies the element size. It means what the size the element should be. Should it 12 like menu or 2/3 like sidebar.

        Row
        
            Row class wraps the columns. It will help not to enter other element to particular element.

        Container
            
            Container class gives a row a specific margin.

    12. Present standard of making a page SEO friendly(wrap the sections inside semantic tag)

        Now we are using html 5.
        Previous version of html, we don't think about it. But now we always think about the SEO of a web page. That's
        why we always wrap every sections inside a specific semantic element. This will make every page SEO friendly.
        Semantic elements are comes in html 5.

            Example:
                Header       = <header>...</header>
                Nabar        = <nav>...</nav>
                Sidebar      = <aside>...</aside>
                Main Content = <section>...</section>
                Footer       = <footer>...</footer>

    12. We always give background color in the semantic element
    
    13. Importance of writing Media Query code

        Media query is used to make web page responsive. A web developer have to
        write soo much media query. So media query is very important topic for a web developer.

    14. The rules of responsive in the small device

        The responsive rules of small devices is to make all elements full width(100%).

    15. max-width, min-width, media query syntax

        media query syntax,

        1. @media screen and (max-width: 800px){

           }

        2. @media screen and (min-width: 800px){

           }
           
    16. media query example

        a. (max-width: 800px)
        
            It means @media query css property will apply at maximum width till 800px.

        b. (min-width: 800px)
            
            It means @media query css property will apply at minimum width 800px and upper value.

## **Class 11**

    1. Difference between header and include

        Almost both are same. header redirect the compiler to another place but include
        load another file inside a specific file or location.

    2. How to include bootstrap inside our project

        1. Download the zip file from getbootstrap.com
        2. Extract it
        3. copy css and js file into our project assets directory
        4. link bootstrap.css file from css folder inside our page
        5. add bootstrap.bundle.js file from js folder inside script
           tag before the closing body tag inside our page.

    3. We should have a clear concept about menu bar

        After creating a project we have to update navbar multiple times. So that,
        we should have a clear idea or concept about our menu or navbar.

    4. Making a navbar using bootstrap 5.2

        Bootstrap classes in navbar,

            1. navbar = small padding;
            2. navbar-nav = disappear bullets + eliminate padding
            3. nav-link = disappear text decoration + padding + color
            4. navbar-expand = make manu element Straight
            5. navbar-dark = manu text color light
            6. bg-dark = backgroud dark
            7. me-auto/mx-auto/ms-auto: margin auto from right/  left, right/  left

    5. Making dropdown menu using bootstrap 5.2

        Bootstrap use dropdown.js jquery plugin to create dropdown menu. The js codes are written
        in bootstrap.bundle.js and we just add an attribute 'data-bs-toggle="dropdown"' to use those javascript codes.

        Example

            <li class="dropdown">
                <a href="" class="nav-link" data-bs-toggle="dropdown">Services</a>
                <ul class="dropdown-menu">
                    <li><a href="" class="dropdown-item">Service One</a></li>
                    <li><a href="" class="dropdown-item">Service Two</a></li>
                    <li><a href="" class="dropdown-item">Service Three</a></li>
                </ul>
            </li>
    6. Bootstrap Spacing(xs, sm, md, lg, xl, xxl)

        Bootstrap 5 has a wide range of responsive margin and padding utility classes.
        They work for all breakpoints
        
            xs (<=576px)
            sm (>=576px)
            md (>=768px)
            lg (>=992px)
            xl (>=1200px)
            xxl (>=1400px)

    8. Standard timing for carousel slider is 1800ms-2200ms

## **Class 12**

    1. Continue from the previous class(class 11)

    2. Creating card using Bootsrap 5.2

    3. Creating category class

    4. Creating product class

    5. Categories and Products are dynamically showing in the home page

    6. Creating detail.php page

    7. The common Bootstrap class of <section> is "py-5"

    8. href="action.php?page=detail&&id=5" meaning

        In the $_GET array:

        Array
        (
            [page] => detail
            [id] => 5
        )

        Note,

            1. ?  =  $_GET[] array
            2. && =  separator


## **Class 13**

    1. Repeat the previous class(class 12)

    2. Creating card using Bootsrap 5.2

    3. Creating Brand, Category, Home, Product class

    4. Categories and Products are dynamically showing in the home page

    5. Products can be filtered by Brand wise and Category wise 

## **Class 14**

    1. form-control, form-control-sm, form-control-md, form-control-lg

    2. Standard practice is to use </pre> tag when we use <pre> tag

    3. Tag name attribute standard

        <input type="text" class="form-control" id="last_number" name="last_number"/>

        Note: We should always use underscore "_" in the name attribute.

    4. Creating card using Bootsrap 5.2

    5. Created a simple php project that take user input first name, 
       last name and return full name in the input field.

    6. Give a Home Work to make a calculator

## **Class 15**

    1. Created a calculator which covers Operator, Statement & OOP

    2. Switch is more appropriate for implementing calculator logic

        For implementing calculator logic switch is more appropriate
        than if else because if else needs to check the condition which consume more time. But switch does not need to check
        condition and it's faster then if else.

## **Class 16**

    2. Security issues

        We should not give access to all class properties and methods from other files because of
        the security purpose. To secure the class properties and methods, we use encapsulation process in our class.

    3. Encapsulation

        when we declare the class methods and properties public then we can easily access all the properties
        and methods from other files. But if we add private or protected access modifiers to those properties and methods
        then, we can not access all the properties and methods. In this way, we can secure our classes. This process is
        called Encapsulation.

    4. Access Modifier(Public, Protected, Private)

    6. Two ways of inheritance:

        a. Importing the class

            Example:

                <?php
                    namespace App\classes;

                    use App\classes\User;

                    class Home
                    {

                    }

            Note: In this way, we have to create class object.

        b. Extend the parent class

            Example:

                <?php
                    namespace App\classes;
                    class Home Extends User
                    {

                    }

            Note:

                1.In this way, Home is a child class and User is a parent class. And now we don't need to import the class and also no need to make class object.

                2. In this way, we can access the public and protected properties and methods of parent class but private properties and methods can not be accessed by child. 

    7. Polymorphism

        When we want to use other class public and protected properties and methods then, we need polymorphism.
        In this way, we can also modify them.

    8. Similarity between inheritance and polymophism

        Inheritance and polymorphism are quite similar. The difference is, by the
        use of inheritance process we can use the protected and public properties and method of inherited class. On the other hand by the use of polymorphism, 
        we can also use them and moreover we can modify them.

    7. Interface

        We have to use interface inside class. We can not create object of interface inside view file. We can not declare property inside interface. 
        We can just declare method inside interface but we can not define those methods inside interface file. To use interface to another class, 
        we have to use "implements" keyword then, inside the class, we have to define those methods which are declared inside interface.

            Example:

                1. Interface: ExampleOne.php

                    <?php
                        namespace App\classes;
                        interface ExampleOne
                        {
                            public function one();
                            public function two();
                            public function three();
                        }
                
                2. class: Home.php

                    <?php
                        class Home Extends User implements  ExampleOne
                        {
                            public function __construct()
                            {
                                ...
                            }

                            public function one()
                            {
                                // TODO: Implement one() method.
                            }

                            public function two()
                            {
                                // TODO: Implement two() method.
                            }

                            public function three()
                            {
                                // TODO: Implement three() method.
                            }
                        }

            Note: Interface make functions more secure. A single class can implements multiple interfaces.

    8. Abstract Class

        We can declare a class abstract for secure the class. We can write anything in the abstract class like a normal class.
        But we can not create object of abstract class from view. We have to use abstract class inside other class like interface. We have to extend
        it from other class.

## **Class 17**

    1. Key information of abstract class, interface, etc

        1. We can not directly create object of abstract class and interface.
        2. We use abstract class and interface in other class.
        3. To import an interface inside a class, we implements it in that class.
        4. To import an abstract class inside a class, we have to extends it.
        5. A class can extends only one class.
        6. Child class can only access public and protected properties, methods of
        parent class.
        7. We can only access public property, methods of a class from view.
        
    2. Static, non static property and Method

         Example:

            1. Static resource

                public static $contact = '34567';

                public static function edit(){
                    return "in edit";
                }

            1. Non static resource

                public $contact = '34567';

                public function edit(){
                    return "in edit";
                }

    3. Scope resulotion operation(::)
    4. Own class object self
    5. Calling Static property, Methods from view

        We don't need to create object for calling static property, methods from view.
        We can have it like bellow. But if we create class object and use own class object "$this" to grab static property, method from
        view, it will also work but this is not the correct way of using static resource from view.

            Example:
                Home::edit();
                echo Home::$contact;

    6. Trait

        We use trait inside class.

    7. We should not create constructor inside abstract class, interface, trait
       etc.

       We should not create constructor inside abstract class, interface, trait etc because we can not create object of these things.

    8. Namespace(vertual path/directory of class)

    9. Starting Laravel

    10. MVC Theory(Model View Controller)

        MVC Theory(Model View Controller): MVC is the international pattern/standard of writing code.

    M = Model(Connected to database)
    V = View(The representation)
    C = Controller(Which loads view)

    Note: Model and Controller are in general two different class. The difference is, controller class is work with
    view using logic but model class is work with data. Model will always connect with database. At first controller
    gives user a view. Then view will request controller to give data and controller will request model to give
    that data from database. Finally Model will request database directly for data and sequentially database gives
    data to model, model to controller and finally controller to view. When we write code in this sequence, this
    will called MVC pattern.

    11. Route

        It decides when and which controller will start to working.

    12. The work flow of first load a laravel website

        First will run index.php. Then it will redirect it to route file and route will redirect it to the controller. Then controller will load the view.

    13. Laravel Installation

        Laravel Installation prerequisite

            1. Xampp(apache)
            2. Composer
            3. Laravel Installer(This is a package like composer)

    14. A Huge library of PHP(https://packagist.org/)

    16. First Demo project installation and run
    17. command: php artisan serve(To create a virtual server to run laravel project)

        When we make this command, Laravel project will build and then run a specific port.

    18. public/index.php will run first

    19. The work of predefine function define()

        This function declare global variable.

    20. Basic Understanding of the lines of code written in public/index.php

        1. Predefined function:  define('LARAVEL_START', microtime(true));

        2. Importing composer: require __DIR__.'/../vendor/autoload.php';

        3. Requiring boot file:  $app = require_once __DIR__.'/../bootstrap/app.php';

            Note: This bootstrap is not css framework bootstrap. This is like a configuration file. Suppose, when we boot our PC, some instruction
            in the rom which helps to boot up the pc. This bootstrap is kind of that type of instructions which helps laravel to start up.
            Basically this is a configuration file.

        4. predefine function exit() immediately stop the compiler

    21. Predefine function exit() immediately stop the compiler

    22. routes folder

        There are four files. They are api.php, channels.php, console.php, web.php. For general request we use web.php.

    23. Understanding the web.php file

        1. class: use Illuminate\Support\Facades\Route;

        2.  Route::get('/', function () {
                return view('welcome');
            });

        Note: This is a static function of Route class.

    24. Requiring vendor/autoload.php is not needed in all view file in laravel

        In public/index.php, 
        
            There vendor/autoload.php file is already imported. so that we don't need to require it again.

    25. http://127.0.0.1:8000/ This is main domain

    26. Main domain represents with "/"

    27. PHP Built in function view() mainly return view file

        Both are closely same.

            1. If use route()

                <a href="{{ route('contact') }}">contact</a>

                Note: string will be same as defined the route name.

            2. If use url()

                <a href="{{ url('/contact') }}">contact</a>

                Note: string will be same as defined the url name.
                Note: route() is recommended

    28. .blade is a Blade template engine

    29. create controller command: php artisan make:controller HomeController

    30. Built in function route() and url()
    

## **Class 18**

    1. public/index.php is mainly a configurational file

    2. 127.0.0.1:8000 is a base path or main domain

    3. Laravel project will not by default in MVC pattern

    4. Controller name standerd

        Controller name standard:

        Example: HomeController

        Note: The word controller will include inside the controller name.

    5. return view('home.index'); meaning

        This line will return index file at home directory inside view folder.

    6. All types of assets(css, js, img) files will be in the public folder

    7. {{asset('')}}/{{asset('/')}} means "http://127.0.0.1:8000/"

    8. "http://127.0.0.1:8000/" means root directory or public folder

    9. asset('') is a helper method of laravel framework

    10. {{ }} double curly brace means <?php echo ?>

    11. Mastering(The first priority task of any market place job)

    12. We always work with existing template

    13. For using existing template, normal bootstrap file link will not work.
        Thats why we do mastering

    14. Mastering also decrease same code copy pasting problem

    15. Standard name of main mastering file is "master.blade.php"

    16. @extends('') is a directive according to laravel which include file

    17. @yield('') is also a directive

    18. We can only use directives inside .blade file

    19. .blade is template engine

    20. Template engine means a class or package

    21. .blade template engine comes from php framwork name symphony framework

    22. .blade make the view files more powerfull


## **Class 19**

    1. Repeating previous class with additional topics

    2. After downlod laravel, first task is to make it MVC

    3. Standard practice is rename file like about.index, contact.index

    4. We can convert .webp image to .jpg by rename it .jpg

    5. Substr(string, start-index, length) is a php built in function 

    6. Full Name form submission Example

    7. @csrf token

## **Class 20**

    1. Creating a project of taking user input in a form and save it to database.

    2. Standard practice of writing url is like "/blog/add", "/blog/manage"

    3. Standard practice of writing route name is like name('blog.add'), name('blog.manage')

    4. These standard practices will make website SEO friendly

    5. Database Server: The place where we keep our data

    6. Popular database servers 

        1.Oracle 
        2.MsSQL 
        3.MySQL 
        4.MongoDB 
        5.FireBASE

    7. The very expensive database server is Oracle 

    8. We know MsSQL as SQL Server

    9. MsSQL is also a paid database server developed by Microsoft

    10. MySQL is open source database server

    11. MongoDB and FireBASE are also open source

    13. MongoDB is finedly cope up with NodeJS

    14. FireBASE s finedly cope up with Android

    15. Apache Server url: localhost

    16. MySQL Server url: localhost/phpmyadmin

    17. MySQL database Server wizard 

    18. Every database server has username and password 

    19. We can make new user of every database

    20. Database name and project name will be same

    21. Database naming standard, "day_20", "day_21", etc

    22. Table Name: Table name will be always in plural form

    23. Column Number: Column number will be minimum one more of the total input fields 

    24. Always the first column name will be "id" 

    25. Column id will controlled by system and it will be always a primary key(auto increment)

    26. Others column name will be as same as given in the name attribute of input fields

    27. Most used data types in the column are int, varchar, text, longtext etc

    28. varchar data type can contain at most 256 characters


    29. If we need more then 255 characters then the data type will be "text"

    30. If we need more then "text" than the data type will be longtext

    31. The long description of ecommerce will be longtext type

    32. Image column will be text type

    33. Column length 10 means at most 9999999999 row can be create 

    34. Int data type blocks the empty memory 

    35. Varchar data type does not block the empty memory 

    36. We don't have to give length in the text type column

    37. "id" column will be attribute = UNSIGNED, index = PRIMARY, A_I = checked

    38. Create model with migration command: php artisan make:model Blog -m

    39. In laravel every table should have a migration file

    40. And every table should also have a model

    41. Every migration file has two function up() and down()

    42. up() function is responsible for creating table    

    43. down() function is responsible for removeing table 

    44. id() function will create primary key "id" column

    45. In migration file string() function will make varchar type column

    46. timestamp() function will make date type column

    47. timestamps() function will make two date type columns name created_at & updated_at

    48. Executing migration file command: php artisan migrate

    49. config/database.php is database configurational file

    50. Chrome Extension json viwer installation

## **Class 21**

    1. In laravel we always make database table with migration
    
    2. In raw PHP, for working with database, there are three classes:
    
        a. mysql(Deprecated)
        b. mysqli
        c. PDO
    
    3. In laravel, for working with database, there are two classes:
        
        a. Eloquent ORM
        b. Query Builder
        
    4. Query Builder direct interact with database, it does not need Model
    
    5. Query Builder class(library) is created by Laravel
    
    6. Query Builder is a very powerfull library but, after using query builder the pattern will not in MVC form. Vary complex queries can be 
       written by query builder.
       
    7. ORM is a international standard library, this is not created by laravel. Those who work with C# or Java, have to work with ORM. They 
       don't have any other option.
       
    8. The first policy of ORM process is, every table must has a Model
    
    9. We always try to work with ORM, but if we need, we can move to query builder.
    
    10. migration table in the database is created by laravel. This table has the information of the migration files. The information is about 
        how many times the migration files have modified, etc 
        
    11. Request Class take the data from $_POST array and create a json object
    
    12. We have to use static property inside static method
    
    13. If we update any kind column information in our table, we should always do this through migration file.
    
    14. save() method writes data in the database. This function comes from parent class Model. We mainly called ORM of this Model class.
    
    15. In laravel, Session() is a global object
    
    16. Model property, methods should be static
    
    17. We should not print id in the view, we will print global object $loop->iteration for serial number

## **Class 22**

    1. Creating a project about blog data insert, update, delete inside database(continued from class 21)
    
    2. We can post two types of data from a form.
    
        a. Raw Data
        b. File Data
        
        
    3. Raw Data: To read some data, we don't need any additional program, these data are called raw data.
        
        Example: string, mobile number, address, etc
    
    
    4. File Data: To read some data, we need any kind of additional program, these data are called file data.
    
        Example: image, videos, pdf files, etc
            
            
    5. When we want to send file data from a form, then we have to add bellow line inside form,
        
        enctype="multipart/form-data"
        
        
    6. File data mainly is an object which has a size, name etc.
    
    7. After posting a form, raw data will insert into global array _POST() and file data will insert into global array _FILE() 
    
    8. Before moving image from some location to our project, it locate a temporary file location for a while.
    
    9. Both returns the same value which is mainly image object.
    
        a. return $request->file('image');
        b. return $request->image;
        
        Note: Both will return the temporary image file location. And its an object and we apply different functions using this image object.
        
        
    10. file() method of Request class is coming from symphony framework.
    
    11. Laravel Naming Convension:
    
        When model name is singular and table name plural, they will autometically conected to each other.
        
    
    12. We can break the naming convension rule by adding a line inside model. 
    
        Line is,
            
            protected $table = 'name-of-the-table';
            
            
    13. We should make function size always smaller
    
    
    14. Some methods for filltering data
    
        a. Get data in ascending order according to id
        
            public function manage(){
                    $this->blogs = Blog::all();
                    return Blog::orderBy('id', 'asc')->get();
            }
    
    
        b. Get data in descending order according to id
        
            public function manage(){
                    $this->blogs = Blog::all();
                    return Blog::orderBy('id', 'desc')->get();
            }
    
    
        c. Get the first row in descending order according to id
        
            public function manage(){
                    $this->blogs = Blog::all();
                    return Blog::orderBy('id', 'desc')->first();
            }
    
    
        d. Get the first row in descending order according to id
        
            public function manage(){
                    $this->blogs = Blog::all();
                    return Blog::find(16);
            }
            
          Note: When we need multiple rows, we have to add get() method.
    
    
        e. Get the last two rows in descending order according to id
        
            public function manage(){
                    $this->blogs = Blog::all();
                    return Blog::orderBy('id', 'desc')->take(2)->get();
                }
    
    
        f. Skip a row and then, get the last two rows in descending order according to id
        
            public function manage(){
                    $this->blogs = Blog::all();
                    return Blog::orderBy('id', 'desc')->skip(1)->take(2)->get();
            }
    
    
        g. Get the titles of the rows in descending order according to id
        
            public function manage(){
                    $this->blogs = Blog::all();
                    return Blog::orderBy('id', 'desc')->get(['title']);
            }
    
    
        h. We can add multiple columns
        
            public function manage(){
                    $this->blogs = Blog::all();
                    return Blog::orderBy('id', 'desc')->get(['title', 'author']);
            }
            
    
    15. We should not print the id number inside a table. We should print the serial number like this "{{$loop->iteration}}". $loop is a built in object. 
        It only works inside loop.
            
## **Class 23 (Mastering)**

    1. Officially start to build ecommerce project
    
    2. Basic mastering has been covered
    
    3. There is two parts of an ecommerce website
    
        a. Frontend
        b. Admin Panel
        
    4. To download paid template free, we need a software name "Httrack"
    
    5. The first controller name of a project should be renamed based on the project name

## **Class 24 (Admin Panel Part-1)**

    1. To create admin panel authentication, we will use a package name Jetstream. It's a recommanded package from laravel 
       for creating admin panel authentication. There are another authentication package is Laravel Breeze.
    
    2. jetstream.laravel.com is the official website of jetstream. It's mainly a website of a package.
    
    3. What is package?
        
        A package means a plugin. Inside a plugin, there can be different types of files. They are controllers/models, view, 
        css files. It means design, view, data, logic, etc all files can be included inside package.
        
    4. Installation of Jetstream
        
        step 1:
        
            command 1: composer require laravel/jetstream
            
            command 2: php artisan jetstream:install livewire
            
          Note: By this command 1, it will activate the logics of jetstream inside our project. But to get the supporting 
                view we have to give command 2.
        
        step 2:
            
            Connect project with a database and execute the created session migration file. Then, reload the project.
            
            
    5. Then hit the url 127.0.0.1:8000/login and 127.0.0.1:8000/register, if the login and register pages appear then it's ok otherwise no need to worry. 
       There is other process to register user.
    
    
    6. If the jetstream defualt login and register pages appear then, simply register an user.
    
    
    7. when we hit the url 127.0.0.1:8000/register, it will load resources/views/auth/register.blade.php and this file extends 
       resources/views/layouts/guest.blade.php file
       
    
    8. Actually we don't use the default jetstream login and register pages. We use our own login and register pages which is provided inside our admin template.
    
    
    9. How to register user without using jetstream default register page.
    
        step 1: 
        
            There is a file "database/factories/UserFactory.php" and inside this file there is a function name definition(), where fake user creation data
            are defined. Actually this file is given by default to create fake user inside database users table. If further we need to insert fake data to 
            another table inside database, we have to manually create factory file.
            
        step 2:
        
            There is a file "database/seeders/DatabaseSeeder.php" and inside this file there is a function name run(), where some lines of code are 
            commented. Actually these lines means how many fake row will insert to the database according to the definition of factory file.
            
          Note: To insert fake user into users table, laravel by default give us "UserFactory.php" file which helps to User model to insert fake data 
          to database. And the structure is defined inside "UserFactory.php" file. Finally to execute the "UserFactory.php" file, we have to 
          run "DatabaseSeeder.php" file. 
            
        step 3:
        
            Uncomment "\App\Models\User::factory(10)->create();"  this line.
            
          Note: factory(10), this 10 means 10 rows.
          
        
        step 4: 
        
            command: php artisan db:seed
            
          Note: Now 10 rows will create inside users table.
          
        
        step 5:
        
            Now again comment "\App\Models\User::factory(10)->create();"  this line.
            
          Note: If we don't comment this line again then, when we again make "php artisan db:seed" for other table data insertion, 10 more fake data
                will insert into users table on each command.
       
                
    10. Fake user password will "password"
    
    
    11. The routes of jetstream login and register are not coming from web.php file. The routes of jetstream package are written in 
        vendor/laravel/fortify/routes/route.php file
        
        
    13. Now copy the admin template login page html markup and paste it to resource/views/auth/login.blade.php
    
    
    14. **Importent: When we work with a template or theme, inside the css and javascript link, if there some kind of id is decleared, we will remove it. 
        Some time it may occure some problem.
        
        
    15. When we click on anchor tag <a href=""> Home </a>, it will active it's href="" attribute but if there is any attribute which name starts with "o" 
        letter inside anchor tag then, the attribute will active before href="" attribute.

    
    16. Jetstream default logout route is written in post method.


## **Class 25 (Admin Panel Part-2)**

    1. We customize Admin panel view in this part    
    
    2. We need Dashboard, Category, Sub Category, Brand, Unit, Product, Order, Customer, Company, User, etc module in the admin panel


## **Class 26 (Category Table Crud)**

    1. The idle practice is database table column name and input field name should be same.

    2. categories table fields

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->text('image');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });


## **Class 27 (Sub Category, Brand, Unit Crud)**

    1. The idle practice is database table column name and input field name should be same.
    
    2. sub_categories table fields

        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('name');
            $table->text('description');
            $table->text('image');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

     3. brands table fields
	
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('image');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

     4. units table fields

        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->text('description');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });


## **Class 28 (Product Module Crud)**

    1. Product Short Descriptions and long descriptions are firstly written in MS word.
    
    2. We have to use smart editor in the description field. 

    3. products table fields

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('brand_id');
            $table->integer('unit_id');
            $table->string('name');
            $table->string('code');
            $table->integer('stock_amount');
            $table->integer('regular_price');
            $table->integer('selling_price');
            $table->text('short_description');
            $table->longText('long_description');
            $table->text('image');
            $table->tinyInteger('status')->default(1);
            $table->integer('hit_count')->default(0);
            $table->tinyInteger('featured_count')->default(0);
            $table->timestamps();
        });

     4. other_images table fields
	
        Schema::create('other_images', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->text('image');
            $table->timestamps();
        });
    

## **Class 29 (Product update)**

    1. Continued from last class.


## **Class 30 (Frontend)**

    1. We can share data centrally in laravel. 
    
    2. To share data centrally, we have to go app/Providers/appServiceProvider
    
    3. There is a function name boot(){} which is call when the project run.
    
    4. If we share data on this boot function then, it will be shared centrally.
    

## **Class 31 (Cart)**

    1. We are using darryldecode package to create cart system
   
    2. For instruction visit: https://github.com/darryldecode/laravelshoppingcart


## **Class 32 (Checkout)**

    1. $table->text('order_timestamp') this field is for converting the order date into a number for reporting purpose.
    
    2. We need 3 tables for checkout. They are customers, orders, order_details table
    
    3. customers table fields
    	
            Schema::create('customers', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->string('password');
                $table->string('mobile')->unique();
                $table->string('image')->nullable();
                $table->string('nid')->unique()->nullable();
                $table->string('dob')->nullable();
                $table->string('blood_group')->nullable();
                $table->string('address')->nullable();
                $table->string('status')->nullable();
                $table->timestamps();
            });
                
    4. orders table fields
        
            Schema::create('orders', function (Blueprint $table) {
                $table->id();
                $table->integer('customer_id');
                $table->integer('order_total');
                $table->integer('tax_total');
                $table->integer('shipping_total');
                $table->text('order_date');
                $table->text('order_timestamp');
                $table->string('order_status')->default('pending');
                $table->text('delivery_address');
                $table->string('delivery_status')->default('pending');
                $table->text('delivery_date')->nullable();
                $table->text('delivery_timestamp')->nullable();
                $table->string('payment_method');
                $table->string('payment_status')->default('pending');
                $table->text('payment_date')->nullable();
                $table->text('payment_timestamp')->nullable();
                $table->string('currency')->nullable();
                $table->text('transaction_id')->nullable();
                $table->timestamps();
            });
            
    5. order_details table fields
    
            Schema::create('order_details', function (Blueprint $table) {
                $table->id();
                $table->integer('order_id');
                $table->integer('product_id');
                $table->string('product_name');
                $table->integer('product_price');
                $table->integer('product_quantity');
                $table->timestamps();
            });
    

## **Class 33 (Form Validation, Error Handling , Customer Authentication)**

    1. "https://www.jqueryscript.net " is a very usefull website for jquery plugins and etc.
    
    2. There are many validation rules written in laravel.com


## **Class 34 (Middleware, Order Manage, Invoice)**

    1. There are 3 steps to use a middleware
        
        a. Middleware create and configure
        b. Middleware register
        c. Middleware use
        
    2. To make middleware
    
        command: php artisan make:middleware CustomerMiddleware


## **Class 35 (print invoice)**

    1. We will use DomPDF package to print invoice
    
        For Instruction: https://www.itsolutionstuff.com/
    
    2. We can't extend master from print.blade.php file
    
    3. we can download all types of jquery plugin from "jqueryscript.net" 


## **Class 36 (Basic JS)**

    1. Js is a language which does not have any substitute language.
    
    2. There are 2 other language which also don't have substitute language which are HTML and CSS.
    
    3. JS is fully object oriented scripting language. It means to do anything in JS, there is function which will be called.
    
    4. And we can't use those functions directly. We always have to call the functions using relative object.
    
    5. There are total 4 types of practice in JS
    
        a. Raw JS (ECMA-5)
        b. JS Library (jQuery)
        c. JS Framework
            - FrontEnd Framework
                - AngularJS
                - ReactJs (We can built anything except social media using ReactJs)
                - ViewJs
                
            - BackEnd Framework
                - NodeJs
                
                Note: Javascript become top rated language in the world because of NodeJs. Because before without help of any server
                 language, javascript can not work with database directly. But now NodeJs eleminates this limitation and make Javascript
                  top class programming language in the world.
                  
        d. JS Process (Ajax)
        
        
    ========================
    <<< ==== RAW JS ==== >>>
    ========================
        
        1. We need to practice,
            
            a. JS Syntex
                - We can write js code inside .php, .js, .html, etc.
                - We have to write js code in the <script> tag inside .php and .html file
              
              Note: Ideal practice is to take script tag just before </body>
              
            b. JS Variable & DataType
                
                3 major rules for declaring variable
                    - Starts with var/let/const
                    - a-z, A-Z, 0-9, _, $
                    - no number in first
                
                3 minor rules
                    - Lower case
                    - Meaningfull
                    - Readable
                    
            c. JS Operator
                - Arithmetic: +, -, *, /, %, ++, --, (-)
                - Assignment: =, +=, -=, *=, %=, /=
                - Conditional: >, <, >=, <=, ==, !=, ===, !==
                - Logical: &&, ||, !
                
            d. JS Statement
                - Single Line Statement: Line by line execution
                - Conditional Statement: if, if else, if else if, switch
                - Repeated Statement: for, while, do while, for in(work with array)
                
            e. JS Array
                Note: In JS we can not make associative array directly, we have to JS object/JSON object
                
            f. JS Object/JSON Object

            g. JS Event & Listener
            
            h. JS Basic Input & Output
            
            
        =========================================    
        ===== There are 3 types of elements =====
        =========================================
        
            1. Opening Closing Tag Elements
                Example: h1 tag (Value comes from between opening & closing tag)
            
            2. Attribute Type Elements
                Example: image tag (Value comes from attribute)
            
            3. Input Type Elements
                Example: input tag (Value comes from value attribute)
        

## **Class 37 (jQuery)**
    
    ======================================================================
        When we writing something in the input field then hover, click,
                keyup, blur, etc event fired at the same time.
    ======================================================================
        
    1. Difference Between Class, Library and Framework
        
        a. Class: Class is an incomplete specification of object.
        
        b. Library: Library is a complete class.
        
        c. Framework: Framework is built with multiple library. But every framework has a main library(Core library).
        
        
    2. JS and jQuery both do same task. Both makes a website interactive. 
    
    3. Because of both do the same task, then why we should learn jQuery?
    
        There are 3 major reasons to learn jQuery
        
            a. Cross browser issue: When we work with pure JS, we have to always cross check. On the other hand, because of all the funtions are written in
             the jQuery file, we don't need to cross check when we use jQuery instead of pure JS.
             
             b. Minimum lines of codes, maximum outputs.
             
             c. Huge libraby
             
           Note: Nowadays the value of jQuery is decreasing because of the front end frameworks.
            
            
    4. JS built in fuctions definitions are written in browser. 
    
    5. JS can't run without a html file.
    
    6. jQuery Basic Syntax: $(selector).action();
    
            $           = jQuery Object Sign
            selector    = To grab html element by id, class, etc
            .           = JS object sign
            action()    = jQuery Method
            
    7. When we writing something in the input field hover, click, keyup, blur, etc event fired.
    
    8. Regular Expression is a JS class.


## **Class 38 (VueJs Basic)**
    
    ======================================================
    ====  VueJs Basic (Working With Single HTML File) ====
    ======================================================
        
    1. To work with VueJs in a single html file, we will use the core library CDN of vuejs
    
    2. In this part, we will cover bellow things,
    
        a. Single html file VueJs install
        b. Object create and mount
        c. Single property declear and use
        d. Array and object declear and use
        e. Method declear and use
        f. Event initialize
        g. if, else
        h. Loop
        i. Two way data binding
        j. html rendaring in VueJs


## **Class 39 (Vue CLI)**
    
    ======================================================
    ======================  Vue CLI ======================
    ======================================================
        
    1. To installing vue cli, we have to be main admin of the machine.
    
    2. Vue CLI projects will build instead of interpret.
    
    3. For installing Vue Cli, there must be installed NodeJs.
    
    4. What is NodeJs?
        
        NodeJs is a runtime server of JS.
        
    5. JS file can't run without the help of html file.
    
    6. But if JS want to run without the help of html file then which will be the server for interpreting JS code.
       In this case by the help of NodeJs, JS can run without the help html file. NodeJs basically create a server 
       for JS to run. 
       
    7. NPM stands for Node Package Manager. It is mainly dependency manager for JS like composer for php. 
    
    8. Now, to install vue cli. Just make a command 'npm install -g @vue/cli' from any where in the pc.
        
        Note: Vue CLI installation recommanded for one time.
        
    9. To create VueJs project using Vue Cli, make a command like bellow,
    
        command: vue create test-app
        
      Note: Some rules should be followed to create a project.
        
        a. Project name should be in lower case.
        b. Multiple word differentiate with hypen(-)
        
        
    10. After making the command follow the instruction bellow
    
        ==============================================
               Select "Manually select features"
        ==============================================
        
            Vue CLI v5.0.8
            ? Please pick a preset: (Use arrow keys)
              Default ([Vue 3] babel, eslint)
              Default ([Vue 2] babel, eslint)
            > Manually select features
            
            
        ==============================================
           Select Babel, Router, Linter / Formatter
        ==============================================
            
            Vue CLI v5.0.8
            ? Please pick a preset: Manually select features
            ? Check the features needed for your project: (Press <space> to select, 
            <a> to toggle all, <i> to invert selection, and <enter> to proceed)
            >(*) Babel
             ( ) TypeScript
             ( ) Progressive Web App (PWA) Support
             (*) Router
             ( ) Vuex
             ( ) CSS Pre-processors
             (*) Linter / Formatter
             ( ) Unit Testing
             ( ) E2E Testing
            
            
        ==============================================
                            Select 3.x
        ==============================================
            
            Vue CLI v5.0.8
            ? Please pick a preset: Manually select features
            ? Check the features needed for your project: Babel, Router, Linter
            ? Choose a version of Vue.js that you want to start the project with (Use arrow keys)
            > 3.x
              2.x
            
           
        ==================================================
            Select "ESLint with error prevention only"
        ==================================================
            
            
            Vue CLI v5.0.8
            ? Please pick a preset: Manually select features
            ? Check the features needed for your project: Babel, Router, Linter
            ? Choose a version of Vue.js that you want to start the project with 3.x
            ? Use history mode for router? (Requires proper server setup for index fallback in production) Yes
            ? Pick a linter / formatter config:
            > ESLint with error prevention only
              ESLint + Airbnb config
              ESLint + Standard config
              ESLint + Prettier
        
          Note: History mode is user friendly because of only slash '/' will apear in the url. Otherwise in Hash mode, '#' will appear.
               
        ==================================================
                        Select "Lint on save"
        ==================================================
                
            Vue CLI v5.0.8
            ? Please pick a preset: Manually select features
            ? Check the features needed for your project: Babel, Router, Linter
            ? Choose a version of Vue.js that you want to start the project with 3.x
            ? Use history mode for router? (Requires proper server setup for index fallback in production) Yes
            ? Pick a linter / formatter config: Basic
            ? Pick additional lint features: (Press <space> to select, <a> to toggle all, <i> to invert selection, and <enter> to
            proceed)
            >(*) Lint on save
             ( ) Lint and fix on commit
            
    
        ==================================================
                     Select "In package.json"
        ==================================================
                
            Vue CLI v5.0.8
            ? Please pick a preset: Manually select features
            ? Check the features needed for your project: Babel, Router, Linter
            ? Choose a version of Vue.js that you want to start the project with 3.x
            ? Use history mode for router? (Requires proper server setup for index fallback in production) Yes
            ? Pick a linter / formatter config: Basic
            ? Pick additional lint features: Lint on save
            ? Where do you prefer placing config for Babel, ESLint, etc.?
              In dedicated config files
            > In package.json
    
        
        =========================================================
            Save this as a preset for future projects? (y/N) N
        =========================================================
            
            Vue CLI v5.0.8
            ? Please pick a preset: Manually select features
            ? Check the features needed for your project: Babel, Router, Linter
            ? Choose a version of Vue.js that you want to start the project with 3.x
            ? Use history mode for router? (Requires proper server setup for index fallback in production) Yes
            ? Pick a linter / formatter config: Basic
            ? Pick additional lint features: Lint on save
            ? Where do you prefer placing config for Babel, ESLint, etc.? In package.json
            ? Save this as a preset for future projects? (y/N) N
            
            
    ==============================================================================
    =============  Understading the folder/file structure of VueJs  ==============
    ==============================================================================
    
    
    a. The file which run first.
    
        public/index.html
        
    b. Then src/main.js
    
        In the src/main.js file,
         
            a. import { createApp } from 'vue' 
            
                   Note: 1. This is the main class object. Here 'vue' comes from 'node_modules/vue' folder. 
                         2. In main.js file directory is calculated from 'node_modules'
                         3. That's why we use just 'vue'
            
            b. import App from './App.vue'
               
                    Note: 1. Importing App.vue into App object/variable
                          2. App.vue is a component
                          3. './' means the same directory & '../' means one step back
                          4. This is single file component
                          5. Compared to laravel this is master file
                          6. Every component has 3 part,
                              a. template
                              b. script
                              c. style
               
            c. import router from './router'
            
                    Note: 1. Importing router into router object/variable
                          2. router is mainly a package
                          3. We select router mood in the vuejs project installation period
                          4. ./router or ./router/index.js both same
                          5. index.js run autometically
            
            d. createApp(App).use(router).mount('#app')
                
                    Note: 1. createApp object take App.vue as a parameter
                          2. Use router package
                          3. Finally mount the output into <div id="app"></div> element of index.html file

                    
    c. App.vue file
        
        In App.vue file,
        
            1. <router-link to="/">Home</router-link>
            
                Note: <router-link> is not a html tag. It's a component which come from router package.
                
            2. <router-view/>
            
                Note: 1. Compared to laravel, <router-view/> is mainly @yield('body')
                      2. When <router-view/> execute, it calls src/router/index.js file
                      
    d. index.js file
    
        This file is compared as laravel web.php file
        
        In index.js file,
        
            1. import { createRouter, createWebHistory } from 'vue-router' 
            
                Note: 1. importing 'vue-router' package in createRouter global object
                      2. createWebHistory is for define history mood
                      
            2. import HomeView from '../views/HomeView.vue'
            
                Note: 1. importing HomeView.vue component into HomeView object
                
                
            3. Lazy Loaded method is recommanded for loding component
            
            4. /* webpackChunkName: "home" */ this is called magic comment


## **Class 40 (VueJs Template Mastering)**
    
    ======================================================
    =============  VueJs Template Mastering  =============
    ======================================================
    
    After being installed VueJs, there are some basic change in the structure like laravel
    
        1. Remove nav from App.vue
        
        2. Remove the codes of style from App.vue
        
        3. Add script tag and inside the tag,
        
            <script>
                export default {
                  name: "App",
                }
            </script> 
            
        4. Goto index.js and add lazzy loading
        
        5. Goto HomeView.vue component and remove img, HelloWorld & add a style tag
        
        6. Now open template index.html file
        
        7. copy the body part and past it into HomeView.vue
        
        8. copy asset folder from template and past it into public folder inside project.
        
        9. App.vue is the mother component of all component. It will mount to the index.html. so that we have to link css 
           and js file to the index.html file.
           
        10. we add product category page and product detail page
        
        11. so, make route first
            
            {
               path: '/product-category',
               name: 'category',
               component: () => import(/* webpackChunkName: "category" */ '../views/CategoryView.vue')
            }
        
        12. Now, we have to create CategoryView component.
        
            Note: To make components, there are two folders in the src folder
            
                a. components: This is for child components.
                b. views: This is for main components. The components which are load directly from route.
                
                
        13. After creation of CategoryView, first of all the standard practice is bellow,
        
            <template>
                <div class="category-view">
                    
                </div>
            </template>
            
                 
    ======================================================
    ==============  Main Mastering Concept  ==============
    ======================================================
    
        14. According to vuejs the components which are commonly use in every like header, footer pages will be situated in,
        
            'src/components/includes'
            
          Note: Components name and html tag name should not match
          
          
        15. Now the header part will be in 'src/components/includes/HeaderView.vue'
        
        16. Now the footer part will be in 'src/components/includes/FooterView.vue'
        
        17. Import HeaderView and FooterView inside App.vue
        
            step 1: Import it,
            
                import HeaderView from "@/components/includes/HeaderView";
                import FooterView from "@/components/includes/FooterView";
                            
              Note: '@/' its a syntax which will redirect you in the src folder
              
            step 2: Define it like,
                    
                export default {
                    name: "App",
                    components: {HeaderView, FooterView},
                }
                    
            step 3: Use it like,
            
                <template>
                  <HeaderView/>
                  <router-view/>
                  <FooterView/>
                </template>
                
        18. Now copy the category html code from template and paste it in the CategoryView component
        
        19. change the <a> tag into <router-link> & add to="" instead of href="" attribute. But this is not the right way. we should
            always use route name. So that we have to change it to :to="{name: 'home'}"
           
        
    ====================================================================================================
    ============== We should break down every large view component into small components  ==============
    ====================================================================================================
    
        20. For making a large component small, create folder and make componets in the 'components' folder and cut the specific code, 
            then paste it there.
      
      
      
    ====================================================================================================
    ==========================  There is a conflict between jQuery and VueJs  ==========================
    ====================================================================================================
    
        21. When we work with VueJs, sometimes jQuery plugins will not work.
        
        22. When a jQuery plugin is not working, we simply have to check id, classes of that specific html element 
        
        23. The plugin which is responsible, we have to find it out with the id or class.
        
        24. Then search the plugin for vue in the google 
        
        25. Install the plugin and cut the JS code from the assets/index.html file and paste it in mounted hook.
        
        26. hooks are like constructor method in php. When a project build, The lines of codes which are written in the component
            will be converted into plain html then hooks are called autometically. 


## **Class 41 (Data Transfer with API Laravel-VueJs)**
    
    ==============================================================================
    ===================  Data Transfer with API Laravel-VueJs  ===================
    ==============================================================================
    
        API - Aplication Programming Interface
        
        ----------------------------------
        =========== IN LARAVEL ===========
        ----------------------------------
            1. We will use api.php file for routing
            
            2. The routes which are written in api.php can be reached from laravel like bellow,
            
                In api.php,
                
                    Route::get('/test', function () {
                        return "Hello API";
                    });
                    
                    visit :- http://localhost/Web-Design-Dev-Using-Lara-Vue/class-35/day-35/public/api/test
                    
                  Note: We can visit this api using '/api' in the url
                  
            3. In this process laravel gives a link to vuejs. When you hit the link, you will get the desired data.
            
            4. There is a major security issue of creating API. Because there must be a guard which authenticate the valid person
               who is requesting data through API.
               
            5. In previous version of laravel, these security middleware was manually set by developer. But from laravel 8, the middlewares
               are set by default
            
            6. The middleware configuration is bellow,
            
                a. Goto composer.json file. This is the middleware configurational package, 
                
                    "require": {
                        "laravel/sanctum": "^3.0",
                    },
                  
                b. Goto App/Http/kernel.php. This is the middleware,  
                
                     protected $middleware = [
                             \Illuminate\Http\Middleware\HandleCors::class,
                      ];
                      
                c. Goto config/cors.php. This is configuration file. Here we can customize the middleware configuration.
                
                    return [
                        // 'api/*' will be the URL
                        'paths' => ['api/*', 'sanctum/csrf-cookie'],
                    
                        // * means all method like get, post, etc. We can define like 'allowed_methods' => ['GET'],
                        'allowed_methods' => ['*'],
                    
                        // Anyone can get data from this API. We can define like 'allowed_origins' => ['http://anwar.com'], Now only this 
                           site can access the data.
                        'allowed_origins' => ['*'],
                    
                        'allowed_origins_patterns' => [],
                    
                        'allowed_headers' => ['*'],
                    
                        'exposed_headers' => [],
                    
                        'max_age' => 0,
                    
                        'supports_credentials' => false,
                    
                    ];
                    
            
            7. Now create a controller name APIController
            
            8. Write a function like bellow,
            
                public function getAllCategory()
                    {
                        return response()->json(Category::all());
                    }
                    
            9. Now hit,
                
                http://localhost/Web-Design-Dev-Using-Lara-Vue/class-35/day-35/public/api/test
                
                All categories will be returned in a JSON array
                        
        ----------------------------------                
        ============ IN VUEJS ============
        ----------------------------------
            10. After successfully creating API from laravel, We have to make API from VueJS
            
            11. In vue 2, Vue Resource was used to create API. But now in Vue 3 Axios is used to create API. 
            
            12. Install Axios Package from command.
            
                command: npm install axios
                
            13. Now suppose we want show the categories in the header component.
            
            14. Now Goto HeaderView component, script will be like bellow
            
                <script>
                    import axios from 'axios';
                    export default {
                        name: "HeaderView",
                        data(){
                            return {
                                categories: [],
                            }
                        },
                        created() {
                            axios.get('http://localhost/Web-Design-Dev-Using-Lara-Vue/class-35/day-35/public/api/test')
                            .then( response => {
                                this.categories = response.data;
                                console.log(response.data);
                            });
                        }
                    }
                </script>
                
            15. And inside the template tag,
            
                <li v-for="(category, index) in categories" :key="index">
                    <router-link :to="{name: 'category'}">{{category.name}} <i class="lni lni-chevron-right"></i></router-link>
                    <ul class="inner-sub-category">
                        <li><a href="product-grids.html">Digital Cameras</a></li>
                    </ul>
                </li>
                
            16. We can send trending product details through API in same way.
            
            17. We can show image by setting image url menually,
                
                <img :src="'http://localhost/Web-Design-Dev-Using-Lara-Vue/class-35/day-35/public/' + product.image" alt="#">
                
            18. We can pass id in router-link,
            
                component,
                    <router-link :to="{name: 'category', params:{id : category.id}}">
                        {{category.name}} <i class="lni lni-chevron-right"></i>
                    </router-link>
                
                index.js,
                    {
                        path: '/product-category/:id',
                        name: 'category',
                        component: () => import(/* webpackChunkName: "category" */ '../views/CategoryView.vue')
                    },
                    
                component,
                
                    <script>
                        export default {
                            name: "CategoryView",
                            data(){
                                return {
                                    id: this.$route.params.id,
                                }
                            },
                    
                            created() {
                                console.log(this.id);
                            }
                        }
                    </script>
                    
                  Note: 
                  
                    1. After passing id, if there occured any kind of design broken issue or image link is not working then just add
                        a "/" before all of the affected link. And also modify the css, js link of index.html file.
                        
                    2. If id does not change dynamically then, got app.vue file and add :key attribute
                    
                        <router-view :key="$route.fullPath"/>
                

## **Class 43 (Sslcommerz Payment Gateway)**

    1. The most popular payment gateway in BD
    
        a. Sslcommerz b. amar pay
        
    2. Now we will work with sandbox account
    
    3. After integration of sanbox, if we want to add real gateway, we just change store id, store password,  secret key. 
    
    4. At first create sandbox account.
    
    5. In VerifyCsrfToken.php file,
    
        protected $except = [
            '/success',
            '/cancel',
            '/fail',
            '/ipn',
            '/pay-via-ajax',
        ];
        
      Note: This means when these url hit, no need to send csrf token
      
    6. We will always use Hosted Payment
     

## **Class 44 (jQuery AJAX)**

    1. 2 Type of Client Server Communication 
    
        a. Synchronous  b. Asynchronous
        
    2. Both communications have some protocol, like
    
        a. Synchronous  - http/https (hyper text markup protocol secure)
        
        b. Asynchronous -  Extendable Markup Language
        
    3. AJAX - Asynchronous JavaScript & XML
    
    4. In the year of 2006, Google first initiate Ajax
    
    5. Google first create the class for Ajax name ActiveXObject. In this class, there are total 6/8 methods.
    
    6. After some years of using ActiveXObject, Google initiate new class name XMLHttpRequest. Both classes are same.
    
    7. jQuery Ajax Structure
    
            $.ajax({
               type: 'GET',
               url: "",
               data: {},
               dataType: "JSON",
               success: function (response) {
                    console.log(response);
               },
               error: function (response) {
                    console.log(response);
               }
            });


                
            
        
  
          
        
    
            
            
        
    
    
    
    
    
    
    


