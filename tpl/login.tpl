<div class="col-sm-12">
		<h1>Bienvenue sur le site des acupuncteurs</h1>

		<form class="form-horizontal" role="form" method="POST" action="serveur/controllers/userController.php?action=getUser">
		  <div class="form-group">
		    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" required class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" required class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <div class="checkbox">
		        <label>
		          <input type="checkbox" title="rememberMe"> Remember me
		        </label>
		      </div>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Sign in</button>
		    </div>
		  </div>
		</form>

		<a href="serveur/controllers/pathologieController.php">Allez directement à la page d'accueil.</a><br>
		<a href="signup.php">Créer un compte.</a>