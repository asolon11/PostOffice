CREATE TABLE `pk_Package` (
  `pk_ID` int NOT NULL AUTO_INCREMENT UNIQUE,
  `pk_PackageName` varchar(30) NOT NULL UNIQUE,
  `pk_Description` varchar(30) NOT NULL,
  `pk_cCompany` varchar(30) NOT NULL,
  `pk_Status` varchar(30) NOT NULL,
  `pk_cID` int NOT NULL,
  `pk_eID` int NOT NULL,
  PRIMARY KEY (`pk_ID`)
);

CREATE TABLE `pk_Customer` (
  `pk_cID` int NOT NULL UNIQUE,
  `pk_cFname` varchar(30) NOT NULL,
  `pk_cMinit` varchar(2) NOT NULL,
  `pk_cLname` varchar(30) NOT NULL,
  `pk_cCompany` varchar(30),
  `pk_cAddress` varchar(30) NOT NULL,
  `pk_cCity` varchar(30) NOT NULL,
  `pk_cState` varchar(2) NOT NULL,
  `pk_cZipCode` char(5),
  `pk_cEmail` varchar(30) NOT NULL UNIQUE,
  `pk_cMobile` char(11) NOT NULL DEFAULT '00000000000',
  `pk_eID` int NOT NULL UNIQUE,
  PRIMARY KEY (`pk_cID`)
);

CREATE TABLE `pk_Department` (
  `pk_dID` int NOT NULL AUTO_INCREMENT UNIQUE,
  `pk_dName` varchar(30) NOT NULL,
  `pk_cID` int NOT NULL,
  `pk_mdID` int NOT NULL,
  PRIMARY KEY (`pk_dID`)
);

CREATE TABLE `pk_Employee` (
  `pk_eID` int NOT NULL AUTO_INCREMENT UNIQUE,
  `pk_eStartDate` DATE NOT NULL DEFAULT '00/00/0000',
  `pk_eEndDate` DATE NOT NULL DEFAULT '00/00/0000',
  `pk_eFname` varchar(30) NOT NULL,
  `pk_eMinit` varchar(2) NOT NULL,
  `pk_eLname` varchar(30) NOT NULL,
  `pk_eAddress` varchar(30) NOT NULL,
  `pk_eCity` varchar(30) NOT NULL,
  `pk_eState` varchar(2) NOT NULL,
  `pk_eZipCode` char(5) NOT NULL DEFAULT '00000',
  `pk_eEmail` varchar(30) NOT NULL UNIQUE,
  `pk_eMobile` char(11) NOT NULL DEFAULT '00000000000',
  `pk_eSsn` char(9) NOT NULL UNIQUE DEFAULT '000000000',
  `pk_eSex` varchar(1),
  `pk_mID` int NOT NULL,
  `pk_edID` int NOT NULL,
  PRIMARY KEY (`pk_eID`)
);

CREATE TABLE `pk_Managers` (
  `pk_mID` int NOT NULL AUTO_INCREMENT UNIQUE,
  `pk_eID` int NOT NULL,
  `pk_mBonus` varchar(30) NOT NULL,
  PRIMARY KEY (`pk_mID`)
);

CREATE TABLE `pk_Destination` (
  `pk_deID` int NOT NULL AUTO_INCREMENT UNIQUE,
  `pk_deName` varchar(30) NOT NULL,
  `pk_deCity` varchar(30) NOT NULL,
  `pk_deState` varchar(30) NOT NULL,
  `pk_deZipCode` char(5) NOT NULL DEFAULT '00000',
  `pk_deCountryCode` varchar(2) NOT NULL,
  `pk_deTelephone` char(11) NOT NULL DEFAULT '00000000000',
  `pk_dpID` int NOT NULL,
  PRIMARY KEY (`pk_deID`)
);

CREATE TABLE `pk_Source` (
  `pk_sID` int NOT NULL AUTO_INCREMENT UNIQUE,
  `pk_sName` varchar(30) NOT NULL,
  `pk_sCity` varchar(30) NOT NULL,
  `pk_sState` varchar(30) NOT NULL,
  `pk_sZipCode` char(5) NOT NULL,
  `pk_sCountryCode` varchar(2) NOT NULL,
  `pk_sTelephone` char(11) NOT NULL DEFAULT '00000000000',
  `pk_spID` int NOT NULL UNIQUE,
  PRIMARY KEY (`pk_sID`)
);

