<?php

$db['host'] = "localhost";
$db['username'] = "root";
$db['password'] = "";
$db['database'] = "testdb";

/*


//used as testdb

CREATE DATABASE IF NOT EXISTS `ADtest` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ADtest`;


CREATE TABLE IF NOT EXISTS `Users` (
  `UserID` char(10) NOT NULL,
  `UserName` varchar(128) NOT NULL,
  `Password` char(32) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Section` varchar(32) NOT NULL,
  `Type` int(2) NOT NULL,
  `Subnet` varchar(32) NOT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `Images` (
  `ImageID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ImageName` varchar(128) NOT NULL,
  `Location` varchar(32) NOT NULL,
  `ImageDesc` varchar(32),
  PRIMARY KEY (`ImageID`),
  UNIQUE KEY `ImageName` (`ImageName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `Courses` (
  `CourseID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `CourseName` varchar(128) NOT NULL,
  `InfoFile` varchar(32) NOT NULL,
  `ImageID` varchar(128),
  `SubmitLimit` int(10) NOT NULL,
  `CourseDesc` text,
  `Duration` time NOT NULL,
  PRIMARY KEY (`CourseID`),
  UNIQUE KEY `CourseName` (`CourseName`)
)ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `Lectures`(
  `LectureID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `CourseID` int(10) NOT NULL,
  `TeacherID` int(10) NOT NULL,
  `StartTime` datetime,
  `StopTime` datetime,
  `Location` varchar(32),
  `Comment` text,
  PRIMARY KEY (`LectureID`)
)ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `SelectCourses` (
  `CrSelectID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `LectureID` int(10) NOT NULL,
  `StudentID` int(10) NOT NULL,
  `Report` varchar(128),
  `Score` int(10),
  `SubmitNum` int(10) NOT NULL,
  `LastSubmit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TimeConsumed` time,
  PRIMARY KEY (`CrSelectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `Exams` (
  `ExamID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ExamName` varchar(128) NOT NULL,
  `TeacherID` int(10) NOT NULL,
  `StartTime` datetime,
  `StopTime` datetime,
  `Location` varchar(32),
  `InfoFile` varchar(128) NOT NULL,
  `ImageID` int(10),
  `SubmitNum` int(10) NOT NULL,
  `Duration` time NOT NULL,
  `LastSubmit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TimeConsumed` time,
  PRIMARY KEY (`ExamID`),
  UNIQUE KEY `ExamName` (`ExamName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `SelectExams` (
  `ExSelectID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ExamID` int(10) NOT NULL,
  `StudentID` int(10) NOT NULL,
  `Report` varchar(128),
  `Score` int(10),
  `SubmitNum` int(10) NOT NULL,
  `LastSubmit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TimeConsumed` time,
  PRIMARY KEY (`ExSelectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;




INSERT INTO `Users` (`UserID`, `UserName`, `Password`,`Gender`,`Email`,`Section`,`Type`,`Subnet`) VALUES
('0000000000', 'admin', MD5('admin'),'F','admin@admin.com','InfoSec','0','10.0.1.10');

INSERT INTO `Users` (`UserID`, `UserName`, `Password`,`Gender`,`Email`,`Section`,`Type`,`Subnet`) VALUES
('5000000001', 'test_teacher', MD5('123456'),'M','teacher@example.com','InfoSec','1','10.0.1.11');

INSERT INTO `Users` (`UserID`, `UserName`, `Password`,`Gender`,`Email`,`Section`,`Type`,`Subnet`) VALUES
('5110159006', 'test_student', MD5('123456'),'F','student@example.com','InfoSec','2','10.0.1.12');

*/
