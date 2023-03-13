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