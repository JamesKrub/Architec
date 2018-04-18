<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My page</title>
 
    <!-- CSS dependencies -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
 
    <p>Content here. <a class="bootbox" href=#>Alert!</a></p>
 
    <!-- JS dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 
    <!-- bootbox code -->
    <script src="js/bootbox.min.js"></script>
    <script>

		bootbox.dialog("I am a custom dialog", [{
    "label" : "Success!",
    "class" : "btn-success",
    "callback": function() {
        Example.show("great success");
    }
}, {
    "label" : "Danger!",
    "class" : "btn-danger",
    "callback": function() {
        Example.show("uh oh, look out!");
    }
}, {
    "label" : "Click ME!",
    "class" : "btn-primary",
    "callback": function() {
        Example.show("Primary button");
    }
}, {
    "label" : "Just a button..."
}]);
    </script>
	
</body>
</html>