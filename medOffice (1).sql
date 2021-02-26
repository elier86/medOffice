-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 10, 2020 at 07:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medOffice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `numEmployee` int(6) NOT NULL,
  `adminUsername` varchar(128) NOT NULL,
  `adminPassword` varchar(128) NOT NULL,
  `adminName` varchar(128) NOT NULL,
  `adminSurname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `birthdate` varchar(30) NOT NULL,
  `age` int(2) NOT NULL,
  `ssn` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `addressTwo` varchar(128) NOT NULL,
  `zipCode` int(14) NOT NULL,
  `townPR` varchar(128) NOT NULL,
  `homePhone` varchar(20) NOT NULL,
  `phoneNumber` varchar(128) NOT NULL,
  `accessLevel` varchar(128) NOT NULL,
  `emergencyName` varchar(128) NOT NULL,
  `emergencyLastName` varchar(128) NOT NULL,
  `emergencyAddress` varchar(128) NOT NULL,
  `emergencyAddresstwo` varchar(128) NOT NULL,
  `emergencyCity` varchar(128) NOT NULL,
  `emergencyZip` int(20) NOT NULL,
  `emergencyCellphone` varchar(128) NOT NULL,
  `emergencyEmail` varchar(128) NOT NULL,
  `emergencyRelationship` varchar(128) NOT NULL,
  `comments` text DEFAULT NULL,
  `isHidden` varchar(128) NOT NULL DEFAULT 'False'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`numEmployee`, `adminUsername`, `adminPassword`, `adminName`, `adminSurname`, `email`, `birthdate`, `age`, `ssn`, `address`, `addressTwo`, `zipCode`, `townPR`, `homePhone`, `phoneNumber`, `accessLevel`, `emergencyName`, `emergencyLastName`, `emergencyAddress`, `emergencyAddresstwo`, `emergencyCity`, `emergencyZip`, `emergencyCellphone`, `emergencyEmail`, `emergencyRelationship`, `comments`, `isHidden`) VALUES
(123457, 'elier300', '$2y$10$nhx8em0Gq4izMurW3278z.FHm8TbiSevrFq4jYBOiHSpLIES/9Hzy', 'Elier', 'Roche', 'elier@gmail.com', '10/13/1997', 23, '000-90-0000', 'Carr 109 KM 4.9 INT ANASCO PR', '', 0, '', '', '555-555-5555', 'Yes', '', '', '', '', '', 0, '', '', '', '', 'Enabled'),
(123459, 'admin', '$2y$10$ILv5CdZ.p4ucN.4ud/BNcOJD80.xv3jWrIq9PTyeKY6au16k69WcK', 'Rafael', 'Munoz', 'rafaelmunoz@gmail.com', '', 0, '', '', '', 0, '', '', '', 'Yes', '', '', '', '', '', 0, '', '', '', '', 'Enabled'),
(123460, 'yancito420', '$2y$10$6PwBA15E2t3nUHFglRIFleHV8.nx.ml0MvPQzaL4JM4W990L9hAcO', 'Yansi', 'Aquino', 'yancitoelpotrito@gmail.com', '2010-06-17', 10, '', '123', 'sdsdsd', 0, 'Aibonito', '123', '123', 'Yes', 'Update', 'Prueba', '123', '321', 'Cayey', 213, '123', 'hola@gmail.com', 'Daughter', '', 'Enabled'),
(123462, 'popo', '$2y$10$sPlGjOz3DQtxJhCxXgFapub4wgDHUKjtcsq7Iu7ClHowYnPHWT.7G', 'Popo', 'POpo', 'popo@gmail.com', '2020-11-08', 0, '123-123-1234', 'Carr 109', 'Casa 90', 0, '', '122312312312', '213123123123', 'Yes', '', '', '', '', '', 0, '', '', '', '', 'Disabled'),
(123464, 'trotito', '$2y$10$fb5O8EBXZC9MLc8wNRCqiehx.sqEa/pWYhhFYpyA0avqnZaWcai8a', 'troto', 'troto', 'ddd@gmail.com', '2020-02-04', 0, '43', '323', 'dqwd', 12344, 'Guaynabo', '123-123-1234', '789', 'Yes', '', '', '', '', '', 0, '', '', '', '', 'Enabled'),
(123465, 'potrito9090', '$2y$10$L4WmBxY0pgX2LgO5b.Wkz.UsfjcO5faminqtoRwlMj0rVFkgNQryu', 'Potrito', 'Poperlo', 'potrito@gmail.com', '2020-11-05', 0, '123-123-12343', '1212 ', 'dqwd ', 123, 'Aguada', '123-123-1234', '321-321-3214', 'Yes', '', '', '', '', '', 0, '', '', '', '', 'Enabled'),
(123468, 'pepeperepepe', '$2y$10$JU8ZkSFG6BiFsbyqUiIhY.9aBkDW96dk5oWJfXPR1BUwAEVuTA4li', 'Pepe', 'Perepepe', 'pepeperepepe@gmail.com', '2012-02-15', 8, '123-123-1234', '1212', 'dqwd', 123, 'Barceloneta', '123-123-1234', '321-321-3214', 'Yes', '', '', '', '', '', 0, '', '', '', '', 'Enabled'),
(123469, 'doctorcito34', '$2y$10$PVdlO09wWDty8ftYrNykw.6wuapxzkKzEVooNR95JFoLfAb.StJbS', 'Doctor', 'Emergencia', 'jiji@gmail.com', '2002-06-18', 18, '123-123-1234', 'no te hagas', 'tu sabes', 12345, 'Aguas Buenas', '123-123-1234', '321-321-3214', 'Yes', 'Emergencia Nombre', 'El apellido', 'por ahi', 'en la 30', 'Vega Alta', 222222, '1234-123-123', 'nose@gmail.com', 'Spouse/Husband', '', 'Enabled'),
(123474, 'escondido', '$2y$10$ZEJak7SJUb5Hk9c0khlSjOy8YA8NYOdPJB0HzQo/78Tc14ftQBjVe', 'Prueba', 'Escondido', 'escondido@gmail.com', '2020-11-17', 0, '12', '12', '12', 12, 'Ciales', '12', '12', 'Yes', 'El', 'Quien', '12', '12', 'Canóvanas', 12, '12', 'ejele@gmail.com', 'Son/Daughter', '12', 'Enabled');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointmentID` int(11) NOT NULL,
  `appointmentDate` date NOT NULL,
  `doctorId` int(11) NOT NULL,
  `patientID` int(20) NOT NULL,
  `vitalSigns` text DEFAULT NULL,
  `medicNotes` text DEFAULT NULL,
  `medicOrders` text DEFAULT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentID`, `appointmentDate`, `doctorId`, `patientID`, `vitalSigns`, `medicNotes`, `medicOrders`, `status`) VALUES
(20, '2020-11-30', 123457, 3, '', '', '', 'Completed'),
(21, '2020-11-30', 123457, 4, '', '', '', 'Cancelled'),
(22, '2020-11-30', 123457, 5, 'Pero omo', '', '', 'Pending'),
(23, '2020-11-30', 123457, 12, '', '', '', 'Completed'),
(24, '2020-11-30', 123457, 10, '', '', '', 'Completed'),
(25, '2020-11-30', 123457, 6, '', '', '', 'Completed'),
(26, '2020-12-04', 123457, 12, '', '', '', 'Pending'),
(28, '2020-12-15', 123461, 2, '', '', '', 'Cancelled'),
(30, '2020-12-07', 123459, 2, '', '', '', 'Cancelled'),
(31, '2020-12-07', 123459, 10, '', '', '', 'Completed'),
(32, '2020-12-07', 123469, 7, '', '', '', 'Cancelled'),
(33, '2020-12-07', 123468, 8, '', '', '', 'Ready'),
(34, '2020-12-07', 123460, 4, '', '', '', 'Cancelled'),
(35, '2020-12-11', 123465, 10, '', '', '', 'Completed'),
(36, '2020-12-10', 123459, 7, '', '', '', 'Cancelled'),
(40, '2020-12-18', 123457, 5, 'Pero omo', '', '', 'Pending'),
(42, '2020-12-09', 123459, 8, '', '', '', 'Ready'),
(45, '2020-12-30', 123460, 1, '', '', '', 'Pending'),
(46, '2020-12-09', 123460, 2, '', '', '', 'Cancelled'),
(47, '2020-12-09', 123457, 5, 'Pero omo', '', '', 'Pending'),
(48, '2020-12-09', 123462, 11, '', '', '', 'Pending'),
(49, '2020-12-09', 123457, 3, '', '', '', 'Pending'),
(50, '2020-12-09', 123462, 4, '', '', '', 'Pending'),
(51, '2020-12-09', 123464, 8, '', '', '', 'Pending'),
(52, '2020-12-09', 123459, 1, '', '', '', 'Pending'),
(53, '2020-12-09', 123465, 10, '', '', '', 'Pending'),
(54, '2020-12-09', 123464, 7, '', '', '', 'Pending'),
(55, '2020-12-09', 123460, 11, '', '', '', 'Pending'),
(56, '2020-12-09', 123464, 5, 'Pero omo', '', '', 'Pending'),
(57, '2020-12-10', 123457, 2, '', '', '', 'Cancelled'),
(58, '2020-12-10', 123462, 5, 'Nice', '', '', 'Pending'),
(59, '2020-12-10', 123459, 11, 'Chito Bono', 'hola', 'hola', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `nurses`
--

CREATE TABLE `nurses` (
  `numEmployee` int(6) NOT NULL,
  `adminUsername` varchar(128) NOT NULL,
  `adminPassword` varchar(128) NOT NULL,
  `adminName` varchar(128) NOT NULL,
  `adminSurname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `birthdate` varchar(30) NOT NULL,
  `age` int(2) NOT NULL,
  `ssn` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `addressTwo` varchar(128) NOT NULL,
  `zipCode` int(14) NOT NULL,
  `townPR` varchar(128) NOT NULL,
  `homePhone` varchar(20) NOT NULL,
  `phoneNumber` varchar(128) NOT NULL,
  `accessLevel` int(1) NOT NULL,
  `emergencyName` varchar(128) NOT NULL,
  `emergencyLastName` varchar(128) NOT NULL,
  `emergencyAddress` varchar(128) NOT NULL,
  `emergencyAddresstwo` varchar(128) NOT NULL,
  `emergencyCity` varchar(128) NOT NULL,
  `emergencyZip` int(20) NOT NULL,
  `emergencyCellphone` varchar(128) NOT NULL,
  `emergencyEmail` varchar(128) NOT NULL,
  `emergencyRelationship` varchar(128) NOT NULL,
  `comments` text DEFAULT NULL,
  `isHidden` varchar(128) NOT NULL DEFAULT 'False'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurses`
--

INSERT INTO `nurses` (`numEmployee`, `adminUsername`, `adminPassword`, `adminName`, `adminSurname`, `email`, `birthdate`, `age`, `ssn`, `address`, `addressTwo`, `zipCode`, `townPR`, `homePhone`, `phoneNumber`, `accessLevel`, `emergencyName`, `emergencyLastName`, `emergencyAddress`, `emergencyAddresstwo`, `emergencyCity`, `emergencyZip`, `emergencyCellphone`, `emergencyEmail`, `emergencyRelationship`, `comments`, `isHidden`) VALUES
(123458, 'pedro123', '$2y$10$o1vRJU6h6u9rH/XQUjr6ReA9wNnG.aJzl.hDOA6VBBxAHy5MUBDj.', 'Pedrito', 'Rosanales', 'pedro@gmail.com', '', 0, '', '', '', 0, '', '', '', 2, '', '', '', '', '', 0, '', '', '', '', 'Enabled'),
(123463, 'lopo', '$2y$10$Yz6F7MWIQ3L5S1v3B5STKeBAls6KsdQoHWtLV1xlBb0FPI7UDSGsq', 'Lopop', 'lopo', 'lopo@gmail.com', '2020-11-12', 0, '123-123-12343', 'e1212', 'dqwdd', 1233, 'Adjuntas', '123-123-1234', '321-321-3214', 2, '', '', '', '', '', 0, '', '', '', '', 'Enabled'),
(123466, 'nurse', '$2y$10$twRrlPz4MnnbGuznOg1NZejMHST93jZx6VuvBS/eIHjgkH1RhsRc2', 'Nurse', 'Nurse', 'nurse@gmail.com', '2014-01-21', 34, '123-123-1234', '1212', 'dqwd', 123, 'Adjuntas', '123-123-1234', '321-321-3214', 2, '', '', '', '', '', 0, '', '', '', '', 'Enabled'),
(123467, 'prueba', '$2y$10$ax8z7kjKwKdXlJ6pf6JN2.4UJWaCD0y4A5RQMYurN.I5uhkgNwCte', 'Ultima', 'Prueba', 'prueba@gmail.com', '2016-05-09', 12, '123-123-1234', '1212', 'dqwd', 123, 'Arroyo', '123-123-1234', '321-321-3214', 2, '', '', '', '', '', 0, '', '', '', '', 'Enabled'),
(123470, 'decasa21', '$2y$10$gHUpuRUz7UUqOTSmRJTlqOLWOx7xG2h9VchIPSY41l4QANlR504je', 'Enfermerita', 'Decasa', 'decasa@hotmail.com', '2000-06-23', 20, '123-123-1234', 'Casa de al lado', '2323', 123455, 'Barceloneta', '121', '321', 2, 'Contacto', 'Emergencia', 'Elop', 'Epeo', 'Canóvanas', 1234, '123', 'feo@gmail.com', 'Son/Daughter', '', 'Enabled'),
(123471, 'nosequienes', '$2y$10$0xAcN8SrOCsXvzAuXyLQ9.Z2K2PqfoYWsa8psclTdpVfjy/Pm43R.', 'fere', 'Portito', 'decasasjuss@hotmail.com', '2003-06-23', 17, '123-123-1234', 'Casa de al lado', '2323', 123455, 'Aguas Buenas', '121', '321', 2, 'Contacto', 'Emergencia', '121233333333', 'dqwd', 'Utuado', 123, '123', 'feocdcdc@gmail.com', 'Son/Daughter', '', 'Enabled'),
(123472, 'vrty', '$2y$10$DTwHLVXfJ2dguBw2L1suNOERhyRdkBhDAQLuTpH1fhbh.n43H2ZL6', 'Ya', 'Mecanse', 'vrty@outlook.com', '2011-06-09', 9, '123-231-3213', 'tu sabes', 'donde es', 12345, 'San Sebastián', '212', '333333', 2, 'Vorty', 'Vovo', 'rncsjs', 'qsq2223', 'Utuado', 324, '2342', 'voopopo@gmail.com', 'Other', '', 'Enabled');

-- --------------------------------------------------------

--
-- Table structure for table `patientProfile`
--

CREATE TABLE `patientProfile` (
  `patientID` int(6) NOT NULL,
  `patientName` varchar(128) NOT NULL,
  `patientLastName` varchar(128) NOT NULL,
  `patientBirthdate` varchar(128) NOT NULL,
  `patientAge` int(2) NOT NULL,
  `ssn` varchar(20) NOT NULL,
  `patientGender` varchar(128) NOT NULL,
  `patientEthnicity` varchar(128) NOT NULL,
  `maritalStatus` varchar(128) NOT NULL,
  `medicalPlan` varchar(128) NOT NULL,
  `religion` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `occupation` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `addresstwo` varchar(128) NOT NULL,
  `zipCode` int(8) NOT NULL,
  `town` varchar(128) NOT NULL,
  `phoneHome` varchar(128) NOT NULL,
  `phonePersonal` varchar(128) NOT NULL,
  `conditions` text DEFAULT NULL,
  `familyHistory` text DEFAULT NULL,
  `allergies` text DEFAULT NULL,
  `otherConditions` varchar(128) NOT NULL,
  `otherFamilyCon` varchar(128) NOT NULL,
  `otherAllergies` varchar(128) NOT NULL,
  `vitalSigns` text DEFAULT NULL,
  `medicNotes` text DEFAULT NULL,
  `medicOrders` text DEFAULT NULL,
  `massage` varchar(128) NOT NULL,
  `massageType` varchar(128) DEFAULT NULL,
  `massageTherapist` varchar(128) DEFAULT NULL,
  `massageReason` varchar(128) NOT NULL,
  `massageWorkout` varchar(128) DEFAULT NULL,
  `massageDiet` varchar(128) NOT NULL,
  `massageStress` varchar(128) NOT NULL,
  `emergencyName` varchar(128) DEFAULT NULL,
  `emergencyLastName` varchar(128) DEFAULT NULL,
  `emergencyAddress` varchar(128) DEFAULT NULL,
  `emergencyAddresstwo` varchar(128) DEFAULT NULL,
  `emergencyCity` varchar(128) DEFAULT NULL,
  `emergencyZip` int(20) DEFAULT NULL,
  `emergencyCellphone` varchar(128) DEFAULT NULL,
  `emergencyEmail` varchar(128) DEFAULT NULL,
  `emergencyRelationship` varchar(128) DEFAULT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientProfile`
