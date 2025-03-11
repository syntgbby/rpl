document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("tbody tr").forEach(row => {
        let checkboxes = row.querySelectorAll(".form-check-input");
        
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener("change", function () {
                if (this.checked) {
                    checkboxes.forEach(cb => {
                        if (cb !== this) {
                            cb.checked = false;
                        }
                    });
                }
            });
        });
    });
});

const button = document.getElementById('kt_docs_sweetalert_basic');

button.addEventListener('click', e =>{
    e.preventDefault();

    Swal.fire({
        text: "DATA BERHASIL DIPROSES",
        icon: "success",
        buttonsStyling: false,
        confirmButtonText: "Siap Selanjutnya?",
        customClass: {
            confirmButton: "btn btn-primary"
        }
    });
});
    // Menambahkan event listener untuk tombol Batal
    document.querySelector(".btn-danger").addEventListener("click", function () {
        document.querySelectorAll(".form-check-input").forEach(checkbox => {
            checkbox.checked = false;
        });
    });