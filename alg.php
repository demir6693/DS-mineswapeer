<!DOCTYPE html>
<html>
<head>
<style>

body {
background-image: url("http://touchechicago.com/wp-content/uploads/2013/10/Grey-Background-BLANK.png");
}
.hidden {
	display: none;
}

.button {
    position: relative;
    background-color: #39D0F9;
    border: none;
    font-size: 25px;
    color: #FFFFFF;
    padding: 15px;
    width: 100px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}

.button:after {
    content: "";
    background: #D62424;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px!important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.button:active:after {
    padding: 0;        
    margin: 0;
    opacity: 1;
    transition: 0s
}
table, td, th {
     
}

table {
	position:relative;
	top: 100px;
    left: 495px;
    right: 0px;
    bottom: -191px;
    border-collapse: collapse;
    width: 30%;
}

th {
    height: 50px;
}
.play_button {
	position:relative;
	background-color: #39D0F9;
    border: none;
    font-size: 25px;
    color: #FFFFFF;
    padding: 15px;
    width: 100px;
    text-align: center;
    transition: .5s ease;
    top: 50px;
    left: 855px;
    right: 0px;
    bottom: -191px;
}

h1 {
	position:relative;
	color: white;
	top: -23px;
    left: 1100px;
    right: 0px;
    bottom: -191px;
}
	
</style>
</head>
</html>

<table>
<?php 
    
    echo "<button class=play_button>PLAY</button>";
	
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
	
	for($i=0; $i<9; $i++)
	{	
	
	echo	"<tr>";
		for($j=0; $j<9; $j++)
		{
			$pom = $msw[$i][$j];
			if($msw[$i][$j] == 99)
			{
				echo "<td><button class=button>bomba</button></td>";	
			}
			else 
				echo "<td><button class=button>$pom</button></td>";
		
				
			
			
		}	
	echo	"</tr>";
	
	}
	
	

 
?>
</table>
	
	
	
	
	
	
	
	
	
	
