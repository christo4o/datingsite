/*
Name: Christopher O'Marra
Course Code: WEBD3201
Date: 2017-09-08
Filename: users.sql
*/
DROP TABLE IF EXISTS users;

CREATE TABLE users(
  user_id VARCHAR(20) PRIMARY KEY,
  password VARCHAR(32) NOT NULL,
  user_type VARCHAR(2) NOT NULL,
  email_address VARCHAR(255) NOT NULL,
  first_name VARCHAR(128) NOT NULL,
  last_name VARCHAR(128) NOT NULL,
  birth_date DATE NOT NULL,
  enrol_date DATE NOT NULL,
  last_access DATE NOT NULL
);
INSERT INTO users(user_id, password, user_type, email_address, first_name, last_name, birth_date, enrol_date, last_access)
VALUES(
  'jdoe',
  '179ad45c6ce2cb97cf1029e212046e81', /* 'testpass' */
  'M',
  'jdoe@durhamcollege.ca',
  'John',
  'Doe',
  '1987-10-3',
  '2017-1-1',
  '2017-2-1');
INSERT INTO users(user_id, password, user_type, email_address, first_name, last_name, birth_date, enrol_date, last_access)
VALUES(
  'christo4o',
  '841c4221c2e7e0cefbc0392a35222512', /* 'testpass2' */
  'M',
  'christopher.omarra@durhamcollege.ca',
  'Christopher',
  'OMarra',
  '1994-07-07',
  '2017-1-1',
  '2017-2-1');
INSERT INTO users(user_id, password, user_type, email_address, first_name, last_name, birth_date, enrol_date, last_access)
VALUES(
  'jwayne',
  '6c644fd7fc2fb1ac54c7f537f45ea017', /* 'testpass3' */
  'F',
  'jwayne@durhamcollege.ca',
  'Jill',
  'Wayne',
  '1999-1-6',
  '2017-1-1',
  '2017-2-1');
INSERT INTO users(user_id, password, user_type, email_address, first_name, last_name, birth_date, enrol_date, last_access)
VALUES(
  'shill',
  '6ad2c4c9a4dad8189a4def0470c7ff83', /* 'testpass4' */
  'F',
  'shill@durhamcollege.ca',
  'Sam',
  'Hill',
  '1956-4-4',
  '2017-1-1',
  '2017-2-1');
