![Gorurhat Admin Dashboard](./public\frontEnd\images\ScreenshotGorurhat.png)


# 🛒 Gorurhat E-commerce Website + Admin Dashboard

A full-stack e-commerce platform for **Gorurhat** with product management, user authentication, shopping cart, order tracking, and an admin dashboard. Supports image uploads for products.

## 🚀 Features

### User Side
- Product browsing with categories & search
- Product image gallery (multiple images per product)
- Add to cart / wishlist
- Secure checkout (SSLCommerz / Stripe ready)
- Order history & tracking
- User authentication (JWT)

### Admin Dashboard
- Product CRUD with image upload (Multer + Cloudinary)
- Order management (update status)
- User management
- Sales analytics (charts)
- Inventory control

## 🛠️ Tech Stack

| Layer        | Technology                          |
|--------------|-------------------------------------|
| Frontend     | React.js, Tailwind CSS, Redux Toolkit |
| Backend      | Node.js, Express.js                 |
| Database     | MongoDB (Mongoose ODM)              |
| Auth         | JWT, bcrypt.js                      |
| Image Upload | Multer + Cloudinary (or local storage) |
| Payment      | SSLCommerz / Stripe                 |
| Hosting      | Vercel (frontend), Render (backend) |

## 📁 Project Structure

gorurhat-ecom/
├── backend/
│ ├── models/
│ │ ├── User.js
│ │ ├── Product.js
│ │ ├── Order.js
│ │ └── Category.js
│ ├── routes/
│ │ ├── auth.js
│ │ ├── products.js
│ │ ├── orders.js
│ │ └── upload.js
│ ├── controllers/
│ ├── middleware/
│ │ └── auth.js
│ ├── config/
│ │ ├── db.js
│ │ └── cloudinary.js
│ ├── utils/
│ └── server.js
├── frontend/
│ ├── src/
│ │ ├── pages/
│ │ │ ├── Home.jsx
│ │ │ ├── ProductDetails.jsx
│ │ │ ├── Cart.jsx
│ │ │ ├── Dashboard/
│ │ │ │ ├── AdminLayout.jsx
│ │ │ │ ├── Products.jsx
│ │ │ │ ├── Orders.jsx
│ │ │ │ └── Analytics.jsx
│ │ ├── components/
│ │ ├── redux/
│ │ ├── App.js
│ │ └── index.js
│ └── package.json
├── .env
└── README.md
text


## 🖼️ Image Upload Implementation (Code Snippet)

### Backend (Node.js + Multer + Cloudinary)

```javascript
// backend/config/cloudinary.js
const cloudinary = require('cloudinary').v2;
cloudinary.config({
  cloud_name: process.env.CLOUD_NAME,
  api_key: process.env.CLOUD_API_KEY,
  api_secret: process.env.CLOUD_API_SECRET
});
module.exports = cloudinary;

// backend/routes/upload.js
const multer = require('multer');
const { CloudinaryStorage } = require('multer-storage-cloudinary');
const cloudinary = require('../config/cloudinary');

const storage = new CloudinaryStorage({
  cloudinary: cloudinary,
  params: {
    folder: 'gorurhat-products',
    allowed_formats: ['jpg', 'png', 'jpeg']
  }
});
const upload = multer({ storage });

router.post('/upload', upload.array('images', 5), (req, res) => {
  const imageUrls = req.files.map(file => file.path);
  res.json({ urls: imageUrls });
});

Frontend (React)
jsx

// ProductForm.jsx
const handleImageUpload = async (e) => {
  const files = e.target.files;
  const formData = new FormData();
  for (let file of files) formData.append('images', file);
  
  const res = await axios.post('/api/upload', formData);
  setImageUrls(res.data.urls);
};

🔧 Setup Instructions
Prerequisites

    Node.js (v18+)

    MongoDB Atlas or local MongoDB

    Cloudinary account (for image hosting)

Environment Variables (.env)

Backend (.env)
text

PORT=5000
MONGO_URI=mongodb+srv://...
JWT_SECRET=your_jwt_secret
CLOUD_NAME=your_cloudinary_name
CLOUD_API_KEY=your_key
CLOUD_API_SECRET=your_secret