SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS 'elogin' (
'id' int(10) NOT NULL AUTO_INCREMENT,
'username' varchar(50) NOT NULL,
'password' varchar(50) NOT NULL,
'MobileNo' int(20) NOT NULL,
'email' varchar(50) NOT NULL,
PRIMARY KEY('id')
)ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO 'elogin'('id','username','password','MobileNo','email') 
VALUES(1,'Bluechink','bluechink',987687968,'bluechink@gmail.com');

CREATE TABLE IF NOT EXISTS 'mrdetails' (
'empid' int(20) NOT NULL,
'title' varchar(50) NOT NULL,
'memberdate' date NOT NULL,
'starttime' time(6) NOT NULL,
'endtime' time(6) NOT NULL,
'snacks' varchar(50) NOT NULL,
PRIMARY KEY ('empid')
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO 'mrdetails'('empid','title','memberdate','starttime','endtime','snacks')
VALUES (1,'Meeting','2020-03-04','02:02:00','03:03:00','Tea');