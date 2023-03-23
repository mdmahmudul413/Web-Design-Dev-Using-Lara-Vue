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
               
                    Note: 1. Importing App.vue mother component into App object/variable
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
                          3. We select router mode in the vuejs project installation period
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
                      2. createWebHistory is for define history mode
                      
            2. import HomeView from '../views/HomeView.vue'
            
                Note: 1. importing HomeView.vue component into HomeView object
                
                
            3. Lazy Loaded method is recommanded for loding component
            
            4. /* webpackChunkName: "home" */ this is called magic comment
        