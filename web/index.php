<?php

require_once './markdown.php';

$readme = file_get_contents('../README.md');
$piece = file_get_contents('../PIECE');
$contributors = file_get_contents('../CONTRIBUTORS');
?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Révisable 1</title>
	<meta name="description" content="Révisable 1 is a physical sculptures based on Git and initiated by Raphaël Bastide">
	<link rel="stylesheet" media="all" href="css/main.css">
	<link rel="shortcut icon" href="css/img/favicon.gif" type="image/x-icon" />
	<link href="https://github.com/imalorg/revisable-1/commits/master.atom" rel="alternate" title="Recent commits for Révisable 1" type="application/atom+xml" /><body>
	<header>
		<div class="titles">
			<h1>Réviasble 1</h1>
			<h2>Versioned physical sculpture exposed at iMAL, Brussels</h2>
			<nav role="navigation" class="menu">
				<button class="textboxes">About</button>
			</nav>
		</div>
	</header>
	<div class="main-content">
	<div id="tree" class="contentbox">
		<div class="inner">
			<div class="vbox" id="v0_9_3">
				<img width="320" height="240" title="Révisable 1 v0.1" src="img/test.gif" />
				<ul class="caption">
					<li class="version">version: 0.9.3</li>
					<li class="date">date: 2013-05-28</li>
					<li class="code">code: <a href="https://github.com/raphaelbastide/1962/blob/v0.9.3/PIECE">on GitHub</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="textboxes" class="contentbox">
		<div class="readme textbox">
			<?php echo markdown($readme); ?>
		</div>
		<div class="piece textbox">
			<h2>Current state of the PIECE file</h2>
			<pre><?php echo markdown($piece); ?></pre>
		</div>
		<div class="contributors textbox">
			<h2>Contributors</h2>
			<pre><?php echo $contributors ?></pre>
		</div>
		<footer>
		</footer>
	</div>
	<div class="frame"></div>
	<script src="js/libs/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/script.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-26267672-3']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</body>
</html>
