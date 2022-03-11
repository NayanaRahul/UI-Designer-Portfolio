# UI Designer Portfolio
## Table of Contents
###### 1. HTML Structure
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
## 
