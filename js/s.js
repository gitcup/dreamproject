var dataSet = [
[Albania],[Algeria],


];
$(document).ready(function() {
	$('#example').DataTable( {
		data: dataSet,
		columns: [
			{ title: "country" }
			
		]
	} );
} );