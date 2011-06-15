CREATE TABLE avendu (iduser INT, idideas INT, datevente DATE, envoieconfirmation TINYINT, prixvente FLOAT(15, 2), PRIMARY KEY(iduser, idideas)) ENGINE = INNODB;
CREATE TABLE catgeoryidea (idcatgeoryidea INT AUTO_INCREMENT, nom_catgeoryidea VARCHAR(50) NOT NULL, PRIMARY KEY(idcatgeoryidea)) ENGINE = INNODB;
CREATE TABLE city (id_city INT AUTO_INCREMENT, idcountry INT NOT NULL, cityname VARCHAR(150), INDEX idcountry_idx (idcountry), PRIMARY KEY(id_city)) ENGINE = INNODB;
CREATE TABLE confidentialitylevel (id_confidentialitylevel INT AUTO_INCREMENT, nameconfidentialitylevel VARCHAR(150), PRIMARY KEY(id_confidentialitylevel)) ENGINE = INNODB;
CREATE TABLE country (idcountry INT AUTO_INCREMENT, namecountry VARCHAR(150), PRIMARY KEY(idcountry)) ENGINE = INNODB;
CREATE TABLE cv (id_cv INT AUTO_INCREMENT, iduser INT NOT NULL, titrecv VARCHAR(100), descriptioncv TEXT, datedisponibilitecv DATE, tarifcv VARCHAR(50), estvisiblecv TINYINT, INDEX iduser_idx (iduser), PRIMARY KEY(id_cv)) ENGINE = INNODB;
CREATE TABLE document (iddocument INT AUTO_INCREMENT, idideas INT NOT NULL, id_confidentialitylevel INT NOT NULL, titredocument VARCHAR(100), descriptiondocument TEXT, chemindocument TEXT, INDEX idideas_idx (idideas), INDEX id_confidentialitylevel_idx (id_confidentialitylevel), PRIMARY KEY(iddocument)) ENGINE = INNODB;
CREATE TABLE documenttype (iddocumenttype INT AUTO_INCREMENT, documenttypename VARCHAR(150), PRIMARY KEY(iddocumenttype)) ENGINE = INNODB;
CREATE TABLE experience (idexperience INT AUTO_INCREMENT, id_cv INT NOT NULL, titreexperience VARCHAR(150), descriptionexperience TEXT, datedebexperience DATE, datefinexperience DATE, INDEX id_cv_idx (id_cv), PRIMARY KEY(idexperience)) ENGINE = INNODB;
CREATE TABLE expertise (idexpertise INT AUTO_INCREMENT, expertisename VARCHAR(150), totalsupplierexpertise INT, PRIMARY KEY(idexpertise)) ENGINE = INNODB;
CREATE TABLE formatlistaccept (iddocumenttype INT, iddocument INT, PRIMARY KEY(iddocumenttype, iddocument)) ENGINE = INNODB;
CREATE TABLE haveexpertisein (idexpertise INT, iduser INT, PRIMARY KEY(idexpertise, iduser)) ENGINE = INNODB;
CREATE TABLE ideas (idideas INT AUTO_INCREMENT, idcatgeoryidea INT NOT NULL, iduser INT NOT NULL, titreideas VARCHAR(100), descriptionideas TEXT, priceideas FLOAT(15, 2), INDEX idcatgeoryidea_idx (idcatgeoryidea), INDEX iduser_idx (iduser), PRIMARY KEY(idideas)) ENGINE = INNODB;
CREATE TABLE job (idjob INT AUTO_INCREMENT, idcountry INT NOT NULL, id_city INT, iduser INT NOT NULL, idsubjobcategory INT NOT NULL, jobname VARCHAR(150), descriptionjob TEXT, datedeadlinejob DATE, INDEX iduser_idx (iduser), INDEX idcountry_idx (idcountry), INDEX id_city_idx (id_city), INDEX idsubjobcategory_idx (idsubjobcategory), PRIMARY KEY(idjob)) ENGINE = INNODB;
CREATE TABLE jobcategory (idjobcategory INT AUTO_INCREMENT, titlejobcategory VARCHAR(150), PRIMARY KEY(idjobcategory)) ENGINE = INNODB;
CREATE TABLE sector (id_sector INT AUTO_INCREMENT, sectorname VARCHAR(150), totalsuppliersector INT, PRIMARY KEY(id_sector)) ENGINE = INNODB;
CREATE TABLE subjobcategory (idsubjobcategory INT AUTO_INCREMENT, idjobcategory INT NOT NULL, titlesubjobcategory VARCHAR(150), INDEX idjobcategory_idx (idjobcategory), PRIMARY KEY(idsubjobcategory)) ENGINE = INNODB;
CREATE TABLE user (iduser INT AUTO_INCREMENT, idusertype INT, titreuser VARCHAR(5), nameuser VARCHAR(100), surnameuser VARCHAR(100), adressuser CHAR(10), countryuser CHAR(10), raisonsocialuser VARCHAR(150), phonenumberuser CHAR(10), mailuser VARCHAR(100), pwduser VARCHAR(100), isactivateuser TINYINT, lastconnexionuser DATE, zipcodeuser CHAR(10), jobdescriptionuser TEXT, corporationsize VARCHAR(150), isacceptemailnews TINYINT, apayersacotisationpourpublication TINYINT, datevalidationpayement DATE, datefinvalidation DATE, isconsultant TINYINT, isrecruteur TINYINT, issupplier TINYINT, INDEX idusertype_idx (idusertype), PRIMARY KEY(iduser)) ENGINE = INNODB;
CREATE TABLE usertype (idusertype INT AUTO_INCREMENT, nameusertype VARCHAR(150), totalsupplierusertype INT, PRIMARY KEY(idusertype)) ENGINE = INNODB;
CREATE TABLE workinsector (id_sector INT, iduser INT, PRIMARY KEY(id_sector, iduser)) ENGINE = INNODB;
ALTER TABLE avendu ADD CONSTRAINT avendu_iduser_user_iduser FOREIGN KEY (iduser) REFERENCES user(iduser);
ALTER TABLE avendu ADD CONSTRAINT avendu_idideas_ideas_idideas FOREIGN KEY (idideas) REFERENCES ideas(idideas);
ALTER TABLE city ADD CONSTRAINT city_idcountry_country_idcountry FOREIGN KEY (idcountry) REFERENCES country(idcountry);
ALTER TABLE cv ADD CONSTRAINT cv_iduser_user_iduser FOREIGN KEY (iduser) REFERENCES user(iduser);
ALTER TABLE document ADD CONSTRAINT document_idideas_ideas_idideas FOREIGN KEY (idideas) REFERENCES ideas(idideas);
ALTER TABLE document ADD CONSTRAINT dici FOREIGN KEY (id_confidentialitylevel) REFERENCES confidentialitylevel(id_confidentialitylevel);
ALTER TABLE experience ADD CONSTRAINT experience_id_cv_cv_id_cv FOREIGN KEY (id_cv) REFERENCES cv(id_cv);
ALTER TABLE formatlistaccept ADD CONSTRAINT formatlistaccept_iddocumenttype_documenttype_iddocumenttype FOREIGN KEY (iddocumenttype) REFERENCES documenttype(iddocumenttype);
ALTER TABLE formatlistaccept ADD CONSTRAINT formatlistaccept_iddocument_document_iddocument FOREIGN KEY (iddocument) REFERENCES document(iddocument);
ALTER TABLE haveexpertisein ADD CONSTRAINT haveexpertisein_iduser_user_iduser FOREIGN KEY (iduser) REFERENCES user(iduser);
ALTER TABLE haveexpertisein ADD CONSTRAINT haveexpertisein_idexpertise_expertise_idexpertise FOREIGN KEY (idexpertise) REFERENCES expertise(idexpertise);
ALTER TABLE ideas ADD CONSTRAINT ideas_iduser_user_iduser FOREIGN KEY (iduser) REFERENCES user(iduser);
ALTER TABLE ideas ADD CONSTRAINT ideas_idcatgeoryidea_catgeoryidea_idcatgeoryidea FOREIGN KEY (idcatgeoryidea) REFERENCES catgeoryidea(idcatgeoryidea);
ALTER TABLE job ADD CONSTRAINT job_iduser_user_iduser FOREIGN KEY (iduser) REFERENCES user(iduser);
ALTER TABLE job ADD CONSTRAINT job_idsubjobcategory_subjobcategory_idsubjobcategory FOREIGN KEY (idsubjobcategory) REFERENCES subjobcategory(idsubjobcategory);
ALTER TABLE job ADD CONSTRAINT job_idcountry_country_idcountry FOREIGN KEY (idcountry) REFERENCES country(idcountry);
ALTER TABLE job ADD CONSTRAINT job_id_city_city_id_city FOREIGN KEY (id_city) REFERENCES city(id_city);
ALTER TABLE subjobcategory ADD CONSTRAINT subjobcategory_idjobcategory_jobcategory_idjobcategory FOREIGN KEY (idjobcategory) REFERENCES jobcategory(idjobcategory);
ALTER TABLE user ADD CONSTRAINT user_idusertype_usertype_idusertype FOREIGN KEY (idusertype) REFERENCES usertype(idusertype);
ALTER TABLE workinsector ADD CONSTRAINT workinsector_iduser_user_iduser FOREIGN KEY (iduser) REFERENCES user(iduser);
ALTER TABLE workinsector ADD CONSTRAINT workinsector_id_sector_sector_id_sector FOREIGN KEY (id_sector) REFERENCES sector(id_sector);
