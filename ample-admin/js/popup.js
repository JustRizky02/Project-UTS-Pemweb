// Menampilkan popup saat tombol "Edit" diklik
document.addEventListener('DOMContentLoaded', function() {
    var editButtons = document.querySelectorAll('.edit-button');
    var editPopups = document.querySelectorAll('.edit-popup');

    for (var i = 0; i < editButtons.length; i++) {
        editButtons[i].addEventListener('click', function(event) {
            event.preventDefault();
            var popup = this.nextElementSibling;

            if (popup && popup.classList.contains('edit-popup')) {
                popup.style.display = 'block';
            }
        });
    }

    // Menyembunyikan popup saat tombol "Batalkan" diklik
    var cancelButtons = document.querySelectorAll('.cancel-button');
    for (var j = 0; j < cancelButtons.length; j++) {
        cancelButtons[j].addEventListener('click', function(event) {
            event.preventDefault();
            var popup = this.closest('.edit-popup');

            if (popup) {
                popup.style.display = 'none';
            }
        });
    }
});
