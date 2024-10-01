<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Recipes</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/-Filterable-Cards-.css">
    <link rel="stylesheet" href="assets/css/Account-setting-or-edit-profile.css">
    <link rel="stylesheet" href="assets/css/Animated-CSS-Waves-Background-SVG.css">
    <link rel="stylesheet" href="assets/css/Black-Navbar.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Cards-with-Hover-Effect-74-1.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Cards-with-Hover-Effect-74.css">
    <link rel="stylesheet" href="assets/css/Card-with-popup-text-effect.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-by-Moorcam.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark-1.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="assets/css/Hover-cards.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/News-Cards-4-Columns-v2.css">
    <link rel="stylesheet" href="assets/css/News-Cards.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/Recipe-Card.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo-1.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Search-Input-Responsive-with-Icon.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="assets/css/vertical-navbar-with-menu-and-social-menu.css">
    <link rel="stylesheet" href="assets/css/Vertical-Navigation-with-double-sub-menu--scroll-enable-by-Jigar-Mistry.css">
</head>

<body>
    <div class="main-leftsidebar-div">
        <div class="leftsidebarmenu">
            <ul class="nav sidebar-first-menu scrollbar-indigo thin">
                <li class="nav-item d-flex module-search-nav-item"><i class="fa fa-search d-xl-flex align-items-xl-center module-search-icon"></i><input class="form-control-sm module-search" type="search" placeholder="Search Module.."></li>
                <li class="nav-item d-flex"><img class="rounded-circle" src="assets/img/home.png"><a class="nav-link active" href="index.html" style="font-family: Acme, sans-serif;color: var(--bs-gray-900);">Home</a><a class="nav-link" href="#" style="font-family: Acme, sans-serif;color: var(--bs-gray-900);">Home</a><a class="nav-link" href="#">SignUp</a></li>
                <li class="nav-item d-flex"><img class="rounded-circle" src="assets/img/junction%20(1).png"><a class="nav-link active" href="signup.html" style="color: var(--bs-gray-900);font-family: Acme, sans-serif;">SignUp</a><a class="nav-link" href="#">SignUp</a></li>
                <li class="nav-item d-flex"><img class="rounded-circle" src="assets/img/login%20(1).png"><a class="nav-link active" href="login.html" style="color: var(--bs-gray-900);font-family: Acme, sans-serif;">Login</a></li>
                <li class="nav-item d-flex"><img class="rounded-circle" src="assets/img/mix.png"><a class="nav-link active" href="recipes.php" style="color: var(--bs-gray-900);font-family: Acme, sans-serif;">Tasty Recipes</a></li>
                <li class="nav-item d-flex"><img class="rounded-circle" src="assets/img/book%20(1).png"><a class="nav-link active" href="submit_recipes.html" style="color: var(--bs-gray-900);font-family: Acme, sans-serif;">Submit Recipes</a></li>
                <li class="nav-item d-flex"><img class="rounded-circle" src="assets/img/signup%20(1).png"><a class="nav-link active" href="account.php" style="color: var(--bs-gray-900);font-family: Acme, sans-serif;">Account</a></li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-light navbar-expand-md bg-dark" style="z-index: 1;background: white;">
        <div class="container-fluid"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
            </div><a class="navbar-brand" href="#" style="font-family: Acme, sans-serif;color: var(--bs-yellow);">Foodies Palace</a>
        </div>
    </nav>

<?php

    $servername = "localhost";
    $uname = "root";
    $pword = "";

    $id = $_REQUEST['id'];
    // connection establishment
    $conn = mysqli_connect($servername,$uname,$pword) or die("Connection failed");

    // selecting database
    $db = mysqli_select_db($conn,"foodiespalaca");
    
    // query execution
    $query = "select * from addreceipe where id = $id";
    $res = mysqli_query($conn,$query);

    if(mysqli_num_rows($res) > 0)
        {
            while($row = mysqli_fetch_array($res))
            {
                $url = $row['url'];

               
                echo "
                <div class='cont_principal' style='background: var(--bs-pink);'>
                <div class='cont_central'>
                    <div class='cont_modal cont_modal_active'>
                        <div class='cont_photo'>
                            <div class='cont_img_back'><img src='assets/img/57989f2a2e186e38bf93429aa395120c.jpg'></div>
                            <div class='cont_mins'>
                                <div class='cont_icon_right'><a href='#'></a></div>
                            </div>
                            <div class='cont_detalles'>
                                <h3 style='font-family: Acme, sans-serif;background: var(--bs-dark);text-align: center;padding:5px;'>".$row['title']."</h3>
                                <p style='font-family: 'Source Sans Pro', sans-serif;color: var(--bs-dark);text-align:right;'>".$row['descp']."&nbsp;</p>
                            </div>
                        </div>
                        <div class='cont_text_ingredients'>
                            <div class='cont_over_hidden'>
                                <div class='cont_tabs'>                                   
                                    <p></p>
                                     <p style='font-family: Acme, sans-serif;font-size: 22px;color: var(--bs-dark);text-align: center;'>Posted by: @".$row['username']."</p>
                                 
                                </div>
                                
                                 <div>
                                    <br/> <br/>                                       
                                        <div style='text-align:left;margin: 30px 0px -30px 0px;'>
                                        <p style='font-family: Acme, sans-serif;font-size: 22px;color: var(--bs-dark);'>Ingredients</p>
                                            <p style='font-family: 'Source Sans Pro', sans-serif;font-size: 14px;text-align: justify;color: var(--bs-dark);'>".$row['ingred']."</p>
                                        </div>
                                        <br>
                                </div>
                                <div>
                                        <hr/>                           
                                        <div style='text-align:left;margin: 0px 0 10px 0;'>
                                        <p style='font-family: Acme, sans-serif;font-size: 22px;color: var(--bs-dark);'>Steps</p>
                                            <p style='font-family: 'Source Sans Pro', sans-serif;font-size: 14px;text-align: justify;color: var(--bs-dark);'>".$row['steps']."</p>
                                        </div>
                                        <br>
                                </div>
                                <div>
                                        <hr/>                           
                                        <div style='text-align:left;margin: 0px 0 10px 0;'>
                                        <p style='font-family: Acme, sans-serif;font-size: 22px;color: var(--bs-dark);'>Video URL</p>
                                            <p style='font-family: 'Source Sans Pro', sans-serif;font-size: 14px;text-align: justify;color: var(--bs-dark);'><a href='$url' >".$row['url']."</a></p>
                                        </div>
                                        <br>
                                </div>

                               
                            </div>
                            <div class='cont_btn_open_dets'></div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
    }
                
            // close connection
            mysqli_close($conn);
            ?>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/-Filterable-Cards-.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script src="assets/js/vertical-navbar-with-menu-and-social-menu.js"></script>
    <script src="assets/js/Vertical-Navigation-with-double-sub-menu--scroll-enable-by-Jigar-Mistry.js"></script>
</body>

</html>