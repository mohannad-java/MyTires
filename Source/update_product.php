<?php
include './models/Db.php';
$conn = new Db();
$conn->connect();

if(isset($_GET['tire_id'])) {
    include "./models/Products.php";
    session_start();
    $userid = $_SESSION["userid"];
    $tireid = $_GET['tire_id'];

    $product = new Products();
    $products = $product->getCompanyProduct($userid, $tireid);
    if (!$products) {
        echo "Product not found"; 
    } else { 
        
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
        <a href="./index.php"><img src="./assets/images/logo.png"  alt="Logo" /></a>

        </div>
      

        <p class="name_company">أسم الشركة</p>

    </header>
    <!-- نهاية رأس الصفحة -->

    <div class="form_center">


        <div class="wrapper">

            <div class="form_container">
            <?php while($row = $products->fetch_assoc()) { ?>
            <form action="./includes/updateProduct.inc.php" method="POST" enctype="multipart/form-data">
                
            <input type="hidden" name="userid" value="<?php echo $_SESSION['userid']?>">
            <input type="hidden" name="tireid" value ="<?php echo $row['tire_id']; ?>">
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
                            <input type="name" id="nameTires" name="name" value ="<?php echo $row['name'];?>" required/>
                        </div>


                        <label for="nameTires">وصف الكفر</label>
                        <div class="field">
                            <textarea name="dec" cols="30" rows="10" value ="<?php echo $row['dec'];?>"></textarea>
                        </div>
                        </div>

                        <div class="user_details">

                        <div class="input_box">
                        <span class="details">السعر</span>
                        <input type="text" name="price" value ="<?php echo $row['price'];?>" required />
                        </div>

                        <div class="input_box">
                        <span class="details">الكمية</span>
                        <input type="text" name="qty" value ="<?php echo $row['qty'];?>" required />
                        </div>

                        </div>

                        <div class="size_box">
                        <span class="details">الحجم</span>
                        <input type="text" name="size1" value ="<?php echo $row['size1'];?>" required />
                        <span style="color: #fff; margin-bottom: 10px; font-size: 17px;">/</span>
                        <input type="text" name="size2" value ="<?php echo $row['size2'];?>" required />
                        <span style="color: #fff; margin-bottom: 10px; font-size: 17px;">R</span>
                        <input type="text" name="ring" value ="<?php echo $row['Ring_Size'];?>" required />
                        </div>

            <div class="field">
                <input type="submit" name="update" value="تعديل" />
            </div>
        
        </form>
                <?php
                    }
                }
            }

                ?>
            </div>
        </div>
        
    </div>


    <script src="./assets/js/product.js"></script>
</body>
</html>
