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
    <title>Document</title>
    <link rel="stylesheet" href="css/checkout.css" />
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

    <!-- start checkout section -->
    <section class="checkout">
      <div class="container">
        <h1><i class="fas fa-cart-plus"></i> السلة<span>(3منتجات)</span></h1>
        <div class="content">
          <div class="boxes">
            <!-- Start first Box -->
            <div class="box">
              <div class="top-part">
                <img src="images/book-1-1.jpg" alt="" />
                <div class="text">
                  <h2>البداية والنهاية الجزء الاول(كتاب الكتروني)</h2>
                  <span>منتج قابل للخصم لحاملي بطاقة خصم جرير</span>
                  <div class="note">
                    <span>ملاحظة:</span>هذا المنتج رقمي وسيتم توصيلة من خلال
                    البريد الالكتروني
                    <p><a href="#">كيفية الحصول على المنتج؟</a></p>
                  </div>
                </div>
                <div class="cost">
                  <p class="no">3.99<span> ر.س</span></p>
                  <div class="count">
                    <input type="number" step="1" value="1" />
                    <input type="button" value="+" class="plus" />
                    <input type="button" value="-" class="minus" />
                  </div>
                </div>
              </div>
              <div class="bottom-part"><i class="fas fa-circle"></i> احذف</div>
            </div>
            <!-- End first Box -->

            <!-- Start Second Box -->
            <div class="box">
              <div class="top-part">
                <img src="images/book-1-1.jpg" alt="" />
                <div class="text">
                  <h2>فن اللامبالاه (كتاب الكتروني)</h2>
                  <span>منتج قابل للخصم لحاملي بطاقة خصم جرير</span>
                  <div class="note">
                    <span>ملاحظة:</span>هذا المنتج رقمي وسيتم توصيلة من خلال
                    البريد الالكتروني
                    <p><a href="#">كيفية الحصول على المنتج؟</a></p>
                  </div>
                </div>
                <div class="cost">
                  <p class="no">29.99<span> ر.س</span></p>
                  <div class="count">
                    <input type="number" step="1" value="1" />
                    <input type="button" value="+" class="plus" />
                    <input type="button" value="-" class="minus" />
                  </div>
                </div>
              </div>
              <div class="bottom-part"><i class="fas fa-circle"></i> احذف</div>
            </div>
            <!-- End second Box -->

            <!-- Start Third Box -->
            <div class="box">
              <div class="top-part">
                <img src="images/book-1-1.jpg" alt="" />
                <div class="text">
                  <h2>غدا أجمل (كتاب الكتروني)</h2>
                  <span>منتج قابل للخصم لحاملي بطاقة خصم جرير</span>
                  <div class="note">
                    <span>ملاحظة:</span>هذا المنتج رقمي وسيتم توصيلة من خلال
                    البريد الالكتروني
                    <p><a href="#">كيفية الحصول على المنتج؟</a></p>
                  </div>
                </div>
                <div class="cost">
                  <p class="no">34.99<span> ر.س</span></p>
                  <div class="count">
                    <input type="number" step="1" value="1" />
                    <input type="button" value="+" class="plus" />
                    <input type="button" value="-" class="minus" />
                  </div>
                </div>
              </div>
              <div class="bottom-part"><i class="fas fa-circle"></i> احذف</div>
              <!-- End Third Box -->
            </div>
          </div>
          <!-- end Boxes -->

          <!-- Start Aside part -->
          <aside>
            <div class="info">
              <p>المجموع</p>
              <p>68.97 <span>ر.س</span></p>
            </div>
            <div class="info">
              <p>تكاليف الشحن</p>
              <p class="green">مجاني</p>
            </div>
            <div class="info">
              <h3>المجموع الكلي<span> شامل الضريبة</span></h3>
              <h3>68.97 <span class="red">ر.س</span></h3>
            </div>
            <div class="send">
              <p>
                بالضغط على "انهاء التسوق"فانت توافقعلى
                <span> الشروط والاحكام</span> و <span>سياسة الخصوصية</span>
              </p>
              <button><a href="order">انهاء التسوق</a></button>
            </div>
          </aside>
          <!-- End Aside Section -->
        </div>
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
    <script src="js/login&signout(for-category&details).js"></script>
    <script src="js/counter&search.js"></script>
  </body>
</html>
