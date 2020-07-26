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
