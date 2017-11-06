<?php
	session_start();
?>


<html>


<head>
<link rel="stylesheet" type="text/css" href="style_mnsw.css"/>
</head>

<body>


<?php
    echo "<form action='#' method='POST' >";
    echo "<input type='submit' class='button' id='play_button' value='Replay' name='restart'/></form>";

		if(isset($_POST["restart"])) {
			session_destroy();
			echo "<meta http-equiv='refresh' content='0'>";
		}


	echo "<h1>Time:</h1>";
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
				echo "<td><input type='submit' name='bomba' class='button' id='$bombe'  onclick='kraj(this.id)'  oncontextmenu='prikazi$bombe(this.id)' value='bmb' readonly/></td>";

			}
			else if($msw[$i][$j] == 0)
			{
				$nule++;
				echo "<td><input type='submit' name='bomba' class='button' id='$nule' onclick='ukloni0(this.id)' value='$pom' readonly/></td>";
			}
			else
			{
				$polja++;
				echo "<td><input type='submit' name='nijeBomba' class='button' id='$polja' onclick='ukloni$polja(this.id)' value='$pom' readonly></td>";
			}


			}
	echo	"</tr>";

}
echo "</table>";


?>




<script>
												function ukloni0() {
												for($i=1; $i<=99; $i++)
												{
													document.getElementById($i).style.color = 'white';
												}

											  }
</script>

<script>
                            for($i=1000; $i<1010; $i++)
														{
															document.getElementById($i).onclick = function kraj() {
															alert('kraj');
														  }
														}

</script>

<script>
										function prikazi1000() {

										document.getElementById(1000).style.color = 'white';

										}
</script>

<script>
										function prikazi1001() {


												 document.getElementById(1001).style.color = 'white';

										}
</script>

<script>
										function prikazi1002() {


												 document.getElementById(1002).style.color = 'white';

										}
</script>

<script>
										function prikazi1003() {


												 document.getElementById(1003).style.color = 'white';

										}
</script>

<script>
										function prikazi1004() {


												 document.getElementById(1004).style.color = 'white';

										}
</script>

<script>
										function prikazi1005() {


												 document.getElementById(1005).style.color = 'white';

										}
</script>

<script>
										function prikazi1006() {


												 document.getElementById(1006).style.color = 'white';

										}
</script>

<script>
										function prikazi1007() {


												 document.getElementById(1007).style.color = 'white';

										}
</script>

<script>
										function prikazi1008() {


												 document.getElementById(1008).style.color = 'white';

										}
</script>

<script>
										function prikazi1009() {


												 document.getElementById(1009).style.color = 'white';

										}
</script>

<script>
										function prikazi1010() {


												 document.getElementById(1010).style.color = 'white';

										}
</script>

<script>
												function ukloni100() {

													document.getElementById(100).style.color = 'white';
												}


</script>

<script>
												function ukloni101() {

													document.getElementById(101).style.color = 'white';
												}


</script>

<script>
												function ukloni102() {

													document.getElementById(102).style.color = 'white';
												}


</script>

<script>
												function ukloni103() {

													document.getElementById(103).style.color = 'white';
												}


</script>

<script>
												function ukloni104() {

													document.getElementById(104).style.color = 'white';
												}


</script>

<script>
												function ukloni105() {

													document.getElementById(105).style.color = 'white';
												}


</script>

<script>
												function ukloni106() {

													document.getElementById(106).style.color = 'white';
												}


</script>

<script>
												function ukloni107() {

													document.getElementById(107).style.color = 'white';
												}


</script>

<script>
												function ukloni108() {

													document.getElementById(108).style.color = 'white';
												}


</script>

<script>
												function ukloni109() {

													document.getElementById(109).style.color = 'white';
												}


</script>

<script>
												function ukloni110() {

													document.getElementById(110).style.color = 'white';
												}


</script>

<script>
												function ukloni111() {

													document.getElementById(111).style.color = 'white';
												}


</script>

<script>
												function ukloni112() {

													document.getElementById(112).style.color = 'white';
												}


</script>

<script>
												function ukloni113() {

													document.getElementById(113).style.color = 'white';
												}


</script>

<script>
												function ukloni114() {

													document.getElementById(114).style.color = 'white';
												}


</script>

<script>
												function ukloni115() {

													document.getElementById(115).style.color = 'white';
												}


</script>

<script>
												function ukloni116() {

													document.getElementById(116).style.color = 'white';
												}


</script>


