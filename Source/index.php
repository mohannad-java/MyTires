<?php

include './models/Db.php';
$conn = new Db();
$conn->connect();
session_start();

include './includes/getProduct.inc.php';


?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="كفراتي هو نقطة بيع بين العميل و الشركة أطلب كفرك و أنت في بيتك" />
    <meta name="keywords" content="كفرات, سيارات, كفراتي, سيارة, تصليح, صيانة, عالم السيارات, بيع, شراء" />
    <link rel="shortcut icon" href="./assets/images/fav.png" type="image/x-icon">
    <title>الصفحة الرئيسية</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- custom css link -->
    <link rel="stylesheet" href="./assets/css/index.css" />
    <link rel="stylesheet" href="./assets/css/media.css" />
</head>
<body>
    <!-- بداية رأس الصفحة -->
    <header>
        <?php if (isset($_SESSION['userid'])) {
            $userid = $_SESSION['userid'];
            if ($_SESSION['role'] == "company") {
                header("Location: ./company.php");
                exit();
            }
            ?>
            <a href="index.php" class="logo">
                <img src="./assets/images/logo.png" alt="Logo" />
            </a>

            <?php if(isset($_SESSION['Filter'])) { ?>
                    <li>
                        <a href="./includes/cancelSearch.inc.php">
                            <button class="close">
                                الغاء البحث
                            </button>
                        </a>
                    </li> 
                <?php } else {?>
                <img src="./assets/images/Group.png" class="filtr" alt="filtr" />
                <?php } ?>


            <nav>
            <ul>

                <li>
                    <a href="./includes/logout.inc.php">
                        <button class="login">
                           تسجيل الخروج
                        </button>
                    </a>
                </li>

                <div class="dropdown">
                    <button class="user">
                        <?php echo $_SESSION['username'] ?>
                    </button>
                    <ul>
                        <li><a href="./myAccount.php">بياناتي</a></li>
                        <li><a href="./myCart.php">طلباتي</a></li>
                    </ul>
                </div>
                <li>
                    <a href="./cart.php" >
                        <img src="./assets/images/add_cart.png" class="sala" alt="أيقونة سلة" title="للذهاب إلى المنتجات التي تمت إضافتها"/>
                    </a>
                </li>
            </ul>


            </nav>

            <div class="menu_toggle"> <i class="fa fa-bars"></i> </div>

            
        <?php } else { ?>
            <a href="index.html" class="logo">
                <img src="./assets/images/logo.png" alt="Logo" />
            </a>
            
            <ul>
            <?php if(isset($_SESSION['Filter'])) { ?>
                    <li>
                        <a href="./includes/cancelSearch.inc.php">
                            <button class="close1">
                                <i class="fas fa-times"></i>
                            </button>
                        </a>
                    </li> 
                <?php } else {?>
                <img src="./assets/images/Group.png" class="filtr" alt="filtr" />
                <?php } ?>
            </ul>


            <nav>
            <ul>
                <li>
                    <a href="./signupaccount.php">
                        <button class="signUp">
                            إنشاء الحساب
                        </button>
                    </a>
                </li>
                
                <li>
                    <a href="./loginaccount.php">
                        <button class="login">
                            تسجيل الدخول
                        </button>
                    </a>
                </li>


                <li>
                <?php if(isset($_SESSION['userid'])){?>
                    <a href="./cart.php" >
                        <img src="./assets/images/add_cart.png" class="sala" alt="أيقونة سلة" title="للذهاب إلى المنتجات التي تمت إضافتها"/>
                    </a>
               <?php } 
                    else{ ?>
                     <a href="./loginaccount.php" >
                        <img src="./assets/images/add_cart.png" class="sala" alt="أيقونة سلة" title="للذهاب إلى المنتجات التي تمت إضافتها"/>
                    </a>
                   <?php }?>
              
                </li>
            </ul>


            </nav>

            <div class="menu_toggle"> <i class="fa fa-bars"></i> </div>
        <?php } ?>
    </header>
    <!-- نهاية رأس الصفحة -->
    
    <!-- بداية القائمة المنسدلة -->


    <form action="./includes/filter.inc.php" method="post">
                        
        <div class="select_box">

        </div>

        <div class="select_box2">

            <div class="options_container_2">

                <div class="option_2">
                    <input type="radio" class="radio" id="Goodyear" name="tiername"  value="Goodyear"/> 

                    <label for="Goodyear">Goodyear</label>
                </div>

                <div class="option_2">
                    <input type="radio" class="radio" id="Hankook" name="tiername" value="Hankook" /> 

                    <label for="Hankook">Hankook</label>
                </div>

                <div class="option_2">
                    <input type="radio" class="radio" id="Michelin" name="tiername"  value="Michelin"/> 

                    <label for="Michelin">Michelin</label>
                </div>

            </div>

            <div class="selected_2">
                اسم الكفر
            </div>

        </div>

        <div class="select_box3">

            <div class="options_container_3">

                <div class="option_3">
                    <input type="radio" class="radio" name="category" /> 

                    <label>العرض</label>
                    <input type="text" class="sizing" name="size1" />
                </div>

                <div class="option_3">
                    <input type="radio" class="radio" id="film" name="category" /> 

                    <label>نسبة</label>
                    <input type="text" class="sizing" name="size2" />
                </div>

                <div class="option_3">
                    <input type="radio" class="radio" id="film" name="category" /> 

                    <label>الجنط</label>
                    <input type="text" class="sizing" name="r" />
                </div>

            </div>

            <div class="selected_3">
                مقاس الكفر
            </div>
        </div>

        <input type="submit" class="search" name="search" value="بحث" />
