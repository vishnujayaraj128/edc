<?php include "template/header.php"; ?>

<div class="row">
<div class="col-lg-12">
<div class="card-box">

<div class="row">
<div class="col-md-12">
    <h3>Update Rate</h3>

    <form action="<?php echo base_url('admin/UpdateRateAmount/'.$editrateamountID['rate_id']); ?>" method="POST">
        <div class="form-group">
            <!-- <label>Category<span class="text-danger">*</span></label> -->
            <input type="text" class="form-control" name="rate_amount"
                value="<?php echo set_value('rate_amount',$editrateamountID['rate_amount'] ); ?>" placeholder="Create Rate Amount">
            <?php echo form_error('rate_amount'); ?>
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