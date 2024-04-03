<footer class="py-4 border-t mt-10">
    <section class="w-[90%] mx-auto flex flex-col gap-4 items-center justify-center">
        <h2 class="font-medium">&copy; World Wander 2024</h2>
        <h2 id="time" class="text-sm text-gray-500">Aktualny czas: </h2>
    </section>
</footer>

<script>
    const time = document.querySelector('#time');

    const options = {
        weekday: "long",
        year: "numeric",
        month: "long",
        day: "numeric",
        hour: "2-digit",
        minute: "2-digit"
    }

    const setTime = () => {
        const date = new Date();
        time.innerHTML = `Aktualny czas: ${date.toLocaleTimeString("pl-PL", options)}`;
    }

    setTime();

    setInterval(() => {
        setTime();
    }, 1000);
</script>