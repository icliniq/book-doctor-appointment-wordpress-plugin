<?php

global $gsc_version, $icq_plugin_name, $gsc_plugin_dir_path, $gsc_search_engine_id, $gsc_open_results_in_same_window, $gsc_hide_search_button;

global $icq_location, $icq_speciality_id_json, $arrSpecialityAll;
$icq_location = 'icq_location';
$icq_speciality_id_json = 'icq_speciality_id_json';

$icq_plugin_name = "book-doctor-appointment-icliniq";

$gsc_plugin_dir_path = WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__));

$gsc_version = "1.0";

$gsc_search_engine_id = "gsc_search_engine_id";

$gsc_open_results_in_same_window = "gsc_open_results_in_same_window";

$gsc_hide_search_button = "gsc_hide_search_button";

$number_of_widgets_using_pop_up_displays = 0;

$arrSpecialityAll = array(
  'null'=>'Any Speciality',
	2=>'Andrology',
	1=>'Anesthesiology',
	3=>'Audiology',
	226=>'Ayurveda Specialist',
	4=>'Cardiology',
	5=>'Cardiothoracic Surgery',
	228=>'Childbirth Educator',
	225=>'Chiropractor',
	236=>'Critical Care Physician',
	6=>'Dentistry',
	185=>'Dermatology',
	186=>'Diabetology',
	223=>'Dietician',
	187=>'Endocrinology',
	235=>'Endodontist',
	220=>'Family Physician',
	224=>'Fitness Expert',
	188=>'Forensic Medicine',
	239=>'General Medicine',
	191=>'General Surgery',
	192=>'Geriatrics',
	194=>'Hematology',
	227=>'Homeopathy',
	233=>'Internal Medicine',
	229=>'Lactation Counselor',
	189=>'Medical Gastroenterology',
	200=>'Medical Oncology',
	195=>'Microbiology',
	196=>'Nephrology',
	198=>'Neuro Surgery',
	197=>'Neurology',
	199=>'Nuclear Medicine',
	222=>'Nutritionist',
	193=>'Obstetrics And Gynecology',
	202=>'Ophthalmology',
	234=>'Orthodontics',
	203=>'Orthopedics And Traumatology',
	204=>'Otolaryngology',
	206=>'Paediatric Surgery',
	205=>'Paediatrics',
	230=>'Pain Medicine',
	207=>'Pathology',
	237=>'Pediatric Dentist',
	238=>'Periodontist',
	208=>'Pharmacology',
	221=>'Physiotherapy',
	209=>'Plastic Surgery - Reconstructive And Cosmetic',
	210=>'Preventive Medicine',
	211=>'Psychiatry',
	219=>'Psychologist/ Counsellor',
	212=>'Pulmonology',
	213=>'Radiodiagnosis',
	214=>'Radiotherapy',
	215=>'Rheumatology',
	190=>'Surgical Gastroenterology',
	201=>'Surgical Oncology',
	216=>'Toxicology',
	217=>'Urology',
	218=>'Vascular Surgery'
  );

//Search Results display constants
define('DISPLAY_RESULTS_AS_POP_UP', 0);
define('DISPLAY_RESULTS_IN_UNDER_SEARCH_BOX', 1);
define('DISPLAY_RESULTS_CUSTOM', 2);
