

<?php

$request = new HttpRequest();
$request->setUrl('http://www.museumspool.com/adt_anurak/index.php/Adapter/get_link_item');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'postman-token' => '13e4d4be-0a20-1f6a-8548-7c3da4d3b0b6',
  'cache-control' => 'no-cache',
  'content-type' => 'application/x-www-form-urlencoded'
));

$request->setContentType('application/x-www-form-urlencoded');
$request->setPostFields(array(
  'museum_code' => '2',
  'item_code' => 'วกก.22H102/21'
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}

?>