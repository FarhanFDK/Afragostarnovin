<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>شرکت افراگستر نوین</title>
    <meta
      name="keywords"
      content="شرکت افراگستر نوین,afragostarnovin,خرید دستگاه خودپرداز,خرید دستگاه کارتخوان و POS"
    />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="robots" content="index,follow" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
    />
    <link rel="stylesheet" href="../src/css/index.css" />
    <link rel="stylesheet" href="../src/css/hamburger.css" />
    <link rel="stylesheet" href="../src/css/media.css" />
    <link
      rel="stylesheet"
      href="../src/assets/slideshow/OwlCarousel/dist/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="../src/assets/slideshow/OwlCarousel/dist/assets/owl.theme.default.min.css"
    />
    <link rel="shortcut icon" href="../src/Icon/Afra.ico" />
    <link rel="icon" href="../src/Icon/Afra.ico" />
    <script
      src="https://kit.fontawesome.com/b39b75221a.js"
      crossorigin="anonymous"
    ></script>
    <script src="../src/jquery/jquery-3.4.1.slim.min.js"></script>
    <script src="../src/assets/slideshow/OwlCarousel/dist/owl.carousel.min.js"></script>
    <style></style>
  </head>
  <body>
    <div class="main grid grid-cols-1">
      <div class="header flex h-16">
        <div class="menu-with-hamburger">
          <div id="hamburger" style="margin-top: 8px; float: right;">
            <span class="hamburger-bar"></span>
            <span class="hamburger-bar"></span>
            <span class="hamburger-bar"></span>
          </div>
          <script src="../src/js/menu-hamburger.js"></script>
          <script src="../src/js/menu-opener.js"></script>
          <div id="menu-content"></div>
        </div>
        <div class="menu flex-1 my-2">
          <button
            title="صفحه اصلی"
            class="btn text-white font-bold mx-4 my-2 focus:outline-none"
            href="#"
          >
            صفحه اصلی
          </button>
          <button
            title="فروشگاه"
            class="btn text-white font-bold mx-4 my-2 focus:outline-none"
            href="index.php"
          >
            فروشگاه
          </button>
          <button
            title="مشاوره رایگان"
            class="btn text-white font-bold mx-4 my-2 focus:outline-none"
            href="store.html"
          >
            مشاوره رایگان
          </button>
          <button
            title="تماس با ما"
            class="btn text-white font-bold mx-4 my-2 focus:outline-none"
            href="#"
          >
            تماس با ما
          </button>
          <button
            title="درباره ما"
            class="btn text-white font-bold mx-4 my-2 focus:outline-none"
            href="#"
          >
            درباره شرکت
          </button>
        </div>
        <div class="header-content flex-1">
          <p class="text-company m-auto">
            شرکت افراگستر نوین
          </p>
          <p class="phone my-auto mx-2">
            <i class="fa fa-phone"></i>
            09354107274
          </p>
          <p class="email my-auto mx-2">
            <i class="fa fa-envelope"></i>
            <a
              class="email-header-send"
              onclick="location.href = 'mailto:info@afragostarnovin.ir'"
            >
              info@afragostarnovin.ir
            </a>
          </p>
        </div>
      </div>
      <div class="container my-16">
        <div class="slideshow my-auto">
          <div class="owl-carousel">
            <div>
              <img
                title="ATM دستگاه"
                class="img-slideshow"
                src="../src/Images/slideshow/nick-pampoukidis-t-UV1rZqPuY-unsplash.jpg"
              />
            </div>
            <div>
              <img
                title="ATM دستگاه"
                class="img-slideshow"
                src="../src/Images/slideshow/ethan-wilkinson-t5fj8QQIGPA-unsplash.jpg"
              />
            </div>
            <div>
              <img
                title="دستگاه کارتخوان"
                class="img-slideshow"
                src="../src/Images/slideshow/IMG-20200622-WA0011.jpg"
              />
            </div>
            <div>
              <img
                title="ATM دستگاه"
                class="img-slideshow"
                src="../src/Images/slideshow/twitter-jankolario-Sc5HUu4XzTk-unsplash.jpg"
              />
            </div>
            <div>
              <img
                title="دستگاه کارتخوان"
                class="img-slideshow"
                src="../src/Images/slideshow/PAXS910-2.jpg"
              />
            </div>
          </div>
          <script src="../src/assets/slideshow/slideshow.js"></script>
          <script src="../src/assets/slideshow/mouse-wheel/jquery.mousewheel.js"></script>
        </div>
        <div class="contact-us flex flex-row">
          <div class="my-5 mx-5 text-3xl">
            <p>
              مشاوره رایگان دریافت کنید!
              <br>
              <br>
               برای دریافت مشاوره رایگان فرم را پر کرده
               <br>
               و روی دکمه ارسال کلیک کنید
               <br>
               ما با شما تماس خواهیم گرفت
            </p>
          </div>
          <div class="my-10 mx-10 text-3xl">
            <form action="index.php" method="post">
              <label for="firstname">نام:</label>
              <input class="border-solid border-4 border-gray-600" type="text" name="firstname" id="firstname" required/>
              <br>
              <label class="my-5" for="lastname">نام خانوادگی:</label>
              <input class="mx-5 my-5 border-solid border-4 border-gray-600" type="text" name="lastname" id="lastname" required/>
              <br>
              <label class="my-5" for="phonenumber">شماره تماس:</label>
              <input class="mx-5 my-5 border-solid border-4 border-gray-600" type="text" name="phonenumber" id="phonenumber" required/>
              <br>
              <label class="my-5" for="contact-us-description">توضیحات:</label>
              <textarea class="text-area-description mx-5 border-solid border-4 border-gray-600" type="text" name="contact-us-description" id="contact-us-description" required></textarea>
              <br>
              <input class="" type="submit" name="submit" id="submit" value="ارسال"/>
              <br>
            </form>
            <div>
            <?php
              if(isset($_POST['submit'])){
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $phonenumber = $_POST['phonenumber'];
                $description = $_POST['contact-us-description'];
                date_default_timezone_set("Iran");
                $date = date("Y/m/d.h:i:sa");
                $id = $date;
                $connection = mysqli_connect('localhost', 'root', '', 'consulting');
                $firstname = mysqli_real_escape_string($connection,$firstname);
                $lastname = mysqli_real_escape_string($connection,$lastname);
                $phonenumber = mysqli_real_escape_string($connection,$phonenumber);
                $description = mysqli_real_escape_string($connection,$description);
                if($firstname && $lastname && $phonenumber && $description){
                  $chng = mysqli_set_charset($connection, "UTF-8");
                  $sql = "INSERT INTO users(id,firstname,lastname,phonenumber,descriptions)";
                  $sql .= "VALUES('$id','$firstname','$lastname','$phonenumber','$description')";
                  $result = mysqli_query($connection,$sql);
                  if($result){
                    $to = "Farhanabdollahiab@gmail.com";
                    $subject = "ایمیل دریافت شده برای مشاوره";
                    $message = "
                    <!DOCTYPE html>
                    <html>
                    <head>
                      <title>مشاوره</title>
                    </head>
                    <body>
                    <div class='header'>
                        <p>
                        سلام استاد
                        این ایمیل برای دریافت مشاوره به شما ارسال شده است
                        <br>
                        لطفا برای پیگیری با ایشان تماس حاصل فرمایید
                        </p>
                    </div>
                    <div class='container'>
                      <div class='details'>
                        اقای استاد
                        ضمن عرض سلام از طرف ربات فرستنده ایمیل سایت
                        مشخصاتی که در ذیل نوشته شده اند
                        برای ارتباط با کاربر می باشند.
                        چنانچه وقتتان به شما اجازه میدهد،
                        لطفا رسیدگی کنید.
                        با تشکر.ربات فرستنده ایمیل(طراحی شده توسط FDK(
                      </div>
                      <div class='firstname'>
                       نام:" . $firstname . "
                      </div>
                      <div class='lastname'>
                          نام خانوادگی:" . $lastname .
                          "
                      </div>
                      <div class='phonenumber'>
                        شماره تماس:" . $phonenumber . "
                      </div>
                      <div class='descriptions'>
                          توضیحات:" . $description . "
                      </div>
                    </div>
                    </body>
                    </html>
                    ";
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: <info@afragostarnovin.ir>' . "\r\n";
                    $headers .= 'Cc: info@afragostarnovin.ir' . "\r\n";
                    $sendmail = mail($to,$subject,$message,$headers); 
                  } else{
                    echo "<p class='warning-text'>درخواست شما انجام نشد لطفا بعدا تلاش کنید</p>";
                  }
                } else{
                  echo "<p class='warning-text'>لطفا فرم را کامل کنید</p>";
                }
              }
            ?>
            </div>
          </div>
        </div>
      </div>
      
      <div class="footer"></div>
    </div>
  </body>
</html>
