<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fa', array (
  'validators' => 
  array (
    'This value should be false.' => 'این مقدار باید نادرست (False) باشد.',
    'This value should be true.' => 'این مقدار باید درست (True) باشد.',
    'This value should be of type {{ type }}.' => 'این مقدار باید از نوع {{ type }} باشد.',
    'This value should be blank.' => 'این مقدار باید خالی باشد.',
    'The value you selected is not a valid choice.' => 'مقدار انتخاب شده یک گزینه معتبر نمی‌باشد.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'شما باید حداقل {{ limit }} گزینه انتخاب نمایید.|شما باید حداقل {{ limit }} گزینه انتخاب نمایید.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'شما باید حداکثر {{ limit }} گزینه انتخاب نمایید.|شما باید حداکثر {{ limit }} گزینه انتخاب نمایید.',
    'One or more of the given values is invalid.' => 'یک یا چند مقدار داده شده نامعتبر است.',
    'The fields {{ fields }} were not expected.' => 'فیلدهای {{ fields }} مورد انتظار نبود.',
    'The fields {{ fields }} are missing.' => 'فیلدهای {{ fields }} مفقود شده اند.',
    'This value is not a valid date.' => 'این مقدار یک تاریخ معتبر نمی‌باشد.',
    'This value is not a valid datetime.' => 'این مقدار یک تاریخ و زمان معتبر نمی‌باشد.',
    'This value is not a valid email address.' => 'این یک آدرس رایانامه (ایمیل) معتبر نمی‌باشد.',
    'The file could not be found.' => 'فایل یافت نشد.',
    'The file is not readable.' => 'فایل قابل خواندن نیست.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'فایل بیش از اندازه بزرگ است({{ size }} {{ suffix }}). بیشینه (حداکثر) اندازه مجاز برابر با {{ limit }} {{ suffix }} می‌باشد.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'نوع mime این فایل نامعتبر است({{ type }}). انواع mime مجاز {{ types }} هستند.',
    'This value should be {{ limit }} or less.' => 'این مقدار باید کوچکتر و یا مساوی {{ limit }} باشد.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'این مقدار بسیار طولانی است. باید دارای {{limit}} کاراکتر یا کمتر باشد. | این مقدار بسیار طولانی است. باید دارای {{limit}} کاراکتر یا کمتر باشد.',
    'This value should be {{ limit }} or more.' => 'این مقدار باید بزرگتر و یا مساوی {{ limit }} باشد.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'این مقدار بیش از اندازه کوتاه است. باید {{ limit }} کاراکتر یا بیشتر داشته باشد.|این مقدار بیش از اندازه کوتاه است. باید {{ limit }} کاراکتر یا بیشتر داشته باشد.',
    'This value should not be blank.' => 'این مقدار نباید خالی باشد.',
    'This value should not be null.' => 'این مقدار نباید خالی باشد.',
    'This value should be null.' => 'این مقدار باید خالی باشد.',
    'This value is not valid.' => 'این مقدار معتبر نمی‌باشد.',
    'This value is not a valid time.' => 'این مقدار یک زمان معتبر نمی‌باشد.',
    'This value is not a valid URL.' => 'این مقدار شامل یک URL معتبر نمی‌باشد.',
    'The two values should be equal.' => 'دو مقدار باید با یکدیگر برابر باشند.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'فایل بیش از اندازه بزرگ است. بیشینه (حداکثر) اندازه مجاز {{ limit }} {{ suffix }} است.',
    'The file is too large.' => 'فایل بیش از اندازه بزرگ است.',
    'The file could not be uploaded.' => 'بارگذاری فایل با شکست مواجه گردید.',
    'This value should be a valid number.' => 'این مقدار باید یک عدد معتبر باشد.',
    'This file is not a valid image.' => 'این فایل یک تصویر معتبر نمی‌باشد.',
    'This is not a valid IP address.' => 'این آدرس IP معتبر نیست.',
    'This value is not a valid language.' => 'این مقدار یک زبان معتبر نمی‌باشد.',
    'This value is not a valid locale.' => 'این مقدار یک محل (locale) معتبر نمی‌باشد.',
    'This value is not a valid country.' => 'این مقدار یک کشور معتبر نمی‌باشد.',
    'This value is already used.' => 'این مقدار قبلاً استفاده شده است.',
    'The size of the image could not be detected.' => 'اندازه تصویر قابل شناسایی نمی‌باشد.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'عرض تصویر بسیار بزرگ است({{ width }}px). بیشینه (حداکثر) عرض مجاز {{ max_width }}px می‌باشد.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'عرض تصویر بسیار کوچک است({{ width }}px). کمینه (حداقل) عرض مورد انتظار {{ min_width }}px می‌باشد.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'ارتفاع تصویر بسیار بزرگ است({{ height }}px). بیشینه (حداکثر) ارتفاع مجاز {{ max_height }}px می‌باشد.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'ارتفاع تصویر بسیار کوچک است({{ height }}px). کمینه (حداقل) ارتفاع مورد انتظار {{ min_height }}px می‌باشد.',
    'This value should be the user\'s current password.' => 'این مقدار باید رمزعبور فعلی کاربر باشد.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => ' این مقدار باید دقیقا {{ limit }} کاراکتر داشته باشد.| این مقدار باید دقیقا {{ limit }} کاراکتر داشته باشد.',
    'The file was only partially uploaded.' => 'فایل به صورت جزئی بارگذاری گردیده است.',
    'No file was uploaded.' => 'هیچ فایلی بارگذاری نشد.',
    'No temporary folder was configured in php.ini.' => 'پوشه موقتی در php.ini پیکربندی نگردیده است.',
    'Cannot write temporary file to disk.' => 'فایل موقتی را نمی‌توان در دیسک نوشت.',
    'A PHP extension caused the upload to fail.' => 'یک افزونه PHP باعث شد بارگذاری ناموفق باشد.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'این مجموعه باید حاوی {{ limit }} عنصر یا بیشتر باشد.|این مجموعه باید حاوی {{ limit }} عنصر یا بیشتر باشد.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'این مجموعه باید حاوی {{ limit }} عنصر یا کمتر باشد.|این مجموعه باید حاوی {{ limit }} عنصر یا کمتر باشد.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'این مجموعه باید دقیقا حاوی {{ limit }} عنصر باشد.|این مجموعه باید دقیقا حاوی {{ limit }} عنصر باشد.',
    'Invalid card number.' => 'شماره کارت نامعتبر است.',
    'Unsupported card type or invalid card number.' => 'نوع کارت پشتیبانی نمی‌شود و یا شماره کارت نامعتبر می‌باشد.',
    'This is not a valid International Bank Account Number (IBAN).' => 'این یک شماره حساب بانک بین المللی معتبر نمی‌باشد(IBAN).',
    'This value is not a valid ISBN-10.' => 'این مقدار یک ISBN-10 معتبر نمی‌باشد.',
    'This value is not a valid ISBN-13.' => 'این مقدار یک ISBN-13 معتبر نمی‌باشد.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'این مقدار یک ISBN-10 معتبر و یا ISBN-13 معتبر نمی‌باشد.',
    'This value is not a valid ISSN.' => 'این مقدار یک ISSN معتبر نمی‌باشد.',
    'This value is not a valid currency.' => 'این مقدار یک واحد پول معتبر نمی‌باشد.',
    'This value should be equal to {{ compared_value }}.' => 'این مقدار باید برابر با {{ compared_value }} باشد.',
    'This value should be greater than {{ compared_value }}.' => 'این مقدار باید از {{ compared_value }} بیشتر باشد.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'این مقدار باید بزرگتر و یا مساوی با {{ compared_value }} باشد.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'این مقدار باید برابر {{ compared_value_type }} {{ compared_value }} باشد.',
    'This value should be less than {{ compared_value }}.' => 'این مقدار باید کمتر از {{ compared_value }} باشد.',
    'This value should be less than or equal to {{ compared_value }}.' => 'این مقدار باید کمتر و یا مساوی با {{ compared_value }} باشد.',
    'This value should not be equal to {{ compared_value }}.' => 'این مقدار نباید با {{ compared_value }} برابر باشد.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'این مقدار نباید برابر {{ compared_value_type }} {{ compared_value }} باشد.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'ابعاد ({{ ratio }}) عکس بیش از حد بزرگ است. بیشینه (حداکثر) ابعاد مجاز {{ max_ratio }} می‌باشد.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'ابعاد ({{ ratio }}) عکس بیش از حد کوچک است. کمینه (حداقل) ابعاد مورد انتظار {{ min_ratio }} می‌باشد.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'این تصویر یک مربع ({{ width }}x{{ height }}px) می‌باشد. تصاویر مربع شکل مجاز نمی‌باشند.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'این تصویر افقی ({{ width }}x{{ height }}px) می‌باشد. تصاویر افقی مجاز نمی‌باشند.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'این تصویر عمودی ({{ width }}x{{ height }}px) می‌باشد. تصاویر عمودی مجاز نمی‌باشند.',
    'An empty file is not allowed.' => 'فایل خالی مجاز نمی‌باشد.',
    'The host could not be resolved.' => 'میزبان (Host) شناسایی نشد.',
    'This value does not match the expected {{ charset }} charset.' => 'این مقدار مطابق charset مورد انتظار {{ charset }} نمی باشد.',
    'This is not a valid Business Identifier Code (BIC).' => 'این مقدار یک کد شناسایی کسب‌و‌کار معتبر (BIC) نیست.',
    'Error' => 'خطا',
    'This is not a valid UUID.' => 'این مقدار یک UUID معتبر نمی‌باشد.',
    'This value should be a multiple of {{ compared_value }}.' => 'این مقدار باید چند برابر {{ compared_value }} باشد.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'این کد شناسایی کسب‌و‌کار (BIC) با شماره حساب بانکی بین‌المللی (IBAN) {{ iban }} مرتبط نیست.',
    'This value should be valid JSON.' => 'این مقدار باید یک JSON معتبر باشد.',
    'This collection should contain only unique elements.' => 'این مجموعه باید فقط حاوی عناصر یکتا باشد.',
    'This value should be positive.' => 'این مقدار باید مثبت باشد.',
    'This value should be either positive or zero.' => 'این مقدار باید مثبت یا صفر باشد.',
    'This value should be negative.' => 'این مقدار باید منفی باشد.',
    'This value should be either negative or zero.' => 'این مقدار باید منفی یا صفر باشد.',
    'This value is not a valid timezone.' => 'این مقدار یک منطقه‌زمانی (timezone) معتبر نیست.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'این رمزعبور در یک رخنه‌ی اطلاعاتی نشت کرده است. لطفاً از یک رمزعبور دیگر استفاده کنید.',
    'This value should be between {{ min }} and {{ max }}.' => 'این مقدار باید بین {{ min }} و {{ max }} باشد',
    'This value is not a valid hostname.' => 'این مقدار یک hostname معتبر نیست.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'تعداد عناصر این مجموعه باید ضریبی از {{ compared_value }} باشد.',
    'This value should satisfy at least one of the following constraints:' => 'این مقدار باید حداقل یکی از محدودیت‌های زیر را ارضا کند:',
    'Each element of this collection should satisfy its own set of constraints.' => 'هر یک از عناصر این مجموعه باید دسته محدودیت‌های خودش را ارضا کند.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'این مقدار یک شماره شناسایی بین‌المللی اوراق بهادار (ISIN) معتبر نیست.',
    'This value should be a valid expression.' => 'این مقدار باید یک عبارت معتبر باشد.',
    'This value is not a valid CSS color.' => 'این مقدار یک رنگ معتبر در CSS نیست.',
    'This value is not a valid CIDR notation.' => 'این مقدار یک نماد معتبر در CIDR نیست.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'مقدار ماسک شبکه (NetMask) باید بین {{ min }} و {{ max }} باشد.',
    'This form should not contain extra fields.' => 'این فرم نباید شامل فیلدهای اضافی باشد.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'فایل بارگذاری‌شده بسیار بزرگ است. لطفاً فایل کوچک‌تری را بارگذاری نمایید.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'توکن CSRF نامعتبر است. لطفاً فرم را مجدداً ارسال نمایید.',
    'This value is not a valid HTML5 color.' => 'این مقدار یک رنگ معتبر HTML5  نیست.',
    'Please enter a valid birthdate.' => 'لطفاً یک تاریخ تولد معتبر وارد نمایید.',
    'The selected choice is invalid.' => 'گزینه‌ی انتخاب‌شده نامعتبر است.',
    'The collection is invalid.' => 'این مجموعه نامعتبر است.',
    'Please select a valid color.' => 'لطفاً یک رنگ معتبر انتخاب کنید.',
    'Please select a valid country.' => 'لطفاً یک کشور معتبر انتخاب کنید.',
    'Please select a valid currency.' => 'لطفاً یک واحد پول معتبر انتخاب کنید.',
    'Please choose a valid date interval.' => 'لطفاً یک بازه‌ی زمانی معتبر انتخاب کنید.',
    'Please enter a valid date and time.' => 'لطفاً یک تاریخ و زمان معتبر وارد کنید.',
    'Please enter a valid date.' => 'لطفاً یک تاریخ معتبر وارد کنید.',
    'Please select a valid file.' => 'لطفاً یک فایل معتبر انتخاب کنید.',
    'The hidden field is invalid.' => 'فیلد مخفی نامعتبر است.',
    'Please enter an integer.' => 'لطفاً یک عدد صحیح وارد کنید.',
    'Please select a valid language.' => 'لطفاً یک زبان معتبر انتخاب کنید.',
    'Please select a valid locale.' => 'لطفاً یک منطقه‌جغرافیایی (locale) معتبر انتخاب کنید.',
    'Please enter a valid money amount.' => 'لطفاً یک مقدار پول معتبر وارد کنید.',
    'Please enter a number.' => 'لطفاً یک عدد وارد کنید.',
    'The password is invalid.' => 'رمزعبور نامعتبر است.',
    'Please enter a percentage value.' => 'لطفاً یک درصد معتبر وارد کنید.',
    'The values do not match.' => 'مقادیر تطابق ندارند.',
    'Please enter a valid time.' => 'لطفاً یک زمان معتبر وارد کنید.',
    'Please select a valid timezone.' => 'لطفاً یک منطقه‌زمانی معتبر وارد کنید.',
    'Please enter a valid URL.' => 'لطفاً یک URL معتبر وارد کنید.',
    'Please enter a valid search term.' => 'لطفاً یک عبارت جستجوی معتبر وارد کنید.',
    'Please provide a valid phone number.' => 'لطفاً یک شماره تلفن معتبر وارد کنید.',
    'The checkbox has an invalid value.' => 'کادر انتخاب (checkbox) دارای مقداری نامعتبر است.',
    'Please enter a valid email address.' => 'لطفاً یک آدرس رایانامه (ایمیل) معتبر وارد کنید.',
    'Please select a valid option.' => 'لطفاً یک گزینه‌ی معتبر انتخاب کنید.',
    'Please select a valid range.' => 'لطفاً یک محدوده‌ی معتبر انتخاب کنید.',
    'Please enter a valid week.' => 'لطفاً یک هفته‌ی معتبر وارد کنید.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'خطایی هنگام احراز هویت رخ داده است.',
    'Authentication credentials could not be found.' => 'شرایط احراز هویت یافت نشد.',
    'Authentication request could not be processed due to a system problem.' => 'درخواست احراز هویت به دلیل  وجود مشکل در سیستم قابل پردازش نمی باشد.',
    'Invalid credentials.' => 'احراز هویت نامعتبر می باشد.',
    'Cookie has already been used by someone else.' => 'Cookie قبلا توسط شخص دیگری استفاده گردیده است.',
    'Not privileged to request the resource.' => 'دسترسی لازم برای درخواست از این منبع را دارا نمی باشید.',
    'Invalid CSRF token.' => 'توکن CSRF معتبر نمی باشد.',
    'No authentication provider found to support the authentication token.' => 'هیچ ارائه دهنده احراز هویتی برای پشتیبانی از توکن احراز هویت پیدا نشد.',
    'No session available, it either timed out or cookies are not enabled.' => 'هیچ جلسه‌ای در دسترس نمی باشد. این میتواند به دلیل پایان یافتن زمان و یا فعال نبودن کوکی ها باشد.',
    'No token could be found.' => 'هیچ توکنی پیدا نشد.',
    'Username could not be found.' => 'نام ‌کاربری پیدا نشد.',
    'Account has expired.' => 'حساب کاربری منقضی گردیده است.',
    'Credentials have expired.' => 'مجوزهای احراز هویت منقضی گردیده‌اند.',
    'Account is disabled.' => 'حساب کاربری غیرفعال می باشد.',
    'Account is locked.' => 'حساب کاربری قفل گردیده است.',
    'Too many failed login attempts, please try again later.' => 'تلاش‌های ناموفق زیادی برای ورود صورت گرفته است، لطفاً بعداً دوباره امتحان کنید.',
    'Invalid or expired login link.' => 'لینک ورود نامعتبر یا تاریخ‌گذشته است.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'تلاش‌های ناموفق زیادی برای ورود صورت گرفته است، لطفاً %minutes% دقیقه دیگر دوباره امتحان کنید.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'تلاش‌های ناموفق زیادی برای ورود صورت گرفته است، لطفاً %minutes% دقیقه دیگر دوباره امتحان کنید.',
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
