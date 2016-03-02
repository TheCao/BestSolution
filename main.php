<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Best Solution - Strona główna </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="styl.css">
  <script src="skrypty.js" type="text/javascript"></script>
  <!-- Add Google Maps -->
  <script src="http://maps.googleapis.com/maps/api/js"></script>
  <script>
  google.maps.event.addDomListener(window, 'load', initialize);
  </script>
</head>
<body> 
 
<!-- opis i logo -->
<div class="jumbotron text-center" id="jumbotron">
	<div class="row">
		<div class="col-sm-1 logo-bg row-height"> <img src="logo.png" alt="Logo"> </div>
		<div class="col-sm-11" style="margin-left:-30px">
			<h1> Best Solution </h1>
			<p> Najlepsze szkolenia w najlepszej cenie! </p>
			<form class="form-inline">
				<input type="email" id="email-jumbotron" class="form-control" size="50" placeholder="Aby otrzymywać najnowsze informacje podaj adres email">
				<button  class="btn btn-info btn-md" id="subButton" onclick="onEmailButton()"> Subskrybuj! </button>
			</form>
		</div>

		<!-- SubModal -->
		<div id="submodal" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-sm">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-body">
				<p class="note-main"> Zostałeś zasubskrybowany! </p>
				<button type="button" class="btn btn-success center-block" data-dismiss="modal">OK</button>
			  </div>
			</div>

		  </div>
		</div>
		<!-- Modal zapis na kurs -->
		<div id="modalzapis" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-sm">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-body">
				<p class="note-main" style="width:350px;"> Zostałeś zapisany na  kurs! </p>
				<button type="button" class="btn btn-success center-block" data-dismiss="modal">OK</button>
			  </div>
			</div>

		  </div>
		</div>
	</div>
</div>

<!-- NAVBAR top-->

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#aktualnosci">Aktualności </a></li>
        <li><a href="#kursy">Najblizsze kursy</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Lista miast <span class="caret"></span></a>
			<ul class="dropdown-menu navbar-default">
				<li><a href="#lodz" class="text-center">Łódź</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#warszawa" class="text-center">Warszawa</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#wroclaw" class="text-center">Wrocław</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#poznan" class="text-center">Poznań</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#krakow" class="text-center">Kraków</a></li>
			</ul>
		</li>
		 <li><a href="#kontakt">Kontakt</a></li>
        <li>
		<?php 
		if(isset($_POST['zalogowano']) || isset($_POST['najblizsze-kursy']) || isset($_POST['kursyLodz']) || isset($_POST['kursyKrakow']) || isset($_POST['kursyWroclaw']) || isset($_POST['kursyWarszawa']) || isset($_POST['kursyPoznan']))
		{
			$zalogowanoid = $_POST['zalogowano-id'];
			echo '<a data-toggle = "WylogowaniePopover" data-placement = "bottom" style="width:200px; text-align:center;" href="#"> Zalogowany: '.$zalogowanoid; 
			
			
		}
		else
		{
			$zalogowanoid = "";
			echo '<a data-toggle = "LogowaniePopover" data-placement = "bottom" style="width:200px; text-align:center;" href="#">Logowanie';
		}
		
		?>
		</a></li>
       
      </ul>
    </div>
  </div>
</nav>

 <!-- aktualności -->
<span class="anchor-akt" id="aktualnosci"></span>
<section>
	<div class="container-fluid" style=" background-color: #FFFFCC; margin-top:-50px;" >
		<div class="row">
			<div class="col-sm-12">
				<h2 class="tytul-main"> Najnowsze aktualności </h2>
			</div>
		</div>
		<div class="panel-group">
			<div class="panel panel-default">
				<div class="panel panel-header"> [12.01.2016] Szkolenia w nowym mieście!  </div>
				<div class="panel panel-body">
					<div class="col-sm-7 note-main">
						<p> Od dzisiaj do listy miast, w których prowadzimy szkolenia dołącza <strong><u>Kraków</u></strong>.</p>
						<p> Nowe miejsce szkoleniowe mieści się w budynku przy ulicy Szerokiej 30/15C. Jest to w pełni wyposażona, duża aula, którą bardzo łatwo przekształcić w otwartą przestrzeń do ćwiczeń. </p>
						<p> Możecie się już zapisywać na najbliższy kurs <strong>HTML+CSS+PHP</strong>, który odbędzie się w dniach 22-23 marca 2016.</p>
					</div>

					<div class="col-sm-5">
						<img class="img-responsive note-obraz center-block" src="http://boskolubon.archpoznan.pl/wp-content/uploads/2016/01/st..marys_.basilica.krakow.original.18611.jpg" alt="Zdjęcie Kraków" style="width:450px;height:300px"/>
					</div>
				</div>
			</div>


			<div class="panel panel-default">
				<div class="panel panel-header"> [15.12.2015] Najbliższe szkolenie na Uniwersytecie Łódzkim! </div>
				<div class="panel panel-body">
					<div class="col-sm-9 note-main">
						<p> W najbliższy piątek [18.12.2015] ekipa PonadPrzeciętnych pojawi się na wydziale Ekonomiczno-Socjologicznym Uniwersytetu Łódzkiego. Tematem 1.5-godzinnego spotkania będzie <strong>"Typologia osobowości a pasja"</strong>. </p>
						<p> <u>Początek szkolenia o godzinie 16.15. </u></p>
						<p> Zapisy na to szkolenie są już otwarte, a maksymalna ilość miejsc wynosi 30. Radzimy pospieszyć się z rezerwacją miejsc :)</p>
						<p> Strona PonadPrzeciętnych : <a href="http://www.ponadprzecietni.pl"> www.ponadprzecietni.pl </a></p>
					</div>
					<div class="col-sm-3">
						<img class="img-responsive note-obraz center-block" src="PPlogo.png" alt="Logo PP" style="width:200px;height:200px"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

 <!-- Najblizsze kursy -->
 <?php
require 'polaczenie.php';
if(! $baza ) {
	   die('Brak połączenia z bazą ');
	}	
