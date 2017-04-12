function updateTable() {
	var table = document.getElementById('table_barang').getElementsByTagName('tbody')[0];

    var newRow = table.insertRow(table.rows.length);

    var newCell = newRow.insertCell(0);

    var newText = document.createTextNode(document.getElementById('nama_barang'));
    newCell.appendChild(newText);

    newCell = newRow.insertCell(1);

    newText = document.createTextNode(document.getElementById('jum_barang'));
    newCell.appendChild(newText);
}