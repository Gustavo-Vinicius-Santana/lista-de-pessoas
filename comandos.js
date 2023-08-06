var janela1 = document.querySelector('.jan1')
var btn1 = document.querySelector('.abra1')
btn1.addEventListener('click', abrir1)
function abrir1(){
    janela1.showModal()
}
var close1 = document.querySelector('.fechamen')
close1.addEventListener('click', fecha1)
function fecha1(){
    janela1.close()
}

var janela2 = document.querySelector('.jan2')
var btn2 = document.querySelector('.abra2')
btn2.addEventListener('click', abrir2)
function abrir2(){
    janela2.showModal()
}
var close2 = document.querySelector('.fechamen2')
close2.addEventListener('click', fecha2)
function fecha2(){
    janela2.close()
}