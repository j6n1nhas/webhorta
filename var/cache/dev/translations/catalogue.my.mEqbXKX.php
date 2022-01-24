<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('my', array (
  'validators' => 
  array (
    'This value should be false.' => 'ဤတန်ဖိုးသည် false ဖြစ်ရမည်။',
    'This value should be true.' => 'ဤတန်ဖိုးသည် true ဖြစ်ရမည်။',
    'This value should be of type {{ type }}.' => 'ဤတန်ဖိုးသည် {{ type }} အမျိုးအစားဖြစ်ရမည်။ ',
    'This value should be blank.' => 'ဤတန်ဖိုးသည် ကွပ်လပ်မဖြစ်သင့်ပါ။',
    'The value you selected is not a valid choice.' => 'သင်ရွေးချယ်သောတန်ဖိုးသည် သင့်လျှော်သော် တန်ဖိုးမဟုတ်ပါ။',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'သင်သည် အနည်းဆုံးရွေးချယ်မှု {{ limit }} ခုရွေးချယ်ရမည်။',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'သင်သည်အများဆုံး {{ limit }} ခုသာရွေးချယ်ခွင့်ရှိသည်။',
    'One or more of the given values is invalid.' => 'ပေးထားသောတန်ဖိုးတစ်ခု (သို့မဟုတ်) တစ်ခုထက်ပို၍မမှန်ကန်ပါ။',
    'This field was not expected.' => 'ဤကွက်လပ်ကိုမမျှော်လင့်ထားပါ။',
    'This field is missing.' => 'ဤကွက်လပ်ကိုမမျှော်လင့်ထားပါ။',
    'This value is not a valid date.' => 'ဤတန်ဖိုးသည်မှန်ကန်သော်ရက်စွဲမဟုတ်ပါ။',
    'This value is not a valid datetime.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော် ရက်စွဲ/အချိန် မဟုတ်ပါ။',
    'This value is not a valid email address.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော် အီးမေးလိပ်စာ မဟုတ်ပါ။',
    'The file could not be found.' => 'ဖိုင်ရှာမတွေ့ပါ။',
    'The file is not readable.' => 'ဤဖိုင်ကို ဖတ်၍မရပါ။',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ဖိုင်အရွယ်အစား အလွန်ကြီးနေသည် ({{ size }} {{ suffix }}). ခွင့်ပြုထားသော အများဆုံး ဖိုင်ဆိုဒ်သည် {{ limit }} {{ suffix }} ဖြစ်သည်။',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'ဖိုင်၏ mime အမျိုးအစားမမှန်ကန်ပါ ({{ type }})။ ခွင့်ပြုထားသော mime အမျိုးအစားများမှာ {{ types }}.',
    'This value should be {{ limit }} or less.' => 'ဤတန်ဖိုးသည် {{ limit }} (သို့မဟုတ်) {{ limit }} ထက်နည်းသင့်သည်။',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'ဤတန်ဖိုးသည် အလွန်ရှည်လွန်းသည်။ ၎င်းတွင်အက္ခရာ {{ limit }} (သို့မဟုတ်) ၎င်းထက်နည်းသင့်သည်။ | ဤတန်ဖိုးသည် အလွန်ရှည်လွန်းသည်။ ၎င်းတွင်အက္ခရာ {{limit}} ခုနှင့်အထက်ရှိသင့်သည်။',
    'This value should be {{ limit }} or more.' => 'ဤတန်ဖိုးသည် {{limit}} (သို့မဟုတ်) ထို့ထက်ပိုသင့်သည်။',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'ဤတန်ဖိုးသည် အလွန်တိုလွန်းသည်။ ၎င်းတွင်အက္ခရာ {{limit}} (သို့မဟုတ်) ထို့ထက်ပိုရှိသင့်သည်။ | ဤတန်ဖိုးသည်တိုလွန်းသည်။ ၎င်းတွင်အက္ခရာ {{limit}} လုံးနှင့်အထက်ရှိသင့်သည်။',
    'This value should not be blank.' => 'ဤတန်ဖိုးသည်ကွက်လပ်မဖြစ်သင့်ပါ။',
    'This value should not be null.' => 'ဤတန်ဖိုးသည် null မဖြစ်သင့်ပါ။',
    'This value should be null.' => 'ဤတန်ဖိုးသည် null ဖြစ်သင့်သည်။',
    'This value is not valid.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောတန်ဖိုးမဟုတ်ပါ။',
    'This value is not a valid time.' => 'ဤတန်ဖိုးသည်မှန်ကန်သော အချိန်တန်ဖိုးမဟုတ်ပါ။',
    'This value is not a valid URL.' => 'ဤတန်ဖိုးသည်မှန်ကန်သော URL တန်ဖိုးမဟုတ်ပါ။',
    'The two values should be equal.' => 'တန်ဖိုးနှစ်ခုသည် တူညီသင့်သည်။',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ဤဖိုင်သည် အလွန်ကြီးသည်။ ခွင့်ပြုထားသည့်အများဆုံးဖိုင်အရွယ်အစားသည် {{ limit }} {{ suffix }} ဖြစ်သည်။',
    'The file is too large.' => 'ဤဖိုင်သည် အလွန်ကြီးသည်။',
    'The file could not be uploaded.' => 'ဤဖိုင်ကိုတင်၍မရပါ။',
    'This value should be a valid number.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောနံပါတ်ဖြစ်သင့်သည်။',
    'This file is not a valid image.' => 'ဤဖိုင်သည်မှန်ကန်သော ဓါတ်ပုံမဟုတ်ပါ။',
    'This is not a valid IP address.' => '၎င်းသည်တရားဝင် IP လိပ်စာမဟုတ်ပါ။',
    'This value is not a valid language.' => 'ဤတန်ဖိုးသည် မှန်ကန်သောဘာသာစကားမဟုတ်ပါ။',
    'This value is not a valid locale.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောဘာသာပြန်မဟုတ်ပါ။',
    'This value is not a valid country.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောနိုင်ငံမဟုတ်ပါ။',
    'This value is already used.' => 'ဤတန်ဖိုးသည် အသုံးပြုပြီးသားဖြစ်သည်။',
    'The size of the image could not be detected.' => 'ဓါတ်ပုံအရွယ်အစားကိုရှာမတွေ့ပါ။',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'ပုံ၏အလျားသည် ကြီးလွန်းသည် ({{ width }}px)။ ခွင့်ပြုထားသည့်အများဆုံးအလျားသည် {{max_width}}px ဖြစ်သည်။',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'ပုံ၏အလျားသည် သေးလွန်းသည် ({{ width }}px)။ ခွင့်ပြုထားသည့်အနည်းဆုံးအလျားသည် {{max_width}}px ဖြစ်သည်။',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'ပုံ၏အနံသည် ကြီးလွန်းသည် ({{ height }}px)။ ခွင့်ပြုထားသည့်အများဆုံးအနံသည် {{max_height}}px ဖြစ်သည်။',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'ပုံ၏အနံသည် သေးလွန်းသည် ({{ height }}px)။ ခွင့်ပြုထားသည့်အနည်းဆုံးအနံသည် {{min_height}}px ဖြစ်သည်။',
    'This value should be the user\'s current password.' => 'ဤတန်ဖိုးသည်အသုံးပြုသူ၏ လက်ရှိစကားဝှက်ဖြစ်သင့်သည်။',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'ဤတန်ဖိုးသည်စာလုံး {{limit}} အတိအကျရှိသင့်သည်။',
    'The file was only partially uploaded.' => 'ဤဖိုင်သည်တစ်စိတ်တစ်ပိုင်းသာ upload တင်ခဲ့သည်။',
    'No file was uploaded.' => 'မည်သည့် ဖိုင်မျှ upload မလုပ်ခဲ့ပါ။',
    'No temporary folder was configured in php.ini.' => 'php.ini တွင်ယာယီဖိုင်တွဲကိုပြင်ဆင်ထားခြင်းမရှိပါ၊',
    'Cannot write temporary file to disk.' => 'ယာရီဖိုင်ကို disk မရေးနိုင်ပါ။',
    'A PHP extension caused the upload to fail.' => 'PHP extension တစ်ခုကြောင့် upload တင်၍မရနိုင်ပါ။',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'ဤ collection တွင် {{limit}} element (သို့မဟုတ်) ထို့ထက်မပိုသင့်ပါ။',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'ဤ collection တွင် {{limit}} element (သို့မဟုတ်) ၎င်းထက်နည်းသင့်သည်။',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'ဤစုစည်းမှုတွင် {{limit}} element အတိအကျပါသင့်သည်။',
    'Invalid card number.' => 'ကဒ်နံပါတ်မမှန်ပါ။',
    'Unsupported card type or invalid card number.' => 'ကဒ်အမျိုးအစားမမှန်ပါ (သို့မဟုတ်) ကဒ်နံပါတ်မမှန်ပါ။',
    'This is not a valid International Bank Account Number (IBAN).' => 'ဤတန်ဖိုးသည် တရား၀င်နိုင်ငံတကာဘဏ်အကောင့်နံပါတ် (International Bank Account Number, IBAN) မဟုတ်ပါ။',
    'This value is not a valid ISBN-10.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော ISBN-10 တန်ဖိုးမဟုတ်ပါ၊',
    'This value is not a valid ISBN-13.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော ISBN-13 တန်ဖိုးမဟုတ်ပါ၊',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် ISBN-10 (သို့မဟုတ်) ISBN-13 တန်ဖိုးမဟုတ်ပါ၊',
    'This value is not a valid ISSN.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် ISSN တန်ဖိုးမဟုတ်ပါ။',
    'This value is not a valid currency.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် ငွေကြေးတန်ဖိုးမဟုတ်ပါ။',
    'This value should be equal to {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} နှင့်ညီသင့်သည်။',
    'This value should be greater than {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} ထက်ကြီးသင့်သည်။',
    'This value should be greater than or equal to {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} ထက်ကြီးသင့်သည် (သို့မဟုတ်) ဤတန်ဖိုးသည် {{ compared_value }} ညီသင့်သည်။ ',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value_type }} {{ compared_value }} နှင့်ထပ်တူညီမျှသင့်သည်။',
    'This value should be less than {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} ထက်မနဲသောတဲ့ တန်ဖိုးဖြစ်သင့်သည်။',
    'This value should be less than or equal to {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} ထက် မနည်းသောတန်ဖိုး (သို့မဟုတ်) ညီမျှသောတန်ဖိုးဖြစ်သင့်သည်။',
    'This value should not be equal to {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} နှင့်မညီသင့်ပါ။',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value_type }} {{ compared_value }} နှင့်ထပ်တူမညီမျှသင့်သည်။',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'ဤဓာတ်ပုံအချိုးအစားသည်အလွန်ကြီးလွန်းသည်။ ({{ ratio }})။ ခွင့်ပြုထားသောဓာတ်ပုံအချိုးအသားသည် {{ max_ratio }} ဖြစ်သည်။',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'ဤဓာတ်ပုံအချိုးအစားသည်အလွန်သေးလွန်းသည်။ ({{ ratio }})။ ခွင့်ပြုထားသောဓာတ်ပုံအချိုးအသားသည် {{ min_ratio }} ဖြစ်သည်။',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'ဤဓာတ်ပုံသည် စတုရန်းဖြစ်နေသည် ({{ width }}x{{ height }}px)။ စတုရန်းဓာတ်ပုံများကို ခွင့်မပြုပါ။',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'ဤဓာတ်ပုံသည် အလျှားလိုက်ဖြစ်နေသည် ({{ width }}x{{ height }}px). အလျှားလိုက်ဓာတ်ပုံများခွင့်မပြုပါ။',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'ဤဓာတ်ပုံသည် ဒေါင်လိုက်ဖြစ်နေသည် ({{ width }}x{{ height }}px). ဒေါင်လိုက်ဓာတ်ပုံများခွင့်မပြုပါ။',
    'An empty file is not allowed.' => 'ဖိုင်အလွတ်ကိုတင်ခွင့်မပြုပါ။',
    'The host could not be resolved.' => 'host ဖြေရှင်း၍မနိုင်ပါ။',
    'This value does not match the expected {{ charset }} charset.' => 'ဤတန်ဖိုးသည် မျှော်မှန်းထားသော {{ charset }} စားလုံးနှင့် ကိုက်ညီမှုမရှိပါ။',
    'This is not a valid Business Identifier Code (BIC).' => '၎င်းသည်မှန်ကန်သော Business Identifier Code (BIC) မဟုတ်ပါ။',
    'Error' => 'အမှား',
    'This is not a valid UUID.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် UUID မဟုတ်ပါ။',
    'This value should be a multiple of {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{compared_value}} ၏ စတူတန်ဖိုးဖြစ်သင့်သည်။',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'ဤ Business Identifier Code (BIC) သည် IBAN {{ iban }} နှင့်ဆက်စပ်မှုမရှိပါ။',
    'This value should be valid JSON.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် JSON တန်ဖိုးဖြစ်သင့်သည်။',
    'This collection should contain only unique elements.' => 'ဤ collection ကိုယ်ပိုင် elements များ ပါသင့်သည်။',
    'This value should be positive.' => 'ဤတန်ဖိုးသည် အပေါင်းဖြစ်သင့်သည်။',
    'This value should be either positive or zero.' => 'ဤတန်ဖိုးသည် အပေါင်း (သို့မဟုတ်) သုည ဖြစ်သင့်သည်။',
    'This value should be negative.' => 'ဤတန်ဖိုးသည် အနုတ် ဖြစ်သင့်သည်။',
    'This value should be either negative or zero.' => 'ဤတန်ဖိုးသည် အနုတ် (သို့မဟုတ်) သုည ဖြစ်သင့်သည်။',
    'This value is not a valid timezone.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော အချိန်ဇုန်မဟုတ်ပါ။',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'ဤစကားဝှက် သည် ဒေတာပေါက်ကြားမှုတစ်ခုဖြစ်ခဲ့သည်။ ဤစကား၀ှက်ကိုအသုံးမပြုရပါ။  ကျေးဇူးပြု၍ အခြားစကားဝှက်ကိုသုံးပါ။',
    'This value should be between {{ min }} and {{ max }}.' => 'ဤတန်ဖိုးသည် {{ min }} နှင့် {{ max }} ကြားရှိသင့်သည်။',
    'This value is not a valid hostname.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် hostname မဟုတ်ပါ။',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'ဤ collection တွင်ပါပါ၀င်သော elements အရေအတွက်သည် {{ compared_value }} ၏ စတူဖြစ်သင့်သည်။ ',
    'This value should satisfy at least one of the following constraints:' => 'ဤတန်ဖိုးသည် အောက်ပါကန့်သတ်ချက်များအနက်မှအနည်းဆုံးတစ်ခု ဖြည့်ဆည်းပေးသင့်သည်။',
    'Each element of this collection should satisfy its own set of constraints.' => 'ဤ collection ၏ element တစ်ခုစီသည်၎င်း၏ကိုယ်ပိုင်ကန့်သတ်ချက်များကိုဖြည့်ဆည်းသင့်သည်။',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် အပြည်ပြည်ဆိုင်ရာငွေချေးသက်သေခံနံပါတ် ,International Securities Identification Number (ISIN) မဟုတ်ပါ။',
    'This value should be a valid expression.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောစကားရပ်ဖြစ်သင့်သည်။',
    'This form should not contain extra fields.' => 'ဤ ဖောင်သည် field အပိုများ မပါ၀င်သင့်ပါ။',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Upload တင်သောဖိုင်သည်အလွန်ကြီးလွန်းသည်။ ကျေးဇူးပြု၍ သေးငယ်သည့်ဖိုင်ကိုတင်ရန်ကြိုးစားပါ။',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'သင့်လျှော်သော် CSRF တိုကင် မဟုတ်ပါ။ ကျေးဇူးပြု၍ဖောင်ကိုပြန်တင်ပါ။',
    'This value is not a valid HTML5 color.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် HTML5 အရောင်မဟုတ်ပါ။',
    'Please enter a valid birthdate.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောမွေးနေ့ကိုထည့်ပါ။',
    'The selected choice is invalid.' => 'သင့် ရွေးချယ်မှုသည်မမှန်ကန်ပါ။',
    'The collection is invalid.' => 'ဤ collection သည်သင့်လျှော်သော် collection မဟုတ်ပါ။',
    'Please select a valid color.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောအရောင်ကိုရွေးပါ။',
    'Please select a valid country.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောနိုင်ငံကိုရွေးပါ။',
    'Please select a valid currency.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောငွေကြေးကိုရွေးပါ။',
    'Please choose a valid date interval.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောနေ ရက်စွဲကိုရွေးပါ။',
    'Please enter a valid date and time.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောနေ ရက်စွဲနှင့်အချိန် ကိုထည့်ပါ။',
    'Please enter a valid date.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောနေ ရက်စွဲကိုထည့်ပါ။',
    'Please select a valid file.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောနေ ဖိုင်ကိုရွေးချယ်ပါ။',
    'The hidden field is invalid.' => 'မသင့် လျှော်သော် hidden field ဖြစ်နေသည်။',
    'Please enter an integer.' => 'ကျေးဇူးပြု၍ Integer တန်ဖိုးသာထည့်ပါ။',
    'Please select a valid language.' => 'ကျေးဇူးပြု၍ မှန်ကန်သော ဘာသာစကားကိုရွေးချယ်ပါ။',
    'Please select a valid locale.' => 'ကျေးဇူးပြု၍ မှန်ကန်သော locale ကိုရွေးချယ်ပါ။',
    'Please enter a valid money amount.' => 'ကျေးဇူးပြု၍ မှန်ကန်သော ပိုက်ဆံပမာဏ ကိုထည့်ပါ။',
    'Please enter a number.' => 'ကျေးဇူးပြု၍ မှန်ကန်သော နံပါတ် ကိုရွေးချယ်ပါ။',
    'The password is invalid.' => 'မှန်ကန်သောစကား၀ှက်မဟုတ်ပါ။',
    'Please enter a percentage value.' => 'ကျေးဇူးပြု၍ ရာခိုင်နှုန်းတန်ဖိုးထည့်ပါ။',
    'The values do not match.' => 'တန်ဖိုးများကိုက်ညီမှုမရှိပါ။',
    'Please enter a valid time.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောအချိန်ကိုထည့်ပါ။',
    'Please select a valid timezone.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောအချိန်ဇုန်ကိုရွေးပါ။',
    'Please enter a valid URL.' => 'ကျေးဇူးပြု၍ သင့်လျှော်သော် URL ကိုရွေးပါ။',
    'Please enter a valid search term.' => 'ကျေးဇူးပြု၍ သင့် လျှော်သော်ရှာဖွေမှု term များထည့်ပါ။',
    'Please provide a valid phone number.' => 'ကျေးဇူးပြု၍ သင့် လျှော်သော်ရှာဖွေမှု ဖုန်းနံပါတ်ထည့်ပါ။',
    'The checkbox has an invalid value.' => 'Checkbox တန်ဖိုးသည် မှန်ကန်မှုမရှိပါ။',
    'Please enter a valid email address.' => 'ကျေးဇူးပြု၍ မှန်ကန်သော် email လိပ်စာထည့်ပါ။',
    'Please select a valid option.' => 'ကျေးဇူးပြု၍ မှန်ကန်သော် ရွေးချယ်မှု ကိုရွေးပါ။',
    'Please select a valid range.' => 'ကျေးဇူးပြု၍ မှန်ကန်သော အပိုင်းအခြား ကိုရွေးပါ။',
    'Please enter a valid week.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောရက်သတ္တပတ်ကိုထည့်ပါ။',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'အသုံးပြုခွင့် ခြွင်းချက်တစ်ခုဖြစ်သွားသည်။',
    'Authentication credentials could not be found.' => 'အသုံးပြုခွင့် အထောက်အထားများ ရှာမတွေ့ပါ။',
    'Authentication request could not be processed due to a system problem.' => 'System ပြဿနာအခက်အခဲရှိ နေပါသဖြင့် အသုံးပြုခွင့်တောင်းဆိုချက်ကို ဆောင်ရွက်၍မရ နိုင်ပါ။',
    'Invalid credentials.' => 'သင့်လျှော်သော် အထောက်အထားမဟုတ်ပါ။',
    'Cookie has already been used by someone else.' => 'Cookie ကို တစ်စုံတစ်ယောက်မှ အသုံးပြုပြီးဖြစ်သည်။',
    'Not privileged to request the resource.' => 'အရင်းအမြစ်ကိုတောင်းဆိုရန်အခွင့်ထူးမရပါ။',
    'Invalid CSRF token.' => 'သင့်လျှော်သော် CSRF token မဟုတ်ပါ။',
    'No authentication provider found to support the authentication token.' => 'အထောက်အထားစိစစ်ခြင်းသင်္ကေတကိုပံ့ပိုးရန် မည်သည့်အထောက်အထားစိစစ်ရေး ၀န်ဆောင်မှုမှမတွေ့ပါ။',
    'No session available, it either timed out or cookies are not enabled.' => 'Session မအားလပ်ပါ။ Session အချိန်ကုန်သွားခြင်း (သို့မဟုတ်) cookies များကိုဖွင့်ထားခြင်းမရှိပါ။',
    'No token could be found.' => 'Toke  ရှာမတွေ့ပါ။',
    'Username could not be found.' => 'အသုံးပြုသူအမည် ရှာဖွေတွေ့ရှိချင်းမရှိပါ။',
    'Account has expired.' => 'အကောင့် သက်တမ်းကုန်လွန်သွားပါပြီ။',
    'Credentials have expired.' => 'အထောက်အထားသက်တန်း ကုန်လွန်သွားပါပြီ။',
    'Account is disabled.' => 'အကောင့်ပိတ်ထားပါသည်။',
    'Account is locked.' => 'အကောင့် လောခ်ကျသွားပါပြီ။',
    'Too many failed login attempts, please try again later.' => 'Login ၀င်ရန်ကြိုးစားမှုများလွန်းပါသည်၊ ကျေးဇူးပြု၍ နောက်မှထပ်ကြိုးစားပါ။',
    'Invalid or expired login link.' => 'မသင့်လျှော်သော် (သို့မဟုတ်) သက်တန်းကုန်သော login link ဖြစ်ပါသည်။',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Login ၀င်ရန်ကြိုးစားမှုများလွန်းပါသည်၊ ကျေးဇူးပြု၍ နောက် %minutes% မှထပ်မံကြိုးစားပါ။',
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
