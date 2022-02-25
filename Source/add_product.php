<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/fav.png" type="image/x-icon" />
    <title>كفراتي | إضافة منتج</title>

    <link rel="stylesheet" href="./assets/css/product.css" />
</head>
<body>

     <!-- بداية رأس الصفحة -->
     <header>

        <div class="logo">
            <img src="./assets/images/logo.png" alt="Logo" />

        </div>
      

        <p class="name_company">أسم الشركة</p>

        </div>

    </header>
    <!-- نهاية رأس الصفحة -->

    <div class="form_center">


        <div class="wrapper">

            <div class="form_container">
    
                    <form action="#" method="POST" enctype="multipart/form-data">
    
                        <!-- هنا الصورة -->
                        <div class="formImg">
    
                            <input type="file" name="file_input" class="file_input" hidden/>
                            <img src="./assets/images/add_product.png" width="50px" alt="">
                            <p>أختار الصورة</p>
    
                        </div>
    
                        <!-- هنا إضافة بيانات الكفر -->
    
                        <div class="form_inner">
    
                             <label for="nameTires">أسم الكفر</label>
                            <div class="field">
                                <input type="name" id="nameTires" name="name" placeholder="أدخل أسم الكفر" required/>
                            </div>
    
                            
                            <label for="nameTires">وصف الكفر</label>
                            <div class="field">
                                <textarea name="" cols="30" rows="10" placeholder="أوصف الكفر"></textarea>
                            </div>
                        </div>
    
                        <div class="user_details">

                        <div class="input_box">
                            <span class="details">السعر</span>
                            <input type="text" name="" placeholder="200" required />
                        </div>

                        <div class="input_box">
                            <span class="textSize">الحجم</span>
                            <select id="size">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                              </select>
                        </div>
    
                        <div class="input_box">
                            <span class="details">الكمية</span>
                            <input type="text" name="" placeholder="1000" required />
                        </div>
    
                    </div>
    
                    <div class="field">
                        <input type="submit" name="add" value="إضافة" />
                    </div>
    
                </form>
    
                </div>
        </div>
        
    </div>


    <script src="./assets/js/product.js"></script>
</body>
</html>
