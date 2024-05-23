<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible"
            content="IE=edge">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0">
        <title>Đăng Nhập</title>
        <link rel="stylesheet" href="/BE/Login/asset/css/nhanvien.css">
    </head>

    <body>
        <div class="box-ful">
            <div class="box-user">
                <h2>Đăng Nhập Nhân Viên</h2>
                <div class="user-form">
                    <form action=""
                        method="POST">
                        <img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/640px-User_icon_2.svg.png" />
                        <br>
                        <div class="box-from">
                            <label>Nhập Tài Khoản:</label><br>
                            <input type="text"
                                name="username"
                                placeholder="Username">
                        </div>

                        <div class="box-from">
                            <label>Nhập Mật Khẩu:</label><br>
                            <input type="password"
                                name="password"
                                placeholder="Password">
                        </div><br>
                        <hr>
                        <div>
                            <input id="submit-login" type="submit"
                                name="login"
                                value="Login">
                        </div>
                    </form>
                    <?php 
                    //Kết nối cơ sở dữ liệu
        $server="localhost";
        $db_username="root";
        $db_password="";
        $database="nhatlaudata";
        
        $conn = mysqli_connect($server, $db_username, $db_password,$database);
        if ($conn) {
            echo("");
        }else{
         echo(" <script>alert('Error!');</script> ");
        }
        //thuc thi submit
        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username==""||$password=="") {
                echo"<p style='color:red';>Hãy Điền Đầy Đủ Thông Tin!!! <p>";
            }else{
                $sql="SELECT * FROM nhanvien WHERE username='$username' and password='$password' ";
                $query=mysqli_query($conn,$sql);
                $num_rows=mysqli_num_rows($query);
                if ($num_rows != 0) {
                    header('Location:http://localhost:3000/FE/index.php');
                }else{
                    echo"<script>alert('Tên Đăng Nhập Hoặc Mật Khẩu Không Đúng');</script>";
                }
            }
        }
                    ?>
                </div>
            </div>

    </body>

</html>