CREATE TABLE `pk_Transactions` (
  `pk_tID` int NOT NULL AUTO_INCREMENT,
  `pk_tTypeName` varchar(30) NOT NULL,
  `pk_tAmount` DECIMAL NOT NULL DEFAULT '0.0',
  `pk_tcID` int NOT NULL UNIQUE,
  `pk_teID` int NOT NULL UNIQUE,
  `pk_tBillingAddress` varchar(30) NOT NULL,
  `pk_tBillingCity` varchar(30) NOT NULL,
  `pk_tBillingState` varchar(30) NOT NULL,
  `pk_tBillingZipCode` char(5) NOT NULL DEFAULT '00000',
  `pk_tBillingCountryCode` varchar(2) NOT NULL,
  `pk_tBillingTele` char(11) NOT NULL DEFAULT '00000000000',
  PRIMARY KEY (`pk_tID`)
);

CREATE TABLE `pk_TimeDateStamp` (
  `pk_TimeID` TIMESTAMP NOT NULL,
  `pk_timecID` int NOT NULL,
  `pk_timeeID` int NOT NULL,
  `pk_timepID` int NOT NULL,
  `pk_timetID` int NOT NULL,
  PRIMARY KEY (`pk_TimeID`)
);

ALTER TABLE `pk_Package` ADD CONSTRAINT `pk_Package_fk0` FOREIGN KEY (`pk_cID`) REFERENCES `pk_Customer`(`pk_cID`);

ALTER TABLE `pk_Package` ADD CONSTRAINT `pk_Package_fk1` FOREIGN KEY (`pk_eID`) REFERENCES `pk_Employee`(`pk_eID`);

ALTER TABLE `pk_Customer` ADD CONSTRAINT `pk_Customer_fk0` FOREIGN KEY (`pk_eID`) REFERENCES `pk_Employee`(`pk_eID`);

ALTER TABLE `pk_Department` ADD CONSTRAINT `pk_Department_fk0` FOREIGN KEY (`pk_dID`) REFERENCES `pk_Managers`(`pk_mID`);

ALTER TABLE `pk_Department` ADD CONSTRAINT `pk_Department_fk1` FOREIGN KEY (`pk_cID`) REFERENCES `pk_Customer`(`pk_cID`);

ALTER TABLE `pk_Department` ADD CONSTRAINT `pk_Department_fk2` FOREIGN KEY (`pk_mdID`) REFERENCES `pk_Managers`(`pk_mID`);

ALTER TABLE `pk_Employee` ADD CONSTRAINT `pk_Employee_fk0` FOREIGN KEY (`pk_mID`) REFERENCES `pk_Managers`(`pk_mID`);

ALTER TABLE `pk_Employee` ADD CONSTRAINT `pk_Employee_fk1` FOREIGN KEY (`pk_edID`) REFERENCES `pk_Department`(`pk_dID`);

ALTER TABLE `pk_Managers` ADD CONSTRAINT `pk_Managers_fk0` FOREIGN KEY (`pk_mID`) REFERENCES `pk_Employee`(`pk_eID`);

ALTER TABLE `pk_Managers` ADD CONSTRAINT `pk_Managers_fk1` FOREIGN KEY (`pk_eID`) REFERENCES `pk_Employee`(`pk_eID`);

ALTER TABLE `pk_Destination` ADD CONSTRAINT `pk_Destination_fk0` FOREIGN KEY (`pk_dpID`) REFERENCES `pk_Package`(`pk_ID`);

ALTER TABLE `pk_Source` ADD CONSTRAINT `pk_Source_fk0` FOREIGN KEY (`pk_spID`) REFERENCES `pk_Package`(`pk_ID`);

ALTER TABLE `pk_Transactions` ADD CONSTRAINT `pk_Transactions_fk0` FOREIGN KEY (`pk_tcID`) REFERENCES `pk_Customer`(`pk_cID`);

ALTER TABLE `pk_Transactions` ADD CONSTRAINT `pk_Transactions_fk1` FOREIGN KEY (`pk_teID`) REFERENCES `pk_Employee`(`pk_eID`);

ALTER TABLE `pk_TimeDateStamp` ADD CONSTRAINT `pk_TimeDateStamp_fk0` FOREIGN KEY (`pk_timecID`) REFERENCES `pk_Customer`(`pk_cID`);

ALTER TABLE `pk_TimeDateStamp` ADD CONSTRAINT `pk_TimeDateStamp_fk1` FOREIGN KEY (`pk_timeeID`) REFERENCES `pk_Employee`(`pk_eID`);

ALTER TABLE `pk_TimeDateStamp` ADD CONSTRAINT `pk_TimeDateStamp_fk2` FOREIGN KEY (`pk_timepID`) REFERENCES `pk_Package`(`pk_ID`);

ALTER TABLE `pk_TimeDateStamp` ADD CONSTRAINT `pk_TimeDateStamp_fk3` FOREIGN KEY (`pk_timetID`) REFERENCES `pk_Transactions`(`pk_tID`);
