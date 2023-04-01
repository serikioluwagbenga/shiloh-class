// here is my first code.

let person = { firstName: 'John',  lastName: 'smith', age: 18 }

person['lastName'] = 'Ajayi';
console.log(person['lastName']);

let colors = ["red", "green", "yellow"];
colors[1] = "deepgreen";
console.log(colors[0])

let students = [
    { firstName: 'John',  lastName: 'smith', age: 18 },
    { firstName: 'Ajayi',  lastName: 'Gbenga', age: 30 }
];
console.log(students[0]['firstName']);


//  person.firstName = 'Ajayi';
// console.log(person.firstName);


// const DOB = '10/01/2022';
// var nameOfMySchool = "Hope";
// var number1 = 30;
// var number2 = 20;
// var nationality = "Nigeria";
// // console.log(number1 - number2);
// if(number1 < number2) {
//     console.log(number1 + " is greater than " + number2);
// }else if(age === 18 || nationality != "Ghana"){
//     console.log("You can vote");
// }else {
//     console.log("Nothing");
// }