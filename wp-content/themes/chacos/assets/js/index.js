document.addEventListener("DOMContentLoaded", function () {
  var headerBottoms = document.querySelectorAll(".header-bottom");
  var currentIndex = 0;
  headerBottoms[currentIndex].classList.add("header-bottom-active");
  var interval = setInterval(function () {
    headerBottoms[currentIndex].classList.remove("header-bottom-active");
    currentIndex++;
    if (currentIndex === headerBottoms.length) {
      currentIndex = 0;
    }
    headerBottoms[currentIndex].classList.add("header-bottom-active");
  }, 5000);

  var overlay = document.getElementById("overlay-search");
  var searchBoxFocus = document.getElementById("search-box-focus");
  var searchInput = document.getElementById("searchInputs");

  searchInput.addEventListener("focus", function () {
    event.preventDefault();
    overlay.style.display = "block";
    searchBoxFocus.style.display = "block";
    document.body.style.overflow = "hidden";
  });

  overlay.addEventListener("click", function () {
    overlay.style.display = "none";
    searchBoxFocus.style.display = "none";
    document.body.style.overflow = "";
  });
});
