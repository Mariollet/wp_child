document.addEventListener("DOMContentLoaded", function () {
	// get h1
	let h1 = document.querySelectorAll("h1");

	// add eventListener click on each
  h1.forEach((el) => {
    el.addEventListener("click", function () {
      // add class
      el.style.color = "red";
    });
  });
});
