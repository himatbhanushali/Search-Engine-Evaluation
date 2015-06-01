window.onload=addLoadEvent;
window.onload=changeregligion;
var states = new Array();
states['Afghanistan'] = new Array('Badakhshan','Badghis','Baghlan','Balkh','Bamian','Farah','Faryab','Ghazni','Ghowr','Helmand','Herat','Jowzjan','Kabol','Kandahar','Kapisa','Konar','Kondoz','Laghman','Lowgar','Nangarhar','Nimruz','Oruzgan','Paktia','Paktika','Parvan','Samangan','Sar-e Pol','Takhar','Vardak','Zabol');
states['Albania'] = new Array('Berat','Bulqize','Delvine','Devoll','Diber','Durres','Elbasan','Fier','Gjirokaster','Gramsh','Has','Kavaje','Kolonje','Korce','Kruje','Kucove','Kukes','Kurbin','Lezhe','Librazhd','Lushnje','Malesi e Madhe','Mallakaster','Mat','Mirdite','Peqin','Permet','Pogradec','Puke','Sarande','Shkoder','Skrapar','Tepelene','Tirane','Tropoje','Vlore');
states['Algeria'] = new Array('Adrar','Ain Defla','Ain Temouchent','Alger','Annaba','Batna','Bechar','Bejaia','Biskra','Blida','Bordj Bou Arreridj','Bouira','Boumerdes','Chlef','Constantine','Djelfa','El Bayadh','El Oued','El Tarf','Ghardaia','Guelma','Illizi','Jijel','Khenchela','Laghouat','M`Sila','Mascara','Medea','Mila','Mostaganem','Naama','Oran','Ouargla','Oum el Bouaghi','Relizane','Saida','Setif','Sidi Bel Abbes','Skikda','Souk Ahras','Tamanghasset','Tebessa','Tiaret','Tindouf','Tipaza','Tissemsilt','Tizi Ouzou','Tlemcen');
states['American Samoa'] = new Array('Eastern','Manu`a','Rose Island','Swains Island','Western');
states['Angola'] = new Array('Andorra la Vella','Bengo','Benguela','Bie','Cabinda','Canillo','Cuando Cubango','Cuanza Norte','Cuanza Sul','Cunene','Encamp','Escaldes-Engordany','Huambo','Huila','La Massana','Luanda','Lunda Norte','Lunda Sul','Malanje','Moxico','Namibe','Ordino','Sant Julia de Loria','Uige','Zaire');
states['Anguilla'] = new Array('Anguilla');
states['Antartica'] = new Array('Antartica');
states['Antigua and Barbuda'] = new Array('Barbuda','Redonda','Saint George','Saint John','Saint Mary','Saint Paul','Saint Peter','Saint Philip');
states['Argentina'] = new Array('Antartica e Islas del Atlantico Sur','Buenos Aires','Buenos Aires Capital Federal','Catamarca','Chaco','Chubut','Cordoba','Corrientes','Entre Rios','Formosa','Jujuy','La Pampa','La Rioja','Mendoza','Misiones','Neuquen','Rio Negro','Salta','San Juan','San Luis','Santa Cruz','Santa Fe','Santiago del Estero','Tierra del Fuego','Tucuman');
states['Armenia'] = new Array('Aragatsotn','Ararat ','Armavir','Geghark`unik','Kotayk','Lorri','Shirak','Syunik','Tavush','Vayots','Dzor','Yerevan');
states['Aruba'] = new Array('Aruba');
states['Ashmore and Cartier Island'] = new Array('Ashmore and Cartier Island');
states['Australia'] = new Array('Australian Capital Territory',' New South Wales','Northern Territory','Queensland','South Australia','Tasmania','Victoria','Western Australia');
states['Austria'] = new Array('Burgenland',' Kaernten','Niederoesterreich','Oberoesterreich','Salzburg','Steiermark','Tirol','Vorarlberg','Wien');
states['Azerbaijan'] = new Array('Abseron Rayonu','Agcabadi Rayon ','Agdam Rayonu','Agdas Rayonu','Agstafa Rayonu','Agsu Rayonu','Ali Bayramli Sahari','Astara Rayonu','Baki Sahari','Balakan Rayonu','Barda Rayonu','Beylaqan Rayonu','Bilasuvar Rayonu','Cabrayil Rayonu','Calilabad Rayonu','Daskasan Rayonu','Davaci Rayonu','Fuzuli Rayonu','Gadabay Rayonu','Ganca Sahari','Goranboy Rayonu','Goycay Rayonu','Haciqabul Rayonu','Imisli Rayonu','Ismayilli Rayonu','Kalbacar Rayonu','Kurdamir Rayonu','Lacin Rayonu','Lankaran Rayonu','Lankaran Sahari','Lerik Rayonu','Masalli Rayonu','Mingacevir Sahari','Naftalan Sahari','Naxcivan Muxtar Respublikasi','Neftcala Rayonu','Oguz Rayonu','Qabala Rayonu','Qax Rayonu','Qazax Rayonu','Qobustan Rayonu','Quba Rayonu','Qubadli Rayonu','Qusar Rayonu','Saatli Rayonu','Sabirabad Rayonu','Saki Rayonu','Saki Sahari','Salyan Rayonu','Samaxi Rayonu','amkir Rayonu','Samux Rayonu','Siyazan Rayonu','Sumqayit Sahari','Susa Rayonu','Susa Sahari','Tartar Rayonu','Tovuz Rayonu','Ucar Rayonu','Xacmaz Rayonu','Xankandi Sahari','Xanlar Rayonu','Xizi Rayonu','Xocali Rayonu','Xocavand Rayonu','Yardimli Rayonu','Yevlax Rayonu','Yevlax Sahari','Zangilan Rayonu','Zaqatala Rayonu','Zardab Rayonu');
states['Bahamas'] = new Array('Acklins and Crooked Islands','Bimini','Cat Island','Exuma','Freeport','Fresh Creek','Governors Harbour','Green Turtle Cay','Harbour Island','High Rock','Inagua|Kemps Bay','Long Island','Marsh Harbour','Mayaguana','New Providence','Nicholls Town and Berry Islands','Ragged Island','Rock Sound','San Salvador and Rum Cay','Sandy Point');
states['Bahrain'] = new Array('Al Hadd','Al Manamah','Al Mintaqah al Gharbiyah','Al Mintaqah al Wusta','Al Mintaqah ash Shamaliyah','Al Muharraq','Ar Rifa wa al Mintaqah al Janubiyah','Jidd Hafs','Juzur Hawar','Madinat`Isa','Madinat Hamad','Sitrah');
states['Bangladesh'] = new Array('Barisal','Chittagong','Dhaka','Khulna','Rajshahi','Sylhet');
states['Barbados'] = new Array('Bridgetown','Christ Church','Saint Andrew','Saint George','Saint James','Saint John','Saint Joseph','Saint Lucy','Saint Michael','Saint Peter','Saint Philip','Saint Thomas');
states['Belarus'] = new Array('Brestskaya (Brest)','Homyel`skaya (Homyel)','Horad Minsk','Hrodzyenskaya (Hrodna)','Mahilyowskaya (Mahilyow)','Minskaya','Vitsyebskaya (Vitsyebsk)');
states['Belgium'] = new Array('Antwerpen','Brabant Wallon','Brussels Capitol Region','Hainaut','Liege','Limburg','Luxembourg','Namur','Oost-Vlaanderen','Vlaams Brabant','West-Vlaanderen');
states['Belize'] = new Array('Belize',' Cayo','Corozal','Orange Walk','Stann Creek','Toledo');
states['Benin'] = new Array('Alibori','Atakora','Atlantique','Borgou','Collines','Couffo','Donga','Littoral','Mono','Oueme','Plateau','Zou');
states['Bermuda'] = new Array('Devonshire','Hamilton','Hamilton','Paget','Pembroke','Saint George','Saint Georges','Sandys','Smiths','Southampton','Warwick');
states['Bhutan'] = new Array('Bumthang','Chhukha','Chirang','Daga','Geylegphug','Ha','Lhuntshi','Mongar','Paro','Pemagatsel','Punakha','Samchi','Samdrup Jongkhar','Shemgang','Tashigang','Thimphu','Tongsa','Wangdi Phodrang');
states['Bolivia'] = new Array('Beni','Chuquisaca','Cochabamba','La Paz','Oruro','Pando','Potosi','Santa Cruz','Tarija');
states['Bosnia and Herzegovina'] = new Array('Federation of Bosnia and Herzegovina','Republika Srpska');
states['Botswana'] = new Array('Central','Chobe','Francistown','Gaborone','Ghanzi','Kgalagadi','Kgatleng','Kweneng','Lobatse','Ngamiland','North-East','Selebi-Pikwe','South-East','Southern');
states['Brazil'] = new Array('Acre','Alagoas','Amapa','Amazonas','Bahia','Ceara','Distrito Federal','Espirito Santo','Goias','Maranhao','Mato Grosso','Mato Grosso do Sul','Minas Gerais','Para','Paraiba','Parana','Pernambuco','Piaui','Rio de Janeiro','Rio Grande do Norte','Rio Grande do Sul','Rondonia','Roraima','Santa Catarina','Sao Paulo','Sergipe','Tocantins');
states['British Virgin Islands'] = new Array('Anegada','Jost Van Dyke','Tortola','Virgin Gorda');
states['Brunei'] = new Array('Belait','Brunei and Muara','Temburong','Tutong');
states['Bulgaria'] = new Array('Blagoevgrad','Burgas','Dobrich','Gabrovo','Khaskovo','Kurdzhali','Kyustendil','Lovech','Montana','Pazardzhik','Pernik','Pleven','Plovdiv','Razgrad','Ruse','Shumen','Silistra','Sliven','Smolyan','Sofiya','Sofiya-Grad','Stara Zagora','Turgovishte','Varna','Veliko Turnovo','Vidin','Vratsa','Yambol');
states['Burkina Faso'] = new Array('Bale','Bam','Banwa','Bazega','Bougouriba','Boulgou','Boulkiemde','Comoe','Ganzourgou','Gnagna','Gourma','Houet','Ioba','Kadiogo','Kenedougou','Komandjari','Kompienga','Kossi','Koupelogo','Kouritenga','Kourweogo','Leraba','Loroum','Mouhoun','Nahouri','Namentenga','Naumbiel','Nayala','Oubritenga','Oudalan','Passore','Poni','Samentenga','Sanguie','Seno','Sissili','Soum','Sourou','Tapoa','Tuy','Yagha','Yatenga','Ziro','Zondomo','Zoundweogo');
states['Burma'] = new Array('Ayeyarwady','Bago','Chin State','Kachin State','Kayah State','Kayin State','Magway','Mandalay','Mon State','Rakhine State','Sagaing','Shan State','Tanintharyi','Yangon');
states['Burundi']=new Array('Bubanza','Bujumbura','Bururi','Cankuzo','Cibitoke','Gitega','Karuzi','Kayanza','Kirundo','Makamba','Muramvya','Muyinga','Mwaro','Ngozi','Rutana','Ruyigi');
states['Cambodia']=new Array('Banteay Mean Cheay','Batdambang','Kampong Cham','Kampong Chhnang','Kampong Spoe','Kampong Thum','Kampot','Kandal','Kaoh Kong','Keb','Kracheh','Mondol Kiri','Otdar Mean Cheay','Pailin','Phnum Penh','Pouthisat','Preah Seihanu','Preah Vihear','Prey Veng','Rotanah Kiri','Siem Reab','Stoeng Treng','Svay Rieng','Takev');
states['Cameroon']=new Array('Adamaoua','Centre','Est','Extreme-Nord','Littoral','Nord','Nord-Ouest','Ouest','Sud','Sud-Ouest');
states['Canada']=new Array('Alberta','British Columbia','Manitoba','New Brunswick','Newfoundland','Northwest Territories','Nova Scotia','Nunavut','Ontario','Prince Edward Island','Quebec','Saskatchewan','Yukon Territory');
states['Cape Verde']=new Array('Boa Vista','Brava','Maio','Mosteiros','Paul','Porto Novo','Praia','Ribeira Grande','Sal','Santa Catarina','Santa Cruz','Sao Domingos','Sao Filipe','Sao Nicolau','Sao Vicente','Tarrafal');

