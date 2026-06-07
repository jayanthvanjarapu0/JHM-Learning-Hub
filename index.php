<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>JHM Learning Hub</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
     
}
  #courses .row {
    display: flex;
    flex-wrap: wrap;
  }
  #courses .col-md-4 {
    flex: 0 0 33.333%;
    max-width: 33.333%;
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  
    <!-- Professional Bootstrap navbar -->
   
<?php include 'navbar.php'; ?>
    <div class="container mt-5" id="courses">
      <div class="text-center py-4 mb-3">
  <h2 class="fw-bold" style="
    font-size: 2.5rem;
    background: linear-gradient(135deg, #1a73e8, #0d47a1);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    letter-spacing: 1px;
  ">
  <!-- JHM Learning Hub by Jayanth -->
    🎓 JHM Learning Hub
  </h2>
  <p class="text-muted mt-1" style="font-size: 1rem;">
    Learn for free. Grow at your own pace.
  </p>
  <hr style="width: 80px; border: 3px solid #1a73e8; margin: 10px auto 0; border-radius: 5px;">
</div>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <img
              src="web.jpeg"
              class="card-img-top"
              alt="Web Designing"
            />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">WEB DESIGNING</h5>
              <p class="card-text">
                Learn modern web designing using HTML, CSS, Bootstrap and JavaScript.
              </p>
              
              <a href="course.php?id=1" class="btn btn-primary w-100 mt-auto enroll-btn">Enroll</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <img
              src="app.jpeg"
              class="card-img-top"
              alt="App Development"
            />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">APP DEVELOPMENT</h5>
              <p class="card-text">
                Build Android and iOS applications using modern technologies.
              </p>
              
              <a href="course.php?id=2" class="btn btn-primary w-100 mt-auto enroll-btn">Enroll</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <img
              src="ui .jpeg"
              class="card-img-top"
              alt="UI & UX"
            />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">UI&UX</h5>
              <p class="card-text">Build amazing UI&UX designs with modern tools.</p>
              <a href="course.php?id=3" class="btn btn-primary w-100 mt-auto enroll-btn">Enroll</a>
            </div>
             
          </div>
        </div>
         
 

 <!-- Course 1: Generative AI -->
<div class="col-md-4 mb-4">
  <div class="card h-100 shadow-sm">
    <img src="gen ai.jpeg" class="card-img-top" alt="Generative AI" />
    <div class="card-body d-flex flex-column">
      <span class="badge bg-danger mb-2" style="width:fit-content">🔥 Trending</span>
      <h5 class="card-title">Generative AI</h5>
      <p class="card-text text-muted">Master ChatGPT, DALL·E, Midjourney & prompt engineering for real-world use.</p>
      <a href="course.php?id=4" class="btn btn-primary mt-auto enroll-btn">Enroll</a>
    </div>
  </div>
</div>

<!-- Course 2: Machine Learning -->
<div class="col-md-4 mb-4">
  <div class="card h-100 shadow-sm">
    <img src="ml.jpeg" class="card-img-top" alt="Machine Learning" />
    <div class="card-body d-flex flex-column">
      <span class="badge bg-warning text-dark mb-2" style="width:fit-content">⭐ Popular</span>
      <h5 class="card-title">Machine Learning</h5>
      <p class="card-text text-muted">Learn supervised & unsupervised learning, regression, and model training from scratch.</p>
      <a href="course.php?id=5" class="btn btn-primary mt-auto enroll-btn">Enroll</a>
    </div>
  </div>
</div>

<!-- Course 3: php programming(existing, kept) -->
<div class="col-md-4 mb-4">
  <div class="card h-100 shadow-sm">
    <img src="php.jpeg" class="card-img-top" alt="UI & UX" />
    <div class="card-body d-flex flex-column">
      <h5 class="card-title">php programming</h5>
      <p class="card-text text-muted">learn php programming</p>
      <a href="course.php?id=6" class="btn btn-primary mt-auto enroll-btn">Enroll</a>
    </div>
  </div>
</div>

<!-- Course 4: Large Language Models -->
<div class="col-md-4 mb-4">
  <div class="card h-100 shadow-sm">
    <img src="llm.jpeg" class="card-img-top" alt="LLM" />
    <div class="card-body d-flex flex-column">
      <span class="badge bg-danger mb-2" style="width:fit-content">🔥 Trending</span>
      <h5 class="card-title">Large Language Models (LLMs)</h5>
      <p class="card-text text-muted">Understand how GPT, Claude & Gemini work. Build apps using LLM APIs and RAG pipelines.</p>
      <a href="course.php?id=7" class="btn btn-primary mt-auto enroll-btn">Enroll</a>
    </div>
  </div>
</div>

<!-- Course 5: AI Agents & Automation -->
<div class="col-md-4 mb-4">
  <div class="card h-100 shadow-sm">
    <img src="ai agents.jpeg" class="card-img-top" alt="AI Agents" />
    <div class="card-body d-flex flex-column">
      <span class="badge bg-danger mb-2" style="width:fit-content">🆕 New</span>
      <h5 class="card-title">AI Agents & Automation</h5>
      <p class="card-text text-muted">Build autonomous AI agents using LangChain, n8n, and the ReAct loop pattern.</p>
      <a href="course.php?id=8" class="btn btn-primary mt-auto enroll-btn">Enroll</a>
    </div>
  </div>
</div>

<!-- Course 6: Edge AI & IoT -->
<div class="col-md-4 mb-4">
  <div class="card h-100 shadow-sm">
    <img src="edge iot.jpeg" class="card-img-top" alt="Edge AI" />
    <div class="card-body d-flex flex-column">
      <span class="badge bg-success mb-2" style="width:fit-content">🌐 Emerging</span>
      <h5 class="card-title">Edge AI & IoT</h5>
      <p class="card-text text-muted">Deploy AI on ESP32, Raspberry Pi & microcontrollers using TensorFlow Lite.</p>
      <a href="course.php?id=9" class="btn btn-primary mt-auto enroll-btn">Enroll</a>
    </div>
  </div>
</div>

<!-- Course 7: Full Stack Web Dev -->
<div class="col-md-4 mb-4">
  <div class="card h-100 shadow-sm">
    <img src="full stack.jpeg" class="card-img-top" alt="Full Stack" />
    <div class="card-body d-flex flex-column">
      <span class="badge bg-warning text-dark mb-2" style="width:fit-content">⭐ Popular</span>
      <h5 class="card-title">Full Stack Development</h5>
      <p class="card-text text-muted">Build complete web apps with React frontend, Node.js / PHP backend and MySQL.</p>
      <a href="course.php?id=10" class="btn btn-primary mt-auto enroll-btn">Enroll</a>
    </div>
  </div>
</div>

<!-- Course 8: Cloud & DevOps -->
<div class="col-md-4 mb-4">
  <div class="card h-100 shadow-sm">
    <img src="cloud.jpeg" class="card-img-top" alt="Cloud & DevOps" />
    <div class="card-body d-flex flex-column">
      <span class="badge bg-success mb-2" style="width:fit-content">☁️ In-Demand</span>
      <h5 class="card-title">Cloud & DevOps</h5>
      <p class="card-text text-muted">Master AWS, Docker, CI/CD pipelines and deploy production-grade apps at scale.</p>
      <a href="course.php?id=11" class="btn btn-primary mt-auto enroll-btn">Enroll</a>
    </div>
  </div>
</div>

<!-- Course 9: Cybersecurity & Ethical Hacking -->
<div class="col-md-4 mb-4">
  <div class="card h-100 shadow-sm">
    <img src="hack.jpeg" class="card-img-top" alt="Cybersecurity" />
    <div class="card-body d-flex flex-column">
      <span class="badge bg-dark text-white mb-2" style="width:fit-content">🔐 Essential</span>
      <h5 class="card-title">Cybersecurity & Ethical Hacking</h5>
      <p class="card-text text-muted">Learn penetration testing, network security and how to defend against modern threats.</p>
      <a href="course.php?id=12" class="btn btn-primary mt-auto enroll-btn">Enroll</a>
    </div>
  </div>
</div>

<!-- Course 10: Data Science & Analytics -->
<div class="col-md-4 mb-4">
  <div class="card h-100 shadow-sm">
    <img src="data science.jpeg" class="card-img-top" alt="Data Science" />
    <div class="card-body d-flex flex-column">
      <span class="badge bg-warning text-dark mb-2" style="width:fit-content">⭐ Popular</span>
      <h5 class="card-title">Data Science & Analytics</h5>
      <p class="card-text text-muted">Analyze real datasets using Python, Pandas, NumPy and visualize with Matplotlib.</p>
      <a href="course.php?id=13" class="btn btn-primary mt-auto enroll-btn">Enroll</a>
    </div>
  </div>
</div>

<!-- Course 11: Blockchain & Web3 -->
<div class="col-md-4 mb-4">
  <div class="card h-100 shadow-sm">
    <img src="blockchain.jpeg" class="card-img-top" alt="Blockchain" />
    <div class="card-body d-flex flex-column">
      <span class="badge bg-success mb-2" style="width:fit-content">🌐 Emerging</span>
      <h5 class="card-title">Blockchain & Web3</h5>
      <p class="card-text text-muted">Understand smart contracts, Solidity, DeFi and build decentralized apps on Ethereum.</p>
      <a href="course.php?id=14" class="btn btn-primary mt-auto enroll-btn">Enroll</a>
    </div>
  </div>
</div>

<!-- Course 12: AR / VR & Spatial Computing -->
<div class="col-md-4 mb-4">
  <div class="card h-100 shadow-sm">
    <img src="ar vr.jpeg" class="card-img-top" alt="AR VR" />
    <div class="card-body d-flex flex-column">
      <span class="badge bg-danger mb-2" style="width:fit-content">🆕 New</span>
      <h5 class="card-title">AR / VR & Spatial Computing</h5>
      <p class="card-text text-muted">Build immersive experiences for Apple Vision Pro, Meta Quest using Unity & WebXR.</p>
      <a href="course.php?id=15" class="btn btn-primary mt-auto enroll-btn">Enroll</a>
    </div>
  </div>
</div>
      </div>
     
             

    <!-- Bootstrap JS must be loaded before using bootstrap.Modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
document.querySelectorAll('.enroll-btn').forEach((btn) => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();
        const href = btn.getAttribute('href');
        // Extract course id from course.php?id=X
        const id = new URLSearchParams(href.split('?')[1]).get('id');
        window.location.href = 'enroll.php?course_id=' + id;
    });
});
</script>


    <!-- Video modal -->
    <div
      class="modal fade"
      id="enrollVideoModal"
      tabindex="-1"
      aria-labelledby="enrollVideoModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="enrollVideoModalLabel">Course Video</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
              <div class="ratio ratio-16x9">
                <iframe
                  id="enrollVideoFrame"
                  src=""
                  frameborder="0"
                  allowfullscreen
                ></iframe>
              </div>
          </div>
        </div>
      </div>
    </div>
