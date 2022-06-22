    Dropzone.autoDiscover = false;
    
    $('#dropzoneInput').dropzone({
        url: "../php/editImg.php",
        addRemoveLinks: true, 
        autoProcessQueue: false,
        maxFilesize: 8,
        maxFiles: 1,
        resizeWidth: 300,
        resizeHeight: 300,
        resizeMethod: "crop",
        resizeQuality: 1,
        thumbnailWidth: 300,
        thumbnailHeight: 300,
        previewsContainer: "#previews",
        acceptedFiles: 'image/*',
        success: function (file, response) {
            var imgName = response;
            file.previewElement.classList.add("dz-success");
            document.querySelector("#submitBtnImg").classList.add("success");
            document.querySelector(".successMessage").style.display = "inline-block";
            console.log("Successfully uploaded :" + file.name);
            console.log(file);
        },

        init: function() {
            dropzoneObj = this;

            dropzoneObj.on("maxfilesexceeded", function(file) {
                this.removeFile(file);
            })
            document.getElementById("submitBtnImg").addEventListener("click", function(e) {
                e.preventDefault();
                e.stopPropagation();
                dropzoneObj.processQueue();
            });
            dropzoneObj.on("addedfile", function(){
                document.querySelector("#submitBtnImg").style.display = "inline-block";
            })
            dropzoneObj.on("removedfile", function(){
                document.querySelector("#submitBtnImg").style.display = "none";
                document.querySelector(".successMessage").style.display = "none";
                document.querySelector("#submitBtnImg").classList.remove("success");
            })
        },
    });

    $('#formEdit').submit(function(e){
        var varName = $('#inputCadName').val();
        var varEmail = $('#inputCadEmail').val();
        var varPassword = $('#inputCadPassword').val();
        console.log(varName);

        $.ajax({
            url: '../php/ediUser.php',
            method: 'post',
            data: {name: varName, email: varEmail, pass: varPassword},
            dataType: 'json',
        }).done(function(result){
            $('#inputCadName').val(varName);
            $('#inputCadEmail').val(varEmail);
            $('#inputCadPassword').val(varPassword);
            console.log(result);
            console.log(varName);
            getComments();
        })
    });

    