// szeregowanie od najblizszej daty do najpozniejszej
$najblizszekursy = ibase_query($baza, "SELECT * FROM kursy ORDER BY DATA;");
$kursyLodz = ibase_query($baza, "SELECT * FROM kursy WHERE MIASTO='Łódź';");
$kursyWarszawa = ibase_query($baza, "SELECT * FROM kursy WHERE MIASTO='Warszawa';");
$kursyWroclaw = ibase_query($baza, "SELECT * FROM kursy WHERE MIASTO='Wrocław';");
$kursyPoznan = ibase_query($baza, "SELECT * FROM kursy WHERE MIASTO='Poznań';");
$kursyKrakow = ibase_query($baza, "SELECT * FROM kursy WHERE MIASTO='Kraków';");
$ILEWYSWIETLIC = 6;



//  update ilości osób na szkoleniu
if(isset($_POST['najblizsze-kursy']))
{	
	$updateid = $_POST['najblizsze-id'];
	$tempilosc = $_POST['najblizsze-iloscakt'];
	$tempilosc++;
	$update = "UPDATE kursy SET ILOSCAKT='$tempilosc' WHERE ID='$updateid' ";
	
	$retval = ibase_query($baza,$update);
	
	if(! $retval ) {
	   die('Nie można zapisać na kurs ' );
	}
	$najblizszekursy = ibase_query($baza, "SELECT * FROM kursy ORDER BY DATA;");
	echo '<script>
$("#modalzapis").modal();
</script>';
}
?>
<span class="anchor" id="kursy"></span>
<section>
	<div class="container-fluid" style=" background-color: #FFFFCC;">
	<div class="row">
			<div class="col-sm-12">
				<h2 class="tytul-main"> Najbliższe kursy </h2>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-condensed">
				<thead> <tr>
					<th> Data </th>
					<th> Godzina </th>
					<th> Miasto </th> 
					<th> Tematyka </th>
					<th> Prowadzący </th>
					<th> Cena </th>
					<th> Ilość osób </th>
					<th> Zapisy </th>
				</tr></thead>
				<tbody>
				<?php
					$increment = 0;
					// Wyswietlanie 6 pierwszych z tabeli kursów 
	
					while($wynik = ibase_fetch_object($najblizszekursy))  // pobiera ciagle ten sam wiersz
					{
						if($increment >= $ILEWYSWIETLIC)
						{
							break 1;
						}
						else
						{
						$id = $wynik->ID;
						$data = date ("j.m.Y", strtotime($wynik->DATA)); 
						$godzina = date ("H:i", strtotime($wynik->DATA)); 
						$miasto = $wynik->MIASTO;
						$temat = $wynik->TEMAT;
						$prowadzacy = $wynik->PROWADZACY;
						$ilosc = $wynik->ILOSCAKT;
						$max = $wynik->ILOSCMAX;
						$cena = number_format($wynik->CENA,2);
						echo '<tr>';
						echo '<td>',   $data,  '</td>',
							'<td>' , $godzina, '</td>',
						'<td>',   $miasto,  '</td>',
						'<td>' ,  $temat, '</td>',
						'<td>',   $prowadzacy, '</td>',
						'<td>',   $cena, ' zł  </td>',  
						'<td>' ,  $ilosc, '/' , $max, '</td>' ,
						'<td>';  
						if($zalogowanoid)
						{
							if ($ilosc <= 0.8*$max) 
								echo '<form  class="form-group" method="post" action = "main.php#kursy">
									<input name="najblizsze-id" type="hidden" value='.$id.' >
									<input name="zalogowano-id" type="hidden" value='.$zalogowanoid.' >
									<input name="najblizsze-iloscakt" type="hidden" value='.$ilosc.' >
									<button type="submit" class="btn btn-info buttony-kursy" name="najblizsze-kursy"> Zapisz się </button>
								</form>'; 
							elseif (($ilosc > 0.8*$max) and ($ilosc < $max))
								echo '<form  class="form-group" method="post" action = "main.php#kursy">
									<input name="najblizsze-id" type="hidden" value='.$id.' >
									<input name="zalogowano-id" type="hidden" value='.$zalogowanoid.' >
									<input name="najblizsze-iloscakt" type="hidden" value='.$ilosc.' >
									<button type="submit" class="btn btn-warning buttony-kursy" name="najblizsze-kursy" style="width:180px"> Zapisz się (mało miejsc!)</button>
								</form>';
						else 
							echo '<a href="#" class="btn btn-danger disabled" role="button"> Brak miejsc </a>';
						echo '</td></tr>';
						$increment++;
						}
						else
						{
							if ($ilosc <= 0.8*$max) 
								echo '<a href="#" class="btn btn-warning disabled" role="button"> Zaloguj się </a>';
							elseif (($ilosc > 0.8*$max) and ($ilosc < $max))
								echo '<a href="#" class="btn btn-warning disabled" role="button"> Zaloguj się (mało miejsc!) </a>';
						else 
							echo '<a href="#" class="btn btn-danger disabled" role="button"> Brak miejsc </a>';
						echo '</td></tr>';
						$increment++;
						}
						
						}
					}

					
					
				
					?>
					
				</tbody>
			</table>
		</div>
	</div>
</section>


 <!-- lista miast -->
