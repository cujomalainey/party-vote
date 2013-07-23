<html>
<head>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="/media/js/dj.js"></script>
<link rel="stylesheet" href="/media/css/jquery-ui.min.css" />
<title><?php echo $site; ?></title>
<style type="text/css">

body {
	margin: 0px;
}

#header {
	height: 40px;
	background-color: #0f0;
}

#menu {
	width: 10%;
	float: left;
	background-color: #f00;
}

#songqueue {
	width: 80%;
	float: left;
	background-color: #00f;
}

#log {
	width: 10%;
	float: left;
	background-color: #0ff;
}

.column { float: left; padding-bottom: 10px; }
.portlet { margin: 1em 1em 1em 1em; }
.portlet-header { margin: 0.3em; padding-bottom: 4px; padding-left: 0.2em; }
.portlet-header .ui-icon { float: right; }
.portlet-content { padding: 0.4em; }
.ui-sortable-placeholder { border: 1px dotted black; visibility: visible !important; height: 50px !important; }
.ui-sortable-placeholder * { visibility: hidden; }

</style>

</head>
<body>
	<?php if ($playback)
{
	?>
<div id="apiswf"></div>
<input id="token" type="hidden" value=<?php echo "\"" . $token . "\""; ?>>
<?php
}
?>
<div id="header">
</div>
<div id="menu">
	<button id="play">Play</button>
	<button id="queue">Queue</button>
	<button id="next">Next</button>
</div>
<div id="songQueue" class="column">
 
  <div class="portlet">
    <div class="portlet-header">Feeds</div>
    <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
  </div>
 
  <div class="portlet">
    <div class="portlet-header">News</div>
    <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
  </div>
 
</div>
<div id="log">
	Fusce sit amet felis nisi. Donec erat eros, rhoncus et tempus a, suscipit sit amet ante. Vestibulum tristique nec nibh vel aliquam. Phasellus interdum lectus nec mi varius hendrerit. Integer iaculis ante sit amet blandit condimentum. Donec semper risus et nisl posuere egestas. Curabitur feugiat lacus mi, et rutrum sem pharetra quis. In id scelerisque orci. Mauris et commodo orci, nec ullamcorper dolor. Aliquam sit amet vehicula augue, at accumsan nibh. Donec sapien odio, consequat in magna id, commodo imperdiet ante.
</div>
</body>
</html>