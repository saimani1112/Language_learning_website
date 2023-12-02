CREATE TABLE user (
    `userid` VARCHAR(6) CHARACTER SET utf8,
    `firstname` VARCHAR(8) CHARACTER SET utf8 NOT NULL,
    `lastname` VARCHAR(9) CHARACTER SET utf8,
    `email` VARCHAR(18) CHARACTER SET utf8 NOT NULL,
    `password` VARCHAR(18) CHARACTER SET utf8 NOT NULL,
    PRIMARY KEY (`userid`)
);

CREATE TABLE language (
    `language_id` VARCHAR(6) CHARACTER SET utf8,
    `language` VARCHAR(7) CHARACTER SET utf8,
    PRIMARY KEY (`language_id`)
);

CREATE TABLE user_lang (
    `userid` VARCHAR(6) CHARACTER SET utf8,
    `language_id` VARCHAR(6) CHARACTER SET utf8,
    PRIMARY KEY (`userid`, `language_id`),
    FOREIGN KEY (`userid`) REFERENCES `user`(`userid`) ON DELETE CASCADE,
    FOREIGN KEY (`language_id`) REFERENCES `language`(`language_id`) ON DELETE CASCADE
);

CREATE TABLE quiz (
    `quiz_id` VARCHAR(5) CHARACTER SET utf8,
    `language_id` VARCHAR(6) CHARACTER SET utf8,
    `question` VARCHAR(55) CHARACTER SET utf8,
    `answer` VARCHAR(22) CHARACTER SET utf8,
    PRIMARY KEY (`quiz_id`, `language_id`),
    FOREIGN KEY (`language_id`) REFERENCES `language`(`language_id`) ON DELETE CASCADE
);

CREATE TABLE quiz_score (
    `userid` VARCHAR(6) CHARACTER SET utf8,
    `language_id` VARCHAR(6) CHARACTER SET utf8,
    `score` INT,
    PRIMARY KEY (`userid`, `language_id`),
    FOREIGN KEY (`userid`) REFERENCES `user`(`userid`) ON DELETE CASCADE,
    FOREIGN KEY (`language_id`) REFERENCES `language`(`language_id`) ON DELETE CASCADE
);

CREATE TABLE greetings_and_farewell (
    `language_id` VARCHAR(6) CHARACTER SET utf8,
    `quiz_id` VARCHAR(5) CHARACTER SET utf8,
    `words_in_language` VARCHAR(12) CHARACTER SET utf8,
    `english_meaning` VARCHAR(6) CHARACTER SET utf8,
    PRIMARY KEY (`language_id`, `quiz_id`),
    FOREIGN KEY (`language_id`) REFERENCES `language`(`language_id`) ON DELETE CASCADE
);

CREATE TABLE food (
    `quiz_id` VARCHAR(5) CHARACTER SET utf8,
    `language_id` VARCHAR(6) CHARACTER SET utf8,
    `words_in_language` VARCHAR(12) CHARACTER SET utf8,
    `english_meaning` VARCHAR(6) CHARACTER SET utf8,
    PRIMARY KEY (`quiz_id`, `language_id`),
    FOREIGN KEY (`language_id`) REFERENCES `language`(`language_id`) ON DELETE CASCADE
);

CREATE TABLE relationships (
    `quiz_id` VARCHAR(5) CHARACTER SET utf8,
    `language_id` VARCHAR(6) CHARACTER SET utf8,
    `words_in_language` VARCHAR(8) CHARACTER SET utf8,
    `english_meaning` VARCHAR(8) CHARACTER SET utf8,
    PRIMARY KEY (`quiz_id`, `language_id`),
    FOREIGN KEY (`language_id`) REFERENCES `language`(`language_id`) ON DELETE CASCADE
);

CREATE TABLE travel (
    `quiz_id` VARCHAR(5) CHARACTER SET utf8,
    `language_id` VARCHAR(6) CHARACTER SET utf8,
    `words_in_language` VARCHAR(8) CHARACTER SET utf8,
    `english_meaning` VARCHAR(8) CHARACTER SET utf8,
    PRIMARY KEY (`quiz_id`, `language_id`),
    FOREIGN KEY (`language_id`) REFERENCES `language`(`language_id`) ON DELETE CASCADE
);

CREATE TABLE work (
    `quiz_id` VARCHAR(5) CHARACTER SET utf8,
    `language_id` VARCHAR(6) CHARACTER SET utf8,
    `words_in_language` VARCHAR(8) CHARACTER SET utf8,
    `english_meaning` VARCHAR(8) CHARACTER SET utf8,
    PRIMARY KEY (`quiz_id`, `language_id`),
    FOREIGN KEY (`language_id`) REFERENCES `language`(`language_id`) ON DELETE CASCADE
);

