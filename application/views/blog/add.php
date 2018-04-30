
    <h3>Blog List</h3>
    <a href="<?php echo base_url('blog/index')?>" class="btn btn-primary"> Back</a>

    <form action="<?php echo base_url('blog/submit')?>" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="exampleInputEmail1">Blog Name</label>
            <input type="text" name="title" value="<?php echo set_value('title');?>" class="form-control" id="exampleInputEmail1" placeholder="Blog Title">
            <?php echo form_error('title',"<p class='text-danger'>","</p>")?>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea name="desc" class="form-control" rows="3" ><?php echo set_value('desc');?></textarea>
			<?php echo form_error('desc',"<p class='text-danger'>","</p>")?>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Upload Article image</label>
            <input type="file" name="userfile" >
            <?php if(isset($upload_error)) echo $upload_error;

            ?>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>





