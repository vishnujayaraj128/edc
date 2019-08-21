
<?php include "template/header.php"; ?>
<div class="row">
                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="header-title m-t-0">Personal Details</h4>
                                <hr>

                                <div class="form-group">
                                    <label>User Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="empName" name="empName" value=" " placeholder="Full Name">
                                </div>

                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <div>
                                        <div class="input-group">
                                            <input class="form-control" autocomplete="off" name="empDateOfBirth" id="datepicker-autoclose" placeholder="mm/dd/yyyy" type="text">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <select class="custom-select mt-3" name="empGender" id="empGender">
                                        <option selected="">
                                            Gender
                                        </option>
                                        <option value="male">
                                            Male
                                        </option>
                                        <option value="female">
                                            Female
                                        </option>
                                        <option value="Other">
                                            Other
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Guardian<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="empGuardian" name="empGuardian" value=" " placeholder="Guardian">
                                </div>

                                <div class="form-group">
                                    <label>Religion<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="empReligion" name="empReligion" value=" " placeholder="Religion">
                                </div>

                                <div class="form-group">

                                    <label>Sub Caste<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="empSubCaste" name="empSubCaste" value=" " placeholder="Sub Caste">
                                </div>

                                <div class="form-group">

                                    <label>Caste Group<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="empCasteGroup" name="empCasteGroup" value=" " placeholder="Caste Group">
                                </div>

                                <div class="form-group">

                                    <label>Education<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="empEducation" name="empEducation" value=" " placeholder="Education">
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

                                        <label>Mobile<span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="empMobile" name="empMobile" value=" " placeholder="Mobile">
                                    </div>

                                    <div class="form-group">

                                        <label>Adhar Number<span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="empAdhar" name="empAdhar" value=" " placeholder="Adhar Number">
                                    </div>

                                    <div class="form-group">
                                        <label>Address<span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="empAddress" name="empAddress" placeholder="Address"> </textarea>

                                    </div>
                                </div>

                                <div>
                                    <br>
                                    <h4 class="header-title m-t-0">Bank Information</h4>
                                    <hr>

                                    <div class="form-group">
                                        <label>Bank Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="empBankName" name="empBankName" value=" " placeholder="Bank Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Branch Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="empBranchName" name="empBranchName" value=" " placeholder="Branch Name">
                                    </div>

                                    <div class="form-group">
                                        <label>IFSC Code<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="empIFSC" name="empifsc" value=" " placeholder="IFSC">
                                    </div>

                                    <div class="form-group">
                                        <label>Account Number<span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="empAccountNumber" name="empAccountNumber" value=" " placeholder="Account Number">
                                    </div>

                                </div>

                                <div>
                                    <br>
                                    <h4 class="header-title m-t-0">Official Status</h4>
                                    <hr>

                                    <div class="form-group">
                                        <label>Employee ID<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="empEmployeeID" name="empEmployeeID" value=" " placeholder="Employee ID">
                                    </div>
                                    <div class="form-group">
                                        <select class="custom-select mt-3" name="empDesignation" id="empDesignation">
                                            <option selected="" disabled="">
                                                Designation
                                            </option>

                                            <option value="1">
                                                Driver </option>

                                            <option value="2">
                                                Watcher </option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Date Of Joining</label>
                                        <div>

                                            <div class="input-group">
                                                <input type="text" autocomplete="off" name="empDateOfJoing" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-custom waves-effect waves-light" type="submit">Submit</button>
                                    <button class="btn btn-light waves-effect m-l-5" type="reset">Cancel</button>
                                </div>
                            </div>
                        </div>

                    </div>

<?php include "template/footer.php"; ?>

