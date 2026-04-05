<?php
    require_once "prices-db.php";

    function display_data(){
        global $con;
        $query = "SELECT id, productName, productPrice FROM prices";
        $result = mysqli_query($con, $query);
        return $result;
    }

   

?>