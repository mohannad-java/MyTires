<?php
include './models/Db.php';
$conn = new Db();
$conn->connect();
session_start();
include './includes/getCart.inc.php';
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
             <a href="./index.php"><img src="./assets/images/logo.png" alt="Logo" /></a>
            
        </div>
      
        <nav>
            <ul>

                <div class="dropdown">
                            <button class="user">
                            <?php echo $_SESSION['username'] ?>
                            </button>
                    <ul>
                        <li><a href="./myAccount.php">حسابي</a></li>
                        <li><a href="./myCart.php">طلباتي</a></li>
                    </ul>
                </div>
            </ul>
        </nav>
        </ul>

    </header>
    <!-- نهاية رأس الصفحة -->

    
    <div class="container">
        <?php
            if (!$Carts) {
                echo '<h1 class="message">لا توجد منتجات مضافة</h1>'; 
            }
            else
            {
                echo "<h1>عربة التسوق</h1>";
            }
        ?>
        <div class="cart">
            <div class="products">
        <?php 
        $namep=array();
        $pricep=array();
        $addToOrders=array(array());
        $i=0;
        $z=0;
        $order=1;
            if (!$Carts) {
            } else {
                while($row = $Carts->fetch_assoc()) {
                    $z=0;
                    $addToOrders[$i][$z]=$order;
                    $z++;
                    $addToOrders[$i][$z]=$row['user_id'];
                    $z++;
                    $addToOrders[$i][$z]=$row['tire_id'];
                    $z++;
                    $addToOrders[$i][$z]=$row['qty'];
                    $namep[$i]= $row['name'];
                    $pricep[$i]= $row['price'];
                    $i++;
            ?>
        
                <div class="product">
                <img src="./uploads/<?=$row['pic']?>" alt="صورة الكفر" title="صورة الكفر">
                    <div class="product_info">
                        <h3 class="product_name"><?php echo $row['name'];?></h3>
                        <h4 class="product_price">ريال <?php echo $row['price'];?></h4>
                        <p class="product_quantity">العدد
                            <input value="1" name="qnt" />
                        </p>

                        <p class="product_update">
                        <i class="fas fa-edit"></i>
                            <a><span class="update">تعديل</span></a>
                        </p>

                        <p class="product_remove">
                            <i class="fas fa-trash" aria-hidden="true"></i>
                            <!--we need to hide blue color on text(delete) ------------------------->
                            <a style="text-decoration:none" href="./includes/deleteCart.inc.php?tire_id=<?php echo $row['tire_id']; ?>"><span class="remove">حذف</span></a>
                        </p>
                    </div>
                </div>
                   <?php
                }
            }  
           

            if(empty($pricep[0])){

            }
            else{

            ?>  
            </div>
           


            <div class="cart_total">
           
                <p>
                    <span>الطلب</span>
                    <span style="margin-left: 30px;"></span>
                </p>

                <hr class="line" />

                <p style="margin-top: 20px;">
                    <span style="color: hsla(360, 100%, 52%, 1); font-weight: 700;">أسم الكفر</span>
                    <span style="color: hsla(360, 100%, 52%, 1); font-weight: 700;">المجموع</span>
                </p>
                <?php 
                $total=0;
                for($x=0;$x<$i;$x++){
                $total+=$pricep[$x];
                ?>
                <p>
                    <span><?php echo $namep[$x]; ?></span>
                    <span><span><?php echo $pricep[$x]; ?></span> ريال</span>
                </p>
                <?php }
                $vat=$total*0.15;
                $totalall=$vat+$total;
                for($x=0;$x<$i;$x++){
                    $addToOrders[$x][4]=$totalall;
                 }
                ?>
                
                <hr class="line" />
                <p style="margin-top: 10px;">
                    <span>المجموع الكلي</span>
                    <span class="price"><span><?php echo $total; ?></span> ريال</span>
                </p>

                <p>
                    <span>الضريبة</span>
                    <span class="price"><span><?php echo $vat; ?></span> ريال</span>
                </p>

                <p>
                    <span>المجموع مع الضريبة</span>
                    <span class="price"><span><?php echo $totalall; ?></span> ريال</span>
                </p>

                <a href="#" onclick="alertSweet()">إتمام الطلب</a>
            </div>
              <?php
             }
            ?>
        </div>
    </div>
 
    
    <!-- مكتبة sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="./assets/js/cart.js"></script>
</body>
</html>
