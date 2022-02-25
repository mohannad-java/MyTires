<?php 
        $title="تسجيل دخول | عميل | شركة";
        $style = "account.css";
        include './component/header.php';
    ?>





    <img src="./assets/images/logo.png" title="شعار الموقع الرسمي" alt="Logo" />


    <div class="wrapper" style="height: 490px;">

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

                    <label title="يجب وضع بريد حقيقي" for="email">البريد الإلكتروني</label>

                    <div class="field">
                        <input type="email" id="email" name="email" placeholder="أدخل بريدك الإلكتروني" required/>
                    </div>

                    <label for="pass">كلمة المرور</label>

                    <div class="field">
                        <input type="password" id="pass" name="password" placeholder="أدخل كلمة المرور" required/>
                    </div>

                    <div class="field">
                        <input type="submit" name="login" value="تسجيل الدخول" />
                    </div>

                    <div class="user_link">
                        لا تملك حساب؟ <a href="./signupaccount.php">إنشئ حسابك</a>
                    </div>
                </form>

                <!-- ############ نموذج إنشاء حساب الشركة ########## -->

                <form action="#" class="company">

                    <label for="email">البريد الإلكتروني</label>
                    <div class="field">
                        <input type="email" name="cemail" placeholder="أدخل بريدك الإلكتروني" id="email" required/>
                    </div>

                    <label for="password">كلمة المرور</label>
                    <div class="field">
                        <input type="password" name="cpassword" placeholder="أدخل كلمة المرور" id="password" required/>
                    </div>

                    <div class="field">
                        <input type="submit" name="clogin" value="تسجيل الدخول" />
                    </div>

                    <div class="company_link">
                        لا تملك حساب؟ <a href="signupaccount.php">إنشئ حسابك</a>
                    </div>
                </form>

            </div>
        </div>
    </div>







    <!-- custom js -->
    <script src="./assets/js/account.js"></script>
</body>
</html>