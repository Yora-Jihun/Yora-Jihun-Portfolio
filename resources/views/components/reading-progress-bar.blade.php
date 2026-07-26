<div wire:ignore class="fixed top-16 left-0 right-0 z-[999] h-1 bg-transparent">
    <div id="reading-progress" class="h-full bg-[#16A34A] transition-all duration-150 ease-out" style="width: 0%"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const progressBar = document.getElementById('reading-progress');
    if (!progressBar) return;

    function updateProgress() {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = docHeight > 0 ? Math.min(100, Math.max(0, (scrollTop / docHeight) * 100)) : 0;
        progressBar.style.width = progress + '%';
    }

    window.addEventListener('scroll', updateProgress, { passive: true });
    updateProgress();
});
</script>