const wrappers = document.querySelectorAll('.carousel-card-wrapper');
const orbitContainer = document.querySelector('.orbit-container');
const orbitDuration = window.innerWidth <= 480 ? 15000 : 22000;

function getTranslateZ() {
    const width = window.innerWidth;
    if (width <= 480) return 220;
    if (width <= 768) return 280;
    if (width <= 1024) return 260;
    return 360;
}

function updateCarousel(timestamp) {
    if (!wrappers.length || !orbitContainer) return;

    if (!updateCarousel.startTime) updateCarousel.startTime = timestamp;
    const elapsed = timestamp - updateCarousel.startTime;
    const currentAngle = (elapsed / orbitDuration) * 360;
    const translateZ = getTranslateZ();
    const rotateX = window.innerWidth <= 480 ? 10 : 14;

    wrappers.forEach((wrapper, index) => {
        const totalCards = wrappers.length;
        const cardAngle = index * (360 / totalCards);
        const angle = cardAngle + currentAngle;

        wrapper.style.transform = `rotateY(${angle}deg) translateZ(${translateZ}px)`;

        const inner = wrapper.querySelector('.carousel-card-inner');
        if (inner) {
            const mod = ((angle % 360) + 360) % 360;
            const absDiff = Math.min(mod, 360 - mod);
            const scale = 1 - Math.min(absDiff / 120, 1) * 0.06;
            const opacityT = Math.max(0, Math.min(absDiff - 60, 120) / 120);
            const opacity = 1 - opacityT * 0.4;
            const blurT = Math.max(0, Math.min(absDiff - 60, 120) / 120);
            const blur = blurT * 3;
            const dropT = Math.max(0, Math.min(absDiff - 60, 120) / 120);
            const drop = dropT * 25;

            inner.style.transform = `perspective(900px) rotateX(${rotateX}deg) scale(${scale}) translateY(${drop}px)`;
            inner.style.opacity = opacity;
            inner.style.filter = `blur(${blur}px)`;
        }
    });

    requestAnimationFrame(updateCarousel);
}

if (wrappers.length > 0) {
    requestAnimationFrame(updateCarousel);
}
