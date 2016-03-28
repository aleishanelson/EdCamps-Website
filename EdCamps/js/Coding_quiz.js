function start(){
	document.getElementById("Q1").style.visibility = "visible";
	document.getElementById("Q2").style.visibility = "visible";
	document.getElementById("Q3").style.visibility = "visible";
	document.getElementById("Q4").style.visibility = "visible";
	document.getElementById("Q5").style.visibility = "visible";
	document.getElementById("Q6").style.visibility = "visible";
	document.getElementById("Q7").style.visibility = "visible";
	document.getElementById("time").style.visibility = "visible";
}

function registerHandlers(){
	document.getElementById("start").onclick = start;
	document.getElementById("submit").onclick = checkAnswers;
}

setTimeout(function(){ document.getElementById("time#").innerHTML = "9 Minutes Left"}, 60000);
setTimeout(function(){ document.getElementById("time#").innerHTML = "8 Minutes Left"}, 120000);
setTimeout(function(){ document.getElementById("time#").innerHTML = "7 Minutes Left"}, 180000);
setTimeout(function(){ document.getElementById("time#").innerHTML = "6 Minutes Left"}, 240000);
setTimeout(function(){ document.getElementById("time#").innerHTML = "5 Minutes Left"}, 300000);
setTimeout(function(){ document.getElementById("time#").innerHTML = "4 Minutes Left"}, 360000);
setTimeout(function(){ document.getElementById("time#").innerHTML = "3 Minutes Left"}, 420000);
setTimeout(function(){ document.getElementById("time#").innerHTML = "2 Minutes Left"}, 480000);
setTimeout(function(){ document.getElementById("time#").innerHTML = "1 Minute Left"}, 540000);
setTimeout(function(){ document.getElementById("time#").innerHTML = "30 Seconds Left!"}, 570000);
setTimeout(function(){ document.getElementById("time#").innerHTML = "15 Seconds Left!!"}, 585000);
setTimeout(function(){ document.getElementById("time#").innerHTML = "5 Seconds Left!!!"}, 595000);
setTimeout(function(){ document.getElementById("time#").innerHTML = "Time is up! Please Try Again!"}, 6000000);

function checkAnswers(){
	var totalRight = 0;
	var answers = [];
	var counter = 0
	
	//Question 1 Check
	if(document.getElementById("rightAnswerQ1").checked){
		totalRight++;
		answers[counter] = "You got Question 1 Correct!";
		counter++;
	}
	else {
		answers[counter] = "You got Question 1 Wrong! The answer was 0";
		counter++;
	}
	
	//Question 2 Check
	var s = document.getElementById("Q2_").value.toLowerCase();
	if((s == "dynamically") || (s == "dynamic")){
		totalRight++;
		answers[counter] = "You got Question 2 Correct!";
		counter++;
	}
	else{
		answers[counter] = "You got Question 2 Wrong! The answer was Dynamic or Dynamically";
		counter++;
	}
	
	//Question 3 Check
	var x = document.getElementById("Q3selector");
	if(x.options[x.selectedIndex].value == "rightAnswerQ3"){
		totalRight++;
		answers[counter] = "You got Question 3 Correct!";
		counter++;
	}
	else {
		answers[counter] = "You got Question 3 Wrong! The answer was that the code needed Semi-Colons after each line";
		counter++;
	}
	
	//Question 4 Check
	var y = document.getElementById("Q4_").value.toLowerCase();
	if(y == "brendan eich"){
		totalRight++;
		answers[counter] = "You got Question 4 Correct!";
		counter++;
	}
	else{
		answers[counter] = "You got Question 4 Wrong! The answer was Brenden Eich";
		counter++;
	}
	
	//Question 5 Check
	if(document.getElementById("rightAnswerQ5").checked){
		totalRight++;
		answers[counter] = "You got Question 5 Correct!";
		counter++;
	}
	else {
		answers[counter] = "You got Question 5 Wrong! The answer was m&m's";
		counter++;
	}
	
	//Question 6 Check
	if(document.getElementById("rightAnswerQ6").checked){
		totalRight++;
		answers[counter] = "You got Question 6 Correct!";
		counter++;
	}
	else {
		answers[counter] = "You got Question 6 Wrong! The answer was False";
		counter++;
	}
	
	//Question 7 Check
	var z = document.getElementById("Q7_").value;
	if(z == "Hello neighbor! How is your day going?"){
		totalRight++;
		answers[counter] = "You got Question 7 Correct!";
		counter++;
	}
	else{
		answers[counter] = "You got Question 7 Wrong! The answer was 'Hello neighbor! How is your day going?'";
		counter++;
	}
	
	var percent = Math.floor((totalRight/7)*100);
	
	alert("You got " + totalRight + " out of 7 Question Right! That is a " + percent + "%! Scroll down to see more detailed results!");
	
	//Need help with printing the array on separate lines!!
	document.getElementById("results_").innerHTML = answers;
	
}
