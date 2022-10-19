<?php 
    $db = new mysqli("localhost", "root", "", "wdpf_ev");

    $email = $_GET['em'];
    $pass = $_GET['pss'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pass' ";

    $result = $db->query($sql);
    
    if($result->num_rows === 1){
        echo "<div class=\"green\"> Successfully Login!</div>";
    }else{
        echo "<div class=\"red\"> Email OR PassWord Invalid</div>";
    }

?>
