document.addEventListener('DOMContentLoaded', function () {
    const validasiTabButton = document.getElementById('validasi-tab');

    // Nonaktifkan tab Validasi di awal
    validasiTabButton.classList.add('disabled');
    validasiTabButton.setAttribute('tabindex', '-1');
    validasiTabButton.setAttribute('aria-disabled', 'true');

    // Tombol edit
    const editButtons = document.querySelectorAll('.editBtn');
    editButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();

            // Ambil data dari tombol
            const nama = this.dataset.nama;
            const alamat = this.dataset.alamat;
            const umur = this.dataset.umur;
            const lama = this.dataset.lama;
            const posisi = this.dataset.posisi;

            // Masukkan data ke tab Validasi
            document.getElementById('namaPeserta').innerText = nama;
            document.getElementById('alamatPeserta').innerText = alamat;
            document.getElementById('umurPeserta').innerText = umur;
            document.getElementById('lamaKerjaPeserta').innerText = lama;
            document.getElementById('posisiPeserta').innerText = posisi;

            // Aktifkan tab Validasi
            validasiTabButton.classList.remove('disabled');
            validasiTabButton.removeAttribute('tabindex');
            validasiTabButton.setAttribute('aria-disabled', 'false');

            // Pindah ke tab Validasi
            const tabTrigger = new bootstrap.Tab(validasiTabButton);
            tabTrigger.show();
        });
    });

    // Cegah klik manual ke tab Validasi kalau belum aktif
    validasiTabButton.addEventListener('click', function (e) {
        if (this.classList.contains('disabled')) {
            e.preventDefault();
            e.stopPropagation();
        }
    });

    // tombol cari
    const cariBtn = document.getElementById('cariBtn');
    if (cariBtn) {
        cariBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const tahun = document.getElementById('tahunSelect').value;
            if (tahun) {
                document.getElementById('tabelRplContainer').style.display = 'block';
            } else {
                alert('Silakan pilih tahun kurikulum terlebih dahulu.');
            }
        });
    }

    // Checkbox eksklusif
    document.addEventListener('change', function (e) {
        if (e.target.classList.contains('rpl-ya')) {
            const id = e.target.dataset.id;
            const checkbox = document.querySelector(`.rpl-tidak[data-id="${id}"]`);
            if (checkbox) checkbox.checked = false;
        } else if (e.target.classList.contains('rpl-tidak')) {
            const id = e.target.dataset.id;
            const checkbox = document.querySelector(`.rpl-ya[data-id="${id}"]`);
            if (checkbox) checkbox.checked = false;
        }
    });

    // tombol simpan
    const simpanBtn = document.getElementById('simpanBtn');
    if (simpanBtn) {
        simpanBtn.addEventListener('click', function() {
            alert('Data berhasil disimpan (simulasi tampilan saja)');
        });
    }
});
