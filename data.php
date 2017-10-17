<?php



declare(strict_types=1);

//variabler och arrayer deklareras här

//nedan följer EN array för allt.
$contentArrays = [

[
    'name'     =>  'Spiderman',
    'title1'   =>  'My very first post...',

    'content1' =>  'Hello, web!',

    'time'     =>  '2017-01-01',
    'ID'       =>  001,
  ],

  [
      'name'     =>  'Spiderman',

      'title2'   =>  'My very second post!',

      'content2' =>  'When I grow up I want to be a web developer!',
      'time'     =>  '2017-01-03',
      'ID'       =>  001,
    ],
  [
    'name'     =>  'Batman',
    'title1'   =>  'My very first post...',

    'content1' =>  'Hello, cave!',

    'time'     =>  '2017-01-02',
    'ID'       =>  002,
  ],
  [
    'name'     =>  'Batman',

    'title2'   =>  'My very second post!',

    'content2' =>  'Fucking scary, those damn bats!',
    'time'     =>  '2017-01-04',
    'ID'       =>  002,
  ],


  [
    'name'     =>  'The Dude',
    'title1'   =>  'My very first post...',

    'content1' =>  'That\'s just like, your opinion, man.',

    'time'     =>  '2017-01-05',
    'ID'       =>  003,
  ],

  [
    'name'     =>  'The Dude',

    'title2'   =>  'My very second post!',

    'content2' =>  'His wife goes out, owes money all over town, and they pee on MY rug!?!?',
    'time'     =>  '2017-01-07',
    'ID'       =>  003,
  ],

  [
    'name'     =>  'Plato',
    'title1'   =>  'My very first post...',

    'content1' =>  'All I know is that I know nothing',

    'time'     =>  '2017-01-11',
    'ID'       =>  004,
  ],

  [
    'name'     =>  'Plato',

    'title2'   =>  'My very second post!',

    'content2' =>  'I like myself, alot!',
    'time'     =>  '2017-02-04',
    'ID'       =>  004,
  ],


  [
    'name'     =>  'Aristotle',
    'title1'   =>  'My very first post...',

    'content1' =>  'Something, something, Eudaimonia.',

    'time'     =>  '2017-03-05',
    'ID'       =>  005,
  ],

  [
    'name'     =>  'Aristotle',

    'title2'   =>  'My very second post!',

    'content2' =>  'The human being is a social creature, fo sho!',
    'time'     =>  '2017-01-06',
    'ID'       =>  5,
  ],

];

//Ska här loopa fram min lagrade information, för tillfället lost.



foreach ($contentArrays as $posts) {
    foreach ($posts as $post => $value) {
      if (!strcmp($post, 'ID')&&!strcmp((string)$value, '5')) {
          print_r($posts);
      }
    }
}




// foreach ($contentArrays as $contentArray) {
//     $name = $contentArray['name'];
//     $time = $contentArray['time'];
//
//     echo "Posted by $name on $time.<br>";
// }


    // var_dump($contentArray);




    // echo $contentArray[2]['content2'];
