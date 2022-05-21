<?php include("top.php"); ?>
 
    <form action="signup-submit.php" method="post">
        <fieldset>
            <legend>New User Signup:</legend>

			<!-- This is user's email -->
            <label class="left">
            <strong>Email: </strong>
            </label>
				<input type="email" name="email" size="25">
            <br>
			
            <!-- This is user's name -->
            <label class="left">
            <strong>Username: </strong>
            </label>
				<input type="text" name="name" size="25">
            <br>
			
			<!--This is user's password-->
			<label class="left">
            <strong>Password: </strong>
            </label>
				<input type="password" name="password" size="25">
            <br>

            <!-- This is user's gender -->
            <label class="left">
            <strong>Gender: </strong>
            </label>
				<input type="radio" name ="gender" value="M">Male
				<input type="radio" name = "gender" value="F" checked> Female 
				<input type="radio" name ="gender" value="O">Other
            <br>

            <!-- fav console -->
            <label class="left">
            <strong>Favorite Console:</strong>
            </label>
            <select name ="favorite-console">
                <option value="Playstation">Playstation</option>
                <option value="Xbox">Xbox</option>
		        <option value="Nintendo">Nintendo</option>
                <option value="PC">PC</option>
            </select>
            <br>

            <!-- Submission to sign up -->
            <input type="submit" value="Sign Up">
        
        </fieldset>
    </form>
    
<?php include("bottom.html"); ?>
