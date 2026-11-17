import 'bootstrap';
import Swal from 'sweetalert2';

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-confirm-delete]').forEach((form) => {
        form.addEventListener('submit', (event) => {
            event.preventDefault();

            Swal.fire({
                title: form.dataset.title,
                text: form.dataset.text,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: form.dataset.confirm,
                cancelButtonText: form.dataset.cancel,
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
});
