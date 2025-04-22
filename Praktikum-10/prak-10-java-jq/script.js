// Variable Scope
var nama = "Febrilia"; // Global
let umur = 21; // Block scope
const kota = "Purwokerto"; // Constant

// Kondisi
if (umur > 18) {
  console.log("Dewasa");
} else {
  console.log("Anak-anak");
}

// Perulangan for
for (let i = 0; i < 5; i++) {
  console.log(i);
}

// Perulangan while
let j = 0;
while (j < 5) {
  console.log(j);
  j++;
}

// Fungsi biasa
function sapa(nama) {
  return "Halo, " + nama;
}
console.log(sapa("Febrilia"));

// Objek
const mahasiswa = {
  nama: "Febrilia",
  umur: 21,
  sapa: function () {
    return "Halo, saya " + this.nama;
  },
};
console.log(mahasiswa.sapa());

// jQuery DOM Manipulasi
$(document).ready(function () {
  $("#judul").text("Belajar jQuery");
  $(".paragraf").css("color", "blue");

  $("#tombol").click(function () {
    alert("Tombol diklik!");
  });

  $("#kotak").fadeOut(1000).fadeIn(1000);

  $("#toggleButton").click(function () {
    $("#panel").slideToggle();
  });

  $("#fadeButton").click(function () {
    $("#box").fadeToggle();
  });

  // Validasi Form
  $("#formNama").submit(function (e) {
    e.preventDefault();
    const inputNama = $("#inputNama").val().trim();
    if (inputNama === "") {
      $("#errorNama").show();
    } else {
      $("#errorNama").hide();
      alert("Form berhasil dikirim! Nama: " + inputNama);
    }
  });
});

// jQuery GET API
$.get("https://jsonplaceholder.typicode.com/posts", function (data) {
  console.log("Data dari $.get:", data);
});

// Async/Await GET
async function getData() {
  let response = await fetch("https://jsonplaceholder.typicode.com/posts");
  let data = await response.json();
  console.log("Data dari fetch:", data);
}
getData();

// Async/Await POST
async function kirimData() {
  let response = await fetch("https://jsonplaceholder.typicode.com/posts", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      title: "Belajar JavaScript",
      body: "Ini contoh pengiriman data",
      userId: 1,
    }),
  });

  let data = await response.json();
  console.log("Data setelah POST:", data);
}
kirimData();

$(document).ready(function () {
  $("#formNama").submit(function (e) {
    e.preventDefault();

    const input = $("#inputNama");
    const nama = input.val().trim();

    if (nama === "") {
      input.addClass("is-invalid");
    } else {
      input.removeClass("is-invalid").addClass("is-valid");
      alert("Form berhasil dikirim! Nama: " + nama);
    }
  });
});
