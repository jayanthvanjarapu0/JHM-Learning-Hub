<?php
session_start();
include 'config/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course - Course by Babu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { background: #f0f0f0; }
        .player-section { background: white; border-radius: 10px; padding: 25px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        .player-section h3 { margin-bottom: 15px; color: #2a48e0; font-size: 24px; }
        .player-section iframe { width: 100%; height: 520px; border-radius: 8px; border: none; }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">
  <div class="player-section">
    <h3 id="course-title"></h3>
    <iframe id="video-player" src="" allowfullscreen></iframe>
  </div>
</div>

<script>
const params   = new URLSearchParams(window.location.search);
const courseId = parseInt(params.get('id')) || 1;

const courses = {
    1: {
        title: "Web Designing",
        playlistId: "PLXC_gcsKLD6n7p6tHPBxsKjN5hA_quaPI"
    },
    2: {
        title: "App Development",
        playlistId: "PLTV_nsuD2lf4UCTV6xwvNPvFdmCNKyhc8"
    },
    3: {
        title: "UI & UX Designing",
        playlistId: "PLEiEAq2VkUULzCiDV5VyF7zR6zoDIT_eH"
    },
    4: {
        title: "Generative AI",
        playlistId: "PLEiEAq2VkUULjxp4UxA9Z4ca5pvHqFmy7"
    },
    5: {
        title: "Machine Learning",
        playlistId: "PLEiEAq2VkUULYYgj13YHUWmRePqiu8Ddy"
    },
    6: {
        title: "php Programming",
        playlistId: "PL0eyrZgxdwhwwQQZA79OzYwl5ewA7HQih"
    },
    7: {
        title: "Large Language Models (LLMs)",
        playlistId: "PLZ2ps__7DhBbaMNZoyW2Hizl8DG6ikkjo"
    },
    8: {
        title: "AI Agents & Automation",
        playlistId: "PLVG0Zju2HPJeSBOPHsqdrmFZACtpDmFeY"
    },
    9: {
        title: "Edge AI & IoT",
        playlistId: "PL7VEa1KauMQppUExiIOfxxk_2ta94EEpd"
    },
    10: {
        title: "Full Stack Development",
        playlistId: "PLEiEAq2VkUULCC3eEATL4zzuapTjmo1Z_"
    },
    11: {
        title: "Cloud & DevOps",
        playlistId: "PL5OhSdfH4uDsyUM02ZHl2mOYBpihCYsml"
    },
    12: {
        title: "Cybersecurity & Ethical Hacking",
        playlistId: "PLEiEAq2VkUUJfPOj5nRounXvf3n17PCft"
    },
    13: {
        title: "Data Science & Analytics",
        playlistId: "PLEiEAq2VkUUKgEFXH1tBbHwq38oWYDScU"
    },
    14: {
        title: "Blockchain & Web3",
        playlistId: "PLR0uCBk15bq96j_R_cS1Rwg96rfDAfCmM"
    },
    15: {
        title: "AR / VR & Spatial Computing",
        playlistId: "PLwdnzlV3ogoVHdoJZk7CgKOPe-eM27er6"
    }
};
const course = courses[courseId];

if (course) {
    document.getElementById('course-title').textContent = course.title;
    document.getElementById('video-player').src = 
        `https://www.youtube.com/embed/videoseries?list=${course.playlistId}&autoplay=1`;
} else {
    document.getElementById('course-title').textContent = "Course Not Found";
}
</script>