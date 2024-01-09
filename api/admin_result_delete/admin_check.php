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
    if($_POST["agree"]==="true"){
        if($_POST["discipline_title"]===""){
            $_POST["discipline_title"] = "%";
        }
        if($_POST["event_title"]===""){
            $_POST["event_title"] = "%";
        }
        if($_POST["slug_game"]===""){
            $_POST["slug_game"] = "%";
        }
        if($_POST["participant_type"]===""){
            $_POST["participant_type"] = "%";
        }
        if($_POST["medal_type"]===""){
            $_POST["medal_type"] = "%";
        }
        if($_POST["rank_position"]===""){
            $_POST["rank_position"] = "%";
        }
        if($_POST["country_name"]===""){
            $_POST["country_name"] = "%";
        }
        if($_POST["athlete_url"]===""){
            $_POST["athlete_url"] = "%";
        }
        if($_POST["athlete_full_name"]===""){
            $_POST["athlete_full_name"] = "%";
        }
        if($_POST["value_unit"]===""){
            $_POST["value_unit"] = "%";
        }
        if($_POST["value_type"]===""){
            $_POST["value_type"] = "%";
        }
        foreach($_POST as $key=>$value){
            echo $key.'=>'.$value.'<br/>';
        }
        
        $sql = "DELETE FROM result WHERE discipline_title LIKE \"{$_POST["discipline_title"]}\" and event_title LIKE \"{$_POST["event_title"]}\" and slug_game LIKE \"{$_POST["slug_game"]}\" and participant_type LIKE \"{$_POST["participant_type"]}\" and medal_type LIKE \"{$_POST["medal_type"]}\" and rank_position LIKE \"{$_POST["rank_position"]}\" and country_name LIKE \"{$_POST["country_name"]}\" and athlete_url LIKE \"{$_POST["athlete_url"]}\" and athlete_full_name LIKE \"{$_POST["athlete_full_name"]}\" and value_unit LIKE \"{$_POST["value_unit"]}\"";
        $result = mysqli_query($link,$sql);
        
        $sql = "DELETE FROM delete_result WHERE id=\"{$_POST["id"]}\"";
        $result = mysqli_query($link,$sql);
        echo '<script>window.alert("已刪除")</script>';
        echo '<script>document.location.href="index.php"</script>';
    }else{
        $sql = "DELETE FROM delete_result WHERE id=\"{$_POST["id"]}\"";
        $result = mysqli_query($link,$sql);
        echo '<script>window.alert("未刪除")</script>';
        echo '<script>document.location.href="index.php"</script>';
    }
?>