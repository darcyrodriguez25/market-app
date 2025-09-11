<?php

    //step1. Get database connection
    require('../config/database.php');
    $f_name = $_POST ['fname'];
    $l_name = $_POST ['lname'];
    $m_number = $_POST ['mnumber'];
    $id_number = $_POST ['idnumber'];
    $e_mail = $_POST ['email'];
    $p_wd = $_POST ['passwd'];
    $enc_pass = password_hash($p_wd, PASSWORD_DEFAULT);

    //step 3. create query to insert into 
    $query = "
    INSERT INTO users (
    firstname,
    lastname,
    mobile_number,
    ide_number,
    email,
    password 
    ) VALUES (
    
    '$f_name',
        '$l_name',
        '$m_number',
        '$id_number',
        '$e_mail',
        '$p_wd'
    )
    ";

    //step 4. Execute query
    $res =pg_query($conn, $query);

    //step 5. validate result
    if($res){
        echo"User been created successfully !!!";
    }else{
        echo "something wrong!";
    }
?>