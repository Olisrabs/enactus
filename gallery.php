<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Enactus - Gallery</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="shortcut icon"
    href="data:image/png;base64,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"
    type="image/x-icon">
  <style>
    .fade-in {
      animation: fadeIn 0.7s ease;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Desktop styles */
    .navbar {
      background-color: #fff;
      padding: 0.75rem 1rem;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      backdrop-filter: blur(10px);
    }

    .navbar-nav .nav-link {
      color: #000;
      font-weight: 500;
      margin: 0 10px;
    }

    .navbar-nav .nav-link.active {
      color: #f5c518;
    }

    .btn-enactus {
      background-color: #f5c518;
      color: #fff;
      font-weight: 600;
      border-radius: 8px;
      padding: 6px 16px;
    }

    /* Mobile Offcanvas */
    .offcanvas {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(12px);
      width: 280px;
    }

    .offcanvas .nav-link {
      padding: 8px 0;
      font-weight: 500;
      color: #333;
    }

    .offcanvas .btn-enactus {
      background-color: #ffcc00;
      color: #000;
      font-weight: bold;
      border-radius: 30px;
    }

    .offcanvas .collapse li:hover {
      background-color: #f9f9f9;
      border-radius: 5px;
      margin-bottom: 10px;
      cursor: pointer;
    }

    .hero {
      margin-top: 80px;
      padding: 60px 0;
      background: linear-gradient(to right, #fff8e1, #fff);
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
    }

    .hero h1 span {
      color: #f1c40f;
    }

    .hero p {
      font-size: 1.2rem;
      color: #555;
    }

    .hero img {
      max-width: 100%;
    }

    .highlight-box {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
      display: inline-block;
      margin-top: 20px;
    }

    .btn-enactus {
      background-color: #f1c40f;
      color: #fff;
      font-weight: 600;
    }

    .btn-enactus:hover {
      background-color: #d4ac0d;
      color: white;
    }

    .card-img-overlay {
      background: rgba(0, 0, 0, 0.5);
      transition: background 0.3s ease;
    }

    .card:hover .card-img-overlay {
      background: rgba(0, 0, 0, 0.7);
    }

    .card-title {
      font-size: 1.25rem;
      font-weight: bold;
    }

    .btn-enactus {
      background-color: #f1c40f;
      color: #fff;
      font-weight: 600;
      border: none;
    }

    .btn-enactus:hover {
      background-color: #d4ac0d;
      color: #fff;
    }

    .news-card {
      background-color: #fff;
      border-radius: 12px;
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .news-card:hover {
      transform: translateY(-5px);
    }

    .news-img-container {
      height: 220px;
      overflow: hidden;
    }

    .news-img-container img {
      transition: transform 0.4s ease;
      object-fit: cover;
      height: 100%;
      width: 100%;
    }

    .news-card:hover .news-img-container img {
      transform: scale(1.1);
    }

    .btn-glow {
      background-color: #f1c40f;
      color: #fff;
      border: none;
      font-weight: 600;
      transition: box-shadow 0.3s ease;
    }

    .btn-glow:hover {
      box-shadow: 0 0 15px #f1c40f, 0 0 30px #f1c40f;
      color: #292424;
    }

    .footer-link {
      color: #ccc;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    .footer-link:hover {
      color: #f1c40f;
      text-decoration: underline;
    }

    #newsletterForm input:focus {
      box-shadow: 0 0 10px #333;
    }

    #newsletterMessage {
      font-weight: 500;
    }

    /* Hide desktop menu on mobile */
    @media (max-width: 991.98px) {
      .desktop-nav {
        display: none !important;
      }
    }

    /* Hide mobile button on desktop */
    @media (min-width: 992px) {
      .mobile-toggle {
        display: none !important;
      }
    }
  </style>
</head>

<body>

  <!-- Top Navbar -->
  <?php include 'navbar.php'; ?>


  <div style="margin-top: 120px;">
    <div class="container  mt-5">
      <h2 class="fw-bold">Gallery</h2>
    </div>

    <!-- Back to Home -->
    <div class="container  mb-4">
      <a href="index.php" class="text-decoration-none" style="color: #f1c40f;">
        <i class="bi bi-house-door-fill me-2"></i> Back to Home
      </a>
    </div>
  </div>

  <!-- section3 -->
  <section class="py-5 bg-light">
    <div class="container">
      <!-- <h2 class="text-center mb-4">Latest News</h2> -->
      <div class="row g-4">

        <!-- News Card 1 -->
        <div class="col-md-4">
          <div class="card news-card h-100 shadow-sm">
            <div class="news-img-container">
              <img src="assest/gallery3.jpg" class="card-img-top" alt="News 1">
            </div>
          </div>
        </div>

        <!-- News Card 2 -->
        <div class="col-md-4">
          <div class="card news-card h-100 shadow-sm">
            <div class="news-img-container">
              <img src="assest/gallery2.jpg" class="card-img-top" alt="News 2">
            </div>
          </div>
        </div>

        <!-- News Card 3 -->
        <div class="col-md-4">
          <div class="card news-card h-100 shadow-sm">
            <div class="news-img-container">
              <img src="assest/gallery1.jpg" class="card-img-top" alt="News 3">
            </div>
          </div>
        </div>

        <!-- News Card 3 -->
        <div class="col-md-4">
          <div class="card news-card h-100 shadow-sm">
            <div class="news-img-container">
              <img src="assest/gallery4.jpg" class="card-img-top" alt="News 3">
            </div>
          </div>
        </div>

        <!-- News Card 3 -->
        <div class="col-md-4">
          <div class="card news-card h-100 shadow-sm">
            <div class="news-img-container">
              <img src="assest/gallery5.jpg" class="card-img-top" alt="News 3">
            </div>
          </div>
        </div>

        <!-- News Card 3 -->
        <div class="col-md-4">
          <div class="card news-card h-100 shadow-sm">
            <div class="news-img-container">
              <img src="assest/gallery6.jpg" class="card-img-top" alt="News 3">
            </div>
          </div>
        </div>

        <!-- News Card 3 -->
        <div class="col-md-4">
          <div class="card news-card h-100 shadow-sm">
            <div class="news-img-container">
              <img src="assest/gallery7.jpg" class="card-img-top" alt="News 3">
            </div>
          </div>
        </div>

        <!-- News Card 3 -->
        <div class="col-md-4">
          <div class="card news-card h-100 shadow-sm">
            <div class="news-img-container">
              <img src="assest/gallery8.jpg" class="card-img-top" alt="News 3">
            </div>
          </div>
        </div>

        <!-- News Card 3 -->
        <div class="col-md-4">
          <div class="card news-card h-100 shadow-sm">
            <div class="news-img-container">
              <img src="assest/gallery9.jpg" class="card-img-top" alt="News 3">
            </div>
          </div>
        </div>

        <!-- News Card 3 -->
        <!-- <div class="col-md-4">
          <div class="card news-card h-100 shadow-sm">
            <div class="news-img-container">
              <img src="assest/Poshfill came top_20250325_002720_0000.png" class="card-img-top" alt="News 3">
            </div>
          </div>
        </div> -->

        <!-- News Card 3 -->
        <!-- <div class="col-md-4">
          <div class="card news-card h-100 shadow-sm">
            <div class="news-img-container">
              <img src="assest/Poshfill came top_20250325_002720_0000.png" class="card-img-top" alt="News 3">
            </div>
          </div>
        </div> -->

        <!-- News Card 3 -->
        <!-- <div class="col-md-4">
          <div class="card news-card h-100 shadow-sm">
            <div class="news-img-container">
              <img src="assest/Poshfill came top_20250325_002720_0000.png" class="card-img-top" alt="News 3">
            </div>
          </div>
        </div> -->

        <!-- News Card 3 -->
        <!-- <div class="col-md-4">
          <div class="card news-card h-100 shadow-sm">
            <div class="news-img-container">
              <img src="assest/Poshfill came top_20250325_002720_0000.png" class="card-img-top" alt="News 3">
            </div>
          </div>
        </div> -->

        <!-- News Card 3 -->
        <!-- <div class="col-md-4">
          <div class="card news-card h-100 shadow-sm">
            <div class="news-img-container">
              <img src="assest/Poshfill came top_20250325_002720_0000.png" class="card-img-top" alt="News 3">
            </div>
          </div>
        </div> -->

        <!-- News Card 3 -->
        <!-- <div class="col-md-4">
          <div class="card news-card h-100 shadow-sm">
            <div class="news-img-container">
              <img src="assest/Poshfill came top_20250325_002720_0000.png" class="card-img-top" alt="News 3">
            </div>
          </div>
        </div> -->

        <!-- News Card 3 -->
        <!-- <div class="col-md-4">
          <div class="card news-card h-100 shadow-sm">
            <div class="news-img-container">
              <img src="assest/Poshfill came top_20250325_002720_0000.png" class="card-img-top" alt="News 3">
            </div>
          </div>
        </div> -->

        <!-- News Card 3 -->
        <!-- <div class="col-md-4">
          <div class="card news-card h-100 shadow-sm">
            <div class="news-img-container">
              <img src="assest/Poshfill came top_20250325_002720_0000.png" class="card-img-top" alt="News 3">
            </div>
          </div>
        </div> -->

        <!-- News Card 3 -->
        <!-- <div class="col-md-4">
          <div class="card news-card h-100 shadow-sm">
            <div class="news-img-container">
              <img src="assest/Poshfill came top_20250325_002720_0000.png" class="card-img-top" alt="News 3">
            </div>
          </div>
        </div> -->
      </div>
      <div class="text-center mt-5">
        <a href=""><button class="watch text-center"
            style="border: none; border-radius: 10px; padding: 10px; background-color: #f1c40f; color: #fff; width: 130px;"
            type="button">Load More</button></a>
      </div>
    </div>
  </section>

  <!-- <div class="text-center align-items-center mt-5" style="margin-bottom: 50px;">
    <img class="img-fluid" style="width:200px; margin-top: 90px;" src="https://alumni.enactusng.org/maintenance.png" alt="">
    <h1>wesite on <span style="color: #f1c40f;">maintainace</span> </h1>
    <h6>We will be back shortly</h6>
</div> -->

  <!-- Newsletter Section -->
  <?php include "newsletter.php" ?>

  <!-- Footer -->
  <?php include "footer.php" ?>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    document.getElementById("newsletterForm").addEventListener("submit", function (e) {
      e.preventDefault();
      const email = this.querySelector("input").value;

      // Simulate sending data (you'll replace this later with real backend)
      document.getElementById("newsletterMessage").textContent = `Thank you for subscribing, ${email}!`;
      this.reset();
    });
  </script>

</body>

</html>