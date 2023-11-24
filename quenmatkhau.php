
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quên mật khẩu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/login.css">
</head>
<body>
  <?PHP
   $loi="";
  // function pdo_get_connection(){
  //   $servername = "localhost";
  //   $username = 'nht';
  //   $password = '';
 
     if (isset($_POST['nutguiyeucau']) ==true){
       
    //     $email = $_POST['email'];
    //     $conn = new PDO("mysql:host=$servername;dbname=nht", $username, $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //      $sql="SELECT * FROM user WHERE email =?";
    //   $stmt =  $conn->prepare($sql); //tạo ra 1 prepare stement
    //   $stmt->execute( [$email]);
    //   echo $count = $stmt->rowCount();
    
         $email = $_POST['email'];
        $conn = new PDO("mysql:host=localhost;dbname=nht;charset=utf8", "root", "");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         $sql="SELECT * FROM user WHERE email =?";
       $stmt =  $conn->prepare($sql); //tạo ra 1 prepare stement
      $stmt->execute( [$email]);
        $count = $stmt->rowCount();
        if ($count==0){
            $loi = "Email bạn nhập chưa đăng kí thành viên với chúng tôi ";
        }
             else {
              $matkhaumoi = substr(md5 (rand(0,99999)) , 0,8);
              $sql = "UPDATE user SET pass =? WHERE email=?";
              $stmt =  $conn->prepare($sql); //tạo ra 1 prepare stement
              $stmt->execute([$matkhaumoi,$email ]);
              // echo"Đã cập nhật";
             $kq = Guimatkhaumoi($email, $matkhaumoi);
             if  ($kq ==true){
              echo "<script>document.location='dangnhap.php';</script>";
             }
             }//else
    }  
  ?>
    <?php
    function Guimatkhaumoi($email, $matkhau){
    require "PHPMailer/src/PHPMailer.php"; 
    require "PHPMailer/src/SMTP.php"; 
    require 'PHPMailer/src/Exception.php'; 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'thainguyenwk1503@gmail.com'; // SMTP username
        $mail->Password = 'bodr euik hzba ufli';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('thainguyenwk1503@gmail.com', 'nguyen' ); 
        $mail->addAddress($email); 
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Thư gửi lại mật khẩu';
        $noidungthu = "<p>Quý khách nhận được thư này nhờ việc quên mật khẩu mới từ nhà hàng NHT FOOD</p>
                    Mật khẩu của quý khách là: {$matkhau}         
        "; 
        $mail->Body = $noidungthu;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
      return true;
    } catch (Exception $e) {
        echo 'Error: ', $mail->ErrorInfo;
        return false;
    }
    }
    
    
    
    ?>


  <form method="post" style="width: 600px;" class=" border border-warning border-2 m-auto p-2">
  <h4 class="mb-3 text-center ">
            QUÊN MẬT KHẨU
       
    </h4>
       <?php if ($loi!=""){ ?> 
       <div class=" alert alert-danger"><?php echo $loi?></div>
       <?php }?>
       <div class="mb-3">
    <label for="email" class="form-label">Mời nhập email</label>
    <input value="<?php if(isset($email) == true) echo $email?>" type="email" class="form-control" id="email" name="email">
   
  </div>
 
  <button type="submit" name="nutguiyeucau" value="nutgui" class="btn btn-primary">Gửi yêu cầu</button>
</form> 
  






</body>
</html> 



