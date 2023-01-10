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