
	<?php 
		include("utils.php");
		$smarty = getSmarty();
		$smarty->assign( "header","Home");
		
		$smarty->display("tpl/header.tpl");

		$smarty->assign(array(
	        "homeactive" => 'class="active"',
	        "bibliographieactive" => "",
	        "devlogsactive" => "",
        	"emailUser" => 
        ));

        $smarty->display("tpl/topNavBar.tpl");
        $smarty->display("tpl/nav.tpl");
	?>
		<div class="col-sm-9">
			<h1>Hello</h1>
			<table class="table table-bordered table-hover">
		      <thead>
		        <tr>
		          <th>test Name</th>		        
		          <th>First Name</th>
		          <th>Last Name</th>
		          <th>Username</th>
		          <th>#</th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr class="info">
		          <td><input class="form-control" ></td>
		          <td><input class="form-control"></td>
		          <td><input class="form-control"></td>
		          <td><input class="form-control"></td>
		          <td><button type="button" class="btn btn-info">search</button></td>		          
		        </tr>
		        <tr>
		          <td>Mark</td>		        
		          <td>Mark</td>
		          <td>Otto</td>
		          <td>@TwBootstrap</td>
		          <td>1</td>
		        </tr>
		        <tr>
          		  <td>Mark</td>		        
		          <td>Mark</td>
		          <td>Otto</td>
		          <td>@TwBootstrap</td>
		          <td>2</td>		          
		        </tr>
		        <tr>
          		  <td>Mark</td>		        
		          <td>Mark</td>
		          <td>Otto</td>
		          <td>@TwBootstrap</td>
		          <td>3</td>
		        </tr>
		      </tbody>
		    </table>
	    </div><!-- ./col-sm-9 -->
 	<?php 
 		$smarty->display("tpl/footer.tpl"); 
 	?>