-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3304
-- Generation Time: Oct 28, 2023 at 04:45 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fsd10_victor`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `dish_title` varchar(100) NOT NULL,
  `foodcat_id` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `qty` smallint(6) DEFAULT '0',
  `total` bigint(20) DEFAULT '0',
  `image` varchar(100) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `dish_title`, `foodcat_id`, `price`, `qty`, `total`, `image`, `description`) VALUES
(2, 'Garlic Shrimp and Calamari', 400, 16, 0, 0, 'image/menu/seafood01.jpg', 'test02Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quae magni a iste. Beatae necessitatibus id inventore pariatur, veritatis mollitia veniam laudantium tenetur, possimus vero perferendis sit! Nulla, quo iste.'),
(3, 'Garlic Shrimp and Calamari', 400, 16, 0, 0, 'image/menu/seafood01.jpg', 'test03__Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quae magni a iste. Beatae necessitatibus id inventore pariatur, veritatis mollitia veniam laudantium tenetur, possimus vero perferendis sit! Nulla, quo iste.'),
(4, 'Chinese Vegetable Soup with Tofu', 100, 9, 0, 0, 'image/menu/100_Chinese_Vegetable_Soup_with_Tofu.jpg', 'Experience the perfect harmony of flavors in our Chinese Vegetable Soup with Tofu. This delectable soup is a vegetarian delight, combining fresh, crisp vegetables with silky tofu in a savory broth. Each spoonful is a journey through the heart of Chinese cuisine, offering a comforting warmth that soothes the soul. Whether you\'re a vegetarian or simply craving a wholesome and satisfying soup, this dish is a must-try. Join us and savor the essence of traditional Chinese cooking with our delightful Vegetable Soup with Tofu'),
(5, 'Wonton Soup', 100, 8, 0, 0, 'image/menu/100_Wonton_Soup.jpg', 'Indulge in the ultimate comfort food experience with our Wonton Soup with Tofu. This classic soup combines succulent, handcrafted wontons filled with flavorful goodness, gently floating in a savory, aromatic broth. The addition of delicate tofu cubes elevates this dish to a new level of satisfaction. Every spoonful is a harmonious blend of textures and tastes, making it a delightful choice for both meat lovers and vegetarians. Join us for a bowl of pure culinary comfort, and discover the joy of Wonton Soup with Tofu at its finest.'),
(6, 'Crispy Teriyaki Tofu and Broccoli', 200, 15, 0, 0, 'image/menu/200_Sheet_Pan_Crispy_Teriyaki_Tofu_Broccoli.jpg', 'Discover the perfect balance of textures and flavors with our Crispy Teriyaki Tofu and Broccoli. Tender tofu, lightly fried to a crispy perfection, is paired with vibrant broccoli florets, all generously coated in our signature teriyaki sauce. This delectable dish offers a delightful contrast between the crunchy tofu and the tender broccoli, while the sweet and savory teriyaki glaze ties it all together. Whether you\'re a tofu enthusiast or looking for a satisfying and wholesome meal, our Crispy Teriyaki Tofu and Broccoli is a delightful choice. Come experience the fusion of crispiness and succulence in every bite.\n'),
(7, 'Stir Fried Vegetables', 200, 16, 0, 0, 'image/menu/200_Stir_Fry_Vegetables.jpg', 'Elevate your dining experience with our enticing Stir-Fried Vegetables. A vibrant medley of fresh, seasonal vegetables is expertly sautéed to perfection, capturing the essence of simplicity and flavor. The natural colors and crunchiness of the vegetables are enhanced by our secret stir-fry sauce, creating a dish that is both wholesome and irresistible. Whether you\'re a devoted vegetarian or simply in search of a healthy and flavorful option, our Stir-Fried Vegetables are the epitome of culinary excellence. Join us for a taste of pure delight and savor the goodness of nature\'s bounty in every bite.'),
(8, 'Chinese Pepper Steak', 300, 16, 0, 0, 'image/menu/300_Chinese_Pepper_Steak.jpg', 'Indulge in the exquisite flavors of our Chinese Pepper Steak, a culinary masterpiece that invites your taste buds on a journey through the heart of Chinese cuisine. This delectable dish showcases succulent cuts of beef, stir-fried to perfection with a medley of crisp, vibrant vegetables, all harmoniously blended with a rich and aromatic symphony of Chinese spices and sauces.\n\nOur secret ingredient, Chinese pepper, adds a tantalizing hint of fragrance and just the right amount of subtle spiciness, creating a mouthwatering sensation that will leave you craving for more. Whether it\'s a special celebration or a cozy family dinner, our Chinese Pepper Steak is the ideal choice to elevate your dining experience.\n\nWhat sets us apart is the ability to customize this dish to suit your unique preferences. We\'re dedicated to ensuring that every plate served is a personalized masterpiece that caters to your specific tastes. So why not explore the captivating world of Chinese cuisine and savor the flavors of our Chinese Pepper Steak? Your culinary adventure awaits!'),
(14, 'Chinese Pepper Steak', 300, 16, 0, 0, 'image/menu/300_Chinese_Pepper_Steak.jpg', 'Indulge in the exquisite flavors of our Chinese Pepper Steak, a culinary masterpiece that invites your taste buds on a journey through the heart of Chinese cuisine. This delectable dish showcases succulent cuts of beef, stir-fried to perfection with a medley of crisp, vibrant vegetables, all harmoniously blended with a rich and aromatic symphony of Chinese spices and sauces.\n\nOur secret ingredient, Chinese pepper, adds a tantalizing hint of fragrance and just the right amount of subtle spiciness, creating a mouthwatering sensation that will leave you craving for more. Whether it\'s a special celebration or a cozy family dinner, our Chinese Pepper Steak is the ideal choice to elevate your dining experience.\n\nWhat sets us apart is the ability to customize this dish to suit your unique preferences. We\'re dedicated to ensuring that every plate served is a personalized masterpiece that caters to your specific tastes. So why not explore the captivating world of Chinese cuisine and savor the flavors of our Chinese Pepper Steak? Your culinary adventure awaits!'),
(15, 'Mongolian Beef', 300, 17, 0, 0, 'image/menu/300_Mongolian_Beef.jpg', 'Experience the bold and savory allure of our Mongolian Beef, a dish that brings the rich flavors of Mongolia to your plate. Succulent strips of tender beef are wok-fried to perfection, then generously coated with a delectable, sweet and savory sauce. Our chefs skillfully infuse this classic Mongolian recipe with their own unique touch.\r\n\r\nEach bite is a harmonious blend of succulent beef, crisp scallions, and a symphony of flavors that captures the essence of this beloved Asian dish. It\'s a tantalizing journey for your taste buds, providing a perfect balance of textures and tastes.\r\n\r\nMongolian Beef is a true crowd-pleaser, suitable for any occasion. Whether you\'re joining us for a quick lunch or a special dinner, this dish promises an unforgettable culinary experience. We invite you to savor the taste of Mongolia right here in our restaurant, where tradition meets innovation for a truly memorable dining adventure.'),
(16, 'Butter Poached Lobster', 400, 25, 0, 0, 'image/menu/400_Butter_Poached_Lobster.jpg', 'Indulge in the epitome of luxury with our Butter Poached Lobster, a masterpiece that epitomizes seafood perfection. Succulent lobster tail, bathed in velvety butter, is expertly poached to tender, mouthwatering perfection. This exquisite dish exudes an unparalleled richness and depth of flavor.\r\n\r\nThe buttery poaching process imparts a luscious, melt-in-your-mouth texture to each morsel of lobster, while preserving its natural sweetness. This culinary experience is a true celebration of the sea\'s finest delicacies, elevated to an art form.\r\n\r\nButter Poached Lobster is the epitome of elegance and sophistication, making it the ideal choice for special occasions and romantic dinners. It\'s an opportunity to savor the sublime taste of the ocean, brought to you with a touch of culinary finesse. Join us and savor this exquisite masterpiece, where every bite is an ode to seafood opulence.'),
(17, 'Shrimp Fried Rice', 400, 16, 0, 0, 'image/menu/400_Shrimp_Fried_Rice.jpg', 'Delight in the classic flavors of our Shrimp Fried Rice, a timeless favorite that\'s the perfect blend of simplicity and deliciousness. Plump, succulent shrimp are expertly stir-fried with fluffy rice, farm-fresh vegetables, and our secret blend of savory seasonings.\r\n\r\nEach forkful of Shrimp Fried Rice offers a tantalizing combination of textures and tastes, from the tender shrimp to the perfectly cooked vegetables, all kissed with the savory aroma of our signature seasonings. This dish is a comforting and satisfying choice that never goes out of style.\r\n\r\nShrimp Fried Rice is the ideal companion for a quick lunch or a laid-back dinner, offering both heartwarming comfort and a taste of culinary excellence. Join us and savor this timeless classic, where every bite transports you to a world of flavor.'),
(18, 'Shrimp and Rice with Soybean sauce', 400, 16, 0, 0, 'image/menu/400_Shrimp_Rice_SoyBean_sauce.jpg', 'Embark on a culinary adventure with our Shrimp and Rice with Soybean Sauce, a dish that combines the exquisite flavors of the sea and the depth of umami. Plump, succulent shrimp are meticulously cooked and then lovingly drizzled with our secret soybean sauce, which infuses every bite with a burst of rich, savory goodness.\r\n\r\nThis dish brings together the succulence of shrimp and the comforting embrace of rice, creating a harmonious balance of textures and tastes. The soybean sauce, a culinary treasure, adds depth and complexity to each mouthful, making it a true gourmet experience.\r\n\r\nShrimp and Rice with Soybean Sauce is the epitome of fusion cuisine, where tradition meets innovation for a truly memorable dining adventure. It\'s an ideal choice for those seeking a unique and unforgettable flavor journey. Join us to savor the extraordinary combination of seafood and soybean sauce that transcends the ordinary.'),
(19, 'Iced Tea', 500, 3, 0, 0, 'image/menu/500_Iced_Tea.jpg', 'Quench your thirst and refresh your senses with our Iced Tea, a classic and timeless beverage that\'s the perfect companion for any meal. Our Iced Tea is brewed to perfection, then carefully chilled to create a harmonious blend of pure, clean flavors.\r\n\r\nWith its subtle yet satisfying taste, our Iced Tea is the ideal choice to complement your dining experience. Whether it\'s a hot summer\'s day or a cozy evening indoors, this refreshing beverage is a delightful way to cleanse the palate and enhance your meal.\r\n\r\nSip on the simplicity and purity of our Iced Tea, a beverage that transcends seasons and offers a moment of relaxation in every glass. Join us and enjoy this timeless and cooling classic.'),
(20, 'Orange Juice with Mint', 500, 3, 0, 0, 'image/menu/500_Orange_Juice_Mint.jpg', 'Reinvigorate your taste buds with our Orange Juice with Mint, a delightful and revitalizing beverage that harmoniously blends the zesty brightness of fresh oranges with the invigorating aroma of mint leaves. This vibrant concoction is a true celebration of natural flavors.\r\n\r\nOur freshly squeezed orange juice, combined with the refreshing essence of mint, creates a drink that\'s both vibrant and soothing. The citrusy sweetness of oranges mingles with the cool, herbal notes of mint, offering a symphony of tastes that\'s both uplifting and invigorating.\r\n\r\nOrange Juice with Mint is the perfect choice for those seeking a revitalizing and palate-cleansing experience. Whether it\'s to kickstart your day or to accompany a delightful meal, this beverage is a burst of freshness in every sip. Join us and savor this invigorating fusion of flavors.'),
(21, 'Smoothie Strawberry', 500, 3, 0, 0, 'image/menu/500_Smoothie_Strawberry.jpg', 'Indulge in a burst of natural sweetness with our Strawberry Smoothie, a luscious and refreshing concoction that embodies the essence of summer. Our smoothie is crafted with plump, ripe strawberries blended to perfection, creating a symphony of delightful flavors.\r\n\r\nEvery sip of our Strawberry Smoothie is like a journey through a sun-kissed strawberry field. It\'s a harmonious balance of fruity sweetness and a velvety texture, making it a perfect choice for those who crave a refreshing and wholesome treat.\r\n\r\nWhether you\'re starting your day or looking for a revitalizing pick-me-up, our Strawberry Smoothie is a delightful way to invigorate your senses. Join us to experience the sheer bliss of this fruity sensation.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `menu_foodCat_id_fk` (`foodcat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_foodCat_id_fk` FOREIGN KEY (`foodcat_id`) REFERENCES `food_cat` (`foodcat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
