
<h3>Blog List</h3>
<?php

if($this->session->flashdata('success_msg')){
    ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('success_msg');?>
    </div>
    <?php
}
?>
<?php
if($this->session->flashdata('error_msg')){
    ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error_msg');?>
    </div>
    <?php
}
?>
<a href="<?php echo base_url('blog/add')?>" class="btn btn-primary"> Add New</a>

<table class="table table-bordered table-responsive">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Created At</th>
        <th>Action</th>

    </tr>
    </thead>
    <tbody>
    <?php

    if(isset($blogs)){
        $count = $this->uri->segment(4, 0);
        foreach($blogs as $blog){
            ?>
            <tr>
                <td><?php echo ++$count ?></td>
                <td><?php echo $blog->title; ?></td>
                <td><?php echo $blog->desc; ?></td>
                <td><?php echo $blog->created_at; ?></td>
                <td>
                    <a href="<?php echo site_url('blog/edit/').$blog->id;?>" class="btn btn-info">Edit</a>
                    <a href="<?php echo site_url('blog/delete/').$blog->id;?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete');">Delete</a>

                </td>

            </tr>
            <?php
        }
    }
    ?>

    </tbody>

</table>
<?php echo @$this->pagination->create_links(); ?>

