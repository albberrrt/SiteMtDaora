    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const userName = urlParams.get('user');
    
    Dropzone.autoDiscover = false;
    
    $('#dropzoneInput').dropzone({
        url: "../php/editUser.php",
        addRemoveLinks: true, 
        autoProcessQueue: false,
        maxFilesize: 8,
        maxFiles: 1,
        resizeWidth: 300,
        resizeHeight: 300,
        resizeMethod: "crop",
        resizeMimeType: 'image/jpeg',
        resizeQuality: 1,
        thumbnailWidth: 300,
        thumbnailHeight: 300,
        previewsContainer: "#previews",
        acceptedFiles: 'image/*',
        success: function (file, response) {
            var imgName = response;
            file.previewElement.classList.add("dz-success");
            console.log("Successfully uploaded :" + file.name);
            console.log(file);
        },

        init: function() {
            dropzoneObj = this;

            dropzoneObj.on("maxfilesexceeded", function(file) {
                this.removeFile(file);
            })
            document.getElementById("submitBtn").addEventListener("click", function(e) {
                e.preventDefault();
                e.stopPropagation();
                dropzoneObj.processQueue();
                var dados = $('#formEdit').serialize();
                console.log(dados);

                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: '../php/editUser.php',
                    async: true,
                    data: dados,
                    success: function(response) {
                        console.log(dados);
                        location.reload();
                    }
                });
                });
        },
    });

