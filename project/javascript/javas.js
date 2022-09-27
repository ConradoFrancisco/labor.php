

$("#validacion").validate({
    rules:{
        usuario:{
            required : true,
            minlength: 2
        }
    },
    messages:{
        usuario:{
            required : "porfavor, completa este campo",
            minlength:"2 carac min"
        }
        
    },
    submitHandler: function(form) {
      form.submit();
    }
   });