const form = document.getElementById('form');
const inputs = document.querySelectorAll('#form input');
const cod = document.getElementById('codRef');
const pcod = document.querySelector('#pcod');
const cant = document.getElementById('cantProd');
const pcant = document.querySelector('#pcant');
const val = document.getElementById('valProd');
const pval = document.querySelector('#pval');
const nom = document.getElementById('nomProd');
const pnom = document.querySelector('#pnom');
const add = document.getElementById('addProd');

let textoCorto = /^[a-zA-ZÀ-ÿ\s]{1,50}$/;
let numero = /^[\d+]{1,50}$/;
let decimal = /^[.\d+]{1,50}$/;

const validacionProd = (e) => {
    switch(e.target.name){
        case "codRef":
            if(numero.test(e.target.value)){
                cod.classList.remove('incorrecto');
                cod.classList.add('correcto');
                pcod.textContent="";
            }else{
                cod.classList.add('incorrecto');
                cod.classList.remove('correcto');
                pcod.textContent="Solo se permiten números.";
            }
            break;
        case "cantProd":
            if(numero.test(e.target.value)){
                cant.classList.remove('incorrecto');
                cant.classList.add('correcto');
                pcant.textContent="";
            }else{
                cant.classList.add('incorrecto');
                cant.classList.remove('correcto');
                pcant.textContent="Solo se permiten números.";
            }
            break;
        case "valProd":
            if(decimal.test(e.target.value)){
                val.classList.remove('incorrecto');
                val.classList.add('correcto');
                pval.textContent="";
            }else{
                val.classList.add('incorrecto');
                val.classList.remove('correcto');
                pval.textContent="Solo se permiten números y decimales.";
            }
            break;
        case "nomProd":
            if(textoCorto.test(e.target.value)){
                nom.classList.remove('incorrecto');
                nom.classList.add('correcto');
                pnom.textContent="";
            }else{
                nom.classList.add('incorrecto');
                nom.classList.remove('correcto');
                pnom.textContent="Solo se permite texto.";
            }
            break;
    }
};

inputs.forEach((input)=>{
    input.addEventListener('keyup', validacionProd);
    input.addEventListener('blur', validacionProd);
});

form.addEventListener('submit', (e) => {
    if(!numero.test(cod.value)){
        e.preventDefault();
        cod.title = `El código "${cod.value}" no cumple los parámetros indicados.`
        adv.textContent = "Los datos marcados con rojo no son válidos."
    }else{
        cod.title = ``
    };
    if(!numero.test(cant.value)){
        e.preventDefault();
        cant.title = `La cantidad "${cant.value}" no cumple los parámetros indicados.`
        adv.textContent = "Los datos marcados con rojo no son válidos."
    }else{
        cant.title = ``
    };
    if(!decimal.test(val.value)){
        e.preventDefault();
        val.title = `El valor "${val.value}" no cumple los parámetros indicados.`
        adv.textContent = "Los datos marcados con rojo no son válidos."
    }else{
        val.title = ``
    };
    if(!textoCorto.test(nom.value)){
        e.preventDefault();
        nom.title = `El nombre "${nom.value}" no cumple los parámetros indicados.`
        adv.textContent = "Los datos marcados con rojo no son válidos."
    }else{
        nom.title = ``
    };
});

