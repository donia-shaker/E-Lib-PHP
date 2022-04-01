// steps
const nextBTN = document.getElementById("next-btn");
const prevBTN = document.getElementById("prev-btn");
const line = document.getElementById("line");
const steps = document.querySelectorAll(".circle");

let index = 1;
nextBTN.addEventListener("click", () => {
  index++;
  if (index >= steps.length) {
    index = steps.length;
  }
  changeState();
});

prevBTN.addEventListener("click", () => {
  index--;
  if (index <= 1) {
    index = 1;
  }
  changeState();
});

function changeState() {
  steps.forEach((item, i) => {
    if (i < index) {
      item.classList.add("active");
    } else {
      item.classList.remove("active");
    }
  });
  const activeSteps = document.querySelectorAll(".active");
  line.style.width =
    ((activeSteps.length - 1) / (steps.length - 1)) * 100 + "%";

  // call pages to iframe
  const pages = document.getElementById("pages");
  const modelContainerStepe = document.getElementById("model-step-four");

  if (index == 0 || index == 1) {
    pages.setAttribute("src", "step_one");
    nextBTN.innerHTML = "التالي";
    nextBTN.style.backgroundColor = "#7a9dd8";
  } else if (index == 2) {
    pages.setAttribute("src", "step_two");
    nextBTN.innerHTML = "التالي";
    nextBTN.style.backgroundColor = "#7a9dd8";
  } else if (index == 3) {
    pages.setAttribute("src", "step_three");
    nextBTN.innerHTML = "تأكيد";
    nextBTN.style.backgroundColor = "#cc0f21";
  } else {
    modelContainerStepe.style.visibility = "visible";
  }
}
