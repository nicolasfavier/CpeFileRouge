 <tr>
	<th>{$descPatho}</th>
	<th>{$typePatho}</th>
	<th>{$nomMeridien}</th>
	<th>
		<form class="form-horizontal" role="form" method="POST" action="serveur/controllers/symptomeController.php?action=findPathoSymptome&amp;idp={$idP}">
			<button  type="submit" class="btn btn-info">Info</button>
		</form>
	</th>
</tr>
