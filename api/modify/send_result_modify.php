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

    $sql = "SELECT * FROM modify_result LIMIT 1;";
    $result = mysqli_query($link, $sql);
    $id = 1;
    if(mysqli_num_rows($result)!=0){
        //max id
        $sql = "SELECT MAX(id) as id FROM modify_result";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row["id"]+1;
        }
    }
    $sql = "INSERT INTO modify_result VALUES ( {$id}, \"{$_POST["discipline_title"]}\", \"{$_POST["event_title"]}\", \"{$_POST["slug_game"]}\", \"{$_POST["participant_type"]}\", \"{$_POST["medal_type"]}\", \"{$_POST["rank_position"]}\", \"{$_POST["country_name"]}\", \"{$_POST["athlete_url"]}\", \"{$_POST["athlete_full_name"]}\", \"{$_POST["value_unit"]}\", \"{$_POST["value_type"]}\", \"{$_POST["new_medal_type"]}\", \"{$_POST["new_rank_position"]}\", \"{$_POST["new_country_name"]}\", \"{$_POST["new_athlete_url"]}\", \"{$_POST["new_athlete_full_name"]}\", \"{$_POST["new_value_unit"]}\", \"{$_POST["new_value_type"]}\")";
    $result = mysqli_query($link, $sql);
    echo '<script>window.alert("提交成功")</script>';
    echo '<script>document.location.href="../../query/index.html"</script>';

?>