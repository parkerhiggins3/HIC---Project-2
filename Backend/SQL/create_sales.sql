CREATE TABLE customer (
    user_id VARCHAR(99),
    first_name VARCHAR(99) NOT NULL,
    last_name VARCHAR(99) NOT NULL,
    
    street_number VARCHAR(99),
    street_name VARCHAR(99),
    street_apt VARCHAR(99),
    city VARCHAR(99),
    state VARCHAR(99),
    zip VARCHAR(99),
    
    email VARCHAR(99) NOT NULL,
    phone_number VARCHAR(99) NOT NULL,
    
    PRIMARY KEY (user_id)
);

CREATE TABLE category(
    category_id VARCHAR(99),
    category_name VARCHAR(99),
    category_description VARCHAR(99),
    PRIMARY KEY(category_id)
);

CREATE TABLE payment(
    card_number VARCHAR(99),
    security_code VARCHAR(99),
    expiration_date DATE,
    
    first_name VARCHAR(99) NOT NULL,
    last_name VARCHAR(99) NOT NULL,
    
    street_number VARCHAR(99),
    street_name VARCHAR(99),
    street_apt VARCHAR(99),
    city VARCHAR(99),
    state CHAR(99),
    zip VARCHAR(99),

    PRIMARY KEY(card_number)
);

CREATE TABLE product(
    product_id VARCHAR(99),
    product_name VARCHAR(99),
    price DECIMAL,
    quantity INT,
    category_id VARCHAR(99),
    size VARCHAR(99),
    color VARCHAR(99),
    material VARCHAR(99),
    product_description VARCHAR(99),
    product_image TEXT(65000),
    

    PRIMARY KEY (product_id),
    FOREIGN KEY(category_id) REFERENCES category(category_id)
);

CREATE TABLE orders(
    order_id VARCHAR(99),
    user_id  VARCHAR(99),
    subtotal DECIMAL,
    taxes DECIMAL,
    total DECIMAL,
    card_number VARCHAR(99),
    PRIMARY KEY(order_id),
    FOREIGN KEY(user_id) REFERENCES customer(user_id)
);

CREATE TABLE product_to_order(
    product_id VARCHAR(99),
    order_id   VARCHAR(99),
    PRIMARY KEY(product_id, order_id),
    FOREIGN KEY(product_id) REFERENCES product(product_id),
    FOREIGN KEY(order_id) REFERENCES orders(order_id)
);

CREATE TABLE shopping_cart(
       cart_id VARCHAR(99),
       product_id VARCHAR(99),
       PRIMARY KEY(cart_id),
       FOREIGN KEY(product_id) REFERENCES product(product_id)
);