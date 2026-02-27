<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careline | Premium UK Home Support</title>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=PT+Serif:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    brand: '#538d00',
                    brandDark: '#7ab81f',
                    darkText: '#1f2937',
                    lightBg: '#f9fafb'
                },
                fontFamily: {
                    heading: ['"PT Serif"', 'serif'],
                    body: ['"DM Sans"', 'sans-serif'],
                }
            }
        }
    }
    </script>

    <style>
    @keyframes scroll-left {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .animate-marquee {
        display: flex;
        width: max-content;
        animation: scroll-left 60s linear infinite;
    }

    .animate-marquee:hover {
        animation-play-state: paused;
        /* Pause on hover so users can read */
    }
    </style>
</head>