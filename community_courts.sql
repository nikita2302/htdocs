-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2014 at 04:04 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `community_court`
--

-- --------------------------------------------------------

--
-- Table structure for table `community_courts`
--

CREATE TABLE IF NOT EXISTS `community_courts` (
  `CurrentDate` varchar(10) NOT NULL,
  `DateRefferedToCourt` varchar(10) NOT NULL,
  `CitationNumber` int(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `MiddleInitial` varchar(10) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `StreetAddress` varchar(80) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(50) NOT NULL,
  `ZipCode` int(5) NOT NULL,
  `DateOfBirth` varchar(10) NOT NULL,
  `PhoneNumber1` int(10) NOT NULL,
  `PhoneNumber2` int(10) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Race/Ethnicity` varchar(100) NOT NULL,
  `Education` varchar(30) NOT NULL,
  `ECFirstName` varchar(30) NOT NULL,
  `ECLastName` varchar(30) NOT NULL,
  `ECPhoneNumber` int(10) NOT NULL,
  `ECStreetAddress` varchar(80) NOT NULL,
  `ECCity` varchar(30) NOT NULL,
  `ECState` varchar(50) NOT NULL,
  `ECZipCode` int(5) NOT NULL,
  `ECCOmments` int(150) NOT NULL,
  `DateChanged` varchar(10) NOT NULL,
  `ReasonForChange` varchar(150) NOT NULL,
  `LocationOfOffense` varchar(80) NOT NULL,
  `OffenseCity` int(30) NOT NULL,
  `OffenseState` int(50) NOT NULL,
  `OffenseZipCode` int(5) NOT NULL,
  `DateCharged` varchar(10) NOT NULL,
  `RPTLC` int(1) NOT NULL,
  `RPRestorativeJustice` int(1) NOT NULL,
  `RPCommunityService` int(1) NOT NULL,
  `RPMentalHealth` int(1) NOT NULL,
  `TLCAssigningJudge` varchar(30) NOT NULL,
  `TLCReasonCharge` varchar(300) NOT NULL,
  `TLCSpeeding` int(3) NOT NULL,
  `TLCLicenseSuspended` int(1) NOT NULL,
  `TLCEventResponsible` varchar(300) NOT NULL,
  `TLCUsingPhone` int(1) NOT NULL,
  `TLCOtherCharges` int(1) NOT NULL,
  `TLCOtherChargesDescription` varchar(300) NOT NULL,
  `TLCHistory` int(1) NOT NULL,
  `TLCHistoryDescription` varchar(300) NOT NULL,
  `TLCSeatBelt` varchar(20) NOT NULL,
  `TLCAlcohol` int(1) NOT NULL,
  `TLCDrugs` int(1) NOT NULL,
  `TLCADD` int(1) NOT NULL,
  `TLCMentalHealth` int(1) NOT NULL,
  `TLCOthers` varchar(300) NOT NULL,
  `TLCMedication` int(1) NOT NULL,
  `TLCMedicationDescription` varchar(300) NOT NULL,
  `TLCAliveAt` int(1) NOT NULL,
  `TLCDefensiveDriving` int(1) NOT NULL,
  `TLCCommunityService` int(1) NOT NULL,
  `TLCAliveAtDateOfCompletion` int(1) NOT NULL,
  `TLCDefensiveDrivingDateOfCompletion` int(1) NOT NULL,
  `TLCCommunityServiceDateOfCompletion` int(1) NOT NULL,
  `TLCListeningMusic` int(1) NOT NULL,
  `TLCConditionSatisfied` int(1) NOT NULL,
  `TLCFollowUPDate` varchar(10) NOT NULL,
  `RJJudge` varchar(30) NOT NULL,
  `RJCharge` varchar(100) NOT NULL,
  `RJModule1` int(1) NOT NULL,
  `RJModule2` int(11) NOT NULL,
  `RJModule3` int(11) NOT NULL,
  `RJModule4` int(11) NOT NULL,
  `RJModule5` int(11) NOT NULL,
  `RJModule6` int(11) NOT NULL,
  `RJMilitary` int(11) NOT NULL,
  `RJMilitaryBranch` varchar(30) NOT NULL,
  `RJMilitaryDischarge` varchar(30) NOT NULL,
  `RJMilitaryOther` varchar(100) NOT NULL,
  `RJYear` int(4) NOT NULL,
  `RJBenefit` varchar(100) NOT NULL,
  `RJBirthCertificate` int(1) NOT NULL,
  `RJSSN` int(1) NOT NULL,
  `RJStateid` int(1) NOT NULL,
  `CSHoursAssigned` int(2) NOT NULL,
  `CSDateAssigned` varchar(10) NOT NULL,
  `CSOrganization` varchar(100) NOT NULL,
  `CSHoursCompleted` int(2) NOT NULL,
  `CSOrganizationContactName` varchar(100) NOT NULL,
  `CSOrganizationContactNumber` int(10) NOT NULL,
  `CSConditionSatisfied` int(1) NOT NULL,
  `CSFollowUpDate` varchar(10) NOT NULL,
  `MHClinicalService` int(1) NOT NULL,
  `MHAngerManagement` int(1) NOT NULL,
  `MHConflictResolution` int(1) NOT NULL,
  `MHClinicalServiceDateOfCompletion` varchar(10) NOT NULL,
  `MHAngerManagementDateOfCompletion` varchar(10) NOT NULL,
  `MHConflictResolutionDateOfCompletion` varchar(10) NOT NULL,
  `MHConditionSatisfied` int(1) NOT NULL,
  `MHFollowUpDate` varchar(10) NOT NULL,
  `Comments` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `community_courts`
--

INSERT INTO `community_courts` (`CurrentDate`, `DateRefferedToCourt`, `CitationNumber`, `FirstName`, `MiddleInitial`, `LastName`, `StreetAddress`, `City`, `State`, `ZipCode`, `DateOfBirth`, `PhoneNumber1`, `PhoneNumber2`, `Gender`, `Race/Ethnicity`, `Education`, `ECFirstName`, `ECLastName`, `ECPhoneNumber`, `ECStreetAddress`, `ECCity`, `ECState`, `ECZipCode`, `ECCOmments`, `DateChanged`, `ReasonForChange`, `LocationOfOffense`, `OffenseCity`, `OffenseState`, `OffenseZipCode`, `DateCharged`, `RPTLC`, `RPRestorativeJustice`, `RPCommunityService`, `RPMentalHealth`, `TLCAssigningJudge`, `TLCReasonCharge`, `TLCSpeeding`, `TLCLicenseSuspended`, `TLCEventResponsible`, `TLCUsingPhone`, `TLCOtherCharges`, `TLCOtherChargesDescription`, `TLCHistory`, `TLCHistoryDescription`, `TLCSeatBelt`, `TLCAlcohol`, `TLCDrugs`, `TLCADD`, `TLCMentalHealth`, `TLCOthers`, `TLCMedication`, `TLCMedicationDescription`, `TLCAliveAt`, `TLCDefensiveDriving`, `TLCCommunityService`, `TLCAliveAtDateOfCompletion`, `TLCDefensiveDrivingDateOfCompletion`, `TLCCommunityServiceDateOfCompletion`, `TLCListeningMusic`, `TLCConditionSatisfied`, `TLCFollowUPDate`, `RJJudge`, `RJCharge`, `RJModule1`, `RJModule2`, `RJModule3`, `RJModule4`, `RJModule5`, `RJModule6`, `RJMilitary`, `RJMilitaryBranch`, `RJMilitaryDischarge`, `RJMilitaryOther`, `RJYear`, `RJBenefit`, `RJBirthCertificate`, `RJSSN`, `RJStateid`, `CSHoursAssigned`, `CSDateAssigned`, `CSOrganization`, `CSHoursCompleted`, `CSOrganizationContactName`, `CSOrganizationContactNumber`, `CSConditionSatisfied`, `CSFollowUpDate`, `MHClinicalService`, `MHAngerManagement`, `MHConflictResolution`, `MHClinicalServiceDateOfCompletion`, `MHAngerManagementDateOfCompletion`, `MHConflictResolutionDateOfCompletion`, `MHConditionSatisfied`, `MHFollowUpDate`, `Comments`) VALUES
('', '', 0, '', '', '', '', '-1', '', 0, ' \n     ', 0, 0, '-1', '', '', '', '', 0, '', '-1', '', 0, 0, '', '', '', 0, 0, 0, '', 0, 0, 0, 0, '', '', 0, 0, '', 0, 0, '', 0, '', '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', 0, 0, 0, 0, '', '', 0, '', 0, 0, '', 0, 0, 0, '', '', '', 0, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
