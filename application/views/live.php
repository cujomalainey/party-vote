<html>
<head>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="/media/js/bootstrap.min.js"></script>
<script src="/media/js/dj.js"></script>
<script type="text/javascript">
	$(function() {
    $( "#dialog-confirm" ).dialog({
      resizable: false,
      height:240,
      width:600,
      modal: true,
      buttons: {
        "Initialize": function() {
        	controller.init();
        },
        "Run without Rdio": function() {
          	$( this ).dialog( "close" );
        }
      }
    });
    $( "#progressbar" ).progressbar({value: false});
  });
</script>
<link rel="stylesheet" href="/media/css/jquery-ui.min.css" />
<link rel="stylesheet" href="/media/css/bootstrap.min.css" />
<title>DJ</title>
<style type="text/css">

body {
	margin: 0px;
}

.row {
	width: 960px;
}

.column { padding-bottom: 10px;} /*float: left;*/
.portlet { margin: 1em 0em 1em 0em; }
.portlet-header { margin-top: 0.3em; margin-bottom: 0.3em; padding-bottom: 4px; padding-left: 0.2em; }
.portlet-header .ui-icon { float: right; }
.portlet-content { padding: 0.4em; }
.ui-sortable-placeholder { border: 1px dotted black; visibility: visible !important; height: 50px !important; }
.ui-sortable-placeholder * { visibility: hidden; }

</style>

</head>
<body>
<div id="dialog-confirm" title="Initialize">
 	<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>You need to initialize rdio if you want to use it.<br/><div id="progressbar"></div></p>
</div>
	<?php if ($playback)
{
	?>
<div id="apiswf"></div>
<input id="token" type="hidden" value=<?php echo "\"" . $token . "\""; ?>>
<?php
}
?>
<div class="row container">
	<div class="span2" id="track"></div>
	<div id="header" class="span8">
		<div id="progress">
		</div>
	</div>
	<div class="span2">
		<ul class="nav nav-tabs nav-stacked">
			<li><a href="">Sign Out</a></li>
			<li><a href="http://qrickit.com/api/qr?d=http://wizuma.com/index.php/voter_json/qr_code/1&addtext=Vote%20For%20Music&txtcolor=000000&fgdcolor=000000&bgdcolor=ffffff&qrsize=450&t=p&e=m" target="_blank">Get QR Code</a></li>
		</ul>
	</div>
</div>
<div class="row container">
	<div class="span2 menu">
	<ul class="nav nav-tabs nav-stacked">
		<li><a id="play">Play</a></li>
		<li><a id="stop">Stop</a></li>
		<li><a id="next">Next</a></li>
	</ul>
	</div>
	<div id="songQueue" class="main span8" >
	</div>
	<div id="log" class="span2">
	Fusce sit amet felis nisi. Donec erat eros, 
</div>
</div>
</body>
</html>
