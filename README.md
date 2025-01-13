
# Laravel API Project

## متطلبات التشغيل
- PHP 8.1 أو أحدث
- Composer
- MySQL
- Node.js و NPM (لإدارة JavaScript)
- خادم ويب مثل Apache أو Nginx

## خطوات التثبيت والتشغيل

1. **نسخ المشروع:**
   - قم بتحميل المشروع أو نسخه من GitHub باستخدام الأمر:
     ```bash
     git clone https://github.com/abdelrahmanlghorab/EEC-backend.git
     ```
   - انتقل إلى المجلد الخاص بالمشروع:
     ```bash
     cd EEC-backend
     ```

2. **تثبيت الحزم المطلوبة:**
   - قم بتثبيت الحزم الخاصة بـ Laravel باستخدام Composer:
     ```bash
     composer install
     ```

3. **إعداد ملف البيئة:**
   - قم بنسخ ملف البيئة الافتراضي:
     ```bash
     cp .env.example .env
     ```
   - افتح الملف `.env` وعدّل الإعدادات التالية:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_username
     DB_PASSWORD=your_password
     ```

4. **إنشاء قاعدة البيانات:**
   - أنشئ قاعدة بيانات جديدة بنفس الاسم الذي وضعته في `.env`.

5. **تشغيل الهجرات:**
   - لتكوين الجداول داخل قاعدة البيانات:
     ```bash
     php artisan migrate
     ```

6. **تعبئة البيانات الوهمية (اختياري):**
   - إذا كنت ترغب في إضافة بيانات وهمية:
     ```bash
     php artisan db:seed
     ```

7. **تشغيل المشروع:**
   - شغل خادم Laravel:
     ```bash
     php artisan serve
     ```
   - ستجد التطبيق يعمل على: [http://localhost:8000](http://localhost:8000)

8. **اختبار الـ API:**
   - استخدم أدوات مثل Postman أو Insomnia لاختبار API باستخدام الروابط الموضحة في الكود.
   - يمكنك أيضا استخدام frontend مثل   Angular لتوصيل التطبيق بالـ API.
   - يمكنك اجراء الاختبارات التي تحتاجها للتطبيق. عن طريق الاوامؤ التالية:
   ```bash
   php artisan test

---

## مشاكل محتملة وحلولها
- **الامتيازات في قاعدة البيانات:** تأكد أن المستخدم الذي تستخدمه يمتلك صلاحيات لإنشاء الجداول.
- **Composer غير مثبت:** تأكد من تثبيت Composer على جهازك.
