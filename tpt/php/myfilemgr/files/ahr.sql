-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2017 at 05:52 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ahr`
--

-- --------------------------------------------------------

--
-- Table structure for table `appraisals`
--

CREATE TABLE IF NOT EXISTS `appraisals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `family_name` text NOT NULL,
  `pos` text NOT NULL,
  `dept` text NOT NULL,
  `lmgr` text NOT NULL,
  `oksh` text NOT NULL,
  `job_grade` text NOT NULL,
  `contract_type` text NOT NULL,
  `kra` text NOT NULL,
  `wgt` text NOT NULL,
  `msr` text NOT NULL,
  `acaa` text NOT NULL,
  `self` text NOT NULL,
  `sup` text NOT NULL,
  `agr` text NOT NULL,
  `r1` text NOT NULL,
  `r2` text NOT NULL,
  `c1` text NOT NULL,
  `c2` text NOT NULL,
  `o_self` text NOT NULL,
  `o_sup` text NOT NULL,
  `o_agreed` text NOT NULL,
  `pdpa_act` text NOT NULL,
  `pdp_deadline` text NOT NULL,
  `pdp_sup` text NOT NULL,
  `aspirations` text NOT NULL,
  `comments` text NOT NULL,
  `d1` text NOT NULL,
  `d2` text NOT NULL,
  `d3` text NOT NULL,
  `username` text NOT NULL,
  `apse` text NOT NULL,
  `apsr` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `appraisals`
--

