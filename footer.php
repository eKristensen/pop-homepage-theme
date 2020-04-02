<?php
/**
 * Changes to fit P. O. Pedersen Kollegiet
 *
 * @package Sydney Child theme POP
 */
?>
                        </div>
                </div>
        </div><!-- #content -->

        <?php do_action('sydney_before_footer'); ?>

        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <?php get_sidebar('footer'); ?>
        <?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>

        <footer id="colophon" class="site-footer" role="contentinfo">
                <div class="site-info container">
			&copy; <?php echo date("Y"); ?>, Kollegianerforeningen, P. O. Pedersen Kollegiet, CVR: 38563548<br>
			P. O. Pedersen Kollegiet (PKS drift), CVR: 10551528
                </div><!-- .site-info -->
        </footer><!-- #colophon -->

        <?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

<script src="//instant.page/3.0.0" type="module" defer integrity="sha384-OeDn4XE77tdHo8pGtE1apMPmAipjoxUQ++eeJa6EtJCfHlvijigWiJpD7VDPWXV1"></script>

</body>
</html>


