<?php
	if (isset($_POST["submit"])) {
		$companyName = $_POST['companyName'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'PYTANIE'; 
		$to = 'ziggy.andzel@gmail.com'; 
		$subject = 'PYTANIE: ';
		$subject .= $_POST['companyName'];
		
		$body = "$companyName\n";
		$body .= "$phone\n";
		$body .= "$email\n\n";
		$body .= "PYTANIE:\n";
		$body .= "$message\n";
		
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Podaj poprawny adres email';
		}
 
		if (!$errEmail) {
			if (mail ($to, $subject, $body, $from)) {
				$result='<div class="alert alert-success">Dziękujemy za złożenie zamówienia. Wkrótce skontaktujemy się w celu potwierdzenia!</div>';
			} else {
				$result='<div class="alert alert-danger">Coś poszło nie tak. Prosimy o ponowne złożenie zamówienia.</div>';
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="pl-PL">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>AG Pharma</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" 
		href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
		integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
		crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="animate.css">
		<link rel="stylesheet" href="responsive.css">
	</head>
	<body>
		<section class="navigation">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<div class="navbar-brand">
							<h1><span>AG </span>Pharma</h1>
						</div>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<p>MENU</p>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#info">O firmie</a></li>
							<li><a href="#our-products">Oferta</a></li>
							<li><a href="send_message.php">Złóż zamówienie</a></li>
							<li><a href="#contact-us">Kontakt</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
		</section>
		<section class="hero">
			<div class="container-fluid">
				<div class="row">
					<img src="welcome-image-3.jpg" alt="" />
					<div id="main-slogan" class="animated">
						<div>
							<h1 id="main-slogan-title" class="animated">Szybkie testy <span>diagnostyczne</span></h1>
							<a href="send_message.php"><span id="main-slogan-bt-1" class="bt-checkout animated">Złóż zamówienie</span></a>
							<a href="#our-products"><span id="main-slogan-bt-2" class="bt-checkout animated">Zobacz ofertę</span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="product-list">
			<a class="anchor" name="our-products"></a>
			<div class="container">
				<div class="row">
					<h1>Wybierz kategorię:</h1>
					<ul class="nav nav-pills main-categories">
						<li id="tab-1" class="nav-item tile active animated">
							<a class="nav-link" href="#auto-imm" data-toggle="tab">
							<h3 id="tab-1" class="animated">Choroby zakaźne i autoimmunologia</h3>
							</a>
							<div class="arrow"></div>
						</li>
						<li id="tab-2" class="nav-item tile animated">
							<a class="nav-link" href="#onkology" data-toggle="tab">
								<h3 id="tab-2" class="animated">Onkologia</h3>
							</a>
							<div class="arrow"></div>
						</li>
						<li id="tab-3" class="nav-item tile animated">
							<a class="nav-link" href="#cardiology" data-toggle="tab">
								<h3 id="tab-3" class="animated">Kardiologia</h3>
							</a>
							<div class="arrow"></div>
						</li>
						<li id="tab-4" class="nav-item tile animated">
							<a class="nav-link" href="#ginecology" data-toggle="tab">
								<h3 id="tab-4" class="animated">Ginekologia</h3>
							</a>
							<div class="arrow"></div>
						</li>
						<li id="tab-5" class="nav-item tile animated">
							<a class="nav-link" href="#drugs" data-toggle="tab">
								<h3 id="tab-5" class="animated">Testy narkotykowe</h3></a>
							</a>
							<div class="arrow"></div>
						</li>
						<li id="tab-6" class="nav-item tile animated">
							<a class="nav-link" href="#alergies" data-toggle="tab">
								<h3 id="tab-6" class="animated">Alergie</h3></a>
							</a>
							<div class="arrow"></div>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="auto-imm">
							<div class="container">
								<div class="row">
									<div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4">
										<ul class="nav">
											<li class="active">
												<a class="nav-item" href="#auto1" data-toggle="tab">Rapid Strep A Test Disk</a>
											</li>
											<li>
												<a class="nav-item" href="#auto2" data-toggle="tab">Rapid Influenza A/B Test Panel</a>
											</li>
											<li>
												<a class="nav-item" href="#auto3" data-toggle="tab">NADAL® Strep A Test</a>
											</li>
											<li>
												<a class="nav-item" href="#auto5" data-toggle="tab">NADAL® Rota-Adenovirus Test</a>
											</li>
											<li>
												<a class="nav-item" href="#auto6" data-toggle="tab">NADAL® Mononukleose Test</a>
											</li>
											<li>
												<a class="nav-item" href="#auto7" data-toggle="tab">NADAL® Tuberkulose IgG/IgM-Test</a>
											</li>
											<li>
												<a class="nav-item" href="#auto8" data-toggle="tab">NADAL® RSV</a>
											</li>
											<li>
												<a class="nav-item" href="#auto9" data-toggle="tab">NADAL® RF - Test</a>
											</li>
											<li>
												<a class="nav-item" href="#auto10" data-toggle="tab">Test Urazowy suchy</a>
											</li>
											<li>
												<a class="nav-item" href="#auto11" data-toggle="tab">NADAL® H.pylori</a>
											</li>
										</ul>
									</div>
									<div class="col col-xs-12 col-sm-8 col-md-8 col-lg-8">
										<div id="test-info" class="tab-content">
											<div class="tab-pane fade in active" id="auto1">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>R34-112</span></h3>
														</div>
														<div id="divider-title2">
															<h3>Rapid Strep A Test Disk</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Paciorkowce typu A
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Ameritech
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Zestaw Strep A Test jest szybkim testem immunologicznym,
														służącym do jakościowego wykrywania antygenu grupowego paciorkowców typu A
														w wymazie z gardła pacjenta.</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="auto2">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>R90-112</span></h3>
														</div>
														<div id="divider-title2">
															<h3>Rapid Influenza A/B Test Panel</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Wirusy grypy typu A i B
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Ameritech
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Zestaw Influenza A/B Test jest szybkim testem in vitro, wykrywającym
														antygeny (nukleoproteiny) wirusa grypy typu A i B w próbkach pobranych
														z dróg oddechowych. Test wykrywa nukleoproteiny rdzenia wirusa gryp
														typu A niezależnie od obecności białek powierzchniowych
														H i N (łącznie H1N1 i H3N2).</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="auto3">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>222001A</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® Strep A Test (test kasetowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Paciorkowce typu A
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Szybki test do jakościowego wykrywania antygenów paciorkowców z grupy A
														bezpośrednio z wymazu z gardła.</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="auto5">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>481015</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® Rota-Adenovirus Test (test kasetowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Rotawirusy, Adenowirusy
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test jakościowy stwierdzający obecność antygenów rotawirusów i/lub
														adenowirusów w ludzkim stolcu.</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="auto6">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>252001</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® Mononukleose Test (test kasetowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Przeciwciała IgM przeciw wirusowi Epstein-Barr
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test do jakościowego wykrywania przeciwciał IgM przeciw wirusowi
														Epstein-Barr (EBV) we krwi pełnej, surowicy lub osoczu. Jest pomocny
														w diagnozie mononukleozy zakaźnej (IM).</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="auto7">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>322003N-30</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® Tuberkulose IgG/IgM-Test (test kasetowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Ludzkie przeciwciała skierowane przeciwko TB
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test do jakościowego wykrywania ludzkich przeciwciał przeciw TB
														(M. tuberculosis, M. bovis i M. africanum, wszystkich przeciwciał
														izotypu: IgG, IgM, IgA).</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="auto8">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>491009</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® RSV-Adeno</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Wirusy RSV,&nbsp;Adenowirusy
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test do jakościowego wykrywania antygenów RSV i antygenów adenowirusa
														z ludzkich próbek nosowo-gardłowych.</p>
													</div>
												</div>
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>491005</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® RSV (test kasetowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Wirusy RSV
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test do  jakościowego wykrywania antygenów wirusa RSV w popłuczynach
														nosowo-gardłowych, w popłuczynach nosowych lub w wymazie z nosa.</p>
													</div>
												</div>
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>491003N-25</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® RSV (test zanurzeniowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Wirusy RSV
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test NADAL® RSV jest testem in vitro do szybkiego i jakościowego
														wykrywania antygenów wirusa RSV w popłuczynach nosowogardłowych.</p>
													</div>
												</div>
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>491000</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® RSV plus (test zanurzeniowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Wirusy RSV
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test NADAL® RSV jest testem in vitro do szybkiego i jakościowego
														wykrywania antygenów wirusa RSV w popłuczynach nosowo-gardłowych,
														w popłuczynach nosowych lub w wymazie z nosa.</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="auto9">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>600002N-30</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® RF - Test (test zanurzeniowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Czynniki reumatoidalne
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test zanurzeniowy NADAL® RF jest immunologicznym szybkim testem
														do jakościowego i pół-ilościowego wykrywania czynnika reumatoidalnego (RF) w surowicy.</p>
													</div>
												</div>
											</div>
											
											<div class="tab-pane fade" id="auto10">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>GP 102</span></h3>
														</div>
														<div id="divider-title2">
															<h3>Test Urazowy suchy</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														H.pylori
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Instytut Żywienie i Żywności
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test urazowy jest stosowany w diagnostyce przewodu pokarmowego w zakresie
														wykrywania Helicobacter Pylori w wycinkach błony śluzowej żołądka dzieci i dorosłych.</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="auto11">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>262001</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® H.pylori przeciwciała (test kasetowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														H.pylori Ab
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test kasetowy NADAL® H. pylori Ab jest szybkim, wizualnym testem
														immunochromatograficznym do jakościowego wykrywania przeciwciał we krwi
														pełnej, surowicy i osoczu.</p>
													</div>
												</div>
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>262002</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® H.pylori antygen (test kasetowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														H.pylori Ag
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test kasetowy NADAL® H. Ag pylori jest wizualnym testem immunochromatograficznym
														do jakościowego wykrywania antygenów H. pylori w kale.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="onkology">
							<div class="container">
								<div class="row">
									<div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4">
										<ul class="nav">
											<li class="active">
												<a class="nav-item" href="#onko1" data-toggle="tab">Keul-o-test PSA K</a>
											</li>
											<li>
												<a class="nav-item" href="#onko2" data-toggle="tab">Test Urazowy suchy</a>
											</li>
											<li>
												<a class="nav-item" href="#onko3" data-toggle="tab">NADAL® H.pylori</a>
											</li>
											<li>
												<a class="nav-item" href="#onko4" data-toggle="tab">NADAL® FOB Test</a>
											</li>
											<li>
												<a class="nav-item" href="#onko5" data-toggle="tab">Urządzenie do pobierania kału</a>
											</li>
										</ul>
									</div>
									<div class="col col-xs-12 col-sm-8 col-md-8 col-lg-8">
										<div id="test-info" class="tab-content">
											<div class="tab-pane fade in active" id="onko1">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>602002</span></h3>
														</div>
														<div id="divider-title2">
															<h3>Keul-o-test PSA K</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Antygen gruczołu krokowego PSA
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test służy do wykrywania ludzkiego PSA w próbkach surowicy, osoczu
														lub krwi pełnej i jest wykorzystywany w diagnostyce in vitro.</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="onko2">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>GP 102</span></h3>
														</div>
														<div id="divider-title2">
															<h3>Test Urazowy suchy</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														H.pylori
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Instytut Żywienie i Żywności
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test urazowy jest stosowany w diagnostyce przewodu pokarmowego w zakresie
														wykrywania Helicobacter Pylori w wycinkach błony śluzowej żołądka dzieci i dorosłych.</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="onko3">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>262001</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® H.pylori przeciwciała (test kasetowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														H.pylori Ab
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test kasetowy NADAL® H. pylori Ab jest szybkim, wizualnym testem
														immunochromatograficznym do jakościowego wykrywania przeciwciał we krwi
														pełnej, surowicy i osoczu.</p>
													</div>
												</div>
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>262002</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® H.pylori antygen (test kasetowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														H.pylori Ag
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test kasetowy NADAL® H. Ag pylori jest wizualnym testem immunochromatograficznym
														do jakościowego wykrywania antygenów H. pylori w kale.</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="onko4">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>272001</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® FOB Test (test kasetowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Krew utajona
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test kasetowy NADAL® FOB jest, testem do jakościowego wykrywania ludzkiej
														hemoglobiny w kale (fecal occult blood = FOB = krew utajona w kale).
														Test został opracowany w celu wykrywania chorób jelita grubego, takich
														jak rak jelita i powiększone hemoroidy.</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="onko5">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>272004</span></h3>
														</div>
														<div id="divider-title2">
															<h3>Urządzenie do pobierania kału</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														-
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Urządzenie do pobierania próbek kału przy testach FOB.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="cardiology">
							<div class="container">
								<div class="row">
									<div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4">
										<ul class="nav">
											<li class="active">
												<a class="nav-item" href="#kardio1" data-toggle="tab">One Step cTnI Advanced Test Disk</a>
											</li>
											<li>
												<a class="nav-item" href="#kardio2" data-toggle="tab">NADAL® CrP</a>
											</li>
											<li>
												<a class="nav-item" href="#kardio3" data-toggle="tab">NADAL® Cardiac Combo</a>
											</li>
										</ul>
									</div>
									<div class="col col-xs-12 col-sm-8 col-md-8 col-lg-8">
										<div id="test-info" class="tab-content">
											<div class="tab-pane fade in active" id="kardio1">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>R22-112</span></h3>
														</div>
														<div id="divider-title2">
															<h3>One Step cTnI Advanced Test Disk</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Sercowa troponina I
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Ameritech
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test cTnI służy do jakościowego wykrywania sercowej troponiny I (cTnI)
														w ludzkiej pełnej krwi, surowicy lub osoczu, jako test pomocniczy w diagnozowaniu
														zawału serca. Ze względu na jakościowy charakter tego testu jego jednorazowe użycie
														nie dostarcza informacji na temat dynamicznej zmiany stężenia cTnI (tj. wzrostu lub spadku).</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="kardio2">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>312003</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® CrP (test kasetowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Białko C reaktywne
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Kasetowy test do półilościowego wykrywania i monitorowania stężenia
														CrP we krwi pełnej. Granica wykrywalności tego testu wynosi 10 mg/l.</p>
													</div>
												</div>
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>311003</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® CrP (test zanurzeniowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Białko C reaktywne
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Paskowy test do półilościowego wykrywania i monitorowania stężenia
														CrP we krwi pełnej. Granica wykrywalności tego testu wynosi 10 mg/l.</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="kardio3">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>282003</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® Cardiac Combo (test kasetowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Mioglobina, CK-MB, Troponina
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test kasetowy NADAL® Cardiac Combo jest szybkim testem do jakościowego
														wykrywania ludzkiej mioglobiny, CK-MB (kinazy kreatynowej izoenzymu MB)
														i troponiny serca I w krwi pełnej, surowicy lub osoczu.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="ginecology">
							<div class="container">
								<div class="row">
									<div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4">
										<ul class="nav">
											<li class="active">
												<a class="nav-item" href="#gine1" data-toggle="tab">NADAL® Gonorrhö</a>
											</li>
											<li>
												<a class="nav-item" href="#gine2" data-toggle="tab">InstAlert® Chlamydia Test</a>
											</li>
											<li>
												<a class="nav-item" href="#gine3" data-toggle="tab">NADAL® Candida Albicans</a>
											</li>
											<li>
												<a class="nav-item" href="#gine4" data-toggle="tab">NADAL® PROM Test</a>
											</li>
											<li>
												<a class="nav-item" href="#gine5" data-toggle="tab">NADAL® HSV 1 i 2</a>
											</li>
											<li>
												<a class="nav-item" href="#gine6" data-toggle="tab">Rapid Strep B Test</a>
											</li>
											<li>
												<a class="nav-item" href="#gine7" data-toggle="tab">NADAL® Strep B Test</a>
											</li>
											<li>
												<a class="nav-item" href="#gine8" data-toggle="tab">NADAL® Trichomonas vaginalis</a>
											</li>
											<li>
												<a class="nav-item" href="#gine9" data-toggle="tab">Adjuva pH-Control</a>
											</li>
										</ul>
									</div>
									<div class="col col-xs-12 col-sm-8 col-md-8 col-lg-8">
										<div id="test-info" class="tab-content">
											<div class="tab-pane fade in active" id="gine1">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>611003N-10</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® Gonorrhö (rzeżączka) (test kasetowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Antygeny rzeżączki
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test NADAL® Gonorrhö jest szybkim testem przeznaczonym do stwierdzania obecności
														antygenów rzeżączki w wydzielniczych próbkach układu moczowo-płciowego. Test
														jest używany jako pomoc w diagnozie infekcji rzeżączką. Wyniki testu są jednoznaczne
														i mogą być odczytane po 10-20 minutach. </p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="gine2">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>212005</span></h3>
														</div>
														<div id="divider-title2">
															<h3>InstAlert® Chlamydia Test</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Chlamydia
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test antygenowy InstAlert® Chlamydia służy do szybkiego, jakościowego
														wykrycia bakterii chlamydia bezpośrednio z wymazu z wnętrza szyjki macicy
														u kobiet oraz z wymazu pobranego z dróg moczowych oraz prób uryny u mężczyzn.</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="gine3">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>1120001</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® Candida Albicans</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Candida Albicans
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test antygenowy NADAL® Candida albican jest szybkim testem do jakościowego
														wykrycia antygenów candidia albicans z wymazów pochwy lub roztworów solnych,
														które używane są do wilgotnej preparacji wymazów z pochwy.</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="gine4">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>431001N-10</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® PROM Test (test zanurzeniowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														IGFBP-1
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test zanurzeniowy NADAL® PROM nal von minden jest immunologicznym szybkim
														testem do jakościowego wykrywania antygenów IGFBP-1 (Insulin Growth Factor
														Binding Protein 1) bezpośrednio z wacika do wymazu z pobranym wymazem z pochwy.
														Szybki test do wykrywania wód płodowych w wydzielinie z pochwy.</p>
													</div>
												</div>
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>431001N-20</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® PROM Test (test zanurzeniowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														IGFBP-1
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test zanurzeniowy NADAL® PROM nal von minden jest immunologicznym szybkim
														testem do jakościowego wykrywania antygenów IGFBP-1 (Insulin Growth Factor
														Binding Protein 1) bezpośrednio z wacika do wymazu z pobranym wymazem z pochwy.
														Szybki test do wykrywania wód płodowych w wydzielinie z pochwy.</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="gine5">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>1130001</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® HSV 1 i 2 (test kasetowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Wirusy Herpes Simplex  typu 1 i 2
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Test antygenowy NADAL® HSV 1 i 2 jest szybkim testem do jakościowego
														wykrywania  antygenów Typu 1 i 2 wirusa Herpes Simplex w próbkach skórnych.
														Test ten służy jako środek pomocniczy przy diagnozowaniu infekcji HSV.</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="gine6">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>R66-112</span></h3>
														</div>
														<div id="divider-title2">
															<h3>Rapid Strep B Test Disk</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Paciorkowce typu B
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Ameritech
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Zestaw Strep B Test jest szybkim testem, służącym do jakościowego wykrywania
														antygenu grupowego paciorkowców typu B bezpośrednio w pobranych próbkach wymazów
														lub w odpowiednio poprowadzonej hodowli. Paciorkowce typu B mogą wywołać różne
														infekcje, np. gardła, gorączkę reumatyczną, zapalenie dróg moczowych, dróg rodnych,
														jelit, wybroczyny na skórze, uszkodzenie nerek.</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="gine7">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>232001</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® Strep B Test (test kasetowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Streptokoki grupy B (GBS)
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Beta-hemolityczne streptokoki grupy B (Streptococcus agalacticae) są
														odpowiedzialne za szereg zachorowań i należą do najczęstszych infekcji
														zagrażających życiu noworodków. Są one częstym powodem głównym infekcji ran,
														sepsy, sepsy u noworodków. Szybki test do wykrywania antygenów. Próbka to wymaz
														z pochwy, względnie z odbytu.</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="gine8">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>840003N-10</span></h3>
														</div>
														<div id="divider-title2">
															<h3>NADAL® Trichomonas vaginalis (test kasetowy)</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Trichomonas vaginalis
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Jednostopniowy test NADAL® Trichmonas jest prostym, immunochromatograficznym
														badaniem do szybkiego i jakościowego wykrywania Trichomonas w wymazie z pochwy.</p>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="gine9">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>194001</span></h3>
														</div>
														<div id="divider-title2">
															<h3>Adjuva pH-Control</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														pH
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Nal Von Minden
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Szybki test do pomiaru odczynu pH pochwy.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="drugs">
							<div class="container">
								<div class="row">
									<div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4">
										<ul class="nav">
											<li class="active">
												<a class="nav-item" href="#drugs1" data-toggle="tab">One Step Multi-Drug Test Kit</a>
											</li>
										</ul>
									</div>
									<div class="col col-xs-12 col-sm-8 col-md-8 col-lg-8">
										<div id="test-info" class="tab-content">
											<div class="tab-pane fade in active" id="drugs1">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>R153-1000</span></h3>
														</div>
														<div id="divider-title2">
															<h3>One Step Multi-Drug Test Kit</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														Kokaina, Amfetamina, Metamfetamina, Opiaty, Tetrahydrokannabinol, PCP, Barbiturany, Metadon, Benzodiazepina, Trójcykliczne Antydepresanty
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Ameritech
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>Zestaw Multi-Drug Test 10-panelowy jest jednostopniowym testem,
														służącym do szybkiego, jakościowego wykrywania w moczu dowolnej kombinacji
														następujących narkotyków: Kokainy (COC), Amfetamin (AMP), Metamfetaminy (MET),
														Opiatów (OPI), Tetrahydrokannabinolu (THC), PCP, Barbituranów (BAR), Metadonu (MTD),
														Benzodiazepiny (BZD) i Trójcyklicznych Antydepresantów (TCA). Poziomy odcięcia testu
														wynoszą dla badanych narkotyków: 300 ng/ml dla COC, 1000 ng/ml dla AMP, 1000 ng/ml dla MET,
														300 ng/ml dla OPI, 50 ng/ml dla THC, 25 ng/ml dla PCP, 300 ng/ml dla BAR, 300 ng/ml dla MTD,
														300 ng/ml dla BZD, 1000 ng/ml dla TCA, 500 ng/ml dla MDMA zgodnie z zalecanymi przez SAMHSA
														punktami odcięcia dla tych testów.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="alergies">
							<div class="container">
								<div class="row">
									<div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4">
										<ul class="nav">
											<li class="active">
												<a class="nav-item" href="#alergy1" data-toggle="tab">One Step IgE Test Disk</a>
											</li>
										</ul>
									</div>
									<div class="col col-xs-12 col-sm-8 col-md-8 col-lg-8">
										<div id="test-info" class="tab-content">
											<div class="tab-pane fade in active" id="alergy1">
												<div class="row inner-row">
													<div class="p-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div id="divider-title1">
															<h3><span>R14-116</span></h3>
														</div>
														<div id="divider-title2">
															<h3>One Step IgE Test Disk</h3>
														</div>
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Typ badania</h5>
														IgE
													</div>
													<div class="p-content p-info col-xs-6 col-sm-6 col-md-3 col-lg-3">
														<h5>Producent/Dostawca</h5>
														Ameritech
													</div>
													<div class="p-content p-description col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<h5>Opis</h5>
														<p>IgE Test jest wysoce czułym testem do jakościowego oznaczania ludzkiej
														IgE w osoczu, surowicy lub krwi pełnej. Przeznaczony jest do stosowania
														w diagnostyce i ocenie leczenia IgE-zależnych reakcji alergicznych i chorób
														autoimmunologicznych. Czułość testu wynosi  80IU/ml.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="products">
			<a class="anchor" name="why-choose"></a>
			<div class="container-fluid">
				<div class="row benefits">
					<div id="macro-pic" class="col col-xs-12 col-sm-6 col-md-6 col-lg-6 animated">
						<img src="./strep-macro.png" alt="" />
					</div>
					<div id="pros" class="col col-xs-12 col-sm-6 col-md-6 col-lg-6 animated">
						<h1>Zalety testów</h1>
						<ul>
							<li><h4>Test jest jednostopniowy, prosty w wykonaniu</h4></li>
							<li><h4>Wyniki w postaci kolorowego prążka są otrzymywane w czasie 3-5 minut</h4></li>
							<li><h4>Czułość testu jest wysoka</h4></li>
							<li><h4>Kontrola testu jest prowadzona w trakcie jego wykonywania</h4></li>
							<li><h4>Przechowywanie w temperaturze pokojowej</h4></li>
							<li><h4>Okres przydatności do użycia to 30 miesięcy od daty produkcji</h4></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section  class="how-it-works animated" id="how-it-works">
			<a class="anchor" name="how-to-basic"></a>
			<div class="container">
				<div class="row text-center">
					<h1>Jak stosować?</h1>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 board">
						<div class="board-inner">
							<ul class="nav nav-tabs" id="myTab">
								<div class="liner"></div>
								<li class="active">
									<a href="#step1" aria-controls="step1" role="tab" data-toggle="tab" title="Krok pierwszy">
										<span class="round-tabs"><h3>1</h3></span>
									</a>
									<div class="arrow-top"></div>
								</li>
								<li><a href="#step2" aria-controls="step2" role="tab" data-toggle="tab" title="Krok drugi">
										<span class="round-tabs"><h3>2</h3></span>
									</a>
									<div class="arrow-top"></div>
								</li>
								<li><a href="#step3" aria-controls="step3" role="tab" data-toggle="tab" title="Krok trzeci">
										<span class="round-tabs"><h3>3</h3></span>
									</a>
									<div class="arrow-top"></div>
								</li>
								<li><a href="#step4" aria-controls="step4" role="tab" data-toggle="tab" title="Krok czwarty">
										<span class="round-tabs"><h3>4</h3></span>
									</a>
									<div class="arrow-top"></div>
								</li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="step1">
								<div class="container">
									<div class="row">
										<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<h3>Krok pierwszy - przygotowanie testu:</h3>
											<p>Wyciągnij kasetkę testu z saszetki i umieść ją na płaskiej,
											suchej powierzchni.</p>
										</div>
										<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<img src="./step-1-pic.png" alt="" />
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="step2">
								<div class="container">
									<div class="row">
										<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<h3>Krok drugi - wykonywanie badania:</h3>
											<p>Pobierz kroplomierzem przygotowaną uprzednio próbkę badaną,
											umieść końcówkę kroplomierza nad kasetką  i wyciśnij odpowiednią
											ilość kropli próbki do centrum studzienki (pola testowego) w kasetce.</p>
										</div>
										<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<img src="./step-2-pic.png" alt="" />
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="step3">
								<div class="container">
									<div class="row">
										<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<h3>Krok trzeci - oczekiwanie na wynik:</h3>
											<p>Z chwilą rozpoczęcia reakcji (testu) zobaczysz fioletowy kolor
											przesuwający się wzdłuż okienka wyniku znajdującego się pośrodku kasetki.</p>
										</div>
										<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<img src="./step-3-pic.png" alt="" />
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="step4">
								<div class="container">
									<div class="row">
										<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<h3>Krok czwarty - odczyt wyniku:</h3>
											<p>Odczytaj wynik w ciągu ok. 10 minut. Nie później jednak
											niż po czasie wskazanym w ulotce od początku reakcji z odczynnikiem.</p>
										</div>
										<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<img src="./step-4-pic.png" alt="" />
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="step5">
								<div class="container">
									<div class="row">
										<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<h3>Krok piąty - pobranie próbki:</h3>
											<p>Zamieszaj próbówką i natychmiast przystąp do punktu 6.</p>
										</div>
										<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<img src="./BiNovum-box-front.png" alt="" />
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="step6">
								<div class="container">
									<div class="row">
										<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<h3>Krok szósty - pobranie próbki:</h3>
											<p>Pobierz kroplomierzem roztwór z próbówki.
											Dodaj 2 krople do studzienki testowej. Odczytaj wynik między 9 a 10 minutą.</p>
										</div>
										<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<img src="./BiNovum-box-front.png" alt="" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="about-us">
			<a class="anchor" name="info"></a>
			<div class="container">
				<div class="row">
					<div id="company-info" class="col-xs-12 col-sm-6 col-md-6 col-lg-6 animated">
						<h1>O nas</h1>
						<p>AG Pharma jest dystrybutorem szybkich
						medycznych testów diagnostycznych. Testy są proste i wygodne w użyciu.
						Wynik uzyskiwany jest w czasie kilku do kilkunastu minut licząc od momentu pobrania
						badanego materiału. Można je wykonać przy łóżku chorego, podczas wizyty w gabinecie lekarza,
						na izbie przyjęć, czy też w karetce pogotowia. Oferujemy testy, które znajdują zastosowanie
						między innymi w diagnostyce chorób zakaźnych, kardiologii, ginekologii, a także służące
						do wykrywania narkotyków w materiale pobranym od pacjenta. Wszystkie  produkty posiadają
						świadectwa zgłoszenia do rejestracji. Są zarejestrowane w Polsce oraz w wielu krajach europejskich.
						Oferowane testy są przeznaczone wyłącznie dla odbiorców profesjonalnych</p>
					</div>
					<div class="col col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<h1 id="useful-things" class="animated">Przydatne informacje</h1>
						<ul id="useful-list" class="animated">
							<li><i class="fa fa-question-circle-o"></i><a href="#why-choose">Dlaczego wybrać testy?</a></li>
							<li><i class="fa fa-question-circle-o"></i><a href="#how-to-basic">Jak przeprowadzić test</a></li>
							<li><i class="fa fa-question-circle-o"></i><a href="#info">Więcej o firmie</a></li>
						</ul>
						<a href="send_message.php"><span id="download" class="bt-order animated">Złóż zamówienie</span></a>
						<span id="download" class="bt-list animated">Szczegółowy wykaz produktów</span>
					</div>
				</div>
			</div>
		</section>
		<section class="footer">
			<a name="contact-us"></a>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 contact company-info">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 info">
								<h2><span>AG </span>Pharma</h2>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 info">
								<h4>ul. Sołtana 14/48</h4>
								<h4>01-494 Warszawa</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 staff">
								<h4>Andrzej Goch:</h4>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 staff">
								<h4>+48 604 773 619</h4>
								<h4>andrzej@agpharma.pl</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 staff">
								<h4>Dział handlowy:</h4>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 staff">
								<h4>+48 608 351 839</h4>
								<h4>testy@agpharma.pl</h4>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 contact contact-form">
						<div class="form-title">
							<h3>Napisz do nas:</h3>
						</div>
						<form class="form-horizontal" role="form" method="post" action="index.php">
							<div class="form-group">
								<input type="text" class="form-control" id="companyName" name="companyName" placeholder="Nazwa firmy" value="<?php echo htmlspecialchars($_POST['companyName']); ?>">
								<input type="number" class="form-control" id="phone" name="phone" placeholder="Telefon kontaktowy" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
								<?php echo "<p class='text-warning'>$errEmail</p>";?>
							</div>
							<div class="form-group">
								<h4>Wiadomość</h4>
								<textarea class="form-control" rows="4" name="message"></textarea>
							</div>
							<div class="form-group">
								<button id="submit" name="submit" type="submit" value="Send">Wyślij wiadomość</button>
							</div>
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