<?php



declare(strict_types=1);

//variabler och arrayer deklareras här

//nedan följer EN array för allt. Varje Author har unik ID och två separerade posts.


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




  function getData(array $findWhich, string $findValue, int $i)
  {
    foreach ($findValue[$i] as $post => $value) {
      if (!strcmp($findValue, $post)) {
        return $value;
      }
    }



  };
  echo getData($contentArrays, 'name', 0);


  // function getQuotes(int $count): array
  // {
  //     $quotes = [
  //         'All righty then!',
  //         'So... animals CAN sense evil!',
  //         'If I\'m not back in 5 minutes, just wait longer.',
  //         'That was close one ladies and gentlemen, of course in every contest, there must be, a loser.',
  //     ];
  //
  //     return array_splice($quotes, $count);
  // }
  //

  // echo '<br>';
  // echo '<br>';
  // echo '<br>';
  //
  //
  //
  // //Loop som hämtar "This was posted by $name on $time"
  // foreach ($contentArrays as $contentArray) {
  //     $name = $contentArray['name'];
  //     $time = $contentArray['time'];
  //
  //     echo "Posted by $name on $time.<br>";
  // }
  //
  // echo '<br>';
  // echo '<br>';
  // echo '<br>';
  //
  //
  //
  // //Nedan function som sorterar efter datum.
  // function sortFunction (array $a, array $b ) {
  //     return strtotime($a["time"]) - strtotime($b["time"]);
  // }
  // usort($contentArrays, "sortFunction");
  // var_dump($contentArrays);
  //
  //
  // //sorterar efter datum
  // function sortByDate ($a, $b) {
  //
  //   return(int) $a['time'] > (int) $b ['time'];
  // }
  //
  // usort($contentArrays, 'sortByDate');
  //
  //
  // foreach ($contentArrays as $post) {
  //     echo $post['time']. '<br>';
  // }
