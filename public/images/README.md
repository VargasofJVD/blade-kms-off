
# Images Directory

This directory contains static images for the Krisah Montessori School website.

## Directory Structure:

```
public/images/
├── gallery/          # Static gallery images
├── about/           # About page images
├── home/            # Home page images
├── events/          # Static event images
├── news/            # Static news images
├── testimonials/    # Testimonial profile images
├── default-news.jpg # Default news image placeholder
└── default-gallery.jpg # Default gallery image placeholder
```

## Uploaded Images Storage:

**Important**: User-uploaded images are stored in Laravel's storage system, not in this directory.

### Storage Locations:
- **News Images**: `storage/app/public/news/`
- **Event Images**: `storage/app/public/events/`
- **Gallery Images**: `storage/app/public/gallery/`
- **Testimonial Images**: `storage/app/public/testimonials/`

### Accessing Uploaded Images:
- News images: `http://yourdomain.com/storage/news/filename.jpg`
- Event images: `http://yourdomain.com/storage/events/filename.jpg`
- Gallery images: `http://yourdomain.com/storage/gallery/filename.jpg`

## Image Guidelines:
- Use JPG or PNG format
- Optimize images for web (compress them)
- Recommended sizes:
  - Gallery thumbnails: 400x300px
  - Gallery full size: 1200x800px
  - Profile images: 300x300px
  - Hero images: 1920x1080px
  - News images: 800x600px
  - Event images: 800x600px

## How Images Work:
1. **Admin Upload**: Images are uploaded through the admin panel
2. **Storage**: Images are stored in `storage/app/public/` directories
3. **Access**: Images are accessible via `/storage/` URL path
4. **Fallback**: If no image is uploaded, default images are used

## Troubleshooting:
- If images don't display, ensure the storage link is created: `php artisan storage:link`
- Check file permissions on storage directories
- Verify image paths in the database
