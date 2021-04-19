</div>    
</div>

<?php include("footer.php");?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances1 = M.Sidenav.init(elems);
        var elems = document.querySelectorAll('select');
        var instances2 = M.FormSelect.init(elems);
    });
</script>