/* 
========================================================
============== Navigation Section
========================================================
*/
let menuIcon = document.querySelector("#menu-icon"),
  navlist = document.querySelector(".navlist"),
  menuClose = document.querySelector("#menu-icon-close");

menuIcon.onclick = function () {
  navlist.classList.add("show");
  menuClose.classList.add("block");
  // menuIcon.classList.add("hide");
};

menuClose.onclick = function () {
  navlist.classList.remove("show");
  menuClose.classList.remove("block");
  // menuIcon.classList.remove("hide");
};

/* 
========================================================
============== Filterable Section
========================================================
*/
document.addEventListener("DOMContentLoaded", () => {
  const filterButtons = document.querySelectorAll(".filter .btn");
  const items = document.querySelectorAll(".item");

  filterButtons.forEach((button) => {
    button.addEventListener("click", () => {
      filterButtons.forEach((btn) => btn.classList.remove("active"));
      button.classList.add("active");

      const category = button.getAttribute("data-filter");

      items.forEach((item) => {
        if (category === "all" || item.classList.contains(category)) {
          item.style.opacity = 0;

          setTimeout(() => {
            item.style.display = "block";
            item.style.opacity = 1;
          }, 500);
        } else {
          item.style.opacity = 0;

          setTimeout(() => {
            item.style.display = "none";
          }, 500);
        }
      });
    });
  });

  filterButtons[0].click(); // Show all items by default
});
