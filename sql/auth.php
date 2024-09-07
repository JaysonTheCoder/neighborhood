
<?php

    class connection {
        var $host = 'localhost';
        var $user = 'root';
        var $password = 'jayson123';
        var $db_name = 'neighborhood_sharing_platform';
        function createConnection() {
            return mysqli_connect($this -> host, $this -> user, $this -> password, $this -> db_name);
        }
    }
    class Auth extends connection {
        var $username;
        var $password;
        function submit_credentials() {
            try {
                $mysql = new connection;
                $conn = $mysql -> createConnection();
                $users_table = mysqli_query($conn, 'SELECT * FROM users');
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    while($row = $users_table->fetch_assoc()) {
                        foreach($row as $key => $value ) {
                            if($this->username == $value && $this->password == $value) {
                                return true;
                            }else {
                                // echo 'Invalid';
                            }
                        }
                    }
                }
            }
            catch(mysqli_sql_exception) {
                echo "Can't connect to Database!";
            }
        }
    }

