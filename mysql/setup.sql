GRANT ALL ON *.* TO root@'%';

CREATE TABLE note(
   id INT NOT NULL AUTO_INCREMENT,
   title VARCHAR(128) NOT NULL,
   content TEXT NOT NULL,
   created_at DATETIME,
   INDEX (title),
   PRIMARY KEY ( id )
);
