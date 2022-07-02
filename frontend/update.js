let param = window.location.search;
let urlparam = new URLSearchParams(param);
let id = urlparam.get("id");
console.log(id);
let data = new Object();
data.id = id;


let jsondata = JSON.stringify(data);
$.post(
    "../backend/get_by_id.php",
    jsondata,
    function (resp) {
        // console.log(resp);
        let detail_data = JSON.parse(resp);
        console.log(JSON.parse(resp));
        $("#merk_laptop").val(detail_data.merk_laptop);
        $("#seri_laptop").val(detail_data.seri_laptop);
        $("#tahun_produksi").val(detail_data.tahun_produksi);
        
    }
);


$(document).on('click', '#save', function () {
    let dt = new Object();
    dt.id = id;
    dt.merk_laptop = $("#merk_laptop").val();
    dt.seri_laptop = $("#seri_laptop").val();
    dt.tahun_produksi = $("#tahun_produksi").val();
    let new_data = JSON.stringify(dt);
    $.post(
        "../backend/update_data.php",
        new_data,
        function (resp) {
            console.log(resp);
            let result = JSON.parse(resp);
            if (result.status === "success") {
              alert("Terjadi perubahan data");
              window.location.href = "index.html";
            } else {
              alert("Eror");
            }
        }
        
    );

});