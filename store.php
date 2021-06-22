    <?php 
        $conn = mysqli_connect("localhost", "root", "", "opensensetask");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
           
        $first_name =  $_REQUEST['firstname'];
        $last_name = $_REQUEST['lastname'];
        $profile =  $_REQUEST['profile'];
        $email =  $_REQUEST['email'];//lastcom
        $areacode =  $_REQUEST['areacode'];
        $phone =  $_REQUEST['phone'];
        $applypost =  $_REQUEST['applypost'];
        $notice =  $_REQUEST['notice'];
        $state =  $_REQUEST['state'];
        $city =  $_REQUEST['city'];
        $othercity =  $_REQUEST['othercity'];
        $relocate =  $_REQUEST['relocatecity'];
        $lastcom =  $_REQUEST['lastcom'];
        $comments =  $_REQUEST['comments'];
        
        $sql = "INSERT INTO submission( `fname`, `lname`, `profile`,`email`, `areacode`, `phone`,`applypost`, `notice`, `state`,`city`, `othercity`, `relocate`,`lastcom`, `comments`)  VALUES ('$first_name', '$last_name','$profile','$email', '$areacode','$phone','$applypost', '$notice','$state','$city', '$othercity','$relocate','$lastcom', '$comments')";
          
        if(mysqli_query($conn, $sql)){
            echo '<script>alert("Data Stored Successfully.")</script>';
            header("Location:https://localhost/opensense");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>