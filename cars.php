<?php
$pageTitle = "Danh Sách Xe";
$pageSubtitle = "Khám phá bộ sưu tập xe sang trọng của chúng tôi";
$showPageTitle = true;
require_once 'header.php';
?>

    <div class="cars-page">
        <div class="container">
            <!-- Filter Sidebar -->
            <aside class="filter-sidebar">
                <div class="filter-group">
                    <h4>Tìm Kiếm</h4>
                    <input type="text" placeholder="Nhập tên xe..." style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </div>

                <div class="filter-group">
                    <h4>Hãng Xe</h4>
                    <div class="filter-options">
                        <label><input type="checkbox" checked> Mercedes-Benz</label>
                        <label><input type="checkbox" checked> BMW</label>
                        <label><input type="checkbox" checked> Audi</label>
                        <label><input type="checkbox" checked> Porsche</label>
                        <label><input type="checkbox" checked> Lexus</label>
                        <label><input type="checkbox" checked> Land Rover</label>
                        <label><input type="checkbox"> Bentley</label>
                        <label><input type="checkbox"> Rolls-Royce</label>
                    </div>
                </div>

                <div class="filter-group">
                    <h4>Loại Xe</h4>
                    <div class="filter-options">
                        <label><input type="checkbox" checked> Sedan</label>
                        <label><input type="checkbox" checked> SUV</label>
                        <label><input type="checkbox" checked> Coupe</label>
                        <label><input type="checkbox"> Convertible</label>
                        <label><input type="checkbox"> Wagon</label>
                    </div>
                </div>

                <div class="filter-group">
                    <h4>Động Cơ</h4>
                    <div class="filter-options">
                        <label><input type="checkbox" checked> Xăng</label>
                        <label><input type="checkbox" checked> Hybrid</label>
                        <label><input type="checkbox"> Electric</label>
                        <label><input type="checkbox"> Diesel</label>
                    </div>
                </div>

                <div class="filter-group">
                    <h4>Mức Giá</h4>
                    <div class="filter-options">
                        <label><input type="radio" name="price" checked> Tất cả</label>
                        <label><input type="radio" name="price"> Dưới 3 tỷ</label>
                        <label><input type="radio" name="price"> 3 - 5 tỷ</label>
                        <label><input type="radio" name="price"> 5 - 8 tỷ</label>
                        <label><input type="radio" name="price"> Trên 8 tỷ</label>
                    </div>
                </div>

                <div class="filter-group">
                    <h4>Khoảng Giá</h4>
                    <input type="range" class="price-range" min="0" max="100" value="100">
                    <div style="display: flex; justify-content: space-between; margin-top: 10px; font-size: 14px; color: var(--medium-gray);">
                        <span>0 đồng</span>
                        <span>10 tỷ+</span>
                    </div>
                </div>

                <button class="btn btn-primary" style="width: 100%;">Áp Dụng</button>
            </aside>

            <!-- Cars List -->
            <div class="cars-list">
                <div class="cars-header">
                    <div>
                        <span style="color: var(--medium-gray);">Hiển thị 1-24 của 48 xe</span>
                    </div>
                    <div>
                        <label style="margin-right: 10px;">Sắp xếp:</label>
                        <select class="sort-select">
                            <option>Mới nhất</option>
                            <option>Giá tăng dần</option>
                            <option>Giá giảm dần</option>
                            <option>Tên A-Z</option>
                        </select>
                    </div>
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

                    <!-- Car 13 -->
                    <div class="car-card">
                        <div class="car-image">
                            <img src="https://images.unsplash.com/photo-1583121274602-3e2820c69888?w=500&h=300&fit=crop" alt="Ferrari">
                            <span class="car-badge">Super</span>
                        </div>
                        <div class="car-info">
                            <h3 class="car-title">Ferrari Roma</h3>
                            <p class="car-brand">Ferrari 2024</p>
                            <div class="car-specs">
                                <div class="spec-item"><i class="fas fa-gas-pump"></i> Xăng</div>
                                <div class="spec-item"><i class="fas fa-cog"></i> F1</div>
                                <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 3.4s</div>
                            </div>
                            <div class="car-price">
                                <div>
                                    <span class="price">18.5 tỷ<small>VND</small></span>
                                </div>
                                <div class="car-actions">
                                    <a href="car-detail.php?id=13" class="btn btn-primary">Chi tiết</a>
                                    <button class="btn btn-outline" onclick="addToCart(13)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Car 14 -->
                    <div class="car-card">
                        <div class="car-image">
                            <img src="https://images.unsplash.com/photo-1525609004556-c46c7d6cf023?w=500&h=300&fit=crop" alt="Lamborghini">
                            <span class="car-badge">Ultra</span>
                        </div>
                        <div class="car-info">
                            <h3 class="car-title">Lamborghini Huracán</h3>
                            <p class="car-brand">Lamborghini 2024</p>
                            <div class="car-specs">
                                <div class="spec-item"><i class="fas fa-gas-pump"></i> Xăng</div>
                                <div class="spec-item"><i class="fas fa-cog"></i> 7-speed</div>
                                <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 2.9s</div>
                            </div>
                            <div class="car-price">
                                <div>
                                    <span class="price">22.0 tỷ<small>VND</small></span>
                                </div>
                                <div class="car-actions">
                                    <a href="car-detail.php?id=14" class="btn btn-primary">Chi tiết</a>
                                    <button class="btn btn-outline" onclick="addToCart(14)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Car 15 -->
                    <div class="car-card">
                        <div class="car-image">
                            <img src="https://images.unsplash.com/photo-1614200187524-dc4b892acf16?w=500&h=300&fit=crop" alt="Aston Martin">
                        </div>
                        <div class="car-info">
                            <h3 class="car-title">Aston Martin DB11</h3>
                            <p class="car-brand">Aston Martin 2024</p>
                            <div class="car-specs">
                                <div class="spec-item"><i class="fas fa-gas-pump"></i> Xăng</div>
                                <div class="spec-item"><i class="fas fa-cog"></i> Tự động</div>
                                <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 3.8s</div>
                            </div>
                            <div class="car-price">
                                <div>
                                    <span class="price">15.2 tỷ<small>VND</small></span>
                                </div>
                                <div class="car-actions">
                                    <a href="car-detail.php?id=15" class="btn btn-primary">Chi tiết</a>
                                    <button class="btn btn-outline" onclick="addToCart(15)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Car 16 -->
                    <div class="car-card">
                        <div class="car-image">
                            <img src="https://images.unsplash.com/photo-1619682817481-e994891cd1f5?w=500&h=300&fit=crop" alt="McLaren">
                            <span class="car-badge">Racing</span>
                        </div>
                        <div class="car-info">
                            <h3 class="car-title">McLaren 720S</h3>
                            <p class="car-brand">McLaren 2024</p>
                            <div class="car-specs">
                                <div class="spec-item"><i class="fas fa-gas-pump"></i> Xăng</div>
                                <div class="spec-item"><i class="fas fa-cog"></i> SSG</div>
                                <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 2.8s</div>
                            </div>
                            <div class="car-price">
                                <div>
                                    <span class="price">19.8 tỷ<small>VND</small></span>
                                </div>
                                <div class="car-actions">
                                    <a href="car-detail.php?id=16" class="btn btn-primary">Chi tiết</a>
                                    <button class="btn btn-outline" onclick="addToCart(16)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Car 17 -->
                    <div class="car-card">
                        <div class="car-image">
                            <img src="https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?w=500&h=300&fit=crop" alt="Cadillac Escalade">
                            <span class="car-badge">SUV</span>
                        </div>
                        <div class="car-info">
                            <h3 class="car-title">Cadillac Escalade</h3>
                            <p class="car-brand">Cadillac 2024</p>
                            <div class="car-specs">
                                <div class="spec-item"><i class="fas fa-gas-pump"></i> Xăng</div>
                                <div class="spec-item"><i class="fas fa-cog"></i> Tự động</div>
                                <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 6.0s</div>
                            </div>
                            <div class="car-price">
                                <div>
                                    <span class="price">4.5 tỷ<small>VND</small></span>
                                </div>
                                <div class="car-actions">
                                    <a href="car-detail.php?id=17" class="btn btn-primary">Chi tiết</a>
                                    <button class="btn btn-outline" onclick="addToCart(17)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Car 18 -->
                    <div class="car-card">
                        <div class="car-image">
                            <img src="https://images.unsplash.com/photo-1553440569-bcc63803a83d?w=500&h=300&fit=crop" alt="Lincoln Navigator">
                        </div>
                        <div class="car-info">
                            <h3 class="car-title">Lincoln Navigator</h3>
                            <p class="car-brand">Lincoln 2024</p>
                            <div class="car-specs">
                                <div class="spec-item"><i class="fas fa-gas-pump"></i> Hybrid</div>
                                <div class="spec-item"><i class="fas fa-cog"></i> Tự động</div>
                                <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 5.9s</div>
                            </div>
                            <div class="car-price">
                                <div>
                                    <span class="price">4.1 tỷ<small>VND</small></span>
                                </div>
                                <div class="car-actions">
                                    <a href="car-detail.php?id=18" class="btn btn-primary">Chi tiết</a>
                                    <button class="btn btn-outline" onclick="addToCart(18)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Car 19 -->
                    <div class="car-card">
                        <div class="car-image">
                            <img src="https://images.unsplash.com/photo-1560958089-b8a1929cea89?w=500&h=300&fit=crop" alt="Genesis G90">
                            <span class="car-badge">New</span>
                        </div>
                        <div class="car-info">
                            <h3 class="car-title">Genesis G90</h3>
                            <p class="car-brand">Genesis 2024</p>
                            <div class="car-specs">
                                <div class="spec-item"><i class="fas fa-gas-pump"></i> Hybrid</div>
                                <div class="spec-item"><i class="fas fa-cog"></i> Tự động</div>
                                <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 5.1s</div>
                            </div>
                            <div class="car-price">
                                <div>
                                    <span class="price">3.2 tỷ<small>VND</small></span>
                                </div>
                                <div class="car-actions">
                                    <a href="car-detail.php?id=19" class="btn btn-primary">Chi tiết</a>
                                    <button class="btn btn-outline" onclick="addToCart(19)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Car 20 -->
                    <div class="car-card">
                        <div class="car-image">
                            <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=500&h=300&fit=crop" alt="Tesla Model S">
                            <span class="car-badge">Electric</span>
                        </div>
                        <div class="car-info">
                            <h3 class="car-title">Tesla Model S Plaid</h3>
                            <p class="car-brand">Tesla 2024</p>
                            <div class="car-specs">
                                <div class="spec-item"><i class="fas fa-bolt"></i> Electric</div>
                                <div class="spec-item"><i class="fas fa-cog"></i> Tự động</div>
                                <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 1.99s</div>
                            </div>
                            <div class="car-price">
                                <div>
                                    <span class="price">2.6 tỷ<small>VND</small></span>
                                </div>
                                <div class="car-actions">
                                    <a href="car-detail.php?id=20" class="btn btn-primary">Chi tiết</a>
                                    <button class="btn btn-outline" onclick="addToCart(20)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Car 21 -->
                    <div class="car-card">
                        <div class="car-image">
                            <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=500&h=300&fit=crop" alt="Porsche Cayenne">
                        </div>
                        <div class="car-info">
                            <h3 class="car-title">Porsche Cayenne Turbo GT</h3>
                            <p class="car-brand">Porsche 2024</p>
                            <div class="car-specs">
                                <div class="spec-item"><i class="fas fa-gas-pump"></i> Xăng</div>
                                <div class="spec-item"><i class="fas fa-cog"></i> Tiptronic</div>
                                <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 3.3s</div>
                            </div>
                            <div class="car-price">
                                <div>
                                    <span class="price">8.9 tỷ<small>VND</small></span>
                                </div>
                                <div class="car-actions">
                                    <a href="car-detail.php?id=21" class="btn btn-primary">Chi tiết</a>
                                    <button class="btn btn-outline" onclick="addToCart(21)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Car 22 -->
                    <div class="car-card">
                        <div class="car-image">
                            <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?w=500&h=300&fit=crop" alt="BMW M8">
                            <span class="car-badge">M Sport</span>
                        </div>
                        <div class="car-info">
                            <h3 class="car-title">BMW M8 Competition</h3>
                            <p class="car-brand">BMW 2024</p>
                            <div class="car-specs">
                                <div class="spec-item"><i class="fas fa-gas-pump"></i> Xăng</div>
                                <div class="spec-item"><i class="fas fa-cog"></i> M Steptronic</div>
                                <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 3.2s</div>
                            </div>
                            <div class="car-price">
                                <div>
                                    <span class="price">9.5 tỷ<small>VND</small></span>
                                </div>
                                <div class="car-actions">
                                    <a href="car-detail.php?id=22" class="btn btn-primary">Chi tiết</a>
                                    <button class="btn btn-outline" onclick="addToCart(22)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Car 23 -->
                    <div class="car-card">
                        <div class="car-image">
                            <img src="https://images.unsplash.com/photo-1614200187524-dc4b892acf16?w=500&h=300&fit=crop" alt="Mercedes AMG GT">
                            <span class="car-badge">AMG</span>
                        </div>
                        <div class="car-info">
                            <h3 class="car-title">Mercedes-AMG GT</h3>
                            <p class="car-brand">Mercedes-AMG 2024</p>
                            <div class="car-specs">
                                <div class="spec-item"><i class="fas fa-gas-pump"></i> Xăng</div>
                                <div class="spec-item"><i class="fas fa-cog"></i> AMG Speedshift</div>
                                <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 3.1s</div>
                            </div>
                            <div class="car-price">
                                <div>
                                    <span class="price">11.8 tỷ<small>VND</small></span>
                                </div>
                                <div class="car-actions">
                                    <a href="car-detail.php?id=23" class="btn btn-primary">Chi tiết</a>
                                    <button class="btn btn-outline" onclick="addToCart(23)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Car 24 -->
                    <div class="car-card">
                        <div class="car-image">
                            <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=500&h=300&fit=crop" alt="Audi RS e-tron GT">
                            <span class="car-badge">Electric</span>
                        </div>
                        <div class="car-info">
                            <h3 class="car-title">Audi RS e-tron GT</h3>
                            <p class="car-brand">Audi 2024</p>
                            <div class="car-specs">
                                <div class="spec-item"><i class="fas fa-bolt"></i> Electric</div>
                                <div class="spec-item"><i class="fas fa-cog"></i> Tự động</div>
                                <div class="spec-item"><i class="fas fa-tachometer-alt"></i> 3.3s</div>
                            </div>
                            <div class="car-price">
                                <div>
                                    <span class="price">5.6 tỷ<small>VND</small></span>
                                </div>
                                <div class="car-actions">
                                    <a href="car-detail.php?id=24" class="btn btn-primary">Chi tiết</a>
                                    <button class="btn btn-outline" onclick="addToCart(24)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div style="display: flex; justify-content: center; gap: 10px; margin-top: 50px;">
                    <button class="btn btn-outline" style="padding: 8px 15px;"><i class="fas fa-chevron-left"></i></button>
                    <button class="btn btn-primary" style="padding: 8px 15px;">1</button>
                    <button class="btn btn-outline" style="padding: 8px 15px;">2</button>
                    <button class="btn btn-outline" style="padding: 8px 15px;">3</button>
                    <button class="btn btn-outline" style="padding: 8px 15px;">...</button>
                    <button class="btn btn-outline" style="padding: 8px 15px;">8</button>
                    <button class="btn btn-outline" style="padding: 8px 15px;"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>

<?php require_once 'footer.php'; ?>
