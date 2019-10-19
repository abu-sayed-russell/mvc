<!DOCTYPE html>
<html lang="en">
<?php include "admin_head-file.php";?>
<body class="nav-medium">
<div class="container body">
    <div class="main_container">
            <!-- Start Loader -->
<div class="page-loader">
    <div class="preloader loading">
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
    </div>
</div>
<!-- End Loader -->

<!-- Start Scroll Top -->
<a href="javascript:" id="scroll" style="display: none;"><span></span></a>
<!-- End Scroll Top -->

<!-- start Left Menu-->
<div class="col-md-3 left_color">
    <div class="left_color scroll-view">
        <div class="navbar nav_title">
            <a href="index.html" class="medium-logo">
                <img src="<?php echo asset; ?>public/assets/backend/global/images/prince_logo.png" alt="medium-logo">
            </a>
            <a href="index.html" class="small-logo">
                <img src="<?php echo asset; ?>public/assets/backend/global/images/prince_logo2.png" alt="small-logo">
            </a>
        </div>
        <div class="clearfix"></div>
        <?php include "admin_sidebar.php" ?>
        
    </div>
</div>
<!-- End Left Menu -->

<!-- start top navigation -->
<?php include "admin_topbar.php" ?>
<div class="clearfix"></div>