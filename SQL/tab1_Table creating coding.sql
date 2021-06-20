CREATE TABLE tab1
(
    item_id integer NOT NULL AUTO_INCREMENT,
    item_name varchar(30) NOT NULL,
    quantity integer NOT NULL,
    price float NOT NULL,
    item_description varchar(100) NOT NULL,
    item_code varchar(78)NOT NULL,
    CONSTRAINT pk_tab1_001 PRIMARY KEY(item_id)
)