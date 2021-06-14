<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/jquery.easing.1.3.js"></script>

<script>
    // ScrollChanged
    window.addEventListener("scroll", function() {
        var nav = document.querySelector("nav");
        nav.classList.toggle("sticky", window.scrollY > 0);
    });

    // Toggle
    const menuToggle = document.querySelector('.menu-toggle input');
    const nav = document.querySelector('nav ul');

    menuToggle.addEventListener('click', function() {
        nav.classList.toggle('slide');
    });
</script>