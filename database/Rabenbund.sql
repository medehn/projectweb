CREATE DATABASE Rabenbund;
GO

USE Rabenbund;
GO


CREATE TABLE Benutzer (
	 userid INT
	,fname VARCHAR (20)
	,lname VARCHAR (20)
	,username VARCHAR (20)
	,userpassword VARCHAR (18)
	,birthdate DATE
	,email VARCHAR (30)
	,adress VARCHAR (50)
	/*,adressnr INT*/
	,plz INT
	,ort VARCHAR (20)
	,funktion VARCHAR (100)
	,skills VARCHAR (100)
	,interests VARCHAR (100)
	,besucherid INT
	,PRIMARY KEY (userid)
);

CREATE TABLE Events (
	 eventid INT
	,eventname VARCHAR (50)
	,email VARCHAR (30)
	,tage INT
	,zelt VARCHAR (10)
	,car VARCHAR (10)
	,carseats INT
	,besucherid INT
	,besuchername VARCHAR (100)
	,sonstiges VARCHAR (100)
	,PRIMARY KEY (eventid)
);

CREATE TABLE Besucher (
	 besucherid INT
	,userid INT
	,eventid INT
	,PRIMARY KEY (besucherid)
	,FOREIGN KEY (userid) REFERENCES Benutzer (userid)
	,FOREIGN KEY (eventid) REFERENCES Events (eventid)
);

