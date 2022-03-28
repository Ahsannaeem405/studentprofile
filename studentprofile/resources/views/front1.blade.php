<!DOCTYPE html><html>

<head>
    <title>Login to MYUTM - CAS &#8211; Central Authentication Service</title>
    <meta charset="UTF-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

	<!--<link rel="stylesheet" href="https://studentprofie.brownetech.com/user_asset/app-assets/css/cas.css"/>-->
	<link rel="stylesheet" href="{{asset('user_asset/app-assets/css/cas.css')}}"/>	
	

<meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/></head>

<body class="login">
<main role="main" class="container">
    <div id="content" class="row justify-content-center align-self-center">
        <div class="col col-lg-6 col-md-8 col-sm-10 my-5">
            <div class="card">
                <div class="card-header text-center">
                    <!--<img src="https://studentprofie.brownetech.com/user_asset/app-assets/images/logo/logo1.png"></div>-->
                             <img src="{{asset('user_asset/app-assets/images/logo/logo1.png')}}"></div>
                <div class="card-body">
                    <form method="post" action="{{url('getrecord')}}" id="form1">
                        <!--<h2 style="text-align: center;">Login to MYUTM</h2>-->
                        <section class="form-group">
						@csrf
{{-- <div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="M6j7t6qWDEhWgakCwlympnPV2fxWcT7TSfGj79I3Iu+8uCIICcrUb16iLfxaCQfhArz1BobIwQLeBvRbGk9C8FWq2tshXkIuyxFuDqNxf6KWjG205eCw9oqqLS9RDKu7j+x9h6bK92TKRjtVDF3PSzxhgIizKuHQ+esWYunN9pPg4PmtQTxdRPGbwQ5Wit37/K/t/3ukvv7gmwWYSbDZGIqF7Tfk/eX63tBu19APU0+/TN5SofaRfylGiF7NJ/25B5Gx51u591LTfCERd5pRpEm6QyyV7Tj+dwilGki05q4=" />
</div> --}}

{{-- <div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="460BFA5D" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="IM2AUZdlOYEm0JjTUT9iJ7FHNStekmk8tF3MnjfqbvyvFu9fpOWbL2zDc0ppKkFciqulZXaP2yHPDZFZGuOrdb4uA82JBtmQAQHqj4hGq8nKnxBc2nbzfoYOvE7uGBUBmHZiwREMtnercsbvXG7LGCCkef25vps9Rh/5FjvihGzh9SCwRwzgbDvDmghi0fKq5ZoBOi+bnF+ZlvWTL+y/4A==" />
</div> --}}
        <div><p></p></div>
        
        <div><p></p></div>
        <div class="container">
            <div class="row " style="margin-left:auto">
                <label>Input type:</label>
                <div class="form-check" style="margin-left:30px">
                    <input id="RadioButtonBarcode" type="radio" name="RadioButtonInputTypeGroup" value="1" checked="checked" /><label for="RadioButtonBarcode"> Barcode</label>
                </div>
                <div class="form-check" style="margin-left:30px">
                    <input id="RadioButtonGraduateId" type="radio" name="RadioButtonInputTypeGroup" value="2" /><label for="RadioButtonGraduateId"> Graduate Id</label>
                </div>
            </div>
            <div class="row"></div>
            <div class="row">
                <div class="col-12">
                            <label for="username"><span class="accesskey">Enter the number:</label>

                            <div class="input-group-append">
                                <input class="form-control required"
									   name="TextBoxValue"
									   type="text"
									   id="TextBoxValue" 
									   class="form-control"
									   placeholder="Enter Number"
                                       />
                        </section>
						<div class="input-group-append" id="button-addon4">
                            <input class="btn btn-block btn-primary"
                               name="ButtonVerify"
							   id="ButtonVerify"
                               type="submit"
                               value="Verify"
                        />
                        </div>
                        </div>
 @if (Session::get('status'))

                    <div class="">
  <h3 style=" color:black"> {{ Session::get('status') }}</h3>


                    </div>
                @endif
                        </form>

                    <div>
                        </div>

                    
<br>
                   
            <p style="text-align:center;">UTM Copyright 2002-2022</p>
            
       
                </div>
            </div>
        </div>
</div>
</main>




</body>

</html>