<?php
ibase_free_result($najblizszekursy);
ibase_close($baza);
?>
<span class="anchor" id="lodz"></span> <!-- myk z przesunieciem kotwic wzgledem wysokosci navbaru! https://pixelflips.com/blog/anchor-links-with-a-fixed-header-->
<section>
	<div class="container-fluid" style=" background-color: #FFFFCC;" >
		<div class="row">
			<div class="col-sm-12">
				<h2 class="tytul-main"> Łódź </h2>
			</div>
		</div>
		<div class="panel-group">
			<div class="panel panel-default">
				<div class="panel panel-body">
					<!-- lewa kolumna -->
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-12 note-main">
								<p>Sala szkoleniowo - konferencyjna o powierzchni 31 metrów kwadratowych. Sala bardzo dobrze przygotowana do szkoleń, warsztatów, spotkań czy konferencji dla grup 10 - 32 osobowych. Sala ma dwa duże okna nadające jej słoneczny i ciepły charakter. Wyposażona standardowo w TV 29', DVD+VHS, radiomagnetofon, białą dużą tablice, flipchart. Stoły i krzesła mogą być w dowolnej kombinacji ustawienia, co sprzyja dynamicznemu prowadzeniu szkolenia. <p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<button type = "button" class = "btn btn-info" 
								  data-container = "body" data-toggle = "LodzPopover" data-placement = "right" >
								  Najbliższe kursy w Łodzi 
								</button> <br> <br>
								<address class="note-adress">
									<p class="note-main"> Informacje kontaktowe: </p>
									<span class="glyphicon glyphicon-map-marker"></span> Łódź, ul. Sucha 1 <br>
									<span class="glyphicon glyphicon-phone"></span> 623-543-231 <br>
								</address>
							</div> 
							<div class="col-sm-6">
								<!-- Set height and width with CSS -->
								<div id="LodzGoogle" class="map"></div>
							</div>
						</div>
					</div>
					
					<!-- koniec lewej kolumny -->
					<div class="col-sm-4">
						<div id="myCarousel" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">
								<div class="row">
									<div class="col-md-4">
										<span data-slide="next" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-up " style="font-size: 24px"></span>  
									</div>
									<div class="col-md-8"> 
									</div>
								</div>
								<br />
								<!-- Carousel items -->
								<div class="carousel-inner">
									<div class="item active">
										<div class="row">
											<div class="col-xs-6 col-sm-5 col-md-5">
												<img src="http://www.wynajemsal.com/images/16.jpg" class="thumbnail responsive carousel-img" alt="Image" />
											</div>
										</div>
									<!--/row-fluid-->
									</div>
									<!--/item-->
									<div class="item ">
										<div class="row">
											<div class="col-xs-6 col-sm-5 col-md-5">
												<img src="http://www.wynajemsal.com/images/archeion_18.jpg" class="thumbnail responsive carousel-img" alt="Image" />
											</div>
										</div>
										<!--/row-fluid-->
									</div>
									<!--/item-->
									<div class="item ">
										<div class="row">
										  <div class="col-xs-6 col-sm-5 col-md-5">
												<img src="http://www.wynajemsal.com/images/archeion_06.jpg" class="thumbnail responsive carousel-img" alt="Image" />
											</div>
										</div>
										<!--/row-fluid-->
									</div>
									<!--/item-->
								</div>
								<div class="row">
									<div class="col-sm-12">
										<span data-slide="prev" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-down " style="color: Black; font-size: 24px; align-items:center;"></span>
									</div>
								</div>
							<!-- koniec karuzeli -->
							</div>
					<!-- koniec prawej kolumny -->
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>
<span class="anchor" id="warszawa"></span>
<section>
	<div class="container-fluid" style=" background-color: #FFFFCC;" >
		<div class="row">
			<div class="col-sm-12">
				<h2 class="tytul-main"> Warszawa </h2>
			</div>
		</div>
		<div class="panel-group">
			<div class="panel panel-default">
				<div class="panel panel-body">
					<!-- lewa kolumna -->
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-12 note-main">
								<p>Idealna dla grup 8 - 18 osobowych. W ustawieniu teatralnym mieści nawet do 24 osób. Do sali można wstawić TV 29', radiomagnetofon, DVD+VHS, na stałe zamontowana jest duża tablica suchościeralna. Powierzchnia sali (24 m2) niewiele mniejsza niż sali większej, stwarza wyjątkowo kameralną przestrzeń świetnie nadającą się do zajęć szkoleniowych lub spotkań zarządu średniej firmy. Ciepła kolorystyka sali gwarantuje dobre warunki do nauki i koncentracji.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<button type = "button" class = "btn btn-info" 
								  data-container = "body" data-toggle = "WarszawaPopover" data-placement = "right" >
								  Najbliższe kursy w Warszawie
								</button> <br> <br>
								<address class="note-adress">
									<p class="note-main"> Informacje kontaktowe: </p>
									<span class="glyphicon glyphicon-map-marker"></span> Warszawa, ul. Ludwika Idzikowskiego 37 <br>
									<span class="glyphicon glyphicon-phone"></span> 623-544-257   <br>
								</address>
							</div> 
							<div class="col-sm-6">
								<!-- Set height and width with CSS -->
								<div id="WarszawaGoogle" class="map"></div>
							</div>
							
						</div>
					</div>
					
					<!-- koniec lewej kolumny -->
					<div class="col-sm-4">
						<div id="myCarousel2" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">
								<div class="row">
									<div class="col-md-4">
										<span data-slide="next2" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-up " style="font-size: 24px"></span>  
									</div>
									<div class="col-md-8"> 
									</div>
								</div>
								<br />
								<!-- Carousel items -->
								<div class="carousel-inner">
									<div class="item active">
										<div class="row">
											<div class="col-xs-6 col-sm-5 col-md-5">
												<img src="http://www.wynajemsal.com/images/archeion_02.jpg" class="thumbnail responsive carousel-img" alt="Image" />
											</div>
										</div>
									<!--/row-fluid-->
									</div>
									<!--/item-->
									
									<div class="item ">
										<div class="row">
										  <div class="col-xs-6 col-sm-5 col-md-5">
												<img src="http://www.wynajemsal.com/images/archeion_13.jpg" class="thumbnail responsive carousel-img" alt="Image" />
											</div>
										</div>
										<!--/row-fluid-->
									</div>
									<!--/item-->
								</div>
								<div class="row">
									<div class="col-sm-12">
										<span data-slide="prev2" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-down " style="color: Black; font-size: 24px; align-items:center;"></span>
									</div>
								</div>
							<!-- koniec karuzeli -->
							</div>
					<!-- koniec prawej kolumny -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<span class="anchor" id="wroclaw"></span>
