<?php include "template/header.php"; ?>

<div class="container-fluid">
        <form action="http://localhost/forest-app/admin/salary_insert" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <h4 class="header-title m-t-0">Calculate Salary</h4>
                        <hr>

                                                   
                        <div class="form-group">

                            <label>Designation<span class="text-danger">*</span></label>
                            <select class="custom-select mt-3" name="empDesignation" id="empDesignation">
                           <option disabled="" selected="">Select Designation</option>
                                                              
                                <?php  foreach ($categories as $category) {   ?>
                                <option value="<?php echo $category['cat_id']; ?>"><?php echo $category['cat_name']; ?></option>
                                <?php  } ?>
                                
                            </select>
                        </div>


                        <div class="form-group">

                            <label>Select Employee<span class="text-danger">*</span></label>

                            <select class="custom-select mt-3" name="empName" id="empName" disabled>                         


                            </select>
                        </div>

                        <div id="employeeAccount" class="form-group" style="display:none;background-color:#02c0ce;color:#fff;border: 1px solid #d9e3e9; border-radius: 4px; max-width: 100%; padding: .469rem .469rem; font-size: 14px; -webkit-box-shadow: none; box-shadow: none; -webkit-transition: all 300ms linear; -moz-transition: all 300ms linear; -o-transition: all 300ms linear; transition: all 300ms linear; ">
                            <p id="employeeAccountNumber">1526</p>
                        </div>



                        <div class="form-group">
                         
                            <label>Attendance<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="empAttendance" name="empAttendance" placeholder="Attendance">
                        </div>

                                   
                                    <div class="form-group">
                                    <label>Rates<span class="text-danger">*</span></label>
                                    <select class="custom-select mt-3" name="empRate" id="empRate">
                                    <option disabled="" selected="">Choose Rate</option>
                                        <?php foreach($rates as $rate ) { ?>
                                            <option value=" <?php echo $rate['rate_id'];  ?>"> <?php echo $rate['rate_amount'];  ?></option>
                                            <?php } ?>

                                        
                                    </select>
                                    </div>
                     

                        <div class="form-group">
                     
                            <label>CDF Count<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="empCdf" name="empCdf" placeholder="CDF">
                        </div>

                        <div class="form-group">
                       
                            <label>LIC<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="empLic" name="empLic" placeholder="LIC">
                        </div>

                        <div class="form-group">
                    
                            <label>Loan<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="empLoan" name="empLoan" placeholder="Loan">
                        </div>

                        <div class="form-group text-right m-b-0">
                            <button class="btn btn-custom waves-effect waves-light" type="submit">Calculate
                                Salary</button> <button class="btn btn-light waves-effect m-l-5" type="reset">Cancel</button>
                        </div>


                    </div>
                </div>




            </div>
        </form>


    </div>
<!-- end row -->

<script>

$(function() {
    $('#empDesignation').change(function() {
        var user_designation = $(this).val();
        if (user_designation == '') {
            $('#empName').prop('disabled', true);
        } else {
            $('#empName').prop('disabled', false);
            
            $.ajax({
                url: "<?php echo site_url(); ?>admin/get_employee_for_salary",
                type: "POST",
                data: {
                    'user_designation': user_designation
                },
                dataType: 'json',
                success: function(data) {
                    // alert('ok');

                    $('#empName').html(data);
                },
                error: function() {
                    alert('not okay');
                }

            });

        }

    });
});



$(function() {
    $('#empName').change(function() {
        var employee_id = $(this).val();
        // alert(employee_id);
        if (employee_id == '') {
            $('#employeeAccount').css("display", "none");
        } else {
              $('#employeeAccount').css("display", "block");

            $.ajax({
                url: "<?php echo site_url(); ?>admin/get_employee_account_number",
                type: "POST",
                data: {
                    'employee_id': employee_id
                },
                dataType: 'json',
                success: function(data) {
                    // alert('ok');

                    $('#employeeAccountNumber').html(data);
                },
                error: function() {
                    alert('not okay');
                }

            });

        }

    });
});





</script>
<?php include "template/footer.php"; ?>