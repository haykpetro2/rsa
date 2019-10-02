addFileToImages = function(filename){
    $('#policy_images').val(function(i,val) {
        return val + (val ? ',' : '') + filename;
    });
};
removeFileFromImages = function(filename){
    $('#policy_images').val(function(i,val) {
        return $.grep(val.split(','), function(value) {
            return value != filename;
        }).join(',');
    });
};

Dropzone.options.realDropzone = {
    uploadMultiple: false,
    parallelUploads: 100,
    maxFilesize: 8,
    previewsContainer: '#dropzonePreview',
    previewTemplate: document.querySelector('#preview-template').innerHTML,
    addRemoveLinks: true,
    dictCancelUpload: 'Отменить загрузку',
    dictCancelUploadConfirmation: 'Уверены?',
    dictRemoveFile: 'Удалить',
    dictFileTooBig: 'Файл больше чем 8MB',
    clickable: true,

    // The setting up of the dropzone
    init:function() {

        var myDropzone = this;
        $.each($('#policy_images').val().split(','), function (idx, filename) {
            if(filename){
                var xhr = $.ajax({
                    type: "HEAD",
                    url: '/images/'+filename,
                    success: function(msg){
                        var file = {name: filename, storedFilename: filename, size: xhr.getResponseHeader('Content-Length')};
                        myDropzone.emit("addedfile", file);
                        myDropzone.createThumbnailFromUrl(file, '/images/'+filename);
                        myDropzone.emit("complete", file);
                        myDropzone.files.push( file );
                    }
                });
            }
        });

        this.on("removedfile", function(file) {
            $.ajax({
                type: 'POST',
                url: '/images/delete',
                data: {name: file.storedFilename, _token: $('#csrf-token').val()},
                dataType: 'html',
                success: function(data){
                    var rep = JSON.parse(data);
                    if(rep.code == 200) {
                        removeFileFromImages(rep.filename);
                    }
                }
            });
        });
        this.on("complete", function(file){
            $('<a>',{
                text: 'Скачать',
                href: '/images/' + file.storedFilename,
                class: 'dz-remove',
                target: '_blank',
            }).appendTo(file.previewTemplate);
        });
    },
    error: function(file, response) {
        if($.type(response) === "string")
            var message = response; //dropzone sends it's own error messages in string
        else
            var message = response.message;
        file.previewElement.classList.add("dz-error");
        _ref = file.previewElement.querySelectorAll("[data-dz-errormessage]");
        _results = [];
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i];
            _results.push(node.textContent = message);
        }
        return _results;
    },
    success: function(file,done) {
        file.storedFilename = done.filename;
        addFileToImages(done.filename);
    }
}