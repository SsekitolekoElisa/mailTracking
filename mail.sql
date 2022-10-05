4 
-- creation of the database for posta Uganda mail delivery
CREATE DATABASE mail_deliverydb;

--connecting to db
USE mail_deliverydb;

--creating tables in the databases

--Branch Table

CREATE TABLE branch (
	branchNo int(5) primary key auto_increment,
	branch_code char(5) not null unique,
	brname varchar(20) not null,
	brlocation varchar(20) not null
);

--Client Table

CREATE TABLE client (
	clientNo int primary key auto_increment,
	boxnumber int not null unique,
	fname varchar(30) not null,
	lname varchar(30) not null,
	gender enum("M", "F") not null,
	email varchar(30),
	telnumber varchar(15) not null
);

--Staff Table

CREATE TABLE staff (
	staffNO int(5) primary key auto_increment,
	fname varchar(30) not null,
	lname varchar(30) not null,
	gender enum("M", "F") not null,
	email varchar(30) not null,
	telnumber varchar(15) not null,
	role enum("Admin", "Courier") not null,
	username varchar(30) not null unique,
	password varchar(30) not null,
	branchNo int not null
	
);

--Mail Table

CREATE TABLE mail (
	mail_id int primary key auto_increment,
	inTimedate datetime,
	outTimedate datetime,
	deliTimedate datetime,
	deliveredby int(5),
	addedby int(5) not null,
	addedTime timestamp not null,
	branchNo int(5) not null ,
	clientNo int not null
);




--Inserting Dummy Data For all the Tables

--Dummy Data for Branch Table
INSERT INTO branch (branchNo, branch_code, brname, brlocation)
VALUES
(null, "BR01", "Entebbe Branch", "Entebbe"),
(null, "BR02", "Gulu Branch", "Gule"),
(null, "BR03", "Jinja Branch", "Jinja"),
(null, "BR04", "Kampala Branch", "Kampala"),
(null, "BR05", "Mbarara Branch", "Mbarara");


--Dummy Data for Client Table
INSERT INTO client (clientNo, boxnumber, fname, lname, gender, email, telnumber )
VALUES
(null, 4311, "Wizire", "Ian", "M", "wizireian@gmail.com", "751111112"),
(null, 3264, "Ndibalekera", "Ann", "F", "ndibalekeraann@gmail.com", "772234564"),
(null, 3867, "Nakazzi", "Lydia", "F", "nakazzilydia@gmail.com", "712345621"),
(null, 4365, "Nambajja", "Joanita", "F", "nambajjajoanita@gmail.com", "700562345"),
(null, 3262, "Tusabe", "John", "M", "tusabejohn@gmail.com", "782969210"),
(null, 5100, "Nimusiima", "Olivia", "F", "nimusiimaolivia@gmail.com", "772401234"),
(null, 3270, "Kasibante", "Allan", "M", "kasibanteallan@gmail.com", "794567812"),
(null, 3054, "Mutesi", "Winnie", "F", "mutesiwinnie@gmail.com", "751567645"),
(null, 4752, "Nabbowa", "Valeria", "F", "nabbowavaleria@gmail.com", "701212134"),
(null, 4665, "Matovu", "Faisal", "M", "matovufaisal@gmail.com", "774897869"),
(null, 4501, "Lubwama", "Ian", "M", "lubwamaian@gmail.com", "702228675"),
(null, 4737, "Kamikazi", "Hellen", "F", "kamikazihellen@gmail.com", "772141312"),
(null, 2644, "Besigye", "Ian", "M", "besigyeian@gmail.com", "711090807"),
(null, 4648, "Nakazzi", "Brenda", "F", "nakazzibrenda@gmail.com", "784123456"),
(null, 4020, "Tusabe", "John", "M", "tusabejohn@gmail.com", "795615141"),
(null, 3843, "Ndagire", "Reginah", "F", "ndagirereginah@gmail.com", "747264197"),
(null, 3067, "Yiga", "Rodney", "M", "yigarodney@gmail.com", "785151554"),
(null, 2871, "Mwega", "Gilbert", "M", "mwegagilbert@gmail.com", "798325453"),
(null, 2261, "Luwedde", "Shubaiha", "M", "luweddeshubaiha@gmail.com", "774854962");


