let arrImages=[];

let myDropzone = new Dropzone('.dropzone', {
    url:'../assest/img',
    maxFilesize:256,
    maxFiles:50,
    acceptedFiles:'image/jpeg, image/png, application/pdf, application/zip, .xlsx, .docx, .word, application/rar, .rar',
    addRemoveLinks:true,
    createImageThumbnails:true,
    dictRemoveFile:'Quitar'
})
myDropzone.on('addedfile', file=>{
    arrImages.push(file);
})

myDropzone.on('removedfile', file=>{
    let i = arrImages.indexOf(file);
    arrImages.splice(i, 1);
})

function init(){
    $("#archivos_form").on("submit",function(e){
        guardaryeditar(e);
    });
}

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#archivos_form")[0]);

    var totalfiles= arrImages.length;
    for (var i = 0; i < totalfiles; i++) {
        formData.append("file[]",arrImages[i]);
    }

    $.ajax({
        url: "../../controller/producto.php?op=guardar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data){
            console.log(data);
            $('#prod_nom').val('');
            Dropzone.forElement('.dropzone').removeAllFiles(true);
        }
    });
}

init();