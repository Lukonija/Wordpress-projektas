<footer class="index-footer">
    <div class="container-footer">
        <p>
            &copy;
            <script>
                document.write(new Date().getFullYear());
            </script>
            Laikas dirbti, UAB
        </p>
    </div>
</footer>
<script>
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");

    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    });
</script>
<?php wp_footer(); ?>
</body>

</html>