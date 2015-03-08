<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html" charset="utf16_unicode_ci"/>
	
	<title> RangirajME </title>
<meta charset="utf-8">
	<!-- Attach our CSS -->
	  	<link rel="stylesheet" href="reveal.css">
		
	<!-- Attach necessary scripts -->
		<script src="http://ajax.googleapis.com/ajax/libs/dojo/1.5/dojo/dojo.xd.js" type="text/javascript"></script>
		<script type="text/javascript" src="dojo.reveal.js"></script>
		<script>
				function openModal() {
				reveal = new ZURB.Reveal({modalId: "myModal"});
				reveal.openModal();
			}
		</script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

		
		


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="styles\stylerang.css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

   
  

</head>

<body>
		
<br><br><br><br><br><br><br><br>
<div class="jumbotron row1">
	<div class="row">
	
							<div class="col-md-4"> </div>
		
		<div class="col-md-4"> 
						
		
			<div >
			<?php 
				require 'connect.php';
				
				$ugd="SELECT ime_univerzitet FROM univerzitet WHERE id_univerzitet=4";
				$result_ugd=mysqli_query($rangiraj,$ugd) ;
				
					$mail="SELECT username FROM korisnici WHERE id_korisnik=1";
					if($mail_result=mysqli_query($rangiraj,$mail)){
						if(mysqli_num_rows($mail_result)){
							$rows=mysqli_fetch_all($mail_result,MYSQL_ASSOC);
							foreach($rows as $row){
								$substr=substr($row['username'],-19);
								if($substr=="students.ugd.edu.mk"){ 
								
								?>
									<button class="btn btn-default btn-block" type="button" name="dd" id="menu1" >Универзитет „Гоце Делчев“</div>
							<?php	}
							}
						}
						
					}
										
					?>
					
				<ul class="dropdown-menu" role="menu" aria-labelledby="menu1" name="first" id="first">
					  
	
				
				
				
				<?php
				require 'connect.php';
				$query="SELECT ime_univerzitet FROM univerzitet";
				if($result=mysqli_query($rangiraj,$query)){
					if(mysqli_num_rows($result)){
						$rows=mysqli_fetch_all($result,MYSQL_ASSOC);
						foreach($rows as $row){ ?>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">  <img src="ugd.png" hspace="25">
						<?php echo $row['ime_univerzitet']; ?>			
						<img src="star.png" align="right">	</a></li>	
						<?php	
						}
					}
					
				}?>
				
				
				</ul>				
			</div>
		</div>
							<div class="col-md-4"> </div>
	</div>	
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  
  
  
  
	
	
	
	

<div class="navigationbar navigationbar1" >
	<nav class="navbar navbar-custom navbar_style1">
   
        <div class="navbar-header"></div>
		<div class="navbar-collapse collapse">
		
		   
