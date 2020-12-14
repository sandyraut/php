const base_url='http://localhost/phpTest/index.php/';
$(document).ready(function(){ 
  // alert(0);
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
      }); jQuery.validator.addMethod("letterswithspace", function(value, element) {
        return this.optional(element) || /^[a-z][a-z\s]*$/i.test(value);
    }, "letters only");

    $('.register').click(function(){ 
        if(!$("form#registrationForm").valid())
        {
           return false;
        }else{
        var formdata = $("#registrationForm").serialize();
         //console.log(formdata);
         var fname  = $("#fname").val();
         var lname   = $("#lname").val();
         var mobile_no = $("#mobile_no").val();
         var email = $("#email").val();
         var state = $("#state").val();
         var district = $("#district").val();
         var password = $("#password").val();
         var cfpassword = $("#cfpassword").val();

             if(fname == ""){ 
                 //alert error
                iziToast.error({
                    title: 'Error',
                    message: 'First name is required!',
                });
                return false;
             } 
        else if(lname == "") { 
            iziToast.error({
                title: 'Error',
                message: ' Last name is required!',
            });
            return false;
        }
        else if(mobile_no == ""){
            iziToast.error({
                title: 'Error',
                message: ' Mobile number is required!',
            });
            return false;
        }
        else if(email == ""){
            iziToast.error({
                title: 'Error',
                message: '  Email is required!',
            });
            return false;
        }
        
        if(state == "" || state == "0"){
            iziToast.error({
                title: 'Error',
                message: ' State is required!',
            });
            return false;
        }
        else if(district == "" || district == "0"){
            iziToast.error({
                title: 'Error',
                message: ' District is required!',
            });
            return false;
        }

        
// alert(0);
                $.ajax({ 
                    url:base_url+"Welcome/registerProcess",
                    method:"POST",
                    data:formdata,
                    dataType:"text",
                    success:function(data)
                    {
                        
                       if(data == "1")
                        {
                            $("form#registrationForm").detach();
                            iziToast.success({
                                title: data,
                                message: ' Thanks for registration!',

                            });
                            window.setTimeout(function(){

                                
                                 window.location= base_url+"Welcome/dashboard";
        
                                }, 2500);
        
                           
                        }
                        if(data == "2")
                        {
                            iziToast.error({
                                title: data,
                                message: ' Enter correct details!',
                            });
                            // $("form#registrationForm")[0].reset();
                          
                        }

                        if(data =="")
                        {
                            $.ajax({ 
                            url:base_url+"Welcome/logout",
                            method:"POST",
                            //data:{username:username,password:password},
                            dataType:"text",
                            success:function(data)
                            {
                                window.location= base_url+"Welcome/index";
                            }
                        });
                }
                        
                    }
                });
        //}
            }
    });


    $.ajax({ 
        
            url:base_url+"Welcome/loadStates",
            method:"GET",
            //data:formdata,
            dataType:"json",
            success:function(data)
            {
                // alert(0);
                var len = data.length;
                //console.log(len);
                for(var i=0;i<len;i++)
                {
                    var stateID = data[i]["stateID"];
                    var stateName = data[i]["stateName"];
                    var stateStatus = data[i]["stateStatus"];
                   //console.log(stateID);
                    var html = '';
                    if(stateStatus == "1")
                    {
                        html +='<option value="'+stateID+'">'+stateName+'</option>';
                        $("#state").append(html);

                    }

                    
                   
                }
            }

    });

    //fetch districts
        $("#state").change(function(){ 
            var state = $("#state").val()
           // alert(wState);
                    $.ajax({ 
                    
                        url:base_url+"Welcome/loadDist",
                        method:"POST",
                        data:{stateID:state},
                        dataType:"json",
                        success:function(data)
                        {
                            
                            var len = data.length;
                            //console.log(len);
                            $("#district").html('<option value="0">--Select District--</option>');
                           
                            for(var i=0;i<len;i++)
                            {
                                var distID = data[i]["distID"];
                                var distName = data[i]["distName"];
                                var distStatus = data[i]["distStatus"];
                            //console.log(stateID);
                            var html = '';
                                if(distStatus == "1")
                                {
                                    
                                    html +='<option value="'+distID+'">'+distName+'</option>';
                                    $("#district").append(html);
                                }
                            }
                        }

                });
        });

    
});