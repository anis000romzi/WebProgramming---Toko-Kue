// Daftar kue
let dataKue = [
  {
    nama: "Black Forest",
    harga: 50000,
  },

  {
    nama: "Lava Cake",
    harga: 60000,
  },

  {
    nama: "Brownies",
    harga: 30000,
  },

  {
    nama: "Ketan hitam",
    harga: 40000,
  },
];

// Variabel nama
let tampilNama1 = dataKue[0].nama;
let tampilNama2 = dataKue[1].nama;
let tampilNama3 = dataKue[2].nama;
let tampilNama4 = dataKue[3].nama;

// Variabel harga
let tampilHarga1 = dataKue[0].harga;
let tampilHarga2 = dataKue[1].harga;
let tampilHarga3 = dataKue[2].harga;
let tampilHarga4 = dataKue[3].harga;

let detailNama;
let detailHarga;

// Mengubah variabel berdasarkan kue yang dipilih
function changeVariable(nama, harga) {
  detailNama = nama;
  detailHarga = harga;
}

// Mengirim variabel ke php
function post() {
  $.ajax({
    type: "POST",
    url: "php/konfirmasi.php",
    data: {
      postharga: detailHarga,
      postnama: detailNama,
    },
  });
}

// Fungsi Search
$(document).ready(function () {
  $("#search").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $(".card").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
});
