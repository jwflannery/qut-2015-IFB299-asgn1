function post() {
	var query = 'SELECT * FROM properties';
	var elem = document.getElementById('filterform').elements;
	var atLeastOne = false;
	for(var i = 0; i < elem.length; i++) {
		if (elem[i].type == 'checkbox') {
			if (elem[i].checked == true) {
				if (atLeastOne == true) {
					query += ' OR ';
				} else { 
					query += ' WHERE ';
				}
				atLeastOne = true;
				query += elem[i].name + ' = "' + elem[i].value + '"';
			}
		}
	}
	
	/* Remove this line to hide the query*/
	$('#query').html(query);
	
	$.post('phpscripts/propertylist.php', {variable: query}, function(data) { 
		$('#searchresults').html(data);
	});
}