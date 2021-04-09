function Enviar() {

    var nome = document.getElementById("nomeid");

    if (nome.value != "") {
        alert('Obrigado sr(a) ' + nome.value + ' os seus dados foram encaminhados com sucesso');
        location.href='J:/Git/Projeto Integrador/Trabalho/atividade1/site/avaliacao.html';
    }

}

function Voltar() {

        location.href='J:/Git/Projeto Integrador/Trabalho/atividade1/site/index.html';
}

