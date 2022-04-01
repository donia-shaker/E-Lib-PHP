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
    <link rel="stylesheet" href="css/category.css" />
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

    <!-- Start Category Section -->
    <section class="two">
      <div class="container">
        <!-- Start Aside Part -->
        <aside>
          <div class="links">
            <a href="#"> الرئيسية</a> / <a href="#"> الكتب العربية </a> /
            <a href="#"> الكتب الالكترونية</a>
          </div>
          <p class="two"><i class="fas fa-book-open"></i>كتب الكترونية</p>
          <div class="box">
            <h4>تصفية النتائح</h4>
            <p>علامة تجارية<i class="far fa-minus-square"></i></p>
            <p>السعر<i class="far fa-minus-square"></i></p>
            <div>
              <hr />
              <span>ر.س.0</span> ر.س.105
            </div>
            <p>صيغة الكتاب<i class="far fa-minus-square"></i></p>
          </div>
        </aside>
        <!-- End Aside Part -->

        <!-- Left Part -->
        <div class="content">
          <!-- Start sort -->
          <div class="sort">
            <label for="sort">الترتيب بحسب: </label>
            <select name="" id="sort">
              <option value="">الرجاء الاختيار</option>
            </select>
          </div>
          <!-- End sort -->

          <!-- Start Books part -->
          <div class="books">
            <!-- Start Books One -->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img src="images/book-1-1 (2).jpg" alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <a href="book_details_page"
                  ><p class="book">
                    كلي ونامي وابهري الاخرين(كتاب الكتروني)
                  </p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>
            <!-- End Books One -->

            <!-- Start Books Two -->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img src="images/book-1.jpg" alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <div class="stars">
                  <i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i>
                </div>
                <a href="book_details_page"
                  ><p class="book">لأنك الله(كتاب الكتروني)</p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>

            <!-- Start Book 3 -->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img src="images/book-2.jpg" alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <a href="book_details_page"
                  ><p class="book">أبابيل(كتاب الكتروني)</p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>

            <!-- Start Book 4 -->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img src="images/book-4.jpg" alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <div class="stars">
                  <i class="fas fa-star active"></i
                  ><i class="fas fa-star not-active"></i
                  ><i class="fas fa-star not-active"></i
                  ><i class="fas fa-star not-active"></i
                  ><i class="fas fa-star not-active"></i>
                </div>
                <a href="book_details_page"
                  ><p class="book">ن النسوية (كتاب الكتروني)</p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>

            <!-- Strt Book 5 -->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img
                  onclick="getBookImage(this);"
                  src="images/book-2.jpg"
                  alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <a href="book_details_page"
                  ><p class="book">
                    كلي ونامي وابهري الاخرين(كتاب الكتروني)
                  </p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>

            <!-- Start Book 6 -->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img src="images/book-1.jpg" alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <div class="stars">
                  <i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i>
                </div>
                <a href="book_details_page"
                  ><p class="book">لأنك الله(كتاب الكتروني)</p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>

            <!-- STart Book 7  -->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img src="images/book-4.jpg" alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <a href="book_details_page"
                  ><p class="book">أبابيل(كتاب الكتروني)</p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>

            <!-- Start Book 8 -->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img src="images/book-5.jpg" alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <div class="stars">
                  <i class="fas fa-star active"></i
                  ><i class="fas fa-star not-active"></i
                  ><i class="fas fa-star not-active"></i
                  ><i class="fas fa-star not-active"></i
                  ><i class="fas fa-star not-active"></i>
                </div>
                <a href="book_details_page"
                  ><p class="book">ن النسوية (كتاب الكتروني)</p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>

            <!-- Start Book 9-->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img src="images/book-2.jpg" alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <a href="book_details_page"
                  ><p class="book">
                    كلي ونامي وابهري الاخرين(كتاب الكتروني)
                  </p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>

            <!-- Start Book 10-->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img src="images/book-1.jpg" alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <div class="stars">
                  <i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i>
                </div>
                <a href="book_details_page"
                  ><p class="book">لأنك الله(كتاب الكتروني)</p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>

            <!-- Start Book 11-->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img src="images/book-4.jpg" alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <a href="book_details_page"
                  ><p class="book">أبابيل(كتاب الكتروني)</p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>

            <!-- Start Book 12-->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img src="images/book-5.jpg" alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <div class="stars">
                  <i class="fas fa-star active"></i
                  ><i class="fas fa-star not-active"></i
                  ><i class="fas fa-star not-active"></i
                  ><i class="fas fa-star not-active"></i
                  ><i class="fas fa-star not-active"></i>
                </div>
                <a href="book_details_page"
                  ><p class="book">ن النسوية (كتاب الكتروني)</p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>

            <!-- Start Book 13-->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img src="images/book-2.jpg" alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <a href="book_details_page"
                  ><p class="book">
                    كلي ونامي وابهري الاخرين(كتاب الكتروني)
                  </p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>

            <!-- Start Book 14-->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img src="images/book-1.jpg" alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <div class="stars">
                  <i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i>
                </div>
                <a href="book_details_page"
                  ><p class="book">لأنك الله(كتاب الكتروني)</p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>

            <!-- Start Book 15-->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img src="images/book-4.jpg" alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <a href="book_details_page"
                  ><p class="book">أبابيل(كتاب الكتروني)</p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>

            <!-- Start Book 16-->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img src="images/book-5.jpg" alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <div class="stars">
                  <i class="fas fa-star active"></i
                  ><i class="fas fa-star not-active"></i
                  ><i class="fas fa-star not-active"></i
                  ><i class="fas fa-star not-active"></i
                  ><i class="fas fa-star not-active"></i>
                </div>
                <a href="book_details_page"
                  ><p class="book">ن النسوية (كتاب الكتروني)</p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>

            <!-- Start Book 17-->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img
                  onclick="getBookImage(this);"
                  src="images/book-2.jpg"
                  alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <a href="book_details_page"
                  ><p class="book">
                    كلي ونامي وابهري الاخرين(كتاب الكتروني)
                  </p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>

            <!-- Start Book 18-->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img src="images/book-1.jpg" alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <div class="stars">
                  <i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i
                  ><i class="fas fa-star active"></i>
                </div>
                <a href="book_details_page"
                  ><p class="book">لأنك الله(كتاب الكتروني)</p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>

            <!-- Start Book 19-->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img src="images/book-4.jpg" alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <a href="book_details_page"
                  ><p class="book">أبابيل(كتاب الكتروني)</p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>

            <!-- Start Book 20-->
            <div class="box book-hidden">
              <a href="book_details_page"
                ><img src="images/book-5.jpg" alt=""
              /></a>
              <div class="text">
                <h3><i class="fas fa-book-open"></i>كتاب الكتروني</h3>
                <div class="stars">
                  <i class="fas fa-star active"></i
                  ><i class="fas fa-star not-active"></i
                  ><i class="fas fa-star not-active"></i
                  ><i class="fas fa-star not-active"></i
                  ><i class="fas fa-star not-active"></i>
                </div>
                <a href="book_details_page"
                  ><p class="book">ن النسوية (كتاب الكتروني)</p></a
                >
                <span><span class="cost">29.89</span> ر.س</span>
                <span class="two">شامل الضريبة</span>
                <p>صيغ اخرى <span>كتاب مطبوع </span></p>
              </div>
              <div class="icon">
                <a href="#"><i class="fas fa-star"></i></a>
                <a onclick="storageCounter()"
                  ><i class="fas fa-cart-plus buy"></i
                ></a>
                <a><i class="fas fa-download"></i></a>
              </div>
            </div>
          </div>
          <div class="more">عرض المزيد</div>
          <div class="buy-from-us">
            اشتري من كتب الكترونية على مكتبة جرير الالكتروني
          </div>
        </div>
      </div>
    </section>
    <!-- End Category Section -->

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

    <script src="js/counter&search.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/login&signout(for-category&details).js"></script>
  </body>
</html>
