<?php 
$thongbao = '<script language="javascript">alert("Email không chính xác!");</script>';;
$thongbaothanhcong = '<script language="javascript">alert("Đã câp nhật thành công!");</script>';;
$thongbaoguithanhcong = '<script language="javascript">alert("Đã Gửi thành công!");</script>';;
$thongbaothatbai ='<script language="javascript">alert("Đã cập nhật thất bại!");</script>';;

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    $username = $row['username'];
    if (mysqli_num_rows($query) > 0) {
        $newpassword = rand(100, 999);
        $sql = "UPDATE users 
        SET password = '$newpassword' WHERE email = '$email'";  
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo $thongbaothanhcong;
            newPassWord($email, $newpassword, $thongbaoguithanhcong,$username);
        } else {
            echo $thongbaothatbai;
        }
    } else {
        echo $thongbao;
    }
}
function newPassWord($email, $newpassword, $thongbaoguithanhcong,$username)
{
    require "PHPMailer-master/src/PHPMailer.php";
    require "PHPMailer-master/src/SMTP.php";
    require 'PHPMailer-master/src/Exception.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'sonntpd05961@fpt.edu.vn'; // SMTP username
        $mail->Password = 'nts20403';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('sonntpd05961@fpt.edu.vn', 'Nguyễn Trường Sơn');
        $mail->addAddress($email);
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Mật Khẩu Mới';
        $content = "Hi <b> {$username} </b>
        Bạn nhận được mật khẩu mới của tài khoản <b> {$username} </b> do bạn hoặc người khác đã yêu cầu từ website MANGASHOP.COM <br>
                Mật khẩu mới là: {$newpassword}";
        $mail->Body = $content;
        $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        echo $thongbaoguithanhcong;
    } catch (Exception $e) {
        echo 'Error: ', $mail->ErrorInfo;
    }
}
?>
<h1 class="user__heading">Quên mật khẩu</h1>
<form action="" method="POST" class="user__form">
    <div class="user__lable">
        <label class="user__lable-name" for="">Email:</label>
        <input placeholder="Email..." name="email" type="text" class="user__form-username"required>
    </div>
    <button type="submit" name="submit" class="btn btn--primary user__form-btn">Lấy mật khẩu</button>
</form>