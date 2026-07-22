<?php
$pageTitle = "Liên Hệ";
$pageSubtitle = "Kết nối với AutoLuxury để được hỗ trợ tốt nhất";
$showPageTitle = true;
require_once 'header.php';
?>

    <!-- Contact Content -->
    <section class="contact-content">
        <div class="container">
            <div class="contact-info">
                <h2>Liên Hệ Với <span>Chúng Tôi</span></h2>
                <p style="margin-bottom: 30px; color: var(--medium-gray);">Chúng tôi luôn sẵn sàng lắng nghe và hỗ trợ bạn. Hãy liên hệ với AutoLuxury qua bất kỳ kênh nào dưới đây.</p>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-text">
                        <h4>Địa Chỉ Showroom</h4>
                        <p>123 Nguyễn Văn Linh, Quận 7, Thành phố Hồ Chí Minh</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="info-text">
                        <h4>Điện Thoại</h4>
                        <p>Hotline: 1900 1234</p>
                        <p>Zalo: 0909 123 456</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-text">
                        <h4>Email</h4>
                        <p>info@autoluxury.vn</p>
                        <p>support@autoluxury.vn</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="info-text">
                        <h4>Giờ Làm Việc</h4>
                        <p>Thứ 2 - Thứ 6: 8:00 - 18:00</p>
                        <p>Thứ 7 - Chủ Nhật: 8:00 - 20:00</p>
                    </div>
                </div>

                <div style="margin-top: 40px;">
                    <h4 style="margin-bottom: 15px;">Kết Nối Với Chúng Tôi</h4>
                    <div class="social-links" style="gap: 15px;">
                        <a href="#" style="width: 50px; height: 50px; font-size: 20px; background: var(--primary-red);"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" style="width: 50px; height: 50px; font-size: 20px; background: var(--primary-red);"><i class="fab fa-youtube"></i></a>
                        <a href="#" style="width: 50px; height: 50px; font-size: 20px; background: var(--primary-red);"><i class="fab fa-instagram"></i></a>
                        <a href="#" style="width: 50px; height: 50px; font-size: 20px; background: var(--primary-red);"><i class="fab fa-tiktok"></i></a>
                        <a href="#" style="width: 50px; height: 50px; font-size: 20px; background: var(--primary-red);"><i class="fab fa-zalo"></i></a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h3 style="margin-bottom: 25px;">Gửi Tin Nhắn</h3>
                <form>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Họ Tên *</label>
                            <input type="text" placeholder="Nhập họ tên của bạn" required>
                        </div>
                        <div class="form-group">
                            <label>Số Điện Thoại *</label>
                            <input type="tel" placeholder="Nhập số điện thoại" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" placeholder="Nhập email của bạn" required>
                    </div>
                    <div class="form-group">
                        <label>Chủ Đề</label>
                        <select>
                            <option>Tư vấn mua xe</option>
                            <option>Bán xe cũ</option>
                            <option>Bảo dưỡng & sửa chữa</option>
                            <option>Hợp tác kinh doanh</option>
                            <option>Khác</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nội Dung *</label>
                        <textarea placeholder="Nhập nội dung tin nhắn..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        <i class="fas fa-paper-plane"></i> Gửi Tin Nhắn
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Map -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Vị Trí <span>Showroom</span></h2>
            </div>
            <div style="width: 100%; height: 400px; background: #ddd; border-radius: var(--border-radius); overflow: hidden;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1234567890123!2d106.12345678901234!3d10.123456789012345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDA3JzI0LjQiTiAxMDbCsDA3JzIwLjQiRQ!5e0!3m2!1svi!2s!4v1234567890123!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section" style="background: var(--light-gray);">
        <div class="container">
            <div class="section-title">
                <h2>Câu Hỏi <span>Thường Gặp</span></h2>
            </div>
            <div style="max-width: 800px; margin: 0 auto;">
                <div style="background: var(--white); padding: 20px; border-radius: var(--border-radius); margin-bottom: 15px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <h4 style="margin-bottom: 10px; color: var(--primary-red);">1. Tôi có thể mua xe trả góp không?</h4>
                    <p style="color: var(--medium-gray);">Có, AutoLuxury hỗ trợ mua xe trả góp với lãi suất ưu đãi từ 0%. Thủ tục đơn giản, giải ngân nhanh trong 24h.</p>
                </div>
                <div style="background: var(--white); padding: 20px; border-radius: var(--border-radius); margin-bottom: 15px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <h4 style="margin-bottom: 10px; color: var(--primary-red);">2. Thời gian bảo hành là bao lâu?</h4>
                    <p style="color: var(--medium-gray);">Tùy theo hãng xe, thời gian bảo hành từ 3-5 năm hoặc 100.000km. AutoLuxury cũng cam kết bảo dưỡng trọn đời cho tất cả xe bán ra.</p>
                </div>
                <div style="background: var(--white); padding: 20px; border-radius: var(--border-radius); margin-bottom: 15px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <h4 style="margin-bottom: 10px; color: var(--primary-red);">3. Tôi có thể test lái xe không?</h4>
                    <p style="color: var(--medium-gray);">Hoàn toàn được. AutoLuxury hỗ trợ test lái miễn phí tất cả các mẫu xe tại showroom. Vui lòng đặt lịch trước để chúng tôi chuẩn bị tốt nhất.</p>
                </div>
                <div style="background: var(--white); padding: 20px; border-radius: var(--border-radius); box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <h4 style="margin-bottom: 10px; color: var(--primary-red);">4. Showroom có dịch vụ cứu hộ không?</h4>
                    <p style="color: var(--medium-gray);">Có, AutoLuxury cung cấp dịch vụ cứu hộ 24/7 miễn phí cho tất cả khách hàng mua xe tại showroom trong phạm vi TP.HCM và các tỉnh lân cận.</p>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'footer.php'; ?>
