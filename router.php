<?php
    include('./sql/auth.php');
    class Route {
        var $address = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        function redirect() {
            switch ($this->address) {
                case '/':
                    header("Location: /");
                    break;
                case '/Landingpage':
                    header("Location: Pages/Homepage.php");
                    break;
                case '/Homepage':
                    header("Location: Pages/ContentPage.php");
            }
        }
    }
    
?>