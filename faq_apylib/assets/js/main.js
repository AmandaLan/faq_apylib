// const accordion = document.querySelector('.accordion_link');
// const accordion_content = document.querySelector('.answer');

// for (i = 0; i<accordion.length; i++) {
//     accordion.addEventListener('click', () => {
//         accordion_content.classList.add('accordion_active')
//     })
// }

// const accordion = document.querySelectorAll('.accordion_link');
// const accordion_content = document.querySelector('.answer');
// var i

// for (i = 0; i < accordion.length; i++) {
//     accordion[i].addEventListener('click', () => {
//         for (j = 0; j < accordion_content.length; j++) {
//             accordion_content[j].classList.add('accordion_active')
//             console.log('bonjour')
//         }

//     })
// }

// console.log(accordion)


const accordion = document.querySelectorAll('.accordion_item');
const accordion_content = document.querySelector('.answer');
var i

for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener("click", function() {
        this.classList.toggle("accordion_active");
    })
}

console.log(accordion);

