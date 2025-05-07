document.addEventListener("DOMContentLoaded", function () {
    // ===== BAGIAN 1: Tampilkan tabel jika tahun dipilih =====
    const cariBtn = document.getElementById("cariBtn");
    const tahunSelect = document.getElementById("tahunSelect");
    const tabelRpl = document.getElementById("tabelRplContainer");

    cariBtn.addEventListener("click", function (e) {
        e.preventDefault(); // cegah form submit

        const selectedTahun = tahunSelect.value;

        if (selectedTahun) {
            tabelRpl.style.display = "block"; // tampilkan tabel
        } else {
            alert("Silakan pilih tahun kurikulum terlebih dahulu.");
            tabelRpl.style.display = "none";
        }
    });

    // ===== BAGIAN 2: Checkbox saling kunci (YA & TIDAK) =====
    const yaCheckboxes = document.querySelectorAll(".rpl-ya");
    const tidakCheckboxes = document.querySelectorAll(".rpl-tidak");

    yaCheckboxes.forEach(function (yaCheckbox) {
        yaCheckbox.addEventListener("change", function () {
            const id = yaCheckbox.dataset.id;
            const tidakCheckbox = document.querySelector(`.rpl-tidak[data-id="${id}"]`);

            if (yaCheckbox.checked) {
                tidakCheckbox.checked = false;
                tidakCheckbox.disabled = true;
            } else {
                tidakCheckbox.disabled = false;
            }
        });
    });

    tidakCheckboxes.forEach(function (tidakCheckbox) {
        tidakCheckbox.addEventListener("change", function () {
            const id = tidakCheckbox.dataset.id;
            const yaCheckbox = document.querySelector(`.rpl-ya[data-id="${id}"]`);

            if (tidakCheckbox.checked) {
                yaCheckbox.checked = false;
                yaCheckbox.disabled = true;
            } else {
                yaCheckbox.disabled = false;
            }
        });
    });
});