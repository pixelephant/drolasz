-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Hoszt: localhost
-- Létrehozás ideje: 2013. febr. 14. 14:43
-- Szerver verzió: 5.1.62
-- PHP verzió: 5.3.2-1ubuntu4.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `drolasz_development`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet: `collegues`
--

DROP TABLE IF EXISTS `collegues`;
CREATE TABLE IF NOT EXISTS `collegues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_hun` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `name_eng` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `title_hun` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `title_eng` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `description_hun` text COLLATE utf8_hungarian_ci NOT NULL,
  `description_eng` text COLLATE utf8_hungarian_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `position` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=9 ;

--
-- A tábla adatainak kiíratása `collegues`
--

INSERT INTO `collegues` (`id`, `name_hun`, `name_eng`, `title_hun`, `title_eng`, `description_hun`, `description_eng`, `image`, `position`, `slug`) VALUES
(1, 'Dr. Olasz Balázs', 'Dr. Balázs Olasz', 'Ügyvéd', 'Lawyer', '<p>Az ELTE ÁJK elvégzését követően az ÁPV Rt.-nél helyezkedtem el, ahol alapvetően gazdasági jogi ügyekkel, később egyre jelentősebb számú peres ügyben történő képviselet ellátásával foglalkoztam. Az első munkahelyen töltött több, mint öt év után a Budapest Airport Rt.-hez kerültem, ahol két esztendőn át jogi igazgatóként (vezető jogtanácsosként) tevékenykedtem 2003 végéig. Egy ilyen rendkívül jelentős számú és típusú intenzív ügyfélkapcsolattal rendelkező, egyszerre speciális állami funkciókkal körülbástyázott, de egyre inkább piaci szereplőként fellépő cég jogi csapatának vezetésénél jobb iskolát nem is álmodhattam volna.\r</p><p>2004. április 1-jével alapítottam meg az ügyvédi irodát, amely egy induló vállalkozás minden szépségével és gondjával együtt szépen fejlődik. Mindeközben magam is törekszem arra, hogy ne veszítsük el azt a civil, barátságos és kulturált közeget, amely egy tartalmas műhelymunka kulcsa. Büszke vagyok minden kollégámra, mindarra, amit magunk körül teremtettünk, teremtünk.\r</p>', '<p>Following my graduation at ELTE ÁJK, I started my career at the ÁPV Rt., where I was mostly dealing with business law, and later I was carrying out litigation in a growing number of cases. After more than five years at my first workplace, I got employed at Budapest Airport Rt., where for two years I worked as legal manager (senior lawyer) until the end of 2003. I could never have dreamt of a better school than leading the legal team of a company that has an incredibly large, diverse and active clientele, is given special state functions on the one hand, but is acting more and more as a market participant on the other. \r</p><p>I founded the law office on 1st April 2004, which is developing nicely with all the beauty and troubles of a freshly started business. Meanwhile I make efforts myself, so that we don’t lose the informal, friendly and civilized atmosphere, which is a key to a meaningful workshop activity. I am proud of all my colleagues, and all that we have been and are creating.\r</p>', 'balazs.jpg', 0, 'dr-olasz-balazs'),
(2, 'Dr. Merényi Anna', 'Dr. Anna Merényi', 'Ügyvéd', 'Lawyer', '<p>A Károli Gáspár Református Egyetem Jogi Karának elvégzését követően, a Budapesti Közgazdaságtudományi Egyetem jogászok számára indított jogász-közgazdász posztgraduális képzésen folytattam tanulmányaimat. 2003 decembere óta ügyvédjelöltként először a Martonyi és Kajtár, Baker McKenzie Ügyvédi Irodában az M&A, majd a Real Estate osztályon dolgoztam közvetlenül Kajtár Géza partner részére. \r</p><p>Másfél évvel később a Squire, Sanders and Dempsey L.L.P., Erős Ügyvédi Irodában folytattam az ügyvédjelölti pályát 2005 szeptemberéig. 2005 szeptemberében új helyszínen új csapattal indult el a Dr. Olasz Balázs Ügyvédi Iroda. Az irodában alapvetőn a gazdasági jog keretein belül szerződések véleményezésével, akvizíciós tranzakciók lebonyolításával foglalkoztam. Jelenleg a háttérből támogatom a csapatatot, és munkaidőm teljes egészét két fiam koordinálja.\r</p>', '<p>Following my graduation at the legal faculty of Károli Gáspár Uninversity of the Reformed Church, I continued my studies in a law and economics postgraduate course for lawyers at Budapest University of Economic Sciences and Public Administration.  Starting in December 2003 I worked as a trainee lawyer first in the Martonyi and Kajtár, Baker McKenzie Law Firm at the M&A department, and later at the Real Estate department working directly under one of the partners, Géza Kajtár. \r</p><p>One and a half years later I continued being a trainee lawyer at the Squire, Sanders and Dempsey L.L.P., Erős Law Firm until September 2005. In September 2005 the Dr. Olasz Balázs Law Office started its operation at a new location, with a new team. In the office I was mainly dealing with business law, giving legal assistance in connection with contracts, and M&A legal service. At present I support the team from the background, and my working time is fully coordinated by my two sons.\r</p>', 'anna.jpg', 0, 'dr-merenyi-anna'),
(4, 'Dr. Kollár László', 'Dr. László Kollár', 'Alkalmazott ügyvéd', 'Employed barrister', '<p>A Dr. Olasz Balázs Ügyvédi Iroda 2007 óta jelent számomra egyet a kiváló szakmai alapokon nyugvó és folytonos fejlődést biztosító munkatársi közösséggel, amelyben 2012-től alkalmazott ügyvédként vállalok részt ügyfeleink számára minél teljesebb, ugyanakkor magas minőségű jogi szolgáltatások nyújtásában. \r</p><p>Az iroda szakmai tevékenységi köre és érdekeltsége sokrétű, ennek megfelelően munkásságom a komplex gazdasági és társasági jogi tranzakciók, illetve üzleti tevékenységek szerződéses hátterének biztosításától és szakmai koordinálásától kezdve, a munkajog területén megbízóink érdekében kifejtett koncepcionális és napi szintű segítségnyújtáson, tanácsadáson át, egészen a klasszikus magán- és civiljogi, okiratkészítési és perképviseleti ügyvédi feladatokig terjedő széles spektrumon helyezkedik el.\r</p>', '<p>It is since 2007 that the Dr. Olasz Balázs Law Office became for me a collegial group, with an excellent professional base and providing a continuous development, where – from 2012 as an attorney-at-law – I take part in providing complex, and high-quality legal services. \r</p><p>The field of activity of the office is diverse, therefore my duties are ranging from providing contractual background and professional coordination for complex business and corporate transactions, and other business activities, giving daily assistance and legal advice to our clients in labor law matters, to the classical civil law tasks, such as drafting contracts and carrying out litigation.\r</p>', 'laszlo.jpg', 0, 'dr-kollar-laszlo-1'),
(5, 'Dr. Kovács Ágnes', 'Dr. Ágnes Kovács', 'Ügyvédjelölt', 'Trainee lawyer', '<p>2011 nyarán végezetem a Miskolci Egyetem Állam- és Jogtudományi Karán; jogi tanulmányaim során egy angol nyelvű jogi szakfordító képzést, valamint egy német nyelvű európajogi kurzust is elvégeztem. A Dr. Olasz Balázs Ügyvédi Irodánál ügyvédjelöltként nemcsak a különböző jogágakat – mint például a polgári jogot, kereskedelmi jogot, vagy munkajogot – ismerhetem meg még alaposabban, hanem tagja is lehetek egy rendkívül precíz és nagy szakértelemmel rendelkező csapatnak. \r</p><p>Nagy lehetőség számomra, hogy itt kezdhetem el a pályafutásomat, mivel összehangolt irányítás alatt, sok segítség és harmonikus munkahelyi légkör mellett sajátíthatom el az ügyvédi hivatás során felmerülő helyzetek kezelését. Jövőbeni célom, hogy minél jobb szakember és az Iroda hasznos tagja lehessek.\r</p>', '<p>I graduated at the Faculty of Law and Political Sciences of the University of Miskolc in the summer of 2011. During my legal studies I did a legal translating course in English, and an EC law course in German. As a trainee lawyer at Dr. Olasz Balázs Law Office I’m not only able to get to know the different branches of law better – such as civil law, commercial law or labor law, but I can also be a part of a precise team with a great professional knowledge.\r</p><p> It is a great opportunity for me to start my career here, as I can learn dealing with different situations in the legal profession, in a well coordinated and harmonious working atmosphere, receiving lots of help. My future goal is to be a good professional, and a useful member of the Office.\r</p>', 'agnes.jpg', 0, 'dr-kovacs-agnes'),
(6, 'Dr. Böszörményi Gergely', 'Dr. Gergely Böszörményi', 'Ügyvédjelölt', 'Trainee lawyer', '<p>2011. januárjában végeztem a PPKE jogi karán, és a szakmába először a Deloitte Magyarországgal együttműködő Ember és Szarvas Ügyvéd Iroda alkalmazottjaként kóstolhattam bele. Ezt követően az angol- és a jogi szaknyelv tanítás irányába tett rövidebb kitérő után az Olasz Balázs Ügyvédi Irodánál helyezkedtem el, mint ügyvédjelölt. Miután ezidáig még nem volt lehetőségem, hogy átfogó szakmai gyakorlatot szerezzek, ezért félig pályakezdőként, rendkívül örülök, hogy az Irodában tölthetem a gyakorlati időmet, ugyanis a polgári és gazdasági jog szinte minden szegmensével tudok találkozni az itteni munka során, nem utolsó sorban egy emberséges és támogató környezetben, tehát a hely mindenféleképpen egy jó tanulópálya.\r</p><p> A múltamra való tekintettel gyakran hozzám érkeznek be a szaknyelvi ismereteket igénylő munkák, így ezen a téren is van lehetőség a fejlődésre. A továbbiakban szeretném a jogi tudásomat bővíteni, egy kis rutinra szert tenni, és szakemberként is egyre hasznosabbá válni.\r</p>', '<p>I have graduated at the faculty of law of PPKE, and got a first taste of working in the legal field at Ember and Szarvas Law Firm – Correspondent law firm of Deloitte Hungary. That was followed by a short detour into teaching general and legal English, and now I’m employed at Dr. Olasz Balázs Law Office, as a trainee lawyer. Until now I haven’t had a chance to get an extensive professional experience, so as an actual career starter I am really happy, that I can spend my trainee years in the Office, since I can meet all segments of civil and business law during my work here, and what is more, in a humane and supportive environment. This place is no doubt a good training ground for me. \r</p><p>With regard to my past experiences, I often get tasks that require some knowledge of legal English, so I have a chance for development in that as well. In the future I would like to deepen my legal knowledge, get a little bit of routine, and become more and more useful as a professional.\r</p>', 'gergely.jpg', 0, 'dr-boszormenyi-gergely'),
(7, 'Horváth Edit', 'Edit Horváth', 'Gyakornok', 'Trainee', '<p>Az ELTE ÁJK jogász szakos hallgatója vagyok, 2013-ban államvizsgázom. Az egyetemi évek során egyre inkább megerősödött bennem, hogy a polgári jogterület vonz a legjobban. A Dr. Olasz Balázs Ügyvédi Irodában remek lehetőségem nyílik egy fiatalos, pezsgő közegben, gyakorlatban kamatoztatni az elméletben megtanultakat, így izgalmas kihívásként tekintek minden feladatomra. Természetesen az egyetemi tanulmányaimban is profitálok a szakmai gyakorlatból, ami csak még jobban lelkesít ismereteim bővítésében.\r</p>', '<p>I study law at ELTE ÁJK, and I am going to graduate in 2013. During my years at the university I have more and more come to realize that I am interested in civil law the most. In Dr. Olasz Balázs Law Office I have a great opportunity to use my theoretical knowledge in practice, in a fresh and young environment, so I view each task I get as an exciting challenge. Of course I benefit from this traineeship in my university studies as well, which makes me even more motivated to deepen my knowledge of law.\r</p>', 'edit.jpg', 0, 'horvath-edit'),
(8, 'Oszter Éva', 'Éva Oszter', 'Jogi asszisztens', 'Legal assistant', '<p>Tanulmányaimat a Zsigmond Király Főiskola kommunikáció-médiatudomány szakán fejeztem be, üzleti kommunikátorként.  A diploma mellett fontosnak tartom, hogy tudásomat folyamatosan tágítsam és minél több területet ismerjek meg életem során. Céljaim között szerepel, hogy a jogosítvány megszerzése után elvégezzek egy pénzügy-számviteli ügyintéző tanfolyamot is.\r</p><p>Pályakezdőként igazi kihívást jelent számomra a Dr. Olasz Balázs Ügyvédi Iroda adta lehetőség. Örülök, hogy a jogi asszisztencia fortélyait olyan emberek között tanulhatom meg, akik odafigyelnek egymásra, rendkívüli odaadással és türelemmel végzik munkájukat, ugyanakkor képesek családias, meghitt hangulatot teremteni. A lehető legjobb tudásom szerint igyekszem segíteni a csapatot és bízom abban, hogy ezzel meg tudom hálálni a belém vetett bizalmat.</p>', '<p>I have received my BA degree at Zsigmond Király College in Communication and Media Studies. As a career starter the opportunity I have received from Dr. Olasz Balázs Law Office is a real challenge. I am glad that I can learn being a legal assistant in a friendly environment, maintaining high professional standards. I try to help the team according to my best knowledge, and hope that it will lead to mutual satisfaction.\r</p>', 'éva.jpg', 0, 'oszter-eva');

