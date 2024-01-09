<title>查詢結果 hahaasdasdasdasd</title>
<input type="button" value="重新查詢" onclick="location.href='../../query/index.html'">
<table border="1"> 
    <tr>
        <th>項目</th>
        <th>slug game</th>
        <th>參與類型</th>
        <th>獎牌</th>
        <th>名次</th>
        <th>國籍</th>
        <th>運動員名字</th>
        <th>運動員頁面連結</th>
        <th>成績</th>
        <th>成績類型</th>
        <th>修改</th>
        <th>刪除</th>
    </tr> 
    <?php
        $host = 'localhost:8889';
        $db_user = 'root';
        $db_password = 'root';
        $db_name = 'final_project';

        $link = mysqli_connect($host, $db_user, $db_password, $db_name);
        if($link){
        }else{
            echo "不正確連接資料庫</br>" . mysqli_connect_error();
        }

        $slug_game = $_POST["slug_game"];
        $discipline_title = $_POST["discipline_title"];
        $participant_type = $_POST["participant_type"];
        $rank_position = $_POST["rank_position"];

        $event_title = explode(", ",$discipline_title)[1];
        $discipline_title = explode(", ",$discipline_title)[0];
        $sql = "SELECT * FROM result";
        $first = true;
        if($slug_game!="ANY"){
            if($first===true){
                $sql .= " WHERE slug_game='{$slug_game}'";
                $first = false;
            }
        }
        if($discipline_title!="ANY"){
            if($first===true){
                $sql .= " WHERE discipline_title='{$discipline_title}'";
                $first = false;
            }else{
                $sql .= " and discipline_title='{$discipline_title}'";
            }
        }
        if($event_title!="ANY" && $event_title!=""){
            if($first===true){
                $sql .= " WHERE event_title='{$event_title}'";
                $first = false;
            }else{
                $sql .= " and event_title='{$event_title}'";
            }
        }
        if($participant_type!="ANY"){
            if($first===true){
                $sql .= " WHERE participant_type='{$participant_type}'";
                $first = false;
            }else{
                $sql .= " and participant_type='{$participant_type}'";
            }
        }
        if($rank_position!="ANY"){
            if($first===true){
                $sql .= " WHERE rank_position='{$rank_position}'";
                $first = false;
            }else{
                $sql .= " and rank_position='{$rank_position}'";
            }
        }
        if($first===true){
            echo "<script>window.alert(\"至少選取一項\")</script>";
            echo '<script>document.location.href="../query_page/result_query_page.php"</script>';
        }else{
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row["discipline_title"] . ", " . $row["event_title"] . "</td>";
                echo "<td>" . $row["slug_game"] . "</td>";
                echo "<td>" . $row["participant_type"] . "</td>";
                echo "<td>" . $row["medal_type"] . "</td>";
                echo "<td>" . $row["rank_position"] . "</td>";
                echo "<td>" . $row["country_name"] . "</td>";
                echo "<td>" . $row["athlete_full_name"] . "</td>";
                echo "<td>" . "<a href='" . $row["athlete_url"] . "' target='_blank'>" . $row["athlete_url"] . "</a>" . "</td>";
                echo "<td>" . $row["value_unit"] . "</td>";
                echo "<td>" . $row["value_type"] . "</td>";
                
                echo "<td>";
                echo "<form action=\"../modify/result_modify.php\" method=\"post\">";
                    echo "<button type=\"sumbit\">修改資料</button>";     
                    echo "<input type=\"hidden\" name=\"discipline_title\" value=\"{$row["discipline_title"]}\">";
                    echo "<input type=\"hidden\" name=\"event_title\" value=\"{$row["event_title"]}\">";
                    echo "<input type=\"hidden\" name=\"slug_game\" value=\"{$row["slug_game"]}\">";
                    echo "<input type=\"hidden\" name=\"participant_type\" value=\"{$row["participant_type"]}\">";
                    echo "<input type=\"hidden\" name=\"medal_type\" value=\"{$row["medal_type"]}\">";
                    echo "<input type=\"hidden\" name=\"rank_position\" value=\"{$row["rank_position"]}\">";
                    echo "<input type=\"hidden\" name=\"country_name\" value=\"{$row["country_name"]}\">";
                    echo "<input type=\"hidden\" name=\"athlete_full_name\" value=\"{$row["athlete_full_name"]}\">";
                    echo "<input type=\"hidden\" name=\"athlete_url\" value=\"{$row["athlete_url"]}\">";
                    echo "<input type=\"hidden\" name=\"value_unit\" value=\"{$row["value_unit"]}\">";
                    echo "<input type=\"hidden\" name=\"value_type\" value=\"{$row["value_type"]}\">";
                echo "</form>";
                echo "</td>";

                echo "<td>";
                echo "<form action=\"../delete/send_result_delete.php\" method=\"post\">";
                    echo "<button type=\"sumbit\">刪除</button>";
                    
                    echo "<input type=\"hidden\" name=\"discipline_title\" value=\"{$row["discipline_title"]}\">";
                    echo "<input type=\"hidden\" name=\"event_title\" value=\"{$row["event_title"]}\">";
                    echo "<input type=\"hidden\" name=\"slug_game\" value=\"{$row["slug_game"]}\">";
                    echo "<input type=\"hidden\" name=\"participant_type\" value=\"{$row["participant_type"]}\">";
                    echo "<input type=\"hidden\" name=\"medal_type\" value=\"{$row["medal_type"]}\">";
                    echo "<input type=\"hidden\" name=\"rank_position\" value=\"{$row["rank_position"]}\">";
                    echo "<input type=\"hidden\" name=\"country_name\" value=\"{$row["country_name"]}\">";
                    echo "<input type=\"hidden\" name=\"athlete_full_name\" value=\"{$row["athlete_full_name"]}\">";
                    echo "<input type=\"hidden\" name=\"athlete_url\" value=\"{$row["athlete_url"]}\">";
                    echo "<input type=\"hidden\" name=\"value_unit\" value=\"{$row["value_unit"]}\">";
                    echo "<input type=\"hidden\" name=\"value_type\" value=\"{$row["value_type"]}\">";
                echo "</form>";
                echo "</td>";

                echo "</tr>";
            }
        }
    ?>
</table>