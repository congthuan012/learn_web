<?php
//Tạo chuỗi kết nối
$connect = mysqli_connect('localhost','root','123456','learn_web');
//Cho phép tiếng việt
mysqli_set_charset($connect,'utf8');
//Câu truy vấn
$sql = 'SELECT * FROM news';
// thực hiện câu truy vấn
$news = mysqli_query($connect,$sql);
//Đóng kết nối
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tin tức</title>
    <link rel="stylesheet" href="http://localhost/learn_web/assets/css/style.css">
</head>
<body>
    <h1>Danh sách tin tức</h1>
    <div style="text-align: right;"><a style="text-decoration: none;" class="col-4 form-control btn btn-submit" href="form/form.php">Thêm mới</a></div>
    <table style="margin-top: 20px; width: 100%;" border="1">
        <tr>
            <th>Mã</th>
            <th>Tiêu đề</th>
            <th>ảnh</th>
        </tr>
        <?php foreach($news as $new):?>
        <tr>
            <td><?=$new['id']??''?></td>
            <td><a href="show.php?id=<?=$new['id']??''?>"><?=$new['title']??''?></a></td>
            <td style="text-align: center;"><img height="100" src="<?=$new['image']??''?>" alt=""></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>