const form = document.getElementById('form');
const inputs = document.querySelectorAll('#form input');
const textareas = document.querySelectorAll('#form textarea');
const nomp = document.getElementById('nomProv');
const pnomp = document.querySelector('#pnom');
const docp = document.getElementById('docProv');
const pdocp = document.querySelector('#pdoc');
const correop = document.getElementById('emailProv');
const pcorreop = document.querySelector('#pemail');
const dirp = document.getElementById('dirProv');
const pdirp = document.querySelector('#pdir');
const telp = document.getElementById('telProv');
const ptelp = document.querySelector('#ptel');
const nitp = document.getElementById('nitProv');
const pnitp = document.querySelector('#pnit');
const prodp = document.getElementById('prodProv');
const pprodp = document.querySelector('#pprod');
const descp = document.getElementById('descEmp');
const pdescp = document.querySelector('#pdesc');
const addp = document.getElementById('addProveedor');

let textoCorto = /^[a-zA-ZÀ-ÿ\s]{1,50}$/;
let textoLargo = /^[a-zA-ZÀ-ÿ\s]{1,200}$/;
let textoYnum = /^[a-zA-Z0-9#-\s]{1,30}$/;
let numero = /^[\d+]{1,50}$/;
let decimal = /^[.\d+]{1,50}$/;
let email = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g;

const validacionProv = (e) => {
    switch(e.target.name){
        case "nomProv":
            if(textoCorto.test(e.target.value)){
                nomp.classList.remove('incorrecto');
                nomp.classList.add('correcto');
                pnomp.textContent="";
            }else{
                nomp.classList.add('incorrecto');
                nomp.classList.remove('correcto');
                pnomp.textContent="Solo se permiten letras.";
            }
            break;
        case "docProv":
            if(numero.test(e.target.value)){
                docp.classList.remove('incorrecto');
                docp.classList.add('correcto');
                pdocp.textContent="";
            }else{
                docp.classList.add('incorrecto');
                docp.classList.remove('correcto');
                pdocp.textContent="Solo se permiten números.";
            }
            break;
        case "emailProv":
            if(email.test(e.target.value)){
                correop.classList.remove('incorrecto');
                correop.classList.add('correcto');
                pcorreop.textContent="";
            }else{
                correop.classList.add('incorrecto');
                correop.classList.remove('correcto');
                pcorreop.textContent="Puedes usar letras, números y @.";
            }
            break;
        case "dirProv":
            if(textoYnum.test(e.target.value)){
                dirp.classList.remove('incorrecto');
                dirp.classList.add('correcto');
                pdirp.textContent="";
            }else{
                dirp.classList.add('incorrecto');
                dirp.classList.remove('correcto');
                pdirp.textContent="Solo se permiten letras y números.";
            }
            break;
        case "telProv":
            if(numero.test(e.target.value)){
                telp.classList.remove('incorrecto');
                telp.classList.add('correcto');
                ptelp.textContent="";
            }else{
                telp.classList.add('incorrecto');
                telp.classList.remove('correcto');
                ptelp.textContent="Solo se permiten números.";
            }
            break;
        case "nitProv":
            if(numero.test(e.target.value)){
                nitp.classList.remove('incorrecto');
                nitp.classList.add('correcto');
                pnitp.textContent="";
            }else{
                nitp.classList.add('incorrecto');
                nitp.classList.remove('correcto');
                pnitp.textContent="Solo se permiten números.";
            }
            break;
        case "prodProv":
            if(textoCorto.test(e.target.value)){
                prodp.classList.remove('incorrecto');
                prodp.classList.add('correcto');
                pprodp.textContent="";
            }else{
                prodp.classList.add('incorrecto');
                prodp.classList.remove('correcto');
                pprodp.textContent="Solo se permite texto.";
            }
            break;
        case "descEmp":
            if(textoLargo.test(e.target.value)){
                descp.classList.remove('incorrecto');
                descp.classList.add('correcto');
                pdescp.textContent="";
            }else{
                descp.classList.add('incorrecto');
                descp.classList.remove('correcto');
                pdescp.textContent="Solo se permite texto.";
            }
            break;
        }
};

textareas.forEach((textarea)=>{
    textarea.addEventListener('keyup', validacionProv);
    textarea.addEventListener('blur', validacionProv);
});
inputs.forEach((input)=>{
    input.addEventListener('keyup', validacionProv);
    input.addEventListener('blur', validacionProv);
});