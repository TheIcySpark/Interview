DROP TABLE IF EXISTS theTable;
CREATE TABLE theTable(
	id int,
    month varchar(255),
    col1 varchar(255),
    col2 varchar(255),
    col3 varchar(255),
    col4 varchar(255)
);
INSERT INTO theTable (id, month, col1, col2, col4) values (101, "jan", "A", "B", "B");
INSERT INTO theTable values (102, "feb", "C", "A", "G", "E");

