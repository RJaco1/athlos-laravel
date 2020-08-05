require('./bootstrap');

//require('maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js');

//require('code.jquery.com/jquery-1.11.1.min.js');

//File upload------Fotografia----------
$(document).ready(function () {
    document.getElementById('pro-image').addEventListener('change', readImage, false);

    $(".preview-images-zone").sortable();

    $(document).on('click', '.image-cancel', function () {
        let no = $(this).data('no');
        $(".preview-image.preview-show-" + no).remove();
    });
});

var num = 4;
function readImage() {
    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(".col-7");

        for (let i = 0; i < files.length; i++) {
            var file = files[i];
            if (!file.type.match('image')) continue;

            var picReader = new FileReader();

            picReader.addEventListener('load', function (event) {
                var picFile = event.target;
                var html =
                    '<div class="preview-images-zone col-7">' +
                    '<div class="preview-image preview-show-' + num + '">' +
                    '<div class="image-cancel" data-no="' + num + '">x</div>' +
                    '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                    '</div>'
                '</div>';

                output.append(html);
                num = num + 1;
            });

            picReader.readAsDataURL(file);
        }
        $("#pro-image").val('');
    } else {
        console.log('Browser not support');
    }
}
//---------------------------------------------------------

//----------DUI.formato----Campo de Validacion-------------

$(document).ready(function () {

    let dui = document.getElementById("dui").value;

    $('#dui').keyup(function () {

        let $this = $(this);
        let dui = $this.val();
        dui = dui.replace(/[^\d+]/, '');
        let dato = new Array();
        for (let i = 0; i < dui.length; i++) {
            const element = dui[i];
            (i != 8) ? dato.push(element) : dato.splice(8, 0, "-", element);
        }
        $this.val(function () {
            return dato.join("");
        });
    });
});
//---------------------------------------------------------

//----------Data Table---------------------
$(document).ready(function () {
    $('#atleta').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    });
});
//-----------------------------------------