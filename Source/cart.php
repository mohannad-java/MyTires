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
    <link rel="shortcut icon" href="./assets/images/fav.png" type="image/x-icon"/>
    <title>عربة التسوق</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <link rel="stylesheet" href="./assets/css/cart.css" />
</head>
<body>

    <!-- بداية رأس الصفحة -->
    <header>

        <div class="logo">
            <img src="./assets/images/logo.png" alt="Logo" />

        </div>
      

        <p class="name_user">أسم العميل</p>


    </header>
    <!-- نهاية رأس الصفحة -->

    <div class="container">
        <h1>عربة التسوق</h1>

        <div class="cart">
            <div class="products">
                <div class="product">
                    <img src="./assets/images/Tires.png" alt="" />
                    <div class="product_info">
                        <h3 class="product_name">أسم الكفر</h3>
                        <h4 class="product_price">100 ريال</h4>
                        <p class="product_quantity">العدد
                            <input value="1" name="qnt" />
                        </p>

                        <p class="product_remove">
                            <i class="fas fa-trash" aria-hidden="true"></i>
                            <span class="remove">حذف</span>
                        </p>
                    </div>
                </div>

                <div class="product">
                    <img src="./assets/images/Tires.png" alt="" />
                    <div class="product_info">
                        <h3 class="product_name">أسم الكفر</h3>
                        <h4 class="product_price">100 ريال</h4>
                        <p class="product_quantity">العدد
                            <input value="1" name="qnt" />
                        </p>

                        <p class="product_remove">
                            <i class="fas fa-trash" aria-hidden="true"></i>
                            <span class="remove">حذف</span>
                        </p>
                    </div>
                </div>

                <div class="product">
                    <img src="./assets/images/Tires.png" alt="" />
                    <div class="product_info">
                        <h3 class="product_name">أسم الكفر</h3>
                        <h4 class="product_price">100 ريال</h4>
                        <p class="product_quantity">العدد
                            <input value="1" name="qnt" />
                        </p>

                        <p class="product_remove">
                            <i class="fas fa-trash" aria-hidden="true"></i>
                            <span class="remove">حذف</span>
                        </p>
                    </div>
                </div>

            </div>

            <div class="cart_total">

                <p>
                    <span>رقم الطلب</span>
                    <span style="margin-left: 30px;">#1</span>
                </p>

                <hr class="line" />

                <p style="margin-top: 20px;">
                    <span style="color: hsla(360, 100%, 52%, 1); font-weight: 700;">أسم الكفر</span>
                    <span style="color: hsla(360, 100%, 52%, 1); font-weight: 700;">المجموع</span>
                </p>

                <p>
                    <span>بريلي</span>
                    <span><span>3000</span> ريال</span>
                </p>

                <p>
                    <span>ديلو</span>
                    <span><span>400</span> ريال</span>
                </p>


                <p>
                    <span>ميشلان</span>
                    <span><span>800</span> ريال</span>
                </p>


                <hr class="line" />
                <p style="margin-top: 10px;">
                    <span>المجموع الكلي</span>
                    <span class="price"><span>3400</span> ريال</span>
                </p>

                <p>
                    <span>الضريبة</span>
                    <span class="price"><span>480</span> ريال</span>
                </p>

                <p>
                    <span>المجموع مع الضريبة</span>
                    <span class="price"><span>3680</span> ريال</span>
                </p>

                <a href="#" onclick="alertSweet()">إتمام الطلب</a>
            </div>
        </div>
    </div>
    
    <!-- مكتبة sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="./assets/js/cart.js"></script>
</body>
</html>
