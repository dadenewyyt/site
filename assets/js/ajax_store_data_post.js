                   $("#upload").on("click", function() {
                        var csrf = $('input[name="madebyus4u_csrf_test_name"]').val();  // <- get token value from hidden form input
                        var storename = $('input[name="storename"]').val(); 
                        var storedesc = $('input[name="store_description"]').val(); 

                        var file_data = $("#imgfile_store").prop("files")[0];   
                     
                        var form_data = new FormData();                  
                        form_data.append("file", file_data);
                        form_data.append("madebyus4u_csrf_test_name", csrf);
                        form_data.append("storename", storename);
                        form_data.append("storedesc", storedesc);

                        alert(form_data);                             
                        $.ajax({
                                    url: "<?php echo base_url('store/save');?>",
                                    async: false,
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    data: form_data,        
                                    enctype: 'multipart/form-data',                 
                                    type: 'post',
                                    success: function(response){
                                        alert(response); 
                                    }
                         });

                        });
