CREATE table caradmins(
                          user_id int not null auto_increment,
                          first_name varchar (255),
                          last_name varchar (255),
                          username varchar (255),
                          password varchar (255),
                          primary key (user_id)
);
CREATE table clubmembers(
                          ID int not null auto_increment,
                          fullname varchar (255),
                          make varchar (255),
                          model varchar (255),
                          phone varchar (255),
                          plate varchar (255),
                          primary key (ID)
);
INSERT into clubmembers(fullname, make, model, plate, phone)
VALUES
    ('James May', 'Honda', 'Civic Type-R', 'CNCD5487', '2891239876')
    ('Jeremy Clarkson', 'Land Rover', 'Range Rover', 'PWRS1982', '9054843518')
    ('Richard Hammond', 'Ford', 'Mustang', 'ABUK5610', '4163219007');