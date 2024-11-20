<?php 
include("compoment/function/function.php");
$getcount =get_pagination($dattabase,'consultation');
$get_page_number = get_page_number($getcount,3);
 if (!isset($_GET['page'])) {
    echo  "<script>window.open('consultation.php?page=1','_self')</script>";
  }
  else
  {    
 
      if($_GET['page']<=0)
      {
         echo "<script>window.open('consultation.php?page=1','_self')</script>";
      }
      else
      {
        $debut =  get_element_number($_GET['page'],3);
        $project = get_element($dattabase ,'consultation',$debut ,3);  
      }
  }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> projet  </title>
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
          include("compoment/header.php");
          
         ?>
    <!-- header-area end -->
    
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="breadcrumb-title">consultation</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">consultaton</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    
    <!-- content-wraper start -->
    <div class="breadcrumb-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="breadcrumb-title">projet</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">projet</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    
    <!-- content-wraper start -->
    <div class="content-wraper section-pt section-pb-80">
        <div class="container">
            <div class="row">
                  <?php 
                   foreach($project as $key)
                 {

               
                  ?>
                <div class="col-lg-4  col-md-6">
                    <!-- single-service Start -->
                    <div class="single-service mb--30">
                        <div class="service-image">
                            <img src="./image/consultation/<?=$key['img_const']?>" alt="">
                        </div>
                        <div class="service-content text-center">
                            <h3><a href="./consulation_detaille.php?id_cons=<?=$key['id_cons']?>"></a><?=$key['title_cons']?></h3>
                            <p></p>
                            <a href="./consulation_detaille.php?id_cons=<?=$key['id_cons']?>" class="border-radius">READ MORE</a>
                        </div>
                    </div>
                    <!-- single-service End -->
                </div>
                 
                <?php 
                   }
                ?>
            </div>
            <div class="paginatoin-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <p>Showing 10-13 of 13 item(s) </p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="pagination-box">
                                         <?php 
                                         $page = $_GET['page'];
                                         if ($page == 1)
                                         {

                                         
                                         ?>
                                        <li class="active"><a href="consultation.php?page=1">1</a></li>
            
                                        <?php 
                                          for($i= $page+1; $i< $get_page_number ; $i++)
                                          {  
                                              
                                              if($i >= $page+4)
                                              {
                                                  break;
                                              }
                                         
                                        ?>
                                        <li><a href="consultation.php?page=<?=$i?>"><?=$i?></a></li>
                                        <li>
                                            <?php 
                                            }?>
                                          <a class="Next" href="consultation.php?page=<?=$get_page_number?>"> <i class="icofont-bubble-right"></i></a>
                                        </li>
                                        <?php }
                                         else
                                         {
                                             if($page == $get_page_number)
                                             {     
                                                 if(($page -3)>= 1)
                                                 {
                                                  
                                                 
                                             ?>
                                                <?php 
                                          for($i= $page; $i>= $page-3 ; $i++)
                                           {  
                                              
                                              if($i >= $p)
                                              {
                                                  break;
                                              }
                                         
                                        ?>
                                        <li><a href="consultation.php?page=<?=$i?>"><?=$i?></a></li>
                                        <li>
                                            <?php 
                                            }}
                                             else
                                             {

                                                for($i= 1; $i< $page ; $i++)
                                                {  
                                        
                                             ?>
                                             <li><a href="consultation.php?page=<?=$i?>"><?=$i?></a></li>
                                             <li>
                                                 <?php 
                                                 }
                                            ?>
                                               
                                              <?php 
                                             }
                                              ?>
                                               <li class="active"><a href="consultation.php?page=<?=$get_page_number?>"><?=$get_page_number?></a></li>
                                        <?php   }}
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
    <!-- content-wraper end -->
    
    
    <!-- Footer Area Start -->
    <?php
          include("compoment/footer_jslink.php");
     ?>
    <!-- Footer Area End -->
    
    
    
</div>
<!-- Main Wrapper End -->

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>

</html>