<?php include "_header.php"; 
if(is_post_method()){
    // nhận dữ liệu từ post
    $name = $_POST["cate_name"]??"";
    // nếu biến name có dữ liệu
    if(empty($name)==false){
        //câu query sử dụng parameter (ký tự "?")
        $sql = "insert into product_category(cate_name) values(?)";
        //thêm dữ liệu dùng cho param tương ứng cùng vị trí
        $data = [$name];
        $result = db_execute($sql, $data);
        // nếu thực thi thành công
        if($result== true){
            js_alert("Thêm danh mục thành công!!!");
        }
    }
}
?>

<form method = "post">

    <h2 >Thêm danh mục mua sắm</h2>

    <div>
        <label class="control">
            Tên danh mục
        </label>
        <input type="text" name="cate_name" required/>
        
    </div>
    <div class="control">
        <input type="submit" value="thêm" required />
    </div>
 </form>

<?php include "_footer.php"; ?>