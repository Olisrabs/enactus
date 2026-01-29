<section class="bg-warning text-dark py-5">
  <div class="container">
    <h3 class="text-center mb-4">Subscribe to Our Newsletter</h3>
    <form id="newsletterForm" class="row justify-content-center" method="post">
      <?php
        include "db_conn.php";
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        $responseStatus = '';
        $responseMessage = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

            $email = trim($_POST['email']);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $responseStatus = 'error';
                $responseMessage = 'Invalid email address.';
            } else {

                // 1️⃣ Check if email already exists
                $checkStmt = $conn->prepare("SELECT id FROM newsletter WHERE email = ?");
                $checkStmt->bind_param("s", $email);
                $checkStmt->execute();
                $checkStmt->store_result();

                if ($checkStmt->num_rows > 0) {
                    // Email already exists
                    $responseStatus = 'exists';
                    $responseMessage = 'This email is already subscribed.';
                } else {
                    // 2️⃣ Insert new email
                    $insertStmt = $conn->prepare("INSERT INTO newsletter (email) VALUES (?)");
                    $insertStmt->bind_param("s", $email);

                    if ($insertStmt->execute()) {
                        $responseStatus = 'success';
                        $responseMessage = 'Subscription successful!';
                    } else {
                        $responseStatus = 'error';
                        $responseMessage = 'Something went wrong. Please try again.';
                    }

                    $insertStmt->close();
                }

                $checkStmt->close();
            }
        }
      ?>

      <div class="col-md-6">
        <div class="input-group">
          <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
          <button class="btn btn-dark" name="submit" type="submit">Subscribe</button>
        </div>
      </div>
    </form>
    <div id="newsletterMessage" class="text-center mt-3"></div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="newsletterModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">
          <?php
            if ($responseStatus === 'success') echo 'Success';
            elseif ($responseStatus === 'exists') echo 'Already Subscribed';
            else echo 'Error';
          ?>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <?php echo htmlspecialchars($responseMessage); ?>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<?php if (!empty($responseStatus)): ?>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    new bootstrap.Modal(
      document.getElementById('newsletterModal')
    ).show();
  });
</script>
<?php endif; ?>

