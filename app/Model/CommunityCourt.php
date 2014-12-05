<?php
App::uses('AppModel', 'Model');
Class CommunityCourt extends AppModel {

	public $name = 'CommunityCourt';
	public $currentdate;
	public $datereffered;
	public $citationNumber;
	public $fName;
	public $mInitial;
	public $lName;
	public $sAddress;
	public $city;
	public $state1;
	public $zip;
	public $dob;
	public $pPhone;
	public $sPhone;
	public $gender;
	public $ethnicity;
	public $education;
	public $fContactName;
	public $lContactName;
	public $sAddress2;
	public $city2;
	public $state2;
	public $zip2;
	public $comments;

	public function savedata($data = null) {
		$currentdate = $data['currentdate'];
		$datereffered = $data['datereffered'];
		$citationNumber = $data['citationNumber'];
		$fName = $data['fName'];
		$mInitial = $data['mInitial'];
		$lName = $data['lName'];
		$sAddress = $data['sAddress'];
		$city = $data['city'];
		$state1 = $data['state1'];
		$zip = $data['zip'];
		$dob = $data['dob'];
		$pPhone = $data['pPhone'];
		$sPhone = $data['sPhone'];
		$gender = $data['gender'];
		$ethnicity = $data['ethnicity'];
		$education = $data['education'];
		$fContactName = $data['fContactName'];
		$lContactName = $data['lContactName'];
		$sAddress2 = $data['sAddress2'];
		$city2 = $data['city2'];
		$state2 = $data['state2'];
		$zip2 = $data['zip2'];
		$comments = $data['comments'];
		
		$sql = 'INSERT INTO `community_courts`(
					`CurrentDate`, `DateRefferedToCourt`, `CitationNumber`, `FirstName`, `MiddleInitial`, `LastName`, 
					`DateOfBirth`, `StreetAddress`, `City`, `State`, `ZipCode`, `PhoneNumber1`, `PhoneNumber2`, 
					`Race/Ethnicity`, `Gender`, `Education`, `ECFirstName`, `ECLastName`, `ECPhoneNumber`, 
					`ECStreetAddress`, `ECCity`, `ECState`, `ECZipCode`, `ECCOmments`, `DateChanged`, 
					`ReasonForChange`, `LocationOfOffense`, `OffenseCity`, `OffenseState`, `OffenseZipCode`, `DateCharged`, `RPTLC`, 
					`RPRestorativeJustice`, `RPCommunityService`, `RPMentalHealth`, `TLCAliveAt`, `TLCDefensiveDriving`, 
					`TLCCommunityService`, `TLCAliveAtDateOfCompletion`, `TLCDefensiveDrivingDateOfCompletion`, 
					`TLCCommunityServiceDateOfCompletion`, `TLCConditionSatisfied`, `TLCFollowUPDate`, `CSHoursAssigned`, 
					`CSDateAssigned`, `CSOrganization`, `CSHoursCompleted`, `CSOrganizationContactName`, `CSOrganizationContactNumber`, 
					`CSConditionSatisfied`, `CSFollowUpDate`, `MHClinicalService`, `MHAngerManagement`, `MHConflictResolution`, 
					`MHClinicalServiceDateOfCompletion`, `MHAngerManagementDateOfCompletion`, `MHConflictResolutionDateOfCompletion`, 
					`MHConditionSatisfied`, `MHFollowUpDate`, `Comments`) 
				VALUES (
					"'.$currentdate.'", "'.$datereffered.'", "'.$citationNumber.'", "'.$fName.'", "'.$mInitial.'", 
					"'.$lName.'", "'.$sAddress.'", "'.$city.'", "'.$state1.'", "'.$zip.'", "'.$dob.'", "'.$pPhone.'", 
					"'.$sPhone.'", "'.$gender.'", "'.$ethnicity.'", "'.$education.'", "'.$fContactName.'", "'.$lContactName.'", 
					"'.$sAddress2.'", "'.$city2.'", "'.$state2.'", "'.$zip2.'", "'.$comments.'", "[value-24]", "", "", "", "", "",
					"", "", "", "", "", "", "",	"", "", "", "", "", "", "",	"", "", "", "", "", "", "",	"", "", "", "", "", "", "", 
					"", "", "")';
		$smt = $this->query($sql);
	}

	public function caseinfosave($data = null) {
		$citationNumber = $data['citationNumber'];
		$dateCharged = $data['dateCharged'];
		$tlc = $data['tlc'];
		$communityService = $data['communityService'];
		$restorativeJustice = $data['restorativeJustice'];
		$mentalHealth = $data['mentalHealth'];		
		$sql = 'UPDATE community_courts SET DateCharged ="'.$dateCharged.'",RPTLC ="'.$tlc.'", 
					   RPRestorativeJustice ="'.$restorativeJustice.'", RPCommunityService ="'.$communityService.'",
					   RPMentalHealth ="'.$mentalHealth.'" 
				WHERE  CitationNumber ="'.$citationNumber.'"';
		$smt = $this->query($sql);	
	}
	
}