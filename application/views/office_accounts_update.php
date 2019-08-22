<?php include "template/header.php"; ?>

<div class="row">
<div class="col-lg-12">
<div class="card-box">

<div class="row">
<div class="col-md-12">
    <h3>Update Office Accounts</h3>

    <form action="<?php echo base_url('admin/UpdateOfficeAccount/'.$editAccountID['ac_id']); ?>" method="POST">
        <div class="form-group">
            <!-- <label>Category<span class="text-danger">*</span></label> -->
            <input type="text" class="form-control" name="acc_name"
                value="<?php echo set_value('acc_name',$editAccountID['ac_name'] ); ?>" placeholder="Account Nmae">
            <?php echo form_error('acc_name'); ?>
        </div>
		
		
		<div class="form-group">
            <!-- <label>Category<span class="text-danger">*</span></label> -->
            <input type="text" class="form-control" name="acc_number"
                value="<?php echo set_value('acc_number',$editAccountID['ac_number'] ); ?>" placeholder="Account Number">
            <?php echo form_error('acc_number'); ?>
        </div>

        <div class="form-group text-left m-b-0">
            <button class="btn btn-custom waves-effect waves-light" type="submit">Submit</button>

        </div>
    </form>
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