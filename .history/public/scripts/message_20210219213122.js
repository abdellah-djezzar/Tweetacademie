$(document).ready(function(){
    // when any character press on the input field keyup function call
    $("#searchword").keyup(function(){
        $.ajax({
        type: "POST", // here used post method
        url: "index.php?action=searchMember",//php file where retrive the post value and fetch all the matched item from database
        data:'searchterm='+$(this).val(),//send data or search term to readname file to process
        beforeSend: function(){
            // show loader icon
            $("#searchword").css("background","#FFF url(LoaderIcon.gif) no-repeat 175px");
        },
        success: function(data){
            // get the output from database on success
            $("#id_suggesstions").show();//show the suggestions
            $("#id_suggesstions").html(data);//append data in the box for selection
            $("#searchword").css("background","#FFF");
        }
        });
    });
});
// call this function after select one of these suggestion for hide the suggestion box and select the value
function selectname(selected_value) {
	$("#searchword").val(selected_value);
	$("#id_suggesstions").hide();
}
</script>