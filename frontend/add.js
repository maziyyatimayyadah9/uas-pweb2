// const btnAdd = document.getElementById("add");
// btnAdd.onclick = function (evt) {
//   const data = {
//     merk_laptop: document.getElementById("merk_laptop").value,
//     seri_laptop: document.getElementById("seri_laptop").value,
//     tahun_produksi: document.getElementById("tahun_produksi").value,
//   };

//   const xhttp = new XMLHttpRequest();
//   xhttp.open(
//     "POST",
//     "http://localhost/laptop/backend/tambah_proses.php",
//     true
//   );
//   xhttp.setRequestHeader("Content-type", "application/json; charset=UTF-8");
//   xhttp.send(JSON.stringify(data));
//   xhttp.onreadystatechange = function () {
//      var result = JSON.parse(this.responseText);
//      if (result.status == "success") {
//        window.location.href = "index.html";
//      } else {
//        alert("Eror");
//      }
//    };
//    xhttp.onerror = function () {
//      alert("Terjadi kesahalan");
//    };

  
// }

$(document).on("click", "#add", function () {
  var lptp = new Object();
  lptp.merk_laptop = $("#merk_laptop").val();
  lptp.seri_laptop = $("#seri_laptop").val();
  lptp.tahun_produksi = $("#tahun_produksi").val();
  $.post("../backend/tambah_proses.php", JSON.stringify(lptp), function (resp,status) {
    let result = resp;
    if (result.status == "success") {
      window.location.href = "index.html";
    } else {
      alert("data gagal tersimpan");
    }
  });
});