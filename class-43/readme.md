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
     