states['Cayman Islands']=new Array('Creek','Eastern','Midland','South Town','Spot Bay','Stake Bay','West End','Western');
states['Central African Republic']=new Array ('Bamingui-Bangoran','Bangui','Basse-Kotto','Gribingui','Haut-Mbomou','Haute-Kotto','Haute-Sangha','Kemo-Gribingui','Lobaye','Mbomou','Nana-Mambere','Ombella-Mpoko','Ouaka','Ouham','Ouham-Pende','Sangha','Vakaga');
states['Chad']=new Array ('Batha','Biltine','Borkou-Ennedi-Tibesti','Chari-Baguirmi','Guera','Kanem','Lac','Logone Occidental','Logone Oriental','Mayo-Kebbi','Moyen-Chari','Ouaddai','Salamat','Tandjile');
states['Chile']=new Array ('Aisen del General Carlos Ibanez del Campo','Antofagasta','Araucania','Atacama','Bio-Bio','Coquimbo','Libertador General Bernardo O`Higgins','Los Lagos','Magallanes y de la Antartica Chilena','Maule','Region Metropolitana (Santiago)','Tarapaca','Valparaiso');
states['China']=new Array ('Anhui','Beijing','Chongqing','Fujian','Gansu','Guangdong','Guangxi','Guizhou','Hainan','Hebei','Heilongjiang','Henan','Hubei','Hunan','Jiangsu','Jiangxi','Jilin','Liaoning','Nei Mongol','Ningxia','Qinghai','Shaanxi','Shandong','Shanghai','Shanxi','Sichuan','Tianjin','Xinjiang','Xizang (Tibet)','Yunnan','Zhejiang');
states['Christmas Island']=new Array ('Christmas Island');
states['Clipperton Island']=new Array ('Clipperton Island');
states['Cocos (Keeling) Islands']=new Array ('Direction Island','Home Island','Horsburgh Island','North Keeling Island','South Island','West Island');
states['Colombia']=new Array ('Amazonas','Antioquia','Arauca','Atlantico','Bolivar','Boyaca','Caldas','Caqueta','Casanare','Cauca','Cesar','Choco','Cordoba','Cundinamarca','Distrito Capital de Santa Fe de Bogota','Guainia','Guaviare','Huila','La Guajira','Magdalena','Meta','Narino','Norte de Santander','Putumayo','Quindio','Risaralda','San Andres y Providencia','Santander','Sucre','Tolima','Valle del Cauca','Vaupes','Vichada');
states['Comoros']=new Array ('Anjouan (Nzwani)','Domoni','Fomboni','Grande Comore (Njazidja)','Moheli (Mwali)','Moroni','Moutsamoudou');
states['Democratic Republic of the Congo']=new Array ('Bandundu','Bas-Congo','Equateur','Kasai-Occidental','Kasai-Oriental','Katanga','Kinshasa','Maniema','Nord-Kivu','Orientale','Sud-Kivu');
states['Republic of the Congo']=new Array ('Bouenza','Brazzaville','Cuvette','Kouilou','Lekoumou','Likouala','Niari','Plateaux','Pool','Sangha');
states['Cook Islands']=new Array ('Aitutaki','Atiu','Avarua','Mangaia','Manihiki','Manuae','Mauke','Mitiaro','Nassau Island','Palmerston','Penrhyn','Pukapuka','Rakahanga','Rarotonga','Suwarrow','Takutea');
states['Costa Rica']=new Array ('Alajuela','Cartago','Guanacaste','Heredia','Limon','Puntarenas','San Jose');
states['Cote d`Ivoire']=new Array ('Abengourou','Abidjan','Aboisso','Adiake','Adzope','Agboville','Agnibilekrou','Ale`pe','Bangolo','Beoumi','Biankouma','Bocanda','Bondoukou','Bongouanou','Bouafle','Bouake','Bouna','Boundiali','Dabakala','Dabon','Daloa','Danane','Daoukro','Dimbokro','Divo','Duekoue','Ferkessedougou','Gagnoa','Grand Bassam','Grand-Lahou','Guiglo','Issia','Jacqueville','Katiola','Korhogo','Lakota','Man','Mankono','Mbahiakro','Odienne','Oume','Sakassou','San-Pedro','Sassandra','Seguela','Sinfra','Soubre','Tabou','Tanda','Tiassale','Tiebissou','Tingrela','Touba','Toulepleu','Toumodi','Vavoua','Yamoussoukro','Zuenoula');
states['Croatia']=new Array ('Bjelovarsko-Bilogorska Zupanija','Brodsko-Posavska Zupanija','Dubrovacko-Neretvanska Zupanija','Istarska Zupanija','Karlovacka Zupanija','Koprivnicko-Krizevacka Zupanija','Krapinsko-Zagorska Zupanija','Licko-Senjska Zupanija','Medimurska Zupanija','Osjecko-Baranjska Zupanija','Pozesko-Slavonska Zupanija','Primorsko-Goranska Zupanija','Sibensko-Kninska Zupanija','Sisacko-Moslavacka Zupanija','Splitsko-Dalmatinska Zupanija','Varazdinska Zupanija','Viroviticko-Podravska Zupanija','Vukovarsko-Srijemska Zupanija','Zadarska Zupanija','Zagreb','Zagrebacka Zupanija');
states['Cuba']=new Array ('Camaguey','Ciego de Avila','Cienfuegos','Ciudad de La Habana','Granma','Guantanamo','Holguin','Isla de la Juventud','La Habana','Las Tunas','Matanzas','Pinar del Rio','Sancti Spiritus','Santiago de Cuba','Villa Clara');
states['Cyprus']=new Array ('Famagusta','Kyrenia','Larnaca','Limassol','Nicosia','Paphos');
states['Czeck RepublicCzeck Republic']=new Array ('Brnensky','Budejovicky','Jihlavsky','Karlovarsky','Kralovehradecky','Liberecky','Olomoucky','Ostravsky','Pardubicky','Plzensky','Praha','Stredocesky','Ustecky','Zlinsky');
states['Denmark']=new Array ('Arhus','Bornholm','Fredericksberg','Frederiksborg','Fyn','Kobenhavn','Kobenhavns','Nordjylland','Ribe','Ringkobing','Roskilde','Sonderjylland','Storstrom','Vejle','Vestsjalland','Viborg');
states['Djibouti']=new Array ('Ali Sabih','Dikhil','Djibouti','Obock','Tadjoura');
states['Dominica']=new Array ('Saint Andrew','Saint David','Saint George','Saint John','Saint Joseph','Saint Luke','Saint Mark','Saint Patrick','Saint Paul','Saint Peter');
states['Dominican Republic']=new Array ('Azua','Baoruco','Barahona','Dajabon','Distrito Nacional','Duarte','El Seibo','Elias Pina','Espaillat','Hato Mayor','Independencia','La Altagracia','La Romana','La Vega','Maria Trinidad Sanchez','Monsenor Nouel','Monte Cristi','Monte Plata','Pedernales','Peravia','Puerto Plata','Salcedo','Samana','San Cristobal','San Juan','San Pedro de Macoris','Sanchez Ramirez','Santiago','Santiago Rodriguez','Valverde');
states['Ecuador']=new Array ('Azuay','Bolivar','Canar','Carchi','Chimborazo','Cotopaxi','El Oro','Esmeraldas','Galapagos','Guayas','Imbabura','Loja','Los Rios','Manabi','Morona-Santiago','Napo','Orellana','Pastaza','Pichincha','Sucumbios','Tungurahua','Zamora-Chinchipe');
states['Egypt']=new Array ('Ad Daqahliyah','Al Bahr al Ahmar','Al Buhayrah','Al Fayyum','Al Gharbiyah','Al Iskandariyah','Al Isma`iliyah','Al Jizah','Al Minufiyah','Al Minya','Al Qahirah','Al Qalyubiyah','Al Wadi al Jadid','As Suways','Ash Sharqiyah','Aswan','Asyut','Bani Suwayf','Bur Sa`id','Dumyat','Janub Sina','Kafr ash Shaykh','Matruh','Qina','Shamal Sina','Suhaj');
states['El Salvador']=new Array ('Ahuachapan','Cabanas','Chalatenango','Cuscatlan','La Libertad','La Paz','La Union','Morazan','San Miguel','San Salvador','San Vicente','Santa Ana','Sonsonate','Usulutan');
states['Equatorial Guinea']=new Array ('Annobon','Bioko Norte','Bioko Sur','Centro Sur','Kie-Ntem','Litoral','Wele-Nzas');
states['Eritrea']=new Array ('Akale Guzay','Barka','Denkel','Hamasen','Sahil','Semhar','Senhit','Seraye');
states['Estonia']=new Array ('Harjumaa (Tallinn)','Hiiumaa (Kardla)','Ida-Virumaa (Johvi)','Jarvamaa (Paide)','Jogevamaa (Jogeva)','Laane-Virumaa (Rakvere)','Laanemaa (Haapsalu)','Parnumaa (Parnu)','Polvamaa (Polva)','Raplamaa (Rapla)','Saaremaa (Kuessaare)','Tartumaa (Tartu)','Valgamaa (Valga)','Viljandimaa (Viljandi)','Vorumaa (Voru)');
states['Ethiopia']=new Array ('Adis Abeba (Addis Ababa)','Afar','Amara','Dire Dawa','Gambela Hizboch','Hareri Hizb','Oromiya','Sumale','Tigray','YeDebub Biheroch Bihereseboch na Hizboch');
states['Europa Island']=new Array ('Europa Island');
states['Falkland Islands (Islas Malvinas)']=new Array ('Falkland Islands (Islas Malvinas)');
states['Faroe Islands']=new Array ('Bordoy','Eysturoy','Mykines','Sandoy','Skuvoy','Streymoy','Suduroy','Tvoroyri','Vagar');
states['Fiji']=new Array ('Central','Eastern','Northern','Rotuma','Western');
states['Finland']=new Array ('Aland','Etela-Suomen Laani','Ita-Suomen Laani','Lansi-Suomen Laani','Lappi','Oulun Laani');
states['France']=new Array ('Alsace','Aquitaine','Auvergne','Basse-Normandie','Bourgogne','Bretagne','Centre','Champagne-Ardenne','Corse','Franche-Comte','Haute-Normandie','Ile-de-France','Languedoc-Roussillon','Limousin','Lorraine','Midi-Pyrenees','Nord-Pas-de-Calais','Pays de la Loire','Picardie','Poitou-Charentes','Provence-Alpes-Cote d`Azur','Rhone-Alpes');
states['French Guiana']=new Array ('French Guiana');
states['French Polynesia']=new Array ('Archipel des Marquises','Archipel des Tuamotu','Archipel des Tubuai','Iles du Vent','Iles Sous-le-Vent');
states['French Southern and Antarctic Lands']=new Array ('Adelie Land','Ile Crozet','Iles Kerguelen','Iles Saint-Paul et Amsterdam');
states['Gabon']=new Array ('Estuaire','Haut-Ogooue','Moyen-Ogooue','Ngounie','Nyanga','Ogooue-Ivindo','Ogooue-Lolo','Ogooue-Maritime','Woleu-Ntem');
states['Gambia, The']=new Array ('Banjul','Central River','Lower River','North Bank','Upper River','Western');
states['Gaza Strip']=new Array ('Gaza Strip');
states['Georgia']=new Array ('Abashis','Abkhazia or Ap`khazet`is Avtonomiuri Respublika (Sokhumi)','Adigenis','Ajaria or Acharis Avtonomiuri Respublika (Bat`umi)','Akhalgoris','Akhalk`alak`is','Akhalts`ikhis','Akhmetis','Ambrolauris','Aspindzis','Baghdat`is','Bolnisis','Borjomis','Ch`khorotsqus','Ch`okhatauris','Chiat`ura','Dedop`listsqaros','Dmanisis','Dushet`is','Gardabanis','Gori','Goris','Gurjaanis','Javis','K`arelis','K`ut`aisi','Kaspis','Kharagaulis','Khashuris','Khobis','Khonis','Lagodekhis','Lanch`khut`is','Lentekhis','Marneulis','Martvilis','Mestiis','Mts`khet`is','Ninotsmindis','Onis','Ozurget`is','P`ot`i','Qazbegis','Qvarlis','Rust`avi','Sach`kheris','Sagarejos','Samtrediis','Senakis','Sighnaghis','T`bilisi','T`elavis','T`erjolis','T`et`ritsqaros','T`ianet`is','Tqibuli','Ts`ageris','Tsalenjikhis','Tsalkis','Tsqaltubo','Vanis','Zestap`onis','Zugdidi','Zugdidis');
states['Germany']=new Array ('Baden-Wuerttemberg','Bayern','Berlin','Brandenburg','Bremen','Hamburg','Hessen','Mecklenburg-Vorpommern','Niedersachsen','Nordrhein-Westfalen','Rheinland-Pfalz','Saarland','Sachsen','Sachsen-Anhalt','Schleswig-Holstein','Thueringen');
states['Ghana']=new Array ('Ashanti','Brong-Ahafo','Central','Eastern','Greater Accra','Northern','Upper East','Upper West','Volta','Western');
states['Gibraltar']=new Array ('Gibraltar');
states['Glorioso Islands']=new Array ('Ile du Lys','Ile Glorieuse');
states['Greece']=new Array ('Aitolia kai Akarnania','Akhaia','Argolis','Arkadhia','Arta','Attiki','Ayion Oros (Mt. Athos)','Dhodhekanisos','Drama','Evritania','Evros','Evvoia','Florina','Fokis','Fthiotis','Grevena','Ilia','Imathia','Ioannina','Irakleion','Kardhitsa','Kastoria','Kavala','Kefallinia','Kerkyra','Khalkidhiki','Khania','Khios','Kikladhes','Kilkis','Korinthia','Kozani','Lakonia','Larisa','Lasithi','Lesvos','Levkas','Magnisia','Messinia','Pella','Pieria','Preveza','Rethimni','Rodhopi','Samos','Serrai','Thesprotia','Thessaloniki','Trikala','Voiotia','Xanthi','Zakinthos');
states['Greenland']=new Array ('Avannaa (Nordgronland)','Kitaa (Vestgronland)','Tunu (Ostgronland)');
states['Grenada']=new Array ('Carriacou and Petit Martinique','Saint Andrew','Saint David','Saint George','Saint John','Saint Mark','Saint Patrick');
states['Guadeloupe']=new Array ('Basse-Terre','Grande-Terre','Iles de la Petite Terre','Iles des Saintes','Marie-Galante');
states['Guam']=new Array ('Guam');
states['Guatemala']=new Array ('Alta Verapaz','Baja Verapaz','Chimaltenango','Chiquimula','El Progreso','Escuintla','Guatemala','Huehuetenango','Izabal','Jalapa','Jutiapa','Peten','Quetzaltenango','Quiche','Retalhuleu','Sacatepequez','San Marcos','Santa Rosa','Solola','Suchitepequez','Totonicapan','Zacapa');
states['Guernsey']=new Array ('Castel','Forest','St. Andrew','St. Martin','St. Peter Port','St. Pierre du Bois','St. Sampson','St. Saviour','Torteval','Vale');
states['Guinea']=new Array ('Beyla','Boffa','Boke','Conakry','Coyah','Dabola','Dalaba','Dinguiraye','Dubreka','Faranah','Forecariah','Fria','Gaoual','Gueckedou','Kankan','Kerouane','Kindia','Kissidougou','Koubia','Koundara','Kouroussa','Labe','Lelouma','Lola','Macenta','Mali','Mamou','Mandiana','Nzerekore','Pita','Siguiri','Telimele','Tougue','Yomou');
states['Guinea-Bissau']=new Array ('Bafata','Biombo','Bissau','Bolama-Bijagos','Cacheu','Gabu','Oio','Quinara','Tombali');
states['Guyana']=new Array ('Barima-Waini','Cuyuni-Mazaruni','Demerara-Mahaica','East Berbice-Corentyne','Essequibo Islands-West Demerara','Mahaica-Berbice','Pomeroon-Supenaam','Potaro-Siparuni','Upper Demerara-Berbice','Upper Takutu-Upper Essequibo');
states['Haiti']=new Array ('Artibonite','Centre','Grand`Anse','Nord','Nord-Est','Nord-Ouest','Ouest','Sud','Sud-Est');
states['Heard Island and McDonald Islands']=new Array ('Heard Island and McDonald Islands');
states['Holy See (Vatican City)']=new Array ('Holy See (Vatican City)');
states['Honduras']=new Array ('Atlantida','Choluteca','Colon','Comayagua','Copan','Cortes','El Paraiso','Francisco Morazan','Gracias a Dios','Intibuca','Islas de la Bahia','La Paz','Lempira','Ocotepeque','Olancho','Santa Barbara','Valle','Yoro');
states['Hong Kong']=new Array ('Hong Kong');
states['Howland Island']=new Array ('Howland Island');
states['Hungary']=new Array ('Bacs-Kiskun','Baranya','Bekes','Bekescsaba','Borsod-Abauj-Zemplen','Budapest','Csongrad','Debrecen','Dunaujvaros','Eger','Fejer','Gyor','Gyor-Moson-Sopron','Hajdu-Bihar','Heves','Hodmezovasarhely','Jasz-Nagykun-Szolnok','Kaposvar','Kecskemet','Komarom-Esztergom','Miskolc','Nagykanizsa','Nograd','Nyiregyhaza','Pecs','Pest','Somogy','Sopron','Szabolcs-Szatmar-Bereg','Szeged','Szekesfehervar','Szolnok','Szombathely','Tatabanya','Tolna','Vas','Veszprem','Veszprem','Zala','Zalaegerszeg');
states['Iceland']=new Array ('Akranes','Akureyri','Arnessysla','Austur-Bardhastrandarsysla','Austur-Hunavatnssysla','Austur-Skaftafellssysla','Borgarfjardharsysla','Dalasysla','Eyjafjardharsysla','Gullbringusysla','Hafnarfjordhur','Husavik','Isafjordhur','Keflavik','Kjosarsysla','Kopavogur','Myrasysla','Neskaupstadhur','Nordhur-Isafjardharsysla','Nordhur-Mulasys-la','Nordhur-Thingeyjarsysla','Olafsfjordhur','Rangarvallasysla','Reykjavik','Saudharkrokur','Seydhisfjordhur','Siglufjordhur','Skagafjardharsysla','Snaefellsnes-og Hnappadalssysla','Strandasysla','Sudhur-Mulasysla','Sudhur-Thingeyjarsysla','Vesttmannaeyjar','Vestur-Bardhastrandarsysla','Vestur-Hunavatnssysla','Vestur-Isafjardharsysla','Vestur-Skaftafellssysla');