<section>
	<div class="container-fluid" style=" background-color: #FFFFCC;" >
		<div class="row">
			<div class="col-sm-12">
				<h2 class="tytul-main"> Wrocław </h2>
			</div>
		</div>
		<div class="panel-group">
			<div class="panel panel-default">
				<div class="panel panel-body">
					<!-- lewa kolumna -->
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-12 note-main">
								<p>Bardzo przyjemna sala szkoleniowo - konferencyjna o powierzchni 31 metrów kwadratowych. 
								Sala bardzo dobrze przygotowana do szkoleń, warsztatów, spotkań czy konferencji dla grup 10 - 20 osobowych.
								W sali znajduje się duża tablica suchościeralna jak również ekran do projekcji oraz flipchart. </p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<button type = "button" class = "btn btn-info" 
								  data-container = "body" data-toggle = "WroclawPopover" data-placement = "right" >
								  Najbliższe kursy we Wrocławiu 
								</button> <br> <br>
								<address class="note-adress">
									<p class="note-main"> Informacje kontaktowe: </p>
									<span class="glyphicon glyphicon-map-marker"></span> Wrocław, ul. Świętego Antoniego 18 <br>
									<span class="glyphicon glyphicon-phone"></span> 523-213-259   <br>
								</address>
							</div> 
							<div class="col-sm-6">
								<!-- Set height and width with CSS -->
								<div id="WroclawGoogle" class="map"></div>
							</div>
							
						</div>
					</div>
					
					<!-- koniec lewej kolumny -->
					<div class="col-sm-4">
						<div id="myCarousel3" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">
								<div class="row">
									<div class="col-md-4">
										<span data-slide="next3" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-up " style="font-size: 24px"></span>  
									</div>
									<div class="col-md-8"> 
									</div>
								</div>
								<br />
								<!-- Carousel items -->
								<div class="carousel-inner">
									<div class="item active">
										<div class="row">
											<div class="col-xs-6 col-sm-5 col-md-5">
												<img src="http://www.wynajemsal.com/images/archeion_33.jpg" class="thumbnail responsive carousel-img" alt="Image" />
											</div>
										</div>
									<!--/row-fluid-->
									</div>
									<!--/item-->
									<div class="item ">
										<div class="row">
											<div class="col-xs-6 col-sm-5 col-md-5">
												<img src="http://www.wynajemsal.com/images/archeion_43.jpg" class="thumbnail responsive carousel-img" alt="Image" />
											</div>
										</div>
										<!--/row-fluid-->
									</div>
									<!--/item-->
									<div class="item ">
										<div class="row">
										  <div class="col-xs-6 col-sm-5 col-md-5">
												<img src="http://www.wynajemsal.com/images/archeion_51.jpg" class="thumbnail responsive carousel-img" alt="Image" />
											</div>
										</div>
										<!--/row-fluid-->
									</div>
									<!--/item-->
								</div>
								<div class="row">
									<div class="col-sm-12">
										<span data-slide="prev3" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-down " style="color: Black; font-size: 24px; align-items:center;"></span>
									</div>
								</div>
							<!-- koniec karuzeli -->
							</div>
					<!-- koniec prawej kolumny -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<span class="anchor" id="poznan"></span>
<section>
	<div class="container-fluid" style=" background-color: #FFFFCC;" >
		<div class="row">
			<div class="col-sm-12">
				<h2 class="tytul-main"> Poznań </h2>
			</div>
		</div>
		<div class="panel-group">
			<div class="panel panel-default">
				<div class="panel panel-body">
					<!-- lewa kolumna -->
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-12 note-main">
								<p>Sala mieści się na pierwszym piętrze kamienicy. Idealna dla grup szkoleniowych 12 osobowych. W zależności od potrzeb do sali wstawiamy flipchart, ekran czy tablicę suchościeralną. Ustawienie stołów w sali dostosowujemy każdorazowo do potrzeb danego szkolenia. W razie potrzeby usuwamy z sali wszystkie stoły lub wstawiamy dodatkowe. </p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<button type = "button" class = "btn btn-info"  
								  data-container = "body" data-toggle = "PoznanPopover" data-placement = "right" >
								  Najbliższe kursy w Poznaniu
								</button> <br> <br>
								<address class="note-adress">
									<p class="note-main"> Informacje kontaktowe: </p>
									<span class="glyphicon glyphicon-map-marker"></span> Poznań, ul. Świętosławska 4 <br>
									<span class="glyphicon glyphicon-phone"></span> 543-221-551   <br>
								</address>
							</div> 
							<div class="col-sm-6">
								<!-- Set height and width with CSS -->
								<div id="PoznanGoogle" class="map"></div>
							</div>
						</div>
					</div>
					
					<!-- koniec lewej kolumny -->
					<div class="col-sm-4">
						<div id="myCarousel4" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">
								<div class="row">
									<div class="col-md-4">
										<span data-slide="next4" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-up " style="font-size: 24px"></span>  
									</div>
									<div class="col-md-8"> 
									</div>
								</div>
								<br />
								<!-- Carousel items -->
								<div class="carousel-inner">
									<div class="item active">
										<div class="row">
											<div class="col-xs-6 col-sm-5 col-md-5">
												<img src="http://www.wynajemsal.com/images/archeion_47.jpg" class="thumbnail responsive carousel-img" alt="Image" />
											</div>
										</div>
									<!--/row-fluid-->
									</div>
									<!--/item-->
									<div class="item ">
										<div class="row">
											<div class="col-xs-6 col-sm-5 col-md-5">
												<img src="http://www.wynajemsal.com/images/archeion_38.jpg" class="thumbnail responsive carousel-img" alt="Image" />
											</div>
										</div>
										<!--/row-fluid-->
									</div>
									<!--/item-->
									<div class="item ">
										<div class="row">
										  <div class="col-xs-6 col-sm-5 col-md-5">
												<img src="http://www.wynajemsal.com/images/archeion_37.jpg" class="thumbnail responsive carousel-img" alt="Image" />
											</div>
										</div>
										<!--/row-fluid-->
									</div>
									<!--/item-->
								</div>
								<div class="row">
									<div class="col-sm-12">
										<span data-slide="prev4" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-down " style="color: Black; font-size: 24px; align-items:center;"></span>
									</div>
								</div>
							<!-- koniec karuzeli -->
							</div>
					<!-- koniec prawej kolumny -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<span class="anchor" id="krakow"></span>
