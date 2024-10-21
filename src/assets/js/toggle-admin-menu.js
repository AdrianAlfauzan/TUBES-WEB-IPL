// Mendapatkan elemen navigasi
var buttonNavMenuAdmin = document.getElementById("nav-toggle");
var navMenuAdmin = document.getElementById("nav-content");

// Menangani klik pada tombol navigasi untuk membuka/tutup menu
buttonNavMenuAdmin.onclick = function (e) {
  e.stopPropagation(); // Mencegah bubbling ke document
  if (navMenuAdmin.classList.contains("hidden")) {
    navMenuAdmin.classList.remove("hidden");
    setTimeout(() => {
      navMenuAdmin.classList.remove("opacity-0");
      navMenuAdmin.classList.add("opacity-1000");
    }, 10);
  } else {
    navMenuAdmin.classList.add("opacity-0");
    setTimeout(() => {
      navMenuAdmin.classList.add("hidden");
    }, 300);
  }
};

// Menangani klik pada item menu
var itemMenu = document.querySelectorAll(".menu-item");
itemMenu.forEach(function (item) {
  item.onclick = function () {
    console.log(this.innerText + " diklik!");
    navMenuAdmin.classList.add("opacity-0");
    setTimeout(() => {
      navMenuAdmin.classList.add("hidden");
    }, 300);
  };
});

// Menyembunyikan menu ketika mengklik di luar menu
document.onclick = function (e) {
  if (!checkParent(e.target, navMenuAdmin) && !checkParent(e.target, buttonNavMenuAdmin)) {
    if (!navMenuAdmin.classList.contains("hidden")) {
      navMenuAdmin.classList.add("opacity-0");
      setTimeout(() => {
        navMenuAdmin.classList.add("hidden");
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
