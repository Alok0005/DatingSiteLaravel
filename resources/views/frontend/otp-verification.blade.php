<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       body{
  background:#eee;
}

.bgWhite{
  background:white;
  box-shadow:0px 3px 6px 0px #cacaca;
}

.title{
  font-weight:600;
  margin-top:20px;
  font-size:24px
}

.customBtn{
  border-radius:0px;
  padding:10px;
}

form input{
  display:inline-block;
  width:50px;
  height:50px;
  text-align:center;
}
    </style>
</head>
<body>
<div class="container">
  <div class="row justify-content-md-center">
      <div class="col-md-4 text-center">
        <div class="row">
          <div class="col-sm-12 mt-5 bgWhite">
            <div class="title">
              Verify OTP
            </div>
            
            <form action="{{route('verify_otp')}}" method="get" onSubmit='addOtp()' class="mt-5" id="form">
            <input name= 'email' class="email" type="hidden" value= "{{$email}}">
            <input name= 'otp' class="email" type="hidden" value= "" id="otp">
              <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=1 >
              <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=1 >
              <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=1 >
              <input class="otp" type="text" oninput='digitValidate(this)'onkeyup='tabChange(4)' maxlength=1 >
              <hr class="mt-4">
            <input type='submit' value="Verify" class='btn btn-primary btn-block mt-4 mb-4 customBtn'>
            </form>
          </div>
        </div>
      </div>
  </div>
</div>
</body>
<script>
    document.getElementById("form").addEventListener("onSubmit", function(event){
  event.preventDefault()
});
    let otp = 0;
    let digitValidate = function(ele){
    console.log(ele.value);
    console.log(parseInt(ele.value))
    otp = (otp*10)+parseInt(ele.value);
    console.log(otp)
    ele.value = ele.value.replace(/[^0-9]/g,'');
  }

  function addOtp(){
      let formData = document.getElementById('form');
      let otp1 = document.getElementById('otp');
      otp1.value = otp;
  }
  
  let tabChange = function(val){
      let ele = document.querySelectorAll('input');
      if(ele[val-1].value != ''){
        ele[val].focus()
      }else if(ele[val-1].value == ''){
        ele[val-2].focus()
      }   
   }
</script>
</html>