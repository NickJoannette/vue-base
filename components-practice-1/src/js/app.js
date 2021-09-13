
function setupDropZone() {
    Dropzone.options.myAwesomeDropzone = {
    dictDefaultMessage: "Drag'n'drop or click here to upload your scripts (.ts, .txt, .rtf)",
    acceptedFiles: ".txt,.ts,.rtf",
    paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 0.5, // MB
    accept: function(file, done) {

    }
  };
}

setupDropZone();

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

// Document load