states['India'] = new Array('Andaman and Nicobar','Andhra Pradesh','Arunachal Pradesh','Assam','Bihar','Chandigarh','Chattisgarh','Dadra & Nagar Haveli','Daman and Diu','Delhi','Goa','Gujarat','Haryana','Himachal Pradesh','Jammu & Kashmir','Jharkhand','Karnataka','Kerala','Lakshadweep','Madhya Pradesh','Maharashtra','Manipur','Meghalaya','Mizoram','Nagaland','Orissa','Pondicherry','Punjab','Rajasthan','Sikkim','Tamil Nadu','Tripura','Uttar Pradesh','Uttaranchal','West Bengal');
states['Indonesia']=new Array ('Aceh','Bali','Banten','Bengkulu','East Timor','Gorontalo','Irian Jaya','Jakarta Raya','Jambi','Jawa Barat','Jawa Tengah','Jawa Timur','Kalimantan Barat','Kalimantan Selatan','Kalimantan Tengah','Kalimantan Timur','Kepulauan Bangka Belitung','Lampung','Maluku','Maluku Utara','Nusa Tenggara Barat','Nusa Tenggara Timur','Riau','Sulawesi Selatan','Sulawesi Tengah','Sulawesi Tenggara','Sulawesi Utara','Sumatera Barat','Sumatera Selatan','Sumatera Utara','Yogyakarta');
states['Iran']=new Array ('Ardabil','Azarbayjan-e Gharbi','Azarbayjan-e Sharqi','Bushehr','Chahar Mahall va Bakhtiari','Esfahan','Fars','Gilan','Golestan','Hamadan','Hormozgan','Ilam','Kerman','Kermanshah','Khorasan','Khuzestan','Kohgiluyeh va Buyer Ahmad','Kordestan','Lorestan','Markazi','Mazandaran','Qazvin','Qom','Semnan','Sistan va Baluchestan','Tehran','Yazd','Zanjan');
states['Iraq']=new Array ('Al Anbar','Al Basrah','Al Muthanna','Al Qadisiyah','An Najaf','Arbil','As Sulaymaniyah','At Ta`mim','Babil','Baghdad','Dahuk','Dhi Qar','Diyala','Karbala','Maysan','Ninawa','Salah ad Din','Wasit');
states['Ireland']=new Array ('Carlow','Cavan','Clare','Cork','Donegal','Dublin','Galway','Kerry','Kildare','Kilkenny','Laois','Leitrim','Limerick','Longford','Louth','Mayo','Meath','Monaghan','Offaly','Roscommon','Sligo','Tipperary','Waterford','Westmeath','Wexford','Wicklow');
states['Ireland, Northern']=new Array ('Antrim','Ards','Armagh','Ballymena','Ballymoney','Banbridge','Belfast','Carrickfergus','Castlereagh','Coleraine','Cookstown','Craigavon','Derry','Down','Dungannon','Fermanagh','Larne','Limavady','Lisburn','Magherafelt','Moyle','Newry and Mourne','Newtownabbey','North Down','Omagh','Strabane');
states['Israel']=new Array ('Central','Haifa','Jerusalem','Northern','Southern','Tel Aviv');
states['Italy']=new Array ('Abruzzi','Basilicata','Calabria','Campania','Emilia-Romagna','Friuli-Venezia Giulia','Lazio','Liguria','Lombardia','Marche','Molise','Piemonte','Puglia','Sardegna','Sicilia','Toscana','Trentino-Alto Adige','Umbria','Valle d`Aosta','Veneto');
states['Jamaica']=new Array ('Clarendon','Hanover','Kingston','Manchester','Portland','Saint Andrew','Saint Ann','Saint Catherine','Saint Elizabeth','Saint James','Saint Mary','Saint Thomas','Trelawny','Westmoreland');
states['Jan Mayen']=new Array ('Jan Mayen');
states['Japan']=new Array ('Aichi','Akita','Aomori','Chiba','Ehime','Fukui','Fukuoka','Fukushima','Gifu','Gumma','Hiroshima','Hokkaido','Hyogo','Ibaraki','Ishikawa','Iwate','Kagawa','Kagoshima','Kanagawa','Kochi','Kumamoto','Kyoto','Mie','Miyagi','Miyazaki','Nagano','Nagasaki','Nara','Niigata','Oita','Okayama','Okinawa','Osaka','Saga','Saitama','Shiga','Shimane','Shizuoka','Tochigi','Tokushima','Tokyo','Tottori','Toyama','Wakayama','Yamagata','Yamaguchi','Yamanashi');
states['Jarvis Island']=new Array ('Jarvis Island');
states['Jersey']=new Array ('Jersey');
states['Johnston Atoll']=new Array ('Johnston Atoll');
states['Jordan']=new Array ('Amman','Ajlun','Al`Aqabah','Al Balqa','Al Karak','Al Mafraq','At Tafilah','Az Zarqa','Irbid','Jarash','Ma`an','Madaba');
states['Juan de Nova Island']=new Array ('Juan de Nova Island');
states['Kazakhstan']=new Array ('Almaty','Aqmola','Aqtobe','Astana','Atyrau','Batys Qazaqstan','Bayqongyr','Mangghystau','Ongtustik Qazaqstan','Pavlodar','Qaraghandy','Qostanay','Qyzylorda','Shyghys Qazaqstan','Soltustik Qazaqstan','Zhambyl');
states['Kenya']=new Array ('Central','Coast','Eastern','Nairobi Area','North Eastern','Nyanza','Rift Valley','Western');
states['Kiribati']=new Array ('Abaiang','Abemama','Aranuka','Arorae','Banaba','Banaba','Beru','Butaritari','Central Gilberts','Gilbert Islands','Kanton','Kiritimati','Kuria','Line Islands','Line Islands','Maiana','Makin','Marakei','Nikunau','Nonouti','Northern Gilberts','Onotoa','Phoenix Islands','Southern Gilberts','Tabiteuea','Tabuaeran','Tamana','Tarawa','Tarawa','Teraina');
states['Korea, North']=new Array ('Chagang-do (Chagang Province)','Hamgyong-bukto (North Hamgyong Province)','Hamgyong-namdo (South Hamgyong Province)','Hwanghae-bukto (North Hwanghae Province)','Hwanghae-namdo (South Hwanghae Province)','Kaesong-si (Kaesong City)','Kangwon-do (Kangwon Province)','Namp`o-si (Namp`o City)','P`yongan-bukto (North P`yongan Province)','P`yongan-namdo (South P`yongan Province)','P`yongyang-si (P`yongyang City)','Yanggang-do (Yanggang Province)');
states['Korea, South']=new Array ('Ch`ungch`ong-bukto','Ch`ungch`ong-namdo','Cheju-do','Cholla-bukto','Cholla-namdo','Inch`on-gwangyoksi','Kangwon-do','Kwangju-gwangyoksi','Kyonggi-do','Kyongsang-bukto','Kyongsang-namdo','Pusan-gwangyoksi','Soul-t`ukpyolsi','Taegu-gwangyoksi','Taejon-gwangyoksi','Ulsan-gwangyoksi');
states['Kuwait']=new Array ('Al `Asimah','Al Ahmadi','Al Farwaniyah','Al Jahra','Hawalli');
states['Kyrgyzstan']=new Array ('Batken Oblasty','Bishkek Shaary','Chuy Oblasty (Bishkek)','Jalal-Abad Oblasty','Naryn Oblasty','Osh Oblasty','Talas Oblasty','Ysyk-Kol Oblasty (Karakol)');
states['Laos']=new Array ('Attapu','Bokeo','Bolikhamxai','Champasak','Houaphan','Khammouan','Louangnamtha','Louangphabang','Oudomxai','Phongsali','Salavan','Savannakhet','Viangchan','Viangchan','Xaignabouli','Xaisomboun','Xekong','Xiangkhoang');
states['Latvia']=new Array ('Aizkraukles Rajons','Aluksnes Rajons','Balvu Rajons','Bauskas Rajons','Cesu Rajons','Daugavpils','Daugavpils Rajons','Dobeles Rajons','Gulbenes Rajons','Jekabpils Rajons','Jelgava','Jelgavas Rajons','Jurmala','Kraslavas Rajons','Kuldigas Rajons','Leipaja','Liepajas Rajons','Limbazu Rajons','Ludzas Rajons','Madonas Rajons','Ogres Rajons','Preilu Rajons','Rezekne','Rezeknes Rajons','Riga','Rigas Rajons','Saldus Rajons','Talsu Rajons','Tukuma Rajons','Valkas Rajons','Valmieras Rajons','Ventspils','Ventspils Rajons');
states['Lebanon']=new Array ('Beyrouth','Ech Chimal','Ej Jnoub','El Bekaa','Jabal Loubnane');
states['Lesotho']=new Array ('Berea','Butha-Buthe','Leribe','Mafeteng','Maseru','Mohales Hoek','Mokhotlong','Qacha`s Nek','Quthing','Thaba-Tseka');
states['Liberia']=new Array ('Bomi','Bong','Grand Bassa','Grand Cape Mount','Grand Gedeh','Grand Kru','Lofa','Margibi','Maryland','Montserrado','Nimba','River Cess','Sinoe');
states['Libya']=new Array ('Ajdabiya','Al`Aziziyah','Al Fatih','Al Jabal al Akhdar','Al Jufrah','Al Khums','Al Kufrah','An Nuqat al Khams','Ash Shati','Awbari','Az Zawiyah','Banghazi','Darnah','Ghadamis','Gharyan','Misratah','Murzuq','Sabha','Sawfajjin','Surt','Tarabulus','Tarhunah','Tubruq','Yafran','Zlitan');
states['Liechtenstein']=new Array ('Balzers','Eschen','Gamprin','Mauren','Planken','Ruggell','Schaan','Schellenberg','Triesen','Triesenberg','Vaduz');
states['Lithuania']=new Array ('Akmenes Rajonas','Alytaus Rajonas','Alytus','Anyksciu Rajonas','Birstonas','Birzu Rajonas','Druskininkai','Ignalinos Rajonas','Jonavos Rajonas','Joniskio Rajonas','Jurbarko Rajonas','Kaisiadoriu Rajonas','Kaunas','Kauno Rajonas','Kedainiu Rajonas','Kelmes Rajonas','Klaipeda','Klaipedos Rajonas','Kretingos Rajonas','Kupiskio Rajonas','Lazdiju Rajonas','Marijampole','Marijampoles Rajonas','Mazeikiu Rajonas','Moletu Rajonas','Neringa Pakruojo Rajonas','Palanga','Panevezio Rajonas','Panevezys','Pasvalio Rajonas','Plunges Rajonas','Prienu Rajonas','Radviliskio Rajonas','Raseiniu Rajonas','Rokiskio Rajonas','Sakiu Rajonas','Salcininku Rajonas','Siauliai','Siauliu Rajonas','Silales Rajonas','Silutes Rajonas','Sirvintu Rajonas','Skuodo Rajonas','Svencioniu Rajonas','Taurages Rajonas','Telsiu Rajonas','Traku Rajonas','Ukmerges Rajonas','Utenos Rajonas','Varenos Rajonas','Vilkaviskio Rajonas','Vilniaus Rajonas','Vilnius','Zarasu Rajonas');
states['Luxembourg']=new Array ('Diekirch','Grevenmacher','Luxembourg');
states['Macau']=new Array ('Macau');
states['Macedonia, Former Yugoslav Republic of']=new Array ('Aracinovo','Bac','Belcista','Berovo','Bistrica','Bitola','Blatec','Bogdanci','Bogomila','Bogovinje','Bosilovo','Brvenica','Cair (Skopje)','Capari','Caska','Cegrane','Centar (Skopje)','Centar Zupa','Cesinovo','Cucer-Sandevo','Debar','Delcevo','Delogozdi','Demir Hisar','Demir Kapija','Dobrusevo','Dolna Banjica','Dolneni','Dorce Petrov (Skopje)','Drugovo','Dzepciste','Gazi Baba (Skopje)','Gevgelija','Gostivar','Gradsko','Ilinden','Izvor','Jegunovce','Kamenjane','Karbinci','Karpos (Skopje)','Kavadarci','Kicevo','Kisela Voda (Skopje)','Klecevce','Kocani','Konce','Kondovo','Konopiste','Kosel','Kratovo','Kriva Palanka','Krivogastani','Krusevo','Kuklis','Kukurecani','Kumanovo','Labunista','Lipkovo','Lozovo','Lukovo','Makedonska Kamenica','Makedonski Brod','Mavrovi Anovi','Meseista','Miravci','Mogila','Murtino','Negotino','Negotino-Poloska','Novaci','Novo Selo','Oblesevo','Ohrid','Orasac','Orizari','Oslomej','Pehcevo','Petrovec','Plasnia','Podares','Prilep','Probistip','Radovis','Rankovce','Resen','Rosoman','Rostusa','Samokov','Saraj','Sipkovica','Sopiste','Sopotnika','Srbinovo','Star Dojran','Staravina','Staro Nagoricane','Stip','Struga','Strumica','Studenicani','Suto Orizari (Skopje)','Sveti Nikole','Tearce','Tetovo','Topolcani','Valandovo','Vasilevo','Veles','Velesta','Vevcani','Vinica','Vitoliste','Vranestica','Vrapciste','Vratnica','Vrutok','Zajas','Zelenikovo','Zileno','Zitose','Zletovo','Zrnovci');
states['Madagascar']=new Array ('Antananarivo','Antsiranana','Fianarantsoa','Mahajanga','Toamasina','Toliara');
states['Malawi']=new Array ('Balaka','Blantyre','Chikwawa','Chiradzulu','Chitipa','Dedza','Dowa','Karonga','Kasungu','Likoma','Lilongwe','Machinga (Kasupe)','Mangochi','Mchinji','Mulanje','Mwanza','Mzimba','Nkhata Bay','Nkhotakota','Nsanje','Ntcheu','Ntchisi','Phalombe','Rumphi','Salima','Thyolo','Zomba');
states['Malaysia']=new Array ('Johor','Kedah','Kelantan','Labuan','Melaka','Negeri Sembilan','Pahang','Perak','Perlis','Pulau Pinang','Sabah','Sarawak','Selangor','Terengganu','Wilayah Persekutuan');
states['Maldives']=new Array ('Alifu','Baa','Dhaalu','Faafu','Gaafu Alifu','Gaafu Dhaalu','Gnaviyani','Haa Alifu','Haa Dhaalu','Kaafu','Laamu','Lhaviyani','Maale','Meemu','Noonu','Raa','Seenu','Shaviyani','Thaa','Vaavu');
states['Mali']=new Array ('Gao','Kayes','Kidal','Koulikoro','Mopti','Segou','Sikasso','Tombouctou');
states['Malta']=new Array ('Valletta');
states['Man, Isle of']=new Array ('Man, Isle of');
states['Marshall Islands']=new Array ('Ailinginae','Ailinglaplap','Ailuk','Arno','Aur','Bikar','Bikini','Bokak','Ebon','Enewetak','Erikub','Jabat','Jaluit','Jemo','Kili','Kwajalein','Lae','Lib','Likiep','Majuro','Maloelap','Mejit','Mili','Namorik','Namu','Rongelap','Rongrik','Toke','Ujae','Ujelang','Utirik','Wotho','Wotje');
states['Martinique']=new Array ('Martinique');
states['Mauritania']=new Array ('Adrar','Assaba','Brakna','Dakhlet Nouadhibou','Gorgol','Guidimaka','Hodh Ech Chargui','Hodh El Gharbi','Inchiri','Nouakchott','Tagant','Tiris Zemmour','Trarza');
states['Mauritius']=new Array ('Agalega Islands','Black River','Cargados Carajos Shoals','Flacq','Grand Port','Moka','Pamplemousses','Plaines Wilhems','Port Louis','Riviere du Rempart','Rodrigues','Savanne');
states['Mayotte']=new Array ('Mayotte');
states['Mexico']=new Array ('Aguascalientes','Baja California','Baja California Sur','Campeche','Chiapas','Chihuahua','Coahuila de Zaragoza','Colima','Distrito Federal','Durango','Guanajuato','Guerrero','Hidalgo','Jalisco','Mexico','Michoacan de Ocampo','Morelos','Nayarit','Nuevo Leon','Oaxaca','Puebla','Queretaro de Arteaga','Quintana Roo','San Luis Potosi','Sinaloa','Sonora','Tabasco','Tamaulipas','Tlaxcala','Veracruz-Llave','Yucatan','Zacatecas');
states['Micronesia, Federated States of']=new Array ('Chuuk (Truk)','Kosrae','Pohnpei','Yap');
states['Midway Islands']=new Array ('Midway Islands');
states['Moldova']=new Array ('Balti','Cahul','Chisinau','Chisinau','Dubasari','Edinet','Gagauzia','Lapusna','Orhei','Soroca','Tighina','Ungheni');
states['Monaco']=new Array ('Fontvieille','La Condamine','Monaco-Ville','Monte-Carlo');
states['Mongolia']=new Array ('Arhangay','Bayan-Olgiy','Bayanhongor','Bulgan','Darhan','Dornod','Dornogovi','Dundgovi','Dzavhan','Erdenet','Govi-Altay','Hentiy','Hovd','Hovsgol','Omnogovi','Ovorhangay','Selenge','Suhbaatar','Tov','Ulaanbaatar','Uvs');
states['Montserrat']=new Array ('Saint Anthony','Saint Georges','Saint Peter`s');
states['Morocco']=new Array ('Agadir','Al Hoceima','Azilal','Ben Slimane','Beni Mellal','Boulemane','Casablanca','Chaouen','El Jadida','El Kelaa des Srarhna','Er Rachidia','Essaouira','Fes','Figuig','Guelmim','Ifrane','Kenitra','Khemisset','Khenifra','Khouribga','Laayoune','Larache','Marrakech','Meknes','Nador','Ouarzazate','Oujda','Rabat-Sale','Safi','Settat','Sidi Kacem','Tan-Tan','Tanger','Taounate','Taroudannt','Tata','Taza','Tetouan','Tiznit');
states['Mozambique']=new Array ('Cabo Delgado','Gaza','Inhambane','Manica','Maputo','Nampula','Niassa','Sofala','Tete','Zambezia');
states['Namibia']=new Array ('Caprivi','Erongo','Hardap','Karas','Khomas','Kunene','Ohangwena','Okavango','Omaheke','Omusati','Oshana','Oshikoto','Otjozondjupa');
states['Nauru']=new Array ('Aiwo','Anabar','Anetan','Anibare','Baiti','Boe','Buada','Denigomodu','Ewa','Ijuw','Meneng','Nibok','Uaboe','Yaren');
states['Nepal']=new Array ('Bagmati','Bheri','Dhawalagiri','Gandaki','Janakpur','Karnali','Kosi','Lumbini','Mahakali','Mechi','Narayani','Rapti','Sagarmatha','Seti');
states['Netherlands']=new Array ('Drenthe','Flevoland','Friesland','Gelderland','Groningen','Limburg','Noord-Brabant','Noord-Holland','Overijssel','Utrecht','Zeeland','Zuid-Holland');
states['Netherlands Antilles']=new Array ('Netherlands Antilles');
states['New Caledonia']=new Array ('Iles Loyaute','Nord','Sud');
states['New Zealand']=new Array ('Akaroa','Amuri','Ashburton','Bay of Islands','Bruce','Buller','Chatham Islands','Cheviot','Clifton','Clutha','Cook','Dannevirke','Egmont','Eketahuna','Ellesmere','Eltham','Eyre','Featherston','Franklin','Golden Bay','Great Barrier Island','Grey','Hauraki Plains','Hawera','Hawke`s Bay','Heathcote','Hikurangi','Hobson','Hokianga','Horowhenua','Hurunui','Hutt','Inangahua','Inglewood','Kaikoura','Kairanga','Kiwitea','Lake','Mackenzie','Malvern','Manaia','Manawatu','Mangonui','Maniototo','Marlborough','Masterton','Matamata','Mount Herbert','Ohinemuri','Opotiki','Oroua','Otamatea','Otorohanga','Oxford','Pahiatua','Paparua','Patea','Piako','Pohangina','Raglan','Rangiora','Rangitikei','Rodney','Rotorua','Runanga','Saint Kilda','Silverpeaks','Southland','Stewart Island','Stratford','Strathallan','Taranaki','Taumarunui','Taupo','Tauranga','Thames-Coromandel','Tuapeka','Vincent','Waiapu','Waiheke','Waihemo','Waikato','Waikohu','Waimairi','Waimarino','Waimate','Waimate West','Waimea','Waipa','Waipawa','Waipukurau','Wairarapa South','Wairewa','Wairoa','Waitaki','Waitomo','Waitotara','Wallace','Wanganui','Waverley','Westland','Whakatane','Whangarei','Whangaroa','Woodville');
states['Nicaragua']=new Array ('Atlantico Norte','Atlantico Sur','Boaco','Carazo','Chinandega','Chontales','Esteli','Granada','Jinotega','Leon','Madriz','Managua','Masaya','Matagalpa','Nueva Segovia','Rio San Juan','Rivas');
states['Niger']=new Array ('Agadez','Diffa','Dosso','Maradi','Niamey','Tahoua','Tillaberi','Zinder');
states['Nigeria']=new Array ('Abia','Abuja Federal Capital Territory','Adamawa','Akwa Ibom','Anambra','Bauchi','Bayelsa','Benue','Borno','Cross River','Delta','Ebonyi','Edo','Ekiti','Enugu','Gombe','Imo','Jigawa','Kaduna','Kano','Katsina','Kebbi','Kogi','Kwara','Lagos','Nassarawa','Niger','Ogun','Ondo','Osun','Oyo','Plateau','Rivers','Sokoto','Taraba','Yobe','Zamfara');
states['Niue']=new Array ('Niue');
states['Norfolk Island']=new Array ('Norfolk Island');
states['Northern Mariana Islands']=new Array ('Northern Islands','Rota','Saipan','Tinian');
states['Norway']=new Array ('Akershus','Aust-Agder','Buskerud','Finnmark','Hedmark','Hordaland','More og Romsdal','Nord-Trondelag','Nordland','Oppland','Oslo','Ostfold','Rogaland','Sogn og Fjordane','Sor-Trondelag','Telemark','Troms','Vest-Agder','Vestfold');
states['Oman']=new Array ('Ad Dakhiliyah','Al Batinah','Al Wusta','Ash Sharqiyah','Az Zahirah','Masqat','Musandam','Zufar');
states['Pakistan']=new Array ('Balochistan','Federally Administered Tribal Areas','Islamabad Capital Territory','North-West Frontier Province','Punjab','Sindh');
states['Palau']=new Array ('Aimeliik','Airai','Angaur','Hatobohei','Kayangel','Koror','Melekeok','Ngaraard','Ngarchelong','Ngardmau','Ngatpang','Ngchesar','Ngeremlengui','Ngiwal','Palau Island','Peleliu','Sonsoral','Tobi');
states['Panama']=new Array ('Bocas del Toro','Chiriqui','Cocle','Colon','Darien','Herrera','Los Santos','Panama','San Blas','Veraguas');
states['Papua New Guinea']=new Array ('Bougainville','Central','Chimbu','East New Britain','East Sepik','Eastern Highlands','Enga','Gulf','Madang','Manus','Milne Bay','Morobe','National Capital','New Ireland','Northern','Sandaun','Southern Highlands','West New Britain','Western','Western Highlands');
states['Paraguay']=new Array ('Alto Paraguay','Alto Parana','Amambay','Asuncion (city)','Boqueron','Caaguazu','Caazapa','Canindeyu','Central','Concepcion','Cordillera','Guaira','Itapua','Misiones','Neembucu','Paraguari','Presidente Hayes','San Pedro');
states['Peru']=new Array ('Amazonas','Ancash','Apurimac','Arequipa','Ayacucho','Cajamarca','Callao','Cusco','Huancavelica','Huanuco','Ica','Junin','La Libertad','Lambayeque','Lima','Loreto','Madre de Dios','Moquegua','Pasco','Piura','Puno','San Martin','Tacna','Tumbes','Ucayali');
states['Philippines']=new Array ('Abra','Agusan del Norte','Agusan del Sur','Aklan','Albay','Angeles','Antique','Aurora','Bacolod','Bago','Baguio','Bais','Basilan','Basilan City','Bataan','Batanes','Batangas','Batangas City','Benguet','Bohol','Bukidnon','Bulacan','Butuan','Cabanatuan','Cadiz','Cagayan','Cagayan de Oro','Calbayog','Caloocan','Camarines Norte','Camarines Sur','Camiguin','Canlaon','Capiz','Catanduanes','Cavite','Cavite City','Cebu','Cebu City','Cotabato','Dagupan','Danao','Dapitan','Davao City Davao','Davao del Sur','Davao Oriental','Dipolog','Dumaguete','Eastern Samar','General Santos','Gingoog','Ifugao','Iligan','Ilocos Norte','Ilocos Sur','Iloilo','Iloilo City','Iriga','Isabela','Kalinga-Apayao','La Carlota','La Union','Laguna','Lanao del Norte','Lanao del Sur','Laoag','Lapu-Lapu','Legaspi','Leyte','Lipa','Lucena','Maguindanao','Mandaue','Manila','Marawi','Marinduque','Masbate','Mindoro Occidental','Mindoro Oriental','Misamis Occidental','Misamis Oriental','Mountain','Naga','Negros Occidental','Negros Oriental','North Cotabato','Northern Samar','Nueva Ecija','Nueva Vizcaya','Olongapo','Ormoc','Oroquieta','Ozamis','Pagadian','Palawan','Palayan','Pampanga','Pangasinan','Pasay','Puerto Princesa','Quezon','Quezon City','Quirino','Rizal','Romblon','Roxas','Samar','San Carlos (in Negros Occidental)','San Carlos (in Pangasinan)','San Jose','San Pablo','Silay','Siquijor','Sorsogon','South Cotabato','Southern Leyte','Sultan Kudarat','Sulu','Surigao','Surigao del Norte','Surigao del Sur','Tacloban','Tagaytay','Tagbilaran','Tangub','Tarlac','Tawitawi','Toledo','Trece Martires','Zambales','Zamboanga','Zamboanga del Norte','Zamboanga del Sur');
states['Pitcaim Islands']=new Array ('Pitcaim Islands');
states['Poland']=new Array ('Dolnoslaskie','Kujawsko-Pomorskie','Lodzkie','Lubelskie','Lubuskie','Malopolskie','Mazowieckie','Opolskie','Podkarpackie','Podlaskie','Pomorskie','Slaskie','Swietokrzyskie','Warminsko-Mazurskie','Wielkopolskie','Zachodniopomorskie');
states['Portugal']=new Array ('Acores (Azores)','Aveiro','Beja','Braga','Braganca','Castelo Branco','Coimbra','Evora','Faro','Guarda','Leiria','Lisboa','Madeira','Portalegre','Porto','Santarem','Setubal','Viana do Castelo','Vila Real','Viseu');
states['Puerto Rico']=new Array ('Adjuntas','Aguada','Aguadilla','Aguas Buenas','Aibonito','Anasco','Arecibo','Arroyo','Barceloneta','Barranquitas','Bayamon','Cabo Rojo','Caguas','Camuy','Canovanas','Carolina','Catano','Cayey','Ceiba','Ciales','Cidra','Coamo','Comerio','Corozal','Culebra','Dorado','Fajardo','Florida','Guanica','Guayama','Guayanilla','Guaynabo','Gurabo','Hatillo','Hormigueros','Humacao','Isabela','Jayuya','Juana Diaz','Juncos','Lajas','Lares','Las Marias','Las Piedras','Loiza','Luquillo','Manati','Maricao','Maunabo','Mayaguez','Moca','Morovis','Naguabo','Naranjito','Orocovis','Patillas','Penuelas','Ponce','Quebradillas','Rincon','Rio Grande','Sabana Grande','Salinas','San German','San Juan','San Lorenzo','San Sebastian','Santa Isabel','Toa Alta','Toa Baja','Trujillo Alto','Utuado','Vega Alta','Vega Baja','Vieques','Villalba','Yabucoa','Yauco');
states['Qatar']=new Array ('Ad Dawhah','Al Ghuwayriyah','Al Jumayliyah','Al Khawr','Al Wakrah','Ar Rayyan','Jarayan al Batinah','Madinat ash Shamal','Umm Salal');
states['Reunion']=new Array ('Reunion');
states['Romainia']=new Array ('Alba','Arad','Arges','Bacau','Bihor','Bistrita-Nasaud','Botosani','Braila','Brasov','Bucuresti','Buzau','Calarasi','Caras-Severin','Cluj','Constanta','Covasna','Dimbovita','Dolj','Galati','Giurgiu','Gorj','Harghita','Hunedoara','Ialomita','Iasi','Maramures','Mehedinti','Mures','Neamt','Olt','Prahova','Salaj','Satu Mare','Sibiu','Suceava','Teleorman','Timis','Tulcea','Vaslui','Vilcea','Vrancea');
states['Russia']=new Array ('Adygeya (Maykop)','Aginskiy Buryatskiy (Aginskoye)','Altay (Gorno-Altaysk)','Altayskiy (Barnaul)','Amurskaya (Blagoveshchensk)','Arkhangel`skaya','Astrakhanskaya','Bashkortostan (Ufa)','Belgorodskaya','Bryanskaya','Buryatiya (Ulan-Ude)','Chechnya (Groznyy)','Chelyabinskaya','Chitinskaya','Chukotskiy (Anadyr)','Chuvashiya (Cheboksary)','Dagestan (Makhachkala)','Evenkiyskiy (Tura)','Ingushetiya (Nazran)','Irkutskaya','Ivanovskaya','Kabardino-Balkariya (Nal`chik)','Kaliningradskaya','Kalmykiya (Elista)','Kaluzhskaya','Kamchatskaya (Petropavlovsk-Kamchatskiy)','Karachayevo-Cherkesiya (Cherkessk)','Kareliya (Petrozavodsk)','Kemerovskaya','Khabarovskiy','Khakasiya (Abakan)','Khanty-Mansiyskiy (Khanty-Mansiysk)','Kirovskaya','Komi (Syktyvkar)','Komi-Permyatskiy (Kudymkar)','Koryakskiy (Palana)','Kostromskaya','Krasnodarskiy','Krasnoyarskiy','Kurganskaya','Kurskaya','Leningradskaya','Lipetskaya','Magadanskaya','Mariy-El (Yoshkar-Ola)','Mordoviya (Saransk)','Moskovskaya','Moskva (Moscow)','Murmanskaya','Nenetskiy (Nar`yan-Mar)','Nizhegorodskaya','Novgorodskaya','Novosibirskaya','Omskaya','Orenburgskaya','Orlovskaya (Orel)','Penzenskaya','Permskaya','Primorskiy (Vladivostok)','Pskovskaya','Rostovskaya','Ryazanskaya','Sakha (Yakutsk)','Sakhalinskaya (Yuzhno-Sakhalinsk)','Samarskaya','Sankt-Peterburg (Saint Petersburg)','Saratovskaya','Severnaya Osetiya-Alaniya [North Ossetia] (Vladikavkaz)','Smolenskaya','Stavropol`skiy','Sverdlovskaya (Yekaterinburg)','Tambovskaya','Tatarstan (Kazan)','Taymyrskiy (Dudinka)','Tomskaya','Tul`skaya','Tverskaya','Tyumenskaya','Tyva (Kyzyl)','Udmurtiya (Izhevsk)','Ul`yanovskaya','Ust-Ordynskiy Buryatskiy (Ust-Ordynskiy)','Vladimirskaya','Volgogradskaya','Vologodskaya','Voronezhskaya','Yamalo-Nenetskiy (Salekhard)','Yaroslavskaya','Yevreyskaya');
states['Rwanda']=new Array ('Butare','Byumba','Cyangugu','Gikongoro','Gisenyi','Gitarama','Kibungo','Kibuye','Kigali Rurale','Kigali-ville','Ruhengeri','Umutara');
states['Saint Helena']=new Array ('Ascension','Saint Helena','Tristan da Cunha');
states['Saint Kitts and Nevis']=new Array ('Christ Church Nichola Town','Saint Anne Sandy Point','Saint George Basseterre','Saint George Gingerland','Saint James Windward','Saint John Capisterre','Saint John Figtree','Saint Mary Cayon','Saint Paul Capisterre','Saint Paul Charlestown','Saint Peter Basseterre','Saint Thomas Lowland','Saint Thomas Middle Island','Trinity Palmetto Point');
states['Saint Lucia']=new Array ('Anse-la-Raye','Castries','Choiseul','Dauphin','Dennery','Gros Islet','Laborie','Micoud','Praslin','Soufriere','Vieux Fort');
states['Saint Pierre and Miquelon']=new Array ('Miquelon','Saint Pierre');
states['Saint Vincent and the Grenadines']=new Array ('Charlotte','Grenadines','Saint Andrew','Saint David','Saint George','Saint Patrick');
states['Samoa']=new Array ('A`ana','Aiga-i-le-Tai','Atua','Fa`asaleleaga','Gaga`emauga','Gagaifomauga','Palauli','Satupa`itea','Tuamasaga','Va`a-o-Fonoti','Vaisigano');
states['San Marino']=new Array ('Acquaviva','Borgo Maggiore','Chiesanuova','Domagnano','Faetano','Fiorentino','Monte Giardino','San Marino','Serravalle');
states['Sao Tome and Principe']=new Array ('Principe','Sao Tome');
states['Saudi Arabia']=new Array ('Asir','Al Bahah','Al Hudud ash Shamaliyah','Al Jawf','Al Madinah','Al Qasim','Ar Riyad','Ash Sharqiyah (Eastern Province)','Ha`il','Jizan','Makkah','Najran','Tabuk');
states['Scotland']=new Array ('Aberdeen City','Aberdeenshire','Angus','Argyll and Bute','City of Edinburgh','Clackmannanshire','Dumfries and Galloway','Dundee City','East Ayrshire','East Dunbartonshire','East Lothian','East Renfrewshire','Eilean Siar (Western Isles)','Falkirk','Fife','Glasgow City','Highland','Inverclyde','Midlothian','Moray','North Ayrshire','North Lanarkshire','Orkney Islands','Perth and Kinross','Renfrewshire','Shetland Islands','South Ayrshire','South Lanarkshire','Stirling','The Scottish Borders','West Dunbartonshire','West Lothian');
states['Senegal']=new Array ('Dakar','Diourbel','Fatick','Kaolack','Kolda','Louga','Saint-Louis','Tambacounda','Thies','Ziguinchor');
states['Seychelles']=new Array ('Anse aux Pins','Anse Boileau','Anse Etoile','Anse Louis','Anse Royale','Baie Lazare','Baie Sainte Anne','Beau Vallon','Bel Air','Bel Ombre','Cascade','Glacis','Grand`Anse (on Mahe)','Grand`Anse (on Praslin)','La Digue','La Riviere Anglaise','Mont Buxton','Mont Fleuri','Plaisance','Pointe La Rue','Port Glaud','Saint Louis','Takamaka');
states['Sierra Leone']=new Array ('Eastern','Northern','Southern','Western');
states['Singapore']=new Array ('Singapore');
states['Slovakia']=new Array ('Banskobystricky','Bratislavsky','Kosicky','Nitriansky','Presovsky','Trenciansky','Trnavsky','Zilinsky');
states['Slovenia']=new Array ('Ajdovscina','Beltinci','Bled','Bohinj','Borovnica','Bovec','Brda','Brezice','Brezovica','Cankova-Tisina','Celje','Cerklje na Gorenjskem','Cerknica','Cerkno','Crensovci','Crna na Koroskem','Crnomelj','Destrnik-Trnovska Vas','Divaca','Dobrepolje','Dobrova-Horjul-Polhov Gradec','Dol pri Ljubljani','Domzale','Dornava','Dravograd','Duplek','Gorenja Vas-Poljane','Gorisnica','Gornja Radgona','Gornji Grad','Gornji Petrovci','Grosuplje','Hodos Salovci','Hrastnik','Hrpelje-Kozina','Idrija','Ig','Ilirska Bistrica','Ivancna Gorica','Izola','Jesenice','Jursinci','Kamnik','Kanal','Kidricevo','Kobarid','Kobilje','Kocevje','Komen','Koper','Kozje','Kranj','Kranjska Gora','Krsko','Kungota','Kuzma','Lasko','Lenart','Lendava','Litija','Ljubljana','Ljubno','Ljutomer','Logatec','Loska Dolina','Loski Potok','Luce','Lukovica','Majsperk','Maribor','Medvode','Menges','Metlika','Mezica','Miren-Kostanjevica','Mislinja','Moravce','Moravske Toplice','Mozirje','Murska Sobota','Muta','Naklo','Nazarje','Nova Gorica','Novo Mesto','Odranci','Ormoz','Osilnica','Pesnica','Piran','Pivka','Podcetrtek','Podvelka-Ribnica','Postojna','Preddvor','Ptuj','Puconci','Race-Fram','Radece','Radenci','Radlje ob Dravi','Radovljica','Ravne-Prevalje','Ribnica','Rogasevci','Rogaska Slatina','Rogatec','Ruse','Semic','Sencur','Sentilj','Sentjernej','Sentjur pri Celju','Sevnica','Sezana','Skocjan','Skofja Loka','Skofljica','Slovenj Gradec','Slovenska Bistrica','Slovenske Konjice','Smarje pri Jelsah','Smartno ob Paki','Sostanj','Starse','Store','Sveti Jurij','Tolmin','Trbovlje','Trebnje','Trzic','Turnisce','Velenje','Velike Lasce','Videm','Vipava','Vitanje','Vodice','Vojnik','Vrhnika','Vuzenica','Zagorje ob Savi','Zalec','Zavrc','Zelezniki','Ziri','Zrece');
states['Solomon Islands']=new Array ('Bellona','Central','Choiseul (Lauru)','Guadalcanal','Honiara','Isabel','Makira','Malaita','Rennell','Temotu','Western');
states['Somalia']=new Array ('Awdal','Bakool','Banaadir','Bari','Bay','Galguduud','Gedo','Hiiraan','Jubbada Dhexe','Jubbada Hoose','Mudug','Nugaal','Sanaag','Shabeellaha Dhexe','Shabeellaha Hoose','Sool','Togdheer','Woqooyi Galbeed');
states['South Africa']=new Array ('Eastern Cape','Free State','Gauteng','KwaZulu-Natal','Mpumalanga','North-West','Northern Cape','Northern Province','Western Cape');
states['South Georgia and South Sandwich Islands']=new Array ('Bird Island','Bristol Island','Clerke Rocks','Montagu Island','Saunders Island','South Georgia','Southern Thule','Traversay Islands');
states['Spain']=new Array ('Andalucia','Aragon','Asturias','Baleares (Balearic Islands)','Canarias (Canary Islands)','Cantabria','Castilla y Leon','Castilla-La Mancha','Cataluna','Ceuta','Communidad Valencian','Extremadura','Galicia','Islas Chafarinas','La Rioja','Madrid','Melilla','Murcia','Navarra','Pais Vasco (Basque Country)','Penon de Alhucemas','Penon de Velez de la Gomera');
states['Spratly Islands']=new Array ('Spratly Islands');
states['Sri Lanka']=new Array ('Central','Eastern','North Central','North Eastern','North Western','Northern','Sabaragamuwa','Southern','Uva','Western');
states['Sudan']=new Array ('A`ali an Nil','Al Bahr al Ahmar','Al Buhayrat','Al Jazirah','Al Khartum','Al Qadarif','Al Wahdah','An Nil al Abyad','An Nil al Azraq','Ash Shamaliyah','Bahr al Jabal','Gharb al Istiwa`iyah','Gharb Bahr al Ghazal','Gharb Darfur','Gharb Kurdufan','Janub Darfur','Janub Kurdufan','Junqali','Kassala','Nahr an Nil','Shamal Bahr al Ghazal','Shamal Darfur','Shamal Kurdufan','Sharq al Istiwa`iyah','Sinnar','Warab');
states['Suriname']=new Array ('Brokopondo','Commewijne','Coronie','Marowijne','Nickerie','Para','Paramaribo','Saramacca','Sipaliwini','Wanica');
states['Svalbard']=new Array ('Barentsoya','Bjornoya','Edgeoya','Hopen','Kvitoya','Nordaustandet','Prins Karls Forland','Spitsbergen');
states['Swaziland']=new Array ('Hhohho','Lubombo','Manzini','Shiselweni');
states['Sweden']=new Array ('Blekinge','Dalarnas','Gavleborgs','Gotlands','Hallands','Jamtlands','Jonkopings','Kalmar','Kronobergs','Norrbottens','Orebro','Ostergotlands','Skane','Sodermanlands','Stockholms','Uppsala','Varmlands','Vasterbottens','Vasternorrlands','Vastmanlands','Vastra Gotalands');
states['Switzerland']=new Array ('Aargau','Ausser-Rhoden','Basel-Landschaft','Basel-Stadt','Bern','Fribourg','Geneve','Glarus','Graubunden','Inner-Rhoden','Jura','Luzern','Neuchatel','Nidwalden','Obwalden','Sankt Gallen','Schaffhausen','Schwyz','Solothurn','Thurgau','Ticino','Uri','Valais','Vaud','Zug','Zurich');
states['Syria']=new Array ('Al Hasakah','Al Ladhiqiyah','Al Qunaytirah','Ar Raqqah','As Suwayda','Dara','Dayr az Zawr','Dimashq','Halab','Hamah','Hims','Idlib','Rif Dimashq','Tartus');
states['Taiwan']=new Array ('Chang-hua','Chi-lung','Chia-i','Chia-i','Chung-hsing-hsin-ts`un','Hsin-chu','Hsin-chu','Hua-lien','I-lan','Kao-hsiung','Kao-hsiung','Miao-li','Nan-t`ou','P`eng-hu','P`ing-tung','T`ai-chung','T`ai-chung','T`ai-nan','T`ai-nan','T`ai-pei','T`ai-pei','T`ai-tung','T`ao-yuan','Yun-lin');
states['Tajikistan']=new Array ('Viloyati Khatlon','Viloyati Leninobod','Viloyati Mukhtori Kuhistoni Badakhshon');
states['Tanzania']=new Array ('Arusha','Dar es Salaam','Dodoma','Iringa','Kagera','Kigoma','Kilimanjaro','Lindi','Mara','Mbeya','Morogoro','Mtwara','Mwanza','Pemba North','Pemba South','Pwani','Rukwa','Ruvuma','Shinyanga','Singida','Tabora','Tanga','Zanzibar Central/South','Zanzibar North','Zanzibar Urban/West');
states['Thailand']=new Array ('Amnat Charoen','Ang Thong','Buriram','Chachoengsao','Chai Nat','Chaiyaphum','Chanthaburi','Chiang Mai','Chiang Rai','Chon Buri','Chumphon','Kalasin','Kamphaeng Phet','Kanchanaburi','Khon Kaen','Krabi','Krung Thep Mahanakhon (Bangkok)','Lampang','Lamphun','Loei','Lop Buri','Mae Hong Son','Maha Sarakham','Mukdahan','Nakhon Nayok','Nakhon Pathom','Nakhon Phanom','Nakhon Ratchasima','Nakhon Sawan','Nakhon Si Thammarat','Nan','Narathiwat','Nong Bua Lamphu','Nong Khai','Nonthaburi','Pathum Thani','Pattani','Phangnga','Phatthalung','Phayao','Phetchabun','Phetchaburi','Phichit','Phitsanulok','Phra Nakhon Si Ayutthaya','Phrae','Phuket','Prachin Buri','Prachuap Khiri Khan','Ranong','Ratchaburi','Rayong','Roi Et','Sa Kaeo','Sakon Nakhon','Samut Prakan','Samut Sakhon','Samut Songkhram','Sara Buri','Satun','Sing Buri','Sisaket','Songkhla','Sukhothai','Suphan Buri','Surat Thani','Surin','Tak','Trang','Trat','Ubon Ratchathani','Udon Thani','Uthai Thani','Uttaradit','Yala','Yasothon');
states['Tobago']=new Array ('Tobago');
states['Toga']=new Array ('De La Kara','Des Plateaux','Des Savanes','Du Centre','Maritime');
states['Tokelau']=new Array ('Atafu','Fakaofo','Nukunonu');
states['Tonga']=new Array ('Ha`apai','Tongatapu','Vava`u');
states['Trinidad']=new Array ('Arima','Caroni','Mayaro','Nariva','Port-of-Spain','Saint Andrew','Saint David','Saint George','Saint Patrick','San Fernando','Victoria');
states['Tunisia']=new Array ('Ariana','Beja','Ben Arous','Bizerte','El Kef','Gabes','Gafsa','Jendouba','Kairouan','Kasserine','Kebili','Mahdia','Medenine','Monastir','Nabeul','Sfax','Sidi Bou Zid','Siliana','Sousse','Tataouine','Tozeur','Tunis','Zaghouan');
states['Turkey']=new Array ('Adana','Adiyaman','Afyon','Agri','Aksaray','Amasya','Ankara','Antalya','Ardahan','Artvin','Aydin','Balikesir','Bartin','Batman','Bayburt','Bilecik','Bingol','Bitlis','Bolu','Burdur','Bursa','Canakkale','Cankiri','Corum','Denizli','Diyarbakir','Duzce','Edirne','Elazig','Erzincan','Erzurum','Eskisehir','Gaziantep','Giresun','Gumushane','Hakkari','Hatay','Icel','Igdir','Isparta','Istanbul','Izmir','Kahramanmaras','Karabuk','Karaman','Kars','Kastamonu','Kayseri','Kilis','Kirikkale','Kirklareli','Kirsehir','Kocaeli','Konya','Kutahya','Malatya','Manisa','Mardin','Mugla','Mus','Nevsehir','Nigde','Ordu','Osmaniye','Rize','Sakarya','Samsun','Sanliurfa','Siirt','Sinop','Sirnak','Sivas','Tekirdag','Tokat','Trabzon','Tunceli','Usak','Van','Yalova','Yozgat','Zonguldak');
states['Turkmenistan']=new Array ('Ahal Welayaty','Balkan Welayaty','Dashhowuz Welayaty','Lebap Welayaty','Mary Welayaty');
states['Tuvalu']=new Array ('Tuvalu');
states['Uganda']=new Array ('Adjumani','Apac','Arua','Bugiri','Bundibugyo','Bushenyi','Busia','Gulu','Hoima','Iganga','Jinja','Kabale','Kabarole','Kalangala','Kampala','Kamuli','Kapchorwa','Kasese','Katakwi','Kibale','Kiboga','Kisoro','Kitgum','Kotido','Kumi','Lira','Luwero','Masaka','Masindi','Mbale','Mbarara','Moroto','Moyo','Mpigi','Mubende','Mukono','Nakasongola','Nebbi','Ntungamo','Pallisa','Rakai','Rukungiri','Sembabule','Soroti','Tororo');
states['Ukraine']=new Array ('Avtonomna Respublika Krym (Simferopol)','Cherkas`ka (Cherkasy)','Chernihivs`ka (Chernihiv)','Chernivets`ka (Chernivtsi)','Dnipropetrovs`ka (Dnipropetrovs`k)','Donets`ka (Donets`k)','Ivano-Frankivs`ka (Ivano-Frankivs`k)','Kharkivs`ka (Kharkiv)','Khersons`ka (Kherson)','Khmel`nyts`ka (Khmel`nyts`kyy)','Kirovohrads`ka (Kirovohrad)','Kyyiv','Kyyivs`ka (Kiev)','L`vivs`ka (L`viv)','Luhans`ka (Luhans`k)','Mykolayivs`ka (Mykolayiv)','Odes`ka (Odesa)','Poltavs`ka (Poltava)','Rivnens`ka (Rivne)','Sevastopol','Sums`ka (Sumy)','Ternopil`s`ka (Ternopil)','Vinnyts`ka (Vinnytsya)','Volyns`ka (Luts`k)','Zakarpats`ka (Uzhhorod)','Zaporiz`ka (Zaporizhzhya)','Zhytomyrs`ka (Zhytomyr)');
states['United Arab Emirates']=new Array ('Ajman','Abu Zaby (Abu Dhabi)','Al Fujayrah','Ash Shariqah (Sharjah)','Dubayy (Dubai)','Ra`s al Khaymah','Umm al Qaywayn');
states['United Kingdom']=new Array ('Barking and Dagenham','Barnet','Barnsley','Bath and North East Somerset','Bedfordshire','Bexley','Birmingham','Blackburn with Darwen','Blackpool','Bolton','Bournemouth','Bracknell Forest','Bradford','Brent','Brighton and Hove','Bromley','Buckinghamshire','Bury','Calderdale','Cambridgeshire','Camden','Cheshire','City of Bristol','City of Kingston upon Hull','City of London','Cornwall','Coventry','Croydon','Cumbria','Darlington','Derby','Derbyshire','Devon','Doncaster','Dorset','Dudley','Durham','Ealing','East Riding of Yorkshire','East Sussex','Enfield','Essex','Gateshead','Gloucestershire','Greenwich','Hackney','Halton','Hammersmith and Fulham','Hampshire','Haringey','Harrow','Hartlepool','Havering','Herefordshire','Hertfordshire','Hillingdon','Hounslow','Isle of Wight','Islington','Kensington and Chelsea','Kent','Kingston upon Thames','Kirklees','Knowsley','Lambeth','Lancashire','Leeds','Leicester','Leicestershire','Lewisham','Lincolnshire','Liverpool','Luton','Manchester','Medway','Merton','Middlesbrough','Milton Keynes','Newcastle upon Tyne','Newham','Norfolk','North East Lincolnshire','North Lincolnshire','North Somerset','North Tyneside','North Yorkshire','Northamptonshire','Northumberland','Nottingham','Nottinghamshire','Oldham','Oxfordshire','Peterborough','Plymouth','Poole','Portsmouth','Reading','Redbridge','Redcar and Cleveland','Richmond upon Thames','Rochdale','Rotherham','Rutland','Salford','Sandwell','Sefton','Sheffield','Shropshire','Slough','Solihull','Somerset','South Gloucestershire','South Tyneside','Southampton','Southend-on-Sea','Southwark','St. Helens','Staffordshire','Stockport','Stockton-on-Tees','Stoke-on-Trent','Suffolk','Sunderland','Surrey','Sutton','Swindon','Tameside','Telford and Wrekin','Thurrock','Torbay','Tower Hamlets','Trafford','Wakefield','Walsall','Waltham Forest','Wandsworth','Warrington','Warwickshire','West Berkshire','West Sussex','Westminster','Wigan','Wiltshire','Windsor and Maidenhead','Wirral','Wokingham','Wolverhampton','Worcestershire','York');
states['Uruguay']=new Array ('Artigas','Canelones','Cerro Largo','Colonia','Durazno','Flores','Florida','Lavalleja','Maldonado','Montevideo','Paysandu','Rio Negro','Rivera','Rocha','Salto','San Jose','Soriano','Tacuarembo','Treinta y Tres');
states['USA']=new Array ('Alabama','Alaska','Arizona','Arkansas','California','Colorado','Connecticut','Delaware','District of Columbia','Florida','Georgia','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Ohio','Oklahoma','Oregon','Pennsylvania','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont','Virginia','Washington','West Virginia','Wisconsin','Wyoming');
states['Uzbekistan']=new Array ('Andijon Wiloyati','Bukhoro Wiloyati','Farghona Wiloyati','Jizzakh Wiloyati','Khorazm Wiloyati (Urganch)','Namangan Wiloyati','Nawoiy Wiloyati','Qashqadaryo Wiloyati (Qarshi)','Qoraqalpoghiston (Nukus)','Samarqand Wiloyati','Sirdaryo Wiloyati (Guliston)','Surkhondaryo Wiloyati (Termiz)','Toshkent Shahri','Toshkent Wiloyati');
states['Vanuatu']=new Array ('Malampa','Penama','Sanma','Shefa','Tafea','Torba');
states['Venezuela']=new Array ('Amazonas','Anzoategui','Apure','Aragua','Barinas','Bolivar','Carabobo','Cojedes','Delta Amacuro','Dependencias Federales','Distrito Federal','Falcon','Guarico','Lara','Merida','Miranda','Monagas','Nueva Esparta','Portuguesa','Sucre','Tachira','Trujillo','Vargas','Yaracuy','Zulia');
states['Vietnam']=new Array ('An Giang','Ba Ria-Vung Tau','Bac Giang','Bac Kan','Bac Lieu','Bac Ninh','Ben Tre','Binh Dinh','Binh Duong','Binh Phuoc','Binh Thuan','Ca Mau','Can Tho','Cao Bang','Da Nang','Dac Lak','Dong Nai','Dong Thap','Gia Lai','Ha Giang','Ha Nam','Ha Noi','Ha Tay','Ha Tinh','Hai Duong','Hai Phong','Ho Chi Minh','Hoa Binh','Hung Yen','Khanh Hoa','Kien Giang','Kon Tum','Lai Chau','Lam Dong','Lang Son','Lao Cai','Long An','Nam Dinh','Nghe An','Ninh Binh','Ninh Thuan','Phu Tho','Phu Yen','Quang Binh','Quang Nam','Quang Ngai','Quang Ninh','Quang Tri','Soc Trang','Son La','Tay Ninh','Thai Binh','Thai Nguyen','Thanh Hoa','Thua Thien-Hue','Tien Giang','Tra Vinh','Tuyen Quang','Vinh Long','Vinh Phuc','Yen Bai');
states['Virgin Islands']=new Array ('Saint Croix','Saint John','Saint Thomas');
states['Wales']=new Array ('Blaenau Gwent','Bridgend','Caerphilly','Cardiff','Carmarthenshire','Ceredigion','Conwy','Denbighshire','Flintshire','Gwynedd','Isle of Anglesey','Merthyr Tydfil','Monmouthshire','Neath Port Talbot','Newport','Pembrokeshire','Powys','Rhondda Cynon Taff','Swansea','The Vale of Glamorgan','Torfaen','Wrexham');
states['Wallis and Futuna']=new Array ('Alo','Sigave','Wallis');
states['West Bank']=new Array ('West Bank');
states['Western Sahara']=new Array ('Western Sahara');
states['Yemen']=new Array ('Adan','Ataq','Abyan','Al Bayda','Al Hudaydah','Al Jawf','Al Mahrah','Al Mahwit','Dhamar','Hadhramawt','Hajjah','Ibb','Lahij','Ma`rib','Sa`dah','San`a','Ta`izz');
states['Yugoslavia']=new Array ('Kosovo','Montenegro','Serbia','Vojvodina');
states['Zambia']=new Array ('Central','Copperbelt','Eastern','Luapula','Lusaka','North-Western','Northern','Southern','Western');
states['Zimbabwe']=new Array ('Bulawayo','Harare','ManicalandMashonaland Central','Mashonaland East','Mashonaland West','Masvingo','Matabeleland North','Matabeleland South','Midlands');


