![Gorurhat Admin Dashboard](./frontEnd\images\ScreenshotGorurhat.png)


 Gorurhat E-commerce
📌 Project Overview

Gorurhat is a fully functional e-commerce web application built with PHP Laravel. It provides a complete online shopping experience including product browsing, cart management, user authentication, order processing, and secure image handling.
🗂️ Public Image Path Structure

All uploaded images (products, categories, user avatars, banners) are stored in the public directory with the following structure:
text

public/
└── images/
    ├── products/
    ├── categories/
    ├── users/
    ├── banners/
    └── temp/


    database: C:\laragon\www\orvionshop3\public\sqldatabase\gorurhat.sql

Each image is accessible via a direct URL path relative to the public folder.
📁 Image Path Examples
Image Type	Public Path	Access URL Example
Product Image	public/images/products/shoe.jpg	http://gorurhat.com/images/products/shoe.jpg
Category Icon	public/images/categories/electronics.png	http://gorurhat.com/images/categories/electronics.png
Banner Image	public/images/banners/summer.jpg	http://gorurhat.com/images/banners/summer.jpg
User Avatar	public/images/users/avatar123.jpg	http://gorurhat.com/images/users/avatar123.jpg
🖼️ How Images Are Stored & Retrieved

    Uploaded images are moved directly into the respective subfolder inside public/images/

    Database stores the relative image path (e.g., images/products/shoe.jpg)

    Display in views uses the asset() helper pointing to the public path

    Default image is shown when no image is available

🔐 Image Security & Validation

    Only allowed image formats: JPEG, PNG, JPG, GIF, WebP

    Maximum file size: 2MB

    File names are renamed uniquely (timestamp + random string)

    Direct access to upload folders is enabled for public viewing

    Uploaded images are validated before saving

🗄️ Database Storage Format

The database stores image paths as relative paths from the public directory, for example:

    images/products/sample-product.jpg

    images/categories/electronics.png

    images/users/avatar_123.jpg

This allows flexible access using Laravel's asset() helper.
🛠️ Environment Configuration

The .env file contains the application URL which is used to generate full image paths:
text

APP_URL=http://gorurhat.local
FILESYSTEM_DISK=public

📋 Folder Permissions

To allow image uploads, the following directory permissions are required:
Directory	Permission
public/images/	755
public/images/products/	755
public/images/categories/	755
public/images/users/	755
public/images/banners/	755
public/images/temp/	755
🌐 Accessing Images in Frontend

Images are accessed using the full URL or relative path from the public directory. All image URLs are dynamically generated based on the stored database path.
🧹 Image Cleanup Process

When a product, category, or user is deleted:

    The associated image file is automatically removed from the public folder

    The image path is cleared from the database

    Orphaned images are not retained in the system

🚀 Deployment Checklist

Before deploying Gorurhat to production:

    Ensure public/images/ and all subfolders exist

    Set correct folder permissions (755)

    Update APP_URL in .env file with your live domain

    Confirm PHP GD or Imagick extension is enabled for image processing

    Test image upload and display on staging environment

    Set up a backup system for uploaded images

📦 Default Image Fallback

If no image is uploaded or the image is missing:

    A default placeholder image is shown

    Default image location: public/images/default.png

    The default image is never deleted from the system

✅ Summary

Gorurhat E-commerce uses a simple and secure public image storage system:

    All images stored inside public/images/

    Organized by type (products, categories, users, banners)

    Database stores relative paths

    Frontend accesses via asset() helper

    Automatic cleanup on deletion

    Proper validation and security checks

📞 Support

For documentation updates or support related to the image management system, please contact the development team.
