<!DOCTYPE html>
<html lang="en">

@vite(['resources/css/style.scss'])

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-red-950 size-3 dark:bg-zinc-900 flex justify-center h-screen w-screen">

    <main class="scanlines">
        <div class="screen">
            <canvas id="canvas" class="picture"></canvas>
            <div class="overlay flex">
                <div class="text">
                    <span>
                        <pre>
 /$$   /$$            /$$$$$$   /$$$$$$
| $$  /$$/           /$$__  $$ /$$__  $$
| $$ /$$/   /$$$$$$ | $$  \ $$| $$  \__/
| $$$$$/   /$$__  $$| $$  | $$|  $$$$$$
| $$  $$  | $$$$$$$$| $$  | $$ \____  $$
| $$\  $$ | $$_____/| $$  | $$ /$$  \ $$
| $$ \  $$|  $$$$$$$|  $$$$$$/|  $$$$$$/
|__/  \__/ \_______/ \______/  \______/

Copyleft (&#8579;) under GNU.GPL 1994 by Vincent Keo


The GNU General Public License is a free, copyleft license for software
and other kinds of works.
More info on the license : www.gnu.org/licenses/gpl-3.0.en.html

Press ENTER to access website or type --help for additional commands.
                        </pre>
                    </span>
                </div>
                <span class="terminal-input">
                    <span class="prompt">$</span>
                    <span class="user-input"></span>
                    <span class="cursor">█</span>
                </span>
            </div>
        </div>
    </main>
</body>

</html>

<script>
    var main = document.querySelector('main'),
        canvas = document.getElementById('canvas'),
        ctx = canvas.getContext('2d'),
        text = document.querySelector('.text'),
        terminalInput = document.querySelector('.terminal-input'),
        ww = window.innerWidth,
        toggle = true,
        frame;

    // Set canvas size
    canvas.width = ww / 3;
    canvas.height = (ww * 0.5625) / 3;

    // Glitch
    for (i = 0; i < 4; i++) {
        var span = text.firstElementChild.cloneNode(true);
        text.appendChild(span);
    }

    window.addEventListener('DOMContentLoaded', function(e) {
        setTimeout(function() {
            main.classList.add('on');
            main.classList.remove('off');
            animate();
        }, 1000);
    }); 
</script>
