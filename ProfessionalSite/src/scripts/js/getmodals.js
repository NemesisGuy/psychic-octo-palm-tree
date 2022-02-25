//<!----getmodals.js------>

//	 Register user modal call
$(document).ready(function(){
		var url = "modalbox.php";                           	//modal from this file
		jQuery('#registerUserModalLink').click(function(e) {    //Trigger on click this #ID 
		    $('.modal-container').load(url,function(result){ 	//load modal in to this div 
				$('#registerUserModal').modal({show:true});     //gets this modal by #ID
			});
		});
    });
    $(document).on("hidden.bs.modal", "#registerUserModal", function () {
$('#registerUserModal').remove();                                     // Remove from DOM.
});

//	Login user modal call
$(document).ready(function(){
	var url = "modalbox.php";                           //modal from this file
	jQuery('#loginModalLink').click(function(e) { //on click this id 
		$('.modal-container').load(url,function(result){ //load modal in to this div 
			$('#loginModal').modal({show:true});           //gets this modal
		});
	});
});
$(document).on("hidden.bs.modal", "#loginModal", function () {
$('#loginModal').remove();                                     // Remove from DOM.
});

//	Update user modal call
$(document).ready(function(){
	var url = "modalbox.php";                           //modal from this file
	jQuery('#updateUserModalLink').click(function(e) { //on click this id 
		$('.modal-container').load(url,function(result){ //load modal in to this div 
			$('#updateUserModal').modal({show:true});           //gets this modal
		});
	});
});
$(document).on("hidden.bs.modal", "#updateUserModal", function () {
$('#updateUserModal').remove();                                     // Remove from DOM.
});
