<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Rathinam Global University — Where Students Transform Into Leaders. The RGU Way: Global Readiness + Career Readiness + Future Readiness." />
    <meta name="theme-color" content="#080810" />
    <title>Rathinam Global University — The RGU Way</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800;900&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;1,9..40,400&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sora:   ['Sora', 'system-ui', 'sans-serif'],
                        dm:     ['DM Sans', 'system-ui', 'sans-serif'],
                        outfit: ['Sora', 'system-ui', 'sans-serif'],
                        inter:  ['DM Sans', 'system-ui', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>

<?php include 'partials/navbar.php'; ?>
<?php include 'partials/hero.php'; ?>
<?php include 'partials/why-more-than-degree.php'; ?>
<?php include 'partials/what-is-rgu-way.php'; ?>
<?php include 'partials/core-brand-promise.php'; ?>
<?php include 'partials/skill-passport-banner.php'; ?>
<?php include 'partials/projected-outcomes.php'; ?>
<?php include 'partials/life-at-rgu.php'; ?>
<?php include 'partials/happening-at-rgu.php'; ?>
<?php include 'partials/footer.php'; ?>

<!-- Main JS -->
<script src="assets/js/main.js"></script>
</body>
</html>
