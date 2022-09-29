

  <?php
            
            $servername ='localhost';
            $username = 'admin';
            $db_password = 'admin';
            $dbName ='ipda';
            
            
            
            function connectDb($servername,$username,$db_password,$dbName){
            $mysqli = new mysqli($servername,$username,$db_password,$dbName);

            // Check connection
            if ($mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
            } else {
                echo "connected";
            }
            }



            function addUser($name,$prenom,$adresse,$telephone,$service,$email,$password){
                $mysqli = new mysqli($servername,$username,$password,$dbName);
                
            };


        ?>
