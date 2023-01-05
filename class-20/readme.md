## **Class 20**

    1. Creating a project of taking user input in a form and save it to database.
    2. Standard practice of writing url is like "/blog/add", "/blog/manage"
    3. Standard practice of writing route name is like name('blog.add'), name('blog.manage')
    4. These standard practices will make website SEO friendly
    5. Database Server: The place where we keep our data
    6. Popular database servers: 1.Oracle 2.MsSQL 3.MySQL 4.MongoDB 5.FireBASE
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