<section>
	<div class="container-fluid" style=" background-color: #FFFFCC;" >
		<div class="row">
			<div class="col-sm-12">
				<h2 class="tytul-main"> Kraków </h2>
			</div>
		</div>
		<div class="panel-group">
			<div class="panel panel-default">
				<div class="panel panel-body">
					<!-- lewa kolumna -->
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-12 note-main">
								<p> Idealna dla grup 8 -14 osobowych. W ustawieniu teatralnym mieści nawet do 26 osób. Do sali można wstawić TV 29', radiomagnetofon, DVD+VHS, na stałe zamontowana jest duża tablica suchościeralna. Powierzchnia sali (24 m2), stwarza wyjątkowo kameralną przestrzeń świetnie nadającą się do zajęć szkoleniowych lub spotkań zarządu średniej firmy. Ciepła kolorystyka sali gwarantuje dobre warunki do nauki i koncentracji.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<button type = "button" class = "btn btn-info"  
								  data-container = "body" data-toggle = "KrakowPopover" data-placement = "right" >
								  Najbliższe kursy w Krakowie
								</button> <br> <br>
								<address class="note-adress">
									<p class="note-main"> Informacje kontaktowe: </p>
									<span class="glyphicon glyphicon-map-marker"></span> Kraków, ul. Lecha 7 <br>
									<span class="glyphicon glyphicon-phone"></span> 625-714-255   <br>
								</address>
							</div> 
							<div class="col-sm-6">
								<!-- Set height and width with CSS -->
								<div id="KrakowGoogle" class="map"></div>
							</div>
							
						</div>
					</div>
					
					<!-- koniec lewej kolumny -->
					<div class="col-sm-4">
						<div id="myCarousel5" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">
								<div class="row">
									<div class="col-md-4">
										<span data-slide="next5" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-up " style="font-size: 24px"></span>  
									</div>
									<div class="col-md-8"> 
									</div>
								</div>
								<br />
								<!-- Carousel items -->
								<div class="carousel-inner">
									<div class="item active">
										<div class="row">
											<div class="col-xs-6 col-sm-5 col-md-5">
												<img src="http://www.wynajemsal.com/images/archeion_19.jpg" class="thumbnail responsive carousel-img" alt="Image" />
											</div>
										</div>
									<!--/row-fluid-->
									</div>
									<!--/item-->
									<div class="item ">
										<div class="row">
											<div class="col-xs-6 col-sm-5 col-md-5">
												<img src="http://www.wynajemsal.com/images/archeion_24.jpg" class="thumbnail responsive carousel-img" alt="Image" />
											</div>
										</div>
										<!--/row-fluid-->
									</div>
									<!--/item-->
									<div class="item ">
										<div class="row">
										  <div class="col-xs-6 col-sm-5 col-md-5">
												<img src="http://www.wynajemsal.com/images/archeion_31.jpg" class="thumbnail responsive carousel-img" alt="Image" />
											</div>
										</div>
										<!--/row-fluid-->
									</div>
									<!--/item-->
								</div>
								<div class="row">
									<div class="col-sm-12">
										<span data-slide="prev5" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-down " style="color: Black; font-size: 24px; align-items:center;"></span>
									</div>
								</div>
							<!-- koniec karuzeli -->
							</div>
					<!-- koniec prawej kolumny -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- popover scripts -->
<!-- tabelki do popovera -->
<div class="table-responsive" id="LodzPopover">
	<table class="table table-condensed">
		<thead> <tr>
					<th> Data </th>
					<th> Godzina </th> 
					<th> Tematyka </th>
					<th> Prowadzący </th>
					<th> Cena </th>
					<th> Ilość osób </th>
					<th> Zapisy </th>
				</tr></thead>
		<tbody>
			<?php
					$increment = 0;
					// Wyswietlanie 6 pierwszych z tabeli kursów 
	
					while($wynik = ibase_fetch_object($kursyLodz))  // pobiera ciagle ten sam wiersz
					{
						if($increment >= $ILEWYSWIETLIC)
						{
							break 1;
						}
						else
						{
						$id = $wynik->ID;
						$data = date ("j.m.Y", strtotime($wynik->DATA)); 
						$godzina = date ("H:i", strtotime($wynik->DATA)); 
						$temat = $wynik->TEMAT;
						$prowadzacy = $wynik->PROWADZACY;
						$ilosc = $wynik->ILOSCAKT;
						$max = $wynik->ILOSCMAX;
						$cena = number_format($wynik->CENA,2);
						echo '<tr>';
						echo '<td>',   $data,  '</td>',
							'<td>' , $godzina, '</td>',
						'<td>' ,  $temat, '</td>',
						'<td>',   $prowadzacy, '</td>',
						'<td>',   $cena, ' zł  </td>',  
						'<td>' ,  $ilosc, '/' , $max, '</td>' ,
						'<td>';  
						if($zalogowanoid)
						{
							if ($ilosc <= 0.8*$max) 
							{
								echo '<form  class="form-group" method="post" action = "main.php#kursy">
									<input name="najblizsze-id" type="hidden" value='.$id.' >
									<input name="zalogowano-id" type="hidden" value='.$zalogowanoid.' >
									<input name="najblizsze-iloscakt" type="hidden" value='.$ilosc.' >
									<button type="submit" class="btn btn-info buttony-kursy" name="najblizsze-kursy"> Zapisz się </button>
								</form>'; 
							}
							elseif (($ilosc > 0.8*$max) and ($ilosc < $max))
							{
								echo '<form  class="form-group" method="post" action = "main.php#kursy">
									<input name="najblizsze-id" type="hidden" value='.$id.' >
									<input name="zalogowano-id" type="hidden" value='.$zalogowanoid.' >
									<input name="najblizsze-iloscakt" type="hidden" value='.$ilosc.' >
									<button type="submit" class="btn btn-warning buttony-kursy" name="najblizsze-kursy" style="width:180px"> Zapisz się (mało miejsc!)</button>
								</form>';
						
							}
							else 
							{
								echo '<a href="#" class="btn btn-danger disabled" role="button"> Brak miejsc </a>';
							}
								
							echo '</td></tr>';
							$increment++;
						}
						else
						{
							if ($ilosc <= 0.8*$max) 
								echo '<a href="#" class="btn btn-warning disabled" role="button"> Zaloguj się </a>';
							elseif (($ilosc > 0.8*$max) and ($ilosc < $max))
								echo '<a href="#" class="btn btn-warning disabled" role="button"> Zaloguj się (mało miejsc!) </a>';
							else 
								echo '<a href="#" class="btn btn-danger disabled" role="button"> Brak miejsc </a>';
						echo '</td></tr>';
						$increment++;
						}
						}
					} 
					
					?>
		</tbody>
	</table>
