<?php
// Kết nối đến cơ sở dữ liệu
include '../db.php';

// Kiểm tra xem có tham số id được truyền qua phương thức GET không
if(isset($_GET['id'])) {
    $author_id = $_GET['id'];

    // Chuẩn bị câu lệnh SQL để xóa thể loại từ cơ sở dữ liệu
    $sql = "DELETE FROM theloai WHERE ma_tloai = $author_id";

    if ($conn->query($sql) === TRUE) {
        // Nếu xóa thành công, chuyển hướng về trang danh sách thể loại
        header("Location: category.php");
        exit();
    } else {
        echo "Lỗi khi xóa thể loại: " . $conn->error;
    }
} else {
    echo "Mã thể loại không được cung cấp.";
}

?>
