USE purplegr_wrwreservation;

DROP TABLE IF EXISTS order_info;

CREATE TABLE IF NOT EXISTS `order_info`
(
`order_num` int NOT NULL AUTO_INCREMENT,
`first` varchar(30) NOT NULL,
`last` varchar(30) NOT NULL,
`phone` varchar(12) NOT NULL,
`email` varchar(50) NOT NULL,
`set` varchar (40) NOT NULL,
`package` varchar (50) NOT NULL,
`hex_arbor` bit NOT NULL ,
`couch` bit NOT NULL ,
`wine_jugs` int NOT NULL ,
`gal_jugs` int NOT NULL ,
`clear_ball` bit NOT NULL ,
`blue_ball` bit NOT NULL ,
`delivery` bit NOT NULL ,
`cost` DECIMAL (10, 2) NOT NULL DEFAULT '0.00',
`wed_date` DATE NOT NULL,
`status` varchar(12),
PRIMARY KEY (`order_num`)
);

INSERT INTO `order_info`(`first`, `last`, `phone`, `email`, `set`,`package` ,`hex_arbor`,`couch`,
`wine_jugs`,`gal_jugs` ,`clear_ball`,`blue_ball`,`delivery`,`cost`,`wed_date`,`status`)
VALUES 
('Dee', 'Brecke', '206-555-9128', 'gatormonkey2124@gmail.com',  'Layered Arch', 'Full', 1, 0, 0, 0, 0, 0, 0, 1199, '2022-12-10', 'confirmed'),
('Stewart', 'Lovell', '425-999-9999', 'marinerfan@email.com', 'Layered Arch', 'Pick 6', 0, 1, 0, 0, 0, 0, 0, 848, '2022-12-17', 'unconfirmed'),
('Dale', 'Kanikkeberg', '425-687-8888', 'coderguy@email.com', 'Layered Arch', 'Pick 4', 0, 0, 0, 0, 0, 0, 0, 699, '2023-1-7', 'canceled' ),
('Elise', 'Appelhans-Visser', '206-555-7777', 'codinggal@email.com', 'Vintage Mirror', 'Platinum', 1, 0, 0, 0, 0, 0, 0, 1199, '2022-12-10', 'confirmed'),
('Tyler', 'Schrock', '253-288-3455', 'Tschrock@greenrivercollege.com', 'Vintage Mirror', 'Gold', 0, 1, 0, 0, 0, 0, 0, 898, '2022-12-17', 'unconfirmed'),
('Susan', 'Uland', '253-288-3455', 'SUland@greenrivercollege.com', 'Vintage Mirror', 'Pick 6',  0, 0, 0, 0, 0, 1, 0, 679, '2023-1-7', 'canceled'),
('Kendrick', 'Hang', '253-288-3455', 'KHang@greenrivercollege.com', 'Modern Round', 'Full', 0, 0, 0, 0, 0, 0, 0, 799, '2023-1-7', 'confirmed'),
('Andy', 'Orr', '253-288-3455', 'Aorr@greenrivercollege.com', 'Modern Round', 'Pick 6', 0, 1, 0, 0, 0, 0, 0, 798, '2023-1-14', 'unconfirmed'),
('Tina', 'Ostrander', '253-288-3455', 'TOstrander@greenrivercollege.com',  'Modern Round', 'Pick 4', 0, 0, 0, 0, 0, 0, 0, 599, '2023-1-22', 'confirmed'),
('Marcus', 'Absher', '206-579-6054', 'Mabsher@gmail.com', 'Rustic Wood', 'No Seating', 0, 0, 0, 0, 0, 0, 0, 245, '2023-1-22', 'confirmed'),
('Guinevere', 'Brecke', '253-579-3456', 'RedWriter@gmail.com',  'Dark Walnut', 'Pick 4', 0, 0, 0, 0, 0, 0, 0, 199, '2023-1-22', 'unconfirmed'),
('Karly', 'Rose', '253-579-6254', 'KRose@gmail.com', 'Dark Walnut', 'Full', 1, 1, 0, 0, 0, 0, 0, 748, '2023-1-22', 'confirmed');