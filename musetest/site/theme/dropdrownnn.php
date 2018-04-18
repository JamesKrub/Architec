
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Multi level dropdown menu light BS3 - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    .dropdown .dropdown > .dropdown-menu {
	top: 0;
	left: 100%;
}
.dropdown .dropdown:hover > .dropdown-menu {
	display: block;
}
.dropdown .dropdown .caret {
	position: absolute;
	right: 5px;
	top: 50%;
	margin-top: -3px;
	-moz-transform: rotate(-90deg); /* Firefox */
	-ms-transform: rotate(-90deg); /* IE */
	-webkit-transform: rotate(-90deg); /* Safari, Chrome, iOS */
	-o-transform: rotate(-90deg); /* Opera */
	transform: rotate(-90deg);
}
    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
<?php include "connectdb2.php" ; ?>        
	<ul class="nav navbar-nav">
  <li><a href="#">Link 1</a></li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li class="dropdown">
        <?php
                  $sql = "SELECT * FROM muse_category where cat1_id = '142'";
									$query=mysqli_query($link,$sql) or die("Can't Query1");
									$num_rows=mysqli_num_rows($query);
									for ($i=0; $i<$num_rows; $i++) {
										$result=mysqli_fetch_array($query);
                   
                                        //$fet_id = $result['fet_id'];
                                        
					   echo " <a href='museshowcatall.php' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>$result[cat1_name]</a>";
                                    }
                  ?>    
<!--        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sublink 1<span class="caret"></span></a>-->
        <ul class="dropdown-menu">
          <li class="dropdown"> <?php
                  $sql3 = "SELECT * FROM muse_category_lv2 where ac1_id = '142'";
									$query3=mysqli_query($link,$sql3) or die("Can't Query1");
									$num_rows3=mysqli_num_rows($query3);
									for ($i=0; $i<$num_rows3; $i++) {
										$result3=mysqli_fetch_array($query3);
                   
                                        $fet_id = $result3['fet_id'];
                                        
					echo "<a tabindex='-1' href='museshowcatall.php' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>$result3[ac2_name]</a>";
                                        
//                     $sql2 = "SELECT * FROM muse_category_lv3 where ac2_id = '$result3[ac2_id]'";
//									$query2=mysqli_query($link,$sql2) or die("Can't Query1");
//									$num_rows2=mysqli_num_rows($query2);
//									for ($i=0; $i<$num_rows2; $i++) {
//										$result2=mysqli_fetch_array($query2);
//                   
//                                        $fet_id = $result2['fet_id'];
//                                        
//					echo "<li> <a tabindex='-1' href='museshowcatall.php' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>$result2[ac3_name]</a></li>";
//                                    }                   
                                }
                   //echo " <a href='museshowcatall.php'>$result3[ac2_name]</a>";                    
                                        
                  ?>  
            </li>
            
		      <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sublink 2<span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Sublink 1</a></li>
		          <li><a href="#">Sublink 2</a></li>
		          <li><a href="#">Sublink 3</a></li>
		        </ul>
		      </li>
          <li><a href="#">Sublink 3</a></li>
        </ul>
      </li>
      <li><a href="#">Sublink 2</a></li>
      <li><a href="#">Sublink 3</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sublink 4<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Sublink 1</a></li>
          <li><a href="#">Sublink 2</a></li>
          <li><a href="#">Sublink 3</a></li>
        </ul>
      </li>
    </ul>
  </li>
  <li><a href="#">Link 2</a></li>
</ul>
	<script type="text/javascript">
	
	</script>
</body>
</html>