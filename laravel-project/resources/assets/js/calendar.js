import moment from 'moment';

const check = function(obj) {
  if (obj) {
    return 'true';
  } else {
    return 'false';
  }
};


//let today = moment().date();
//console.log(today);
//console.log(check(today));
//
//let dateInSevenDays = moment().add(30, 'days');
//console.log(dateInSevenDays);
//
//let date = dateInSevenDays.get('date');
//console.log(date);
//
//
//console.log(check(date));
//console.log(check(dateInSevenDays));
let  m = moment();
let sevenDays = [];

for (let i = 1; i <= 7; i++){
  let date = m.get("date");
  sevenDays.push(date);
  console.log(date);
  m.add(1, 'days');
}

console.log(sevenDays);
