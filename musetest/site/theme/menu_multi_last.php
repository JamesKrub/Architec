
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

<!--    <title>Multi level dropdown menu BS3 - Bootsnipp.com</title>-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
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
	<div class="container">
	<div class="row">
<!--
        <h2>Multi level dropdown menu in Bootstrap 3</h2>
        <hr>
-->
        
        <div class="dropdown">
            <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
                Dropdown <span class="caret"></span>
            </a>
    		<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">

              
                <li class="dropdown-submenu">



                <?php
                  $sql = "SELECT * FROM muse_category where cat1_id = '142'";
									$query=mysqli_query($link,$sql) or die("Can't Query1");
									$num_rows=mysqli_num_rows($query);
									for ($i=0; $i<$num_rows; $i++) {
										$result=mysqli_fetch_array($query);
                   
                                        //$fet_id = $result['fet_id'];
                                        
					   echo " <a tabindex='-1' href='museshowcatall.php'>$result[cat1_name]</a>";
                  ?>                  
                          
                <ul class="dropdown-menu">
                    
                  <li>
                 
                      
                      
<!--                   <a tabindex="-1" href="#">Second level</a></li>-->
                  <li class="dropdown-submenu">
                   <?php
                  $sql3 = "SELECT * FROM muse_category_lv2 where ac1_id = '142'";
									$query3=mysqli_query($link,$sql3) or die("Can't Query1");
									$num_rows3=mysqli_num_rows($query3);
									for ($i=0; $i<$num_rows3; $i++) {
										$result3=mysqli_fetch_array($query3);
                   
                                        $fet_id = $result3['fet_id'];
                                        
					echo " <a href='museshowcatall.php'>$result3[ac2_name]</a>";
                                        
                                        
                                    //}
                   // echo " <a href='museshowcatall.php'>$result3[ac2_name]</a>";                    
                                        
                  ?>  
<!--                    <a href="#">Even More..</a>-->
                     <?php } ?>  
                  </li>
                 
                </ul>

               <?php }
                    
                    
                    ?>    
<!------ปิด level ----> 

                </li>
               
            </ul>
        </div>
   </div>
</div>
	<script type="text/javascript">
	
	</script>
</body>
</html>