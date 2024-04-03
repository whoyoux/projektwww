<section class="flex flex-col gap-10 scroll-margin border-t pb-10" id="anim">
    <div class="max-w-screen-md mx-auto w-[90%]">
        <h2 class="text-4xl font-semibold mt-10">Interaktywna animacja</h2>
        <!-- <h5 class="text-xs text-gray-500">Źródło: www.redbull.com</h5> -->
    </div>
        
    <canvas id="cnv" class="w-[90%] max-w-screen-md aspect-square bg-white rounded-lg mx-auto border"></canvas>
    <div class="w-[90%] max-w-screen-md mx-auto flex flex-col gap-2 items-center justify-center">
        <div class="w-full flex gap-4">
            <button id="start_btn" class="flex-1 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center cursor-pointer disabled:opacity-50 disabled:cursor-not-allowed">start</button>
            <button id="pause_btn" class="flex-1 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center cursor-pointer disabled:opacity-50 disabled:cursor-not-allowed">pauza</button>
        </div>
        <div class="w-full flex gap-4">
            <input type="number" id="fps" min="1" max="144" step="1" class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" placeholder="60" />
            <button id="set_fps" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center cursor-pointer disabled:opacity-50 disabled:cursor-not-allowed">Ustaw FPS</button>
        </div>
    </div>
</section>



<script>
    const canvas = document.querySelector("#cnv");
    const ctx = canvas.getContext("2d");

    const startBtn = document.querySelector("#start_btn");
    const pauseBtn = document.querySelector("#pause_btn");

    const setFpsBtn = document.querySelector("#set_fps");

    let requestId;
    let fpsValue = 60;
    let isPaused = true;

    const setFps = () => {
        if(!isPaused) {
            alert("Aby zmienić wartość FPS, zatrzymaj animację.");
            return;
        }

        const newValue = document.querySelector("#fps").value;

        if(!newValue || newValue <= 0 || newValue > 144) {
            alert("Wartość FPS musi być liczbą z zakresu 1-144.");
            return;
        }

        fpsValue = newValue;
        document.querySelector("#fps").value = fpsValue;
    }

    setFpsBtn.addEventListener("click", setFps);

    const startAnim = () => {
        isPaused = false;
        anim(() => draw() , fpsValue);
        startBtn.disabled = true;
    }

    const pauseAnim = () => {
        isPaused = true;
        cancelAnimationFrame(requestId);
        startBtn.disabled = false;
    }

    startBtn.addEventListener("click", startAnim);
    pauseBtn.addEventListener("click", pauseAnim);

    const anim = (cb, fps = 60) => {
        let now;
        let then = Date.now();
        let delta = 0;
        let interval = 1000 / fps;

        const update = () => {
            requestId = requestAnimationFrame(update);

            now = Date.now();
            delta = now - then;

            if (delta > interval) {
                cb();
                then = now - (delta % interval);
            }

        }

        update();
    }

    const recPos = {
        x: 0,
        y: 0,
        dirX: 1,
        dirY: 1,
        speed: 2
    };

    const draw = () => {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        if(recPos.x < 0 || recPos.x > canvas.width - 24) {
            recPos.dirX = -recPos.dirX;
        }

        if(recPos.y < 0 || recPos.y > canvas.height - 24) {
            recPos.dirY = -recPos.dirY;
        }

        recPos.x += recPos.dirX * recPos.speed;
        recPos.y += recPos.dirY * recPos.speed;


        ctx.beginPath();
        ctx.rect(recPos.x, recPos.y, 24, 24);
        ctx.fillStyle="red";
        ctx.fill();
    }

</script>