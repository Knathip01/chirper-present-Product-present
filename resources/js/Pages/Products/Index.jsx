//  .map เพื่อวนลูปผ่านข้อมูลใน products
// index-container, product-header, และ product-ite จัดcssเพื่อให้เว็บไซต์ดูสวยงาม

import { Link } from "@inertiajs/react";
import "./Index.css";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
export default function Index({ products }) {
    return (
        <AuthenticatedLayout>
            <div className="index-container">
                <h1 className="product-header">BANGDUNG SHOP</h1>
                <div className="product-list">
                
                    {products.map(({ id, imageUrl, name, price }) => (
                        <div key={id} className="product-item">
                            <img
                                src={imageUrl || "/images/default.jpg"} // ใช้ค่าเริ่มต้นหากไม่มี imageUrl
                                alt={name}
                                className="product-image"
                            />
                            <div className="product-details">
                                <h2 className="product-name">{name}</h2>
                                <p className="product-price">฿{price}</p>
                                <Link href={`/products/${id}`} className="product-link">
                                    View Details
                                </Link>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
