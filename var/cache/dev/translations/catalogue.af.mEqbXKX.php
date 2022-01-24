<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('af', array (
  'validators' => 
  array (
    'This value should be false.' => 'Hierdie waarde moet vals wees.',
    'This value should be true.' => 'Hierdie waarde moet waar wees.',
    'This value should be of type {{ type }}.' => 'Hierdie waarde moet van die soort {{type}} wees.',
    'This value should be blank.' => 'Hierdie waarde moet leeg wees.',
    'The value you selected is not a valid choice.' => 'Die waarde wat jy gekies het is nie \'n geldige keuse nie.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Jy moet ten minste {{ limit }} kies.|Jy moet ten minste {{ limit }} keuses kies.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Jy moet by die meeste {{ limit }} keuse kies.|Jy moet by die meeste {{ limit }} keuses kies.',
    'One or more of the given values is invalid.' => 'Een of meer van die gegewe waardes is ongeldig.',
    'This field was not expected.' => 'Die veld is nie verwag nie.',
    'This field is missing.' => 'Hierdie veld ontbreek.',
    'This value is not a valid date.' => 'Hierdie waarde is nie \'n geldige datum nie.',
    'This value is not a valid datetime.' => 'Hierdie waarde is nie \'n geldige datum en tyd nie.',
    'This value is not a valid email address.' => 'Hierdie waarde is nie \'n geldige e-pos adres nie.',
    'The file could not be found.' => 'Die lêer kon nie gevind word nie.',
    'The file is not readable.' => 'Die lêer kan nie gelees word nie.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die lêer is te groot ({{ size }} {{ suffix }}). Toegelaat maksimum grootte is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Die MIME-tipe van die lêer is ongeldig ({{ type }}). Toegelaat MIME-tipes is {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Hierdie waarde moet {{ limit }} of minder wees.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Hierdie waarde is te lank. Dit moet {{ limit }} karakter of minder wees.|Hierdie waarde is te lank. Dit moet {{ limit }} karakters of minder wees.',
    'This value should be {{ limit }} or more.' => 'Hierdie waarde moet {{ limit }} of meer wees.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Hierdie waarde is te kort. Dit moet {{ limit }} karakter of meer wees.|Hierdie waarde is te kort. Dit moet {{ limit }} karakters of meer wees.',
    'This value should not be blank.' => 'Hierdie waarde moet nie leeg wees nie.',
    'This value should not be null.' => 'Hierdie waarde moet nie nul wees nie.',
    'This value should be null.' => 'Hierdie waarde moet nul wees.',
    'This value is not valid.' => 'Hierdie waarde is nie geldig nie.',
    'This value is not a valid time.' => 'Hierdie waarde is nie \'n geldige tyd nie.',
    'This value is not a valid URL.' => 'Hierdie waarde is nie \'n geldige URL nie.',
    'The two values should be equal.' => 'Die twee waardes moet gelyk wees.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die lêer is te groot. Toegelaat maksimum grootte is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Die lêer is te groot.',
    'The file could not be uploaded.' => 'Die lêer kan nie opgelaai word nie.',
    'This value should be a valid number.' => 'Hierdie waarde moet \'n geldige nommer wees.',
    'This file is not a valid image.' => 'Hierdie lêer is nie \'n geldige beeld nie.',
    'This is not a valid IP address.' => 'Hierdie is nie \'n geldige IP-adres nie.',
    'This value is not a valid language.' => 'Hierdie waarde is nie \'n geldige taal nie.',
    'This value is not a valid locale.' => 'Hierdie waarde is nie \'n geldige land instelling nie.',
    'This value is not a valid country.' => 'Hierdie waarde is nie \'n geldige land nie.',
    'This value is already used.' => 'Hierdie waarde word reeds gebruik.',
    'The size of the image could not be detected.' => 'Die grootte van die beeld kon nie opgespoor word nie.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Die beeld breedte is te groot ({{ width }}px). Toegelaat maksimum breedte is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Die beeld breedte is te klein ({{ width }}px). Minimum breedte verwag is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Die beeld hoogte is te groot ({{ height }}px). Toegelaat maksimum hoogte is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Die beeld hoogte is te klein ({{ height }}px). Minimum hoogte verwag is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Hierdie waarde moet die huidige wagwoord van die gebruiker wees.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Hierdie waarde moet presies {{ limit }} karakter wees.|Hierdie waarde moet presies {{ limit }} karakters wees.',
    'The file was only partially uploaded.' => 'Die lêer is slegs gedeeltelik opgelaai.',
    'No file was uploaded.' => 'Geen lêer is opgelaai nie.',
    'No temporary folder was configured in php.ini.' => 'Geen tydelike lêer is ingestel in php.ini nie.',
    'Cannot write temporary file to disk.' => 'Kan nie tydelike lêer skryf op skyf nie.',
    'A PHP extension caused the upload to fail.' => '\'n PHP-uitbreiding veroorsaak die oplaai van die lêer om te misluk.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Hierdie versameling moet {{ limit }} element of meer bevat.|Hierdie versameling moet {{ limit }} elemente of meer bevat.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Hierdie versameling moet {{ limit }} element of minder bevat.|Hierdie versameling moet {{ limit }} elemente of meer bevat.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Hierdie versameling moet presies {{ limit }} element bevat.|Hierdie versameling moet presies {{ limit }} elemente bevat.',
    'Invalid card number.' => 'Ongeldige kredietkaart nommer.',
    'Unsupported card type or invalid card number.' => 'Nie-ondersteunde tipe kaart of ongeldige kredietkaart nommer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Hierdie is nie \'n geldige Internationale Bank Rekening Nommer (IBAN) nie.',
    'This value is not a valid ISBN-10.' => 'Hierdie waarde is nie \'n geldige ISBN-10 nie.',
    'This value is not a valid ISBN-13.' => 'Hierdie waarde is nie \'n geldige ISBN-13 nie.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Hierdie waarde is nie \'n geldige ISBN-10 of ISBN-13 nie.',
    'This value is not a valid ISSN.' => 'Hierdie waarde is nie \'n geldige ISSN nie.',
    'This value is not a valid currency.' => 'Hierdie waarde is nie \'n geldige geldeenheid nie.',
    'This value should be equal to {{ compared_value }}.' => 'Hierdie waarde moet gelyk aan {{ compared_value }} wees.',
    'This value should be greater than {{ compared_value }}.' => 'Hierdie waarde moet meer as {{ compared_value }} wees.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Hierdie waarde moet meer of gelyk aan {{ compared_value }} wees.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Hierdie waarde moet identies aan {{ compared_value_type }} {{ compared_value }} wees.',
    'This value should be less than {{ compared_value }}.' => 'Hierdie waarde moet minder as {{ compared_value }} wees.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Hierdie waarde moet minder of gelyk aan {{ compared_value }} wees.',
    'This value should not be equal to {{ compared_value }}.' => 'Hierdie waarde moet nie dieselfde as {{ compared_value }} wees nie.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Hierdie waarde moet nie identies as {{ compared_value_type }} {{ compared_value }} wees nie.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Die beeld aspek is te groot ({{ ratio }}). Die maksimum toegelate aspek is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Die beeld aspek is te klein ({{ ratio }}). Die minimum toegelate aspek is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Die beeld is vierkantig ({{ width }}x{{ height }}px). Vierkantige beelde word nie toegelaat nie.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Die beeld is landskap georiënteerd ({{ width }}x{{ height }}px). Landskap georiënteerde beelde word nie toegelaat nie.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Die beeld dis portret georiënteerd ({{ width }}x{{ height }}px). Portret georiënteerde beelde word nie toegelaat nie.',
    'An empty file is not allowed.' => '\'n Leë lêer word nie toegelaat nie.',
    'The host could not be resolved.' => 'Die gasheer kon nie opgelos word nie.',
    'This value does not match the expected {{ charset }} charset.' => 'Die waarde stem nie ooreen met die verwagte {{ charset }} karakterstel nie.',
    'This is not a valid Business Identifier Code (BIC).' => 'Hierdie is nie \'n geldige Besigheids Identifikasie Kode (BIC) nie.',
    'Error' => 'Fout',
    'This is not a valid UUID.' => 'Hierdie is nie \'n geldige UUID nie.',
    'This value should be a multiple of {{ compared_value }}.' => 'Hierdie waarde moet \'n veelvoud van {{ compared_value }} wees.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Hierdie Besigheids Identifikasie Kode (BIK) is nie geassosieer met IBAN {{ iban }} nie.',
    'This value should be valid JSON.' => 'Hierdie waarde moet geldige JSON wees.',
    'This collection should contain only unique elements.' => 'Hierdie versameling moet net unieke elemente bevat.',
    'This value should be positive.' => 'Hierdie waarde moet positief wees.',
    'This value should be either positive or zero.' => 'Hierdie waarde moet positief of nul wees.',
    'This value should be negative.' => 'Hierdie waarde moet negatief wees.',
    'This value should be either negative or zero.' => 'Hierdie waarde moet negatief of nul wees.',
    'This value is not a valid timezone.' => 'Hierdie waarde is nie \'n geldige tydsone nie.',
    'This value should be between {{ min }} and {{ max }}.' => 'Hierdie waarde moet tussen {{ min }} en {{ max }} wees.',
    'This value is not a valid hostname.' => 'Hierdie waarde is nie \'n geldige gasheernaam nie.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Die hoeveelheid elemente in hierdie versameling moet \'n meelvoud van {{ compared_value }} wees.',
    'This value should satisfy at least one of the following constraints:' => 'Hierdie waarde moet voldoen aan ten minste een van hierdie beperkings:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Elke element van hierdie versameling moet voldoen aan hulle eie beperkings.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Hierdie waarde is nie \'n geldige Internasionale veiligheidsidentifikasienommer (ISIN) nie.',
    'This form should not contain extra fields.' => 'Hierdie vorm moet nie ekstra velde bevat nie.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Die opgelaaide lêer was te groot. Probeer asseblief \'n kleiner lêer.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Die CSRF-teken is ongeldig. Probeer asseblief om die vorm weer in te dien.',
    'This value is not a valid HTML5 color.' => 'Hierdie waarde is nie \'n geldige HTML5 kleur nie.',
    'Please enter a valid birthdate.' => 'Voer asseblief \'n geldige geboortedatum in.',
    'The selected choice is invalid.' => 'Die gekiesde opsie is nie geldig nie.',
    'The collection is invalid.' => 'Die versameling is nie geldig nie.',
    'Please select a valid color.' => 'Kies asseblief \'n geldige kleur.',
    'Please select a valid country.' => 'Kies asseblief \'n geldige land.',
    'Please select a valid currency.' => 'Kies asseblief \'n geldige geldeenheid.',
    'Please choose a valid date interval.' => 'Kies asseblief \'n geldige datum interval.',
    'Please enter a valid date and time.' => 'Voer asseblilef \'n geldige datum en tyd in.',
    'Please enter a valid date.' => 'Voer asseblief \'n geldige datum in.',
    'Please select a valid file.' => 'Kies asseblief \'n geldige lêer.',
    'The hidden field is invalid.' => 'Die versteekte veld is nie geldig nie.',
    'Please enter an integer.' => 'Voer asseblief \'n geldige heeltal in.',
    'Please select a valid language.' => 'Kies assblief \'n geldige taal.',
    'Please select a valid locale.' => 'Voer assebliefn \'n geldige locale in.',
    'Please enter a valid money amount.' => 'Voer asseblief \'n geldige bedrag in.',
    'Please enter a number.' => 'Voer asseblief \'n nommer in.',
    'The password is invalid.' => 'Die wagwoord is ongeldig.',
    'Please enter a percentage value.' => 'Voer asseblief \'n geldige persentasie waarde in.',
    'The values do not match.' => 'Die waardes is nie dieselfde nie.',
    'Please enter a valid time.' => 'Voer asseblief \'n geldige tyd in time.',
    'Please select a valid timezone.' => 'Kies asseblief \'n geldige tydsone.',
    'Please enter a valid URL.' => 'Voer asseblief \'n geldige URL in.',
    'Please enter a valid search term.' => 'Voer asseblief \'n geldige soek term in.',
    'Please provide a valid phone number.' => 'Verskaf asseblief \'n geldige telefoonnommer.',
    'The checkbox has an invalid value.' => 'Die blokkie het \'n ongeldige waarde.',
    'Please enter a valid email address.' => 'Voer asseblief \'n geldige e-pos adres in.',
    'Please select a valid option.' => 'Kies asseblief \'n geldige opsie.',
    'Please select a valid range.' => 'Kies asseblief \'n geldige reeks.',
    'Please enter a valid week.' => 'Voer assblief \'n geldige week in.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => '\'n Verifikasie probleem het voorgekom.',
    'Authentication credentials could not be found.' => 'Verifikasiebewyse kon nie gevind word nie.',
    'Authentication request could not be processed due to a system problem.' => 'Verifikasieversoek kon weens \'n stelselprobleem nie verwerk word nie.',
    'Invalid credentials.' => 'Ongedige verifikasiebewyse.',
    'Cookie has already been used by someone else.' => 'Die koekie is alreeds deur iemand anders gebruik.',
    'Not privileged to request the resource.' => 'Nie bevoorreg om die hulpbron aan te vra nie.',
    'Invalid CSRF token.' => 'Ongeldige CSRF-teken.',
    'No authentication provider found to support the authentication token.' => 'Geen verifikasieverskaffer is gevind wat die verifikasietoken kan ondersteun nie.',
    'No session available, it either timed out or cookies are not enabled.' => 'Geen sessie is beskikbaar, die het verval of koekies is nie geaktiveer nie.',
    'No token could be found.' => 'Geen teken kon gevind word nie.',
    'Username could not be found.' => 'Gebruikersnaam kon nie gevind word nie.',
    'Account has expired.' => 'Rekening het verval.',
    'Credentials have expired.' => 'Verifikasiebewyse het verval.',
    'Account is disabled.' => 'Rekening is deaktiveer.',
    'Account is locked.' => 'Rekening is gesluit.',
    'Too many failed login attempts, please try again later.' => 'Te veel mislukte aanmeldpogings, probeer asseblief later weer.',
    'Invalid or expired login link.' => 'Ongeldige of vervalde aanmeldskakel.',
  ),
));

