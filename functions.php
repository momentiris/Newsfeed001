<?php



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
