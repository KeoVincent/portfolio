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
                        <div class="flex ">
                            <div class="prompt">$</div>
                            <div class="user-input"></div>
                            <div class="cursor">█</div>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

<script>
    var main = document.querySelector('main'),
        canvas = document.getElementById('canvas'),
        text = document.querySelector('.text'),
        terminalInput = document.querySelector('.terminal-input'),
        userInput = document.querySelector('.user-input'),
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

    document.addEventListener('keydown', function(e) {
        userInput.innerText += e.key;
        if (!e.repeat) {
            console.log(`Key "${e.key}" pressed [event: keydown]`);
        } else {
            console.log(`Key "${e.key}" repeating [event: keydown]`);
        }
    });

    window.addEventListener('DOMContentLoaded', function(e) {
        setTimeout(function() {
            main.classList.add('on');
            main.classList.remove('off');
            animate();
        }, 1000);
    });
</script>