//----------------------------------India------------------------------
cities = new Array();
cities['Andaman and Nicobar']= new Array('Car Nicobar','Port Blair','Rest of Andaman and Nicobar');

cities['Andhra Pradesh'] = new Array('Addanki','Adilabad','Adoni','Akiveedu','Aleswaram','Amalapuram','Anakapalli',	'Anantapur','Anaparthi','Ankapur','Annavaram','Araku','Armoor','Aswararaopet','Atmakur','Avanigadda','Banavasi','Bellampally','Bhadrachalam','Bhanoor','Bhattiprolu','Bhimavaram','Bhogapuram','Bhoopalpalli','Bikkovolu','Challapalli','Chilakaluripet','Chimakurhy','Chinnameram','Chinnoor','Chirala','Chittoor','Cuddapah','Dachepalli','Darsi','Dharmavaram','Dhone','Dornakal','Draksharamam','Dwarapudi','Eluru','Ganparavaram','Giddalur','Godavarikani','Gooty','Gottipadu','Gudivada','Gunduru','Gujulapally','Gummaladoddi','Guntakal','Guntupally','Guntur','Gurazala','Hanmakonda','Hanuman Junction','Hathnoor Mandal','Hindupur','Hyderabad','Ibrahimpatnam','Jaggampeta','Jaggayyapet','Jambulapadu','Jangareddygudem','Jogipet','Kadapa','Kadiri','Kakinada','Kalan Durg','Kamalapur','Kamareddy','Kammerpally','Kanchikacherla','Kandukur','Kanigiri','Karampudi','Karimnagar','Khammam','Kikaluru','Kodada','Kondapalle','Kothagudem','Kothur','Kotipalli','Kurnool','Macherla','Machilipatnam','Madaramittla','Madira','Mahabad','Mahbubnagar','Mambidalla','Mancherial','Mangalagiri','Manugur','Markapuram','Martur','Medak','Medchal','Medipally','Mehboobnagar','Metpally','Mondapeta','Mothugudem','Movua','Mulapeta','Mylavaram','Nadikudi','Nagarjunasagar','Nagayalanka','Naidupeta','Nakirikallu','Nalgonda','Nandigama','Nandyal','Narasannapeta','Narasaraopeta','Narsampet','Narsapur','Narsipatnam','Nellore','Nidadavolu','Nizamabad','Nunna','Nuzividu','Ongole','Padalkur','Palasa','Palvancha','Pamarru','Pamur','Parkal','Parvathipuram','Pedanandipadu','Pedena','Peerket','Piduguralla','Podili','Pollavaram','Ponnuru','Prakasam','Puttaparthy','Ragampeta','Rajam','Rajavammangi','Rajmundry','Ramachandrapuram','Ramagundam','Rampachodavaram','Rangareddi','Ravulapalem','Rayanapadu','Rayavaram','Renigunta','Repalli','Sadashivnagar','Sadashivpet','Saluru','Samalkot','Sangareddy','Sattenapalli','Sattupalli','Secundrabad','Selaru','Shadnagar','Shankerpally','Siddipet','Singarayakonda','Sirchilla','Sriharikota','Srikakulam','Sullurpet','Surlanka','Tada','Tadepalligudem','Tadipatri','Tanuku','Tatipaka','Tekkali','Tenali','Thimkunta','Thimmapuram','Thiruvurru','Tirupati','Toopran','Tuni','Udayagiri','Vatlur','Vemulawada','Vidya Nagar','Vijayawada','Vinukonda','Vishakapatnam','Vizianagaram','Vuyyuru','Warangal','Wyra','Yeddumailaram','Yelamanchili','Yellandu','Yellareddy','Yemmiganur','Zaheerabad');

