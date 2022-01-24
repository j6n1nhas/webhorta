<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('uz', array (
  'validators' => 
  array (
    'This value should be false.' => 'Qiymat noto\'g\'ri bo\'lishi kerak.',
    'This value should be true.' => 'Qiymat to\'g\'ri bo\'lishi kerak.',
    'This value should be of type {{ type }}.' => 'Qiymat turi {{ type }} bo\'lishi kerak.',
    'This value should be blank.' => 'Qiymat bo\'sh bo\'lishi kerak.',
    'The value you selected is not a valid choice.' => 'Tanlangan qiymat to\'g\'ri emas.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Siz hech bo\'lmaganda {{ limit }} ta qiymat tanlashingiz kerak.|Siz kamida {{ limit }} ta qiymat tanlashingiz kerak.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Siz {{ limit }} ta qiymatni tanlashingiz kerak.|Siz {{ limit }} dan ortiq qiymat tanlashingiz kerak.',
    'One or more of the given values is invalid.' => 'Belgilangan qiymatlarning bir yoki bir nechtasi noto\'g\'ri.',
    'This field was not expected.' => 'Ushbu maydon kutilmagan edi.',
    'This field is missing.' => 'Bu maydon majvud emas.',
    'This value is not a valid date.' => 'Ushbu sana noto\'g\'ri.',
    'This value is not a valid datetime.' => 'Sana va vaqt qiymati noto\'g\'ri.',
    'This value is not a valid email address.' => 'Elektron pochta manzili noto\'g\'ri.',
    'The file could not be found.' => 'Fayl topilmadi.',
    'The file is not readable.' => 'Faylni o\'qib bo\'lmadi.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fayl hajmi katta ({{ size }} {{ suffix }}). Maksimal ruxsat etilgan hajim {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Faylning MIME turi noto\'g\'ri ({{ type }}). Ruxsat etilgan MIME turlar {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Qiymat {{ limit }} ga teng yoki kam bo\'lishi kerak.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Qiymat juda uzun. {{ limit }} ga teng yoki kam bo\'lishi kerak.|Qiymat juda uzun. {{ limit }} yoki undan kam belgidan iborat bo\'lishi kerak.',
    'This value should be {{ limit }} or more.' => 'Qiymat {{ limit }} yoki undan ortiq bo\'lishi kerak.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Qiymat juda qisqa. {{ limit }} ta yoki undan ortiq belgidan iborat bo\'lishi kerak.|Qiymat juda qisqa. {{ limit }} yoki undan ko\'p belgidan iborat bo\'lishi kerak',
    'This value should not be blank.' => 'Qiymatni bo\'sh kirtish mumkin emas.',
    'This value should not be null.' => 'Qiymat null bo\'lmasligi kerak.',
    'This value should be null.' => 'Qiymat null bo\'lishi kerak.',
    'This value is not valid.' => 'Qiymat noto\'g\'ri.',
    'This value is not a valid time.' => 'Vaqt noto\'g\'ri.',
    'This value is not a valid URL.' => 'URL noto\'g\'ri',
    'The two values should be equal.' => 'Ikkala qiymat ham bir xil bo\'lishi kerak.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fayl hajmi katta. Maksimal ruxsat berilgan hajim {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fayl hajmi katta.',
    'The file could not be uploaded.' => 'Faylni yuklab bo\'lmadi.',
    'This value should be a valid number.' => 'Qiymat raqam bo\'lishi kerak.',
    'This file is not a valid image.' => 'Fayl yaroqli rasm formati emas.',
    'This is not a valid IP address.' => 'Ip manzil noto\'g\'ri.',
    'This value is not a valid language.' => 'Noto\'g\'ri til.',
    'This value is not a valid locale.' => 'Ushbu qiymat mahalliy qiymat emas.',
    'This value is not a valid country.' => 'Mamlakat qiymati noto\'g\'ri.',
    'This value is already used.' => 'Ushbu qiymat allaqachon ishlatilgan.',
    'The size of the image could not be detected.' => 'Rasm o\'lchamini aniqlab bo\'lmadi.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Rasm kengligi juda katta ({{ width }}px). Maksimal ruxsat etilgan kenglik {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Rasm kengligi juda kichkina ({{ width }}px). Minimal ruxsat etilgan kenglik {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Rasm bo\'yi juda katta ({{ height }}px). Maksimal ruxsat etilgan balandlik {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Rasm bo\'yi juda kichkina ({{ height }}px). Minimal ruxsat etilgan balandlik {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Qiymat joriy foydalanuvchi paroli bo\'lishi kerak.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Qiymat {{ limit }} ta belgidan iborat bo\'lishi kerak.|Qiymat {{ limit }} belgidan iborat bo\'lishi kerak.',
    'The file was only partially uploaded.' => 'Fayl faqat qisman yuklangan.',
    'No file was uploaded.' => 'Fayl yuklanmagan.',
    'No temporary folder was configured in php.ini.' => 'php.ini da vaqtinchalik katalog sozlanmagan.',
    'Cannot write temporary file to disk.' => 'Diskka vaqtinchalik faylni yozib bo\'lmadi.',
    'A PHP extension caused the upload to fail.' => 'PHP kengaytmasi yuklash paytida xatolik yuz berdi.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ushbu to\'plam {{ limit }} ta yoki undan ko\'p narsalarni o\'z ichiga olishi kerak.|Ushbu to\'plam {{ limit }} yoki undan ortiq narsalarni o\'z ichiga olishi kerak.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ushbu to\'plam {{ limit }} ta yoki undan kam narsalarni o\'z ichiga olishi kerak.|Ushbu to\'plamda {{ limit }} yoki undan kam element bo\'lishi kerak.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ushbu to\'plam to\'liq {{ limit }} narsani o\'z ichiga olishi kerak.|Ushbu to\'plamda to\'liq {{ limit }} ta ma\'lumotlar bo\'lishi kerak.',
    'Invalid card number.' => 'Kata raqami noto\'g\'ri.',
    'Unsupported card type or invalid card number.' => 'Qo\'llab-quvvatlanmaydigan karta turi yoki yaroqsiz karta raqami.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Qiymat haqiqiy xalqaro hisob raqamining raqami (IBAN) emas.',
    'This value is not a valid ISBN-10.' => 'Qiymat to\'g\'ri ISBN-10 formatida emas.',
    'This value is not a valid ISBN-13.' => 'Qiymat to\'g\'ri ISBN-13 formatida emas.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Qiymat ISBN-10 va ISBN-13 formatlariga mos kelmaydi.',
    'This value is not a valid ISSN.' => 'Qiymat ISSN formatiga mos kelmaydi.',
    'This value is not a valid currency.' => 'Noto\'g\'ri valyuta formati.',
    'This value should be equal to {{ compared_value }}.' => 'Qiymat {{ compared_value }} ga teng bo\'lishi shart.',
    'This value should be greater than {{ compared_value }}.' => 'Qiymat {{ compared_value }} dan katta bo\'lishi shart.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Qiymat {{ compared_value }} dan katta yoki teng bo\'lishi shart.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значение должно быть идентичным {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Qiymat bir xil bo\'lishi kerak {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Qiymat {{ compared_value }} dan kichik yoki teng bo\'lishi shart.',
    'This value should not be equal to {{ compared_value }}.' => 'Qiymat {{ compared_value }} ga teng bo\'lmasligi kerak.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Qiymat bir xil bo\'lishi kerak emas {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Rasmning tomonlari nisbati juda katta ({{ ratio }}). Maksimal tomonlar nisbati {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Rasmning format nisbati juda kichik ({{ ratio }}). Minimal tomonlar nisbati {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Rasm kvadrat shaklida ({{ width }}x{{ height }}px). Kvadrat shaklida tasvirlarga ruxsat berilmaydi.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Landshaft tasvir ({{ width }}x{{ height }}px). Landshaft rasmlarga ruxsat berilmaydi.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Portret rasm ({{ width }}x{{ height }}px). Portretlarga ruxsat berilmaydi.',
    'An empty file is not allowed.' => 'Bo\'sh fayllarga ruxsat berilmagan.',
    'The host could not be resolved.' => 'Xost nomini nomiga ruxsat berilmagan.',
    'This value does not match the expected {{ charset }} charset.' => 'Qiymat kutilgan {{ charset }} kodlashiga mos kelmaydi.',
    'This is not a valid Business Identifier Code (BIC).' => 'Qiymat BIC formatida emas.',
    'Error' => 'Xatolik',
    'This is not a valid UUID.' => 'Qiymat UUID formatida emas.',
    'This value should be a multiple of {{ compared_value }}.' => 'Qiymat {{ compared_value }} ning ko\'paytmasi bo\'lishi kerak.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ushbu BIC IBAN {{ iban }} bilan bog\'liq emas..',
    'This value should be valid JSON.' => 'Qiymat to\'g\'ri JSON bo\'lishi kerak.',
    'This collection should contain only unique elements.' => 'Ushbu kolleksiyada takroriy elementlar bo\'lmasligi kerak.',
    'This value should be positive.' => 'Qiymat musbat bo\'lishi kerak.',
    'This value should be either positive or zero.' => 'Qiymat musbat yoki 0 ga teng bo\'lishi kerak.',
    'This value should be negative.' => 'Qiymat manfiy bo\'lishi kerak.',
    'This value should be either negative or zero.' => 'Qiymat manfiy yoki 0 ga teng bo\'lishi kerak.',
    'This value is not a valid timezone.' => 'Qiymat to\'g\'ri vaqt zonasi emas.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ushbu parol ma\'lumotlarning tarqalishi tufayli buzilgan va uni ishlatmaslik kerak. Boshqa paroldan foydalaning.',
    'This value should be between {{ min }} and {{ max }}.' => 'Qiymat {{ min }} va {{ max }} oralig\'ida bo\'lishi shart.',
    'This value is not a valid hostname.' => 'Qiymat to\'g\'ri xost nomi emas.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Ushbu to\'plamdagi narsalar soni {{ compared_value }} dan ko\'p bo\'lishi kerak.',
    'This value should satisfy at least one of the following constraints:' => 'Qiymat quyidagi cheklovlardan kamida bittasiga javob berishi kerak:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Ushbu to\'plamdagi har bir narsa o\'ziga xos cheklovlarni qondirishi kerak.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Qiymat Qimmatli qog\'ozlarning xalqaro identifikatsiya raqami (ISIN) ga mos emas.',
    'This value should be a valid expression.' => 'Ushbu qiymat to\'g\'ri ifoda bo\'lishi kerak.',
    'This value is not a valid CSS color.' => 'Bu qiymat haqiqiy CSS rangi emas.',
    'This value is not a valid CIDR notation.' => 'Qiymat CIDR belgisiga mos kelmaydi.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Tarmoq niqobining qiymati {{ min }} va {{ max }} oralig\'ida bo\'lishi kerak.',
    'This form should not contain extra fields.' => 'Ushbu fo\'rmada qo\'shimcha maydonlar bo\'lmasligi kerak.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Yuklab olingan fayl juda katta. Iltimos, kichikroq faylni yuklashga harakat qiling.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF qiymati yaroqsiz. Fo\'rmani qayta yuborishga harakat qiling.',
    'This value is not a valid HTML5 color.' => 'Qiymat noto\'g\'ri, HTML5 rangi emas.',
    'Please enter a valid birthdate.' => 'Iltimos, tug\'ilgan kuningizni to\'g\'ri kiriting.',
    'The selected choice is invalid.' => 'Tanlangan parametr noto\'g\'ri.',
    'The collection is invalid.' => 'Kolleksiya noto\'g\'ri',
    'Please select a valid color.' => 'Iltimos, to\'g\'ri rang tanlang.',
    'Please select a valid country.' => 'Iltimos, to\'g\'ri mamlakatni tanlang.',
    'Please select a valid currency.' => 'Iltimos, to\'g\'ri valyutani tanlang.',
    'Please choose a valid date interval.' => 'Iltimos, to\'g\'ri sana oralig\'ini tanlang.',
    'Please enter a valid date and time.' => 'Iltimos, to\'g\'ri sana va vaqtni kiriting.',
    'Please enter a valid date.' => 'Iltimos, to\'g\'ri sanani kiriting.',
    'Please select a valid file.' => 'Iltimos, to\'g\'ri faylni tanlang.',
    'The hidden field is invalid.' => 'Yashirin maydon qiymati yaroqsiz.',
    'Please enter an integer.' => 'Iltimos, butun son kiriting.',
    'Please select a valid language.' => 'Iltimos, to\'g\'ri tilni tanlang.',
    'Please select a valid locale.' => 'Iltimos, to\'g\'ri localni tanlang.',
    'Please enter a valid money amount.' => 'Iltimos, tegishli miqdordagi pulni kiriting.',
    'Please enter a number.' => 'Iltimos, raqam kiriting.',
    'The password is invalid.' => 'Parol noto\'g\'ri.',
    'Please enter a percentage value.' => 'Iltimos, foyizli qiymat kiriting.',
    'The values do not match.' => 'Qiymatlar mos kelmaydi.',
    'Please enter a valid time.' => 'Iltimos, to\'g\'ri vaqtni tanlang.',
    'Please select a valid timezone.' => 'Iltimos, to\'g\'ri vaqt zonasini tanlang.',
    'Please enter a valid URL.' => 'Iltimos, to\'g\'ri URL kiriting.',
    'Please enter a valid search term.' => 'Iltimos, to\'g\'ri qidiruv so\'zini kiriting.',
    'Please provide a valid phone number.' => 'Iltimos, to\'g\'ri telefon raqamini kiriting.',
    'The checkbox has an invalid value.' => 'Belgilash katagida yaroqsiz qiymat mavjud.',
    'Please enter a valid email address.' => 'Iltimos, to\'g\'ri email kiriting.',
    'Please select a valid option.' => 'Iltimos, yaroqli variantni tanlang.',
    'Please select a valid range.' => 'Iltimos, yaroqli oraliqni tanlang.',
    'Please enter a valid week.' => 'Iltimos, haqiqiy haftani kiriting.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Autentifikatsiyada xatolik.',
    'Authentication credentials could not be found.' => 'Autentifikatsiya ma\'lumotlari topilmadi.',
    'Authentication request could not be processed due to a system problem.' => 'Tizimdagi muammo tufayli autentifikatsiya so\'rovi bajarilmadi.',
    'Invalid credentials.' => 'Noto\'g\'ri ma\'lumot.',
    'Cookie has already been used by someone else.' => 'Cookie faylini allaqachon kimdir ishlatgan.',
    'Not privileged to request the resource.' => 'Sizda ushbu manbani talab qilishga ruxsat yo\'q..',
    'Invalid CSRF token.' => 'Noto\'g\'ri CSRF belgisi.',
    'No authentication provider found to support the authentication token.' => 'Haqiqiylikni tasdiqlovchi belgini qo\'llab-quvvatlovchi biron bir autentifikatsiya provayderi topilmadi.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sessiya topilmadi, muddati tugamadi yoki cookie-fayllar yoqilmagan.',
    'No token could be found.' => 'To\'ken topilmadi.',
    'Username could not be found.' => 'Foydalanuvchi nomi topilmadi.',
    'Account has expired.' => 'Akkunt muddati tugagan.',
    'Credentials have expired.' => 'Autentifikatsiya ma\'lumotlari muddati tugagan.',
    'Account is disabled.' => 'Akkunt o\'chirilgan.',
    'Account is locked.' => 'Akkunt bloklangan.',
    'Too many failed login attempts, please try again later.' => 'Kirish urinishlari muvaffaqiyatsiz tugadi, keyinroq qayta urinib ko\'ring.',
    'Invalid or expired login link.' => 'Kirish havolasi yaroqsiz yoki muddati tugagan.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Kirish uchun muvaffaqiyatsiz urinishlar, %minutes% daqiqadan so\'ng qayta urinib ko\'ring.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Kirish uchun muvaffaqiyatsiz urinishlar, %minutes% daqiqadan so\'ng qayta urinib ko\'ring.',
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