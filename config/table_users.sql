CREATE TABLE users(
      id BIGSERIAL PRIMARY KEY,
      firstname VARCHAR(30)NOT NULL,
 lastname VARCHAR(30)NOT NULL,
 mobile_number VARCHAR(20) NOT NULL,
 ide_number VARCHAR(15) NOT NULL,
 address TEXT NULL,
birthday DATE NULL,
email VARCHAR(200) NOT NULL UNIQUE,
password TEXT NOT NULL,
status BOOLEAN NOT NULL DEFAULT TRUE,
created_at TIMESTAMPTZ NOT NULL DEFAULT now(),
update_at TIMESTAMPTZ NOT NULL DEFAULT now(),
deleted_at TIMESTAMPTZ NOT NULL
);


INSERT INTO users (firstname,
                   lastname,
                   mobile_number,
                     email,
                   password,
           )
          
 VALUES(
        'Darcy',
        'Rodriguez',
        '3128570543',
        'd3116981927@gmail.com',
        '1234'
);