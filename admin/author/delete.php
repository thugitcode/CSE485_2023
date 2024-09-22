<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM tacgia WHERE ma_tgia = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Xóa tác giả thành công.";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "ID không hợp lệ.";
}
?>
