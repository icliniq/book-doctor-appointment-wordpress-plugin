<?php
  include_once(dirname(__FILE__).'/config.php');

  //include json rpc client
  include_once(dirname(__FILE__).'/jsonRPCClient.php');

  /**
   * Displays the doctor search results in a widget box
   */
  function display_search_result_widget($display_results){
  global $icq_speciality_id_json, $icq_location;
	global $arrSpecialityAll;

	$icq_speciality_id_json_val = get_option($icq_speciality_id_json);
	$icq_location_val = get_option($icq_location);

	//call the icliniq's json webservuce to get the dictor list
	$objClient  = new jsonRPCClient('http://icliniq.com/webservice/index');	

	$display_results = empty($display_results) ? 5 : $display_results;
	
	try {
	  //call this method from network
	  $arrData = $objClient->listDoctors($icq_speciality_id_json_val, $icq_location_val, 1, $display_results);
?>

	  <table style="width:100%;" cellspacing="0" cellpadding="0" border="0">
	    <tr>
		  <td colspan="2" align="right" style="padding:5px; border:1px #ccc solid;">
		    <h2>Doctors</h2>
			<?php if(!empty($icq_location_val)): ?>
			  <br />Location: <i><?php echo ucwords($icq_location_val) ?></i>
			<?php endif ?>
			<?php if(!empty($icq_speciality_id_json_val)): ?>			   
			    <?php
				  $arrSpecialityId = json_decode($icq_speciality_id_json_val, true);	 
				  $arrSpTitle = array();
				  foreach($arrSpecialityId as $index=>$spId){
					$arrSpTitle[] = $arrSpecialityAll[$spId];
				  }
				  if(!empty($arrSpTitle)){
				    $strSpeciality = implode(', ', $arrSpTitle);
					echo '<br />Speciality: <label title="'.$strSpeciality.'"><i>'.substr($strSpeciality, 0, 20).'</i></label> <a href="https://www.icliniq.com/search/online-doctors-directory" title="'.$strSpeciality.'">...</a>';
				  }
				?>
			<?php endif ?>
			
		  </td>
		</tr>
<?php

	  foreach($arrData as $rowData)
	  {
?>
		<tr>
		  <td style="padding:5px 0 5px 0; vertical-align:top; border-bottom:1px #ccc solid;">
		    <a href="http://www.icliniq.com/doctor/profile/user_id/<?php echo $rowData['id'] ?>"><img width="70" src="<?php echo $rowData['photo'] ?>" border="0" /></a>
		  </td>
		  <td style="padding:5px 0 5px 5px; vertical-align:top; border-bottom:1px #ccc solid;">
		    <div style="padding-bottom:5px;"><a href="http://www.icliniq.com/doctor/profile/user_id/<?php echo $rowData['id'] ?>"><b>Dr.<?php echo $rowData['name'] ?></b></a></div>
			<div style="padding-bottom:5px;"><small><?php echo $rowData['education'] ?></small></div>
			<div style="padding-bottom:5px;"><small><b><?php echo $rowData['speciality'] ?></b></small></div>			
		  </td>
		</tr>
<?php
	  }
?>
		<tr>
		  <td colspan="2" style="padding:5px;">
		   <a href="http://icliniq.com/pages/display/page/wordpress-plugin" target="_new" style="float:left;"><small>Get this widget?</small></a>
		   <a href="https://www.icliniq.com/search/online-doctors-directory" target="_new" style="float:right;"><small>View More Doctors &#187;</small></a>		   
		  </td>
		</tr>
<?php
	  echo '</table>';	  

	}catch(Exception $e) {
	 
	}	
  }

  /**
   * Displays the doctor search results in a body box
   */
  function display_search_result_body($page=1, $results=10){
	global $icq_speciality_id_json, $icq_location;

	$icq_speciality_id_json_val = get_option($icq_speciality_id_json);
	$icq_location_val = get_option($icq_location);

	//call the icliniq's json webservuce to get the dictor list
	$objClient  = new jsonRPCClient('http://icliniq.com/webservice/index');	
	
	try {
	  //call this method from network
	  $arrData = $objClient->listDoctors($icq_speciality_id_json_val, $icq_location_val, $page, $results);

	  echo '<table style="width:100%;" cellspacing="0" cellpading="0" border="0">';
	  foreach($arrData as $rowData)
	  {
?>
		<tr>
		  <td style="padding:5px 0 5px 0; vertical-align:top; border-bottom:1px #ccc solid;width:85px;">
		    <a href="http://www.icliniq.com/doctor/profile/user_id/<?php echo $rowData['id'] ?>"><img width="70" src="<?php echo $rowData['photo'] ?>" border="0" /></a>
		  </td>
		  <td style="padding:5px 0 5px 5px; vertical-align:top; border-bottom:1px #ccc solid;">
		    <div style="padding-bottom:5px;"><a href="http://www.icliniq.com/doctor/profile/user_id/<?php echo $rowData['id'] ?>"><b>Dr.<?php echo $rowData['name'] ?></b></a></div>
			<div style="padding-bottom:5px;"><small><?php echo $rowData['education'] ?></small></div>
			<div style="padding-bottom:5px;"><small><b><?php echo $rowData['speciality'] ?></b></small></div>
			
			<div style="padding-top:15px; padding-bottom:10px;">
			  <a href="http://localhost/xampp/htdocs/icliniq/web/dev.php/appointment/chooseAppointmentDate/doctor/<?php echo $rowData['id'] ?>">Book an Appointment</a> |
			  <a href="https://www.icliniq.com/ask-a-doctor-online" title="Ask a doctor online">Ask a Health Query</a>
			</div>
		  </td>
		</tr>
<?php
	  }
	  echo '</table>';	  

	}catch(Exception $e) {
	 
	}	
  }