CREATE TABLE frequently_used_words (
    `quiz_id` VARCHAR(5) CHARACTER SET utf8,
    `language_id` VARCHAR(6) CHARACTER SET utf8,
    `words_in_language` VARCHAR(26) CHARACTER SET utf8,
    `english_meaning` VARCHAR(21) CHARACTER SET utf8,
    PRIMARY KEY (`quiz_id`, `language_id`),
    FOREIGN KEY (`language_id`) REFERENCES `language`(`language_id`) ON DELETE CASCADE
);


INSERT INTO user VALUES
 ('USR_01','Harinder','Symons','harinder@gmail.com','password1'),
 ('USR_02','Davis','Jefferson','davis@gmail.com','password2'),
 ('USR_03','Madelyn','Rakes','madelyn@gmail.com','password3'),
 ('USR_04','Roslyn','Plank','roslyn@gmail.com','password4'),
 ('USR_05','Prunella','Benson','prunella@gmail.com','password5'),
 ('USR_06','Melvin','Taft','melvin@gmail.com','password6'),
 ('USR_07','Oneida','Steele','oneida@gmail.com','password7'),
 ('USR_08','Linda','Bell','linda@gmail.com','password8'),
 ('USR_09','Jolie','Love','jolie@gmail.com','password9'),
 ('USR_10','Miles','Willard','miles@gmail.com','password10');

INSERT INTO language VALUES
 ('lang01','french'),
 ('lang02','german'),
 ('lang03','spanish');

INSERT INTO user_lang VALUES
     ('USR_01','lang01'),
     ('USR_01','lang02'),
     ('USR_03','lang01'),
     ('USR_02','lang01'),
     ('USR_06','lang01'),
     ('USR_04','lang03'),
     ('USR_05','lang02'),
     ('USR_07','lang01'),
     ('USR_09','lang03'),
     ('USR_04','lang02');

 INSERT INTO quiz VALUES
 ('q01_f','lang01','What is bread called in french?','pain'),
 ('q03_f','lang01','What is milk called in french?','Le Lait'),
 ('q02_t','lang01','How do you say-"How are you?" in French','Comment ça va'),
 ('q04_t','lang01','How do you say-"I am fine" in French','je vais bien'),
 ('q06_r','lang01','What is "son" in french?','fils'),
 ('q03_f','lang02','What is "milk" is German?','Milch'),
 ('q05_f','lang02','What is "potato" in German?','Kartoffel'),
 ('q03_t','lang02','How do you say "Please help me", in German?','Bitte hilf mir'),
 ('q05_t','lang02','How do you ask someone where the hospital is in German?','wo ist das Krankenhaus'),
 ('q01_r','lang02','What do you call your father in German?','Vater'),
 ('q04_f','lang03','What do you call a lemon in Spanish?','limón'),
 ('q05_f','lang03','What do you call a potato in Spanish?','papa'),
 ('q03_t','lang03','How do you ask for help politely in Spanish?','por favor, ayúdame'),
 ('q01_t','lang03','How do you say Hello in Spanish?','Hola'),
 ('q03_r','lang03','What is the Spanish word for "Husband"?','esposo');	

INSERT INTO quiz_score VALUES
    ('USR_01','lang01',8),
    ('USR_03','lang01',7),
    ('USR_04','lang03',10),
    ('USR_05','lang02',9),
    ('USR_07','lang01',8),
    ('USR_07','lang03',4),
    ('USR_09','lang03',6),
    ('USR_10','lang02',10);

INSERT INTO greetings_and_farewell VALUES
    ('lang01', 'q02_g', 'Au revoir', 'Goodbye'),
    ('lang01', 'q03_g', 'Comment ça va?', 'How are you?'),
    ('lang01', 'q04_g', 'Merci', 'Thank you'),
    ('lang01', 'q05_g', 'Excusez-moi', 'Excuse me'),
    ('lang01', 'q06_g', 'Salut', 'Hi'),
    ('lang02', 'q01_g', 'Hallo', 'Hello'),
    ('lang02', 'q03_g', 'Wie geht es Ihnen?', 'How are you?'),
    ('lang02', 'q04_g', 'Danke', 'Thanks'),
    ('lang02', 'q05_g', 'Entschuldigung', 'Excuse me'),
    ('lang02', 'q06_g', 'Guten Tag', 'Good day'),
    ('lang03', 'q01_g', 'Hola', 'Hello'),
    ('lang03', 'q02_g', 'Adiós', 'Goodbye'),
    ('lang03', 'q03_g', 'Cómo estás?', 'How are you?'),
    ('lang03', 'q04_g', 'Gracias', 'Thank you'),
    ('lang03', 'q05_g', 'Perdón', 'Excuse me');

