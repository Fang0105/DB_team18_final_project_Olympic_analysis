<input type="button" value="重新查詢" onclick="location.href='../../query/index.html'">
<title>查詢結果</title>
<table border="1">
    <tr>
        <th>名字</th>
        <th>參與奧運會次數</th>
        <th>第一次參加</th>
        <th>生日</th>
        <th>獎牌</th>
        <th>個人頁面</th>
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
        $name = $_POST["name"];

        $sql = "SELECT * FROM athlete WHERE athlete.athlete_full_name LIKE '%{$name}%' ";
        $result = mysqli_query($link,$sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row["athlete_full_name"] . "</td>";
            echo "<td>" . $row["game_participation"] . "</td>";
            echo "<td>" . $row["first_game"] . "</td>";
            echo "<td>" . $row["athlete_year_birth"] . "</td>";
            echo "<td>" . $row["athlete_medals"] . "</td>";
            echo "<td>" . "<a href='" . $row["athlete_url"] . "' target='_blank'>" . $row["athlete_url"] . "</a>" . "</td>";
            echo "</tr>";
        }
        mysqli_free_result($result);
        mysqli_close($link);
    ?>
</table>