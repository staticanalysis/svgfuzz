<!doctype html>
<!-- make sure we have a HTML5 document -->
<html>
<head>
	<style>
		@font-face {
		  font-family: test;
		  src: url('test.svg');
		}
		li {
			height:70px;
			width:100px;
			border: 1px solid black;
		}
	</style>
</head>
<body>
<!-- embed SVG image via IMG and CSS -->
<ol>
	<li>
		<img id="test01" src="test.svg">
	</li>
	<li>
		<div style="background:url('test.svg')">2</div>
	</li>
	<li>
		<div style="content:url('test.svg')">3</div>
	</li>
	<li>
		<ul style="list-style:url('test.svg')"><li>4</li></ul>
	</li>
	<li>
		<div style="border-image:url('test.svg');-moz-border-image:url('test.svg');-webkit-border-image:url('test.svg')">5</div>
	</li>
	<li>
		<div style="cursor:url('test.svg'), pointer">6</div>
	</li>
	<li>
		<div style="color-profile:url('test.svg')">7</div>
	</li>	
	<li>
		<div style="font-family:test">8</div>
	</li>		
	<li>
		<body background="test.svg">9</body>
	</li>
	<li>
		<table background="test.svg">10</table>
	</li>	
</ol>

<!-- attempt to steal SVG data via CANVAS -->
<canvas id="canvas" width="150" height="150"></canvas>
<script type="application/x-javascript">
	var canvas = document.getElementById('canvas')
	var ctx = canvas.getContext('2d');
	var img = new Image();
	img.src = 'test.svg';
	img.onload = function(){
		ctx.drawImage(img, 0, 0, 150, 150);
    }
  	setTimeout(function(){
		//alert(canvas.toDataURL())
  	},1000);
</script>
</body>
</html>