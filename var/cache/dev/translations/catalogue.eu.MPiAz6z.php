<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('eu', array (
  'validators' => 
  array (
    'This value should be false.' => 'Balio hau faltsua izan beharko litzateke.',
    'This value should be true.' => 'Balio hau egia izan beharko litzateke.',
    'This value should be of type {{ type }}.' => 'Balio hau {{ type }} motakoa izan beharko litzateke.',
    'This value should be blank.' => 'Balio hau hutsik egon beharko litzateke.',
    'The value you selected is not a valid choice.' => 'Hautatu duzun balioa ez da aukera egoki bat.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Gutxienez aukera {{ limit }} hautatu behar duzu.|Gutxienez {{ limit }} aukera hautatu behar dituzu.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Gehienez aukera {{ limit }} hautatu behar duzu.|Gehienez {{ limit }} aukera hautatu behar dituzu.',
    'One or more of the given values is invalid.' => 'Emandako balioetatik gutxienez bat ez da egokia.',
    'This field was not expected.' => 'Eremu hau ez zen espero.',
    'This field is missing.' => 'Eremu hau falta da.',
    'This value is not a valid date.' => 'Balio hau ez da data egoki bat.',
    'This value is not a valid datetime.' => 'Balio hau ez da data-ordu egoki bat.',
    'This value is not a valid email address.' => 'Balio hau ez da posta elektroniko egoki bat.',
    'The file could not be found.' => 'Ezin izan da fitxategia aurkitu.',
    'The file is not readable.' => 'Fitxategia ez da irakurgarria.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fitxategia handiegia da ({{ size }} {{ suffix }}). Baimendutako tamaina handiena {{ limit }} {{ suffix }} da.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Fitxategiaren mime mota ez da egokia ({{ type }}). Hauek dira baimendutako mime motak: {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Balio hau gehienez {{ limit }} izan beharko litzateke.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Balio hau luzeegia da. Gehienez karaktere {{ limit }} eduki beharko luke.|Balio hau luzeegia da. Gehienez {{ limit }} karaktere eduki beharko lituzke.',
    'This value should be {{ limit }} or more.' => 'Balio hau gutxienez {{ limit }} izan beharko litzateke.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Balio hau motzegia da. Karaktere {{ limit }} gutxienez eduki beharko luke.|Balio hau motzegia da. Gutxienez {{ limit }} karaktere eduki beharko lituzke.',
    'This value should not be blank.' => 'Balio hau ez litzateke hutsik egon behar.',
    'This value should not be null.' => 'Balio hau ez litzateke nulua izan behar.',
    'This value should be null.' => 'Balio hau nulua izan beharko litzateke.',
    'This value is not valid.' => 'Balio hau ez da egokia.',
    'This value is not a valid time.' => 'Balio hau ez da ordu egoki bat.',
    'This value is not a valid URL.' => 'Balio hau ez da baliabideen kokatzaile uniforme (URL) egoki bat.',
    'The two values should be equal.' => 'Bi balioak berdinak izan beharko lirateke.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fitxategia handiegia da. Baimendutako tamaina handiena {{ limit }} {{ suffix }} da.',
    'The file is too large.' => 'Fitxategia handiegia da.',
    'The file could not be uploaded.' => 'Ezin izan da fitxategia igo.',
    'This value should be a valid number.' => 'Balio hau zenbaki egoki bat izan beharko litzateke.',
    'This file is not a valid image.' => 'Fitxategi hau ez da irudi egoki bat.',
    'This is not a valid IP address.' => 'Honako hau ez da IP helbide egoki bat.',
    'This value is not a valid language.' => 'Balio hau ez da hizkuntza egoki bat.',
    'This value is not a valid locale.' => 'Balio hau ez da kokapen egoki bat.',
    'This value is not a valid country.' => 'Balio hau ez da herrialde egoki bat.',
    'This value is already used.' => 'Balio hau jadanik erabilia izan da.',
    'The size of the image could not be detected.' => 'Ezin izan da irudiaren tamaina detektatu.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Irudiaren zabalera handiegia da ({{ width }}px). Onartutako gehienezko zabalera {{ max_width }}px dira.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Irudiaren zabalera txikiegia da ({{ width }}px). Onartutako gutxieneko zabalera {{ min_width }}px dira.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Irudiaren altuera handiegia da ({{ height }}px). Onartutako gehienezko altuera {{ max_height }}px dira.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Irudiaren altuera txikiegia da ({{ height }}px). Onartutako gutxieneko altuera {{ min_height }}px dira.',
    'This value should be the user\'s current password.' => 'Balio hau uneko erabiltzailearen pasahitza izan beharko litzateke.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Balio honek zehazki karaktere {{ limit }} izan beharko luke.|Balio honek zehazki {{ limit }} karaktere izan beharko lituzke.',
    'The file was only partially uploaded.' => 'Fitxategiaren zati bat bakarrik igo da.',
    'No file was uploaded.' => 'Ez da fitxategirik igo.',
    'No temporary folder was configured in php.ini.' => 'Ez da aldi baterako karpetarik konfiguratu php.ini fitxategian.',
    'Cannot write temporary file to disk.' => 'Ezin izan da aldi baterako fitxategia diskoan idatzi.',
    'A PHP extension caused the upload to fail.' => 'PHP luzapen batek igoeraren hutsa eragin du.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Bilduma honek gutxienez elementu {{ limit }} eduki beharko luke.|Bilduma honek gutxienez {{ limit }} elementu eduki beharko lituzke.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Bilduma honek gehienez elementu {{ limit }} eduki beharko luke.|Bilduma honek gehienez {{ limit }} elementu eduki beharko lituzke.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Bilduma honek zehazki elementu {{ limit }} eduki beharko luke.|Bilduma honek zehazki {{ limit }} elementu eduki beharko lituzke.',
    'Invalid card number.' => 'Txartel zenbaki baliogabea.',
    'Unsupported card type or invalid card number.' => 'Txartel mota onartezina edo txartel zenbaki baliogabea.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Hau ez da baliozko banku internazionaleko kontu zenbaki (IBAN) bat.',
    'This value is not a valid ISBN-10.' => 'Balio hau ez da onartutako ISBN-10 bat.',
    'This value is not a valid ISBN-13.' => 'Balio hau ez da onartutako ISBN-13 bat.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Balio hau ez da onartutako ISBN-10 edo ISBN-13 bat.',
    'This value is not a valid ISSN.' => 'Balio hau ez da onartutako ISSN bat.',
    'This value is not a valid currency.' => 'Balio hau ez da baliozko moneta bat.',
    'This value should be equal to {{ compared_value }}.' => 'Balio hau {{ compared_value }}-(r)en berbera izan beharko litzateke.',
    'This value should be greater than {{ compared_value }}.' => 'Balio hau {{ compared_value }} baino handiagoa izan beharko litzateke.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Balio hau {{ compared_value }}-(r)en berdina edota handiagoa izan beharko litzateke.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Balio hau {{ compared_value_type }} {{ compared_value }}-(r)en berbera izan beharko litzateke.',
    'This value should be less than {{ compared_value }}.' => 'Balio hau {{ compared_value }} baino txikiagoa izan beharko litzateke.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Balio hau {{ compared_value }}-(r)en berdina edota txikiagoa izan beharko litzateke.',
    'This value should not be equal to {{ compared_value }}.' => 'Balio hau ez litzateke {{ compared_value }}-(r)en berdina izan behar.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Balio hau ez litzateke {{ compared_value_type }} {{ compared_value }}-(r)en berbera izan behar.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Irudiaren proportzioa oso handia da ({{ ratio }}). Onartutako proportzio handienda {{ max_ratio }} da.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Irudiaren proportzioa oso txikia da ({{ ratio }}). Onartutako proportzio txikiena {{ min_ratio }} da.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Irudia karratua da ({{ width }}x{{ height }}px). Karratuak diren irudiak ez dira onartzen.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Irudia horizontalki bideratua dago ({{ width }}x{{ height }}px). Horizontalki bideratutako irudiak ez dira onartzen.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Irudia bertikalki bideratua dago ({{ width }}x{{ height }}px). Bertikalki bideratutako irudiak ez dira onartzen.',
    'An empty file is not allowed.' => 'Hutsik dagoen fitxategia ez da onartzen.',
    'The host could not be resolved.' => 'Host-a ezin da ebatzi.',
    'This value does not match the expected {{ charset }} charset.' => 'Balio honen karaktere kodea ez da esperotakoa {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ez da balizko Banku Identifikazioko Kodea (BIC).',
    'Error' => 'Errore',
    'This is not a valid UUID.' => 'Balio hau ez da onartutako UUID bat.',
    'This value should be a multiple of {{ compared_value }}.' => 'Balio honek {{ compared_value }}-ren multiploa izan beharko luke.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Banku Identifikazioko Kode hau ez dago lotuta {{ IBAN }} IBAN-rekin.',
    'This value should be valid JSON.' => 'Balio honek baliozko JSON bat izan behar luke.',
    'This collection should contain only unique elements.' => 'Bilduma honek elementu bakarrak soilik izan beharko lituzke.',
    'This value should be positive.' => 'Balio honek positiboa izan beharko luke.',
    'This value should be either positive or zero.' => 'Balio honek positiboa edo zero izan behar luke.',
    'This value should be negative.' => 'Balio honek negatiboa izan behar luke.',
    'This value should be either negative or zero.' => 'Balio honek negatiboa edo zero izan behar luke.',
    'This value is not a valid timezone.' => 'Balio hori ez da baliozko ordu-eremua.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Pasahitz hori ezin da erabili, beste gune eta aplikazio batzuetako segurtasun-akatsei esker lortutako pasahitz publikoen zerrendan sartuta dagoelako. Mesedez, erabili beste pasahitz bat.',
    'This value should be between {{ min }} and {{ max }}.' => 'Balio honek {{ min }} eta {{ max }} artean egon behar luke.',
    'This value is not a valid hostname.' => 'Balio hori ez da ostalari-izen onargarria.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Bilduma honetako elementu-kopuruak {{ compared_value }}-ren multiploa izan behar luke.',
    'This value should satisfy at least one of the following constraints:' => 'Balio honek, gutxienez, murrizketa hauetako bat bete behar du:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Bilduma honetako elementu bakoitzak bere murriztapen-multzoa bete behar du.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Balio hori ez da baliozko baloreen nazioarteko identifikazio-zenbaki bat (ISIN).',
    'This form should not contain extra fields.' => 'Formulario honek ez luke aparteko eremurik eduki behar.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Igotako fitxategia handiegia da. Mesedez saiatu fitxategi txikiago bat igotzen.',
    'The CSRF token is invalid.' => 'CSRF tokena ez da egokia.',
    'This value is not a valid HTML5 color.' => 'Balio hori ez da HTML5 kolore onargarria.',
    'Please enter a valid birthdate.' => 'Mesedez, sartu baliozko urtebetetze-eguna.',
    'The selected choice is invalid.' => 'Hautatutako aukera ez da egokia.',
    'The collection is invalid.' => 'Bilduma ez da baliozkoa.',
    'Please select a valid color.' => 'Mesedez, hautatu baliozko kolore bat.',
    'Please select a valid country.' => 'Mesedez, hautatu baliozko herrialde bat.',
    'Please select a valid currency.' => 'Mesedez, hautatu baliozko moneta bat.',
    'Please choose a valid date interval.' => 'Mesedez, hautatu baliozko data-tarte bat.',
    'Please enter a valid date and time.' => 'Mesedez, sartu baliozko data eta ordua.',
    'Please enter a valid date.' => 'Mesedez, sartu baliozko data bat.',
    'Please select a valid file.' => 'Mesedez, hautatu baliozko fitxategi bat.',
    'The hidden field is invalid.' => 'Eremu ezkutua ez da baliozkoa.',
    'Please enter an integer.' => 'Mesedez, sartu zenbaki oso bat.',
    'Please select a valid language.' => 'Mesedez, hautatu baliozko hizkuntza bat.',
    'Please select a valid locale.' => 'Mesedez, hautatu baliozko eskualde-konfigurazio bat.',
    'Please enter a valid money amount.' => 'Mesedez, sartu baliozko diru-kopuru bat.',
    'Please enter a number.' => 'Mesedez, sartu zenbaki bat.',
    'The password is invalid.' => 'Pasahitza ez da zuzena.',
    'Please enter a percentage value.' => 'Mesedez, sartu portzentajezko balio bat.',
    'The values do not match.' => 'Balioak ez datoz bat.',
    'Please enter a valid time.' => 'Mesedez, sartu baliozko ordu bat.',
    'Please select a valid timezone.' => 'Mesedez, hautatu baliozko ordu-eremua.',
    'Please enter a valid URL.' => 'Mesedez, sartu baliozko URL bat.',
    'Please enter a valid search term.' => 'Mesedez, sartu bilaketa-termino onargarri bat.',
    'Please provide a valid phone number.' => 'Mesedez, eman baliozko telefono-zenbaki bat.',
    'The checkbox has an invalid value.' => 'Egiaztatze-laukiak balio baliogabea du.',
    'Please enter a valid email address.' => 'Mesedez, sartu baliozko helbide elektroniko bat.',
    'Please select a valid option.' => 'Mesedez, hautatu baliozko aukera bat.',
    'Please select a valid range.' => 'Mesedez, hautatu baliozko tarte bat.',
    'Please enter a valid week.' => 'Mesedez, sartu baliozko aste bat.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Autentifikazio-errorea gertatu da.',
    'Authentication credentials could not be found.' => 'Ez dira aurkitu autentifikazio-kredentzialak.',
    'Authentication request could not be processed due to a system problem.' => 'Ezin izan da autentifikazio-eskaera prozesatu, sistema-arazo bat gertatu da eta.',
    'Invalid credentials.' => 'Kredentzialak okerrak dira.',
    'Cookie has already been used by someone else.' => 'Dagoeneko beste pertsona batek erabili du cookiea.',
    'Not privileged to request the resource.' => 'Ez duzu baliabidea eskatzeko aukerarik.',
    'Invalid CSRF token.' => 'CSRF tokena okerra da.',
    'No authentication provider found to support the authentication token.' => 'Ez da aurkitu autentifikazio-tokena eutsi dezakeen autentifikazio-hornitzailerik.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ez dago saiorik erabilgarri, iraungi egin da edo cookieak ez daude gaituta.',
    'No token could be found.' => 'Ez da tokenik aurkitu.',
    'Username could not be found.' => 'Ez da erabiltzaile-izena aurkitu.',
    'Account has expired.' => 'Kontua iraungi da.',
    'Credentials have expired.' => 'Kredentzialak iraungi dira.',
    'Account is disabled.' => 'Kontua desgaituta dago.',
    'Account is locked.' => 'Kontua blokeatuta dago.',
    'Too many failed login attempts, please try again later.' => 'Saioa hasteko saio huts gehiegi, saiatu berriro geroago.',
    'Invalid or expired login link.' => 'Sartzeko esteka baliogabea edo iraungia.',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This value should be a multiple of {{ compared_value }}.' => 'Cette valeur doit être un multiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ce code d\'identification d\'entreprise (BIC) n\'est pas associé à l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Cette valeur doit être un JSON valide.',
    'This collection should contain only unique elements.' => 'Cette collection ne doit pas comporter de doublons.',
    'This value should be positive.' => 'Cette valeur doit être strictement positive.',
    'This value should be either positive or zero.' => 'Cette valeur doit être supérieure ou égale à zéro.',
    'This value should be negative.' => 'Cette valeur doit être strictement négative.',
    'This value should be either negative or zero.' => 'Cette valeur doit être inférieure ou égale à zéro.',
    'This value is not a valid timezone.' => 'Cette valeur n\'est pas un fuseau horaire valide.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ce mot de passe a été divulgué lors d\'une fuite de données, il ne doit plus être utilisé. Veuillez utiliser un autre mot de passe.',
    'This value should be between {{ min }} and {{ max }}.' => 'Cette valeur doit être comprise entre {{ min }} et {{ max }}.',
    'This value is not a valid hostname.' => 'Cette valeur n\'est pas un nom d\'hôte valide.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Le nombre d\'éléments de cette collection doit être un multiple de {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Cette valeur doit satisfaire à au moins une des contraintes suivantes :',
    'Each element of this collection should satisfy its own set of constraints.' => 'Chaque élément de cette collection doit satisfaire à son propre jeu de contraintes.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Cette valeur n\'est pas un code international de sécurité valide (ISIN).',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'This value is not a valid HTML5 color.' => 'Cette valeur n\'est pas une couleur HTML5 valide.',
    'Please enter a valid birthdate.' => 'Veuillez entrer une date de naissance valide.',
    'The selected choice is invalid.' => 'Le choix sélectionné est invalide.',
    'The collection is invalid.' => 'La collection est invalide.',
    'Please select a valid color.' => 'Veuillez sélectionner une couleur valide.',
    'Please select a valid country.' => 'Veuillez sélectionner un pays valide.',
    'Please select a valid currency.' => 'Veuillez sélectionner une devise valide.',
    'Please choose a valid date interval.' => 'Veuillez choisir un intervalle de dates valide.',
    'Please enter a valid date and time.' => 'Veuillez saisir une date et une heure valides.',
    'Please enter a valid date.' => 'Veuillez entrer une date valide.',
    'Please select a valid file.' => 'Veuillez sélectionner un fichier valide.',
    'The hidden field is invalid.' => 'Le champ masqué n\'est pas valide.',
    'Please enter an integer.' => 'Veuillez saisir un entier.',
    'Please select a valid language.' => 'Veuillez sélectionner une langue valide.',
    'Please select a valid locale.' => 'Veuillez sélectionner une langue valide.',
    'Please enter a valid money amount.' => 'Veuillez saisir un montant valide.',
    'Please enter a number.' => 'Veuillez saisir un nombre.',
    'The password is invalid.' => 'Le mot de passe est invalide.',
    'Please enter a percentage value.' => 'Veuillez saisir un pourcentage valide.',
    'The values do not match.' => 'Les valeurs ne correspondent pas.',
    'Please enter a valid time.' => 'Veuillez saisir une heure valide.',
    'Please select a valid timezone.' => 'Veuillez sélectionner un fuseau horaire valide.',
    'Please enter a valid URL.' => 'Veuillez saisir une URL valide.',
    'Please enter a valid search term.' => 'Veuillez saisir un terme de recherche valide.',
    'Please provide a valid phone number.' => 'Veuillez fournir un numéro de téléphone valide.',
    'The checkbox has an invalid value.' => 'La case à cocher a une valeur non valide.',
    'Please enter a valid email address.' => 'Veuillez saisir une adresse email valide.',
    'Please select a valid option.' => 'Veuillez sélectionner une option valide.',
    'Please select a valid range.' => 'Veuillez sélectionner une plage valide.',
    'Please enter a valid week.' => 'Veuillez entrer une semaine valide.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
    'Too many failed login attempts, please try again later.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer plus tard.',
    'Invalid or expired login link.' => 'Lien de connexion invalide ou expiré.',
  ),
  'messages' => 
  array (
    'administrator' => 'Administrateur',
    'user' => 'Utilisateur',
    'dashboard' => 'Tableau de bord',
    'First name' => 'Prénom',
    'Last name' => 'Nom',
    'Password' => 'Mot de passe',
    'Repeat Password' => 'Répéter le mot de passe',
    'language_preferences' => 'Préférences linguistiques',
    'Register' => 'S\'inscrire',
    'sign_in_to_admin' => 'Se connecter',
    'Les informations que vous avez fournies ne sont pas bonnes.' => 'Les informations que vous avez fournies ne sont pas bonnes.',
    'Log in' => 'S\'identifier',
    'forget_password' => 'Mot de passe oublié',
    'Send email' => 'Envoyer un e-mail',
    'Please enter your email' => 'Veuillez entrer votre email',
    'Recovery password' => 'Récupération mon mot de passe',
    'No data available in the table' => 'Aucune donnée disponible dans le tableau',
    'search' => 'Chercher',
    'show' => 'Afficher',
    'entries' => 'entrées',
    'showing' => 'Affichage de 0 à 0 sur 0 entrées',
    'First' => 'Première',
    'Last' => 'Dernière',
    'Next' => 'Prochaine',
    'previous' => 'Précédente',
    'project_list' => 'Liste des projets',
    'manage_projects' => 'Gestion des  projets',
    'Project' => 'Projet',
    'Projects' => 'Projets',
    'list' => 'Liste',
    'add_project' => 'Ajouter projet',
    'Name' => 'Nom',
    'action' => 'Action',
    'create_project' => 'Créer un projet',
    'New' => 'Nouvelle',
    'create' => 'Créer',
    'Cancel' => 'Annuler',
    'project_created' => 'Projet Créer',
    'edit_project' => 'Modifier projet',
    'edit' => 'Modifier',
    'project_edited' => 'Projet modifié',
    'project_deleted' => 'Projet supprimé',
    'remove' => 'supprimé',
    'Collaborater' => 'Colloborateur',
    'Please enter email' => 'Veuillez entrer un email',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