</div>
<div class="table-responsive" id="WarszawaPopover">
	<table class="table table-condensed">
				<thead><tr>
					<th> Data </th>
					<th> Godzina </th> 
					<th> Tematyka </th>
					<th> Prowadzący </th>
					<th> Cena </th>
					<th> Ilość osób </th>
					<th> Zapisy </th>
				</tr></thead>
				<tbody>
				<?php
					$increment = 0;
					// Wyswietlanie 6 pierwszych z tabeli kursów 
	
					while($wynik = ibase_fetch_object($kursyWarszawa))  // pobiera ciagle ten sam wiersz
					{
						if($increment >= $ILEWYSWIETLIC)
						{
							break 1;
						}
						else
						{
							$id = $wynik->ID;
						$data = date ("j.m.Y", strtotime($wynik->DATA)); 
						$godzina = date ("H:i", strtotime($wynik->DATA)); 
						$temat = $wynik->TEMAT;
						$prowadzacy = $wynik->PROWADZACY;
						$ilosc = $wynik->ILOSCAKT;
						$max = $wynik->ILOSCMAX;
						$cena = number_format($wynik->CENA,2);
						echo '<tr>';
						echo '<td>',   $data,  '</td>',
							'<td>' , $godzina, '</td>',
						'<td>' ,  $temat, '</td>',
						'<td>',   $prowadzacy, '</td>',
						'<td>',   $cena, ' zł  </td>',  
						'<td>' ,  $ilosc, '/' , $max, '</td>' ,
						'<td>';  
						if($zalogowanoid)
						{
							if ($ilosc <= 0.8*$max) 
							{
								echo '<form  class="form-group" method="post" action = "main.php#kursy">
									<input name="najblizsze-id" type="hidden" value='.$id.' >
									<input name="zalogowano-id" type="hidden" value='.$zalogowanoid.' >
									<input name="najblizsze-iloscakt" type="hidden" value='.$ilosc.' >
									<button type="submit" class="btn btn-info buttony-kursy" name="najblizsze-kursy"> Zapisz się </button>
								</form>'; 
							}
							elseif (($ilosc > 0.8*$max) and ($ilosc < $max))
							{
								echo '<form  class="form-group" method="post" action = "main.php#kursy">
									<input name="najblizsze-id" type="hidden" value='.$id.' >
									<input name="zalogowano-id" type="hidden" value='.$zalogowanoid.' >
									<input name="najblizsze-iloscakt" type="hidden" value='.$ilosc.' >
									<button type="submit" class="btn btn-warning buttony-kursy" name="najblizsze-kursy" style="width:180px"> Zapisz się (mało miejsc!)</button>
								</form>';
						
							}
							else 
							{
								echo '<a href="#" class="btn btn-danger disabled" role="button"> Brak miejsc </a>';
							}
								
							echo '</td></tr>';
							$increment++;
						}
						else
						{
							if ($ilosc <= 0.8*$max) 
								echo '<a href="#" class="btn btn-warning disabled" role="button"> Zaloguj się </a>';
							elseif (($ilosc > 0.8*$max) and ($ilosc < $max))
								echo '<a href="#" class="btn btn-warning disabled" role="button"> Zaloguj się (mało miejsc!) </a>';
							else 
								echo '<a href="#" class="btn btn-danger disabled" role="button"> Brak miejsc </a>';
						echo '</td></tr>';
						$increment++;
						}
						}
					}
					?>
		</tbody>
	</table>
</div>
<div class="table-responsive" id="PoznanPopover">
	<table class="table table-condensed">
		<thead><tr>
					<th> Data </th>
					<th> Godzina </th> 
					<th> Tematyka </th>
					<th> Prowadzący </th>
					<th> Cena </th>
					<th> Ilość osób </th>
					<th> Zapisy </th>
				</tr></thead>
				<tbody>
				<?php
					$increment = 0;
					// Wyswietlanie 6 pierwszych z tabeli kursów 
	
					while($wynik = ibase_fetch_object($kursyPoznan))  // pobiera ciagle ten sam wiersz
					{
						if($increment >= $ILEWYSWIETLIC)
						{
							break 1;
						}
						else
						{
							$id = $wynik->ID;
						$data = date ("j.m.Y", strtotime($wynik->DATA)); 
						$godzina = date ("H:i", strtotime($wynik->DATA)); 
						$temat = $wynik->TEMAT;
						$prowadzacy = $wynik->PROWADZACY;
						$ilosc = $wynik->ILOSCAKT;
						$max = $wynik->ILOSCMAX;
						$cena = number_format($wynik->CENA,2);
						echo '<tr>';
						echo '<td>',   $data,  '</td>',
							'<td>' , $godzina, '</td>',
						'<td>' ,  $temat, '</td>',
						'<td>',   $prowadzacy, '</td>',
						'<td>',   $cena, ' zł  </td>',  
						'<td>' ,  $ilosc, '/' , $max, '</td>' ,
						'<td>';  
						if($zalogowanoid)
						{
							if ($ilosc <= 0.8*$max) 
							{
								echo '<form  class="form-group" method="post" action = "main.php#kursy">
									<input name="najblizsze-id" type="hidden" value='.$id.' >
									<input name="zalogowano-id" type="hidden" value='.$zalogowanoid.' >
									<input name="najblizsze-iloscakt" type="hidden" value='.$ilosc.' >
									<button type="submit" class="btn btn-info buttony-kursy" name="najblizsze-kursy"> Zapisz się </button>
								</form>'; 
							}
							elseif (($ilosc > 0.8*$max) and ($ilosc < $max))
							{
								echo '<form  class="form-group" method="post" action = "main.php#kursy">
									<input name="najblizsze-id" type="hidden" value='.$id.' >
									<input name="zalogowano-id" type="hidden" value='.$zalogowanoid.' >
									<input name="najblizsze-iloscakt" type="hidden" value='.$ilosc.' >
									<button type="submit" class="btn btn-warning buttony-kursy" name="najblizsze-kursy" style="width:180px"> Zapisz się (mało miejsc!)</button>
								</form>';
						
							}
							else 
							{
								echo '<a href="#" class="btn btn-danger disabled" role="button"> Brak miejsc </a>';
							}
								
							echo '</td></tr>';
							$increment++;
						}
						else
						{
							if ($ilosc <= 0.8*$max) 
								echo '<a href="#" class="btn btn-warning disabled" role="button"> Zaloguj się) </a>';
							elseif (($ilosc > 0.8*$max) and ($ilosc < $max))
								echo '<a href="#" class="btn btn-warning disabled" role="button"> Zaloguj się (mało miejsc!) </a>';
							else 
								echo '<a href="#" class="btn btn-danger disabled" role="button"> Brak miejsc </a>';
						echo '</td></tr>';
						$increment++;
						}
						}
					}
					?>
		</tbody>
	</table>
