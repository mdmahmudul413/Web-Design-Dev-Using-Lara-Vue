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
  
          
        
    
            
            