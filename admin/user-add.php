<?php include "_header.php"; 
if(is_post_method()){
    // nhận dữ liệu từ post
    $username = $_POST["username"]??"";
    // nếu biến name có dữ liệu
    $pwd = $_POST["pwd"]??"";
        //câu query sử dụng parameter (ký tự "?")
        $sql = "insert into user(username, pwd) values(?,?)";
        //thêm dữ liệu dùng cho param tương ứng cùng vị trí
        $pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $data = [$username, $pwd];
        $result = db_execute($sql, $data);
        // nếu thực thi thành công
        if($result== true){
            js_alert("Thêm danh mục thành công!!!");
        }
    
}
?>

<form method = "post">

    <h2 >Thêm danh mục mua sắm</h2>

    <div>
        <label class="control">
            Tên đăng nhập
        </label>
        <input type="text" name="username" required/>
        
    </div>
    <div>
        <label class="user">
           password
        </label>
        <input type="text" name="password" required/>
        
    </div>
    <div class="control">
        <input type="submit" value="thêm" required />
    </div>
 </form>

<?php include "_footer.php"; ?>