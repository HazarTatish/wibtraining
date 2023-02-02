-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 04:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharma`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `Location` int(10) DEFAULT NULL,
  `ID` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`Location`, `ID`, `name`) VALUES
(2, 2001, 'Irbid'),
(5, 3002, 'Al Karak'),
(6, 6365, 'Ma\'an'),
(4, 7787, 'Zarqa'),
(1, 8898, 'Amman'),
(3, 9999, 'Aqaba');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(10) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `password`, `username`) VALUES
(20019913, 'hazar', 'hazar');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `discription` varchar(255) DEFAULT NULL,
  `Managerid` int(10) DEFAULT NULL,
  `Branch_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `discription`, `Managerid`, `Branch_ID`) VALUES
(1, 'HeightFactor', 35, 'Advanced Nutrition by Zahler\r\nHealthy Growth Support\r\nNatural Growth Support Formula\r\nAdvanced Health', 20019913, 8898),
(2, 'Revive Active Zest Active', 10, 'Super supplement with 26 active ingredients in powder form\r\nSupports energy, brain, immune system, and muscle recovery\r\nScientifically formulated to contain zero stimulants and zero caffeine\r\nEnriched with Wellmune, a yeast beta 1,3/1,6 glucan', 20019913, 8898),
(3, 'Sona Vitamin B6 50Mg', 5, 'Normal energy metabolism\r\nReduction of fatigue\r\nRegulation of hormonal activity\r\nFree from any Artificial Colours, Flavourings or Preservatives', 20019913, 8898),
(4, 'Panadol Infant Drops', 9, 'Panadol Infant Drops is one of the trusted & recommended brand for children’s pain and fever', 20019913, 8898),
(5, 'Cerave Reparative Hand Cream 50Ml', 2.5, 'Cerave Reparative Hand Cream effectively moisturises while helping to restore the protective skin barrier', 20019913, 8898),
(6, 'Beauty Counter Exfoliating Foot Mask', 22.89, 'Beauty Counter exfoliating Foot Mask is a foot exfoliating treatment in a pair of wearable mask sheets.\r\nWhich you can put on as you would your socks. It removes all calluses over time.', 20019913, 8898),
(7, 'Vaseline Hand Cream Intensive', 7, 'Vaseline Hand Cream intensive with Anti-bac protection helps to replenish moisture in your hands. Especially these days when the best advice is: wash your hands regularly to stay safe and healthy from infection. If you are using soap and hand sanitisers a', 20019913, 8898),
(8, 'Bperfect 10Sec Mousse Medium', 10, 'Bperfect 10Sec Mousse Medium achieve a gorgeous glow in seconds this lightweight tanning mousse nourishes and moisturises, gliding over the skin for a flawless even tan with soft notes of Coconut.', 20019913, 8898),
(9, 'Bare By Vogue', 19.3, 'Bare By Vogue Self Tan Foam Ultra Dark for medium to dark skin tones for a rich radiant dark tan.\r\n\r\nEnriched with beneficial super peptides which help to smooth, plump, firm, and improve skin elasticity\r\nDeveloping time 4 to 8 hours and will leave skin w', 20019913, 8898),
(10, 'Williams Instant Tan Ultra Dark 150Ml', 17.95, 'Bare by Vogue Williams Instant Tan Ultra dark  is a flawless ready to wear colour suitable for any occasion - wedding, debs, Friday night out with the girl', 20019913, 8898),
(20, 'Tan Organic', 22.2, 'Tan Orgainc Self Tanning Oil is a quick developing, hydrating oil that offers a natural-looking glow. It is enriched with aloe vera, argan oil borage seed and orange peel to ensure your tan goes on easily, fades evenly and has no transfer', 20019913, 2001),
(21, 'Crystal Clear Protective Face Shield', 7.99, 'Crystal Clear Protective Face Shield protects face and eyes from droplets expelled by coughing, sneezing etc and bacteria and dust', 20019913, 2001),
(22, 'Boson Antigen Test', 2.95, 'Antigen Tests Promotion', 20019913, 2001),
(23, 'Tan Organic Self-Tanning Oil 100Ml', 22.9, 'Tan Orgainc Self Tanning Oil is a quick developing, hydrating oil that offers a natural-looking glow. It is enriched with aloe vera, argan oil borage seed and orange peel to ensure your tan goes on easily, fades evenly and has no transfer', 20019913, 2001),
(24, 'Daktarin Medicated Cream', 5.95, 'Provides itch relief\r\nEffective treatment for fungal skin infections\r\nTreat secondary infections due to Gram-positive bacteria', 20019913, 2001),
(25, 'Curanail Anti-Fungal Nail Treatment', 24.99, 'Curanail Anti-Fungal Nail Treatment 5% Nail Lacquer Amorolfine Treatment is a once weekly treatment for mild fungal nail infections. Curanail Nail provides treatment for up to two nails', 20019913, 2001),
(26, 'Lamisil At Cream', 10.5, 'Long-lasting protection from athlete\'s foot\r\nAlso treats dhobie itch\r\nSoothing relief from itching and burning', 20019913, 2001),
(27, 'Regaine For Men', 44.95, 'Regaine For Men Extra Strength Foam 5% Minoxidil , 40% of men will show noticeable hair loss by the age of 35 and 65% by the age of 60', 20019913, 2001),
(28, 'Bioxsine Dermagen Serum 3 X 50Ml', 49.95, 'The active herbal formula BioComplex B11 from specially combined phyto-extracts to effectively reduce hair loss and promote hair growth for thicker and stronger hair', 20019913, 2001),
(29, 'Bioxsine Forte Advanced Hair Loss', 19.95, 'Bioxsine Forte Advanced Hair Loss Herbal Shampoo is formulated specifically for both men and women who experience severe hair loss and/or who wish to maintain and encourage the growth of stronger and more resilient hair', 20019913, 2001),
(98, 'BIODOPHILUS 100 BILLION', 10, 'Contains 100 Billion live and active CFUs per capsule\r\n\r\nSupports healthy digestion and intestinal flora', 20019913, 9999),
(99, 'Loreal Casting Creme Gloss Black Cherry 360', 11.65, 'Casting Creme Gloss by L\'Oréal Paris is a low commitment semi permanent hair dye: ammonia free for a pleasant smell. Perfect for first time colourers to blend away grey hair – provides a natural looking finish', 20019913, 9999),
(100, 'King Hair Miracle Root Touch Up Blonde', 14.59, 'King Hair Miracle Root Touch Up Blonde is a weightless and pigmented formula that covers your greys, gives scalp coverage for fine/thinning hair and absorbs oils. What makes Miracle Root Touch Up different is that it is a super pigmented', 20019913, 9999),
(101, 'Celtic Candles Hand Wash Lime Basil And Mandarin', 5, 'Celtic Candles Hand Wash Lime Basil And Mandarin leave your hands feeling fresh and clean!', 20019913, 9999),
(102, 'Vitabiotics Wellbaby Multi Vitamin Liquid For Babies', 12, 'Vitabiotics Wellbaby Multi Vitamin Liquid for babies is to support a time of rapid growth and development', 20019913, 9999),
(103, 'Better You D Lux Junior Oral Spray 15Ml', 6, 'Fast & effective with a great peppermint flavour\r\nDaily dose of vitamin D in a convenient oral spray\r\nSuitable for children 3 years of age and above', 20019913, 9999),
(104, 'Vivioptal Junior Multivitamin Tonic 250Ml', 11, 'Vivioptal Junior is a balanced nutritional supplement specially formulated and developed to help the health of your child. Vivioptal Junior provides children and adolescents with quality vitamins, minerals and important ingredients such as Lysine to help ', 20019913, 9999),
(105, 'Aya Kids Crunchy Bio Probiotic 30Tabs', 8, 'Supporting Gut Health\r\nDuring and after antibiotics\r\nSupporting General Health and Wellbeing', 20019913, 9999),
(106, 'Beeline Baby Vitamin D3 Pump 10Ml', 10.5, 'Beeline Baby Vitamin D3 Pump have been designed specifically for newborns and babies. Vitamin D is made in the skin by sunshine', 20019913, 9999),
(107, 'Strepsils Intensive Honey & Lemon Lozenges', 2.5, 'For the symptomatic relief of sore throats.\r\nStrepsils Intensive Lozenges are indicated in adults and adolescents over 12 years of age.', 20019913, 9999),
(108, 'Sudafed Decongestant 60Mg Pseudoephedrine Tablets', 10.35, 'Contain Pseudoephedrine Hydrochloride, which is a decongestant that relieves nasal and sinus congestion. This medicine is for use by adults and children aged 12 years and over', 20019913, 9999),
(109, 'Lemsip Max Cold & Flu Hot Lemon 10 Sachets', 9, 'For the relief of symptoms associated with the common cold or influenza, including fever, headache, sore throat, body aches and pains', 20019913, 9999),
(300, 'Benylin Dual Action Dry Syrup 100Ml', 7.5, 'Benylin Dual Action Dry Syrup helps to relieve dry coughs and congestion. The active ingredient dextromethorphan helps to stop persistent coughing. The syrup also contains triprolidine hydrochloride, an antihistamine which helps to stop sneezing, runny no', 20019913, 7787),
(301, 'Biabelle Midnight Desire Dark Foam Tan 150Ml, Tba, Tanning Mitt', 42.3, 'Biabelle Midnight Desire Dark Foam Tan 150Ml, Tba, Tanning Mitt', 20019913, 7787),
(302, 'Bio Oil Skincare Oil Natural 60Ml', 12.59, 'Bio-Oil Skincare Oil Natural helps improve the appearance of scars, stretch marks and uneven skin tone.\r\n\r\nThe clinically proven formulation is a combination of plant extracts and vitamins suspended in an oil base that work together to help improve the sk', 20019913, 7787),
(303, 'Aptamil Pepti 1 From Birth 400G', 12.6, 'Aptamil Pepti 1  from birth is a nutritionally complete  formulation for the dietary management of cow\'s milk allergy (CMA).\r\nIt is suitable as the sole source of nutriton from birth and can be used to replace cow\'s milk in drinks and cooked dishes at the', 20019913, 7787),
(304, 'Mam Easy Start Anti Colic Bottle 260Ml 2 Pack 2 Motnhs ', 12.8, 'Mam Easy Start Anti Colic is the ideal bottle for an easy switch between breast and bottle thanks to the patented Silk teat which is silky soft and provides a familiar feel for babies. Market Research confirmed that 94% of babies accepted the teat making ', 20019913, 7787),
(305, 'Nutramigen 2 With Lgg 400G', 12.59, 'Nutramigen 2 with LGG  is an intensively hydrolysed, hypoallergenic bottle food based on casein that is used as a diet food for cow’s milk allergy in infants from 6 months onwards as part of a varied diet. It should be used as part of a varied diet to ens', 20019913, 7787),
(306, 'Spotlight Teeth Whitening Kit', 39.1, 'Spotlight Spotlight Teeth Whitening Kit is an at-home whitening solution made by Dentists. Whitening results in just 14 days', 20019913, 7787),
(307, 'Eucryl Smokers Tooth Powder Original', 2.99, 'Eucryl Smokers Tooth powder Original no hard brushing is required to set the fine powder’s natural abrasive into action', 20019913, 7787),
(308, 'Preparation H Soothing Wipes 30 Pack', 3.95, 'Preparation H Wipes can be used for gentle, everyday cleansing of the anal area helping to reduce irritation and provide a soothing effect. Preparation H Medicated Wipes are convenient to use and soothe as they clean providing effective haemorrhoid relie', 20019913, 7787),
(309, 'Okeeffes Working Hands Hand Cream Tub 96G', 12.99, 'Okeeffes Working Hands Hand Cream Tub is a moisturiser that heals, relieves, and repairs extremely dry, cracked hands. Guaranteed relief or your money back', 20019913, 7787),
(310, 'Carnation Pedi Roller', 6.65, 'Carnation Pedi Roller immediate relief from common foot pain in the heel and arch!\r\nPodiatrist designed with a ridged design that massages tired feet, reducing tension and stimulating circulation', 20019913, 6365),
(311, 'Beauty Counter Exfoliating Foot Mask', 3.99, 'Beauty Counter Exfoliating Foot Mask is a sock-type foot exfoliating mask with Papaya Extract. Calluses start peeling off in 4 to 7 days after use', 20019913, 6365),
(312, 'Medicare Micro First Aid Kit', 10.5, 'Medicare First Aid Micro Kit is packed with all the essentials needed for any kind of emergency. It\'s perfect for use when out and about and has enough items for 1 to 2 people', 20019913, 6365),
(313, 'Swedish Nutra Collagen Pure Peptide Liquid Sugar Free 500Ml', 27, 'Swedish Nutra Collagen Pure Peptide Liquid is a berry flavoured collagen liquid which provides a multitude of health benefits', 20019913, 6365),
(314, 'Solgar Biotin 5000 Capsules', 21, 'Solgar Biotin is a water-soluble B vitamin that contributes to several functions in the body including energy metabolism. Perhaps best known for its beauty supporting benefits, a daily dose of Solgar’s Biotin 5000 µg can help support healthy looking hair ', 20019913, 6365),
(315, 'Proceive Proceive Omega 3', 27, 'Proceive Omega 3 supplement is a balanced Omega 3 formula with DHA for women throughout conception and pregnancy', 20019913, 6365),
(316, 'Murine Eye Drops Bright Mois', 8.95, 'Murine Eye Drops Bright and Moist is specially formulated to contain both a lubricant and a brightener to help refresh, soothe, alleviate the symptoms of dry eyes and make them sparkle', 20019913, 6365),
(317, 'Hylo-Care Eye Drops Preservative Free 7.5Ml', 10.95, 'HYLO-Care is recommended for patients with severe dry eye or where there is an injury to the outside layer of the cornea', 20019913, 6365),
(318, 'Ocuvite Complete 60 Capsules', 23, 'Ocuvite Complete is scientifically formulated for vision care. Ocuvite Complete contains all the vitains and minerals proven to help maintain normal vision. The beneficial effect f DHA on vision is obtained with regular daily intake of 250mg', 20019913, 6365),
(319, 'Blephasol Duo 100Ml Plus 100 Pads', 41.95, 'Ble­pha­sol Duo is a premium eye­lid cleans­ing solu­tion for the daily hygiene of sensitive eyelids', 20019913, 6365),
(401, 'Ella And Jo Wide Awake Brightening And Hydrating Eye Gel 20Ml', 38, 'The gel encourages a smooth, bright and hydrated undereye area. Fortified with hyper active ingredients that help every eye concern, whether its dark circles, puffiness, fine lines, wrinkles or hydration', 20019913, 3002),
(402, 'La Roche-Posay Toleriane Dermallergo Eyes 20Ml', 19.95, 'Toleriane Dermallergo Eye Contour is specifically designed to hydrate and soothe irritated or dry skin around the eyes. It is proven to immediately relieve skin discomfort as well as reduce skin sensitivity around the eyes, day after day. As well as dry s', 20019913, 3002),
(403, 'Swedish Nutra Hair Skin & Nails', 25.5, 'If you do not live a healthy lifestyle and perhaps drink alcohol, smoke and don’t exercise your hair skin & nails will reflect this with dry, thin and crispy hair, brittle nails, low collagen production and dehydrated skin', 20019913, 3002),
(404, 'Swedish Collagen Deluxe 500Ml', 35.6, 'Swedish Collagen Deluxe is one of the major building blocks of bones, muscles, tendons, and ligaments. It minimizes fine lines and wrinkles, reduces sun damage, improves skin elasticity, corrects weak or damaged nail beds, thickens fine hair', 20019913, 3002),
(405, 'Solgar Biotin 5000 Capsules', 21.99, 'Solgar Biotin is a water-soluble B vitamin that contributes to several functions in the body including energy metabolism. Perhaps best known for its beauty supporting benefits, a daily dose of Solgar’s Biotin 5000 µg can help support healthy looking hair ', 20019913, 3002),
(406, 'Revive Active Joint Complex 30\'S', 37.46, 'Improve joint flexibility\r\nReduce joint pain\r\nRepair cartilage', 20019913, 3002),
(407, 'Mam Comfort Soother 0+M Boy', 11, 'Made from 100% silicone\r\nSupport natureal sucking behaviour\r\nPromotes healthy oral development', 20019913, 3002),
(408, 'Mam Style Silicone 6 M + Soother', 6.95, 'The MAM silk teat has all the advantages of standard silicone – the clear material looks hygienic, it\'s odourless and tasteless, and it doesn\'t age. It is extra-soft thanks to technology designed by the MAM Design Studio for MAM baby feeding bottles. Babi', 20019913, 3002),
(409, 'Mam Soft Bottle Brush 1S', 8.55, 'Mam Soft Bottle Brush cleans bottles and teats without scratching.\r\n\r\nThe innovative extra soft bristles flexibly adapt to different bottle forms', 20019913, 3002),
(410, 'Tweezerman Baby Nail Clipper & File', 8.59, 'Tweezerman Baby Nail Clipper & File is specially designed to cut babies’ delicate nails without pulling or tearing', 20019913, 3002);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `Phone_Number` int(10) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Ask_Question` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Phone_Number`, `Name`, `Ask_Question`) VALUES
(799468580, 'hazar', 'How to Spot the Symptoms'),
(763218987, 'halah', 'what could cause this?'),
(796432815, 'osama', 'How to spot the symptoms of a fever'),
(649875325, 'Muhanad', 'What are the symptoms of Corona?'),
(796321578, 'hanaa', 'The best medicine for pressure');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD KEY `Name` (`Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20019915;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1111112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
