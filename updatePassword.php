<?php
require_once 'dbConnect.php';
require_once 'validation.php';

session_start();

$currentPassword = $newPassword = $confirmNewPassword = '';
$errorMessages = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $currentPassword = $_POST['user_currentPwd'];
  $newPassword = $_POST['user_newPwd'];
  $confirmNewPassword = $_POST['user_confirmPwd'];

  if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    $check = $db->prepare("SELECT password FROM users WHERE id = ?");
    $check->execute([$user_id]);
    $user = $check->fetch();

    if (!password_verify($currentPassword, $user['password'])) {
      $errorMessages = 'Incorrect current password';
    } elseif ($newPassword !== $confirmNewPassword) {
      $errorMessages = 'Passwords do not match';
    } elseif (!validatePassword($newPassword)) {
      $errorMessages = 'New password must be at least 5 characters long';
    } else {
      $hashedPassword = hashPassword($newPassword);
      $updatePassword = $db->prepare("UPDATE users SET password = ? WHERE id = ?");
      $updatePassword->execute([$hashedPassword, $user_id]);
      $errorMessages = 'Password updated successfully';
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Password</title>

  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
</head>
<body>

<header>
  <?= include 'user_navbar.php'?>
</header>

<div class="profile-container mt-3">
  <h1>Update Password</h1>
    <form method="POST" action="">
      <div class="form-group">
        <label class="form-label">Current password</label>
        <input type="password" class="form-control" name="user_currentPwd" required/>
      </div>
      <div class="form-group">
        <label class="form-label">New password</label>
        <input type="password" class="form-control" name="user_newPwd" required/>
      </div>
      <div class="form-group">
        <label class="form-label">Repeat new password</label>
        <input type="password" class="form-control" name="user_confirmPwd" required/>
      </div>

      <div class="text-right mt-3">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

        <?php if (!empty($errorMessages)) { ?>
          <p class="text-danger mt-3"><?=$errorMessages?></p>
        <?php } ?>

    </form>
  </div>
</div>

<?= include 'includes/footer.php'?>
