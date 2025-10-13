# 🛍️ Belal Store - متجر بلال

<div align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  
  [![Laravel](https://img.shields.io/badge/Laravel-12.28.1-red.svg)](https://laravel.com)
  [![PHP](https://img.shields.io/badge/PHP-8.3.10-blue.svg)](https://php.net)
  [![License](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)
  [![GitHub](https://img.shields.io/badge/GitHub-Repository-black.svg)](https://github.com/abdelmoneimbelal/belal-store)
</div>

## 📋 نظرة عامة | Overview

**Belal Store** هو متجر إلكتروني متكامل مبني باستخدام Laravel 12، يوفر نظام إدارة شامل للمنتجات والعملاء والمبيعات مع واجهة إدارية متقدمة وواجهة أمامية جذابة.

**Belal Store** is a comprehensive e-commerce platform built with Laravel 12, featuring a complete product management system, customer management, and sales tracking with an advanced admin panel and attractive frontend interface.

## ✨ المميزات الرئيسية | Key Features

### 🛒 إدارة المنتجات | Product Management
- **إدارة شاملة للمنتجات** - إضافة، تعديل، حذف المنتجات
- **تصنيف المنتجات** - نظام تصنيف هرمي متقدم
- **إدارة الصور** - رفع وإدارة صور متعددة للمنتجات
- **نظام العلامات** - تصنيف المنتجات بالعلامات (Tags)
- **إدارة المخزون** - تتبع الكميات المتاحة
- **المنتجات المميزة** - إمكانية تمييز المنتجات

### 👥 إدارة المستخدمين | User Management
- **نظام الأدوار والصلاحيات** - إدارة متقدمة للصلاحيات
- **إدارة العملاء** - تسجيل وإدارة بيانات العملاء
- **إدارة المشرفين** - نظام إدارة للمشرفين
- **التحقق من البريد الإلكتروني** - تأكيد الحسابات
- **إدارة الملفات الشخصية** - تحديث البيانات والصور

### 🌍 إدارة المواقع | Location Management
- **إدارة الدول** - قاعدة بيانات شاملة للدول
- **إدارة المحافظات** - إدارة المحافظات والولايات
- **إدارة المدن** - إدارة المدن والمناطق
- **عناوين العملاء** - إدارة عناوين الشحن

### 🚚 إدارة الشحن | Shipping Management
- **شركات الشحن** - إدارة شركات الشحن
- **أسعار الشحن** - حساب تكاليف الشحن
- **تتبع الطلبات** - متابعة حالة الشحن

### 💰 نظام الكوبونات | Coupon System
- **كوبونات الخصم** - إدارة كوبونات الخصم
- **أنواع الخصومات** - خصومات ثابتة ونسبية
- **تواريخ الصلاحية** - تحديد فترة صلاحية الكوبونات

### ⭐ نظام التقييمات | Review System
- **تقييم المنتجات** - تقييمات العملاء للمنتجات
- **إدارة التقييمات** - مراجعة وموافقة التقييمات
- **نظام النجوم** - تقييم بالنجوم

### 🔍 البحث والتصفية | Search & Filter
- **بحث متقدم** - بحث في المنتجات والبيانات
- **تصفية النتائج** - تصفية حسب الفئة، السعر، الحالة
- **ترتيب النتائج** - ترتيب حسب معايير مختلفة

## 🛠️ التقنيات المستخدمة | Technologies Used

### Backend
- **Laravel 12.28.1** - إطار عمل PHP متقدم
- **PHP 8.3.10** - لغة البرمجة الأساسية
- **MySQL** - قاعدة البيانات
- **Entrust** - نظام الأدوار والصلاحيات
- **Intervention Image** - معالجة الصور
- **Eloquent Sluggable** - إنشاء روابط SEO

### Frontend
- **Blade Templates** - محرك القوالب
- **Bootstrap 5.2.3** - إطار عمل CSS
- **Tailwind CSS 4.1.11** - مكتبة CSS متقدمة
- **jQuery 3.7.1** - مكتبة JavaScript
- **Vite** - أداة البناء والتطوير

### Development Tools
- **Laravel Pint** - تنسيق الكود
- **PHPUnit** - اختبار الوحدة
- **Laravel Boost** - أدوات التطوير

## 📦 التثبيت والإعداد | Installation & Setup

### المتطلبات | Requirements
- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL
- Git

### خطوات التثبيت | Installation Steps

1. **استنساخ المشروع | Clone the Repository**
```bash
git clone https://github.com/abdelmoneimbelal/belal-store.git
cd belal-store
```

2. **تثبيت التبعيات | Install Dependencies**
```bash
composer install
npm install
```

3. **إعداد البيئة | Environment Setup**
```bash
cp .env.example .env
php artisan key:generate
```

4. **إعداد قاعدة البيانات | Database Setup**
```bash
# قم بتحديث إعدادات قاعدة البيانات في ملف .env
php artisan migrate
php artisan db:seed
```

5. **بناء الأصول | Build Assets**
```bash
npm run build
```

6. **تشغيل الخادم | Start Server**
```bash
php artisan serve
```

## 🗂️ هيكل المشروع | Project Structure

```
belal-store/
├── app/
│   ├── Http/Controllers/
│   │   ├── Backend/          # وحدات التحكم الإدارية
│   │   └── Frontend/         # وحدات التحكم الأمامية
│   ├── Models/               # نماذج البيانات
│   ├── Helper/               # المساعدات
│   └── Providers/            # مقدمي الخدمات
├── database/
│   ├── migrations/           # ملفات الهجرة
│   └── seeders/              # ملفات البذور
├── resources/
│   ├── views/
│   │   ├── backend/          # قوالب الإدارة
│   │   └── frontend/         # قوالب الواجهة الأمامية
│   └── assets/               # الأصول الثابتة
├── public/                   # الملفات العامة
└── routes/                   # ملفات التوجيه
```

## 🔐 نظام الصلاحيات | Permission System

المشروع يستخدم نظام **Entrust** لإدارة الأدوار والصلاحيات:

- **Admin** - صلاحيات كاملة
- **Supervisor** - صلاحيات محددة
- **Customer** - صلاحيات العميل

## 📱 الواجهات | Interfaces

### 🎨 الواجهة الأمامية | Frontend
- صفحة رئيسية جذابة
- متجر المنتجات
- صفحة تفاصيل المنتج
- سلة التسوق
- صفحة الدفع

### ⚙️ لوحة الإدارة | Admin Panel
- لوحة تحكم شاملة
- إدارة المنتجات والفئات
- إدارة العملاء والمشرفين
- إدارة الطلبات والشحن
- إحصائيات المبيعات

## 🚀 الميزات المتقدمة | Advanced Features

- **SEO Friendly URLs** - روابط محسنة لمحركات البحث
- **Image Optimization** - تحسين الصور تلقائياً
- **Search Functionality** - بحث متقدم في جميع البيانات
- **Responsive Design** - تصميم متجاوب لجميع الأجهزة
- **Multi-language Support** - دعم متعدد اللغات
- **Email Verification** - التحقق من البريد الإلكتروني
- **File Upload Management** - إدارة رفع الملفات

## 📊 قاعدة البيانات | Database Schema

### الجداول الرئيسية | Main Tables
- `users` - المستخدمين
- `products` - المنتجات
- `product_categories` - فئات المنتجات
- `product_reviews` - تقييمات المنتجات
- `product_coupons` - كوبونات الخصم
- `countries` - الدول
- `states` - المحافظات
- `cities` - المدن
- `user_addresses` - عناوين المستخدمين
- `shipping_companies` - شركات الشحن
- `media` - الملفات والصور

## 🧪 الاختبارات | Testing

```bash
# تشغيل الاختبارات
php artisan test
```

## 📈 الأداء | Performance

- **Laravel Caching** - نظام التخزين المؤقت
- **Database Optimization** - تحسين قاعدة البيانات
- **Image Compression** - ضغط الصور
- **Asset Minification** - تصغير الأصول

## 🔧 التطوير | Development

### أوامر مفيدة | Useful Commands

```bash
# مسح التخزين المؤقت
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# إعادة بناء قاعدة البيانات
php artisan migrate:fresh --seed

# تشغيل في وضع التطوير
npm run dev
```

## 📝 المساهمة | Contributing

نرحب بمساهماتكم! يرجى اتباع الخطوات التالية:

1. Fork المشروع
2. إنشاء فرع للميزة الجديدة (`git checkout -b feature/AmazingFeature`)
3. Commit التغييرات (`git commit -m 'Add some AmazingFeature'`)
4. Push إلى الفرع (`git push origin feature/AmazingFeature`)
5. فتح Pull Request

## 📄 الترخيص | License

هذا المشروع مرخص تحت رخصة MIT - راجع ملف [LICENSE](LICENSE) للتفاصيل.

## 👨‍💻 المطور | Developer

**عبد المنعم بلال | Abdelmoneim Belal**
- GitHub: [@abdelmoneimbelal](https://github.com/abdelmoneimbelal)
- Repository: [belal-store](https://github.com/abdelmoneimbelal/belal-store)

## 🙏 شكر وتقدير | Acknowledgments

- [Laravel](https://laravel.com) - إطار العمل الرائع
- [Bootstrap](https://getbootstrap.com) - إطار عمل CSS
- [Tailwind CSS](https://tailwindcss.com) - مكتبة CSS
- جميع المطورين المساهمين في المشاريع مفتوحة المصدر

---

<div align="center">
  <p>صُنع بـ ❤️ باستخدام Laravel</p>
  <p>Made with ❤️ using Laravel</p>
</div>