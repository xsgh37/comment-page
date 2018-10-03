# comment-page
This is just a simple page where people can comment and read other's comments.


## Preparations

Add your root's password in the _db.inc.php_ file.

Insert following code in your MySQL Workbench or PHPmyAdmin:

**CREATE DATABASE** ``webapp``;

**CREATE TABLE** ``webapp``.``comments`` (

  id INT AUTO_INCREMENT PRIMARY KEY,
  
  comment VARCHAR(240)
  
);
