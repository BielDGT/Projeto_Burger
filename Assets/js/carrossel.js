let indexSlide = 0; 
function showSlide(index){
    const carrossel = document.querySelector('.carrossel')
    // queryselector quero selecionar
    const totalSlides= document.querySelectorAll('.carrossel img').length
    // lenght conta quantos elementos tem 

    if (index >= totalSlides){
        indexSlide = 0 
    }else if (index < 0 ){
        indexSlide = totalSlides - 1
    }else{
        indexSlide = index
    }
    const offset = -indexSlide*100
    carrossel.style.transform = `translateX(${offset}%)`
}

function proximoSlide(){
    indexSlide = indexSlide + 1 
    showSlide(indexSlide)
}

function anteriorSlide(){
    indexSlide = indexSlide - 1 
    showSlide(indexSlide)
}

setInterval(() => {
// funçao anonima que so funciona para so aquilo e nada mais, pequena coisas
    proximoSlide()
},4000)
// setiternal -> ele executa a cada x tempo, pede para ser passado uma função para ele 
