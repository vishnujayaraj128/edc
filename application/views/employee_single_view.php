<?php include "template/header.php"; ?>

<div class="row">
<div class="col-lg-12">


<div class="card-box">


<ul class="nav nav-pills navtab-bg nav-justified pull-in ">
<li class="nav-item">
<a href="#emplyee-details" data-toggle="tab" aria-expanded="true" class="nav-link">
    <i class="fi-monitor mr-2"></i> Employee Details
</a>
</li>
<li class="nav-item">
<a href="#emplyee-loan" data-toggle="tab" aria-expanded="false" class="nav-link active">
    <i class="fi-head mr-2"></i>Loan History
</a>
</li>
<li class="nav-item">
<a href="#emplyee-salary" data-toggle="tab" aria-expanded="false" class="nav-link">
    <i class="fi-mail mr-2"></i> Salary Hostory
</a>
</li>

</ul>
<div class="tab-content">
<div class="tab-pane" id="emplyee-details">
<div class="text-center card-box">

    <div class="member-card pt-2 pb-2">
        <div class="thumb-lg member-thumb m-b-10 mx-auto">
            <img src="<?php echo base_url(); ?>/assets/images/profile/<?php echo $singleEmployee['emp_photo'] ;?>"
                class="rounded-circle img-thumbnail" alt="profile-image">
        </div>

        <div class="">

            <h4 class="m-b-5"><?php echo $singleEmployee['emp_name']; ?></h4>
            <p class="text-muted"><?php echo $singleEmployee['cat_name']; ?> <span> </span> </p>
        </div>



        <div style="background-color:#2d7bf4; display:inline-block; padding:10px; color:#fff;">
            Mobile: <?php echo $singleEmployee['emp_mob']; ?></div>

        <div class="mt-4">
            <div class="row">
                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5"><?php echo $singleEmployee['emp_name']; ?></h4>
                        <p class="mb-0 text-muted">Name</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5"><?php echo $singleEmployee['emp_date_of_birth']; ?></h4>
                        <p class="mb-0 text-muted">Date Of Birth</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5"><?php echo $singleEmployee['age']; ?></h4>
                        <p class="mb-0 text-muted">Age</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5"><?php echo $singleEmployee['emp_gender']; ?></h4>
                        <p class="mb-0 text-muted">Gender</p>
                    </div>
                </div>
            </div>


        </div>
        <hr>
        <div class="mt-4">
            <div class="row">
                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5"> <?php echo $singleEmployee['emp_guardian']; ?></h4>
                        <p class="mb-0 text-muted">Guardian</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5"> <?php echo $singleEmployee['emp_religion']; ?></h4>
                        <p class="mb-0 text-muted">Religion</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5"> <?php echo $singleEmployee['emp_cast']; ?></h4>
                        <p class="mb-0 text-muted">Caste</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5">  <?php echo $singleEmployee['emp_group']; ?></h4>
                        <p class="mb-0 text-muted">Caste Group</p>
                    </div>
                </div>
            </div>


        </div>
        <hr>
        <div class="mt-4">
            <div class="row">
                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5"> <?php echo $singleEmployee['emp_education']; ?></h4>
                        <p class="mb-0 text-muted">Education</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5"> <?php echo $singleEmployee['emp_mob']; ?></h4>
                        <p class="mb-0 text-muted">Mobile</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5"> <?php echo $singleEmployee['emp_adhar']; ?></h4>
                        <p class="mb-0 text-muted">Aadhar</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5">  <?php echo $singleEmployee['emp_address']; ?></h4>
                        <p class="mb-0 text-muted">Address</p>
                    </div>
                </div>
            </div>


        </div>

        <hr>
        <div class="mt-4">
            <div class="row">
                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5"> <?php echo $singleEmployee['emp_bank_name']; ?></h4>
                        <p class="mb-0 text-muted">Bank Name</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5"> <?php echo $singleEmployee['emp_branch_name']; ?></h4>
                        <p class="mb-0 text-muted">Branch</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5">  <?php echo $singleEmployee['emp_IFSC']; ?></h4>
                        <p class="mb-0 text-muted">Branch</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5"> <?php echo $singleEmployee['emp_official_id']; ?></h4>
                        <p class="mb-0 text-muted">Employee Official ID</p>
                    </div>
                </div>
            </div>


        </div>

        <hr>
        <div class="mt-4">
            <div class="row">
                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5"> <?php echo $singleEmployee['emp_date_of_joining']; ?></h4>
                        <p class="mb-0 text-muted">Date of Joining</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5"><?php echo $singleEmployee['emp_date_of_relieving']; ?></h4>
                        <p class="mb-0 text-muted">Date Of Relieving</p>
                    </div>
                </div>

                <div class="col-3">
                    <div class="mt-3">
                        <h4 class="m-b-5"><?php echo $singleEmployee['emp_created_at']; ?></h4>
                        <p class="mb-0 text-muted">Employee Created on</p>
                    </div>
                </div>

                <div class="col-3">
                    <div class="mt-3">
                        
                    </div>
                </div>


            </div>


        </div>





    </div>

</div>
</div>
<div class="tab-pane show active" id="emplyee-loan">
<div class="card-box">
    <h4 class="m-t-0 header-title">Loan Details</h4>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Date</th>
                <th>Loan Amount</th>
                <th>Balance</th>
                <th>Credited</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1-1-2019</th>
                <td>10000</td>
                <td>10000</td>
                <td></td>
            </tr>

            <tr>
                <th>2-1-2019</th>
                <td></td>
                <td>9000</td>
                <td>1000</td>
            </tr>


            <tr>
                <th>3-1-2019</th>
                <td></td>
                <td>8000</td>
                <td>1000</td>
            </tr>
            <tr>
                <th>4-1-2019</th>
                <td>5000</td>
                <td>13000</td>
                <td></td>
            </tr>

        </tbody>
    </table>
    <button class="btn btn-sm btn-custom">View Loan </button>
</div>
</div>
<div class="tab-pane" id="emplyee-salary">
<div class="card-box">
    <h4 class="m-t-0 header-title">Salary Details</h4>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Date</th>
                <th>Attendance</th>
                <th>Rate</th>
                <th>Wage</th>
                <th>CDF</th>
                <th>LIC</th>
                <th>Loan</th>
                <th>Net Wages</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>2-1-2019</th>
                <td>22</td>
                <td>1000</td>
                <td>22000</td>
                <td>500</td>
                <td>1000</td>
                <td>500</td>
                <td>20000</td>
            </tr>

            <tr>
                <th>3-1-2019</th>
                <td>22</td>
                <td>1000</td>
                <td>22000</td>
                <td>500</td>
                <td>1000</td>
                <td>500</td>
                <td>20000</td>
            </tr>

            <tr>
                <th>4-1-2019</th>
                <td>22</td>
                <td>1000</td>
                <td>22000</td>
                <td>500</td>
                <td>1000</td>
                <td>500</td>
                <td>20000</td>
            </tr>

            <tr>
                <th>5-1-2019</th>
                <td>22</td>
                <td>1000</td>
                <td>22000</td>
                <td>500</td>
                <td>1000</td>
                <td>500</td>
                <td>20000</td>
            </tr>

            <tr>
                <th>6-1-2019</th>
                <td>22</td>
                <td>1000</td>
                <td>22000</td>
                <td>500</td>
                <td>1000</td>
                <td>500</td>
                <td>20000</td>
            </tr>









        </tbody>
    </table>
</div>
</div>

</div>
</div>





</div>


</div>
<!-- end row -->
<?php include "template/footer.php"; ?>