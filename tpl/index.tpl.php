<html>
<head>
	<title>Teszt</title>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/js.js"></script>
	
</head>
<body>
	<table id="test_table">
		<thead>
			<tr>
				<th>Név</th><th>Érték (arány)</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
        <input type="hidden" id="numrows" name="numrows" value=""></div>
	<form id="test_form" method="post">
                
		<div>
			<input type="text" name="key[]" value="k0" class="key" />: <input type="text" name="val[]" value="0" class="val" />
		</div>
		<div>
			<input type="text" name="key[]" value="k1" class="key" />: <input type="text" name="val[]" value="1" class="val" />
		</div>
		<div>
			<input type="text" name="key[]" value="k2" class="key" />: <input type="text" name="val[]" value="2" class="val" />
		</div>
            
		<a href="#" id="newrow" name="newrow" onclick="newRow()">Add new row</a>

		<input type="submit" value="Go" />
                
	</form>
    <br />
    <br />
    <span id="mes">Right form</Span>
</body>
</html>
