<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    function alert(type, msg) {
        let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
        let element = document.createElement('div');
        element.classList.add('alert', bs_class, 'alert-dismissible', 'fade', 'show', 'mb-3');
        element.innerHTML = `
            <strong class="me-3">${msg}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;
            
        // Lấy container alert thay vì append vào body
        let alertContainer = document.getElementById('alert-container');
            
        // Xóa alert cũ nếu có
        alertContainer.innerHTML = '';
            
        // Thêm alert mới
        alertContainer.appendChild(element);
            
        // Tự động ẩn sau 5 giây
        setTimeout(() => {
            if(element && element.classList.contains('show')) {
                element.classList.remove('show');
                setTimeout(() => {
                    element.remove();
                }, 150);
            }
        }, 5000);
    }
</script>