document.addEventListener("DOMContentLoaded", function() {
    
    // Script 1: Zemlje and Lica toggles
    const ostali = document.querySelector("#ostali");
    const inp = document.querySelector(".zemlje-input");
    const pravno = document.querySelector("#pravno");
    const fizicko = document.querySelector("#fizicko");
    const dodatak = document.querySelector(".dodatak");
    const bih = document.querySelector("#bih");
    
    document.querySelectorAll(".zemlje input[type=radio]").forEach(btn => {
        btn.addEventListener("click", () => {
            inp.style.display = ostali.checked ? 'block' : 'none';
        });
    });

    document.querySelectorAll(".lice input[type=radio]").forEach(lice => {
        lice.addEventListener("click", () => {
            inp.style.display = 'none';
            bih.checked = true;
            dodatak.style.display = pravno.checked ? 'block' : 'none';
        });
    });

    // Script 2: Switch toggles
    const switchh = document.querySelector(".round");
    const check = document.querySelector(".check");
    const ucesnici = document.querySelector(".ucesnici");
    const bitno = document.querySelector(".bitno");
    
    switchh.addEventListener("click", () => {
        const isChecked = check.checked;
        ucesnici.style.display = isChecked ? 'block' : 'none';
        bitno.style.display = isChecked ? 'none' : 'flex';
    });

    // Script 3: Payment methods
    const methods = {
        uplatnica: document.querySelector(".pay-uplatnica"),
        paypal: document.querySelector(".paypal"),
        kartica: document.querySelector(".kartica")
    };

    const methodTexts = {
        uplatnica: document.querySelector(".uplatnica-text"),
        paypal: document.querySelector(".pay-text"),
        kartica: document.querySelector(".kartica-text")
    };

    for (let method in methods) {
        methods[method].addEventListener("click", () => {
            for (let m in methods) {
                methodTexts[m].style.display = m === method ? "block" : "none";
                methods[m].classList.toggle("pay-active", m === method);
            }
        });
    }

});