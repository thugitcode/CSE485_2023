<?php
    include '../db.php'; // Kết nối đến cơ sở dữ liệu

    // Kiểm tra xem có yêu cầu xóa bài viết không
    if(isset($_GET['ma_bviet'])) {
    $id = $_GET['ma_bviet'];

    // Xác thực dữ liệu (nên kiểm tra thêm)
    if(is_numeric($id) && $id > 0) {
        $sql = "DELETE FROM baiviet WHERE ma_bviet = $id";
        $result_sql = $conn->query($sql);
        // 3. Thực thi câu lệnh DELETE
        $result = mysqli_query($conn, $sql);

        // 4. Đóng kết nối
        mysqli_close($conn);

        // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
        header('location:article.php');
    }
    }
?>
