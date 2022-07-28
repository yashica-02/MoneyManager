<html>
    <head>
        <title>
            Home: You're Broke
        </title>
        <style>
            body{
                background-color: rgb(201, 156, 222);
            }
            #head{
                margin:-8px;
                margin-bottom: 5px;
                background: rgb(190, 130, 218);
                border-bottom: solid grey 1px;
            }
            #header {
                font-size:100px;
                padding:18px;
                width:82.5%;
                text-align: center;
                border-right:solid black 2px;
            }
            #dt{
                padding:10px;
                text-align: center;
                width:13%;
                float:right;
            }
            em{
                font-size:25px;
            }
            #amt{
                margin-left:5%;
            }
            #Tamt{
                float:right;
                margin-right:15%;
            }
            h4{
                font-size:20px;
            }
            #h3{
                display: flex;
                justify-content: space-between;
                margin-right:10%;
                margin-left:10%;
                width:79%;
                font-size:20px;
            }
            hr{
                color:black;
            }
            progress{
                width: 75%;
                height:50px;              
            }
            h5{
                font-size:25px;
                margin:0px;
            }
            a{
                padding:25px 32px;
                background-color: rgb(180, 120, 208);
                border: rgb(190, 130, 218);
                color:white;
                font-size: 30px;                
                text-decoration: none;
            }
            a:hover{
                background-color: white;
                color:rgb(180, 120, 208);
            }
        </style>
    </head>
    <body>
        <div id="head">
            <div id="dt">
                <h4>
                    <?php
                    echo date('d-m-Y'); 
                    ?>
                </h4>
                <hr>
                <h4>
                    <?php
                        $date = date('d');
                        $left = 31 - $date;
                        echo $left." days left";
                    ?>
                </h4>
            </div>
            <div id="header">
                You're Broke!!<br>
                <em>Try to save some Money</em>
            </div>
        </div>
        <br>

        <?php
        $connection = new mysqli("localhost", "root", "","Users"); // Establishing Connection with Server
        //MySQL Query to read data
        $query = "select sum(amount) from yashica;";
        $result = $connection->query($query);
        $row = $result->fetch_assoc();
        $SUMamt= implode($row);
        ?>
        
        <br><br><br>
        <h5><center>
            <?php
                $left = 5000 - $SUMamt;
                echo "Amount Left: ".$left;
            ?>
        </center></h5>

        <br><br>

        <center><progress id="prog" value="<?php echo $SUMamt; ?>" max="5000">300</progress></center>
        
        <div id="h3">
        <h3 ><?php echo $SUMamt; ?></h3>
        <h3>5000.00</h3>
        </div>

        <br><br>

        <center><a href="addexp.html" id="add">Add Expense</a></center>

        <?php
        mysqli_close($connection);
        ?>
    </body>
</html>