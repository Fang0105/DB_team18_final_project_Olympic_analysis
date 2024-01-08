<title>modify result</title>
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
    $sql = "SELECT * FROM modify_result";
    $result = mysqli_query($link, $sql);
    if(mysqli_num_rows($result)===0){
        echo "no sumbit";
    }else{
        while($row=mysqli_fetch_assoc($result)){
            echo "old : ";  
            echo "<table border=\"1\">";
                echo "<tr>";
                    echo "<th>id</th>";
                    echo "<th>discipline_title</th>";
                    echo "<th>slug_game</th>";
                    echo "<th>participant_type</th>";
                    echo "<th>medal_type</th>";
                    echo "<th>rank_position</th>";
                    echo "<th>country_name</th>";
                    echo "<th>athlete_url</th>";
                    echo "<th>athlete_full_name</th>";
                    echo "<th>value_unit</th>";
                    echo "<th>value_type</th>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["discipline_title"] . ", " . $row["event_title"] . "</td>";
                    echo "<td>" . $row["slug_game"] . "</td>";
                    echo "<td>" . $row["participant_type"] . "</td>";
                    echo "<td>" . $row["medal_type"] . "</td>";
                    echo "<td>" . $row["rank_position"] . "</td>";
                    echo "<td>" . $row["country_name"] . "</td>";
                    echo "<td>" . $row["athlete_full_name"] . "</td>";
                    echo "<td>" . $row["athlete_url"] . "</td>";
                    echo "<td>" . $row["value_unit"] . "</td>";
                    echo "<td>" . $row["value_type"] . "</td>";
                echo "</tr>";
            echo "</table>";
            
            echo "<br>";
            echo "new : ";
            echo "<table border=\"1\">";
                echo "<tr>";
                    echo "<th>id</th>";
                    echo "<th>discipline_title</th>";
                    echo "<th>slug_game</th>";
                    echo "<th>participant_type</th>";
                    echo "<th>new_medal_type</th>";
                    echo "<th>new_rank_position</th>";
                    echo "<th>new_country_name</th>";
                    echo "<th>new_athlete_url</th>";
                    echo "<th>new_athlete_full_name</th>";
                    echo "<th>new_value_unit</th>";
                    echo "<th>new_value_type</th>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["discipline_title"] . ", " . $row["event_title"] . "</td>";
                    echo "<td>" . $row["slug_game"] . "</td>";
                    echo "<td>" . $row["participant_type"] . "</td>";
                    echo "<td>" . $row["new_medal_type"] . "</td>";
                    echo "<td>" . $row["new_rank_position"] . "</td>";
                    echo "<td>" . $row["new_country_name"] . "</td>";
                    echo "<td>" . $row["new_athlete_full_name"] . "</td>";
                    echo "<td>" . $row["new_athlete_url"] . "</td>";
                    echo "<td>" . $row["new_value_unit"] . "</td>";
                    echo "<td>" . $row["new_value_type"] . "</td>";
                echo "</tr>";
            echo "</table>";

            echo "<form action=\"admin_check.php\" method=\"post\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"{$row["id"]}\">";
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
                echo "<input type=\"hidden\" name=\"agree\" value=true>";
                echo "<button type=\"sumbit\">同意</button>";
            echo "</form>";

            echo "<form action=\"admin_check.php\" method=\"post\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"{$row["id"]}\">";
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
                echo "<input type=\"hidden\" name=\"agree\" value=false>";
                echo "<button type=\"sumbit\">不同意</button>";
            echo "</form>";

            echo "<br>";
            echo "<br>";
            echo "<br>";
        }
    }
    
    
?>
