-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 24, 2020 at 12:03 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sportchek_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` mediumint(8) UNSIGNED NOT NULL,
  `product_image` varchar(75) NOT NULL DEFAULT 'cover_default.jpg',
  `product_name` varchar(125) NOT NULL,
  `product_price` varchar(20) NOT NULL,
  `product_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_image`, `product_name`, `product_price`, `product_description`) VALUES
(1, 'Puma Final 6 Ms Trainer Size 4 Soccer Ball - Wht.jpg', 'Puma Final 6 Ms Trainer Size 4 Soccer Ball - Wht', '$24.99', 'Entry level Machine Stitched training ball. Suitable for both training and fun games with friends. The combination of the TPU casing, TPE foam, and polyester backing with rubber bladder and machine stitching gives the ball a soft feel; excellent shape; bounce and flight characteristics.'),
(2, 'adidas X Youth Soccer Shin Guard.jpg', 'adidas X Youth Soccer Shin Guard', '$21.99', 'Stay in the game and on the move. The tough shields on these juniors\' football shin guards curve around you to absorb impacts. The EVA backing adds cushioned comfort. Straps at the top help adjust the width of the shields for a better fit while ankle guards provide coverage further down.'),
(3, 'adidas Predator Training Glove.jpg', 'adidas Predator Training Glove', '$34.99', 'Ideal for football training and kickabouts, these goalkeeper gloves put you in charge. The palm has 2.5 mm of cushioning to take the sting out of shots, while grippy latex clings to the ball in all conditions. The fingers are cut for a comfortable fit.'),
(4, 'Diadora Men\'s R10 Brasil Firm Ground Cleats - Black/White.jpg', 'Diadora Men\'s R10 Brasil Firm Ground Cleats - Black/White', '$89.99', 'The Diadora Men’s R10 Brasil Firm Ground Cleats features a full grain leather upper offering touch unlike any other. With it’s anti stretch and anti slip heel lining you can be sure to have controlled movements when you need it most. The full length polyurethane plate will give you the stability you need to move freely.'),
(5, 'FC Barcelona 2019/20 Nike Stadium Home Jersey.jpg', 'FC Barcelona 2019/20 Nike Stadium Home Jersey', '$110.00', 'The FC Barcelona 2019/20 Stadium Home Jersey features team details on highly breathable fabric to help keep you cool and dry on the field or in the stands cheering for your team. Sporting a checkered design for the first time, the home jersey channels Barcelona pride inspired by the iconic grid layout of the city.'),
(6, 'Rawlings OLB3 Recreational Baseball.jpg', 'Rawlings OLB3 Recreational Baseball', '$3.99', 'This baseball features synthetic covers with Major League seams and solid cork and rubber centres with synthetic finish windings.'),
(7, 'Mizuno Prospect Max Flex 10.5\" Youth Baseball Glov.jpg', 'Mizuno Prospect Max Flex 10.5\" Youth Baseball Glov', '$32.97', 'Mizuno Prospect Series uses full grain pigskin leather, providing great durability, enhanced softness, and Mizuno’s innovative easy close technologies, making catching easy. All to help your Prospect learn to love the game. Key Features: Full Grain Pigskin Leather: For great durability. ButterSoft Palm Liner: PU palm lining for increased durability, feel, and comfort. MZO Lining: Disperses perspiration away from the skin. '),
(8, 'Axe 243 Pro Maple Baseball Bat-Blk/Nat.jpg', 'Axe 243 Pro Maple Baseball Bat-Blk/Nat', '$249.99', 'Our patented handle unlocks the full potential of your swing, so you can hit the ball harder and farther, more often.'),
(9, 'Under Armour Men\'s Leadoff RM Mid Baseball Cleats - Black/White.jpg', 'Under Armour Men\'s Leadoff RM Mid Baseball Cleats - Black/White', '$44.97', 'The Under Armour Leadoff RM Mid baseball cleat features a breathable synthetic upper, mesh tongue and full-length EVA midsole for comfort and support. Rubber molded cleats add traction and durability on the field.'),
(10, 'Rawlings League Game Day Junior Baseball Pants.jpg', 'Rawlings League Game Day Junior Baseball Pants', '$24.99', 'Be ready for a fly ball or a home run with these Rawlings League Game Day baseball Pants. The relaxed fit ensures you can move freely, and the double knit stretch fabric is designed with durability in mind while double knees provide extra protection for those who like to slide into home plate.'),
(11, 'Spalding Z i/O Excel Basketball - Size 29.5.jpg', 'Spalding Z i/O Excel Basketball - Size 29.5', '$42.99', 'The Spalding Z i/O Excel Basketball has a composite leather cover and foam backed design for improved feel and gripability.'),
(12, 'Nike Men\'s Jordan Diamond Mid-Top Basketball Shoes - Black/Iridium.jpg', 'Nike Men\'s Jordan Diamond Mid-Top Basketball Shoes - Black/Iridium', '$159.99', 'The Nike Men’s Jordan Diamond Mid-Top Basketball Shoe brings flight to every player by providing stability and responsiveness to run the court. An innovative cage, designed by Tinker Hatfield, provides lightweight support for every play style.'),
(13, 'Nike Men\'s Classic Mesh Basketball Shorts.jpg', 'Nike Men\'s Classic Mesh Basketball Shorts', '$42.00', 'Cross over from court to street in the Nike Dri-FIT Classic Men’s Basketball Shorts. They’re made from mesh-constructed fabric that’s airy, light and powered by Dri-FIT technology, Nike’s solution for sweat saturation.'),
(14, 'Spalding Heavy Duty Red, White and Blue Net.jpg', 'Spalding Heavy Duty Red, White and Blue Net', '$12.99', 'A regulation size design, the Spalding Heavy Duty Red, White and Blue Net is simple to install on standard rims. The netting is built tough to hold up through many games indoors or outdoors.'),
(15, 'Toronto Raptors Nike Men\'s Kyle Lowry Statement Black Jersey.jpg', 'Toronto Raptors Nike Men\'s Kyle Lowry Statement Black Jersey', '$130.00', 'Directly inspired by the on-court jersey, you\'ll feel part of the team when sporting the Toronto Raptors Kyle Lowry Swingman Basketball Jersey.'),
(16, 'CCM Jetspeed FT460 Senior Hockey Skates.jpg', 'CCM Jetspeed FT460 Senior Hockey Skates', '$249.99', 'The CCM Jetspeed FT460 Senior Hockey Skates feature multi density memory foam ankle padding for great fit and comfort from game one. The reinforced injection outsole allows for better energy transfer for more speed in every stride.'),
(17, 'Bauer Vapor 2X Grip Senior Hockey Stick.jpg', 'Bauer Vapor 2X Grip Senior Hockey Stick', '$269.99', 'Get a dynamic release with every shot. The Vapor 2X is designed for players looking for a very lightweight stick and a high level of performance. It’s made of lightweight, industry-leading carbon fiber to improve performance and reduce weight. The new XE Taper geometry is also used to decrease weight while increasing release speed and stability. An enhanced shaft thickness adds durability to the stick to withstand more force so that you can really lean into shots.'),
(18, 'Hockey Canada 72\" Steel Hockey Net.jpg', 'Hockey Canada 72\" Steel Hockey Net', '$109.99', 'The Hockey Canada 72 in. Steel Hockey Net offers the same aesthetics players recognize in a regulation net but with 1.5 in. pipes to reduce cost and weight.'),
(19, 'Youth Toronto Maple Leafs Tavares Jersey.jpg', 'Youth Toronto Maple Leafs Tavares Jersey', '$129.99', 'Your young one can support their favourite NHL team in style this season with the Youth Toronto Maple Leafs Tavares Jersey. It features awesome graphics that will make them stand out from the hockey crowd! Officially Licensed by the NHL.'),
(20, 'Bauer 4500 Senior Hockey Helmet - Size M-L.jpg', 'Bauer 4500 Senior Hockey Helmet - Size M-L', '$74.99', 'This Bauer 4500 Hockey Helmet features premium, dual-density Cellflex foam and a dual-ridge crown. Quick tool adjustments are possible with this CE, CSA and HECC-certified helmet that includes floating pro-ear loops and ergo translucent ear covers.\r\n'),
(21, 'Wilson NFL Competition Football.jpg', 'Wilson NFL Competition Football', '$34.99', 'Play like the pros with the Wilson NFL Competition Football, crafted from premium composite leather in official NFL size. This NFL branded ball features ACL laces for a more accurate throw and an authentic look and feel.'),
(22, 'Nike Men\'s Alpha Menace Shark Mid Football Cleats - Black/White.jpg', 'Nike Men\'s Alpha Menace Shark Mid Football Cleats - Black/White', '$42.97', 'Power up your performance with Men’s Nike Alpha Menace Shark Football Cleat. It features an aggressive cleat configuration and Nike Fast Flex technology so you can perform at top speed during practice and play.'),
(23, 'Nike Youth Superbad 4.5 Football Gloves - Black/White.jpg', 'Nike Youth Superbad 4.5 Football Gloves - Black/White', '$40.97', 'The Nike Youth Superbad Football Gloves offer incredible grip and protection to help you catch and control the football. The adjustable cuff closure allows you to get that personalized fit and the breathable fabric helps keep your hands cool under pressure.'),
(24, 'New England Patriots Tom Brady Limited Football Jersey.jpg', 'New England Patriots Tom Brady Limited Football Jersey', '$150.00', 'Made for the passionate fan looking for a jersey that combines authentic team detailing with everyday style.'),
(25, 'Under Armour Antimicrobial Flavour Blast Adult Mouth Guard - Berry\r\n.jpg', 'Under Armour Antimicrobial Flavour Blast Adult Mouth Guard - Berry\r\n', '$15.97', 'Stay safe on the ice with the Under Armour Antimicrobial Flavour Blast Mouth Guard with embedded flavour beeds for longer lasting taste.'),
(26, 'Cobra Xl Iron Set Stl (2019) [4-G].jpg', 'Cobra Xl Iron Set Stl (2019) [4-G]', '$411.97', 'The Cobra XL Speed irons feature a traditional cavity back design and perimeter weighting for effortless launch and distance.\r\n'),
(27, 'Wilson Men\'s Prostaff HDX Golf Package Set.jpg', 'Wilson Men\'s Prostaff HDX Golf Package Set', '$399.99', 'The Wilson Prostaff HDX Package Set is the perfect option for beginners looking for a premium starter set. The set includes everything you need to enjoy a round of golf in a lightweight stand bag.\r\n'),
(28, 'Odyssey White Hot Pro 2.0 Black Putter - #1.jpg', 'Odyssey White Hot Pro 2.0 Black Putter - #1', '$149.99', 'The Odyssey White Hot Pro 2.0 Putter - Black incorporates an improved version of the #1 insert on Tour to ensure the performance that elite players demand from a putter that\'s proven week in and week out on PGA Tour leaderboards.'),
(29, 'FootJoy Men\'s Energize Golf Shoes - White/Blue.jpg', 'FootJoy Men\'s Energize Golf Shoes - White/Blue', '$69.88', 'The FootJoy Energize Men\'s Golf Shoes offer lightweight, waterproof performance with clean, athletic styling.'),
(30, 'Taylormade Rocketballz Speed 2019 - 12 Pack.jpg', 'Taylormade Rocketballz Speed 2019 - 12 Pack', '$29.99', 'Taylormade Rocketballz Speed 2019 - 12 Pack offer faster and longer performance. A faster ball speed promotes longer drives and more distance. With the thin and fast mantle the greenside control on these balls are next level. '),
(31, 'Burton Stylus Women\'s Snowboard 2019/20.jpg', 'Burton Stylus Women\'s Snowboard 2019/20', '$269.98', 'Set the Stylus to snow and make your first mark on a blank slate, the best intro to snowboarding out there. Hands down the easiest women’s board in the line, the Burton Stylus is perfect for aspiring riders looking to build a foundation before moving on to a more performance-oriented option. Like setting a pen to a blank piece of paper, the Stylus silences your fears, teaching balance and board control from the first time you strap in. Easy Bevel combines a soft, mellow flex with a convex base for a virtually-catch free riding experience, while Flat Top™ and a true twin shape provide a stable platform that’s effortlessly maneuverable no matter which way you point it. The Channel® mounting system gives you the easiest, most adjustable setup with bindings from all major brands (not just Burton’s).\r\n'),
(32, 'K2 Belief Boa Women\'s Snowboard Boots 2019/20 - Black.jpg', 'K2 Belief Boa Women\'s Snowboard Boots 2019/20 - Black', '$131.98', 'Built for progression, the K2 Belief snowboard boot is a straightforward and comfortable snowboard boot designed to keep women on the hill until the resort closes. A heat mouldable Comfort Foam EVA liner and Fast-In liner lace keeps you warm while helping to customize the fit and a proven BOA® lacing system make adjusting the fit fast and easy.'),
(33, 'K2 Vandal Junior Snowboard Bindings 2019/20 - Blue.jpg', 'K2 Vandal Junior Snowboard Bindings 2019/20 - Blue', '$95.98', 'Engineered for the next generation that’s already pushing the envelope, the K2 Vandal binding is the perfect tool to take the riding of the youth to the next level. Our ProFusion™ chassis provides the perfect amount of flex and power transfer, and the Groms Tweakback™ gives this binding a forgiving ride.'),
(34, 'Bolle Freeze Ski & Snowboard Goggles - Matte Black with Vermillon Lens.jpg', 'Bolle Freeze Ski & Snowboard Goggles - Matte Black with Vermillon Lens', '$23.98', 'The Freeze is one of our most versatile goggle in Bolle collection. The classic frame design combined with dual lens technolgy exceds all expectations when it comes to the fit and performance features of this goggle.'),
(35, 'Anon Highwire Ski & Snowboard Helmet 2019/20 - Camo.jpg', 'Anon Highwire Ski & Snowboard Helmet 2019/20 - Camo', '$111.98', 'Brimmed style that goes beyond basic with fast and easy fit adjustments and low-profile design.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_sport`
--

