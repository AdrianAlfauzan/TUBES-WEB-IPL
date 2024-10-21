// Mendapatkan elemen menu pengguna
var buttonProfileAdmin = document.getElementById("adminButton");
var menuProfileAdmin = document.getElementById("adminMenu");

// Menangani klik pada tombol pengguna untuk membuka/tutup menu
buttonProfileAdmin.onclick = function (e) {
  e.stopPropagation(); // Mencegah bubbling ke document
  if (menuProfileAdmin.classList.contains("hidden")) {
    menuProfileAdmin.classList.remove("hidden");
    setTimeout(() => {
      menuProfileAdmin.classList.remove("opacity-0");
      menuProfileAdmin.classList.add("opacity-1000");
    }, 10);
  } else {
    menuProfileAdmin.classList.add("opacity-0");
    setTimeout(() => {
      menuProfileAdmin.classList.add("hidden");
    }, 300);
  }
};

// Menyembunyikan menu ketika mengklik di luar menu
document.onclick = function (e) {
  if (!checkParent(e.target, menuProfileAdmin) && !checkParent(e.target, buttonProfileAdmin)) {
    if (!menuProfileAdmin.classList.contains("hidden")) {
      menuProfileAdmin.classList.add("opacity-0");
      setTimeout(() => {
        menuProfileAdmin.classList.add("hidden");
      }, 300);
    }
  }
};

// Fungsi untuk memeriksa apakah elemen adalah parent dari elemen lain
function checkParent(t, elm) {
  while (t.parentNode) {
    if (t === elm) {
      return true;
    }
    t = t.parentNode;
  }
  return false;
}
