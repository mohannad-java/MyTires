<?php
include './models/Db.php';
$conn = new Db();
$conn->connect();
session_start();
include './includes/getCompanyProduct.inc.php';
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <!-- custom css link -->
    <link rel="stylesheet" href="./assets/css/company.css" />
    <link rel="stylesheet" href="./assets/css/media.css" />
</head>
<body>

    <!-- بداية رأس الصفحة -->
    <header>
            <?php if (isset($_SESSION['userid'])) {
            if ($_SESSION['role'] == "user") {
                header("Location: ./index.php");
                exit();
            }
            ?>
                <div class="logo">
                <a href="./company.php"><img src="./assets/images/logo.png" alt="Logo" /></a>
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
                            <a href="./includes/logout.inc.php">
                                <button class="login">
                                    تسجيل خروج
                                </button>
                            </a>
                        </li>


                        <li>
                            <p class="name_company"><?php echo $_SESSION['username'] ?></p>
                        </li>
                    </ul>


                </nav>
            
                <div class="menu_toggle"> <i class="fa fa-bars"></i> </div>
        <?php } else {
            header("Location: ./loginaccount.php");
        } ?>
    </header>
    <!-- نهاية رأس الصفحة -->

    <!-- بداية جزء محتوى الصفحة  -->
    <?php
//---------------------------------------------------------------------------
 $success = (isset($_GET['success']) ? $_GET['success'] : '');
        // Grabbing the data
      if($success == 'addProducts')
      {
        echo '<script type="text/javascript">
        swal({
            title: "تم إضافة المنتج",
            icon: "success",
            button: "تمام",
          });
        </script>';
      }
//---------------------------------------------------------------------------
?>

    <section class="container">

        <?php

            if (!$products) {
            } else {
                echo '<h1 class="heading-title">
                منتجاتي
            </h1>';
            }

            ?>
    
        <div class="container_product">
        <?php 
                if (!$products) {
                    echo "<h1 class='message'> لم تقم بإضافة منتجات بعد </h1>"; 
                } else {
                    while($row = $products->fetch_assoc()) {
            ?>
                <div class="card">
                    <div class="card_image">
                        <!-- <?php echo '<img src="data:image;base64,'.base64_encode($row['pic']).'" alt="صورة الكفر" title="صورة الكفر">'; ?> -->
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
        
                        <div class="qnty_content">
                            <p class="qnty" title="الكمية">
                                الكمية : <span> <?php echo $row['qty'];?> </span>
                            </p>
                        </div>
                        
                            

                        <div class="qnty_content">
                            <p class="qnty" title="الكمية">
                            الحجم : R<span><?php echo $row['Ring_Size'];?></span> <span><?php echo $row['size2'];?></span> / <span><?php echo $row['size1'];?></span>
                            </p>
                        </div>
                    </div>
        
                    <div class="buttons">
                        <a href="./update_product.php?tire_id=<?php echo $row['tire_id']; ?>" class="update" title="إضافة إلى السلة">
                            تعديل
                        </a>
                        <a href="./includes/deleteProducts.inc.php?tire_id=<?php echo $row['tire_id']; ?>" class="delete" title="إضافة إلى السلة">
                            حذف
                        </a>
                    </div>
                </div>
            <?php
                }
            }  ?>
        </div>
    
        </section>
    
        <!-- بداية جزء محتوى الصفحة -->

    <!-- بداية جزء أسفل الصفحة -->

     
     <footer>

        <div class="row">

            <div class="col">
                <img src="./assets/images/logo.png" width="200" alt="شعار الموقع" />

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
        <hr/>
        <p class="copyright">
            جميع الحقوق محفوظة | <span class="myTires">كفراتي</span> &copy; <span id="year"></span>
        </p>
     </footer>

    <!-- نهاية جزء أسفل الصفحة -->


    <script src="./assets/js/company.js"></script>
</body>
</html>
