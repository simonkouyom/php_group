const form_ajout= document.getElementById("form-ajout")

form_ajout.addEventListener("submit", (e)=>{
    e.preventDefault()
    const formdata= new FormData(form_ajout)
    alert(formdata.get("produit"))
    fetch("./php/ajout_prod.php",{
        method: "POST",
        body: formdata
    })
        .then(res=>res.text())
        .then(d=>{
            alert(d)
        })
})