--

INSERT INTO `patientProfile` (`patientID`, `patientName`, `patientLastName`, `patientBirthdate`, `patientAge`, `ssn`, `patientGender`, `patientEthnicity`, `maritalStatus`, `medicalPlan`, `religion`, `email`, `occupation`, `address`, `addresstwo`, `zipCode`, `town`, `phoneHome`, `phonePersonal`, `conditions`, `familyHistory`, `allergies`, `otherConditions`, `otherFamilyCon`, `otherAllergies`, `vitalSigns`, `medicNotes`, `medicOrders`, `massage`, `massageType`, `massageTherapist`, `massageReason`, `massageWorkout`, `massageDiet`, `massageStress`, `emergencyName`, `emergencyLastName`, `emergencyAddress`, `emergencyAddresstwo`, `emergencyCity`, `emergencyZip`, `emergencyCellphone`, `emergencyEmail`, `emergencyRelationship`, `comments`) VALUES
(1, 'Elier', 'Roche', '1997-10-13', 23, '1123', 'Male', 'American', 'Single', 'MMM', 'Catholic', 'cambioono@gmail.com', 'Student', 'qwerty', '3r3rf', 90, 'Aguadilla', '123-123-1234', '231-231-1234', 'Asthma', '', 'Aspirin', '', '', '', '', '', '', '', '', '', '', '', '', '', 'M', 'M', '124', 'La casa', 'Carolina', 3432, '123', 'm@yahoo.com', 'Mom', ''),
(2, 'Clopolo', 'Asteroide', '2000-06-23', 20, '1234', 'Other', 'Asian', 'Widowed', 'First Medical', 'Adventist', 'ed24eer@gmail.com', 'Va', 'a ', 'por', 233, 'Barceloneta', '1114567', '1116767', 'Asthma, Diabetes, Colon, po', 'Blood Clots, Joint Problems, Fiebre, po', 'Tu, po', 'N/aa', 'N/aa', 'N/aa', '130/90 ', 'Tamos bien creo ', 'Acho se me olvido ', 'Yes', 'Abdominal', 'Lopez', 'stress', 'basketball', 'Yes', '9', 'A', 'A', '123', '123', 'Cataño', 123, '123', 'a@hotmail.com', 'Son', ''),
(3, 'Fopo', 'For', '2000-12-12', 19, '1234', 'Female', 'Hispanic or Latino', 'Married', 'MCS', 'catholic', 'cambioono@gmail.com', 'we', 'fwef', 'wefwe', 233, 'Aguadilla', '123', '3212', 'Diabetes,Carpal Tunnel', 'Respiratory Problem,Spinal Problem', 'Sulfa', 'q', 'q', 'q', '', '', '', 'No', 'daw', 'qwd', 'qwd', 'qwd', 'Yes', '8', 'C', 'C', '123', '123', 'Cayey', 124, '123', 'c@gmail.com', 'Son', ''),
(4, 'Berto', 'Gutierrez', '2008-02-17', 12, '1234', 'Female', 'White', 'Married', 'SSS', 'Catholic', 'cambioono@gmail.com', 'Student', '1212', 'dqwd', 123, 'Aguas Buenas', '123-123-1234', '321-321-3214', 'Diabetes,Carpal Tunnel,High Pressure ,Low Pressure', 'Heart/Cardiac Problems,Skeletal Trauma,Varicose Veins,Blood Clots', 'Aspirin,Penniscillin,Iodine', 'N/a', 'N/a', 'N/a', '', '', '', 'Yes', 'chest', 'Jones', 'chest pain', 'Basketball', 'No', '4', 'D', 'D', '123', '123', 'Carolina', 123, '123', 'd@hotmail.com', 'Daughter', ''),
(5, 'Angel', 'Benevolento', '1995-02-21', 25, '1234', 'Female', 'Hispanic or Latino', 'Married', 'SSS', 'Catholic', 'cambioono@gmail.com', 'Student', 'Casa de al lado', '2323', 123455, 'Utuado', '123-123-1234', '321-321-3214', 'Digistive Problems,Fatigue,Depression,Anxiety,Chest Pain', 'High Pressure ,Low Pressure,Joint Problems,Respiratory Problem,Spinal Problem,Arthritis,Circulatory Problems', 'Iodine,Sulfa,Insulin', 'Otra ', 'Condicion', 'mas ', '', '', '', 'Yes', 'No recuerdo', 'Dr.Weber', 'Malestar', 'Dos veces al dia cardio', 'No', '7', 'B', 'B', '123', '123', 'Carolina', 1234, '123', 'b@hotmail.com', 'Son', ''),
(7, 'Willy', 'Wonka', '2011-02-16', 9, '1234', 'Male', 'Asian', 'Married', 'SSS', 'Adventista', 'cambioono@gmail.com', 'Chocolatero', 'La fabrica de', 'Willy wonka', 2351, 'Aguadilla', '123-123-1234', '321-321-3214', 'Diabetes,Carpal Tunnel,High Pressure ', 'High Pressure ,Low Pressure', 'Penniscillin', '', '', '', '', '', '', 'No', 'No recuerdo', '', 'w', 'Basketball', 'No', '10', 'Hola', 'COmo', 'los campos', 'de la ciudad', 'Utuado', 324, '2345', 'estas@hotmail.com', 'Son', ''),
(8, 'Rediseno', 'Quehice', '2017-05-10', 3, '1234', 'Female', 'White', 'Married', 'MCS', 'Catholic', 'cambioono@gmail.com', 'Estudiante', 'Tu sabes', ' donde es', 12345, 'Arroyo', '123-123-1234', '321-321-3214', '', '', '', 'N/a', 'N/a', 'N/a', '', '', '', 'No', 'chest', 'Deerrreeee', 'Malestar', 'Basketball', 'Yes', '10', 'J', 'J', '123', '123', 'Vieques', 123, '123', 'j@hotmail.com', 'Mom', ''),
(10, 'Ultimapo', 'Runo', '2010-06-17', 10, '1234', 'Other', 'Asian', 'Married', 'Reforma', 'Adventista', 'jijijjij@gmail.com', 'Editando', 'Editando', 'Editando', 3, 'Aguada', '1', '1', 'Carpal Tunnel,High Pressure ,Low Pressure,Respiratory Problem, Editando', 'Skeletal Trauma,Varicose Veins, Editando', 'Penniscillin, Editando', 'N/Editando', 'Editando', 'N/Editando', 'Editando', 'Editando', 'Editando', 'No', 'chest', 'Jijijijij', 'chest pain', 'Dos veces al dia cardio', 'No', '10', 'Quien', 'Merescata', 'tu sabes', 'donde es', 'Aguas Buenas', 12332, '1234', 'quienmerescata@gmai.com', 'Son/Daughter', ''),
(11, 'Chito', 'Bono', '2015-06-16', 5, '1234', 'Male', 'White', 'Married', 'MCS', 'Catholic', 'chitoelbonito@gmail.com', 'Chocolatero', '1212', 'dqwd', 123, 'Bayamón', '1234123123', '321-321-3214', 'Diabetes,Carpal Tunnel', 'Diabetes,Low Pressure', 'Aspirin', 'v', 'v', 'v', NULL, NULL, NULL, 'No', 'No recuerdo', 'c', 'c', 'c', 'Yes', '9', 'Angel', 'Vovo', 'Casa de al lado', '2323', 'Aibonito', 123455, '1234123123', 'dsqwd@gmail.com', 'Son/Daughter', 'hola');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`numEmployee`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointmentID`);

--
-- Indexes for table `nurses`
--
ALTER TABLE `nurses`
  ADD PRIMARY KEY (`numEmployee`);

--
-- Indexes for table `patientProfile`
--
ALTER TABLE `patientProfile`
  ADD PRIMARY KEY (`patientID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `numEmployee` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123475;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `nurses`
--
ALTER TABLE `nurses`
  MODIFY `numEmployee` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123475;

--
-- AUTO_INCREMENT for table `patientProfile`
--
ALTER TABLE `patientProfile`
  MODIFY `patientID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
