<?php
    $host_name = '';
    $user_name = '';
    $user_pass = '';
    $db_name   = '';
    $connection = mysqli_connect($host_name, $user_name , $user_pass, $db_name);
        if(!$connection){
            echo("ارتباط با پایگاه داده (درخواست ها) با مشکل مواجه شد");
        }else{
            $query = "SELECT * FROM users";
            $result = mysqli_query($connection,$query);
            $row = mysqli_fetch_array($result);
                if(!mysqli_num_rows($result)){
                    echo "درخواستی موجود نیست";
                }else{
                    $num_of_rows = mysqli_num_rows($result);
                    echo "<a class='text-center' href='https://www.afragostarnovin.ir/public/Admin/requests.php'>" . "درخواست ها" . "(" . $num_of_rows . ")" . "</a>";
                }
        }
    $host_name = '';
    $user_name = '';
    $user_pass = '';
    $db_name   = '';
    $connection = mysqli_connect($host_name, $user_name , $user_pass, $db_name);
        if(!$connection){
            echo("ارتباط با پایگاه داده (کاربرها) با مشکل مواجه شد");
        }else{
            $query = "SELECT * FROM users";
            $result = mysqli_query($connection,$query);
            $row = mysqli_fetch_array($result);
                if(!mysqli_num_rows($result)){
                    echo "کاربری وجود ندارد";
                }else{
                    $num_of_rows = mysqli_num_rows($result);
                    echo "<a class='text-center' href='https://www.afragostarnovin.ir/public/Admin/users.php'>" . "کاربران" . "(" . $num_of_rows . ")" . "</a>";
                }
        }
    $host_name = '';
    $user_name = '';
    $user_pass = '';
    $db_name   = '';
    $connection = mysqli_connect($host_name, $user_name , $user_pass, $db_name);
        if(!$connection){
            echo("ارتباط با پایگاه داده (بازدیدها) با مشکل مواجه شد");
        }else{
            $query = "SELECT * FROM users";
            $result = mysqli_query($connection,$query);
            $row = mysqli_fetch_array($result);
                if(!mysqli_num_rows($result)){
                    echo "کاربری وجود ندارد";
                }else{
                    $num_of_rows = mysqli_num_rows($result);
                    echo "<a class='text-center' href='https://www.afragostarnovin.ir/public/Admin/users.php'>" . "کاربران" . "(" . $num_of_rows . ")" . "</a>";
                }
        }