<script>
												function ukloni117() {

													document.getElementById(117).style.color = 'white';
												}


</script>

<script>
												function ukloni118() {

													document.getElementById(118).style.color = 'white';
												}


</script>

<script>
												function ukloni119() {

													document.getElementById(119).style.color = 'white';
												}


</script>

<script>
												function ukloni120() {

													document.getElementById(120).style.color = 'white';
												}


</script>


<script>
												function ukloni121() {

													document.getElementById(121).style.color = 'white';
												}


</script>

<script>
												function ukloni122() {

													document.getElementById(122).style.color = 'white';
												}


</script>

<script>
												function ukloni123() {

													document.getElementById(123).style.color = 'white';
												}


</script>

<script>
												function ukloni124() {

													document.getElementById(124).style.color = 'white';
												}


</script>


<script>
												function ukloni125() {

													document.getElementById(125).style.color = 'white';
												}


</script>


<script>
												function ukloni126() {

													document.getElementById(126).style.color = 'white';
												}


</script>

<script>
												function ukloni127() {

													document.getElementById(127).style.color = 'white';
												}


</script>

<script>
												function ukloni128() {

													document.getElementById(128).style.color = 'white';
												}


</script>

<script>
												function ukloni129() {

													document.getElementById(129).style.color = 'white';
												}


</script>

<script>
												function ukloni130() {

													document.getElementById(130).style.color = 'white';
												}


</script>

<script>
												function ukloni131() {

													document.getElementById(131).style.color = 'white';
												}


</script>

<script>
												function ukloni132() {

													document.getElementById(132).style.color = 'white';
												}


</script>

<script>
												function ukloni133() {

													document.getElementById(133).style.color = 'white';
												}


</script>

<script>
												function ukloni134() {

													document.getElementById(134).style.color = 'white';
												}


</script>

<script>
												function ukloni135() {

													document.getElementById(135).style.color = 'white';
												}


</script>

<script>
												function ukloni136() {

													document.getElementById(136).style.color = 'white';
												}


</script>

<script>
												function ukloni137() {

													document.getElementById(137).style.color = 'white';
												}


</script>


<script>
												function ukloni138() {

													document.getElementById(138).style.color = 'white';
												}


</script>

<script>
												function ukloni139() {

													document.getElementById(139).style.color = 'white';
												}


</script>

<script>
												function ukloni140() {

													document.getElementById(140).style.color = 'white';
												}


</script>

<script>
												function ukloni141() {

													document.getElementById(141).style.color = 'white';
												}


</script>

<script>
												function ukloni142() {

													document.getElementById(142).style.color = 'white';
												}


</script>

<script>
												function ukloni143() {

													document.getElementById(143).style.color = 'white';
												}


</script>

<script>
												function ukloni144() {

													document.getElementById(144).style.color = 'white';
												}


</script>

<script>
												function ukloni145() {

													document.getElementById(145).style.color = 'white';
												}


</script>

<script>
												function ukloni146() {

													document.getElementById(146).style.color = 'white';
												}


</script>

<script>
												function ukloni147() {

													document.getElementById(147).style.color = 'white';
												}


</script>

<script>
												function ukloni148() {

													document.getElementById(148).style.color = 'white';
												}


</script>

<script>
												function ukloni149() {

													document.getElementById(149).style.color = 'white';
												}


</script>

<script>
												function ukloni150() {

													document.getElementById(150).style.color = 'white';
												}


</script>

<script>
												function ukloni151() {

													document.getElementById(151).style.color = 'white';
												}


</script>

<script>
												function ukloni152() {

													document.getElementById(152).style.color = 'white';
												}


</script>

<script>
												function ukloni153() {

													document.getElementById(153).style.color = 'white';
												}


</script>

<script>
												function ukloni154() {

													document.getElementById(154).style.color = 'white';
												}


</script>

<script>
												function ukloni155() {

													document.getElementById(155).style.color = 'white';
												}


</script>

<script>
												function ukloni156() {

													document.getElementById(156).style.color = 'white';
												}


</script>

<script>
												function ukloni157() {

													document.getElementById(157).style.color = 'white';
												}


</script>

<script>
												function ukloni158() {

													document.getElementById(158).style.color = 'white';
												}


</script>

<script>
												function ukloni159() {

													document.getElementById(159).style.color = 'white';
												}


</script>

<script>
												function ukloni160() {

													document.getElementById(160).style.color = 'white';
												}


</script>

</body>
</html>
