<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Best Solution - Panel admina </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="styl.css">
  <script src="skrypty.js" type="text/javascript"></script>
 
</head>
<body class="zadawanie">
<?php
require ('polaczenie.php');
// sprawdzenie danych logowania

if(TRUE/*isset($_POST['adminlogowanie'])*/) //addusers
{
	if(! $baza ) {
	   die('Brak połączenia z bazą ');
	}	
	
	error_reporting(E_ERROR | E_PARSE);
	set_error_handler('exceptions_error_handler');

	function exceptions_error_handler($severity, $message, $filename, $lineno) {
	if (error_reporting() == 0) {
    return;
  }
  if (error_reporting() & $severity) {
    throw new ErrorException($message, 0, $severity, $filename, $lineno);
  }
}
	try
	{
		$loguser = $_POST['login'];
		$logpass = $_POST['pwd'];
		$sqlpass= ibase_fetch_object(ibase_query($baza, "SELECT PASSW FROM users WHERE USERNAME='$loguser';"));
	}
	catch(Exception $ex)
	{
		die('Message: ' .$e->getMessage());
	}
	if($loguser =='admin' &&$logpass==($sqlpass->PASSW)) // jeśli konto admina  to wtedy wyswietlanie tabeli i dzialanie skrpytów
	{
		
		if(isset($_POST['deletekursy']))
		{
			if(! $baza ) {
			   die('Brak połączenia z bazą ');
			}	
			$usun = "DELETE  FROM kursy";
			
			$retval = ibase_query($baza,$usun);
			
			if(! $retval ) {
			   die('Nie można usunąć tabeli kursy ' );
			}
	
		}

if(isset($_POST['addkursy'])) {
	if(! $baza ) {
	   die('Brak połączenia z bazą ');
	}
	
	$kursid = $_POST['kurs-id'];
	$data = $_POST['kurs-data'];
	$miasto = $_POST['kurs-miasto'];
	$temat = $_POST['kurs-temat'];
	$prowadzacy = $_POST['kurs-prowadzacy'];
	$cena = $_POST['kurs-cena'];
	$ilosc = $_POST['kurs-ilosc'];
	
	$insert = "INSERT INTO kursy(ID,DATA, MIASTO, TEMAT, PROWADZACY,CENA,ILOSCAKT,ILOSCMAX) 
	VALUES (GEN_ID(id, 1),'$data','$miasto', '$temat','$prowadzacy', $cena, 0,$ilosc)";
	   
  
	$retval = ibase_query($baza,$insert);
	
	if(! $retval ) {
	   die('Nie można wysłać danych ' );
	}
}	
if(isset($_POST['removekursy'])) {
	if(! $baza ) {
	   die('Brak połączenia z bazą ');
	}	
	
	$remove = $_POST['remove-input'];
	$insert = "DELETE FROM kursy WHERE ID='$remove'";
	   
  
	$retval = ibase_query($baza,$insert);
	
	if(! $retval ) {
	   die('Nie można wysłać danych ' );
	}
	
}

// skrypty do tabeli users

if(isset($_POST['deleteusers']))
{
	if(! $baza ) {
	   die('Brak połączenia z bazą ');
	}	
	$usun = "DELETE  FROM users";
	
	$retval = ibase_query($baza,$usun);
	
	if(! $retval ) {
	   die('Nie można usunąć tabeli kursy ' );
	}
	
}

if(isset($_POST['addusers'])) {
	if(! $baza ) {
	   die('Brak połączenia z bazą ');
	}
	
	$usersid = $_POST['users-id'];
	$name = $_POST['users-name'];
	$pass = $_POST['users-password'];

	
	$insert = "INSERT INTO users (ID, USERNAME, PASSW) 
	VALUES (GEN_ID(id2, 1),'$name','$pass')";
  
	$retval = ibase_query($baza,$insert);
	
	if(! $retval ) {
	   die('Nie można wysłać danych ' );
	}
}	
if(isset($_POST['removeusers'])) {
	if(! $baza ) {
	   die('Brak połączenia z bazą ');
	}	
	
	$remove = $_POST['remove-input'];
	$insert = "DELETE FROM users WHERE ID='$remove'";
	   
  
	$retval = ibase_query($baza,$insert);
	
	if(! $retval ) {
	   die('Nie można wysłać danych ' );
	}
	
} // koniec skrpytow php
// html 
echo '
<div class="col-sm-push-1">
<form action="main.php">
			<button type="submit" class="btn btn-warning pull-left">Wyloguj </button>
		</form></div>
<div class="col-sm-push-11"><h2 style="text-align:center;"> <strong> Bardzo prosty </strong> panel administracyjny  </h2></div>

<script type="text/JavaScript">
var ishidden1 = 1;
var ishidden2 = 1;
function pokaz()
{
	if(document.getElementById("sqlwyswietl").value == "Kursy")
	{
		ishidden2 = 1;
		if(ishidden1 == 1)
		{
		document.getElementById("tabelausers").style.display="none";
		document.getElementById("tabelausersbuttons").style.display="none";
		document.getElementById("tabelakursy").style.display="block";
		document.getElementById("tabelakursybuttons").style.display="block";
		ishidden1 = 0;
		}
		else
		{
		document.getElementById("tabelakursy").style.display="none";
		document.getElementById("tabelakursybuttons").style.display="none";
		ishidden1 = 1;
		}
	}
	if(document.getElementById("sqlwyswietl").value == "Konta")
	{
		ishidden1 = 1;
		if(ishidden2 == 1)
		{
			document.getElementById("tabelakursy").style.display="none";
			document.getElementById("tabelakursybuttons").style.display="none";
			document.getElementById("tabelausers").style.display="block";
			document.getElementById("tabelausersbuttons").style.display="block";
			ishidden2 = 0;
		}
		else
		{
		document.getElementById("tabelausers").style.display="none";
		document.getElementById("tabelausersbuttons").style.display="none";
		ishidden2 = 1;
		}
	}
}

</script>
<section id="zadawanie">
	<div class="container-fluid col-sm-3 " style=" background-color: #f6f6f6;  border-radius: 25px;
    border: 2px solid #73AD21;">
		<div class="row">
				<div class="col-sm-12" id="selecttabid">
					<!-- Wybór i wyswietlanie tablicy -->
					<form id="select-form" class="form-group">
						<label for="selecttab">Wybierz tabelę do zmiany:</label>
						<div class="row">
							<div class="col-sm-4">
								<select class="form-control"  id="selecttab" name="selecttab" style="width: 80px;"> 
									<option selected> </option>
									<option value="kursy">Kursy</option>
									<option value="users">Konta</option>
								</select>
								<script>
								$("#selecttabid").change(function () { var selectedText = $(this).find("option:selected").text();   document.getElementById("sqlwyswietl").value=selectedText; });
								</script>
							</div>
							<div class="col-sm-offset-6">
								<button  class="btn btn-info btn-md pull-left buttony-kursy" id="sqlwyswietl" onclick="pokaz();" type="button" > Potwierdź wybór </button>
							</div>
						</div>
					</form>
				</div> 
		</div>
		<!-- formularz do tabeli kursy -->
		<div class="row" id="tabelakursybuttons" style="display:none;"><!--zmien tutaj -->
		<!-- usuwanie wiersza -->
			<div class="col-sm-12">
					<form   class="form-group" method="post" action = "insert.php"> <!-- reload strony i ponowne wczytanie skryptów ;) -->
					<fieldset><legend>Usuwanie jednego wiersza:</legend>
						<label for="remove-input"> Podaj ID wiersza do usunięcia: </label>
						<div class="row">
						<div class="col-sm-4">
						<input class="form-control" id="remove-input" name="remove-input" type="text" style="width: 80px; padding-left:0px;">
						</div>
						<div class="col-sm-offset-6">
						<button type="submit" class="btn btn-info btn-md pull-left buttony-kursy" name="removekursy" > Usuń wiersz </button>
						</div>
						</div>
					</fieldset>
					</form>
			</div>
			<!-- usuwanie całości -->
			<div class="col-sm-12">
			<form  class="form-group" method="post" action = "insert.php">
			<fieldset><legend>Usuwanie wszystkich wierszy:</legend>
				<div class="row">
					<div class="col-sm-4">
					</div>
					<div class="col-sm-offset-6">
						<button  class="btn btn-info btn-md pull-left buttony-kursy"  name="deletekursy" type="submit" style="vertical-align: bottom;" > Wyczyść całą tabelę </button>
					</div>
				</div>
			</fieldset>
			</form>
			</div>
			<!-- dodawanie wierszy -->
			<div class="col-sm-12">
			<form  class="form-group" method="post" action = "insert.php">
				<fieldset><legend>Dodawanie wiersza:</legend>
				<div class="row">
					<div class="col-sm-4">
					<!--<label for="kurs-data"> ID: </label>
					<input class="form-control buttony-kursy" id="kurs-id" name="kurs-id" placeholder="Unikalne ID" type="text" >-->
					<label for="kurs-data"> Data i godzina : </label>
					<input class="form-control buttony-kursy" id="kurs-data" name="kurs-data" placeholder="Data i godzina (d.m.r g:m)" type="text" >
					<label for="kurs-miasto"> Miasto: </label>
					<input class="form-control buttony-kursy" id="kurs-miasto" name="kurs-miasto" placeholder="Miasto" type="text" >
					<label for="kurs-temat"> Temat spotkania: </label>
					<input class="form-control buttony-kursy" id="kurs-temat" name="kurs-temat" placeholder="Temat" type="text" >
					<label for="kurs-prowadzacy"> Prowadzący: </label>
					<input class="form-control buttony-kursy" id="kurs-prowadzacy" name="kurs-prowadzacy" placeholder="Prowadzący" type="text" >
					<label for="kurs-cena"> Cena kursu: </label>
					<input class="form-control buttony-kursy" id="kurs-cena" name="kurs-cena" placeholder="Cena" type="text" >
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
					<label for="kurs-ilosc"> Maks. ilość zgłoszeń: </label>
					</div>
				</div>	
				<div class="row">
					<div class="col-sm-4">
					<input class="form-control buttony-kursy" id="kurs-ilosc" name="kurs-ilosc" placeholder="Maksymalna ilość zgłoszeń" type="text" >
					</div>
					<div class="col-sm-offset-6">
					<button  class="btn btn-info btn-md pull-left buttony-kursy" id="sqladd" name="addkursy" type="submit" style="vertical-align: bottom;" > Dodaj nowy kurs! </button>
					</div>
					
				</div>
			</fieldset>
			</form>
			</div>
			
		</div>
		<!-- formularz do tabeli users -->
		<div class="row" id="tabelausersbuttons" style="display:none;"><!--zmien tutaj -->
		<!-- usuwanie wiersza -->
			<div class="col-sm-12">
					<form   class="form-group" method="post" action = "insert.php"> <!-- reload strony i ponowne wczytanie skryptów ;) -->
						<fieldset><legend>Usuwanie jednego wiersza:</legend>
						<label for="remove-input2"> Podaj ID wiersza do usunięcia: </label>
						<div class="row">
						<div class="col-sm-4">
						<input class="form-control" id="remove-input2" name="remove-input" type="text" style="width: 80px; padding-left:0px;">
						</div>
						<div class="col-sm-offset-6">
						<button type="submit" class="btn btn-info btn-md pull-left buttony-kursy" name="removeusers" > Usuń użytkownika </button>
						</div>
						</div>
					</fieldset>
					</form>
			</div>
			<!-- usuwanie całości -->
			<div class="col-sm-12">
			<form  class="form-group" method="post" action = "insert.php">
				<fieldset><legend>Usuwanie wszystkich wierszy:</legend>
				<div class="row">
					<div class="col-sm-4">
					</div>
					<div class="col-sm-offset-6">
						<button  class="btn btn-info btn-md pull-left buttony-kursy"  name="deleteusers" type="submit" style="vertical-align: bottom;" > Wyczyść całą tabelę </button>
					</div>
				</div>
				</fieldset>
			</form>
			</div>
			<!-- dodawanie wierszy -->
			<div class="col-sm-12">
			<form  class="form-group" method="post" action = "insert.php">
				<fieldset><legend>Dodawanie wiersza:</legend>
				<input name="login" type="hidden" value="admin" >
				<input name="pwd" type="hidden" value="admin" >
				<div class="row">
					<div class="col-sm-4">
					<!--<label for="users-id"> ID: </label>
					<input class="form-control buttony-kursy" id="users-id" name="users-id" placeholder="Unikalne ID" type="text" >-->
					<label for="users-name"> Nazwa użytkownika: </label>
					<input class="form-control buttony-kursy" id="users-name" name="users-name" placeholder="Nazwa użytkownika" type="text" >
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
					<label for="users-password"> Hasło: </label>
					</div>
				</div>	
				<div class="row">
					<div class="col-sm-4">
					<input class="form-control buttony-kursy" id="users-password" name="users-password" placeholder="Hasło użytkownika" type="text" >
					</div>
					<div class="col-sm-offset-6">
					<button  class="btn btn-info btn-md pull-left buttony-kursy"  name="addusers" type="submit" style="vertical-align: bottom;" > Dodaj użytkownika! </button>
					</div>
					
				</div>
			</fieldset>
			</form>
			</div>
			
		</div>
	</div>'; // koniec pierwszego html 
	// reszta php
	require ('polaczenie.php');
