<?php

    //step1. Get database connection
    require('../config/database.php');
   
    $e_mail = $_POST ['email'];
    $p_wd = $_POST ['password'];

    //Step 3. Query to validate data
    $sql_check_user = "
select
    u.email,
    u.password
from
    users u
where
    u.email ='$e_mail' and
    u.password ='$p_wd'
   limit 1
    
   ";
    //step 4. execute query 
   $res_check =pg_query($sql_check_user);
   if(pg_num_rows($res_check) > 0){
         echo "User exists. Go to main page!!!";
     } else {
        echo "Verify data";
    }
        
   