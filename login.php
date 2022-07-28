<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add Expense</title>
   <style>
      * {
         padding: 0;
         margin: 0;
      }
      .head {
         display: flex;
         justify-content: center;
         background: rgb(190, 130, 218);
         border-bottom: solid grey 1px;
         font-size:100px;
         padding:20px;
      }
      main {
         background: rgb(201, 156, 222);
         height: 75%;
         display: flex;
         justify-content: center;
         align-items: center;
      }
      .box {
         background: rgba(255,255,255,0.25);
         border-radius: 15px;
         width:30%;
         padding: 30px 50px;
         justify-content: center;
         align-items: center;
      }
      .box form label{
         font-size: 24px;
      }
      .box form input{
         margin: 10 0 10 0;
         font-size: 18px;
         padding:5px;
         width:100%;
      }
      form button {
         margin: 0 10;
         display: flex;
         margin-top: 20px;
         background-color: rgb(180, 120, 208);
         border: rgb(190, 130, 218);
         color:white;
         border-radius: 10px;
         font-size:20px;
         padding:10px 25px;
      }
      #login:hover{
         background-color: rgba(255,255,255,0.5);
         color:rgb(180, 120, 208);
      }
      a{            
         text-decoration: none;
      }
   </style>
</head>
<body>
   <div class="head">
      Money Manager
   </div>
   <main>
      <div class="box">
         <form action="home.php" method="post">
            <label for="uname">Username:</label>
            <br>
            <input type="text" id="uname">
            <br><br>
            <label for="pass">Password:</label>
            <br>
            <input type="text" id="pass">
            <br>
            <button type="submit" id="login">Login</button> 
            </div>
         </form>
      </div>
   </main>
</body>
</html>