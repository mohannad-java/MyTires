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

    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

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

            <img src="./assets/images/Group.png" class="filtr" alt="filtr" />


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
                        <li><a href="./myAccount.php">حسابي</a></li>
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

            <img src="./assets/images/Group.png" class="filtr" alt="filtr" />


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

    
    <form action="" method="post">

        <div class="select_box">

            <div class="options_container">

                <div class="option">
                    <input type="radio" class="radio" name="category" /> 

                    <label>ماكسس</label>
                </div>

                <div class="option">
                    <input type="radio" class="radio" name="category" /> 

                    <label>هانكوك</label>
                </div>

            </div>

            <div class="selected">
                الشركات
            </div>

        </div>

        <div class="select_box2">

            <div class="options_container_2">

                <div class="option_2">
                    <input type="radio" class="radio" name="category" /> 

                    <label>ماكسس</label>
                </div>

                <div class="option_2">
                    <input type="radio" class="radio"name="category" /> 

                    <label>هانكوك</label>
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

    <section class="container">

        <?php
            if (!$products) {
                
            } else {
                echo '<h1 class="heading-title">
                المنتجات
            </h1>';
            }
        ?>
    
        <div class="container_product">
            <?php 
            if (!$products) {
                echo "<h1 class='message'> عذرا لا توجد منتجات </h1>"; 
            } else {
                while($row = $products->fetch_assoc()) {
            ?>
                <form action="./includes/addToCart.inc.php" method="post" enctype="multipart/form-data">                 

                    <div class="card">
                        <div class="card_image">
                        <img src="./uploads/<?=$row['pic']?>" alt="صورة الكفر" title="صورة الكفر">
                        </div>
                        <h2 title="أسم الكفر" class="title" ><?php echo $row['name'];?></h2>
                        <p title="وصف الكفر"><?php echo $row['dec'];?></p>
                        <div class="wrapper">
                            <div class="price_content">
                                <p class="price" title="السعر">
                                السعر : <span> <?php echo $row['price'];?> </span> ريال
                                </p>
                            </div>
            
                            <div class="size_content">
                                <p class="size" title="الحجم">
                                    الحجم : R<span><?php echo $row['Ring_Size'];?></span>
                                     <span><?php echo $row['size1'];?></span>
                                     / <span><?php echo $row['size2'];?></span>
                                </p>
                                
                            </div>
                        </div>
                        <input type="text" name="userid" value="<?php echo $userid;?>"hidden/>
                        <input type="text" name="tire_id" value="<?php echo $row['tire_id'];?>"hidden/>
                        <input type="text" name="image" value="<?php echo $row['pic'];?>"hidden/>
                        <input type="text" name="name" value="<?php echo $row['name'];?>"hidden/>
                        <input type="text" name="dec" value="<?php echo $row['dec'];?>"hidden/>
                        <input type="text" name="price" value="<?php echo $row['price'];?>"hidden/>
                        <input type="text" name="ring" value="<?php echo $row['Ring_Size'];?>"hidden/>
                        <input type="text" name="size1" value="<?php echo $row['size1'];?>"hidden/>
                        <input type="text" name="size2" value="<?php echo $row['size2'];?>"hidden/>
                        <input type="submit" class="add_product" name="add_product" value="إضافة إلى السلة">

                        
                    </div>
                </form>
            <?php
                }
            }  ?>
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
