<section>
    <div class="modal fade" id="prepared" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class = "panel panel-primary">
                    <div class = "panel-heading">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add File</h4>
                        <form action="add_file_query.php" method="POST" enctype="multipart/form-data">
                            <div class="modal-body"></div>
                            </head>
                                <body>
                                    <div class="ui-widget">
                                        <div ng-app="myApp" ng-controller="myCtrl">
                                        Prepared by: <input ng-model="firstname">
                                        Certified Correct: <input ng-model="Certified">

                                    </div>
                                    <div class="modal-footer">
                                        <button onclick="printContent('print')" id = "hit" style="float: right;">Print Report</button>  
                                    </div>
                                </body>
                            </head>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <script type="text/javascript">

$(function() {
$( "#auto" ).autocomplete({
source: "search.php",
minLength: 1  
});
});

</script>
<!-- <script>
function AddNames(text) {

if (document.myForm.insertText.value == "") {
document.getElementById("insertText").style.border = "1px solid red";
return false;
}
else {
var option = document.createElement("OPTION");
option.text = text.value;
option.value = text.value;
document.getElementById("dropDownList").options.add(option);
document.myForm.insertText.value = "";
document.getElementById("insertText").style.border = "1px solid green";
}
}
</script> -->
