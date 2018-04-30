
    <h3>Edit Blog</h3>
    <a href="<?php echo base_url('blog/index')?>" class="btn btn-primary"> Back</a>

    <form action="<?php echo site_url('blog/update')?>" method="post" class="">
        <input type="hidden" name="hidden_blog_id" value="<?php echo $blog->id; ?>" />
        <div class="form-group">
            <label for="exampleInputEmail1">Blog Name</label>
            <input type="text" name="title" value="<?php echo set_value('title',$blog->title) ;?>" class="form-control" id="exampleInputEmail1" placeholder="Blog Title">
			<?php echo form_error('title',"<p class='text-danger'>","</p>")?>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea name="desc"  class="form-control" rows="3" >
                <?php echo set_value('desc',$blog->desc);?>
            </textarea>
			<?php echo form_error('desc',"<p class='text-danger'>","</p>")?>
        </div>
        <button type="submit" class="btn btn-default">Update</button>
    </form>



