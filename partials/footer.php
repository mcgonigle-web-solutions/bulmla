<footer class="footer m-t-lg">
    <div class="content has-text-centered">
        <p>
        &copy; <?php echo date('Y'); ?> <?php echo '' . $config->get( 'sitename' ); ?>
        </p>
        <p><i class="fas fa-code"></i> with <i class="far fa-heart"></i> by <a href="http://mcgonigle.dev">Patrick McGonigle</a>.</p>
        <p>
        <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
        </p>
    </div>
</footer>

<!-- Bulmla Scripts -->
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bulmla.js"></script>

</body>
</html>