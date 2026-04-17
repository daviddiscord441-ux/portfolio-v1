<?php
// Portfolio for ItsDarkness

$name = 'ItsDarkness';
$dateCreated = '2026-04-17';

// Personal Information
$bio = 'Welcome to my portfolio! I am a passionate developer with experience in PHP, JavaScript, and web development.';
$skills = array('PHP', 'JavaScript', 'HTML', 'CSS', 'React');

// Contact Information
$email = 'itsdarkness@example.com';
$linkedin = 'https://www.linkedin.com/in/itsdarkness';

// Display Portfolio
echo "<h1>Portfolio of $name</h1>";
echo "<p>$bio</p>";

echo "<h2>Skills:</h2>";
foreach ($skills as $skill) {
    echo "<li>$skill</li>";
}

echo "<h2>Contact:</h2>";
echo "<p>Email: $email</p>";
echo "<p>LinkedIn: <a href='$linkedin'>$linkedin</a></p>";
?>