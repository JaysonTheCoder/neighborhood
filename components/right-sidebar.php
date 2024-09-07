<html>
    <style>
        .right-sidebar {
            border: 2px solid #00000020 ;
            height: 90%;
            flex: 1 0 20%;
            display: flex;
            justify-content: center;
            position: relative;
            min-height: 95vh;
        }

        /* @media (width <= 800px) {
            .right-sidebar {
                all: unset;
                width: 0;
            }
        } */
        .right-sidebar .community-members {
            height: 100px;
            width: 90%;
            height: 95%;
            margin-top: 20px;
            position: absolute;
            overflow-y: auto;
        }
        .head { font-family: 'Poppins-Regular'; font-size: 11px; padding: 10px; background-color: hsla(213, 59%, 85%, 0.3);}
        .online {
            font-family: "Roboto-Regular";
            color: #00000090;
            padding: 9px 10px;
        }
        .online h4{
            font-size: 11px;
            color: #000000;
        }
        .online h6 {
            font-size: 8px;
        }
        .card-info {
            padding: 10px 14px;
            background-color: #f9f9f9;
            font-family: "Roboto-Regular";
            filter: drop-shadow(0 0 2px #00000020);
            margin-bottom: 9px;
        }
        .name-right-sidebar {
            display: flex;
            flex-direction: column;
        }
        .name-right-sidebar p {
            font-size: 10px;
        }
        
    </style>
    <body>
        <div class="right-sidebar">
            <div class="community-members">
                <div class="head">
                    <h3>Community</h3>
                </div>
                    
                <?php 
                    $conn = mysqli_connect('localhost','root','jayson123','neighborhood_sharing_platform');
                ?>
                <div class="online">
                    <h4>Members.</h4>
                    <h6><?php
                        $total = 0;
                        $query_users = mysqli_query($conn, 'SELECT user_id from users');
                        while($query_users->fetch_assoc()) {$total += 1;}
                        echo $total.' people';
                    ?></h6>
                </div>
                <?php
                    $query = mysqli_query($conn, 'SELECT firstname, lastname from users');
                    while($data = $query->fetch_assoc()) {
                ?>
                    <div class="card-info">
                        <div class="name-right-sidebar">
                            <h5><?php echo $data['firstname'].' '.$data['lastname'];?></h5>
                            <p>Top contributor</p>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </body>
</html>