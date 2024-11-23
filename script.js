document.getElementById('registerForm').addEventListener('submit', function (e) {
    const password = e.target.password.value;
    if (password.length < 6) {
        e.preventDefault(); // Mencegah pengiriman formulir
        alert('Password harus memiliki minimal 6 karakter.');
    }
});
