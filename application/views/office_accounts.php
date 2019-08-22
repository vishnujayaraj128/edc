<?php include "template/header.php"; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">

            <div class="row">
                <div class="col-md-6">
                    <h3>Create Office Accounts</h3>

                    <div class="row">
                        <?php $accountSuccess = $this->session->userdata('accountSuccess');
        if($accountSuccess != "" ){ ?>
                        <div class="alert alert-dismissible alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $accountSuccess; ?>
                        </div>
                        <?php } ?>
                    </div>


                    <div class="row">
                        <?php $UpdateAccounts = $this->session->userdata('UpdateAccount');
        if($UpdateAccounts != "" ){ ?>
                        <div class="alert alert-dismissible alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $UpdateAccounts; ?>
                        </div>
                        <?php } ?>
                    </div>




                    <form action="<?php echo base_url(); ?>admin/CreateOfficeAccounts" method="POST">
                        <div class="form-group">
                            <!-- <label>Category<span class="text-danger">*</span></label> -->
                            <input type="text" class="form-control" name="acc_name" placeholder="Office Account Name">
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
                        <?php $deleteAccounts = $this->session->userdata('deleteAccount');
        if($deleteAccounts != "" ){ ?>
                        <div class="alert alert-dismissible alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $deleteAccounts; ?>
                        </div>
                        <?php } ?>
                    </div>





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

                                <?php if (!empty($accounts)){foreach($accounts as $account) { ?>
                                <tr>
                                    <td><?php echo $account['ac_name'];  ?></td>
                                    <td><?php echo $account['ac_number'];  ?></td>
                                    <td>
                                        <a href="<?php echo base_url('admin/EditOfficeAccount/'.$account['ac_id']);?>"
                                            class="btn btn-sm btn-custom"><i class="mdi mdi-table-edit"></i></a>
                                        <a href="<?php echo base_url('admin/DeleteOfficeAccount/'.$account['ac_id']);?>"
                                            class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a>
                                    </td>
                                </tr>
                                <?php } }  else{ ?>
                                <tr>
                                    <td colspan="3">No category Found</td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>



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