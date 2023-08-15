-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 03:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'rashiqur', 'rashiqur@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'nabil', 'nabil@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(12, 'shipra', 'shipra@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'ahmed', 'ahmed@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(16, 'abc', 'abc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `publishername` varchar(255) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `genre` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookId`, `name`, `publishername`, `isbn`, `description`, `genre`, `image`) VALUES
(6, 'WOMAN ON FIRE ', 'Lisa Barr', '9780063040885', 'From the author of the award-winning Fugitive Colors and The Unbreakables, a gripping tale of a young, ambitious journalist embroiled in an international art art scandal centered around a Nazi-looted masterpiece--forcing the ultimate showdown between passion and possession, lovers and liars, history and truth. NOW A NEW YORK TIMES BESTSELLER! Actress Sharon Stone set to produce and star in the film adaptation of WOMAN ON FIRE.', 'Art', '624d424019b76.jpg'),
(7, 'The Method: How the Twentieth Century Learned to Act', 'Isaac Butler', '9781635574777', 'On stage and screen, we know a great performance when we see it. But how do actors draw from their bodies and minds to turn their selves into art? What is the craft of being an authentic fake? More than a century ago, amid tsarist Russia’s crushing repression, one of the most talented actors ever...', 'Art', '624d42a46f510.jpg'),
(8, 'The lord of the Rings: The Hobbit', 'J. R. R. Tolkien', '9780547928227', 'This book is very well-known to everyone. this is very interesting book for this genre', 'Fantasy', '624d45dc9d806.jpg'),
(9, 'The lord of the Rings: The Fellowship of the Ring', 'J. R. R. Tolkien', '9780007203543', '............', 'Fantasy', '624d468d8b494.jpg'),
(10, 'A Game of Thrones (A Song of Ice and Fire, Book 1)', 'George R. R. Martin', '9780553593716', '.................', 'Fantasy', '624d46d3ba786.jpg'),
(11, 'Harry Potter and the Chamber of Secrets', 'J.K. Rowling', '9780439064873', '.................', 'Fantasy', '624d47a1e0885.jpg'),
(12, 'The Library of Esoterica', 'Witchcraft', '9783836585606', 'A spellbinding journey through the global history of witchcraft, the third volume in The Library of Esoterica follows this magickal tradition from its ancient roots to its modern incarnations. Through more than 400 artworks, and revelatory essays and interviews with modern practitioners, Witchcraft chronicles a cathartic evolution, from the craft’s emergence in ancient goddess worship to the embrace by today’s diverse witch community.', 'Art', '625db725d95b5.jpg'),
(13, 'Blue', 'Nana Ekua Brew-Hammond, Daniel Minter (Illustrations)', '9781984894366', 'Discover a world of creativity and tradition in this fascinating picture book that explores the history and cultural significance of the color blue. From a critically acclaimed author and an award-winning illustrator comes a vivid, gorgeous book for readers of all ages.', 'Art', '625db8c0558f7.jpg'),
(14, 'Pixels of You', 'Ananth Hirsh, Yuko Ota', '9781419749575', 'A human and human-presenting AI slowly become friends—and maybe more—in this moving YA graphic novel  In a near future, augmentation and AI changed everything and nothing. Indira is a human girl who has been cybernetically augmented after a tragic accident, and Fawn is one of the first human-presenting AI. They have the same internship at a gallery, but neither thinks much of the other’s photography. But after a huge public blowout, their mentor gives them an ultimatum: work together on a project or leave her gallery forever. Grudgingly, the two begin to collaborate, and what comes out of it is astounding and revealing for both of them. Pixels of You is about the slow transformation of a rivalry to a friendship to something more as Indira and Fawn navigate each other, the world around them—and what it means to be an artist and a person.', 'Art', '625db9c6d54a5.jpg'),
(15, '20 years of music artwork', 'Error! Design', '9788409339471', 'To celebrate 20 years designing posters, I have decided to publish my first book.', 'Art', '625dbb2ad7de5.jpg'),
(16, 'The lord of the Rings: The Two Tower', 'J. R. R. Tolkien', '9780007203550', 'The middle novel in The Lord of the Rings—the greatest fantasy epic of all time—which began in The Fellowship of the Ring, and which reaches its magnificent climax in The Return of the King.  Nominated as one of America’s best-loved novels by PBS’s The Great American Read  The Fellowship is scattered. Some brace hopelessly for war against the ancient evil of Sauron. Others must contend with the treachery of the wizard Saruman. Only Frodo and Sam are left to take the One Ring, ruler of the accursed Rings of Power, to be destroyed in Mordor, the dark realm where Sauron is supreme. Their guide is Gollum, deceitful and obsessive slave to the corruption of the Ring.', 'Fantasy', '625dbbe08d3de.jpg'),
(17, 'The lord of the Rings: The Return of the King', 'J. R. R. Tolkien', '9780618002245', 'The awesome conclusion to The Lord of the Rings—the greatest fantasy epic of all time—which began in The Fellowship of the Ring and The Two Towers.  Nominated as one of America’s best-loved novels by PBS’s The Great American Read  While the evil might of the Dark Lord Sauron swarms out to conquer all Middle-earth, Frodo and Sam struggle deep into Mordor, seat of Sauron’s power. To defeat the Dark Lord, the One Ring, ruler of the accursed Rings of Power, must be destroyed in the fires of Mount Doom. But the way is impossibly hard, and Frodo is weakening. Weighed down by the compulsion of the Ring, he begins finally to despair.', 'Fantasy', '625dbc5757bd4.jpg'),
(18, 'The lord of the Rings: The Silmarillion', 'J. R. R. Tolkien', '9780345325815', 'The legendary precursor to The Lord of the Rings  “A creation of singular beauty . . . magnificent in its best moments.”—The Washington Post  Set primarily in the First Age of Middle-earth, The Silmarillion contains the legend of the creation of the world and an account of the Elder Days. It is the ancient drama remembered by Elrond and Galadriel in The Lord of the Rings, and the harrowing origin of the adventure that ends ages later with Frodo and the One Ring.  At the story’s heart are the three Silmarils, jewels that held within them the Light of the Two Trees of Valinor, and Fëanor, the most gifted of elven artificers. When the Two Trees are destroyed, the Silmarils become coveted, setting into motion events that lead to the rebellion of Fëanor and his kindred against the gods, their exile from Valinor, and their hopeless war against the greatest enemy Middle-earth has ever known: Morgoth.', 'Fantasy', '625dbcb4973ff.jpg'),
(19, 'A Clash of Kings (A Song of Ice and Fire, Book 2)', 'George R. R. Martin', '9780553579901', 'A comet the color of blood and flame cuts across the sky. And from the ancient citadel of Dragonstone to the forbidding shores of Winterfell, chaos reigns. Six factions struggle for control of a divided land and the Iron Throne of the Seven Kingdoms, preparing to stake their claims through tempest, turmoil, and war. It is a tale in which brother plots against brother and the dead rise to walk in the night. Here a princess masquerades as an orphan boy; a knight of the mind prepares a poison for a treacherous sorceress; and wild men descend from the Mountains of the Moon to ravage the countryside. Against a backdrop of incest and fratricide, alchemy and murder, victory may go to the men and women possessed of the coldest steel...and the coldest hearts. For when kings clash, the whole land trembles.', 'Fantasy', '625dbe2a503df.jpg'),
(20, 'A Storm of Swords (A Song of Ice and Fire, Book 3)', 'George R. R. Martin', '9780553381702', 'Of the five contenders for power, one is dead, another in disfavor, and still the wars rage as violently as ever, as alliances are made and broken. Joffrey, of House Lannister, sits on the Iron Throne, the uneasy ruler of the land of the Seven Kingdoms. His most bitter rival, Lord Stannis, stands defeated and disgraced, the victim of the jealous sorceress who holds him in her evil thrall. But young Robb, of House Stark, still rules the North from the fortress of Riverrun. Robb plots against his despised Lannister enemies, even as they hold his sister hostage at King’s Landing, the seat of the Iron Throne. Meanwhile, making her way across a blood-drenched continent is the exiled queen, Daenerys, mistress of the only three dragons still left in the world. . . .  But as opposing forces maneuver for the final titanic showdown, an army of barbaric wildlings arrives from the outermost line of civilization. In their vanguard is a horde of mythical Others—a supernatural army of the living dead whose animated corpses are unstoppable. As the future of the land hangs in the balance, no one will rest until the Seven Kingdoms have exploded in a veritable storm of swords. . . .', 'Fantasy', '625dbf856751c.jpg'),
(21, 'A Feast for Crows (A Song of Ice and Fire, Book 4)', 'George R. R. Martin', '9780553582024', 'HBO’s hit series A GAME OF THRONES is based on George R. R. Martin’s internationally bestselling series A SONG OF ICE AND FIRE, the greatest fantasy epic of the modern age. A FEAST FOR CROWS is the fourth volume in the series.  The Lannisters are in power on the Iron Throne.  The war in the Seven Kingdoms has burned itself out, but in its bitter aftermath new conflicts spark to life. The Martells of Dorne and the Starks of Winterfell seek vengeance for their dead. Euron Crow’s Eye, as black a pirate as ever raised a sail, returns from the smoking ruins of Valyria to claim the Iron Isles.  From the icy north, where Others threaten the Wall, apprentice Maester Samwell Tarly brings a mysterious babe in arms to the Citadel. As plots, intrigue and battle threaten to engulf Westeros, victory will go to the men and women possessed of the coldest steel and the coldest hearts.', 'Fantasy', '625dbf90bd7e9.jpg'),
(22, 'A Dance with Dragons (A Song of Ice and Fire, Book 5)', 'George R. R. Martin', '9780553582017', 'In the aftermath of a colossal battle, the future of the Seven Kingdoms hangs in the balance—beset by newly emerging threats from every direction. In the east, Daenerys Targaryen, the last scion of House Targaryen, rules with her three dragons as queen of a city built on dust and death. But Daenerys has thousands of enemies, and many have set out to find her. As they gather, one young man embarks upon his own quest for the queen, with an entirely different goal in mind.  Fleeing from Westeros with a price on his head, Tyrion Lannister, too, is making his way to Daenerys. But his newest allies in this quest are not the rag-tag band they seem, and at their heart lies one who could undo Daenerys’s claim to Westeros forever.  Meanwhile, to the north lies the mammoth Wall of ice and stone—a structure only as strong as those guarding it. There, Jon Snow, 998th Lord Commander of the Night’s Watch, will face his greatest challenge. For he has powerful foes not only within the Watch but also beyond, in the land of the creatures of ice.  From all corners, bitter conflicts reignite, intimate betrayals are perpetrated, and a grand cast of outlaws and priests, soldiers and skinchangers, nobles and slaves, will face seemingly insurmountable obstacles. Some will fail, others will grow in the strength of darkness. But in a time of rising restlessness, the tides of destiny and politics will lead inevitably to the greatest dance of all.', 'Fantasy', '625dbf98588b8.jpg'),
(23, 'The Shining', 'Stephen King', '9780307743657', 'Jack Torrance’s new job at the Overlook Hotel is the perfect chance for a fresh start. As the off-season caretaker at the atmospheric old hotel, he’ll have plenty of time to spend reconnecting with his family and working on his writing. But as the harsh winter weather sets in, the idyllic location feels ever more remote . . . and more sinister. And the only one to notice the strange and terrible forces gathering around the Overlook is Danny Torrance, a uniquely gifted five-year-old.', 'Horror', '625dc323dc8e0.jpg'),
(24, 'The Exorcist', 'William Peter Blatty', '9780061007224', 'Two years after its publication, The Exorcist was, of course, turned into a wildly popular motion picture, garnering ten Academy Award nominations. On opening day of the film, lines of the novel’s fans stretched around city blocks. In Chicago, frustrated moviegoers used a battering ram to gain entry through the double side doors of a theater. In Kansas City, police used tear gas to disperse an impatient crowd who tried to force their way into a cinema. The three major television networks carried footage of these events; CBS’s Walter Cronkite devoted almost ten minutes to the story. The Exorcist was, and is, more than just a novel and a film: it is a true landmark.  Purposefully raw and profane, The Exorcist still has the extraordinary ability to disturb readers and cause them to forget that it is “just a story.” Published here in this beautiful fortieth anniversary edition, it remains an unforgettable reading experience and will continue to shock and frighten a new generation of readers.', 'Horror', '625dc374279ea.jpg'),
(25, 'City of Incurable Women', 'Maud Casey', '9781942658863', '“Where are the hysterics, those magnificent women of former times?” wrote Jacques Lacan. Long history’s ghosts, marginalized and dispossessed due to their gender and class, they are reimagined by Maud Casey as complex, flesh-and-blood people with stories to tell. These linked, evocative prose portraits, accompanied by period photographs and medical documents both authentic and invented, poignantly restore the humanity to the nineteenth-century female psychiatric patients confined in Paris’s Salpêtrière hospital and reduced to specimens for study by the celebrated neurologist Jean-Martin Charcot and his male colleagues.', 'Literature', '625dc3e913b05.jpg'),
(26, 'Read Dangerously: The Subversive Power of Literature in Troubled Times', 'Azar Nafisi', '9780062947369', 'What is the role of literature in an era when the president wages war on writers and the press? What is the connection between political strife in our daily lives, and the way we meet our enemies on the page in fiction? How can literature, through its free exchange, affect politics?  In this galvanizing guide to resistance literature, Nafisi seeks to answer these questions. Drawing on her experiences as a woman and voracious reader living in the Islamic Republic of Iran, her life as an immigrant in the United States, and her role as literature professor in both countries, she crafts an argument for why, in a genuine democracy, we must engage with the enemy, and how literature can be a vehicle for doing so.  Structured as a series of letters to her father, Baba, who taught her as a child about how literature can rescue us in times of trauma, Nafisi explores the most probing questions of our time through the works of Toni Morrison, Salman Rushdie, James Baldwin, Margaret Atwood, and more.', 'Literature', '625dc43f0b79c.jpg'),
(27, 'Outlander', 'Diana Gabaldon', '9780440212560', 'Unrivaled storytelling. Unforgettable characters. Rich historical detail. These are the hallmarks of Diana Gabaldon’s work. Her New York Times bestselling Outlander novels have earned the praise of critics and captured the hearts of millions of fans. Here is the story that started it all, introducing two remarkable characters, Claire Beauchamp Randall and Jamie Fraser, in a spellbinding novel of passion and history that combines exhilarating adventure with a love story for the ages.  Scottish Highlands, 1945. Claire Randall, a former British combat nurse, is just back from the war and reunited with her husband on a second honeymoon when she walks through a standing stone in one of the ancient circles that dot the British Isles. Suddenly she is a Sassenach—an “outlander”—in a Scotland torn by war and raiding clans in the year of Our Lord . . . 1743.', 'Romance', '625dc561cbdc5.jpg'),
(28, 'The Notebook', 'Nicholas Sparks', '9780446605236', 'Every so often a love story so captures our hearts that it becomes more than a story-it becomes an experience to remember forever. The Notebook is such a book. It is a celebration of how passion can be ageless and timeless, a tale that moves us to laughter and tears and makes us believe in true love all over again...  At thirty-one, Noah Calhoun, back in coastal North Carolina after World War II, is haunted by images of the girl he lost more than a decade earlier. At twenty-nine, socialite Allie Nelson is about to marry a wealthy lawyer, but she cannot stop thinking about the boy who long ago stole her heart. Thus begins the story of a love so enduring and deep it can turn tragedy into triumph, and may even have the power to create a miracle...', 'Romance', '625dc5a2e9581.jpg'),
(29, 'The Fault in Our Stars', 'John Green', '9780142424179', 'Despite the tumor-shrinking medical miracle that has bought her a few years, Hazel has never been anything but terminal, her final chapter inscribed upon diagnosis. But when a gorgeous plot twist named Augustus Waters suddenly appears at Cancer Kid Support Group, Hazel’s story is about to be completely rewritten.  From John Green, #1 bestselling author of The Anthropocene Reviewed and Turtles All the Way Down, The Fault in Our Stars is insightful, bold, irreverent, and raw. It brilliantly explores the funny, thrilling, and tragic business of being alive and in love.', 'Romance', '625dc68d5ae9d.jpg'),
(30, 'Dune', 'Frank Herbert', '9780441172719', 'Set on the desert planet Arrakis, Dune is the story of the boy Paul Atreides, heir to a noble family tasked with ruling an inhospitable world where the only thing of value is the “spice” melange, a drug capable of extending life and enhancing consciousness. Coveted across the known universe, melange is a prize worth killing for....  When House Atreides is betrayed, the destruction of Paul’s family will set the boy on a journey toward a destiny greater than he could ever have imagined. And as he evolves into the mysterious man known as Muad’Dib, he will bring to fruition humankind’s most ancient and unattainable dream.   A stunning blend of adventure and mysticism, environmentalism and politics, Dune won the first Nebula Award, shared the Hugo Award, and formed the basis of what is undoubtedly the grandest epic in science fiction.', 'Science Fiction', '625dc7167f058.jpg'),
(31, '1984', 'George Orwell', '9780451524935', 'Winston Smith toes the Party line, rewriting history to satisfy the demands of the Ministry of Truth. With each lie he writes, Winston grows to hate the Party that seeks power for its own sake and persecutes those who dare to commit thoughtcrimes. But as he starts to think for himself, Winston can’t escape the fact that Big Brother is always watching...  A startling and haunting novel, 1984 creates an imaginary world that is completely convincing from start to finish. No one can deny the novel’s hold on the imaginations of whole generations, or the power of its admonitions—a power that seems to grow, not lessen, with the passage of time.', 'Science Fiction', '625dc778a64a6.jpg'),
(32, 'Hyperion', 'Dan Simmons', '9780553283686', 'On the world called Hyperion, beyond the reach of galactic law, waits a creature called the Shrike. There are those who worship it. There are those who fear it. And there are those who have vowed to destroy it. In the Valley of the Time Tombs, where huge, brooding structures move backward through time, the Shrike waits for them all.  On the eve of Armageddon, with the entire galaxy at war, seven pilgrims set forth on a final voyage to Hyperion seeking the answers to the unsolved riddles of their lives. Each carries a desperate hope—and a terrible secret. And one may hold the fate of humanity in his hands.', 'Science Fiction', '625dc7b051294.jpg'),
(33, 'The Girl on the Train', 'Paula Hawkins', '9781594633669', 'Intersecting, overlapping, not-quite-what-they-seem lives. Jealousies and betrayals and wounded hearts. A haunting unease that clutches and won’t let go. All this and more helps propel Paula Hawkins’s addictive debut into a new stratum of the psychological thriller genre. At times, I couldn’t help but think: Hitchcockian. From the opening line, the reader knows what they’re in for: “She’s buried beneath a silver birch...', 'Thriller', '625e50f2ed9e4.jpg'),
(34, 'Misery', 'Stephen King', '9781501156748', 'Bestselling novelist Paul Sheldon thinks he’s finally free of Misery Chastain. In a controversial career move, he’s just killed off the popular protagonist of his beloved romance series in favor of expanding his creative horizons. But such a change doesn’t come without consequences. After a near-fatal car accident in rural Colorado leaves his body broken, Paul finds himself at the mercy of the terrifying rescuer who’s nursing him back to health—his self-proclaimed number one fan, Annie Wilkes. Annie is very upset over what Paul did to Misery and demands that he find a way to bring her back by writing a new novel—his best yet, and one that’s all for her. After all, Paul has all the time in the world to do so as a prisoner in her isolated house...and Annie has some very persuasive and violent methods to get exactly what she wants...', 'Thriller', '625e51cd72056.jpg'),
(35, 'Shutter Island', 'Dennis Lehane', '9780062068415', 'The basis for the blockbuster motion picture directed by Martin Scorsese and starring Leonardo DiCaprio, Shutter Island by New York Times bestselling author Dennis Lehane is a gripping and atmospheric psychological thriller where nothing is quite what it seems. The New York Times calls Shutter Island, “Startlingly original.” The Washington Post raves, “Brilliantly conceived and executed.” A masterwork of suspense and surprise from the author of Mystic River and Gone, Baby, Gone, Shutter Island carries the reader into a nightmare world of madness, mind control, and CIA Cold War paranoia andis unlike anything you’ve ever read before.', 'Thriller', '625e524746ab6.jpg'),
(36, 'The Crusades', 'Thomas Asbridge', '9780060787295', 'The Crusades is an authoritative, accessible single-volume history of the brutal struggle for the Holy Land in the Middle Ages. Thomas Asbridge—a renowned historian who writes with “maximum vividness” (Joan Acocella, The New Yorker)—covers the years 1095 to 1291 in this  big, ambitious, readable account of one of the most fascinating periods in history. From Richard the Lionheart to the mighty Saladin, from the emperors of Byzantium to the Knights Templar, Asbridge’s book is a magnificent epic of Holy War', 'History', '625e54d915697.jpg'),
(37, '1776', 'David McCullough', '9780743226721', 'America’s beloved and distinguished historian presents, in a book of breathtaking excitement, drama, and narrative force, the stirring story of the year of our nation’s birth, 1776, interweaving, on both sides of the Atlantic, the actions and decisions that led Great Britain to undertake a war against her rebellious colonial subjects and that placed America’s survival in the hands of George Washington.  In this masterful book, David McCullough tells the intensely human story of those who marched with General George Washington', 'History', '625e558b651f1.jpg'),
(38, 'Postwar', 'Tony Just', '9780143037750', 'Postwar: A History of Europe Since 1945 is a 2005 non-fiction book written by British historian and scholar Tony Judt who specialised in European history. The book examines six decades of European history from the end of World War II in 1945 up to 2005.', 'History', '625e5645ab2de.jpg'),
(39, 'The Collected Poems', 'Sylvia Plath', '9780061558894', 'By the time of her death on 11, February 1963, Sylvia Plath had written a large bulk of poetry. To my knowledge, she never scrapped any of her poetic efforts. With one or two exceptions, she brought every piece she worked on to some final form acceptable to her, rejecting at most the odd verse, or a false head or a false tail. Her attitude to her verse was artisan-like: if she couldn’t get a table out of the material, she was quite happy to get a chair, or even a toy. The end product for her was not so much a successful poem, as something that had temporarily exhausted her ingenuity. So this book contains not merely what verse she saved, but—after 1956—all she wrote.', 'Poetry', '625e58591acb4.jpg'),
(40, 'Ariel', 'Sylvia Plath', '9780060931728', 'When Sylvia Plath died, she not only left behind a prolific oeuvre but also her unpublished literary masterpiece, Ariel. Ted Hughes helped bring the collection to life in 1966, and its publication garnered worldwide acclaim. This collection showcases the beloved poet’s brilliant, provoking, and always moving poems, including \"Ariel,\" \"The Applicant,\" \"Lady Lazarus,\" and \"Edge\", and once again shows why readers have fallen in love with her work over generations', 'Poetry', '625e5a3f8c4ce.jpg'),
(41, 'Citizen', 'Claudia Rankine', '9781555976903', 'Citizen: An American Lyric is a 2014 book-length poem and a series of lyric essays by American poet Claudia Rankine. Citizen stretches the conventions of traditional lyric poetry by interweaving several forms of text and media into a collective portrait of racial relations in the United States. ', 'Poetry', '625e5afb4d314.jpg'),
(42, 'To Kill a Mockingbird', 'Harper Lee', '9780446310789', 'To Kill a Mockingbird is a novel by the American author Harper Lee. It was published in 1960 and was instantly successful. In the United States, it is widely read in high schools and middle schools. To Kill a Mockingbird has become a classic of modern American literature, winning the Pulitzer Prize', 'Classic', '625e5c2172bff.jpg'),
(43, 'One Hundred Years of Solitude', 'Gabriel Garcia Marquez', '0060883286', 'One Hundred Years of Solitude is a 1967 novel by Colombian author Gabriel García Márquez that tells the multi-generational story of the Buendía family, whose patriarch, José Arcadio Buendía, founded the town of Macondo. The novel is often cited as one of the supreme achievements in literature.', 'Classic', '625e5c69bde4d.jpg'),
(44, 'Catch-22', 'Joseph Heller', '9781451626650', 'Set in Italy during World War II, this is the story of the incomparable, malingering bombardier, Yossarian, a hero who is furious because thousands of people he has never met are trying to kill him. But his real problem is not the enemy—it is his own army, which keeps increasing the number of missions the men must fly to complete their service. Yet if Yossarian makes any attempt to excuse himself from the perilous missions he’s assigned, he’ll be in violation of Catch-22, a hilariously sinister bureaucratic rule: a man is considered insane if he willingly continues to fly dangerous combat missions, but if he makes a formal request to be removed from duty, he is proven sane and therefore ineligible to be relieved.  This fiftieth-anniversary edition commemorates Joseph Heller’s masterpiece with a new introduction by Christopher Buckley; a wealth of critical essays and reviews by Norman Mailer, Alfred Kazin, Anthony Burgess, and others; rare papers and photos from Joseph Heller’s personal archive; and much more. Here, at last, is the definitive edition of a classic of world literature.', 'Classic', '625e5cfddb04d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `requestId` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`requestId`, `username`, `comment`, `datetime`) VALUES
(1, 'oyon', 'Please add flipped', '2022-04-12 23:05:53'),
(2, 'ahmed', 'Can you add \"Da Vinci Code\"?', '2022-04-13 10:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ratingId` int(20) NOT NULL,
  `bookId` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userreview` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ratingId`, `bookId`, `username`, `userreview`, `datetime`) VALUES
(1, 10, 'abc', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint quidem aut ratione, quos alias atque. Nulla distinctio, unde porro beatae tempora cupiditate est fugit laborum enim assumenda provident, ullam doloribus.', '2022-04-12 11:24:57'),
(2, 10, 'rrr', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, vel soluta quaerat delectus esse doloribus at illo obcaecati blanditiis recusandae quas, veniam ex. Iusto debitis voluptatibus, natus suscipit dignissimos perspiciatis.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, vel soluta quaerat delectus esse doloribus at illo obcaecati blanditiis recusandae quas, veniam ex. Iusto debitis voluptatibus, natus suscipit dignissimos perspiciatis.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, vel soluta quaerat delectus esse doloribus at illo obcaecati blanditiis recusandae quas, veniam ex. Iusto debitis voluptatibus, natus suscipit dignissimos perspiciatis.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, vel soluta quaerat delectus esse doloribus at illo obcaecati blanditiis recusandae quas, veniam ex. Iusto debitis voluptatibus, natus suscipit dignissimos perspiciatis.', '2022-04-12 11:58:58'),
(13, 11, 'oyon', 'The book is very interesting to read.', '2022-04-12 22:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'oyon', 'oyon@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'ahmed', 'ahmed@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(15, 'utsho', 'utsho@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(16, 'sam', 'sam@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`requestId`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ratingId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `requestId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ratingId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
