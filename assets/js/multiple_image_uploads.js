function multiple_image_upload() {
    $('[data-toggle="popover"]').popover();

    // Enabling Popover  (hidden content and title capturing)
    $("#popup_upload").popover({
        html: true,
        content: function() {
            return $('#popup_upload_html').html();
        },
        title: function() {
            return $('#popup_upload_html_title').html();
        }
    });

    //1
    $("#popup_upload1").popover({
        html: true,
        content: function() {
            return $('#popup_upload_html1').html();
        },
        title: function() {
            return $('#popup_upload_html_title').html();
        }
    });

    //2
    $("#popup_upload2").popover({
        html: true,
        content: function() {
            return $('#popup_upload_html2').html();
        },
        title: function() {
            return $('#popup_upload_html_title').html();
        }
    });
  

  //3
    $("#popup_upload3").popover({
        html: true,
        content: function() {
            return $('#popup_upload_html3').html();
        },
        title: function() {
            return $('#popup_upload_html_title').html();
        }
    });


    //4
    $("#popup_upload4").popover({
        html: true,
        content: function() {
            return $('#popup_upload_html4').html();
        },
        title: function() {
            return $('#popup_upload_html_title').html();
        }
    });
  

  
}

/*
             *  prepare store  image to be previewd before actual upload
             *  this will be called on change even of the file / upload component
             *
             */
              $("#imgfile_store").change(function(event) {
                var output = document.getElementById('preview_store_image');
                output.src = URL.createObjectURL(event.target.files[0]);
                $("#store_image_file_path").val('file selected');
              });

  /**
     *preview [roduct ] images using pophovers upload button
     *for image / product 1
     */
    //preview image
    $(document).on('change', '#product_image', function(event) {
        var output = document.getElementById('preview_product_image');
        output.src = URL.createObjectURL(event.target.files[0]);
    });
    //image1
    $(document).on('change', '#product_image1', function(event) {
        var output = document.getElementById('preview_product_image1');
        output.src = URL.createObjectURL(event.target.files[0]);
    });
    //preview_image32
    $(document).on('change', '#product_image2', function(event) {
        var output = document.getElementById('preview_product_image2');
        output.src = URL.createObjectURL(event.target.files[0]);
    });
    //preview_image3
    $(document).on('change', '#product_image3', function(event) {
        var output = document.getElementById("preview_product_image3");
        output.src = URL.createObjectURL(event.target.files[0]);
    });
    //preview_image4
    $(document).on('change', '#product_image4', function(event) {
        var output = document.getElementById("preview_product_image4");
        output.src = URL.createObjectURL(event.target.files[0]);
    });