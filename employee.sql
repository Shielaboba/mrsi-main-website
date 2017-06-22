CREATE TABLE people (person_id SERIAL PRIMARY KEY, name VARCHAR (40), address VARCHAR (150), birthday DATE);

CREATE TABLE companies (company_id SERIAL PRIMARY KEY, company_name VARCHAR (40), company_address VARCHAR (150));

CREATE TABLE empHistory (emp_id SERIAL PRIMARY KEY, emp_CompanyHistory INTEGER REFERENCES companies (company_id), emp_PersonId INTEGER REFERENCES people (person_id), empHistory_startDate DATE, empHistory_endDate DATE);

CREATE TABLE empSalary (sal_id SERIAL PRIMARY KEY, sal_PersonId INTEGER REFERENCES people(person_id), sal_CompanyId INTEGER REFERENCES companies(company_id), sal_date DATE);

CREATE TABLE empHierarchy (hier_id SERIAL PRIMARY KEY, hier_History INTEGER REFERENCES empHistory(emp_id), hier_People INTEGER REFERENCES people(person_id));

CREATE TABLE time_clock (time_clock_id SERIAL PRIMARY KEY, log_in timestamp, log_out timestamp, emp_History INTEGER REFERENCES empHistory(emp_id));



INSERT INTO people(name, address, birthday) VALUES ('Marl', 'Cebu City', '1997-12-09');
INSERT INTO people(name, address, birthday) VALUES ('Shiela', 'Apas City', '1997-07-15');
INSERT INTO people(name, address, birthday) VALUES ('Rjay', 'Canduman', '1997-08-01');


INSERT INTO companies(company_name, company_address) VALUES ('Coding Avenue',);
