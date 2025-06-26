// add hovered class to selected list item
let list = document.querySelectorAll(".m-navigation .lista");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".m-navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};
//================Default=================================

// función para redireccionar por clicks
function redireccionar(url) {
      window.location.href = url;
};


// mostrar notificación
  