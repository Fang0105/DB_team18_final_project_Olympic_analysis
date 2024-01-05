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

    $data = array();    
    $sql = "SELECT * FROM admin;";
    $result = mysqli_query($link, $sql);
    
    if ($result) {
        if (mysqli_num_rows($result)>0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[$row["name"]] = $row["password"];
            }
        }
        mysqli_free_result($result);
    }else {
        echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
    }
    if(array_key_exists($_POST["name"], $data)){
        if($_POST["password"]===$data[$_POST["name"]]){
            //TODO: 帳密正確要跳到後台頁面
        }else{
            echo '<script>window.alert("name or password is wrong")</script>';
            echo '<script>document.location.href="../../log_in?index.html"</script>';
        }
    }else{
        echo '<script>window.alert("name or password is wrong")</script>';
        echo '<script>document.location.href="../../log_in?index.html"</script>';
    }
    
?>
