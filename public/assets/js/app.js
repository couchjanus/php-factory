// 
(function() {

    let amount = document.querySelector("#amount");
    let price = document.querySelector("#price").value;
    let salary = document.querySelector("#salary");
    
    amount.addEventListener('change', function() {
        salary.value =  0.15*price*this.value; 

        if (+(salary.value) > 1500) {
            document.getElementById('error-name').innerHTML = " salary shouldn't be more than 1500$ ";
            document.getElementById("save").disabled = true;  
        } else {
            document.getElementById('error-name').innerHTML = "";
            document.getElementById("save").disabled = false;
            
        }
    });
    
})();