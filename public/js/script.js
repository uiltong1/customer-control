function validarDados(frm){
    if(frm.nome.value == '' || frm.nome === null){
        alert('Preencha o nome corretamente.')
        return false;
    }
    if(frm.cpf.value == '' || frm.cpf === null){
        alert('Preencha o CPF corretamente.')
        return false;
    }
    if(frm.email.value == '' || frm.email === null){
        alert('Preencha o Email corretamente.')
        return false;
    }
}

 function maskCpf(i){
    var v = i.value;
    if(isNaN(v[v.length-1])){ 
       i.value = v.substring(0, v.length-1);
       return;
    }
    i.setAttribute("maxlength", "14");
    if (v.length == 3 || v.length == 7) i.value += ".";
    if (v.length == 11) i.value += "-";
 
 }
 function maskTelefone(i){
    var v = i.value;
    if(isNaN(v[v.length-1])){ 
       i.value = v.substring(0, v.length-1);
       return;
    }
    i.setAttribute("maxlength", "13");
    if (v.length == 2 ) i.value = "(" + i.value + ")";
    if (v.length == 8 ) i.value += "-"; 
 }
