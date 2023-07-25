-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2023 at 05:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `question_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `it101g`
--

CREATE TABLE `it101g` (
  `id` int(6) UNSIGNED NOT NULL,
  `unit` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `mark` varchar(50) NOT NULL,
  `question` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `it101g`
--

INSERT INTO `it101g` (`id`, `unit`, `level`, `mark`, `question`, `image`) VALUES
(2, '1', 'R', '2', 'What is C++ ?', ''),
(3, '1', 'R', '2', 'Enlist memory management operator.', ''),
(4, '1', 'R', '2', 'Enlist memory dereferencing operatots.', ''),
(5, '1', 'R', '2', 'State the features of C++.', ''),
(6, '1', 'R', '2', 'Define the type of inheritance it is.', 'inheritance1.jpg'),
(8, '2', 'R', '2', 'Define static data members and write syntax.', ''),
(9, '2', 'R', '2', 'What is static member function ?', ''),
(10, '2', 'R', '2', 'Define friend function.', ''),
(11, '2', 'R', '2', 'Define Inline function.', ''),
(12, '2', 'R', '2', 'State the syntax to define the function outside of the class.', ''),
(13, '3', 'R', '2', 'Define Constructor. Give synatx', ''),
(14, '3', 'R', '2', 'Define Destructor.Give syntax.', ''),
(15, '3', 'R', '2', 'Enlist any four types of constructor.', ''),
(16, '3', 'R', '2', 'What is Copy  constructor and Give syntax.', ''),
(17, '3', 'R', '2', 'What is Constructor Overloading ?', ''),
(18, '3', 'R', '2', 'Enlist various visibility modes in c++?', ''),
(19, '4', 'R', '2', 'Define this pointer.', ''),
(20, '4', 'R', '2', 'Enlist any four pointer arithmetic operation ?', 'Inheritance4.jpg'),
(21, '4', 'R', '2', 'Define Polymorphism and write its types.', ''),
(22, '4', 'R', '2', 'Define virtual function.', ''),
(23, '4', 'R', '2', 'Define pure virtual function.', ''),
(24, '4', 'R', '2', 'Define Run time polymorphism.', ''),
(25, '5', 'R', '2', 'Define CMD.', ''),
(26, '5', 'R', '2', 'State File stream operator.', ''),
(27, '5', 'R', '2', 'How to handle dynamic errors ?', ''),
(28, '5', 'R', '2', 'What is file manipulation ?', ''),
(29, '5', 'R', '2', 'What is Error handling ?', ''),
(30, '5', 'R', '2', 'State various file opening modes.', ''),
(31, '6', 'R', '2', 'Define namespaces.', ''),
(32, '6', 'R', '2', 'What is Exception handling ?', ''),
(33, '6', 'R', '2', 'Enlist various operation perform on file.', ''),
(34, '6', 'R', '2', 'Describe any four file errors handling function.', ''),
(35, '6', 'R', '2', 'Define file pointers with example.', ''),
(36, '6', 'R', '2', 'What is Throwing mechanism ?', ''),
(37, '1', 'U', '3', 'Describe any four concepts of objects oriented programming.', ''),
(38, '1', 'U', '3', 'Describe any four benefits of object oriented programming.', ''),
(39, '1', 'U', '3', 'Describe any four features of object oriented programming.', ''),
(40, '1', 'U', '3', 'Enlist any eight application of object oriented programming.', ''),
(41, '1', 'U', '3', 'Differentiate between OOP and POP(any eight points).', ''),
(42, '1', 'U', '3', 'Describe structure of C++ program.', ''),
(43, '1', 'A', '3', 'Write a program to show use of scope resolution operator without using class and object.', ''),
(44, '1', 'A', '3', 'Write a program for Arithmetic oprations.', ''),
(45, '1', 'A', '3', 'Write a program with memory management operators.', ''),
(46, '1', 'A', '3', 'Write a program with memory dereferencing operators.', ''),
(47, '1', 'A', '3', 'Write a program using scope resolution operator.', ''),
(48, '1', 'A', '3', 'Describe conditional operator with example.', ''),
(49, '2', 'U', '3', 'Describe with example.i) static data members ii) static member functions.', ''),
(50, '2', 'U', '3', 'State the merits and demerits of defining inline function.', ''),
(51, '2', 'U', '3', 'Describe Friend function with syntax.', ''),
(52, '1', 'U', '3', 'Describe Memory allocation for objects.', ''),
(53, '2', 'U', '3', 'Describe Inline Function with syntax.', ''),
(54, '2', 'U', '3', 'Define array of object with example.', ''),
(55, '2', 'A', '3', 'Develop a program to create a class college which has name ,code, and address as data members and getdata() and showdata() as memberfunction to read and display information.', ''),
(56, '2', 'A', '3', 'Define Inline function with example.', ''),
(57, '2', 'A', '3', 'Write a program to show use of static member function.', ''),
(58, '2', 'A', '6', 'Write a program to create a class time which has data member as hr and min and member function as getd() and showd() to read and display result. Implement sum() as member\r\n function to perform addition between two objects. Pass one object as an argument t', ''),
(59, '2', 'A', '6', 'Write a program to create a class distance which has data member as feet and inch and member function as getd() and showd() to read and display result. Implement sum() as member\r\n function to perform addition between two objects. Pass one object as an arg', ''),
(60, '2', 'A', '6', 'Write a program to show use of static data member.', ''),
(61, '2', 'A', '6', 'Write a program of object as function argument.', ''),
(62, '3', 'U', '3', 'Enlist any eight or four application of object oriented programming.', ''),
(63, '3', 'U', '3', 'State difference between Opp and Pop.', ''),
(64, '3', 'U', '3', 'Write a program to show use of scope resolution operator without using class and object', ''),
(65, '3', 'U', '3', 'Describe the structure of C++ program.', ''),
(66, '3', 'U', '3', 'Define class,objects.', ''),
(67, '3', 'U', '3', 'Define Static data members', ''),
(68, '3', 'A', '3', 'Define Static member function.', ''),
(69, '3', 'A', '3', 'Define friend function', ''),
(70, '3', 'A', '6', 'Write a program to find the factorial of entered number.', ''),
(71, '3', 'A', '6', 'State the merit and demerit of defining inline function (any 10 points).', ''),
(72, '3', 'A', '6', 'Enlist various access specifiers', ''),
(73, '3', 'A', '6', 'Write the program to justify the use of getdata() method.', ''),
(74, '3', 'A', '3', 'Write a program to pass the parameters from derived class constructor to base class constructor using concept of multiple inheritance.', ''),
(75, '3', 'A', '3', 'Write a program to pass the parameters from derived class constructor to base class constructor using concept of inheritance.', ''),
(76, '4', 'U', '3', 'Describe any  four pointer arithmetic opearator.', ''),
(77, '4', 'U', '3', 'Give any example to create a pointer for the data member. Assume any class.', ''),
(78, '4', 'U', '3', 'Develop a program to create a class and create a pointer foe object and using pointer object access member function.', ''),
(79, '4', 'U', '3', 'Write a program to create a class \"String\" and str1,str2 as character array and member function as getdata() to read two string.cat() to concatenate two string by creating pointer for each and display result.', ''),
(80, '4', 'A', '3', 'Describe polymorphism with example.', ''),
(81, '4', 'A', '3', 'Write a program for binary operator and unary opeartor.', ''),
(82, '4', 'A', '3', 'Describe the rules for Operator Overloading.', ''),
(83, '4', 'A', '3', 'Define pointer with example.', ''),
(84, '4', 'A', '6', 'Write a program for pointer to implement stack.', ''),
(85, '4', 'A', '6', 'Create pointer for any class .', ''),
(86, '4', 'A', '6', 'Write a program to implement array ', ''),
(87, '4', 'A', '6', 'Write a program for queue.', ''),
(88, '5', 'U', '3', 'Describe i)Compile time polymorphism ii)Run time polymorphism', ''),
(89, '5', 'U', '3', 'Differentiate between early binding and late binding.', ''),
(90, '5', 'A', '3', 'Differentiate between Runtime polymorphism and Compile time polymorphism.', 'Inheritance5.jpg'),
(91, '5', 'A', '3', 'Describe any 8 rules to overload operators.', ''),
(92, '5', 'A', '6', 'Write a program for function overloading.', ''),
(93, '5', 'A', '6', 'Write a program for run time polymorphism.', ''),
(94, '5', 'A', '6', 'Write a program for compile time polymorphism.', ''),
(95, '5', 'A', '6', 'Write a program for virtual function.', ''),
(96, '6', 'U', '3', 'Describe Exception handling.', ''),
(97, '6', 'U', '3', 'Write a program for Exception handling.', ''),
(98, '6', 'U', '3', 'Describe any two methods to open the file with example.', ''),
(99, '6', 'A', '3', 'Describe any four file opening modes.', ''),
(100, '6', 'A', '3', 'Describe any four file error handing function.', ''),
(101, '6', 'A', '3', 'Explain ant two methos to detect end of file.', ''),
(102, '6', 'A', '6', 'Write a program for file.', ''),
(103, '6', 'A', '6', 'Write a program for file pointer .', ''),
(104, '6', 'A', '6', 'Define exception handing with example.', ''),
(105, '6', 'A', '6', 'Write a program for file methods.\r\n', ''),
(106, '6', 'A', '6', 'Write a program for error handling function.', ''),
(107, '4', 'U', '2', 'What is Inheritance ?\r\n', 'Inheritance3.jpg'),
(109, '1', 'R', '2', 'What i s c++?', '2021-04-18.png'),
(110, '6', 'R', '6', 'define constructors', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `it101g`
--
ALTER TABLE `it101g`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `it101g`
--
ALTER TABLE `it101g`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
