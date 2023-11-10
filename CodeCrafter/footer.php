<footer class="mt-5 mb-5">
    <div class="container">
		<!-- ニックネームを取得 -->
        <div class="text-center">&copy;2019-<span id="this_year"></span>&nbsp;<?php the_author_meta('nickname'); ?>.</div>
        <script>
            // 今年の年数を取得
            document.getElementById("this_year").innerText = new Date().getFullYear();
        </script>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>