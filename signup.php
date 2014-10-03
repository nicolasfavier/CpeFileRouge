	<?php 
		include("utils.php");
		$smarty = getSmarty();
		$smarty->assign( "header","Sign up page");
		$smarty->display("tpl/header.tpl");
	?>

		<h1>Pour plus de fonctionalitées créez un compte</h1>

		<form class="form-horizontal" role="form" method="POST" action="connectivity.php">
		  <div class="form-group">
		    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputRepeatPassword" class="col-sm-2 control-label">Repeat Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" name="inputRepeatPassword" id="inputRepeatPassword" placeholder=" Repeat Password">
		    </div>
		  </div>		  

		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Sign Up</button>
		    </div>
		  </div>
		</form>

		Vous avez déjà un compte? <a href="login.php">se connecter</a><br>
		<a href="home.php">Allez directement à la page d'accueil.</a>

	<?php 
 		$smarty->display("tpl/footer.tpl"); 
 	?>