INSERT INTO client (clientNo, boxnumber, fname, lname, gender, email, telnumber )
VALUES
(null, 4992, "Nahulira", "Lucky", "F", "nahuliralucky@gmail.com", "790167691"),
(null, 5149, "Nahurira", "Elizabeth", "F", "nahuriraelizabeth@gmail.com", "780551841"),
(null, 5049, "Kiconco", "Precious", "F", "kiconcoprecious@gmail.com", "796337758"),
(null, 3339, "Kayaga", "Jesca", "F", "kayagajesca@gmail.com", "771746489"),
(null, 4859, "Nabisubi", "Vivian", "F", "nabisubivivian@gmail.com", "791294707"),
(null, 3671, "Ninsiima", "George", "M", "ninsiimageorge@gmail.com", "789289955"),
(null, 4010, "Nduhura", "Edgar", "M", "nduhuraedgar@gmail.com", "776612237"),
(null, 4007, "Muhumuza", "Rymon", "M", "muhumuzarymon@gmail.com", "789144963"),
(null, 4076, "Nakiweewa", "Shadia", "F", "nakiweewashadia@gmail.com", "779042200"),
(null, 2589, "Kakembo", "Collins", "M", "kakembocollins@gmail.com", "774542627"),
(null, 4034, "Aber", "Vannesa", "F", "abervannesa@gmail.com", "773150874"),
(null, 4686, "Mwesigwa", "Joshua", "M", "mwesigwajoshua@gmail.com", "791194059"),
(null, 3251, "Bamuke", "Jonathan", "M", "bamukejonathan@gmail.com", "782935667"),
(null, 3708, "Kiggundu", "Fahad", "M", "kiggundufahad@gmail.com", "789528731"),
(null, 4169, "Mwebya", "Tumusiime", "M", "mwebyatumusiime@gmail.com", "786122569"),
(null, 4024, "Gwanyi", "Brian", "M", "gwanyibrian@gmail.com", "781322941"),
(null, 2555, "Muhumuza", "Victor", "M", "muhumuzavictor@gmail.com", "785206842"),
(null, 2081, "Juma", "Samuel", "M", "jumasamuel@gmail.com", "783371734"),
(null, 2228, "Tukasingura", "Elizabeth", "F", "tukasinguraelizabeth@gmail.com", "773395095"),
(null, 3838, "Balinonye", "Trevor", "M", "balinonyetrevor@gmail.com", "797071889"),
(null, 2637, "Makiika", "Mulongo", "F", "makiikamulongo@gmail.com", "777627590"),
(null, 5014, "Kikomeko", "Peter", "M", "kikomekopeter@gmail.com", "782834858"),
(null, 3391, "Ayebare", "Sarah", "F", "ayebaresarah@gmail.com", "786082191"),
(null, 2914, "Katamba", "Adam", "M", "katambaadam@gmail.com", "780657523"),
(null, 2801, "Ssali", "Nicholas", "M", "ssalinicholas@gmail.com", "780294423"),
(null, 3742, "Kansiime", "Hope", "F", "kansiimehope@gmail.com", "774934103"),
(null, 2360, "Jackie", "Bulya", "F", "jackiebulya@gmail.com", "782510608");