INSERT INTO `appraisals` (`id`, `fname`, `family_name`, `pos`, `dept`, `lmgr`, `oksh`, `job_grade`, `contract_type`, `kra`, `wgt`, `msr`, `acaa`, `self`, `sup`, `agr`, `r1`, `r2`, `c1`, `c2`, `o_self`, `o_sup`, `o_agreed`, `pdpa_act`, `pdp_deadline`, `pdp_sup`, `aspirations`, `comments`, `d1`, `d2`, `d3`, `username`, `apse`, `apsr`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', ''),
(2, '', '', '', '', '', '', '', '', 'null', 'null', 'null', 'null', 'null', '', '', '', '', '', '', '', '', '', 'null', 'null', 'null', '', '', '', '', '', '', '', ''),
(3, '1', '1', '1', 'DAHR', '1', '1', '1', 'PERMANENT', 'null', 'null', 'null', 'null', 'null', '', '', '', '', '', '', '1.3333333333333333', '', '', 'null', 'null', 'null', '1', '1', '2017-03-01', '', '', 'user', '', ''),
(4, '1', '1', '1', 'DAHR', '1', '1', '1', 'PERMANENT', '["1"]', '["1"]', '["1"]', '["1"]', '["1"]', '', '', '', '', '', '', '1.3333333333333333', '', '', '["1"]', '["1"]', '["1"]', '1', '1', '2017-03-01', '', '', 'user', '', ''),
(5, 'THRHR', 'EEE', 'EEEE', 'DAHR', 'EEEEEEE', 'EEEEE', 'EE', 'PERMANENT', '["EEE","EE","22"]', '["EEE","EEE","22"]', '["EE","EE","22"]', '["1","2","2"]', '["3","2","3"]', '', '', '', '', '', '', '2.6666666666666665', '', '', '["66","66"]', '["66","666"]', '["66","66"]', '666', '6666', '2017-03-01', '', '', 'user', '', ''),
(6, 'John', 'Mary', 'Lawyer', 'N.C.U', 'Adrian', ' he  ', 'sm', 'TEMPORARY', '["late","e"]', '["90","5"]', '["checkin and checkout","fffffffffffff"]', '["comes betwwen 7:30 - 8:00","4rffffffffffff"]', '["1","4"]', '["2","1"]', '["4","5"]', '["3","3","3","3"]', '["3","3","3","3","3","3","3"]', '["e","e","e","e"]', '["e","e","e","e","e","e","e"]', '2.5', '1.5', '4.5', '["marriage "]', '["12-12-2012"]', '["too ambitious"]', 'deeeededdeede', 'eeeeee', '2017-03-02', '03/03/2017', '03/03/2017', 'user', '  ddddd', 'ddddd'),
(7, 'w', 'w', 'w', 'DTS', 'w', 'w', 'w', 'PERMANENT', '["w","d"]', '["w","d"]', '["w","d"]', '["w","d"]', '["3","2"]', '', '', '', '', '', '', '2.5', '', '', '["s"]', '["12"]', '["s"]', 's', 's', '2017-03-02', '', '', 'user', '', ''),
(8, '33', '33', '33', 'N.C.U', '333', '33', '33', 'TEMPORARY', '["33","44"]', '["3","444"]', '["3","44"]', '["3","444"]', '["2","2"]', '', '', '', '', '', '', '2', '', '', '["ffff"]', '["fff"]', '["334433"]', '23444', 'ff', '2017-03-02', '', '', 'user1', '', ''),
(9, 'qwertyy', 'qwerty', 'position', 'PRODUCTION', 'dd', 'ddd', 'jg', 'CONTRACT', '["d"]', '["d"]', '["d"]', '["d"]', '["2"]', '', '', '', '', '', '', '2', '', '', '["d"]', '["d"]', '["d"]', 'd', 'd', '2017-03-02', '', '', 'user', '', ''),
(10, 'z', 'z', 'z', 'HUMAN RESOURCE', 'z', 'z', 'z', 'PERMANENT', '["z","z"]', '["z","z"]', '["z","z"]', '["z","z"]', '["2","1"]', '', '', '', '', '', '', '1.5', '', '', '["z"]', '["z"]', '["z"]', 'z', 'z', '2017-03-02', '', '', 'user', '', ''),
(11, '11', '11', '11', 'N.C.U', '11', ' 11  ', '11', 'CONTRACT', '["11","11","11","11"]', '["11","11","11","11"]', '["11","11","11","11"]', '["11","11","11","11"]', '["11","1","2","3"]', '["3","2","4","1"]', '["2","3","2","1"]', '["3","4","4","4"]', '["4","4","4","4","4","4","4"]', '["t","t","t","t"]', '["t","t","t","t","t","t","t"]', '4.25', '2.5', '2', '["11","11"]', '["111","11"]', '["11","11"]', '1111', 'wwwffww', '2017-03-02', '04/03/2017', '04/03/2017', 'user', '11  ', '55'),
(12, '', '', '', '', '', '', '', '', 'null', 'null', 'null', 'null', 'null', '', '', '', '', '', '', '', '', '', 'null', 'null', 'null', '', '1111', '', '', '', 'user', '  9', ''),
(13, '', '', '', '', '', '', '', '', 'null', 'null', 'null', 'null', 'null', '', '', '', '', '', '', '', '', '', 'null', 'null', 'null', '', '1', '1', '', '', 'user', '  1', ''),
(14, 'S', 'S', 'S', 'HUMAN RESOURCE', 'S', ' S  ', 'S', 'PERMANENT', '["S"]', '["S"]', '["S"]', '["S"]', '["1"]', '["2"]', '["3"]', '["1","1","1","1"]', '["1","1","1","1","1","1","1"]', '["0","0","0","0"]', '["0","0","0","0","0","0","0"]', '1', '2', '3', '["S"]', '["S"]', '["S"]', 'S', 's', '2017-03-03', '03/03/2017', '03/03/2017', 'user', 'S  ', 'WW'),
(15, 'David', 'Jonathan', 'Marketing Intern', 'Marketing', 'S. Nalule', ' none  ', 'Intern', 'TEMPORARY', '["late coming","obedience"]', '["50","50"]', '["arraival time","feedback from assigned dept"]', '["comes on time","partial"]', '["1","2"]', '["2","2"]', '["2","2"]', '["2","2","2","3"]', '["1","2","4","2","3","3","3"]', '["tries","good","good","good"]', '["excels","good","loves his work","f","f","t","t"]', '1.5', '2', '2', '["do a course in ccna"]', '["12-12-2017"]', '["good for his career"]', 'become a supervisor', 'he is a good intern ', '2017-03-04', '04/03/2017', '04/03/2017', 'sip:djonathan@ug.nationmedia.com', 'David Jonathan  ', 's.Nalule'),
(16, 'joseph', 'kasasa', 'supervisor', 'EDITORIAL (FEATURES)', 'Haruna Kimuli', 'hhhhh', 'level 5', 'CONTRACT', '["fff","fffff","fffff","ffffffffffff","rrrrrrrrrrrrr"]', '["r","r","r","r","r"]', '["r","rr","r","r","r"]', '["r","r","r","r","r"]', '["6","7","9","10","9"]', '', '', '', '', '', '', '8.2', '', '', '["ggg"]', '["ghhg"]', '["yy"]', 'hhh', 'jjjj', '2017-04-01', '', '', 'sip:agumisiriza@ug.nationmedia.com', '', ''),
(17, 'Haruna', 'Kimuli', 'Driver', 'N.C.U', '', '', 'scale 3', 'PERMANENT', '["c","v","v"]', '["v","v","v"]', '["v","v","v"]', '["v","vv","vvv"]', '["9","9","5"]', '', '', '', '', '', '', '7.666666666666667', '', '', '["ddd"]', '["3"]', '["e"]', 'dd', 'dddd', '2017-04-03', '', '', 'sip:hkimuli@ug.nationmedia.com', 'ddd', ''),
(18, 'Sebby', 'Kadokechi', 'NCU driver', 'RADIO', '', '', '', 'TEMPORARY', '["s","d","d"]', '["s","d","d"]', '["s","d","d"]', '["s","d","dd"]', '["9","6","8"]', '', '', '', '', '', '', '7.666666666666667', '', '', '["d","d"]', '["d","d"]', '["d","d"]', 'd', 'd', '2017-04-03', '', '', 'sip:snalule@ug.nationmedia.com', 'd', ''),
(19, 'Sebby', 'Kadokechi', 'NCU driver', 'N.C.U', 'Barnabas Eyaru', 'denis', 'scale 9', 'CONTRACT', '["fff","ff","fff"]', '["ff","ff","fff"]', '["ff","fff","fff"]', '["ff","ff","ff"]', '["5","9","10"]', '', '', '', '', '', '', '8', '', '', '["f"]', '["3"]', '["4"]', 'ff', 'ff', '2017-05-10', '', '', 'sip:skadokechi@ntihc.org', 'rr', '');

-- --------------------------------------------------------

--
-- Table structure for table `humanresource`
--

CREATE TABLE IF NOT EXISTS `humanresource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DEPARTMENT` varchar(88) NOT NULL,
  `TITLE` varchar(88) NOT NULL,
  `NEWPFNUMBER` varchar(99) NOT NULL,
  `OLDPFNUMBER` varchar(99) NOT NULL,
  `FIRSTNAME` varchar(99) NOT NULL,
  `LASTNAME` varchar(99) NOT NULL,
  `OTHERNAME` varchar(99) NOT NULL,
  `GENDER` varchar(99) NOT NULL,
  `BIRTHDATE` varchar(99) NOT NULL,
  `AGE` varchar(99) NOT NULL,
  `RELIGION` varchar(99) NOT NULL,
  `TRIBE` varchar(99) NOT NULL,
  `NATIONALITY` varchar(99) NOT NULL,
  `MARITALSTATUS` varchar(99) NOT NULL,
  `NEXTOFKIN` varchar(99) NOT NULL,
  `RELATIONSHIP` varchar(99) NOT NULL,
  `NEXTOFKINCONTACT` varchar(99) NOT NULL,
  `MOBILEPHONE` varchar(99) NOT NULL,
  `HOMEPHONE` varchar(99) NOT NULL,
  `EMERGENCYCONTACT` varchar(99) NOT NULL,
  `EMAIL` varchar(99) NOT NULL,
  `DISTRICT` varchar(99) NOT NULL,
  `PARISH` varchar(99) NOT NULL,
  `COUNTY` varchar(99) NOT NULL,
  `VILLAGE` varchar(99) NOT NULL,
  `NATIONALIDNO` varchar(99) NOT NULL,
  `NSSFNO` varchar(99) NOT NULL,
  `TINNO` varchar(99) NOT NULL,
  `PASSPORTPHOTO` varchar(88) NOT NULL,
  `UCESTATUS` varchar(99) NOT NULL,
  `UCE_RESULT` varchar(99) NOT NULL,
  `UCE_YEAR` varchar(99) NOT NULL,
  `UACESTATUS` varchar(99) NOT NULL,
  `UACE_RESULT` varchar(99) NOT NULL,
  `UACE_YEAR` varchar(99) NOT NULL,
  `ORDINALLYCERT1` varchar(99) NOT NULL,
  `ORDINALLYCERT1_RESULT` varchar(99) NOT NULL,
  `ORDINALLYCERT1_YEAR` varchar(88) NOT NULL,
  `ORDINALLYCERT2` varchar(88) NOT NULL,
  `ORDINALLYCERT2_RESULT` varchar(88) NOT NULL,
  `ORDINALLYCERT2_YEAR` varchar(88) NOT NULL,
  `UNDERGRADUATEDIPLOMACOURSE` varchar(55) NOT NULL,
  `UNDERGRADUATEDIPLOMACOURSE_RESULT` varchar(99) NOT NULL,
  `UNDERGRADUATEDIPLOMACOURSE_YEAR` varchar(99) NOT NULL,
  `DEGREE1` varchar(99) NOT NULL,
  `DEGREE1_RESULT` varchar(99) NOT NULL,
  `DEGREE1_YEAR` varchar(99) NOT NULL,
  `DEGREE2` varchar(99) NOT NULL,
  `DEGREE2_RESULT` varchar(99) NOT NULL,
  `DEGREE2_YEAR` varchar(99) NOT NULL,
  `POSTGRADUATEDIPLOMA` varchar(99) NOT NULL,
  `POSTGRADUATEDIPLOMA_RESULT` varchar(99) NOT NULL,
  `POSTGRADUATEDIPLOMA_YEAR` varchar(99) NOT NULL,
  `MASTERDEGREE` varchar(99) NOT NULL,
  `MASTERDEGREE_RESULT` varchar(99) NOT NULL,
  `MASTERDEGREE_YEAR` varchar(99) NOT NULL,
  `PHD` varchar(99) NOT NULL,
  `PHD_RESULT` varchar(55) NOT NULL,
  `PHD_YEAR` varchar(44) NOT NULL,
  `PCERT1` varchar(99) NOT NULL,
  `PCERT1_YEAR` varchar(99) NOT NULL,
  `PCERT2` varchar(99) NOT NULL,
  `PCERT2_YEAR` varchar(88) NOT NULL,
  `PCERT3` varchar(88) NOT NULL,
  `PCERT3_YEAR` varchar(99) NOT NULL,
  `PCERT4` varchar(99) NOT NULL,
  `PCERT4_YEAR` varchar(99) NOT NULL,
  `PCERT5` varchar(99) NOT NULL,
  `PCERT5_YEAR` varchar(99) NOT NULL,
  `PCERT6` varchar(99) NOT NULL,
  `PCERT6_YEAR` varchar(99) NOT NULL,
  `PCERT7` varchar(99) NOT NULL,
  `PCERT7_YEAR` varchar(99) NOT NULL,
  `NATIONALID` varchar(99) NOT NULL,
  `MOTHERNAME` varchar(99) NOT NULL,
  `MOTHERSTATUS` varchar(99) NOT NULL,
  `MOTHERCONTACT` varchar(22) NOT NULL,
  `MOTHERADDRESS` varchar(99) NOT NULL,
  `FATHERNAME` varchar(99) NOT NULL,
  `FATHERCONTACT` varchar(99) NOT NULL,
  `FATHERSTATUS` varchar(99) NOT NULL,
  `FATHERADDRESS` varchar(99) NOT NULL,
  `PERMITNUMBER` varchar(55) NOT NULL,
  `CLASS1` varchar(88) NOT NULL,
  `ISSUANCEDATEC1` date NOT NULL,
  `CLASS2` varchar(99) NOT NULL,
  `ISSUANCEDATEC2` date NOT NULL,
  `CLASS3` varchar(99) NOT NULL,
  `ISSUANCEDATEC3` date NOT NULL,
  `CLASS4` varchar(255) NOT NULL,
  `ISSUANCEDATEC4` date NOT NULL,
  `CLASS5` varchar(99) NOT NULL,
  `ISSUANCEDATEC5` date NOT NULL,
  `CLASS6` varchar(99) NOT NULL,
  `ISSUANCEDATEC6` varchar(99) NOT NULL,
  `PERMITEXPIRY` varchar(99) NOT NULL,
  `STATUS` varchar(99) NOT NULL,
  `NOTES` varchar(222) NOT NULL,
  `REGMONTH` text NOT NULL,
  `REGYEAR` text NOT NULL,
  `ITVL1DATE` date NOT NULL,
  `ITVLEVEL1DESC` varchar(88) NOT NULL,
  `ITVLEVEL1PASSMARK` varchar(99) NOT NULL,
  `ITVLEVEL1SCORE` varchar(99) NOT NULL,
  `ITVLEVEL1STATUS` varchar(99) NOT NULL,
  `ITVL2DATE` date NOT NULL,
  `ITVLEVEL2` varchar(99) NOT NULL,
  `ITVLEVEL2DESC` varchar(88) NOT NULL,
  `ITVLEVEL2PASSMARK` varchar(99) NOT NULL,
  `ITVLEVEL2SCORE` varchar(99) NOT NULL,
  `AVERAGESCORE` varchar(99) NOT NULL,
  `ITVFINALSTATUS` varchar(99) NOT NULL,
  `APPNAME` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `humanresource`
--

INSERT INTO `humanresource` (`id`, `TIMESTAMP`, `DEPARTMENT`, `TITLE`, `NEWPFNUMBER`, `OLDPFNUMBER`, `FIRSTNAME`, `LASTNAME`, `OTHERNAME`, `GENDER`, `BIRTHDATE`, `AGE`, `RELIGION`, `TRIBE`, `NATIONALITY`, `MARITALSTATUS`, `NEXTOFKIN`, `RELATIONSHIP`, `NEXTOFKINCONTACT`, `MOBILEPHONE`, `HOMEPHONE`, `EMERGENCYCONTACT`, `EMAIL`, `DISTRICT`, `PARISH`, `COUNTY`, `VILLAGE`, `NATIONALIDNO`, `NSSFNO`, `TINNO`, `PASSPORTPHOTO`, `UCESTATUS`, `UCE_RESULT`, `UCE_YEAR`, `UACESTATUS`, `UACE_RESULT`, `UACE_YEAR`, `ORDINALLYCERT1`, `ORDINALLYCERT1_RESULT`, `ORDINALLYCERT1_YEAR`, `ORDINALLYCERT2`, `ORDINALLYCERT2_RESULT`, `ORDINALLYCERT2_YEAR`, `UNDERGRADUATEDIPLOMACOURSE`, `UNDERGRADUATEDIPLOMACOURSE_RESULT`, `UNDERGRADUATEDIPLOMACOURSE_YEAR`, `DEGREE1`, `DEGREE1_RESULT`, `DEGREE1_YEAR`, `DEGREE2`, `DEGREE2_RESULT`, `DEGREE2_YEAR`, `POSTGRADUATEDIPLOMA`, `POSTGRADUATEDIPLOMA_RESULT`, `POSTGRADUATEDIPLOMA_YEAR`, `MASTERDEGREE`, `MASTERDEGREE_RESULT`, `MASTERDEGREE_YEAR`, `PHD`, `PHD_RESULT`, `PHD_YEAR`, `PCERT1`, `PCERT1_YEAR`, `PCERT2`, `PCERT2_YEAR`, `PCERT3`, `PCERT3_YEAR`, `PCERT4`, `PCERT4_YEAR`, `PCERT5`, `PCERT5_YEAR`, `PCERT6`, `PCERT6_YEAR`, `PCERT7`, `PCERT7_YEAR`, `NATIONALID`, `MOTHERNAME`, `MOTHERSTATUS`, `MOTHERCONTACT`, `MOTHERADDRESS`, `FATHERNAME`, `FATHERCONTACT`, `FATHERSTATUS`, `FATHERADDRESS`, `PERMITNUMBER`, `CLASS1`, `ISSUANCEDATEC1`, `CLASS2`, `ISSUANCEDATEC2`, `CLASS3`, `ISSUANCEDATEC3`, `CLASS4`, `ISSUANCEDATEC4`, `CLASS5`, `ISSUANCEDATEC5`, `CLASS6`, `ISSUANCEDATEC6`, `PERMITEXPIRY`, `STATUS`, `NOTES`, `REGMONTH`, `REGYEAR`, `ITVL1DATE`, `ITVLEVEL1DESC`, `ITVLEVEL1PASSMARK`, `ITVLEVEL1SCORE`, `ITVLEVEL1STATUS`, `ITVL2DATE`, `ITVLEVEL2`, `ITVLEVEL2DESC`, `ITVLEVEL2PASSMARK`, `ITVLEVEL2SCORE`, `AVERAGESCORE`, `ITVFINALSTATUS`, `APPNAME`) VALUES
(1, '2017-05-05 10:42:59', '', '', 'NTIHC/HR/17/1', 'NTIHC/HR/10/040', 'CHARLES', 'OFWONO', 'EMMA', 'MALE', '10/10/1989', '', '', '', 'UGANDAN', 'MALE', 'SARAR AKOTH', 'SISTER', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(2, '2017-05-05 10:44:12', '', '', '', '', 'FRED', 'YIGA', '', 'MALE', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(3, '2017-05-07 09:11:54', '', '', '', '', 'FF', 'fff', 'f', 'FEMALE', '', '', 'MOSLEM', '', 'UGANDA', '_1', 'r', '-1', 'r', '555', '5', '', '', '', '', '', '', '', '', '', 'blurred.jpg', '-1', '', '', '-1', '', '', '', '', '', '', '', '', '', '-1', '', '', '-1', '', '', '-1', '', '', '-1', '', '', '-1', '', '', '-1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ALIVE', '', '', '', '', 'ALIVE', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(4, '2017-05-07 10:09:55', '', '', '', 'NTIHC/2017/033', 'RENEE', 'NYANGE', '', 'FEMALE', '2/4/1997', '', 'CATHOLIC', 'MUNYANKOLE', 'UGANDA', 'SEPARATED', 'HULLOD', 'HUSBAND', '073546546', '0786778890', '0783388933', '0786666600', 'RNYANGE@NTIHC.ORG', 'MUKONO', 'PANN', 'HUKKK', 'YIU', 'J837373J', 'HFHJF8484', 'HJHDJD77', 'ntihclog2.png', '-1', '', '', '-1', '', '', '', '', '', '', '', '', 'GGGGGG', 'FIRST CLASS', '2016', '', '-1', '', '', '-1', '', '', '-1', '', '', '-1', '', '', '-1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JUOLLO', 'LATE', '0778644644', 'SEETA', 'KADDDD', '077833333', 'LATE', 'GGDDDDD', 'HD77838HDDN', 'B', '0000-00-00', 'CM', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(5, '2017-05-09 20:58:49', '', '', '', 'NTIHC/2017/039', 'SEBBY', 'KADOKECH', '', 'MALE', '', '', 'PROTESTANT', '', 'UGANDA', 'MARRIED', 'TEST', '-1', '0783221122', '0786778890', '0783388933', '0786666633', 'KSEBBY@NTIHC.ORG', 'MUKONO', 'TEST', 'TEST', 'TEST', 'H4HEDKD', '8339MEM', '39032K2', 'ntihclog2.png', '-1', '', '', '-1', '', '', '', '', '', '', '', '', '', '-1', '', '', '-1', '', '', '-1', '', '', '-1', '', '', '-1', '', '', '-1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ALIVE', '', '', '', '', 'ALIVE', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobdesc`
--

CREATE TABLE IF NOT EXISTS `jobdesc` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `JOBDESCRIPTION` varchar(88) NOT NULL,
  `CATEGORY` varchar(88) NOT NULL,
  `TITLE` varchar(88) NOT NULL,
  `DEPARTMENT` varchar(88) NOT NULL,
  `ADDEDBY` varchar(88) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jobdesc`
--

INSERT INTO `jobdesc` (`ID`, `JOBDESCRIPTION`, `CATEGORY`, `TITLE`, `DEPARTMENT`, `ADDEDBY`) VALUES
(1, 'Select jd ', '', 'OFFICER ICT', '', ''),
(2, 'OVERALL LEADERSHIP AND DIRECTION OF ALL PROGRAMME AND PROJECT AREAS ', '', 'OFFICER ICT', '', ''),
(3, 'Select jd ', '', 'PROGRAMME DIRECTOR', '', ''),
(4, 'OVERSEE THE DEVELOPMENT IMPLEMENTATION AND REVIEW OF NTIHC PLANS AND SYSTEM ', '', 'OFFICER ICT', '', ''),
(5, 'RESOURCE MOBILIZATION ACTIVITIES FOR SUSTAINABILITY OF THE PROGRAMME', '', 'PROGRAMME DIRECTOR', '', ''),
(6, 'COORDINATING THE EXPANSION OF ASRH SERVICES', '', 'PROGRAMME DIRECTOR', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sys_users`
--

CREATE TABLE IF NOT EXISTS `sys_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(256) NOT NULL,
  `Phonecontact` text NOT NULL,
  `Type` varchar(256) NOT NULL,
  `Description` varchar(256) NOT NULL,
  `Username` varchar(256) NOT NULL,
  `Pwd` text NOT NULL,
  `ConfirmPwd` text NOT NULL,
  `gender` varchar(30) NOT NULL,
  `Authorised` varchar(256) NOT NULL,
  `Dept` varchar(250) NOT NULL,
  `Healthcenter` varchar(240) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `sys_users`
--

INSERT INTO `sys_users` (`id`, `Name`, `Phonecontact`, `Type`, `Description`, `Username`, `Pwd`, `ConfirmPwd`, `gender`, `Authorised`, `Dept`, `Healthcenter`) VALUES
(67, 'RENEE NYANGE', '0780000000', 'ADMIN', 'PROCUREMENT OFFICER', 'sip:rnyange@ntihc.org', 'Domain2017', '', 'FEMALE', 'OK', 'FINANCE AND ADMINISTRATION', ''),
(65, 'JUSTINE NAMALWA', '0783322990', 'ADMIN', 'FINANCE AND ADMIN MANAGER', 'jwanda@ntihc.org', 'Domain2017', '', 'FEMALE', 'OK', 'FINANCE AND ADMINISTRATION', 'HEADQUARTER'),
(19, 'EMMA CHARLES OFWONO', '0700000008', 'MULTI', 'IT OFFICER', 'sip:cofwono@ntihc.org', 'Jawideero17', '', 'MALE', 'OK', 'ADVOCACY AND RESEARCH', ''),
(26, 'SEBBY KADOKECHI', '0700000002', 'ADMIN', 'MONITORING AND EVALUATION MANAGER', 'sip:skadokechi@ntihc.org', 'Domain2017', '', 'MALE', 'OK', 'SERVICE DELIVERY', ''),
(66, 'SUZAN NALUZZE', '0783333331', 'ADMIN', 'ACCOUNTANT', 'sip:snaluzze@ntihc.org', 'Domain2017', '', 'FEMALE', 'OK', 'FINANCE AND ADMINISTRATION', ''),
(64, 'PETER MPINGA', '0783448866', 'ADMIN', 'PROGRAMME DIRECTOR', 'pmpinga@ntihc.org', 'Domain2017', '', 'FEMALE', 'OK', 'FINANCE AND ADMINISTRATION', 'HEADQUARTER'),
(55, 'DENIS BUKENYA', '0789322000', 'ENABLED', 'HEAD ADVOCACY AND RESEARCH', 'dbukenya@ntihc.org', 'Domain2017', '', 'MALE', 'ENABLED', 'ADVOCACY AND RESEARCH', 'YES'),
(68, 'FFFFF', '078332299', 'ADMIN AND FIN5', 'rrrrr', 'ajkasaa@gmail.com', 'ddd', '', 'FEMALE', '', 'rerr', 'HEADQUARTER'),
(69, 'ddd', '0789322000', 'DISABLED', 'FFFFFFFFF', 'apeter@ntihc.org', '', '', 'FEMALE', 'ENABLED', 'ADVOCACY AND RESEARCH', 'YES'),
(70, 'DIRECTOR PETER', '078332299', 'DISABLED', 'D', 'ajkasaa@gmail.comffff', 'd', '', 'FEMALE', '', 'D', 'HEADQUARTER'),
(71, 'DIRECTOR SIMON', '5', 'ADMIN AND FIN5', 'RR', 'ajkasaa@gmail.comffff', 'ffff', '', 'MALE', '', 'ddd', 'HEADQUARTER');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Staff_Number` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Portfolio` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Date_Added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Current_Status` varchar(50) NOT NULL DEFAULT 'ACTIVE',
  `Grantedby` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `authorizationrights` varchar(88) NOT NULL DEFAULT 'DENIED',
  `gender` text NOT NULL,
  `Phonecontact` text NOT NULL,
  `signature` blob NOT NULL,
  `Dept` text NOT NULL,
  `dateoffirstappointment` date NOT NULL,
  `designationoffirstappointment` text NOT NULL,
  `facilityname` varchar(111) NOT NULL,
  `facilitydescription` varchar(222) NOT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`ID`, `First_Name`, `Last_Name`, `Staff_Number`, `Email`, `Portfolio`, `Password`, `Date_Added`, `Current_Status`, `Grantedby`, `Description`, `authorizationrights`, `gender`, `Phonecontact`, `signature`, `Dept`, `dateoffirstappointment`, `designationoffirstappointment`, `facilityname`, `facilitydescription`, `created`) VALUES
(42, 'CHARLES', 'EMMA OFWONO', 'NTIHC/HR/10/040', 'cofwono@ntihc.org', 'SYSTEM ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-08-01 09:18:40', 'ACTIVE', 'DEVELOPER', 'OFFICER ICT', 'GRANTED', 'MALE', '0768822211', '', 'FINANCE AND ADMINISTRATION', '0000-00-00', 'DATA CLERK', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(47, 'ESTHER', 'MUBIRU', 'NTIHC/HR/07/033', 'emubiru@ntihc.org', 'CLIENT MANAGEMENT AND ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-08-08 21:46:55', 'ACTIVE', '', 'COUNSELLING ASSISTANT', 'GRANTED', 'FEMALE', '0393216467', 0x6e74696863207369676e6174757265732e4a5047, 'SERVICE DELIVERY', '2007-06-01', 'DATA CLERK', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(48, 'PETER', 'MPINGA', 'NTIHC/HR/02/001', 'pmpinga@ntihc.org', 'DIRECTOR', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-08-08 21:47:01', 'ACTIVE', '', 'PROGRAM DIRECTOR', 'GRANTED', 'MALE', '0393216467', 0x6e74696863207369676e6174757265732e4a5047, 'FINANCE AND ADMINISTRATION', '2002-06-01', 'VOLUNTEER', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(49, 'DENIS LEWIS', 'BUKENYA', 'NTIHC/HR/04/021', 'dbukenya@ntihc.org', 'DEPUTY DIRECTOR', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-08-08 21:47:06', 'ACTIVE', '', 'Head of Department', 'GRANTED', 'MALE', '0773934259', '', 'ADVOCACY AND RESEARCH', '2004-06-01', 'VOLUNTEER', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(50, 'WINNIE', 'MUSUBIKA', 'NTIHC/HR/10/045', 'wmusubika@ntihc.org', 'HEAD SERVICE DELIVERY', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-08-08 21:47:14', 'ACTIVE', '', 'MANAGER SERVICE DELIVERY', 'GRANTED', 'FEMALE', '0774408300', '', 'SERVICE DELIVERY', '2010-06-01', 'SERVICE DELIVERY MANAGER', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(51, 'JUSTINE WANDA', 'NAMALWA', 'NTIHC/HR/17/055', 'jwanda@ntihc.org', 'HEAD FINANCE AND ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-08-08 21:47:19', 'ACTIVE', '', 'MANAGER FINANCE AND ADMIN', 'GRANTED', 'FEMALE', '0393216467', '', 'FINANCE AND ADMINISTRATION', '2017-02-01', 'HoD Finance and Administration', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(52, 'HENRY', 'NTALE', 'NTIHC/HR/03/005', 'hntale@ntihc.org', 'CLIENT MANAGEMENT AND ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-08-08 21:47:23', 'ACTIVE', '', 'BCC MANAGER', 'GRANTED', 'MALE', '0702435341', '', 'SERVICE DELIVERY', '2003-06-01', 'COUNSELOR', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(53, 'SOPHIE', 'NALUZZE', 'NTIHC/HR/14/049', 'snaluzze@ntihc.org', 'FINANCE AND ADMIN DEPARTMENTAL USER', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-08-08 21:47:30', 'ACTIVE', '', 'ACCOUNTANT', 'GRANTED', 'FEMALE', '0759801180', '', 'FINANCE AND ADMINISTRATION', '2014-06-01', 'ACCOUNTANT', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(54, 'ROBERT', 'EGADU', 'NTIHC/HR/03/013', 'regadu@ntihc.org', 'CLIENT MANAGEMENT AND ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-08-08 21:47:35', 'ACTIVE', '', 'PROJECT OFFICER', 'GRANTED', 'MALE', '0704284897', '', 'SERVICE DELIVERY', '2003-06-06', 'COUNSELOR', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(55, 'RENEE', 'NYANGE', 'NTIHC/HR/04/018', 'rnyange@ntihc.org', 'FINANCE AND ADMIN DEPARTMENTAL USER', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-08-08 21:47:58', 'ACTIVE', '', 'ADMINISTRATIVE ASSISTANT', 'GRANTED', 'FEMALE', '0772872280', '', 'FINANCE AND ADMINISTRATION', '2004-06-01', 'ASSIST ADMIN', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(56, 'JOSHUA', 'THEMBO', 'NTIHC/HR/16/053', 'jthembo@ntihc.org', 'HEAD ADVOCACY AND RESEARCH', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-08-08 21:48:02', 'ACTIVE', '', 'ADVOCACY OFFICER', 'GRANTED', 'MALE', '0783650100', '', 'ADVOCACY AND RESEARCH', '2016-06-01', 'ADVOCACY OFFICER', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(57, 'REBECCA', 'NABBOSA', 'NTIHC/HR/03/012', 'rnabbosa@ntihc.org', 'CLIENT MANAGEMENT AND ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-08-08 21:48:06', 'ACTIVE', '', 'COUNSELLING COORDINATOR', 'GRANTED', 'FEMALE', '0758038329', '', 'SERVICE DELIVERY', '2003-06-01', 'COUNSELOR', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(58, 'GORRETH', 'NAKIWALA', 'NTIHC/HR/04/019', 'gnakiwala@ntihc.org', 'CLIENT MANAGEMENT AND ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-08-08 21:48:11', 'ACTIVE', '', 'IN-CHARGE MEDICAL SERVICES', 'GRANTED', 'FEMALE', '0701398481', '', 'SERVICE DELIVERY', '2004-06-01', 'WIDWIFE/NURSE', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(59, 'JANET', 'NYAKAANA', 'NTIHC/HR/00/004', 'jnyakaana@ntihc.org', 'CLIENT MANAGEMENT', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-07-07 11:22:54', 'ACTIVE', '', 'NURSE', '', 'FEMALE', '', '', 'SERVICE DELIVERY', '2000-01-01', 'NURSE', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(60, 'MARTIN', 'BYAMUGISHA', 'NTIHC/HR/00/009', 'mbyamugisha@ntihc.org', 'CLIENT MANAGEMENT AND ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-07-07 11:21:55', 'ACTIVE', '', 'COUNSELLOR', '', 'MALE', '0782573616', '', 'SERVICE DELIVERY', '2000-01-01', 'COUNSELOR', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(61, 'CHRISTINE', 'KYAMULABI', 'NTIHC/HR/03/011', 'ckyamulabi@ntihc.org', 'CLIENT MANAGEMENT AND ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-07-07 11:21:38', 'ACTIVE', '', 'MEDICAL SERVICE PROVIDER/MIDWIFE', '', 'FEMALE', '0393216467', '', 'SERVICE DELIVERY', '2003-01-01', 'MIDWIFE', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(62, 'JULIUS', 'NYAKABWA', 'NTIHC/HR/04/017', 'jnyakabwa@ntihc.org', 'CLIENT MANAGEMENT AND ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-07-07 11:20:23', 'ACTIVE', '', 'LABORATORY TECHNICIAN', '', 'MALE', '0703366004', '', 'SERVICE DELIVERY', '2004-01-01', 'LABORATORY TECHNICIAN', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(63, 'PROSSY', 'NAMUDDU', 'NTIHC/HR/00/006', 'pnamuddu@ntihc.org', 'CLIENT MANAGEMENT AND ADMIN', '2b39dfacbaddb33d68dfc62039162cc4', '2017-07-06 10:47:39', 'ACTIVE', '', 'Counselling Assistant', '', 'FEMALE', '0702168089', '', 'SERVICE DELIVERY', '2000-01-01', 'DATA CLERK', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(65, 'POLLY', 'NUWAGABA', 'NTIHC/HR/006/032', 'pnuwagaba@ntihc.org', 'CLIENT MANAGEMENT', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-07-06 12:56:26', 'ACTIVE', '', 'LABORATORY TECHNICIAN', '', 'MALE', '0393216467', '', 'SERVICE DELIVERY', '2006-01-01', 'LABORATORY TECHNICIAN', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(66, 'REBECCA', 'NAKIWANUKA', 'NTIHC/HR/03/015', 'rnakiwanuka@ntihc.org', 'CLIENT MANAGEMENT AND ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-07-06 12:48:34', 'ACTIVE', '', 'Counselling Assistant', '', 'FEMALE', '0393216467', '', 'SERVICE DELIVERY', '2003-01-01', 'DATA CLERK', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(68, 'BEATRICE', 'NAMUWONGE', 'NTIHC/HR/07/036', 'bnamuwonge@ntihc.org', 'CLIENT MANAGEMENT AND ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-07-07 11:17:01', 'ACTIVE', '', 'MEDICAL SERVICE PROVIDER/MIDWIFE', '', 'FEMALE', '0393216467', '', 'SERVICE DELIVERY', '2007-01-01', 'MEDICAL SERVICE PROVIDER', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(69, 'SHAMIM', 'NABADDA', 'NTIHC/HR/09/038', 'snabadda@ntihc.org', 'CLIENT MANAGEMENT AND ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-07-07 11:18:53', 'ACTIVE', '', 'COUNSELLOR', '', 'FEMALE', '0393216467', '', 'SERVICE DELIVERY', '2009-01-01', 'DATA CLERK', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(70, 'BENEDICT', 'TIBALIRA', 'NTIHC/HR/13/046', 'btibalira@ntihc.org', 'FINANCE AND ADMIN DEPARTMENTAL USER', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-07-11 12:33:21', 'ACTIVE', '', 'ASSISTANT PROJECT OFFICER', '', 'MALE', '0393216467', '', 'FINANCE AND ADMINISTRATION', '2013-01-01', 'VOLUNTEER', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(71, 'HAJARAH', 'NAMIREMBE', 'NTIHC/HR/14/047', 'hnamirembe@ntihc.org', 'CLIENT MANAGEMENT AND ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-07-10 07:30:12', 'ACTIVE', '', 'MEDICAL SERVICE PROVIDER/MIDWIFE', '', 'FEMALE', '0703207371', '', 'SERVICE DELIVERY', '2014-01-01', 'MEDICAL SERVICE PROVIDER', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(72, 'MADINAH', 'NAKIYEMBA', 'NTIHC/HR/14/048', 'mnakiyemba@ntihc.org', 'CLIENT MANAGEMENT AND ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-07-07 11:17:39', 'ACTIVE', '', 'MEDICAL SERVICE PROVIDER/MIDWIFE', '', 'FEMALE', '0393216467', '', 'SERVICE DELIVERY', '2014-01-01', 'MEDICAL SERVICE PROVIDER', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(73, 'JUSTINE', 'NAKALYANGO', 'NTIHC/HR/16/054', 'jnakalyango@ntihc.org', 'CLIENT MANAGEMENT AND ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-07-07 11:17:21', 'ACTIVE', '', 'DISPENSER', '', 'FEMALE', '0393216467', '', 'SERVICE DELIVERY', '2016-01-01', 'DISPENSER', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(74, 'LINDA', 'TULINA', 'NTIHC/HR/15/052', 'ltulina@ntihc.org', 'CLIENT MANAGEMENT AND ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-07-07 11:16:12', 'ACTIVE', '', 'COUNSELLING ASSISTANT', '', 'FEMALE', '0393216467', '', 'SERVICE DELIVERY', '2015-01-01', 'COUNSELLING ASSISTANT', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(75, 'REGINA', 'NAGAWA', 'NTIHC/HR/05/028', 'rnagawa@ntihc.org', 'FINANCE AND ADMIN DEPARTMENTAL USER', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-07-11 12:32:20', 'ACTIVE', '', 'IN-CHARGE STORES', '', 'FEMALE', '0393216467', '', 'FINANCE AND ADMINISTRATION', '2005-01-01', 'STORES', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(76, 'BETRICE', 'NAMUWONGE', '', 'bnamuwonge@ntihc.org', 'CLIENT MANAGEMENT AND ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-07-07 10:49:15', 'ACTIVE', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00'),
(77, 'JOLLY ROSE', 'KUSEMERERWA', 'NTIHC/HR/07/034', 'jrkusemererwa@ntihc.org', 'CLIENT MANAGEMENT AND ADMIN', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-08-01 02:57:32', 'ACTIVE', '', 'MEDICAL SERVICE PROVIDER/MIDWIFE', '', 'FEMALE', '0702846558', '', 'SERVICE DELIVERY', '2007-07-01', 'MIDWIFE', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(78, 'Mwima', 'Mubakali', 'NTIHC/HR/16/Volunteer1', 'mmubakali@ntihc.org', 'CLIENT MANAGEMENT', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-08-01 02:57:10', 'ACTIVE', '', 'Volunteer', 'DENIED', 'MALE', '0700414401', '', 'SERVICE DELIVERY', '2016-02-01', 'VOLUNTEER', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(79, 'CHRISTOPHER', 'SSENOGA', 'NTIHC/HR/16/Volunteer2', 'cssenoga@ntihc.org', 'CLIENT MANAGEMENT', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-08-01 02:56:46', 'ACTIVE', '', 'Volunteer', 'DENIED', 'MALE', '0704596188', '', 'SERVICE DELIVERY', '2016-01-01', 'VOLUNTEER', 'NTIHC', 'HEADQUARTER', '0000-00-00'),
(80, 'PAUL', 'MUZUNGU', 'N/A', 'muzungupaul2@gmail.com', 'FINANCE AND ADMIN DEPARTMENTAL USER', 'ad5f82e879a9c5d6b5b442eb37e50551', '2017-08-14 11:09:33', 'ACTIVE', ' PAUL MUZUNGU', 'CONSULTANT', 'GRANTED', 'MALE', '256776542530', '', 'FINANCE AND ADMINISTRATION', '0000-00-00', '', 'NTIHC', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `vetting_screening`
--

CREATE TABLE IF NOT EXISTS `vetting_screening` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `RECIEVEDDATE` date NOT NULL,
  `FIRSTNAME` varchar(99) NOT NULL,
  `LASTNAME` varchar(99) NOT NULL,
  `PHONECONTACT` varchar(99) NOT NULL,
  `GENDER` varchar(99) NOT NULL,
  `SUMMARY_OF_QUALIFICATIONS` varchar(99) NOT NULL,
  `DRIVING_PERMIT_CLASSESS` varchar(99) NOT NULL,
  `POSITION_APPLIED_FOR` varchar(99) NOT NULL,
  `COMMENT` varchar(99) NOT NULL DEFAULT 'CHECK ELIGIBILITY',
  `SHORTLISTSTATUS` varchar(99) NOT NULL DEFAULT 'PENDING',
  `INTERVIEW_EXPECTEDDATE` varchar(99) NOT NULL,
  `ITVL1DATE` date NOT NULL,
  `ITVLEVEL1DESC` varchar(99) NOT NULL,
  `ITVLEVEL1PASSMARK` varchar(99) NOT NULL,
  `ITVLEVEL1SCORE` varchar(99) NOT NULL,
  `ITVLEVEL1STATUS` varchar(99) NOT NULL,
  `ITVL2DATE` date NOT NULL,
  `ITVLEVEL2DESC` varchar(88) DEFAULT NULL,
  `ITVLEVEL2PASSMARK` varchar(88) DEFAULT NULL,
  `ITVLEVEL2SCORE` varchar(88) DEFAULT NULL,
  `AVERAGESCORE` varchar(99) NOT NULL,
  `RECOMMENDATION` varchar(222) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `vetting_screening`
--

INSERT INTO `vetting_screening` (`id`, `TIMESTAMP`, `RECIEVEDDATE`, `FIRSTNAME`, `LASTNAME`, `PHONECONTACT`, `GENDER`, `SUMMARY_OF_QUALIFICATIONS`, `DRIVING_PERMIT_CLASSESS`, `POSITION_APPLIED_FOR`, `COMMENT`, `SHORTLISTSTATUS`, `INTERVIEW_EXPECTEDDATE`, `ITVL1DATE`, `ITVLEVEL1DESC`, `ITVLEVEL1PASSMARK`, `ITVLEVEL1SCORE`, `ITVLEVEL1STATUS`, `ITVL2DATE`, `ITVLEVEL2DESC`, `ITVLEVEL2PASSMARK`, `ITVLEVEL2SCORE`, `AVERAGESCORE`, `RECOMMENDATION`) VALUES
(3, '2017-05-05 10:34:55', '0000-00-00', 'DROGBA', 'WILLIAMS', 'd', 'MALE', 'c', 'r', 'dd', '', 'PENDING', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, '', NULL),
(5, '2017-05-05 10:50:52', '0000-00-00', 'RACHAEL', 'MAGOLA', '09999999', 'MALE', 'R', 'R', 'R', '', 'SHORTLISTED', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, '', NULL),
(6, '2017-05-05 10:50:52', '0000-00-00', 'ROBERT', 'LULEddddd', 'R', 'MALE', 'R', 'R', 'R', 'NOT ELIGIBLE', 'PENDING', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, '', NULL),
(36, '2017-05-26 05:59:42', '0000-00-00', 'MATOBBBVVVV', 'JACOBSddd', '06069696', '', '', 'DDDDDDDDDDD', 'DDD', 'ELIGIBLE', 'PENDING', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, '', NULL),
(40, '2017-05-26 06:13:52', '0000-00-00', 'KADOKECHI', 'SMSED', '333', 'FEMALE', 'D', 'D', 'DD', 'NOT ELIGIBLE', 'PENDING', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, '', NULL),
(41, '2017-05-26 06:13:52', '0000-00-00', 'KATWE', 'LAMECH', '33', 'MALE', 'CERTIFICATE', 'D', 'D', '', 'PENDING', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, '', NULL),
(42, '2017-05-26 06:17:41', '0000-00-00', 'DAVIS', 'D', '4', 'MALE', 'DXXXX', 'DXXXX', 'DXXXXX', 'NOT ELIGIBLE', 'REJECTED', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, '', NULL),
(43, '2017-05-26 07:47:07', '0000-00-00', 'MAIMUNAH', 'KAROTE', '444', 'FEMALE', 'DDDD', '444', 'EEEE', 'SHORTLISTED', 'PENDING', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, '', NULL),
(44, '2017-06-27 03:35:04', '0000-00-00', 'FX', 'XC', '44', 'MALE', 'F', '', 'F', 'CHECK ELIGIBILITY', 'PENDING', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, '', NULL),
(45, '2017-06-27 03:56:09', '0000-00-00', 'JANET', 'JACKSON', '0983333333', 'MALE', 'DSSS', 'fAAAA', 'D', 'ELIGIBLE', 'SHORTLISTED', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, '', NULL),
(46, '2017-06-27 03:56:09', '0000-00-00', 'JULIE', 'SEW', '0898888889', 'FEMALE', 'DD', 'DDDDD', 'D', 'NOT ELIGIBLE', 'REJECTED', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, '', NULL),
(47, '2017-06-27 07:56:50', '0000-00-00', 'CHARLES', 'EMMA', '9000', 'MALE', 'RSS', 'R', 'RRR', 'ELIGIBLE', 'PENDING', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, '', NULL),
(48, '2017-06-27 07:56:50', '0000-00-00', 'TONNY', 'MADS', '0988', 'MALE', 'R', '', 'U', 'NOT ELIGIBLE', 'REJECTED', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, '', NULL),
(49, '2017-06-27 08:01:08', '0000-00-00', 'MOSES', 'DENIS', '9000', 'MALE', 'Rffvvvvvvvvvvvv', '7777', 'RRR', 'ELIGIBLE', 'SHORTLISTED', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, '', NULL),
(50, '2017-06-27 08:01:08', '0000-00-00', 'WILSON', 'MADS', '0988', 'MALE', 'R', 'N/A', 'U', 'NOT ELIGIBLE', 'SHORTLISTED', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, '', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
