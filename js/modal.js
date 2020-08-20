window.addEventListener("load",inicio)

function inicio(){
    let imagenes = document.querySelectorAll('.gallery__img')
    let modal = document.querySelector('#modal')
    let img = document.querySelector('#modal__img')
    let boton = document.querySelector('#modal__btn')

    for(let i = 0; i< imagenes.length; i++){
        imagenes[i].addEventListener('click', function(elemento){
            modal.classList.toggle("modal--open")
            let src = elemento.target.src
            img.setAttribute('src',src)
        })
    }

    boton.addEventListener('click',function(){
        modal.classList.toggle("modal--open")
    })

}