<?php
/**
 *  Admin Page 
 *  For configuring the plugin
 */
 
include_once(dirname(__FILE__).'/config.php');

global $icq_speciality_id_json, $icq_location, $icq_plugin_name;
global $arrSpecialityAll;

function icq_update_form(){  

	global $icq_speciality_id_json, $icq_location;

	//update config	
	$icq_speciality_id = $_POST['icq_speciality_id_json'];
	if(!empty($icq_speciality_id))
	{
	  $icq_speciality_id_json_val = json_encode($icq_speciality_id);
	  update_option($icq_speciality_id_json, $icq_speciality_id_json_val);

	  $icq_location_val = trim($_POST['icq_location']);	
	  update_option($icq_location, $icq_location_val);	
	
	  return true;
	}

	return false;
}
?>
<div class="wrap">

<h3>Book Doctor Appointment - Options</h3>
<?php
 if(icq_update_form()){
?>
	 <div id="message" class="updated"><p>Book Doctor Appointments - Options <strong>updated</strong>.</p></div>
<?php
 }
?>

<form name="rssForm" method="post" action="admin.php?page=<?php echo $icq_plugin_name ?>">
<?php settings_fields( 'icq-settings-group' ); ?>
  <table class="form-table">

    <tr valign="top">
      <th scope="row">Choose Speciality:</th>
      <td valign="top">
	    <?php
		  
		  
		  $json_speciality = get_option($icq_speciality_id_json);
		  $arrSpeciality = json_decode($json_speciality, true);
		  //$arrSpeciality = array_values($arrSpeciality);		  
		?>
		<select name="icq_speciality_id_json[]" multiple="true" style="height:110px; width:300px;">
		  <?php
		    foreach($arrSpecialityAll as $spId=>$spTitle)
			{
			  $isSelected = array_search($spId, $arrSpeciality) !== false ? 'selected' : '';
		  ?>
			  <option value="<?php echo $spId ?>" <?php echo $isSelected ?>><?php echo $spTitle ?></option>
		  <?php
			}
		  ?>			
		</select><br />
		(<i>Hold down '<b>Ctrl</b>' key for multiple selection</i>)
	  </td>
    </tr>
    <tr valign="top">
      <th scope="row">Restrict doctors from Location:</th>
      <td>
	    <?php $icq_location_val = get_option($icq_location); ?>
	    <input name="icq_location" type="text" value="<?php echo $icq_location_val ?>" style="width:300px;"/>
	  </td>
    </tr>    
  </table>
  <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
  </p>
</form>

</div> 