<div class="row">

	<ul class="nav nav-justified">
	<div class="col-md-3"> </div>
		   
			<div class="col-md-2">

				<li class="container">
                  <div class="btn-group navbar-btn ">
                    <button class="btn btn-info btn-lg">Fakultet</button>
                    <button data-toggle="dropdown" class="btn btn-info dropdown-toggle btn-lg btn-link "><span class="caret"></span></button>
                    <ul class="dropdown-menu scrolling ">
					
	  
		<?php
		require 'connect.php';
		$query2="SELECT ime_fakultet FROM fakulteti,univerzitet WHERE id_univerzitet=4;";
		if($result2=mysqli_query($rangiraj,$query2)){
			if(mysqli_num_rows($result2)){
				$rows2=mysqli_fetch_all($result2,MYSQL_ASSOC);
				foreach($rows2 as $row2){ ?>
					 <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal">
					 <?php echo $row2['ime_fakultet']; ?>  
					 </a></li>
					
			<?php	}
			}
		}  
			?>
	
	
	  <!--
	<li role="presentation"><class="dropdown-header"> Кампус 2 </li>
		
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal"> Факултет за Природни и технички науки     </a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal"> Факултет за Информатика                    </a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal"> Земјоделски факултет              			</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal"> Машински факултет               			</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal"> Електротехнички факултет       			</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal"> Технолошко-технички факултет   			</a></li>
           
		  <li role="presentation" class="divider"></li>
		
	<li role="presentation"><class="dropdown-header"> Кампус 3 </li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal">  Факултет за Медицински науки			     </a></li>
		  
		  <li role="presentation" class="divider"></li>
	
	<li role="presentation"><class="dropdown-header"> Кампус 4         </li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal">  Економски факултет         				</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal">  Правен факултет            				</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal">  Факултет за Туризам и бизнис логистика 	</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal">  Ликовна Академија          				</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal">  Филолошки факултет        				</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal">  Факултет за Образовни науки            	</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal">  Музичка Академија       		     		</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal">  Филмска Академија  	 </a></li> 
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal">  Филмска Академија  	 </a></li> 
		
		  -->       
					</ul>
			     </div>
                
				</li>
				
			</div>
			
			<div class="col-md-2">
			
				<li class="container">
				
                  <div class="btn-group navbar-btn nav-justified">
                    <button class="btn btn-info btn-lg">Kampus</button>
                    <button data-toggle="dropdown" class="btn btn-info dropdown-toggle btn-lg btn-link"><span class="caret"></span></button>
                    <ul class="dropdown-menu scrolling">
					<li role="presentation"><class="dropdown-header"><div class="paragrafTxT">Odbereto go kampusot koj kje go rangirate</div> </li>
					<li role="presentation" class="divider"></li>
					
						<li><a href="#" data-reveal-id="myModal2"><img src="Sliki\k1.jpg"></a></li>
						<li><a href="#" data-reveal-id="myModal2"><img src="Sliki\k2.jpg"></a></li>
						<li><a href="#" data-reveal-id="myModal2"><img src="Sliki\k3.jpg"></a></li>
						<li class="divider"></li>
                    </ul>
			     </div>
                </li>
			
			</div>
				 
			<div class="col-md-2">
			
				<li class="container">
					<div class="btn-group navbar-btn ">
						<button class="btn btn-info btn-lg "><div class="btntext">Profesor</div></button>
						<button data-toggle="dropdown" class="btn btn-info btn-lg dropdown-toggle btn-link"><span class="caret"></span></button>
						<ul class="dropdown-menu scrolling" >
						
						
						
						<li role="presentation"><class="dropdown-header"><div class="paragrafTxT"> Одберете го професорот</div></li>
						
						<li role="presentation" class="divider"></li> 	
						
					
                  
                
                
		
			
					
				
					
						
                          <form class="navbar-form navbar-left" role="search">
                              <div class="form-group">
                              <input type="text" class="form-control" placeholder="Барај">
                              </div>
                              <button type="submit" class="btn btn-default btn-block submitBtn">Submit</button>
                          </form>
                      	
					
					
                
        
                    
						
						<li role="presentation" class="divider"></li>
						
					<li role="presentation"><class="dropdown-header">Факултет за Природни и технички науки  </li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal3">  Професор  	 </a></li> 
							<li role="presentation" class="divider"></li>
					
					<li role="presentation"><class="dropdown-header"> Факултет за Информатика </li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal3">  Професор  	 </a></li>
							<li role="presentation" class="divider"></li>
			
					<li role="presentation"><class="dropdown-header"> Земјоделски Факултет </li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal3">  Професор  	 </a></li>
							<li role="presentation" class="divider"></li>
							
					<li role="presentation"><class="dropdown-header"> Кабљет Факултет </li>		
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal3">  Професор  	 </a></li>
							<li role="presentation" class="divider"></li>
	
					<li role="presentation"><class="dropdown-header"> Електротехнички Факултет </li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal3">  Професор  	 </a></li>
							<li role="presentation" class="divider"></li>
	
					<li role="presentation"><class="dropdown-header"> Технолошко-технички Факултет </li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal3">  Професор  	 </a></li>
							<li role="presentation" class="divider"></li>
	
					<li role="presentation"><class="dropdown-header"> Факултет за Медицински Науки </li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal3">  Професор  	 </a></li>
							<li role="presentation" class="divider"></li>
         
					<li role="presentation"><class="dropdown-header"> Економски Факултет </li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal3">  Професор  	 </a></li>
							<li role="presentation" class="divider"></li>
         
					<li role="presentation"><class="dropdown-header">Факултет Туризам и бизнис логистика </li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal3">  Професор  	 </a></li>
							<li role="presentation" class="divider"></li>
		
					<li role="presentation"><class="dropdown-header"> Ликовна Академија </li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal3">  Професор  	 </a></li>
							<li role="presentation" class="divider"></li>
	
					<li role="presentation"><class="dropdown-header"> Образовни Науки </li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal3">  Професор  	 </a></li>
							<li role="presentation" class="divider"></li>
					
					<li role="presentation"><class="dropdown-header"> Филолошки Факултет </li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal3">  Професор  	 </a></li>
							<li role="presentation" class="divider"></li>
							
					<li role="presentation"><class="dropdown-header"> Музичка Академија </li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal3">  Професор  	 </a></li>
							<li role="presentation" class="divider"></li>
							
					<li role="presentation"><class="dropdown-header"> Филмска Академија </li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal3">  Професор  	 </a></li>
							<li role="presentation" class="divider"></li>
							
					<li role="presentation"><class="dropdown-header"> Правен Факултет </li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-reveal-id="myModal3">  Професор  	 </a></li>
							<li role="presentation" class="divider"></li>

		
						</ul>
					</div>
                </li>
			
			</div>
            
		</ul>
     <div class="col-md-3"></div>   
	</div>
    </div>
	

	
				
		
		
		
		
		
		
		
		
			
		
	
	
	
		


  </body>
 <script src="js/app.js"></script>
  </html>