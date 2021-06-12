function validateForm() {
    var nama = document.forms["myForm"]["nama"].value;
	var ttl = document.forms["myForm"]["ttl"].value;
	var kotalahir = document.forms["myForm"]["kotalahir"].value;
	var alamatskrg = document.forms["myForm"]["alamatskrg"].value;
	var nbi = document.forms["myForm"]["nbi"].value;
	var email = document.forms["myForm"]["email"].value;
	var notelp = document.forms["myForm"]["notelp"].value;
	var alamatdomisili = document.forms["myForm"]["alamatdomisili"].value;
	var motto = document.forms["myForm"]["motto"].value;
	var motifasiukmki = document.forms["myForm"]["mtfs"].value;
	
	
    if (nama == "") {
        alert("Nama Anda harus di isi !");
        return false;
    } else if (ttl == "") {
        alert("Tanggal lahir harus di isi !");
        return false;
    }else if (kotalahir == "") {
        alert("Tempat lahir harus di isi !");
        return false;
    }else if (alamatskrg == "") {
        alert("Tempat Tinggal sekarang harus di isi !");
        return false;
    }else if (nbi == "") {
        alert("Nbi harus di isi !");
        return false;
    }else if (email == "") {
        alert("Email harus di isi");
        return false;
    }else if (notelp == "") {
        alert("nomor hp harus di isi");
        return false;
    }else if (alamatdomisili == "") {
        alert("Alamat Domisili harus di isi !");
        return false;
    }else if (motto == "") {
        alert("Motto harus di isi");
        return false;
    }else {
        alert("Motifasi anda harus di isi !");
        return false;
    }
	
}
