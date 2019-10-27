<form name="Form" id="Form" method="post" action="Assign2.php" onsubmit="return validate()" >
<div>
        <input name="Name" type="text" id="Name" placeholder="Name" value=""  />
</div>
<div>
     <input name="Email" type="email" id="Email" placeholder="Email" value=""  />
 </div>
 <div>
          <input name="Date" type="date" id="Date" placeholder="Date"  value="" />
  </div>
<div>
         <input name="MobileNumber" type="text" id="MobileNumber" placeholder="MobileNumber"  value="" />
 </div>
 <button type="submit">Submit</button>
</form>

<script>
    function validate()
    {
            //validate name
            var x = document.forms["Form"]["Name"].value;
            if(x==""){
                alert("Name Must Fill In");
                return false;
            }
            //validate date
            var today = new Date();
            var inputdate = new Date(document.Form.Date.value);
            if (inputdate.value == ""){
                alert("Please Enter The Date");
                return false;
            }
            else if (inputdate < today) {
                alert("Please Enter The Current Date")
                return false;
            }
             else {
                return true;
            }
            //Validate PhoneNumber
            var phoneno = document.Form.MobileNumber.value;
            if(phoneno.length == 10 || phoneno.length == 11 ){
                    return true;
                }
                else {
                    alert("Please Enter Valid Phone Number");
                    return false;
                }

    }
</script>