</form>

    <!-- نهاية القائمة المنسدلة -->

 <!-- بداية جزء الصفحة الرئيسية -->

 <?php
 $error = (isset($_GET['error']) ? $_GET['error'] : '');
 $success = (isset($_GET['success']) ? $_GET['success'] : '');
        // Grabbing the data
      if($error == 'ProductAlreadyAdded')
      {
        echo '<script type="text/javascript">
        swal({
            title: "المنتج مضاف مسبقا",
            text: "لقد أضفت المنتج مسبقا وهو الآن في السلة",
            icon: "error",
            button: "تمام",
          });
        </script>';
      }
      if($error == 'noProductfound')
      {
        echo '<script type="text/javascript">
        swal({
            title: "المنتج غير متوفر",
            icon: "error",
            button: "تمام",
          });
        </script>';
      }
      if($success == 'Done')
      {
        echo '<script type="text/javascript">
        swal({
            title: "تم اضافة المنتج",
            text: "المنتج الان في السلة",
            icon: "success",
            button: "تمام",
          });
        </script>';
      }
      if($success == 'addToOrder')
      {
        echo '<script type="text/javascript">
        swal({
            title: "تم اتمام الطلب",
            text: "",
            icon: "success",
            button: "تمام",
          });
        </script>';
      }
      if($success == 'updated')
      {
        echo '<script type="text/javascript">
        swal({
            title: "تم تحديث بياناتك",
            text: "",
            icon: "success",
            button: "تمام",
          });
        </script>';
      }

