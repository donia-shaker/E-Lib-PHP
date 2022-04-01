<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <!-- CSS File -->
    <link rel="stylesheet" href="css/details.css" />
    <link rel="stylesheet" href="css/header_footer_book.css" />

    <title>Document</title>
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

    <!-- Start Slider Section -->
    <section class="slide-show">
      <div class="container">
        <div class="slider">
          <img src="images/slide-one.jpg" alt="" />
        </div>
        <div class="slider">
          <img src="images/slide-two.jpg" alt="" />
        </div>
        <div class="slider">
          <img src="images/slide-three.jpg" alt="" />
        </div>
        <div class="slider">
          <img src="images/slide-four.jpg" alt="" />
        </div>
        <div class="slider">
          <img src="images/slide-five.jpg" alt="" />
        </div>
        <a class="prev" onclick="plusSlides(1)"
          ><i class="fas fa-chevron-left"></i
        ></a>
        <a class="next" onclick="plusSlides(-1)"
          ><i class="fas fa-chevron-right"></i
        ></a>
        <div class="dots">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
          <span class="dot" onclick="currentSlide(5)"></span>
        </div>
      </div>
    </section>
    <!-- End Slider Section -->

    <!-- Start Book Details Section -->
    <section class="book">
      <div class="container">
        <div class="details">
          <div class="links">
            <a href="../books_page"> الرئيسية</a> /
            <a href="#"> الكتب العربية </a> /
            <a href="#"> الكتب الالكترونية</a> /
            <a href="#"> لانك الله (كتاب الكتروني)</a>
          </div>
          <div class="show-book">
            <img
              class="large"
              id="show-model-2"
              src="images/book-1.jpg"
            />
            <img class="small" src="images/book-1.jpg" />
          </div>
        </div>
        <!-- Start Middel Part -->
        <div class="middel">
          <h1>لانك الله (كتاب الكتروني)</h1>
          <select name="" id="">
            <option value="">عرض المزيد</option>
          </select>
          <span><span class="number">12.99</span>ر.س</span>
          <p class="color">شامل الضريبة</p>
          <div class="text">
            <p>وحدة البيع: Each</p>
            <div class="stars">
              <i class="fas fa-star active"></i
              ><i class="fas fa-star active"></i
              ><i class="fas fa-star active"></i
              ><i class="fas fa-star active"></i
              ><i class="fas fa-star active"></i>
              <span class="blue">(15 من المراجعات)</span>
            </div>
            <p>رقم الصنف JBB410156 رقم المنتج 4</p>
          </div>
          <p>الصيغ المتوفرة</p>
          <div class="type">
            <p>
              <input type="checkbox" name="" id="one" checked />
              <label for="one">كتاب الكتروني</label>
            </p>
            <div class="cost">
              <span><span class="number">12.99</span>ر.س</span>
              <p class="color">شامل الضريبة</p>
            </div>
          </div>
          <div class="type">
            <p>
              <input type="checkbox" name="" id="two" />
              <label for="two">كتاب مطبوع</label>
            </p>
            <div class="cost">
              <span><span class="number">17.25</span>ر.س</span>
              <p class="color">شامل الضريبة</p>
            </div>
          </div>
        </div>
        <!-- Start Middel Part -->

        <!-- Start Third Part -->
        <div class="three">
          <div class="content">
            <div class="note">
              <span>ملاحظة:</span> سيتم اضافه هذا الكتاب الالكتروني الى مكتبتك
              في قارئ جرير
              <p><a href="#">اقرأ المزيد</a></p>
            </div>
            <div class="button">
              <select name="" id="">
                <option value="">1</option>
              </select>
              <button onclick="storageCounter();">
                <i class="fas fa-cart-plus"></i> أضف الى السلة
              </button>
            </div>
            <div class="features">
              <i class="fas fa-info-circle"> تسوق أمن </i>
              <i class="fas fa-shield-alt"> أصلي ومضمون </i>
              <i class="fas fa-truck"> شحن سريع ومجاني</i>
            </div>
            <div class="line"></div>
            <div class="choices">
              <button><i class="fas fa-share-alt"></i> مشاركة</button>
              <button><i class="fas fa-heart"></i> المفضلة</button>
              <button><i class="fas fa-directions"></i> المفضلة</button>
            </div>
          </div>
          <div class="two">
            <div class="line"></div>
            <div class="choices">
              <button><i class="fas fa-share-alt"></i> مشاركة</button>
              <button><i class="fas fa-heart"></i> المفضلة</button>
              <button><i class="fas fa-directions"></i> المفضلة</button>
            </div>
          </div>
        </div>
        <!-- End Third Part -->
      </div>

      <!-- add model -->
      <div class="model-2" id="model-2">
        <div class="model-content-2">
          <div class="sliders">
            <div id="book-1" class="slide">
              <img src="images/book-1.jpg" alt="" />
              <a href="#book-4"><i class="fas fa-chevron-left"></i></a>
              <a href="#book-2"><i class="fas fa-chevron-right right"></i></a>
            </div>
            <div id="book-2" class="slide">
              <img src="images/book-1-1.jpg" alt="" />
              <a href="#book-1"><i class="fas fa-chevron-left"></i></a>
              <a href="#book-3"><i class="fas fa-chevron-right right"></i></a>
            </div>
            <div id="book-3" class="slide">
              <img src="images/book-1-2.jpg" alt="" />
              <a href="#book-2"><i class="fas fa-chevron-left"></i></a>
              <a href="#book-4"><i class="fas fa-chevron-right right"></i></a>
            </div>
            <div id="book-4" class="slide">
              <img src="images/book-1-3.jpg" alt="" />
              <a href="#book-3"><i class="fas fa-chevron-left"></i></a>
              <a href="#book-1"><i class="fas fa-chevron-right right"></i></a>
            </div>
          </div>
          <button id="btn">Close</button>
        </div>
      </div>
    </section>
    <!-- End Book Details Section -->

    <div class="explain-text">
      <div class="container">
        كتاب يتحدث عن بعض أسماء الحسنى وكيف نعيشها في حياتنا حرض المؤلف ان يكون
        الكتاب مناسبا لمن هم متوسطي الثقافة ويكون مناسبا للمحتاج والمريض والسليم
      </div>
    </div>

    <!-- Start Property Section -->
    <section class="property">
      <div class="container">
        <h3>المواصفات</h3>
        <div class="content">
          <p>رقم الصنف</p>
          <h4>JBB410156</h4>
        </div>
        <div class="content">
          <p>رقم المنتج</p>
          <h4>4</h4>
        </div>
        <div class="content">
          <p>المؤلف</p>
          <h4>علي جابر الفيفي</h4>
        </div>
        <div class="content">
          <p>الناشر</p>
          <h4>دار الحضارة للنشر والتوزيع</h4>
        </div>
        <div class="content">
          <p>تاريخ النشر</p>
          <h4>2016</h4>
        </div>
        <div class="content">
          <p>صيغة الكتاب</p>
          <h4>Ebook</h4>
        </div>
        <div class="content">
          <p>عدد الصفحات</p>
          <h4>182</h4>
        </div>
        <div class="content">
          <p>وزن الشحن(كجم)</p>
          <h4>0.100</h4>
        </div>
        <div class="content">
          <p>صيغة الكتاب</p>
          <h4>ePub</h4>
        </div>
        <div class="content">
          <p>اللغة</p>
          <h4>عربي</h4>
        </div>
        <div class="show-more">عرض أقل ^</div>
      </div>
    </section>
    <!-- End Property Section -->

    <!-- Start Comment Section -->
    <section class="comment">
      <div class="container">
        <div class="topic">
          <h2>مراجعات العملاء</h2>
          <button>+ أكتب مراجعتك</button>
        </div>
        <div class="content">
          <h3>good</h3>
          <div class="from-who">
            <span> من قبل reem </span>
            <span>16/11/2021</span>
          </div>
          <span>Good</span>
        </div>
        <div class="content">
          <h3>كتاب رائع</h3>
          <div class="from-who">
            <span>من قبل خالد أبو جميلة </span>
            <span>25/9/2021</span>
          </div>
          <span>جميل جدا</span>
        </div>
        <div class="content">
          <h3>لانك الله</h3>
          <div class="from-who">
            <span> من قبل باسل </span>
            <span>20/9/2021</span>
          </div>
          <span>جميل جدا ومفيد</span>
        </div>
        <div class="show-more">
          أظهار جميع المراجعات (15) <i class="fas fa-chevron-left"></i>
        </div>
      </div>
    </section>
    <!-- End Comment Section -->

    <!-- Start like Product Section -->
    <section class="like-product">
      <div class="container">
        <h2>منتجات مشابهة</h2>
        <div class="boxes">
          <div class="box">
            <img src="images/book-1.jpg" alt="" />
            <p>الصلاة وحكم تاركها</p>
            <div class="cost"><span class="two">15</span>ر.س</div>
            <span class="last">شامل الضريبة</span>
          </div>
          <div class="box">
            <img src="images/book-1.jpg" alt="" />
            <p>الله</p>
            <div class="cost"><span class="two">14</span>ر.س</div>
            <span class="last">شامل الضريبة</span>
          </div>
          <div class="box">
            <img src="images/book-1.jpg" alt="" />
            <p>علامات القيامة الكبرى مجلد مقاس صفير</p>
            <div class="cost"><span class="two">14</span>ر.س</div>
            <span class="last">شامل الضريبة</span>
          </div>
          <div class="box">
            <img src="images/book-1.jpg" alt="" />
            <p>وبدأ العد التنازلي</p>
            <div class="cost"><span class="two">14</span>ر.س</div>
            <span class="last">شامل الضريبة</span>
          </div>
          <div class="box">
            <img src="images/book-1.jpg" alt="" />
            <p>(ضعف الامةوهزيمتها النفسية المشكلة والحل)</p>
            <div class="cost"><span class="two">14</span>ر.س</div>
            <span class="last">شامل الضريبة</span>
          </div>
          <div class="box">
            <img src="images/book-1.jpg" alt="" />
            <p>جهنم الصغرى</p>
            <div class="cost"><span class="two">14</span>ر.س</div>
            <span class="last">شامل الضريبة</span>
          </div>
          <i class="fas fa-chevron-left"></i>
        </div>
      </div>
    </section>
    <!-- End like Product Section -->

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
    <script src="js/login&signout(for-category&details).js"></script>
    <script src="js/slider.js"></script>
    <script src="js/details.js"></script>
    <script src="js/counter&search.js"></script>
  </body>
</html>
