<?php
$pageTitle = "Trang chủ";
require_once 'header.php';
?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Khám Phá <span>Ô Tô Sang Trọng</span></h1>
            <p>Trải nghiệm đẳng cấp với bộ sưu tập xe hơi cao cấp từ các thương hiệu hàng đầu thế giới</p>
            <div style="margin-top: 30px;">
                <a href="cars.php" class="btn btn-primary">Xem Danh Sách Xe</a>
                <a href="about.php" class="btn btn-outline" style="margin-left: 15px;">Về Chúng Tôi</a>
            </div>
        </div>
    </section>

    <!-- Featured Cars -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Xe <span>Nổi Bật</span></h2>
                <p>Những mẫu xe được quan tâm nhất tại showroom</p>
            </div>
            <div class="car-grid">
                <!-- Car 1 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="https://images.unsplash.com/photo-1617531653332-bd46c24f2068?w=500&h=300&fit=crop" alt="Mercedes-Benz S-Class">
                        <span class="car-badge">Hot</span>
                    </div>
                    <div class="car-info">
                        <h3 class="car-title">Mercedes-Benz S-Class</h3>
                        <p class="car-brand">Mercedes-Benz 2024</p>
                        <div class="car-specs">
                            <div class="spec-item"><i class="fas fa-gas-pump"></i> Xăng</div>
                            <div class="spec-item"><i class="fas fa-cog"></i> Tự động</div>
                            <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 4.5s</div>
                        </div>
                        <div class="car-price">
                            <div>
                                <span class="price">5.2 tỷ<small>VND</small></span>
                            </div>
                            <div class="car-actions">
                                <a href="car-detail.php?id=1" class="btn btn-primary">Chi tiết</a>
                                <button class="btn btn-outline" onclick="addToCart(1)"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 2 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?w=500&h=300&fit=crop" alt="BMW 7 Series">
                        <span class="car-badge">New</span>
                    </div>
                    <div class="car-info">
                        <h3 class="car-title">BMW 7 Series</h3>
                        <p class="car-brand">BMW 2024</p>
                        <div class="car-specs">
                            <div class="spec-item"><i class="fas fa-gas-pump"></i> Hybrid</div>
                            <div class="spec-item"><i class="fas fa-cog"></i> Tự động</div>
                            <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 4.7s</div>
                        </div>
                        <div class="car-price">
                            <div>
                                <span class="price">4.8 tỷ<small>VND</small></span>
                            </div>
                            <div class="car-actions">
                                <a href="car-detail.php?id=2" class="btn btn-primary">Chi tiết</a>
                                <button class="btn btn-outline" onclick="addToCart(2)"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 3 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=500&h=300&fit=crop" alt="Audi A8">
                    </div>
                    <div class="car-info">
                        <h3 class="car-title">Audi A8 L</h3>
                        <p class="car-brand">Audi 2024</p>
                        <div class="car-specs">
                            <div class="spec-item"><i class="fas fa-gas-pump"></i> Xăng</div>
                            <div class="spec-item"><i class="fas fa-cog"></i> Tự động</div>
                            <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 5.0s</div>
                        </div>
                        <div class="car-price">
                            <div>
                                <span class="price">4.5 tỷ<small>VND</small></span>
                            </div>
                            <div class="car-actions">
                                <a href="car-detail.php?id=3" class="btn btn-primary">Chi tiết</a>
                                <button class="btn btn-outline" onclick="addToCart(3)"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 4 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="https://images.unsplash.com/photo-1616422285623-13ff0162193c?w=500&h=300&fit=crop" alt="Porsche 911">
                        <span class="car-badge">Sport</span>
                    </div>
                    <div class="car-info">
                        <h3 class="car-title">Porsche 911 Carrera</h3>
                        <p class="car-brand">Porsche 2024</p>
                        <div class="car-specs">
                            <div class="spec-item"><i class="fas fa-gas-pump"></i> Xăng</div>
                            <div class="spec-item"><i class="fas fa-cog"></i> PDK</div>
                            <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 3.5s</div>
                        </div>
                        <div class="car-price">
                            <div>
                                <span class="price">6.8 tỷ<small>VND</small></span>
                            </div>
                            <div class="car-actions">
                                <a href="car-detail.php?id=4" class="btn btn-primary">Chi tiết</a>
                                <button class="btn btn-outline" onclick="addToCart(4)"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 5 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=500&h=300&fit=crop" alt="Lexus LS">
                        <span class="car-badge">-10%</span>
                    </div>
                    <div class="car-info">
                        <h3 class="car-title">Lexus LS 500</h3>
                        <p class="car-brand">Lexus 2024</p>
                        <div class="car-specs">
                            <div class="spec-item"><i class="fas fa-gas-pump"></i> Xăng</div>
                            <div class="spec-item"><i class="fas fa-cog"></i> Tự động</div>
                            <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 5.0s</div>
                        </div>
                        <div class="car-price">
                            <div>
                                <span class="price">3.9 tỷ<small>VND</small></span>
                            </div>
                            <div class="car-actions">
                                <a href="car-detail.php?id=5" class="btn btn-primary">Chi tiết</a>
                                <button class="btn btn-outline" onclick="addToCart(5)"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 6 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=500&h=300&fit=crop" alt="Range Rover">
                    </div>
                    <div class="car-info">
                        <h3 class="car-title">Range Rover Sport</h3>
                        <p class="car-brand">Land Rover 2024</p>
                        <div class="car-specs">
                            <div class="spec-item"><i class="fas fa-gas-pump"></i> Hybrid</div>
                            <div class="spec-item"><i class="fas fa-cog"></i> Tự động</div>
                            <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 5.7s</div>
                        </div>
                        <div class="car-price">
                            <div>
                                <span class="price">5.5 tỷ<small>VND</small></span>
                            </div>
                            <div class="car-actions">
                                <a href="car-detail.php?id=6" class="btn btn-primary">Chi tiết</a>
                                <button class="btn btn-outline" onclick="addToCart(6)"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 7 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="https://images.unsplash.com/photo-1606220588913-b3aacb4d2f46?w=500&h=300&fit=crop" alt="Bentley Continental">
                        <span class="car-badge">Luxury</span>
                    </div>
                    <div class="car-info">
                        <h3 class="car-title">Bentley Continental GT</h3>
                        <p class="car-brand">Bentley 2024</p>
                        <div class="car-specs">
                            <div class="spec-item"><i class="fas fa-gas-pump"></i> Xăng</div>
                            <div class="spec-item"><i class="fas fa-cog"></i> Tự động</div>
                            <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 3.6s</div>
                        </div>
                        <div class="car-price">
                            <div>
                                <span class="price">12.5 tỷ<small>VND</small></span>
                            </div>
                            <div class="car-actions">
                                <a href="car-detail.php?id=7" class="btn btn-primary">Chi tiết</a>
                                <button class="btn btn-outline" onclick="addToCart(7)"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 8 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?w=500&h=300&fit=crop" alt="BMW X7">
                        <span class="car-badge">SUV</span>
                    </div>
                    <div class="car-info">
                        <h3 class="car-title">BMW X7</h3>
                        <p class="car-brand">BMW 2024</p>
                        <div class="car-specs">
                            <div class="spec-item"><i class="fas fa-gas-pump"></i> Hybrid</div>
                            <div class="spec-item"><i class="fas fa-cog"></i> Tự động</div>
                            <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 5.8s</div>
                        </div>
                        <div class="car-price">
                            <div>
                                <span class="price">5.1 tỷ<small>VND</small></span>
                            </div>
                            <div class="car-actions">
                                <a href="car-detail.php?id=8" class="btn btn-primary">Chi tiết</a>
                                <button class="btn btn-outline" onclick="addToCart(8)"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 9 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="https://images.unsplash.com/photo-1619767886558-efdc259cde1a?w=500&h=300&fit=crop" alt="Mercedes GLE">
                    </div>
                    <div class="car-info">
                        <h3 class="car-title">Mercedes-Benz GLE</h3>
                        <p class="car-brand">Mercedes-Benz 2024</p>
                        <div class="car-specs">
                            <div class="spec-item"><i class="fas fa-gas-pump"></i> Hybrid</div>
                            <div class="spec-item"><i class="fas fa-cog"></i> Tự động</div>
                            <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 5.3s</div>
                        </div>
                        <div class="car-price">
                            <div>
                                <span class="price">3.7 tỷ<small>VND</small></span>
                            </div>
                            <div class="car-actions">
                                <a href="car-detail.php?id=9" class="btn btn-primary">Chi tiết</a>
                                <button class="btn btn-outline" onclick="addToCart(9)"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 10 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="https://images.unsplash.com/photo-1609521263047-f8f205293f24?w=500&h=300&fit=crop" alt="Jaguar F-Type">
                        <span class="car-badge">Sport</span>
                    </div>
                    <div class="car-info">
                        <h3 class="car-title">Jaguar F-Type</h3>
                        <p class="car-brand">Jaguar 2024</p>
                        <div class="car-specs">
                            <div class="spec-item"><i class="fas fa-gas-pump"></i> Xăng</div>
                            <div class="spec-item"><i class="fas fa-cog"></i> Tự động</div>
                            <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 3.7s</div>
                        </div>
                        <div class="car-price">
                            <div>
                                <span class="price">4.2 tỷ<small>VND</small></span>
                            </div>
                            <div class="car-actions">
                                <a href="car-detail.php?id=10" class="btn btn-primary">Chi tiết</a>
                                <button class="btn btn-outline" onclick="addToCart(10)"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 11 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="https://images.unsplash.com/photo-1563720360172-67b8f3dce741?w=500&h=300&fit=crop" alt="Maserati">
                        <span class="car-badge">Exclusive</span>
                    </div>
                    <div class="car-info">
                        <h3 class="car-title">Maserati Quattroporte</h3>
                        <p class="car-brand">Maserati 2024</p>
                        <div class="car-specs">
                            <div class="spec-item"><i class="fas fa-gas-pump"></i> Xăng</div>
                            <div class="spec-item"><i class="fas fa-cog"></i> Tự động</div>
                            <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 4.8s</div>
                        </div>
                        <div class="car-price">
                            <div>
                                <span class="price">6.9 tỷ<small>VND</small></span>
                            </div>
                            <div class="car-actions">
                                <a href="car-detail.php?id=11" class="btn btn-primary">Chi tiết</a>
                                <button class="btn btn-outline" onclick="addToCart(11)"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 12 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="https://images.unsplash.com/photo-1617788138017-80ad40651399?w=500&h=300&fit=crop" alt="Volvo XC90">
                        <span class="car-badge">-15%</span>
                    </div>
                    <div class="car-info">
                        <h3 class="car-title">Volvo XC90</h3>
                        <p class="car-brand">Volvo 2024</p>
                        <div class="car-specs">
                            <div class="spec-item"><i class="fas fa-bolt"></i> Hybrid</div>
                            <div class="spec-item"><i class="fas fa-cog"></i> Tự động</div>
                            <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 5.4s</div>
                        </div>
                        <div class="car-price">
                            <div>
                                <span class="price">2.8 tỷ<small>VND</small></span>
                            </div>
                            <div class="car-actions">
                                <a href="car-detail.php?id=12" class="btn btn-primary">Chi tiết</a>
                                <button class="btn btn-outline" onclick="addToCart(12)"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 40px;">
                <a href="cars.php" class="btn btn-primary">Xem Tất Cả Xe</a>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="section features">
        <div class="container">
            <div class="section-title">
                <h2 style="color: var(--white);">Tại Sao Chọn <span>AutoLuxury</span></h2>
                <p style="color: #ccc;">Những ưu điểm vượt trội khi mua xe tại showroom của chúng tôi</p>
            </div>
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon"><i class="fas fa-award"></i></div>
                    <h3>Chất Lượng Đảm Bảo</h3>
                    <p>Tất cả xe đều được kiểm tra kỹ lưỡng, cam kết chất lượng tốt nhất</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fas fa-hand-holding-usd"></i></div>
                    <h3>Giá Tốt Nhất</h3>
                    <p>Cam kết giá cạnh tranh nhất thị trường với nhiều ưu đãi hấp dẫn</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>Bảo Hành Toàn Diện</h3>
                    <p>Bảo hành chính hãng, hỗ trợ 24/7 mọi lúc mọi nơi</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fas fa-file-contract"></i></div>
                    <h3>Thủ Tục Nhanh Chóng</h3>
                    <p>Hỗ trợ thủ tục mua xe trả góp nhanh gọn trong 30 phút</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Brands -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Thương Hiệu <span>Đối Tác</span></h2>
                <p>Đại lý ủy quyền của các thương hiệu hàng đầu thế giới</p>
            </div>
            <div style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; gap: 30px;">
                <div style="text-align: center; font-size: 24px; font-weight: bold; color: var(--medium-gray);">
                    <i class="fab fa-benz" style="font-size: 60px; margin-bottom: 10px; display: block;"></i>
                    MERCEDES-BENZ
                </div>
                <div style="text-align: center; font-size: 24px; font-weight: bold; color: var(--medium-gray);">
                    <i class="fab fa-bmw" style="font-size: 60px; margin-bottom: 10px; display: block;"></i>
                    BMW
                </div>
                <div style="text-align: center; font-size: 24px; font-weight: bold; color: var(--medium-gray);">
                    <i class="fas fa-car" style="font-size: 60px; margin-bottom: 10px; display: block;"></i>
                    AUDI
                </div>
                <div style="text-align: center; font-size: 24px; font-weight: bold; color: var(--medium-gray);">
                    <i class="fas fa-car-side" style="font-size: 60px; margin-bottom: 10px; display: block;"></i>
                    PORSCHE
                </div>
                <div style="text-align: center; font-size: 24px; font-weight: bold; color: var(--medium-gray);">
                    <i class="fas fa-truck" style="font-size: 60px; margin-bottom: 10px; display: block;"></i>
                    LEXUS
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News -->
    <section class="section" style="background: var(--light-gray);">
        <div class="container">
            <div class="section-title">
                <h2>Tin Tức <span>Mới Nhất</span></h2>
                <p>Cập nhật thông tin thị trường ô tô mới nhất</p>
            </div>
            <div class="news-grid">
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?w=400&h=250&fit=crop" alt="News 1">
                    </div>
                    <div class="news-content">
                        <div class="news-date"><i class="far fa-calendar-alt"></i> 15/04/2024</div>
                        <h3 class="news-title"><a href="news-detail.php?id=1">Mercedes-Benz S-Class mới ra mắt với nhiều công nghệ đỉnh cao</a></h3>
                        <p class="news-excerpt">Phiên bản mới nhất của S-Series mang đến trải nghiệm sang trọng và công nghệ tiên tiến...</p>
                        <a href="news-detail.php?id=1" class="read-more">Đọc thêm <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=400&h=250&fit=crop" alt="News 2">
                    </div>
                    <div class="news-content">
                        <div class="news-date"><i class="far fa-calendar-alt"></i> 12/04/2024</div>
                        <h3 class="news-title"><a href="news-detail.php?id=2">Top 5 sedan sang trọng đáng mua nhất năm 2024</a></h3>
                        <p class="news-excerpt">Dưới đây là danh sách những mẫu sedan hạng sang đang được ưa chuộng nhất hiện nay...</p>
                        <a href="news-detail.php?id=2" class="read-more">Đọc thêm <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=400&h=250&fit=crop" alt="News 3">
                    </div>
                    <div class="news-content">
                        <div class="news-date"><i class="far fa-calendar-alt"></i> 10/04/2024</div>
                        <h3 class="news-title"><a href="news-detail.php?id=3">Mùa giảm giá lớn nhất năm - Giảm đến 20% cho tất cả các dòng xe</a></h3>
                        <p class="news-excerpt">Cơ hội cuối cùng để sở hữu xe hơi sang trọng với mức giá ưu đãi chưa từng có...</p>
                        <a href="news-detail.php?id=3" class="read-more">Đọc thêm <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'footer.php'; ?>
