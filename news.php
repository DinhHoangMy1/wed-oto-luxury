<?php
$pageTitle = "Tin Tức";
$pageSubtitle = "Cập nhật thông tin thị trường ô tô mới nhất";
$showPageTitle = true;
require_once 'header.php';
?>

    <div class="section">
        <div class="container">
            <!-- Featured News -->
            <div style="margin-bottom: 50px;">
                <div class="news-card" style="display: grid; grid-template-columns: 1.5fr 1fr; max-height: 400px;">
                    <div class="news-image" style="height: 100%;">
                        <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?w=800&h=500&fit=crop" alt="Featured News">
                    </div>
                    <div class="news-content" style="display: flex; flex-direction: column; justify-content: center; padding: 30px;">
                        <div class="news-date"><i class="far fa-calendar-alt"></i> 15/04/2024</div>
                        <h2 style="font-size: 28px; margin-bottom: 15px;"><a href="news-detail.php?id=1">Mercedes-Benz S-Class mới ra mắt với nhiều công nghệ đỉnh cao</a></h2>
                        <p style="color: var(--medium-gray); margin-bottom: 20px;">Phiên bản mới nhất của S-Class mang đến trải nghiệm sang trọng và công nghệ tiên tiến nhất...</p>
                        <a href="news-detail.php?id=1" class="read-more">Đọc thêm <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- News Grid -->
            <div class="section-title">
                <h2>Tin Tức <span>Mới Nhất</span></h2>
            </div>
            <div class="news-grid">
                <!-- News 1 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=400&h=250&fit=crop" alt="News 1">
                    </div>
                    <div class="news-content">
                        <div class="news-date"><i class="far fa-calendar-alt"></i> 12/04/2024</div>
                        <h3 class="news-title"><a href="news-detail.php?id=2">Top 5 sedan sang trọng đáng mua nhất năm 2024</a></h3>
                        <p class="news-excerpt">Dưới đây là danh sách những mẫu sedan hạng sang đang được ưa chuộng nhất hiện nay...</p>
                        <a href="news-detail.php?id=2" class="read-more">Đọc thêm <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- News 2 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=400&h=250&fit=crop" alt="News 2">
                    </div>
                    <div class="news-content">
                        <div class="news-date"><i class="far fa-calendar-alt"></i> 10/04/2024</div>
                        <h3 class="news-title"><a href="news-detail.php?id=3">Mùa giảm giá lớn nhất năm - Giảm đến 20% cho tất cả các dòng xe</a></h3>
                        <p class="news-excerpt">Cơ hội cuối cùng để sở hữu xe hơi sang trọng với mức giá ưu đãi chưa từng có...</p>
                        <a href="news-detail.php?id=3" class="read-more">Đọc thêm <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- News 3 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop" alt="News 3">
                    </div>
                    <div class="news-content">
                        <div class="news-date"><i class="far fa-calendar-alt"></i> 08/04/2024</div>
                        <h3 class="news-title"><a href="news-detail.php?id=4">Xu hướng xe điện năm 2024: Những điều cần biết</a></h3>
                        <p class="news-excerpt">Xe điện đang dần trở thành xu hướng chủ đạo trong ngành công nghiệp ô tô toàn cầu...</p>
                        <a href="news-detail.php?id=4" class="read-more">Đọc thêm <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- News 4 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop" alt="News 4">
                    </div>
                    <div class="news-content">
                        <div class="news-date"><i class="far fa-calendar-alt"></i> 05/04/2024</div>
                        <h3 class="news-title"><a href="news-detail.php?id=5">Mẹo bảo dưỡng xe ô tô giúp kéo dài tuổi thọ</a></h3>
                        <p class="news-excerpt">Việc bảo dưỡng định kỳ không chỉ giúp xe hoạt động tốt mà còn kéo dài tuổi thọ đáng kể...</p>
                        <a href="news-detail.php?id=5" class="read-more">Đọc thêm <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- News 5 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1507136566006-cfc505b114fc?w=400&h=250&fit=crop" alt="News 5">
                    </div>
                    <div class="news-content">
                        <div class="news-date"><i class="far fa-calendar-alt"></i> 02/04/2024</div>
                        <h3 class="news-title"><a href="news-detail.php?id=6">So sánh BMW 7 Series vs Mercedes S-Class 2024</a></h3>
                        <p class="news-excerpt">Hai mẫu sedan hạng sang hàng đầu Đức đang cạnh tranh gay gắt trong phân khúc luxury...</p>
                        <a href="news-detail.php?id=6" class="read-more">Đọc thêm <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- News 6 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=400&h=250&fit=crop" alt="News 6">
                    </div>
                    <div class="news-content">
                        <div class="news-date"><i class="far fa-calendar-alt"></i> 30/03/2024</div>
                        <h3 class="news-title"><a href="news-detail.php?id=7">AutoLuxury đạt giải thưởng Showroom của năm 2024</a></h3>
                        <p class="news-excerpt">Vinfast đạt giải thưởng Showroom uy tín nhất năm 2024 do người tiêu dùng bình chọn...</p>
                        <a href="news-detail.php?id=7" class="read-more">Đọc thêm <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div style="display: flex; justify-content: center; gap: 10px; margin-top: 50px;">
                <button class="btn btn-outline" style="padding: 8px 15px;"><i class="fas fa-chevron-left"></i></button>
                <button class="btn btn-primary" style="padding: 8px 15px;">1</button>
                <button class="btn btn-outline" style="padding: 8px 15px;">2</button>
                <button class="btn btn-outline" style="padding: 8px 15px;">3</button>
                <button class="btn btn-outline" style="padding: 8px 15px;"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">
            <h2>Đăng Ký Nhận Tin</h2>
            <p>Nhận thông tin về các bài viết mới và khuyến mãi hấp dẫn</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Nhập email của bạn...">
                <button type="submit" class="btn btn-primary">Đăng ký</button>
            </form>
        </div>
    </section>

<?php require_once 'footer.php'; ?>
