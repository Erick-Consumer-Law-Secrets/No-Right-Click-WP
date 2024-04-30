 /*
    This script protects multimedia assets of WordPress website */
	Written by: Erick Villeta of I Build Awesome Website  */ 
 */
<script type="text/javascript">

jQuery(document).ready(function () {

//Disable cut copy paste

jQuery('body').bind('cut copy paste', function (e) {

e.preventDefault();

});

//Disable mouse right click

jQuery("body").on("contextmenu",function(e){

return false;

});

});

</script>
