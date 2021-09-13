// Document load
function setupDropZone() {
    Dropzone.options.myAwesomeDropzone = {
    dictDefaultMessage: "Drop files or click here to upload your script (.txt, .rtf)",
    paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 0.5, // MB
    accept: function(file, done) {
    }
  };
}

  

// Document ready 
$(document).ready(
    
    function () {

    setupDropZone();

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


