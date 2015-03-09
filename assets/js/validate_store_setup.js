function validate1() {
    // Generate a simple captcha
  
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));


    $('#myForm').bootstrapValidator({
//        live: 'disabled',
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
             'store_descritpion': {
               
                validators: {
                    notEmpty: {
                        message: 'The store description is required and cannot be empty'
                    }
                }
            },
  
            'imgfile_store': {
                
                validators: {
                    notEmpty: {
                        message: 'Please attache a store image ,cannot be empty'
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
            },
              captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
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


    
}