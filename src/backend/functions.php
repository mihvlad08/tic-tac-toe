<?php
function check_login($con) {
    if(isset ($_SESSION['game_id'])) {
        $id = $_SESSION['game_id'];
        $query = "SELECT * FROM users WHERE game_id = '$id' LIMIT 1";

        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0 ) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data; 
        }
    }
    die;
}