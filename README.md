# Krisah Montessori School Website

A professional school website for Krisah Montessori School located in the Western Region of Ghana. Built with Laravel and Tailwind CSS, featuring a modern design that reflects Montessori education values.

## 🌟 Features

### Public Website
- **Homepage** - Hero section, school values, latest news, upcoming events, testimonials
- **About Us** - Mission, vision, history, Montessori philosophy, headteacher's message
- **Academics** - Curriculum overview and class categories
- **Admissions** - Admission requirements, process, forms, FAQs, fees
- **News & Events** - School announcements and upcoming events
- **Gallery** - Dynamic photo gallery categorized by events
- **Testimonials** - Parent and student feedback
- **Contact** - Contact form, Google Maps, contact information

### Admin Dashboard
- **Secure Authentication** - Admin login and user management
- **Content Management** - News, events, gallery management (CRUD)
- **Student Management** - Student records and guardian information
- **Admissions Management** - Online application processing and status updates
- **User Roles** - Super Admin and Editor roles

## 🎨 Design

- **Color Scheme**: Dull shades of blue (#4B6A9B, #5A7FA6) with green accents (#3C8D66)
- **Typography**: Professional yet friendly, using Inter font family
- **Responsive**: Mobile-first design with smooth transitions and animations
- **Cultural Relevance**: Authentic Ghanaian imagery and warm, approachable tone

## 🛠️ Technology Stack

- **Backend**: Laravel 10 (Latest stable release)
- **Frontend**: Blade templates + Tailwind CSS
- **Database**: MySQL/PostgreSQL with Laravel migrations
- **Authentication**: Laravel Breeze/Jetstream (can be customized)
- **File Storage**: Laravel Storage for images and documents
- **Deployment**: Optimized for shared hosting and VPS in Ghana

## 📋 Requirements

- PHP 8.1 or higher
- Composer
- MySQL 5.7+ or PostgreSQL 10+
- Web server (Apache/Nginx)
- Node.js (for asset compilation if needed)

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd krisah-montessori
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure database**
   Edit `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=krisah_montessori
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Run migrations and seeders**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. **Create storage link**
   ```bash
   php artisan storage:link
   ```

7. **Set permissions** (Linux/Unix systems)
   ```bash
   chmod -R 775 storage bootstrap/cache
   ```

8. **Start the development server**
   ```bash
   php artisan serve
   ```

## 📁 Project Structure

```
krisah-montessori/
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php      # Public website controllers
│   │   └── AdminController.php     # Admin dashboard controllers
│   ├── Models/
│   │   ├── News.php
│   │   ├── Event.php
│   │   ├── Gallery.php
│   │   ├── Testimonial.php
│   │   ├── Student.php
│   │   ├── Guardian.php
│   │   └── Admission.php
│   └── Http/Middleware/
│       └── AdminMiddleware.php     # Admin route protection
├── database/
│   ├── migrations/                 # Database migrations
│   └── seeders/                    # Sample data
├── resources/
│   └── views/
│       ├── layouts/
│       │   ├── app.blade.php       # Public website layout
│       │   └── admin.blade.php     # Admin dashboard layout
│       ├── pages/                  # Public website pages
│       └── admin/                  # Admin dashboard pages
├── routes/
│   └── web.php                     # Application routes
└── public/                         # Public assets
```

## 🔧 Configuration

### Database Configuration
The application uses Laravel migrations for database setup. Key tables include:
- `news` - School news and announcements
- `events` - School events and activities
- `galleries` & `gallery_images` - Photo galleries
- `testimonials` - Parent and student testimonials
- `students` & `guardians` - Student records
- `admissions` - Online admission applications

### File Storage
- Images are stored in `storage/app/public/`
- Gallery images: `storage/app/public/gallery/`
- News images: `storage/app/public/news/`
- Student documents: `storage/app/public/students/`

### Admin Access
- Default admin credentials can be set in the database seeder
- Admin routes are protected by `AdminMiddleware`
- Admin dashboard accessible at `/admin`

## 🌍 Cultural Considerations

The website is designed with Ghanaian cultural context in mind:
- Warm, welcoming tone in all content
- Authentic imagery representing Ghanaian education
- Mobile-first design for accessibility
- Local contact information and addresses
- Culturally relevant testimonials and content

## 📱 Mobile Responsiveness

The website is fully responsive with:
- Mobile-first design approach
- Touch-friendly navigation
- Optimized images for mobile devices
- Fast loading times for slower connections

## 🔒 Security Features

- CSRF protection on all forms
- Input validation and sanitization
- Secure file upload handling
- Admin route protection
- SQL injection prevention
- XSS protection

## 🚀 Deployment

### Shared Hosting
1. Upload files to hosting directory
2. Set document root to `public/`
3. Configure database connection
4. Run migrations: `php artisan migrate`
5. Create storage link: `php artisan storage:link`

### VPS Deployment
1. Set up LEMP/LAMP stack
2. Configure web server (Apache/Nginx)
3. Set up SSL certificate
4. Configure environment variables
5. Run deployment commands

## 📞 Support

For technical support or questions about the website:
- Email: support@krisahmontessori.com
- Phone: +233 XX XXX XXXX
- Address: Western Region, Ghana

## 📄 License

This project is proprietary software developed for Krisah Montessori School.

## 🤝 Contributing

This is a private project for Krisah Montessori School. For feature requests or bug reports, please contact the school administration.

---

**Built with ❤️ for Krisah Montessori School**
