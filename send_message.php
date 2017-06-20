<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
		$comp_name = $_POST['comp-name'];
		$comp_address = $_POST['comp-address'];
		$nip = $_POST['nip'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$order = $_POST['order'];
		$human = intval($_POST['human']);
		$from = 'Formularz zamówienia'; 
		$to = 'ziggy.andzel@gmail.com'; 
		$subject = 'Zamówienie: ';
		$subject .= $_POST['name'];
		
		$body = "DANE FIRMY:\n";
		$body .= "Nazwa firmy: $comp_name\n";
		$body .= "Adres firmy: $comp_address\n";
		$body .= "NIP: $nip\n";
		$body .= "Telefon kontaktowy: $phone\n";
		$body .= "E-Mail: $email\n\n";
		$body .= "ADRES DO WYSYŁKI:\n";
		$body .= "$comp_name\n";
		$body .= "$address\n\n";
		$body .= "WIADOMOŚĆ OD ZAMAWIAJĄCEGO:\n";
		$body .= "$message\n\n";
		$body .= "ZAMÓWIENIE:\n $order";
 
		if (!$_POST['name']) {
			$errName = 'Podaj nazwę firmy';
		}
		
		if (!$_POST['address']) {
			$errAddress = 'Podaj adres do wysyłki';
		}
		
		if (!$_POST['comp-name']) {
			$errCompName = 'Podaj pełną nazwę firmy';
		}
		
		if (!$_POST['comp-address']) {
			$errCompAddress = 'Podaj adres firmy';
		}
		
		if (!$_POST['nip']) {
			$errNip = 'Podaj NIP';
		}
		
		if (!$_POST['phone']) {
			$errPhone = 'Podaj telefon kontaktowy';
		}
		
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Podaj poprawny adres email';
		}
 
		if (!$errName && !$errAddress && !$errCompName && !$errCompAddress && !$errNip && !$errPhone && !$errEmail) {
			if (mail ($to, $subject, $body, $from)) {
				$result='<div class="alert alert-success">Dziękujemy za złożenie zamówienia. Wkrótce skontaktujemy się w celu potwierdzenia!</div>';
			} else {
				$result='<div class="alert alert-danger">Coś poszło nie tak. Prosimy o ponowne złożenie zamówienia.</div>';
			}
		}
	}
?>
<html lang="pl-PL">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>AG Pharma - order</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" 
		href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
		integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
		crossorigin="anonymous">
		<link rel="stylesheet" href="order-form.css">
	</head>
	<body>
		<section class="order-title">
			<div class="container">
				<div class="row">
					<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<h1>AG Pharma - formularz zamówienia.</h1>
						<p>Tutaj można złożyć zamówienie. Kilka dodatkowych informacji
						na temat zamówienia.</p>
					</div>
					<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<button id="download">Szczegółowy wykaz produktów</button>
						<a href="index.php"><button id="download">Powrót do strony głównej</button></a>
					</div>
				</div>
			</div>
		</section>
		<section class="order-form">
			<div class="container">
				<div class="row">
					<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 category-list">
							<h4>Wybierz kategorię:</h4>
							<ul class="nav nav-pills">
								<li id="1" class="nav-item">Choroby zakaźne i autoimmunologia</li>
								<li id="2" class="nav-item">Kardiologia</li>
								<li id="3" class="nav-item">Ginekologia</li>
								<li id="4" class="nav-item">Onkologia</li>
								<li id="5" class="nav-item">Testy narkotykowe</li>
								<li id="6" class="nav-item">Alergie</li>
							</ul>
						</div>
						<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 order-list">
							<h4>Wybierz produkt:</h4>
							<p>*[ szt.] - ilość sztuk w opakowaniu.</p>
							<select id="product-selection" class="form-control">
							</select>
							<h4>Ilość opakowań:</h4>
							<input type="number" name="task" id="product-amount" class="form-control">
							<button id="add-product">Dodaj produkt</button>
							<h4>Twoje zamówienie:</h4>
							<ul id="product-list"></ul>
						</div>
					</div>
					<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<form class="form-horizontal" role="form" method="post" action="send_message.php">
							<textarea id="txtData" name="order"></textarea>	
							<h4>Dane do wysyłki</h4>
							<input type="text" class="form-control" id="name" name="name" placeholder="Nazwa Firmy" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-warning'>$errName</p>";?>
							<input type="text" class="form-control" id="address" name="address" placeholder="Adres do wysyłki" value="<?php echo htmlspecialchars($_POST['address']); ?>">
							<?php echo "<p class='text-warning'>$errAddress</p>";?>
							<h4>Dane firmy</h4>
							<input type="text" class="form-control" id="comp-name" name="comp-name" placeholder="Pełna nazwa firmy" value="<?php echo htmlspecialchars($_POST['comp-name']); ?>">
							<?php echo "<p class='text-warning'>$errCompName</p>";?>
							<input type="text" class="form-control" id="comp-address" name="comp-address" placeholder="Adres firmy" value="<?php echo htmlspecialchars($_POST['comp-address']); ?>">
							<?php echo "<p class='text-warning'>$errCompAddress</p>";?>
							<input type="number" class="form-control" id="nip" name="nip" placeholder="NIP" value="<?php echo htmlspecialchars($_POST['nip']); ?>">
							<?php echo "<p class='text-warning'>$errNip</p>";?>
							<input type="number" class="form-control" id="phone" name="phone" placeholder="Telefon kontaktowy" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
							<?php echo "<p class='text-warning'>$errPhone</p>";?>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-warning'>$errEmail</p>";?>
							<h4>Wiadomość</h4>
							<textarea class="form-control" rows="4" name="message"></textarea>
							<button id="submit" name="submit" type="submit" value="Send">Złóż zamówienie</button>
							<?php echo $result; ?>
						</form>
					</div>
				</div>
			</div>
		</section>
		<section class="legal-notice">
			<p>&#x24B8; 2017 AG Pharma | <a href="http://www.zbigniewandzel.pl">Designed by Z.Andzel</a></p>
		</section>
		<script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<script type="text/javascript" src="jquery.waypoints.min.js"></script>
	</body>
</html>