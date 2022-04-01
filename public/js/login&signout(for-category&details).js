// Login SignOut Model
const showModel = document.getElementById("show-model");
const showModelSignout = document.getElementById("show-model-signup");
const modelContainer = document.getElementById("model");
const ifram = document.getElementById("ifram");

modelContainer.style.visibility = "hidden";

showModel.addEventListener("click", () => {
  ifram.setAttribute("src", "login");

  modelContainer.style.visibility = "visible";
});
showModelSignout.addEventListener("click", () => {
  ifram.setAttribute("src", "signup");
  modelContainer.style.visibility = "visible";
});
modelContainer.addEventListener("click", () => {
  modelContainer.style.visibility = "hidden";
});
