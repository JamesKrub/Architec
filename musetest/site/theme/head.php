  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/style2.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

  <!-- Color CSS Styles  -->
   <?php //Edit_M
								include('connect.php');
                                    $sql = "select * from theme where thm_enable = '1' ";
									$query=mysqli_query($link,$sql) or die("Can't Query");
									$num_rows=mysqli_num_rows($query);
									for ($i=0; $i<$num_rows; $i++) {
										$result=mysqli_fetch_array($query);
                                        $thm_file = $result['thm_file'];
												//echo "<p>$result[bg_desc]</p>";		
                                    }
	?> 
<!--<link rel="stylesheet" type="text/css" href="<?php //echo base_url('css/colors/'.$result[thm_file].'.css'); ?>" media="screen" />    -->
<link rel="stylesheet" type="text/css" href="css/colors/<?php echo "$result[thm_file]";?>.css" media="screen" />  

