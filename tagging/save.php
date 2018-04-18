<?php
//refer : http://coursesweb.net/php-mysql/add-form-data-text-file-json-format_t
$filetxt = 'data/data.txt';

// check if all form data are submited, else output error message
if(isset($_POST['text'])) {
  // if form fields are empty, outputs message, else, gets their data
  if(empty($_POST['text'])) {
    echo 'All fields are required';
  }
  else {
    // gets and adds form data into an array
    $formdata = array(
      'youname'=> $_POST['text'],
      'x'=> $_POST['x'],
      'y'=> $_POST['y'],
    );

    // path and name of the file
    $filetxt = 'data/data.txt';

    $arr_data = array();        // to store all form data

    // check if the file exists
    if(file_exists($filetxt)) {
      // gets json-data from file
      $jsondata = file_get_contents($filetxt);

      // converts json string into array
      $arr_data = json_decode($jsondata, true);
      echo $arr_data;
    }

    // appends the array with new form data
    $arr_data[] = $formdata;

    // encodes the array into a string in JSON format (JSON_PRETTY_PRINT - uses whitespace in json-string, for human readable)
    $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);

    // saves the json string in "formdata.txt" (in "dirdata" folder)
    // outputs error message if data cannot be saved
    if(file_put_contents('data/data.txt', $jsondata)) echo 'Data successfully saved';
    else echo 'Unable to save data in "data/data.txt"';
  }
}
else {

  $filetxt = 'data/data.txt';

    $arr_data = array();        // to store all form data
    echo $text1 = $_POST['text1'];

    // check if the file exists
    if(file_exists($filetxt)) {
      // gets json-data from file
      $jsondata = file_get_contents($filetxt);

      // converts json string into array
      $arr_data = json_decode($jsondata, true);

      foreach ( $arr_data as $k => $abc ) {
        // print_r($abc['youname']);
        if ( $abc['youname'] != $text1 ) {

            $xyz[]=$abc;
        }

      }

      print_r($xyz);

      $jsondata = json_encode($xyz, JSON_PRETTY_PRINT);
      if(file_put_contents('data/data.txt', $jsondata)) echo 'Data successfully saved';
      else echo 'Unable to save data in "data/data.txt"';
    }
}
?>