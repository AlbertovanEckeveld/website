<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alberto van Eckeveld | Portfolio</title>
    <style>
        :root {
            color-scheme: light;
            font-family: "Inter", "Segoe UI", Arial, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #0f172a;
            color: #e2e8f0;
            line-height: 1.6;
        }

        .wrapper {
            max-width: 900px;
            margin: 0 auto;
            padding: 3rem 1.5rem;
        }

        h1,
        h2 {
            color: #f8fafc;
            margin-bottom: 0.4rem;
        }

        .intro,
        .section {
            background: #1e293b;
            border: 1px solid #334155;
            border-radius: 14px;
            padding: 1.25rem;
            margin-bottom: 1rem;
        }

        ul {
            margin: 0.5rem 0 0;
            padding-left: 1.2rem;
        }

        a {
            color: #38bdf8;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<main class="wrapper">
    <section class="intro">
        <h1>Alberto van Eckeveld</h1>
        <p>Welkom op mijn persoonlijke portfolio. Ik bouw praktische, nette websites en webapplicaties.</p>
    </section>

    <section class="section">
        <h2>Over mij</h2>
        <p>Ik werk graag met moderne webtechnieken, met focus op heldere code, snelheid en betrouwbaarheid.</p>
    </section>

    <section class="section">
        <h2>Vaardigheden</h2>
        <ul>
            <li>PHP en backend ontwikkeling</li>
            <li>HTML, CSS en responsief design</li>
            <li>Performance en security best practices</li>
        </ul>
    </section>

    <section class="section">
        <h2>Contact</h2>
        <p>
            E-mail:
            <a href="mailto:info@example.com">info@example.com</a>
        </p>
    </section>
</main>
</body>
</html>