$cataloguePt = new MessageCatalogue('pt', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor deveria ser falso.',
    'This value should be true.' => 'Este valor deveria ser verdadeiro.',
    'This value should be of type {{ type }}.' => 'Este valor deveria ser do tipo {{ type }}.',
    'This value should be blank.' => 'Este valor deveria ser vazio.',
    'The value you selected is not a valid choice.' => 'O valor selecionado não é uma opção válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Você deveria selecionar {{ limit }} opção no mínimo.|Você deveria selecionar {{ limit }} opções no mínimo.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Você deve selecionar, no máximo {{ limit }} opção.|Você deve selecionar, no máximo {{ limit }} opções.',
    'One or more of the given values is invalid.' => 'Um ou mais dos valores introduzidos não são válidos.',
    'This field was not expected.' => 'Este campo não era esperado.',
    'This field is missing.' => 'Este campo está faltando.',
    'This value is not a valid date.' => 'Este valor não é uma data válida.',
    'This value is not a valid datetime.' => 'Este valor não é uma data-hora válida.',
    'This value is not a valid email address.' => 'Este valor não é um endereço de e-mail válido.',
    'The file could not be found.' => 'O arquivo não pôde ser encontrado.',
    'The file is not readable.' => 'O arquivo não pôde ser lido.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'O arquivo é muito grande ({{ size }} {{ suffix }}). O tamanho máximo permitido é de {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'O tipo mime do arquivo é inválido ({{ type }}). Os tipos mime permitidos são {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor deveria ser {{ limit }} ou menor.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'O valor é muito longo. Deveria ter {{ limit }} caracteres ou menos.',
    'This value should be {{ limit }} or more.' => 'Este valor deveria ser {{ limit }} ou mais.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'O valor é muito curto. Deveria de ter {{ limit }} caractere ou mais.|O valor é muito curto. Deveria de ter {{ limit }} caracteres ou mais.',
    'This value should not be blank.' => 'Este valor não deveria ser branco/vazio.',
    'This value should not be null.' => 'Este valor não deveria ser nulo.',
    'This value should be null.' => 'Este valor deveria ser nulo.',
    'This value is not valid.' => 'Este valor não é válido.',
    'This value is not a valid time.' => 'Este valor não é uma hora válida.',
    'This value is not a valid URL.' => 'Este valor não é um URL válido.',
    'The two values should be equal.' => 'Os dois valores deveriam ser iguais.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'O arquivo é muito grande. O tamanho máximo permitido é de {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'O ficheiro é muito grande.',
    'The file could not be uploaded.' => 'Não foi possível carregar o ficheiro.',
    'This value should be a valid number.' => 'Este valor deveria ser um número válido.',
    'This file is not a valid image.' => 'Este ficheiro não é uma imagem.',
    'This is not a valid IP address.' => 'Este endereço de IP não é válido.',
    'This value is not a valid language.' => 'Este valor não é uma linguagem válida.',
    'This value is not a valid locale.' => 'Este valor não é um \'locale\' válido.',
    'This value is not a valid country.' => 'Este valor não é um País válido.',
    'This value is already used.' => 'Este valor já está a ser usado.',
    'The size of the image could not be detected.' => 'O tamanho da imagem não foi detetado.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'A largura da imagem ({{ width }}px) é muito grande. A largura máxima da imagem é: {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'A largura da imagem ({{ width }}px) é muito pequena. A largura miníma da imagem é de: {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'A altura da imagem ({{ height }}px) é muito grande. A altura máxima da imagem é de: {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'A altura da imagem ({{ height }}px) é muito pequena. A altura miníma da imagem é de: {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor deveria ser a senha atual do usuário.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor deve possuir exatamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'Só foi enviada uma parte do arquivo.',
    'No file was uploaded.' => 'Nenhum arquivo foi enviado.',
    'No temporary folder was configured in php.ini.' => 'Não existe uma pasta temporária configurada no arquivo php.ini.',
    'Cannot write temporary file to disk.' => 'Não foi possível escrever os arquivos temporários no disco.',
    'A PHP extension caused the upload to fail.' => 'Uma extensão PHP causou a falha no envio.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta coleção deve conter {{ limit }} elemento ou mais.|Esta coleção deve conter {{ limit }} elementos ou mais.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta coleção deve conter {{ limit }} elemento ou menos.|Esta coleção deve conter {{ limit }} elementos ou menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta coleção deve conter exatamente {{ limit }} elemento.|Esta coleção deve conter exatamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de cartão inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de cartão não suportado ou número de cartão inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Este não é um Número Internacional de Conta Bancária (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor não é um ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor não é um ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor não é um ISBN-10 ou ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor não é um ISSN válido.',
    'This value is not a valid currency.' => 'Este não é um valor monetário válido.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor deve ser igual a {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor deve ser superior a {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor deve ser igual ou superior a {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor deve ser idêntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor deve ser inferior a {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor deve ser igual ou inferior a {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor não deve ser igual a {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor não deve ser idêntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'O formato da imagem é muito grande ({{ ratio }}). O formato máximo é {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'O formato da imagem é muito pequeno ({{ ratio }}). O formato mínimo esperado é {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'A imagem é um quadrado ({{ width }}x{{ height }}px). Imagens quadradas não são permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'A imagem está em orientação de paisagem ({{ width }}x{{ height }}px). Imagens orientadas em paisagem não são permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'A imagem está em orientação de retrato ({{ width }}x{{ height }}px). Imagens orientadas em retrato não são permitidas.',
    'An empty file is not allowed.' => 'Um arquivo vazio não é permitido.',
    'The host could not be resolved.' => 'O host não pode ser resolvido.',
    'This value does not match the expected {{ charset }} charset.' => 'O valor não corresponde ao conjunto de caracteres {{ charset }} esperado.',
    'This is not a valid Business Identifier Code (BIC).' => 'O Código de Identificação de Empresa (BIC) não é válido.',
    'Error' => 'Erro',
    'This is not a valid UUID.' => 'Este valor não é um UUID válido.',
    'This value should be a multiple of {{ compared_value }}.' => 'Este valor deve ser um múltiplo de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'O Código de Identificação de Empresa (BIC) não está associado ao IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Este valor deve ser um JSON válido.',
    'This collection should contain only unique elements.' => 'Esta coleção deve conter só elementos únicos.',
    'This value should be positive.' => 'Este valor deve ser estritamente positivo.',
    'This value should be either positive or zero.' => 'Este valor deve ser superior ou igual a zero.',
    'This value should be negative.' => 'Este valor deve ser estritamente negativo.',
    'This value should be either negative or zero.' => 'Este valor deve ser inferior ou igual a zero.',
    'This value is not a valid timezone.' => 'Este valor não é um fuso horário válido.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Esta senha foi divulgada durante uma fuga de dados, não deve ser usada de novamente. Por favor usar uma senha outra.',
    'This value should be between {{ min }} and {{ max }}.' => 'Este valor deve situar-se entre {{ min }} e {{ max }}.',
    'This value is not a valid hostname.' => 'Este valor não é um nome de host válido.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'O número de elementos desta coleção deve ser um múltiplo de {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Este valor deve satisfazer pelo menos uma das seguintes restrições :',
    'Each element of this collection should satisfy its own set of constraints.' => 'Cada elemento desta coleção deve satisfazer o seu próprio conjunto de restrições.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Este valor não é um Número Internacional de Identificação de Segurança (ISIN) válido.',
    'This value should be a valid expression.' => 'Este valor deve ser uma expressão válida.',
    'This value is not a valid CSS color.' => 'Este valor não é uma cor de CSS válida.',
    'This value is not a valid CIDR notation.' => 'Este valor não é uma notação CIDR válida.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'O valor da máscara de rede deve estar entre {{ min }} e {{ max }}.',
    'This form should not contain extra fields.' => 'Este formulário não deveria possuir mais campos.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'O ficheiro enviado é muito grande. Por favor, tente enviar um ficheiro menor.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'O token CSRF está inválido. Por favor, tente enviar o formulário novamente.',
    'This value is not a valid HTML5 color.' => 'Este valor não é uma cor HTML5 válida.',
    'Please enter a valid birthdate.' => 'Por favor, informe uma data de nascimento válida.',
    'The selected choice is invalid.' => 'A escolha seleccionada é inválida.',
    'The collection is invalid.' => 'A coleção é inválida.',
    'Please select a valid color.' => 'Por favor, selecione uma cor válida.',
    'Please select a valid country.' => 'Por favor, selecione um país válido.',
    'Please select a valid currency.' => 'Por favor, selecione uma moeda válida.',
    'Please choose a valid date interval.' => 'Por favor, escolha um intervalo de datas válido.',
    'Please enter a valid date and time.' => 'Por favor, informe uma data e horário válidos.',
    'Please enter a valid date.' => 'Por favor, informe uma data válida.',
    'Please select a valid file.' => 'Por favor, selecione um ficheiro válido.',
    'The hidden field is invalid.' => 'O campo oculto é inválido.',
    'Please enter an integer.' => 'Por favor, informe um inteiro.',
    'Please select a valid language.' => 'Por favor selecione um idioma válido.',
    'Please select a valid locale.' => 'Por favor, selecione um locale válido.',
    'Please enter a valid money amount.' => 'Por favor, informe um valor monetário válido.',
    'Please enter a number.' => 'Por favor, informe um número.',
    'The password is invalid.' => 'A palavra-passe é inválida.',
    'Please enter a percentage value.' => 'Por favor, informe um valor percentual.',
    'The values do not match.' => 'Os valores não correspondem.',
    'Please enter a valid time.' => 'Por favor, informe uma hora válida.',
    'Please select a valid timezone.' => 'Por favor, selecione um fuso horário válido.',
    'Please enter a valid URL.' => 'Por favor, informe uma URL válida.',
    'Please enter a valid search term.' => 'Por favor, informe um termo de busca válido.',
    'Please provide a valid phone number.' => 'Por favor, infome um número de telefone válido.',
    'The checkbox has an invalid value.' => 'O checkbox possui um valor inválido.',
    'Please enter a valid email address.' => 'Por favor, informe um endereço de email válido.',
    'Please select a valid option.' => 'Por favor, selecione uma opção válida.',
    'Please select a valid range.' => 'Por favor, selecione um intervalo válido.',
    'Please enter a valid week.' => 'Por favor, selecione uma semana válida.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocorreu uma excepção durante a autenticação.',
    'Authentication credentials could not be found.' => 'As credenciais de autenticação não foram encontradas.',
    'Authentication request could not be processed due to a system problem.' => 'O pedido de autenticação não foi concluído devido a um problema no sistema.',
    'Invalid credentials.' => 'Credenciais inválidas.',
    'Cookie has already been used by someone else.' => 'Este cookie já está em uso.',
    'Not privileged to request the resource.' => 'Não possui privilégios para aceder a este recurso.',
    'Invalid CSRF token.' => 'Token CSRF inválido.',
    'No authentication provider found to support the authentication token.' => 'Nenhum fornecedor de autenticação encontrado para suportar o token de autenticação.',
    'No session available, it either timed out or cookies are not enabled.' => 'Não existe sessão disponível, esta expirou ou os cookies estão desativados.',
    'No token could be found.' => 'O token não foi encontrado.',
    'Username could not be found.' => 'Nome de utilizador não encontrado.',
    'Account has expired.' => 'A conta expirou.',
    'Credentials have expired.' => 'As credenciais expiraram.',
    'Account is disabled.' => 'Conta desativada.',
    'Account is locked.' => 'A conta está trancada.',
    'Too many failed login attempts, please try again later.' => 'Várias tentativas de login falhadas, por favor tente mais tarde.',
    'Invalid or expired login link.' => 'Ligação de login inválida ou expirada.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Demasiadas tentativas de login, tente novamente num minuto.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Demasiadas tentativas de login, tente novamente em %minutes% minutos.',
  ),
  'messages' => 
  array (
    'First name' => 'Nome própria',
    'Last name' => 'Apelido',
    'Attachment' => 'Anexo',
    'Attachments' => 'Anexo(s)',
    'Message' => 'Mensagem',
    'Get in touch' => 'Contactar',
  ),
));
$catalogue->addFallbackCatalogue($cataloguePt);

return $catalogue;
