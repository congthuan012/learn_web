<?php
$new = '';
if(isset($_GET['id']) && $_GET['id'])
{
    $id = $_GET['id'];
    //Tạo chuỗi kết nối
    $connect = mysqli_connect('localhost', 'root', '123456', 'learn_web');
    //Tiếng việt
    mysqli_set_charset($connect, 'utf8');
    //Câu truy vấn
    $sql = "SELECT * FROM news WHERE `id` = $id";
    //thực thi câu truy vấn
    $result = mysqli_query($connect, $sql);
    $new = mysqli_fetch_assoc($result);
    $errors = mysqli_error($connect);
    if ($errors) {
        die('Có lỗi xãy ra: ' . $errors);
    }
    if(!$new)
    {
        echo 'Không tìm thấy tin tức!';
    }
    //Đóng kết nối
    mysqli_close($connect);
}else{
    echo 'Có lỗi xảy ra!';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tin tức</title>
    <link rel="stylesheet" href="http://localhost/learn_web/assets/css/style.css">
    <script src="http://localhost/learn_web/assets/js/script.js"></script>
</head>

<body>
    <h1><?= $new['title'] ?? '' ?></h1>
    <?php if($new) echo '<img height="100" src="'.$new['image'].'" alt="">'?>
    <p><?= $new['content'] ?? '' ?></p>
    <button type="button" style="width: 100%;" onclick="redirect('..')" class="btn btn-close">Trở về</button>
</body>

</html>