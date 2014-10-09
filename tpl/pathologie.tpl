<div class="panel panel-primary">
  <div class="panel-heading">
    <h2 class="panel-title"><strong>Pathologie :</strong> {$descPatho}</h2>
  </div>
  <div class="panel-body">
    <div class="col-sm-5">
    	<strong>Type Patho : </strong> {$typePatho}
	</div>
    <div class="col-sm-5">
    	<strong>Nom Meridien :</strong> {$nomMeridien}
    </div>
    <div class="col-sm-2"></div>  
		<form class="form-horizontal" role="form" method="POST" action="serveur/controllers/symptomeController.php?action=findPathoSymptome&amp;idp={$idP}">
			<button  type="submit" class="btn btn-info">Info</button>
		</form>      
  </div>
</div>