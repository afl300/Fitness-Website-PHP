/*
* Author: Clement 103076376
* Target:
* Purpose:
* Created: 26 April 2020
* Last updated: 6 May 2020
* Credits: https://stackoverflow.com/questions/20618355/the-simplest-possible-javascript-countdown-timer, https://www.w3schools.com/jsref/met_win_settimeout.asp, https://stackoverflow.com/questions/46426301/javascript-validation-for-postcode-and-state-combined, https://www.w3schools.com/howto/howto_js_display_checkbox_text.asp, https://www.w3resource.com/javascript/form/email-validation.php(Any guidance/help/code? credit it here)
*/
"use strict";
var debug=true;
function prefcontact(){
	var contactmethod="unknown";
	
	var contactarray = document.getElementById("PrefContact").getElementsByTagName("input");
	
	for(var i = 0; i<contactarray.length; i++){
		if(contactarray[i].checked) 
			contactmethod = contactarray[i].value; 
	}
	return contactmethod;
}

function phonenocheck(phoneno){
	var phoneReg = /^\d\d\d\d\d\d\d\d\d\d$/;
	var string = ""; 
	if (!phoneReg.test(phoneno)) { 
		string="The phone number you just entered is invalid\n"
	} 
	return string;
}

function formvalidate(){
	var errMsg = "";
	var result = true;
	
	var fname = document.getElementById("FName").value.trim();
	var sname = document.getElementById("SName").value.trim();
	var email = document.getElementById("email").value.trim();
	var phone = document.getElementById("Phone").value.trim();
	var post = document.getElementById("Postcode").value.trim();
	var state = document.getElementById("State").value.trim();
	var streAdd=document.getElementById("StreAddress").value.trim();
	var subadd=document.getElementById("SubAddress").value.trim();
	var nomem = document.getElementById("monthmem").value.trim();
	var noofclasses = document.getElementById("noofclasses").value.trim();

	if (!debug){
	if(fname == ""){
		errMsg += "The First Name cannot be empty.\n";
	} else if(!fname.match(/^[A-Za-z]{1,25}$/)){
		errMsg += "The First name need to be in alphabetical order and must be less than 25 characters.\n";
		result=false;
	}
	
	if(sname == ""){
		errMsg += "The Last Name cannot be empty.\n";
	} else if(!sname.match(/^[A-Za-z]{1,25}$/)){
		errMsg += "The Last name need to be in alphabetical order and must be less than 25 characters.\n";
		result=false;
	}
	
	if(email == ""){
		errMsg += "The email cannot be empty. \n";
		result=false;
	} else if(!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
		result = false;
		errMsg += "The email address you entered is invalid.\n"
	}
	
	if(phone == ""){
		errMsg += "The Phone Number cannot be empty.\n";
		result=false;
	} else {
		var msg = phonenocheck(phone);
		if (msg!=""){
			errMsg += msg;
			result=false;
		}
	}
	//base and used some of the code from  https://stackoverflow.com/questions/46426301/javascript-validation-for-postcode-and-state-combined
	if(post == ""){
		errMsg += "There is no postcode here\n";
	} else if(!post.match(/^[0-9]{4}$/)){ 
	result=false;
	errMsg+="Postcode have only 4 numbers in them.\n";
	} else {
if (post.charAt(0) == 1 && state == "NSW") {
    result = true;
  } else if (post.charAt(0) == 2 && state == "NSW") {
    result = true;
  }else if (post.charAt(0) == 3 && state == "VIC") {
    result = true;
  } else if (post.charAt(0) == 4 && state == "QLD") {
    result = true;
  } else if (post.charAt(0) == 5 && state == "SA") {
    result = true;
  } else if (post.charAt(0) == 6 && state == "WA") {
    result = true;
  }  else if (post.charAt(0) == 7 && state == "TAS") {
    result = true;
  } else if (post.charAt(0) == 8 && state == "VIC") {
    result = true;
  } else if (post.charAt(0) == 9 && state == "QLD") {
    result = true;
  } else if (post.charAt(0) == 0 && state == "NT") {
    result = true;
  }  else if (post.charAt(0) == 0 && state == "ACT") {
    result = true;
  } else {
    errMsg = errMsg + "State and postcode do not match\n";
    result = false;
  }
		
	}
	
	if (!streAdd.match(/^[A-Za-z0-9 ]{1,40}$/)){
		result=false;
		errMsg+= "The street address need to be less than 40 characters.\n";
	}
	
		if (!subadd.match(/^[A-Za-z0-9 ]{1,20}$/)){
		result=false;
		errMsg+= "The Suburb/Town name need to be less than 20 characters.\n";
	}
	
		if (!nomem.match(/^[0-9]$/)){
		result=false;
		errMsg+= "The number of months that is inserted must be numberical.\n";
	}
	
		if (!noofclasses.match(/^[0-9]$/)){
		result=false;
		errMsg+= "The number of classes that is inserted must be numberical.\n";
	}

	
	
	}
	if (errMsg != ""){
		alert (errMsg);
		result = false;
	}
	
	if (result){
		storepay(fname, sname, email, phone, post, state, streAdd, subadd)
	}
	
	
	
	
	return result;
}


