<?php

$request = new HttpRequest();
$request->setUrl('http://www.museumspool.com/adt_anurak/index.php/Adapter/update_item');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'postman-token' => '8cb9809e-802e-715d-650c-acb7ec375f7e',
  'cache-control' => 'no-cache',
  'content-type' => 'application/x-www-form-urlencoded'
));

$request->setContentType('application/x-www-form-urlencoded');
$request->setPostFields(array(
  'museum_code' => '1',
  'item_code' => 'CA-254'
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}
?>