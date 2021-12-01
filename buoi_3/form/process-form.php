<?php
//Tạo chuỗi kết nối
$connect = mysqli_connect("localhost", 'root', '123456', 'learn_web');
//cho phép tiếng Việt
mysqli_set_charset($connect,'utf8');
if(isset($_POST) && $_POST)
{
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_POST['image'];
    $sql = "INSERT INTO news(title,content,image) VALUES('$title','$content','$image')";
    //Thực hiện câu truy vấn
    mysqli_query($connect,$sql);

    //kiểm tra lỗi
    $errors = mysqli_error($connect);
    if($errors)
    {
        die('Có lỗi xảy ra: '.$errors);
    }else{
        die('Thêm tin tức thành công!');
    }
}else{
    die('Có lỗi xảy ra!');
}
// đóng kết nối
mysqli_close($connect);