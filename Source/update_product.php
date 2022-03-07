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
    <link rel="shortcut icon" href="./assets/images/fav.png" type="image/x-icon" />
    <link rel="shortcut icon" href="./assets/images/fav.png" type="image/x-icon" />
    <title>تعديل منتج</title>

    <link rel="stylesheet" href="./assets/css/product.css" />
</head>
<body>

     <!-- بداية رأس الصفحة -->
     <header>

        <div class="logo">
            <img src="./assets/images/logo.png" alt="Logo" />

        </div>
      

        <p class="name_company">أسم الشركة</p>

    </header>
    <!-- نهاية رأس الصفحة -->

    <div class="form_center">


        <div class="wrapper">

            <div class="form_container">
    
            <form action="#" method="POST" enctype="multipart/form-data">
                
                <!-- هنا الصورة -->
                <div class="formImg">

                    <input type="file" name="file" class="file_input" hidden/>
                    <img src="./assets/images/add_product.png" width="50px" alt=""/>
                    <p>أختار الصورة</p>

                </div>

                <!-- هنا إضافة بيانات الكفر -->

                <div class="form_inner">

                    <label for="nameTires">أسم الكفر</label>
                    <div class="field">
                        <input type="name" id="nameTires" name="tireName" placeholder="أدخل أسم الكفر" required/>
                    </div>

                    
                    <label for="nameTires">وصف الكفر</label>
                    <div class="field">
                        <textarea name="product_dec" cols="30" rows="10" placeholder="أوصف الكفر"></textarea>
                    </div>
                </div>

                <div class="user_details">

                <div class="input_box">
                    <span class="details">السعر</span>
                    <input type="text" name="price" placeholder="200" required />
                </div>

                <div class="input_box">
                    <span class="details">الكمية</span>
                    <input type="text" name="" placeholder="1000" required />
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
                <input type="submit" name="update" value="تعديل" />
            </div>

            </form>
            </div>
        </div>
        
    </div>


    <script src="./assets/js/product.js"></script>
</body>
</html>
