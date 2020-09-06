<form class="text-center m-5 w-1/2 m-auto" action="password.php" method="POST">
    <div class="m-auto">
        <input class="username shadow appearance-none border border-gray-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="نام کاربری" type="text" name="username" id="username" required/>
    </div>
    <div>
        <input class="password shadow appearance-none border border-gray-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="رمز عبور" type="text" name="password" id="password" required/>
    </div>
    <div>
        <input class="submit inline-block bg-red-700 hover:bg-red-500 text-white font-bold py-2 px-4 rounded cursor-pointer" type="submit" value="ورود" id="submit" name="submit"/>
    </div>
    <?php
        if(isset($_POST['submit'])){
            $host_name = "localhost";
            $user_name = "afargost_admin";
            $user_pass = "";
            $db_name   = "afragost_admin";
            $connection = mysqli_connect($host_name , $user_name , $user_pass , $db_name);
            if(!$connection){
                echo("ارتباط با سرور با مشکل مواجه شد");
            }else{
                $username = $_POST['username'];
                $password = $_POST['password'];
                $username = mysqli_real_escape_string($connection,$username);
                $password = mysqli_real_escape_string($connection,$password);
                $password = md5($password);
                $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
                $result = mysqli_query($connection,$sql);
                if(!mysqli_num_rows($result)){
                    echo "نام کاربری یا رمز عبور اشباه است";
                }else{
                    session_start();
                }
            }
        }
    ?>
</form>