// skrypty do tabeli kursy
$resultkursy = ibase_query($baza, "SELECT * FROM kursy ORDER BY ID;");
$resultusers = ibase_query($baza, "SELECT * FROM users ORDER BY ID;");
echo '<div class="table-responsive zadawanie-tab" id="tabelakursy" style="display:none;">
			<table class="table table-condensed">
				<thead> <tr>
					<th> ID </th>
					<th> Data </th>
					<th> Godzina </th>
					<th> Miasto </th> 
					<th> Tematyka </th>
					<th> Prowadzący </th>
					<th> Cena </th>
					<th> Ilość osób </th>
				</tr></thead>
				<tbody>';
				
	
					while($wynik = ibase_fetch_object($resultkursy))  // pobiera ciagle ten sam wiersz
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
						echo '<td>',$id, '</td>',
						'<td>',   $data,  '</td>',
						'<td>' , $godzina, '</td>',
						'<td>',   $miasto,  '</td>',
						'<td>' ,  $temat, '</td>',
						'<td>',   $prowadzacy, '</td>',
						'<td>',   $cena, ' zł  </td>',  
						'<td>' ,  $ilosc, '/' , $max, '</td></tr>';		
					}

					
					
				
					
					
				echo '</tbody>
			</table>
		</div>';

echo '<div class="table-responsive zadawanie-tab" id="tabelausers" style="display:none;">
			<table class="table table-condensed">
				<thead> <tr>
					<th> ID </th>
					<th> Username </th>
					<th> Password </th> 
				</tr></thead>
				<tbody>';
				
	
