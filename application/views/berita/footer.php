<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    CKEDITOR.replace( 'isi', {
    	removePlugins: 'image',
    } );
</script>

</body>
</html>