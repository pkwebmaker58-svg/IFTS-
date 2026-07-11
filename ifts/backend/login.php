<?php
session_start();
include 'db.php';

$error = "";

if (isset($_SESSION['admin_logged_in'])) {
    header("Location: ../dashboard.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM admins WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $admin = $result->fetch_assoc();
        $stored_password = $admin['password'];

        /* Detect whether the stored password is already hashed (bcrypt)
           or still plain text (legacy rows that haven't been changed yet
           via the Change Password form). This keeps login working for
           BOTH old plain-text admins and newly-hashed ones. */
        $is_hashed = (strlen($stored_password) >= 60 &&
            (strpos($stored_password, '$2y$') === 0 || strpos($stored_password, '$2a$') === 0));

        if ($is_hashed) {
            $password_correct = password_verify($password, $stored_password);
        } else {
            // Legacy plain-text comparison (original behavior)
            $password_correct = ($password == $stored_password);
        }

        if ($password_correct) {

            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $admin['username'];

            header("Location: ../dashboard.php");
            exit;

        } else {
            $error = "Incorrect password!";
        }

    } else {
        $error = "Username not found!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFTS Admin Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&family=Syne:wght@600;700;800&display=swap" rel="stylesheet">

    <style>
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --blue-dark: #0d1b4b;
            --blue-primary: #1a2f7f;
            --blue-mid: #1e3a8a;
            --blue-light: #e8edf8;
            --cyan: #00c2c7;
            --cyan-light: #e0f9f9;
            --white: #ffffff;
            --gray-50: #f8f9fc;
            --gray-100: #f1f3f9;
            --gray-200: #e2e8f0;
            --gray-300: #cbd5e1;
            --gray-400: #94a3b8;
            --gray-500: #64748b;
            --gray-700: #334155;

            --danger: #ef4444;
            --danger-bg: #fef2f2;

            --shadow-sm: 0 1px 2px rgba(13, 27, 75, 0.05), 0 1px 3px rgba(13, 27, 75, 0.04);
            --shadow-md: 0 4px 12px rgba(13, 27, 75, 0.08), 0 2px 4px rgba(13, 27, 75, 0.04);
            --shadow-lg: 0 16px 40px rgba(13, 27, 75, 0.14);

            --radius-sm: 9px;
            --font-head: 'Syne', sans-serif;
            --font-body: 'DM Sans', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-body);
            min-height: 100vh;
            -webkit-font-smoothing: antialiased;
            color: var(--blue-dark);
        }

        /* ──────────────────────────────────────────
           LOGIN PAGE
        ────────────────────────────────────────── */

        .login-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--blue-dark) 0%, var(--blue-primary) 55%, #0a1640 100%);
            position: relative;
            overflow: hidden;
            padding: 20px;
        }

        .login-page::before,
        .login-page::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            filter: blur(90px);
            opacity: 0.22;
            animation: blob 9s ease-in-out infinite alternate;
            pointer-events: none;
        }

        .login-page::before {
            width: 520px;
            height: 520px;
            background: var(--cyan);
            top: -140px;
            left: -140px;
        }

        .login-page::after {
            width: 420px;
            height: 420px;
            background: var(--blue-mid);
            bottom: -110px;
            right: -90px;
            animation-delay: -4.5s;
        }

        @keyframes blob {
            from { transform: scale(1) translate(0, 0); }
            to { transform: scale(1.15) translate(30px, 20px); }
        }

        .grid-dots {
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle, rgba(255, 255, 255, 0.06) 1px, transparent 1px);
            background-size: 32px 32px;
            pointer-events: none;
        }

        .login-wrap {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 420px;
        }

        /* Brand mark above the card */
        .login-brand {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-bottom: 26px;
        }

        .login-brand .brand-mark {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--cyan), #00a3a8);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: var(--font-head);
            font-weight: 800;
            font-size: 16px;
            color: var(--blue-dark);
            box-shadow: 0 8px 22px rgba(0, 194, 199, 0.35);
            flex-shrink: 0;
        }

        .login-brand .brand-text {
            font-family: var(--font-head);
            font-size: 19px;
            font-weight: 700;
            color: #fff;
            letter-spacing: -0.3px;
            line-height: 1.2;
        }

        .login-brand .brand-text span {
            display: block;
            font-family: var(--font-body);
            font-weight: 500;
            font-size: 11px;
            color: rgba(255, 255, 255, 0.45);
            letter-spacing: 0.3px;
            margin-top: 1px;
        }

        /* Card */
        .login-card {
            position: relative;
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 22px;
            padding: 40px 36px;
            box-shadow: 0 32px 80px rgba(0, 0, 0, 0.35);
            animation: slideUp 0.5s cubic-bezier(.22, .8, .4, 1) both;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(28px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-card h2 {
            font-family: var(--font-head);
            font-size: 23px;
            font-weight: 700;
            color: #fff;
            text-align: center;
            margin-bottom: 6px;
            letter-spacing: -0.4px;
        }

        .login-card .subtitle {
            text-align: center;
            color: rgba(255, 255, 255, 0.5);
            font-size: 13px;
            margin-bottom: 28px;
        }

        /* Error banner */
        .login-error {
            display: flex;
            align-items: center;
            gap: 9px;
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #ff8585;
            padding: 12px 15px;
            border-radius: var(--radius-sm);
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 18px;
            animation: shake 0.35s ease;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-6px); }
            75% { transform: translateX(6px); }
        }

        .login-error .err-icon { font-size: 15px; flex-shrink: 0; }

        /* Form */
        .field-group {
            position: relative;
            margin-bottom: 16px;
        }

        .field-group label {
            display: block;
            font-size: 11.5px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.6);
            text-transform: uppercase;
            letter-spacing: 0.7px;
            margin-bottom: 8px;
        }

        .input-wrap {
            position: relative;
        }

        .input-wrap .input-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.35);
            font-size: 15px;
            pointer-events: none;
        }

        .input-wrap input {
            width: 100%;
            padding: 13px 44px 13px 42px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: var(--radius-sm);
            font-family: var(--font-body);
            font-size: 14px;
            color: #fff;
            outline: none;
            transition: all 0.22s;
        }

        .input-wrap input::placeholder {
            color: rgba(255, 255, 255, 0.3);
        }

        .input-wrap input:focus {
            background: rgba(255, 255, 255, 0.12);
            border-color: var(--cyan);
            box-shadow: 0 0 0 3px rgba(0, 194, 199, 0.18);
        }

        .toggle-pw {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: rgba(255, 255, 255, 0.4);
            cursor: pointer;
            font-size: 16px;
            padding: 4px;
            transition: color 0.2s;
            line-height: 1;
        }

        .toggle-pw:hover {
            color: rgba(255, 255, 255, 0.8);
        }

        .login-row-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 4px 0 22px;
            font-size: 12.5px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 7px;
            color: rgba(255, 255, 255, 0.55);
            cursor: pointer;
            user-select: none;
        }

        .remember-me input[type="checkbox"] {
            width: 14px;
            height: 14px;
            accent-color: var(--cyan);
            cursor: pointer;
        }

        .login-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, var(--cyan), #00a3a8);
            color: var(--blue-dark);
            border: none;
            border-radius: var(--radius-sm);
            font-family: var(--font-body);
            font-size: 14.5px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.22s;
            box-shadow: 0 10px 26px rgba(0, 194, 199, 0.32);
            letter-spacing: 0.2px;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 32px rgba(0, 194, 199, 0.42);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        .login-foot-note {
            text-align: center;
            margin-top: 24px;
            font-size: 11.5px;
            color: rgba(255, 255, 255, 0.32);
        }

        @media (max-width: 480px) {
            .login-card {
                padding: 32px 24px;
            }
        }
    </style>
