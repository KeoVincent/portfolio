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
            <div class="overlay">
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

The GNU General Public License is a free, copyleft license for software and other kinds of works.

                        </pre>
                    </span>
                </div>
                {{-- <div class="menu">
                    <header>
                        Main Menu
                    </header>
                    <ul>
                        <li class="active"><a href="#" title="">Picture</a></li>
                        <li><a href="#" title="">Sound</a></li>
                        <li><a href="#" title="">About</a></li>
                        <li><a href="#" title="">Contact</a></li>
                    </ul>
                    <footer>
                        <div class="key">Exit: <span>1</span></div>
                        <div class="key">Select: <span>2</span></div>
                    </footer>
                </div> --}}
            </div>
        </div>
    </main>
</body>
<form action="post" class="id-form absolute top-1/4 flex flex-col items-center">
    @csrf
    <input type="text" name="id-input" id="id-input"
        class="m-1 max-w-40 p-1 rounded-md text-black">
    <input type="password" name="pw-input" id="pw-input" class="m-1 max-w-40 p-1 rounded-md">
    <button type="submit"
        class="bg-zinc-500 text-zinc-50 m-1 max-w-32 p-1 rounded-md">SIGN IN</button>
</form>

</html>

<script>
    var main = document.querySelector('main'),
        canvas = document.getElementById('canvas'),
        ctx = canvas.getContext('2d'),
        text = document.querySelector('.text'),
        ww = window.innerWidth,
        // menu = document.querySelector('.menu'),
        // ul = menu.querySelector('ul'),
        idx = 0,
        // count = ul.childElementCount - 1,
        toggle = true,
        frame;

    // Set canvas size
    canvas.width = ww / 3;
    canvas.height = (ww * 0.5625) / 3;

    // Generate CRT noise
    // function snow(ctx) {

    //     var w = ctx.canvas.width,
    //         h = ctx.canvas.height,
    //         d = ctx.createImageData(w, h),
    //         b = new Uint32Array(d.data.buffer),
    //         len = b.length;

    //     for (var i = 0; i < len; i++) {
    //         b[i] = ((255 * Math.random()) | 0) << 24;
    //     }

    //     ctx.putImageData(d, 0, 0);
    // }

    // function animate() {
    //     snow(ctx);
    //     frame = requestAnimationFrame(animate);
    // };

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

    // window.addEventListener('keydown', function(e) {
    //     var key = e.keyCode;
    //     var prev = idx;
    //     if (key == 38 || key == 40) {
    //         e.preventDefault();

    //         switch (key) {
    //             case 38:
    //                 if (idx > 0) {
    //                     idx--;
    //                 }
    //                 break;
    //             case 40:
    //                 if (idx < count) {
    //                     idx++;
    //                 }
    //                 break;
    //         }

    //         ul.children[prev].classList.remove('active');
    //         ul.children[idx].classList.add('active');
    //     }
    // }, false);
</script>
