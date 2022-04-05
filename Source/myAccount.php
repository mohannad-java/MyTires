<?php
include './models/Db.php';
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
    <link rel="shortcut icon" href="./assets/images/fav.png" type="image/x-icon"/>
    <title>حسابي</title>

    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <!-- custom css link -->
    <link rel="stylesheet" href="./assets/css/myAccount.css" />
    <link rel="stylesheet" href="./assets/css/media.css" />
</head>
<body>
    
<a href="./index.php"><img src="./assets/images/logo.png" class="logo" alt="Logo" /></a>


    <div class="container">

                <form action="./includes/updateUser.inc.php" method="post" class="myAccount" enctype="multipart/form-data">
                <input type="hidden" name="userid" value="<?php echo $_SESSION["userid"]; ?>">
                <div class="form_group">
                    <label for="name">الأسم</label>
                    <div class="input_group">

                    <input type="text" id="name" name="name" value="<?php echo $_SESSION["username"]; ?>" required/>
                    <i class='bx bxs-user'></i>
                    </div>
                </div>

                <div class="form_group">
                    <label for="email">البريد الإلكتروني</label>
                    <div class="input_group">

                    <input type="email" id="email" name="email" value="<?php echo $_SESSION["email"]; ?>" required/>
                    <i class="bx bx-envelope"></i>
                    </div>
                </div>
                <div class="form_group">
                    <label for="password">كلمة المرور الجديدة</label>
                    <div class="input_group">

                    <input type="password" pattern=".{8,}" id="password" name="password" placeholder="أدخل كلمة المرور" required/>
                    </div>

                    <span class="help_text">يجب أن تكون أكثر من 8 أحرف</span>
                </div>

                <div class="form_group">
                    <label for="cPass">تأكيد كلمة المرور</label>
                    <div class="input_group">

                    <input type="password" id="confirmPass" name="confirmPass" placeholder="أكتب كلمة المرور مرة أخرى" required/>
                </div>

                    <span class="help_text">يجب أن تكون كلمة المرور متوافقة</span>
                </div>

                <input type="submit" name="edit" value="تعديل" class="btn_submit" />

                </form>
        </div>






    <!-- custom js -->
    <script src="./assets/js/account.js"></script>
</body>
</html>
