-- ==========================================================
-- Web Application Development Lab: Assignment - 6 (MySQL)
-- ==========================================================

-- Step 0: Create database with your SIC number and use it
-- NOTE: Replace 'YOUR_SIC_NUMBER' below with your actual SIC number
-- (e.g. if your SIC number is 12345, use: CREATE DATABASE IF NOT EXISTS SIC_12345;)
CREATE DATABASE IF NOT EXISTS YOUR_SIC_NUMBER;
USE YOUR_SIC_NUMBER;

-- ==========================================================
-- Task 1: Create the employee table and insert the records.
-- ENO should be auto increment and primary key.
-- ==========================================================
CREATE TABLE employee (
    ENO INT AUTO_INCREMENT PRIMARY KEY,
    ENAME VARCHAR(50) NOT NULL,
    SALARY DECIMAL(10, 2) NOT NULL,
    DNO INT NOT NULL
);

INSERT INTO employee (ENAME, SALARY, DNO) VALUES
('Suman', 45000.00, 101),
('Aditya', 35000.00, 102),
('Ankit', 42000.00, 102),
('Rajan', 55000.00, 101),
('Ananya', 25000.00, 103),
('Narayan', 60000.00, 101),
('Smita', 28000.00, 103);

-- ==========================================================
-- Task 2: Create the department table and insert the records.
-- DID must be primary key.
-- ==========================================================
CREATE TABLE department (
    DID INT PRIMARY KEY,
    DNAME VARCHAR(50) NOT NULL
);

INSERT INTO department (DID, DNAME) VALUES
(101, 'R&D'),
(102, 'Accounts'),
(103, 'HR');

-- ==========================================================
-- Task 3: Display the Employee name, salary and department number.
-- ==========================================================
SELECT ENAME, SALARY, DNO
FROM employee;

-- ==========================================================
-- Task 4: Display the employee details in descending order of their salary.
-- ==========================================================
SELECT *
FROM employee
ORDER BY SALARY DESC;

-- ==========================================================
-- Task 5: Display the total salary expenditure of the company in a year.
-- ==========================================================
SELECT SUM(SALARY) * 12 AS Annual_Salary_Expenditure
FROM employee;

-- ==========================================================
-- Task 6: How much salary Ankit is getting?
-- ==========================================================
SELECT SALARY
FROM employee
WHERE ENAME = 'Ankit';

-- ==========================================================
-- Task 7: Who are the employees working for dno 101 or 102?
-- ==========================================================
SELECT *
FROM employee
WHERE DNO IN (101, 102);

-- ==========================================================
-- Task 8: Display the employee id, name and the department name
-- for which they are working.
-- ==========================================================
SELECT e.ENO, e.ENAME, d.DNAME
FROM employee e
JOIN department d ON e.DNO = d.DID;

-- ==========================================================
-- Task 9: Display the employee details who are working for HR Department.
-- ==========================================================
SELECT e.*
FROM employee e
JOIN department d ON e.DNO = d.DID
WHERE d.DNAME = 'HR';

-- ==========================================================
-- Task 10: Display the employee details working with Narayan.
-- ==========================================================
SELECT *
FROM employee
WHERE DNO = (SELECT DNO FROM employee WHERE ENAME = 'Narayan')
  AND ENAME <> 'Narayan';

-- ==========================================================
-- Task 11: Display the names of employees whose name starts with 'A'.
-- ==========================================================
SELECT ENAME
FROM employee
WHERE ENAME LIKE 'A%';

-- ==========================================================
-- Task 12: Find the employee details who is getting highest salary.
-- ==========================================================
SELECT *
FROM employee
WHERE SALARY = (SELECT MAX(SALARY) FROM employee);

-- ==========================================================
-- Task 13: Display the department name and number of employees in each department.
-- ==========================================================
SELECT d.DNAME, COUNT(e.ENO) AS Total_Employees
FROM department d
LEFT JOIN employee e ON d.DID = e.DNO
GROUP BY d.DID, d.DNAME;

-- ==========================================================
-- Task 14: Display the department wise highest salary.
-- ==========================================================
SELECT d.DNAME, MAX(e.SALARY) AS Highest_Salary
FROM department d
JOIN employee e ON d.DID = e.DNO
GROUP BY d.DID, d.DNAME;

-- ==========================================================
-- Task 15: Give 3% hike to all the employees and update the salary.
-- ==========================================================
UPDATE employee
SET SALARY = SALARY * 1.03;

-- ==========================================================
-- Task 16: Find the department-wise highest salary (post-hike).
-- ==========================================================
SELECT d.DNAME, MAX(e.SALARY) AS Highest_Salary
FROM department d
JOIN employee e ON d.DID = e.DNO
GROUP BY d.DID, d.DNAME;

-- ==========================================================
-- Task 17: Update the department name HR to Human Resource.
-- ==========================================================
UPDATE department
SET DNAME = 'Human Resource'
WHERE DNAME = 'HR';

-- ==========================================================
-- Task 18: Delete the details of Rajan by accessing his employee ID.
-- ==========================================================
DELETE FROM employee
WHERE ENO = 4;
