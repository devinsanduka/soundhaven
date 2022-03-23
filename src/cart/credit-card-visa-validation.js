function cardnumber(inputtxt)  
{  
  var cardno = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;  
  if(inputtxt.value.match(cardno))  
        {  
      return true;  
        }  
      else  
        {  
        alert("Not a valid Visa credit card number!");  
        
        return false;  
        }  
        
} 


function CheckDate() {
    var selectedDate = new Date (document.getElementById("ExpYear").value,document.getElementById("ExpMon").value);
    var nextmonth = selectedDate.setMonth(selectedDate.getMonth() + 1);
    var last_date_of_selected_date = new Date(nextmonth -1);
    var today = new Date();
    if (today > selectedDate) {
    	
        alert("Expire Date is invalid");
       
    }
    
}



function choose(){
var radios = document.getElementsByName('pay');

for (var i = 0, length = radios.length; i < length; i++) {
    if (radios[i].checked) 
    	if(radios[i].value=="0"){
        // do whatever you want with the checked radio
        				 var result = link("content.php");
    document.getElementById("demo").innerHTML = result;
        			
        				}else{
        								alert("Nooo!");

        				}
        				
	

        // only one radio can be logically checked, don't check the rest
        
    }
}