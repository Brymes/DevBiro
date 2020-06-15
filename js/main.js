function openSidenav() {
  var sidenav = document.getElementById("sidenav");
  sidenav.style.display = "block";

  var introBody = document.getElementById("intro-body");
  introBody.style.display = "none";

  var main = document.getElementById("main");
  main.style.width = "100%";
  main.style.marginLeft = "40px";
}

function closeSidenav() {
  var sidenav = document.getElementById("sidenav");
  sidenav.style.display = "none";

  var introBody = document.getElementById("intro-body");
  introBody.style.display = "block";

  var main = document.getElementById("main");
  main.style.width = "100%";
  main.style.marginLeft = "0px";
}
