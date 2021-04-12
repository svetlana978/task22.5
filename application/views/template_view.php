<!--<!DOCTYPE html> 
<html lang="ru"> 
<head> 
<meta charset="utf-8"> 
<title>Главная</title> 
</head> 
<body>
<?php
 include 'application/views/'.$content_view; 
?>
</body> 
</html>
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Accumen
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120712

Modified by VitalySwipe
-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<html lang="ru"> 
	<meta charset="utf-8"> 
	<title>Компания Х</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css" />	
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<a href="/">Компания Х</span></a>
				</div>
				<div id="menu">
					<ul>
						<li class="first active"><a href="/">Главная</a></li>
						<li><a href="/employees">Сотрудники</a></li>
						<li class="last"><a href="/contacts">Контакты</a></li>
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div id="page-bottom">
				<div id="page-bottom-sidebar">
					<h3>Наши контакты</h3>
					<ul class="list">
						<li class="first">тел: +7(999)1112233</li>
						<li>email: companyX@gmail.com</li>
						<li class="last">адрес: Ленинский проспект, д.1234, корп. 8</li>
					</ul>
				</div>
				<div id="page-bottom-content">
					<h3>О Компании</h3>
					<p>Компания была основана в таком-то году Ивановым Иваном Ивановичем. Занимаемся мы тем-то тем-то. Наши филиалы есть во многих крупных городах России.
					</p>
				</div>
				<br class="clearfix" />
			</div>
		</div>
		<div id="footer">
			<a href="/">Компания Х</a> &copy; 2020</a>
		</div>
	</body>
</html>