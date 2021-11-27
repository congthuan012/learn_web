<?php
    if(!isset($_POST) || !$_POST)
    {
        header('Location:form.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập buổi 2</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js"></script>
</head>

<body>
    <!-- file Form: tên, giới tính, email, mật khẩu, ngày sinh, địa chỉ, sở thích -->
    <center>
        <form>
            <h1>THÔNG TIN VỪA NHẬP</h1>
            <div>
                <label class="col-2" for="inputName">Tên</label>
                <label class="col-8" for="inputName"><?=$_POST['name']??''?></label>
            </div>

            <div>
                <label class="col-2" for="">Giới tính</label>
                <label class="col-8" for="inputName">
                    <?php 
                    if($_POST['sex']){
                        if($_POST['sex'] == 1)
                            echo 'Nam';
                        if($_POST['sex'] == 0)
                            echo 'Nữ';
                    } 
                    ?>
                </label>
            </div>

            <div>
                <label class="col-2" for="inputEmail">email</label>
                <label class="col-8" for="inputName"><?=$_POST['email']??''?></label>
            </div>

            <div>
                <label class="col-2" for="inputPassword">Mật khẩu</label>
                <label class="col-8" for="inputName"><?=$_POST['password']??''?></label>
            </div>

            <div>
                <label class="col-2" for="">Ngày sinh</label>
                <label class="col-8" for="inputName"><?=date_format(date_create($_POST['date']),'d/m/Y')??''?></label>
            </div>

            <div>
                <label class="col-2" for="inputAddress">Địa chỉ</label>
                <label class="col-8" for="inputName"><?=$_POST['address']??''?></label>
            </div>

            <div>
                <label class="col-2" for="inputHobby">Sở thích</label>
                <label class="col-8" for="inputName"><?=$_POST['hobby']??''?></label>
            </div>

            <div>
                <button onclick="redirect('form.php')" type="reset" class="col-10 form-control btn btn-reset">Trở về</button>
            </div>
        </form>
    </center>
</body>

</html>