--Dummy Data for Staff Table
INSERT INTO staff (staffNO, fname, lname, gender, email, telnumber, role, username, password)
VALUES
(null ,"Makumbi", "Gerald", "M", "makumbigerald@gmail.com", "775526515", "Courier", "Courier@gerald43", "geraldM"),
(null ,"Victoria", "Kalungi", "F", "victoriakalungi@gmail.com", "757104770", "Courier", "Courier@kalungi59", "kalungiF"),
(null ,"Sara", "Ssali", "F", "sarassali@gmail.com", "776935950", "Courier", "Courier@ssali55", "ssaliF"),
(null ,"Mukasa", "Rashid", "M", "mukasarashid@gmail.com", "761935919", "Courier", "Courier@rashid61", "rashidM"),
(null ,"Nakakawa", "Rita", "F", "nakakawarita@gmail.com", "758748882", "Courier", "Courier@rita62", "ritaF"),
(null ,"Kwagala", "Jane", "F", "kwagalajane@gmail.com", "767948454", "Courier", "Courier@jane72", "janeF"),
(null ,"Ssekisambu", "Henry", "M", "ssekisambuhenry@gmail.com", "763286624", "Courier", "Courier@henry52", "henryM"),
(null ,"Maiga", "Jerome", "M", "maigajerome@gmail.com", "765608622", "Courier", "Courier@jerome67", "jeromeM"),
(null ,"Arinaitwe", "Arafat", "M", "arinaitwearafat@gmail.com", "794278588", "Courier", "Courier@arafat86", "arafatM"),
(null ,"Opolot", "Jane", "F", "opolotjane@gmail.com", "759997772", "Courier", "Courier@jane58", "janeF"),
(null ,"Ajok", "Valentine", "F", "ajokvalentine@gmail.com", "752540463", "Courier", "Courier@valentine67", "valentineF"),
(null ,"Mirembe", "Fortune", "F", "mirembefortune@gmail.com", "791732051", "Courier", "Courier@fortune85", "fortuneF"),
(null ,"Odong", "Tanga", "M", "odongtanga@gmail.com", "783189950", "Courier", "Courier@tanga15", "tangaM"),
(null ,"Kanakayeesu", "Faith", "F", "kanakayeesufaith@gmail.com", "797586924", "Courier", "Courier@faith45", "faithF"),
(null ,"Kalungi", "Martin", "M", "kalungimartin@gmail.com", "781098912", "Courier", "Courier@martin47", "martinM"),
(null ,"Katende", "Simon", "M", "katendesimon@gmail.com", "777190378", "Admin", "Admin@simon40", "simonM"),
(null ,"Ssekitoleko", "Elisa", "M", "ssekitolekoelisa@gmail.com", "757481850", "Admin", "Admin@elisa39", "elisaM"),
(null ,"Atwiine ", "Tabitha", "F", "atwiine tabitha@gmail.com", "784025023", "Courier", "Courier@tabitha84", "tabithaF"),
(null ,"Ahimbisibwe", "Job", "M", "ahimbisibwejob@gmail.com", "774731296", "Courier", "Courier@job30", "jobM"),
(null ,"Byakika ", "Jesse", "M", "byakika jesse@gmail.com", "770880750", "Admin", "Admin@jesse41", "jesseM"),
(null ,"Nsubuga", "Frank", "M", "nsubugafrank@gmail.com", "757268680", "Courier", "Courier@frank10", "frankM"),
(null ,"Akankunda", "Natasha", "F", "akankundanatasha@gmail.com", "784397207", "Admin", "Admin@natasha93", "natashaF"),
(null ,"Nakayenga", "Gloria", "F", "nakayengagloria@gmail.com", "761261035", "Admin", "Admin@gloria81", "gloriaF"),
(null ,"Nakato", "Newton", "F", "nakatonewton@gmail.com", "760440074", "Courier", "Courier@newton41", "newtonF");


