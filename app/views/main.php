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
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/header_footer_book.css" />

    <title>Electronic Library</title>
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
              <a href="#"><i class="fas fa-star"></i>ألرئيسية</a>
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
                ><img src="images/flag.png" alt="" />أليمن YER</a
              >
            </li>
            <li class="last">
              <a href="">
                <input
                  type="checkbox"
                  id="lang"
                  style="display: none"
                  onclick="changeLanguage();" />
                <label for="lang" id="changLan" style="cursor: pointer"
                  >English</label
                ><i class="fas fa-language"></i
              ></a>
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
              id="searchbar"
              placeholder="ابحث"
              onkeyup="searchBook()"
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
        <iframe id="signup" src="" frameborder="0"></iframe>
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

    <!-- Start classification Section -->
    <section class="classification">
      <div class="container">
        <h2>تصفح حسب القسم</h2>
        <div class="content">
          <i class="fas fa-chevron-right right"></i>
          <a href="category_page"
            ><div class="box" style="color: #641e05">
              <i class="fas fa-laptop" style="background-color: #641e05"></i>
              <span>دين</span>
            </div></a
          >
          <a href="category_page">
            <div class="box" style="color: #ef5b05">
              <i class="fas fa-clock" style="background-color: #ef5b05"></i>
              <span> تاريخ</span>
            </div></a
          >
          <a href="category_page">
            <div class="box" style="color: #7e50cf">
              <i class="fas fa-keyboard" style="background-color: #7e50cf"></i>
              <span>روايات </span>
            </div></a
          >
          <a href="category_page">
            <div class="box" style="color: #e91e63">
              <i
                class="fas fa-charging-station"
                style="background-color: #e91e63"
              ></i>
              <span>سياسة </span>
            </div></a
          >
          <a href="category_page">
            <div class="box" style="color: #3f96dc">
              <i class="fas fa-home" style="background-color: #3f96dc"></i>
              <span>اقتصاد </span>
            </div></a
          >
          <a href="category_page">
            <div class="box" style="color: #599e5c">
              <i class="fas fa-gamepad" style="background-color: #599e5c"></i>
              <span>طبخ </span>
            </div></a
          >
          <a href="category_page">
            <div class="box" style="color: #ec0453">
              <i
                class="fas fa-phone-volume"
                style="background-color: #ec0453"
              ></i>
              <span> تربية</span>
            </div></a
          >
          <i class="fas fa-chevron-left"></i>
        </div>
      </div>
    </section>
    <!-- end classification Section -->

    <!-- Start Photo Section  -->
    <section class="photo">
      <div class="container">
        <div class="line">
          <img src="images/photo-1.jpg" alt="" />
          <img src="images/photo-3.jpg" alt="" />
          <img src="images/photo-2.jpg" alt="" />
          <img src="images/photo-4.jpg" alt="" />
        </div>
        <img src="images/slide-2.jpg" alt="" />
      </div>
    </section>
    <!-- Start Photo Section  -->

    <!-- Start Section Timer -->
    <section class="timer">
      <div class="container">
        <h2>العروض الحالية</h2>
        <div class="books">
          <i class="fas fa-chevron-right start"></i>
          <!-- Start Book One -->
          <div class="box book-hidden" id="book-one">
            <a href="book_details_page"
              ><img
                id="link-img"
                src="images/book-1-1 (2).jpg"
                alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">كبرياء وهوى(كتاب الكتروني)</p></a
              >
              <div class="counter-container">
                <div id="days-book-1"></div>
              </div>
              <span><span class="cost">17.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book One -->

          <!-- Start Book Two -->
          <div class="box book-hidden" id="book-two">
            <a href="book_details_page"
              ><img src="images/book-2.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>

              <a href="book_details_page"
                ><p class="book">خلف قوتي ضعف يحبك(كتاب الكتروني)</p></a
              >
              <div class="counter-container">
                <div id="days-book-2"></div>
              </div>
              <span><span class="cost">24.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- Start Book Two -->

          <!-- Start Book Three -->
          <div class="box book-hidden" id="book-three">
            <a href="book_details_page"
              ><img src="images/book3.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">كتالوج الحب(كتاب الكتروني)</p></a
              >
              <div class="counter-container">
                <div id="days-book-3"></div>
              </div>
              <span><span class="cost">19.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
              <p class="last">صيغ اخرى <span>كتاب مطبوع </span></p>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book Three -->

          <!-- Start Book Four -->
          <div class="box book-hidden" id="book-four">
            <a href="book_details_page"
              ><img src="images/book-4.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">الى الذي أسرني حبة(كتاب الكتروني)</p></a
              >
              <div class="counter-container">
                <div id="days-book-4"></div>
              </div>
              <span><span class="cost">19.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book Four -->

          <!-- Start Book Five -->
          <div class="box book-hidden" id="book-five">
            <a href="book_details_page"
              ><img src="images/book-5.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">زواج غير متوقع(كتاب الكتروني)</p></a
              >
              <div class="counter-container">
                <div id="days-book-5"></div>
              </div>
              <span><span class="cost">3.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book Five -->
          <i class="fas fa-chevron-left end"></i>
        </div>
      </div>
    </section>
    <!-- End Section Timer -->

    <!-- Start Section Book part One -->
    <section class="one">
      <div class="container">
        <div class="title">
          <h2>الكتب الدينية</h2>
          <a href="">عرض الكل</a>
        </div>
        <div class="books">
          <i class="fas fa-chevron-right start"></i>
          <!-- Start Book One -->
          <?php foreach($params as $book){?>
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img
                id="link-img"
                src="<? echo $params['image']; ?>"
                alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book"><? echo $params['title']; ?>(كتاب الكتروني)</p></a
              >
              <span><span class="cost"><? echo $params['price']; ?></span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <?php } ?>
          <!-- End Book One -->

          <!-- Start Book Two -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book-2.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>

              <a href="book_details_page"
                ><p class="book">خلف قوتي ضعف يحبك(كتاب الكتروني)</p></a
              >
              <span><span class="cost">24.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- Start Book Two -->

          <!-- Start Book Three -->
          <!-- <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book3.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">كتالوج الحب(كتاب الكتروني)</p></a
              >
              <span><span class="cost">19.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
              <p class="last">صيغ اخرى <span>كتاب مطبوع </span></p>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div> -->
          <!-- End Book Three -->

          <!-- Start Book Four -->
          <!-- <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book-4.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>

              <a href="book_details_page"
                ><p class="book">الى الذي أسرني حبة(كتاب الكتروني)</p></a
              >
              <span><span class="cost">19.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div> -->
          <!-- End Book Four -->

          <!-- Start Book Five -->
          <!-- <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book-5.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">زواج غير متوقع(كتاب الكتروني)</p></a
              >
              <span><span class="cost">3.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div> -->
          <!-- End Book Five -->
          <i class="fas fa-chevron-left end"></i>
        </div>
      </div>
    </section>
    <!-- End Section Book part one -->

    <!-- Start Section Book part Two -->
    <section class="two">
      <div class="container">
        <div class="title">
          <h2>الكتب التاريخية</h2>
          <a href="">عرض الكل</a>
        </div>
        <div class="books">
          <i class="fas fa-chevron-right start"></i>
          <!-- Start Book One -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img
                id="link-img"
                src="images/book-1-1 (2).jpg"
                alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">كبرياء وهوى(كتاب الكتروني)</p></a
              >
              <span><span class="cost">17.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book One -->

          <!-- Start Book Two -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book-2.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>

              <a href="book_details_page"
                ><p class="book">خلف قوتي ضعف يحبك(كتاب الكتروني)</p></a
              >
              <span><span class="cost">24.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- Start Book Two -->

          <!-- Start Book Three -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book3.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">كتالوج الحب(كتاب الكتروني)</p></a
              >
              <span><span class="cost">19.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
              <p class="last">صيغ اخرى <span>كتاب مطبوع </span></p>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book Three -->

          <!-- Start Book Four -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book-4.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>

              <a href="book_details_page"
                ><p class="book">الى الذي أسرني حبة(كتاب الكتروني)</p></a
              >
              <span><span class="cost">19.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book Four -->

          <!-- Start Book Five -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book-5.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">زواج غير متوقع(كتاب الكتروني)</p></a
              >
              <span><span class="cost">3.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book Five -->
          <i class="fas fa-chevron-left end"></i>
        </div>
      </div>
    </section>
    <!-- End Section Book part Two -->

    <!-- Start Section Book part Three -->
    <section class="three">
      <div class="container">
        <div class="title">
          <h2>السياسة</h2>
          <a href="">عرض الكل</a>
        </div>
        <div class="books">
          <i class="fas fa-chevron-right start"></i>
          <!-- Start Book One -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img
                id="link-img"
                src="images/book-1-1 (2).jpg"
                alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">كبرياء وهوى(كتاب الكتروني)</p></a
              >
              <span><span class="cost">17.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book One -->

          <!-- Start Book Two -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book-2.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>

              <a href="book_details_page"
                ><p class="book">خلف قوتي ضعف يحبك(كتاب الكتروني)</p></a
              >
              <span><span class="cost">24.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- Start Book Two -->

          <!-- Start Book Three -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book3.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">كتالوج الحب(كتاب الكتروني)</p></a
              >
              <span><span class="cost">19.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
              <p class="last">صيغ اخرى <span>كتاب مطبوع </span></p>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book Three -->

          <!-- Start Book Four -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book-4.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>

              <a href="book_details_page"
                ><p class="book">الى الذي أسرني حبة(كتاب الكتروني)</p></a
              >
              <span><span class="cost">19.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book Four -->

          <!-- Start Book Five -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book-5.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">زواج غير متوقع(كتاب الكتروني)</p></a
              >
              <span><span class="cost">3.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book Five -->
          <i class="fas fa-chevron-left end"></i>
        </div>
      </div>
    </section>
    <!-- End Section Book part Three -->

    <!-- Start Section Book part Four -->
    <section class="four">
      <div class="container">
        <div class="title">
          <h2>الاقتصاد</h2>
          <a href="">عرض الكل</a>
        </div>
        <div class="books">
          <i class="fas fa-chevron-right start"></i>
          <!-- Start Book One -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img
                id="link-img"
                src="images/book-1-1 (2).jpg"
                alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">كبرياء وهوى(كتاب الكتروني)</p></a
              >
              <span><span class="cost">17.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book One -->

          <!-- Start Book Two -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book-2.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>

              <a href="book_details_page"
                ><p class="book">خلف قوتي ضعف يحبك(كتاب الكتروني)</p></a
              >
              <span><span class="cost">24.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- Start Book Two -->

          <!-- Start Book Three -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book3.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">كتالوج الحب(كتاب الكتروني)</p></a
              >
              <span><span class="cost">19.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
              <p class="last">صيغ اخرى <span>كتاب مطبوع </span></p>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book Three -->

          <!-- Start Book Four -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book-4.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>

              <a href="book_details_page"
                ><p class="book">الى الذي أسرني حبة(كتاب الكتروني)</p></a
              >
              <span><span class="cost">19.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book Four -->

          <!-- Start Book Five -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book-5.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">زواج غير متوقع(كتاب الكتروني)</p></a
              >
              <span><span class="cost">3.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book Five -->
          <i class="fas fa-chevron-left end"></i>
        </div>
      </div>
    </section>
    <!-- End Section  Book part Four-->

    <!-- Start Section part Five -->
    <section class="timer">
      <div class="container">
        <div class="title">
          <h2>الطبخ</h2>
          <a href="">عرض الكل</a>
        </div>
        <div class="books">
          <i class="fas fa-chevron-right start"></i>
          <!-- Start Book One -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img
                id="link-img"
                src="images/book-1-1 (2).jpg"
                alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">كبرياء وهوى(كتاب الكتروني)</p></a
              >
              <span><span class="cost">17.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book One -->

          <!-- Start Book Two -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book-2.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>

              <a href="book_details_page"
                ><p class="book">خلف قوتي ضعف يحبك(كتاب الكتروني)</p></a
              >
              <span><span class="cost">24.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- Start Book Two -->

          <!-- Start Book Three -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book3.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">كتالوج الحب(كتاب الكتروني)</p></a
              >
              <span><span class="cost">19.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
              <p class="last">صيغ اخرى <span>كتاب مطبوع </span></p>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book Three -->

          <!-- Start Book Four -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book-4.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>

              <a href="book_details_page"
                ><p class="book">الى الذي أسرني حبة(كتاب الكتروني)</p></a
              >
              <span><span class="cost">19.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book Four -->

          <!-- Start Book Five -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book-5.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">زواج غير متوقع(كتاب الكتروني)</p></a
              >
              <span><span class="cost">3.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book Five -->
          <i class="fas fa-chevron-left end"></i>
        </div>
      </div>
    </section>
    <!-- End Section Book part Five -->

    <!-- Start Section part Six -->
    <section class="timer">
      <div class="container">
        <div class="title">
          <h2>أفضل الروايات الرومنسية</h2>
          <a href="">عرض الكل</a>
        </div>
        <div class="books">
          <i class="fas fa-chevron-right start"></i>
          <!-- Start Book One -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img
                id="link-img"
                src="images/book-1-1 (2).jpg"
                alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">كبرياء وهوى(كتاب الكتروني)</p></a
              >
              <span><span class="cost">17.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book One -->

          <!-- Start Book Two -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book-2.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>

              <a href="book_details_page"
                ><p class="book">خلف قوتي ضعف يحبك(كتاب الكتروني)</p></a
              >
              <span><span class="cost">24.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- Start Book Two -->

          <!-- Start Book Three -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book3.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">كتالوج الحب(كتاب الكتروني)</p></a
              >
              <span><span class="cost">19.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
              <p class="last">صيغ اخرى <span>كتاب مطبوع </span></p>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book Three -->

          <!-- Start Book Four -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book-4.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>

              <a href="book_details_page"
                ><p class="book">الى الذي أسرني حبة(كتاب الكتروني)</p></a
              >
              <span><span class="cost">19.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book Four -->

          <!-- Start Book Five -->
          <div class="box book-hidden">
            <a href="book_details_page"
              ><img src="images/book-5.jpg" alt=""
            /></a>
            <div class="text">
              <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
              <a href="book_details_page"
                ><p class="book">زواج غير متوقع(كتاب الكتروني)</p></a
              >
              <span><span class="cost">3.99</span> ر.س</span>
              <span class="two">شامل الضريبة</span>
            </div>
            <div class="icon">
              <a href="#"><i class="fas fa-star"></i></a>
              <a onclick="storageCounter()"
                ><i class="fas fa-cart-plus buy"></i
              ></a>
              <a><i class="fas fa-download"></i></a>
            </div>
          </div>
          <!-- End Book Five -->
          <i class="fas fa-chevron-left end"></i>
        </div>
      </div>
    </section>
    <!-- End Section Book part Six -->

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
    <script src="js/app.js"></script>
    <script src="js/changlang.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/counter&search.js"></script>
  </body>
</html>
