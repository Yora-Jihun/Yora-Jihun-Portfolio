<div class="contents">
    <div wire:ignore class="fixed top-16 left-0 right-0 z-[999] h-1 bg-transparent">
        <div id="reading-progress" class="h-full bg-[#16A34A] transition-all duration-150 ease-out" style="width: 0%"></div>
    </div>
    <div id="reading-progress-text" class="fixed top-16 right-6 z-[999] text-xs font-medium text-[#16A34A] opacity-0 transition-opacity duration-300"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const progressBar = document.getElementById('reading-progress');
    const progressText = document.getElementById('reading-progress-text');
    if (!progressBar || !progressText) return;

    function updateProgress() {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = docHeight > 0 ? Math.min(100, Math.max(0, (scrollTop / docHeight) * 100)) : 0;
        progressBar.style.width = progress + '%';
        progressText.textContent = Math.round(progress) + '%';
        if (progress > 0 && progress < 100) {
            progressText.style.opacity = '1';
        } else {
            progressText.style.opacity = '0';
        }
    }

    window.addEventListener('scroll', updateProgress, { passive: true });
    updateProgress();
});

(function() {
    const tocLinks = document.querySelectorAll('.toc-link');
    const sections = [];
    tocLinks.forEach(function(link) {
        const href = link.getAttribute('href');
        if (href && href.startsWith('#')) {
            const section = document.getElementById(href.substring(1));
            if (section) sections.push({ link: link, section: section });
        }
    });

    function updateActiveToc() {
        let currentId = null;
        sections.forEach(function(item) {
            const rect = item.section.getBoundingClientRect();
            if (rect.top <= 120) {
                currentId = item.link.getAttribute('href');
            }
        });
        tocLinks.forEach(function(link) {
            const href = link.getAttribute('href');
            if (href === currentId) {
                link.classList.add('text-black');
                link.classList.remove('text-[#8E8E93]');
                link.style.borderColor = '#16A34A';
            } else {
                link.classList.remove('text-black');
                link.classList.add('text-[#8E8E93]');
                link.style.borderColor = 'transparent';
            }
        });
    }

    window.addEventListener('scroll', updateActiveToc, { passive: true });
    updateActiveToc();
})();
</script>
