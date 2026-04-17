const btns_panier= document.querySelectorAll(".apanier")
const panier = document.getElementById("panier")

btns_panier.forEach(btn=>{
    btn.addEventListener("click", ()=>{
       fetch(`../php/panier.php?id=${btn.value}`)
        .then(res=>res.text())
        .then(d=>{
            if(d=="connect"){
                alert("Vous devez vous connectez d'abord")
            }else{
                panier.innerHTML= d
            }
            
        })
    })
})