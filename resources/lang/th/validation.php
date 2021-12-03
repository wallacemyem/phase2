<?php 

return [
    'accepted' => ':attribute ต้องได้รับการยอมรับ',
    'active_url' => 'ลิงค์ URL :attribute ไม่ถูกต้อง',
    'after' => 'วันที่ของ :attribute ต้องเป็นวันที่หลังจาก :date',
    'after_or_equal' => 'วันที่ของ :attribute ต้องเป็นวันที่หลังจากหรือตรงกับ :date ',
    'alpha' => ':attribute ควรจะมีแต่ตัวอักษร',
    'alpha_dash' => ':attribute ควรจะมีแต่หมายเลข เครื่องหมาย และตัวอักษร',
    'alpha_num' => ':attribute ควรจะมีแต่หมายเลขและตัวอักษร',
    'array' => ':attribute ต้องเป็นแถว',
    'before' => 'วันที่ของ :attribute ต้องเป็นวันที่ก่อน :date',
    'before_or_equal' => 'วันที่ของ :attribute ต้องเป็นวันที่ก่อนหรือตรงกับ :date',
    'between' => [
        'numeric' => ':attribute ต้องอยู่ระหว่าง :min และ :max',
        'file' => 'ขนาดไฟล์ของ :attribute ต้องอยู่ระหว่าง :min และ :max กิโลไบต์',
        'string' => ':attribute ต้องมีอักขระไม่ต่ำกว่า :min ตัวและไม่เกิน :max ตัว',
        'array' => ':attribute ต้องมีรายการไม่ต่ำกว่า :min อันและไม่เกิน :max อัน',
    ],
    'boolean' => 'ค่า :attribute มีเพียง true หรือ false',
    'confirmed' => 'การยืนยัน :attribute ไม่ถูกต้อง',
    'date' => 'วันที่ของ :attribute ไม่ถูกต้อง',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'รูปแบบไฟล์ของ :attribute ไม่ตรงกับ :format',
    'different' => ':attribute และ :other ต้องแตกต่างกัน',
    'digits' => ':attribute ต้องเป็นหมายเลข :digits ตัว',
    'digits_between' => ':attribute ต้องเป็นหมายเลขไม่ต่ำกว่า :min และไม่เกิน :max ตัว',
    'dimensions' => 'มิติรูปของ :attribute ไม่ถูกต้อง',
    'distinct' => 'ค่าของ :attribute ซ้ำกัน',
    'email' => 'ที่อยู่อีเมลของ :attribute ต้องถูกต้อง',
    'exists' => ':attribute ที่เลือกไม่ถูกต้อง',
    'file' => ':attibute ต้องเป็นไฟล์เท่านั้น',
    'filled' => ':attribute ต้องมีค่าจำนวน',
    'image' => ':attribute ต้องเป็นรูป',
    'in' => ':attribute ที่เลือกไม่ถูกต้อง',
    'in_array' => 'ข้อมูล :attribute ไม่มีใน :other',
    'integer' => ':attribute ต้องเป็นจำนวนเต็ม',
    'ip' => 'IP address ของ :attribute ต้องถูกต้อง',
    'json' => ':attribute ต้องมีค่า JSON string ที่ถูกต้อง',
    'max' => [
        'numeric' => ':attribute อาจจะไม่ใหญ่กว่า :max',
        'file' => 'ขนาดไฟล์ของ :attribute ไม่ใหญ่กว่า :max กิโลไบต์',
        'string' => ':attribute มีอักขระไม่เกิน :max ตัว',
        'array' => ':attribute มีรายการไม่เกิน :max อัน',
    ],
    'mimes' => ':attribute เป็นไฟล์ชนิด :values',
    'mimetypes' => ':attribute เป็นไฟล์ชนิด :values',
    'min' => [
        'numeric' => ':attribute ต้องเป็นขั้นต่ำ :min',
        'file' => ':attribute ต้องมีขนาดไฟล์อย่างน้อย :min กิโลไบต์',
        'string' => ':attribute มีอักขระอย่างน้อย :min ตัว',
        'array' => ':attribute มีรายการอย่างน้อย :min อัน',
    ],
    'not_in' => ':attribute ที่เลือกไม่ถูกต้อง',
    'numeric' => ':attribute ต้องเป็นจำนวน',
    'present' => 'ฟิลด์ :attribute ต้องถูกแสดง',
    'regex' => 'รูปแบบไฟล์ :attribute ไม่ถูกต้อง',
    'required' => 'ฟิลด์ :attribute จำเป็นต้องมี',
    'required_if' => 'ฟิลด์ :attribute จำเป็นต้องมีเมื่อ:otherเป็น :value',
    'required_unless' => 'ฟิลด์ :attribute จำเป็นต้องมียกเว้น :other เป็น :values',
    'required_with' => 'ฟิลด์ :attribute จำเป็นต้องมีเมื่อค่า :values ถูกแสดง',
    'required_with_all' => 'ฟิลด์ :attribute จำเป็นต้องมีเมื่อค่า :values ถูกแสดง',
    'required_without' => 'ฟิลด์ :attribute จำเป็นต้องมีเมื่อค่า :values ไม่ได้ถูกแสดง',
    'required_without_all' => 'ฟิลด์ :attribute จำเป็นต้องมีเมื่อไม่มีแม้แต่ค่า :values ถูกแสดง',
    'same' => ':attribute และ :other ต้องตรงกัน',
    'size' => [
        'numeric' => ':attribute ต้องมีขนาด :size',
        'file' => ':attribute ต้องมีขนาดไฟล์ :size กิโลไบต์',
        'string' => ':attribute ต้องมีอักขระ :size ตัว',
        'array' => ':attribute ต้องมีรายการ :size อัน',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => ':attribute เป็น string เท่านั้น',
    'timezone' => ':attribute ต้องอยู่ในพื้นที่ที่ถูกต้อง',
    'unique' => 'มี :attribute แล้ว',
    'uploaded' => 'การอัปโหลด :attribute ล้มเหลว',
    'url' => 'รูปแบบไฟล์ :attribute ไม่ถูกต้อง',
    'required_package_id' => 'You have to select a premium listing option to continue.',
    'required_payment_method_id' => 'You have to select a payment method to continue.',
    'blacklist_email_rule' => 'ที่อยู่อีเมลถูกแบล็คลิสต์',
    'blacklist_domain_rule' => 'โดเมนที่อยู่อีเมลของคุณถูกแบลคลิสต์',
    'blacklist_word_rule' => ':attribute มีคำหรือวลีที่ไม่เหมาะสม',
    'blacklist_title_rule' => ':attribute มีคำหรือวลีที่ไม่ถูกต้อง',
    'between_rule' => ':attribute ต้องมีอักขระอยู่ในระหว่าง :min และ :max ตัว',
    'captcha' => 'ฟิลด์ :attribute ไม่ถูกต้อง',
    'recaptcha' => 'ฟิลด์ :attribute ไม่ถูกต้อง',
    'phone' => 'fIeldของ :attribute มีหมายเลขที่ไม่ถูกต้อง',
    'phone_number' => 'เบอร์โทรของคุณไม่ถูกต้อง',
    'username_is_valid_rule' => 'ฟิลด์ :attribute  ต้องเป็นสตริงตัวเลขและตัวอักษร',
    'username_is_allowed_rule' => ':attribute ถูกปฏิเสธ',
    'custom' => [
        'mysql_connection' => [
            'required' => 'เชื่อมต่อไปยังเซอร์เฟอร์ MySQL ไม่ได้',
        ],
        'database_not_empty' => [
            'required' => 'ฐานข้อมูลไม่ว่างเปล่า กรุณาล้างฐานข้อมูลหรือระบุ <a href="./database">ฐานข้อมูลอื่น</a>.',
        ],
        'promo_code_not_valid' => [
            'required' => 'รหัสโปรโมชั่นไม่ถูกต้อง',
        ],
        'smtp_valid' => [
            'required' => 'ไม่สามารถเชื่อมต่อไปยังเซิร์ฟเวอร์ SMTP',
        ],
        'yaml_parse_error' => [
            'required' => 'Can\'t parse yaml. Please check the syntax',
        ],
        'file_not_found' => [
            'required' => 'ไม่พบไฟล์ที่คุณต้องการ',
        ],
        'not_zip_archive' => [
            'required' => 'ไฟล์ไม่ได้ถูกบีบอัดไว้',
        ],
        'zip_archive_unvalid' => [
            'required' => 'ไม่สามารถอ่านไฟล์บีบอัดนี้',
        ],
        'custom_criteria_empty' => [
            'required' => 'เกณฑ์ที่กำหนดเองต้องไม่ว่างเปล่า',
        ],
        'php_bin_path_invalid' => [
            'required' => 'PHP ทำงานไม่ได้ กรุณาตรวจสอบใหม่อีกครั้ง',
        ],
        'can_not_empty_database' => [
            'required' => 'วางตารางไม่ได้ โปรดล้างฐานข้อมูลด้วยตนเองและลองใหม่อีกครั้ง',
        ],
        'can_not_create_database_tables' => [
            'required' => 'Cannot create certain tables. Please make sure you have full privileges on the database and try again.',
        ],
        'can_not_import_database_data' => [
            'required' => 'Cannot import all the app required data. Please try again.',
        ],
        'recaptcha_invalid' => [
            'required' => 'recaptchaไม่ถูกต้อง',
        ],
        'payment_method_not_valid' => [
            'required' => 'เกิดข้อผิดพลาดในการตั้งค่าวิธีการชำระเงิน กรุณาตรวจสอบใหม่อีกครั้ง',
        ],
    ],
    'attributes' => [
        'gender' => 'เพศ',
        'gender_id' => 'เพศ',
        'name' => 'ชื่อ',
        'first_name' => 'ชื่อ',
        'last_name' => 'นามสกุล',
        'user_type' => 'ประเภทผู้ใช้',
        'user_type_id' => 'ประเภทผู้ใช้',
        'country' => 'ประเทศ',
        'country_code' => 'ประเทศ',
        'phone' => 'เบอร์โทร',
        'address' => 'ที่อยู่',
        'mobile' => 'โทรศัพท์มือถือ',
        'sex' => 'เพศ',
        'year' => 'ปี',
        'month' => 'เดือน',
        'day' => 'วัน',
        'hour' => 'ชั่วโมง',
        'minute' => 'นาที',
        'second' => 'วินาที',
        'username' => 'ผู้ใช้',
        'email' => 'ที่อยู่อีเมล',
        'password' => 'รหัสผ่าน',
        'password_confirmation' => 'การยืนยันรหัสผ่าน',
        'g-recaptcha-response' => 'captcha',
        'accept_terms' => 'เงื่อนไข',
        'category' => 'หมวดหมู่',
        'category_id' => 'หมวดหมู่',
        'post_type' => 'ประเภทโพสต์',
        'post_type_id' => 'ประเภทโพสต์',
        'title' => 'หัวข้อ',
        'body' => 'เนื้อ',
        'description' => 'คำบรรยาย',
        'excerpt' => 'ข้อความที่ตัดตอน',
        'date' => 'วันที่',
        'time' => 'เวลา',
        'available' => 'ใช้งานได้',
        'size' => 'ขนาด',
        'price' => 'ราคา',
        'salary' => 'รายได้',
        'contact_name' => 'ชื่อ',
        'location' => 'ตำแหน่งที่ตั้ง',
        'admin_code' => 'ตำแหน่งที่ตั้ง',
        'city' => 'เมือง',
        'city_id' => 'เมือง',
        'package' => 'แพ็คเกจ',
        'package_id' => 'แพ็คเกจ',
        'payment_method' => 'วิธีชำระเงิน',
        'payment_method_id' => 'วิธีชำระเงิน',
        'sender_name' => 'ชื่อ',
        'subject' => 'เรื่อง',
        'message' => 'ข้อความ',
        'report_type' => 'ประเภทรายงาน',
        'report_type_id' => 'ประเภทรายงาน',
        'file' => 'ไฟล์',
        'filename' => 'ชื่อไฟล์',
        'picture' => 'รูปภาพ',
        'resume' => 'ประวัติย่อ',
        'login' => 'เข้าสู่ระบบ',
        'code' => 'รหัส',
        'token' => 'โทเค็น',
        'comment' => 'ความคิดเห็น',
        'rating' => 'เรตติ้ง',
        'captcha' => 'รหัสรักษาความปลอดภัย',
    ],
    'custom.database_connection.required' => 'Can\'t connect to MySQL server',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'not_regex' => 'The :attribute format is invalid.',
    'locale_of_language_rule' => 'The :attribute field is not valid.',
    'locale_of_country_rule' => 'The :attribute field is not valid.',
    'currencies_codes_are_valid_rule' => 'The :attribute field is not valid.',
    'attributes.locale' => 'locale',
    'attributes.currencies' => 'currencies',
    'blacklist_ip_rule' => 'The :attribute must be a valid IP address.',
    'custom_field_unique_rule' => 'The :field_1 have this :field_2 assigned already.',
    'custom_field_unique_rule_field' => 'The :field_1 is already assigned to this :field_2.',
    'custom_field_unique_children_rule' => 'A child :field_1 of the :field_1 have this :field_2 assigned already.',
    'custom_field_unique_children_rule_field' => 'The :field_1 is already assign to one :field_2 of this :field_2.',
    'custom_field_unique_parent_rule' => 'The parent :field_1 of the :field_1 have this :field_2 assigned already.',
    'custom_field_unique_parent_rule_field' => 'The :field_1 is already assign to the parent :field_2 of this :field_2.',
    'attributes.tags' => 'Tags',
    'mb_alphanumeric_rule' => 'Please enter a valid content in the :attribute field.',
    'attributes.from_name' => 'name',
    'attributes.from_email' => 'email',
    'attributes.from_phone' => 'phone',
    'date_is_valid_rule' => 'The :attribute field does not contain a valid date.',
    'date_future_is_valid_rule' => 'The date of :attribute field need to be in the future.',
    'date_past_is_valid_rule' => 'The date of :attribute field need to be in the past.',
    'video_link_is_valid_rule' => 'The :attribute field does not contain a valid (Youtube or Vimeo) video link.',
    'sluggable_rule' => 'The :attribute field contains invalid characters only.',
    'uniqueness_of_listing_rule' => 'You\'ve already posted this listing. It cannot be duplicated.',
    'uniqueness_of_unverified_listing_rule' => 'You\'ve already posted this listing. Please check your email address or SMS to follow the instructions for validation.',
];
