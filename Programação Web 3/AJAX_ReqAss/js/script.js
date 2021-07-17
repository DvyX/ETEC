function carregar() {

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('dados').innerHTML = formatDados(xhr.responseText);
        }
    }

    xhr.open("GET", "js/lista.json", true);
    xhr.send();

}

function formatDados(strDados) {
    var objDados = JSON.parse(strDados);
    var linhasTable = '';

    for (la of objDados['userList']) {
        linhasTable +=
            '<tr>' +
            '<td>' + la['ID'] + '</td>' +
            '<td>' + la['nome'] + '</td>' +
            '<td>' + la['idade'] + '</td>' +
            '<td>' + la['email'] + '</td>' +
            '</tr>'
    }
    return linhasTable;
}