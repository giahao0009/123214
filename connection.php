<?php
class Connection
{
    private static $conn;

    // Phương thức OpenConnection()
    // Mục đích: Mở kết nối tới CSDL.
    // Tham số: Không có.
    // Trả về: Kết nối vừa tạo.
    public static function OpenConnection()
    {
        $serverName = "localhost";
        $dbName = "eshop";
        $username = "root";
        $password = "";
        try {
            self::$conn = new PDO("mysql:host=$serverName;dbname=$dbName;charset=utf8", $username, $password);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$conn;
        } catch (PDOException $e) {
            error_log("Kết nối tới CSDL $serverName/$dbName bằng tài khoản $username thất bại. Lỗi: " . $e->getMessage());
        }
    }

    // Phương thức ExecuteSelectQuery()
    // Mục đích: Thực thi truy vấn SELECT.
    // Tham số: $sql là 1 prepared statement.
    //          $params là mảng chứa các tham số theo thứ tự, mặc định là null.
    // Trả về: Bảng kết quả (kiểu PDOStatement) nếu truy vấn thành công. False nếu truy vấn thất bại.
    public static function ExecuteSelectQuery($sql, $params = null)
    {
        Connection::OpenConnection();
        try {
            $stmt = self::$conn->prepare($sql);
            $stmt->execute($params);
            $result = $stmt;
            self::$conn = null;
            return $result;
        } catch (PDOException $e) {
            error_log("Truy vấn thất bại. Lỗi: " . $e->getMessage());
            return false;
        }
    }

    // Hàm ExecuteNonQuery()
    // Mục đích: Thực thi truy vấn INSERT, UPDATE, DELETE.
    // Tham số: $sql là prepared statement.
    //          $dataType là danh sách kiểu dữ liệu cho parameter.
    //          $params là mảng chứa các tham số theo thứ tự.
    // Trả về: Số dòng bị ảnh hưởng nếu truy vấn thành công. False nếu truy vấn thất bại.
    public static function ExecuteNonQuery($sql, $params = null)
    {
        Connection::OpenConnection();
        try {
            $stmt = self::$conn->prepare($sql);
            $stmt->execute($params);
            $rowAffected = $stmt->rowCount();
            self::$conn = null;
            return $rowAffected;
        } catch (PDOException $e) {
            error_log("Truy vấn thất bại. Lỗi: " . $e->getMessage());
            return false;
        }
    }
}
