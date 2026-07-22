<?php
session_start();

// Redirect if already logged in
if (isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}

$error = '';
$success = '';

// Demo accounts (in real app, these come from database)
$accounts = [
    ['username' => 'admin',    'password' => '123456',   'name' => 'Quản trị viên', 'role' => 'admin'],
    ['username' => 'khachhang','password' => '123456',   'name' => 'Nguyễn Văn A',  'role' => 'user'],
    ['username' => 'user',     'password' => 'password', 'name' => 'Trần Thị B',    'role' => 'user'],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($username) || empty($password)) {
        $error = 'Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.';
    } else {
        $found = null;
        foreach ($accounts as $acc) {
            if ($acc['username'] === $username && $acc['password'] === $password) {
                $found = $acc;
                break;
            }
        }

        if ($found) {
            $_SESSION['user'] = [
                'username' => $found['username'],
                'name'     => $found['name'],
                'role'     => $found['role'],
            ];
            $redirect = $_GET['redirect'] ?? 'index.php';
            header('Location: ' . $redirect);
            exit;
        } else {
            $error = 'Tên đăng nhập hoặc mật khẩu không đúng.';
        }
    }
}

$pageTitle = "Đăng Nhập";
$showPageTitle = false;
require_once 'header.php';
?>

<style>
.login-wrapper {
    min-height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 50%, #1a1a1a 100%);
    padding: 60px 20px;
}

.login-card {
    background: var(--white);
    border-radius: 16px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.4);
    width: 100%;
    max-width: 460px;
    overflow: hidden;
}

.login-header {
    background: linear-gradient(135deg, var(--primary-red), var(--dark-red));
    padding: 40px 40px 30px;
    text-align: center;
    color: var(--white);
}

.login-header .logo-text {
    font-size: 32px;
    font-weight: 800;
    letter-spacing: -1px;
    margin-bottom: 8px;
}

.login-header .logo-text span {
    color: rgba(255,255,255,0.7);
}

.login-header p {
    font-size: 14px;
    opacity: 0.85;
}

.login-body {
    padding: 40px;
}

.login-body h2 {
    font-size: 22px;
    margin-bottom: 6px;
    color: var(--black);
}

.login-body .subtitle {
    font-size: 14px;
    color: var(--medium-gray);
    margin-bottom: 28px;
}

.login-field {
    margin-bottom: 20px;
}

.login-field label {
    display: block;
    font-size: 13px;
    font-weight: 600;
    color: var(--black);
    margin-bottom: 8px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.login-field .input-wrap {
    position: relative;
}

.login-field .input-wrap i {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--medium-gray);
    font-size: 15px;
}

.login-field input {
    width: 100%;
    padding: 13px 14px 13px 42px;
    border: 2px solid #e8e8e8;
    border-radius: 10px;
    font-size: 15px;
    transition: border-color 0.2s, box-shadow 0.2s;
    box-sizing: border-box;
    background: #fafafa;
}

.login-field input:focus {
    outline: none;
    border-color: var(--primary-red);
    background: var(--white);
    box-shadow: 0 0 0 4px rgba(230,57,70,0.1);
}

.toggle-password {
    position: absolute;
    right: 14px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: var(--medium-gray);
    cursor: pointer;
    padding: 0;
    font-size: 15px;
}

.toggle-password:hover { color: var(--primary-red); }

.alert-error {
    background: #fff0f0;
    border: 1px solid #ffcdd2;
    color: #c62828;
    padding: 12px 16px;
    border-radius: 10px;
    font-size: 14px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.btn-login {
    width: 100%;
    padding: 14px;
    background: linear-gradient(135deg, var(--primary-red), var(--dark-red));
    color: var(--white);
    border: none;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    transition: opacity 0.2s, transform 0.2s;
    letter-spacing: 0.5px;
    margin-top: 8px;
}

.btn-login:hover {
    opacity: 0.9;
    transform: translateY(-1px);
    box-shadow: 0 6px 20px rgba(230,57,70,0.35);
}

.demo-accounts {
    margin-top: 28px;
    padding: 18px;
    background: #f8f8f8;
    border-radius: 10px;
    border: 1px dashed #ddd;
}

.demo-accounts h4 {
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: var(--medium-gray);
    margin-bottom: 12px;
}

.demo-account-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 0;
    border-bottom: 1px solid #ececec;
    font-size: 13px;
}

