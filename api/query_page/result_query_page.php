<title>result query</title>
<form method='post' action='../query/result_query.php'>

    奧運年份：
    <select name='slug_game' required="True">
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

            $data = array();
            $sql = "SELECT DISTINCT(slug_game) FROM result ORDER BY slug_game";
            $result = mysqli_query($link, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
            echo "<option>ANY</option>";
            foreach($data as $key => $value){
                echo "<option>{$value['slug_game']}</option>";
            } 
            mysqli_free_result($result);
            mysqli_close($link);
        ?>
    </select>  
    <br>

    比賽項目：
    <select name='discipline_title' required="True">
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
            $sql = "SELECT discipline_title, event_title FROM result GROUP BY discipline_title, event_title ORDER BY discipline_title";
            $result = mysqli_query($link, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
            echo "<option>ANY</option>";
            foreach($data as $key => $value){
                echo "<option>{$value['discipline_title']}, {$value['event_title']}</option>";
            } 
            mysqli_free_result($result);
            mysqli_close($link);
        ?>
    </select>
    <br>
    
    單人or團體：
    <select name='participant_type' required="True">
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
            $sql = "SELECT DISTINCT(participant_type) FROM result ORDER BY participant_type";
            $result = mysqli_query($link, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
            echo "<option>ANY</option>";
            foreach($data as $key => $value){
                echo "<option>{$value['participant_type']}</option>";
            } 
            mysqli_free_result($result);
            mysqli_close($link);
        ?>
    </select>
    <br>

    名次：
    <select name='rank_position' required="True">
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
            $sql = "SELECT DISTINCT(rank_position) FROM result ORDER BY rank_position";
            $result = mysqli_query($link, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
            echo "<option>ANY</option>";
            foreach($data as $key => $value){
                echo "<option>{$value['rank_position']}</option>";
            } 
            mysqli_free_result($result);
            mysqli_close($link);
        ?>
    </select>

    <br>
    <input type="submit" value="查詢">
</form>