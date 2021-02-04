"use strict";

let elements = document.querySelectorAll('.pictures_bloc_img');

console.log(elements);

elements.forEach(btn =>{
    btn.addEventListener("click", ev => {
        let src = ev.target.src;
        let alt = ev.target.alt;
        modalWindow(src,alt);

    });
});

function modalWindow(arg1,arg2){
        modalOpen(arg1,arg2);
        modalClouse();
}

function modalOpen(arg1,arg2){
    let modal_rend = `
        <div class="pictures_bloc__modal">
            <a href="#">
                <img class="pictures_bloc_img" src="${arg1}" alt="${arg2}">
            </a>
        </div>
    `;
    let tbody = document.querySelector('.catalog_pictures');
    tbody.insertAdjacentHTML("afterBegin", modal_rend);
};

function modalClouse(){
    let modalClouse = document.querySelector('.pictures_bloc__modal');

/*     modalClouse.addEventListener("click",() => {
        document.getElementsByClassName('pictures_bloc__modal')[0].style.display = "none";
    }) */
    modalClouse.addEventListener("click",() => {
        document.querySelector('pictures_bloc__modal').remove();
    })
    
}