<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- CSS Normalized -->
    <link rel="stylesheet" href="css/normalized.css" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500;700;800;900&display=swap"
      rel="stylesheet"
    />
    <!-- Css Fils -->
    <link rel="stylesheet" href="css/steps.css" />
    <link rel="stylesheet" href="css/header_footer_book.css" />
  </head>
  <body>
    <!-- start header -->
    <header>
      <div class="container">
        <nav>
          <hr />
          <i class="fas fa-bars first"></i>
          <ul>
            <li class="border">
              <a>
                <i class="fas fa-user"></i
                ><a id="show-model"> ادخل لحسابك</a> او<a
                  id="show-model-signup"
                >
                  سجل الان</a
                >
              </a>
            </li>
            <li>
              <a href="books_page"><i class="fas fa-star"></i>ألرئيسية</a>
            </li>
            <li>
              <a href="#"><i class="fas fa-truck"></i>من نحن</a>
            </li>
            <li>
              <a href="#"><i class="fas fa-shield-alt"></i>اتصل بنا</a>
            </li>
            <li>
              <a href="#"><i class="fas fa-info-circle"></i>ألمسأعدة</a>
            </li>
            <li>
              <a href="#"
                ><i class="fas fa-map-marker-alt"></i>سيأسة ألخصوصية</a
              >
            </li>
            <li>
              <a href="#"
                ><img src="images/flag.png" alt="" />أليمن
                YER</a
              >
            </li>
            <li class="last">
              <a href="#"><i class="fas fa-language"></i>Engish</a>
            </li>
          </ul>
          <hr />
        </nav>

        <!-- end nav -->
        <!-- start Search -->
        <div class="search">
          <img src="images/logo.PNG" alt="" />
          <div class="input-search">
            <input
              type="search"
              onkeyup="searchBook()"
              placeholder="ابحث"
              id="searchbar"
            />
            <i class="fas fa-search"></i>
          </div>
          <a href="checkout"
            ><span id="counter"></span
            ><i class="fas fa-cart-plus" id="count"></i
          ></a>
        </div>
        <!-- end search -->
      </div>
    </header>
    <!-- end Header -->
    <!-- add model -->
    <div class="model" id="model">
      <div class="model-content">
        <iframe id="ifram" src="" frameborder="0"></iframe>
      </div>
    </div>
    <!-- end  header model -->

    <!-- start Steps -->
    <section class="stepe">
      <div class="container">
        <div class="container-content">
          <div class="line"><div id="line" class="line-2"></div></div>
          <div class="circle one">1</div>
          <div class="circle">2</div>
          <div class="circle">3</div>
          <div class="circle">4</div>
        </div>
      </div>
      <!-- add model -->
      <div class="model-step-four" id="model-step-four">
        <div class="model-content">
          <div><h1>تمت عملية الشراء بنجاح</h1></div>
          <a href="../books_page"><button id="btn">اغلاق</button></a>
        </div>
      </div>
      <div class="container-content">
        <iframe id="pages" src="step_one" frameborder="0"></iframe>
      </div>
      <div class="button container-content">
        <button id="prev-btn">السابق</button>
        <button id="next-btn">التالي</button>
      </div>
    </section>
    <!-- Start Footer Section -->
    <footer>
      <div class="container">
        <div class="content">
          <!-- Start Asid Part -->
          <aside>
            <div class="box">
              <h4>انضم إلى نشرتنا البريدية</h4>
              <form action="">
                <input
                  type="email"
                  name=""
                  id=""
                  placeholder="ادخل بريدك الالكتروني"
                />
                <input type="submit" value="أشترك" />
              </form>
            </div>
          </aside>
          <!-- End Asid Part -->

          <!-- Start Left Part -->
          <div class="boxes">
            <!-- first column -->
            <div class="box">
              <h4>خدمة العملاء</h4>
              <ul>
                <li><a href="#">مبيعات الشركات</a></li>
                <li><a href="#">الأسئلة المتكررة</a></li>
                <li><a href="#">دليل التسوق والمطبوعات</a></li>
                <li><a href="#">مواقع المعارض</a></li>
                <li><a href="#">سياسة الضمان</a></li>
                <li><a href="#">سياسة الاسترجاع والاستبدال</a></li>
                <li><a href="#">اتصل بنا ></a></li>
                <li><a href="#">920000089</a></li>
              </ul>
            </div>

            <!-- second column -->
            <div class="box">
              <h4>خدمات جرير</h4>
              <ul>
                <li><a href="#">تذاكر جرير</a></li>
                <li><a href="#">خدمة تقسيط المشتريات</a></li>
                <li><a href="#">خدمات ما بعد البيع</a></li>
                <li><a href="#">خدمة الحماية الشاملة</a></li>
                <li><a href="#">خدمة تمديد الضمان</a></li>
                <li><a href="#">حماية أجهزة آبل</a></li>
                <li><a href="#">بطاقة خصم جرير</a></li>
                <li><a href="#">بطاقة جرير للهدايا</a></li>
              </ul>
            </div>

            <!-- third column -->
            <div class="box">
              <h4>روابط سريعة</h4>
              <ul>
                <li><a href="#">إصدارات جرير</a></li>
                <li><a href="#">قارئ جرير</a></li>
                <li><a href="#">شركاء برامج المكافئات</a></li>
                <li><a href="#">خدمات شركات الإتصالات</a></li>
              </ul>
            </div>

            <!-- forth column -->
            <div class="box">
              <h4>عن جرير</h4>
              <ul>
                <li><a href="#">من نحن</a></li>
                <li><a href="#">الحوكمة</a></li>
                <li><a href="#">علاقات المستثمرين والتقارير</a></li>
                <li><a href="#">الاستدامة</a></li>
                <li><a href="#">الأخبار</a></li>
              </ul>
              <h4>فرص عمل</h4>
            </div>
          </div>
        </div>

        <div class="box last">
          <h4>تواصل معنا</h4>
          <div class="icon">
            <i class="fab fa-facebook-f" style="background-color: #08508a"></i>
            <i class="fab fa-twitter" style="background-color: #0f84e2"></i>
            <i class="fab fa-youtube" style="background-color: red"></i>
            <i
              class="fab fa-instagram"
              style="background-color: #db2f6a; border-radius: 7px"
            ></i>
            <i class="fab fa-linkedin-in" style="background-color: #0f84e2"></i>
            <i
              class="fab fa-snapchat-ghost"
              style="background-color: yellow"
            ></i>
            <i class="fab fa-tiktok"></i>
          </div>
        </div>
      </div>
      <div class="copy-right">
        <div class="container">
          <div class="first">
            <img src="images/footer-1.webp" alt="" />
            <img src="images/footer-2.webp" alt="" />
            <img src="images/footer-3.webp" alt="" />
            <img src="images/footer-4.webp" alt="" />
          </div>
          <div class="text">
            <p>سياسة الخصوصية | شروط الخدمة</p>
            <p>
              جميع الحقوق محفوطة لدى مكتبة جرير &copy; 2015 س.ت 1010032264
              أونلاين س.ت 1010654213
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer Section -->
    <script src="js/steps.js"></script>
    <script src="js/login&signout(for-category&details).js"></script>
    <script src="js/counter&search.js"></script>
  </body>
</html>
