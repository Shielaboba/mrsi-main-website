CREATE TABLE people (
    empId SERIAL PRIMARY KEY, 
    name VARCHAR (40),
    address VARCHAR (150),
    bday DATE
);

CREATE TABLE companies (
    comId SERIAL PRIMARY KEY,
    name VARCHAR (40),
    address VARCHAR (150)
);

CREATE TABLE empHistory (
    histId SERIAL PRIMARY KEY,
    comID INTEGER REFERENCES companies (comId),
    empId INTEGER REFERENCES people (empId),
    startDate DATE,
    endDate DATE
);

CREATE TABLE empSalary (
    salId SERIAL PRIMARY KEY,
    histId INTEGER REFERENCES empHistory(histId),
    salary DECIMAL,
    salDate DATE
);

CREATE TABLE empHierarchy (
    hierId SERIAL PRIMARY KEY,
    histId INTEGER REFERENCES empHistory(histId),
    empId INTEGER REFERENCES people(empId)
);

CREATE TABLE timeclock (
    tcId SERIAL PRIMARY KEY,
    login timestamp,
    logout timestamp,
    histId INTEGER REFERENCES empHistory(histId)
);


INSERT INTO people(name, address, bday) VALUES ('Marl', 'Cebu City', '1997-12-09');
INSERT INTO people(name, address, bday) VALUES ('Shiela', 'Apas City', '1997-07-15');
INSERT INTO people(name, address, bday) VALUES ('Rjay', 'Canduman', '1997-08-01');
INSERT INTO people(name, address, bday) VALUES ('Jhon Snow', 'Castle Black',NULL);

INSERT INTO companies(name, address) VALUES ('Coding Avenue','Mandaue City');
INSERT INTO companies(name, address) VALUES ('Symph','Urgello');
INSERT INTO companies(name, address) VALUES ('Headstrong Solutions','Mandaue City');
INSERT INTO companies(name, address) VALUES ('Accenture','It Park');

INSERT INTO empHistory(comId,empId, startDate, endDate) VALUES (1, 1, '2000-08-01','2000-08-01');
INSERT INTO empHistory(comId,empId, startDate, endDate) VALUES (2, 2, '2001-08-01','2002-05-09');
INSERT INTO empHistory(comId,empId, startDate, endDate) VALUES (3, 3, '2002-08-01',NULL);
INSERT INTO empHistory(comId,empId, startDate, endDate) VALUES (4, 4, '2000-08-01','2008-08-07');
INSERT INTO empHistory(comId,empId, startDate, endDate) VALUES (1, 4, '2000-08-01',NULL);

INSERT INTO empSalary(histId, salary, salDate) VALUES (1,2000, '2000-10-20');
INSERT INTO empSalary(histId, salary, salDate) VALUES (2,100000, '2001-10-20');
INSERT INTO empSalary(histId, salary, salDate) VALUES (3,200, '2002-10-20');
INSERT INTO empSalary(histId, salary, salDate) VALUES (4,1, '2000-10-20');

INSERT INTO empHierarchy(histId, empId) VALUES (1, 1);
INSERT INTO empHierarchy(histId, empId) VALUES (2, 2);
INSERT INTO empHierarchy(histId, empId) VALUES (3, 3);
INSERT INTO empHierarchy(histId, empId) VALUES (4, 4);
INSERT INTO empHierarchy(histId, empId) VALUES (1, 1);

INSERT INTO timeclock(login,logout,histId) VALUES ('2000-10-20 08:00:00', '2000-10-20 05:00:00', 1);
INSERT INTO timeclock(login,logout,histId) VALUES ('2002-08-01 08:00:00', '2002-08-01 05:00:00', 2);
INSERT INTO timeclock(login,logout,histId) VALUES ('2001-10-20 08:00:00', '2001-10-20 05:00:00', 3);
INSERT INTO timeclock(login,logout,histId) VALUES ('2000-10-20 08:00:00', '2000-10-20 05:00:00', 4);
