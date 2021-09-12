  

        $(document).ready(function () {
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