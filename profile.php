<?php
// Start session and include database connection
session_start();
include 'php/db_connect.php'; // Replace with your DB connection file

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

// Fetch current user data
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/profile.css">
</head>

<body>
  <!-- Navbar -->
  <?php include 'includes/navbar.php'; ?>

  <div class="container py-5">
    <div class="profile-card">
      <h3 class="text-center mb-4">Update Profile</h3>
      <?php if (isset($_SESSION['update_success'])): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your profile has been updated successfully.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php unset($_SESSION['update_success']);
      endif; ?>

      <form action="php/profile_update.php" method="POST" enctype="multipart/form-data">
        <!-- Profile Picture -->
        <div class="text-center">
          <?php if (!empty($user['profile_image'])): ?>
            <img src="uploads/<?= htmlspecialchars($user['profile_image']); ?>" alt="Profile Picture" width="100">
          <?php else: ?>
            <img src="https://via.placeholder.com/100" alt="Default Profile Picture" width="100">
          <?php endif; ?>
          <div class="mt-2">
            <input type="file" name="profile_image" id="profile_image" class="form-control">
          </div>
        </div>

        <!-- Full Name -->
        <div class="mb-3">
          <label for="fullname" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="fullname" name="fullname"
            value="<?= htmlspecialchars($user['fullname'] ?? ''); ?>" required>
        </div>

        <!-- Phone Number -->
        <div class="mb-3">
          <label for="phone_no" class="form-label">Phone Number</label>
          <input type="text" class="form-control" id="phone_no" name="phone_no"
            value="<?= htmlspecialchars($user['phone_no'] ?? ''); ?>">
        </div>

        <!-- Date of Birth -->
        <div class="mb-3">
          <label for="dob" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" id="dob" name="dob"
            value="<?= htmlspecialchars($user['dob'] ?? ''); ?>">
        </div>

        <!-- Address -->
        <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <textarea class="form-control" id="address" name="address" rows="3"><?= htmlspecialchars($user['address'] ?? ''); ?></textarea>
        </div>

        <!-- Change Password -->
        <div class="mb-3">
          <label for="password" class="form-label">New Password</label>
          <input type="password" class="form-control" id="password" name="password"
            placeholder="Leave blank to keep current password">
        </div>

        <!-- Submit Button -->
        <div class="text-center">
          <button type="submit" name="update" class="btn btn-primary"><i class="fas fa-save"></i> Update Profile</button>
        </div>
      </form>

    </div>
  </div>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>