<?php include "template/header.php"; ?>
<div class="row">
<div class="col-lg-12">
<div class="card-box">

<div class="row">
<div class="col-md-6">
    <h3>Create Office Accounts</h3>

   <!--  <?php $updateCategory_success = $this->session->flashdata('update_amount_success') ?>
     <?php if( $updateCategory_success  !='') {  ?>
    <div class="row">
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $updateCategory_success; ?>
        </div>
    </div>
    <?php } ?>
 -->


<!-- 
    <?php  $accounts= $this->session->userdata('accountsuccess'); ?>
    <?php if( $accounts!='') {  ?>
    <div class="row">
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $accounts; ?>
        </div>
    </div>
    <?php } ?> -->



    <form action="<?php echo base_url(); ?>admin/CreateOfficeAccounts" method="POST">
        <div class="form-group">
            <!-- <label>Category<span class="text-danger">*</span></label> -->
            <input type="text" class="form-control" name="acc_name"
                 placeholder="Office Account Name">
            <?php echo form_error('acc_name'); ?>
        </div>

         <div class="form-group">
            <!-- <label>Category<span class="text-danger">*</span></label> -->
            <input type="text" class="form-control" name="acc_number"
                 placeholder="Office Account Number">
            <?php echo form_error('acc_number'); ?>
        </div>



        <div class="form-group text-left m-b-0">
            <button class="btn btn-custom waves-effect waves-light" type="submit">Submit</button>

        </div>
    </form>
</div>
 <div class="col-md-6">
    <h3>Office Accounts </h3>
    <div class="row">
        <table class="table table-hover table-centered table-bordered">

            <thead>
                <tr>
                    <th>Account Name</th>
                    <th>Account Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
         

                <?php  foreach( $accounts as $account) { ?>

                <tr>
                <td><?php echo $account['ac_name'];?> </td>
                   
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