cities['Arunachal Pradesh']= new Array('Along','Anini','Bomdila','Changlang','Daporijo','Dibang Valley','East Kameng','East Siang','Lohit','Lower Subansiri','Papum Pare','Hawai','Itanagar','Khonsa','Koloriang','Pasighat','Rest of Arunachal Pradesh','Seppa','Tawang','Tezu','Tirap','Upper Siang','Upper Subansiri','West Kameng','West Siang','Yingkiong','Yupia','Ziro');

cities['Assam']= new Array('Baksa','Baghmara','Barpeta','Bongaigaon','Cachar','Darrang','Dhemaji','Dhubri','Dibrugarh','Digboi','Doom Dooma','Duliajan','Goalpara','Golaghat','Guwahati','Haila Kamchi','Hailakandi','Halflong','Jorhat','Kamrup','Karbi Anglong','Karimganj','Kokrajhar','Lakhimpur','LamlongBazar','Lamphelpet','Mangaldoi','Mantripukhari','Marigaon','Nagaon','Nalbari','Nazira','North Cachar Hills','Por','Rangar Khadi','Sibsagar','Silchar','Sonari','Sonitpur','Tezpur','Tinsukia','Udalguri');

cities['Bihar']= new Array('Araria','Aurangabad','Banka','Begusarai','Bhagalpur','Bhojpur','Buxar','Darbhanga','Gaya','Gopalganj','Jamui','Jehanabad','Kaimur','Katihar','Khagaria','Kishanganj','Lakhisarai','Madhepura','Madhubani','Munger','Muzaffarpur','Nalanda','Nawada','Pashchim Champaran','Patna','PurbaChamparan','Purnia','Rohtas','Saharsa','Samastipur','Saran','Sheikhpura','Sheohar','Sitamarhi','Siwan','Supaul','Vaishali');

