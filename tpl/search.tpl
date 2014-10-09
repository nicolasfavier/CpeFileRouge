

<form class="form-inline" role="form" method="POST" action="serveur/controllers/pathologieController.php?action=search" id="SearchForm">
  <div class="form-group">
  		<label class="sr-only" for="searchpatho">searchpatho</label>
		<input type="text" class="form-control" name="searchpatho" id="searchpatho" placeholder="search Pathologie">  
  </div>
  <div class="form-group">
  	  	<label class="sr-only" for="searchtype">searchtype</label>
		<input type="text" class="form-control" name="searchtype" id="searchtype" placeholder="search Type patho">  
  </div>
  <div class="form-group">
  	  	<label class="sr-only" for="searchmeridien">searchmeridien</label>
		<input type="text" class="form-control" name="searchmeridien" id="searchmeridien" placeholder="search Méridien"> 
  </div>  
  <button type="submit" class="btn btn-success">Search</button>
</form>