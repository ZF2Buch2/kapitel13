DROP TABLE IF EXISTS sessions;
CREATE TABLE sessions (
  id varchar(32) NOT NULL,
  name varchar(32) DEFAULT NULL,
  data text DEFAULT NULL,
  modified integer DEFAULT NULL,
  lifetime integer DEFAULT NULL,

  CONSTRAINT sessions_id PRIMARY KEY(id)
);

﻿DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id integer NOT NULL,
  name varchar(32) DEFAULT NULL,
  pass varchar(32) DEFAULT NULL,

  CONSTRAINT users_id PRIMARY KEY(id)
);

INSERT INTO users VALUES (1,'luigi','e9da82f4c252e7f1745ae88f2624fc07');

