<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sv', array (
  'validators' => 
  array (
    'This value should be false.' => 'Värdet ska vara falskt.',
    'This value should be true.' => 'Värdet ska vara sant.',
    'This value should be of type {{ type }}.' => 'Värdet ska vara av typen {{ type }}.',
    'This value should be blank.' => 'Värdet ska vara tomt.',
    'The value you selected is not a valid choice.' => 'Värdet ska vara ett av de givna valen.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Du måste välja minst {{ limit }} val.|Du måste välja minst {{ limit }} val.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Du kan som mest välja {{ limit }} val.|Du kan som mest välja {{ limit }} val.',
    'One or more of the given values is invalid.' => 'Ett eller fler av de angivna värdena är ogiltigt.',
    'This field was not expected.' => 'Det här fältet förväntades inte.',
    'This field is missing.' => 'Det här fältet saknas.',
    'This value is not a valid date.' => 'Värdet är inte ett giltigt datum.',
    'This value is not a valid datetime.' => 'Värdet är inte ett giltigt datum med tid.',
    'This value is not a valid email address.' => 'Värdet är inte en giltig e-postadress.',
    'The file could not be found.' => 'Filen kunde inte hittas.',
    'The file is not readable.' => 'Filen är inte läsbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen är för stor ({{ size }} {{ suffix }}). Största tillåtna storlek är {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Filens MIME-typ ({{ type }}) är ogiltig. De tillåtna typerna är {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Värdet ska vara {{ limit }} eller mindre.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Värdet är för långt. Det ska ha {{ limit }} tecken eller färre.|Värdet är för långt. Det ska ha {{ limit }} tecken eller färre.',
    'This value should be {{ limit }} or more.' => 'Värdet ska vara {{ limit }} eller mer.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Värdet är för kort. Det ska ha {{ limit }} tecken eller mer.|Värdet är för kort. Det ska ha {{ limit }} tecken eller mer.',
    'This value should not be blank.' => 'Värdet kan inte vara tomt.',
    'This value should not be null.' => 'Värdet kan inte vara null.',
    'This value should be null.' => 'Värdet ska vara null.',
    'This value is not valid.' => 'Värdet är inte giltigt.',
    'This value is not a valid time.' => 'Värdet är inte en giltig tid.',
    'This value is not a valid URL.' => 'Värdet är inte en giltig URL.',
    'The two values should be equal.' => 'De två värdena måste vara lika.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen är för stor. Tillåten maximal storlek är {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Filen är för stor.',
    'The file could not be uploaded.' => 'Filen kunde inte laddas upp.',
    'This value should be a valid number.' => 'Värdet ska vara ett giltigt nummer.',
    'This file is not a valid image.' => 'Filen är ingen giltig bild.',
    'This is not a valid IP address.' => 'Det här är inte en giltig IP-adress.',
    'This value is not a valid language.' => 'Värdet är inte ett giltigt språk.',
    'This value is not a valid locale.' => 'Värdet är inte en giltig plats.',
    'This value is not a valid country.' => 'Värdet är inte ett giltigt land.',
    'This value is already used.' => 'Värdet används redan.',
    'The size of the image could not be detected.' => 'Det gick inte att fastställa storleken på bilden.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Bildens bredd är för stor ({{ width }}px). Tillåten maximal bredd är {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Bildens bredd är för liten ({{ width }}px). Minsta förväntade bredd är {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Bildens höjd är för stor ({{ height }}px). Tillåten maximal bredd är {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Bildens höjd är för liten ({{ height }}px). Minsta förväntade höjd är {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Värdet ska vara användarens nuvarande lösenord.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Värdet ska ha exakt {{ limit }} tecken.|Värdet ska ha exakt {{ limit }} tecken.',
    'The file was only partially uploaded.' => 'Filen laddades bara upp delvis.',
    'No file was uploaded.' => 'Ingen fil laddades upp.',
    'No temporary folder was configured in php.ini.' => 'Det finns ingen temporär mapp konfigurerad i php.ini.',
    'Cannot write temporary file to disk.' => 'Kan inte skriva temporär fil till disken.',
    'A PHP extension caused the upload to fail.' => 'En PHP extension gjorde att uppladdningen misslyckades.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Den här samlingen ska innehålla {{ limit }} element eller mer.|Den här samlingen ska innehålla {{ limit }} element eller mer.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Den här samlingen ska innehålla {{ limit }} element eller mindre.|Den här samlingen ska innehålla {{ limit }} element eller mindre.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Den här samlingen ska innehålla exakt {{ limit }} element.|Den här samlingen ska innehålla exakt {{ limit }} element.',
    'Invalid card number.' => 'Ogiltigt kortnummer.',
    'Unsupported card type or invalid card number.' => 'Okänd korttyp eller ogiltigt kortnummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Det här är inte en giltig International Bank Account Number (IBANK).',
    'This value is not a valid ISBN-10.' => 'Värdet är inte en giltig ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Värdet är inte en giltig ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Värdet är varken en giltig ISBN-10 eller en giltig ISBN-13.',
    'This value is not a valid ISSN.' => 'Värdet är inte en giltig ISSN.',
    'This value is not a valid currency.' => 'Värdet är inte en giltig valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Värdet ska vara detsamma som {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Värdet ska vara större än {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Värdet ska bara större än eller detsamma som {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Värdet ska vara identiskt till {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Värdet ska vara mindre än {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Värdet ska vara mindre än eller detsamma som {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Värdet ska inte vara detsamma som {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Värdet ska inte vara identiskt med {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Förhållandet mellan bildens bredd och höjd är för stort ({{ ratio }}). Högsta tillåtna förhållande är {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Förhållandet mellan bildens bredd och höjd är för litet ({{ ratio }}). Minsta tillåtna förhållande är {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Bilden är kvadratisk ({{ width }}x{{ height }}px). Kvadratiska bilder tillåts inte.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Bilden är landskapsorienterad ({{ width }}x{{ height }}px). Landskapsorienterade bilder tillåts inte.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Bilden är porträttsorienterad ({{ width }}x{{ height }}px). Porträttsorienterade bilder tillåts inte.',
    'An empty file is not allowed.' => 'En tom fil är inte tillåten.',
    'The host could not be resolved.' => 'Värddatorn kunde inte hittas.',
    'This value does not match the expected {{ charset }} charset.' => 'Detta värde har inte den förväntade teckenkodningen {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Detta är inte en giltig BIC-kod.',
    'Error' => 'Fel',
    'This is not a valid UUID.' => 'Detta är inte ett giltigt UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Detta värde ska vara en multipel av {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Denna BIC-koden är inte associerad med IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Detta värde ska vara giltig JSON.',
    'This collection should contain only unique elements.' => 'Denna samling bör endast innehålla unika element.',
    'This value should be positive.' => 'Detta värde bör vara positivt.',
    'This value should be either positive or zero.' => 'Detta värde bör vara antingen positivt eller noll.',
    'This value should be negative.' => 'Detta värde bör vara negativt.',
    'This value should be either negative or zero.' => 'Detta värde bör vara antingen negativt eller noll.',
    'This value is not a valid timezone.' => 'Detta värde är inte en giltig tidszon.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Det här lösenordet har läckt ut vid ett dataintrång, det får inte användas. Använd ett annat lösenord.',
    'This value should be between {{ min }} and {{ max }}.' => 'Detta värde bör ligga mellan {{ min }} och {{ max }}.',
    'This value is not a valid hostname.' => 'Värdet är inte ett giltigt servernamn.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Antalet element i samlingen ska vara en multipel av {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Det här värdet skall uppfylla minst ett av följande krav:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Varje element i samlingen skall uppfylla sin egen uppsättning av krav.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Det här värdet är inte ett giltigt "International Securities Identification Number" (ISIN).',
    'This value should be a valid expression.' => 'Det här värdet bör vara ett giltigt uttryck.',
    'This value is not a valid CSS color.' => 'Det här värdet är inte en giltig CSS-färg.',
    'This value is not a valid CIDR notation.' => 'Det här värdet är inte en giltig CIDR-notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Värdet på nätmasken bör vara mellan {{ min }} och {{ max }}.',
    'This form should not contain extra fields.' => 'Formuläret kan inte innehålla extra fält.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Den uppladdade filen var för stor. Försök ladda upp en mindre fil.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-elementet är inte giltigt. Försök att skicka formuläret igen.',
    'This value is not a valid HTML5 color.' => 'Värdet är inte en giltig HTML5-färg.',
    'Please enter a valid birthdate.' => 'Ange ett giltigt födelsedatum.',
    'The selected choice is invalid.' => 'Det valda alternativet är ogiltigt.',
    'The collection is invalid.' => 'Den här samlingen är ogiltig.',
    'Please select a valid color.' => 'Välj en giltig färg.',
    'Please select a valid country.' => 'Välj ett land.',
    'Please select a valid currency.' => 'Välj en valuta.',
    'Please choose a valid date interval.' => 'Välj ett giltigt datumintervall.',
    'Please enter a valid date and time.' => 'Ange ett giltigt datum och tid.',
    'Please enter a valid date.' => 'Ange ett giltigt datum.',
    'Please select a valid file.' => 'Välj en fil.',
    'The hidden field is invalid.' => 'Det dolda fältet är ogiltigt.',
    'Please enter an integer.' => 'Ange ett heltal.',
    'Please select a valid language.' => 'Välj språk.',
    'Please select a valid locale.' => 'Välj plats.',
    'Please enter a valid money amount.' => 'Ange en giltig summa pengar.',
    'Please enter a number.' => 'Ange en siffra.',
    'The password is invalid.' => 'Lösenordet är ogiltigt.',
    'Please enter a percentage value.' => 'Ange ett procentuellt värde.',
    'The values do not match.' => 'De angivna värdena stämmer inte överens.',
    'Please enter a valid time.' => 'Ange en giltig tid.',
    'Please select a valid timezone.' => 'Välj en tidszon.',
    'Please enter a valid URL.' => 'Ange en giltig URL.',
    'Please enter a valid search term.' => 'Ange ett giltigt sökbegrepp.',
    'Please provide a valid phone number.' => 'Ange ett giltigt telefonnummer.',
    'The checkbox has an invalid value.' => 'Kryssrutan har ett ogiltigt värde.',
    'Please enter a valid email address.' => 'Ange en giltig e-postadress.',
    'Please select a valid option.' => 'Välj ett alternativ.',
    'Please select a valid range.' => 'Välj ett intervall.',
    'Please enter a valid week.' => 'Ange en giltig vecka.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ett autentiseringsfel har inträffat.',
    'Authentication credentials could not be found.' => 'Uppgifterna för autentisering kunde inte hittas.',
    'Authentication request could not be processed due to a system problem.' => 'Autentiseringen kunde inte genomföras på grund av systemfel.',
    'Invalid credentials.' => 'Felaktiga uppgifter.',
    'Cookie has already been used by someone else.' => 'Cookien har redan använts av någon annan.',
    'Not privileged to request the resource.' => 'Saknar rättigheter för resursen.',
    'Invalid CSRF token.' => 'Ogiltig CSRF-token.',
    'No authentication provider found to support the authentication token.' => 'Ingen leverantör för autentisering hittades för angiven autentiseringstoken.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen session finns tillgänglig, antingen har den förfallit eller är cookies inte aktiverat.',
    'No token could be found.' => 'Ingen token kunde hittas.',
    'Username could not be found.' => 'Användarnamnet kunde inte hittas.',
    'Account has expired.' => 'Kontot har förfallit.',
    'Credentials have expired.' => 'Uppgifterna har förfallit.',
    'Account is disabled.' => 'Kontot är inaktiverat.',
    'Account is locked.' => 'Kontot är låst.',
    'Too many failed login attempts, please try again later.' => 'För många misslyckade inloggningsförsök, försök igen senare.',
    'Invalid or expired login link.' => 'Ogiltig eller utgången inloggningslänk.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'För många misslyckade inloggningsförsök, försök igen om %minutes% minut.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'För många misslyckade inloggningsförsök, försök igen om %minutes% minuter.',
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