while($wynik = ibase_fetch_object($resultusers))  
{
	
	$ID = $wynik->ID;
	$user = $wynik->USERNAME;
	$psw = $wynik->PASSW;
	echo '<tr>';
	echo '<td>',   $ID,  '</td>',
		'<td>' , $user, '</td>',
	'<td>',   $psw,  '</td> </tr>';
	
	
}
echo '</tbody>
</table>
</div>';
echo '</section>
</body>
</html>';

// koniec drugiego php

	}	// koniec ifa dla konta admina
	elseif($loguser!= 'admin' && !empty($loguser) && $logpass==($sqlpass->PASSW))
	{
		echo '<h1 style="text-align:center; color:green;"> Logowanie na konto użytkownika ', $loguser, ' powiodło się! </h1>
		<form method="post" action="main.php">
			<input name="zalogowano-id" type="hidden" value='.$loguser.' >
			<button type="submit" name="zalogowano" class="btn btn-success center-block">OK</button>
		</form>';
	}
	else
	{
		echo '<h1 style="text-align:center; color:red;"> LOGOWANIE NIE POWIODŁO SIĘ! </h1>
		<form action="main.php">
			<button type="submit" class="btn btn-warning center-block">Wróc do poprzedniej strony</button>
		</form>';
		
	}
	
}
?>

		
<?php

?>
		
		



