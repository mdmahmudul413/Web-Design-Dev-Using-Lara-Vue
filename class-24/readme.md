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
    
    
    
    
        
                
                
            
            
        
        
        