</div>
<div class="table-responsive" id="WroclawPopover">
	<table class="table table-condensed">
		<thead><tr>
					<th> Data </th>
					<th> Godzina </th> 
					<th> Tematyka </th>
					<th> Prowadzący </th>
					<th> Cena </th>
					<th> Ilość osób </th>
					<th> Zapisy </th>
				</tr></thead>
				<tbody>
				<?php
					$increment = 0;
					// Wyswietlanie 6 pierwszych z tabeli kursów 
	
					while($wynik = ibase_fetch_object($kursyWroclaw))  // pobiera ciagle ten sam wiersz
					{
						if($increment >= $ILEWYSWIETLIC)
						{
							break 1;
						}
						else
						{
							$id = $wynik->ID;
						$data = date ("j.m.Y", strtotime($wynik->DATA)); 
						$godzina = date ("H:i", strtotime($wynik->DATA)); 
						$temat = $wynik->TEMAT;
						$prowadzacy = $wynik->PROWADZACY;
						$ilosc = $wynik->ILOSCAKT;
						$max = $wynik->ILOSCMAX;
						$cena = number_format($wynik->CENA,2);
						echo '<tr>';
						echo '<td>',   $data,  '</td>',
							'<td>' , $godzina, '</td>',
						'<td>' ,  $temat, '</td>',
						'<td>',   $prowadzacy, '</td>',
						'<td>',   $cena, ' zł  </td>',  
						'<td>' ,  $ilosc, '/' , $max, '</td>' ,
						'<td>';  
						if($zalogowanoid)
						{
							if ($ilosc <= 0.8*$max) 
							{
								echo '<form  class="form-group" method="post" action = "main.php#kursy">
									<input name="najblizsze-id" type="hidden" value='.$id.' >
									<input name="zalogowano-id" type="hidden" value='.$zalogowanoid.' >
									<input name="najblizsze-iloscakt" type="hidden" value='.$ilosc.' >
									<button type="submit" class="btn btn-info buttony-kursy" name="najblizsze-kursy"> Zapisz się </button>
								</form>'; 
							}
							elseif (($ilosc > 0.8*$max) and ($ilosc < $max))
							{
								echo '<form  class="form-group" method="post" action = "main.php#kursy">
									<input name="najblizsze-id" type="hidden" value='.$id.' >
									<input name="zalogowano-id" type="hidden" value='.$zalogowanoid.' >
									<input name="najblizsze-iloscakt" type="hidden" value='.$ilosc.' >
									<button type="submit" class="btn btn-warning buttony-kursy" name="najblizsze-kursy" style="width:180px"> Zapisz się (mało miejsc!)</button>
								</form>';
						
							}
							else 
							{
								echo '<a href="#" class="btn btn-danger disabled" role="button"> Brak miejsc </a>';
							}
								
							echo '</td></tr>';
							$increment++;
						}
						else
						{
							if ($ilosc <= 0.8*$max) 
								echo '<a href="#" class="btn btn-warning disabled" role="button"> Zaloguj się </a>';
							elseif (($ilosc > 0.8*$max) and ($ilosc < $max))
								echo '<a href="#" class="btn btn-warning disabled" role="button"> Zaloguj się (mało miejsc!) </a>';
							else 
								echo '<a href="#" class="btn btn-danger disabled" role="button"> Brak miejsc </a>';
						echo '</td></tr>';
						$increment++;
						}
						}
					}
					?>
		</tbody>
	</table>
</div>
<div class="table-responsive" id="KrakowPopover">
	<table class="table table-condensed">
		<thead><tr>
					<th> Data </th>
					<th> Godzina </th> 
					<th> Tematyka </th>
					<th> Prowadzący </th>
					<th> Cena </th>
					<th> Ilość osób </th>
					<th> Zapisy </th>
				</tr></thead>
				<tbody>
				<?php
					$increment = 0;
					// Wyswietlanie 6 pierwszych z tabeli kursów 
	
					while($wynik = ibase_fetch_object($kursyKrakow))  // pobiera ciagle ten sam wiersz
					{
						if($increment >= $ILEWYSWIETLIC)
						{
							break 1;
						}
						else
						{
							$id = $wynik->ID;
						$data = date ("j.m.Y", strtotime($wynik->DATA)); 
						$godzina = date ("H:i", strtotime($wynik->DATA)); 
						$temat = $wynik->TEMAT;
						$prowadzacy = $wynik->PROWADZACY;
						$ilosc = $wynik->ILOSCAKT;
						$max = $wynik->ILOSCMAX;
						$cena = number_format($wynik->CENA,2);
						echo '<tr>';
						echo '<td>',   $data,  '</td>',
							'<td>' , $godzina, '</td>',
						'<td>' ,  $temat, '</td>',
						'<td>',   $prowadzacy, '</td>',
						'<td>',   $cena, ' zł  </td>',  
						'<td>' ,  $ilosc, '/' , $max, '</td>' ,
						'<td>';  
						if($zalogowanoid)
						{
							if ($ilosc <= 0.8*$max) 
							{
								echo '<form  class="form-group" method="post" action = "main.php#kursy">
									<input name="najblizsze-id" type="hidden" value='.$id.' >
									<input name="zalogowano-id" type="hidden" value='.$zalogowanoid.' >
									<input name="najblizsze-iloscakt" type="hidden" value='.$ilosc.' >
									<button type="submit" class="btn btn-info buttony-kursy" name="najblizsze-kursy"> Zapisz się </button>
								</form>'; 
							}
							elseif (($ilosc > 0.8*$max) and ($ilosc < $max))
							{
								echo '<form  class="form-group" method="post" action = "main.php#kursy">
									<input name="najblizsze-id" type="hidden" value='.$id.' >
									<input name="zalogowano-id" type="hidden" value='.$zalogowanoid.' >
									<input name="najblizsze-iloscakt" type="hidden" value='.$ilosc.' >
									<button type="submit" class="btn btn-warning buttony-kursy" name="najblizsze-kursy" style="width:180px"> Zapisz się (mało miejsc!)</button>
								</form>';
						
							}
							else 
							{
								echo '<a href="#" class="btn btn-danger disabled" role="button"> Brak miejsc </a>';
							}
								
							echo '</td></tr>';
							$increment++;
						}
						else
						{
							if ($ilosc <= 0.8*$max) 
								echo '<a href="#" class="btn btn-warning disabled" role="button"> Zaloguj się </a>';
							elseif (($ilosc > 0.8*$max) and ($ilosc < $max))
								echo '<a href="#" class="btn btn-warning disabled" role="button"> Zaloguj się (mało miejsc!) </a>';
							else 
								echo '<a href="#" class="btn btn-danger disabled" role="button"> Brak miejsc </a>';
						echo '</td></tr>';
						$increment++;
						}
						}
					}
					?>
		</tbody>
	</table>
