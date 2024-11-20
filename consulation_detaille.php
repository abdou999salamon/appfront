<?php
 
 include("./compoment/function/function.php");
 if (!isset($_GET['id_cons'])) {
//echo  "<script>window.open('projet.php?page=1','_self')</script>";
 }
 else
 {    
          
     if($_GET['id_cons']<=0)
     {
    // echo "<script>window.open('projet.php?page=1','_self')</script>";
     }
     else
     {
       $formation = get_singl_element($dattabase,$_GET['id_cons'],'consultation','id_cons');
     }
 }

 ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog Details  </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS 
    ========================= -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="cont/css/style.css">
    <link rel="stylesheet" href="cont/css/plugins.css">
    <link rel="stylesheet" href="cont/css/bootstrap.min.css">
    <link rel="stylesheet" href="cont/css/Pe-icon-7-stroke.css">
    <link rel="stylesheet" href="cont/css/icofont.min.css">
    <link rel="stylesheet" href="cont/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="cont/slick/slick-theme.css"/>
</head>

<body>

<!-- Main Wrapper Start -->
<div class="main-wrapper">
    
        <!-- header-area start -->
        <?php 
     include("./compoment/header.php");
     ?>
        <!-- header-area end -->

        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="breadcrumb-title">consultation Details</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">consulation </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->

        <!-- content-wraper start -->
        <div class="content-wraper section-ptb">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-9 order-1 order-lg-1">
                        <!-- blog-details-wrapper start -->
                        <div class="blog-details-wrapper">
                            <div class="blog-details-image">
                                <img src="./image/consultation/<?=$formation['img_const']?>" alt="">
                            </div>
                            <div class="postinfo-wrapper">
                                <div class="post-info">
                                      <?=$formation['contet']?>
                                    <div class="post-commet">
                                        <a class="blog-comment" href="#">0 COMMENT</a>
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="review_address_inner">
                                        <!-- Start Single Review -->
                                        <div class="pro_review">
                                            <div class="review_thumb">
                                                <img alt="review images" src="assets/images/review/comment-1.jpg">
                                            </div>
                                            <div class="review_details">
                                                <div class="review_info">
                                                    <h4><a href="#">Dj Sonika</a></h4>
                                                    <div class="rating_send">
                                                        <a href="#"><i class="icofont-reply-all"></i></a>
                                                    </div>
                                                </div>
                                                <div class="review_date">
                                                    <span>27 Jun, 2018 at 3:30pm</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. 
                                                    Phasellus a felis at estei to bibendum
                                                     feugiat ut eget eni Praesent et messages in con s
                                                     ectetur posuere dolor non.</p>
                                            </div>
                                        </div>
                                        <!-- End Single Review -->
                                        <!-- Start Single Review -->
                                        <div class="pro_review ans">
                                            <div class="review_thumb">
                                                <img alt="review images" src="./image/project/">
                                            </div>
                                            <div class="review_details">
                                                <div class="review_info">
                                                    <h4><a href="#">Gerald Barnes</a></h4>
                                                    <div class="rating_send">
                                                        <a href="#"><i class="icofont-reply-all"></i></a>
                                                    </div>
                                                </div>
                                                <div class="review_date">
                                                    <span>27 Jun, 2018 at 4:32pm</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                            </div>
                                        </div>
                                        <!-- End Single Review -->
                                    </div>
                                <div class="comments-area comments-reply-area">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h3 class="comment-reply-title">Leave a Reply</h3>
                                            <form action="#" class="comment-form-area">
                                                <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                                <p class="comment-form-comment">
                                                    <label>Comment</label> 
                                                    <textarea class="comment-notes" required="required"></textarea>
                                                </p>
                                                <div class="comment-input">
                                                    <p class="comment-form-author">
                                                        <label>Name <span class="required">*</span></label> 
                                                        <input type="text" required="required" name="Name">
                                                    </p>
                                                    <p class="comment-form-email">
                                                        <label>Email <span class="required">*</span></label> 
                                                        <input type="text" required="required" name="email">
                                                    </p>
                                                    <p class="comment-form-url">
                                                        <label>Website</label>
                                                        <input type="text" name="url">
                                                    </p>
                                                </div>
                                                <div class="comment-form-submit">
                                                    <input type="submit" value="Post Comment" class="comment-submit">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- blog-details-wrapper end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wraper end -->

        <?php 
     include("./compoment/footer_jslink.php");
     ?>
        <!-- Footer Area End -->
    
</div>
<!-- Main Wrapper End -->





</body>

</html>