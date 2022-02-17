let num1=0;
const course = setInterval(()=>{
    num1+=2;
    document.getElementById('number_of_course').innerHTML = num1;
    if(num1 === 724){clearInterval(course);}
},.5);

let num2=0;
const trainer = setInterval(()=>{
    num2+=1;
    document.getElementById('trainers').innerHTML = num2;
    if(num2 === 319){clearInterval(trainer);}
},5);

let num3=3;
const organization = setInterval(()=>{
    num3+=1;
    document.getElementById('client_organization').innerHTML = num3;
    if(num3 === 56){clearInterval(organization);}
},30);