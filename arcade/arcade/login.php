<?php include("top.php"); ?>
<div class = "login_body">
    
    <div class = "login_box">
        <div id = "login_text">
            <h1>Login</h1>
        </div>
        <div class = "login_form">
            <form action = "loginsubmit.php">
                <fieldset>
                    <label><strong>Username</strong></label> </br>
                    <input type= "text" method= "get" name = "user" size = "30"> </br>
                    <label><strong>Password</strong></label> </br>
                    <input type = "password" method="get" name = "pass" size = "30" > </br>
                    <input type = "submit" value = "Login"/>
                </fieldset>
            </form>
        </div>
    </div>
</div>
