<?php
    session_start();
    if(isset($_SESSION['key'])){
        die("
            <script>
                function redirect(){
                    location.href = 'https://www.afragostarnovin.ir/public/Admin/admin.php';
                }
                redirect();
            </script>
            ");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>ADMIN | شرکت افراگستر نوین</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="robots" content="noindex,nofollow" />
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"/>
        <link rel="stylesheet" href="../src/css/index.css" />
        <link rel="stylesheet" href="../src/css/media.css" />
        <link rel="stylesheet" href="../src/css/menu-side-navbar.css" />
        <link rel="stylesheet" href="../src/css/admin.css" />
        <link rel="stylesheet" href="../src/assets/slideshow/OwlCarousel/dist/assets/owl.carousel.min.css"/>
        <link rel="stylesheet" href="../src/assets/slideshow/OwlCarousel/dist/assets/owl.theme.default.min.css"/>
        <link rel="shortcut icon" href="../src/icons/siteicon.ico" />
        <link rel="icon" href="../src/icons/siteicon.ico" />
        <script src="https://kit.fontawesome.com/b39b75221a.js" crossorigin="anonymous"></script>
        <script src="../src/jquery/jquery-3.4.1.slim.min.js"></script>
        <script src="../src/assets/slideshow/OwlCarousel/dist/owl.carousel.min.js"></script>
        <style>
        </style>
    </head>
    <body class="bg-white">
        <div class="main grid grid-cols-1">
            <div class="header flex h-16">
                <div class="menu-with-hamburger">
                    <div id="hamburger" class="block sm:block md:hidden lg:hidden xl:hidden" style="margin-top: 8px; float: right;">
                        <span class="opener-span cursor-pointer" onclick="menuOpen()"><img src="../src/icons/hamburger.png" style="width:3rem;height:3rem;" /></span>
                    </div>
                    <div class="menu-side-navbar block sm:block md:hidden lg;hidden xl:hidden" id="menu-side-navbar">
                        <a class="closebtn" href="javascript:void(0)" onclick="menuClose()">&times;</a>
                        <a class="" href="https://www.afragostarnovin.ir/public/index.php">صفحه اصلی</a>
                        <a class="" href="https://www.afragostarnovin.ir/public/store.php">فروشگاه</a>
                        <a class="" href="https://www.afragostarnovin.ir/public/index#consult" onclick="menuClose()">مشاوره رایگان</a>
                        <a class="" href="https://www.afragostarnovin.ir/public/index#aboutus" onclick="menuClose()">درباره شرکت</a>
                    </div>
                    <script src="../src/js/menu-opener.js"></script>
                </div>
                <div class="menu flex-1 my-2 hidden sm:hidden md:flex lg:flex xl:flex">
                    <a title="صفحه اصلی" class="cursor-pointer btn-header text-white font-bold mx-4 my-2 text-l" href="https://www.afragostarnovin.ir/public/index.php">
                        صفحه اصلی
                    </a>
                    <a title="فروشگاه" class="cursor-pointer btn-header text-white font-bold mx-4 my-2 text-l" href="https://www.afragostarnovin.ir/public/store.php">
                        فروشگاه
                    </a>
                    <a title="مشاوره رایگان" class="cursor-pointer btn-header text-white font-bold mx-4 my-2 text-l" href="https://www.afragostarnovin.ir/public/index#consult">
                        مشاوره رایگان 
                    </a>
                    <a title="درباره ما" class="cursor-pointer btn-header text-white font-bold mx-4 my-2 text-l" href='https://www.afragostarnovin.ir/public/index#aboutus'>
                        درباره شرکت
                    </a>
                </div>
                <a class="cursor-pointer ml-4 text-center sm:text-center md:text-left text-xl truncate float-left sm:float-left" title="" href='https://www.afragostarnovin.ir'>
                    <h1 class="my-2 font-bold">
                        شرکت افراگستر نوین
                    </h1>
                </a>
                <a class="cursor-pointer" href="https://www.afragostarnovin.ir">
                    <img class="float-left" src="../../src/icons/sitelogo.jpg" style="width:50px;height:50px;left:0;">
                </a>
            </div>
        </div>
        <div class="middle mb-12 mt-12">
            <form class="text-center m-5 w-1/2 m-auto" action="login.php" method="POST">
                <div class="m-auto">
                    <input class="username shadow appearance-none border border-gray-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="نام کاربری" type="text" name="username" maxlength="15" id="username" required/>
                </div>
                <div>
                    <input class="password shadow appearance-none border border-gray-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="رمز عبور" type="password" name="password" maxlength="20" id="password" required/>
                </div>
                <div>
                    <input class="submit inline-block bg-red-700 hover:bg-red-500 text-white font-bold py-2 px-4 rounded cursor-pointer" type="submit" value="ورود" id="submit" name="submit"/>
                </div>
                <?php
                    if(isset($_POST['submit'])){
                        $host_name = "";
                        $user_name = "";
                        $user_pass = "";
                        $db_name   = "";
                        $connection = mysqli_connect($host_name , $user_name , $user_pass , $db_name);
                        if(!$connection){
                            echo("ارتباط با سرور با مشکل مواجه شد");
                        }else{
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            $username = mysqli_real_escape_string($connection,$username);
                            $password = mysqli_real_escape_string($connection,$password);
                            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
                            $result = mysqli_query($connection,$sql);
                            if(!mysqli_num_rows($result)){
                                echo "نام کاربری یا رمز عبور اشباه است";
                            }else{
                                $_SESSION['key'] = "key";
                                    echo "  <script>
                                                function redirect(){
                                                    location.href = 'https://www.afragostarnovin.ir/public/Admin/admin.php';
                                                }
                                                redirect();
                                            </script>";
                            }
                        }
                    }
                ?>
            </form>
            </div>
        <div class="footer w-full">
            <div class="" style="">
                <div class="flex flex-row">
                    <div>
                        <p class="phone my-5 mx-2">
                            <a class="cursor-pointer" href="tel:09354107274">
                                <i class="fa fa-phone fa-30x"></i>
                                09354107274
                            </a>
                        </p>
                        <p class="phone my-5 mx-2">
                            <a class="cursor-pointer" href="tel:09132364267">
                                <i class="fa fa-phone fa-30x"></i>
                                09132364267
                            </a>
                        </p>
                        <p class="email my-5 mx-2">
                            <a class="email-footer-send" href = "mailto:info@afragostarnovin.ir">
                                <i class="fa fa-envelope"></i>
                                info@afragostarnovin.ir
                            </a>
                        </p>
                    </div>
                    <div>
                        <p class="footer-content my-3 text-center text-xl">
                            دسترسی سریع
                        </p>
                        <p class="footer-links">
                            <a class="mx-5 my-auto" title="" href="https://www.afragostarnovin.ir/public/store.php">
                                فروشگاه
                            </a>
                            <a class="mx-5 my-auto" title="" href="#consult">
                                مشاوره رایگان
                            </a> 
                        </p>
                    </div>
                </div>
                <div class="company-description mx-4">
                    <div class="my-5 text-lg">
                        <p>
                                شرکت افرا گستر نوین شرکتی در زمینه فروش دستگاه های خودپرداز
                                (ATM)،
                                دستگاه های کارتخوان   
                                (POS)،
                                فروش قطعات
                                و ارائه خدمات دیگر می باشد
                        </p>
                        <p class="my-3 text-lg">
                            خدماتی نظیر طراحی وبسایت،
                            طراحی لوگو،
                            ساخت وب اپلیکیشن،
                            و شبکه
                        </p>
                    </div>
                    <p class="text-center">
                        در شبکه های اجتماعی با ما در ارتباط باشید!
                    </p>
                    <div style="background-color:inherit;" class="social-networks text-center sm:text-center md:text-center lg:text-center xl:text-center text-sm sm:text-sm md:text-xl lg:text-xl" style="direction:ltr;">
                        <a class="" title="" target="_blank" href="https://instagram.com/mohammadhitman5?igshid=uo17vpqw0ux8">
                            <img class="inline" src="../src/icons/instagram.png" aria-hidden="true" style="width:50px;height:50px;"/>
                        </a>
                        <a class="" title="" target="_blank" href="https://t.me/mohammadhitman5">
                            <img class="inline" src="../src/icons/telegram.png" aria-hidden="true" style="margin-top:2px;width:50px;height:50px;"/>
                        </a>
                        <a class="" title="" target="_blank" href="https://wa.me/989354107274">
                            <img class="inline" src="../src/icons/whatsapp.png" style="width:60px;height:60px;" aria-hidden="true"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center z-auto p-5">
                <iframe class="m-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3365.454677919363!2d51.40732261517469!3d32.48727468106042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x65816dafb7d03b4d!2sAfra%20Computer%20Store!5e0!3m2!1sen!2sus!4v1595663704479!5m2!1sen!2sus" width="80%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </body>
</html>