--Assigning Staff Branches
UPDATE staff SET branchNo = 2 WHERE staffNO=  1;
UPDATE staff SET branchNo = 4 WHERE staffNO=  2;
UPDATE staff SET branchNo = 2 WHERE staffNO=  3;
UPDATE staff SET branchNo = 2 WHERE staffNO=  4;
UPDATE staff SET branchNo = 3 WHERE staffNO=  5;
UPDATE staff SET branchNo = 3 WHERE staffNO=  6;
UPDATE staff SET branchNo = 2 WHERE staffNO=  7;
UPDATE staff SET branchNo = 5 WHERE staffNO=  8;
UPDATE staff SET branchNo = 1 WHERE staffNO=  9;
UPDATE staff SET branchNo = 3 WHERE staffNO=  10;
UPDATE staff SET branchNo = 2 WHERE staffNO=  11;
UPDATE staff SET branchNo = 5 WHERE staffNO=  12;
UPDATE staff SET branchNo = 3 WHERE staffNO=  13;
UPDATE staff SET branchNo = 4 WHERE staffNO=  14;
UPDATE staff SET branchNo = 5 WHERE staffNO=  15;
UPDATE staff SET branchNo = 4 WHERE staffNO=  16;
UPDATE staff SET branchNo = 1 WHERE staffNO=  17;
UPDATE staff SET branchNo = 1 WHERE staffNO=  18;
UPDATE staff SET branchNo = 5 WHERE staffNO=  19;
UPDATE staff SET branchNo = 2 WHERE staffNO=  20;
UPDATE staff SET branchNo = 3 WHERE staffNO=  21;
UPDATE staff SET branchNo = 3 WHERE staffNO=  22;
UPDATE staff SET branchNo = 5 WHERE staffNO=  23;
UPDATE staff SET branchNo = 3 WHERE staffNO=  24;

UPDATE mail SET deliTimedate = null WHERE deliTimedate = "null";

