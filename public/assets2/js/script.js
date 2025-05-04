document.addEventListener('DOMContentLoaded', function () {
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

        // Pindah ke tab Validasi
        const tabTrigger = new bootstrap.Tab(document.querySelector('#validasi-tab'));
        tabTrigger.show();
      });
    });
  });
  document.getElementById('cariBtn').addEventListener('click', function(e) {
    e.preventDefault();
    const tahun = document.getElementById('tahunSelect').value;
    if (tahun) {
        document.getElementById('tabelRplContainer').style.display = 'block';
    } else {
        alert('Silakan pilih tahun kurikulum terlebih dahulu.');
    }
    });

    // Checkbox eksklusif
    document.addEventListener('change', function (e) {
        if (e.target.classList.contains('rpl-ya')) {
            const id = e.target.dataset.id;
            document.querySelector(`.rpl-tidak[data-id="${id}"]`).checked = false;
        } else if (e.target.classList.contains('rpl-tidak')) {
            const id = e.target.dataset.id;
            document.querySelector(`.rpl-ya[data-id="${id}"]`).checked = false;
        }
    });
    document.getElementById('simpanBtn').addEventListener('click', function() {
        alert('Data berhasil disimpan (simulasi tampilan saja)');
    });