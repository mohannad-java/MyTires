<?php
include './model/Db.php';
$conn = new Db();
$conn->connect();
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
        <a href="./cart.php" >
            <img src="./assets/images/add_cart.png" class="sala" alt="أيقونة سلة" title="للذهاب إلى المنتجات التي تمت إضافتها"/>
        </a>
    </li>
</ul>


</nav>

<div class="menu_toggle"> <i class="fa fa-bars"></i> </div>

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

                    <label>ماكسس</label>
                </div>

                <div class="option_3">
                    <input type="radio" class="radio" id="film" name="category" /> 

                    <label>هانكوك</label>
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

        <h1 class="heading-title">
            المنتجات
        </h1>
    
        <div class="container_product">
            
        <form action="">
            <div class="card">
                <div class="card_image">
                    <img src="./assets/images/Tires.png" alt="صورة الكفر" title="صورة الكفر" />
                </div>
    
                <h2 title="أسم الكفر" class="title" >أسم الكفر</h2>
                <p title="وصف الكفر">
                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
    
    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
    
    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                </p>
    
                <div class="wrapper">
                    <div class="price_content">
                        <p class="price" title="السعر">
                           السعر : <span> 200 </span> ريال
                        </p>
                    </div>
    
                    <div class="qnty_content">
                        <p class="qnty" title="الكمية">
                            الحجم : <span> 45 </span> R 
                        </p>
                    </div>
                </div>
    
                <input type="submit" class="add_product" name="add_product" value="إضافة إلى السلة">
            </div>
    </form>
    
            <div class="card">
                <div class="card_image">
                    <img src="./assets/images/Tires.png" alt="" />
                </div>
    
                <h2>أسم الكفر</h2>
                <p>
                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
    
    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
    
    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                </p>
    
                <div class="wrapper">
                    <div class="price_content">
                        <p class="price">
                           السعر : <span> 200 </span> ريال
                        </p>
                    </div>
    
                    <div class="qnty_content">
                        <p class="qnty">
                            الكمية : <span> 1000 </span>
                        </p>
                    </div>
                </div>
    
                <a href="#" title="إضافة إلى السلة">
                    إضافة إلى السلة
                </a>
            </div>
            
    
            <div class="card">
                <div class="card_image">
                    <img src="./assets/images/Tires.png" alt="" />
                </div>
    
                <h2>أسم الكفر</h2>
                <p>
                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
    
    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
    
    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                </p>
    
                <div class="wrapper">
                    <div class="price_content">
                        <p class="price">
                           السعر : <span> 200 </span> ريال
                        </p>
                    </div>
    
                    <div class="qnty_content">
                        <p class="qnty">
                            الكمية : <span> 1000 </span>
                        </p>
                    </div>
                </div>
    
                <a href="#" title="إضافة إلى السلة">
                    إضافة إلى السلة
                </a>
            </div>
    
            <div class="card">
                <div class="card_image">
                    <img src="./assets/images/Tires.png" alt="" />
                </div>
    
                <h2>أسم الكفر</h2>
                <p>
                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
    
    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
    
    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                </p>
    
                <div class="wrapper">
                    <div class="price_content">
                        <p class="price">
                           السعر : <span> 200 </span> ريال
                        </p>
                    </div>
    
                    <div class="qnty_content">
                        <p class="qnty">
                            الكمية : <span> 1000 </span>
                        </p>
                    </div>
                </div>
    
                <a href="#" title="إضافة إلى السلة">
                    إضافة إلى السلة
                </a>
            </div>
    
            <div class="card">
                <div class="card_image">
                    <img src="./assets/images/Tires.png" alt="" />
                </div>
    
                <h2>أسم الكفر</h2>
                <p>
                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
    
    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
    
    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                </p>
    
                <div class="wrapper">
                    <div class="price_content">
                        <p class="price">
                           السعر : <span> 200 </span> ريال
                        </p>
                    </div>
    
                    <div class="qnty_content">
                        <p class="qnty">
                            الكمية : <span> 1000 </span>
                        </p>
                    </div>
                </div>
    
                <a href="#" title="إضافة إلى السلة">
                    إضافة إلى السلة
                </a>
            </div>
    
            <div class="card">
                <div class="card_image">
                    <img src="./assets/images/Tires.png" alt="" />
                </div>
    
                <h2>أسم الكفر</h2>
                <p>
                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
    
    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
    
    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                </p>
    
                <div class="wrapper">
                    <div class="price_content">
                        <p class="price">
                           السعر : <span> 200 </span> ريال
                        </p>
                    </div>
    
                    <div class="qnty_content">
                        <p class="qnty">
                            الكمية : <span> 1000 </span>
                        </p>
                    </div>
                </div>
    
                <a href="#" title="إضافة إلى السلة">
                    إضافة إلى السلة
                </a>
            </div>
    
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
