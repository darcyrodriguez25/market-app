<?php

    //step1. Get database connection
    require('../config/database.php');
    $f_name = trim ($_POST ['fname']);
    $l_name = trim ($_POST ['lname']);
    $m_number = trim ($_POST ['mnumber']);
    $id_number = trim ($_POST ['idnumber']);
    $e_mail = trim ($_POST ['email']);
    $p_wd = trim ($_POST ['password']);
    
   // $enc_pass = password_hash($p_wd, PASSWORD_DEFAULT);
    $enc_pass = md5($p_wd);
     
    $check_email = "
    SELECT
        email
    FROM
        users u
    WHERE
        email = '$e_mail' or ide_number = '$id_number'
    LIMIT 1
        ";
         $res_check =pg_query($conn, $check_email);
         if(pg_num_rows($res_check) > 0){
         echo "<script>alert('User already exists !!')</script>";+
         header('refresh:0;url=signin.html');
        } else {
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
        '$enc_pass'
    )
    ";

    //step 4. Execute query
    $res =pg_query($conn, $query);

    //step 5. validate result
    if($res){
       // echo"User been created successfully !!!";
    echo "<script>alert('success !!! Go to login')</script>";+
    header('refresh:0;url=signin.html');
    }else{
        echo "something wrong!";
    }
        }

?>  

        


    