.demo-account-row:last-child { border-bottom: none; }

.demo-account-row .creds {
    color: var(--black);
    font-family: monospace;
    font-size: 13px;
}

.demo-account-row .badge-role {
    font-size: 11px;
    padding: 2px 8px;
    border-radius: 20px;
    font-weight: 600;
}

.badge-admin { background: #ffeaea; color: var(--primary-red); }
.badge-user  { background: #e8f5e9; color: #2e7d32; }

.btn-fill {
    font-size: 11px;
    padding: 3px 10px;
    background: none;
    border: 1px solid #ccc;
    border-radius: 20px;
    cursor: pointer;
    color: var(--medium-gray);
    transition: all 0.2s;
}

.btn-fill:hover {
    border-color: var(--primary-red);
    color: var(--primary-red);
}

.login-footer {
    text-align: center;
    margin-top: 24px;
    font-size: 14px;
    color: var(--medium-gray);
}

.login-footer a {
    color: var(--primary-red);
    font-weight: 600;
    text-decoration: none;
}
</style>

<div class="login-wrapper">
    <div class="login-card">
        <div class="login-header">
            <div class="logo-text">Auto<span>Luxury</span></div>
            <p>Showroom Ô Tô Sang Trọng Hàng Đầu</p>
        </div>

        <div class="login-body">
            <h2>Chào mừng trở lại!</h2>
            <p class="subtitle">Đăng nhập để tiếp tục mua sắm</p>

            <?php if ($error): ?>
            <div class="alert-error">
                <i class="fas fa-exclamation-circle"></i> <?php echo $error; ?>
            </div>
            <?php endif; ?>

            <form method="POST" action="login.php<?php echo isset($_GET['redirect']) ? '?redirect=' . urlencode($_GET['redirect']) : ''; ?>">
                <div class="login-field">
                    <label>Tên đăng nhập</label>
                    <div class="input-wrap">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Nhập tên đăng nhập..."
                               value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>" autocomplete="username">
                    </div>
                </div>

                <div class="login-field">
                    <label>Mật khẩu</label>
                    <div class="input-wrap">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="passwordInput" placeholder="Nhập mật khẩu..." autocomplete="current-password">
                        <button type="button" class="toggle-password" onclick="togglePassword()">
                            <i class="fas fa-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="btn-login">
                    <i class="fas fa-sign-in-alt"></i> Đăng Nhập
                </button>
            </form>

            <!-- Demo accounts -->
            <div class="demo-accounts">
                <h4><i class="fas fa-info-circle"></i> Tài khoản demo (dùng để thử)</h4>
                <div class="demo-account-row">
                    <span class="creds">admin / 123456</span>
                    <span class="badge-role badge-admin">Admin</span>
                    <button class="btn-fill" onclick="fillLogin('admin','123456')">Dùng</button>
                </div>
                <div class="demo-account-row">
                    <span class="creds">khachhang / 123456</span>
                    <span class="badge-role badge-user">User</span>
                    <button class="btn-fill" onclick="fillLogin('khachhang','123456')">Dùng</button>
                </div>
                <div class="demo-account-row">
                    <span class="creds">user / password</span>
                    <span class="badge-role badge-user">User</span>
                    <button class="btn-fill" onclick="fillLogin('user','password')">Dùng</button>
                </div>
            </div>

            <div class="login-footer">
                <a href="index.php"><i class="fas fa-arrow-left"></i> Quay về trang chủ</a>
            </div>
        </div>
    </div>
</div>

<script>
function togglePassword() {
    const input = document.getElementById('passwordInput');
    const icon  = document.getElementById('eyeIcon');
    if (input.type === 'password') {
        input.type = 'text';
        icon.className = 'fas fa-eye-slash';
    } else {
        input.type = 'password';
        icon.className = 'fas fa-eye';
    }
}

function fillLogin(username, password) {
    document.querySelector('input[name="username"]').value = username;
    document.getElementById('passwordInput').value = password;
}
</script>

<?php require_once 'footer.php'; ?>
