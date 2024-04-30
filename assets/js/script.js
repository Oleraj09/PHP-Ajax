document.getElementById('image-input').addEventListener('change', function (event) {
    var file = event.target.files[0];
    var reader = new FileReader();

    reader.onload = function (event) {
        var img = document.createElement('img');
        img.src = event.target.result;
        img.style.maxWidth = '100%';
        img.style.maxHeight = '100%';
        document.getElementById('image-preview').innerHTML = '';
        document.getElementById('image-preview').appendChild(img);
    };

    reader.readAsDataURL(file);
});
$(document).ready(function () {
    $('#exampleModal').on('hidden.bs.modal', function () {
        $(this).find("input,textarea,select,file").val('').end();
        $(".image-preview").html("");
    });
});



