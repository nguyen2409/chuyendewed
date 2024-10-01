<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; // Add new user
$_id = NULL;

// Hàm mã hóa ID
function encodeID($params) {
    return base64_encode($params);
}

function decodeID($encode_id) {
    return base64_decode($encode_id); // Sửa từ base64_encode thành base64_decode
}

// Hàm validate
function validateName($name) {
    if (empty($name)) {
        return "Tên không được để trống.";
    }
    if (strlen($name) < 5 || strlen($name) > 15) {
        return "Tên phải có chiều dài từ 5 đến 15 ký tự.";
    }
    if (!preg_match('/^[A-Za-z0-9]+$/', $name)) {
        return "Tên chỉ được chứa ký tự A-Z, a-z và 0-9.";
    }
    return true;
}

function validatePassword($password) {
    if (empty($password)) {
        return "Mật khẩu không được để trống.";
    }
    if (strlen($password) < 5 || strlen($password) > 10) {
        return "Mật khẩu phải có chiều dài từ 5 đến 10 ký tự.";
    }
    if (!preg_match('/[a-z]/', $password) || 
        !preg_match('/[A-Z]/', $password) || 
        !preg_match('/[0-9]/', $password) || 
        !preg_match('/[~!@#$%^&*()]/', $password)) {
        return "Mật khẩu phải bao gồm chữ thường, chữ hoa, số và ký tự đặc biệt: ~!@#$%^&*().";
    }
    return true;
}

if (!empty($_GET['id'])) {
    $_id = decodeID($_GET['id']); // Giải mã ID
    $user = $userModel->findUserById($_id); // Update existing user
}

$errorMessages = []; // Mảng lưu trữ thông báo lỗi

if (!empty($_POST['submit'])) {
    // Validate dữ liệu
    $nameValidation = validateName($_POST['name']);
    $passwordValidation = validatePassword($_POST['password']);

    if ($nameValidation === true && $passwordValidation === true) {
        // Nếu tất cả hợp lệ, lưu người dùng
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
        exit();
    } else {
        // Thêm thông báo lỗi vào mảng
        if ($nameValidation !== true) {
            $errorMessages[] = $nameValidation;
        }
        if ($passwordValidation !== true) {
            $errorMessages[] = $passwordValidation;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php'; ?>
</head>
<body>
    <?php include 'views/header.php'; ?>
    <div class="container">
        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <?php if (!empty($errorMessages)) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php foreach ($errorMessages as $error) {
                        echo htmlspecialchars($error) . "<br>";
                    } ?>
                </div>
            <?php } ?>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($_id); ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo htmlspecialchars($user[0]['name']); ?>'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>
