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

    $data = array();    
    $sql = "SELECT * FROM admin WHERE name='{$name}' and password='{$password}';";
    $result = mysqli_query($link, $sql);
    if(mysqli_num_rows($result)>0){
        //TODO: 帳密正確要跳到後台頁面
    }else{
        echo '<script>window.alert("name or password is wrong")</script>';
        echo '<script>document.location.href="../../log_in?index.html"</script>';
    }
    
?>
