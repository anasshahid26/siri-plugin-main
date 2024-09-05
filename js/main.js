$( document ).ready(function() {

$( "#submit" ).click(function() {

var List_Price = $("#List_Price").val();
var City = $("#City").val();
var Sq_Ft_Total = $("#Sq_Ft_Total").val();
var Property_Style = $("#Property_Style").val();
var Beds_Total = $("#Beds_Total").val();
var Bathrooms = $("#Bathrooms").val();

if(List_Price!="" && City!="" && Sq_Ft_Total!="" && Property_Style!="" && Beds_Total!="" && Bathrooms!="")
{
console.log(List_Price + City + Sq_Ft_Total + Property_Style + Beds_Total + Bathrooms );
}
else
{

alert("Please fill complete form to proceed");

}


});




});