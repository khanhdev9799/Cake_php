<?php 
    class connect{
        var $db = null ;

        // Hàm tạo thực thi mặc định là cứ đối tượng thì nó sẽ kết nối được với Database
        public function __construct()
        {
            $dsn = 'mysql:host=localhost;dbname=cakephp';
            $user = 'root';
            $pass = '';
            try {
                $this -> db = new PDO($dsn,$user,$pass,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            } 
            catch (\Throwable $th) 
            {
                // Throw $th;
                echo 'Thất bại';
            }
        }
        // Phương thức thực thicâu truy vấn Select trả về nhiều Object
        public function getList($select)
        {
            $result = $this ->db -> query($select);
            return $result;
        }

        public function getInstance($select) 
        {
            $result=$this->db->query($select);
            $result = $result->fetch();
            return $result;
        }
        
        public function exec($query) 
        {
            $result = $this->db->exec($query);
            return $result;
        }

// getList($select): Phương thức này thực hiện một truy vấn SQL SELECT trả về nhiều dòng dữ liệu, 
// chẳng hạn như một danh sách hoặc một tập hợp các kết quả. 
// Kết quả trả về từ phương thức này thường là một đối tượng PDOStatement chứa tất cả các dòng dữ liệu đã được truy vấn.

// getInstance($select): Phương thức này thực hiện một truy vấn SQL SELECT và trả về một dòng dữ liệu duy nhất (sử dụng $result->fetch();).
// Thường được sử dụng khi bạn mong đợi một dòng dữ liệu duy nhất.

// exec($query): Phương thức này thực thi một truy vấn SQL và trả về số hàng bị ảnh hưởng bởi truy vấn.
// Thường được sử dụng cho các truy vấn không phải là SELECT, chẳng hạn như các truy vấn cập nhật (INSERT, UPDATE, DELETE).

    }
