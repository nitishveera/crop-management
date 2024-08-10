document.getElementById("loginForm").addEventListener("submit", function (e) {
    e.preventDefault();
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    // You can add your login logic here, e.g. checking credentials, etc.
    // For this example, let's just show a simple alert for successful login.
    alert(`Logged in with email: ${email}`);
});