<?php

declare(strict_types=1);





//Below is a multimensional array of content for a blog. Each standard index for
//the arrays "0,1,2,3,4,5,6,7,8,9" are associated with a corresponding second-layer array
//with associated 2nd layer keys and values.

//There is also a separate, third layer array inside for the Name and unique ID for each author.

$contentArrays = [

  [
    'title'     =>  'My net is my temple, FFS!',
    'content'   =>  '   Hello, web! Also, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'time'      =>  '2017-01-01',
    'likes'     =>   99,
    'author'    => ['id' => 101, 'name'  => 'DefinatelynotSpiderman']
  ],

  [
    'title'     =>  'I don\'t want to do this anymore..',
    'content'   =>  '    When I grow up I want to be a web developer! Also, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'time'      =>  '2017-01-03',
    'likes'     =>   2,
      'author'  => ['id' => 101, 'name'  => 'DefinatelynotSpiderman']
  ],

  [
    'title'     =>  'My very first post...',
    'content'   =>  '   Hello, cave! Also, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'time'      =>  '2017-01-02',
    'likes'     =>   6,
    'author'    =>    ['id' => 102, 'name'  => 'Batman']
  ],

  [
    'title'     =>  'My very second post!',
    'content'   =>  '   Fucking scary, those damn bats! Also, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'time'      =>  '2017-01-04',
    'likes'     =>   65,
    'author'    => ['id' => 102, 'name'  => 'Batman']
  ],

  [
    'title'     =>  'My very first post...',
    'content'   =>  '   That\'s just like, your opinion, man. Also, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'time'      =>  '2017-01-05',
    'likes'     =>   34,
    'author'    => ['id' => 103, 'name'  => 'The Dude']
  ],

  [
    'title'     =>  'You BUM!',
    'content'   =>  'His wife goes out, owes money all over town, and they pee on MY rug!?!? I\'m tired of this fucking Lebowski guy!',
    'time'      =>  '2017-01-07',
    'likes'     =>   19,
    'author'    => ['id' => 103, 'name'  => 'The Dude']
  ],

  [
    'title'     =>  'Not my very first post...',
    'content'   =>  'All I know is that I know nothing. Also, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'time'      =>  '2017-01-11',
    'likes'     =>   0,
    'author'    =>   ['id' => 104, 'name'  => 'Plato']
  ],

  [
    'title'     =>  'Definately not my very second post!',
    'content'   =>  'I like myself, alot! Also, lorem something, something.',
    'time'      =>  '2017-02-04',
    'likes'     =>   71,
    'author'    =>   ['id' => 104, 'name'  => 'Plato']
  ],

  [
    'title'     =>  'I really really really want to say something!',
    'content'   =>  '   Something, something, Eudaimonia. Something, something, something, something, something,
    something, something. Ok I am done now.',
    'time'      =>  '2017-03-05',
    'likes'     =>   2,
    'author'    =>   ['id' => 105, 'name'  => 'Aristotle']
  ],

  [
    'title'     =>  'I am back for another round.',
    'content'   =>  '   The human being is a social creature, fo sho! Also, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur .',
    'time'      =>  '2017-01-06',
    'likes'     =>   0,
    'author'    =>   ['id' => 105, 'name'  => 'Aristotle']
  ],

];


$_POST;
