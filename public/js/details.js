// Book Model For Details Page
const showModelTwo = document.getElementById("show-model-2");
const modelContainerTwo = document.getElementById("model-2");
const endBtn = document.getElementById("btn");

modelContainerTwo.style.visibility = "hidden";

showModelTwo.addEventListener("click", () => {
  modelContainerTwo.style.visibility = "visible";
});

endBtn.addEventListener("click", () => {
  modelContainerTwo.style.visibility = "hidden";
});
