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
                      
                c. Goto config/cors.php. This is configurational file. Here we can customize the middleware configuration.
                
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
                


                
            
        