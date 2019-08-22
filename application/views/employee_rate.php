<?php include "template/header.php"; ?>
<div class="row">
<div class="col-lg-12">
<div class="card-box">

<div class="row">
<div class="col-md-6">
    <h3>Create Rate Amount</h3>

    <?php $updateCategory_success = $this->session->flashdata('update_amount_success') ?>
     <?php if( $updateCategory_success  !='') {  ?>
    <div class="row">
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $updateCategory_success; ?>
        </div>
    </div>
    <?php } ?>




    <?php  $rate_success= $this->session->userdata('rate'); ?>
    <?php if( $rate_success  !='') {  ?>
    <div class="row">
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $rate_success; ?>
        </div>
    </div>
    <?php } ?>



    <form action="<?php echo base_url(); ?>admin/CreateRateAmount" method="POST">
        <div class="form-group">
            <!-- <label>Category<span class="text-danger">*</span></label> -->
            <input type="text" class="form-control" name="rate_amount"
                 placeholder="Create Rate Amount">
            <?php echo form_error('rate_amount'); ?>
        </div>

        <div class="form-group text-left m-b-0">
            <button class="btn btn-custom waves-effect waves-light" type="submit">Submit</button>

        </div>
    </form>
</div>
 <div class="col-md-6">
    <h3>Rate Amounts</h3>
    <div class="row">
        <table class="table table-hover table-centered table-bordered">

            <thead>
                <tr>
                    <th>Rate Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
         

                <?php if( !empty($amounts)) { foreach( $amounts as $amount) { ?>

                <tr>
                    <td><?php echo $amount ['rate_amount']; ?></td>
                    <td> <a href="<?php echo base_url('admin/EditRateAmount/'.$amount['rate_id']);?>" class="btn btn-sm btn-custom"><i class="mdi mdi-table-edit"></i></a>
                        <a href="<?php echo base_url('admin/DeleteRateAmount/'.$amount['rate_id']);?>"  class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a></td>
                </tr>
                <?php } }  else{?>
                    <tr>
                        <td colspan="2">No category Found</td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>

        <?php $rateamount_Delete= $this->session->flashdata('DeleteRateAmount') ?>
        <?php if( $rateamount_Delete  !='') {  ?>
    <div class="row">
        <div class="alert alert-dismissible alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $rateamount_Delete; ?>
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