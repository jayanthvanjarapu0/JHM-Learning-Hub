<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Us - JHM Learning Hub</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <style>
    body { background: #f8f9fa; }

    /* Hero */
    .about-hero {
      background: linear-gradient(135deg,#0d47a1 , #1a73e8);
      color: white;
      padding: 80px 20px;
      text-align: center;
    }
    .about-hero h1 {
      font-size: 3rem;
      font-weight: 800;
      letter-spacing: 1px;
    }
    .about-hero p {
      font-size: 1.2rem;
      opacity: 0.9;
      max-width: 600px;
      margin: 15px auto 0;
    }

    /* Mission */
    .mission-section {
      padding: 60px 20px;
      background: #fff;
    }
    .mission-card {
      border: none;
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
      padding: 30px;
      text-align: center;
      transition: transform 0.3s;
    }
    .mission-card:hover { transform: translateY(-6px); }
    .mission-icon {
      font-size: 2.5rem;
      color: #1a73e8;
      margin-bottom: 15px;
    }

    /* Stats */
    .stats-section {
      background: linear-gradient(135deg, #0d47a1, #1a73e8);
      color: white;
      padding: 50px 20px;
      text-align: center;
    }
    .stat-number {
      font-size: 2.8rem;
      font-weight: 800;
    }
    .stat-label { font-size: 1rem; opacity: 0.85; }

    /* Team */
    .team-section { padding: 60px 20px; background: #f8f9fa; }
    .team-card {
      border: none;
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
      padding: 30px 20px;
      text-align: center;
      background: #fff;
      transition: transform 0.3s;
    }
    .team-card:hover { transform: translateY(-6px); }
    .team-avatar {
      width: 90px; height: 90px;
      border-radius: 50%;
      background: linear-gradient(135deg, #1a73e8, #0d47a1);
      display: flex; align-items: center; justify-content: center;
      margin: 0 auto 15px;
      font-size: 2rem; color: white;
    }

    /* CTA */
    .cta-section {
      background: #fff;
      padding: 60px 20px;
      text-align: center;
    }
    .cta-section h2 { font-weight: 800; color: #0d47a1; }
    .btn-cta {
      background: linear-gradient(135deg, #1a73e8, #0d47a1);
      color: white;
      padding: 12px 40px;
      border-radius: 50px;
      font-size: 1.1rem;
      border: none;
      text-decoration: none;
      display: inline-block;
      margin-top: 20px;
      transition: opacity 0.3s;
    }
    .btn-cta:hover { opacity: 0.85; color: white; }

    /* Section titles */
    .section-title {
      text-align: center;
      font-weight: 800;
      font-size: 2rem;
      color: #0d47a1;
      margin-bottom: 10px;
    }
    .section-sub {
      text-align: center;
      color: #666;
      margin-bottom: 40px;
    }
    .title-bar {
      width: 60px; height: 4px;
      background: linear-gradient(135deg, #1a73e8, #0d47a1);
      border-radius: 5px;
      margin: 8px auto 30px;
    }
  </style>
</head>
<body>

<!-- Hero -->
<div class="about-hero">
  <h1 style="font-size:3rem; font-weight:800; color:white; letter-spacing:1px;">
    🎓 About JHM Learning Hub
  </h1>
  <p style="color:rgba(255,255,255,0.9); font-size:1.2rem; max-width:600px; margin:15px auto 0;">
    Empowering learners with industry-ready skills through expert-led courses and hands-on learning.
  </p>
</div>

<!-- Mission Cards -->
<div class="mission-section">
  <h2 class="section-title">Why Choose Us?</h2>
  <div class="title-bar"></div>
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="mission-card">
          <div class="mission-icon"><i class="bi bi-lightning-charge-fill"></i></div>
          <h5 class="fw-bold">Practical Learning</h5>
          <p class="text-muted">Real-world projects and hands-on assignments that prepare you for the job market.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="mission-card">
          <div class="mission-icon"><i class="bi bi-person-video3"></i></div>
          <h5 class="fw-bold">Expert Instructors</h5>
          <p class="text-muted">Learn from industry professionals with years of experience in their fields.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="mission-card">
          <div class="mission-icon"><i class="bi bi-infinity"></i></div>
          <h5 class="fw-bold">Lifetime Access</h5>
          <p class="text-muted">Enroll once and get lifetime access to course materials and future updates.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Stats -->
<div class="stats-section">
  <div class="container">
    <div class="row g-4">
      <div class="col-6 col-md-3">
        <div class="stat-number">500+</div>
        <div class="stat-label">Students Enrolled</div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-number">10+</div>
        <div class="stat-label">Courses Available</div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-number">5+</div>
        <div class="stat-label">Expert Instructors</div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-number">98%</div>
        <div class="stat-label">Satisfaction Rate</div>
      </div>
    </div>
  </div>
</div>

<!-- Team -->
<div class="team-section">
  <h2 class="section-title">Meet Our Team</h2>
  <div class="title-bar"></div>
  <div class="container">
    <div class="row g-4 justify-content-center">
      <div class="col-md-3">
        <div class="team-card">
          <div class="team-avatar"><i class="bi bi-person-fill"></i></div>
          <h6 class="fw-bold">Babu Sir</h6>
          <p class="text-muted small">Founder & Lead Instructor</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="team-card">
          <div class="team-avatar"><i class="bi bi-person-fill"></i></div>
          <h6 class="fw-bold">Web Dev Team</h6>
          <p class="text-muted small">Full Stack Instructors</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="team-card">
          <div class="team-avatar"><i class="bi bi-person-fill"></i></div>
          <h6 class="fw-bold">AI & ML Team</h6>
          <p class="text-muted small">AI/ML Course Instructors</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CTA -->
<div class="cta-section">
  <h2>Ready to Start Learning?</h2>
  <p class="text-muted">Join hundreds of students already growing their skills with JHM Learning Hub.</p>
  <a href="index.php" class="btn-cta">🚀 Explore Courses</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>