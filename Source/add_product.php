<?php
include "./models/Db.php";
$conn = new Db();
$conn->connect();
session_start();

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="كفراتي هو نقطة بيع بين العميل و الشركة أطلب كفرك و أنت في بيتك" />
    <meta name="keywords" content="كفرات, سيارات, كفراتي, سيارة, تصليح, صيانة, عالم السيارات, بيع, شراء" />
    <link rel="shortcut icon" href="./assets/images/fav.png" type="image/x-icon" />
    <title>كفراتي | إضافة منتج</title>
    
    <!-- custom css link -->
    <link rel="stylesheet" href="./assets/css/product.css" />

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
        

            <p class="name_company"><?php echo $_SESSION['username'] ?></p>
        <?php } else {
            header("Location: ./loginaccount.php");
        } ?>
    </header>
    <!-- نهاية رأس الصفحة -->

    <div class="form_center">


        <div class="wrapper">

            <div class="form_container">
    
            <form action="./includes/addProducts.inc.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="userid" value="<?php echo $_SESSION['userid']?>">
                <!-- هنا الصورة -->
                <div class="formImg">

                    <input type="file" name="file" class="file_input" hidden/>
                    <img src="./assets/images/add_product.png" width="50px" alt="" />
                    <p>أختار الصورة</p>

                </div>

                <!-- هنا إضافة بيانات الكفر -->

                <div class="form_inner">

                    <label for="nameTires">أسم الكفر</label>
                    <div class="field">
                        <!-- <input type="name" id="nameTires" name="name" placeholder="أدخل أسم الكفر" required/> -->
                        <div class="select">
                        <select name="name" id="standard-select">
                            <option selected disabled>أختر أسم الكفر</option>
                            <option value="Goodyear">Goodyear</option>
                            <option value="Hankook">Hankook</option>
                            <option value="Michelin">Michelin</option>
                        </select>
                        </div>
       
                    </div>

                    
                    <label for="nameTires">وصف الكفر</label>
                    <div class="field">
                        <textarea name="dec" cols="30" rows="10" placeholder="أوصف الكفر"></textarea>
                    </div>
                </div>

                <div class="user_details">

                <div class="input_box">
                    <span class="details">السعر</span>
                    <input type="text" name="price" placeholder="200" required />
                </div>

                <div class="input_box">
                    <span class="details">الكمية</span>
                    <input type="text" name="qty" placeholder="1000" required />
                </div>

            </div>

            <div class="size_box">
                <span class="details">الحجم</span>
                    <input type="text" name="size1" placeholder="حجم" required />
                    <span style="color: #fff; margin-bottom: 10px; font-size: 17px;">/</span>
                    <input type="text" name="size2" placeholder="حجم" required />
                    <span style="color: #fff; margin-bottom: 10px; font-size: 17px;">R</span>
                    <input type="text" name="ring" placeholder="حجم" required />
                </div>

            <div class="field">
                <input type="submit" name="add" value="إضافة" />
            </div>

            </form>
    
                </div>
        </div>
        
    </div>

    <!-- مكتبة sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="./assets/js/product.js"></script>
</body>
</html>
