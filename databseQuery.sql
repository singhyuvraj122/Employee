# Name of database is "employee"
# Port number of database server is 3306
# User name is "root"
# Domain or address of server is "localhost"
# Password is <Put your password>  

show databases;

create table empData(
    empId int AUTO_INCREMENT,
    empFname varchar(15) not null,
    emplname varchar(15) not null,
    empAge decimal(2,0) not null,
    empGender char(1) not null,
    empCity varchar(20) not null,
    empState varchar(20) not null,
    empCountry varchar(20) not null,
    empEmail varchar(30) not null,
    empPhone decimal(10,0) not null,
    primary key(empId)
);

show tables;

describe empData;

select * from empData;