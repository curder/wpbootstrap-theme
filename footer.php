<?php if (!is_front_page()): ?>
    <div class="col-sm-3 blog-sidebar">
        <?php if (is_active_sidebar('sidebar')): ?>
            <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
    </div><!-- /.blog-sidebar -->
<?php endif; ?>
</div><!-- /.row -->
<?php if (!is_front_page()): ?>
</div><!-- /.container -->
<?php endif; ?>
<footer class="blog-footer">
    <p>&copy;<?php echo date('Y'); ?> - <?php bloginfo('name'); ?><p>
        <a href="#">Back to top</a>
    </p>
</footer>

<?php wp_footer(); ?>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/bootstrap.js"></script>
</body>
</html>
