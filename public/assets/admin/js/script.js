function toggleSidebar() {
  document.querySelector(".sidebar").classList.toggle("active");
}
function closeSidebar() {
  document.querySelector(".sidebar").classList.remove("active");
}
const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
  const type =
    password.getAttribute("type") === "password" ? "text" : "password";
  password.setAttribute("type", type);
  this.innerHTML =
    type === "password"
      ? '<i class="bi bi-eye"></i>'
      : '<i class="bi bi-eye-slash"></i>';
});