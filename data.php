<?php



declare(strict_types=1);

//variabler och arrayer deklareras här

//nedan följer EN array för allt. Varje Author har unik ID och två separerade posts.


$contentArrays = [

  [
    'title1'   =>  'My very first post...',
    'content1' =>  'Hello, web!',
    'time'     =>  '2017-01-01',
    'author'   =>  ['name' => 'Spiderman', 'id' => 001],
  ],

  [
    'title'    =>  'My very second post!',
    'content'  =>  'When I grow up I want to be a web developer!',
    'time'     =>  '2017-01-03',
    'author'   =>   ['name' => 'Spiderman', 'id' => 001],
  ],

  [
    'title'   =>  'My very first post...',
    'content' =>  'Hello, cave!',
    'time'    =>  '2017-01-02',
    'author'  =>  ['name' => 'Batman', 'id' => 002],
  ],

  [
    'title'   =>  'My very second post!',
    'content' =>  'Fucking scary, those damn bats!',
    'time'    =>  '2017-01-04',
    'author'  =>  ['name' => 'Batman', 'id' => 002],
  ],

  [
    'title'   =>  'My very first post...',
    'content' =>  'That\'s just like, your opinion, man.',
    'time'    =>  '2017-01-05',
    'author'  =>  ['name' => 'The Dude', 'id' => 003],
  ],

  [
    'title'    =>  'My very second post!',
    'content'  =>  'His wife goes out, owes money all over town, and they    pee on MY rug!?!?',
    'time'     =>  '2017-01-07',
    'author'   =>  ['name' => 'The Dude', 'id' => 003],
  ],

  [
    'title'    =>  'My very first post...',
    'content'  =>  'All I know is that I know nothing',
    'time'     =>  '2017-01-11',
    'author'   =>  ['name' => 'Plato', 'id' => 004],
  ],

  [
    'title'   =>  'My very second post!',
    'content' =>  'I like myself, alot!',
    'time'    =>  '2017-02-04',
    'author'  =>  ['name' => 'Plato', 'id' => 004],
  ],

  [
    'title'   =>  'My very first post...',
    'content' =>  'Something, something, Eudaimonia.',
    'time'    =>  '2017-03-05',
    'author'  =>  ['name' => 'Aristotle', 'id' => 005],
  ],

  [
    'title'   =>  'My very second post!',
    'content' =>  'The human being is a social creature, fo sho!',
    'time'    =>  '2017-01-06',
    'author'  =>  ['name' => 'Aristotle', 'id' => 005],
  ],

];


//Function som sorterar datum
function sortByDate ($a, $b) {

  return strtotime ($a['time']) > strtotime ($b ['time']);
}

usort($contentArrays, 'sortByDate');

// var_dump($contentArrays);



//function och loop för att enkelt hämta specifik data

function getData(array $findWhich, string $findValue, int $i)

{
  foreach ($findWhich[$i] as $post => $value) {
//nedan följer fyra rader som tillåter funktionen att även söka igenom vår //author array
    if (is_array($value)) {
    foreach ($value as $authorKey => $authorValue) {
      if (!strcmp($authorKey, $findValue)) {
        return $authorValue;
      }
    }
  }

    elseif (!strcmp($findValue, $post)) {
      return $value;
    }
  }



};
echo getData($contentArrays, 'time', 0) . '<br>';
echo getData($contentArrays, 'time', 1). '<br>';
echo getData($contentArrays, 'time', 2). '<br>';
echo getData($contentArrays, 'time', 3). '<br>';
echo getData($contentArrays, 'time', 4). '<br>';
echo getData($contentArrays, 'time', 5). '<br>';
echo getData($contentArrays, 'time', 6). '<br>';
echo getData($contentArrays, 'time', 7). '<br>';
echo getData($contentArrays, 'time', 8). '<br>';
echo getData($contentArrays, 'time', 9). '<br>';





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
//sorterar efter datum
