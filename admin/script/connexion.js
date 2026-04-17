const form_admin= document.getElementById("admin")

form_admin.addEventListener("submit", (e)=>{
    e.preventDefault()
    const dataform= new FormData(form_admin)
    fetch("./php/connexion.php",{
        method: "POST",
        body: dataform
    })
        .then(res=>res.text())
        .then(d=>{
            if(d=="success"){
                window.location.href="./gestion.php"
            }else{
                alert(d)
            }
        })
})