<html>
    <head>
    <title>log in page</title>
        
        <link rel="stylesheet" href="./style.css">


    </head>
    <body>
        
    <?php
    echo "<h1> Hi How are you!</h1> ";
    require 'config.php';
    ?>
    <fieldset>
    <legend>Register </legend>
    
    <form method="post" action="insert.php" >

            <p>Fist Name
            <input type="text" name="fname" id="fistname" ></p>
            <p>Secend Name <input type="text" name="sname" id="secendname" >
            </p>
            <p>Enter Email 
            <input type="email" name="email" id="email"></p>
            
            <p>Enter Password
            <input type="text" id="password" name="pass" ></p>
            <p>Re Enter Password
            <input type="text" id="repassword" name="repass" ></p>
            <p>Zip Code 
                <input type="text" id="zipcode" name="zcode"></p>
            <p>County
                <input type="text" id="county" ></p>
            <p>Mobile Number
                 <input type="text" id="mnumber"></p>
            
            <p><input type="checkbox" value="sub"> sub requast</p> 
            
            <input type="submit"> <input type="reset">
                        
        </form>
    </fieldset>
   

    </body>
</html>