<!-- Footer -->
<!-- Footer -->
<footer style="background:#0f0f1a; color:white; padding:50px 0 20px;">
  <div class="container">
    <div class="row g-4">

      <!-- Brand -->
      <div class="col-md-4">
        <h5 style="color:#0d47a1; font-weight:bold; font-size:1.3rem;">JHM Learning Hub</h5>
        <p style="color:#aaa; font-size:0.9rem; margin-top:10px;">Free online learning platform for Web Designing, App Development and UI/UX.</p>
        <!-- Social Icons -->
        <div style="margin-top:16px; display:flex; gap:12px;">
          <a href="#" style="background:#1877f2; color:white; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; text-decoration:none; font-size:0.9rem;">f</a>
          <a href="#" style="background:#e1306c; color:white; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; text-decoration:none; font-size:0.9rem;">in</a>
          <a href="#" style="background:#ff0000; color:white; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; text-decoration:none; font-size:0.85rem;">▶</a>
          <a href="#" style="background:#0077b5; color:white; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; text-decoration:none; font-size:0.9rem;">in</a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-md-4">
        <h6 style="color:#0d47a1; margin-bottom:16px;">Quick Links</h6>
        <ul style="list-style:none; padding:0; line-height:2;">
          <li><a href="index.php" style="color:#aaa; text-decoration:none;">Home</a></li>
          <li><a href="about.php" style="color:#aaa; text-decoration:none;">About Us</a></li>
          <li><a href="index.php" style="color:#aaa; text-decoration:none;">Courses</a></li>
          <li><a href="dashboard.php" style="color:#aaa; text-decoration:none;">Dashboard</a></li>
        </ul>
      </div>

      <!-- Our Courses -->
      <div class="col-md-4">
        <h6 style="color:#0d47a1; margin-bottom:16px;">Our Courses</h6>
        <ul style="list-style:none; padding:0; line-height:2;">
          <li><a href="enroll.php?course_id=1" style="color:#aaa; text-decoration:none;">Web Designing</a></li>
          <li><a href="enroll.php?course_id=2" style="color:#aaa; text-decoration:none;">App Development</a></li>
          <li><a href="enroll.php?course_id=3" style="color:#aaa; text-decoration:none;">UI &amp; UX</a></li>
          <li><a href="enroll.php?course_id=5" style="color:#aaa; text-decoration:none;">Generative AI</a></li>
          <li><a href="enroll.php?course_id=6" style="color:#aaa; text-decoration:none;">Machine Learning</a></li>
          <li><a href="enroll.php?course_id=9" style="color:#aaa; text-decoration:none;">Edge AI &amp; IoT</a></li>
        </ul>
      </div>

    </div>

    <hr style="border-color:#333; margin-top:40px;">
    <div class="text-center" style="color:#555; font-size:0.85rem;">
      <p>&copy; 2026 JHM Learning Hub. All rights reserved.</p>
    </div>
  </div>
</footer>