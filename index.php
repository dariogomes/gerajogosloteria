<?php
echo "Welcome <br />";

$numeros = 6;
$num_ini = 1;
$num_end = 60;
$tt_jogos = 5000;

$jogos = array();
for ($i = 1; $i <= $tt_jogos; $i++)
{
    $jogo = array();
    for ($e = 1; $e <= $numeros; $e++)
    {
      $rand = rand(1, $num_end);

      if (!in_array($rand, $jogo)){
        //$jogo[] = $rand;
        array_push($jogo, $rand);
      } else {
        $e--;
      }
    }

    sort($jogo);
    $jogo_str = implode(", ", $jogo);

    if (!in_array($jogo_str, $jogos)){
      array_push($jogos, $jogo_str);
    }
}

sort($jogos);

$x = 1;

foreach ($jogos as $dado)
{
  echo "Jogo ".$x.": ".$dado."<br />";
  $x++;
}

?>
