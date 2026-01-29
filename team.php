<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Enactus - Team</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link rel="shortcut icon"
    href="data:image/png;base64,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"
    type="image/x-icon">
  <style>
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

    .team-card img {
      filter: grayscale(100%);
      transition: filter 0.3s ease;
    }

    .team-card img:hover {
      filter: grayscale(0%);
    }

    .social-icons a {
      color: #2c3e50;
      margin: 0 8px;
      font-size: 1.2rem;
      transition: color 0.3s ease;
    }

    .social-icons a:hover {
      color: #f1c40f;
    }
  </style>
</head>

<body>
  <!-- Top Navbar -->
  <?php include 'navbar.php'; ?>

  <section class="py-5 bg-light text-center" style="margin-top: 70px;">
    <div class="container">
      <h2 class="mb-4 fw-bold">Meet The Team Executive</h2>
      <h1 class="mb-4 fw-light font-family">PASSONIATE. PROACTIVE. RESTPECTFUL</h1>
      <div class="row g-4">

        <!-- Repeat this block for each team member -->
        <!-- Team Member Template -->
        <div class="col-md-3 col-sm-6">
          <div class="card team-card shadow-sm">
            <img style="height: 250px;" src="assest/IMG-20250603-WA0041 - Eniolorunda.jpg" class="card-img-top"
              alt="Team Member">
            <div class="card-body">
              <h5 class="card-title mb-1">precious Adu</h5>
              <p class="text-muted small">Project manager</p>
              <p class="small">Leading Enactus BOUESTI to new heights with innovation and passion.</p>
              <div class="social-icons">
                <a href="mailto:aduprecious27@gmail.com"><i class="fas fa-envelope"></i></a>
                <a href="https://www.instagram.com/eni_olorunda?igsh=Z21hdmt5bmkzbjZ0" target="_blank"><i
                    class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/precious-adu-9ba6932a9?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                  target="_blank"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Team Member -->

        <!-- team member 2 -->
        <div class="col-md-3 col-sm-6">
          <div class="card team-card shadow-sm">
            <img style="height: 250px;" src="assest/DSC_4560 - Fashyrg.JPG" class="card-img-top" alt="Team Member">
            <div class="card-body">
              <h5 class="card-title mb-1">Fasanya Samuel </h5>
              <p class="text-muted small">Asst. project manager</p>
              <p class="small">helping with scheduling, and communication.</p>
              <div class="social-icons">
                <a href="mailto:fashy234@gmail.com"><i class="fas fa-envelope"></i></a>
                <a href="https://www.instagram.com/official_fashyrg_?igsh=a2p4OHNmZzk0dTd5" target="_blank"><i
                    class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/samuel-fasanya-75238a232?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                  target="_blank"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- team member 2 -->
        <div class="col-md-3 col-sm-6">
          <div class="card team-card shadow-sm">
            <img style="height: 250px;" src="assest/DSC_4678 - Ayomide Charity.JPG" class="card-img-top"
              alt="Team Member">
            <div class="card-body">
              <h5 class="card-title mb-1">Obasuyi Ayomide </h5>
              <p class="text-muted small">Technical Director</p>
              <p class="small">leads the technical side of the project.</p>
              <div class="social-icons">
                <a href="mailto:charityayomide01@gmail.com"><i class="fas fa-envelope"></i></a>
                <a href="https://www.instagram.com/charity.obasuyi?igsh=dHN3MDRiNXg0OTdl" target="_blank"><i
                    class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/ayomide-obasuyi-b75276292?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                  target="_blank"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>


        <!-- team member 2 -->
        <div class="col-md-3 col-sm-6">
          <div class="card team-card shadow-sm">
            <img style="height: 250px;" src="assest/IMG-20241229-WA0049 - Kehinde Daniel.jpg" class="card-img-top"
              alt="Team Member">
            <div class="card-body">
              <h5 class="card-title mb-1">Ajayi Kehinde</h5>
              <p class="text-muted small">Team Secretary</p>
              <p class="small">handling documentation and communication.</p>
              <div class="social-icons">
                <a href="mailto:kehindedaniel643@gmail.com"><i class="fas fa-envelope"></i></a>
                <a href="https://www.instagram.com/olamhi_kenny/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://linkedin.com/in/sarah" target="_blank"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>


        <!-- team member 2 -->
        <div class="col-md-3 col-sm-6">
          <div class="card team-card shadow-sm">
            <img style="height: 250px;" src="assest/SAVE_20250514_121016 - Den Nix.jpg" class="card-img-top"
              alt="Team Member">
            <div class="card-body">
              <h5 class="card-title mb-1">Fasunloye Dennis </h5>
              <p class="text-muted small">Finacial secretary</p>
              <p class="small">keeping track of income and expenses.</p>
              <div class="social-icons">
                <a href="mailto:fasunloyedennis85@gmail.com"><i class="fas fa-envelope"></i></a>
                <a href="https://www.instagram.com/dennis_gotit?igsh=MTdid2lha3p3cnU5dw==" target="_blank"><i
                    class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/dennis-fasunloye-8375422a8?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                  target="_blank"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>


        <!-- team member 2 -->
        <div class="col-md-3 col-sm-6">
          <div class="card team-card shadow-sm">
            <img style="height: 250px;" src="assest/IMG-20250324-WA0099 - Ayanfe Dorcas.jpg" class="card-img-top"
              alt="Team Member">
            <div class="card-body">
              <h5 class="card-title mb-1">Ayanfe Dorcas</h5>
              <p class="text-muted small">Team Secretary</p>
              <p class="small">handling documentation and communication.</p>
              <div class="social-icons">
                <a href="mailto:ayanfedorcas58@gmail.com"><i class="fas fa-envelope"></i></a>
                <a href=" https://www.instagram.com/invites/contact/?i=grojkabmwbne&utm_content=57db1fr"
                  target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://linkedin.com/in/sarah" target="_blank"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- team member 2 -->
        <div class="col-md-3 col-sm-6">
          <div class="card team-card shadow-sm">
            <img style="height: 250px;" src="assest/IMG_3114 - Ojo Temitope.jpeg" class="card-img-top"
              alt="Team Member">
            <div class="card-body">
              <h5 class="card-title mb-1">Ojo Temitape </h5>
              <p class="text-muted small">Social media Manager</p>
              <p class="small">handling documentation and communication.</p>
              <div class="social-icons">
                <a href="mailto:ojotemitope260@gmail.com"><i class="fas fa-envelope"></i></a>
                <a href="https://www.instagram.com/emi_chairman001/" target="_blank"><i
                    class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/temitope-ojo-1b9642288/" target="_blank"><i
                    class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- team member 2 -->
        <div class="col-md-3 col-sm-6">
          <div class="card team-card shadow-sm">
            <img style="height: 250px;" src="assest/team lead.jpg" class="card-img-top" alt="Team Member">
            <div class="card-body">
              <h5 class="card-title mb-1">Ogunneghna Ayomide </h5>
              <p class="text-muted small">Team lead</p>
              <p class="small">Facilitate teamwork, resolve blockers, and inspire progress.</p>
              <div class="social-icons">
                <a href="mailto:ogunneghnayomide@gmail.com"><i class="fas fa-envelope"></i></a>
                <a href="https://www.instagram.com/ayomidejoseph123/" target="_blank"><i
                    class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/ayomide-joseph-b418aa32a/" target="_blank"><i
                    class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="py-5 bg-light text-center" style="margin-top: 70px;">
    <div class="container">
      <h2 class="mb-4 fw-bold">Meet Our Passonate Staff Adviser</h2>
      <div class="row g-3">

        <div class="col-md-3 col-sm-6">
          <div class="card team-card shadow-sm">
            <img style="height: 250px;" src="assest/WhatsApp Image 2025-06-15 at 1.23.49 PM.jpeg" class="card-img-top"
              alt="Team Member">
            <div class="card-body">
              <h5 class="card-title mb-1">Tomisin James <br>
                Aruleba </h5>
              <p class="text-muted small">Staff Adviser</p>
              <div class="social-icons">
                <a href="mailto:aruleba.tomisin@bouesti.edu.ng"><i class="fas fa-envelope"></i></a>
                <a href="http://www.linkedin.com/in/tomisin-aruleba-2592a0111 " target="_blank"><i
                    class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="card team-card shadow-sm">
            <img style="height: 250px;" src="assest/WhatsApp Image 2025-06-15 at 9.00.49 PM.jpeg" class="card-img-top"
              alt="Team Member">
            <div class="card-body">
              <h5 class="card-title mb-1"> Miss Oluwaseun Titi Adeosun</h5>
              <p class="text-muted small">Staff Adviser</p>
              <div class="social-icons">
                <a href="mailto:adeosunoluwaseun07@gmail.com"><i class="fas fa-envelope"></i></a>
                <a href="https://www.linkedin.com/in/oluwaseun-adeosun-b-sc-m-sc-a55011b5?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                  target="_blank"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-3 col-sm-6">
          <div class="card team-card shadow-sm">
            <img style="height: 250px;" src="assest/WhatsApp Image 2025-06-15 at 3.15.55 PM.jpeg" class="card-img-top"
              alt="Team Member">
            <div class="card-body">
              <h5 class="card-title mb-1">Engr Mayowa Ayodele Ogidi</h5>
              <p class="text-muted small">Staff Adviser</p>
              <div class="social-icons">
                <a href="mailto:"><i class="fas fa-envelope"></i></a>
                <a href="https://www.linkedin.com/in/mayowa-ogidi-5479634b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                  target="_blank"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <?php include "newsletter.php" ?>

  <!-- Footer -->
  <?php include "footer.php" ?>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
  </script>

</body>

</html>