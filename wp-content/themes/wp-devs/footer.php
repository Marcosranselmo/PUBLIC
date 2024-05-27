<div class="container-rodape">
    <div class="container">
    <h2>Endereço</h2>
        <p><?php echo esc_html(get_theme_mod('set_endereco', __('Configure o endereço da empresa', 
        'wp-devs'))); ?></p>
    </div>
</div>
<footer class="site-footer">
    <div class="container">
        <div class="copyright">
            <p><?php echo esc_html(get_theme_mod('set_copyright', __('Copyright X - All 
                    Rights Reserved', 'wp-devs'))); ?></p>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>