<?php
// method 1
$list = file_get_contents()
$exist = preg_match() //wehao: add something thats not on the list to see if the code is wrong

  echo ($exist == true ? "true" : "false");
  echo "\n\n"; //wenhao: to make it clearer


// method 2
  exec("cat file_path || grep //what to search", $result, $status);
  // exec("ls", $result, $status);
  echo "result : $result\n";
$glued_array = implode("\n",$result) //wenhao: if you dont want arrays it will become 1 string <[!]> replaces line breaks
  // imlode takes an array and make an string out of it
  //print_r($result);
  //wenhao: explode takes a string and seperates it when it finds <[!]> or a /n
  $array = explode("<[!]>", $glued_array)
  echo "status : $status\n";

  foreach ($results as $result) {
    preg_match_all('/(.*?)\s*<(.*)/',$result, $matches , PREG_SET_ORDER);

    $tags = $matches [0]{1};// captures tags
    $addresses = $matches [0]{2};// captures addresses
    $addresses = explode(" ", trim($addresses));

    echo "tag: $tags\n";

    foreach ($addresses as $address) {
      echo "an url\n";
    }
    print_r($tags);
    echo("\n");
    print_r($addresses);
    echo("\n");
  }


  ?>
