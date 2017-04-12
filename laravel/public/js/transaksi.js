function updateHarga() {
	console.log('test');
	var id = document.getElementById("makanan_id");
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('[name="_token"]').val()
        }
	});
	$.ajax({
	    method: 'POST',
	    url: '/addmakanan/update',
	    data: {'id' : id},
	    success: function(response){ // What to do if we succeed
	        var obj = $.parseJSON(response);
	        document.getElementById("nama_makanan").innerHTML = "Nama Makanan: " + obj.nama_makanan;
	        document.getElementById("harga").innerHTML = "Harga: " + obj.harga;
	        var val = parseInt(document.getElementById("total_harga").value) + parseInt(obj.harga);
	        document.getElementById("total_harga").innerHTML =  val;
	    },
	    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
	        console.log(JSON.stringify(jqXHR));
	        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
	    }
	});
}