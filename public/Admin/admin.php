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
        <link rel="stylesheet" href="../../src/css/index.css" />
        <link rel="stylesheet" href="../../src/css/media.css" />
        <link rel="stylesheet" href="../../src/css/menu-side-navbar.css" />
        <link rel="stylesheet" href="../../src/assets/slideshow/OwlCarousel/dist/assets/owl.carousel.min.css"/>
        <link rel="stylesheet" href="../../src/assets/slideshow/OwlCarousel/dist/assets/owl.theme.default.min.css"/>
        <link rel="shortcut icon" href="../../src/icons/siteicon.ico" />
        <link rel="icon" href="../../src/icons/siteicon.ico" />
        <script src="https://kit.fontawesome.com/b39b75221a.js" crossorigin="anonymous"></script>
        <script src="../../src/jquery/jquery-3.4.1.slim.min.js"></script>
        <script src="../../src/assets/slideshow/OwlCarousel/dist/owl.carousel.min.js"></script>
        <style>
        </style>
    </head>
    <body class="bg-white">
        <div class="main grid grid-cols-1">
            <div class="header flex h-16">
                <div class="menu-with-hamburger">
                    <div id="hamburger" class="block sm:block md:hidden lg:hidden xl:hidden" style="margin-top: 8px; float: right;">
                        <span class="opener-span cursor-pointer" onclick="menuOpen()"><img src="../../src/icons/hamburger.png" style="width:3rem;height:3rem;" /></span>
                    </div>
                    <div class="menu-side-navbar block sm:block md:hidden lg;hidden xl:hidden" id="menu-side-navbar">
                        <a class="closebtn" href="javascript:void(0)" onclick="menuClose()">&times;</a>
                        <a class="" href="https://www.afragostarnovin.ir/public/index.php">صفحه اصلی</a>
                        <a class="" href="https://www.afragostarnovin.ir/public/store.php">فروشگاه</a>
                        <a class="" href="https://www.afragostarnovin.ir/public/index#consult" onclick="menuClose()">مشاوره رایگان</a>
                        <a class="" href="https://www.afragostarnovin.ir/public/index#aboutus" onclick="menuClose()">درباره شرکت</a>
                    </div>
                    <script src="../../src/js/menu-opener.js"></script>
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
                <a class="cursor-pointer ml-4 text-center sm:text-center md:text-left text-xl truncate float-left sm:float-left" title="" href='#'>
                    <h1 class="my-2 font-bold">
                        شرکت افراگستر نوین
                    </h1>
                </a>
                <img class="float-left mt-2 ml-2" src="../../src/icons/sitelogo.jpg" style="width:50px;height:50px;left:0;">
            </div>
        </div>
        <div class="middle">
            <?php
                $host_name = '';
                $user_name = '';
                $user_pass = '';
                $db_name = '';
                $connection = mysqli_connect($host_name, $user_name , $user_pass, $db_name);
                if(!$connection){
                    die("ارتباط با سرور با مشکل مواجه شد");
                }
                while($row = mysqli_fetch_assoc($result)){
                    print_r($row);
                }
            ?>
        </div>
        <div class="footer">

        </div>
    </body>
</html>
