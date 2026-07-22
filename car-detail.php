<?php
$pageTitle = "Chi Tiết Xe";
$showPageTitle = false;
require_once 'header.php';

// Database of all cars
$cars = [
    1 => [
        'id' => 1,
        'name' => 'Mercedes-Benz S-Class',
        'brand' => 'Mercedes-Benz',
        'year' => 2024,
        'price' => '5.2 tỷ',
        'fuel' => 'Xăng',
        'transmission' => 'Tự động 9G-TRONIC',
        'acceleration' => '4.5 giây',
        'speed' => '250 km/h',
        'power' => '367 mã lực',
        'seats' => 5,
        'description' => 'Mercedes-Benz S-Class 2024 là biểu tượng của sự sang trọng và công nghệ trong phân khúc sedan hạng sang. Với thiết kế ngoại thất tinh tế, nội thất xa xỉ và hàng loạt công nghệ tiên tiến, S-Class mang đến trải nghiệm lái và ngồi tuyệt vời nhất.',
        'features' => [
            'Hệ thống đèn LED thông minh',
            'Ghế da cao cấp với chức năng massage',
            'Hệ thống giải trí MBUX',
            'Camera 360 độ',
            'Hệ thống âm thanh Burmester 3D',
            'Cửa sổ trời Panorama',
            'Hỗ trợ lái Level 2',
            'Chức năng lái tự động trên cao tốc',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1617531653332-bd46c24f2068?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1616422285623-13ff0162193c?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800&h=500&fit=crop',
        ],
    ],
    2 => [
        'id' => 2,
        'name' => 'BMW 7 Series',
        'brand' => 'BMW',
        'year' => 2024,
        'price' => '4.8 tỷ',
        'fuel' => 'Hybrid',
        'transmission' => 'Tự động 8 cấp',
        'acceleration' => '4.7 giây',
        'speed' => '250 km/h',
        'power' => '394 mã lực',
        'seats' => 5,
        'description' => 'BMW 7 Series 2024 là đỉnh cao của dòng sedan hạng sang từ thương hiệu BMW. Kết hợp giữa động cơ hybrid mạnh mẽ, nội thất tinh tế và hàng loạt công nghệ hỗ trợ lái tiên tiến, 7 Series mang đến trải nghiệm di chuyển thượng lưu.',
        'features' => [
            'Màn hình cong BMW Curved Display 14.9"',
            'Hệ thống treo không khí chủ động',
            'Ghế da Merino với chức năng massage và sưởi',
            'Hệ thống âm thanh Bowers & Wilkins',
            'Camera 360 độ với Bird\'s Eye View',
            'Cửa sổ trời Sky Lounge Panoramic',
            'Hỗ trợ đỗ xe tự động',
            'Màn hình giải trí hàng ghế sau 8.8"',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1555215695-3004980ad54e?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1617531653332-bd46c24f2068?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=800&h=500&fit=crop',
        ],
    ],
    3 => [
        'id' => 3,
        'name' => 'Audi A8 L',
        'brand' => 'Audi',
        'year' => 2024,
        'price' => '4.5 tỷ',
        'fuel' => 'Xăng',
        'transmission' => 'Tiptronic 8 cấp',
        'acceleration' => '5.0 giây',
        'speed' => '250 km/h',
        'power' => '335 mã lực',
        'seats' => 5,
        'description' => 'Audi A8 L 2024 là mẫu xe hành pháp đỉnh cao với thiết kế sang trọng và khoang nội thất rộng rãi đặc biệt phù hợp cho ghế sau. Công nghệ mild-hybrid giúp tiết kiệm nhiên liệu mà không đánh đổi hiệu suất.',
        'features' => [
            'Hệ thống treo khí nén với giảm chấn chủ động',
            'Màn hình cảm ứng MMI 10.1" và 8.6"',
            'Ghế executive phía sau với chức năng massage',
            'Hệ thống âm thanh Bang & Olufsen 3D',
            'Cửa mở tự động bằng điện',
            'Đèn pha Matrix LED HDR',
            'Hỗ trợ lái Level 3 (tùy thị trường)',
            'Cửa sổ trời Panoramic điện',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1555215695-3004980ad54e?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1617531653332-bd46c24f2068?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1616422285623-13ff0162193c?w=800&h=500&fit=crop',
        ],
    ],
    4 => [
        'id' => 4,
        'name' => 'Porsche 911 Carrera',
        'brand' => 'Porsche',
        'year' => 2024,
        'price' => '6.8 tỷ',
        'fuel' => 'Xăng',
        'transmission' => 'PDK 8 cấp',
        'acceleration' => '3.5 giây',
        'speed' => '293 km/h',
        'power' => '385 mã lực',
        'seats' => 4,
        'description' => 'Porsche 911 Carrera 2024 tiếp tục kế thừa di sản hơn 60 năm của dòng 911 huyền thoại. Với động cơ boxer 3.0L twin-turbo đặt phía sau, 911 Carrera mang đến cảm giác lái thuần túy và ly kỳ chỉ có ở Porsche.',
        'features' => [
            'Động cơ Boxer 3.0L Twin-Turbo',
            'Hệ thống treo PASM thể thao',
            'Màn hình cảm ứng PCM 10.9"',
            'Phanh gốm carbon PCCB (tùy chọn)',
            'Hệ thống ống xả thể thao Sport Exhaust',
            'Ghế thể thao 8 chiều điều chỉnh điện',
            'Hệ thống âm thanh Bose Surround Sound',
            'Đèn pha LED với Porsche Dynamic Light System',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1616422285623-13ff0162193c?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1555215695-3004980ad54e?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=800&h=500&fit=crop',
        ],
    ],
    5 => [
        'id' => 5,
        'name' => 'Lexus LS 500',
        'brand' => 'Lexus',
        'year' => 2024,
        'price' => '3.9 tỷ',
        'fuel' => 'Xăng',
        'transmission' => 'Tự động 10 cấp',
        'acceleration' => '5.0 giây',
        'speed' => '250 km/h',
        'power' => '416 mã lực',
        'seats' => 5,
        'description' => 'Lexus LS 500 2024 là flagship sedan của thương hiệu Lexus, thể hiện triết lý Omotenashi (nghệ thuật hiếu khách Nhật Bản) trong từng chi tiết. Độ hoàn thiện nội thất đỉnh cao, êm ái và đáng tin cậy là những giá trị cốt lõi.',
        'features' => [
            'Động cơ V6 Twin-Turbo 3.5L',
            'Hệ thống treo khí nén thích ứng',
            'Nội thất Kiriko glass - nghệ thuật thủy tinh Nhật Bản',
            'Hệ thống âm thanh Mark Levinson 23 loa',
            'Ghế massage Shiatsu 28 chiều',
            'Đèn pha Triple Beam LED',
            'Lexus Safety System+ 3.0',
            'Cửa sổ trời Panoramic điện',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1617531653332-bd46c24f2068?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1555215695-3004980ad54e?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800&h=500&fit=crop',
        ],
    ],
    6 => [
        'id' => 6,
        'name' => 'Range Rover Sport',
        'brand' => 'Land Rover',
        'year' => 2024,
        'price' => '5.5 tỷ',
        'fuel' => 'Hybrid',
        'transmission' => 'Tự động 8 cấp',
        'acceleration' => '5.7 giây',
        'speed' => '225 km/h',
        'power' => '395 mã lực',
        'seats' => 5,
        'description' => 'Range Rover Sport 2024 kết hợp hoàn hảo giữa khả năng off-road đỉnh cao và sự sang trọng tinh tế trong cabin. Hệ thống Terrain Response 2 giúp xe chinh phục mọi địa hình trong khi nội thất vẫn mang đẳng cấp hạng sang.',
        'features' => [
            'Hệ thống Terrain Response 2 thông minh',
            'Suspension khí nén điện tử 4 chiều',
            'Màn hình Pivi Pro 13.1"',
            'Hệ thống âm thanh Meridian 3D Surround',
            'Camera 360 độ với góc nhìn Wade Sensing',
            'Kéo nặng tối đa 3,500 kg',
            'Hỗ trợ lội nước sâu đến 900mm',
            'Sạc không dây Qi và kết nối Apple CarPlay/Android Auto',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1617531653332-bd46c24f2068?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=800&h=500&fit=crop',
        ],
    ],
    7 => [
        'id' => 7,
        'name' => 'Bentley Continental GT',
        'brand' => 'Bentley',
        'year' => 2024,
        'price' => '12.5 tỷ',
        'fuel' => 'Xăng',
        'transmission' => 'Tự động 8 cấp ZF',
        'acceleration' => '3.6 giây',
        'speed' => '333 km/h',
        'power' => '542 mã lực',
        'seats' => 4,
        'description' => 'Bentley Continental GT 2024 là biểu tượng của sự xa hoa và thủ công tỉ mỉ. Mỗi chiếc Continental GT đều được chế tác thủ công bởi nghệ nhân lành nghề tại nhà máy Crewe, Anh Quốc với hơn 100 giờ công lao động.',
        'features' => [
            'Động cơ W12 6.0L Twin-Turbo',
            'Nội thất da thủ công với 17 màu sắc',
            'Bảng đồng hồ xoay Rotating Display 3 mặt',
            'Hệ thống âm thanh Naim for Bentley 2,200W',
            'Thảm len Wilton dệt thủ công',
            'Ghế massage 10 chiều với sưởi và làm mát',
            'Đèn pha Matrix LED Bentley',
            'Hệ thống treo khí nén thích ứng 48V',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1606220588913-b3aacb4d2f46?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1555215695-3004980ad54e?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1617531653332-bd46c24f2068?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800&h=500&fit=crop',
        ],
    ],
    8 => [
        'id' => 8,
        'name' => 'BMW X7',
        'brand' => 'BMW',
        'year' => 2024,
        'price' => '5.1 tỷ',
        'fuel' => 'Hybrid',
        'transmission' => 'Tự động 8 cấp Steptronic',
        'acceleration' => '5.8 giây',
        'speed' => '250 km/h',
        'power' => '375 mã lực',
        'seats' => 7,
        'description' => 'BMW X7 2024 là SUV hạng sang cỡ lớn dành cho gia đình với 3 hàng ghế rộng rãi. Kết hợp giữa hệ truyền động hybrid hiệu quả và nội thất đẳng cấp, X7 là lựa chọn hoàn hảo cho những ai cần không gian rộng rãi.',
        'features' => [
            'Màn hình BMW Curved Display kép 12.3" + 14.9"',
            '3 hàng ghế với không gian rộng rãi',
            'Hệ thống treo khí nén thích ứng',
            'Hệ thống âm thanh Bowers & Wilkins Diamond',
            'Cửa sổ trời Sky Lounge Panoramic LED',
            'Hỗ trợ lái Level 2+ với trợ lý đỗ xe',
            'Tất cả 6-7 ghế có tính năng sưởi và điều chỉnh điện',
            'Hệ thống lọc không khí tiên tiến',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1555215695-3004980ad54e?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1617531653332-bd46c24f2068?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=800&h=500&fit=crop',
        ],
    ],
    9 => [
        'id' => 9,
        'name' => 'Mercedes-Benz GLE',
        'brand' => 'Mercedes-Benz',
        'year' => 2024,
        'price' => '3.7 tỷ',
        'fuel' => 'Hybrid',
        'transmission' => 'Tự động 9G-TRONIC',
        'acceleration' => '5.3 giây',
        'speed' => '240 km/h',
        'power' => '333 mã lực',
        'seats' => 5,
        'description' => 'Mercedes-Benz GLE 2024 là SUV sang trọng cỡ trung với khả năng off-road đáng kể và nội thất tinh tế theo phong cách Mercedes đặc trưng. Hệ thống AIRMATIC với E-ACTIVE BODY CONTROL giúp xe luôn êm ái trên mọi địa hình.',
        'features' => [
            'Hệ thống treo khí nén AIRMATIC',
            'E-ACTIVE BODY CONTROL chủ động',
            'Màn hình MBUX 12.3" kép',
            'Camera 360 độ với chức năng Transparent Hood',
            'Ghế da Nappa với massage và sưởi',
            'Hệ thống âm thanh Burmester Surround',
            'Điều hướng thực tế tăng cường (AR Navigation)',
            'Off-road Engineering Package',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1619767886558-efdc259cde1a?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1617531653332-bd46c24f2068?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800&h=500&fit=crop',
        ],
    ],
    10 => [
        'id' => 10,
        'name' => 'Jaguar F-Type',
        'brand' => 'Jaguar',
        'year' => 2024,
        'price' => '4.2 tỷ',
        'fuel' => 'Xăng',
        'transmission' => 'Tự động 8 cấp',
        'acceleration' => '3.7 giây',
        'speed' => '285 km/h',
        'power' => '450 mã lực',
        'seats' => 2,
        'description' => 'Jaguar F-Type 2024 là mẫu sports car đỉnh cao mang tính biểu tượng của thương hiệu Jaguar. Với thiết kế coupé cuốn hút, âm thanh ống xả mãnh liệt và khả năng vận hành hào hứng, F-Type là giấc mơ của mọi tín đồ xe thể thao.',
        'features' => [
            'Động cơ V8 Supercharged 5.0L',
            'Hệ thống dẫn động All Wheel Drive',
            'Ống xả Active Sport Exhaust',
            'Hệ thống treo thể thao Adaptive Dynamics',
            'Ghế thể thao Performance với da Windsor',
            'Màn hình cảm ứng Touch Pro 10"',
            'Hệ thống âm thanh Meridian 770W',
            'Lắp đặt phanh caramic tùy chọn',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1609521263047-f8f205293f24?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1616422285623-13ff0162193c?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1555215695-3004980ad54e?w=800&h=500&fit=crop',
        ],
    ],
    11 => [
        'id' => 11,
        'name' => 'Maserati Quattroporte',
        'brand' => 'Maserati',
        'year' => 2024,
        'price' => '6.9 tỷ',
        'fuel' => 'Xăng',
        'transmission' => 'Tự động 8 cấp ZF',
        'acceleration' => '4.8 giây',
        'speed' => '307 km/h',
        'power' => '530 mã lực',
        'seats' => 5,
        'description' => 'Maserati Quattroporte 2024 là sedan sang trọng đến từ xứ sở mì Ý, kết hợp giữa phong cách Italian đặc trưng và hiệu suất thể thao mạnh mẽ. Tiếng gầm của động cơ Nettuno V6 là âm nhạc dành riêng cho những người đam mê tốc độ.',
        'features' => [
            'Động cơ Nettuno V6 Twin-Turbo 3.0L',
            'Hệ thống dẫn động Q4 AWD thông minh',
            'Nội thất da thủ công Pieno Fiore',
            'Hệ thống âm thanh Sonus Faber 1,285W',
            'Màn hình MIA Multimedia 10.1"',
            'Ghế thể thao với tính năng massage',
            'Đèn pha Intelligent Matrix LED',
            'Hệ thống treo thể thao Skyhook',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1563720360172-67b8f3dce741?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1617531653332-bd46c24f2068?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1616422285623-13ff0162193c?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800&h=500&fit=crop',
        ],
    ],
    12 => [
        'id' => 12,
        'name' => 'Volvo XC90',
        'brand' => 'Volvo',
        'year' => 2024,
        'price' => '2.8 tỷ',
        'fuel' => 'Hybrid',
        'transmission' => 'Tự động 8 cấp Geartronic',
        'acceleration' => '5.4 giây',
        'speed' => '210 km/h',
        'power' => '455 mã lực',
        'seats' => 7,
        'description' => 'Volvo XC90 2024 là SUV 7 chỗ hạng sang với triết lý thiết kế Scandinavian tối giản tinh tế. Là thương hiệu an toàn hàng đầu thế giới, Volvo đã trang bị những công nghệ bảo vệ hành khách tiên tiến nhất cho XC90.',
        'features' => [
            'Hệ thống Plug-in Hybrid T8 Recharge',
            'Phạm vi điện thuần túy 40km',
            'Màn hình cảm ứng dọc Google Android Automotive 9"',
            'Hệ thống âm thanh Bowers & Wilkins 1,400W',
            '7 ghế với hàng ghế thứ 3 rộng rãi',
            'Hệ thống an toàn IntelliSafe Assist',
            'Pilot Assist - lái bán tự động',
            'Lọc không khí Clean Zone',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1617788138017-80ad40651399?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800&h=500&fit=crop',
        ],
    ],
    13 => [
        'id' => 13,
        'name' => 'Ferrari Roma',
        'brand' => 'Ferrari',
        'year' => 2024,
        'price' => '18.5 tỷ',
        'fuel' => 'Xăng',
        'transmission' => 'F1-DCT 8 cấp',
        'acceleration' => '3.4 giây',
        'speed' => '320 km/h',
        'power' => '612 mã lực',
        'seats' => 2,
        'description' => 'Ferrari Roma 2024 là mẫu gran turismo hiện đại nhất mang phong cách La Dolce Vita của kinh đô thời trang Ý. Sự kết hợp giữa đường nét thuần Ý thanh lịch và hiệu suất Ferrari đỉnh cao tạo nên một tác phẩm nghệ thuật có thể lăn bánh.',
        'features' => [
            'Động cơ V8 Twin-Turbo 3.9L',
            'Hộp số F1-DCT 8 cấp siêu nhanh',
            'Hệ thống Ferrari Dynamic Enhancer (FDE+)',
            'Ghế thể thao Ferrari Carbon với da Frau cao cấp',
            'Màn hình kỹ thuật số 16" cho người lái',
            'Màn hình phụ 8.4" cho hành khách',
            'Hệ thống âm thanh JBL High Fidelity',
            'Vành hợp kim 5 chấu độc quyền 20"',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1583121274602-3e2820c69888?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1616422285623-13ff0162193c?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1609521263047-f8f205293f24?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800&h=500&fit=crop',
        ],
    ],
    14 => [
        'id' => 14,
        'name' => 'Lamborghini Huracán',
        'brand' => 'Lamborghini',
        'year' => 2024,
        'price' => '22.0 tỷ',
        'fuel' => 'Xăng',
        'transmission' => '7 cấp LDF dual-clutch',
        'acceleration' => '2.9 giây',
        'speed' => '325 km/h',
        'power' => '631 mã lực',
        'seats' => 2,
        'description' => 'Lamborghini Huracán 2024 là siêu xe thuần Ý với ngoại hình cực kỳ ấn tượng và tiếng thét của động cơ V10 đặc trưng. Với ANIMA - Adaptive Network Intelligence Management, Huracán thích nghi tức thì với phong cách lái của bạn.',
        'features' => [
            'Động cơ V10 Naturally Aspirated 5.2L',
            'Hệ thống AWD Haldex thế hệ 5',
            'ANIMA (Adaptive Network Intelligence Management)',
            'Hệ thống phanh caramic ABS Lamborghini Piattaforma Inerziale',
            'Ghế thể thao carbon fiber Bicolore',
            'Màn hình kỹ thuật số 12.3" chống chói',
            'Launch Control và Race Mode',
            'Vành carbon fiber tùy chọn',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1525609004556-c46c7d6cf023?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1583121274602-3e2820c69888?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1609521263047-f8f205293f24?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1616422285623-13ff0162193c?w=800&h=500&fit=crop',
        ],
    ],
    15 => [
        'id' => 15,
        'name' => 'Aston Martin DB11',
        'brand' => 'Aston Martin',
        'year' => 2024,
        'price' => '15.2 tỷ',
        'fuel' => 'Xăng',
        'transmission' => 'Tự động 8 cấp ZF Touchtronic 3',
        'acceleration' => '3.8 giây',
        'speed' => '301 km/h',
        'power' => '503 mã lực',
        'seats' => 4,
        'description' => 'Aston Martin DB11 2024 là GT car (Grand Tourer) biểu tượng của thương hiệu đến từ Gaydon, Anh Quốc. Với thiết kế tao nhã và lịch lãm đặc trưng Aston Martin, DB11 là lựa chọn của những quý ông lịch lãm yêu thích tốc độ.',
        'features' => [
            'Động cơ AMG V8 Twin-Turbo 4.0L',
            'Khung nhôm thân xe siêu nhẹ VH Architecture',
            'Nội thất da Bridge of Weir Scotland',
            'Hệ thống âm thanh Bang & Olufsen BeoSound',
            'Màn hình cảm ứng kỳ thuật số 10" cải tiến',
            'Ghế GT cao cấp điều chỉnh 16 chiều',
            'Đèn pha LED Adaptive',
            'Bộ mâm 20" AMR đúc áp thấp',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1614200187524-dc4b892acf16?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1583121274602-3e2820c69888?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1616422285623-13ff0162193c?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1609521263047-f8f205293f24?w=800&h=500&fit=crop',
        ],
    ],
    16 => [
        'id' => 16,
        'name' => 'McLaren 720S',
        'brand' => 'McLaren',
        'year' => 2024,
        'price' => '19.8 tỷ',
        'fuel' => 'Xăng',
        'transmission' => 'SSG 7 cấp dual-clutch',
        'acceleration' => '2.8 giây',
        'speed' => '341 km/h',
        'power' => '710 mã lực',
        'seats' => 2,
        'description' => 'McLaren 720S 2024 là siêu xe thuần túy với công nghệ đua xe F1 được chuyển hóa lên đường phố. Monocoque carbon fiber siêu nhẹ, động cơ twin-turbo mạnh mẽ và khí động học chủ động tạo nên trải nghiệm lái không tưởng.',
        'features' => [
            'Monocoque carbon fiber MonoCell II',
            'Động cơ V8 Twin-Turbo M840T 4.0L',
            'Khí động học chủ động Active Aerodynamics',
            'Phanh carbon ceramic nhẹ hơn 14kg',
            'Hệ thống treo ProActive Chassis Control II',
            'Ghế thể thao carbon fiber McLaren',
            'Màn hình kỹ thuật số Folding 8"',
            'Launch Control và Race mode',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1619682817481-e994891cd1f5?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1525609004556-c46c7d6cf023?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1583121274602-3e2820c69888?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1616422285623-13ff0162193c?w=800&h=500&fit=crop',
        ],
    ],
    17 => [
        'id' => 17,
        'name' => 'Cadillac Escalade',
        'brand' => 'Cadillac',
        'year' => 2024,
        'price' => '4.5 tỷ',
        'fuel' => 'Xăng',
        'transmission' => 'Tự động 10 cấp',
        'acceleration' => '6.0 giây',
        'speed' => '210 km/h',
        'power' => '420 mã lực',
        'seats' => 7,
        'description' => 'Cadillac Escalade 2024 là SUV full-size sang trọng mang phong cách Mỹ đặc trưng. Màn hình OLED cong khổng lồ, không gian nội thất bậc nhất và âm thanh AKG Studio Reference là những điểm nhấn nổi bật của thế hệ mới.',
        'features' => [
            'Màn hình OLED cong 38" (3 màn hình ghép)',
            'Hệ thống âm thanh AKG Studio Reference 36 loa',
            'Hệ thống treo Air Ride thích ứng',
            'Đèn chiếu sáng nội thất 64 màu',
            'Tính năng Super Cruise tự lái cao tốc',
            'Camera Night Vision (tầm nhìn ban đêm)',
            'Khoang chứa đồ lớn nhất phân khúc',
            'Hệ thống sưởi/làm mát/massage toàn bộ ghế',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1619767886558-efdc259cde1a?w=800&h=500&fit=crop',
        ],
    ],
    18 => [
        'id' => 18,
        'name' => 'Lincoln Navigator',
        'brand' => 'Lincoln',
        'year' => 2024,
        'price' => '4.1 tỷ',
        'fuel' => 'Hybrid',
        'transmission' => 'Tự động 10 cấp SelectShift',
        'acceleration' => '5.9 giây',
        'speed' => '200 km/h',
        'power' => '440 mã lực',
        'seats' => 7,
        'description' => 'Lincoln Navigator 2024 mang đến sự ấm áp và sang trọng theo phong cách Mỹ với không gian nội thất hàng đầu phân khúc SUV full-size. Ghế Perfect Position và nội thất da thủ công tạo nên không gian di chuyển như phòng khách 5 sao.',
        'features' => [
            'Ghế Perfect Position 30 chiều điều chỉnh điện',
            'Hệ thống âm thanh Revel Ultima 3D 28 loa',
            'Hệ thống treo khí nén Lincoln Drive-E',
            'Màn hình SYNC 4A 13.2" cảm ứng',
            'Wireless Apple CarPlay/Android Auto',
            'Hệ thống sưởi vô lăng và cửa sổ ô tô',
            'Camera 360 độ với Bird\'s Eye View',
            'Intelligent Access với Smart Device',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1553440569-bcc63803a83d?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1617531653332-bd46c24f2068?w=800&h=500&fit=crop',
        ],
    ],
    19 => [
        'id' => 19,
        'name' => 'Genesis G90',
        'brand' => 'Genesis',
        'year' => 2024,
        'price' => '3.2 tỷ',
        'fuel' => 'Hybrid',
        'transmission' => 'Tự động 8 cấp',
        'acceleration' => '5.1 giây',
        'speed' => '240 km/h',
        'power' => '375 mã lực',
        'seats' => 5,
        'description' => 'Genesis G90 2024 là flagship sedan của thương hiệu luxury Hàn Quốc với chất lượng nội thất và công nghệ không thua kém các đối thủ châu Âu nhưng ở mức giá cạnh tranh hơn nhiều. Thiết kế Crest Grille và đèn Two Lines là nhận diện thương hiệu đặc trưng.',
        'features' => [
            'Hệ thống treo khí nén Electronically Controlled',
            'Ghế Ultra Premium với massage 23 điểm',
            'Hệ thống âm thanh Lexicon 17 loa',
            'Màn hình kỹ thuật số 12.3" kép',
            'Hệ thống camera Multi View 360°',
            'Genesis Digital Key (mở khóa bằng smartphone)',
            'Highway Driving Assist II',
            'Remote Smart Parking Assist',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1560958089-b8a1929cea89?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1617531653332-bd46c24f2068?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=800&h=500&fit=crop',
        ],
    ],
    20 => [
        'id' => 20,
        'name' => 'Tesla Model S Plaid',
        'brand' => 'Tesla',
        'year' => 2024,
        'price' => '2.6 tỷ',
        'fuel' => 'Điện',
        'transmission' => 'Không hộp số (Single Speed)',
        'acceleration' => '1.99 giây',
        'speed' => '322 km/h',
        'power' => '1,020 mã lực',
        'seats' => 5,
        'description' => 'Tesla Model S Plaid 2024 là sedan điện nhanh nhất thế giới với 3 motor điện tạo ra hơn 1,000 mã lực. Với phạm vi hoạt động hơn 600km và hệ thống tự lái Autopilot tiên tiến, Model S Plaid định nghĩa lại tương lai của xe hơi.',
        'features' => [
            'Ba motor điện (1 trước, 2 sau) Tri-Motor AWD',
            'Pin LFP/NCA dung lượng 100 kWh',
            'Phạm vi hoạt động: 637 km (EPA)',
            'Sạc nhanh Supercharger V3 (250kW)',
            'Màn hình trung tâm cảm ứng 17" xoay ngang/dọc',
            'Màn hình hàng sau 8" giải trí độc lập',
            'Autopilot & Full Self-Driving Capability',
            'Hệ thống âm thanh Premium 22 loa',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1617531653332-bd46c24f2068?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1555215695-3004980ad54e?w=800&h=500&fit=crop',
        ],
    ],
    21 => [
        'id' => 21,
        'name' => 'Porsche Cayenne Turbo GT',
        'brand' => 'Porsche',
        'year' => 2024,
        'price' => '8.9 tỷ',
        'fuel' => 'Xăng',
        'transmission' => 'Tiptronic S 8 cấp',
        'acceleration' => '3.3 giây',
        'speed' => '300 km/h',
        'power' => '659 mã lực',
        'seats' => 5,
        'description' => 'Porsche Cayenne Turbo GT 2024 là đỉnh cao của dòng SUV hiệu suất cao từ Porsche. Đây là mẫu SUV sản xuất hàng loạt nhanh nhất Nürburgring từng được ghi nhận, kết hợp hoàn hảo giữa khả năng chở gia đình và sức mạnh siêu xe.',
        'features' => [
            'Động cơ V8 Twin-Turbo 4.0L độ công suất cao nhất',
            'Hệ thống Porsche Torque Vectoring Plus (PTV+)',
            'Phanh caramic PCCB 10 piston đặc biệt',
            'Hệ thống treo thể thao PASM với giảm chấn điều chỉnh',
            'Vành carbon fiber 22" LOMA độc quyền',
            'Hệ thống âm thanh Burmester High-End 3D Surround',
            'PCM với màn hình cảm ứng 12.3"',
            'Ghế Sport Plus Carbon 8 chiều điều chỉnh điện',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1616422285623-13ff0162193c?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800&h=500&fit=crop',
        ],
    ],
    22 => [
        'id' => 22,
        'name' => 'BMW M8 Competition',
        'brand' => 'BMW',
        'year' => 2024,
        'price' => '9.5 tỷ',
        'fuel' => 'Xăng',
        'transmission' => 'M Steptronic 8 cấp',
        'acceleration' => '3.2 giây',
        'speed' => '305 km/h',
        'power' => '617 mã lực',
        'seats' => 4,
        'description' => 'BMW M8 Competition 2024 là mẫu gran coupe mạnh mẽ nhất của BMW M, kết hợp giữa vẻ đẹp của một gran turismo và sức mạnh của một xe đua. Hệ thống xDrive AWD thông minh và thiết lập M-specific đảm bảo hiệu suất tối đa.',
        'features' => [
            'Động cơ V8 Twin-Turbo 4.4L M TwinPower',
            'Hệ thống dẫn động xDrive AWD chủ động',
            'M Carbon Ceramic Brakes tùy chọn',
            'Ghế M da Merino ôm sát với sưởi',
            'Vô lăng M Carbon tích hợp M Drive chuyên biệt',
            'Màn hình BMW Curved Display 12.3" + 14.9"',
            'Hệ thống âm thanh Bowers & Wilkins Diamond 1,500W',
            'M Exhaust System với khả năng điều chỉnh âm thanh',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1555215695-3004980ad54e?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1616422285623-13ff0162193c?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800&h=500&fit=crop',
        ],
    ],
    23 => [
        'id' => 23,
        'name' => 'Mercedes-AMG GT',
        'brand' => 'Mercedes-AMG',
        'year' => 2024,
        'price' => '11.8 tỷ',
        'fuel' => 'Xăng',
        'transmission' => 'AMG Speedshift DCT 9 cấp',
        'acceleration' => '3.1 giây',
        'speed' => '315 km/h',
        'power' => '577 mã lực',
        'seats' => 2,
        'description' => 'Mercedes-AMG GT 2024 là siêu xe 2 cửa đỉnh cao được phát triển hoàn toàn bởi AMG – bộ phận hiệu suất cao của Mercedes-Benz. Thân xe nhôm siêu nhẹ, động cơ V8 đặt phía trước và phân bố trọng lượng lý tưởng tạo nên khả năng vận hành tuyệt vời.',
        'features' => [
            'Động cơ AMG V8 Biturbo 4.0L',
            'Hộp số AMG Speedshift DCT 9 cấp cực nhanh',
            'AMG Active Ride Control (treo khí nén chủ động)',
            'AMG Carbon Ceramic Brakes',
            'Ghế AMG Performance Carbon da Nappa',
            'AMG Ride Control+ 3 chế độ điều chỉnh điện',
            'MBUX Infotainment với màn hình AMG 11.9"',
            'AMG Night Package - mạ đen các chi tiết ngoại thất',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1614200187524-dc4b892acf16?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1617531653332-bd46c24f2068?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1616422285623-13ff0162193c?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1609521263047-f8f205293f24?w=800&h=500&fit=crop',
        ],
    ],
    24 => [
        'id' => 24,
        'name' => 'Audi RS e-tron GT',
        'brand' => 'Audi',
        'year' => 2024,
        'price' => '5.6 tỷ',
        'fuel' => 'Điện',
        'transmission' => 'Không hộp số (2-speed rear)',
        'acceleration' => '3.3 giây',
        'speed' => '250 km/h',
        'power' => '598 mã lực',
        'seats' => 4,
        'description' => 'Audi RS e-tron GT 2024 là sedan điện hiệu suất cao mang thiết kế gran turismo đặc trưng kết hợp với công nghệ điện tiên tiến từ nền tảng J1 dùng chung với Porsche Taycan. Sạc 800V cho phép nạp điện cực nhanh chỉ 22 phút.',
        'features' => [
            'Hai motor điện Quattro AWD (trước + sau)',
            'Pin 93.4 kWh với sạc 800V siêu nhanh',
            'Phạm vi hoạt động: 488 km (WLTP)',
            'Sạc DC tối đa 270 kW (22 phút 5-80%)',
            'Hệ thống treo khí nén Air Suspension thể thao',
            'Màn hình MMI 10.1" cảm ứng chống bóng loáng',
            'Hệ thống âm thanh Bang & Olufsen 710W',
            'Matrix LED HD với 1,3 triệu điểm sáng',
        ],
        'images' => [
            'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1555215695-3004980ad54e?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1617531653332-bd46c24f2068?w=800&h=500&fit=crop',
        ],
    ],
];

