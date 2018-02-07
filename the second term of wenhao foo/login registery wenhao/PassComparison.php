<?php
/* Regular expressions */

$pswFromDatabase = "17a23b"; // Could be anything, 17a23b is used for this example.
$passUser = "my pass";
$re = '/^(\d{1,3})([a-f]{1})([\d a-f]+)$/im';
preg_match_all($re /*What to search*/, $pswFromDatabase /*Where to search*/, $matches /*Stores the result in an array 'matches'*/, PREG_SET_ORDER /*Defines how result is being turned back*/);

$complete = $matches[0][0]; // --> 17a23b
$id = $matches[0][1]; // --> 17
$separator = $matches[0][2]; // --> a
$hash = $matches[0][3]; // --> 23b

function myhashalgo($string /*The password that needs to be hashed*/, $algo_id /*The id to hash with*/)
{
  /*Function to hash the compare password*/
}

$pswHashed = myhashalgo($passUser, $id);
preg_match_all($re, $pswHashed, $matches, PREG_SET_ORDER);
$is_valid = ($hash == $matches[0][3]); // Outputs True or False

// PREG_PATTERN_ORDER Orders results so that $matches[0] is an array of full pattern matches,
// $matches[1] is an array of strings matched by the first parenthesized subpattern, and so on.

/* $matches =
  [0] = ["17a23b",
  [1] =  "17",
  [2] =  "a",
  [3] =  "23b"];

  $matches[0][1]; //id of hashing algorithm.
  $matches[0][2]; //separator.
  $matches[0][3]; //hash.

  Regular expressions: ^ (begin of line), $ (end of the line), ? (match as little as possible), * (0 or more matches),
                       + (1 or more matches), i (case insensitive), m (multiline (necessary for including $ and ^)).
*/
?>