</div>
<div class="container-fluid" id="LogowaniePopover">
	<div class="row">
		<form  class="popover-logowanie" method="post" action="insert.php"  >
			<div class="form-group form-logowanie">
			  <label for="login">Login:</label>
			  <input type="text" class="form-control" id="login" name="login" placeholder="Podaj login">
			</div>
			<div class="form-group form-logowanie">
			  <label for="pwd">Hasło:</label>
			  <input type="password" class="form-control" id="pwd" name ="pwd" placeholder="Podaj hasło">
			</div>
			
			<button type="submit" name="adminlogowanie" class="btn btn-info center-block">Zaloguj</button>
	  </form>
	  
  </div>
</div>
<div class="container-fluid" id="WylogowaniePopover">
	<div class="row">
		
		<form  class="popover-logowanie" method="post" action="main.php"  >
			<button type="submit" name="wylogowano" class="btn btn-info left-block" style=" margin-left:20%;">Wyloguj</button>
		</form>
	  
  </div>
</div>

<script>
	$('[data-toggle=LodzPopover]').popover({
    content: $('#LodzPopover').html(),
    html: true
}).click(function() {
    $(this).popover('show');
});
   $('[data-toggle=WarszawaPopover]').popover({
    content: $('#WarszawaPopover').html(),
    html: true
}).click(function() {
    $(this).popover('show');
});
$('[data-toggle=PoznanPopover]').popover({
    content: $('#PoznanPopover').html(),
    html: true
}).click(function() {
    $(this).popover('show');
});
$('[data-toggle=WroclawPopover]').popover({
    content: $('#WroclawPopover').html(),
    html: true
}).click(function() {
    $(this).popover('show');
});
$('[data-toggle=KrakowPopover]').popover({
    content: $('#KrakowPopover').html(),
    html: true
}).click(function() {
    $(this).popover('show');
});
	$('[data-toggle=LogowaniePopover]').popover({
    content: $('#LogowaniePopover').html(),
    html: true
}).click(function() {
    $(this).popover('show');
});

$('[data-toggle=WylogowaniePopover]').popover({
    content: $('#WylogowaniePopover').html(),
    html: true
}).click(function() {
    $(this).popover('show');
});

$(document).ready(function () {

    $('.btn-vertical-slider').on('click', function () {
        
        if ($(this).attr('data-slide') == 'next') {
            $('#myCarousel').carousel('next');
        }
        if ($(this).attr('data-slide') == 'prev') {
            $('#myCarousel').carousel('prev')
        }
		
		 if ($(this).attr('data-slide') == 'next2') {
            $('#myCarousel2').carousel('next');
        }
        if ($(this).attr('data-slide') == 'prev2') {
            $('#myCarousel2').carousel('prev')
        }
		
		 if ($(this).attr('data-slide') == 'next3') {
            $('#myCarousel3').carousel('next');
        }
        if ($(this).attr('data-slide') == 'prev3') {
            $('#myCarousel3').carousel('prev')
        }
		
		 if ($(this).attr('data-slide') == 'next4') {
            $('#myCarousel4').carousel('next');
        }
        if ($(this).attr('data-slide') == 'prev4') {
            $('#myCarousel4').carousel('prev')
        }
		
		 if ($(this).attr('data-slide') == 'next5') {
            $('#myCarousel5').carousel('next');
        }
        if ($(this).attr('data-slide') == 'prev5') {
            $('#myCarousel5').carousel('prev')
        }
		

    });
});
</script>
<!-- kontakt -->
<section id="kontakt" style="margin-bottom: -50px; ">
	<div class="container-fluid" style="  background-color: #f6f6f6">
	  <h3 class="text-center">Jeśli masz do nas jakiekolwiek pytania to możesz: </h3>
	  <div class="row">
		<div class="col-sm-8">
		  <p class="text-left kontakt-desc"> skorzystać z poniższego formularza kontaktowego </p>
		  <form id="kontakt-form" class="form-group">
			<div class="row">
			<div class="col-sm-6">
			<input class="form-control" id="nazwisko" placeholder="Twoje imię" type="text" >
			</div>
			<div class="col-sm-6">
			<input type="email" id="email-kontakt" class="form-control" size="50" placeholder="Twój adres email">
			</div>
			<br>
			</div>
			
			
			<textarea class="form-control" id="komentarz"  placeholder="Twoja wiadomość" rows="5" ></textarea>
			<button  class="btn btn-info btn-md pull-right" id="kontaktButton" onclick="sendContactEmail()"> Wyślij! </button>
			</form>
		</div>
		<div class="col-sm-4" >
			<p class="text-left kontakt-desc"> lub wykorzystać którąś z poniższych form kontaktu </p>
			<p class="kontakt-list" style="padding-left:30px">
				<address>
					<span class="glyphicon glyphicon-map-marker"></span> Łódź, ul. Sucha 1 <br>
					<span class="glyphicon glyphicon-phone"></span> 623-543-231   <br>
					<span class="glyphicon glyphicon-envelope"></span> <a href="mailto:kontakt@bestsolution.pl">kontakt@bestsolution.pl</a>
				</address>
			</p>
			<p class="stopka">  Strona stworzona przez Bartosza Komara :) </p>
		</div>
	  </div>

	</div>
</section>
<!-- Kontakt Modal -->
		<div id="kontaktmodal" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-dialog-bottom modal-sm" style="width:315px;">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-body">
				<p class="note-main"> Twoja wiadomość została wysłana! </p>
				<button type="button" class="btn btn-success center-block" data-dismiss="modal">OK</button>
			  </div>
			</div>

		  </div>
		</div>
<script> <!-- scrollowanie do kotwicy -->
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
});
</script>
</body>
</html>