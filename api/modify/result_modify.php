<title>result modify</title>
原本的：
<table border='1'>
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
    </tr>
    <?php
        echo "<tr>";
        echo "<td>{$_POST["discipline_title"]}, {$_POST["event_title"]}</td>";
        echo "<td>{$_POST["slug_game"]}</td>";
        echo "<td>{$_POST["participant_type"]}</td>";
        echo "<td>{$_POST["medal_type"]}</td>";
        echo "<td>{$_POST["rank_position"]}</td>";
        echo "<td>{$_POST["country_name"]}</td>";
        echo "<td>{$_POST["athlete_full_name"]}</td>";
        echo "<td>{$_POST["athlete_url"]}</td>";
        echo "<td>{$_POST["value_unit"]}</td>";
        echo "<td>{$_POST["value_type"]}</td>";
        echo "</tr>";
    ?>
</table>
<br>
<br>
<br>
修改：
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
    </tr>
    <form action="send_result_modify.php" method="post">
        <?php
            echo "<td>{$_POST["discipline_title"]}, {$_POST["event_title"]}</td>";
            echo "<td>{$_POST["slug_game"]}</td>";
            echo "<td>{$_POST["participant_type"]}</td>";
            echo "<td><input value=\"{$_POST["medal_type"]}\" name=new_medal_type style=\"border:1px solid red;\"></td>";
            echo "<td><input value=\"{$_POST["rank_position"]}\" name=new_rank_position style=\"border:1px solid red;\"></td>";
            echo "<td><input value=\"{$_POST["country_name"]}\" name=new_country_name style=\"border:1px solid red;\"></td>";
            echo "<td><input value=\"{$_POST["athlete_full_name"]}\" name=new_athlete_full_name style=\"border:1px solid red;\"></td>";
            echo "<td><input value=\"{$_POST["athlete_url"]}\" name=new_athlete_url style=\"border:1px solid red;\"></td>";
            echo "<td><input value=\"{$_POST["value_unit"]}\" name=new_value_unit style=\"border:1px solid red;\"></td>";
            echo "<td><input value=\"{$_POST["value_type"]}\" name=new_value_type style=\"border:1px solid red;\"></td>";
        ?>
        <?php
            echo "<input type=\"hidden\" name=\"discipline_title\" value=\"{$_POST["discipline_title"]}\">";
            echo "<input type=\"hidden\" name=\"event_title\" value=\"{$_POST["event_title"]}\">";
            echo "<input type=\"hidden\" name=\"slug_game\" value=\"{$_POST["slug_game"]}\">";
            echo "<input type=\"hidden\" name=\"participant_type\" value=\"{$_POST["participant_type"]}\">";
            echo "<input type=\"hidden\" name=\"medal_type\" value=\"{$_POST["medal_type"]}\">";
            echo "<input type=\"hidden\" name=\"rank_position\" value=\"{$_POST["rank_position"]}\">";
            echo "<input type=\"hidden\" name=\"country_name\" value=\"{$_POST["country_name"]}\">";
            echo "<input type=\"hidden\" name=\"athlete_full_name\" value=\"{$_POST["athlete_full_name"]}\">";
            echo "<input type=\"hidden\" name=\"athlete_url\" value=\"{$_POST["athlete_url"]}\">";
            echo "<input type=\"hidden\" name=\"value_unit\" value=\"{$_POST["value_unit"]}\">";
            echo "<input type=\"hidden\" name=\"value_type\" value=\"{$_POST["value_type"]}\">";
        ?>
        <?php
            echo "<button type=\"sumbit\">送出修改</button>";
        ?>
    </form>
</table>