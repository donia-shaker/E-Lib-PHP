<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/signup.css" />
  </head>
  <body>
    <section>
      <div class="container" style="zoom: 0.9">
        <div class="box">
          <h4>انشاء حساب</h4>

          <form action="/save_user" method="POST">
            <div class="one">
              <input name="phone" type="text" placeholder="رقم الجوال" />
              <select name="" id="">
                <option value="+970">+970</option>
              </select>
              <span>رمز البلد</span>
            </div>
            <input  type="button" value="ارسال رمز التحقق" />
            <p>سوف نرسل لك<span> رمز التحقق </span>في رساله نصية</p>
            <input type="text" name="name" placeholder="الاسم " />
            <!-- <input type="text" placeholder="اسم العائلة" /> -->
            <!-- <input type="text" name="address" placeholder="العنوان" /> -->
            <input name="email"  type="email" placeholder="البريد الالكتروني" />
            <input type="email" name="per_email" placeholder="تاكيد البريد الالكتروني" />
            <input type="password" name="pass" placeholder="كلمة السر" />
            <div class="ckeckbox">
              <input type="checkbox" id="one" checked />
              <label for="one"
                >أوافق على <span>على الشروط والاحكام</span></label
              >
            </div>
            <div class="ckeckbox">
              <input type="checkbox" id="two" checked />
              <label for="two">التسجيل للانضمام للنشرة البريدية</label>
            </div>

            <input type="submit" value="انشاء حساب" />
          </form>
          <div class="three">
            لديك حساب؟ <a href="login">تسجيل الدخول> </a>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
