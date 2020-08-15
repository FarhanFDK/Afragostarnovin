<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>شرکت افراگستر نوین</title>
        <meta name="keywords" content="afragostarnovin,شرکت افراگسترنوین,شرکت افراگستر نوین,شرکت افرا گسترنوین,شرکت افرا گستر نوین,خرید دستگاه خودپرداز,خرید دستگاه کارتخوان"/>
        <meta name="description" content="شرکت افراگسترنوین شرکتی در زمینه فروش دستگاه های خودپرداز،کارتخوان و خدماتی نظیر طراحی وب سایت،طراحی لوگو،شبکه و خدمات دیگر می باشد." />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="robots" content="noindex,nofollow" />
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"/>
        <link rel="stylesheet" href="../src/css/index.css" />
        <link rel="stylesheet" href="../src/css/media.css" />
        <link rel="stylesheet" href="../src/css/menu-side-navbar.css" />
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
    <body>
        <div class="div-form my-2 text-xl text-center sm:text-xl md:text-2xl lg:text-3xl xl:text-3xl w-full sm:w-full md:w-1/2 lg:w-1/2 xl:w-1/2">
            <form class="pt-6 pb-8 mb-4" action="https://www.afragostarnovin.ir/public/form.php" method="post">
                <div>
                    <input title="نام و نام خانوادگی" placeholder="نام و نام خانوادگی" class="my-5 fullname border-solid border-4 h-13 border-gray-600 shadow appearance-none border rounded py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" type="text" name="fullname" id="fullname" required/>
                </div>
                <input title="شماره تماس" placeholder="شماره تماس" class="my-5 border-solid border-4 h-13 border-gray-600 shadow appearance-none border rounded w-30 py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" type="text" name="phonenumber" id="phonenumber" required/>
                
                <div class="div-description my-4">
                    <!--
                    <div class="inner"> 
                    <label class="mr-5" for="contact-us-description">توضیحات:</label>
                    </div>
                    -->
                    <textarea type="text" placeholder="توضیحات" title="توضیحات" class="text-area-description h-12 border-solid border-4 border-gray-600 shadow appearance-none border rounded w-30 py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" type="text" name="contact-us-description" id="contact-us-description" required></textarea>
                </div>
                <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                <input title="ارسال" class="bg-red-700 hover:bg-red-500 text-white font-bold py-2 px-4 rounded cursor-pointer" type="submit" name="submit" id="submit" value="ارسال"/>
            </form>
            <div>
                <?php
                    if(isset($_POST['submit'])){
                        $fullname = $_POST['fullname'];
                        $phonenumber = $_POST['phonenumber'];
                        $description = $_POST['contact-us-description'];
                        require "../src/includes/jdf.php";
                        $id = jdate('Y/m/d g:i:s a' , '' , '' , 'Asia/Tehran' , 'en'); ;
                        $host_name = 'localhost';
                        $user_name = 'afragost_admin';
                        $user_pass = '7d1KS~eK[}{a';
                        $db_name = 'afragost_users_free_consulting';
                        $connection = mysqli_connect($host_name, $user_name , $user_pass, $db_name);
                            if(!$connection){
                                die("ارتباط با سرور با مشکل مواجه شد");
                            }
                        $chng = mysqli_set_charset($connection, "UTF-8");
                        $fullname = mysqli_real_escape_string($connection , $fullname);
                        $phonenumber = mysqli_real_escape_string($connection , $phonenumber);
                        $description = mysqli_real_escape_string($connection , $description);
                        if($fullname && $phonenumber && $description){
                            $sql = "INSERT INTO users(id,fullname,phonenumber,descriptions)";
                            $sql .= "VALUES('$id','$fullname','$phonenumber','$description')";
                            $result = mysqli_query($connection,$sql);
                            if($result){
                                $to = "info@afragostarnovin.ir";
                                $subject = "Downloaded E-mail for consulting request";
                                $message = "
                                            <!DOCTYPE html>
                                            <html>
                                            <head>
                                            <meta charset='UTF-8'/>
                                            <title>دریافت مشاوره</title>
                                            </head>";
                                $message .= "<body style='direction:rtl;'>";
                                $message .= "<header style='left:0;right:0;top:0;position:absolute;width:100%;height:100px;color:blue;background-color:darkred;'>
                                            این ایمیل به منظور دریافت مشاوره رایگان فرستاده شده است،چناچه وقتتان اجازه می دهد،لطفا رسیدگی کنید
                                            </header>
                                            <div>
                                            نام و نام خانوادگی:
                                            ";
                                $message .= $fullname;
                                $message .= "<br>";
                                $message .= "شماره تماس:";
                                $message .= $phonenumber;
                                $message .= "<br>";
                                $message .= "توضیحات:";
                                $message .= $description;
                                $message .= "<br>";
                                $message .= "زمان ثبت درخواست: ";
                                $message .= $id;
                                $message .= "
                                            </div>
                                            </body>
                                            </html>
                                " ;
                                $headers = "MIME-Version: 1.0" . "\r\n";
                                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                $headers .= 'From: <info@afragostarnovin.ir>' . "\r\n";
                                $headers .= 'Cc: info@afragostarnovin.ir' . "\r\n";
                                mail($to,$subject,$message,$headers); 
                                echo "<p class='success-text' style='color:green;'>درخواست شما با موفقیت ثبت شد</p>";
                            }else{
                                die("<p class='warning-text'>درخواست شما انجام نشد لطفا بعدا تلاش کنید</p>");
                            }
                        }else{
                            die("<p class='warning-text'>لطفا فرم را کامل کنید</p>");
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>