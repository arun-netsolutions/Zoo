$(function(){
    var $registerform= $("#register");
    if($registerform.length){
  $registerform.validate({
      rules:{
          username:{
              required:true
          },
          firstname:{
              required:true
          },
          lastname:{
required:true
          },
          email:{
              required:true
          },
          password:{
              required:true
          },
          cpassword:{
              required:true
          },
         
          
      },
      messages:{
        username:{
            required:"please enter your username",
            },
            email:{
                required:"please enter your email",
                },
                password:{
                    required:"please enter your password",
                    },
                    cpassword:{
                        required:"confirm your email",
                        },
                        firstname:{
                            required:"enter firstname"
                        },
                        lastname:{
                            required:"please enter your lastname",
                            },
                 
             
            }, 
            // errorPlacement:function(error,element){
            //     if(element.is(":floatingText ")){
            //        error.insertAfter(element.parents(".form-control")); 
            //     }
            // else{
            //     error.insertAfter(element);
            // }
            //  }
            

  })      
    }
})
// jQuery(login).validate({

// rules:{

// firstname:{
// required:true,
// },
// lastname:{
// required:true,
// },

// username:{
// required:true,
// },
// email:{
// required:true,
// },
// password:{
// required:true,
// },
// cpassword:{
// required:true,
// },
// role:{
// required:true,
// },

// },
// messages:{
// //email:"please enter your name",
// firstname:{
// required:"please enter your firstname",
// }, 
// lastname:{
// required:"please enter your lastname",
// },

// email:{
// required:"please enter your email address",
// },
// password:{
// required:"please enter your password",
// },
// cpassword:{
// required:"please enter your confirm password",
// },
// role:{
// required:"please select your role",
// },
// },

// });
// </script>