cities['Chandigarh']= new Array('Chandigarh');

cities['Chattisgarh']= new Array('Abhantur','Ambikapur','Balodabazar','Bastar','Bhatapara','Bhilai','Bilaspur','Champa','Dachdri','Dantewada','Delhirajghara','Dhamtari','Dongargarh','Durg','Gewra','Hirmi','Jagdalpur','Jangir','Janjgir-Champa','Jashpur','Kanker','Kawardha','Kharsiya','Kheragam','Korba','Koria','Koriya','Kundagaon','Kusham','Mahasamund','Manendragarh','Raibagh','Raigarh','Raipur','Rajnandgaon','Rawan','Sarguja','Shakti','Singma','Surguja','Tedesa','Tikamgarh','Uthal','Rest of Chattisgarh');

cities['Dadra & Nagar Haveli']= new Array('Rest of Dadra & Nagar Haveli','Silvasa');
cities['Daman and Diu']= new Array('Daman','Diu','Rest of Daman and Diu');


cities['Delhi']= new Array('Central Delhi','East Delhi','New Delhi','North Delhi','North East Delhi','North West Delhi','South Delhi','South West Delhi','West Delhi','Rest of Delhi');

cities['Goa']= new Array('Amona','Kaija','Kankali','Karwar','Kudal','Malvan','Margoa','Molen','Panaji','Panjim','Pernem','Ponda','Savardem','Sawantwadi','Sioli','Vengurla','Verna');

cities['Gujarat']= new Array('Acchad','Adhewada','Adityanagar','Ahmedabad','Ahuva','AhwaDang','Alang','Amboli','Amletha','Amod','Amreli','Amroli','Anand','Ankhi','Ankleshwar','Aslali','Athali','Babara','Bahucharaji','Balal','Balsinor','Bamanbor','Banaskantha','Bardoli','Baroda','Batad','Batva','Bayad','Bharuch','Bhat','Bhavnagar','Bhilka','Bhuj','Bilimora','Budhel','Chaltan','Chanchvel','Chansama','Charavada','Charoti','Chattaral','Chavand','Chikli','Chinchpada','Chorwad','Chotila','Dahgaom','Dahej','Dahod','Dalpur','Daman','Dantiwada','Dapada','Deesa','Dehgam','Dhandkuwa','Dharagandhara','Dharanpur','Dharr','Dhola','Dholka','Dhoraji','Dhroli','Dissa','Dujha','Dumas','Dungri','Dwaraka','Gadada','Gajera','Gandhar','Gandhiham','Gandhinagar','Gangdhara','Godhra','Gondal','Halol','Halvad','Harij','Hazira','Himmatnagar','Ichhapore','Idar','JamKhambhalia','Jambusar','Jamnagar','Jmsalaya','Jamvanthli','Jhalod','Junagadh','Kadodara','Kakrapar','Kalatalav','Kalol','Kalyanpura','Kamrej','Kansari','Kapadwanj','Karanj','Karjan','Kawas','Keshod','KevadiaColony','Khadoli','Khambat','Khanvel','Kharach','Kheda','Khelaru','Khutli','Kim','Kodinar','Kosambha','Kovaya','KribhcoNagar','Kurshad','Kutch','Kutiyana','Lakthar','Lalpur','Laskana','Lathi','Limbadi','Limbarsi','Limdi','Lukhatar','Lunawala','Madra','Magdalla','Magob','Mahuva','Malia','Mamsa','Manavadar','Mandvi','Mangrol','Mansa','Maroli','Mehsana','Mithapur','Miyagam','Modasa','Morbi','Motaborasara','Muli','Nadiad','Naninaroli','Narmada','Nasvadi','Navipur','Navsari','Netrang','Okha','Olpad','ONGCColony','Paddhari','Padra','Palanpur','Palej','Palitana','Palsana','Panchmahal','Patadi','Patan','Phalasana','Pipavav','Porbandar','Pranjit','Radhapur','Rajkot','Rajpipla','Rajula','Rakanpur','Rakholi','Ranpur','Sabarkantha','Sachin','Saili','Sami','Sankhede','Santrampur','Sarkhej','Saroli','Savali','Savarkundla','Sayala','Sayan','Shehra','Shikka','Sidhapur','Sihor','SilvassaTown','Sinor','Songadh','Surangi','Surat','Surendranagar','Sutrapada','Tagdi','Talaja','Talasari','Tansa','Tharad','The Dangs','Thol','Tinpatiya','Uchhad','Ukai','Umalla','Umbergaon','Umerkai','Una','Unjha','Upleta','Usrang','Vadnagar','Vadodara','Vagra','Valbhipur','VallabhVidyanagar','Valsad','Vapi','Verawal','Vijapur','Vkramgam','Virpur','Visavadar','Visnagar','Viyra','Waghodia','Zafrabad','Zanor');

cities['Haryana']= new Array('Adampur','Agroha','Ambala','Bahadurgarh','Bahal','Barwala','Bawal','Bhakri','Bhiwani','Charkhidadri','Dharuhera','Faridabad','Fatehabad','Ghatal','Gohana','Gurgaon','Hansi','Hissar','Hodal','Jaliawa','Jhajjar','Jind','Kaithal','Kalawani','Karnal','Khuskhira','Kosli','Kurukshetra','Mahendragarh','Masani','Mewat','Mohinder Gargh','Narayangarh','Narnaul','Narnod','Narwana','Nimrana','Palwal','Panchkula','Panipat','Pataudi','Piayala','Rajpura','Rewari','Rohtak','Sangwari','Shahbad','Shahjanpur','Sirsa','Siswala','Siwani','Sohna','Sonepat','Tauru','Tijara','Tohana','Yamuna Nagar');

cities['Himachal Pradesh']= new Array('Baddi','Bilaspur','Chamba','Chappercheri','Dagshai','Darlakat','Dharamsala','Hamirpur','JoginderNagar','Kangra','Kasauli','Kinnaur','Kulu','Kurali','Lahaul and Spiti','Manali','Mandi','Nalagarh','Nangal','Palampur','Parwanoo','Rudrapur','Shimla','Sirmaur','Soghi','Solan','Una');


cities['Jammu & Kashmir']= new Array('Anantnag','Badgam','Bandipore','Baramula','Doda','Ganderbal','Jammu','Kargil','Kathua','Kishtwar','Kulgam','Kupwara','Leh','Poonch','Pulwama','Rajauri','Ramban','Reasi','Rest of Jammu & Kashmir','Samba','Shopian','Srinagar','Udhampur');

cities['Jharkhand']= new Array('Adityapur','Bokaro','Chaibasa','Chakradarpur','Chand Colony','Chandil','Chasnala','Chatra','Daltanganj','Deoghar','Dhanbad','Dumka','Garhwa','Ghatsila','Giridhi','Godda','Gomah','Gomia','Gumla','Hazaribagh','Jadugoda','Jamshedpur','Jharia','Jugsalai','Kadma','Koderma','Lohardarga','Muri','Pakur','Palamu','Panposeh','Pashchim Singhbhum','Purba Singhbhum','Ranchi','Sahibganj','Sindri','Soonari','Tenughat','Rest of Jharkhand');

cities['Karnataka']= new Array('Alaguru','Alur','Ammasandra','Amritnagar','Ankola','Arkalgud','Arsikere','Athani','Badami','Bagalkot','Baihongal','Balehonnur','Balur','Bangalore','Bangalore Rural','Banhatti','Bannur','Bantwal','Basaralu','Batkal','Bedgi','Belgaum','Bellary','Bellur','Belthangady','Bhadravathi','Bhalki','Bidadi','Bidar','Bijapur','Birur','Bommanahal','Byadagi','C R Patnam','Chakara','Challakere','Chamrajnagar','Chanaripatna','Channagiri','Channapatana','Chikballapur','Chikmangalur','Chikodi','Chintamani','Chitradurga','Dakshina Kannada','Dandeli','Darmastala','Davanagere','Devengunthui','Dharwad','Dodballapur','Dukkavati','Farangipet','Gadag','Gajendragad','Gangavati','Gerusoppa','Gokak','Goni Koppa','Gulbarga','Gundalpet','H D Kote','Halebalur','Halial','Hanagal','Harihar','Harpahalli','Hasadurga','Hassan','Haveri','Hebri','Hirekerur','Holakere','Holenarsinghpor','Holkotti','Honnalli','Honnavar','Hosanagar','Hosangadi','Hoskote','Hospet','Hubli','Hukkeri','Humnabad','Hunsur','IIkal','Jaglur','Jamkhandi','Jigani','Jog Falls','K M Doddi','K R Nagar','K R Pet','Kadur','Kaganala','Kallegala','Kampli','Kanekal','Kargal','Karkala','Karwar','Kaup','Khanapur','Khanpur','Kinnigoli','Kittur','Kodagu','Kolar','Kollegal','Konaje','Koppal','Kotaswara','Kottur','Kudligi','Kudremuk','Kumalgodre','Kumta','Kundapur','Kunigal','Kurugodu','Kushalnagar','Kustagi','Lingasugur','Lokapur','Maddur','Madhugiri','Madikeri','Majeshwar','Malakalmur','Malavally','Malingapur','Malur','Manavi','Mandya','Mangalore','Manipal','Mantralayam','Manvi','Masthikatte','Matur','Moodbidri','Muddebihal','Mudhol','Mulbagal','Mulki','Mundgod','Mysore','Nagamangala','Nanjangud','Nargundh','Neeleshwar','Nitte','Oppinangadi','Padubidhri','Paiyanur','Pandavapura','Panemangalore','Peenya','Piriya Pattna','Ponnmpet','Puttur','Raichur','Ramanagaram','Ramdurg','Ramnagar','Rampura','Rayadurga','Ron','Sagar','Sandur','Sankleshwar','Saundatti','Shakleshpura','Shaktinagar','Shiggon','Shikaripura','Shimoga','Siddapura','Siddelgutta','Sindhanoor','Sira','Sirigeri','Sirsi','Siruguppa','Soraba','Sri Rangapatnam','Srinivaspur','Subramanya','Sulia','T Narasipur','Taaguppa','Tarikere','Thirthanhalli','Tiptur','Toranagallu','Tumkur','Udipi','Ugaarkurg','Ujire','Ullal','Uravakonda','Uttara Kannada','Virajpet','Yellapur');


