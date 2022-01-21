const cards = document.querySelectorAll(".card");

function showPopUp(popUpTag) {
  popUpTag.classList.add("flex-center");
}
function hidePopUp(popUpTag) {
  popUpTag.classList.remove("flex-center");
}

for (let i of cards) {
  const popUpButton = i.querySelector(".card__dots-button");
  const popUp = i.querySelector(".card__settings");
  const popUpBackground = i.querySelector(".card__settings-bg");

  popUpButton.addEventListener("click", () => showPopUp(popUp));
  popUpBackground.addEventListener("click", () => hidePopUp(popUp));
}
