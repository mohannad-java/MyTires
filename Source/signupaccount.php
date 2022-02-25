    <?php 
        $title="إنشاء الحساب | عميل | شركة";
        $style = "account.css";
        include './component/header.php';
    ?>

    

    <img src="./assets/images/logo.png" title="شعار الموقع الرسمي" alt="Logo" />


    <div class="wrapper">

        <div class="form_container">

            <div class="slide_controls">
                <input type="radio" name="slider" id="user" checked/>
                <input type="radio" name="slider" id="company" />
                <label for="user" class="slide user">عميل</label>
                <label for="company" class="slide company">شركة</label>

            <div class="slide_tab .slide_tab2"></div>
            </div>

            <div class="form_inner">

                

                <!-- ############ نموذج إنشاء حساب العميل ########## -->

                <form action="#" class="user" method="post">
                    <label title="يفضل الأسم الثنائي" for="name">أسم العميل</label>
                    <div class="field">
                        <input type="name" id="name" name="name" placeholder="أدخل أسم العميل" required/>
                    </div>

                    <label title="يجب وضع بريد حقيقي" for="email">البريد الإلكتروني</label>
                    <div class="field">
                        <input type="email" id="email" name="email" placeholder="أدخل بريدك الإلكتروني" required/>
                    </div>

                    <label for="pass">كلمة المرور</label>
                    <div class="field">
                        <input type="password" id="pass" name="password" placeholder="أدخل كلمة المرور" required/>
                    </div>

                    <label for="confirmPass" >تأكيد كلمة المرور</label>
                    <div class="field">
                        <input type="password" id="confirmPass" name="confirmPass" placeholder="أدخل كلمة المرور" required/>
                    </div>

                    <div class="field">
                        <input type="submit" name="signUp" value="إنشاء الحساب" />
                    </div>

                    <div class="company_link">
                       تملك حساب؟ <a href="./loginaccount.php">أضغط هنا</a>
                    </div>
                </form>

                <!-- ############ نموذج إنشاء حساب الشركة ########## -->

                <form action="#" class="company">

                    <label for="nameComp">أسم الشركة</label>
                    <div class="field">
                        <input type="text" name="cname" placeholder="أدخل أسم الشركة" id="nameComp" required/>
                    </div>

                    <label for="email">البريد الإلكتروني</label>
                    <div class="field">
                        <input type="email" name="cemail" placeholder="أدخل بريدك الإلكتروني" id="email" required/>
                    </div>

                    <label for="password">كلمة المرور</label>
                    <div class="field">
                        <input type="password" name="cpassword" placeholder="أدخل كلمة المرور" id="password" required/>
                    </div>

                    <label for="confirmPass">تأكيد كلمة المرور</label>
                    <div class="field">
                        <input type="password" name="cconfirmPass" placeholder="تأكيد كلمة المرور" id="confirmPass" required/>
                    </div>

                    <div class="field">
                        <input type="submit" name="csignUp" value="إنشاء الحساب" />
                    </div>

                    <div class="company_link">
                        تملك حساب؟ <a href="./loginaccount.php">أضغط هنا</a>
                    </div>
                </form>

            </div>
        </div>
    </div>







    <!-- custom js -->
    <script src="./assets/js/account.js"></script>
</body>
</html>