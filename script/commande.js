const p1= document.querySelector(".p1")
const p2= document.querySelector(".p2")
const btn_suivant= document.getElementById("btn-suivant")
const btn_precedant= document.getElementById("btn-precedant")

btn_suivant.addEventListener("click", ()=>{
    p2.style.display="block"
    p1.style.display="none"
})

btn_precedant.addEventListener("click", ()=>{
    p1.style.display="block"
    p2.style.display="none"
})