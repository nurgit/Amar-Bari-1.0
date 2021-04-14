//================ calendar drop start ================

const calendarBtn = document.querySelector('.calendar-btn');
const calendar_Dropdown = document.querySelector('.calendar-dropdown');
// console.log(calendar_Dropdown);
function openMenu() {
  let hasClass = calendarBtn.classList.contains('drop');
  if (hasClass) {
    // console.log(typeof hasClass);
    // calendar_Dropdown.classList.remove('drop');
  } else {
    // calendar_Dropdown.classList.add('drop');
  }

  calendar_Dropdown.classList.toggle('drop');
}
calendarBtn.addEventListener('click', openMenu);

//================ calendar drop end ================


const date = new Date();
function calendar() {
  // ======== generating month ==========
    let monthArr = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December',
  ];
  
  const currentMonth = monthArr[date.getMonth()];
  const calendar_month = document.querySelector('.cal-month');
  calendar_month.innerHTML = currentMonth;
      
  // ======== generating year ==========
  
  const calendar_year = document.querySelector('.year > p');
  const currentYear = date.getFullYear();
  calendar_year.innerHTML = currentYear; 
  // active month code
  const month_btn = document.querySelectorAll('.col-4');
  month_btn[date.getMonth()].classList.remove('active-month');
  
  for (let l = 0; l < month_btn.length; l++) {
    if(month_btn[l].classList.contains('active-month')){
      month_btn[l].classList.remove('active-month');
    }
  }
  
  for (let i = 0; i < month_btn.length; i++) {
    const condition = i === date.getMonth() 
    if(condition){
      month_btn[date.getMonth()].classList.add('active-month');
    }
  }

}

calendar();

// ======== functioning calendar arrow btns ==========

const btn_right = document.querySelector('.right-arrow');
const btn_left = document.querySelector('.left-arrow');

btn_left.addEventListener('click',function() {
  date.setFullYear(date.getFullYear() - 1);
  calendar()
});

btn_right.addEventListener('click',function() {
  date.setFullYear(date.getFullYear() + 1);
  calendar()
});

const month_btn = document.querySelectorAll('.dropdown-months');

for (let i = 0; i < month_btn.length; i++) {
month_btn[i].addEventListener('click',function () {
  date.setMonth(i)
  calendar()
});
}

/////// tab functions
const tabs = document.querySelectorAll('.cards'); 
const payBtn = document.querySelectorAll('.paid-btn');
const tabContainer = document.querySelectorAll('.tab-container');
const input = document.querySelectorAll('.paid-input');
const rentCard = document.querySelectorAll('.rent-card');
const inputLabel = document.querySelectorAll('.edit-btn');
// dynamic tabs
for (let j = 0; j < tabs.length; j++) {
  // empty element
  const tab = document.createElement('div');
  // btn text node
  const tabNode = document.createTextNode(`b0${j+1}`);
  tab.appendChild(tabNode);
  tabContainer[0].appendChild(tab);
  tab.classList.add('tab-btn','text-capitalize');
}

// tab click events
const tabBtn = document.querySelectorAll('.tab-btn');
tabBtn[0].classList.add('tab-btn-active')
for (let i = 0;  i < tabs.length; i++) {
  tabBtn[i].addEventListener('click', function () {
    for (let j = 0; j < tabs.length; j++) {   
      tabBtn[j].classList.remove('tab-btn-active');
      if (j === i) {
        tabBtn[j].classList.add('tab-btn-active');
      }

      tabs[j].classList.remove('active-tab');
      if (j === i) {
        tabs[j].classList.add('active-tab');
      }
    }
  });
};

// payment tab-btn function
for (let h = 0; h < payBtn.length; h++) {
  payBtn[h].addEventListener('click',function () {
    for (let j = 0; j < payBtn.length; j++) {
      payBtn[j].classList.remove('tab-btn-active');
      if (j === h) {
        payBtn[j].classList.add('tab-btn-active');
      }
    }
  })  
}
console.log(rentCard);

for (let r = 0; r < rentCard.length; r++) {
  const value = `input${r}` ;
  input[r].setAttribute('id',value);
  inputLabel[r].setAttribute('for',value);
}

