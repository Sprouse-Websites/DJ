function filter() {
	var f = 0;
	var input, filter, table, tr, td1, td2, i, txtValue;
	input = document.getElementById("filterbox");
	filter = input.value.toUpperCase();
	table = document.getElementById("myTable");
	tr = table.getElementsByTagName("tr");
	for (i = 0; i < tr.length; i++) {
		td1 = tr[i].getElementsByTagName("td")[1];
		td2 = tr[i].getElementsByTagName("td")[2];
		if (td1) {
			txtValue = td1.textContent || td1.innerText || td2.textContent || td2.innerText;;
			if (txtValue.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
				f = f + 1;
			} else if (txtValue.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
				f = f + 1;
			} else {
				tr[i].style.display = "none";
			}
		}
	}
	document.getElementById("songsfound").innerHTML = f + " songs found matching query \"" + document.getElementById("filterbox").value + "\"";
}
