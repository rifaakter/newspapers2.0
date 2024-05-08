<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sahoshi Kontho</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

  <link rel="stylesheet" href="./asset/style.css" />
</head>

<body>
  <div class="content_body container">
    <!-- top menu section -->
    <nav class="navbar navbar-expand-lg fast_menu_bd">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
            <span>মঙ্গলবার, এপ্রিল ৩০, ২০২৪</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span>Translate</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./include/menu.php">
            <span>বাংলা</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span>English</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Top News</a></li>
            <li><a class="dropdown-item" href="#">Entertenment</a></li>
            <li>
              <a class="dropdown-item" href="#">Sports</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>

    <!-- header content section -->
    <div class="container text-center">
      <div class="row align-items-center heder_content">
        <div class="col-md-4">
          <img src="./asset/img/news01 (4).jpg" alt="logo" />
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <img src="./asset/img/news01 (5).png" alt="ad" />
        </div>
      </div>
    </div>

    <!-- secend heder menu -->

    <div class="secend_menu container">
      <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav">
          <li class="nav-item secend_Nav_item">
            <a class="nav-link active" aria-current="page" href="./include/catagori_page.php">
              <span>প্রচ্ছদ</span>
            </a>
          </li>
          <li class="nav-item secend_Nav_item">
            <a class="nav-link" href="./include/catagori_page.php">
              <span>জাতীয়</span>
            </a>
          </li>
          <li class="nav-item secend_Nav_item">
            <a class="nav-link" href="./include/catagori_page.php">
              <span>রাজনীতি</span>
            </a>
          </li>
          <li class="nav-item secend_Nav_item">
            <a class="nav-link" href="./include/catagori_page.php">
              <span>আন্তর্জাতিক</span>
            </a>
          </li>
          <li class="nav-item secend_Nav_item">
            <a class="nav-link" href="./include/catagori_page.php">
              <span>খেলা</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle --bs-emphasis-color" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              চাকরির খবর
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Top News</a></li>
              <li><a class="dropdown-item" href="#">Entertenment</a></li>
              <li>
                <a class="dropdown-item" href="#">Sports</a>
              </li>
            </ul>
          </li>

          <li class="nav-item secend_Nav_item">
            <a class="nav-link active" aria-current="page" href="#">
              <span>বিনোদন</span>
            </a>
          </li>
          <li class="nav-item secend_Nav_item">
            <a class="nav-link active" aria-current="page" href="#">
              <span>উদ্যোক্তা</span>
            </a>
          </li>
          <li class="nav-item secend_Nav_item">
            <a class="nav-link active" aria-current="page" href="#">
              <span>সারাদেশ</span>
            </a>
          </li>

          <li class="nav-item">
            <form class="d-flex input-group w-auto">
              <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
              <span class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search"></i>
              </span>
            </form>
          </li>
        </ul>
      </nav>
    </div>

    <!-- news scrolling heading -->
    <div class="container nws_heading bg-dark text-white mt-1 p-1">
      <div class="breaking-box pt-2">
        <!--marque-->
        <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseleave="this.start();">
          <a class="h6 font-weight-light" href="#"><span class="position-relative mx-2 badge badge-primary rounded-0"></span>
            করছাড় বন্ধ করে ১০০০ কোটি টাকা আদায়ের পরিকল্পনা</a>
          <a class="h6 font-weight-light" href="#"><span class="position-relative mx-2 badge badge-primary rounded-0"></span>
            লা লিগা: আজই চ্যাম্পিয়ন হয়ে যেতে পারে রিয়াল মাদ্রিদ</a>
          <a class="h6 font-weight-light" href="#"><span class="position-relative mx-2 badge badge-primary rounded-0"></span>
            ঢাকায় সংহতি সমাবেশ ফিলিস্তিনিদের লড়াই, আমাদেরও লড়াই</a>
        </marquee>
      </div>
    </div>

    <!-- header AD show spaces -->
    <div class="w-50 container border border-secondary mt-2 p-2 header_adshow">
      <div class="adcontinar container">
        <h3 class="text-center align-items-center">AD SHOW</h3>
        <img src="#" alt="" />
      </div>
    </div>

    <!-- Content section 1 -->

    <div class="content__section_1 mt-5 p-3 overflow-hidden" style=" height: 450px; ">
      <!-- Catagori Name  -->
      <div class="catagori__name border-0.8 border-bottom border-secondary p-2">
        <i class="fa-solid fa-right-long p-1 "></i><a href="./include/landing_page.php" class="p-1 text-decoration-none text-black"> জাতীয়</a>
      </div>

      <!-- Content view  -->
      <div class="mt-4 row row-cols-1 row-cols-md-2 g-2">
        <div class="col ">
          <div class="card">
            <div class="card-body">
              <img src="./asset/img/news01 (1).png" class="card-img-top" style="height:400px" alt="..." />
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card side_content">
            <!-- side bar content start -->
            <div class="row row-cols-1 row-cols-md-1 g-1">
              <div class="col" style="height: 200px">
                <div class="card overflow-hidden">
                  <img src="./asset/img/news01 (5).png" class="card-img-top" style="height: 200px" alt="..." />
                </div>
              </div>
            </div>

            <div class="row row-cols-1 row-cols-md-3 mt-2 g-2">
              <div class="col">
                <div class="card">
                  <img src="./asset/img/news01 (2).png" class="card-img-top" alt="..." />
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="./asset/img/news01 (3).png" class="card-img-top" alt="..." />
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="./asset/img/news01 (5).jpg" class="card-img-top" alt="..." />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- secont content section 2 -->
    <div class="content__section_1 mt-3 p-3 bg-white">
      <!-- Catagori Name  -->
      <div class="catagori__name border-0.8 border-bottom border-secondary p-2">
        <i class="fa-solid fa-right-long p-1"></i><a href="#" class="p-1 text-decoration-none text-black"> রাজনীতি</a>
      </div>

      <div class="row mt-4 politic_card">
        <div class="col-sm-4">
          <div class="card size">
            <img src="./asset/img/news01 (4).png" alt="" style="height: 200px;" />
            <div class="card-body">
              <h5 class="card-title">
                নির্বাচন আসলেই যারা নৌকার বিরুদ্ধে অবস্থান নেন তাদের আওয়ামী
                লীগ
              </h5>
              <p class="card-text">
                নির্বাচন আসলেই যারা নৌকার বিরুদ্ধে অবস্থান নেন তাদের আওয়ামী
                লীগ করবার নেই
              </p>
              <a href="./include/landing_page.php" class="btn btn-primary">বিস্তারিত</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card size">
            <img src="./asset/img/news01 (3).png" alt="" style="height: 200px;" />
            <div class=" card-body">
              <h5 class="card-title">
                টানা ৭ম বারের এই বিজয়মাল্য বান্দরবানবাসীকে উৎসর্গ
              </h5>
              <p class="card-text">
                টানা ৭ম বারের এই বিজয়মাল্য উৎসর্গ করেছেন
                পার্বত্য বীর মোকতাদির চৌধুরী।
              </p>
              <a href="./include/landing_page.php" class="btn btn-primary">বিস্তারিত</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card size">
            <img src="./asset/img/news01 (5).png" alt="" style="height: 200px; " />
            <div class=" card-body">
              <h5 class="card-title">
                টানা ৭ম বারের এই বিজয়মাল্য বান্দরবানবাসীকে উৎসর্গ করেছেন
              </h5>
              <p class="card-text">
                নির্বাচন বর্জনে শ্রীবরদীতে ছাত্রদলের লিফলেট বিতরণ ও গণসংযোগ।
              </p>
              <a href="./include/landing_page.php" class="btn btn-primary">বিস্তারিত</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- containt section 3 -->
    <div class="section_3 container mt-6 bg-white p-3 w-">
      <div class="text-center mt-4">
        <h4>খেলার খবর</h4>
        <hr />
      </div>

      <!-- row start -->
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12">
          <div class="card mb-4 shadow-sm size">
            <img src="./asset/img/play (1).jpg" alt="" class="img-fluid" />

            <div class="card-body text-justify">
              <div class="card-title">
                <h5>নিউজিল্যান্ডকে হারানো টেস্ট দলের সাথে পাপনের নৈশভোজ</h5>
              </div>
              <div class="card-title p-1">
                <p>
                  টেস্টে বাংলাদেশের অবস্থা রীতিমতো ভঙ্গুর। তার সাথে প্রতিপক্ষ
                  ছিল প্রথম চক্রেই টেস্ট চ্যাম্পিয়নশিপ জেতা দল নিউজিল্যান্ড।
                  তাই
                </p>
                <a href="#" class="btn btn-primary">বিস্তারিত</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
          <div class="card mb-4 shadow-sm size">
            <img src="./asset/img/play (2).jpg" alt="" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h5>নিউজিল্যান্ডকে হারানো টেস্ট দলের সাথে পাপনের নৈশভোজ</h5>
              </div>
              <div class="card-title p-1">
                <p>
                  টেস্টে বাংলাদেশের অবস্থা রীতিমতো ভঙ্গুর। তার সাথে প্রতিপক্ষ
                  ছিল প্রথম চক্রেই টেস্ট চ্যাম্পিয়নশিপ জেতা দল নিউজিল্যান্ড।
                  তাই
                </p>
                <a href="#" class="btn btn-primary">বিস্তারিত</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
          <div class="card mb-4 shadow-sm size">
            <img src="./asset/img/play (3).jpg" alt="" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h5>নিউজিল্যান্ডকে হারানো টেস্ট দলের সাথে পাপনের নৈশভোজ</h5>
              </div>
              <div class="card-title p-1">
                <p>
                  টেস্টে বাংলাদেশের অবস্থা রীতিমতো ভঙ্গুর। তার সাথে প্রতিপক্ষ
                  ছিল প্রথম চক্রেই টেস্ট চ্যাম্পিয়নশিপ জেতা দল নিউজিল্যান্ড।
                  তাই
                </p>
                <a href="#" class="btn btn-primary">বিস্তারিত</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
          <div class="card mb-4 shadow-sm size">
            <img src="./asset/img/play (2).jpg" alt="" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h5>নিউজিল্যান্ডকে হারানো টেস্ট দলের সাথে পাপনের নৈশভোজ</h5>
              </div>
              <div class="card-title p-1">
                <p>
                  টেস্টে বাংলাদেশের অবস্থা রীতিমতো ভঙ্গুর। তার সাথে প্রতিপক্ষ
                  ছিল প্রথম চক্রেই টেস্ট চ্যাম্পিয়নশিপ জেতা দল নিউজিল্যান্ড।
                  তাই
                </p>
                <a href="#" class="btn btn-primary">বিস্তারিত</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
          <div class="card mb-4 shadow-sm size">
            <img src="./asset/img/play (1).jpg" alt="" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h5>নিউজিল্যান্ডকে হারানো টেস্ট দলের সাথে পাপনের নৈশভোজ</h5>
              </div>
              <div class="card-title p-1">
                <p>
                  টেস্টে বাংলাদেশের অবস্থা রীতিমতো ভঙ্গুর। তার সাথে প্রতিপক্ষ
                  ছিল প্রথম চক্রেই টেস্ট চ্যাম্পিয়নশিপ জেতা দল নিউজিল্যান্ড।
                  তাই
                </p>
                <a href="#" class="btn btn-primary">বিস্তারিত</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
          <div class="card mb-4 shadow-sm size">
            <img src="./asset/img/play (1).jpg" alt="" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h5>নিউজিল্যান্ডকে হারানো টেস্ট দলের সাথে পাপনের নৈশভোজ</h5>
              </div>
              <div class="card-title p-1">
                <p>
                  টেস্টে বাংলাদেশের অবস্থা রীতিমতো ভঙ্গুর। তার সাথে প্রতিপক্ষ
                  ছিল প্রথম চক্রেই টেস্ট চ্যাম্পিয়নশিপ জেতা দল নিউজিল্যান্ড।
                  তাই
                </p>
                <a href="#" class="btn btn-primary">বিস্তারিত</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
          <div class="card mb-4 shadow-sm size">
            <img src="./asset/img/play (2).jpg" alt="" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h5>নিউজিল্যান্ডকে হারানো টেস্ট দলের সাথে পাপনের নৈশভোজ</h5>
              </div>
              <div class="card-title p-1">
                <p>
                  টেস্টে বাংলাদেশের অবস্থা রীতিমতো ভঙ্গুর। তার সাথে প্রতিপক্ষ
                  ছিল প্রথম চক্রেই টেস্ট চ্যাম্পিয়নশিপ জেতা দল নিউজিল্যান্ড।
                  তাই
                </p>
                <a href="#" class="btn btn-primary">বিস্তারিত</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
          <div class="card mb-4 shadow-sm size">
            <img src="./asset/img/play (2).jpg" alt="" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h5>নিউজিল্যান্ডকে হারানো টেস্ট দলের সাথে পাপনের নৈশভোজ</h5>
              </div>
              <div class="card-title p-1">
                <p>
                  টেস্টে বাংলাদেশের অবস্থা রীতিমতো ভঙ্গুর। তার সাথে প্রতিপক্ষ
                  ছিল প্রথম চক্রেই টেস্ট চ্যাম্পিয়নশিপ জেতা দল নিউজিল্যান্ড।
                  তাই
                </p>
                <a href="#" class="btn btn-primary">বিস্তারিত</a>
              </div>
            </div>
          </div>
        </div>

        <!-- row end -->
      </div>
    </div>
    <!-- footer start  -->
    <?php
    include('./include/footer.php');
    ?>
    <!-- footer end  -->
    <!--end code-->
  </div>
  <!-- java scripet add use boostrap cdn link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>