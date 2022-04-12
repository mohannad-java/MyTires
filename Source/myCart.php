<?php
include './models/Db.php';
$conn = new Db();
$conn->connect();
session_start();

include './includes/getOrder.inc.php';
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="./assets/css/cart.css" />
</head>
<body>

    <!-- بداية رأس الصفحة -->
    <header>

        <div class="logo">
        <a href="./index.php"><img src="./assets/images/logo.png" alt="Logo" /></a>

        </div>
      

        <p class="name_user"><?php echo $_SESSION['username'] ?></p>


    </header>
    <!-- نهاية رأس الصفحة -->

    <!-- بداية القائمة المنسدلة --> 

    <div class="dropdown">
        <form action="./includes/getSelectedOrder.inc.php" method="post">
            <div class="selector">

                <div id="selectField">
                    <p id="selectText">أختر رقم الطلب</p>
                    <img src="./assets/images/Polygon 1.svg" id="arrowIcon" alt="" />
                </div>
                
                <ul id="list">
                    <?php foreach ($_SESSION['order_id'] as $key => $value) { ?>
                    <li class="options">
                        <p>
                            <input type="radio" name="selectedId" class="radio" id="<?php echo $value['order_id']; ?>" value="<?php echo $value['order_id'] ;?>"/>

                            <label for="<?php echo $value['order_id']; ?>"><?php echo '#'.$value['order_id']; ?></label>
                        </p>   
                    </li>
                    <?php } ?>
                </ul>

            </div>

            <input type="submit" class="tm" id="tm" name="tm" value="تم" />

        </form>
    </div>  
    
<?php if (isset($_SESSION['selectedOrder'])) { ?>
    <div class="container">
        <h1>عربة التسوق</h1>

        <div class="cart">
            <div class="products">
                <?php foreach ($_SESSION['selectedOrder'] as $key => $value) { ?>
                
                <div class="product">
                    <img src="./uploads/<?php echo $value[1] ;?>" alt="" />
                    <div class="product_info">
                        <h3 class="product_name"><?php echo $value[2] ;?></h3>
                        <h4 class="product_price"><?php echo $value[3] ;?></h4>
                        <p class="product_quantity">العدد
                            <input value="<?php echo $value[4] ;?>" name="qnt" />
                        </p>
                        
                        
                        <form action="./includes/likeProduct.inc.php" method="post">
                        <input type="text" name="userid" value="<?php echo $_SESSION["userid"] ?>" hidden>
                        <input type="text" name="tireid" value="<?php echo $value[0]; ?>" hidden>
                        <button type="submit" name="submit">
                            <p class="like_btn">
                                <span id="icon">
                                    <i class='bx bx-like'></i>
                                </span>
                                <span id="count"><?php echo $value[5] ;?></span> إعجاب
                            </p>
                        </button>
                        </form>
                    </div>
                </div>
                <?php } ?>
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
                <?php 
                $total = 0;
                $totalAll = 0;
                ?>
                <?php foreach ($_SESSION['selectedOrder'] as $key => $value) { 
                    $total = $value[3] * $value[4];
                    $totalAll = $totalAll + $total;
                    
                    ?>
                <p>
                    <span><?php echo $value[2] ;?></span>
                    <span><span><?php echo $total ;?></span> ريال</span>
                </p>
               <?php 
                    $total = 0;  
                } 
                ?>

                <hr class="line" />
                <p style="margin-top: 10px;">
                    <span>المجموع الكلي</span>
                    <span class="price"><span><?php echo $totalAll ;?></span> ريال</span>
                </p>

                <p>
                    <span>الضريبة</span>
                    <span class="price"><span><?php echo $totalAll*0.15 ;?></span> ريال</span>
                </p>

                <p>
                    <span>المجموع مع الضريبة</span>
                    <span class="price"><span><?php echo $totalAll + $totalAll*0.15 ;?></span> ريال</span>
                </p>

            </div>
        </div>
    </div>
    <?php } else { ?>
        <div class="container">
            <h1>عربة التسوق</h1>
        </div>    
    <?php } 
    $error = (isset($_GET['error']) ? $_GET['error'] : '');
    $success = (isset($_GET['success']) ? $_GET['success'] : '');
    if($error == 'alreadyLiked')
      {
        echo '<script type="text/javascript">
        swal({
            title: "لقد قمت بالاعجاب مسبقا",
            text: "",
            icon: "error",
            button: "تمام",
          });
        </script>';
      }
    if($success == 'likedProduct')
      {
        echo '<script type="text/javascript">
        swal({
            title: "لقد قمت بالاعجاب",
            text: "",
            icon: "success",
            button: "تمام",
          });
        </script>';
      }
    ?>
    <!-- مكتبة sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="./assets/js/cart.js"></script>
</body>
</html>
