<?php include "template/header.php"; ?>

<div class="row">
<div class="col-lg-12">
<div class="card-box">

<div class="row">
<div class="col-md-6">
    <h3>Create Fund Groups Category</h3>

    <?php if( $updateCategory_success= $this->session->flashdata('categoryUpdate')) { ?>
    <div class="row">
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $updateCategory_success; ?>
        </div>
    </div>
    <?php } ?>



    <?php if( $Group_Successfully= $this->session->flashdata('Successfully')) { ?>
    <div class="row">
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $Group_Successfully; ?>
        </div>
    </div>
    <?php } ?>


    <form action="<?php echo base_url(); ?>admin/CreateFundGroupCategory" method="POST">
        <div class="form-group">
            <!-- <label>Category<span class="text-danger">*</span></label> -->
            <input type="text" class="form-control" name="group_name"
                 placeholder="Create Fund Group Category">
            <?php echo form_error('group_name'); ?>
        </div>

        <div class="form-group text-left m-b-0">
            <button class="btn btn-custom waves-effect waves-light" type="submit">Submit</button>

        </div>
    </form>
</div>
<div class="col-md-6">
    <h3>Fund Groups Category</h3>
    <div class="row">
        <table class="table table-hover table-centered table-bordered">

            <thead>
                <tr>
                    <th>Fund Group Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
         

                <?php if( !empty($groups)) { foreach( $groups as $group) { ?>

                <tr>
                    <td><?php echo $group ['group_name']; ?></td>
                    <td> <a href="<?php echo base_url('admin/EditFundGroupCategory/'.$group['group_id']);?>" class="btn btn-sm btn-custom"><i class="mdi mdi-table-edit"></i></a>
                        <a href="<?php echo base_url('admin/DeleteFundGroupCategory/'.$group['group_id']);?>"  class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a></td>
                </tr>
                <?php } }  else{?>
                    <tr>
                        <td colspan="2">No category Found</td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>

        <?php if( $group_Delete= $this->session->flashdata('fundgroupdelete')) { ?>
    <div class="row">
        <div class="alert alert-dismissible alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $group_Delete; ?>
        </div>
    </div>
    <?php } ?>

    </div>

</div>
</div>
</div>
<!-- end row -->
</div>

</div>

</div>
<!-- end row -->
<?php include "template/footer.php"; ?>