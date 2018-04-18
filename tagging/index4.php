<!DOCTYPE HTML>
<html>
<head>
	<title>Flickr-Style Photo Tagging With jQuery And ColdFusion</title>
	<style type="text/css">
		
		div.photo-column {
			float: left ; 
			margin-right: 10px ;
		}
		
		div.photo-container {
			border: 1px solid #333333 ;
			margin-bottom: 13px ;
		}
		
	</style>
	<script type="text/javascript" src="./index4/jquery-1.4.1.js"></script>
	<script type="text/javascript" src="./index4/coldfusion.json.js"></script>
	<script type="text/javascript" src="./index4/phototagger.jquery.js"></script>
	<script type="text/javascript">

		$( document ).ready(function() {

		});

		// When the DOM is ready, initialize the scripts.
		jQuery(function( $ ){
			
			// Set up the photo tagger.
			$( "div.photo-container" ).photoTagger({
				namePic: 'james',
				// The API urls.
				loadURL: "./index4/backEnd.php",
				saveURL: "./index4/backEnd.php",
				deleteURL: "",
				// This will allow us to clean the response from
				// a ColdFusion server.
				cleanAJAXResponse: function( apiAction, response ){
					// Check to see if this it the load.
					if (apiAction == "load"){
						// Loop over response array.
						$.each(
							response,
							function( index, tagData ){
								// Translate the ColdFusion keys
								// to lowercase. This will create
								// dupliate keys, but it doesn't
								// matter for our use-case.
								$.each(
									tagData,
									function( key, value ){
										tagData[ key.toLowerCase() ] = value;
									}
								);
							}
						);
					}
						// Return cleaned response.
						return( response );
				}

			});
			
			
			// Hook up the enable create links.
			$( "a.enable-create" ).click(
				function( event ){
					// Prevent relocation.
					event.preventDefault();
					
					// Get the container and enable the tag 
					// creation on it.
					$( this ).prevAll( "div.photo-container" )
						.photoTagger( "enableTagCreation" )
					;
				}
			);
			
			// Hook up the disabled create links.
			$( "a.disable-create" ).click(
				function( event ){
					// Prevent relocation.
					event.preventDefault();
					
					// Get the container and enable the tag 
					// creation on it.
					$( this ).prevAll( "div.photo-container" )
						.photoTagger( "disableTagCreation" )
					;
				}
			);
			
			// Hook up the enable delete links.
			$( "a.enable-delete" ).click(
				function( event ){
					// Prevent relocation.
					event.preventDefault();
					
					// Get the container and enable the tag 
					// deletion on it.
					$( this ).prevAll( "div.photo-container" )
						.photoTagger( "enableTagDeletion" )
					;
				}
			);
			
			// Hook up the disabled delete links.
			$( "a.disable-delete" ).click(
				function( event ){
					// Prevent relocation.
					event.preventDefault();
					
					// Get the container and disabled the tag 
					// deletion on it.
					$( this ).prevAll( "div.photo-container" )
						.photoTagger( "disableTagDeletion" )
					;
				}
			);
		
		});
		
	</script>
</head>
<body>

	<h1>
		Flickr-Style Photo Tagging With jQuery And ColdFusion
	</h1>

	<div class="photo-column">
	
		<div class="photo-container">
			<img 
				id="testIdPic"
				src="./index4/sexy3.jpg" 
				width="520"
				height="347"
				alt="Sexy woman used for demo."
				/>
		</div>
		
		<!-- These will toggle the tag ceation. -->
		<a href="#" class="enable-create">Enable Create</a> 
		&nbsp;|&nbsp;
		<a href="#" class="disable-create">Disable Create</a>
		
		<br />
		<br />
		
		<!-- These will toggle the tag deletiong. -->
		<a href="#" class="enable-delete">Enable Delete</a> 
		&nbsp;|&nbsp;
		<a href="#" class="disable-delete">Disable Delete</a>
	
	</div>

</body>
</html>
