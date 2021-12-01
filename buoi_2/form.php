<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập buổi 2</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <!-- file Form: tên, giới tính, email, mật khẩu, ngày sinh, địa chỉ, sở thích -->
    <center>
        <form action="process-form.php" method="POST">
            <h1>FORM NHẬP THÔNG TIN</h1>
            <div class="row">
                <label class="col-2" for="inputName">Tên</label>
                <input class="col-8 form-control" id="inputName" name="name" type="text" placeholder="Nhập tên!">
            </div>

            <div class="row">
                <label class="col-2" for="">Giới tính</label>
                <div class="col-8">
                    <input name="sex" class="form-control" checked type="radio" value="1">Nam
                    <input name="sex" class="form-control" type="radio" value="0">Nữ
                </div>
            </div>

            <div class="row">
                <label class="col-2" for="inputEmail">email</label>
                <input type="email" class="col-8 form-control" id="inputEmail" name="email" type="text" placeholder="Nhập email!">
            </div>

            <div class="row">
                <label class="col-2" for="inputPassword">Mật khẩu</label>
                <input class="col-8  form-control" id="inputPassword" name="password" type="password" placeholder="Nhập Mật Khẩu!">
            </div>

            <div class="row">
                <label class="col-2" for="inputDate">Ngày sinh</label>
                <input name="date" id="inputDate" class="col-8 form-control" type="date">
            </div>

            <div class="row">
                <label class="col-2" for="inputAddress">Địa chỉ</label>
                <input class="col-8 form-control" id="inputAddress" name="address" type="text" placeholder="Nhập địa chỉ!">
            </div>

            <div class="row">
                <label class="col-2" for="inputHobby">Sở thích</label>
                <input class="col-8 form-control" id="inputHobby" name="hobby" type="text" placeholder="Nhập sở thích!">
            </div>

            <div class="row">
                <label class="col-2" for=""></label>
                <button type="reset" class="col-4 form-control btn btn-reset">Đặt lại</button>
                <button type="submit" class="col-4 form-control btn btn-submit">Gửi</button>
            </div>
        </form>
    </center>
</body>
<script>
    document.getElementById('inputDate').valueAsDate = new Date();
</script>
</html>