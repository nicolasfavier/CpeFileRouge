<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Pathologie : {$descPatho}</h3>
  </div>
  <div class="panel-body">
    <div class="col-sm-4">
    	<div class="well">Type Patho : {$typePatho}</div>
	</div>
    <div class="col-sm-5">
    	<div class="well">Nom Meridien : {$nomMeridien}</div>
    </div>
    <div class="col-sm-3"></div>  
		<form class="form-horizontal" role="form" method="POST" action="serveur/controllers/symptomeController.php?action=findPathoSymptome&amp;idp={$idP}">
			<button  type="submit" class="btn btn-info">Info</button>
		</form>      
  </div>
</div>