<?php
	/*

	This file is part of studi-mat

	LICENSE:

	studi-mat is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 or 3 of the License, or
	(at your option) any later version.
	 
	studi-mat is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU Library General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software Foundation,
	Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301  USA

	*/
	
	session_start();
	$possiblelanguages = array("de","en");
	
	$_SESSION['lang'] = "de";
	if (isset($_GET['lang'])){
	
		if (in_array($_GET['lang'], $possiblelanguages)){
			$_SESSION['lang'] = $_GET['lang'];
		}
	
	}

	switch ($_SESSION['lang']){
		case "de": 
			include("lang/de_DE.php");
			break;
		case "en":
			include("lang/en_EN.php");
			break;
		default:
			include("lang/de_DE.php");
	}
?><html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

		<meta name="author" content="Standard"/>
		<meta name="description" content="Studi-Mat" />
		<meta name="keywords" content="studi-mat, AStA, Uni Augsburg, Hochschulwahlen"/>

		<meta name="language" content="de" />
		<meta name="Content-Language" content="de" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">



		<title>Wahl-O-Mat | Hochschulwahlen 2016 an der Universität Augsburg</title>

		<link rel="stylesheet" type="text/css" href="css/style.css" >
		<link href="shariff/shariff.complete.css" rel="stylesheet">
		
	</head>
	<body>
		<div id="middle">

			<a href="?lang=<?php echo $_SESSION['lang']; ?>" title="zur Startseite" id="logo"></a>
	
			<div id="language">
				<?php if ($_SESSION['lang'] == "de"){
					echo '<a href="?lang=en">switch to english</a>';
				}else{
					echo '<a href="?lang=de">wechsel zu Deutsch</a>';
				}
				?>
				
			</div>
			
			<h1><?php echo $lang['header']; ?></h1>
			<noscript>
				<?php echo $lang['js']; ?>
			</noscript>
	
			<div  class="container container_1">
				<?php echo $lang['einleitung']; ?>
				
				<div class="containerFooter">
					<div id="startmatowahl" class="button">
						<?php echo $lang['losgehts']; ?>
					</div>
				
				<div class="shariff" data-theme="standard" data-orientation="vertical" data-lang="<?php echo $_SESSION['lang']; ?>" data-services="[&quot;facebook&quot;,&quot;twitter&quot;]"></div>	<br class="clear" />
				</div>
			</div>
	

	
			<div id="questioncontainer"  class="container container_2">
				<div id="questions"></div>
				<div id="jumpto"></div>
				<br class="clear" />
				<div class="containerFooter">
				
					<div class="shariff" data-theme="standard" data-orientation="vertical"  data-lang="<?php echo $_SESSION['lang']; ?>" data-services="[&quot;facebook&quot;,&quot;twitter&quot;]"></div>	<br class="clear" />
				</div>
			</div>
	
	
			<div id="gewichtung"  class="container container_3">
				<h2><?php echo $lang['gewichtung']; ?></h2>
				
				<?php echo $lang['gtxt']; ?>
				
				<table >
		
				</table>
		
				<div id="zumresult" class="button">
					<?php echo $lang['next']; ?>
				</div>
				<br class="clear" />
				<div class="containerFooter">
				
					<div class="shariff" data-theme="standard" data-orientation="vertical"  data-lang="<?php echo $_SESSION['lang']; ?>" data-services="[&quot;facebook&quot;,&quot;twitter&quot;]"></div>	<br class="clear" />
				</div>
			</div>


			<div id="results"  class="container container_4">
				<?php echo $lang['result']; ?>
				
		
				<div id="result_short">
					<!--<table>
			
					</table>-->
				</div>
				
				<div id="result_long">
					<table>
			
					</table>
				</div>
				
				<?php echo $lang['furtherinfos'];?>
				
				
				
				<h1>Zur Wahl treten an:</h3>
				<p><strong>GRÜNE Hochschlgruppe (CampusGrün)</strong><br />
				<a href="http://www.ghg-augsburg.de">www.ghg-augsburg.de</a><br>
				<a href="https://fb.me/GHG.Augsburg">facebook.com/GHG.Augsburg</a>			
				</p>
				</p>
				<p><strong>Sozialistisch-Demokratischer-Studierendenverband (DIE LINKE.SDS)</strong><br />
				<a href="https://www.facebook.com/lhg.augsburg?fref=ts">facebook.com/sds.augsburg</a>				
				</p>
				<p><strong>DIE LISTE</strong><br />
				<a href="https://fb.me/dieliste.augsburg">facebook.com/DieListe.Augsburg</a>				
				</p>
				<p><strong>JUSOS (Jungsozialisten in der SPD)</strong><br />
				<a href="https://www.facebook.com/jusohsgaux">facebook.com/jusohsgaux</a>				
				</p>
				<p><strong>RCDS (Ring Christlich Demokratischer Studenten)</strong><br />
				<a href="http://www.rcds-augsburg.de/">www.rcds-augsburg.de</a>				
				</p>
				<p><strong>Die Bewegung</strong><br />
				<a href="https://www.facebook.com/pages/Die-Bewegung/899153406797932">facebook.com/pages/Die-Bewegung/899153406797932</a>				
				</p>
<p><strong>Kritische Liste</strong><br />
				<a href="https://www.facebook.com/KritischeListe">facebook.com/KritischeListe</a>				
				</p>
				<p><strong>Augsburger Universitätsstudenten und Alumni (AUStA)</strong><br />
				Anmerkung: Nicht zu verwechseln mit dem AStA.
				<a href="http://alumni-augsburg.net/">www.alumni-augsburg.net</a>				
				</p>
				<p><strong>NoAUStA</strong><br />
				- hat keine Website -				
				</p>
				<p><strong>nah.gedacht</strong><br />
				<a href="https://www.facebook.com/nahgedacht">facebook.com/nahgedacht</a>				
				
			
				
				
				
				
			
			
<br class="clear" />
			<div class="containerFooter">
				
					<div class="shariff" data-theme="standard" data-orientation="vertical" data-lang="<?php echo $_SESSION['lang']; ?>" data-services="[&quot;facebook&quot;,&quot;twitter&quot;]"></div>	<br class="clear" />
				</div>
			</div>
	
	


		</div>
		<footer>
			
			  
			 
			<p id="extras">
			<a href="wahllokale.html">Wahllokale</a> | <a href="imprint.html">Impressum</a>
			</p>
		</footer>




		<?php
			if ($_GET['lang'] == "en"){
		?>
		<script type="text/javascript" src="lang/en_EN.js"></script>
		<script type="text/javascript" src="csv2json.php?lang=en"></script>
		<?php	
			}else{
		?>
		<script type="text/javascript" src="lang/de_DE.js"></script>
		<script type="text/javascript" src="csv2json.php"></script>
		
		<?php
			}
		?>
		<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		<!--<script type="text/javascript" src="csv2json.php"></script>-->
		<script type="text/javascript" src="js/meinungsvergleich.js"></script>
		<script src="shariff/shariff.min.js"></script>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.universum.pink/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 2]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//piwik.universum.pink/piwik.php?idsite=2" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

	</body>
</html>