CREATE TABLE `tbl_products_sport` (
  `products_sport_id` tinyint(3) NOT NULL,
  `products_id` mediumint(9) NOT NULL,
  `sport_id` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products_sport`
--

INSERT INTO `tbl_products_sport` (`products_sport_id`, `products_id`, `sport_id`) VALUES
(8, 1, 1),
(9, 2, 1),
(10, 3, 1),
(11, 4, 1),
(12, 5, 1),
(23, 6, 2),
(24, 7, 2),
(25, 8, 2),
(26, 9, 2),
(27, 10, 2),
(28, 11, 3),
(29, 12, 3),
(30, 13, 3),
(31, 14, 3),
(32, 15, 3),
(33, 16, 4),
(34, 17, 4),
(35, 18, 4),
(36, 19, 4),
(37, 20, 4),
(38, 21, 5),
(39, 22, 5),
(40, 23, 5),
(41, 24, 5),
(42, 25, 5),
(43, 26, 6),
(44, 27, 6),
(45, 28, 6),
(46, 29, 6),
(47, 30, 6),
(48, 31, 7),
(49, 32, 7),
(50, 33, 7),
(51, 34, 7),
(52, 35, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sport`
--

CREATE TABLE `tbl_sport` (
  `sport_id` tinyint(3) NOT NULL,
  `sport_name` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sport`
--

INSERT INTO `tbl_sport` (`sport_id`, `sport_name`) VALUES
(1, 'soccer'),
(2, 'baseball'),
(3, 'basketball'),
(4, 'hockey'),
(5, 'football'),
(6, 'golf'),
(7, 'snowboarding');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ip` varchar(50) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_ip`) VALUES
(1, 'dana', 'danamaring', '123', 'dana.magarc@gmail.com', '2020-02-03 19:25:44', '::1'),
(2, 'test', 'test', 'test', 'test', '2020-02-03 20:49:03', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_products_sport`
--
ALTER TABLE `tbl_products_sport`
  ADD PRIMARY KEY (`products_sport_id`);

--
-- Indexes for table `tbl_sport`
--
ALTER TABLE `tbl_sport`
  ADD PRIMARY KEY (`sport_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_products_sport`
--
ALTER TABLE `tbl_products_sport`
  MODIFY `products_sport_id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_sport`
--
ALTER TABLE `tbl_sport`
  MODIFY `sport_id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
