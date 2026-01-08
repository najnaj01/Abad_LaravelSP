<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Portal</title>

    <!-- Tailwind CDN + font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        :root{
            --bg-900: #05060a; /* deep black */
            --bg-800: #0b0f16; /* near black */
            --card: #0f1724; /* dark card */
            --muted: #9aa6b2; /* muted text */
            --accent: #f4c542; /* warm gold */
            --accent-glow: 0 4px 20px rgba(244,197,66,0.18);
            --glass: linear-gradient(180deg, rgba(255,255,255,0.03), rgba(255,255,255,0.01));
        }

        body { font-family: 'Inter', ui-sans-serif, system-ui, -apple-system, 'Segoe UI', Roboto, Arial; background: linear-gradient(180deg,var(--bg-900),#071021); color:#E6EDF3 }
        .card { background: linear-gradient(180deg,var(--card),#0b1220); border:1px solid rgba(255,255,255,0.03); box-shadow: 0 6px 30px rgba(2,6,23,0.6); border-radius: 12px; }
        .neon { box-shadow: var(--accent-glow); }
        .subtle { color: var(--muted); }
        .light-dot { width:8px;height:8px;border-radius:50%;background:var(--accent);box-shadow:0 0 12px rgba(244,197,66,0.9);} 
    </style>
</head>
<body class="min-h-screen text-gray-100">

    <header class="py-5">
        <div class="max-w-6xl mx-auto px-6 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-black via-gray-800 to-gray-700 flex items-center justify-center text-yellow-400 font-bold text-lg shadow-md" style="border:1px solid rgba(255,255,255,0.03)">B</div>
                <div>
                    <div class="text-lg font-semibold">Student Portal</div>
                    <div class="text-xs subtle">Bat-theme · Clean & illuminated</div>
                </div>
            </a>

            <nav class="hidden md:flex items-center gap-4">
                <a href="{{ route('home') }}" class="px-3 py-2 rounded-md text-sm subtle hover:text-white hover:bg-white/3">Home</a>
                <a href="{{ route('students.index') }}" class="px-3 py-2 rounded-md text-sm subtle hover:text-white hover:bg-white/3">Students</a>
                <a href="{{ route('students.create') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-br from-yellow-400 to-yellow-300 text-black rounded-md shadow-neon neon text-sm">Add Student</a>
            </nav>

            <div class="hidden md:flex items-center gap-3">
                <div class="w-2 h-2 bg-white/10 rounded-full"></div>
                <div class="w-2 h-2 bg-white/6 rounded-full"></div>
                <div class="light-dot"></div>
            </div>

            <div class="md:hidden">
                <button id="menuBtn" class="p-2 rounded-md bg-white/4">Menu</button>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 pb-16">
        @yield('content')
    </main>

    <footer class="max-w-6xl mx-auto px-6 py-6 text-sm subtle">
        <div class="flex items-center justify-between">
            <div>© {{ date('Y') }} Student Portal</div>
            <div class="text-gray-500">Dark theme with warm accents</div>
        </div>
    </footer>

    <script>
        document.getElementById('menuBtn')?.addEventListener('click', function(){
            alert('Use the header links on larger screens or visit the pages directly.');
        });
    </script>
</body>
</html>
