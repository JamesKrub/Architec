<?php
$uri = $_SERVER['REQUEST_URI']; // $uri == example.com/index
 $exploded_uri = explode('/', $uri); //$exploded_uri ==     array('example.com','index')
$domain_name = $exploded_uri[1];
?>

<script langquage='javascript'>
window.location="https://www.anurak.in.th/"+'<?php echo $domain_name ;?>'+"/site/theme/index.php";
</script>
