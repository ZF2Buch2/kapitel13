PRAGMA foreign_keys = OFF;
BEGIN TRANSACTION;
DROP TABLE sessions;
CREATE TABLE sessions (id varchar(32) primary key, name varchar(32), data text, modified integer, lifetime integer);
DROP TABLE users;
CREATE TABLE users (id integer primary key, name varchar(32), pass varchar(32));
INSERT INTO "users" VALUES(1,'luigi','e9da82f4c252e7f1745ae88f2624fc07');
COMMIT;
PRAGMA foreign_keys = ON;
