

<form class="form-inline" role="form" method="POST" action="serveur/controllers/pathologieController.php?action=search" id="SearchForm">
  <div class="form-group">
		<input type="text" class="form-control" name="searchpatho" id="searchpatho" placeholder="search Pathologie">  
  </div>
  <div class="form-group">
		<input type="text" class="form-control" name="searchtype" id="searchtype" placeholder="search Type patho">  
  </div>
  <div class="form-group">
		<input type="text" class="form-control" name="searchmeridien" id="searchmeridien" placeholder="search Méridien"> 
  </div>  
  <button type="submit" class="btn btn-default">Search</button>
</form>