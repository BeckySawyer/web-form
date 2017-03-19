<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">
	
	// materialize js
$(document).ready(function() {
    $('select').material_select();
});

// blocks out future dates in calendar
var present = new Date();
present.setFullYear( present.getFullYear() - 150 );
$('.datepicker').pickadate({
    selectMonths: true,
    selectYears: 150,
    min: present,
    max: new Date(),
    format: 'yyyy-mm-dd'
});

 $(document).ready(function() {
    $('input#input_text, textarea#textarea1').characterCounter();
  });

</script>
</body>
</html>