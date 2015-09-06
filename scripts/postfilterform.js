function post() {
	var query = 'SELECT * FROM properties';
	var elem = document.getElementById('filterform').elements;
	var atLeastOne = false;
	var useAnd = false;
	var prevElement = ""
	for(var i = 0; i < elem.length; i++) {
		if (elem[i].type == 'checkbox') {
			if (elem[i].checked == true) {
				if (prevElement != "") {
					if (elem[i].name != prevElement) {
						useAnd = true;
					} else {
						useAnd = false;
					}
				}
				
				prevElement = elem[i].name;
			
			
				if (atLeastOne == true) {
					if (useAnd == true) {
						query += ') AND (';
					} else {
						query += ' OR ';
					}
				} else { 
					query += ' WHERE (';
				}
				atLeastOne = true;
				query += elem[i].name + ' = "' + elem[i].value + '"';
			}
		}
	}
	query += ')';
	query += 'ORDER BY Address';
	
	/* Remove this line to hide the query*/
	$('#query').html(query);
	
	$.post('phpscripts/propertylist.php', {variable: query}, function(data) { 
		$('#searchresults').html(data);
	});
}