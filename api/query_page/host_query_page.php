<title>host</title>
<input type="button" value="重新查詢" onclick="location.href='../../query/index.html'">
<table border="1">
    <tr>
        <th>game slug</th>
        <th>地點</th>
        <th>名稱</th>
        <th>季節</th>
        <th>年份</th>
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

        $sql = "SELECT * FROM host ORDER BY game_year, game_season";
        $result = mysqli_query($link, $sql);

        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row["game_slug"] . "</td>";
            echo "<td>" . $row["game_location"] . "</td>";
            echo "<td>" . $row["game_name"] . "</td>";
            echo "<td>" . $row["game_season"] . "</td>";
            echo "<td>" . $row["game_year"] . "</td>";
            echo "</tr>";
        }
        mysqli_free_result($result);
        mysqli_close($link);
    ?>
</table>