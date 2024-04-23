// Fungsi untuk menerapkan animasi saat halaman dimuat
document.addEventListener("DOMContentLoaded", function() {
    // Ambil elemen judul dan deskripsi
    var title = document.getElementById("title");
    var description = document.getElementById("description");

    // Atur awal posisi elemen ke luar layar atas
    title.style.transform = "translateY(-50px)";
    description.style.transform = "translateY(-50px)";
    // Atur awal opasitas elemen menjadi 0 (transparan)
    title.style.opacity = "0";
    description.style.opacity = "0";

    // Timeout sederhana untuk memberi sedikit jeda sebelum memulai animasi
    setTimeout(function() {
        // Animasi elemen masuk dari atas
        title.style.transition = "transform 0.5s ease, opacity 0.5s ease";
        title.style.transform = "translateY(0)";
        title.style.opacity = "1";

        description.style.transition = "transform 0.5s ease, opacity 0.5s ease";
        description.style.transform = "translateY(0)";
        description.style.opacity = "1";
    }, 200); // Jeda 200 milidetik sebelum animasi dimulai
});


function toggleDropdown() {
    var dropdownContent = document.getElementById("blog-dropdown-content");
    dropdownContent.classList.toggle("show");
}

// Menutup dropdown saat klik di luar dropdown
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

document.addEventListener("DOMContentLoaded", function() {
    const galleryItems = document.querySelectorAll(".gallery-container img");

    galleryItems.forEach(item => {
        item.addEventListener("mouseover", function() {
            item.style.transform = "scale(1.2)"; // Mengubah skala gambar saat cursor dilewati
        });

        item.addEventListener("mouseleave", function() {
            item.style.transform = "scale(1)"; // Mengembalikan skala gambar ke normal saat cursor meninggalkan gambar
        });
    });
});


