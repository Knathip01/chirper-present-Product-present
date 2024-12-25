<?php
//สินค้าที่มีในร้าน
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
class ProductController extends Controller
{
    private $products = [
        ['id' => 1, 'name' => 'NOTEBOOK  MSI CROSSHAIR ', 
        'description' => ' Intel Core i9-14900HX• 16GB DDR5• 1TB NVMe PCIe M.2 SSD• 16" QHD+ (2560x1600) 240Hz Non-Touch• Nvidia GeForce RTX4060 8GB GDDR6• Windows 11 Home + Office Home & Student 2021', 
        'price' => 55990, 
        'imageUrl' => 'https://www.jib.co.th/img_master/product/original/20241123142353_72258_287_2.jpg'],

        ['id' => 2, 'name' => 'NOTEBOOK  ASUS ROG STRIX ', 
        'description' => '• Intel Core i9-14900HX• 16GB DDR5 5600MHz• 512GB PCIe 4/NVMe M.2 SSD• 16" FHD+ (1920 x 1200) IPS-level 165Hz Anti-glare G-Sync• Nvidia GeForce RTX 4060 8GB GDDR6• Windows 11 Home', 
        'price' => 59990, 
        'imageUrl' => 'https://www.jib.co.th/img_master/product/original/2024111213123571962_1.jpg'],

        ['id' => 3, 'name' => 'NOTEBOOK  LENOVO LEGION 9 ', 
        'description' => ' • Intel Core i9-14900HX• 64GB (32GB x 2) DDR5 5600MHz (OC)• 2TB (1TB x 2) PCIe 4/NVMe M.2 SSD• 16" 3.2K (3200 x 2000) Mini LED 165Hz G-SYNC 1200nits• Nvidia GeForce RTX 4090 16GB GDDR6• Windows 11 Home', 
        'price' => 154990, 
        'imageUrl' => 'https://www.jib.co.th/img_master/product/original/2024120313074572345_1.jpg'],

        ['id' => 4, 'name' => 'NOTEBOOK  ACER PREDATOR ', 
        'description' => '• Intel Core i9-14900HX• 32GB (16GBx2) DDR5• 1TB PCIe/NVMe M.2 SSD• 16" WQXGA IPS 240Hz• Nvidia GeForce RTX 4070 8 GB GDDR6• Windows 11 Home', 
        'price' => 75990, 
        'imageUrl' => 'https://www.jib.co.th/img_master/product/original/20240322153918_65655_287_2.jpg'],

        ['id' => 5, 'name' => 'NOTEBOOK  HP OMEN GAMMING', 
        'description' => ' • Intel Core i9-14900HX• 32GB (16GBx2) DDR5 5600MHz• 1TB PCIe/NVMe M.2 SSD• 16.1" QHD 240Hz• Nvidia GeForce RTX 4070 8GB GDDR6• Windows 11 Home', 
        'price' => 76990, 
        'imageUrl' => 'https://www.jib.co.th/img_master/product/original/20240228141347_65582_287_2.jpg'],

        ['id' => 6, 'name' => 'Apple iPhone 16 Pro Max 1TB  Titanium', 
        'description' => 'iPhone 16 Pro Max มาพร้อมดีไซน์แบบไทเทเนียมที่โดดเด่นสวยงาม, ตัวควบคุมกล้อง, Dolby Vision ระดับ 4K ที่ 120 fps และ ชิป A18 Pro', 
        'price' => 63900, 
        'imageUrl' => 'https://www.jib.co.th/img_master/product/original/2024092008153270728_1.jpg'],

        ['id' => 7, 'name' => ' SMARTPHONE  ASUS ROG PHONE 8 ', 
        'description' => '● Display/Screen Size : FHD+ 6.78 165Hz● Chipset : Snapdragon 8 Gen 3● GPU : Adreno 750● RAM / ROM : 12GB/256GB● OS : ROG UI, Android 14', 
        'price' => 26990, 
        'imageUrl' => 'https://www.jib.co.th/img_master/product/original/2024012911093265099_4.jpg'],

        ['id' => 8, 'name' => 'SMARTPHONE SAMSUNG GALAXY  ', 
        'description' => '● Display/Screen Size :FHD+ 6.7"● Chipset : Exynos2400e● GPU : Xclipse 940● OS : Android 14● RAM / ROM : 8/256', 
        'price' => 25900, 
        'imageUrl' => 'https://www.jib.co.th/img_master/product/original/2024100310504071075_3.jpg'],

        ['id' => 9, 'name' => 'SMARTPHONE VIVO Y200  2024 ', 
        'description' => '● Display/Screen Size: 6.67"● Chipset: Snapdragon 4 Gen 2● Ram/Rom: 8GB/256GB● OS: Android 14', 
        'price' => 9999, 
        'imageUrl' => 'https://www.jib.co.th/img_master/product/original/2024103014445571707_4.jpg'],

        ['id' => 10, 'name' => 'SMARTPHONE  XIAOMI 13T PRO ', 
        'description' => '● Display/Screen Size : FHD+ 6.67144Hz● Chipset : MediaTek Dimensity 9200+● GPU : Arm Immortalis-G715● RAM / ROM : 12GB/512GB● OS : MIUI 14', 
        'price' => 19990, 
        'imageUrl' => 'https://www.jib.co.th/img_master/product/original/2023121809302664286_6.jpg'],

     



    ];
      
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //ฟังก์ชันนี้แสดงหน้ารายการสินค้าทั้งหมด โดยส่งข้อมูลสินค้าจาก $this->products ไปยังหน้า 'Products/Index'.
        return Inertia::render('Products/Index', ['products' => $this->products]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

     //โค้ดนี้ใช้ดึงข้อมูลสินค้าจาก $this->products ด้วย ID ($id) โดยใช้ firstWhere() หากไม่พบสินค้า จะส่ง HTTP 404 (Not Found) 
     //และถ้าพบสินค้า จะส่งข้อมูลไปยังหน้าที่เรนเดอร์ด้วย Inertia.js สำหรับแสดงรายละเอียดสินค้า.
    public function show(string $id)
    {
        //
        $product = collect($this->products)->firstWhere('id', $id);
        
        if (!$product) 
        {abort(404, 'Product not found');
        }
        return Inertia::render('Products/Show', ['product' => $product]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
