# UI Designer Portfolio
## Table of Contents
1. [HTML Structure](#html-structure)
2. [CSS Files and Structure](#css-files-and-structure)
3. JavaScript
4. PHP Code Explanation

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