--Dummy Data for Mail Table
INSERT INTO mail (mail_id, inTimedate, outTimedate, deliTimedate, clientNo, deliveredby, addedby, addedTime,branchNo )
VALUES
(null, "2020-01-13 18:58:02", "2020-01-14 18:58:02", "NULL",22,22,16, null,1),
(null, "2020-11-06 19:29:38", "2020-11-07 19:29:38","null",7,6,20, null,2),
(null, "2020-08-07 20:17:40", "2020-08-08 20:17:40", "2020-08-08 23:18:24",24,7,20, null,4),
(null, "2020-12-27 18:36:47", "2020-12-27 18:36:47", "NULL",2,6,20, null,5),
(null, "2020-03-07 14:27:01", "2020-03-07 14:27:01", "NULL",2,23,16, null,2),
(null, "2020-12-04 16:30:12", "2020-12-08 16:30:12", "2020-12-08 20:50:39",10,11,17, null,3),
(null, "2020-08-08 10:56:21", "2020-08-11 10:56:21", "NULL",6,3,17, null,4),
(null, "2020-07-29 13:12:24", "2020-08-05 13:12:24","null",2,19,20, null,5),
(null, "2020-11-09 21:43:32", "2020-11-11 21:43:32", "NULL",3,19,23, null,1),
(null, "2020-01-11 09:59:00", "2020-01-13 09:59:00", "2020-01-13 13:39:46",8,22,22, null,3),
(null, "2021-12-16 15:44:52", "2021-12-16 15:44:52", "null",10,6,17, null,4),
(null, "2021-01-13 18:17:42", "2021-01-13 18:17:42", "2021-01-13 21:35:46",37,17,17, null,2),
(null, "2021-11-22 09:12:11", "2021-11-23 09:12:11", "NULL",1,16,22, null,4),
(null, "2021-06-07 15:48:02", "2021-06-07 15:48:02", "2021-06-07 20:54:26",9,7,22, null,1),
(null, "2021-07-12 14:24:41", "2021-07-13 14:24:41", "null",9,18,16, null,2),
(null, "2021-02-15 18:35:57", "2021-02-17 18:35:57", "2021-02-17 22:41:19",21,18,23, null,3),
(null, "2021-02-24 11:31:39", "2021-02-27 11:31:39", "2021-02-27 15:54:39",15,18,17, null,5),
(null, "2021-10-14 10:08:34", "2021-10-15 10:08:34","null",8,20,16, null,3),
(null, "2021-04-28 14:14:17", "2021-05-01 14:14:17", "NULL",32,9,20, null,1),
(null, "2021-07-24 21:09:38", "2021-07-26 21:09:38", "2021-07-27 00:50:55",10,14,17, null,1),
(null, "2021-06-29 16:38:39", "2021-06-30 16:38:39", "null",42,22,22, null,1),
(null, "2021-06-19 19:58:44", "2021-06-21 19:58:44", "2021-06-22 00:05:08",34,16,16, null,4),
(null, "2021-08-02 13:28:54", "2021-08-03 13:28:54","null",18,17,22, null,4),
(null, "2021-11-18 17:52:41", "2021-11-19 17:52:41", "2021-11-19 22:08:46",34,24,23, null,3),
(null, "2021-06-18 20:47:02", "2021-06-20 20:47:02", "2021-06-21 00:37:41",21,11,22, null,3),
(null, "2022-01-20 11:55:31", "2022-01-20 11:55:31", "NULL",41,14,22, null,4),
(null, "2022-01-26 11:00:46", "2022-01-26 11:00:46", "2088-04-14 11:00:46",44,19,16, null,2),
(null, "2022-01-23 10:11:17", "2022-01-23 10:11:17", null,13,19,16, null,5),
(null, "2022-01-05 17:06:19", "2022-01-06 17:06:19", "2022-01-06 22:43:30",38,11,16, null,3),
(null, "2022-01-15 20:28:55", "2022-01-17 20:28:55",null,36,2,16, null,2),
(null, "2022-02-04 11:33:25", "2022-02-04 11:33:25", "2022-02-04 16:37:16",44,13,17, null,1),
(null, "2022-02-05 19:03:42", "2022-02-05 19:03:42", "2022-02-05 23:14:12",42,3,16, null,4),
(null, "2022-02-03 11:31:38", "2022-02-04 11:31:38", null,29,17,17, null,4),
(null, "2022-02-02 20:51:26", "2022-02-02 20:51:26", "2022-02-03 02:34:49",8,23,22, null,4),
(null, "2022-02-25 10:55:58", "2022-02-25 10:55:58", "2022-02-25 16:34:04",14,11,17, null,2),
(null, "2022-02-18 15:08:39", "2022-02-18 15:08:39", "NULL",44,5,17, null,3),
(null, "2022-02-04 10:53:08", "2022-02-05 10:53:08", "2022-02-05 16:48:12",22,8,17, null,4),
(null, "2022-03-17 11:56:36", "2022-03-17 11:56:36", "2022-03-17 17:56:34",46,4,16, null,3),
(null, "2022-03-24 10:17:43", "2022-03-24 10:17:43", null,15,9,17, null,2),
(null, "2022-03-25 14:01:23", "2022-03-25 14:01:23", "2022-03-25 17:52:35",42,18,23, null,3),
(null, "2022-03-29 20:32:15", "2022-03-29 20:32:15", null,13,5,22, null,2),
(null, "2022-04-01 19:41:10", "2022-04-01 19:41:10", "2022-04-02 00:08:20",39,19,16, null,3),
(null, "2022-04-20 17:01:48", "2022-04-21 17:01:48", null,4,8,17, null,1),
(null, "2022-04-22 18:27:35", "2022-04-23 18:27:35", "2022-04-23 22:49:56",12,22,16, null,4),
(null, "2022-03-20 09:05:51", "2022-03-20 09:05:51", null,18,13,23, null,4),
(null, "2022-03-25 14:01:23", "2022-03-25 14:01:23", "2022-03-25 17:52:35",42,18,23, null,3),
(null, "2022-03-29 20:32:15", "2022-03-29 20:32:15", null,13,5,22, null,2),
(null, "2022-04-01 19:41:10", "2022-04-01 19:41:10", "2022-04-02 00:08:20",45,19,16, null,3),
(null, "2022-04-20 17:01:48", "2022-04-21 17:01:48", "2022-04-21 21:53:00",4,8,17, null,1),
(null, "2022-04-22 18:27:35", "2022-04-23 18:27:35", null,12,22,16, null,4);



alter table mail ADD CONSTRAINT mail_fk FOREIGN KEY(branchNo) references branch (branchNo);
alter table staff ADD CONSTRAINT staff_fk FOREIGN KEY(branchNo) references branch (branchNo);
alter table mail ADD CONSTRAINT recipient_fk FOREIGN KEY(clientNo) references client (clientNo);