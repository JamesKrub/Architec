<script type="text/javascript">    
var form = new FormData();
form.append("museum_code", "2");
form.append("item_code", "aaa");

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://www.museumspool.com/adt_anurak/index.php/Adapter/get_link_item",
  "method": "POST",
  "headers": {
    "cache-control": "no-cache",
    "postman-token": "8c8d0e34-9cff-142a-8d89-389fd42341fb"
  },
  "processData": false,
  "contentType": false,
  "mimeType": "multipart/form-data",
  "data": form
}

$.ajax(settings).done(function (response) {
  console.log(response);
});  
</script> 