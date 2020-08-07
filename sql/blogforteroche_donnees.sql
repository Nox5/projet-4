-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 23 juil. 2020 à 18:41
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blogforteroche`
--

--
-- Déchargement des données de la table `billets`
--

INSERT INTO `billets` (`id`, `title`, `content`, `author`, `date_creation`, `image`) VALUES
(161, 'Chapitre 2 -Acclimatation-', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sapien libero, ullamcorper ut lacinia sed, lacinia id magna. Quisque elementum, elit malesuada commodo pretium, nulla leo feugiat mauris, eget laoreet sapien urna in mauris. Nulla facilisi. Donec vel dolor sapien. Nunc vitae pretium sapien. Maecenas tincidunt sapien eget ex aliquet tincidunt. Fusce nec augue sodales, rutrum elit in, tincidunt purus. Proin vulputate viverra tortor. Maecenas quis lacus sit amet mi pellentesque placerat vitae a nunc. Aenean sapien eros, pulvinar eget mauris tempus, lobortis tincidunt erat. Curabitur tincidunt scelerisque nisi, ac dapibus diam scelerisque in. Sed elementum fermentum enim nec sodales.\r\n\r\nAenean congue dui ut libero tincidunt accumsan. Etiam ultricies libero tortor, quis vestibulum lorem condimentum ut. Suspendisse ac venenatis tellus. Vestibulum nunc risus, dignissim sit amet finibus in, eleifend nec nibh. Donec ut finibus nisl. Donec at tempor augue. Nam sit amet massa ac neque accumsan consequat id a nibh. Fusce posuere blandit dolor, nec hendrerit augue scelerisque a. Nullam quis mi tortor. Sed ac mollis tortor. Cras viverra quam est, sit amet commodo felis scelerisque non.\r\n\r\nVestibulum dignissim arcu nunc, non auctor sem lobortis vitae. Cras tristique nulla ac tristique porttitor. Pellentesque pharetra odio turpis, quis iaculis diam vestibulum sit amet. Phasellus efficitur sit amet magna sit amet blandit. Aenean semper elit non nibh convallis, sed consectetur est blandit. Ut tempor porta commodo. Fusce fermentum nisi metus, ac cursus nisl mollis sed. Pellentesque sed dapibus quam. Vestibulum vel faucibus sapien. Integer facilisis lacus purus, sit amet efficitur justo fermentum ut. Maecenas tincidunt eros velit, sit amet rutrum erat tempor ac.\r\n\r\nNulla ut orci ac augue porta rhoncus. Suspendisse maximus augue vel sagittis facilisis. Maecenas porttitor gravida arcu ac cursus. Maecenas massa quam, luctus ac est eu, euismod bibendum enim. Nam a purus nec est tincidunt maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida, turpis id condimentum lacinia, nibh turpis gravida quam, non suscipit ligula justo nec velit.<p>', 'Jean Forteroche', '2020-06-24', 'https://www.levif.be/medias/13978/7157209.jpg'),
(162, 'Chapitre 1 -Départ-', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sapien libero, ullamcorper ut lacinia sed, lacinia id magna. Quisque elementum, elit malesuada commodo pretium, nulla leo feugiat mauris, eget laoreet sapien urna in mauris. Nulla facilisi. Donec vel dolor sapien. Nunc vitae pretium sapien. Maecenas tincidunt sapien eget ex aliquet tincidunt. Fusce nec augue sodales, rutrum elit in, tincidunt purus. Proin vulputate viverra tortor. Maecenas quis lacus sit amet mi pellentesque placerat vitae a nunc. Aenean sapien eros, pulvinar eget mauris tempus, lobortis tincidunt erat. Curabitur tincidunt scelerisque nisi, ac dapibus diam scelerisque in. Sed elementum fermentum enim nec sodales. Aenean congue dui ut libero tincidunt accumsan. Etiam ultricies libero tortor, quis vestibulum lorem condimentum ut. Suspendisse ac venenatis tellus. Vestibulum nunc risus, dignissim sit amet finibus in, eleifend nec nibh. Donec ut finibus nisl. Donec at tempor augue. Nam sit amet massa ac neque accumsan consequat id a nibh. Fusce posuere blandit dolor, nec hendrerit augue scelerisque a. Nullam quis mi tortor. Sed ac mollis tortor. Cras viverra quam est, sit amet commodo felis scelerisque non. Vestibulum dignissim arcu nunc, non auctor sem lobortis vitae. Cras tristique nulla ac tristique porttitor. Pellentesque pharetra odio turpis, quis iaculis diam vestibulum sit amet. Phasellus efficitur sit amet magna sit amet blandit. Aenean semper elit non nibh convallis, sed consectetur est blandit. Ut tempor porta commodo. Fusce fermentum nisi metus, ac cursus nisl mollis sed. Pellentesque sed dapibus quam. Vestibulum vel faucibus sapien. Integer facilisis lacus purus, sit amet efficitur justo fermentum ut. Maecenas tincidunt eros velit, sit amet rutrum erat tempor ac. Nulla ut orci ac augue porta rhoncus. Suspendisse maximus augue vel sagittis facilisis. Maecenas porttitor gravida arcu ac cursus. Maecenas massa quam, luctus ac est eu, euismod bibendum enim. Nam a purus nec est tincidunt maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida, turpis id condimentum lacinia, nibh turpis gravida quam, non suscipit ligula justo nec velit.</p>\r\n<p>&nbsp;</p>', 'Jean Forteroche', '2020-07-03', 'https://www.levif.be/medias/11083/5674935.jpg'),
(156, 'Chapitre 3 -Changement-', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sapien libero, ullamcorper ut lacinia sed, lacinia id magna. Quisque elementum, elit malesuada commodo pretium, nulla leo feugiat mauris, eget laoreet sapien urna in mauris. Nulla facilisi. Donec vel dolor sapien. Nunc vitae pretium sapien. Maecenas tincidunt sapien eget ex aliquet tincidunt. Fusce nec augue sodales, rutrum elit in, tincidunt purus. Proin vulputate viverra tortor. Maecenas quis lacus sit amet mi pellentesque placerat vitae a nunc. Aenean sapien eros, pulvinar eget mauris tempus, lobortis tincidunt erat. Curabitur tincidunt scelerisque nisi, ac dapibus diam scelerisque in. Sed elementum fermentum enim nec sodales.\r\n\r\nAenean congue dui ut libero tincidunt accumsan. Etiam ultricies libero tortor, quis vestibulum lorem condimentum ut. Suspendisse ac venenatis tellus. Vestibulum nunc risus, dignissim sit amet finibus in, eleifend nec nibh. Donec ut finibus nisl. Donec at tempor augue. Nam sit amet massa ac neque accumsan consequat id a nibh. Fusce posuere blandit dolor, nec hendrerit augue scelerisque a. Nullam quis mi tortor. Sed ac mollis tortor. Cras viverra quam est, sit amet commodo felis scelerisque non.\r\n\r\nVestibulum dignissim arcu nunc, non auctor sem lobortis vitae. Cras tristique nulla ac tristique porttitor. Pellentesque pharetra odio turpis, quis iaculis diam vestibulum sit amet. Phasellus efficitur sit amet magna sit amet blandit. Aenean semper elit non nibh convallis, sed consectetur est blandit. Ut tempor porta commodo. Fusce fermentum nisi metus, ac cursus nisl mollis sed. Pellentesque sed dapibus quam. Vestibulum vel faucibus sapien. Integer facilisis lacus purus, sit amet efficitur justo fermentum ut. Maecenas tincidunt eros velit, sit amet rutrum erat tempor ac.\r\n\r\nNulla ut orci ac augue porta rhoncus. Suspendisse maximus augue vel sagittis facilisis. Maecenas porttitor gravida arcu ac cursus. Maecenas massa quam, luctus ac est eu, euismod bibendum enim. Nam a purus nec est tincidunt maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida, turpis id condimentum lacinia, nibh turpis gravida quam, non suscipit ligula justo nec velit.</p>', 'Jean Forteroche', '2020-06-23', 'https://www.jeparsaucanada.com/wp-content/uploads/2013/07/alaska.jpg');

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `id_billet`, `author`, `content`, `date_content`, `signalement`) VALUES
(16, 159, 'moi', 'je test', '2020-06-23', 0),
(14, 48, 'Nox', 'dd', '2020-06-18', 0),
(17, 160, 'Nox', 'ddsqdq', '2020-06-24', 0),
(19, 160, 'NOX', 'test', '2020-06-24', 0),
(27, 156, 'Jean jean', '<p>il est nul ton chapitre !!</p>', '2020-07-22', 1);

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `type`, `password`) VALUES
(1, 'admin', 'admin@contact.com', 'admin', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