function cardcompany(){
	var cardName = "Unknown";
	var cardArray = document.getElementById("CardType").getElementsByTagName("input");
	
	for(var i=0; i<cardArray.length; i++){
		if(cardArray[i].checked)
			cardName = cardArray[i].value;
	}
return cardName
}

function cardCheck(cardno){
	var errMsg = "";
	var cardName = cardcompany();
	
	switch(cardName){
		case "Visa":
			if (!cardno.match(/^4/)){
				errMsg = "Your Visa card has been entered incorrectly.\n";
			} else if(!cardno.match(/^[0-9]{16}$/)){
				errMsg = "Your Visa card must have 16 integers.\n"
			}
			break;
		case "MasterCard":
			if (!cardno.match(/^5[1-5]/) ){
				errMsg = "Your MasterCard has been entered incorrectly.\n";
			}else if(!cardno.match(/^[0-9]{16}$/)){
				errMsg = "Your MasterCard must have 16 integers.\n"
			}
			break;
		case "AmEx":
			if (!cardno.match(/^3[47]/) ){
				errMsg = "Your American Express has been entered incorrectly.\n";
				}else if(!cardno.match(/^[0-9]{15}$/)){
				errMsg = "Your American Express must have 15 integers.\n"
			}
			break;
	}
	return errMsg;
}

function payval(){
	var errMsg = "";
	var result = true;
	
	
	var cardno = document.getElementById("CardNo").value.trim();
	var cardName = document.getElementById("CardName").value.trim();
	var cardexp = document.getElementById("CardExpire").value.trim();
	var cvv = document.getElementById("cvv").value.trim();
	
	if (!debug){
	if (cardName==""){
		errMsg += "Your Card needs a name in it.\n";
		result = false;
	}else if (!cardName.match(/^[A-Za-z ]{1,40}$/)){
		errMsg += "Your Card needs to be only be from the alphabet and less than 40 characters.\n"
	}
	
	if(cardno == ""){
		errMsg += "Your Card Number cannot be empty.\n";
		result = false;
		
	} else if(isNaN(cardno)){
	errMsg += "Your Card number must be a number.\n";
} else {
	var tempoMsg = cardCheck(cardno);
		if(tempoMsg!=""){
			errMsg = errMsg+ tempoMsg;
			result=false;
		}}	
	
	if (cardexp==""){
		errMsg += "Please insert your credit card expiry date.\n";
		result=false;
	}
	
	if (cvv==""){
		errMsg += "Please enter your Card verification value.\n";
		result=false;
	} else if(!cvv.match(/^[0-9]{3}$/)){
		errMsg += "Your Card Verification Value must be 3 numbers or be entered only by numbers.\n";
		result=false;
	}

	}
	if (errMsg !=""){
		alert(errMsg);
		result =false;
	}
	return result;
}

function calcCost(memsignmem, monthmem, memsignclass, noofclasses){
	var cost = 0;
	var memcost = 0;
	var classcost = 0; 
	if (memsignmem.search("member") != -1) memcost = 50;
	if (memsignmem.search("member") != -1) cost = 75;
	if (memsignclass.search("class")!= -1) classcost = 15;
	return cost + memcost * monthmem + classcost * noofclasses;
}


function storepay(fname, sname, email, phone, post, state, streAdd, subAdd){
	var memsignmem = "";
	var memsignclass = "";
	var Ymember = document.getElementById("Ymember").checked;
	sessionStorage.Ymember=Ymember;
	var Yclass = document.getElementById("Yclass").checked;
	sessionStorage.Yclass = Yclass;
	
	if(Ymember) memsignmem = "I want to join member";
	if(Yclass) memsignclass = "I want to join class";
	
	sessionStorage.cost = document.getElementById("cost").checked;
	sessionStorage.personaltrain = document.getElementById("PersonalTrain").checked;	
	sessionStorage.classes = document.getElementById("Classes").checked;
	sessionStorage.entry = document.getElementById("Entry").checked;
	sessionStorage.gym = document.getElementById("Gym").checked;
	
	
	sessionStorage.memsignmem=memsignmem;
	sessionStorage.memsignclass=memsignclass;
	sessionStorage.monthmem = document.getElementById("monthmem").value;
	sessionStorage.noofclasses = document.getElementById("noofclasses").value;

	sessionStorage.fname = fname;
	sessionStorage.lname = sname;
	sessionStorage.email = email;
	sessionStorage.phone = phone;
	sessionStorage.state = state;
	sessionStorage.streAdd = streAdd;
	sessionStorage.subAdd = subAdd;
	sessionStorage.postcode = post;
	sessionStorage.prefcontact = prefcontact();
	sessionStorage.Category = document.getElementById("Category").value;
	sessionStorage.enquiry = document.getElementById("enquiry").value;
	


}

