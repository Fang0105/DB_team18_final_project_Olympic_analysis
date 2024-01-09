<?php
    $host = 'localhost:8889';
    $db_user = 'root';
    $db_password = 'root';
    $db_name = 'final_project';

    $link = mysqli_connect($host, $db_user, $db_password, $db_name);
    if($link){
        echo 'successfully connect';
        echo "<br>";
    }else{
        echo "不正確連接資料庫</br>" . mysqli_connect_error();
    }
    
    $name = $_POST["name"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM admin WHERE name=? AND password=?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $name, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result)>0){
        echo '<script>window.alert("登入成功")</script>';
        echo '<script>document.location.href="../../admin_control/index.html"</script>';
    }else{
        echo '<script>window.alert("帳密錯誤")</script>';
        echo '<script>document.location.href="../../log_in/index.html"</script>';
    }
    
?>
