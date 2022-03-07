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
    <link rel="shortcut icon" href="./images/fav.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="./assets/images/fav.png" type="image/x-icon"/>
    <title>كفراتي | الصفحة الرئيسية</title>

    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <!-- custom css link -->
    <link rel="stylesheet" href="./assets/css/company.css" />
    <link rel="stylesheet" href="./assets/css/media.css" />
</head>
<body>

    <!-- بداية رأس الصفحة -->
    <header>

        <div class="logo">
            <img src="./assets/images/logo.png" alt="شعار الموقع" />
        </div>
            
        <nav>
            <ul>
                <li>
                    <a href="./add_product.php">
                        <button class="signUp">
                        إضافة منتج
                        </button>
                    </a>
                </li>
                
                <li>
                    <a href="./signout.php">
                        <button class="login">
                            تسجيل خروج
                        </button>
                    </a>
                </li>


                <li>
                    <p class="name_company">أسم الشركة</p>
                </li>
            </ul>


        </nav>

<div class="menu_toggle"> <i class="fa fa-bars"></i> </div>


    </header>
    <!-- نهاية رأس الصفحة -->

    <!-- بداية جزء الصفحة الرئيسية -->

    <section class="container">

        <h1 class="heading-title">
            منتجاتي
        </h1>
    
        <div class="container_product">
    
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
                            الكمية : <span> 1000 </span>
                        </p>
                    </div>

                    <div class="qnty_content">
                        <p class="qnty" title="الكمية">
                            الحجم : <span> 23 </span> R
                        </p>
                    </div>
                </div>
    
                <div class="buttons">
                    <a href="./update_product.php" class="update" title="إضافة إلى السلة">
                        تعديل
                    </a>
                    <a href="./delete.php" class="delete" title="إضافة إلى السلة">
                        حذف
                    </a>
                </div>
            </div>

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
                            الكمية : <span> 1000 </span>
                        </p>
                    </div>

                    <div class="qnty_content">
                        <p class="qnty" title="الكمية">
                            الحجم : <span> 23 </span> R
                        </p>
                    </div>
                </div>
    
                <div class="buttons">
                    <a href="./update_product.php" class="update" title="إضافة إلى السلة">
                        تعديل
                    </a>
                    <a href="./delete.php" class="delete" title="إضافة إلى السلة">
                        حذف
                    </a>
                </div>
            </div>

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
                            الكمية : <span> 1000 </span>
                        </p>
                    </div>

                    <div class="qnty_content">
                        <p class="qnty" title="الكمية">
                            الحجم : <span> 23 </span> R
                        </p>
                    </div>
                </div>
    
                <div class="buttons">
                    <a href="./update_product.php" class="update" title="إضافة إلى السلة">
                        تعديل
                    </a>
                    <a href="./delete.php" class="delete" title="إضافة إلى السلة">
                        حذف
                    </a>
                </div>
            </div>

        </div>
    
        </section>
    
        <!-- نهاية جزء الصفحة الرئيسية -->

    <!-- بداية جزء أسفل الصفحة -->

     
     <footer>

        <div class="row">

            <div class="col">
                <img src="./assets/images/logo.png" width="180" alt="شعار الموقع" />

                <p>
                    نقطة بيع بين العميل و الشركة
                    تطلب كفرك و أنت في بيتك
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
        <hr/>
        <p class="copyright">
            جميع الحقوق محفوظة | <span class="myTires">كفراتي</span> &copy; <span id="year"></span>
        </p>
     </footer>

    <!-- نهاية جزء أسفل الصفحة -->


    <script src="./assets/js/company.js"></script>
</body>
</html>