function getPay(){
	var total = "";
	var Ymember = "";
	var Yclass = "";
	var featcost="";
	var featpt="";
	var featclass="";
	var featentry="";
	var featgym="";
	if(sessionStorage.fname != undefined){
		document.getElementById("confirm_name").textContent = sessionStorage.fname + "  " + sessionStorage.lname;
		document.getElementById("CardName").value = sessionStorage.fname + " " + sessionStorage.lname;
		document.getElementById("email_confirm").textContent = sessionStorage.email;
		document.getElementById("duration_membership").textContent = sessionStorage.monthmem;
		document.getElementById("noofclass").textContent = sessionStorage.noofclasses
		total= calcCost(sessionStorage.memsignmem, sessionStorage.monthmem, sessionStorage.memsignclass, sessionStorage.noofclasses)
		document.getElementById("confirm_cost").textContent = total;
		document.getElementById("confirm_phone").textContent = sessionStorage.phone;
		document.getElementById("address").textContent = sessionStorage.streAdd + ", " + sessionStorage.subAdd + ",  " + sessionStorage.state + ",  " + sessionStorage.postcode;
		
		
		document.getElementById("fname").value=sessionStorage.fname;
		document.getElementById("lname").value = sessionStorage.lname;
		document.getElementById("email").value = sessionStorage.email;
		var verifyYmember = sessionStorage.Ymember;
		
		if (verifyYmember=="true"){
			Ymember = "Yes Membership";
		}
		document.getElementById("Ymember").value = Ymember;
		
		document.getElementById("duration").value = sessionStorage.monthmem;
		
		var verifyYclass = sessionStorage.Yclass;
		
		if (verifyYclass=="true"){
			Yclass = "Yes Classes";
		}
		document.getElementById("Yclass").value = Yclass;
		
		document.getElementById("numofclass").value = sessionStorage.noofclasses;
		document.getElementById("streAdd").value = sessionStorage.streAdd;
		document.getElementById("subAdd").value = sessionStorage.subAdd;
		document.getElementById("state").value = sessionStorage.state;
		document.getElementById("postcode").value = sessionStorage.postcode;
		document.getElementById("phone").value = sessionStorage.phone;
		document.getElementById("PrefContact").value = sessionStorage.prefcontact;
		document.getElementById("Category").value = sessionStorage.Category;
		var cost = sessionStorage.cost;
		
		if (cost=="true"){
			featcost = "Feature selected: cost.";
		}
		document.getElementById("featcost").value = featcost;
		
		var personaltrain = sessionStorage.personaltrain;
		
		if (personaltrain=="true"){
			featpt = "Feature selected: personal training";
		}
		document.getElementById("featpt").value = featpt;
		
		var classes = sessionStorage.classes;
		
		if (classes=="true"){
			featclass = "Feature selected: classes";
		}
		document.getElementById("featclass").value = featclass;
		
		var entry = sessionStorage.entry;
		
		if (entry=="true"){
			featentry = "Feature selected: entry";
		}
		document.getElementById("featentry").value = featentry;
		
		var gym = sessionStorage.gym;
		
		if (gym=="true"){
			featgym = "Feature selected: gym";
		}
		document.getElementById("featgym").value = featgym;		
		

		document.getElementById("cost").value = total;
		document.getElementById("enquiry").value = sessionStorage.enquiry;
		

		
	}
}

function cancelMembership(){
	sessionStorage.clear(); 
	window.location = "index.php"
}






//Enhancements stuff down here

//code from: https://www.w3schools.com/howto/howto_js_display_checkbox_text.asp
function MemberNum() {
  var checkBox = document.getElementById("Ymember");
  var text = document.getElementById("hidden1");

  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
} 

function ClassesNum() {
  var checkBox = document.getElementById("Yclass");
  var text = document.getElementById("hidden2");


  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
} 

//Code from: https://stackoverflow.com/questions/20618355/the-simplest-possible-javascript-countdown-timer
//Code use from: https://www.w3schools.com/jsref/met_win_settimeout.asp

function failpayment(){
	alert("You fail to complete this payment. If you still want the membership, please go to contact us and repeat the proccess.\n");
	sessionStorage.clear();
	window.location = "index.php"
}


function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

function timedText() {
    var duration = 5 * 60;
	var display = document.getElementById('timeout');
    startTimer(duration, display);
	setTimeout(failpayment,  5 * 60 * 1000);
}

//initialise functions here
function init(){
	if (document.URL.includes("payment")){
	var payment = document.getElementById("paypage");
	payment.onsubmit = payval;
		window.onload=getPay(), timedText();
		var cancelbutton = document.getElementById("cancel");
		cancelbutton.onclick = cancelMembership;
	} 
	if (document.URL.includes("equire")){
	var enquire = document.getElementById("enquire");
	enquire.onsubmit = formvalidate;
	var YesMember = document.getElementById("Ymember");
	var YesClass = document.getElementById("Yclass");
	YesMember.onclick = MemberNum;
	YesClass.onclick =ClassesNum;
	}
}
	

window.onload = init;