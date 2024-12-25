
//จัด css product-card ,product-image,back-link

import { Link } from '@inertiajs/react';
import "./Show.css"
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";


export default function Show({ product }) {
    return (
        <AuthenticatedLayout>
        <div className="product-container">
            <div className="product-card">
                <h1 className="product-title">{product.name}</h1>
                <p className="product-description">{product.description}</p>
                <p className="product-price">Price: ฿{product.price}</p>

                {/* เพิ่มรูปภาพสินค้า */}
                <div className="image-container">
                    <img src={product.imageUrl} alt={product.name} className="product-image" />
                </div>
            </div>

            <Link href="/products" className="back-link">Back to All Products</Link>
        </div>
        </AuthenticatedLayout>
    );
}
