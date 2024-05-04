create table customer(cno int primary key AUTO_INCREMENT,
cname varchar(90),
phone varchar(10),
date date,
pid int references product);

ALTER TABLE customer ADD CONSTRAINT cno AUTO_INCREMENT;

insert into product values(14,"Beaded Beauty Gold Mangalsutra","25048","4.100",916);
insert into product values(15,"Simply Archaic Gold Mangalsutra","52272","8.600",916);
insert into product values(16,"Clover Charm Gold Mangalsutra","50692","8.200",916);
insert into product values(17,"Heartly Vintage Gold Mangalsutra","49112","8.100",916);
insert into product values(18,"Pristine Pearl Gold Mangalsutra","38112","6.500",916);
insert into product values(19,"Opulent Orb Mangalsutra","52318","8.750",916);
insert into product values(20,"Radiant Blossom Mangalsutra","67575","10.800",916);
insert into product values(21,"Timeless Black Bead Mangalsutra","38594","6.740",916);
insert into product values(22,"Starfire Embrace Mangalsutra","37063","6.200",916);
insert into product values(23,"Heavenly Heart Mangalsutra","30567","4.600",88);
insert into product values(24,"Tiny Quad Gold Mangalsutra","39391","6.880",916);

insert into product values(25,"Swarajya Mohan Mal","303042","49.650",916);
insert into product values(26,"Swarajya Gold Kolhapuri Saj Necklace","2093573","490.650",916);
insert into product values(27,"Swarajya Gold Kolhapuri Saj Necklace","1229119","190.800",916);
insert into product values(28,"Swarajya Mohan Mal with Pendent Necklace","407260","69.650",916);
insert into product values(29,"Swarajya Gold Laxmi Har Necklace","168149","25.750",916);
insert into product values(30,"Swarajya Gold Bormal Necklace","68087","11.300",916);
insert into product values(31,"Swarajya Gold Mohan Mal Necklace","1447424","210.300",916);
insert into product values(32,"Swarajya Gold Bakuli Har Necklace","407592","24.200",916);

insert into product values(33,"Celestial Botanical Gold Pendant","19618","3.200",88);
insert into product values(34,"Groovy Architectural Charm Gold Pendant","34247","5.800",88);
insert into product values(35,"Singular Majestic Drop Gold Pendant","12552","1.900",916);
insert into product values(36,"Jazzy Leafy Charm Gold Pendant","10853","1.600",88);
insert into product values(37,"Radiant Unique Charm Gold Pendant","20036","3.200",916); 	
insert into product values(38,"Twining-bud Wonder Gold Pendant","12522","1.950",88);
insert into product values(39,"Graceful Hexagon Gold Pendant","15966","2.800",88);
insert into product values(40,"Ellipse Floral Charm Gold Pendant","22540","3.600",88);
insert into product values(41,"A pendant Custom Design","16078","2.450",916);
insert into product values(42,"Distinct Whisper Flora Gold Pendant","9183","1.750",88);
insert into product values(43,"Nature Clusteral Charm Gold Pendant","22540","3.600",916);
insert into product values(44,"Orbital Splendor Gold Pendant","33393","5.200",88);

insert into product values(45,"Blooming Bud Diamond Stud Earrings","27072","2.200",916);
insert into product values(46,"Fuchsia Fantasy Diamond Earring","52744","4.600",916);
insert into product values(47,"Pristine Dews Diamond Pendan","13570","0.900",916);
insert into product values(48,"Petal Enchantment Diamond Studs Earring","30934","2.600",916);
insert into product values(49,"Charming Floral Diamond Studs Earring","25783","2.100",916);
insert into product values(50,"Eyeconic Boom Diamond Studs Earring","28020","2.750",916);
insert into product values(51,"Space-Age Swastik Diamond Stud Earrings","23791","1.850",916);
insert into product values(52,"Geo Artistry Diamond Studs Earring","19028","1.100",916);
insert into product values(53,"Threefold Petals Diamond Studs Earring","18044","0.950",916);
insert into product values(54,"Solitary Rosebud Diamond Studs Earring","18019","0.950",916);
insert into product values(55,"Linear Elegance Diamond Studs Earring","33134","2.850",916);
insert into product values(56,"Twinkling Twist Diamond Stud Earrings","16446","1.500",916);

insert into product values(57,"Crystalline Diamond Tanmaniya","40060","3.650",916);
insert into product values(58,"Designer Knot Diamond Tanmaniya","44211","4.100",916);
insert into product values(59,"Classy Diamond Tanmaniya","65926","5.200",916);
insert into product values(60,"Knotted Paisley Diamond Tanmaniya","24695","1.950",916);
insert into product values(61,"Gorgeous Vale Diamond Tanmaniya","53649","4.840",916);
insert into product values(62,"Wide Ray Design Tanmaniya","51071","4.600",916);
insert into product values(63,"Glam Diamond Tanmaniya","60393","5.760",916);
insert into product values(64,"Princess Diamond Tanmaniya","19806","1.300",916);
insert into product values(65,"Star Diamond Tanmaniya","21568","1.950",916);
insert into product values(66,"Star Arch Diamond Tanmaniya","32114","2.800",916);
insert into product values(67,"Ivy Diamond Tanmaniya","33983","3.000",916);
insert into product values(68,"Floral Layered Diamond Tanmaniya","44505","4.000",916);

insert into product values(69,"Epic Harmony Diamond Ladies Ring","57783","5.100",916);
insert into product values(70,"Stylish Swivel Diamond Ladies Ring","22618","1.750",916);
insert into product values(71,"Lily Luster Diamond Ring","19974","1.450",916);
insert into product values(72,"Cluster Hold Diamond Ring","19360","1.320",916);
insert into product values(73,"Floral Knot Diamond Ring","25529","2.150",916);
insert into product values(74,"Majesty of Heart Diamond Ladies Ring","18898","1.600",916);
insert into product values(75,"Heartbeat Amulet Diamond Ladies Ring","18564","1.580",916);
insert into product values(76,"Endless Love Diamond Ladies Ring","15700","1.120",916);

insert into product values(77,"Infinity Floral Diamond Necklace","15286","1.100",916);
insert into product values(78,"Leaflet Diamond Necklace","13427","0.980",916);
insert into product values(79,"Fancy Floret Diamond Necklace","22208","1.800",916);
insert into product values(80,"Unfettered Teardrop Diamond Necklace","32008","2.880",916);
insert into product values(81,"Dainty Daisy Diamond Necklace","46958","4.250",916);
insert into product values(82,"Delicate Waves Diamond Necklace","20812","1.750",916);
insert into product values(83,"Sheeny Sunflower Diamond Necklace","31023","2.660",916);
insert into product values(84,"Lovely Leaf Diamond Necklace","19636","1.500",916);








































































