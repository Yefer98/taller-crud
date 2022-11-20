const form = document.getElementById('form');
const inputs = document.querySelectorAll('#form input');
const nom = document.getElementById('nomCliente');
const pnom = document.querySelector('#nom');
const doc = document.getElementById('docCliente');
const pdoc = document.querySelector('#doc');
const correo = document.getElementById('emailCliente');
const pcorreo = document.querySelector('#email');
const dir = document.getElementById('dirCliente');
const pdir = document.querySelector('#dir');
const tel = document.getElementById('telCliente');
const ptel = document.querySelector('#tel');
const add = document.getElementById('addCliente');

let textoCorto = /^[a-zA-ZÀ-ÿ\s]{1,50}$/;
let textoLargo = /^[a-zA-ZÀ-ÿ\s]{1,200}$/;
let textoYnum = /^[a-zA-Z0-9#-\s]{1,30}$/;
let numero = /^[\d+]{1,50}$/;
let decimal = /^[.\d+]{1,50}$/;
let email = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g;

const validacionForm = (e) => {
    switch(e.target.name){
        case "nomCliente":
            if(textoCorto.test(e.target.value)){
                nom.classList.remove('incorrecto');
                nom.classList.add('correcto');
                pnom.textContent="";
            }else{
                nom.classList.add('incorrecto');
                nom.classList.remove('correcto');
                pnom.textContent="Solo se permiten letras.";
            }
            break;
        case "docCliente":
            if(numero.test(e.target.value)){
                doc.classList.remove('incorrecto');
                doc.classList.add('correcto');
                pdoc.textContent="";
            }else{
                doc.classList.add('incorrecto');
                doc.classList.remove('correcto');
                pdoc.textContent="Solo se permiten números.";
            }
            break;
        case "emailCliente":
            if(email.test(e.target.value)){
                correo.classList.remove('incorrecto');
                correo.classList.add('correcto');
                pcorreo.textContent="";
            }else{
                correo.classList.add('incorrecto');
                correo.classList.remove('correcto');
                pcorreo.textContent="Puedes usar letras, números y @.";
            }
            break;
        case "dirCliente":
            if(textoYnum.test(e.target.value)){
                dir.classList.remove('incorrecto');
                dir.classList.add('correcto');
                pdir.textContent="";
            }else{
                dir.classList.add('incorrecto');
                dir.classList.remove('correcto');
                pdir.textContent="Solo se permiten letras y números.";
            }
            break;
        case "telCliente":
            if(numero.test(e.target.value)){
                tel.classList.remove('incorrecto');
                tel.classList.add('correcto');
                ptel.setCustomValidity("");
            }else{
                tel.classList.add('incorrecto');
                tel.classList.remove('correcto');
                ptel.setCustomValidity("Solo se permiten números.");
            }
            break;
        }
};

inputs.forEach((input)=>{
    input.addEventListener('keyup', validacionForm);
    input.addEventListener('blur', validacionForm);
});