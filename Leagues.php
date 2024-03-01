<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>

<?php
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con) {
  die("error".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Leagues</title>

    <link rel="icon" type="image/x-icon" href="main_style/images/fav2.png" height="16px" width="16px">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel = "stylesheet" href="main_style/css/style.css">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!--chatbot-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!--icons-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--upper icons-->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'> 
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">



    <script>
function show(shown, hidden) {
  document.getElementById(shown).style.display='block';
  document.getElementById(hidden).style.display='none';
  return false;
}
</script>
<style>
    p a{
        display: inline;
        color: black;
    }
    table a{
        display: inline;
        color: black;
    }
    tr:nth-child(even) {
  background-color: #f2f2f2
}

th, td {
  text-align: center;
  padding: 16px;
}

th:first-child, td:first-child {
  text-align: left;
}

    </style>

</head>
<body>

<?php require '_nav.php' ?>
<br>

    <p class="leagues_content">
  <div id="Page1">
        <div class="rul" style="text-align: center;">
        Global Football Rankings
      </div><p style="text-align: center; font-size: 20px; font-weight: 100;">    
      <a href="#" onclick="return show('Page2','Page1');"> Clubs </a>|<b style="color: hsl(12, 98%, 52%);"> Leagues</b> |
    <a href="#" onclick="return show('Page3','Page1');"> International </a>
</p><br><br>
   <table style= "border-collapse: collapse;border-spacing: 0;width: 80%;border: 1px solid #ddd;margin-left: 10%;">
  

<tbody><tr>
    <th>League</th>
    <th>Average SPI</th> 
    <th>Stdev</th>
    <th>Best Team</th>
    <th>Worst Team</th>
 </tr>


  <tr>


<td class="custom-align-1">1. <a href="" target="_self">Premier League</a> 


 <span title="England"> 🇬🇧</span>  


</td>

<td class="custom-align-2">71.96</td>
<td class="custom-align-2">10.4</td>
<td class="custom-align-1"><a href="">Manchester City</a>: 92.0</td>
<td class="custom-align-1"><a href="">Nottingham Forest</a>: 56.1</td>

</tr>

  <tr>


<td class="custom-align-1">2. <a href="" target="_self">Bundesliga</a> 


 <span title="Germany"> 🇩🇪</span>  


</td>

<td class="custom-align-2">68.43</td>
<td class="custom-align-2">8.9</td>
<td class="custom-align-1"><a href="">Bayern Munich</a>: 87.7</td>
<td class="custom-align-1"><a href="">Hertha Berlin</a>: 53.9</td>

</tr>

  <tr>


<td class="custom-align-1">3. <a href="" target="_self">LaLiga</a> 


 <span title="Spain"> 🇪🇸</span>  


</td>

<td class="custom-align-2">67.71</td>
<td class="custom-align-2">9.0</td>
<td class="custom-align-1"><a href="">Barcelona</a>: 86.4</td>
<td class="custom-align-1"><a href="">Real Valladolid</a>: 53.9</td>

</tr>

  <tr>


<td class="custom-align-1">4. <a href="" target="_self">Serie A</a> 


 <span title="Italy"> 🇮🇹</span>  


</td>

<td class="custom-align-2">62.90</td>
<td class="custom-align-2">11.4</td>
<td class="custom-align-1"><a href="">Napoli</a>: 83.2</td>
<td class="custom-align-1"><a href="">Sampdoria</a>: 41.3</td>

</tr>

  <tr>


<td class="custom-align-1">5. <a href="" target="_self">Ligue 1</a> 


 <span title="France"> 🇫🇷</span>  


</td>

<td class="custom-align-2">61.30</td>
<td class="custom-align-2">12.5</td>
<td class="custom-align-1"><a href="">Paris Saint-Germain</a>: 79.1</td>
<td class="custom-align-1"><a href="">Troyes</a>: 35.6</td>

</tr>

  <tr>


<td class="custom-align-1">6. <a href="" target="_self">Eredivisie</a> 


 <span title="Netherlands"> 🇳🇱</span>  


</td>

<td class="custom-align-2">52.60</td>
<td class="custom-align-2">15.2</td>
<td class="custom-align-1"><a href="">Ajax</a>: 77.4</td>
<td class="custom-align-1"><a href="">Cambuur Leeuwarden</a>: 33.2</td>

</tr>

  <tr>


<td class="custom-align-1">7. <a href="" target="_self">Brasileiro</a> 


 <span title="Brazil"> 🇧🇷</span>  


</td>

<td class="custom-align-2">52.36</td>
<td class="custom-align-2">8.0</td>
<td class="custom-align-1"><a href="">Palmeiras</a>: 69.0</td>
<td class="custom-align-1"><a href="">Coritiba</a>: 39.3</td>

</tr>

  <tr>


<td class="custom-align-1">8. <a href="" target="_self">Primeira Liga</a> 


 <span title="Portugal"> 🇵🇹</span>  


</td>

<td class="custom-align-2">52.27</td>
<td class="custom-align-2">12.7</td>
<td class="custom-align-1"><a href="">Benfica</a>: 80.0</td>
<td class="custom-align-1"><a href="">Pacos Ferreira</a>: 37.5</td>

</tr>

  <tr>


<td class="custom-align-1">9. <a href="" target="_self">Liga MX</a> 


 <span title="Mexico"> 🇲🇽</span>  


</td>

<td class="custom-align-2">47.14</td>
<td class="custom-align-2">9.0</td>
<td class="custom-align-1"><a href="">Monterrey</a>: 63.7</td>
<td class="custom-align-1"><a href="">Mazatlán FC</a>: 33.9</td>

</tr>

  <tr>


<td class="custom-align-1">10. <a href="" target="_self">Premier League</a> 


 <span title="Russia"> 🇷🇺</span>  


</td>

<td class="custom-align-2">44.53</td>
<td class="custom-align-2">13.2</td>
<td class="custom-align-1"><a href="">Zenit St Petersburg</a>: 74.4</td>
<td class="custom-align-1"><a href="">Torpedo Moskow</a>: 21.0</td>

</tr>

  <tr>


<td class="custom-align-1">11. <a href="" target="_self">Championship</a> 


 <span title="England"> 🇬🇧</span>  


</td>

<td class="custom-align-2">43.80</td>
<td class="custom-align-2">8.8</td>
<td class="custom-align-1"><a href="">Burnley</a>: 62.9</td>
<td class="custom-align-1"><a href="">Reading</a>: 29.9</td>

</tr>

  <tr>


<td class="custom-align-1">12. <a href="" target="_self">Super Lig</a> 


 <span title="Turkey"> 🇹🇷</span>  


</td>

<td class="custom-align-2">43.47</td>
<td class="custom-align-2">14.8</td>
<td class="custom-align-1"><a href="">Besiktas</a>: 68.1</td>
<td class="custom-align-1"><a href="">Hatayspor</a>: 13.0</td>

</tr>

  <tr>


<td class="custom-align-1">13. <a href="" target="_self">First Division A</a> 


 <span title="Belgium"> 🇧🇪</span>  


</td>

<td class="custom-align-2">43.46</td>
<td class="custom-align-2">14.1</td>
<td class="custom-align-1"><a href="">KAA Gent</a>: 64.1</td>
<td class="custom-align-1"><a href="">RFC Seraing</a>: 20.1</td>

</tr>

  <tr>


<td class="custom-align-1">14. <a href="" target="_self">Bundesliga</a> 


 <span title="Austria"> 🇦🇹</span>  


</td>

<td class="custom-align-2">43.08</td>
<td class="custom-align-2">13.5</td>
<td class="custom-align-1"><a href="">FC Salzburg</a>: 72.9</td>
<td class="custom-align-1"><a href="">SV Ried</a>: 25.4</td>

</tr>

  <tr>


<td class="custom-align-1">15. <a href="" target="_self">Superliga</a> 


 <span title="Denmark"> 🇩🇰</span>  


</td>

<td class="custom-align-2">41.05</td>
<td class="custom-align-2">9.9</td>
<td class="custom-align-1"><a href="">FC Copenhagen</a>: 58.0</td>
<td class="custom-align-1"><a href="">AC Horsens</a>: 22.9</td>

</tr>

  <tr>


<td class="custom-align-1">16. <a href="" target="_self">MLS</a> 


 <span title="USA"> 🇺🇸</span>  


</td>

<td class="custom-align-2">40.86</td>
<td class="custom-align-2">5.7</td>
<td class="custom-align-1"><a href="">Philadelphia Union</a>: 53.8</td>
<td class="custom-align-1"><a href="">Inter Miami CF</a>: 30.3</td>

</tr>

  <tr>


<td class="custom-align-1">17. <a href="" target="_self">Premiership</a> 


 <span title="Scotland"> 🏴󠁧󠁢󠁳󠁣󠁴󠁿</span>  


</td>

<td class="custom-align-2">40.10</td>
<td class="custom-align-2">16.2</td>
<td class="custom-align-1"><a href="">Celtic</a>: 74.7</td>
<td class="custom-align-1"><a href="">Dundee Utd</a>: 24.7</td>

</tr>

  <tr>


<td class="custom-align-1">18. <a href="" target="_self">Super League</a> 


 <span title="Switzerland"> 🇨🇭</span>  


</td>

<td class="custom-align-2">38.83</td>
<td class="custom-align-2">11.3</td>
<td class="custom-align-1"><a href="">Young Boys</a>: 64.9</td>
<td class="custom-align-1"><a href="">FC Sion</a>: 21.6</td>

</tr>

  <tr>


<td class="custom-align-1">19. <a href="" target="_self">Primera Divison</a> 


 <span title="Argentina"> 🇦🇷</span>  


</td>

<td class="custom-align-2">38.57</td>
<td class="custom-align-2">7.0</td>
<td class="custom-align-1"><a href="">River Plate</a>: 58.9</td>
<td class="custom-align-1"><a href="">Arsenal Sarandi</a>: 26.7</td>

</tr>

  <tr>


<td class="custom-align-1">20. <a href="" target="_self">J1 League</a> 


 <span title="Japan"> 🇯🇵</span>  


</td>

<td class="custom-align-2">35.08</td>
<td class="custom-align-2">9.7</td>
<td class="custom-align-1"><a href="">Yokohama F. Marinos</a>: 51.7</td>
<td class="custom-align-1"><a href="">Yokohama FC</a>: 17.6</td>

</tr>

  <tr>


<td class="custom-align-1">21. <a href="" target="_self">Eliteserien</a> 


 <span title="Norway"> 🇳🇴</span>  


</td>

<td class="custom-align-2">33.62</td>
<td class="custom-align-2">11.7</td>
<td class="custom-align-1"><a href="">Bodo/Glimt</a>: 63.0</td>
<td class="custom-align-1"><a href="">Hamarkamaratene</a>: 17.2</td>

</tr>

  <tr>


<td class="custom-align-1">22. <a href="" target="_self">Ligue 2</a> 


 <span title="France"> 🇫🇷</span>  


</td>

<td class="custom-align-2">33.48</td>
<td class="custom-align-2">8.1</td>
<td class="custom-align-1"><a href="">Metz</a>: 49.9</td>
<td class="custom-align-1"><a href="">Niort</a>: 19.0</td>

</tr>

  <tr>


<td class="custom-align-1">23. <a href="" target="_self">LaLiga 2</a> 


 <span title="Spain"> 🇪🇸</span>  


</td>

<td class="custom-align-2">33.38</td>
<td class="custom-align-2">6.0</td>
<td class="custom-align-1"><a href="">Levante</a>: 42.9</td>
<td class="custom-align-1"><a href="">Lugo</a>: 20.8</td>

</tr>

  <tr>


<td class="custom-align-1">24. <a href="" target="_self">Serie B</a> 


 <span title="Italy"> 🇮🇹</span>  


</td>

<td class="custom-align-2">33.13</td>
<td class="custom-align-2">8.4</td>
<td class="custom-align-1"><a href="">Frosinone</a>: 49.8</td>
<td class="custom-align-1"><a href="">Cosenza</a>: 20.7</td>

</tr>

  <tr>


<td class="custom-align-1">25. <a href="" target="_self">Super League</a> 


 <span title="Greece"> 🇬🇷</span>  


</td>

<td class="custom-align-2">32.87</td>
<td class="custom-align-2">16.5</td>
<td class="custom-align-1"><a href="">Olympiacos</a>: 62.2</td>
<td class="custom-align-1"><a href="">Lamia</a>: 15.3</td>

</tr>

  <tr>


<td class="custom-align-1">26. <a href="" target="_self">2. Bundesliga</a> 


 <span title="Germany"> 🇩🇪</span>  


</td>

<td class="custom-align-2">31.98</td>
<td class="custom-align-2">7.3</td>
<td class="custom-align-1"><a href="">FC St. Pauli</a>: 43.8</td>
<td class="custom-align-1"><a href="">SV Sandhausen</a>: 18.5</td>

</tr>

  <tr>


<td class="custom-align-1">27. <a href="" target="_self">Allsvenskan</a> 


 <span title="Sweden"> 🇸🇪</span>  


</td>

<td class="custom-align-2">28.12</td>
<td class="custom-align-2">11.7</td>
<td class="custom-align-1"><a href="">Malmo FF</a>: 49.3</td>
<td class="custom-align-1"><a href="">Varbergs BoIS FC</a>: 11.5</td>

</tr>

  <tr>


<td class="custom-align-1">28. <a href="" target="_self">League One</a> 


 <span title="England"> 🇬🇧</span>  


</td>

<td class="custom-align-2">23.62</td>
<td class="custom-align-2">10.2</td>
<td class="custom-align-1"><a href="">Ipswich Town</a>: 52.9</td>
<td class="custom-align-1"><a href="">Forest Green Rovers</a>: 5.9</td>

</tr>

  <tr>


<td class="custom-align-1">29. <a href="" target="_self">A-League</a> 


 <span title="Australia"> 🇦🇺</span>  


</td>

<td class="custom-align-2">20.67</td>
<td class="custom-align-2">6.8</td>
<td class="custom-align-1"><a href="">Melbourne City</a>: 33.7</td>
<td class="custom-align-1"><a href="">Macarthur FC</a>: 11.7</td>

</tr>

  <tr>


<td class="custom-align-1">30. <a href="" target="_self">USL</a> 


 <span title="USA"> 🇺🇸</span>  


</td>

<td class="custom-align-2">16.86</td>
<td class="custom-align-2">5.7</td>
<td class="custom-align-1"><a href="">San Antonio FC</a>: 26.5</td>
<td class="custom-align-1"><a href="">Loudoun United FC</a>: 7.9</td>

</tr>

  <tr>


<td class="custom-align-1">31. <a href="" target="_self">Premier Division</a> 


 <span title="South Africa"> 🇿🇦</span>  


</td>

<td class="custom-align-2">16.11</td>
<td class="custom-align-2">7.9</td>
<td class="custom-align-1"><a href="">Mamelodi Sundowns</a>: 40.0</td>
<td class="custom-align-1"><a href="">Chippa United</a>: 8.1</td>

</tr>

  <tr>


<td class="custom-align-1">32. <a href="" target="_self">CSL</a> 


 <span title="China"> 🇨🇳</span>  


</td>

<td class="custom-align-2">13.45</td>
<td class="custom-align-2">6.9</td>
<td class="custom-align-1"><a href="">Guangzhou Evergrande</a>: 28.2</td>
<td class="custom-align-1"><a href="">Guizhou Renhe</a>: 4.9</td>

</tr>

  <tr>


<td class="custom-align-1">33. <a href="" target="_self">League Two</a> 


 <span title="England"> 🇬🇧</span>  


</td>

<td class="custom-align-2">10.86</td>
<td class="custom-align-2">3.7</td>
<td class="custom-align-1"><a href="">Salford City</a>: 18.5</td>
<td class="custom-align-1"><a href="">Crawley Town</a>: 5.8</td>

</tr>


</tbody></table>
  </div>
    
  <div id="Page2" style="display:none; text-align: center;">
  <div class="rul" style="text-align: center;">
        Global Football Rankings
      </div>
  This is a list of the all the club teams that are currently ranked in the world, ranked by their SPI.
  <p style="text-align: center; font-size: 20px; font-weight: 100;"> 
  <b style="color: hsl(12, 98%, 52%);"> Clubs </b> |
    <a href="#" onclick="return show('Page1','Page2');"> Leagues </a>|
    <a href="#" onclick="return show('Page3','Page2');"> International </a>

    <table style= "border-collapse: collapse;border-spacing: 0;width: 80%;border: 1px solid #ddd;margin-left: 10%;"><tr>
    <th>Team</th>
    <th>SPI</th>
	
	
		<th>League</th>
	

	    <th>Off SPI</th>
	    <th>Def SPI</th>

	
 </tr>


	
	    <tr>
	


<td>1. <a href="">Manchester City</a></td>
<td style="padding-right:5px;padding-left:5px">92.0</td>


	
	<td class="custom-align-1"><a href="" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">2.8</td>
	<td class="custom-align-2">0.3</td>


</tr>

	
	    <tr>
	


<td>2. <a href="">Bayern Munich</a></td>
<td style="padding-right:5px;padding-left:5px">87.7</td>


	
	<td class="custom-align-1"><a href="" target="_self">Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">3.0</td>
	<td class="custom-align-2">0.7</td>


</tr>

	
	    <tr>
	


<td>3. <a href="">Barcelona</a></td>
<td style="padding-right:5px;padding-left:5px">86.4</td>


	
	<td class="custom-align-1"><a href="" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">2.5</td>
	<td class="custom-align-2">0.4</td>


</tr>

	
	    <tr>
	


<td>4. <a href="">Real Madrid</a></td>
<td style="padding-right:5px;padding-left:5px">84.4</td>


	
	<td class="custom-align-1"><a href="" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">2.6</td>
	<td class="custom-align-2">0.6</td>


</tr>

	
	    <tr>
	


<td>5. <a href="">Liverpool</a></td>
<td style="padding-right:5px;padding-left:5px">83.9</td>


	
	<td class="custom-align-1"><a href="" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">2.6</td>
	<td class="custom-align-2">0.7</td>


</tr>

	
	    <tr>
	


<td>6. <a href="">Arsenal</a></td>
<td style="padding-right:5px;padding-left:5px">83.9</td>


	
	<td class="custom-align-1"><a href="" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">2.5</td>
	<td class="custom-align-2">0.6</td>


</tr>

	
	    <tr>
	


<td>7. <a href="">Newcastle</a></td>
<td style="padding-right:5px;padding-left:5px">83.7</td>


	
	<td class="custom-align-1"><a href="" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">2.4</td>
	<td class="custom-align-2">0.5</td>


</tr>

	
	    <tr>
	


<td>8. <a href="">Napoli</a></td>
<td style="padding-right:5px;padding-left:5px">83.2</td>


	
	<td class="custom-align-1"><a href="" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">2.3</td>
	<td class="custom-align-2">0.5</td>


</tr>

	
	    <tr>
	


<td>9. <a href="">Borussia Dortmund</a></td>
<td style="padding-right:5px;padding-left:5px">82.9</td>


	
	<td class="custom-align-1"><a href="" target="_self">Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">2.8</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>10. <a href="">Brighton and Hove Albion</a></td>
<td style="padding-right:5px;padding-left:5px">80.9</td>


	
	<td class="custom-align-1"><a href="" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">2.5</td>
	<td class="custom-align-2">0.7</td>


</tr>

	
	    <tr>
	


<td>11. <a href="">RB Leipzig</a></td>
<td style="padding-right:5px;padding-left:5px">80.4</td>


	
	<td class="custom-align-1"><a href="" target="_self">Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">2.4</td>
	<td class="custom-align-2">0.7</td>


</tr>

	
	    <tr>
	


<td>12. <a href="">Benfica</a></td>
<td style="padding-right:5px;padding-left:5px">80.0</td>


	
	<td class="custom-align-1"><a href="" target="_self">Primeira Liga</a>  <span title="Portugal"> 🇵🇹</span>   </td>


	<td class="custom-align-2">2.4</td>
	<td class="custom-align-2">0.7</td>


</tr>

	
	    <tr>
	


<td>13. <a href="">Aston Villa</a></td>
<td style="padding-right:5px;padding-left:5px">79.3</td>


	
	<td class="custom-align-1"><a href="" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">2.0</td>
	<td class="custom-align-2">0.5</td>


</tr>

	
	    <tr>
	


<td>14. <a href="">Atletico Madrid</a></td>
<td style="padding-right:5px;padding-left:5px">79.3</td>


	
	<td class="custom-align-1"><a href="" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">2.3</td>
	<td class="custom-align-2">0.7</td>


</tr>

	
	    <tr>
	


<td>15. <a href="">Paris Saint-Germain</a></td>
<td style="padding-right:5px;padding-left:5px">79.1</td>


	
	<td class="custom-align-1"><a href="" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">2.6</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>16. <a href="">Manchester United</a></td>
<td style="padding-right:5px;padding-left:5px">79.1</td>


	
	<td class="custom-align-1"><a href="" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">2.3</td>
	<td class="custom-align-2">0.7</td>


</tr>

	
	    <tr>
	


<td>17. <a href="">Internazionale</a></td>
<td style="padding-right:5px;padding-left:5px">78.4</td>


	
	<td class="custom-align-1"><a href="" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">2.3</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>18. <a href="">Ajax</a></td>
<td style="padding-right:5px;padding-left:5px">77.4</td>


	
	<td class="custom-align-1"><a href="" target="_self">Eredivisie</a>  <span title="Netherlands"> 🇳🇱</span>   </td>


	<td class="custom-align-2">2.7</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>19. <a href="">Lille</a></td>
<td style="padding-right:5px;padding-left:5px">77.2</td>


	
	<td class="custom-align-1"><a href="" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">2.1</td>
	<td class="custom-align-2">0.6</td>


</tr>

	
	    <tr>
	


<td>20. <a href="">Brentford</a></td>
<td style="padding-right:5px;padding-left:5px">77.1</td>


	
	<td class="custom-align-1"><a href="" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">2.1</td>
	<td class="custom-align-2">0.7</td>


</tr>

	
	    <tr>
	


<td>21. <a href="">Real Sociedad</a></td>
<td style="padding-right:5px;padding-left:5px">77.1</td>


	
	<td class="custom-align-1"><a href="" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.9</td>
	<td class="custom-align-2">0.5</td>


</tr>

	
	    <tr>
	


<td>22. <a href="">Sporting CP</a></td>
<td style="padding-right:5px;padding-left:5px">77.0</td>


	
	<td class="custom-align-1"><a href="" target="_self">Primeira Liga</a>  <span title="Portugal"> 🇵🇹</span>   </td>


	<td class="custom-align-2">2.1</td>
	<td class="custom-align-2">0.7</td>


</tr>

	
	    <tr>
	


<td>23. <a href="">FC Porto</a></td>
<td style="padding-right:5px;padding-left:5px">76.9</td>


	
	<td class="custom-align-1"><a href="" target="_self">Primeira Liga</a>  <span title="Portugal"> 🇵🇹</span>   </td>


	<td class="custom-align-2">2.2</td>
	<td class="custom-align-2">0.7</td>


</tr>

	
	    <tr>
	


<td>24. <a href="">Chelsea</a></td>
<td style="padding-right:5px;padding-left:5px">75.8</td>


	
	<td class="custom-align-1"><a href="" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">2.0</td>
	<td class="custom-align-2">0.7</td>


</tr>

	
	    <tr>
	


<td>25. <a href="">Feyenoord</a></td>
<td style="padding-right:5px;padding-left:5px">75.2</td>


	
	<td class="custom-align-1"><a href="" target="_self">Eredivisie</a>  <span title="Netherlands"> 🇳🇱</span>   </td>


	<td class="custom-align-2">2.3</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>26. <a href="">Lyon</a></td>
<td style="padding-right:5px;padding-left:5px">75.2</td>


	
	<td class="custom-align-1"><a href="" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">2.3</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>27. <a href="">Stade Rennes</a></td>
<td style="padding-right:5px;padding-left:5px">75.1</td>


	
	<td class="custom-align-1"><a href="" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">2.0</td>
	<td class="custom-align-2">0.7</td>


</tr>

	
	    <tr>
	


<td>28. <a href="">Bayer Leverkusen</a></td>
<td style="padding-right:5px;padding-left:5px">74.9</td>


	
	<td class="custom-align-1"><a href="" target="_self">Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">2.0</td>
	<td class="custom-align-2">0.7</td>


</tr>

	
	    <tr>
	


<td>29. <a href="">Athletic Bilbao</a></td>
<td style="padding-right:5px;padding-left:5px">74.8</td>


	
	<td class="custom-align-1"><a href="" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">0.6</td>


</tr>

	
	    <tr>
	


<td>30. <a href="">Celtic</a></td>
<td style="padding-right:5px;padding-left:5px">74.7</td>


	
	<td class="custom-align-1"><a href="" target="_self">Premiership</a>  <span title="Scotland"> 🏴󠁧󠁢󠁳󠁣󠁴󠁿</span>   </td>


	<td class="custom-align-2">2.5</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>31. <a href="/team/Zenit%20St%20Petersburg">Zenit St Petersburg</a></td>
<td style="padding-right:5px;padding-left:5px">74.4</td>


	
	<td class="custom-align-1"><a href="/info2/RussianPremierLiga" target="_self">Premier League</a>  <span title="Russia"> 🇷🇺</span>   </td>


	<td class="custom-align-2">2.0</td>
	<td class="custom-align-2">0.7</td>


</tr>

	
	    <tr>
	


<td>32. <a href="/team/Fiorentina">Fiorentina</a></td>
<td style="padding-right:5px;padding-left:5px">74.3</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieA" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">2.1</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>33. <a href="/team/FC%20Twente">FC Twente</a></td>
<td style="padding-right:5px;padding-left:5px">74.2</td>


	
	<td class="custom-align-1"><a href="/info2/DutchEredivisie" target="_self">Eredivisie</a>  <span title="Netherlands"> 🇳🇱</span>   </td>


	<td class="custom-align-2">2.2</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>34. <a href="/team/Marseille">Marseille</a></td>
<td style="padding-right:5px;padding-left:5px">74.0</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue1" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">2.0</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>35. <a href="/team/PSV">PSV</a></td>
<td style="padding-right:5px;padding-left:5px">73.5</td>


	
	<td class="custom-align-1"><a href="/info2/DutchEredivisie" target="_self">Eredivisie</a>  <span title="Netherlands"> 🇳🇱</span>   </td>


	<td class="custom-align-2">2.4</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>36. <a href="/team/Crystal%20Palace">Crystal Palace</a></td>
<td style="padding-right:5px;padding-left:5px">73.5</td>


	
	<td class="custom-align-1"><a href="/info2/BarclaysPremierLeague" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">0.6</td>


</tr>

	
	    <tr>
	


<td>37. <a href="/team/Villarreal">Villarreal</a></td>
<td style="padding-right:5px;padding-left:5px">73.3</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishPrimeraDivision" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">2.1</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>38. <a href="/team/Lens">Lens</a></td>
<td style="padding-right:5px;padding-left:5px">73.3</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue1" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">2.0</td>
	<td class="custom-align-2">0.7</td>


</tr>

	
	    <tr>
	


<td>39. <a href="/team/AC%20Milan">AC Milan</a></td>
<td style="padding-right:5px;padding-left:5px">73.3</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieA" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">2.0</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>40. <a href="/team/AS%20Roma">AS Roma</a></td>
<td style="padding-right:5px;padding-left:5px">73.0</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieA" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">0.6</td>


</tr>

	
	    <tr>
	


<td>41. <a href="/team/FC%20Salzburg">FC Salzburg</a></td>
<td style="padding-right:5px;padding-left:5px">72.9</td>


	
	<td class="custom-align-1"><a href="/info2/AustrianT-MobileBundesliga" target="_self">Bundesliga</a>  <span title="Austria"> 🇦🇹</span>   </td>


	<td class="custom-align-2">2.1</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>42. <a href="/team/FC%20Cologne">FC Cologne</a></td>
<td style="padding-right:5px;padding-left:5px">72.6</td>


	
	<td class="custom-align-1"><a href="/info2/GermanBundesliga" target="_self">Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">2.0</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>43. <a href="/team/Tottenham%20Hotspur">Tottenham Hotspur</a></td>
<td style="padding-right:5px;padding-left:5px">72.1</td>


	
	<td class="custom-align-1"><a href="/info2/BarclaysPremierLeague" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">2.2</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>44. <a href="/team/Rangers">Rangers</a></td>
<td style="padding-right:5px;padding-left:5px">72.0</td>


	
	<td class="custom-align-1"><a href="/info2/ScottishPremiership" target="_self">Premiership</a>  <span title="Scotland"> 🏴󠁧󠁢󠁳󠁣󠁴󠁿</span>   </td>


	<td class="custom-align-2">2.2</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>45. <a href="/team/Eintracht%20Frankfurt">Eintracht Frankfurt</a></td>
<td style="padding-right:5px;padding-left:5px">71.6</td>


	
	<td class="custom-align-1"><a href="/info2/GermanBundesliga" target="_self">Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">2.1</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>46. <a href="/team/West%20Ham%20United">West Ham United</a></td>
<td style="padding-right:5px;padding-left:5px">71.1</td>


	
	<td class="custom-align-1"><a href="/info2/BarclaysPremierLeague" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.9</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>47. <a href="/team/Atalanta">Atalanta</a></td>
<td style="padding-right:5px;padding-left:5px">71.1</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieA" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">2.1</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>48. <a href="/team/VfL%20Wolfsburg">VfL Wolfsburg</a></td>
<td style="padding-right:5px;padding-left:5px">70.9</td>


	
	<td class="custom-align-1"><a href="/info2/GermanBundesliga" target="_self">Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">2.1</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>49. <a href="/team/Juventus">Juventus</a></td>
<td style="padding-right:5px;padding-left:5px">70.4</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieA" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.9</td>
	<td class="custom-align-2">0.8</td>


</tr><tr><td colspan="5"><span class="ezoic-autoinsert-ad ezoic-under_first_paragraph"></span><span style="clear:both; display:block" id="ez-clearholder-medrectangle-3"></span><span class="ezoic-ad ezoic-at-0 medrectangle-3 medrectangle-3320 adtester-container adtester-container-320 ezoic-ad-adaptive" data-ez-name="globalfootballrankings_com-medrectangle-3"><span class="ezoic-ad medrectangle-3 medrectangle-3-multi-320 adtester-container adtester-container-320" data-ez-name="globalfootballrankings_com-medrectangle-3" style="display: none !important;"><span id="div-gpt-ad-globalfootballrankings_com-medrectangle-3-0" ezaw="290" ezah="250" style="position: relative; z-index: 0; padding: 0px; min-height: 250px; min-width: 290px;" class="ezoic-ad ezfound" data-google-query-id="CI_Q_JvW5v8CFSYe1QodYt0O2g"><div id="google_ads_iframe_/1254144,22899493397/globalfootballrankings_com-medrectangle-3_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/1254144,22899493397/globalfootballrankings_com-medrectangle-3_0" name="google_ads_iframe_/1254144,22899493397/globalfootballrankings_com-medrectangle-3_0" title="3rd party ad content" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom;" role="region" aria-label="Advertisement" tabindex="0" data-google-container-id="7" data-load-complete="true" width="250" height="250" frameborder="0"></iframe></div></span></span><span class="ezoic-ad medrectangle-3 medrectangle-3-multi-320 adtester-container adtester-container-320" data-ez-name="globalfootballrankings_com-medrectangle-3" style="display: none !important;"><span id="div-gpt-ad-globalfootballrankings_com-medrectangle-3-0_1" ezaw="290" ezah="250" style="position: relative; z-index: 0; padding: 0px; min-height: 250px; min-width: 290px;" class="ezoic-ad ezfound" data-google-query-id="CNXy_JvW5v8CFRk1aAodLUQBlg"><div id="google_ads_iframe_/1254144,22899493397/globalfootballrankings_com-medrectangle-3_1__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/1254144,22899493397/globalfootballrankings_com-medrectangle-3_1" name="google_ads_iframe_/1254144,22899493397/globalfootballrankings_com-medrectangle-3_1" title="3rd party ad content" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom;" role="region" aria-label="Advertisement" tabindex="0" data-google-container-id="8" data-load-complete="true" width="250" height="250" frameborder="0"></iframe></div></span></span><style> .medrectangle-3-multi-320{border:none !important;display:block !important;float:none !important;line-height:0px;margin-bottom:15px !important;margin-left:auto !important;margin-right:auto !important;margin-top:15px !important;max-width:100% !important;min-height:250px;min-width:250px;padding:0;text-align:center !important;width:100%;}</style></span></td></tr>

	
	    <tr>
	


<td>50. <a href="/team/Torino">Torino</a></td>
<td style="padding-right:5px;padding-left:5px">70.3</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieA" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">0.7</td>


</tr>

	
	    <tr>
	


<td>51. <a href="/team/Sevilla%20FC">Sevilla FC</a></td>
<td style="padding-right:5px;padding-left:5px">69.8</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishPrimeraDivision" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>52. <a href="/team/Mainz">Mainz</a></td>
<td style="padding-right:5px;padding-left:5px">69.3</td>


	
	<td class="custom-align-1"><a href="/info2/GermanBundesliga" target="_self">Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">2.1</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>53. <a href="/team/Palmeiras">Palmeiras</a></td>
<td style="padding-right:5px;padding-left:5px">69.0</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>54. <a href="/team/Valencia">Valencia</a></td>
<td style="padding-right:5px;padding-left:5px">68.7</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishPrimeraDivision" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>55. <a href="/team/Lazio">Lazio</a></td>
<td style="padding-right:5px;padding-left:5px">68.6</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieA" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>56. <a href="/team/Fulham">Fulham</a></td>
<td style="padding-right:5px;padding-left:5px">68.2</td>


	
	<td class="custom-align-1"><a href="/info2/BarclaysPremierLeague" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.9</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>57. <a href="/team/Besiktas">Besiktas</a></td>
<td style="padding-right:5px;padding-left:5px">68.1</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">2.1</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>58. <a href="/team/Celta%20Vigo">Celta Vigo</a></td>
<td style="padding-right:5px;padding-left:5px">68.1</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishPrimeraDivision" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>59. <a href="/team/Nice">Nice</a></td>
<td style="padding-right:5px;padding-left:5px">67.9</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue1" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>60. <a href="/team/VfB%20Stuttgart">VfB Stuttgart</a></td>
<td style="padding-right:5px;padding-left:5px">67.7</td>


	
	<td class="custom-align-1"><a href="/info2/GermanBundesliga" target="_self">Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">2.0</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>61. <a href="/team/Borussia%20Monchengladbach">Borussia Monchengladbach</a></td>
<td style="padding-right:5px;padding-left:5px">67.6</td>


	
	<td class="custom-align-1"><a href="/info2/GermanBundesliga" target="_self">Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">2.1</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>62. <a href="/team/Galatasaray">Galatasaray</a></td>
<td style="padding-right:5px;padding-left:5px">67.5</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">2.0</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>63. <a href="/team/AZ">AZ</a></td>
<td style="padding-right:5px;padding-left:5px">67.2</td>


	
	<td class="custom-align-1"><a href="/info2/DutchEredivisie" target="_self">Eredivisie</a>  <span title="Netherlands"> 🇳🇱</span>   </td>


	<td class="custom-align-2">1.9</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>64. <a href="/team/Girona%20FC">Girona FC</a></td>
<td style="padding-right:5px;padding-left:5px">67.1</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishPrimeraDivision" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.9</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>65. <a href="/team/Real%20Betis">Real Betis</a></td>
<td style="padding-right:5px;padding-left:5px">66.9</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishPrimeraDivision" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>66. <a href="/team/SC%20Freiburg">SC Freiburg</a></td>
<td style="padding-right:5px;padding-left:5px">66.4</td>


	
	<td class="custom-align-1"><a href="/info2/GermanBundesliga" target="_self">Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.9</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>67. <a href="/team/Flamengo">Flamengo</a></td>
<td style="padding-right:5px;padding-left:5px">66.3</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.9</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>68. <a href="/team/Strasbourg">Strasbourg</a></td>
<td style="padding-right:5px;padding-left:5px">66.2</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue1" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>69. <a href="/team/1.%20FC%20Union%20Berlin">1. FC Union Berlin</a></td>
<td style="padding-right:5px;padding-left:5px">66.0</td>


	
	<td class="custom-align-1"><a href="/info2/GermanBundesliga" target="_self">Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>70. <a href="/team/Osasuna">Osasuna</a></td>
<td style="padding-right:5px;padding-left:5px">65.4</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishPrimeraDivision" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>71. <a href="/team/Young%20Boys">Young Boys</a></td>
<td style="padding-right:5px;padding-left:5px">64.9</td>


	
	<td class="custom-align-1"><a href="/info2/SwissRaiffeisenSuperLeague" target="_self">Super League</a>  <span title="Switzerland"> 🇨🇭</span>   </td>


	<td class="custom-align-2">2.1</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>72. <a href="/team/Getafe">Getafe</a></td>
<td style="padding-right:5px;padding-left:5px">64.6</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishPrimeraDivision" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">0.7</td>


</tr>

	
	    <tr>
	


<td>73. <a href="/team/Atletico%20Mineiro">Atletico Mineiro</a></td>
<td style="padding-right:5px;padding-left:5px">64.6</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>74. <a href="/team/AS%20Monaco">AS Monaco</a></td>
<td style="padding-right:5px;padding-left:5px">64.4</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue1" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">2.0</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>75. <a href="/team/Leicester%20City">Leicester City</a></td>
<td style="padding-right:5px;padding-left:5px">64.4</td>


	
	<td class="custom-align-1"><a href="/info2/BarclaysPremierLeague" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.9</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>76. <a href="/team/KAA%20Gent">KAA Gent</a></td>
<td style="padding-right:5px;padding-left:5px">64.1</td>


	
	<td class="custom-align-1"><a href="/info2/BelgianJupilerLeague" target="_self">First Division A</a>  <span title="Belgium"> 🇧🇪</span>   </td>


	<td class="custom-align-2">1.9</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>77. <a href="/team/Reims">Reims</a></td>
<td style="padding-right:5px;padding-left:5px">63.9</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue1" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>78. <a href="/team/Bologna">Bologna</a></td>
<td style="padding-right:5px;padding-left:5px">63.8</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieA" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>79. <a href="/team/Werder%20Bremen">Werder Bremen</a></td>
<td style="padding-right:5px;padding-left:5px">63.7</td>


	
	<td class="custom-align-1"><a href="/info2/GermanBundesliga" target="_self">Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.9</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>80. <a href="/team/Fenerbahce">Fenerbahce</a></td>
<td style="padding-right:5px;padding-left:5px">63.7</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">2.0</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>81. <a href="/team/Monterrey">Monterrey</a></td>
<td style="padding-right:5px;padding-left:5px">63.7</td>


	
	<td class="custom-align-1"><a href="/info2/MexicanPrimeraDivisionTorneoClausura" target="_self">Liga MX</a>  <span title="Mexico"> 🇲🇽</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>82. <a href="/team/Everton">Everton</a></td>
<td style="padding-right:5px;padding-left:5px">63.6</td>


	
	<td class="custom-align-1"><a href="/info2/BarclaysPremierLeague" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>83. <a href="/team/TSG%20Hoffenheim">TSG Hoffenheim</a></td>
<td style="padding-right:5px;padding-left:5px">63.3</td>


	
	<td class="custom-align-1"><a href="/info2/GermanBundesliga" target="_self">Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">2.0</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>84. <a href="/team/Sassuolo">Sassuolo</a></td>
<td style="padding-right:5px;padding-left:5px">63.1</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieA" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.9</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>85. <a href="/team/Braga">Braga</a></td>
<td style="padding-right:5px;padding-left:5px">63.0</td>


	
	<td class="custom-align-1"><a href="/info2/PortugueseLiga" target="_self">Primeira Liga</a>  <span title="Portugal"> 🇵🇹</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>86. <a href="/team/Bodo/Glimt">Bodo/Glimt</a></td>
<td style="padding-right:5px;padding-left:5px">63.0</td>


	
	<td class="custom-align-1"><a href="/info2/NorwegianTippeligaen" target="_self">Eliteserien</a>  <span title="Norway"> 🇳🇴</span>   </td>


	<td class="custom-align-2">2.2</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>87. <a href="/team/Burnley">Burnley</a></td>
<td style="padding-right:5px;padding-left:5px">62.9</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">0.8</td>


</tr>

	
	    <tr>
	


<td>88. <a href="/team/Rayo%20Vallecano">Rayo Vallecano</a></td>
<td style="padding-right:5px;padding-left:5px">62.6</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishPrimeraDivision" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>89. <a href="/team/Olympiacos">Olympiacos</a></td>
<td style="padding-right:5px;padding-left:5px">62.2</td>


	
	<td class="custom-align-1"><a href="/info2/GreekSuperLeague" target="_self">Super League</a>  <span title="Greece"> 🇬🇷</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>90. <a href="/team/Genk">Genk</a></td>
<td style="padding-right:5px;padding-left:5px">61.8</td>


	
	<td class="custom-align-1"><a href="/info2/BelgianJupilerLeague" target="_self">First Division A</a>  <span title="Belgium"> 🇧🇪</span>   </td>


	<td class="custom-align-2">2.1</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>91. <a href="/team/Clermont%20Foot">Clermont Foot</a></td>
<td style="padding-right:5px;padding-left:5px">61.4</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue1" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>92. <a href="/team/AEK%20Athens">AEK Athens</a></td>
<td style="padding-right:5px;padding-left:5px">61.2</td>


	
	<td class="custom-align-1"><a href="/info2/GreekSuperLeague" target="_self">Super League</a>  <span title="Greece"> 🇬🇷</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>93. <a href="/team/Club%20Brugge">Club Brugge</a></td>
<td style="padding-right:5px;padding-left:5px">61.2</td>


	
	<td class="custom-align-1"><a href="/info2/BelgianJupilerLeague" target="_self">First Division A</a>  <span title="Belgium"> 🇧🇪</span>   </td>


	<td class="custom-align-2">1.9</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>94. <a href="/team/Tigres%20UANL">Tigres UANL</a></td>
<td style="padding-right:5px;padding-left:5px">60.9</td>


	
	<td class="custom-align-1"><a href="/info2/MexicanPrimeraDivisionTorneoClausura" target="_self">Liga MX</a>  <span title="Mexico"> 🇲🇽</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>95. <a href="/team/Club%20América">Club América</a></td>
<td style="padding-right:5px;padding-left:5px">60.6</td>


	
	<td class="custom-align-1"><a href="/info2/MexicanPrimeraDivisionTorneoClausura" target="_self">Liga MX</a>  <span title="Mexico"> 🇲🇽</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>96. <a href="/team/Toulouse">Toulouse</a></td>
<td style="padding-right:5px;padding-left:5px">60.0</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue1" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>97. <a href="/team/Udinese">Udinese</a></td>
<td style="padding-right:5px;padding-left:5px">59.9</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieA" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>98. <a href="/team/Lecce">Lecce</a></td>
<td style="padding-right:5px;padding-left:5px">59.7</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieA" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">0.9</td>


</tr>	
	    <tr>
	


<td>99. <a href="/team/Mallorca">Mallorca</a></td>
<td style="padding-right:5px;padding-left:5px">59.7</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishPrimeraDivision" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>100. <a href="/team/Antwerp">Antwerp</a></td>
<td style="padding-right:5px;padding-left:5px">59.6</td>


	
	<td class="custom-align-1"><a href="/info2/BelgianJupilerLeague" target="_self">First Division A</a>  <span title="Belgium"> 🇧🇪</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>101. <a href="/team/AFC%20Bournemouth">AFC Bournemouth</a></td>
<td style="padding-right:5px;padding-left:5px">59.6</td>


	
	<td class="custom-align-1"><a href="/info2/BarclaysPremierLeague" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>102. <a href="/team/Schalke%2004">Schalke 04</a></td>
<td style="padding-right:5px;padding-left:5px">59.5</td>


	
	<td class="custom-align-1"><a href="/info2/GermanBundesliga" target="_self">Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>103. <a href="/team/CSKA%20Moscow">CSKA Moscow</a></td>
<td style="padding-right:5px;padding-left:5px">59.4</td>


	
	<td class="custom-align-1"><a href="/info2/RussianPremierLiga" target="_self">Premier League</a>  <span title="Russia"> 🇷🇺</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>104. <a href="/team/Wolverhampton">Wolverhampton</a></td>
<td style="padding-right:5px;padding-left:5px">59.1</td>


	
	<td class="custom-align-1"><a href="/info2/BarclaysPremierLeague" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>105. <a href="/team/Leeds%20United">Leeds United</a></td>
<td style="padding-right:5px;padding-left:5px">59.0</td>


	
	<td class="custom-align-1"><a href="/info2/BarclaysPremierLeague" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>106. <a href="/team/SK%20Sturm%20Graz">SK Sturm Graz</a></td>
<td style="padding-right:5px;padding-left:5px">59.0</td>


	
	<td class="custom-align-1"><a href="/info2/AustrianT-MobileBundesliga" target="_self">Bundesliga</a>  <span title="Austria"> 🇦🇹</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>107. <a href="/team/River%20Plate">River Plate</a></td>
<td style="padding-right:5px;padding-left:5px">58.9</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>108. <a href="/team/Espanyol">Espanyol</a></td>
<td style="padding-right:5px;padding-left:5px">58.8</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishPrimeraDivision" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.9</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>109. <a href="/team/Monza">Monza</a></td>
<td style="padding-right:5px;padding-left:5px">58.8</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieA" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>110. <a href="/team/Vitesse">Vitesse</a></td>
<td style="padding-right:5px;padding-left:5px">58.8</td>


	
	<td class="custom-align-1"><a href="/info2/DutchEredivisie" target="_self">Eredivisie</a>  <span title="Netherlands"> 🇳🇱</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>111. <a href="/team/São%20Paulo">São Paulo</a></td>
<td style="padding-right:5px;padding-left:5px">58.7</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>112. <a href="/team/Montpellier">Montpellier</a></td>
<td style="padding-right:5px;padding-left:5px">58.6</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue1" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>113. <a href="/team/Cadiz">Cadiz</a></td>
<td style="padding-right:5px;padding-left:5px">58.3</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishPrimeraDivision" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>114. <a href="/team/Adana%20Demirspor">Adana Demirspor</a></td>
<td style="padding-right:5px;padding-left:5px">58.2</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">1.9</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>115. <a href="/team/FC%20Copenhagen">FC Copenhagen</a></td>
<td style="padding-right:5px;padding-left:5px">58.0</td>


	
	<td class="custom-align-1"><a href="/info2/DanishSAS-Ligaen" target="_self">Superliga</a>  <span title="Denmark"> 🇩🇰</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>116. <a href="/team/Union%20Saint%20Gilloise">Union Saint Gilloise</a></td>
<td style="padding-right:5px;padding-left:5px">58.0</td>


	
	<td class="custom-align-1"><a href="/info2/BelgianJupilerLeague" target="_self">First Division A</a>  <span title="Belgium"> 🇧🇪</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>117. <a href="/team/Botafogo">Botafogo</a></td>
<td style="padding-right:5px;padding-left:5px">58.0</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>118. <a href="/team/FC%20Utrecht">FC Utrecht</a></td>
<td style="padding-right:5px;padding-left:5px">57.7</td>


	
	<td class="custom-align-1"><a href="/info2/DutchEredivisie" target="_self">Eredivisie</a>  <span title="Netherlands"> 🇳🇱</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>119. <a href="/team/Elche">Elche</a></td>
<td style="padding-right:5px;padding-left:5px">57.5</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishPrimeraDivision" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>120. <a href="/team/Almeria">Almeria</a></td>
<td style="padding-right:5px;padding-left:5px">57.4</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishPrimeraDivision" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>121. <a href="/team/FC%20Augsburg">FC Augsburg</a></td>
<td style="padding-right:5px;padding-left:5px">57.2</td>


	
	<td class="custom-align-1"><a href="/info2/GermanBundesliga" target="_self">Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>122. <a href="/team/Southampton">Southampton</a></td>
<td style="padding-right:5px;padding-left:5px">56.7</td>


	
	<td class="custom-align-1"><a href="/info2/BarclaysPremierLeague" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>123. <a href="/team/Sheffield%20United">Sheffield United</a></td>
<td style="padding-right:5px;padding-left:5px">56.6</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>124. <a href="/team/VfL%20Bochum">VfL Bochum</a></td>
<td style="padding-right:5px;padding-left:5px">56.3</td>


	
	<td class="custom-align-1"><a href="/info2/GermanBundesliga" target="_self">Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>125. <a href="/team/Fluminense">Fluminense</a></td>
<td style="padding-right:5px;padding-left:5px">56.3</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>126. <a href="/team/Nottingham%20Forest">Nottingham Forest</a></td>
<td style="padding-right:5px;padding-left:5px">56.1</td>


	
	<td class="custom-align-1"><a href="/info2/BarclaysPremierLeague" target="_self">Premier League</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>127. <a href="/team/Sparta">Sparta</a></td>
<td style="padding-right:5px;padding-left:5px">56.1</td>


	
	<td class="custom-align-1"><a href="/info2/DutchEredivisie" target="_self">Eredivisie</a>  <span title="Netherlands"> 🇳🇱</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>128. <a href="/team/Middlesbrough">Middlesbrough</a></td>
<td style="padding-right:5px;padding-left:5px">55.8</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>129. <a href="/team/Brest">Brest</a></td>
<td style="padding-right:5px;padding-left:5px">55.8</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue1" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>130. <a href="/team/FC%20Midtjylland">FC Midtjylland</a></td>
<td style="padding-right:5px;padding-left:5px">55.6</td>


	
	<td class="custom-align-1"><a href="/info2/DanishSAS-Ligaen" target="_self">Superliga</a>  <span title="Denmark"> 🇩🇰</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>131. <a href="/team/Luton%20Town">Luton Town</a></td>
<td style="padding-right:5px;padding-left:5px">55.5</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>132. <a href="/team/Pachuca">Pachuca</a></td>
<td style="padding-right:5px;padding-left:5px">55.4</td>


	
	<td class="custom-align-1"><a href="/info2/MexicanPrimeraDivisionTorneoClausura" target="_self">Liga MX</a>  <span title="Mexico"> 🇲🇽</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>133. <a href="/team/FC%20Krasnodar">FC Krasnodar</a></td>
<td style="padding-right:5px;padding-left:5px">54.6</td>


	
	<td class="custom-align-1"><a href="/info2/RussianPremierLiga" target="_self">Premier League</a>  <span title="Russia"> 🇷🇺</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>134. <a href="/team/Internacional">Internacional</a></td>
<td style="padding-right:5px;padding-left:5px">54.2</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>135. <a href="/team/Lokomotiv%20Moscow">Lokomotiv Moscow</a></td>
<td style="padding-right:5px;padding-left:5px">54.1</td>


	
	<td class="custom-align-1"><a href="/info2/RussianPremierLiga" target="_self">Premier League</a>  <span title="Russia"> 🇷🇺</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>136. <a href="/team/Real%20Valladolid">Real Valladolid</a></td>
<td style="padding-right:5px;padding-left:5px">53.9</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishPrimeraDivision" target="_self">LaLiga</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>137. <a href="/team/Trabzonspor">Trabzonspor</a></td>
<td style="padding-right:5px;padding-left:5px">53.9</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>138. <a href="/team/Hertha%20Berlin">Hertha Berlin</a></td>
<td style="padding-right:5px;padding-left:5px">53.9</td>


	
	<td class="custom-align-1"><a href="/info2/GermanBundesliga" target="_self">Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>139. <a href="/team/Philadelphia%20Union">Philadelphia Union</a></td>
<td style="padding-right:5px;padding-left:5px">53.8</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>140. <a href="/team/Lorient">Lorient</a></td>
<td style="padding-right:5px;padding-left:5px">53.7</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue1" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>141. <a href="/team/Bragantino">Bragantino</a></td>
<td style="padding-right:5px;padding-left:5px">53.6</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>142. <a href="/team/Empoli">Empoli</a></td>
<td style="padding-right:5px;padding-left:5px">53.3</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieA" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>143. <a href="/team/Los%20Angeles%20FC">Los Angeles FC</a></td>
<td style="padding-right:5px;padding-left:5px">53.2</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>144. <a href="/team/Spartak%20Moscow">Spartak Moscow</a></td>
<td style="padding-right:5px;padding-left:5px">53.2</td>


	
	<td class="custom-align-1"><a href="/info2/RussianPremierLiga" target="_self">Premier League</a>  <span title="Russia"> 🇷🇺</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>145. <a href="/team/Fortaleza">Fortaleza</a></td>
<td style="padding-right:5px;padding-left:5px">53.1</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>146. <a href="/team/Ipswich%20Town">Ipswich Town</a></td>
<td style="padding-right:5px;padding-left:5px">52.9</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>147. <a href="/team/Guimaraes">Guimaraes</a></td>
<td style="padding-right:5px;padding-left:5px">52.7</td>


	
	<td class="custom-align-1"><a href="/info2/PortugueseLiga" target="_self">Primeira Liga</a>  <span title="Portugal"> 🇵🇹</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.0</td>


</tr>
	
	    <tr>
	


<td>148. <a href="/team/Istanbul%20Basaksehir">Istanbul Basaksehir</a></td>
<td style="padding-right:5px;padding-left:5px">52.5</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>149. <a href="/team/Molde">Molde</a></td>
<td style="padding-right:5px;padding-left:5px">52.4</td>


	
	<td class="custom-align-1"><a href="/info2/NorwegianTippeligaen" target="_self">Eliteserien</a>  <span title="Norway"> 🇳🇴</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>150. <a href="/team/Anderlecht">Anderlecht</a></td>
<td style="padding-right:5px;padding-left:5px">52.3</td>


	
	<td class="custom-align-1"><a href="/info2/BelgianJupilerLeague" target="_self">First Division A</a>  <span title="Belgium"> 🇧🇪</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>151. <a href="/team/León">León</a></td>
<td style="padding-right:5px;padding-left:5px">52.2</td>


	
	<td class="custom-align-1"><a href="/info2/MexicanPrimeraDivisionTorneoClausura" target="_self">Liga MX</a>  <span title="Mexico"> 🇲🇽</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>152. <a href="/team/Atlético%20Paranaense">Atlético Paranaense</a></td>
<td style="padding-right:5px;padding-left:5px">52.1</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>153. <a href="/team/Atlas">Atlas</a></td>
<td style="padding-right:5px;padding-left:5px">52.1</td>


	
	<td class="custom-align-1"><a href="/info2/MexicanPrimeraDivisionTorneoClausura" target="_self">Liga MX</a>  <span title="Mexico"> 🇲🇽</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>154. <a href="/team/Swansea%20City">Swansea City</a></td>
<td style="padding-right:5px;padding-left:5px">51.9</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>155. <a href="/team/FK%20Austria%20Vienna">FK Austria Vienna</a></td>
<td style="padding-right:5px;padding-left:5px">51.9</td>


	
	<td class="custom-align-1"><a href="/info2/AustrianT-MobileBundesliga" target="_self">Bundesliga</a>  <span title="Austria"> 🇦🇹</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>156. <a href="/team/Fatih%20Karagümrük">Fatih Karagümrük</a></td>
<td style="padding-right:5px;padding-left:5px">51.8</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>157. <a href="/team/Terek%20Grozny">Terek Grozny</a></td>
<td style="padding-right:5px;padding-left:5px">51.8</td>


	
	<td class="custom-align-1"><a href="/info2/RussianPremierLiga" target="_self">Premier League</a>  <span title="Russia"> 🇷🇺</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>158. <a href="/team/Go%20Ahead%20Eagles">Go Ahead Eagles</a></td>
<td style="padding-right:5px;padding-left:5px">51.8</td>


	
	<td class="custom-align-1"><a href="/info2/DutchEredivisie" target="_self">Eredivisie</a>  <span title="Netherlands"> 🇳🇱</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>159. <a href="/team/Yokohama%20F.%20Marinos">Yokohama F. Marinos</a></td>
<td style="padding-right:5px;padding-left:5px">51.7</td>


	
	<td class="custom-align-1"><a href="/info2/JapaneseJLeague" target="_self">J1 League</a>  <span title="Japan"> 🇯🇵</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>160. <a href="/team/Cercle%20Brugge">Cercle Brugge</a></td>
<td style="padding-right:5px;padding-left:5px">51.4</td>


	
	<td class="custom-align-1"><a href="/info2/BelgianJupilerLeague" target="_self">First Division A</a>  <span title="Belgium"> 🇧🇪</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>161. <a href="/team/Nantes">Nantes</a></td>
<td style="padding-right:5px;padding-left:5px">51.1</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue1" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>162. <a href="/team/LASK%20Linz">LASK Linz</a></td>
<td style="padding-right:5px;padding-left:5px">51.1</td>


	
	<td class="custom-align-1"><a href="/info2/AustrianT-MobileBundesliga" target="_self">Bundesliga</a>  <span title="Austria"> 🇦🇹</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>163. <a href="/team/Vasco%20da%20Gama">Vasco da Gama</a></td>
<td style="padding-right:5px;padding-left:5px">51.0</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>164. <a href="/team/Corinthians">Corinthians</a></td>
<td style="padding-right:5px;padding-left:5px">51.0</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>165. <a href="/team/Coventry%20City">Coventry City</a></td>
<td style="padding-right:5px;padding-left:5px">51.0</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>166. <a href="/team/PAOK%20Salonika">PAOK Salonika</a></td>
<td style="padding-right:5px;padding-left:5px">50.9</td>


	
	<td class="custom-align-1"><a href="/info2/GreekSuperLeague" target="_self">Super League</a>  <span title="Greece"> 🇬🇷</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>167. <a href="/team/Guadalajara">Guadalajara</a></td>
<td style="padding-right:5px;padding-left:5px">50.8</td>


	
	<td class="custom-align-1"><a href="/info2/MexicanPrimeraDivisionTorneoClausura" target="_self">Liga MX</a>  <span title="Mexico"> 🇲🇽</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>168. <a href="/team/Santos">Santos</a></td>
<td style="padding-right:5px;padding-left:5px">50.7</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>169. <a href="/team/Famalicao">Famalicao</a></td>
<td style="padding-right:5px;padding-left:5px">50.3</td>


	
	<td class="custom-align-1"><a href="/info2/PortugueseLiga" target="_self">Primeira Liga</a>  <span title="Portugal"> 🇵🇹</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>170. <a href="/team/Verona">Verona</a></td>
<td style="padding-right:5px;padding-left:5px">50.3</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieA" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>171. <a href="/team/Cruz%20Azul">Cruz Azul</a></td>
<td style="padding-right:5px;padding-left:5px">50.2</td>


	
	<td class="custom-align-1"><a href="/info2/MexicanPrimeraDivisionTorneoClausura" target="_self">Liga MX</a>  <span title="Mexico"> 🇲🇽</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>172. <a href="/team/Vissel%20Kobe">Vissel Kobe</a></td>
<td style="padding-right:5px;padding-left:5px">50.0</td>


	
	<td class="custom-align-1"><a href="/info2/JapaneseJLeague" target="_self">J1 League</a>  <span title="Japan"> 🇯🇵</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>173. <a href="/team/Konyaspor">Konyaspor</a></td>
<td style="padding-right:5px;padding-left:5px">49.9</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>174. <a href="/team/Metz">Metz</a></td>
<td style="padding-right:5px;padding-left:5px">49.9</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>175. <a href="/team/Boavista">Boavista</a></td>
<td style="padding-right:5px;padding-left:5px">49.9</td>


	
	<td class="custom-align-1"><a href="/info2/PortugueseLiga" target="_self">Primeira Liga</a>  <span title="Portugal"> 🇵🇹</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>176. <a href="/team/Frosinone">Frosinone</a></td>
<td style="padding-right:5px;padding-left:5px">49.8</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>177. <a href="/team/Heerenveen">Heerenveen</a></td>
<td style="padding-right:5px;padding-left:5px">49.8</td>


	
	<td class="custom-align-1"><a href="/info2/DutchEredivisie" target="_self">Eredivisie</a>  <span title="Netherlands"> 🇳🇱</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>178. <a href="/team/Cruzeiro">Cruzeiro</a></td>
<td style="padding-right:5px;padding-left:5px">49.7</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>179. <a href="/team/Talleres%20de%20Córdoba">Talleres de Córdoba</a></td>
<td style="padding-right:5px;padding-left:5px">49.6</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>180. <a href="/team/Argentinos%20Juniors">Argentinos Juniors</a></td>
<td style="padding-right:5px;padding-left:5px">49.4</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>181. <a href="/team/Malmo%20FF">Malmo FF</a></td>
<td style="padding-right:5px;padding-left:5px">49.3</td>


	
	<td class="custom-align-1"><a href="/info2/SwedishAllsvenskan" target="_self">Allsvenskan</a>  <span title="Sweden"> 🇸🇪</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>182. <a href="/team/BK%20Hacken">BK Hacken</a></td>
<td style="padding-right:5px;padding-left:5px">49.1</td>


	
	<td class="custom-align-1"><a href="/info2/SwedishAllsvenskan" target="_self">Allsvenskan</a>  <span title="Sweden"> 🇸🇪</span>   </td>


	<td class="custom-align-2">1.8</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>183. <a href="/team/Spezia">Spezia</a></td>
<td style="padding-right:5px;padding-left:5px">48.7</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieA" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>184. <a href="/team/NEC">NEC</a></td>
<td style="padding-right:5px;padding-left:5px">48.7</td>


	
	<td class="custom-align-1"><a href="/info2/DutchEredivisie" target="_self">Eredivisie</a>  <span title="Netherlands"> 🇳🇱</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>185. <a href="/team/Toluca">Toluca</a></td>
<td style="padding-right:5px;padding-left:5px">48.6</td>


	
	<td class="custom-align-1"><a href="/info2/MexicanPrimeraDivisionTorneoClausura" target="_self">Liga MX</a>  <span title="Mexico"> 🇲🇽</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>186. <a href="/team/Salernitana">Salernitana</a></td>
<td style="padding-right:5px;padding-left:5px">48.6</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieA" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>187. <a href="/team/West%20Bromwich%20Albion">West Bromwich Albion</a></td>
<td style="padding-right:5px;padding-left:5px">48.6</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>188. <a href="/team/Gil%20Vicente">Gil Vicente</a></td>
<td style="padding-right:5px;padding-left:5px">48.5</td>


	
	<td class="custom-align-1"><a href="/info2/PortugueseLiga" target="_self">Primeira Liga</a>  <span title="Portugal"> 🇵🇹</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>189. <a href="/team/Rapid%20Vienna">Rapid Vienna</a></td>
<td style="padding-right:5px;padding-left:5px">48.5</td>


	
	<td class="custom-align-1"><a href="/info2/AustrianT-MobileBundesliga" target="_self">Bundesliga</a>  <span title="Austria"> 🇦🇹</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>190. <a href="/team/Chaves">Chaves</a></td>
<td style="padding-right:5px;padding-left:5px">48.5</td>


	
	<td class="custom-align-1"><a href="/info2/PortugueseLiga" target="_self">Primeira Liga</a>  <span title="Portugal"> 🇵🇹</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>191. <a href="/team/Auxerre">Auxerre</a></td>
<td style="padding-right:5px;padding-left:5px">48.4</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue1" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>192. <a href="/team/Cagliari">Cagliari</a></td>
<td style="padding-right:5px;padding-left:5px">48.2</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>193. <a href="/team/FC%20Cincinnati">FC Cincinnati</a></td>
<td style="padding-right:5px;padding-left:5px">48.1</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>194. <a href="/team/Vizela">Vizela</a></td>
<td style="padding-right:5px;padding-left:5px">48.1</td>


	
	<td class="custom-align-1"><a href="/info2/PortugueseLiga" target="_self">Primeira Liga</a>  <span title="Portugal"> 🇵🇹</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>195. <a href="/team/Santos%20Laguna">Santos Laguna</a></td>
<td style="padding-right:5px;padding-left:5px">47.9</td>


	
	<td class="custom-align-1"><a href="/info2/MexicanPrimeraDivisionTorneoClausura" target="_self">Liga MX</a>  <span title="Mexico"> 🇲🇽</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>196. <a href="/team/Stoke%20City">Stoke City</a></td>
<td style="padding-right:5px;padding-left:5px">47.8</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.1</td>


</tr>
	
	    <tr>
	


<td>197. <a href="/team/AGF%20Aarhus">AGF Aarhus</a></td>
<td style="padding-right:5px;padding-left:5px">47.8</td>


	
	<td class="custom-align-1"><a href="/info2/DanishSAS-Ligaen" target="_self">Superliga</a>  <span title="Denmark"> 🇩🇰</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>198. <a href="/team/Cremonese">Cremonese</a></td>
<td style="padding-right:5px;padding-left:5px">47.6</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieA" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>199. <a href="/team/FC%20Arouca">FC Arouca</a></td>
<td style="padding-right:5px;padding-left:5px">47.6</td>


	
	<td class="custom-align-1"><a href="/info2/PortugueseLiga" target="_self">Primeira Liga</a>  <span title="Portugal"> 🇵🇹</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>200. <a href="/team/Gazovik%20Orenburg">Gazovik Orenburg</a></td>
<td style="padding-right:5px;padding-left:5px">47.5</td>


	
	<td class="custom-align-1"><a href="/info2/RussianPremierLiga" target="_self">Premier League</a>  <span title="Russia"> 🇷🇺</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>201. <a href="/team/Boca%20Juniors">Boca Juniors</a></td>
<td style="padding-right:5px;padding-left:5px">47.5</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>202. <a href="/team/Atlanta%20United%20FC">Atlanta United FC</a></td>
<td style="padding-right:5px;padding-left:5px">47.5</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>203. <a href="/team/Panathinaikos">Panathinaikos</a></td>
<td style="padding-right:5px;padding-left:5px">47.5</td>


	
	<td class="custom-align-1"><a href="/info2/GreekSuperLeague" target="_self">Super League</a>  <span title="Greece"> 🇬🇷</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>204. <a href="/team/Millwall">Millwall</a></td>
<td style="padding-right:5px;padding-left:5px">47.4</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>205. <a href="/team/Genoa">Genoa</a></td>
<td style="padding-right:5px;padding-left:5px">47.3</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>206. <a href="/team/Aris%20Salonika">Aris Salonika</a></td>
<td style="padding-right:5px;padding-left:5px">47.2</td>


	
	<td class="custom-align-1"><a href="/info2/GreekSuperLeague" target="_self">Super League</a>  <span title="Greece"> 🇬🇷</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>207. <a href="/team/Grêmio">Grêmio</a></td>
<td style="padding-right:5px;padding-left:5px">47.2</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>208. <a href="/team/Angers">Angers</a></td>
<td style="padding-right:5px;padding-left:5px">47.1</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue1" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>209. <a href="/team/Estudiantes">Estudiantes</a></td>
<td style="padding-right:5px;padding-left:5px">47.0</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>210. <a href="/team/Dinamo%20Moscow">Dinamo Moscow</a></td>
<td style="padding-right:5px;padding-left:5px">46.6</td>


	
	<td class="custom-align-1"><a href="/info2/RussianPremierLiga" target="_self">Premier League</a>  <span title="Russia"> 🇷🇺</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>211. <a href="/team/Nashville%20SC">Nashville SC</a></td>
<td style="padding-right:5px;padding-left:5px">46.5</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>212. <a href="/team/St%20Gallen">St Gallen</a></td>
<td style="padding-right:5px;padding-left:5px">46.3</td>


	
	<td class="custom-align-1"><a href="/info2/SwissRaiffeisenSuperLeague" target="_self">Super League</a>  <span title="Switzerland"> 🇨🇭</span>   </td>


	<td class="custom-align-2">1.7</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>213. <a href="/team/Casa%20Pia">Casa Pia</a></td>
<td style="padding-right:5px;padding-left:5px">46.3</td>


	
	<td class="custom-align-1"><a href="/info2/PortugueseLiga" target="_self">Primeira Liga</a>  <span title="Portugal"> 🇵🇹</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>214. <a href="/team/Rio%20Ave">Rio Ave</a></td>
<td style="padding-right:5px;padding-left:5px">46.1</td>


	
	<td class="custom-align-1"><a href="/info2/PortugueseLiga" target="_self">Primeira Liga</a>  <span title="Portugal"> 🇵🇹</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>215. <a href="/team/St%20Etienne">St Etienne</a></td>
<td style="padding-right:5px;padding-left:5px">46.1</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>216. <a href="/team/Urawa%20Red%20Diamonds">Urawa Red Diamonds</a></td>
<td style="padding-right:5px;padding-left:5px">45.8</td>


	
	<td class="custom-align-1"><a href="/info2/JapaneseJLeague" target="_self">J1 League</a>  <span title="Japan"> 🇯🇵</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>217. <a href="/team/Sunderland">Sunderland</a></td>
<td style="padding-right:5px;padding-left:5px">45.6</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>218. <a href="/team/Bahía">Bahía</a></td>
<td style="padding-right:5px;padding-left:5px">45.5</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>219. <a href="/team/Norwich%20City">Norwich City</a></td>
<td style="padding-right:5px;padding-left:5px">45.5</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>220. <a href="/team/Brondby">Brondby</a></td>
<td style="padding-right:5px;padding-left:5px">45.4</td>


	
	<td class="custom-align-1"><a href="/info2/DanishSAS-Ligaen" target="_self">Superliga</a>  <span title="Denmark"> 🇩🇰</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>221. <a href="/team/Watford">Watford</a></td>
<td style="padding-right:5px;padding-left:5px">45.3</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>222. <a href="/team/IF%20Elfsborg">IF Elfsborg</a></td>
<td style="padding-right:5px;padding-left:5px">45.3</td>


	
	<td class="custom-align-1"><a href="/info2/SwedishAllsvenskan" target="_self">Allsvenskan</a>  <span title="Sweden"> 🇸🇪</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>223. <a href="/team/Bordeaux">Bordeaux</a></td>
<td style="padding-right:5px;padding-left:5px">45.2</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>224. <a href="/team/América%20Mineiro">América Mineiro</a></td>
<td style="padding-right:5px;padding-left:5px">45.1</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>225. <a href="/team/KVC%20Westerlo">KVC Westerlo</a></td>
<td style="padding-right:5px;padding-left:5px">44.8</td>


	
	<td class="custom-align-1"><a href="/info2/BelgianJupilerLeague" target="_self">First Division A</a>  <span title="Belgium"> 🇧🇪</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>226. <a href="/team/Kawasaki%20Frontale">Kawasaki Frontale</a></td>
<td style="padding-right:5px;padding-left:5px">44.8</td>


	
	<td class="custom-align-1"><a href="/info2/JapaneseJLeague" target="_self">J1 League</a>  <span title="Japan"> 🇯🇵</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>227. <a href="/team/Columbus%20Crew">Columbus Crew</a></td>
<td style="padding-right:5px;padding-left:5px">44.7</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>228. <a href="/team/Seattle%20Sounders%20FC">Seattle Sounders FC</a></td>
<td style="padding-right:5px;padding-left:5px">44.7</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>229. <a href="/team/FC%20Lugano">FC Lugano</a></td>
<td style="padding-right:5px;padding-left:5px">44.6</td>


	
	<td class="custom-align-1"><a href="/info2/SwissRaiffeisenSuperLeague" target="_self">Super League</a>  <span title="Switzerland"> 🇨🇭</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>230. <a href="/team/New%20York%20City%20FC">New York City FC</a></td>
<td style="padding-right:5px;padding-left:5px">44.6</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>231. <a href="/team/OH%20Leuven">OH Leuven</a></td>
<td style="padding-right:5px;padding-left:5px">44.2</td>


	
	<td class="custom-align-1"><a href="/info2/BelgianJupilerLeague" target="_self">First Division A</a>  <span title="Belgium"> 🇧🇪</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>232. <a href="/team/New%20York%20Red%20Bulls">New York Red Bulls</a></td>
<td style="padding-right:5px;padding-left:5px">44.1</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>233. <a href="/team/San%20Lorenzo">San Lorenzo</a></td>
<td style="padding-right:5px;padding-left:5px">44.0</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">0.9</td>


</tr>

	
	    <tr>
	


<td>234. <a href="/team/Blackburn">Blackburn</a></td>
<td style="padding-right:5px;padding-left:5px">44.0</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>235. <a href="/team/Santa%20Clara">Santa Clara</a></td>
<td style="padding-right:5px;padding-left:5px">43.9</td>


	
	<td class="custom-align-1"><a href="/info2/PortugueseLiga" target="_self">Primeira Liga</a>  <span title="Portugal"> 🇵🇹</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>236. <a href="/team/Rostov">Rostov</a></td>
<td style="padding-right:5px;padding-left:5px">43.8</td>


	
	<td class="custom-align-1"><a href="/info2/RussianPremierLiga" target="_self">Premier League</a>  <span title="Russia"> 🇷🇺</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>237. <a href="/team/FC%20St.%20Pauli">FC St. Pauli</a></td>
<td style="padding-right:5px;padding-left:5px">43.8</td>


	
	<td class="custom-align-1"><a href="/info2/German2.Bundesliga" target="_self">2. Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>238. <a href="/team/Maritimo">Maritimo</a></td>
<td style="padding-right:5px;padding-left:5px">43.5</td>


	
	<td class="custom-align-1"><a href="/info2/PortugueseLiga" target="_self">Primeira Liga</a>  <span title="Portugal"> 🇵🇹</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>239. <a href="/team/Bristol%20City">Bristol City</a></td>
<td style="padding-right:5px;padding-left:5px">43.5</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>240. <a href="/team/Hibernian">Hibernian</a></td>
<td style="padding-right:5px;padding-left:5px">43.5</td>


	
	<td class="custom-align-1"><a href="/info2/ScottishPremiership" target="_self">Premiership</a>  <span title="Scotland"> 🏴󠁧󠁢󠁳󠁣󠁴󠁿</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>241. <a href="/team/Hearts">Hearts</a></td>
<td style="padding-right:5px;padding-left:5px">43.4</td>


	
	<td class="custom-align-1"><a href="/info2/ScottishPremiership" target="_self">Premiership</a>  <span title="Scotland"> 🏴󠁧󠁢󠁳󠁣󠁴󠁿</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>242. <a href="/team/Rosenborg">Rosenborg</a></td>
<td style="padding-right:5px;padding-left:5px">43.4</td>


	
	<td class="custom-align-1"><a href="/info2/NorwegianTippeligaen" target="_self">Eliteserien</a>  <span title="Norway"> 🇳🇴</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>243. <a href="/team/FC%20Nordsjaelland">FC Nordsjaelland</a></td>
<td style="padding-right:5px;padding-left:5px">43.2</td>


	
	<td class="custom-align-1"><a href="/info2/DanishSAS-Ligaen" target="_self">Superliga</a>  <span title="Denmark"> 🇩🇰</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>244. <a href="/team/Lanus">Lanus</a></td>
<td style="padding-right:5px;padding-left:5px">43.1</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>245. <a href="/team/Orlando%20City%20SC">Orlando City SC</a></td>
<td style="padding-right:5px;padding-left:5px">43.0</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.5</td>


</tr>
	
	    <tr>
	


<td>246. <a href="/team/Wolfsberger%20AC">Wolfsberger AC</a></td>
<td style="padding-right:5px;padding-left:5px">42.9</td>


	
	<td class="custom-align-1"><a href="/info2/AustrianT-MobileBundesliga" target="_self">Bundesliga</a>  <span title="Austria"> 🇦🇹</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>247. <a href="/team/Levante">Levante</a></td>
<td style="padding-right:5px;padding-left:5px">42.9</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>248. <a href="/team/Viborg">Viborg</a></td>
<td style="padding-right:5px;padding-left:5px">42.7</td>


	
	<td class="custom-align-1"><a href="/info2/DanishSAS-Ligaen" target="_self">Superliga</a>  <span title="Denmark"> 🇩🇰</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>249. <a href="/team/DC%20United">DC United</a></td>
<td style="padding-right:5px;padding-left:5px">42.7</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>250. <a href="/team/Kashima%20Antlers">Kashima Antlers</a></td>
<td style="padding-right:5px;padding-left:5px">42.7</td>


	
	<td class="custom-align-1"><a href="/info2/JapaneseJLeague" target="_self">J1 League</a>  <span title="Japan"> 🇯🇵</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>251. <a href="/team/FC%20Dallas">FC Dallas</a></td>
<td style="padding-right:5px;padding-left:5px">42.6</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>252. <a href="/team/Tenerife">Tenerife</a></td>
<td style="padding-right:5px;padding-left:5px">42.6</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>253. <a href="/team/New%20England%20Revolution">New England Revolution</a></td>
<td style="padding-right:5px;padding-left:5px">42.4</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>254. <a href="/team/Cuiaba">Cuiaba</a></td>
<td style="padding-right:5px;padding-left:5px">42.3</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>255. <a href="/team/Basel">Basel</a></td>
<td style="padding-right:5px;padding-left:5px">41.8</td>


	
	<td class="custom-align-1"><a href="/info2/SwissRaiffeisenSuperLeague" target="_self">Super League</a>  <span title="Switzerland"> 🇨🇭</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>256. <a href="/team/Vancouver%20Whitecaps">Vancouver Whitecaps</a></td>
<td style="padding-right:5px;padding-left:5px">41.8</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>257. <a href="/team/Nagoya%20Grampus%20Eight">Nagoya Grampus Eight</a></td>
<td style="padding-right:5px;padding-left:5px">41.6</td>


	
	<td class="custom-align-1"><a href="/info2/JapaneseJLeague" target="_self">J1 League</a>  <span title="Japan"> 🇯🇵</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>258. <a href="/team/Hamburg%20SV">Hamburg SV</a></td>
<td style="padding-right:5px;padding-left:5px">41.6</td>


	
	<td class="custom-align-1"><a href="/info2/German2.Bundesliga" target="_self">2. Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>259. <a href="/team/Parma">Parma</a></td>
<td style="padding-right:5px;padding-left:5px">41.5</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>260. <a href="/team/Puebla">Puebla</a></td>
<td style="padding-right:5px;padding-left:5px">41.4</td>


	
	<td class="custom-align-1"><a href="/info2/MexicanPrimeraDivisionTorneoClausura" target="_self">Liga MX</a>  <span title="Mexico"> 🇲🇽</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>261. <a href="/team/Sampdoria">Sampdoria</a></td>
<td style="padding-right:5px;padding-left:5px">41.3</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieA" target="_self">Serie A</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>262. <a href="/team/Standard%20Liege">Standard Liege</a></td>
<td style="padding-right:5px;padding-left:5px">41.3</td>


	
	<td class="custom-align-1"><a href="/info2/BelgianJupilerLeague" target="_self">First Division A</a>  <span title="Belgium"> 🇧🇪</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>263. <a href="/team/Motherwell">Motherwell</a></td>
<td style="padding-right:5px;padding-left:5px">41.3</td>


	
	<td class="custom-align-1"><a href="/info2/ScottishPremiership" target="_self">Premiership</a>  <span title="Scotland"> 🏴󠁧󠁢󠁳󠁣󠁴󠁿</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>264. <a href="/team/Silkeborg">Silkeborg</a></td>
<td style="padding-right:5px;padding-left:5px">41.1</td>


	
	<td class="custom-align-1"><a href="/info2/DanishSAS-Ligaen" target="_self">Superliga</a>  <span title="Denmark"> 🇩🇰</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>265. <a href="/team/FC%20Andorra">FC Andorra</a></td>
<td style="padding-right:5px;padding-left:5px">41.1</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>266. <a href="/team/Sporting%20de%20Charleroi">Sporting de Charleroi</a></td>
<td style="padding-right:5px;padding-left:5px">41.1</td>


	
	<td class="custom-align-1"><a href="/info2/BelgianJupilerLeague" target="_self">First Division A</a>  <span title="Belgium"> 🇧🇪</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>267. <a href="/team/FC%20Zurich">FC Zurich</a></td>
<td style="padding-right:5px;padding-left:5px">41.0</td>


	
	<td class="custom-align-1"><a href="/info2/SwissRaiffeisenSuperLeague" target="_self">Super League</a>  <span title="Switzerland"> 🇨🇭</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>268. <a href="/team/St.%20Truidense">St. Truidense</a></td>
<td style="padding-right:5px;padding-left:5px">40.9</td>


	
	<td class="custom-align-1"><a href="/info2/BelgianJupilerLeague" target="_self">First Division A</a>  <span title="Belgium"> 🇧🇪</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>269. <a href="/team/Velez%20Sarsfield">Velez Sarsfield</a></td>
<td style="padding-right:5px;padding-left:5px">40.9</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>270. <a href="/team/Pumas%20Unam">Pumas Unam</a></td>
<td style="padding-right:5px;padding-left:5px">40.7</td>


	
	<td class="custom-align-1"><a href="/info2/MexicanPrimeraDivisionTorneoClausura" target="_self">Liga MX</a>  <span title="Mexico"> 🇲🇽</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>271. <a href="/team/SC%20Paderborn">SC Paderborn</a></td>
<td style="padding-right:5px;padding-left:5px">40.7</td>


	
	<td class="custom-align-1"><a href="/info2/German2.Bundesliga" target="_self">2. Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>272. <a href="/team/Portimonense">Portimonense</a></td>
<td style="padding-right:5px;padding-left:5px">40.6</td>


	
	<td class="custom-align-1"><a href="/info2/PortugueseLiga" target="_self">Primeira Liga</a>  <span title="Portugal"> 🇵🇹</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>273. <a href="/team/Defensa%20y%20Justicia">Defensa y Justicia</a></td>
<td style="padding-right:5px;padding-left:5px">40.5</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>274. <a href="/team/Bastia">Bastia</a></td>
<td style="padding-right:5px;padding-left:5px">40.5</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>275. <a href="/team/Estoril%20Praia">Estoril Praia</a></td>
<td style="padding-right:5px;padding-left:5px">40.5</td>


	
	<td class="custom-align-1"><a href="/info2/PortugueseLiga" target="_self">Primeira Liga</a>  <span title="Portugal"> 🇵🇹</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>276. <a href="/team/Portland%20Timbers">Portland Timbers</a></td>
<td style="padding-right:5px;padding-left:5px">40.4</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>277. <a href="/team/Granada">Granada</a></td>
<td style="padding-right:5px;padding-left:5px">40.2</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>278. <a href="/team/Bari">Bari</a></td>
<td style="padding-right:5px;padding-left:5px">40.1</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>279. <a href="/team/Mamelodi%20Sundowns">Mamelodi Sundowns</a></td>
<td style="padding-right:5px;padding-left:5px">40.0</td>


	
	<td class="custom-align-1"><a href="/info2/SouthAfricanABSAPremierLeague" target="_self">Premier Division</a>  <span title="South Africa"> 🇿🇦</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>280. <a href="/team/Sanfrecce%20Hiroshima">Sanfrecce Hiroshima</a></td>
<td style="padding-right:5px;padding-left:5px">40.0</td>


	
	<td class="custom-align-1"><a href="/info2/JapaneseJLeague" target="_self">J1 League</a>  <span title="Japan"> 🇯🇵</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>281. <a href="/team/Servette">Servette</a></td>
<td style="padding-right:5px;padding-left:5px">39.8</td>


	
	<td class="custom-align-1"><a href="/info2/SwissRaiffeisenSuperLeague" target="_self">Super League</a>  <span title="Switzerland"> 🇨🇭</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>282. <a href="/team/Atlético%20San%20Luis">Atlético San Luis</a></td>
<td style="padding-right:5px;padding-left:5px">39.8</td>


	
	<td class="custom-align-1"><a href="/info2/MexicanPrimeraDivisionTorneoClausura" target="_self">Liga MX</a>  <span title="Mexico"> 🇲🇽</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>283. <a href="/team/Los%20Angeles%20Galaxy">Los Angeles Galaxy</a></td>
<td style="padding-right:5px;padding-left:5px">39.7</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>284. <a href="/team/FC%20Volendam">FC Volendam</a></td>
<td style="padding-right:5px;padding-left:5px">39.7</td>


	
	<td class="custom-align-1"><a href="/info2/DutchEredivisie" target="_self">Eredivisie</a>  <span title="Netherlands"> 🇳🇱</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>285. <a href="/team/RKC">RKC</a></td>
<td style="padding-right:5px;padding-left:5px">39.6</td>


	
	<td class="custom-align-1"><a href="/info2/DutchEredivisie" target="_self">Eredivisie</a>  <span title="Netherlands"> 🇳🇱</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>286. <a href="/team/Odense%20BK">Odense BK</a></td>
<td style="padding-right:5px;padding-left:5px">39.6</td>


	
	<td class="custom-align-1"><a href="/info2/DanishSAS-Ligaen" target="_self">Superliga</a>  <span title="Denmark"> 🇩🇰</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>287. <a href="/team/Caen">Caen</a></td>
<td style="padding-right:5px;padding-left:5px">39.6</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>288. <a href="/team/Goiás">Goiás</a></td>
<td style="padding-right:5px;padding-left:5px">39.6</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>289. <a href="/team/Sivasspor">Sivasspor</a></td>
<td style="padding-right:5px;padding-left:5px">39.5</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>290. <a href="/team/Kasimpasa">Kasimpasa</a></td>
<td style="padding-right:5px;padding-left:5px">39.4</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>291. <a href="/team/Coritiba">Coritiba</a></td>
<td style="padding-right:5px;padding-left:5px">39.3</td>


	
	<td class="custom-align-1"><a href="/info2/BrasileiroSérieA" target="_self">Brasileiro</a>  <span title="Brazil"> 🇧🇷</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>292. <a href="/team/Guingamp">Guingamp</a></td>
<td style="padding-right:5px;padding-left:5px">39.3</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>293. <a href="/team/Tigre">Tigre</a></td>
<td style="padding-right:5px;padding-left:5px">39.2</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>294. <a href="/team/Minnesota%20United%20FC">Minnesota United FC</a></td>
<td style="padding-right:5px;padding-left:5px">39.2</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.6</td>


</tr>
	
	    <tr>
	


<td>295. <a href="/team/F.B.C%20Unione%20Venezia">F.B.C Unione Venezia</a></td>
<td style="padding-right:5px;padding-left:5px">39.1</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>296. <a href="/team/Necaxa">Necaxa</a></td>
<td style="padding-right:5px;padding-left:5px">39.0</td>


	
	<td class="custom-align-1"><a href="/info2/MexicanPrimeraDivisionTorneoClausura" target="_self">Liga MX</a>  <span title="Mexico"> 🇲🇽</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>297. <a href="/team/Rosario%20Central">Rosario Central</a></td>
<td style="padding-right:5px;padding-left:5px">39.0</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>298. <a href="/team/Hull%20City">Hull City</a></td>
<td style="padding-right:5px;padding-left:5px">39.0</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>299. <a href="/team/Fortuna%20Düsseldorf">Fortuna Düsseldorf</a></td>
<td style="padding-right:5px;padding-left:5px">38.9</td>


	
	<td class="custom-align-1"><a href="/info2/German2.Bundesliga" target="_self">2. Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>300. <a href="/team/Lillestrom">Lillestrom</a></td>
<td style="padding-right:5px;padding-left:5px">38.9</td>


	
	<td class="custom-align-1"><a href="/info2/NorwegianTippeligaen" target="_self">Eliteserien</a>  <span title="Norway"> 🇳🇴</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>301. <a href="/team/Kayserispor">Kayserispor</a></td>
<td style="padding-right:5px;padding-left:5px">38.9</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>302. <a href="/team/Aberdeen">Aberdeen</a></td>
<td style="padding-right:5px;padding-left:5px">38.9</td>


	
	<td class="custom-align-1"><a href="/info2/ScottishPremiership" target="_self">Premiership</a>  <span title="Scotland"> 🏴󠁧󠁢󠁳󠁣󠁴󠁿</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>303. <a href="/team/Paris%20FC">Paris FC</a></td>
<td style="padding-right:5px;padding-left:5px">38.8</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>304. <a href="/team/Preston%20North%20End">Preston North End</a></td>
<td style="padding-right:5px;padding-left:5px">38.8</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>305. <a href="/team/SK%20Brann">SK Brann</a></td>
<td style="padding-right:5px;padding-left:5px">38.8</td>


	
	<td class="custom-align-1"><a href="/info2/NorwegianTippeligaen" target="_self">Eliteserien</a>  <span title="Norway"> 🇳🇴</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>306. <a href="/team/Real%20Zaragoza">Real Zaragoza</a></td>
<td style="padding-right:5px;padding-left:5px">38.7</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>307. <a href="/team/Sporting%20Kansas%20City">Sporting Kansas City</a></td>
<td style="padding-right:5px;padding-left:5px">38.7</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>308. <a href="/team/Albacete">Albacete</a></td>
<td style="padding-right:5px;padding-left:5px">38.7</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>309. <a href="/team/Antalyaspor">Antalyaspor</a></td>
<td style="padding-right:5px;padding-left:5px">38.6</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>310. <a href="/team/FC%20Luzern">FC Luzern</a></td>
<td style="padding-right:5px;padding-left:5px">38.6</td>


	
	<td class="custom-align-1"><a href="/info2/SwissRaiffeisenSuperLeague" target="_self">Super League</a>  <span title="Switzerland"> 🇨🇭</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>311. <a href="/team/Racing%20Club">Racing Club</a></td>
<td style="padding-right:5px;padding-left:5px">38.6</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>312. <a href="/team/Cerezo%20Osaka">Cerezo Osaka</a></td>
<td style="padding-right:5px;padding-left:5px">38.5</td>


	
	<td class="custom-align-1"><a href="/info2/JapaneseJLeague" target="_self">J1 League</a>  <span title="Japan"> 🇯🇵</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>313. <a href="/team/Fortuna%20Sittard">Fortuna Sittard</a></td>
<td style="padding-right:5px;padding-left:5px">38.4</td>


	
	<td class="custom-align-1"><a href="/info2/DutchEredivisie" target="_self">Eredivisie</a>  <span title="Netherlands"> 🇳🇱</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>314. <a href="/team/Alavés">Alavés</a></td>
<td style="padding-right:5px;padding-left:5px">38.4</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>315. <a href="/team/Newell's%20Old%20Boys">Newell's Old Boys</a></td>
<td style="padding-right:5px;padding-left:5px">38.3</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>316. <a href="/team/Karlsruher%20SC">Karlsruher SC</a></td>
<td style="padding-right:5px;padding-left:5px">38.3</td>


	
	<td class="custom-align-1"><a href="/info2/German2.Bundesliga" target="_self">2. Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>317. <a href="/team/Tijuana">Tijuana</a></td>
<td style="padding-right:5px;padding-left:5px">38.3</td>


	
	<td class="custom-align-1"><a href="/info2/MexicanPrimeraDivisionTorneoClausura" target="_self">Liga MX</a>  <span title="Mexico"> 🇲🇽</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>318. <a href="/team/Le%20Havre">Le Havre</a></td>
<td style="padding-right:5px;padding-left:5px">38.2</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.0</td>


</tr>

	
	    <tr>
	


<td>319. <a href="/team/AC%20Ajaccio">AC Ajaccio</a></td>
<td style="padding-right:5px;padding-left:5px">38.1</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue1" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>320. <a href="/team/San%20Jose%20Earthquakes">San Jose Earthquakes</a></td>
<td style="padding-right:5px;padding-left:5px">38.1</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>321. <a href="/team/Ural%20Sverdlovsk%20Oblast">Ural Sverdlovsk Oblast</a></td>
<td style="padding-right:5px;padding-left:5px">38.0</td>


	
	<td class="custom-align-1"><a href="/info2/RussianPremierLiga" target="_self">Premier League</a>  <span title="Russia"> 🇷🇺</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>322. <a href="/team/1.%20FC%20Heidenheim%201846">1. FC Heidenheim 1846</a></td>
<td style="padding-right:5px;padding-left:5px">38.0</td>


	
	<td class="custom-align-1"><a href="/info2/German2.Bundesliga" target="_self">2. Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>323. <a href="/team/Consadole%20Sapporo">Consadole Sapporo</a></td>
<td style="padding-right:5px;padding-left:5px">38.0</td>


	
	<td class="custom-align-1"><a href="/info2/JapaneseJLeague" target="_self">J1 League</a>  <span title="Japan"> 🇯🇵</span>   </td>


	<td class="custom-align-2">1.6</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>324. <a href="/team/Krylia%20Sovetov">Krylia Sovetov</a></td>
<td style="padding-right:5px;padding-left:5px">37.9</td>


	
	<td class="custom-align-1"><a href="/info2/RussianPremierLiga" target="_self">Premier League</a>  <span title="Russia"> 🇷🇺</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>325. <a href="/team/Sheffield%20Wednesday">Sheffield Wednesday</a></td>
<td style="padding-right:5px;padding-left:5px">37.9</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>326. <a href="/team/KV%20Mechelen">KV Mechelen</a></td>
<td style="padding-right:5px;padding-left:5px">37.9</td>


	
	<td class="custom-align-1"><a href="/info2/BelgianJupilerLeague" target="_self">First Division A</a>  <span title="Belgium"> 🇧🇪</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>327. <a href="/team/Toronto%20FC">Toronto FC</a></td>
<td style="padding-right:5px;padding-left:5px">37.8</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>328. <a href="/team/Montreal%20Impact">Montreal Impact</a></td>
<td style="padding-right:5px;padding-left:5px">37.7</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>329. <a href="/team/Huracán">Huracán</a></td>
<td style="padding-right:5px;padding-left:5px">37.5</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>330. <a href="/team/Djurgardens%20IF">Djurgardens IF</a></td>
<td style="padding-right:5px;padding-left:5px">37.5</td>


	
	<td class="custom-align-1"><a href="/info2/SwedishAllsvenskan" target="_self">Allsvenskan</a>  <span title="Sweden"> 🇸🇪</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>331. <a href="/team/Pacos%20Ferreira">Pacos Ferreira</a></td>
<td style="padding-right:5px;padding-left:5px">37.5</td>


	
	<td class="custom-align-1"><a href="/info2/PortugueseLiga" target="_self">Primeira Liga</a>  <span title="Portugal"> 🇵🇹</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>332. <a href="/team/FC%20Juárez">FC Juárez</a></td>
<td style="padding-right:5px;padding-left:5px">37.4</td>


	
	<td class="custom-align-1"><a href="/info2/MexicanPrimeraDivisionTorneoClausura" target="_self">Liga MX</a>  <span title="Mexico"> 🇲🇽</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>333. <a href="/team/Eibar">Eibar</a></td>
<td style="padding-right:5px;padding-left:5px">37.2</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>334. <a href="/team/CA%20Independiente">CA Independiente</a></td>
<td style="padding-right:5px;padding-left:5px">37.2</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>335. <a href="/team/Viking%20FK">Viking FK</a></td>
<td style="padding-right:5px;padding-left:5px">37.2</td>


	
	<td class="custom-align-1"><a href="/info2/NorwegianTippeligaen" target="_self">Eliteserien</a>  <span title="Norway"> 🇳🇴</span>   </td>


	<td class="custom-align-2">1.5</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>336. <a href="/team/Colon%20Santa%20Fe">Colon Santa Fe</a></td>
<td style="padding-right:5px;padding-left:5px">37.1</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>337. <a href="/team/Barnsley">Barnsley</a></td>
<td style="padding-right:5px;padding-left:5px">37.0</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>338. <a href="/team/Sochi">Sochi</a></td>
<td style="padding-right:5px;padding-left:5px">36.9</td>


	
	<td class="custom-align-1"><a href="/info2/RussianPremierLiga" target="_self">Premier League</a>  <span title="Russia"> 🇷🇺</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>339. <a href="/team/Charlotte%20FC">Charlotte FC</a></td>
<td style="padding-right:5px;padding-left:5px">36.6</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>340. <a href="/team/Birmingham">Birmingham</a></td>
<td style="padding-right:5px;padding-left:5px">36.6</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>341. <a href="/team/Alanyaspor">Alanyaspor</a></td>
<td style="padding-right:5px;padding-left:5px">36.6</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>342. <a href="/team/Cardiff%20City">Cardiff City</a></td>
<td style="padding-right:5px;padding-left:5px">36.6</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>343. <a href="/team/WSG%20Swarovski%20Wattens">WSG Swarovski Wattens</a></td>
<td style="padding-right:5px;padding-left:5px">36.3</td>


	
	<td class="custom-align-1"><a href="/info2/AustrianT-MobileBundesliga" target="_self">Bundesliga</a>  <span title="Austria"> 🇦🇹</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.8</td>


</tr>
	
	    <tr>
	


<td>344. <a href="/team/Las%20Palmas">Las Palmas</a></td>
<td style="padding-right:5px;padding-left:5px">36.2</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>345. <a href="/team/Godoy%20Cruz">Godoy Cruz</a></td>
<td style="padding-right:5px;padding-left:5px">36.0</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>346. <a href="/team/Banfield">Banfield</a></td>
<td style="padding-right:5px;padding-left:5px">36.0</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>347. <a href="/team/Randers%20FC">Randers FC</a></td>
<td style="padding-right:5px;padding-left:5px">35.9</td>


	
	<td class="custom-align-1"><a href="/info2/DanishSAS-Ligaen" target="_self">Superliga</a>  <span title="Denmark"> 🇩🇰</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>348. <a href="/team/SpVgg%20Greuther%20Fürth">SpVgg Greuther Fürth</a></td>
<td style="padding-right:5px;padding-left:5px">35.9</td>


	
	<td class="custom-align-1"><a href="/info2/German2.Bundesliga" target="_self">2. Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>349. <a href="/team/Ankaragucu">Ankaragucu</a></td>
<td style="padding-right:5px;padding-left:5px">35.8</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>350. <a href="/team/Istanbulspor">Istanbulspor</a></td>
<td style="padding-right:5px;padding-left:5px">35.8</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>351. <a href="/team/Chicago%20Fire">Chicago Fire</a></td>
<td style="padding-right:5px;padding-left:5px">35.7</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>352. <a href="/team/Querétaro">Querétaro</a></td>
<td style="padding-right:5px;padding-left:5px">35.7</td>


	
	<td class="custom-align-1"><a href="/info2/MexicanPrimeraDivisionTorneoClausura" target="_self">Liga MX</a>  <span title="Mexico"> 🇲🇽</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>353. <a href="/team/Troyes">Troyes</a></td>
<td style="padding-right:5px;padding-left:5px">35.6</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue1" target="_self">Ligue 1</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>354. <a href="/team/Fakel%20Voronezh">Fakel Voronezh</a></td>
<td style="padding-right:5px;padding-left:5px">35.6</td>


	
	<td class="custom-align-1"><a href="/info2/RussianPremierLiga" target="_self">Premier League</a>  <span title="Russia"> 🇷🇺</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>355. <a href="/team/Wigan">Wigan</a></td>
<td style="padding-right:5px;padding-left:5px">35.4</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>356. <a href="/team/FC%20Groningen">FC Groningen</a></td>
<td style="padding-right:5px;padding-left:5px">35.4</td>


	
	<td class="custom-align-1"><a href="/info2/DutchEredivisie" target="_self">Eredivisie</a>  <span title="Netherlands"> 🇳🇱</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>357. <a href="/team/Excelsior">Excelsior</a></td>
<td style="padding-right:5px;padding-left:5px">35.4</td>


	
	<td class="custom-align-1"><a href="/info2/DutchEredivisie" target="_self">Eredivisie</a>  <span title="Netherlands"> 🇳🇱</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>358. <a href="/team/Austria%20Lustenau">Austria Lustenau</a></td>
<td style="padding-right:5px;padding-left:5px">35.3</td>


	
	<td class="custom-align-1"><a href="/info2/AustrianT-MobileBundesliga" target="_self">Bundesliga</a>  <span title="Austria"> 🇦🇹</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>359. <a href="/team/Austin%20FC">Austin FC</a></td>
<td style="padding-right:5px;padding-left:5px">35.3</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>360. <a href="/team/Como">Como</a></td>
<td style="padding-right:5px;padding-left:5px">35.2</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>361. <a href="/team/Sochaux">Sochaux</a></td>
<td style="padding-right:5px;padding-left:5px">35.0</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>362. <a href="/team/Houston%20Dynamo">Houston Dynamo</a></td>
<td style="padding-right:5px;padding-left:5px">34.9</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>363. <a href="/team/Huddersfield%20Town">Huddersfield Town</a></td>
<td style="padding-right:5px;padding-left:5px">34.9</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>364. <a href="/team/Emmen">Emmen</a></td>
<td style="padding-right:5px;padding-left:5px">34.8</td>


	
	<td class="custom-align-1"><a href="/info2/DutchEredivisie" target="_self">Eredivisie</a>  <span title="Netherlands"> 🇳🇱</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>365. <a href="/team/Grasshoppers%20Zürich">Grasshoppers Zürich</a></td>
<td style="padding-right:5px;padding-left:5px">34.7</td>


	
	<td class="custom-align-1"><a href="/info2/SwissRaiffeisenSuperLeague" target="_self">Super League</a>  <span title="Switzerland"> 🇨🇭</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>366. <a href="/team/Valerenga">Valerenga</a></td>
<td style="padding-right:5px;padding-left:5px">34.7</td>


	
	<td class="custom-align-1"><a href="/info2/NorwegianTippeligaen" target="_self">Eliteserien</a>  <span title="Norway"> 🇳🇴</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>367. <a href="/team/FK%20Nizhny%20Novgorod">FK Nizhny Novgorod</a></td>
<td style="padding-right:5px;padding-left:5px">34.5</td>


	
	<td class="custom-align-1"><a href="/info2/RussianPremierLiga" target="_self">Premier League</a>  <span title="Russia"> 🇷🇺</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>368. <a href="/team/SK%20Austria%20Klagenfurt">SK Austria Klagenfurt</a></td>
<td style="padding-right:5px;padding-left:5px">34.2</td>


	
	<td class="custom-align-1"><a href="/info2/AustrianT-MobileBundesliga" target="_self">Bundesliga</a>  <span title="Austria"> 🇦🇹</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>369. <a href="/team/Colorado%20Rapids">Colorado Rapids</a></td>
<td style="padding-right:5px;padding-left:5px">34.2</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>370. <a href="/team/Queens%20Park%20Rangers">Queens Park Rangers</a></td>
<td style="padding-right:5px;padding-left:5px">34.2</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>371. <a href="/team/Hammarby">Hammarby</a></td>
<td style="padding-right:5px;padding-left:5px">34.2</td>


	
	<td class="custom-align-1"><a href="/info2/SwedishAllsvenskan" target="_self">Allsvenskan</a>  <span title="Sweden"> 🇸🇪</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>372. <a href="/team/Holstein%20Kiel">Holstein Kiel</a></td>
<td style="padding-right:5px;padding-left:5px">34.1</td>


	
	<td class="custom-align-1"><a href="/info2/German2.Bundesliga" target="_self">2. Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>373. <a href="/team/SV%20Darmstadt%2098">SV Darmstadt 98</a></td>
<td style="padding-right:5px;padding-left:5px">34.1</td>


	
	<td class="custom-align-1"><a href="/info2/German2.Bundesliga" target="_self">2. Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>374. <a href="/team/Real%20Salt%20Lake">Real Salt Lake</a></td>
<td style="padding-right:5px;padding-left:5px">34.0</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>375. <a href="/team/Mazatlán%20FC">Mazatlán FC</a></td>
<td style="padding-right:5px;padding-left:5px">33.9</td>


	
	<td class="custom-align-1"><a href="/info2/MexicanPrimeraDivisionTorneoClausura" target="_self">Liga MX</a>  <span title="Mexico"> 🇲🇽</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>376. <a href="/team/Instituto">Instituto</a></td>
<td style="padding-right:5px;padding-left:5px">33.9</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>377. <a href="/team/Atlético%20Tucumán">Atlético Tucumán</a></td>
<td style="padding-right:5px;padding-left:5px">33.8</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>378. <a href="/team/Melbourne%20City">Melbourne City</a></td>
<td style="padding-right:5px;padding-left:5px">33.7</td>


	
	<td class="custom-align-1"><a href="/info2/AustralianA-League" target="_self">A-League</a>  <span title="Australia"> 🇦🇺</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>379. <a href="/team/Leganes">Leganes</a></td>
<td style="padding-right:5px;padding-left:5px">33.6</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>380. <a href="/team/FC%20Tokyo">FC Tokyo</a></td>
<td style="padding-right:5px;padding-left:5px">33.5</td>


	
	<td class="custom-align-1"><a href="/info2/JapaneseJLeague" target="_self">J1 League</a>  <span title="Japan"> 🇯🇵</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>381. <a href="/team/Sarmiento">Sarmiento</a></td>
<td style="padding-right:5px;padding-left:5px">33.4</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>382. <a href="/team/Platense">Platense</a></td>
<td style="padding-right:5px;padding-left:5px">33.3</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>383. <a href="/team/Hartberg">Hartberg</a></td>
<td style="padding-right:5px;padding-left:5px">33.3</td>


	
	<td class="custom-align-1"><a href="/info2/AustrianT-MobileBundesliga" target="_self">Bundesliga</a>  <span title="Austria"> 🇦🇹</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>384. <a href="/team/Pisa">Pisa</a></td>
<td style="padding-right:5px;padding-left:5px">33.2</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>385. <a href="/team/Belgrano%20Cordoba">Belgrano Cordoba</a></td>
<td style="padding-right:5px;padding-left:5px">33.2</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>386. <a href="/team/Cambuur%20Leeuwarden">Cambuur Leeuwarden</a></td>
<td style="padding-right:5px;padding-left:5px">33.2</td>


	
	<td class="custom-align-1"><a href="/info2/DutchEredivisie" target="_self">Eredivisie</a>  <span title="Netherlands"> 🇳🇱</span>   </td>


	<td class="custom-align-2">1.2</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>387. <a href="/team/Rotherham%20United">Rotherham United</a></td>
<td style="padding-right:5px;padding-left:5px">33.1</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>388. <a href="/team/Gimnasia%20La%20Plata">Gimnasia La Plata</a></td>
<td style="padding-right:5px;padding-left:5px">32.9</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>389. <a href="/team/Sudtirol">Sudtirol</a></td>
<td style="padding-right:5px;padding-left:5px">32.8</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">1.1</td>


</tr>

	
	    <tr>
	


<td>390. <a href="/team/St.%20Louis%20CITY%20SC">St. Louis CITY SC</a></td>
<td style="padding-right:5px;padding-left:5px">32.7</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>391. <a href="/team/Sagan%20Tosu">Sagan Tosu</a></td>
<td style="padding-right:5px;padding-left:5px">32.5</td>


	
	<td class="custom-align-1"><a href="/info2/JapaneseJLeague" target="_self">J1 League</a>  <span title="Japan"> 🇯🇵</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>392. <a href="/team/Bolton">Bolton</a></td>
<td style="padding-right:5px;padding-left:5px">32.5</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>393. <a href="/team/Real%20Oviedo">Real Oviedo</a></td>
<td style="padding-right:5px;padding-left:5px">32.5</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>394. <a href="/team/Sarpsborg">Sarpsborg</a></td>
<td style="padding-right:5px;padding-left:5px">32.3</td>


	
	<td class="custom-align-1"><a href="/info2/NorwegianTippeligaen" target="_self">Eliteserien</a>  <span title="Norway"> 🇳🇴</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>395. <a href="/team/Tromso">Tromso</a></td>
<td style="padding-right:5px;padding-left:5px">32.3</td>


	
	<td class="custom-align-1"><a href="/info2/NorwegianTippeligaen" target="_self">Eliteserien</a>  <span title="Norway"> 🇳🇴</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>396. <a href="/team/Umraniyespor">Umraniyespor</a></td>
<td style="padding-right:5px;padding-left:5px">32.3</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>397. <a href="/team/Palermo">Palermo</a></td>
<td style="padding-right:5px;padding-left:5px">32.2</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>398. <a href="/team/AaB">AaB</a></td>
<td style="padding-right:5px;padding-left:5px">32.2</td>


	
	<td class="custom-align-1"><a href="/info2/DanishSAS-Ligaen" target="_self">Superliga</a>  <span title="Denmark"> 🇩🇰</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>399. <a href="/team/Villarreal%20B">Villarreal B</a></td>
<td style="padding-right:5px;padding-left:5px">32.1</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>400. <a href="/team/Giresunspor">Giresunspor</a></td>
<td style="padding-right:5px;padding-left:5px">32.1</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>401. <a href="/team/1.%20FC%20Kaiserslautern">1. FC Kaiserslautern</a></td>
<td style="padding-right:5px;padding-left:5px">31.7</td>


	
	<td class="custom-align-1"><a href="/info2/German2.Bundesliga" target="_self">2. Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>402. <a href="/team/Málaga">Málaga</a></td>
<td style="padding-right:5px;padding-left:5px">31.6</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.3</td>


</tr>

	
	    <tr>
	


<td>403. <a href="/team/Blackpool">Blackpool</a></td>
<td style="padding-right:5px;padding-left:5px">31.6</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>404. <a href="/team/Plymouth%20Argyle">Plymouth Argyle</a></td>
<td style="padding-right:5px;padding-left:5px">31.5</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>405. <a href="/team/Racing%20Santander">Racing Santander</a></td>
<td style="padding-right:5px;padding-left:5px">31.2</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>406. <a href="/team/Dijon%20FCO">Dijon FCO</a></td>
<td style="padding-right:5px;padding-left:5px">31.1</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>407. <a href="/team/Central%20Córdoba%20Santiago%20del%20Estero">Central Córdoba Santiago del Estero</a></td>
<td style="padding-right:5px;padding-left:5px">31.1</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>408. <a href="/team/Barracas%20Central">Barracas Central</a></td>
<td style="padding-right:5px;padding-left:5px">31.0</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>409. <a href="/team/St%20Mirren">St Mirren</a></td>
<td style="padding-right:5px;padding-left:5px">31.0</td>


	
	<td class="custom-align-1"><a href="/info2/ScottishPremiership" target="_self">Premiership</a>  <span title="Scotland"> 🏴󠁧󠁢󠁳󠁣󠁴󠁿</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>410. <a href="/team/Central%20Coast%20Mariners">Central Coast Mariners</a></td>
<td style="padding-right:5px;padding-left:5px">30.8</td>


	
	<td class="custom-align-1"><a href="/info2/AustralianA-League" target="_self">A-League</a>  <span title="Australia"> 🇦🇺</span>   </td>


	<td class="custom-align-2">1.3</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>411. <a href="/team/Union%20Santa%20Fe">Union Santa Fe</a></td>
<td style="padding-right:5px;padding-left:5px">30.8</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>412. <a href="/team/Peterborough%20United">Peterborough United</a></td>
<td style="padding-right:5px;padding-left:5px">30.8</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>413. <a href="/team/IFK%20Norrkoping">IFK Norrkoping</a></td>
<td style="padding-right:5px;padding-left:5px">30.7</td>


	
	<td class="custom-align-1"><a href="/info2/SwedishAllsvenskan" target="_self">Allsvenskan</a>  <span title="Sweden"> 🇸🇪</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>414. <a href="/team/Derby%20County">Derby County</a></td>
<td style="padding-right:5px;padding-left:5px">30.6</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>415. <a href="/team/FC%20Cartagena">FC Cartagena</a></td>
<td style="padding-right:5px;padding-left:5px">30.6</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>416. <a href="/team/FC%20Vaduz">FC Vaduz</a></td>
<td style="padding-right:5px;padding-left:5px">30.6</td>


	
	<td class="custom-align-1"><a href="/info2/SwissRaiffeisenSuperLeague" target="_self">Super League</a>  <span title="Switzerland"> 🇨🇭</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>417. <a href="/team/Sporting%20Gijón">Sporting Gijón</a></td>
<td style="padding-right:5px;padding-left:5px">30.5</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>418. <a href="/team/KV%20Kortrijk">KV Kortrijk</a></td>
<td style="padding-right:5px;padding-left:5px">30.4</td>


	
	<td class="custom-align-1"><a href="/info2/BelgianJupilerLeague" target="_self">First Division A</a>  <span title="Belgium"> 🇧🇪</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>419. <a href="/team/Inter%20Miami%20CF">Inter Miami CF</a></td>
<td style="padding-right:5px;padding-left:5px">30.3</td>


	
	<td class="custom-align-1"><a href="/info2/MajorLeagueSoccer" target="_self">MLS</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>420. <a href="/team/Kalmar%20FF">Kalmar FF</a></td>
<td style="padding-right:5px;padding-left:5px">30.2</td>


	
	<td class="custom-align-1"><a href="/info2/SwedishAllsvenskan" target="_self">Allsvenskan</a>  <span title="Sweden"> 🇸🇪</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>421. <a href="/team/Reading">Reading</a></td>
<td style="padding-right:5px;padding-left:5px">29.9</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueChampionship" target="_self">Championship</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>422. <a href="/team/US%20Quevilly">US Quevilly</a></td>
<td style="padding-right:5px;padding-left:5px">29.8</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>423. <a href="/team/Ascoli">Ascoli</a></td>
<td style="padding-right:5px;padding-left:5px">29.6</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>424. <a href="/team/SD%20Huesca">SD Huesca</a></td>
<td style="padding-right:5px;padding-left:5px">29.4</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>425. <a href="/team/Odd%20BK">Odd BK</a></td>
<td style="padding-right:5px;padding-left:5px">29.4</td>


	
	<td class="custom-align-1"><a href="/info2/NorwegianTippeligaen" target="_self">Eliteserien</a>  <span title="Norway"> 🇳🇴</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>426. <a href="/team/Kilmarnock">Kilmarnock</a></td>
<td style="padding-right:5px;padding-left:5px">29.3</td>


	
	<td class="custom-align-1"><a href="/info2/ScottishPremiership" target="_self">Premiership</a>  <span title="Scotland"> 🏴󠁧󠁢󠁳󠁣󠁴󠁿</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>427. <a href="/team/St%20Johnstone">St Johnstone</a></td>
<td style="padding-right:5px;padding-left:5px">29.2</td>


	
	<td class="custom-align-1"><a href="/info2/ScottishPremiership" target="_self">Premiership</a>  <span title="Scotland"> 🏴󠁧󠁢󠁳󠁣󠁴󠁿</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>428. <a href="/team/OFI%20Crete">OFI Crete</a></td>
<td style="padding-right:5px;padding-left:5px">29.2</td>


	
	<td class="custom-align-1"><a href="/info2/GreekSuperLeague" target="_self">Super League</a>  <span title="Greece"> 🇬🇷</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>429. <a href="/team/Mirandes">Mirandes</a></td>
<td style="padding-right:5px;padding-left:5px">29.2</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>430. <a href="/team/Valenciennes">Valenciennes</a></td>
<td style="padding-right:5px;padding-left:5px">29.1</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>431. <a href="/team/Arminia%20Bielefeld">Arminia Bielefeld</a></td>
<td style="padding-right:5px;padding-left:5px">29.0</td>


	
	<td class="custom-align-1"><a href="/info2/German2.Bundesliga" target="_self">2. Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>432. <a href="/team/1.%20FC%20Magdeburg">1. FC Magdeburg</a></td>
<td style="padding-right:5px;padding-left:5px">28.9</td>


	
	<td class="custom-align-1"><a href="/info2/German2.Bundesliga" target="_self">2. Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>433. <a href="/team/Modena">Modena</a></td>
<td style="padding-right:5px;padding-left:5px">28.8</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>434. <a href="/team/Reggina">Reggina</a></td>
<td style="padding-right:5px;padding-left:5px">28.6</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>435. <a href="/team/Rodez">Rodez</a></td>
<td style="padding-right:5px;padding-left:5px">28.5</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>436. <a href="/team/Grenoble">Grenoble</a></td>
<td style="padding-right:5px;padding-left:5px">28.3</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">1.2</td>


</tr>

	
	    <tr>
	


<td>437. <a href="/team/Lyngby">Lyngby</a></td>
<td style="padding-right:5px;padding-left:5px">28.3</td>


	
	<td class="custom-align-1"><a href="/info2/DanishSAS-Ligaen" target="_self">Superliga</a>  <span title="Denmark"> 🇩🇰</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>438. <a href="/team/Guangzhou%20Evergrande">Guangzhou Evergrande</a></td>
<td style="padding-right:5px;padding-left:5px">28.2</td>


	
	<td class="custom-align-1"><a href="/info2/ChineseSuperLeague" target="_self">CSL</a>  <span title="China"> 🇨🇳</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>439. <a href="/team/Portsmouth">Portsmouth</a></td>
<td style="padding-right:5px;padding-left:5px">28.1</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>440. <a href="/team/SV%20Zulte%20Waregem">SV Zulte Waregem</a></td>
<td style="padding-right:5px;padding-left:5px">28.0</td>


	
	<td class="custom-align-1"><a href="/info2/BelgianJupilerLeague" target="_self">First Division A</a>  <span title="Belgium"> 🇧🇪</span>   </td>


	<td class="custom-align-2">1.4</td>
	<td class="custom-align-2">2.3</td>


</tr>

	
	    <tr>
	


<td>441. <a href="/team/Pau">Pau</a></td>
<td style="padding-right:5px;padding-left:5px">27.5</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.8</td>


</tr>
	
	    <tr>
	


<td>442. <a href="/team/Cittadella">Cittadella</a></td>
<td style="padding-right:5px;padding-left:5px">27.5</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>443. <a href="/team/Avispa%20Fukuoka">Avispa Fukuoka</a></td>
<td style="padding-right:5px;padding-left:5px">27.3</td>


	
	<td class="custom-align-1"><a href="/info2/JapaneseJLeague" target="_self">J1 League</a>  <span title="Japan"> 🇯🇵</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>444. <a href="/team/Hannover%2096">Hannover 96</a></td>
<td style="padding-right:5px;padding-left:5px">27.1</td>


	
	<td class="custom-align-1"><a href="/info2/German2.Bundesliga" target="_self">2. Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>445. <a href="/team/Kashiwa%20Reysol">Kashiwa Reysol</a></td>
<td style="padding-right:5px;padding-left:5px">27.1</td>


	
	<td class="custom-align-1"><a href="/info2/JapaneseJLeague" target="_self">J1 League</a>  <span title="Japan"> 🇯🇵</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>446. <a href="/team/Ross%20County">Ross County</a></td>
<td style="padding-right:5px;padding-left:5px">27.1</td>


	
	<td class="custom-align-1"><a href="/info2/ScottishPremiership" target="_self">Premiership</a>  <span title="Scotland"> 🏴󠁧󠁢󠁳󠁣󠁴󠁿</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>447. <a href="/team/Amiens">Amiens</a></td>
<td style="padding-right:5px;padding-left:5px">27.1</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>448. <a href="/team/Orlando%20Pirates">Orlando Pirates</a></td>
<td style="padding-right:5px;padding-left:5px">27.0</td>


	
	<td class="custom-align-1"><a href="/info2/SouthAfricanABSAPremierLeague" target="_self">Premier Division</a>  <span title="South Africa"> 🇿🇦</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>449. <a href="/team/Spal">Spal</a></td>
<td style="padding-right:5px;padding-left:5px">27.0</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>450. <a href="/team/SD%20Ponferradina">SD Ponferradina</a></td>
<td style="padding-right:5px;padding-left:5px">27.0</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>451. <a href="/team/Perugia">Perugia</a></td>
<td style="padding-right:5px;padding-left:5px">26.9</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>452. <a href="/team/Nimes">Nimes</a></td>
<td style="padding-right:5px;padding-left:5px">26.8</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>453. <a href="/team/Atromitos">Atromitos</a></td>
<td style="padding-right:5px;padding-left:5px">26.7</td>


	
	<td class="custom-align-1"><a href="/info2/GreekSuperLeague" target="_self">Super League</a>  <span title="Greece"> 🇬🇷</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>454. <a href="/team/Arsenal%20Sarandi">Arsenal Sarandi</a></td>
<td style="padding-right:5px;padding-left:5px">26.7</td>


	
	<td class="custom-align-1"><a href="/info2/ArgentinaPrimeraDivision" target="_self">Primera Divison</a>  <span title="Argentina"> 🇦🇷</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>455. <a href="/team/Stromsgodset">Stromsgodset</a></td>
<td style="padding-right:5px;padding-left:5px">26.7</td>


	
	<td class="custom-align-1"><a href="/info2/NorwegianTippeligaen" target="_self">Eliteserien</a>  <span title="Norway"> 🇳🇴</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>456. <a href="/team/San%20Antonio%20FC">San Antonio FC</a></td>
<td style="padding-right:5px;padding-left:5px">26.5</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>457. <a href="/team/Kyoto%20Purple%20Sanga">Kyoto Purple Sanga</a></td>
<td style="padding-right:5px;padding-left:5px">26.4</td>


	
	<td class="custom-align-1"><a href="/info2/JapaneseJLeague" target="_self">J1 League</a>  <span title="Japan"> 🇯🇵</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>458. <a href="/team/Burgos">Burgos</a></td>
<td style="padding-right:5px;padding-left:5px">26.4</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>459. <a href="/team/Gamba%20Osaka">Gamba Osaka</a></td>
<td style="padding-right:5px;padding-left:5px">26.4</td>


	
	<td class="custom-align-1"><a href="/info2/JapaneseJLeague" target="_self">J1 League</a>  <span title="Japan"> 🇯🇵</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>460. <a href="/team/AIK">AIK</a></td>
<td style="padding-right:5px;padding-left:5px">26.4</td>


	
	<td class="custom-align-1"><a href="/info2/SwedishAllsvenskan" target="_self">Allsvenskan</a>  <span title="Sweden"> 🇸🇪</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>461. <a href="/team/Stabaek">Stabaek</a></td>
<td style="padding-right:5px;padding-left:5px">26.3</td>


	
	<td class="custom-align-1"><a href="/info2/NorwegianTippeligaen" target="_self">Eliteserien</a>  <span title="Norway"> 🇳🇴</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>462. <a href="/team/Livingston">Livingston</a></td>
<td style="padding-right:5px;padding-left:5px">26.1</td>


	
	<td class="custom-align-1"><a href="/info2/ScottishPremiership" target="_self">Premiership</a>  <span title="Scotland"> 🏴󠁧󠁢󠁳󠁣󠁴󠁿</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>463. <a href="/team/Cashpoint%20SC%20Rheindorf%20Altach">Cashpoint SC Rheindorf Altach</a></td>
<td style="padding-right:5px;padding-left:5px">26.1</td>


	
	<td class="custom-align-1"><a href="/info2/AustrianT-MobileBundesliga" target="_self">Bundesliga</a>  <span title="Austria"> 🇦🇹</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>464. <a href="/team/Sydney%20FC">Sydney FC</a></td>
<td style="padding-right:5px;padding-left:5px">26.0</td>


	
	<td class="custom-align-1"><a href="/info2/AustralianA-League" target="_self">A-League</a>  <span title="Australia"> 🇦🇺</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>465. <a href="/team/Ternana">Ternana</a></td>
<td style="padding-right:5px;padding-left:5px">25.8</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>466. <a href="/team/Charlton%20Athletic">Charlton Athletic</a></td>
<td style="padding-right:5px;padding-left:5px">25.7</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>467. <a href="/team/SV%20Ried">SV Ried</a></td>
<td style="padding-right:5px;padding-left:5px">25.4</td>


	
	<td class="custom-align-1"><a href="/info2/AustrianT-MobileBundesliga" target="_self">Bundesliga</a>  <span title="Austria"> 🇦🇹</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>468. <a href="/team/Western%20Sydney%20FC">Western Sydney FC</a></td>
<td style="padding-right:5px;padding-left:5px">25.4</td>


	
	<td class="custom-align-1"><a href="/info2/AustralianA-League" target="_self">A-League</a>  <span title="Australia"> 🇦🇺</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>469. <a href="/team/Shonan%20Bellmare">Shonan Bellmare</a></td>
<td style="padding-right:5px;padding-left:5px">25.3</td>


	
	<td class="custom-align-1"><a href="/info2/JapaneseJLeague" target="_self">J1 League</a>  <span title="Japan"> 🇯🇵</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>470. <a href="/team/Laval">Laval</a></td>
<td style="padding-right:5px;padding-left:5px">25.3</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>471. <a href="/team/Benevento">Benevento</a></td>
<td style="padding-right:5px;padding-left:5px">25.0</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>472. <a href="/team/Beijing%20Guoan">Beijing Guoan</a></td>
<td style="padding-right:5px;padding-left:5px">25.0</td>


	
	<td class="custom-align-1"><a href="/info2/ChineseSuperLeague" target="_self">CSL</a>  <span title="China"> 🇨🇳</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>473. <a href="/team/1.%20FC%20Nürnberg">1. FC Nürnberg</a></td>
<td style="padding-right:5px;padding-left:5px">24.9</td>


	
	<td class="custom-align-1"><a href="/info2/German2.Bundesliga" target="_self">2. Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>474. <a href="/team/Louisville%20City%20FC">Louisville City FC</a></td>
<td style="padding-right:5px;padding-left:5px">24.9</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>475. <a href="/team/Dundee%20Utd">Dundee Utd</a></td>
<td style="padding-right:5px;padding-left:5px">24.7</td>


	
	<td class="custom-align-1"><a href="/info2/ScottishPremiership" target="_self">Premiership</a>  <span title="Scotland"> 🏴󠁧󠁢󠁳󠁣󠁴󠁿</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>476. <a href="/team/Wycombe%20Wanderers">Wycombe Wanderers</a></td>
<td style="padding-right:5px;padding-left:5px">24.5</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>477. <a href="/team/Haugesund">Haugesund</a></td>
<td style="padding-right:5px;padding-left:5px">24.4</td>


	
	<td class="custom-align-1"><a href="/info2/NorwegianTippeligaen" target="_self">Eliteserien</a>  <span title="Norway"> 🇳🇴</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>478. <a href="/team/Annecy">Annecy</a></td>
<td style="padding-right:5px;padding-left:5px">24.4</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>479. <a href="/team/Shanghai%20SIPG">Shanghai SIPG</a></td>
<td style="padding-right:5px;padding-left:5px">24.3</td>


	
	<td class="custom-align-1"><a href="/info2/ChineseSuperLeague" target="_self">CSL</a>  <span title="China"> 🇨🇳</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>480. <a href="/team/Jahn%20Regensburg">Jahn Regensburg</a></td>
<td style="padding-right:5px;padding-left:5px">24.1</td>


	
	<td class="custom-align-1"><a href="/info2/German2.Bundesliga" target="_self">2. Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>481. <a href="/team/San%20Diego%20Loyal%20SC">San Diego Loyal SC</a></td>
<td style="padding-right:5px;padding-left:5px">24.1</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>482. <a href="/team/Tampa%20Bay%20Rowdies">Tampa Bay Rowdies</a></td>
<td style="padding-right:5px;padding-left:5px">24.1</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>483. <a href="/team/IFK%20Goteborg">IFK Goteborg</a></td>
<td style="padding-right:5px;padding-left:5px">23.8</td>


	
	<td class="custom-align-1"><a href="/info2/SwedishAllsvenskan" target="_self">Allsvenskan</a>  <span title="Sweden"> 🇸🇪</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>484. <a href="/team/UD%20Ibiza">UD Ibiza</a></td>
<td style="padding-right:5px;padding-left:5px">23.6</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>485. <a href="/team/Fleetwood%20Town">Fleetwood Town</a></td>
<td style="padding-right:5px;padding-left:5px">23.5</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>486. <a href="/team/Hansa%20Rostock">Hansa Rostock</a></td>
<td style="padding-right:5px;padding-left:5px">23.4</td>


	
	<td class="custom-align-1"><a href="/info2/German2.Bundesliga" target="_self">2. Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>487. <a href="/team/Sacramento%20Republic%20FC">Sacramento Republic FC</a></td>
<td style="padding-right:5px;padding-left:5px">23.4</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>488. <a href="/team/FC%20Khimki">FC Khimki</a></td>
<td style="padding-right:5px;padding-left:5px">23.3</td>


	
	<td class="custom-align-1"><a href="/info2/RussianPremierLiga" target="_self">Premier League</a>  <span title="Russia"> 🇷🇺</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>489. <a href="/team/KV%20Oostende">KV Oostende</a></td>
<td style="padding-right:5px;padding-left:5px">23.2</td>


	
	<td class="custom-align-1"><a href="/info2/BelgianJupilerLeague" target="_self">First Division A</a>  <span title="Belgium"> 🇧🇪</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">2.2</td>


</tr>

	
	    <tr>
	


<td>490. <a href="/team/Winterthur">Winterthur</a></td>
<td style="padding-right:5px;padding-left:5px">23.1</td>


	
	<td class="custom-align-1"><a href="/info2/SwissRaiffeisenSuperLeague" target="_self">Super League</a>  <span title="Switzerland"> 🇨🇭</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.9</td>


</tr>
	
	    <tr>
	


<td>491. <a href="/team/Brescia">Brescia</a></td>
<td style="padding-right:5px;padding-left:5px">23.1</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>492. <a href="/team/Giannina">Giannina</a></td>
<td style="padding-right:5px;padding-left:5px">23.0</td>


	
	<td class="custom-align-1"><a href="/info2/GreekSuperLeague" target="_self">Super League</a>  <span title="Greece"> 🇬🇷</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">1.7</td>


</tr>

	
	    <tr>
	


<td>493. <a href="/team/AC%20Horsens">AC Horsens</a></td>
<td style="padding-right:5px;padding-left:5px">22.9</td>


	
	<td class="custom-align-1"><a href="/info2/DanishSAS-Ligaen" target="_self">Superliga</a>  <span title="Denmark"> 🇩🇰</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>494. <a href="/team/Arizona%20United">Arizona United</a></td>
<td style="padding-right:5px;padding-left:5px">22.8</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>495. <a href="/team/Memphis%20901%20FC">Memphis 901 FC</a></td>
<td style="padding-right:5px;padding-left:5px">22.8</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">2.1</td>


</tr>

	
	    <tr>
	


<td>496. <a href="/team/Lincoln%20City">Lincoln City</a></td>
<td style="padding-right:5px;padding-left:5px">22.5</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>497. <a href="/team/Eintracht%20Braunschweig">Eintracht Braunschweig</a></td>
<td style="padding-right:5px;padding-left:5px">22.4</td>


	
	<td class="custom-align-1"><a href="/info2/German2.Bundesliga" target="_self">2. Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>498. <a href="/team/Adelaide%20United">Adelaide United</a></td>
<td style="padding-right:5px;padding-left:5px">22.2</td>


	
	<td class="custom-align-1"><a href="/info2/AustralianA-League" target="_self">A-League</a>  <span title="Australia"> 🇦🇺</span>   </td>


	<td class="custom-align-2">1.1</td>
	<td class="custom-align-2">2.3</td>


</tr>

	
	    <tr>
	


<td>499. <a href="/team/Albirex%20Niigata">Albirex Niigata</a></td>
<td style="padding-right:5px;padding-left:5px">22.2</td>


	
	<td class="custom-align-1"><a href="/info2/JapaneseJLeague" target="_self">J1 League</a>  <span title="Japan"> 🇯🇵</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>500. <a href="/team/Eupen">Eupen</a></td>
<td style="padding-right:5px;padding-left:5px">22.2</td>


	
	<td class="custom-align-1"><a href="/info2/BelgianJupilerLeague" target="_self">First Division A</a>  <span title="Belgium"> 🇧🇪</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">2.2</td>


</tr>

	
	    <tr>
	


<td>501. <a href="/team/Exeter%20City">Exeter City</a></td>
<td style="padding-right:5px;padding-left:5px">22.1</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>502. <a href="/team/Asteras%20Tripolis">Asteras Tripolis</a></td>
<td style="padding-right:5px;padding-left:5px">22.0</td>


	
	<td class="custom-align-1"><a href="/info2/GreekSuperLeague" target="_self">Super League</a>  <span title="Greece"> 🇬🇷</span>   </td>


	<td class="custom-align-2">0.5</td>
	<td class="custom-align-2">1.4</td>


</tr>

	
	    <tr>
	


<td>503. <a href="/team/Sandefjord">Sandefjord</a></td>
<td style="padding-right:5px;padding-left:5px">21.8</td>


	
	<td class="custom-align-1"><a href="/info2/NorwegianTippeligaen" target="_self">Eliteserien</a>  <span title="Norway"> 🇳🇴</span>   </td>


	<td class="custom-align-2">0.9</td>
	<td class="custom-align-2">2.1</td>


</tr>

	
	    <tr>
	


<td>504. <a href="/team/Melbourne%20Victory">Melbourne Victory</a></td>
<td style="padding-right:5px;padding-left:5px">21.6</td>


	
	<td class="custom-align-1"><a href="/info2/AustralianA-League" target="_self">A-League</a>  <span title="Australia"> 🇦🇺</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>505. <a href="/team/FC%20Sion">FC Sion</a></td>
<td style="padding-right:5px;padding-left:5px">21.6</td>


	
	<td class="custom-align-1"><a href="/info2/SwissRaiffeisenSuperLeague" target="_self">Super League</a>  <span title="Switzerland"> 🇨🇭</span>   </td>


	<td class="custom-align-2">1.0</td>
	<td class="custom-align-2">2.2</td>


</tr>

	
	    <tr>
	


<td>506. <a href="/team/IK%20Sirius">IK Sirius</a></td>
<td style="padding-right:5px;padding-left:5px">21.4</td>


	
	<td class="custom-align-1"><a href="/info2/SwedishAllsvenskan" target="_self">Allsvenskan</a>  <span title="Sweden"> 🇸🇪</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>507. <a href="/team/Colorado%20Springs%20Switchbacks%20FC">Colorado Springs Switchbacks FC</a></td>
<td style="padding-right:5px;padding-left:5px">21.4</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>508. <a href="/team/Torpedo%20Moskow">Torpedo Moskow</a></td>
<td style="padding-right:5px;padding-left:5px">21.0</td>


	
	<td class="custom-align-1"><a href="/info2/RussianPremierLiga" target="_self">Premier League</a>  <span title="Russia"> 🇷🇺</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>509. <a href="/team/Lugo">Lugo</a></td>
<td style="padding-right:5px;padding-left:5px">20.8</td>


	
	<td class="custom-align-1"><a href="/info2/SpanishSegundaDivision" target="_self">LaLiga 2</a>  <span title="Spain"> 🇪🇸</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>510. <a href="/team/Cosenza">Cosenza</a></td>
<td style="padding-right:5px;padding-left:5px">20.7</td>


	
	<td class="custom-align-1"><a href="/info2/ItalySerieB" target="_self">Serie B</a>  <span title="Italy"> 🇮🇹</span>   </td>


	<td class="custom-align-2">0.5</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>511. <a href="/team/Mjallby">Mjallby</a></td>
<td style="padding-right:5px;padding-left:5px">20.5</td>


	
	<td class="custom-align-1"><a href="/info2/SwedishAllsvenskan" target="_self">Allsvenskan</a>  <span title="Sweden"> 🇸🇪</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>512. <a href="/team/Oxford%20United">Oxford United</a></td>
<td style="padding-right:5px;padding-left:5px">20.4</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>513. <a href="/team/Black%20Aces">Black Aces</a></td>
<td style="padding-right:5px;padding-left:5px">20.2</td>


	
	<td class="custom-align-1"><a href="/info2/SouthAfricanABSAPremierLeague" target="_self">Premier Division</a>  <span title="South Africa"> 🇿🇦</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>514. <a href="/team/RFC%20Seraing">RFC Seraing</a></td>
<td style="padding-right:5px;padding-left:5px">20.1</td>


	
	<td class="custom-align-1"><a href="/info2/BelgianJupilerLeague" target="_self">First Division A</a>  <span title="Belgium"> 🇧🇪</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>515. <a href="/team/Oakland%20Roots">Oakland Roots</a></td>
<td style="padding-right:5px;padding-left:5px">20.0</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>516. <a href="/team/Brommapojkarna">Brommapojkarna</a></td>
<td style="padding-right:5px;padding-left:5px">19.9</td>


	
	<td class="custom-align-1"><a href="/info2/SwedishAllsvenskan" target="_self">Allsvenskan</a>  <span title="Sweden"> 🇸🇪</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>517. <a href="/team/Stellenbosch%20FC">Stellenbosch FC</a></td>
<td style="padding-right:5px;padding-left:5px">19.6</td>


	
	<td class="custom-align-1"><a href="/info2/SouthAfricanABSAPremierLeague" target="_self">Premier Division</a>  <span title="South Africa"> 🇿🇦</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>518. <a href="/team/Volos%20NFC">Volos NFC</a></td>
<td style="padding-right:5px;padding-left:5px">19.4</td>


	
	<td class="custom-align-1"><a href="/info2/GreekSuperLeague" target="_self">Super League</a>  <span title="Greece"> 🇬🇷</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>519. <a href="/team/Burton%20Albion">Burton Albion</a></td>
<td style="padding-right:5px;padding-left:5px">19.3</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>520. <a href="/team/Aalesund">Aalesund</a></td>
<td style="padding-right:5px;padding-left:5px">19.1</td>


	
	<td class="custom-align-1"><a href="/info2/NorwegianTippeligaen" target="_self">Eliteserien</a>  <span title="Norway"> 🇳🇴</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>521. <a href="/team/El%20Paso%20Locomotive%20FC">El Paso Locomotive FC</a></td>
<td style="padding-right:5px;padding-left:5px">19.1</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>522. <a href="/team/Niort">Niort</a></td>
<td style="padding-right:5px;padding-left:5px">19.0</td>


	
	<td class="custom-align-1"><a href="/info2/FrenchLigue2" target="_self">Ligue 2</a>  <span title="France"> 🇫🇷</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>523. <a href="/team/Ionikos%20FC">Ionikos FC</a></td>
<td style="padding-right:5px;padding-left:5px">19.0</td>


	
	<td class="custom-align-1"><a href="/info2/GreekSuperLeague" target="_self">Super League</a>  <span title="Greece"> 🇬🇷</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>524. <a href="/team/Levadiakos">Levadiakos</a></td>
<td style="padding-right:5px;padding-left:5px">18.9</td>


	
	<td class="custom-align-1"><a href="/info2/GreekSuperLeague" target="_self">Super League</a>  <span title="Greece"> 🇬🇷</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>525. <a href="/team/Shrewsbury%20Town">Shrewsbury Town</a></td>
<td style="padding-right:5px;padding-left:5px">18.8</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>526. <a href="/team/SuperSport%20United">SuperSport United</a></td>
<td style="padding-right:5px;padding-left:5px">18.7</td>


	
	<td class="custom-align-1"><a href="/info2/SouthAfricanABSAPremierLeague" target="_self">Premier Division</a>  <span title="South Africa"> 🇿🇦</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">1.5</td>


</tr>

	
	    <tr>
	


<td>527. <a href="/team/SV%20Sandhausen">SV Sandhausen</a></td>
<td style="padding-right:5px;padding-left:5px">18.5</td>


	
	<td class="custom-align-1"><a href="/info2/German2.Bundesliga" target="_self">2. Bundesliga</a>  <span title="Germany"> 🇩🇪</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>528. <a href="/team/Shandong%20Luneng">Shandong Luneng</a></td>
<td style="padding-right:5px;padding-left:5px">18.5</td>


	
	<td class="custom-align-1"><a href="/info2/ChineseSuperLeague" target="_self">CSL</a>  <span title="China"> 🇨🇳</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">2.2</td>


</tr>

	
	    <tr>
	


<td>529. <a href="/team/Salford%20City">Salford City</a></td>
<td style="padding-right:5px;padding-left:5px">18.5</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">2.2</td>


</tr>

	
	    <tr>
	


<td>530. <a href="/team/Jiangsu%20Suning%20FC">Jiangsu Suning FC</a></td>
<td style="padding-right:5px;padding-left:5px">18.4</td>


	
	<td class="custom-align-1"><a href="/info2/ChineseSuperLeague" target="_self">CSL</a>  <span title="China"> 🇨🇳</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>531. <a href="/team/Cheltenham%20Town">Cheltenham Town</a></td>
<td style="padding-right:5px;padding-left:5px">18.3</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>532. <a href="/team/Gazisehir%20Gaziantep">Gazisehir Gaziantep</a></td>
<td style="padding-right:5px;padding-left:5px">18.2</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>533. <a href="/team/Halmstads%20BK">Halmstads BK</a></td>
<td style="padding-right:5px;padding-left:5px">18.1</td>


	
	<td class="custom-align-1"><a href="/info2/SwedishAllsvenskan" target="_self">Allsvenskan</a>  <span title="Sweden"> 🇸🇪</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>534. <a href="/team/Mansfield%20Town">Mansfield Town</a></td>
<td style="padding-right:5px;padding-left:5px">17.8</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">2.1</td>


</tr>

	
	    <tr>
	


<td>535. <a href="/team/Milton%20Keynes%20Dons">Milton Keynes Dons</a></td>
<td style="padding-right:5px;padding-left:5px">17.7</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>536. <a href="/team/Panetolikos">Panetolikos</a></td>
<td style="padding-right:5px;padding-left:5px">17.7</td>


	
	<td class="custom-align-1"><a href="/info2/GreekSuperLeague" target="_self">Super League</a>  <span title="Greece"> 🇬🇷</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>537. <a href="/team/Yokohama%20FC">Yokohama FC</a></td>
<td style="padding-right:5px;padding-left:5px">17.6</td>


	
	<td class="custom-align-1"><a href="/info2/JapaneseJLeague" target="_self">J1 League</a>  <span title="Japan"> 🇯🇵</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>538. <a href="/team/New%20Mexico%20United">New Mexico United</a></td>
<td style="padding-right:5px;padding-left:5px">17.6</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>539. <a href="/team/Stockport%20County">Stockport County</a></td>
<td style="padding-right:5px;padding-left:5px">17.4</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.5</td>
	<td class="custom-align-2">1.7</td>


</tr>
	
	    <tr>
	


<td>540. <a href="/team/Hamarkamaratene">Hamarkamaratene</a></td>
<td style="padding-right:5px;padding-left:5px">17.2</td>


	
	<td class="custom-align-1"><a href="/info2/NorwegianTippeligaen" target="_self">Eliteserien</a>  <span title="Norway"> 🇳🇴</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">2.1</td>


</tr>

	
	    <tr>
	


<td>541. <a href="/team/IFK%20Värnamo">IFK Värnamo</a></td>
<td style="padding-right:5px;padding-left:5px">17.1</td>


	
	<td class="custom-align-1"><a href="/info2/SwedishAllsvenskan" target="_self">Allsvenskan</a>  <span title="Sweden"> 🇸🇪</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>542. <a href="/team/Pittsburgh%20Riverhounds">Pittsburgh Riverhounds</a></td>
<td style="padding-right:5px;padding-left:5px">16.7</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.5</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>543. <a href="/team/Bristol%20Rovers">Bristol Rovers</a></td>
<td style="padding-right:5px;padding-left:5px">16.6</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">2.1</td>


</tr>

	
	    <tr>
	


<td>544. <a href="/team/Western%20United">Western United</a></td>
<td style="padding-right:5px;padding-left:5px">16.5</td>


	
	<td class="custom-align-1"><a href="/info2/AustralianA-League" target="_self">A-League</a>  <span title="Australia"> 🇦🇺</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">2.3</td>


</tr>

	
	    <tr>
	


<td>545. <a href="/team/Wellington%20Phoenix">Wellington Phoenix</a></td>
<td style="padding-right:5px;padding-left:5px">16.4</td>


	
	<td class="custom-align-1"><a href="/info2/AustralianA-League" target="_self">A-League</a>  <span title="Australia"> 🇦🇺</span>   </td>


	<td class="custom-align-2">0.8</td>
	<td class="custom-align-2">2.4</td>


</tr>

	
	    <tr>
	


<td>546. <a href="/team/Orange%20County%20SC">Orange County SC</a></td>
<td style="padding-right:5px;padding-left:5px">16.2</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>547. <a href="/team/TS%20Galaxy">TS Galaxy</a></td>
<td style="padding-right:5px;padding-left:5px">16.0</td>


	
	<td class="custom-align-1"><a href="/info2/SouthAfricanABSAPremierLeague" target="_self">Premier Division</a>  <span title="South Africa"> 🇿🇦</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>548. <a href="/team/Kaizer%20Chiefs">Kaizer Chiefs</a></td>
<td style="padding-right:5px;padding-left:5px">16.0</td>


	
	<td class="custom-align-1"><a href="/info2/SouthAfricanABSAPremierLeague" target="_self">Premier Division</a>  <span title="South Africa"> 🇿🇦</span>   </td>


	<td class="custom-align-2">0.5</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>549. <a href="/team/Birmingham%20Legion%20FC">Birmingham Legion FC</a></td>
<td style="padding-right:5px;padding-left:5px">15.7</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">2.2</td>


</tr>

	
	    <tr>
	


<td>550. <a href="/team/Brisbane%20Roar">Brisbane Roar</a></td>
<td style="padding-right:5px;padding-left:5px">15.7</td>


	
	<td class="custom-align-1"><a href="/info2/AustralianA-League" target="_self">A-League</a>  <span title="Australia"> 🇦🇺</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">2.1</td>


</tr>

	
	    <tr>
	


<td>551. <a href="/team/Lamia">Lamia</a></td>
<td style="padding-right:5px;padding-left:5px">15.3</td>


	
	<td class="custom-align-1"><a href="/info2/GreekSuperLeague" target="_self">Super League</a>  <span title="Greece"> 🇬🇷</span>   </td>


	<td class="custom-align-2">0.5</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>552. <a href="/team/Newcastle%20Jets">Newcastle Jets</a></td>
<td style="padding-right:5px;padding-left:5px">15.1</td>


	
	<td class="custom-align-1"><a href="/info2/AustralianA-League" target="_self">A-League</a>  <span title="Australia"> 🇦🇺</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">2.3</td>


</tr>

	
	    <tr>
	


<td>553. <a href="/team/Degerfors%20IF">Degerfors IF</a></td>
<td style="padding-right:5px;padding-left:5px">15.0</td>


	
	<td class="custom-align-1"><a href="/info2/SwedishAllsvenskan" target="_self">Allsvenskan</a>  <span title="Sweden"> 🇸🇪</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">2.3</td>


</tr>

	
	    <tr>
	


<td>554. <a href="/team/Port%20Vale">Port Vale</a></td>
<td style="padding-right:5px;padding-left:5px">15.0</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">2.2</td>


</tr>

	
	    <tr>
	


<td>555. <a href="/team/AmaZulu">AmaZulu</a></td>
<td style="padding-right:5px;padding-left:5px">14.3</td>


	
	<td class="custom-align-1"><a href="/info2/SouthAfricanABSAPremierLeague" target="_self">Premier Division</a>  <span title="South Africa"> 🇿🇦</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>556. <a href="/team/Bradford%20City">Bradford City</a></td>
<td style="padding-right:5px;padding-left:5px">14.3</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.5</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>557. <a href="/team/Miami%20FC">Miami FC</a></td>
<td style="padding-right:5px;padding-left:5px">13.8</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.5</td>
	<td class="custom-align-2">2.1</td>


</tr>

	
	    <tr>
	


<td>558. <a href="/team/Swindon%20Town">Swindon Town</a></td>
<td style="padding-right:5px;padding-left:5px">13.8</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">2.2</td>


</tr>

	
	    <tr>
	


<td>559. <a href="/team/Leyton%20Orient">Leyton Orient</a></td>
<td style="padding-right:5px;padding-left:5px">13.6</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>560. <a href="/team/Carlisle%20United">Carlisle United</a></td>
<td style="padding-right:5px;padding-left:5px">13.4</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>561. <a href="/team/Morecambe">Morecambe</a></td>
<td style="padding-right:5px;padding-left:5px">13.3</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">2.3</td>


</tr>

	
	    <tr>
	


<td>562. <a href="/team/Golden%20Arrows">Golden Arrows</a></td>
<td style="padding-right:5px;padding-left:5px">13.1</td>


	
	<td class="custom-align-1"><a href="/info2/SouthAfricanABSAPremierLeague" target="_self">Premier Division</a>  <span title="South Africa"> 🇿🇦</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>563. <a href="/team/Newport%20County">Newport County</a></td>
<td style="padding-right:5px;padding-left:5px">13.1</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.5</td>
	<td class="custom-align-2">2.1</td>


</tr>

	
	    <tr>
	


<td>564. <a href="/team/Hatayspor">Hatayspor</a></td>
<td style="padding-right:5px;padding-left:5px">13.0</td>


	
	<td class="custom-align-1"><a href="/info2/TurkishTurkcellSuperLig" target="_self">Super Lig</a>  <span title="Turkey"> 🇹🇷</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">2.3</td>


</tr>

	
	    <tr>
	


<td>565. <a href="/team/Royal%20AM">Royal AM</a></td>
<td style="padding-right:5px;padding-left:5px">12.9</td>


	
	<td class="custom-align-1"><a href="/info2/SouthAfricanABSAPremierLeague" target="_self">Premier Division</a>  <span title="South Africa"> 🇿🇦</span>   </td>


	<td class="custom-align-2">0.5</td>
	<td class="custom-align-2">2.1</td>


</tr>

	
	    <tr>
	


<td>566. <a href="/team/Perth%20Glory">Perth Glory</a></td>
<td style="padding-right:5px;padding-left:5px">12.9</td>


	
	<td class="custom-align-1"><a href="/info2/AustralianA-League" target="_self">A-League</a>  <span title="Australia"> 🇦🇺</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">2.3</td>


</tr>

	
	    <tr>
	


<td>567. <a href="/team/Sekhukhune%20United">Sekhukhune United</a></td>
<td style="padding-right:5px;padding-left:5px">12.5</td>


	
	<td class="custom-align-1"><a href="/info2/SouthAfricanABSAPremierLeague" target="_self">Premier Division</a>  <span title="South Africa"> 🇿🇦</span>   </td>


	<td class="custom-align-2">0.2</td>
	<td class="custom-align-2">1.6</td>


</tr>

	
	    <tr>
	


<td>568. <a href="/team/Cambridge%20United">Cambridge United</a></td>
<td style="padding-right:5px;padding-left:5px">12.4</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>569. <a href="/team/Stevenage">Stevenage</a></td>
<td style="padding-right:5px;padding-left:5px">12.4</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>570. <a href="/team/Northampton%20Town">Northampton Town</a></td>
<td style="padding-right:5px;padding-left:5px">12.2</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.3</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>571. <a href="/team/Hartford%20Athletic">Hartford Athletic</a></td>
<td style="padding-right:5px;padding-left:5px">12.1</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">2.4</td>


</tr>

	
	    <tr>
	


<td>572. <a href="/team/Monterey%20Bay">Monterey Bay</a></td>
<td style="padding-right:5px;padding-left:5px">12.0</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.5</td>
	<td class="custom-align-2">2.2</td>


</tr>

	
	    <tr>
	


<td>573. <a href="/team/Indy%20Eleven">Indy Eleven</a></td>
<td style="padding-right:5px;padding-left:5px">11.9</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">2.1</td>


</tr>

	
	    <tr>
	


<td>574. <a href="/team/Tianjin%20Teda">Tianjin Teda</a></td>
<td style="padding-right:5px;padding-left:5px">11.8</td>


	
	<td class="custom-align-1"><a href="/info2/ChineseSuperLeague" target="_self">CSL</a>  <span title="China"> 🇨🇳</span>   </td>


	<td class="custom-align-2">0.5</td>
	<td class="custom-align-2">2.3</td>


</tr>

	
	    <tr>
	


<td>575. <a href="/team/Macarthur%20FC">Macarthur FC</a></td>
<td style="padding-right:5px;padding-left:5px">11.7</td>


	
	<td class="custom-align-1"><a href="/info2/AustralianA-League" target="_self">A-League</a>  <span title="Australia"> 🇦🇺</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">2.5</td>


</tr>

	
	    <tr>
	


<td>576. <a href="/team/Varbergs%20BoIS%20FC">Varbergs BoIS FC</a></td>
<td style="padding-right:5px;padding-left:5px">11.5</td>


	
	<td class="custom-align-1"><a href="/info2/SwedishAllsvenskan" target="_self">Allsvenskan</a>  <span title="Sweden"> 🇸🇪</span>   </td>


	<td class="custom-align-2">0.5</td>
	<td class="custom-align-2">2.3</td>


</tr>

	
	    <tr>
	


<td>577. <a href="/team/Charleston%20Battery">Charleston Battery</a></td>
<td style="padding-right:5px;padding-left:5px">11.2</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">2.2</td>


</tr>

	
	    <tr>
	


<td>578. <a href="/team/Shanghai%20Greenland">Shanghai Greenland</a></td>
<td style="padding-right:5px;padding-left:5px">11.1</td>


	
	<td class="custom-align-1"><a href="/info2/ChineseSuperLeague" target="_self">CSL</a>  <span title="China"> 🇨🇳</span>   </td>


	<td class="custom-align-2">0.6</td>
	<td class="custom-align-2">2.5</td>


</tr>

	
	    <tr>
	


<td>579. <a href="/team/Harrogate%20Town">Harrogate Town</a></td>
<td style="padding-right:5px;padding-left:5px">11.1</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.5</td>
	<td class="custom-align-2">2.4</td>


</tr>

	
	    <tr>
	


<td>580. <a href="/team/Moroka%20Swallows">Moroka Swallows</a></td>
<td style="padding-right:5px;padding-left:5px">11.0</td>


	
	<td class="custom-align-1"><a href="/info2/SouthAfricanABSAPremierLeague" target="_self">Premier Division</a>  <span title="South Africa"> 🇿🇦</span>   </td>


	<td class="custom-align-2">0.2</td>
	<td class="custom-align-2">1.8</td>


</tr>

	
	    <tr>
	


<td>581. <a href="/team/Tulsa%20Roughnecks">Tulsa Roughnecks</a></td>
<td style="padding-right:5px;padding-left:5px">10.8</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.5</td>
	<td class="custom-align-2">2.4</td>


</tr>

	
	    <tr>
	


<td>582. <a href="/team/Rio%20Grande%20Valley%20FC%20Toros">Rio Grande Valley FC Toros</a></td>
<td style="padding-right:5px;padding-left:5px">10.7</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">2.2</td>


</tr>

	
	    <tr>
	


<td>583. <a href="/team/Hebei%20China%20Fortune%20FC">Hebei China Fortune FC</a></td>
<td style="padding-right:5px;padding-left:5px">10.5</td>


	
	<td class="custom-align-1"><a href="/info2/ChineseSuperLeague" target="_self">CSL</a>  <span title="China"> 🇨🇳</span>   </td>


	<td class="custom-align-2">0.5</td>
	<td class="custom-align-2">2.4</td>


</tr>

	
	    <tr>
	


<td>584. <a href="/team/Colchester%20United">Colchester United</a></td>
<td style="padding-right:5px;padding-left:5px">10.4</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.3</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>585. <a href="/team/Henan%20Jianye">Henan Jianye</a></td>
<td style="padding-right:5px;padding-left:5px">10.3</td>


	
	<td class="custom-align-1"><a href="/info2/ChineseSuperLeague" target="_self">CSL</a>  <span title="China"> 🇨🇳</span>   </td>


	<td class="custom-align-2">0.5</td>
	<td class="custom-align-2">2.4</td>


</tr>

	
	    <tr>
	


<td>586. <a href="/team/Las%20Vegas%20Lights%20FC">Las Vegas Lights FC</a></td>
<td style="padding-right:5px;padding-left:5px">10.2</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">2.3</td>


</tr>

	
	    <tr>
	


<td>587. <a href="/team/Gillingham">Gillingham</a></td>
<td style="padding-right:5px;padding-left:5px">10.1</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.3</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>588. <a href="/team/Dalian%20Aerbin">Dalian Aerbin</a></td>
<td style="padding-right:5px;padding-left:5px">10.0</td>


	
	<td class="custom-align-1"><a href="/info2/ChineseSuperLeague" target="_self">CSL</a>  <span title="China"> 🇨🇳</span>   </td>


	<td class="custom-align-2">0.5</td>
	<td class="custom-align-2">2.5</td>


</tr>
	
	    <tr>
	


<td>589. <a href="/team/Tshakhuma%20Tsha%20Madzivhandila">Tshakhuma Tsha Madzivhandila</a></td>
<td style="padding-right:5px;padding-left:5px">9.9</td>


	
	<td class="custom-align-1"><a href="/info2/SouthAfricanABSAPremierLeague" target="_self">Premier Division</a>  <span title="South Africa"> 🇿🇦</span>   </td>


	<td class="custom-align-2">0.2</td>
	<td class="custom-align-2">1.9</td>


</tr>

	
	    <tr>
	


<td>590. <a href="/team/Guangzhou%20RF">Guangzhou RF</a></td>
<td style="padding-right:5px;padding-left:5px">9.7</td>


	
	<td class="custom-align-1"><a href="/info2/ChineseSuperLeague" target="_self">CSL</a>  <span title="China"> 🇨🇳</span>   </td>


	<td class="custom-align-2">0.7</td>
	<td class="custom-align-2">2.9</td>


</tr>

	
	    <tr>
	


<td>591. <a href="/team/Maritzburg%20Utd">Maritzburg Utd</a></td>
<td style="padding-right:5px;padding-left:5px">9.6</td>


	
	<td class="custom-align-1"><a href="/info2/SouthAfricanABSAPremierLeague" target="_self">Premier Division</a>  <span title="South Africa"> 🇿🇦</span>   </td>


	<td class="custom-align-2">0.3</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>592. <a href="/team/Accrington%20Stanley">Accrington Stanley</a></td>
<td style="padding-right:5px;padding-left:5px">9.6</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">2.3</td>


</tr>

	
	    <tr>
	


<td>593. <a href="/team/Wuhan%20Zall">Wuhan Zall</a></td>
<td style="padding-right:5px;padding-left:5px">9.4</td>


	
	<td class="custom-align-1"><a href="/info2/ChineseSuperLeague" target="_self">CSL</a>  <span title="China"> 🇨🇳</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">2.3</td>


</tr>

	
	    <tr>
	


<td>594. <a href="/team/Crewe%20Alexandra">Crewe Alexandra</a></td>
<td style="padding-right:5px;padding-left:5px">9.3</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">2.2</td>


</tr>

	
	    <tr>
	


<td>595. <a href="/team/Detroit%20City%20FC">Detroit City FC</a></td>
<td style="padding-right:5px;padding-left:5px">9.0</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.3</td>
	<td class="custom-align-2">2.1</td>


</tr>

	
	    <tr>
	


<td>596. <a href="/team/Richards%20Bay">Richards Bay</a></td>
<td style="padding-right:5px;padding-left:5px">8.6</td>


	
	<td class="custom-align-1"><a href="/info2/SouthAfricanABSAPremierLeague" target="_self">Premier Division</a>  <span title="South Africa"> 🇿🇦</span>   </td>


	<td class="custom-align-2">0.2</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>597. <a href="/team/Rochdale">Rochdale</a></td>
<td style="padding-right:5px;padding-left:5px">8.3</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">2.4</td>


</tr>

	
	    <tr>
	


<td>598. <a href="/team/Grimsby%20Town">Grimsby Town</a></td>
<td style="padding-right:5px;padding-left:5px">8.2</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.3</td>
	<td class="custom-align-2">2.2</td>


</tr>

	
	    <tr>
	


<td>599. <a href="/team/Chippa%20United">Chippa United</a></td>
<td style="padding-right:5px;padding-left:5px">8.1</td>


	
	<td class="custom-align-1"><a href="/info2/SouthAfricanABSAPremierLeague" target="_self">Premier Division</a>  <span title="South Africa"> 🇿🇦</span>   </td>


	<td class="custom-align-2">0.2</td>
	<td class="custom-align-2">2.2</td>


</tr>

	
	    <tr>
	


<td>600. <a href="/team/Tranmere%20Rovers">Tranmere Rovers</a></td>
<td style="padding-right:5px;padding-left:5px">8.1</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.2</td>
	<td class="custom-align-2">2.0</td>


</tr>

	
	    <tr>
	


<td>601. <a href="/team/Loudoun%20United%20FC">Loudoun United FC</a></td>
<td style="padding-right:5px;padding-left:5px">7.9</td>


	
	<td class="custom-align-1"><a href="/info2/UnitedSoccerLeague" target="_self">USL</a>  <span title="USA"> 🇺🇸</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">2.5</td>


</tr>

	
	    <tr>
	


<td>602. <a href="/team/Tianjin%20Quanujian">Tianjin Quanujian</a></td>
<td style="padding-right:5px;padding-left:5px">7.8</td>


	
	<td class="custom-align-1"><a href="/info2/ChineseSuperLeague" target="_self">CSL</a>  <span title="China"> 🇨🇳</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">2.5</td>


</tr>

	
	    <tr>
	


<td>603. <a href="/team/Barrow">Barrow</a></td>
<td style="padding-right:5px;padding-left:5px">7.8</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.2</td>
	<td class="custom-align-2">2.1</td>


</tr>

	
	    <tr>
	


<td>604. <a href="/team/Shenzhen%20FC">Shenzhen FC</a></td>
<td style="padding-right:5px;padding-left:5px">7.7</td>


	
	<td class="custom-align-1"><a href="/info2/ChineseSuperLeague" target="_self">CSL</a>  <span title="China"> 🇨🇳</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">2.6</td>


</tr>

	
	    <tr>
	


<td>605. <a href="/team/Chongqing%20Lifan">Chongqing Lifan</a></td>
<td style="padding-right:5px;padding-left:5px">7.7</td>


	
	<td class="custom-align-1"><a href="/info2/ChineseSuperLeague" target="_self">CSL</a>  <span title="China"> 🇨🇳</span>   </td>


	<td class="custom-align-2">0.3</td>
	<td class="custom-align-2">2.3</td>


</tr>

	
	    <tr>
	


<td>606. <a href="/team/Hartlepool">Hartlepool</a></td>
<td style="padding-right:5px;padding-left:5px">7.6</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.4</td>
	<td class="custom-align-2">2.6</td>


</tr>

	
	    <tr>
	


<td>607. <a href="/team/Walsall">Walsall</a></td>
<td style="padding-right:5px;padding-left:5px">7.5</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.2</td>
	<td class="custom-align-2">2.1</td>


</tr>

	
	    <tr>
	


<td>608. <a href="/team/Sutton%20United">Sutton United</a></td>
<td style="padding-right:5px;padding-left:5px">7.0</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.2</td>
	<td class="custom-align-2">2.3</td>


</tr>

	
	    <tr>
	


<td>609. <a href="/team/AFC%20Wimbledon">AFC Wimbledon</a></td>
<td style="padding-right:5px;padding-left:5px">7.0</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.2</td>
	<td class="custom-align-2">2.3</td>


</tr>

	
	    <tr>
	


<td>610. <a href="/team/Doncaster%20Rovers">Doncaster Rovers</a></td>
<td style="padding-right:5px;padding-left:5px">6.1</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.2</td>
	<td class="custom-align-2">2.3</td>


</tr>

	
	    <tr>
	


<td>611. <a href="/team/Forest%20Green%20Rovers">Forest Green Rovers</a></td>
<td style="padding-right:5px;padding-left:5px">5.9</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueOne" target="_self">League One</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.2</td>
	<td class="custom-align-2">2.4</td>


</tr>

	
	    <tr>
	


<td>612. <a href="/team/Crawley%20Town">Crawley Town</a></td>
<td style="padding-right:5px;padding-left:5px">5.8</td>


	
	<td class="custom-align-1"><a href="/info2/EnglishLeagueTwo" target="_self">League Two</a>  <span title="England"> 🇬🇧</span>   </td>


	<td class="custom-align-2">0.2</td>
	<td class="custom-align-2">2.4</td>


</tr>

	
	    <tr>
	


<td>613. <a href="/team/Guizhou%20Renhe">Guizhou Renhe</a></td>
<td style="padding-right:5px;padding-left:5px">4.9</td>


	
	<td class="custom-align-1"><a href="/info2/ChineseSuperLeague" target="_self">CSL</a>  <span title="China"> 🇨🇳</span>   </td>


	<td class="custom-align-2">0.2</td>
	<td class="custom-align-2">2.6</td>


</tr>


</table>
  </div>

    <div id="Page3" style="display:none; text-align: center;">
    <div class="rul" style="text-align: center;">
        Global Football Rankings
      </div>
    How 600+ international club teams and their leagues compare by Soccer Power Index, updated after each match.   
    <p style="text-align: center; font-size: 20px; font-weight: 100;"> 
    <a href="#" onclick="return show('Page2','Page3');"> Clubs </a>|
    <a href="#" onclick="return show('Page1','Page3');"> Leagues </a>|
    <b style="color: hsl(12, 98%, 52%);"> International </b>

    <table style= "border-collapse: collapse;border-spacing: 0;width: 80%;border: 1px solid #ddd;margin-left: 10%;"><tr>
    <th>League</th>
    <th>Average SPI</th> 
    <th>Stdev</th>
    <th>Best Team</th>
    <th>Worst Team</th>
 </tr>


  <tr>


<td class="custom-align-1">1. <a href="" target="_self">CONMEBOL</a> 


<img class="align" src="/conmebol.png" style="padding-left:3pt" height="25">


</td>

<td class="custom-align-2">74.23</td>
<td class="custom-align-2">11.2</td>
<td class="custom-align-1"><a href="">Brazil</a>: 93.1</td>
<td class="custom-align-1"><a href="">Bolivia</a>: 55.7</td>

</tr>

  <tr>


<td class="custom-align-1">2. <a href="" target="_self">UEFA</a> 


<img class="align" src="/uefa.png" style="padding-left:3pt" height="25">


</td>

<td class="custom-align-2">56.00</td>
<td class="custom-align-2">21.6</td>
<td class="custom-align-1"><a href="">Germany</a>: 89.8</td>
<td class="custom-align-1"><a href="">San Marino</a>: 5.1</td>

</tr>

  <tr>


<td class="custom-align-1">3. <a href="" target="_self">CAF</a> 


<img class="align" src="/caf.png" style="padding-left:3pt" height="25">


</td>

<td class="custom-align-2">40.84</td>
<td class="custom-align-2">16.8</td>
<td class="custom-align-1"><a href="">Algeria</a>: 78.2</td>
<td class="custom-align-1"><a href="">Seychelles</a>: 7.2</td>

</tr>

  <tr>


<td class="custom-align-1">4. <a href="" target="_self">CONCACAF</a> 


<img class="align" src="/concacaf.png" style="padding-left:3pt" height="25">


</td>

<td class="custom-align-2">26.76</td>
<td class="custom-align-2">21.8</td>
<td class="custom-align-1"><a href="">Canada</a>: 74.3</td>
<td class="custom-align-1"><a href="">Turks and Caicos Islands</a>: 0.8</td>

</tr>

  <tr>


<td class="custom-align-1">5. <a href="" target="_self">AFC</a> 


<img class="align" src="/afc.png" style="padding-left:3pt" height="25">


</td>

<td class="custom-align-2">25.64</td>
<td class="custom-align-2">22.0</td>
<td class="custom-align-1"><a href="">Japan</a>: 75.4</td>
<td class="custom-align-1"><a href="">Timor-Leste</a>: 0.7</td>

</tr>

  <tr>


<td class="custom-align-1">6. <a href="" target="_self">OFC</a> 


<img class="align" src="/ofc.png" style="padding-left:3pt" height="25">


</td>

<td class="custom-align-2">14.72</td>
<td class="custom-align-2">15.3</td>
<td class="custom-align-1"><a href="">New Zealand</a>: 55.8</td>
<td class="custom-align-1"><a href="">Tonga</a>: 0.3</td>

</tr>


</table>
</div>
</p>
<br><br><br><br>



  <footer id="Contacts">
          <table>
            <tr>
               <td>
                <div class="map">
                  <h4 style="text-align: center;">Where we are?</h4>
                  <br>
                  <a href="https://www.google.com/maps/dir/28.9761825,77.6430607/N.H.+58,+Delhi-Roorkee+Highway,+Baghpat+Bypass+Road+Crossing,+Meerut,+Uttar+Pradesh+250005/@28.9626661,77.5551701,11z/data=!4m8!4m7!1m0!1m5!1m1!1s0x390c668fdea4d87f:0x8795def814a486e7!2m2!1d77.6410032!2d28.973047">
                  <img src="main_style/images/loca.png" height="34" width="34"></a> &nbsp; MIET NH-58,Baghpat Road,UP,Uttar Pradesh 201206<br>
                <a href ="https://www.google.com/maps/dir/28.9761825,77.6430607/N.H.+58,+Delhi-Roorkee+Highway,+Baghpat+Bypass+Road+Crossing,+Meerut,+Uttar+Pradesh+250005/@28.9626661,77.5551701,11z/data=!4m8!4m7!1m0!1m5!1m1!1s0x390c668fdea4d87f:0x8795def814a486e7!2m2!1d77.6410032!2d28.973047">
                  <img src="main_style/images/map.png" height="280px" width ="450px" style="border-radius:5px;"></a>
               </div>
                  <div class="image22">
                <img src="main_style/images/logo.png" height="413" width="413">
                </div>
                <br><br><br><br><br><br><br><br><br><br><br>
               </td>
              <td align="left">
                <br><br>
                <nav class="upper_social">
          <ul>
              <li><a href="#">+913434343434 <i class="fa fa-whatsapp"></i></a></li>
              <li><a href="#">+914545454545 <i class="fa fa-phone"></i></a></li>
              <li><a href="http://dribbble.com/gian_michelle">Dribbble <i class="fa fa-dribbble"></i></a></li>
              <li><a href="http://behance.net/gianm">Behance <i class="fa fa-behance"></i></a></li>
          </ul>
      </nav>

                &nbsp; &nbsp;&nbsp;
                <div class="social">
                  <a href="https://facebook.com/ondrej.p.barta" class="link facebook" target="_parent"><span class="fa fa-facebook-square"></span></a>
                  <a href="https://twitter.com/PageOnlineXS" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>
                  <a href="https://www.instagram.com" class="link instagram" target="_parent"><span class="fa fa-instagram"></span></a>
                  <a href="https://plus.google.com/+OndÅ™ejBÃ¡rta-Otaku" class="link google-plus" target="_parent"><span class="fa fa-google-plus-square"></span></a>
               </div>
              </td>
             </tr>
          </table>
<br><br>
<hr class= "new">
  <p><u style= "color: white">mietians</u>, All Right Reserved.</p>
  <p>Home <b style= "color: black">|</b> Cookies <b style= "color: black">|</b> Help</p>
</footer> 

    <!-- CHAT BAR BLOCK -->
 <div class="chat-bar-collapsible">
  <button id="chat-button" type="button" class="collapsible">Chat with us!
  <i id="chat-icon" style="color: #fff;" class="fa fa-comments"></i>
  </button>

  <div class="contentss">
  <div class="full-chat-block">
                <!-- Message Container -->
  <div class="outer-container">
  <div class="chat-container">
                        <!-- Messages -->
  <div id="chatbox">
  <h5 id="chat-timestamp"></h5>
   <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>

                        <!-- User input box -->
  <form method="POST" action="chatbot_db.php">
  <div class="chat-bar-input-block" name="timeid">
  <div id="userInput">
  <input id="textInput" class="input-box" type="text" name="content"
        placeholder="Tap 'Enter' to send a message">
                                <p></p>
    </div>
  </form>
 <div class="chat-bar-icons">
  <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
  onclick="heartButton()"></i>
    <i id="chat-icon" aria-hidden = "true" class="fa fa-paper-plane"
    onclick="sendButton()"></i>
                            </div>
                        </div>
              
  <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
<script src ="main_style/script/style.js"></script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
<!--chatbot-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="main_style/script/responses.js"></script>
<script src="main_style/script/chat.js"></script>

<!--addtocart-->
<script src ="main_style/script/addtocart.js"></script>
<!-- INSERT INTO `questions` (`content`, `timeid`) VALUES ('test name', current_timestamp()); -->

<!--searchbar-->
<script src = "main_style/script/search.js"></script>

</body>
</html>