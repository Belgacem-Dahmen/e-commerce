

  <?php
            
            $servername ='localhost';
            $username = 'admin';
            $password = 'admin';
            $dbName ='ipda';
            
            connectDb($servername,$username,$password,$dbName);
            
            function connectDb($servername,$username,$password,$dbName){
            $mysqli = new mysqli($servername,$username,$password,$dbName);

            // Check connection
            if ($mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
            } 
            }



            function addUser($name,$prenom,$adresse,$telephone,$service,$email,$password){
                $mysqli = new mysqli($servername,$username,$password,$dbName);
                
            };


        ?>
