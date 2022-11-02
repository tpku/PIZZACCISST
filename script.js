const list = document.querySelector('ul.topping-list');
const listItems = list.querySelectorAll('li');
// Pizza Topping Buttons
const btnTomato = list.querySelector('.btn-tomato-sauce');
const btnBlanco = list.querySelector('.btn-blanco');
const btnOnion = list.querySelector('.btn-onion');
// Pizza Base - Topping
const pizzaBase = document.querySelector('.pizza-base');

// btnTomato.addEventListener('click', (e) => {
//   e.preventDefault();
//   pizzaBase.classList.remove('blanco');
//   pizzaBase.classList.add('tomato-sauce');
// });

// btnBlanco.addEventListener('click', (e) => {
//   e.preventDefault();
//   pizzaBase.classList.remove('tomato-sauce');
//   pizzaBase.classList.add('blanco');
// });

const text = document.querySelector('.text');
text.innerHTML = text.textContent.replace(/\S/g, '<span>$&</span>');

const element = document.querySelectorAll('span');
for (let i = 0; i < element.length; i++) {
  element[i].style.transform = 'rotate(' + i * 7.5 + 'deg)';
}
