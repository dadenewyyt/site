<?php if (isset($this->message)): ?>
    <?php if ($this->message['type'] == 'error'):?>
        <!--display errors-->
        <div class="alert alert-danger" style="font-size: 10px;" >
            <a href="#" class="close" data-dismiss="alert">×</a>
            <strong>Error!</strong> <?php echo $this->message['message'];?>.
        </div>
        <!-- <div class="errorMessage"></div> -->
    <?php elseif ($this->message['type'] == 'info'):?>
        <!--display errors-->
        <div class="alert alert-info" >
            <a href="#" class="close" data-dismiss="alert">×</a>
            <strong>Info!</strong> <?php echo $this->message['message'];?>.
        </div>
    <?php elseif ($this->message['type'] == 'success'): ?>
        <div class="alert alert-success" role='alert'>
            <a href="#" class="close" data-dismiss="alert">×</a>
            <strong>Success!</strong> <?php echo $this->message['message'];?>.
        </div>
    <?php endif; ?>
<?php endif; ?>