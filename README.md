# UI Designer Portfolio
## Table of Contents
1. [HTML Structure](#html-structure)
2. [CSS Files and Structure](#css-files-and-structure)
3. [JavaScript](#javascript)
4. [PHP Code Explanation](php-ccode-explanation)

## HTML Structure
The general template structure is the same throughout the template. Here is the general structure.
```
<!-- BEGIN CONTAINER -->
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-12 col-md-12" style="width: unset;overflow:hidden;">
            <!--BEGIN HEADER -->
            <div class="header">
                <nav class="navbar navbar-expand-md navbar-expand-lg">
                    <div class="navbar-header flexbox_container">
                        <a class="navbar-brand" href="home.html">Logo</a>
                    </div>
                    <div id="navbarDropdown">
                        <ul class="navbar-nav ml-lg-auto mr-auto">
                            <li class="nav-item"><a href="home.php" class="nav-link active">Home</a></li>
                            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="projects.php" class="nav-link">Project</a></li>
                            <li class="nav-item"><a href="about.php?u=contact" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- END HEADER -->

            <!-- BEGIN CONTENT -->
            <div class="container mt_20">
                <div class="content">
                    Content Here
                </div>
            </div>
            <!-- END CONTENT -->

            <!-- BEGIN FOOTER -->
            <div class="container mt_20">
                <div class="footer">
                    Footer Content Here
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
    </div>
</div>
<!-- END CONTAINER -->
```
If you would like to edit the color, font, or style of any elements in one of these columns, you would do the following:
```
.content a {
    color: #someColor;
} 
```
## CSS Files and Structure
Custom directory (assets/libs/css/custom) is where custom styles for the theme are located. If you want to add a new style definition that should be available anywhere in the theme, it can be added to the style.scss file in the custom directory.
File Structure :
```
└── assets
    ├── libs                 
        ├── css
            ├── custom
                ├── style.scss  	// Base styles. Styles placed here should be available anywhere in the theme 
                └── variables.scss	// Variables used in the custom theme
            └── plugins 
                ├── animation       // Reveal CSS animation as you scroll down a page.     
                └── bootstrap            
```
If you would like to edit a specific section of the site, simply find the appropriate label in the CSS file, and then scroll down until you find the appropriate style that needs to be edited.

## JavaScript
This theme imports some Javascript files.
### Custom Script
### Plugins
* Animation
    Most of the animation in this site is carried out from the animation scripts.This plugin is packed, so you won't need to manually edit anything in the file.
    Reveal CSS animation as you scroll down a page.
    Basic usage In order to hide all elements when they are supposed to be hidden. (Anti Flickering)
    ###### CSS
    ```
    .wow { visibility: hidden; }
    ```
    ###### HTML
    ```
    <section class="wow slideInLeft"></section>
    <section class="wow slideInRight"></section>
    ```
    Advanced usage
    ```
    <section class="wow slideInLeft" data-wow-duration="2s" data-wow-delay="5s"></section>
    <section class="wow slideInRight" data-wow-offset="10" data-wow-iteration="10"></section>
    ```
    ###### Javascript
    ```
    new WOW().init();
    ```
    Advanced Usage 
    ```
    var wow = new WOW({
        boxClass: 'wow', // animated element css class (default is wow) 
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0, // distance to the element when triggering the animation (default is 0) 
        mobile: true, // trigger animations on mobile devices (default is true) 
        live: true, // act on asynchronously loaded content (default is true)
        callback: function(box) { 
            // the callback is fired every time an animation is started 
            //the argument that is passed in is the DOM node being animated
        }, 
        scrollContainer: null // optional scroll container selector, otherwise use window 
      }); 
    wow.init();
    ```
    The animation is implemented using [GitHub Page](https://github.com/matthieua/WOW).
* Bootstrap
* jQuery
* popper

File Structure :
```
└── assets
    ├── libs                 
        ├── js
            ├── custom 
                └── script.js	// custom scripts
            └── plugins 
                ├── animation      
                ├── bootstrap     
                ├── jQuery   
                └── popper  
```

## PHP Code Explanation
To insert header and footer in all files used PHP include statement
```
include 'filename'
```

