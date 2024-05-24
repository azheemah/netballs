document.addEventListener("DOMContentLoaded", function() {
    // Form validation for login
    const loginForm = document.querySelector("form[action='login.php']");
    if (loginForm) {
        loginForm.addEventListener("submit", function(event) {
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;
            if (!username || !password) {
                alert("Please fill in both username and password.");
                event.preventDefault();
            }
        });
    }

    // Form validation for adding new netball ball
    const addNetballForm = document.querySelector("form[action='../add_netball.php']");
    if (addNetballForm) {
        addNetballForm.addEventListener("submit", function(event) {
            const name = document.getElementById("name").value;
            const description = document.getElementById("description").value;
            const price = document.getElementById("price").value;
            if (!name || !description || !price) {
                alert("Please fill in all fields.");
                event.preventDefault();
            }
        });
    }

    // Example of a simple interactive element
    const products = document.querySelectorAll(".product");
    products.forEach(product => {
        product.addEventListener("mouseenter", function() {
            product.style.backgroundColor = "#f0f0f0";
        });
        product.addEventListener("mouseleave", function() {
            product.style.backgroundColor = "#fff";
        });
    });
});
