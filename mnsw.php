<?php
	session_start();
?>


<html>


<head>
<link rel="stylesheet" type="text/css" href="style_mnsw.css"/>
</head>

<body>


<?php
		echo "<h1 class='ukupno_bombi'>Bombe: 10</h1>";
    echo "<form action='#' method='POST' >";
    echo "<input type='submit' class='button' id='play_button' value='Replay' name='restart'/></form>";

		if(isset($_POST["restart"])) {
			session_destroy();
			echo "<meta http-equiv='refresh' content='0'>";
		}


	echo "<h1>Zastavica = P</h1>";
	$brojac = 0;

	while ($brojac != 10)
            {
                $brojac = 0;
                for ($i = 0; $i < 9; $i++)
                {
                    for ($j = 0; $j < 9; $j++)
                    {
                        $msw[$i][$j] = 0;
                    }
                }
                for ($i = 0; $i < 10; $i++)
                {
                    $rnd1 = (rand(0,8));
										$rnd2 = (rand(0,8));
                    $msw[$rnd1][$rnd2] = 99;
                }

                for($i = 0; $i < 9; $i++)
                {
                    for($j = 0; $j < 9; $j++)
                    {
                        $num = 0;
                        if ($msw[$i][$j] != 99)
                        {
                            if ($i == 0 && $j == 0)
                            {
                                if ($msw[$i][$j + 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i + 1][$j] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i + 1][$j + 1] == 99)
                                {
                                    $num++;
                                }
                            }
                            else if ($i == 0 && $j == 8)
                            {
                                if ($msw[$i][$j-1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i + 1][$j - 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i + 1][$j] == 99)
                                {
                                    $num++;
                                }
                            }
                            else if ($i == 8 && $j == 0)
                            {
                                if ($msw[$i - 1][$j] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i - 1][$j + 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i][$j + 1] == 99)
                                {
                                    $num++;
                                }
                            }
                            else if ($i == 8 && $j == 8)
                            {
                                if ($msw[$i][$j - 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i - 1][$j - 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i - 1][$j] == 99)
                                {
                                    $num++;
                                }
                            }
                            else if ($j == 0)
                            {
                                if ($msw[$i - 1][$j] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i - 1][$j + 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i][$j + 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i + 1][$j + 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i + 1][$j] == 99)
                                {
                                    $num++;
                                }
                            }
                            else if ($i == 0)
                            {
                                if ($msw[$i][$j - 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i + 1][$j - 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i + 1][$j] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i][$j + 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i + 1][$j + 1] == 99)
                                {
                                    $num++;
                                }
                            }
                            else if ($i == 8)
                            {
                                if ($msw[$i - 1][$j - 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i - 1][$j] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i - 1][$j + 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i][$j - 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i][$j + 1] == 99)
                                {
                                    $num++;
                                }
                            }
                            else if ($j == 8)
                            {

                                if ($msw[$i - 1][$j - 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i - 1][$j] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i][$j - 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i + 1][$j - 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i + 1][$j] == 99)
                                {
                                    $num++;
                                }
                            }
                            else
                            {
                                if ($msw[$i - 1][$j - 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i - 1][$j] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i - 1][$j + 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i][$j - 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i][$j + 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i + 1][$j - 1] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i + 1][$j] == 99)
                                {
                                    $num++;
                                }
                                if ($msw[$i + 1][$j + 1] == 99)
                                {
                                    $num++;
                                }
                            }
                            $msw[$i][$j] = $num;
                        }
                    }
                }
                for ($i = 0; $i < 9; $i++)
                {
                    for ($j = 0; $j < 9; $j++)
                    {
                        if($msw[$i][$j] == 99)
                        {
                        $brojac++;
                        }
                    }
                }

        }
$nule=0;
$jedinice=499;
$polja=99;
$bombe=999;
  echo "<table>";
	for($i=0; $i<9; $i++)
	{

	echo	"<tr>";
		for($j=0; $j<9; $j++)
		{

			$pom = $msw[$i][$j];
			if($msw[$i][$j] == 99)
			{
				$bombe++;
				echo "<td><input type='submit' name='bomba' class='button' id='$bombe'  onclick='kraj(this.id)'  oncontextmenu='prikazi_bombe($bombe)' value='bomba' readonly/></td>";

			}
			else if($msw[$i][$j] == 0)
			{
				$nule++;
				echo "<td><input type='submit' name='bomba' class='button' id='$nule' onclick='prikazi_0(this.id)' value='$pom' readonly/></td>";
			}
			else
			{
				$polja++;
				echo "<td><input type='submit' name='nijeBomba' class='button' id='$polja' onclick='ukloni($polja, $pom)' oncontextmenu='postavi_zastavu($polja)' value='$pom' readonly></td>";
			}


			}
	echo	"</tr>";

}
echo "</table>";


?>




<script>
												function prikazi_0() {
												for($i=1; $i<=99; $i++)
												{
													document.getElementById($i).style.color = 'blue';
												}
											  }
</script>


<script>
                            for($i=1000; $i<1010; $i++)
														{
															document.getElementById($i).onclick = function kraj() {
															alert('BOMBA !!!');
															window.location.reload();
														  }
														}

</script>

<script>
										function prikazi_bombe($index)
										{
										document.getElementById($index).value = 'P';
										document.getElementById($index).style.color = 'red';
										}
</script>



<script>
												function ukloni($index_polja, $brojevi) {
													document.getElementById($index_polja).value = $brojevi;
													document.getElementById($index_polja).style.color = 'white';
											   }
</script>

<script>
											function postavi_zastavu($index_zastava) {
												document.getElementById($index_zastava).value = 'P';
												document.getElementById($index_zastava).style.color = 'red';
											}
</script>

</body>


</html>
