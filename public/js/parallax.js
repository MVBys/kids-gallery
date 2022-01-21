// window.onload = function() {
//     const parallax = document.querySelector(".header_title_wrapper");

//     if (parallax) {

//         const hand1 = document.querySelector('.title_hand1');
//         const hand2 = document.querySelector('.title_hand2');
//         const spray1 = document.querySelector('.title_spray1');
//         const spray2 = document.querySelector('.title_spray2');
//         const spray3 = document.querySelector('.title_spray3');
//         const spray4 = document.querySelector('.title_spray4');
//         const spray5 = document.querySelector('.title_spray5');
//         const text1 = document.querySelector('.header_title-h1')
//         const text2 = document.querySelector('.header_title-h5')

//         const coefficient = 40;
//         const forText = 330;

//         const speed = 0.5;

//         let positionX = 0,
//             positionY = 0;
//         let coordXprocent = 0,
//             coordYprocent = 0;

//         function setMouseParallaxStyle() {

//             const distX = Math.round(coordXprocent - positionX, 5);
//             const distY = Math.round(coordYprocent - positionY, 5);

//             // const distX = coordXprocent - positionX;
//             // const distY = coordYprocent - positionY;

//             positionX = positionX + (distX * speed);
//             positionY = positionY + (distY * speed);

//             const paramX = positionX / coefficient;
//             const paramY = positionY / coefficient;
//             const paramXforText = positionX / forText;
//             const paramYforText = positionY / forText;

//             hand1.style.cssText = `transform: translate(${paramX}%, ${paramY}%)`;
//             hand2.style.cssText = `transform: translate(${paramX}%, ${paramY}%)`;
//             spray1.style.cssText = `transform: translate(${paramX}%, ${paramY}%)`;
//             spray2.style.cssText = `transform: translate(${paramX}%, ${paramY}%)`;
//             spray3.style.cssText = `transform: translate(${paramX}%, ${paramY}%)`;
//             spray4.style.cssText = `transform: translate(${paramX}%, ${paramY}%)`;
//             spray5.style.cssText = `transform: translate(${paramX}%, ${paramY}%)`;
//             text1.style.cssText = `transform: translate(${paramXforText}%, ${paramYforText}%)`;
//             text2.style.cssText = `transform: translate(${paramXforText}%, ${paramYforText}%)`;

//             requestAnimationFrame(setMouseParallaxStyle);

//             console.log(paramY)
//             console.log(paramX)

//         }
//         setMouseParallaxStyle();

//         parallax.addEventListener("mousemove", function(e) {
//             const parallaxWidth = parallax.offsetWidth;
//             const parallaxHeight = parallax.offsetHeight;

//             const coordX = e.pageX - parallaxWidth / 2;
//             const coordY = e.pageY - parallaxHeight / 2;

//             coordXprocent = coordX / parallaxWidth * 100;
//             coordYprocent = coordY / parallaxHeight * 100;

//         })

//     }
// }

const parallaxItem = document.querySelectorAll(
  ".parallax__move-item,.parallax-item"
);
const parallaxContainer = document.querySelector(".parallax");

const parallaxParams = parallaxContainer
  ? parallaxContainer.getBoundingClientRect()
  : false;

const centerX = parallaxParams
  ? Math.floor(parallaxParams.x + parallaxParams.width / 2)
  : window.innerWidth / 2;
const centerY = parallaxParams
  ? Math.floor(parallaxParams.y + parallaxParams.height / 2)
  : window.innerHeight / 2;

console.log(centerX, centerY);

function parallaxHandler(e) {
  const posY = (centerY - e.clientY) / 30;
  const posX = (centerX - e.clientX) / 30;

  for (let i of parallaxItem) {
    const speedAttribute = i.attributes["data-speed"];
    const reverseDirectionAttribute = i.attributes["data-revers-direction"];

    const reverseSpeed = reverseDirectionAttribute ? -1 : 1;

    const speedBoost = speedAttribute ? speedAttribute.value : 1;

    i.style.transform = `translate(${-Math.floor(
      posX * speedBoost * reverseSpeed
    )}px,${-Math.floor(posY * speedBoost * reverseSpeed)}px)`;
  }
}

function manageParallaxStatus() {
  if (window.innerWidth > 1100)
    return window.addEventListener("mousemove", parallaxHandler);
  if (window.innerWidth <= 1100)
    return window.removeEventListener("mousemove", parallaxHandler);
}

manageParallaxStatus();

window.addEventListener("resize", manageParallaxStatus);
