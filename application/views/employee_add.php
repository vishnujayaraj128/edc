<?php include "template/header.php"; ?>
<form action="<?php echo base_url('admin/employeeInsert'); ?>" method="POST" enctype="multipart/form-data" >
<div class="row">
    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="header-title m-t-0">Personal Details</h4>
            <hr>

            <div class="form-group">
                <label>User Name<span class="text-danger">*</span></label>
                <?php echo form_error('empName'); ?>
                <input type="text" class="form-control" id="empName" name="empName" value="<?php echo set_value('empName'); ?>" placeholder="Full Name">
            </div>

            <div class="form-group">
            <?php echo form_error('empDateOfBirth'); ?>
                <label>Date Of Birth</label>              
                <div>
                    <div class="input-group">
                        <input class="form-control" autocomplete="off" value="<?php echo set_value('empDateOfBirth'); ?>"  name="empDateOfBirth" id="datepicker-autoclose"
                            placeholder="mm/dd/yyyy" type="text">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
            <?php echo form_error('empGender'); ?>
                <select class="custom-select mt-3" name="empGender" value="<?php echo set_value('empGender'); ?>"  id="empGender">
                    <option selected="">
                        Gender
                    </option>
                    <option value="Male">
                        Male
                    </option>
                    <option value="Female">
                        Female
                    </option>
                    <option value="Other">
                        Other
                    </option>
                </select>
            </div>

            <div class="form-group">
           
                <label>Guardian<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="empGuardian" name="empGuardian" value="<?php echo set_value('empGuardian'); ?>" 
                    placeholder="Guardian">
            </div>

            <div class="form-group">
            <?php echo form_error('empReligion'); ?>
                <label>Religion<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="empReligion" name="empReligion" value="<?php echo set_value('empReligion'); ?>" 
                    placeholder="Religion">
            </div>

            <div class="form-group">
            <?php echo form_error('empSubCaste'); ?>
                <label>Sub Caste<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="empSubCaste" name="empSubCaste" value="<?php echo set_value('empSubCaste'); ?>" 
                    placeholder="Sub Caste">
            </div>

            <div class="form-group">
            <?php echo form_error('empCasteGroup'); ?>
                <label>Caste Group<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="empCasteGroup" name="empCasteGroup" value="<?php echo set_value('empCasteGroup'); ?>" 
                    placeholder="Caste Group">
            </div>

            <div class="form-group">

                <label>Education<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="empEducation" name="empEducation" value="<?php echo set_value('empEducation'); ?>" 
                    placeholder="Education">
            </div>

            <div class="form-group">

                <label>Photo<span class="text-danger">*</span></label>
                <input type="file" class="form-control" name="userfile" placeholder="User Profile">
            </div>

        </div>
    </div>

    <div class="col-lg-6">
        <div class="card-box">
            <div>
                <h4 class="header-title m-t-0">Contact Details</h4>
                <hr>

                <div class="form-group">
                <?php echo form_error('empMobile'); ?>
                    <label>Mobile<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="empMobile" name="empMobile" value="<?php echo set_value('empMobile'); ?>" 
                        placeholder="Mobile">
                </div>

                <div class="form-group">

                    <label>Adhar Number<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="empAdhar" name="empAdhar" value="<?php echo set_value('empAdhar'); ?>" 
                        placeholder="Adhar Number">
                </div>

                <div class="form-group">
                <?php echo form_error('empAddress'); ?>
                    <label>Address<span class="text-danger">*</span></label>
                    <textarea class="form-control" value="<?php echo set_value('empAddress'); ?>"  id="empAddress" name="empAddress" placeholder="Address"> </textarea>

                </div>
            </div>

            <div>
                <br>
                <h4 class="header-title m-t-0">Bank Information</h4>
                <hr>

                <div class="form-group">
                <?php echo form_error('empBankName'); ?>
                    <label>Bank Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="empBankName" name="empBankName" value="<?php echo set_value('empBankName'); ?>" 
                        placeholder="Bank Name">
                </div>
                <div class="form-group">
                    <label>Branch Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="empBranchName" name="empBranchName" value="<?php echo set_value('empBranchName'); ?>" 
                        placeholder="Branch Name">
                </div>

                <div class="form-group">
                <?php echo form_error('empifsc'); ?>
                    <label>IFSC Code<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="empIFSC" name="empifsc" value="<?php echo set_value('empifsc'); ?>"  placeholder="IFSC">
                </div>

                <div class="form-group">
                <?php echo form_error('empAccountNumber'); ?>
                    <label>Account Number<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="empAccountNumber" name="empAccountNumber" value="<?php echo set_value('empAccountNumber'); ?>" 
                        placeholder="Account Number">
                </div>

            </div>

            <div>
                <br>
                <h4 class="header-title m-t-0">Official Status</h4>
                <hr>

                <div class="form-group">
                <?php echo form_error('empEmployeeID'); ?>
                    <label>Employee ID<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="empEmployeeID" name="empEmployeeID" value="<?php echo set_value('empEmployeeID'); ?>" 
                        placeholder="Employee ID">
                </div>
                <div class="form-group">
                <?php echo form_error('empDesignation'); ?>
                    <select class="custom-select mt-3" name="empDesignation" id="empDesignation">
                        <option selected="" disabled=""> Designation  </option>
                        
                        <?php foreach($categories as $category){?>
                            <option value="<?php echo $category['cat_id'];  ?>"><?php echo $category['cat_name'];  ?></option>
                        <?php }  ?>

                    </select>
                </div>

                <div class="form-group">
                <?php echo form_error('empDateOfJoing'); ?>
                    <label>Date Of Joining</label>
                    <div>

                        <div class="input-group">
                            <input type="text" autocomplete="off" name="empDateOfJoing" class="form-control"
                                placeholder="mm/dd/yyyy" id="datepicker" value="<?php echo set_value('empDateOfJoing'); ?>" >
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="form-group text-right m-b-0">
                <button class="btn btn-custom waves-effect waves-light" type="submit">Submit</button>
              
            </div>
        </div>
    </div>

</div>
</form>

<?php include "template/footer.php"; ?>