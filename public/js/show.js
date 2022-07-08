$(document).ready(function(){
    $("#myBtn").click(function(){
        var lastTab = bootstrap.Tab.getOrCreateInstance($("#myTab a:first")[0]);
        console.log(lastTab);
    });
   });
   ///////////////////////// js code for disable input 
        // Wait for the page to finish loading
        document.addEventListener('DOMContentLoaded', function () {
   // Attach `change` event listener to checkbox
   document.getElementById('disable-checkbox').onchange = toggleBilling;
   }, false);
   
   function toggleBilling() {
   // Select the billing text fields
   var billingItems = document.querySelectorAll('#disable input[type="text"]');
   
   // Toggle the billing text fields
   for (var i = 0; i < billingItems.length; i++) {
    billingItems[i].disabled = !billingItems[i].disabled;
   }
   }
   ///////////////////////////////jq code for select
   $(document).ready(function(){
   
   $("#box").hide();
   $("#se").change(function(){
   var n=$(this).children("option:selected").val();
   if(n!='Choose semester')
   {$("#box").show();}
   else
   $("#box").hide();
   })
   
   
   $("#box1").hide();
   $("#se").change(function(){
   var m=$(this).children("option:selected").val();
   if(m!='Choose semester')
   {$("#box1").show();}
   else
   $("#box1").hide();
   })
   
   
//    $("#activity1").change(function(){
//    var z=$(this).children("option:selected").val();
//    if(z!='choose activity')
//    {$("#box2").show();}
//    else
//    $("#box2").hide();
//    })
   
   
   });