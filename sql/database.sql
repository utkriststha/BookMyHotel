DROP DATABASE hotelbookingsystem;

CREATE DATABASE hotelbookingsystem;

Create table address(
  street_name varchar(255) Not null,
  suburb varchar(255),
  state varchar(255),
  postcode int(11),
  city varchar(255),
  country varchar(255),
  hotel_id int(11),
  Primary Key (street_name,suburb)
);

CREATE TABLE admin(
  admin_id int(11) NOT Null PRIMARY KEY AUTO_INCREMENT,
  first_name varchar(255),
  last_name varchar(255),
  admin_email varchar(255),
  admin_password varchar(255)
);

CREATE TABLE booking(
	booking_id int(11) NOT Null PRIMARY KEY AUTO_INCREMENT,
  hotel_id int(11),
  user_id int(11),
  numberOfGuest varchar(11),
  total_amount varchar(11),
  booking_date varchar(255),
  check_in_date varchar(255),
  check_out_date varchar(255)
);

Create table hotels(
  hotel_id int(11) Primary Key Not null Auto_Increment,
  hotel_name varchar(255),
  hotel_description text,
  category varchar(255),
  rating int(11),
  review int(11)
);

Create table payment(
  payment_id int(11) Primary Key Auto_Increment Not Null,
  first_name varchar(255),
  last_name varchar (255),
  email_address varchar(255),
  card_number varchar(255),
  expiry_date int(11)
);

Create table rooms(
  room_id int(11) Primary Key Not Null Auto_Increment,
  room_number int(11),
  capacity int(11),
  availability varchar(255),
  room_rate int(11),
  hotel_id int(11)
);

Create table users(
  user_id int(11) Primary Key Not Null Auto_Increment,
  first_name varchar(255),
  last_name varchar(255),
  user_email varchar(255),
  user_uid varchar(255),
  user_password varchar (255)
);

CREATE TABLE user_profile(
	userID int (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title varchar(5),
    firstName varchar(255),
    lastName varchar(255),
    gender varchar(8),
    DOB varchar(255),
    country varchar(255),
    username varchar(255),
    email varchar(255),
    phoneNumber varchar(11),
    user_id int(11)
);

Insert into hotels (hotel_name, hotel_description, category, rating, review)
Values ("Hotel Nepal","It is a hotel located in Nepal.  It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.","Resort" ,7,100),

("Hotel Sydney","This is a hotel located in Sydney. Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.","Villa",5,120),

("Meriton Suites","TThis hotel has multiple properties all around Sydney. Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.","City View",9,2000),

("Hotel Shangri-La","This is a luxurious hotel. Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.","City View",8,1800),

("Airport Hotel","This hotel is located near Sydney. Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.","City View",3,10),

("Hilton Sydney","This is a 5-star hotel with a pool & a bar. Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.","Beachside",7,100);

Insert into address (street_name, suburb, state, postcode, city,country, hotel_id)
Values ("70 Woids Avenue","Allawah","NSW",2218,"Sydney","Australia",1),
("34 Chapel Street","Rockdale","NSW",2216,"Sydney","Australia",2),
("528 Kent Street","Townhall","NSW",2000,"Sydney","Australia",3),
("176 Cumberland Street","The Rocks","NSW",2000,"Sydney","Australia",4),
("185 Princes Highway","Arncliffe","NSW",2205,"Sydney","Australia",5),
("488 George Street","Townhall","NSW",2000,"Sydney","Australia",6);

Insert into admin (first_name, last_name, admin_email, admin_password)
Values ("Raymon","Shrestha","raymon@admin.com","password12"), 
("Utkrist","Shrestha","utkrist@admin.com","password1"),
('Sujan', 'Ale', 'sujan@admin.com', 'password3'), 
('Umair', 'Elahi', 'umair@admin.com', 'password4'), 
('Tharindu', 'Aklanka', 'tharindu@admin.com', 'password5');

Insert into rooms (room_number, capacity, availability, room_rate, hotel_id )
Values (101,3,"true",300, 1),
(101,2,"true",250, 2),
(101,1,"true",175, 3),
(102,2,"true",265, 4),
(102,4,"true",450, 5),
(103,2,"true",275, 2);