const lis = document.querySelectorAll(".li")
const pd= document.querySelectorAll(".pd")
const forms = document.querySelectorAll(".list, .promo, .aprovis")

const mains = document.querySelectorAll("main")

pd.forEach(p=>{
    p.addEventListener("click", ()=>{
       pd.forEach(c=>{
        if(c.classList.contains("btn-active")){
            c.classList.remove("btn-active")
        }
       })
       p.classList.add("btn-active")
        forms.forEach(f=>{
            if(f.classList.contains(`${p.id}`)){
                forms.forEach(d=>{
                        if(!(d.classList.contains("form_produit"))){
                            d.classList.add("form_produit")
                        }
                    })
                f.classList.remove("form_produit")
                
            }
            
        })
    })
})

lis.forEach(li => {
    li.addEventListener("click", () => {
        if (li.id == "deconexion") {
            const resultat = confirm("Voulez vous vous déconnecter ?")
        } else {
            lis.forEach(ac => {
                ac.classList.remove("active")
                ac.classList.add("non_active")
            })
            li.classList.remove("non_active")
            li.classList.add("active")
            mains.forEach(main => {
                if (main.classList.contains(`${li.id}`)) {
                    mains.forEach(m=>{
                        if(!(m.classList.contains("main"))){
                            m.classList.add("main")
                        }
                    })

                    main.classList.remove("main")
                    
                }

            })
        }

    })
})