</head>

<body>

<div class="login-page">
    <div class="grid-dots"></div>

    <div class="login-wrap">

        <div class="login-brand">
            <div class="brand-mark">IF</div>
            <div class="brand-text">
                IFTS Admin
                <span>Control Panel</span>
            </div>
        </div>

        <div class="login-card">
            <h2>Welcome back</h2>
            <p class="subtitle">Sign in to manage orders and platform activity</p>

            <?php if ($error != "") { ?>
                <div class="login-error">
                    <span class="err-icon">⚠️</span>
                    <span><?php echo htmlspecialchars($error); ?></span>
                </div>
            <?php } ?>

            <form method="POST" autocomplete="off">

                <div class="field-group">
                    <label for="username">Username</label>
                    <div class="input-wrap">
                        <span class="input-icon">👤</span>
                        <input type="text" id="username" name="username" placeholder="Enter your username" required autofocus>
                    </div>
                </div>

                <div class="field-group">
                    <label for="password">Password</label>
                    <div class="input-wrap">
                        <span class="input-icon">🔒</span>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                        <button type="button" class="toggle-pw" id="togglePw" aria-label="Show password">👁</button>
                    </div>
                </div>

                <div class="login-row-meta">
                    <label class="remember-me">
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>
                </div>

                <button type="submit" class="login-btn">Sign In</button>

            </form>
        </div>

        <p class="login-foot-note">IFTS Platform &middot; Authorized personnel only</p>

    </div>
</div>

<script>
    const togglePw = document.getElementById('togglePw');
    const pwInput = document.getElementById('password');

    togglePw.addEventListener('click', () => {
        const isHidden = pwInput.type === 'password';
        pwInput.type = isHidden ? 'text' : 'password';
        togglePw.textContent = isHidden ? '🙈' : '👁';
        togglePw.setAttribute('aria-label', isHidden ? 'Hide password' : 'Show password');
    });
</script>

</body>
</html>