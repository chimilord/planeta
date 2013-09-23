<?php if ($this->ion_auth->logged_in()) { ?>
</div>
<?php } ?>

</div> <!-- /container -->

<div class="pre-footer">

</div>

<hr>

<footer>
    <p>&copy; Editorial Planeta | MaRC v.z(ero) | 2013</p>
</footer>

<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>resources/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="<?php echo base_url(); ?>resources/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>resources/js/plugins.js"></script>
<script src="<?php echo base_url(); ?>resources/js/main.js"></script>
<script>
    $(document).ready(function() {
        $.marc.init();
    });
</script>


</body>
</html>
