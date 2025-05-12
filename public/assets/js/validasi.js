// Script check semua baris
const yesAll = document.getElementById('yesALL');
const noAll = document.getElementById('noALL');

yesAll.addEventListener('change', function() {
    if (this.checked) {
        noAll.checked = false;
        // centang semua yes, uncentang semua no
        document.querySelectorAll('.yes-check').forEach(cb => cb.checked = true);
        document.querySelectorAll('.no-check').forEach(cb => cb.checked = false);
    } else {
        document.querySelectorAll('.yes-check').forEach(cb => cb.checked = false);
    }
});

noAll.addEventListener('change', function() {
    if (this.checked) {
        yesAll.checked = false;
        // centang semua no, uncentang semua yes
        document.querySelectorAll('.no-check').forEach(cb => cb.checked = true);
        document.querySelectorAll('.yes-check').forEach(cb => cb.checked = false);
    } else {
        document.querySelectorAll('.no-check').forEach(cb => cb.checked = false);
    }
});

// Script agar di tiap baris hanya bisa pilih satu
document.querySelectorAll('tbody tr').forEach(row => {
    const yesCb = row.querySelector('.yes-check');
    const noCb = row.querySelector('.no-check');

    yesCb.addEventListener('change', function() {
        if (this.checked) {
            noCb.checked = false;
        }
    });

    noCb.addEventListener('change', function() {
        if (this.checked) {
            yesCb.checked = false;
        }
    });
});

 // Simpan data semua baris
document.getElementById('submitBtn').addEventListener('click', function() {
    const prmNIM = document.querySelector('.nim')?.textContent.trim();
    const data = [];
    var prmError = '';
    document.querySelectorAll('tbody tr.dt-row').forEach(row => {
        const kodeMatkul = row.querySelector('.kode-matkul')?.textContent.trim();
        const isYes = row.querySelector('.yes-check')?.checked;
        const isNo = row.querySelector('.no-check')?.checked;
        
        // Validasi harus salah satu yang dipilih
        if (!isYes && !isNo) {
            prmError = 'Harap pilih Ya atau Tidak untuk semua mata kuliah!';
            return; // keluar dari loop foreach saat error ditemukan
        }

        data.push({
            nim: prmNIM,
            kode_matkul: kodeMatkul,
            rpl: isYes ? '1' : '0'
        });
        
    });

    if(prmError != ''){
        return alert(prmError);
    } 

    // TODO: Kirim data via AJAX (opsional)
    fetch('/rpl/simpan/' + prmNIM, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest' // penting untuk CI4
        },
        body: JSON.stringify(data)
    })
    .then(res => res.json())
    .then(res => {
        if (res.status === 'ok') {  
            window.location.href = res.redirect; // pastikan controller mengembalikan 'redirect'
            alert('Data berhasil disimpan!');
        } else {
            alert('Gagal menyimpan data.');
        }
    })
    .catch(err => {
        console.error(err);
        alert('Terjadi kesalahan saat mengirim data.');
    });
});