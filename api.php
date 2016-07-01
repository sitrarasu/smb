Content-Type: application/json

Signature: ZRBWsdZK%2FQVQdayJv4eWT%2BLb7PqdhTJhFMlQwaMKth0%3D

Timestamp: 1451388009

12.886677599999999_77.5951872

address:


{"pincode":"635654","addressOne":"sipanionline pvt ltd","addressTwo":"1st flor","city":"bangalore","tagName":"myaddr","state":"karnataka","latitude":"12.886677599999999","longitude":"77.5951872"}


Ok here is what you are doing wrong.

when you request the page using ajax it does not return you that page.

when you use $this->load->view('pagename',$datapassed); it loads the view and thats why you see nothing.

What you have to do is use

$data=$this->load->view('pagename',$datapassed, TRUE);
what it will do is it will return that page and save it in $data after that you can print it using

$this->set_output($data); 
and receive this in ajax result and load it in a div.

and if you want to refresh the whole page you can use

$(body).html(result);
You have to understand that you need to send the html page by supplying that third parameter in load view.


Raghu : 8904778134

What are all the API related for center details?

Click on below the page and send us related api for 4 types of menus.

 http://sipanionline.com/SMB/details.html 
 For the menus:
 Details 
 services
 stylists
 Reviews
 

{
  "token": "40a0f13c95ac0a229bcd06fe28",
  "user": {
    "firstName": "System",
    "lastName": "Techjini",
    "email": "vijayy@techjini.com",
    "phone": "1234567890",
    "gender": 1
  }
}



//Invalid OTP 

{
  "code": 400,
  "message": "Invalid Otp"
}

phone
userType
{
  "phone": 9944610025,
  "userType": 1
}

{
	"token": asdfsf234asdf
	"users":{ "firstName": arasu, "lastName": arasu}
}

{
	"code":400,"message":"Validation Failed",
	"errors":{"field_errors":{"email":["Email sowmiya.hr@sipanionline.com already exists"],"phone":["Contact Number 9897701604 already exists"]}}
}


	//echo  126*5; exit;
	//echo gmdate("H:i", (630 * 60)); exit;
	
	function convertToHoursMins($time, $format = '%02d:%02d'){
		if ($time < 1) {
			return;
		}
		$hours = floor($time / 60);
		$minutes = ($time % 60);
		return sprintf($format, $hours, $minutes);
	}

echo convertToHoursMins(630, '%02d:%02d');  exit;

Facebook login
Google Login
Twiter Login 
Deploy Gitup
Deploy xdebug
Deploy Eclipes
Deploy Netbeans

Anguler JS
Node JS
Laravel
Mongo DB


Once if the customer has done the work from salon. 

The stylist or merchant should update the status as completed with customer digital signature 


If registration has done without otp update and if I login using which i was register with username and password, That time should as again otp update.