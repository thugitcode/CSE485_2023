<?php
// Kết nối đến cơ sở dữ liệu
include 'D:\Study\TLU\Năm ba_Kì 5\Công nghệ web\TH1\btth01_template\btth01\CSE485_2023\db.php';

// Kiểm tra xem có tham số id được truyền qua phương thức GET không
if(isset($_GET['id'])) {
    $author_id = $_GET['id'];

    // Chuẩn bị câu lệnh SQL để xóa tgia từ cơ sở dữ liệu
    $sql = "DELETE FROM tacgia WHERE ma_tgia = $author_id";

    if ($conn->query($sql) === TRUE) {
        // Nếu xóa thành công, chuyển hướng về trang danh sách tgia
        header("Location: author.php");
        exit();
    } else {
        echo "Lỗi khi xóa tác giả: " . $conn->error;
    }
} else {
    echo "Mã tác giả không được cung cấp.";
}

?>
