<?php include "template/header.php"; ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title mb-3">View All Emplayees</h4>

            <?php if( $singleEmployeeDelete= $this->session->flashdata('delete')) { ?>
    <div class="row">
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $singleEmployeeDelete; ?>
        </div>
    </div>
    <?php } ?>


            <?php if( $newEmployee_success= $this->session->flashdata('success')) { ?>
    <div class="row">
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $newEmployee_success; ?>
        </div>
    </div>
    <?php } ?>



            <div class="table-responsive table-bordered">
                <table class="table table-hover table-centered m-0">

                    <thead>
                        <tr>
                            <th>Employee ID </th>
                            <th>Name</th>
                            <th>
                                <form action="">
                                    <div class="form-group"
                                        style="width: 100%; padding: 0;     margin-bottom: 0rem;   ">
                                        <select class="custom-select " style="  border: 0px solid #ced4da; padding:0;">
                                            <option selected>Designation</option>
                                            <option value="1">Driver</option>
                                            <option value="2">Watcher</option>

                                        </select>
                                    </div>
                                </form>
                            </th>
                            <th>Account Number </th>
                            <th>Mob</th>
                            <th>Age</th>

                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    

                    <?php foreach ($allEmployees as $allEmploye){ ?>
                        <tr>
                            <td>
                            <?php echo  $allEmploye['emp_official_id'];  ?>

                            </td>

                            <td>
                            <?php echo  $allEmploye['emp_name'];  ?>
                            </td>
                            <td>
                            <?php echo  $allEmploye['cat_name'];  ?>
                            </td>
                            <td>
                            <?php echo  $allEmploye['emp_account_number'];  ?>
                            </td>

                            <td>
                            <?php echo  $allEmploye['emp_mob'];  ?>
                            </td>


                            <td>
                            <?php echo  $allEmploye['age'];  ?>
                            </td>




                            <td>
                                <img src="<?php echo base_url(); ?>/assets/images/profile/<?php echo $allEmploye['emp_photo'] ;?>" alt="contact-img" title="contact-img"
                                    class="rounded-circle thumb-sm" />
                            </td>

                            <td>
                                <a href="<?php echo base_url('admin/singleView/'.$allEmploye['emp_id']);?>" class="btn btn-sm btn-custom"><i class="mdi mdi-eye"></i></a>
                                <a href="<?php echo base_url('admin/singleEmployeeedit/'.$allEmploye['emp_id']);?>" class="btn btn-sm btn-custom"><i class="mdi mdi-table-edit"></i></a>
                                <a href="<?php echo base_url('admin/singleEmployeeDelete/'.$allEmploye['emp_id']);?>" class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a>
                            </td>
                        </tr>
                        <?php } ?>


                    </tbody>
                </table>
            </div>
        </div>

    </div>


</div>
<!-- end row -->

<?php include "template/footer.php"; ?>