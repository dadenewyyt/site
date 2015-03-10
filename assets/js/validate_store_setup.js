function validate1() {
    // Generate a simple captcha
  
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));


    $('#myForm').bootstrapValidator({
//        live: 'disabled',

        excluded: [':disabled'],
  
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            'storename': {
               
                validators: {
                    notEmpty: {
                        message: 'The store name is required and cannot be empty'
                    }
                }
            },
             'store_description': {
               
               validators: {
                    notEmpty: {
                        message: 'The store description is required and cannot be empty'
                    }
                }
            },
             
            
             'product_descritpion': {
                
                validators: {
                    notEmpty: {
                        message: 'The production description is required and cannot be empty'
                    }
                }
            },

            product_name: {
                message: 'The product name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The product name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    
                }
            },

             accountnumber: {
                message: 'The account number is not valid',
                validators: {
                    notEmpty: {
                        message: 'The account number is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The account number must be more than 6 and less than 30 characters long'
                    }
                    
                    
                }
            },
            routenumber: {
                validators: {
                     notEmpty: {
                        message: 'The route number is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The route number must be more than 6 and less than 30 characters long'
                    }
                    
                }
            },
            accountnumber: {
                validators: {
                    notEmpty: {
                        message: 'The account number is required and cannot be empty'
                    },
                    identical: {
                        field: 'reaccountnumber',
                        message: 'The account number and its confirm are not the same'
                    }
                   
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and cannot be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            }
        }

    }).on('status.field.bv', function(e, data) {
            var $form     = $(e.target),
                validator = data.bv,
                $tabPane  = data.element.parents('.tab-pane'),
                tabId     = $tabPane.attr('id');

            
            if (tabId) {
                var $icon = $('a[href="#' + tabId + '"][data-toggle="tab"]').parent().find('i');

                // Add custom class to tab containing the field
                if (data.status == validator.STATUS_INVALID) {
                    $icon.removeClass('fa-check').addClass('fa-times');
                } else if (data.status == validator.STATUS_VALID) {
                    var isValidTab = validator.isValidContainer($tabPane);
                    $icon.removeClass('fa-check fa-times')
                         .addClass(isValidTab ? 'fa-check' : 'fa-times');
                }
            }


        });


 

    // Validate the form manually
    $('#validateBtn').click(function() {
        $('#myForm').bootstrapValidator('validate');
        alert('test');
    });

    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });


              
                 /*
                 * Validate the store page 
                 * before continuing to next page
                 */




                function validation_store(){

                var storeimgfile = $('#imgfile_store').val();
                var storename = $('#storename').val();
                var store_description = $("#store_descritpion").val();
                    
                    
                    if(storeimgfile==''){
                        return false;
                    }
                     if(storename==''){
                        return false;
                    }
                   if(store_description==''){
                        return false;
                    }

                    return true;
                }



                //validate add products

                function validation_add_products(){

                var product_image = $('#preview_product_image').attr('src');
                var product_name = $('#product_name').val();
                var product_description = $("#product_descritpion").val();
                var category = $('#category').attr('value');
                var variation = $('#variation').attr('value');
                var sub_varaition = $("#sub_varaition").attr('value');
                var quantity = $("#quantity").val();
                var sprice = $("#sprice").val();

                //console.log (document.getElementById("myForm").elements);
                      
                    if(product_image=='uploads/profile/no-photo.jpg'){
                        alert('at least on product image need to be attached');
                        return false;
                    }
                     if(product_name==''){
                          alert('please,');
                        return false;
                    }
                   if(product_description==''){
                      alert('desc'+product_description);
                        return false;
                    }

 
                    if(category==''){
                          alert('pcat'+category);
                        return false;
                    }
                     if(variation==''){
                        alert('vvar'+variation);
                        return false;
                    }

                    if(sub_varaition==''){
                              alert('subvvar'+sub_varaition);
                        return false;
                    }


                    if(quantity==''||isNaN(quantity)==false){
                        alert('isNaN(quantity)===false'+isNaN(quantity)===false);
                        return false;
                    }
                     if(sprice==''||isNaN(sprice)){
                        alert('isNaN(quantity)===false'+isNaN(sprice)==false);
                        return false;
                    }
                    if(price==''||!isNaN(price)==false){
                        alert('isNaN(quantity)===false'+isNaN(price)==false);
                        return false;
                    }
                    alert(isNaN(price)==false+isNaN(sprice)==false+isNaN(quantity)==false);

                    return true;
                }
    
}