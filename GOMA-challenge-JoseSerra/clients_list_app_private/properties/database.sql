CREATE TABLE users (
    id int not null primary key auto_increment,
    name text not null,
    email text not null,
    phone int not null,
    address text not null,
    location text not null,
    country text not null
    );