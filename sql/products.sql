CREATE TABLE products {
    id int NOT NULL AUTO_INCREMENT,
    product_name varchar(255) NOT NULL,
    color varchar(255),
    src_img varchar(255),
    price money NOT NULL,
    
    primary key(id)
}