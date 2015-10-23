using website;

CREATE TABLE users{
user_id int(11) primary key auto increment,
email varchar2(100) not null unique,
password varchar2(10) not null,
username varchar2(100),
active int(11)
};