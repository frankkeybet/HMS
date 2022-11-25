
<?php
 require 'function/db_connect.php';

 $total_patient = 0;
 $total_customer = 0;
 $total_supplier = 0;
 $total_bed = 0;
 $total_department = 0;
 $total_doctor = 0;
 $total_ward = 0;
 $total_report = 0;
 $total_user = 0;
 if ($result = $conn->query("SELECT patient_id FROM tbl_patient")) {
    $total_patient = $result->num_rows;
    $result->close();
	}
 if ($result = $conn->query("SELECT * FROM tbl_admin WHERE type=4")) {
    $total_customer = $result->num_rows;
    $result->close();
	}
if ($result = $conn->query("SELECT * FROM tbl_admin")) {
	$total_user = $result->num_rows;
    $result->close();
	}
if ($result = $conn->query("SELECT * FROM tbl_report")) {
	$total_report = $result->num_rows;
    $result->close();
	}
 if ($result = $conn->query("SELECT * FROM tbl_pharmacist")) {
    $total_supplier = $result->num_rows;
    $result->close();
	}
 if ($result = $conn->query("SELECT bed_id FROM tbl_bed")) {
    $total_bed = $result->num_rows;
    $result->close();
	}
 if ($result = $conn->query("SELECT department_id FROM tbl_department")) {
    $total_department = $result->num_rows;
    $result->close();
	}
 if ($result = $conn->query("SELECT doctor_id FROM tbl_doctor")) {
    $total_doctor = $result->num_rows;
    $result->close();
	}
if ($result = $conn->query("SELECT ward_id FROM tbl_ward")) {
    $total_ward = $result->num_rows;
    $result->close();
	}

?>


<div class="content">
    <div class="container-fluid">    
        <div class="row">
            <div class="col-md-12">

                <h2 class="text-center">Hospital Management</h2>
				<br><br>
				<div class="col-md-4">
				 <div class="panel panel-default">
			    	<div class="panel-body" style=" background: #7935FF;">
			    		<h3 class="" style="color: #fff; font-weight: normal"><label style="color: #fff; font-weight: normal"><?php echo $total_patient ?></label> Patients </h3>
			    </div>
			     </div>
				</div>
				<div class="col-md-4">
				 <div class="panel panel-default">
			    	<div class="panel-body" style=" background: #7935FF;">
			    		<h3 class=""style="color: #fff; font-weight: normal"><label style="color: #fff; font-weight: normal"><?php echo  $total_customer  ?></label> Receptionist </h3>

			    	</div>
			     </div>
				</div>
				<div class="col-md-4">
				 <div class="panel panel-default">
			    	<div class="panel-body" style=" background: #7935FF;">
			    		<h3 class=""style="color: #fff; font-weight: normal"><label style="color: #fff; font-weight: normal"><?php echo   $total_supplier  ?></label> Pharmacist </h3>
			    	</div>
			     </div>
				</div>
				<div class="col-md-4">
				 <div class="panel panel-default">
			    	<div class="panel-body" style=" background: #7935FF;">
			    		<h3 class=""style="color: #fff; font-weight: normal"><label style="color: #fff; font-weight: normal"><?php echo  $total_bed ?></label> Beds </h3>
			    	</div>
			     </div>
				</div>
				<div class="col-md-4">
				 <div class="panel panel-default">
			    	<div class="panel-body" style=" background: #7935FF;">
			    		<h3 class=""style="color: #fff; font-weight: normal"><label style="color: #fff; font-weight: normal"><?php echo $total_department  ?></label> Departments </h3>
			    	</div>
			     </div>
				</div>
				<div class="col-md-4">
				 <div class="panel panel-default">
			    	<div class="panel-body" style=" background: #7935FF;">
			    		<h3 class=""style="color: #fff; font-weight: normal"><label style="color: #fff; font-weight: normal"><?php echo  $total_doctor ?></label> Doctors </h3>
			    	</div>
			     </div>
				</div>
				<div class="col-md-4">
				 <div class="panel panel-default">
			    	<div class="panel-body" style=" background: #7935FF;">
			    		<h3 class=""style="color: #fff; font-weight: normal"><label style="color: #fff; font-weight: normal"><?php echo  $total_ward ?></label> Wards </h3>
			    	</div>
			     </div>
				</div>
				<div class="col-md-4">
				 <div class="panel panel-default">
			    	<div class="panel-body" style=" background: #7935FF;">
			    		<h3 class=""style="color: #fff; font-weight: normal"><label style="color: #fff; font-weight: normal"><?php echo  $total_report ?></label> Reports </h3>
			    	</div>
			     </div>
				</div>
                <div class="col-md-4">
				 <div class="panel panel-default">
			    	<div class="panel-body" style=" background: #7935FF;">
			    		<h3 class=""style="color: #fff; font-weight: normal"><label style="color: #fff; font-weight: normal"><?php echo  $total_user ?></label> Users </h3>
			    	</div>
			     </div>
				</div>

            </div>                  
        </div>      
    </div>    
</div>