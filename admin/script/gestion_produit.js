const inp_oui= document.getElementById("oui")
const inp_non= document.getElementById("non")

const form_aprovis= document.getElementById("form-aprovis")
const form_promo= document.getElementById("form-promo")

function envoie(data){
    fetch("./php/gestion_produit.php",{
        method: "POST",
        body: data
    })
        .then(res=>res.text())
        .then(d=>{
            alert(d)
        })
}

inp_oui.addEventListener("input", ()=>{
   document.querySelector(".pu").style.display="block"
})

inp_non.addEventListener("input", ()=>{
   document.querySelector(".pu").style.display="none"
   document.querySelector(".pu input").value=""
})

form_aprovis.addEventListener("submit", (e)=>{
    e.preventDefault()
    const dataform= new FormData(form_aprovis)
    envoie(dataform)

})

form_promo.addEventListener("submit", (e)=>{
    e.preventDefault()
    const dataform= new FormData(form_promo)

    envoie(dataform)
})