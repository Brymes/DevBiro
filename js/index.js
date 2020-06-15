function openSidenav() {
  var sidenav = document.getElementById("sidenav");
  sidenav.style.display = "block";

  var main = document.getElementById("main");
  main.style.width = "85%";
  main.style.marginLeft = "50px";
}

function closeSidenav() {
  var sidenav = document.getElementById("sidenav");
  sidenav.style.display = "none";

  var main = document.getElementById("main");
  main.style.width = "100%";
  main.style.marginLeft = "0px";
}
