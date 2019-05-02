use bdd_blog_php;

-- ------------------------------------------------------------------------------
-- ajout data pour la table role
-- ------------------------------------------------------------------------------
INSERT INTO Role (role) VALUES
   ("adiminstrator"),
   ("anthentificateUser");
   
-- ------------------------------------------------------------------------------
-- ajout data pour la table user
-- ------------------------------------------------------------------------------
INSERT INTO User (first_name, last_name, email, url_img, create_date, password, Role_id_role) VALUES
   ("HAMAYON", "Fabien", "fabienhamayon@free.fr", " ", "2019-04-04", " ", 1 ),
   ("TUDO", "Alex", "tudoalex@free.fr", " ", "2019-04-05", " ", 2),
   ("LASNE", "Steven", "lasnesteven@free.fr", " ", "2019-04-06", " ", 1),
   ("DUPONT", "Lise", "dupontlise@free.fr", " ", "2019-04-07", " ", 2);

-- ------------------------------------------------------------------------------
-- ajout data pour la table post
-- ------------------------------------------------------------------------------
INSERT INTO Post (title, lede, text, url_image, create_date, User_id_user) VALUES
   ("Mon premier article", "Je suis le chapo du premier article", "Texte du premiere article", " ","2019-04-15",1),
   ("Mon deuxième article", "Je suis le chapo du deuxième article", "Texte du deuxième article", " ","2019-04-16",3),
   ("Mon troisième article", "Je suis le chapo du troisième article", "Texte du troisième article", " ","2019-04-17",1);

-- ------------------------------------------------------------------------------
-- ajout data pour la table Status
-- ------------------------------------------------------------------------------
INSERT INTO Status (status) VALUES
   ("valid"),
   ("invalid"),
   ("inwait");

-- ------------------------------------------------------------------------------
-- ajout data pour la table Comment
-- ------------------------------------------------------------------------------
INSERT INTO Comment (text, create_date, Status_id_status, Post_id_post, User_id_user) VALUES
   ("je suis un commentaire", "2019-04-18", 1, 1, 2),
   ("je suis un commentaire (2)", "2019-04-19", 2, 2, 4),
   ("je suis un commentaire (3)", "2019-04-20", 3, 3, 1),
   ("je suis un commentaire (4)", "2019-04-18", 1, 1, 1);