-- --------------------------------------------------------

--
-- Tábla szerkezet: `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_hun` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `name_eng` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `description_hun` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `description_eng` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `file_hun` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `file_eng` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=20 ;

--
-- A tábla adatainak kiíratása `documents`
--

INSERT INTO `documents` (`id`, `name_hun`, `name_eng`, `description_hun`, `description_eng`, `file_hun`, `file_eng`, `created`) VALUES
(9, 'Azonosítólap', 'Azonosítólap', 'belföldi', 'belföldi', 'azonositolap_JUB_Pmt_belfoldi.doc', 'azonositolap_JUB_Pmt_belfoldi.doc', '2013-02-14 12:56:20'),
(10, 'Azonosítólap', 'Azonosítólap', 'külföldi', 'külföldi', 'azonositolap_JUB_Pmt_kulfoldi.doc', 'azonositolap_JUB_Pmt_kulfoldi.doc', '2013-02-14 12:56:36'),
(12, 'Adatlap', 'Adatlap', 'ingatlan adásvételi szerződés megkötéséhez', 'ingatlan adásvételi szerződés megkötéséhez', 'advet_adatlap.doc', 'advet_adatlap.doc', '0000-00-00 00:00:00'),
(13, 'Korlátolt felelősségű társaság', 'Korlátolt felelősségű társaság', 'alapításhoz szükséges adatok', 'alapításhoz szükséges adatok', 'cegbejegyzes_adatok_kft.doc', 'cegbejegyzes_adatok_kft.doc', '0000-00-00 00:00:00'),
(14, 'Betéti társaság', 'Betéti társaság', 'alapításhoz szükséges adatok, információk', 'alapításhoz szükséges adatok, információk', 'cegbejegyzes_adatok_bt.doc', 'cegbejegyzes_adatok_bt.doc', '0000-00-00 00:00:00'),
(15, 'Zártkörűen működő részvénytársaság', 'Zártkörűen működő részvénytársaság', 'alapításhoz szükséges adatok', 'alapításhoz szükséges adatok', 'cegbejegyzes_adatok_zrt_09_09_18.doc', 'cegbejegyzes_adatok_zrt_09_09_18.doc', '0000-00-00 00:00:00'),
(16, 'Betéti társaság', 'Betéti társaság', 'szerződésmintája ', 'szerződésmintája ', 'Bt_tarsasagi_szerzodesmintaja_09_11_04.doc', 'Bt_tarsasagi_szerzodesmintaja_09_11_04.doc', '0000-00-00 00:00:00'),
(17, 'Egyszemélyes korlátolt felelősségű társaság', 'Egyszemélyes korlátolt felelősségű társaság', 'alapító okirat mintája ', 'alapító okirat mintája ', 'Kft_egyszem_alapito_okirata_09_11_04.doc', 'Kft_egyszem_alapito_okirata_09_11_04.doc', '0000-00-00 00:00:00'),
(18, 'Korlátolt felelősségű társaság', 'Korlátolt felelősségű társaság', 'alapító okirat mintája ', 'alapító okirat mintája ', 'Kft_tarsasagi_szerzodesmintaja_09_11_04.doc', 'Kft_tarsasagi_szerzodesmintaja_09_11_04.doc', '0000-00-00 00:00:00'),
(19, 'Zártkörűen működő részvénytársaság', 'Zártkörűen működő részvénytársaság', 'alapszabálymintája', 'alapszabálymintája', 'Zrt_alapszabalymintaja_09_11_04.doc', 'Zrt_alapszabalymintaja_09_11_04.doc', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tábla szerkezet: `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=2 ;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created`) VALUES
(1, 'admin', '311c8e71ba6fd972281bb923a7e756a449497804', '2013-02-12 12:04:04');