cities['Kerala']= new Array('Aanachal','Aanakkayam','Adoor','Alappuzha','Alathur','Allakode','Alleppey','Alwaye','Amritapuri','Angamally','Ativaram','Attingal','Bilathra','Calicut','Cannanore','Chaeavakad','Challakudy','Changanassery','Cheerupuza','Chelari','Chellamdara','Chembrey','Chemmad','Chenthalod','Cherpulasery','Chittur','Cochin','Edakara','Edapalli','Edappal','Erikode','Ernakulam','Gopalapuram','Guruvayyur','Hosdurg','Idukki','Iringalakuba','Iritty','Kadalur','Kaladi','Kalikavu','Kalladikode','Kalpagancherry','Kalpetta','Kanhangadu','Kaniambadi','Kanjirapally','Kannur','Karuppode','Karuvaraundu','Kasaragod','Kasargode','Koduvayyur','Kolencheri','Kollam','Kollengode','Konduty','Kongad','Koothupuarambu','Koothupuzha','Koppam','Kotarakkara','Kottakal','Kottayam','Kozhikode','Krishnapuram','Kumali','Kumuli','Kundava Quilon','Kunnalur','Kunnamkulam','Kuthautuparambh','Kuthupuzha','Kuttanad','Kuttipuram','Mahe','Mala','Malampuzha','Malappuram','Malayattur','Mambudu','Manarkadi','Manathavadi','Manjeri','Mattankur','Meenakshipuram','Meenangadi','Mukkom','Munnar','Muvattupuzha','Nadapuram','Nelambur','Nelesuaram','Nenmara','Oachira','Olavakode','Orkatteri','Ottapalam','Painavu','Pala','Palakkad','Palghat','Pallasana','Pallur','Palucherry','Paranur','Parappanagadi','Paripally','Pariyaram','Pathanamthitta','Pathanapuram','Pattambi','Payyanore','Pazayangadi','Perambra','Peravoor','Perpanangadi','Perumbavoor','Pilathara','Ponnani','Pulikal','Punalur','Puthunagaram','Quilon (Kollam)','Ramanattukara','Shornur','Sultanbattery','Tannur','Tellicherry','Teravur','Thalassery','Thaliparambu','Thamaraacary','Thekkadi','Thirunnavaya','Thiruvalla','Thiruvananthapuram','Thodupuzha','Thriprayar','Thrissur','Tirur','Tiruvananthapuram','Tiruvarangadi','Trichur','Vadakara','Vadakkanchery','Vaikom','Vallancherry','Vandiperiyar','Vandour','Varkala','Vazhikadvu','Vemballur','Vyhiri','Wayanad');

cities['Lakshadweep']= new Array('Kavaratti','Rest of Lakshadweep');

cities['Madhya Pradesh']= new Array('Amla','Amlori','Anuppur','Ashoknagar','Babai','Badwah','Bairasia','Balaghat','Banmore','Bareli','Barwabu','Barwani','Beena','Begumganj','Betul','Bhaishdehi','Bhind','Bhitoni','Bhopal','Bhuanpur','BhuriBakania','Budhni','Burhanpur','Chattarpur','Chhatarpur','Chhindwara','Chindara','Chitrakoot','Dabra','Damoh','Datia','Deewanganj','Dewas','Dhamnod','Dhar','Dindori','Gadarwada','Gandhinagar','Ganjbasoda','Ghatabillode','Gotegaon','Guna','Gwalior','Harda','Hoshangabad','Indore','Itarsi','Jabalpur','Jadra','Jayant','Jhabua','Katni','Kaymore','Khajuraho','Khandwa (East Nimar)','Khargone (West Nimar)','Khor','Maihar','Manasa','Mandideep','Mandla','Mandsaur','Morena','Nagda','Narasinghgarh','Narsinghpur','Neemuch','Nepanagar','Obedullaganj','Panchmarhi','Panna','Pigdaber','Pipariya','Piplya Mandi','Pithampur','Rairu','Raisen','Rajgarh','Ratlam','Rau','Rewa','Sagar','Sailana','Salamatpur','Sanchi','Sarni','Sarver Village','Satna','Sehat Ganj','Sehore','Seoni','Seopurkala','Shahdol','Shajapur','Sheopur','Shivpuri','Siddhi','Sidhi','Sihora','Singroli','Sitamau','Tekanpur','Tikamgarh','Udaipura','Ujjain','Umaria','Vidhyanagar','Vidisha','Vijaypur','Waidhan');

cities['Maharashtra']= new Array('Agashi','Ahmednagar','Akola','Akolner','Alibaug','Amalner','Ambajogai','Ambernath','Amrawati','Amreli','Arnala','Asangaon','Atit','Aurangabad','Bableshwar','Badlapur','Balaghat','Baramati','Beed','Bhagur','Bhalgad','Bhandar','Bhandardara','Bhigaon','Bhiwandi','Bhootbungalo','Bhor','Bhunj','Bhusawal','Buldhana','Butibori','Chakan','Chalisgaon','Chandrapur','Chindwara','Chiplun','Chopda','Dahiwadi','Dandacha','Daund','Devlalicamp','Dhamadse','Dhanu','Dhebewadi','Dhule','Dindori','Dolvirevanda','Dombivilli','Dronagiri','Gadchiroli','Ganeshpuri','Gondia','Gondiya','Guhagar','Hatkadangle','Hingoli','Ichalkaranji','Igatpuri','Indapur','Islampur','Jaisingpur',/*this page is downloaded from Genuine Matrimony.Com*/'Jalgaon','Jalna','Jamkhed','Jamner','Jejuri','Jintur','JNPT','Junnar','Kadoli','Kagal','Kaman','Karad','Karanja','Karjat','Kedegaon','Khamgaon','Khapoli','Khed','Kirloskarwadi','Kolhapur','Kone','Kopergaon','Koregaon','Kothrud','Kurkumbh','Kushire','Lanja','Latur','Lonand','Lonavala','Loni','Mahabaleshwar','Mahad','Malegaon','Malhapur','Manchar','Manmad','Maval','Medha','Megharaj','Mira Road','Miraj','Muktai','Mumbai','Mumbai City','Matunga','Sion','Dadar','Kalyan','Dharavi','SionGoliwada','Murbad','Nagpur','Nanded','Nandurbar','Narayangaon','Nasik','Navi Mumbai','Newasa','Nipani','Nira','Nursapur','Oglewadi','Osmanabad','Pachora','Paithan','Palhat','Palolem','Panchgani','Panvel','Paralivaijanath','Parbhani','Parner','Pathardi','Pen','Persure','Phaltan','Pimpri','Plaspe','Pune','Pusad','Pusegaon','Rabale','Radhangai','Rahate','Rahuri','Raigad','Rajapur','Rajgurunagar','Ratnagiri','Raver','Roha','Safale','Sahapur','Sangamner','Sangli','Satara','Shadad','Shahapur','Shamalji','Shindewadi','Shirdi','Shirpur','Shirur','Shirval','Sholapur','Shrirampur','Sinddurg','Sindhudurg','Sinnar','Solapur','Srigonda','Talegaon','Tarapur','Tasgaon','Thal','Thane','Tisery','Tumsar','Ulhasnagar','Urse','Uthan','Utran','Vaduj','Vajreshwari','Vambori','Vani','Vashi','Vitthalwadi','Wachandnagar','Wada','Wadgaon Budruk','Wadiware','Wai','Waluj','Warangaon','Wardha','Washim','Yadrav','Yavatmal','Yeotmal','Zagalwadi');


cities['Manipur']= new Array('Bishnupur','Chandel','Churachandpur','Imphal','Imphal East','Imphal West','Others','Senapati','Temenglong','Thoubl','Ukhrul');

cities['Meghalaya']= new Array('Baghmara','Rest of Meghalaya','Shillong','South Garo Hills','Tura','Williamnagar','East Garo Hills','East Khasi Hills','Jaintia Hills','Jowai','Nongpoh','Nongstoin','Ri-Bhoi','West Garo Hills','West Khasi Hills');

cities['Mizoram']= new Array('Aizawl','Champhai','Kolasib','Lawngtlai','Lunglei','Mamit','Others','Saiha','Serchhip');

cities['Nagaland']= new Array('Dimapur','Kohima','Mokokchung','Mon','Phek','Rest of Nagaland','Tuensang','Wokha','Zunheboto');

cities['Orissa']= new Array('Angul','Baleswar (Balasore)','Bargarh (Baragarh)','Baripada','Barpalli','Behrampur','Bhadrak','Bhavanipatna','Bhubaneshwar','Bolangir (Balangir)','Boudh (Bauda)','Brajraj Nagar','Chatrapur','Cuttack','Damanjodi','Debagarh (Deogarh)','Delpahar','Dhenkanal','Gajapati','Ganjam','Gopalpur','Jagatsinghpur','Jajapur (Jajpur)','Jharsuguda','Jora','Kalahandi','Kandhamal','Kanisi','Kendrapara','Kendujhar (Keonjhar)','Khordha','Koraput','Malkangiri','Mayurbhanj','Nabarangpur','Navapatnam','Nayagarh','Nuapada','Paradeep','Phulbani','Puri','Rayagada','Rourkela','Sambalpur','Subarnapur (Sonepur)','Sundargarh (Sundergarh)');

cities['Pondicherry']= new Array('Aurofood','Courivinatha','Kallambakkam','Karaikal','Maduraipakkam','Mahe','Marakkanam','Nellekuppam','Nettapakkam','Pakkam','Pondicherry','Sellipattu','Surapattu','Thimmapap','Thirukollur','Thirumangala','Valavanur','Viranam','Yanam');

cities['Punjab']= new Array('Abohar','Alipur','Amritsar','Banga','Barnala','Batala','Bathinda','Bhandla','Biyas','Chauhal','Damtal','Faridkot','Fatehgarh Sahib','Firozpur','Goraya','Govindwal Sahib','Gurdaspur','Hamira','Hanmara','Hoshiarpur','Jagraon','Jalandhar','Johal','Kapurthala','Khanna','Khasha','Komara','Kotkapura','Lalru','Ludhiana','Malerkotia','Mandi Govindgarh','Mansa','Moga','Mohali','Muktsar','Nakodar','Nawan Shehar','Naya Mansal','Naya Nangal','Pathankot','Patiala','Phagwara','Pontassahib','Ropar','Rupnagar','Samrala','Sangrur','Shapurkandi','Tanda','Taran Taran');

cities['Rajasthan']= new Array('Agucha','Ajmer','Alwar','Anupgadh','Anuskakti','Balotra','Banswara','Baran','Baren','Barmer','Beawar','Bharatpur','Bhavani Mandi','Bhilwara','Bhiwadi','Bhopalgarh','Bijaynagar','Bikaner','Bundi','Chakcho','Chaksu','Chittorgarh','Churu','Dabok','Dausa','Delwada','Dholpur','Dungarpur','Fathenagar','Firozpur','Gadepan','Ganganagar','Gangapur City','Ganwana','Gotan','Gudli','Gulabpura','Guraisar','Hanumangarh','Jaipur','Jaisalmer','Jaisamand','Jalore','Jetaran','Jetpur','Jhalawar','Jhalore','Jhunjhunu','Jodhpur','Kakroli','Kalayant','Kapasan','Karaikh Nagar','Karauli','Kekri','Kherwada','Khetri Nagar','Kishangarh','Kota','Lakheri','Lunkaransar','Mahthaniya','Mangaliyavas','Mauvur','Merta City','Mount Abu','Nagaur','Nasirabad','Nathdawara','Neem Ka Thana','Nimbhera','Niwai','Nokha','Pali','Pilani','Pokhran','Pushkar','Raila','Rajsamand','Ramganj Mandi','Ranathambhor','Ratan Gadh','Ravla','Rawatbhata','Rishabhdev','Santpur','Sapivalla','Sardar Sahar','Sarika','Sawai Madhopur','Shahjhapur','Shivganj','Sikar','Sirdhi','Sirohi','Sojat City','Sriganganagar','Sujaan Gadh','Sumerpur','Surat Garh','Tara Nagar','Tonk','Udaipur','Vijaynagar');

cities['Sikkim']= new Array('Bardhang','Gangtok','Geyzing','Jorthan','Malli','Mangan','Namchi','Palling','Rangpo','Ranjit Nagar','Rest of Sikkim');

cities['Tamil Nadu']= new Array('Alangulam','Algaiyamandapam','Ambasamudram','Ambur','Ammaipakkam','Ammapet','Annur','Arakonam','Arambakkam','Aranthangi','Aravai Mozhili','Aravakurchi','Arcot','Aripakkam','Ariyalur','Arumuganeri','Arunavoyal','Aruppukottai','Athipet','Athur','Avinashi','Bahoor','Batalagundu','Berigai','Bhavani','Burgoor','Cheiyyar','Chendurai','Chengalpattu','Chenjee','Chennai','Chennaimalai','Chidambaram','Chinnamanur','Chinnasalem','Chitteri','Coimbatore','Coonoor','Covelong Beach','Cuddalore','Cumbam','D Gudalur','Dalmiyapuram','Denkanikottai','Devakottai','Devampattu','Devaram','Dharapuram','Dharmapuri','Dindigul','Edapadi','Elampillai','Elayirampannai','Ellavoyalchavadi','Eral','Erode','Erwadi','Ettayapuram','Gobichettipalayam','Gourivakkam','Gudiyyatam','Gujiliamparai','Gummidipoondi','Harur','Hosur','Injampakkam','Irrugattukottai','Jadapalyam','Jayamkondam','K R Thoppur','Kabilasthala','Kagithapuram','Kakaveli','Kakkalpur','Kalavalapalem','Kalladi Patty','Kallakadu','Kalliurani','Kalpakkam','Kamantholi','Kambam','Kancheepuram','Kandigai','Kangayam','Kaniyakavilai','Kanyakumari','Karadivavi','Karaikal','Karaikudi','Kariamangalam','Karur','Katpadi','Kaveripatnam','Kavundapadi','Kayalpatnam','Kayatharu','Kelamangalam','Kelambakkam','Kelmangala','Kilakkarai','Kodai Road','Kodaikanal','Kollamangudi','Komarapalayam',/*S.Shivaramalingam from Virtual Connections*/'Kotagiri','Kovalam','Kovilpatti','Krishnagiri','Krishnan Koil','Kudapakkam','Kudumudi','Kulachal','Kulasekaram','Kulithalai','Kumaramangalam','Kumbakonam','Kundankulam','Kunnathur','Kuppuswamypuram','Kurupur','Lalgudi','Madhuranthakam','Madurai','Maduravoyal','Mahadanapuram','Mailatthurai','Mamallapuram','Mamandur','Mamsapuram','Manapadu','Manaparai','Mannarkudi','Maraimala Nagar','Marthandam','Mayanoor','Mayuram','Melmaruvattur','Mettupalayam','Mettur','Minjur','Mohan Nagar','Monday Market','Mudukalathur','Musuri','Myiladuthurai','Nagapattinam','Nagercoil','Namakkal','Nanguneri','Nasarathu','Nattam','Nazareth','Neyveli','Nilgiris','Oddanchatram','Omalur','Ooty','Ottapidaram','Palani','Palayam','Palladham','Pallagondapalam','Pallapathi','Panruti','Panthalkudi','Pappanasam','Paramathivelur','Paramkudi','Pattbhiram','Pattukottai','Perambalur','Perandurai (Sipcot)','Periyakulam','Perumanallur','Pettaivaithalai','Pochampally','Pollachi','Polur','Poompuhar','Poonnmallee','Potteneri','Pudukottai','Pukkathurai','Pulivalam','Puliyampatti','Purandurai','Rajapalayam','Ramachandrapuram','Ramanad','Ramanathapuram','Ramasamy Raja Nagar','Rameshwaram','Ramnathpuram','Ranipet','Rasipuram','Reddiyapatti','Roykotta','Sakthinagar','Salem','Sankarankoil','Sathankulam','Sathur','Sathyamangala','Sengottai','Seranmadevi','Shanthmangalam','Sholinganallur','Sholinger','Sirumugai','Sivadhapuram','Sivaganga','Sivakasi','Somannur','Soolagiri','Sriperumbudur','Srivilliputhur','Sultanpet','Sunguvarchatram','Tanjore (Thanjavur)','Thakkalai','Thalavaipuram','Thanjavur','Tharagamapatti','Theivasayal Puram','Thekkampatty','Theni','Thenkasi','Thennilai','Thirubuvani','Thiruchendur','Thirukannur','Thirukazhikundram','Thirumazhisai','Thirunindravur','Thiruvallur','Thiruvannamalai','Thiruvarur','Thoothukudi','Tindivanam','Tiruchendur','Tiruchengode','Tiruchirappalli','Tirunelveli','Tirupathur','Tiruporur','Tiruppur','Tiruthanni','Tiruvannamalai','Trichy','Tuticorin','Udangudi','Umarikadu','Udumalapet','Usilampatti','Uthamapalayam','Uthiramerur','Uthukottai','Utukulai','Vadalur','Vaigam Dam','Vadakkankulam','Valapadi','Valliyur','Valparai','Vandavasi','Vaniyambadi','Varusanadu','Vedachandur','Vedanthangal','Vedasandur','Vellakkovil','Vellore','Velyathampalam','Vembur','Vijayamangalam','Vilathikulam','Villupuram','Virudhachalam','Virudhunagar','Walajahpet','Yercaud');

