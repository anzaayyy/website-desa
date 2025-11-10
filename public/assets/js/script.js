// Dropdown on hover (desktop)
document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".nav-item.dropdown");

  dropdowns.forEach((dropdown) => {
    dropdown.addEventListener("mouseenter", function () {
      const menu = this.querySelector(".dropdown-menu");
      if (menu) {
        menu.style.display = "block";
      }
    });

    dropdown.addEventListener("mouseleave", function () {
      const menu = this.querySelector(".dropdown-menu");
      if (menu) {
        menu.style.display = "none";
      }
    });
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const stats = document.querySelectorAll(".stat-number");
  stats.forEach((stat) => {
    const value = stat.getAttribute("data-value");
    stat.style.width = value + "%"; // lebar sesuai angka
  });
});
