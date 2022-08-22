function validateForm() {
    var fname = document.getElementById("buyername").value;
    var email = document.getElementById("buyeremail").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    
    
    var pass = document.getElementById("buyerpass").value;
    var add = document.getElementById("buyeraddress").value;
    
    if (fname == "" ) {
     document.getElementById("errname").innerHTML="*Please fill out full name";
      return false;
    }
    if (document.getElementById("buyergender1").checked == false &&  document.getElementById("buyergender2").checked == false)
    {
      document.getElementById("errgender").innerHTML="*Please select gender";
      return false;
    }
    if(!res)
    {
        document.getElementById("erremail").innerHTML="*Email format is not correct";
        return false; 
    }
    if (add == "" ) {
        document.getElementById("erradd").innerHTML="*Please fill out address";
         return false;
       }
    if ( pass.length < 5) {
        document.getElementById("errpass").innerHTML="*Please enter password";
        return false;
      }
   
  }