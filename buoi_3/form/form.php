<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập buổi 3</title>
    <link rel="stylesheet" href="http://localhost/learn_web/assets/css/style.css">
</head>

<body>
    <!-- file Form: tên, giới tính, email, mật khẩu, ngày sinh, địa chỉ, sở thích -->
    <center>
        <form action="process-form.php" method="POST">
            <h1>FORM THÊM TIN TỨC</h1>
            <div class="row">
                <label class="col-2" for="inputName">Tiêu đề</label>
                <input class="col-8 form-control" id="inputName" name="title" type="text" placeholder="Nhập tiêu đề!" required>
            </div>

            <div class="row">
                <label class="col-2" for="inputEmail">Nội dung</label>
                <textarea type="text" style="height: 100px;" class="col-8 form-control" id="inputEmail" name="content" type="text" placeholder="Nhập nội dung!" required></textarea>
            </div>

            <div class="row">
                <label class="col-2" for="inputPassword">Link ảnh</label>
                <input class="col-8  form-control" id="inputPassword" name="image" type="text" placeholder="Nhập đường dẫn ảnh!"/>
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
</script>
</html>