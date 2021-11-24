<script src="assets/js/jquery3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/smooth-scrollbar.js"></script>
<script src="assets/js/custom.js"></script>

<script>
  Scrollbar.initAll();
  $(document).ready(function() {
    $("#DropdownToggle").click(function() {
      $(".toggle-items").toggleClass("open");
    });
  });
</script>
</body>

</html>