<!DOCTYPE html>
<html>

<head>
    <title>Gis-0 assignment</title>

</head>

<body>
<h1>SarahlearnsCoding</h1>

<script>

function isItEven(string) {         //first i define the actual function
    return string.lenght % 2 === 0;
    
}


//now we can check by doing this: 

var arr = [1,2,3,4,5];

console.log(isItEven("likats"));

//console.log(isItEven("likats")); should return "true" as it is a word with an even number of characters.
// as i am asked to update my code, i edited it so that isItEven as an array returns rather
//the lenght is even or not by stating "true" or "false"


function TimelyGreeting(hour) {      // this function accepts a number from 1-24 representing the current time rounded up in 24-hour military time. The function should return a different greeting based on the time of day.
    if (hour >= 4 && hour <= 11) {

        return "Good Morning!";
    } else if (hour >=12 && hour <= 16) {

        return "Good Afternoon!";
    }
    else {

        return "Good Night!";
    }
    
}


console.log(TimelyGreeting(11));
console.log(TimelyGreeting(14));
console.log(TimelyGreeting(19));
console.log(TimelyGreeting(3));





// now, this is a function that accepts an array of 10 integers (between 0 and 9)
// and returns a string of those numbers in the form of a phone number as requested.


function PhoneNumberFormat (numbers) {

{ 
if (numbers.lenght !== 10) {
return "Invalid input. sorry"; } 

}


let phoneNumber = ''; 

for (let i = 0; i < 10; i++) 

{ if (i === 3 || i === 6) 

{ phoneNumber += '-'; } 

phoneNumber += numbers[i]; 

} return phoneNumber;
}



const phoneNumber = formatPhoneNumber([5, 5, 5, 1, 2, 3, 4, 5, 6, 7]);

console.log(phoneNumber); // Output should be : 555-123-4567 , as expected.

</script>


</body>




</html>