USE db619302666;

DROP TABLE IF EXISTS `user_info`;

CREATE TABLE `user_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `courriel` varchar(100) NOT NULL UNIQUE,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `phone2` varchar(100) DEFAULT NULL,
  `consent` tinyint(1) DEFAULT NULL,
  `consentModDate` datetime DEFAULT NULL,
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user_info` (`nom`, `prenom`, `courriel`, `company`)
VALUES
('Zebulah','Fadade','zfadade@yahoo.com', 'ASDM Solutions, Inc'),
('Ackad', 'Marie-Jacqueline', 'mjackad@respublica.ca', 'Res publica'),
('Agostinho', 'Sandra', 'sandrinha74@hotmail.com', ''),
('Alarie', 'Guylaine', 'alarie.guylaine@hydro.qc.ca', 'HQ'),
('Arbic', 'Tania', 'tarbic@icaxon.com', ''),
('Archambault', 'Christine', 'cgarchambault@mccarthy.ca', ''),
('Archambault', 'Hélène', 'Archambault.helene@hydro.qc.ca', 'HQ'),
('Asenova', 'Ana', 'ana_asenova@yahoo.ca', ''),
('Assingo', 'Guy-Gérard', 'guy-gerard@assingo.com', 'Assingo Decors Evenements'),
('Azizsoltani', 'Mahtab', 'mazizsoltani@yahoo.ca', ''),
('Barbe', 'Claudette', 'barbe.claudette@hydro.qc.ca', 'HQ'),
('Barbe', 'Lorraine', 'barbe.lorraine@hydro.qc.ca', 'HQ'),
('Barroso', 'Isabel', 'isabel@groupriccardi.com', ''),
('Bassil', 'Michel', 'michelbassil@gmail.com', ''),
('Beauchamp', 'Karine', 'karineb@cremcv.com', 'CRE'),
('Beauchamp', 'Simon', 'simon.beauchamp@snclavalin.com', ''),
('Beaudoin', 'Manon', 'mbeaudoin@lacaisse.com', ''),
('Beaulieu', 'Martin', 'beaulieu.martin@hydro.qc.ca', 'HQ'),
('Beauparlant', 'Linda', 'linda.beauparlant@ca.pwc.com', 'PWC'),
('Bédard', 'Martyne', 'martyne.bedard@fbn.ca', ''),
('Bélanger', 'Chantal', 'belanger2@banquelaurentienne.ca', 'Banque Laurentienne du Canada'),
('Belanger', 'Normand', 'belanger.normand@cspn.qc.ca', ''),
('Bergeron', 'Agathe', 'abergeron@ohdq.com', 'Ordre Hygiénistes Dentaires'),
('Bergeron', 'Diane', 'diane.bergeron@groupement.ca', 'Groupement des Chefs d\'entreprise'),
('Bernabei', 'Antonio', 'ber-toni-harm-hb@hotmail.ca', ''),
('Bernier', 'Amélie', 'ambernier@hotmail.com', ''),
('Bernier', 'Guylaine', 'guylaine.bernier@cnrc-nrc.gc.ca', ''),
('Berthiaume', 'Guy', 'gberthiaume@mccarthy.ca', ''),
('Bérubé', 'Hélène', 'helene_berube9@hotmail.com', 'Desjardins Assurances'),
('Bessette', 'Johanne', 'johanne.bessette@bnc.ca', ''),
('Bilodeau', 'Pierre-Olivier', 'pierre-olivier.bilodeau@sobeys.com', 'Sobeys'),
('Bilodeau', 'Nil', 'bilodeau.nil@hydro.qc.ca', 'HQ'),
('Binette', 'Sylvie', 'binette.sylvie@hydro.qc.caHQ', ''),
('Birtz', 'Michel', 'michel.birtz@bnc.ca', ''),
('Bisson', 'Lucie', 'bissonlucie@videotron.ca', 'REMME'),
('Bissonnette', 'Louise', 'l.bissonnette@emertech.ca', 'Emertech inc.'),
('Blackburn', 'Francine', 'francine.d.blackburn@desjardins.com', 'Carrefour Desjardins'),
('Blackburn', 'Sylvain', 'sylvain.blackburn@ca.pepsi.com', ''),
('Blanchette', 'Serge', 'sblanchette@enixum.com', 'Groupe Enixum inc.'),
('Blondin', 'Josée', 'jblondin@conseillersintersources.com', 'Conseillers Inter Sources'),
('Boisjoly', 'Normand', 'normand.boisjoly@sajemontrealmetro.com', 'Saje'),
('Bolduc', 'Guylaine', 'gbolduc@lacaisse.com', ''),
('Bolduc', 'Hubert', 'hubert_bolduc@cascades.com', 'Cascades'),
('Bolduc', 'Marie-Josée', 'marie-josee.bolduc@emergis.com', ''),
('Bonakdar', 'Lida', 'lbonakdar@videotron.ca', ''),
('Bonneau', 'Lise', 'lise.bonneau@csp.qc.ca', ''),
('Bonnifet', 'Romain', 'romain.bonnifet@fastercom.ca', ''),
('Bosak', 'Olga', 'bosak.olga@cnrc-nrc.gc.ca', 'CNRC'),
('Boucarut', 'Eveline', 'eveline.boucarut@ca.ey.com', 'Ernst & Young'),
('Bouchard', 'Anne', 'abouchard@apesquebec.org', 'As. Des pharmaciens des établissements'),
('Bouchard', 'Céline', 'celine.bouchard@bnc.ca', ''),
('Bouchard', 'Pascal', 'pascal.bouchard@lafarge-na.com', ''),
('Bouchard', 'Philippe', 'philippe.bouchard@bnc.ca', ''),
('Boucher', 'François', 'francois.boucher@lafarge-na.com', ''),
('Boucher', 'Jacques', 'jboucher@vsj.ca', ''),
('Boucher', 'Jean-Olivier', 'joboucher@vanhoutte.com', ''),
('Bouffard', 'France', 'france.bouffard@saaq.gouv.qc.ca', ''),
('Bouffard', 'Normande', 'bouffard.normande@hydro.qc.ca', 'HQ'),
('Boulanger', 'Chantal', 'chantal.boulanger@quebecor.com', ''),
('Bourgier', 'Christine', 'cbourgier@msn.com', 'Smile Photographe'),
('Bourgouin', 'Suzanne', 'suzanne.bourgouin@bnc.ca', ''),
('Boutin', 'Rachel', 'rachel.boutin@surete.qc.ca', 'SQ'),
('Bouvette', 'Monique', 'monique.bouvette@ccq.org', ''),
('Bouvier', 'Chantal', 'cbouvier@ccmm.qc.ca', ''),
('Boyer', 'Marie-Josée', 'marie-josee.boyer@admtl.com', ''),
('Boyer', 'Annick', 'pythie@videotron.ca', ''),
('Brault', 'Stéphanie', 's.brault@orhri.org', 'CRHA CRIA'),
('Brisebois', 'Claudine', 'claudine.brisebois@csp.qc.ca', 'csp'),
('Brouillard', 'Catherine', 'brouillard.catherine@hydro.qc.ca', 'HQ'),
('Brown', 'Ronald', 'ronaldbrown@sataq.com', 'SATAQ inc.'),
('Brunet', 'Andrée', 'andree.brunet@desjardins.com', 'Desjardins'),
('Buteau', 'Sharon', 'sharonbuteau@yahoo.com', ''),
('Cantin', 'André', 'andre.cantin@saaq.gouv.qc.ca', ''),
('Caplette', 'Isabelle', 'isabelle.caplette@power.alstom.com', 'Power alstom'),
('Carbone', 'Linda', 'ottdq@affaires.com', 'Ordre des techniciennes et techniciens dentaires d'),
('Carle', 'Karine', 'Karine.carle@airliquide.com', ''),
('Carlier', 'François', 'francois.carlier@lvmhcapc.com', 'Guerlain'),
('Carrier', 'Gilles', 'gcarrier@jeancoutu.com', 'Groupe Jean Coutu PJC-inc. Le-'),
('Castonguay', 'Daniel', 'castonguay.daniel@hydro.qc.ca', 'HQ'),
('Castonguay', 'Martine', 'arihq@qc.aira.com', 'Association des ressources intermédiaires d|héberg'),
('Caza', 'Lise', 'lise.caza@banquelaurentienne.ca', 'Banque Laurentienne du Canada'),
('Castro', 'Caroline', 'carolinecastro@hotmail.com', ''),
('Cédilotte', 'Marcel', 'marcelc@railcan.ca', ''),
('Cerri', 'Laurence', 'laurence.cerri@bnc.ca', 'Bnc'),
('Cestra', 'Bruno', 'bruno@brunoandnick.ca', 'Bruno & Nick Food Distributor'),
('Chalifoux', 'Nicole', 'nicole.chalifoux@bnc.ca', 'BNC'),
('Champagne', 'Mélanie', 'champagne.me@csdm.qc.ca', 'CSDM'),
('Champagne', 'Solange', 'champagnes@csdm.qc.ca', ''),
('Champagne', 'Sylvie', 'schampagne@barreau.qc.ca', ''),
('Chaperon', 'Daniel', 'dchaperon@rogers.blackberry.net', ''),
('Charbonneau', 'Alain', 'alain.charbonneau@bnc.ca', ''),
('Charlebois', 'Tania', 'charlebois.tania@gmail.com', ''),
('Charpentier', 'Anne', 'acharpentier@ville.montreal.qc.ca', ''),
('Charron', 'Micheline', 'mcharron@videotron.ca', ''),
('Chartrand', 'Ginette', 'Ginette_Chartrand_csssl@ssss.gouv.qc.ca', ''),
('Chartrand', 'Joan', 'joan.chartrand@ca.pwc.com', ''),
('Chartrand', 'Josée', 'josee.chartrand@desjardins.com', ''),
('Chauret', 'Julien', 'julien.chauret.cjl@ssss.gouv.qc.ca', ''),
('Cherry', 'James', 'james.cherry@admtl.com', 'Aéroport de Montréal'),
('Chicoine', 'Mélodie', 'melodie_chicoine@yahoo.ca', ''),
('Ciobanu', 'Bogdan', 'bogdan.ciobanu@cnrc-nrc.gc.ca', ''),
('Cloutier', 'Chantal', 'cloutier.chantal@hydro.qc.ca', 'HQ'),
('Cloutier', 'Geneviève', 'cloutier.genevieve@hydro.qc.ca', 'HQ'),
('Cloutier', 'Richard', 'richard.cloutier@cn.ca', ''),
('Collette', 'Alain', 'optmq@qc.aira.com', 'Ordre professionnel des technologistes médicaux du'),
('Collins', 'Martine', 'martine.collins@ca.pwc.com', ''),
('Colpron', 'Liliane', 'lcolpron@pmoisson.com', 'Boulangerie Première Moisson'),
('Constantin', 'Cédric', 'cedric_constantin@hotmail.com', ''),
('Côté', 'Denyse', 'cote.denyse@hydro.qc.ca', 'HQ'),
('Côté', 'Louise', 'lcote@cga-quebec.org', 'ordre CGA'),
('Côté', 'Suzanne', 'suzanne.cote@bnc.ca', 'BNC'),
('Côté', 'Serge', 'serge.cote@admtl.com', ''),
('Cotero Gonzalez', 'Rocio', 'rocio.cotero-gonzalez@stm.info', 'stm'),
('Coudé', 'Nathalie', 'coude.nathalie@hydro.qc.ca', 'HQ'),
('Courteau', 'France', 'france_courteau@sunlife.com', ''),
('Courtemanche', 'Mario', 'mario.courtemanche@bnc.ca', ''),
('Cousland', 'Gregory', 'gregory.cousland@sgcib.com', 'soc gén'),
('Coutu', 'Céline', 'celine.coutu@vmd.desjardins.com', ''),
('Crevier', 'Linda', 'remme.info@gmail.com', 'REMME'),
('Croteua', 'Manon', 'croteau.manon@hydro.qc.ca', 'HQ'),
('Cyr', 'Nicole', 'cyr.nicole@hydro.qc.ca', 'HQ'),
('David', 'Alain', 'alain.david@yoplait.ca', 'Aliments Ultima inc.'),
('David', 'Josianne', 'josianne.david@fbn.ca', ''),
('D|Astous', 'Pauline', 'dastousp@sympatico.ca', ''),
('De Repentigny', 'Louise', 'derepentigny.louise@hydro.qc.ca', 'HQ'),
('DeFazio', 'Rita', 'Rita.DeFazio@standardlife.ca', 'Standardlife'),
('Delisle', 'Claude', 'adgmq@adgmq.qc.ca', 'Association des directeurs généraux des municipali'),
('Delisle', 'Josée', 'josee.delisle@bnc.ca', ''),
('Delorme', 'Cynthia', 'cynthia.delorme@dcrdesjardins.com', ''),
('Demontes', 'Maryline', 'demontesm@yahoo.ca', ''),
('Desautels', 'Bruno', 'bdesautels@kpmg.ca', 'KPMG s.r.l. / s.e.n.r.c.l.'),
('Desgagné', 'Sylvie', 'Sylvie.desgagne@eacom.ca', 'EACOM'),
('Desmarais', 'Daniel', 'desmarais.daniel@hydro.qc.ca', 'HQ'),
('Desmarais', 'Richard', 'richard.desmarais@abbott.com', ''),
('Desrosiers', 'Anne', 'anne.desrosiers@rbc.com', ''),
('Desrosiers', 'Yvette', 'yvette.desrosiers@promutuel.ca', ''),
('Devillers', 'Christelle', 'christelle.devillers@airliquide.com', 'Airliquide'),
('Dignard', 'Jacques', 'Jacques.dignard@desjardins.com', 'Fédération des Caisses Desjardins du Québec'),
('Doyon', 'Carolyne', 'carolyne.doyon@clubmed.com', 'Club Med'),
('Drebot', 'Tomasz', 'tomasz.drebot@eulerhermes.com', ''),
('Drolet', 'Danielle', 'danielle.drolet@desjardins.com', ''),
('Drouin', 'Claire', 'claire.drouin@rbc.com', ''),
('Drouin', 'Isabelle', 'isabelle.drouin@radio-canada.ca', ''),
('Dubé', 'Katy', 'dube.katy@hydro.qc.ca', 'HQ'),
('Dufour', 'Steve', 'dufour.steve@hydro.qc.ca', 'HQ'),
('Dumas', 'Nathalie', 'nathalie.dumas@zonec.ca', ''),
('Dumontier', 'Line', 'line.dumontier@desjardins.com', ''),
('Duperval', 'Jean-Sébastien', 'zebass@yahoo.com', 'HQ'),
('Dupont', 'Angela', 'dupontangela@hotmail.com', ''),
('Dupont', 'Marie-Christine', 'marie-christine.dupont@alcan.com', ''),
('Dupont', 'Gilles', 'g.dupont@add.qc.ca', ''),
('Dupuis', 'Daniel', 'daniel.dupuis@bnc.ca', ''),
('Dupuis', 'Josée', 'josee_dupuis@radio-canada.ca', ''),
('Durette', 'Isabelle', 'isabelle.durette@hotmail.com', ''),
('Dutta', 'Sankjuta', 'sunjukta@gmail.com', ''),
('Duval', 'Johanne', 'johanne.duval@banquelaurentienne.ca', ''),
('Ethier', 'Suzy', 'sethier@consult-iidc.com', 'Luwrence Poole'),
('Ethier', 'Sylvain', 'ethier.sylvain@hydro.qc.ca', 'HQ'),
('Ferland', 'Brigitte', 'Ferland.Brigitte.2@hydro.qc.ca', ''),
('Filiatrault', 'Martine', 'martine_filiatrault@sympatico.ca', ''),
('Filiatrault', 'Martine', 'martine@servicesconseilsmf.com', ''),
('Fornasier', 'Ann', 'afornasier@upa.qc.ca', 'UPA'),
('Fortier', 'Nathalie', 'nathaliemichellefortier@gmail.com', ''),
('Fortier', 'Nathalie', 'nfortier@hotelmortagne.com', ''),
('Fortier', 'Patricia', 'fortier.patricia@hydro.qc.ca', 'HQ'),
('Fortier', 'Réal', 'climatisationfortier@qc.aira.com', 'Climatisation Fortier & Frères ltée'),
('Fortin', 'Claire', 'acq-laur@acq.org', 'Association de la construction du Québec - Laval -'),
('Fortin-Lacasse', 'Katerine', 'katerine_lacasse@hotmail.com', ''),
('Frechette', 'Frederic', 'fred2008@videotron.ca', ''),
('Fréchette', 'Frédéric', 'frederic.frechette@videotron.ca', ''),
('Frédéric', 'Viossat', 'Fredviossat@yahoo.com', ''),
('Fugère', 'Pamela', 'info@kmc2entainement.com', '514 953-5626'),
('Galarneau', 'Nicole', 'ngalarneau@rquode.com', 'Regroupement québécois des organismes de développe'),
('Gallant', 'Pascal', 'pascalagallanta@hotmail.com', ''),
('Gariepy', 'Bruno', 'bruno.gariepy@sajemontrealmetro.com', 'Saje'),
('Gariepy', 'Nicole', 'nicole.gariepy@bnc.ca', ''),
('Gariepy', 'Richard', 'richard.gariepy@cgi.com', ''),
('Gauthier', 'Danielle', 'dagauthier@airfrance.fr', 'Air France'),
('Geissen', 'Sandra', 'sandra.geissen@lvmhcapc.com', 'Guerlain'),
('Genest', 'Richard', 'rgenest@jeancoutu.com', 'Jean Coutu'),
('Geoffrion', 'Lucie', 'geoffrion.lucie@hydro.qc.ca', 'HQ'),
('Gervais', 'Louise', 'gervais.louise@hydro.qc.ca', 'HQ'),
('Gilbert', 'Chantal', 'gilbert.chantal@hydro.qc.ca', 'HQ'),
('Gilles', 'Nadia', 'nadia.gilles@transat.com', 'Transat'),
('Gingras', 'Annie', 'agingras@labopharm.com', ''),
('Godin', 'Joanne', 'joanne.godin@standardlife.ca', 'Standard Life Assurance'),
('Goulet', 'Sylvie', 'sgoulet@jeancoutu.com', 'jean Coutu'),
('Gouveia', 'Mercédes', 'm.gouveia@sympatico.ca', ''),
('Gratton', 'Élisabeth', 'egratton@gazmetro.com', ''),
('Gravel', 'Christian', 'christian.gravel@desjardins.com', ''),
('Grégoire', 'Judy', 'gregoire.judy@hydro.qc.ca', 'HQ'),
('Grenier', 'Bernard', 'grenier.bernard@hydro.qc.ca', 'HQ'),
('Grenier', 'Louis', 'grenier.louis@hydro.qc.ca', 'HQ'),
('Grignon', 'Isabelle', 'grignon.isabelle@hydro.qc.ca', 'HQ'),
('Grondin', 'Jonathan', 'grondin.jonathan@hydro.qc.ca', 'HQ'),
('Guérin', 'Irène', 'irene.guerin@yahoo.ca', ''),
('Guérin', 'Maire-Josée', 'marie-josee.guerin@airliquide.com', 'Air Liquide Canada'),
('Guilmette', 'Sophie', 'sguilmette@gazmetro.com', 'Gaz Metro'),
('Guy', 'Diane', 'diane_guy@tnb.com', 'Thomas & Betts'),
('Habib', 'Chadi', 'chadi.habib@desjardins.com', 'Fédération des Caisse Desjardins Technologies'),
('Hamel', 'Jacques', 'jacques.n.hamel@desjardins.com', ''),
('He', 'Bin', 'ninhe@kpmg.ca', ''),
('Hébert', 'Carole', 'carole.hebert@zonec.ca', 'Zone c'),
('Hébert', 'Donald', 'hebert.donald@hydro.qc.ca', 'HQ'),
('Hébert', 'Norman', 'normanhebert@groupeparkavenue.com', 'Groupe Park Avenue'),
('Hébert', 'Normand', 'normand.hebert@cgi.com', ''),
('Hénault', 'Franck', 'henault.franck@hydro.qc.ca', 'Hydro- Québec'),
('Hernandez', 'Gustavo', 'gustavo.hernandez@mail.mcgill.ca', ''),
('Hinse', 'Marc André', 'marcandre.hinse@cibc.com', 'Banque CIBC'),
('Hotte', 'Geneviève', 'hotte.genevieve@hydro.qc.ca', 'HQ'),
('Houde', 'Dave', 'dave.houde@sodexo.com', ''),
('Houde', 'François', 'fhoude@rsb.qc.ca', 'IRQ'),
('Houde', 'François', 'francois.houde.irq@gmail.com', 'IRQ'),
('Houde', 'René', 'rhoude@pastene.com', 'Pastene inc.'),
('Houde', 'Stéphane', 'faranellie@yahoo.com', ''),
('Houle', 'Danielle', 'danielle.houle@bnc.ca', ''),
('Houle', 'Jacques', 'jhoule@barreau.qc.ca', ''),
('Houle', 'Normand', 'normand.houle@desjardins.com', 'Fédération des Caisses Desjardins du Québec'),
('Houtte', 'Christian', 'associa@aluminium.qc.ca', 'Association de l|aluminium du Canada'),
('How', 'Agnès', 'ahow@dwpv.com', ''),
('Howard', 'Diane', 'diane.howard@ccd.desjardins.com', ''),
('Hudon', 'Jean', 'hudon.jean@hydro.qc.ca', 'HQ'),
('Hudon', 'Josée', 'Josee.Hudon@aero.bombardier.com', 'Bombardier'),
('Hudon', 'Steeve', 'hudon.steeve@hydro.qc.ca', 'HQ'),
('Imbeau', 'Pascale', 'imbeaup@vmbl.ca', ''),
('Imbeau', 'Suzanne', 'suzanne.imbeau@bell.ca', 'Bell'),
('Ion', 'Raluca', 'raluca.ion@aecom.com', ''),
('Ireson', 'Audrey', 'audrey.ireson@bnc.ca', ''),
('Issa', 'Rita', 'ritaissa68@hotmail.com', ''),
('Jalbert', 'Brigitte', 'bjalbert@embcarrousel.com', 'Emballages Carrousel inc.'),
('Jalbert', 'Denis', 'djalbert@embcarrousel.com', 'Emballages Carrousel inc.'),
('Janisse', 'Antoine', 'ajanisse@vastauto.com', ''),
('Janssen', 'Karin', 'kjanssen@lesaintsulpice.com', ''),
('Janu', 'Nadia', 'nadia.janu@bnc.ca', ''),
('Jean', 'Caroline', 'caroline.jean@bnc.ca', ''),
('Jeannotte', 'Claudette', 'Claudette.jeannotte@fiduciedesjardins.com', 'Fiducie Desjardins'),
('Jetté', 'Sylvain', 'sylvainjette@hotmail.com', ''),
('Johnson', 'Isabelle', 'johnson.isabelle@ethypharmamerica.com', 'Ethypharma'),
('Joncas', 'Lyne', 'lyne.joncas@fbn.ca', ''),
('Jones', 'Joyce', 'joyce.jones@sunlife.com', ''),
('Joseph', 'Claude', 'claude.joseph@bnc.ca', ''),
('Joubert', 'Évelyne', 'evelyne.joubert@hotmail.ca', ''),
('Joyal', 'Hélène', 'h-joyal@videotron.ca', 'CSDM'),
('Jutras', 'Yves', 'jutras.yves@hydro.qc.ca', ''),
('Karpicek', 'Denis', 'denis.karpick@scd.desjardins.com', ''),
('Koessler', 'Alain', 'alain.koessler@snclavalin.com', ''),
('L|Éveillé', 'Kattie', 'kattieleveille@hotmail.com', ''),
('Labbe-Deegan', 'Diane', 'dlabbe@mend.com', 'Mendelssohn Custom & Transportation Svs'),
('Labelle', 'Alain', 'alain.labelle@yoplait.ca', 'Aliments Utlima inc.'),
('Labelle', 'Christine', 'leika@leikatea.com', 'Aliments Leika inc.'),
('Laberge', 'Christine', 'laberge.christine@hydro.qc.ca', 'HQ'),
('Laberge', 'Fannie', 'fannielaberge@gmail.com', ''),
('Laberge', 'Linda', 'lindalaberge1@gmail.com', ''),
('Labonté', 'Chantale', 'chantale.labonte@clarica.com', ''),
('Labrecque', 'Steaven', 'steaven.labrecque@fbn.ca', ''),
('Lacasse', 'Sophie', 'sophie.lacasse@fbn.ca', ''),
('Lachaine', 'Sylvain', 'sylvain.lachaine@bnc.ca', ''),
('Lachapelle', 'Jonathan', 'j_lachapelle@videotron.ca', 'Le Dégustateur'),
('Lachapelle', 'Lise', 'realiser@arrq.qc.ca', 'Association des réalisateurs et réalisatrices du Q'),
('Lachapelle', 'Daniel', 'lachapelle.daniel@rcgt.com', ''),
('Lachapelle', 'Jean-Paul', 'jean-paul.lachapelle@desjardins.com', 'Caisse populaire Desjardins du Mont-Royal'),
('Lacombe', 'Claudine', 'lacombe.claudine@hydro.qc.ca', 'HQ'),
('Lacombe', 'Patrick', 'impression.lacombe@videotron.ca', ''),
('Lacourse ', 'Geneviève', 'lacourse.genevieve@hydro.qc.ca', 'HQ'),
('Laferrière', 'Diane', 'dlcoaching@gmail.com', 'Hydro-Québec'),
('Lajeunesse', 'Martine', 'martine.lajeunesse@bnc.ca', 'BNC'),
('Laliberté', 'Raynald', 'raynald.laliberte@bnc.ca', 'Banque Nationale du Canada'),
('Lalonde', 'Daniel', 'daniel.lalonde@fbn.ca', 'Financière Banque Nationale'),
('Lalonde ', 'Jacques', 'lalonde.jacques@vill.montreal.qc.ca', 'Ville MTL'),
('Lalonde', 'Johanne', 'jlalonde@umq.qc.ca', 'Union des municipalités du Québec'),
('Lamothe', 'Marie-Josée', 'marie@cgi-pco.com', 'CGI'),
('Lamothe', 'Sylvie', 'pinotte1@msn.com', 'Bombardier'),
('Lamontagne', 'Manon', 'mlamontagne@belroncanada.com', ''),
('Lamothe', 'Denis', 'lamothed@cadillacfairview.com', 'Corporation Cadillac Faiview ltée La- Les Prome'),
('Lamothe', 'Guy', 'lamothgu@wyeth.com', 'Wyeth Pharmaceutiques'),
('Lampron', 'France', 'lampron.france@hydro.qc.ca', 'HQ'),
('Lampron', 'Marie', 'marielampron@hotmail.com', ''),
('Lanciault', 'Marc-André', 'mal@inboxintl.com', 'Inbox'),
('Langlais', 'Vicky', 'Coordo@femmeslaurentides.org', 'RFL'),
('Langlois', 'Ginette', 'langlois.ginette@hydro.qc.ca', 'HQ'),
('Lanthier', 'Renaud', 'rlanthier@bernard-brassard.com', ''),
('Lapierre', 'Jules', 'jules.lapierre@banquelaurentienne.ca', 'Banque Laurentienne du Canada'),
('Larivière', 'Jacques', 'Jacques.Lariviere@cmcelectronics.ca', ''),
('Larochelle', 'Roger', 'roger.larochelle@desjardins.com', 'Fédération des caisses Desjardins du Québec'),
('Larrivée', 'Suzanne', 'suzie.larrivee.pdi@ssss.gouv.qc.ca', 'CSV'),
('Larue', 'Denise', 'dlarue@clarins.ca', ''),
('Lassonde', 'André', 'lassonde.andre@hydro.qc.ca', ''),
('Latendresse', 'Louis', 'latendresselouis@hotmail.com', 'Banque Nationale du Canada'),
('Latour', 'Yves', 'yves.latour@sitq.com', ''),
('Latreille', 'Guy', 'guy.latreille@rswinc.com', ''),
('Laurin-Dansereau', 'Emilie', 'emilield@cremcv.com', ''),
('Laurin', 'Rachelle', 'rachelle.laurin@ccd.desjardins.com', 'ccd Desjardins'),
('Lauzon', 'Jean', 'lauzon.jean@hydro.qc.ca', 'HQ'),
('Lauzon', 'Lise', 'llauzon@reseauIQ.qc.ca', 'Réseau des ing du Qc'),
('Lavallée', 'Sylvie', 'lavallee.sylvie@hydro.qc.ca', 'HQ'),
('Lavoie', 'Ginette', 'glavoie@gazmetro.com', ''),
('Lavoie', 'Lyne', 'l.lavoie@fjab.qc.ca', 'Assoc Bombardier'),
('Lebeau', 'Maurice', 'maurice.lebeau@visa.desjardins.com', 'Visa Desjardins'),
('Leblanc', 'David', 'david.leblanc@airliquide.com', 'Air Liquide Canada'),
('Lebrun', 'Diane', 'diane.v.lebrun@desjardins.com', ''),
('Lebrun', 'Johanne', 'johanne.lebrun@airliquide.com', ''),
('Leclair', 'Jean', 'leclair.jean@hydro.qc.ca', 'HQ'),
('Leclair', 'Jacques', 'jleclair@sjpack.com', 'Emballage St-jean ltée'),
('Leclair', 'Michel', 'mleclair@belroncanada.com', 'Lebeau vitres d|autos/BELRON CANADA'),
('Leclerc', 'Annick', 'annick.leclerc@fbn.ca', ''),
('Lecocq', 'Jean', 'jean.lecocq@bmo.com', ''),
('Lecorne', 'Vincent', 'vincent.lecorne@sajemontrealmetro.com', 'Saje Montréal Métro'),
('Lecuyer', 'Danielle', 'danielle.lecuyer@rhmr.com', ''),
('Ledoux', 'Roch', 'roch.ledoux@nbfinancial.com', 'Financière Banque Nationale'),
('Leduc', 'Stéphanie', 'stephanie.leduc@bnc.ca', 'BNC'),
('Leduc', 'Nathalie', 'nleduc@axcan.com', 'Axcan Pharma'),
('Lefèbvre', 'Nathalie', 'nathalie.lefebvre@surete.qc.ca', ''),
('Lefèbvre', 'Sylvie', 'lefebvre.sylvie@hydro.qc.ca', 'HQ'),
('Lefort', 'Roger', 'lefort.roger@hydro.qc.ca', 'HQ'),
('Legault', 'Louise', 'louise.legault@turbomeca.ca', ''),
('Legault', 'Guylaine', 'guylaine.legault@desjardins.com', ''),
('Legault', 'Stéphanie', 'stephanie.legault@desjardins.com', ''),
('Le Goff', 'Francine', 'legoff.francine@hydro.qc.ca', 'HQ'),
('Lehoux', 'Chantal', 'chantal.lehoux@fbn.ca', 'Fbn'),
('Lejeune', 'Vincent', 'marceaur@hotmail.com', ''),
('Lemay', 'Jean', 'lemay.jean.k@hydro.qc.ca', 'Hydro-Québec'),
('Lemieux', 'Julie', 'lemieux.julie@rcgt.com', ''),
('Lemieux', 'Marc', 'marclemieux65@hotmail.com', 'CSSS + UdeM'),
('lemonde', 'Geneviève', 'glemonde@upa.qc.ca', 'UPA'),
('Lénéus', 'Danielle', 'danielle.leneus@desjardins.com', 'Caisse Desjardins'),
('Lespérance', 'Diane', 'diane_lesperance@radio-canada.ca', ''),
('Lessard', 'Carl', 'carl.lessard@microcell.ca', 'MICROCELL Solutions Inc.'),
('Lessard', 'Jean-Robert', 'jrlessard@robert.ca', 'Groupe Prévac inc.'),
('Lessard', 'Michel', 'mlessard@griffithlabs.com', 'Laboratoires Griffith ltée'),
('Lessard', 'Normand', 'lessardn@montruscobolton.com', 'Placements MONTRUSCO BOLTON Inc.'),
('Letarte', 'Pierre', 'renald.letarte@fiduciedesjardins.com', 'Fiducie Desjardins'),
('Létourneau', 'Nicole', 'nicole_letourneau@ville.montreal.qc.ca', ''),
('Léveillé', 'Christian', 'christian.leveille@desjardins.com', ''),
('Libotte', 'François', 'flibotte@cdpcapital.com', 'Caisse de dépôt et placement du Québec'),
('Linteau', 'Danny', 'daniel_linteau@viarail.ca', ''),
('Lizotte', 'Claude', 'lizotte.claude@hydro.qc.ca', 'HQ'),
('Locas', 'Diane', 'dlocas@ogilvyrenault.com', ''),
('Loiseau', 'Véronique', 'vloiseau@ccfcmtl.ca', 'Chambre de Commerce Française'),
('Lord', 'Linda', 'lindalord@videotron.ca', ''),
('Lozeau-Simard', 'Manon', 'msimard@lozeau.com', ''),
('Lozeau-Simard', 'Stéphane', 'sosimard@lozeau.com', ''),
('Lucas', 'Catherine', 'lucas.catherine@hydro.qc.ca', 'HQ'),
('Lus-Shue', 'Andrew', 'alueshue@mac.com', ''),
('Lusignant', 'Eric', 'eric.lusignan@turbomeca.ca', ''),
('Madore', 'Geneviève', 'genevieve.madore@standardlife.ca', ''),
('Maillard', 'Brigitte', 'maillard.brigitte@hydro.qc.ca', 'HQ'),
('Maillard', 'Sylvie', 'sylvie.maillard@bongrainoverseas.com', 'Bongrain Export Overseas'),
('Maletto', 'Johanne', 'johanne.maletto@qualite.qc.ca', ''),
('Mancini', 'Michel A.', 'dominic.mancini@bnc.ca', 'Banque Nationale du Canada'),
('Maniscalco', 'Michaël', 'mikael.maniscalco@gmail.com', ''),
('Marande', 'Arnaud', 'amarande@hotelstpaul.com', 'St Paul'),
('Marceau', 'Philiphe C.', 'catherine.marceau@rolls-royce.ca', 'Rolls-Royce Canada'),
('Marchal', 'Christiane', 'cmarchal@videotron.ca', ''),
('Marcil', 'Marie', 'mariemarcil@videotron.ca', ''),
('Marenger', 'André', 'andre.marenger@nbfinancial.com', 'Financière Banque Nationale'),
('Marion', 'Annie', 'annirava@gmail.com', ''),
('Marion', 'Jacques', 'jak.marion@hotmail.com', ''),
('Marleau', 'Louise', 'louise.marleau@desjardins.com', ''),
('Marquis', 'Réjean', 'marquis.rejean@hydro.qc.ca', 'HQ'),
('Martin', 'Francine', 'francine@voyageregence.com', 'Régence Voyages'),
('Marsolais', 'Lorraine', 'marsolais.lorraine@hydro.qc.ca', ''),
('Martinez', 'Natacha', 'natacha.martinez@bongrainoverseas.com', ''),
('Maso', 'Fabrizio', 'fabrizio.maso@alba2000.ca', ''),
('Massé', 'Michel', 'm.masse@usimm.qc.ca', ''),
('Masson', 'Sylvie', 'masson.sylvie@hydro.qc.ca', 'HQ'),
('Mazerolle', 'Claude', 'mazerolle.claude@hydro.qc.ca', 'HQ'),
('McCahill', 'Kelly', 'kelly.mccahill@cibc.com', ''),
('McDuff', 'Gilles', 'fqpflt@upa.qc.ca', 'Fédération québécoise des producteurs de fruits et'),
('McFadden', 'David', 'mcfad73@hotmail.com', ''),
('Melançon', 'Michel', 'mmelancon@belroncanada.ca', ''),
('Meloche', 'Johanne', 'jmeloche@jeancoutu.com', 'Jean Coutu'),
('Ménard', 'Marie-Josée', 'marie-josee.menard@visa.desjardins.com', 'Visa Desjardins'),
('Mendes', 'Gui', 'gui.mendes@banquelaurentienne.ca', ''),
('Menegazzi', 'Eric', 'eric.t.menegazzi@desjardins.com', 'carrefour Desjardins'),
('Mercier', 'Nathalie', 'nathalie.mercier@fbn.ca', ''),
('Messier', 'Annick', 'amessier@deloitte.ca', ''),
('Mézerette', 'Sandrine', 'smezette@hotmail.com', ''),
('Mifsud', 'Aurélie', 'aurelie.mifsud@bongrainoverseas.com', ''),
('Millet', 'Stéphanie', 'smillet@ca.loreal.com', 'loreal'),
('Millette', 'Josée', 'millette.josee@hydro.qc.ca', 'HQ'),
('Miquelon', 'André', 'amiquelon@hotmail.com', ''),
('Mondy', 'Jacqueline', 'jacqueline.mondy@desjardins.com', 'Mouvement Desjardins'),
('Monette', 'Nicole', 'nmonette@deloitte.ca', ''),
('Monroe', 'Bénédicte', 'benedicte.monroe@gmail.com', ''),
('Montpetit', 'Alain', 'alain.montpetit@eulerhermes.com', 'Euler Hermes Canada'),
('Moreau', 'Yves', 'yves.moeau@desjardins.com', ''),
('Morin', 'Normand', 'normand.morin@snclavalin.com', ''),
('Morin', 'Gilles', 'gilles.morin@nbfinancial.com', 'Financière Banque Nationale'),
('Morrisseau', 'Yves', 'yves.morrisseau@td.com', 'Groupe Financier Banque TD'),
('Morneau', 'Danielle', 'morndan@hotmail.com', ''),
('Mounier', 'Gérard', 'gerard.mounier@banquelaurentienne.ca', 'Banque Laurentienne'),
('Nackley', 'Louise', 'louise.nackley@cibc.com', ''),
('Nadon', 'Stéphanie', 'stephanie.nadon@bnc.ca', ''),
('Nathan', 'Louis', 'louis.nathan@clarica.com', ''),
('Naud', 'Jacques', 'jacques.naud@bnc.ca', 'Banque Nationale du Canada'),
('Nicoli', 'Alexandra', 'anicoli@lacaisse.com', ''),
('Noël-Reynot', 'Claire', 'clairereynot@gmail.com', ''),
('Nols', 'Christian', 'christian.nols@transat.com', ''),
('Ostiguy-Vouligny', 'Marielle', 'marielleostiguy@hotmail.com', ''),
('Ouimet', 'Johanne', 'johanne.ouimet@desjardins.com', ''),
('Pagliuca', 'Anna', 'Anna.Pagliuca@standardlife.ca', ''),
('Paillé', 'Nathalie', 'nathalie.paille@banquelaurentienne.ca', ''),
('Pain', 'David', 'davpain@deloitte.ca', 'deloitte'),
('Paquette', 'Marco', 'paquette.marco@hydro.qc.ca', 'HQ'),
('Paquin', 'François', 'paquin.francois.2@hydro.qc.ca', 'HQ'),
('Paquin', 'Normand', 'normand.paquin@fid.desjardins.com', 'Fiducie Desjardins'),
('Paré', 'Bernard', 'pare.bernard@hydro.qc.ca', 'HQ'),
('Patenaude', 'Lise', 'lise.patenaude@ca.michelin.com', ''),
('Pelchat', 'Nancy', 'npelchat@ogilvyrenault.com', 'Ogilvy renaud'),
('Pelletier', 'Marco', 'pelletier.marco@hydro.qc.ca', 'HQ'),
('Perreault', 'Sylvia', 'sylvia@sylviaperreault.com', ''),
('Perron', 'Brigitte', 'brigitte.perron@publicis.ca', 'Publicis'),
('Perron', 'Karine', 'karine.perron@bnc.ca', ''),
('Phan', 'Christophe', 'phan.christophe@hydro.qc.ca', 'HQ'),
('Picard', 'François', 'picard.françois@hydro.qc.ca', 'HQ'),
('Picard', 'Roger', 'abouchard@rogerpicardlab.com', 'Laboratoire Dentaire'),
('Pierre', 'Andros', 'pierre.andros@hydro.qc.ca', 'HQ'),
('Pierre', 'Bourgie', 'danielle.lheureux@videotron.ca', ''),
('Pimentel', 'Dinaldo', 'dpimentel@cellfoods.com', 'Cellfoods'),
('Pinsonneault', 'Jocelyne', 'jocelyne_pinsonneault@cascades.com', 'CASCADES GROUPE TISSU'),
('Pinsonneault', 'Carole', 'carole.pinsonneault@ingenio-quebec.com', 'Ingenio'),
('Pitre', 'Mario', 'mpitre@marconair.com', 'Marconair'),
('Plamondon', 'Carmen', 'cplamondon@gouverneur.com', 'Hôtel Gouverneur MTL'),
('Poirier', 'Marc', 'poirier.marc@hydro.qc.ca', 'HQ'),
('Pontiche', 'Marie', 'marie.f.pontiche@desjardins.com', ''),
('Potvin', 'Carole', 'cpotvin@gazmetro.com', ''),
('Poulin', 'Amélie', 'poulinamelie@hotmail.com', 'Bell'),
('Poulin', 'Danielle', 'danielle.poulin@bnc.ca', ''),
('Pouliot', 'Agathe', 'agathe.pouliot@desjardins.com', ''),
('Pouliot', 'Sylvain', 'pouliot.sylvain@hydro.qc.ca', 'HQ'),
('Pradere', 'Nathalie', 'pradere@sympatico.ca', ''),
('Prince', 'Réal W.', 'donald.prince@sympatico.ca', 'Groupe Desjardins'),
('Radino', 'Kathleen', 'dankath@videotron.ca', ''),
('Ragusa', 'Lisa', 'ragusa.lisa@hydro.qc.ca', 'HQ'),
('Raymond', 'Nathalie', 'nraymond@deloitte.ca', ''),
('Raymond', 'Renée', 'renee.raymond@aon.ca', 'Aon Reed Stenhouse inc.'),
('Renaud', 'France', 'france.renaud@desjardins.com', ''),
('Reyes ', 'Sophia', 'bubblesophia@gmail.com', ''),
('Rhéaume', 'Marie-Josée', 'marie-josee.rheaume@desjardins.com', ''),
('Richard', 'Daniel', 'daniel.richard@hebdosquebecor.com', 'Québécor Ventes Médias'),
('Richard', 'Martin', 'martin.richard@cmcelectronics.ca', 'CMC Électronique Inc.'),
('Richard', 'Nadine', 'nadine.richard14@gmail.com', ''),
('Rivest', 'Sophie', 'sophie.rivest@cgi.com', ''),
('Robert', 'Brigitte', 'brigitte.robert@bnc.ca', 'Banque Nationale du Canada'),
('Robichaud', 'Elaine', 'elaine.robichaud@bnc.ca', 'Bnc'),
('Robichaud', 'Jeannine', 'jeannine.robichaud@videotron.ca', ''),
('Robinson', 'Fabienne', 'fabienne.robinson@bnc.ca', ''),
('Rocheleau', 'Annie', 'arocheleau@deloitte.ca', ''),
('Rocheleau', 'Sandra', 'natasha.rocheleau@bnc.ca', 'Courtage à escompte Banque Nationale'),
('Rochelle', 'Christine', 'christine.rochelle@adecco.qc.ca', 'Adecco'),
('Rochette', 'Lucie', 'lrochette@ville.montreal.qc.ca', 'Museum hist nat Mtl'),
('Rolin', 'Jean', 'jean.rolin@americas.bnpparibas.com', 'BNP Paribas Canada'),
('Romano', 'Annie', 'annie.romano@aon.ca', ''),
('Rondon', 'Ana Amelia', 'amerondon@hotmail.com', ''),
('Rose', 'Suzanne', 'suzanne.rose@bnc.ca', ''),
('Rovera', 'Adeline', 'adeline.rovera@orange.fr', ''),
('Rouleau', 'Claude', 'claude.rouleau@rbc.com', ''),
('Rousseau', 'Luc', 'luc.rousseau@ca.pwc.com', ''),
('Roy', 'André', 'andre.roy@ccd.desjardins.com', ''),
('Roy', 'Geneviève', 'roy.genevieve@hydro.qc.ca', 'HQ'),
('Roy', 'Lucie', 'lroy@lacaisse.com', ''),
('Roy', 'Sylvie', 'sroy@lacaisse.com', ''),
('Roy', 'Sylvie', 'sylvie.roy@bnc.ca', 'Banque Nationale du Canada'),
('Roy', 'Carol', 'carol.roy@desjardins.com', 'Fédération des Caisses Desjardins du Québec'),
('Saba', 'Sophie', 'sophie.saba@alcan.com', ''),
('Sabourin ', 'Éric', 'sabourin.eric@hydro.qc.ca', 'HQ'),
('Saint-Onge', 'Patric', 'psaintonge@corriveausaintonge.ca', ''),
('Saint-Pierre', 'France', 'france.st-pierre@desjardins.com', ''),
('Salera', 'Teresa', 'tere1salera@gmail.com', 'Manuvie - McG 2015'),
('Salvo', 'Carmela', 'csalvo@kitco.com', ''),
('Sanson', 'Robert', 'Robert.Sanson@cnrc-nrc.gc.ca', ''),
('Sauvé', 'Pierre', 'suzanne.sauve@desjardins.com', 'Caisse Populaire Desjardins de Sainte-Julienne'),
('Savard', 'Clément', 'clement.savard@transat.com', 'Transat'),
('Savard', 'Louis', 'bensav@savardmartin.com', 'Groupe Savard-Martin Inc. Le-'),
('Savignac', 'Carmen', 'carmen.savignac@desjardins.com', ''),
('Savoie', 'Monique', 'savoie.monique@hydro.qc.ca', 'HQ'),
('Séguin', 'Christine', 'christine.seguin@desjardins.com', ''),
('Séguinotte', 'Hélène', 'helene.seguinotte@morpho.com', ''),
('Sejean', 'Carol', 'casejean@airfrance.fr', 'Air France'),
('Senécal', 'Jean-Guy', 'jean-guy.senecal@ca.pwc.com', ''),
('Seney', 'France', 'france.seney@bnc.ca', ''),
('Senneville', 'Claire', 'claire.senneville@cogesmont.ca', '9044-9240 Québec inc.'),
('Sharma', 'Neeti', 'pavillon.montreal@christofle.com', ''),
('Sigouin', 'François', 'francois.sigouin@desjardins.com', ''),
('Simard', 'Lucie', 'lusimard@videotron.ca', ''),
('Simard', 'Pascale', 'pascale.simard@surete.qc.ca', 'Sûreté du Québec'),
('Simard', 'Sylvie', 'sylvie.f.simard@desjardins.com', ''),
('Simon', 'Éric', 'eric.simon@cogeco.com', ''),
('Simonnet', 'Véronique', 'veronique.simonnet@intact.net', ''),
('Siskind ', 'Marianne', 'marianne.siskind@gmail.com', ''),
('Siskind', 'Marianne', 'm_siskind@yahoo.ca', ''),
('Smith', 'Linda', 'lynda.smith@desjardins.com', ''),
('Soave', 'Luciana', 'ameiph@ameiph.com', 'Association multi-ethnique pour l|intégration des'),
('Sparer', 'Isabelle', 'isabelle.sparer@transat.com', 'Air Transat'),
('Spinelli', 'Sylvie', 'sylvie.spinelli@desjardins.com', ''),
('St-Arnaud', 'Christian', 'Christian.st-arnaud@ccd.desjardins.com', 'Caisse centrale Desjardins'),
('St-Arneault', 'Michel', 'michel.st-arneault@qualifreeze.com', 'Michel St-Arneault inc.'),
('St-Gelais', 'Audrey', 'info@cpsag.ca', 'Club piscine'),
('St-Jean', 'Julien', 'julien.stjean@bmo.com', 'Banque de Montréal'),
('St-Jean', 'Yves', 'yvan.st-jean@desjardins.com', 'Location Desjardins'),
('Stefanutti', 'Diane', 'diana.stefanutti@bnc.ca', 'Banque Nationale du Canada'),
('Stolearenco', 'Aliona', 'alionastolearenco@yahoo.fr', 'CCFC'),
('Sylvain', 'Lynne', 'lynne.sylvain@desjardins.com', 'Fédération des Caisses Desjardins du Québec'),
('Taillefer', 'Marc', 'cogesmont@cogesmont.ca', 'Cogesmont'),
('Talbot', 'Marisa', 'marisa.talbot@pfizer.com', 'Pfizer Canada'),
('Tangredi', 'Frank', 'frank_tangredi@manuvie.com', 'Manuvie'),
('Tardif', 'Karina', 'tardif.karina@rcgt.com', 'Raymond Chabot Grant Thornton'),
('Taza', 'Christine', 'taza.christine@hydro.qc.ca', 'HQ'),
('Tellier', 'Nathalie', 'ntellier@ville.montreal.qc.ca', ''),
('Thellab', 'Tania', 'tania.thellab@fbn.ca', ''),
('Théorêt', 'Isabel', 'isabel@inboxinternational.com', 'Inbox'),
('Thériault', 'Carole', 'theriault.carole@hydro.qc.ca', 'HQ'),
('Thibault', 'Daniel', 'thibault.daniel@hydro.qc.ca', 'HQ'),
('Thiffault', 'André', 'andre.thiffault@desjardins.com', ''),
('Thivierge', 'Serge', 'serge.thivierge@cgocable.ca', ''),
('Touchette', 'François', 'francois.touchette@bmo.com', 'BMO Banque de Montréal'),
('Toupin', 'Philippe', 'philippe.toupin@mercer.com', ''),
('Tremblay', 'Chantal', 'chantal.tremblay@bnc.ca', 'Banque Nationale du Canada'),
('Tremblay', 'Jacinthe', 'jtremblay02@sympatico.ca', ''),
('Tremblay', 'Lynda', 'lynda.tremblay@bnc.ca', 'Bnc'),
('Tremblay', 'Michel', 'miktremblay@yahoo.ca', ''),
('Tremblay', 'Renée', 'tremblay.renee@hydro.qc.ca', 'Hydro-Québec'),
('Trépanier', 'Line', 'line.n.trepanier@desjardins.com', 'Desjardins'),
('Trépanier', 'Yves', 'yves.trepanier@aon.ca', 'Groupe Conseil Aon'),
('Trudel', 'Caroline', 'caroline.trudel@sajemontrealmetro.com', 'Saje'),
('Trudel', 'Francine', 'francine.trudel@desjardins.com', ''),
('Trudel', 'Isabelle', 'isabelle.trudel@bnc.ca', ''),
('Vahabpour', 'Mona', 'mona.vahab@gmail.com', ''),
('Vallée', 'Lorraine', 'loraine.vallee@desjardins.com', 'Fédération des Caisses Desjardins du Québec'),
('Vallière', 'Hélène', 'helene.valliere@banquelaurentienne.ca', 'Banque Laurentienne'),
('Veilleux', 'Joane', 'joane.veilleux@gmail.com', ''),
('Venne', 'Martin', 'Martin Venne <Martin.Venne@admtl.com>', 'ADM'),
('Veronneau', 'Daniel', 'd.veronneau@hotmail.com', ''),
('Veronneau', 'Marilou', 'mv.cast@hotmail.com', ''),
('Vibert', 'Sonia', 'sonia.vibert@ville.montreal.qc.ca', 'Ville Mtl'),
('Vinet', 'Fabrice', 'fabrice.vinet@vmd.desjardins.com', 'Valeurs Mobilières Desjardins Inc.'),
('Wallace', 'Frédéric', 'Frederick.Wallace@admtl.com', 'ADM'),
('Weyman', 'Steven', 'weyman.steven@hydro.qc.ca', 'HQ'),
('Zhang', 'Jie', 'Zhang.jie@hydro.qc.ca', ''),
('Zicat', 'Kathleen', 'kathleen.zicat@bnc.ca', 'Banque Nationale du Canada'),
('Ziliotti', 'Roberto', 'roberto_ziliotti@sunlife.com', 'Sun Life of Canada'),
('Zullo', 'Rosanna', 'rzullo@kitco.com', '')