?>


    <section class="container">

        <div class="container_product">
            <?php 
                if(isset($_SESSION['Filter'])) {
                    // print_r($_SESSION['Filter']);
                    foreach ($_SESSION['Filter'] as $key => $value) {
            ?>
                <form action="./includes/addToCart.inc.php" method="post" enctype="multipart/form-data">                 

                    <div class="card">
                        <div class="card_image">
                        <img src="./uploads/<?=$value['3']?>" alt="صورة الكفر" title="صورة الكفر">
                        </div>
                        <h2 title="أسم الكفر" class="title" ><?php echo $value['4'];?></h2>
                        <p title="وصف الكفر"><?php echo $value['5'];?></p>
                        <div class="wrapper">
                            <div class="price_content">
                                <p class="price" title="السعر">
                                السعر : <span> <?php echo $value['6'];?> </span> ريال
                                </p>
                            </div>
            
                            <div class="size_content">
                                <p class="size" title="الحجم">
                                    الحجم : R<span><?php echo $value['9'];?></span>
                                     <span><?php echo $value['7'];?></span>
                                     / <span><?php echo $value['8'];?></span>
                                </p>
                                
                            </div>
                        </div>

                    <p class="like_btn">
                        <span id="icon">
                        <i class='bx bx-like'></i>
                        </span>
                        <span id="count">0</span> إعجاب
                    </p>
                        
                        <input type="text" name="userid" value="<?php echo $userid;?>"hidden/>
                        <input type="text" name="tire_id" value="<?php echo $value['2'];?>"hidden/>
                        <input type="text" name="image" value="<?php echo $value['3'];?>"hidden/>
                        <input type="text" name="name" value="<?php echo $value['4'];?>"hidden/>
                        <input type="text" name="dec" value="<?php echo $value['5'];?>"hidden/>
                        <input type="text" name="price" value="<?php echo $value['6'];?>"hidden/>
                        <input type="text" name="ring" value="<?php echo $value['9'];?>"hidden/>
                        <input type="text" name="size1" value="<?php echo $value['7'];?>"hidden/>
                        <input type="text" name="size2" value="<?php echo $value['8'];?>"hidden/>
                        <input type="submit" class="add_product" name="add_product" value="إضافة إلى السلة">

                        
                    </div>
                </form>
            <?php
                }
            } else {
                if (empty($_SESSION["products"])) {
                    echo "<h1 class='message'> عذرا لا توجد منتجات </h1>"; 
                } else {
                // while($row = $products->fetch_assoc()) {
                foreach ($_SESSION['products'] as $key => $value) {
            ?>
                <form action="./includes/addToCart.inc.php" method="post" enctype="multipart/form-data">                 

                    <div class="card">
                        <div class="card_image">
                        <img src="./uploads/<?=$value['pic']?>" alt="صورة الكفر" title="صورة الكفر">
                        </div>
                        <h2 title="أسم الكفر" class="title" ><?php echo $value['name'];?></h2>
                        <p title="وصف الكفر"><?php echo $value['dec'];?></p>
                        <div class="wrapper">
                            <div class="price_content">
                                <p class="price" title="السعر">
                                السعر : <span> <?php echo $value['price'];?> </span> ريال
                                </p>
                            </div>
            
                            <div class="size_content">
                                <p class="size" title="الحجم">
                                    الحجم : R<span><?php echo $value['Ring_Size'];?></span>
                                     <span><?php echo $value['size1'];?></span>
                                     / <span><?php echo $value['size2'];?></span>
                                </p>
                                
                            </div>
                        </div>

                    <p class="like_btn" style="font-size: 15px;">
                        <span id="icon">
                        <i class='bx bx-like'></i>
                        </span>
                        <span id="count"><?php echo $value['likes'];?></span> 
                    </p>

                        <input type="text" name="userid" value="<?php echo $userid;?>"hidden/>
                        <input type="text" name="tire_id" value="<?php echo $value['tire_id'];?>"hidden/>
                        <input type="text" name="image" value="<?php echo $value['pic'];?>"hidden/>
                        <input type="text" name="name" value="<?php echo $value['name'];?>"hidden/>
                        <textarea type="text" name="dec" hidden><?php echo $value['dec'];?></textarea>
                        <input type="text" name="price" value="<?php echo $value['price'];?>"hidden/>
                        <input type="text" name="ring" value="<?php echo $value['Ring_Size'];?>"hidden/>
                        <input type="text" name="size1" value="<?php echo $value['size1'];?>"hidden/>
                        <input type="text" name="size2" value="<?php echo $value['size2'];?>"hidden/>
                        <input type="submit" class="add_product" name="add_product" value="إضافة إلى السلة">

                        
                    </div>
                </form>
            <?php
                }
            }     }    
            ?>
        </div>
    
        </section>
    
        <!-- نهاية جزء الصفحة الرئيسية -->
         <!-- بداية جزء أسفل الصفحة -->

     
     <footer>

        <div class="row">

            <div class="col">
                <img src="./assets/images/logo.png" width="200px" alt="شعار الموقع" />

                <p>
                   موقع كفراتي وسيط بين العميل و الشركة لتسهيل عملية البيع للعميل يطلب المنتج وهو في بيته نوفر عليه الوقت و الجهد
                </p>
            </div>
            <div class="col">
                <h3>تواصل معنا</h3>
                <p class="email_id">
                    myTires@gmail.com
                </p>
                <p>
                    054424242
                </p>
            </div>
            <div class="col">
                <h3>تابعنا</h3>

                <div class="soical_icons">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright">
            جميع الحقوق محفوظة | <span class="myTires">كفراتي</span> &copy; <span id="year"></span>
        </p>
     </footer>

    <!-- نهاية جزء أسفل الصفحة -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- custom js -->
    <script src="./assets/js/index.js"></script>
</body>
</html>
