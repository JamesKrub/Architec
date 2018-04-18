<html>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <title>IMAGE TAGGING</title>
    <body>
    <center>
        <div id="container" style="width:800px; padding-top:30px">
            <!-- <div id="header" style="background-color:#FFA500;">
                <h1 style="margin-bottom:0;">Tag Your Friends</h1>
            </div> -->

            <div id="content" style="background-color:#EEEEEE; height:450px; width:800px; float:left; padding-top:30px">
                <div style="color:gray">
                    <center>
                        <!-- <div id="pointer_div" class="pointer_div" onclick="myFunction(event)" style="background-image:url('tagging.jpg');width:800px;height:450px;"> -->
                        <div id="pointer_div" class="pointer_div img-responsive"  onclick="myFunction(event)">
                        <img src="pic.jpg" width="600px">
                            <?php
                            $filetxt = 'data/data.txt';
                            if(file_exists($filetxt)) 
                            {
                                $jsondata = file_get_contents($filetxt);

                                $arr_data = json_decode($jsondata, true);
                                if($arr_data != 0){ // Prevent error when it has no data.
                                    $length=sizeof($arr_data);
                                    $i=0;
                                    while ( $i< $length) 
                                    {

                                    ?>  
                                    <div class="store" id="<?php echo $arr_data[$i]['youname'];?>" data-y="<?php echo $arr_data[$i]['x'];?>" data-x="<?php echo $arr_data[$i]['y'];?>" style="top:<?php echo $arr_data[$i]['x'];?>px; left:<?php echo $arr_data[$i]['y'];?>px; position:absolute; width:100px; height:100px; border:3px solid black; color:black;" ><?php echo $arr_data[$i]['youname'];?></div>
                                    <?php 
                                    $i++;
                                    }
                                } 

                            }
                            else echo 'The file '. $filetxt .' not exists';
                        ?>
                        </div>
                    </center>
                </div>
            </div>
            <div id="planetmap">
      </div>
        <div id='form_panel'>
          <div class='row'>
            <form  id ="saveform">
              <div class='label' id='label'>Title</div>
              <div class='field' id='field'>
                <input type='text' id='title' name='title' />
              </div>
              <input type='button' value='Add Tag' id='addTag'/><!-- <input type='button' value='Cancel' onclick='cancel()' id='cancel'/> -->
              </form>
            </div>
        </div>
      <div class = "overshow" id = "overshow" style="color:red;"></div>
        <div id="footer" style="background-color:#ADFF85; clear:both; text-align:center;" >
            <h3>Tagging list: </h3>
        <div id="demo" >
            <?php
              $filetxt = 'data/data.txt';
              if(file_exists($filetxt)) 
              {
                $jsondata = file_get_contents($filetxt);

                $arr_data = json_decode($jsondata, true);
                if($arr_data != 0){ // Prevent error when it has no data.
                    $length=sizeof($arr_data);
                    $i=0;
                    while ( $i< $length) 
                    {

                    ?>  
                    <span class="tags" id="<?php echo $arr_data[$i]['youname'];?>" data-y="<?php echo $arr_data[$i]['x'];?>" data-x="<?php echo $arr_data[$i]['y'];?>" ><?php echo $arr_data[$i]['youname'];?><span class="del" id="<?php echo $arr_data[$i]['youname'];?>" style="color:red">X</span></span>
                    <?php 
                    $i++;
                    }
                } 
              }
              else echo 'The file '. $filetxt .' not exists';
            ?>
        </div>
             </div>
        </div>
    </center>



    <script>
    var x_pos;
    var y_pos;
        function myFunction(e)  // called when click on image to create span and textbox
        {
            $("#title").val("");
            pos_x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("pointer_div").offsetLeft;
            pos_y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("pointer_div").offsetTop;
            x_pos = event.pageX;
            y_pos = event.pageY;
            x_pos = x_pos - 50;
            y_pos = y_pos - 50;
            var element = document.createElement('div');
            element.id = "someID";
            document.body.appendChild(element);
            document.getElementById('someID').style.width='100px';
            document.getElementById('someID').style.height='100px';
            document.getElementById('someID').style.background='transparent';
            document.getElementById('someID').style.border='thick solid #0000FF';
            document.getElementById('someID').style.position = "absolute";
            x = document.getElementById('someID').style.left=x_pos+'px';
            y = document.getElementById('someID').style.top=y_pos+'px';
            form(x_pos,y_pos);
        }
    </script>

    <script>
        var ids;
        var idss;
        var clas;
        $(window).load(function(){
            $("#form_panel").hide();
            $(".store").hide();
            var del_div = '<span class="del" id="del">DEL &nbsp</span>'
            var close_div = '<span class="cls" id="cls"> CLOSE</span>'
            $(".overshow").hide();
            console.log("form panel");


            $('#addTag').on('click',function (e) {  //creates span dynamically,called when clicked on addtag button
                var append_string = '<span class="tags" id="'+$('#title').val()+'" data-y="'+y_pos+'" data-x="'+x_pos+'">'+$('#title').val()+' <span class="del" id="'+$('#title').val()+'" style="color:red">X</span></span>'
                $('#demo').append(append_string);
                var store_div = '<div class="store" id="'+$('#title').val()+'" data-y="'+y_pos+'" data-x="'+x_pos+'" style="top:'+y_pos+'px; left:'+x_pos+'px; position:absolute; width:100px; height:100px; border:3px solid white; color:white;">'+$('#title').val()+'</div>'
                $('#pointer_div').append(store_div);

                $('.store').hide('slow');
                console.log("store_div");
                $("#form_panel").hide('slow');
                $("#someID").hide('slow');
                var text = $('#title').val();
                var data_y = y_pos;
                var data_x = x_pos;
                console.log("ajax is ahead");

                $.ajax({                      // passing data to save in textfile
                    type: "POST", // post or get
                    url: 'save.php',
                    data: 'text='+text+'&x='+data_y+'&y='+data_x,
                    // dataType: "json",
                    success: function(e)
                    { 
                    // alert(e);
                    }
                });
            });

            jQuery(".tags").live('click',function(){ //to show a tagged pose
                ids = $(this).attr('id');
                console.log('here: ' + ids);
                
                idss=ids;
                console.log(ids);
                var x_cord = $(this).attr('data-x');
                var y_cord = $(this).attr('data-y');

                $('#overshow').show('fast'); //.delay(1000).hide('slow');
            });

            jQuery(".tags").live('mouseenter',function(){ //tag name mouseenter
                var idss = $(this).attr('id');
                ids=idss;
                console.log(idss);
                var x_cord = $(this).attr('data-x');
                var y_cord = $(this).attr('data-y');
                    $("#overshow").css({top: y_cord, left: x_cord, width:'100px', height:'100px', position:'absolute',border:'3px solid gray'});
                    $('#overshow').show('slow'); //.delay(1000).hide('slow');

                }); 
                jQuery(".tags").live('mouseleave',function(){
                $('#overshow').hide();
                // $('#overshow').show('slow').delay(1000).hide('slow');
            });

            jQuery(".cls").live('click',function(){ //to close a overshow of tag
                //alert("close");
                $('.overshow').hide();
            });

            jQuery(".del").live('click',function(){ //to delete a tag
                var idd=ids;
                $('.overshow').hide();
                $("#"+idss).remove();
                $("#"+idss).remove();
                $("#"+ids).remove();
                $("#"+ids).remove();
                $('.overshow').hide();

                var data_y = y_pos;
                var data_x = x_pos;

                $.ajax({ // passing data to delete from textfile
                type: "POST",  // post or get
                url: 'save.php',
                data: 'text1='+ids+'&x1='+data_y+'&y1='+data_x,
                // dataType: "json",
                success: function(e)
                { 
                // alert(e);
                }
                });

            });

            jQuery(".pointer_div").live('mouseenter',function(){ //image mouseenter
                console.log("mouseenter on image");
                $('.store').show();

            }); 

            jQuery(".pointer_div").live('mouseleave',function(){
                // console.log("mouseleave");
                $('.store').hide();
                $('.overshow').hide();

            });

         }); // window load

        function over(){
            console.log("demo over");
        }

        function form(x_pos,y_pos){   // to create textbox, call from myFunction()
            jQuery("#someID").show('slow');
            var ele = document.getElementById('form_panel');
            x_pos = x_pos - 25;
            y_pos = y_pos - 80;
            document.body.appendChild(form_panel);
            document.getElementById('form_panel').style.width='180px';
            document.getElementById('form_panel').style.height='70px';
            document.getElementById('form_panel').style.background='#eee';
            document.getElementById('form_panel').style.position = "absolute";
            document.getElementById('form_panel').style.left=x_pos+'px';
            document.getElementById('form_panel').style.top=y_pos+'px';
            //console.log("form is showing in form()");
            jQuery("#form_panel").show('slow');
        }

        function addTag(){
            var text = document.getElementById('title').value; //value of text box 
            console.log(text);
            var demoid = document.getElementById('demo'); //html of #demo
            //console.log(demoid);
            jQuery("#form_panel").hide('slow');
            jQuery("#someID").hide('slow');
        }

        function cancel(){
            $("#form_panel").hide('slow');
            $("#someID").hide('slow');
        }
        

    </script>

    </body>
</html>