function readImage() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("preview").src = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}

document.getElementById("img-input").addEventListener("change", readImage, false);

function previewImage(event) {
    var file = event.target.files[0]; // Pegando o arquivo selecionado
    var reader = new FileReader(); // Criando um objeto FileReader para ler o arquivo

    reader.onload = function(e) {
        // Alterando o src da imagem para a pré-visualização
        document.getElementById('preview').src = e.target.result;
    }
    // Lendo o arquivo como URL de dados (Data URL)
    if (file) {
        reader.readAsDataURL(file);
    }
}