
SHOW DATABASES;

USE programacion_en_ambiente_web;

CREATE TABLE tbl_users (
    dni INT NOT NULL,
    password VARCHAR(100) NOT NULL,
    PRIMARY KEY (dni)
);

INSERT INTO tbl_users (dni, password) VALUES (41545496, 'nehemias');
INSERT INTO tbl_users (dni, password) VALUES (12345677, 'zacarias');
INSERT INTO tbl_users (dni, password) VALUES (20202020, 'gustavo');
INSERT INTO tbl_users (dni, password) VALUES (44553634, 'rosana');

SELECT * FROM tbl_users;

SHOW TABLES;

CREATE TABLE tbl_users_data (
    dni INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);