INSERT INTO food VALUES
    ('q01_f','lang01','pain','bread'),
    ('q02_f','lang01','Beurre','butter'),
    ('q03_f','lang01','Le Lait','milk'),
    ('q04_f','lang01','citron','lemon'),
    ('q05_f','lang01','Patate','potato'),
    ('q01_f','lang02','brot','bread'),
    ('q02_f','lang02','Butter','butter'),
    ('q03_f','lang02','Milch','milk'),
    ('q04_f','lang02','Zitrone','lemon'),
    ('q05_f','lang02','Kartoffel','potato'),
    ('q01_f','lang03','pan de molde','bread'),
    ('q02_f','lang03','manteca','butter'),
    ('q03_f','lang03','Leche','milk'),
    ('q04_f','lang03','limón','lemon'),
    ('q05_f','lang03','papa','potato');

INSERT INTO relationships VALUES
    ('q01_r','lang01','père','father'),
    ('q02_r','lang01','mère','mother'),
    ('q03_r','lang01','mari','husband'),
    ('q04_r','lang01','épouse','wife'),
    ('q05_r','lang01','fils','son'),
    ('q06_r','lang01','la fille','daughter'),
    ('q01_r','lang02','Vater','father'),
    ('q02_r','lang02','Mutter','mother'),
    ('q03_r','lang02','Ehemann','husband'),
    ('q04_r','lang02','Ehefrau','wife'),
    ('q05_r','lang02','Sohn','son'),
    ('q06_r','lang02','Tochter','daughter'),
    ('q01_r','lang03','padre','father'),
    ('q02_r','lang03','madre','mother'),
    ('q03_r','lang03','esposo','husband'),
    ('q04_r','lang03','esposa','wife'),
    ('q05_r','lang03','hijo','son'),
    ('q06_r','lang03','hija','daughter');

INSERT INTO travel VALUES
     ('q01_t','lang01','bonjour','hello'),
     ('q02_t','lang01','Comment ça va','how are you'),
     ('q03_t','lang01','Aidez-moi, s''il vous plaît','please help me'),
     ('q04_t','lang01','je vais bien','I am fine'),
     ('q05_t','lang01','où est l''hôpital','where is the hospital'),
     ('q01_t','lang02','hallo','hello'),
     ('q02_t','lang02','wie gehts','how are you'),
     ('q03_t','lang02','Bitte hilf mir','please help me'),
     ('q04_t','lang02','Mir geht''s gut','I am fine'),
     ('q05_t','lang02','wo ist das Krankenhaus','where is the hospital'),
     ('q01_t','lang03','Hola','hello'),
     ('q02_t','lang03','cómo estás','how are you'),
     ('q03_t','lang03','por favor, ayúdame','please help me'),
     ('q04_t','lang03','Estoy bien','I am fine'),
     ('q05_t','lang03','Dónde está el hospital','where is the hospital');

INSERT INTO work VALUES
    ('q05_w', 'lang01', 'ordinateur', 'computer'),
    ('q06_w', 'lang01', 'réunion', 'meeting'),
    ('q07_w', 'lang01', 'travailleur', 'worker'),
    ('q08_w', 'lang01', 'bureau', 'office'),
    ('q09_w', 'lang01', 'projet', 'project'),
    ('q10_w', 'lang02', 'Computer', 'computer'),
    ('q11_w', 'lang02', 'Besprechung', 'meeting'),
    ('q12_w', 'lang02', 'Arbeiter', 'worker'),
    ('q13_w', 'lang02', 'Büro', 'office'),
    ('q14_w', 'lang02', 'Projekt', 'project'),
    ('q15_w', 'lang03', 'computadora', 'computer'),
    ('q16_w', 'lang03', 'reunión', 'meeting'),
    ('q17_w', 'lang03', 'trabajador', 'worker'),
    ('q18_w', 'lang03', 'oficina', 'office'),
    ('q19_w', 'lang03', 'proyecto', 'project');

INSERT INTO frequently_used_words VALUES
    ('q01_fw', 'lang01', 'bonjour', 'hello'),
    ('q02_fw', 'lang01', 'merci', 'thank you'),
    ('q03_fw', 'lang01', 'au revoir', 'goodbye'),
    ('q04_fw', 'lang01', 's il vous plaît', 'please'),
    ('q05_fw', 'lang01', 'excusez-moi', 'excuse me'),
    ('q06_fw', 'lang02', 'Hallo', 'hello'),
    ('q07_fw', 'lang02', 'danke', 'thanks'),
    ('q08_fw', 'lang02', 'bitte', 'please'),
    ('q09_fw', 'lang02', 'entschuldigung', 'excuse me'),
    ('q10_fw', 'lang02', 'gut', 'good'),
    ('q11_fw', 'lang03', 'hola', 'hello'),
    ('q12_fw', 'lang03', 'gracias', 'thanks'),
    ('q13_fw', 'lang03', 'por favor', 'please'),
    ('q14_fw', 'lang03', 'perdón', 'excuse me'),
    ('q15_fw', 'lang03', 'bueno', 'good');