// Get car by ID, default to 1 if not found
$id = intval($_GET['id'] ?? 1);
$car = $cars[$id] ?? $cars[1];

// Related cars: pick 3 others (exclude current)
$relatedCars = array_filter($cars, fn($c) => $c['id'] !== $car['id']);
$relatedCars = array_slice($relatedCars, 0, 3);
?>

    <!-- Breadcrumb -->
    <div style="background: var(--light-gray); padding: 15px 0;">
        <div class="container">
            <a href="index.php" style="color: var(--medium-gray);"><i class="fas fa-home"></i> Trang chủ</a>
            <span style="margin: 0 10px; color: var(--medium-gray);">/</span>
            <a href="cars.php" style="color: var(--medium-gray);">Danh sách xe</a>
            <span style="margin: 0 10px; color: var(--medium-gray);">/</span>
            <span style="color: var(--primary-red);"><?php echo $car['name']; ?></span>
        </div>
    </div>

    <!-- Car Detail -->
    <section class="car-detail">
        <div class="container">
            <!-- Gallery -->
            <div class="car-gallery">
                <div class="main-image">
                    <img src="<?php echo $car['images'][0]; ?>" alt="<?php echo $car['name']; ?>" id="mainImage">
                </div>
                <div class="thumbnail-grid">
                    <?php foreach($car['images'] as $index => $image): ?>
                    <div class="thumbnail <?php echo $index == 0 ? 'active' : ''; ?>" onclick="changeImage('<?php echo $image; ?>', this)">
                        <img src="<?php echo $image; ?>" alt="Thumbnail <?php echo $index + 1; ?>">
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Car Info -->
            <div class="car-detail-info">
                <span class="car-brand-tag"><i class="fas fa-car"></i> <?php echo $car['brand']; ?> <?php echo $car['year']; ?></span>
                <h1><?php echo $car['name']; ?></h1>
                <div class="detail-price"><?php echo $car['price']; ?> VND</div>

                <div class="specs-grid">
                    <div class="spec-box">
                        <small>Nhiên liệu</small>
                        <strong><i class="fas fa-gas-pump"></i> <?php echo $car['fuel']; ?></strong>
                    </div>
                    <div class="spec-box">
                        <small>Hộp số</small>
                        <strong><i class="fas fa-cog"></i> <?php echo $car['transmission']; ?></strong>
                    </div>
                    <div class="spec-box">
                        <small>Tăng tốc 0-100</small>
                        <strong><i class="fas fa-tachometer-alt"></i> <?php echo $car['acceleration']; ?></strong>
                    </div>
                    <div class="spec-box">
                        <small>Tốc độ tối đa</small>
                        <strong><i class="fas fa-flag-checkered"></i> <?php echo $car['speed']; ?></strong>
                    </div>
                    <div class="spec-box">
                        <small>Công suất</small>
                        <strong><i class="fas fa-bolt"></i> <?php echo $car['power']; ?></strong>
                    </div>
                    <div class="spec-box">
                        <small>Số ghế</small>
                        <strong><i class="fas fa-users"></i> <?php echo $car['seats']; ?> chỗ</strong>
                    </div>
                </div>

                <p style="margin-bottom: 20px; color: var(--medium-gray);"><?php echo $car['description']; ?></p>

                <div class="car-actions">
                    <a href="checkout.php?id=<?php echo $car['id']; ?>" class="btn btn-primary">
                        <i class="fas fa-shopping-cart"></i> Mua Ngay
                    </a>
                    <button class="btn btn-outline" onclick="addToCart(<?php echo $car['id']; ?>)">
                        <i class="far fa-heart"></i> Thêm vào yêu thích
                    </button>
                </div>

                <!-- Contact -->
                <div style="margin-top: 30px; padding: 20px; background: var(--light-gray); border-radius: var(--border-radius);">
                    <h4 style="margin-bottom: 15px;"><i class="fas fa-phone-alt" style="color: var(--primary-red);"></i> Cần tư vấn?</h4>
                    <p style="margin-bottom: 15px; font-size: 14px; color: var(--medium-gray);">Liên hệ ngay để nhận tư vấn miễn phí và báo giá tốt nhất</p>
                    <div style="display: flex; gap: 10px;">
                        <a href="tel:19001234" class="btn btn-primary" style="flex: 1; text-align: center;">
                            <i class="fas fa-phone-alt"></i> 1900 1234
                        </a>
                        <a href="contact.php" class="btn btn-outline" style="flex: 1; text-align: center;">
                            <i class="fas fa-envelope"></i> Gửi tin nhắn
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features & Description -->
    <section class="section" style="background: var(--light-gray);">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px;">
                <!-- Features -->
                <div>
                    <h2 style="margin-bottom: 25px;">Tính Năng <span style="color: var(--primary-red);">Nổi Bật</span></h2>
                    <ul style="list-style: none;">
                        <?php foreach($car['features'] as $feature): ?>
                        <li style="padding: 12px 0; border-bottom: 1px solid #ddd; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-check-circle" style="color: var(--primary-red); flex-shrink: 0;"></i>
                            <span><?php echo $feature; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Description -->
                <div>
                    <h2 style="margin-bottom: 25px;">Giới Thiệu <span style="color: var(--primary-red);">Chi Tiết</span></h2>
                    <p style="margin-bottom: 15px; color: var(--medium-gray);">
                        <?php echo $car['description']; ?>
                    </p>
                    <p style="margin-bottom: 15px; color: var(--medium-gray);">
                        <?php echo $car['name']; ?> <?php echo $car['year']; ?> đến từ thương hiệu <strong><?php echo $car['brand']; ?></strong> nổi tiếng là một trong những lựa chọn đáng cân nhắc hàng đầu trong phân khúc xe sang trọng. Với công suất <?php echo $car['power']; ?> và khả năng tăng tốc 0-100 km/h chỉ trong <?php echo $car['acceleration']; ?>, đây là trải nghiệm lái đẳng cấp vượt trội.
                    </p>
                    <p style="color: var(--medium-gray);">
                        Sử dụng nhiên liệu <?php echo $car['fuel']; ?> kết hợp với hộp số <?php echo $car['transmission']; ?>, xe mang đến sự cân bằng hoàn hảo giữa hiệu suất và tiết kiệm. Thiết kế nội thất dành cho <?php echo $car['seats']; ?> hành khách được chăm chút tỉ mỉ từng chi tiết, hứa hẹn mang đến hành trình thoải mái và xa hoa nhất.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Cars -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Xe <span>Liên Quan</span></h2>
                <p>Các mẫu xe tương tự bạn có thể thích</p>
            </div>
            <div class="car-grid">
                <?php foreach($relatedCars as $related): ?>
                <div class="car-card">
                    <div class="car-image">
                        <img src="<?php echo $related['images'][0]; ?>" alt="<?php echo $related['name']; ?>">
                    </div>
                    <div class="car-info">
                        <h3 class="car-title"><?php echo $related['name']; ?></h3>
                        <p class="car-brand"><?php echo $related['brand']; ?> <?php echo $related['year']; ?></p>
                        <div class="car-price">
                            <span class="price"><?php echo $related['price']; ?><small>VND</small></span>
                        </div>
                        <div style="margin-top: 10px;">
                            <a href="car-detail.php?id=<?php echo $related['id']; ?>" class="btn btn-primary" style="width: 100%; text-align: center; display: block;">Xem Chi Tiết</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <script>
    function changeImage(src, element) {
        document.getElementById('mainImage').src = src;
        document.querySelectorAll('.thumbnail').forEach(thumb => thumb.classList.remove('active'));
        element.classList.add('active');
    }
    </script>

<?php require_once 'footer.php'; ?>