cities['Tripura']= new Array('Agartala','Dhalai','North Tripura','Others','South Tripura','West Tripura');

cities['Uttar Pradesh']= new Array('Agra','Aligarh','Allahabad','Amala','Ambedkar Nagar','Amethi','Amroha','Anpara','Auraiya','Avagarh','Azamgarh','Babina','Babrala','Badaun','Bagpat','Bah','Bahadurganj','Bahraich','Ballia','Balrampur','Banda','Bara','Barabanki','Baraut','Bareily','Basti','Bhadohi','Bhimtal','Bijnor','Bilari Tahsil','Bindki Road','Bulandshahr','Chandauli','Chandausi','Chhata','Chilkana','Chitrakoot','Chobepur','Chopan','Dadri','Dalla','Daurala','Deoband','Deoria','Dhampur','Dohari Ghat','Etah','Etawa','Faizabad','Farah','Farukkabad','Fatehabad','Fathepur','Fathepur Sikri','Firozabad','Gajraula','Gango','Gautam Buddha Nagar','Ghaziabad','Ghazipur','Ghosi','Gonda',/*coded by*/'Gorakhpur','Haldwani','Hamirpur','Hapur','Hardoi','Harodi','Hastinapur','Hathras','Iglas','Jagdishpur','Jainpur','Jalaun','Jaunpur','Jhansi','Jyotiba Phule Nagar','Kalpi','Kannauj','Kanpur','Kanpur Dehat','Kasganj','Kashimpur','Kasipur','Kathgodam','Kaurva','Kaushambi','Khairabad','Khatima','Khautali','Khurja','Kopaganj','Korwa','Kosikalan','Kushinagar','Lakhimpur (Kheri)','Lalitpur','Lalkunwa','Lohni','Lucknow','Mahamaya Nagar','Maharajganj','Mahoba','Mainpuri','Mankapur','Mathura','Mau','Maunath Bhanjan','Mawana','Meerut','Mirzapur','Modi Nagar','Mohammadabad','Mohanlalganj','Moradabad','Mubarakpur','Muradnagar','Muzaffarnagar','Najimabad','Nakur','Nanuta','Noida','Noorpur','Obra','Orai','Pata','Phulpur','Pilakuwa','Pilbhit','Pithorgarh','Pratapgarh','Purdel Nagar','Rae Bareli','Ramkola','Ramnagar','Rampur','Rania Jainpur ','Raya','Renusagar','Rihand Nagar','Robertsganj','Saharanpur','Sahibabad','Samshabad','Sanauli','Sant Kabir Nagar','Sant Ravidas Nagar','Shahabad','Shahjahanpur','Shakthi Nagar','Shambhal','Shami','Shikohabad','Shravasti','Siddharthnagar','Sikandra','Sitapur','Sitarganj','Sonabhadra','Sultanpur','Tundala','Unnad','Unnao','Varanasi','Vidhanagar','Vrindavan');


cities['Uttaranchal']= new Array('Almora','Bageshwar','Chamoli','Champawat','Dehradun','Doiwala','Haridwar','Joshimath','Kotdwar','Mussoori','Nainital','Others','Pauri Garhwal','Pithoragharh','Rishikesh','Rudraprayag','Saharanpur','Srinagar','Tehri Garhwal','Udham Singh Nagar','Uttarkashi','Vikash Nagar');

cities['West Bengal']= new Array('Alipudwar','Amta','Andal','Arambagh','Aramgarh','Asansol','Ashok Nagar','Athpur','Aurnagabad','Bagdogra','Balurghat','Banarhat','Bandel','Bankura','Bansdroni','Barakar','Barasat','Bardhaman','Barjora','Barkeshwar','Baswa','Binaguri','Birbhum','Birlapur','Birpara','Birshibpur','Bishnupur','Bolepur','Burdwan','Burnpur','Calcutta','Chandan Nagar','Chinsurah','Chittranjan','Cooch Behar','Coochbihar','Dakshin Dinajpur','Dalkhola','Darjeeling','Deldanga','Dhuliyan','Dhupjuri','Diamond Harbour','Digha','Dinahata','Durgapur','Falakata','Falta','Farakka','Fulia','Ganga Nagar','Gangarampur','Gayeshpur','Ghatla','Habibpur','Habra','Haldia','Haldibari','Haripur','Hasimara','Hooghly','Hoogly','Howrah','Hoyra','Ichapur','Islampur','Jaiganj','Jaigon','Jaldhaka','Jalpaguri','Jalpaiguri','Jamoria','Jangipur','Jhargram','Junglepur','Kalimpong','Kalna','Kalyani','Kanchanpura','Kandi','karimpur','Keusiong','Kharagpur','Khargram','Kolaghat','Kolkata','Krishna Nagar','Kuntai','Kurseong','Lalbagh','Lalgola','Makardh','Malbazar','Malda','Mayapur','Maynaguri','Midnapore','Mirzapur','Moinaguri','Mugra','Murshidabad','Nabowip','Nadia','Nagar','Nahijam','Narandrapur','New Barackpore','New Jalpaiguri','Nimari','North  Parganas','Palashi','Panagarh','Panchla','Pandeshwar','Purulia','Raghunathganj','Raiganj','Raipur','Rampurhat','Ranaghat','Raniganj','Ranihati','Raninagar','Ropnarayanpur','Samundargarh','Santipur','Shyam Nagar','Sibmandir','Siliguri','Sonamukhi','Sonpur','South  Parganas','Tarkeshwar','Triveni','Ukhara','Ulberia','Uttar Dinajpur');


function setStates() {
	cntrySel = document.getElementById('country');

  stateList = states[cntrySel.value];
  changeSelect('state', stateList, stateList);
  setCities();
}

function setCities() {
	//checkmobileno();
  cntrySel = document.getElementById('country');
  stateSel = document.getElementById('state');
  cityspan = document.getElementById("cityname");
  //alert(cityspan.nodeName);
  cityList = cities[stateSel.value];
  if(cntrySel.value=='India')
  { 
	 if(cityspan.childNodes.length==1)
	 {
		deletenodes('cityname');
		addnode('select');
		addnode2('option','city');
	 }
	 //alert(document.getElementById('city').name)
	//alert(cityspan.childNodes.length);
  changeSelect('city', cityList, cityList);
  }
  else
  {
	  deletenodes('cityname');
	 addnode('input');
		//alert(document.getElementById('city2').name);
  }
 }

function changeSelect(fieldID, newOptions, newValues) {
  selectField = document.getElementById(fieldID);
  if(selectField.selectedIndex =='')
  {
  selectField.options.length = 1;
  }
  else
  {
	selectField.options.length =0;
  }
  for (i=0; i<newOptions.length; i++) {
	    selectField.options[selectField.length] = new Option(newOptions[i], newValues[i]);
	 }
}



function deletenodes(id)
{
	var id=document.getElementById(id);
	 while(id.hasChildNodes())
	  {
		  id.removeChild(id.lastChild);;
	  }
	 
}

function addnode(tag)
{
	var opt=document.createElement(tag); 
		if(tag=='input')
		{
			opt.setAttribute('type','text');
		}
	 	opt.setAttribute('name','city');
		opt.setAttribute('value','');
		opt.setAttribute('id','city');
		cityspan.appendChild(opt);
}
function addnode2(tag,city)
{
	var city=document.getElementById(city);
	var opt=document.createElement(tag); 
	var state=document.getElementById('state');
		opt.setAttribute('value','');
		opt.innerHTML='- Please select -';
		city.appendChild(opt);
		city.style.fontFamily='Verdana, Arial, Helvetica, sans-serif';
		city.style.fontSize='11px';
	}

function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}

addLoadEvent(function() {
  setStates();
});


/***********************************************************************/
function changeregligion()
{
var religion=new Array();
religion['Hindu']=new Array('Agarwal','Ambalavasi','6000 Niyogi','96K Kokanastha','Adi Dravida','Agarwal','Agri','Ahom','Ambalavasi','Arekatica','Arora','Arunthathiyar','Arya Vysya','Aryasamaj','Bahi','Baidya','Baishnab','Baishya','Balija','Baniya','Barujibi','Bengali','Besta','Bhandari','Bhatraju','Bhavsar','Bhovi','Billava','Boyer','Brahmin','Brahmin-Anavil','Brahmin-Audichya','Brahmin-Bengali','Brahmin-Bhumihar','Brahmin-Danua','Brahmin-Davadnya','Brahmin-Deshastha','Brahmin-Dhiman','Brahmin-Dravida','Brahmin-Garhwali','Brahmin-Goswami','Brahmin-Gour','Brahmin-Gowd Saraswat','Brahmin-Gurukkal','Brahmin-Havyaka','Brahmin-Hoysala','Brahmin-Iyer','Brahmin-Kannada Madhva','Brahmin-Kanyakubja','Brahmin-Karhade','Brahmin-Kashmiri Pandit','Brahmin-Kokanastha','Brahmin-Kota','Brahmin-Kulin','Brahmin-Kumaoni','Brahmin-Madhwa','Brahmin-Maharashtrian','Brahmin-Maithili','Brahmin-Nagar','Brahmin-Niyogi Nandavariki','Brahmin-Punjabi','Brahmin-Sanadya','Brahmin-Sanketi','Brahmin-Saraswat','Brahmin-Saryuparin','Brahmin-Shivhalli','Brahmin-Smartha','Brahmin-Sri Vishnava','Brahmin-Stanika','Brahmin-Telugu','Brahmin-Tyagi','Brahmin-Vaidiki','Brahmin-Velanadu','Brahmin-Viswa','Bunt','CKP','Chambhar','Chattada Sri Vaishnava','Chattada Sri Vaishnava','Chattada Sri Vaishnava','Chhetri','Chippolu (Mera)','Coorgi','Devadiga','Devanga','Devendra Kula Vellalar','Dhangar','Dheevara','Dhobi','Digambar','Ediga','Ezhava','Ezhuthachan','Gandla',/*This javascript is */'Ganiga','Garhwali','Gavara','Ghumar','Goswami','Goud','Gounder','Gowda','Gramani','Gudia','Gujarati','Gupta','Guptan','Gurjar','Hugar (Jeer)','Iyengar','Iyer','Jaalari','Jaiswal','Jandra','Jat','Kachara','Kaibarta','Kalar','Kalinga','Kalinga Vysya','Kalita','Kamboj','Kamma','Kannada Mogaveera','Kapu','Kapu Naidu','Karana','Karuneegar','Karuneekar','Kashyap','Kayastha','Khandayat','Khandelwal','Khatri','Koli','Kongu Vellala Gounder','Kori','Koshti','Kshatriya','Kshatriya-Agnikula','Kshatriya-Bhavasar','Kudumbi','Kulal','Kulalar','Kumawat','Kumbara','Kumbhakar','Kumbhar','Kumhar','Kummari','Kunbi','Kuravan','Kurmi','Kuruba','Kuruhina Shetty','Kurumbar','Kushwaha','Lambani','Leva Patil','Lingayat','Lohana','','Lubana','Madiga','Mahar','Maharashtrian','Mahendra','Maheshwari','Mahishya','Mala','Malayalee Namboodiri','Malayalee Variar','Mali','Malla','Mangalorean','Mannuru Kapu','Mapila','Maratha','Maratha-Gomantak','Maruthuvar','Marvar','Marwari','Maurya','Meenavar','Menon','Meru Darji','Mogaveera','Mudaliar','Mudaliar-Arcot','Mudaliar-Saiva','Mudaliar-Senguntha','Mudiraj','Mukulathur','Muthuraja','Naagavamsam','Nadar','Nagaralu','Nai','Naicker','Naidu','Naidu-Balija','Naik','Nair','Nair-Vaniya','Nair-Velethadathu','Nair-Vilakkithala','Namasudra','Nambiar','Napit','Nayak','Neeli','Nepali','OBC (Barber-Naayee)','Oswal','Otari','Padmashali','Panchal','Panicker','Parit','Parkava Kulam','Partraj','Patel','Patel-Desai','Patel-Dodia','Patel-Kadva','Patel-Leva','Patnaick','Perika','Pillai','Prajapati','Punjabi','Rajaka','Rajput','Rajput-Garhwali','Rajput-Kumaoni','Ramdasia','Ramgharia','Ravidasia','Reddy','Relli','Sadgop','Sahu','Saini','Saliya','Savji','Scheduled Caste','Scheduled Tribe','Senai Thalaivar','Sepahia','Setti Balija','Shimpi','Sindhi','Sindhi-Amil','Sindhi-Baibhand','Sindhi-Larkana','Sindhi-Sahiti','Sindhi-Sakkhar','Sindhi-Shikarpuri','Somvanshi','Sonar','Sowrashtra','Sozhiya Vellalar','Sugali (Naika)','Sutar','Swarnakar','Tamil Yadava','Telaga','Teli','Telugu','Thakur','Thevar','Thigala','Thiyya','Togata','Turupu Kapu','Udayar','Uppara','Urs','Vadagalai','Vaddera','Vaish','Vaish-Dhaneshawat','Vaishnav','Vaishnav-Bhatia','Vaishnav-Vania','Vaishnava','Vaishya','Valluvan','Valmiki','Vanjara','Vannar','anniyakullak Kshatriya','Vanniyar','Variar','Varshney','Veera Saivam','Veerashaiva','Velaan','Vellalar','Vellama','Veluthedathu Nair','Vishwakarma','Viswabrahmin','Vokaliga','Vysya','Waada Balija','Yadav','Other');
religion['Muslim']=new Array('Shia','Sunni','Bengali','Dawood Bohra','Wahobi','Other');
religion['Christian']=new Array('Protestant','Roman catholic','Fernandos','Benthocostle','Other');
religion['Sikh']=new Array('Jat','Ramgharia','Khatri','Gurusikh','Other');
religion['Jain']=new Array('Shewetabar','Digambar','Vania','Other')
var reliname=document.getElementById("religion");

var caste=document.getElementById('caste');

//alert(caste.childNodes.length);
/*Remove Child nodes from elements*/
while(caste.hasChildNodes())
{
    caste.removeChild(caste.lastChild);
}
if(reliname.value=='Hindu' ||reliname.value=='Muslim' ||reliname.value=='Christian' ||reliname.value=='Sikh'||reliname.value=='Jain')
{
var columnvisible=document.getElementById('hidcaste').style.display="block";
var columnvisibledis=document.getElementById('casdis').style.display="block";
/*Select Religion*/
for(count=0;count<religion[reliname.value].length;count++)
{
var opt=document.createElement('option');
opt.setAttribute("value",religion[reliname.value][count]);
var text=document.createTextNode(religion[reliname.value][count]);
opt.innerHTML=religion[reliname.value][count];
caste.appendChild(opt);
}
}
else
{
var opt=document.createElement('option');
opt.setAttribute("value",'Not mentioned');
opt.innerHTML='- please select -';
caste.appendChild(opt);
caste.style.fontSize='11px';
caste.style.fontFamily='verdana';
var columnvisible=document.getElementById('hidcaste').style.display="block";
var columnvisibledis=document.getElementById('casdis').style.display="block";
}

}
function checkmobileno()
	{
		var mobile=document.getElementById('mobile');
		valuem=mobile.value;
		var val=valuem.charAt(0);
		var val1=valuem.charAt(1);
		if(val==0)
		{
			if(val1!=9)
			{
			mobile.focus();
			mobile.select();
				alert('Invalid Mobile Number');
			}
						
		}
		else if(val!=9)
		{	mobile.focus();
			mobile.select();
			alert('Invalid Mobile Number');
		}
		
	}