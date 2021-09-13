function setupDropZone() {
    Dropzone.options.myAwesomeDropzone = {
        autoQueue: true,
        autoProcessQueue: false,
        acceptedFiles: ".txt,.ts,.rtf",
        dictDefaultMessage: "Drag'n'drop or click here to upload your files",
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 0.5, // MB

        init: function() {
            console.log("Init");

            var  dzne = this;
            $('#upload-button').on("click", function() {
                console.log("Test...");
                dzne.processQueue();
            });

            // 'Complete' gets called when the upload function is complete
            this.on("complete", function() {
                if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
                    this.removeAllFiles();
                }
            });


        },

  };



}


// Document ready 
$(document).ready(
    
    function () {



    var app = new Vue({
        el: '#app',
            data: {
                inputCode : "",
                appendedCode: ""
            },
            methods: {
               appendCode: function(event) {
                   this.appendedCode = this.inputCode;
               }

            }
            
        })
});

setupDropZone();



