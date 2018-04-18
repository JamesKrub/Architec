<?php

$request = new HttpRequest();
$request->setUrl('http://www.museumspool.com/adt_anurak/index.php/Adapter/update_item');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'postman-token' => '12c5b38b-d4b3-4d34-f664-798d1948eece',
  'cache-control' => 'no-cache',
  'content-type' => 'multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW'
));

$request->setBody('------WebKitFormBoundary7MA4YWxkTrZu0gW
Content-Disposition: form-data; name="museum_code"

2
------WebKitFormBoundary7MA4YWxkTrZu0gW
Content-Disposition: form-data; name="item_code"

วกก.22H102/21
------WebKitFormBoundary7MA4YWxkTrZu0gW--');

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}