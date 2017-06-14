function addAmigo(id, obj) {

    if(id != '') {

        $(obj).closest('.sugestaoitem').fadeOut();

        console.log("ID: "+id);
        $.ajax({
            type:'POST',
            url:'ajax/add_friend',
            data:{id:id}
        });

    }

}
    
    function aceitarFriend(id, obj){

            if(id != '') 
    {
        $(obj).closest('.requisicaoitem').fadeOut();

        console.log("ID: "+id);
        $.ajax({
            type:'POST',
            url:'ajax/aceitar_friend',
            data:{id:id}
        });
    }

}
    

function displayComentario(obj) {
    $(obj).closest('.postitem_botoes').find('.postitem_comentario').show();
}
function comentar(obj) {
    var id = $(obj).attr('data-id');
    var txt = $(obj).closest('.postitem_comentario').find('.postitem_txt').val();

    $.ajax({
        type:'POST',
        url:'ajax/comentar',
        data:{id:id, txt:txt}
    });
}
// script do authbox /
function mostrarElemento(idElemento) {
    document.getElementById(idElemento).style.display = "block";
}

function ocultarElemento(idElemento) {
    document.getElementById(idElemento).style.display = "none";
}

function validaLogin() {
    var nome = document.getElementById("login").value;
    var senha = document.getElementById("password").value;

    if ((nome == "") && (senha == "")) {
        alert("Tente novamente");
    } else {
        mostrarElemento("div_mensagem");
        mostrarElemento("idioma")
        ocultarElemento("div_login");
    }
}

function eventDialog() {
    var dialog = document.querySelector('dialog');
    var showModalButton = document.querySelector('.show-modal');
    if (!dialog.showModal) {
        dialogPolyfill.registerDialog(dialog);
    }
    showModalButton.addEventListener('click', function () {
        dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function () {
        dialog.close();
    });
}