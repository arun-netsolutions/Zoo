
jQuery(login).validate({

rules:{
email:"required",
password:{
required:true,
},
},
messages:{
email:"please enter your email",
password:{
required:"please enter your password",
},
},

});
