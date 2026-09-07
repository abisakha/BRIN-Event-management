let date = new Date(2025,4,1);

let selectedDay = null;


let events={};



function generateEvents(){

    let totalDays =
    new Date(
        date.getFullYear(),
        date.getMonth()+1,
        0
    ).getDate();


    events={};


    for(let i=1;i<=totalDays;i++){

        events[i]={

            title:`BRIN Research Event ${i}`,

            location:"Jakarta, Indonesia",

            time:"09:00 - 12:00"

        };

    }

}



function renderCalendar(){

    generateEvents();


    let year=date.getFullYear();

    let month=date.getMonth();


    let monthName =
    date.toLocaleString('en-US',{
        month:'long'
    });



    document.getElementById('monthYear').innerHTML =
    `${monthName} ${year}`;



    let firstDay =
    new Date(year,month,1).getDay();



    let totalDays =
    new Date(year,month+1,0).getDate();



    let html="";


    for(let i=0;i<firstDay;i++){

        html+=`<span></span>`;

    }



    for(let day=1;day<=totalDays;day++){

        let active =
        selectedDay==day?'active':'';


        html+=`

        <button
        class="event-date ${active}"
        onclick="selectDate(this,${day})">

        ${day}

        </button>

        `;

    }



    document.getElementById('calendarDays').innerHTML=html;


}



function selectDate(element,day){

    selectedDay=day;


    document
    .querySelectorAll('.calendar-grid button')
    .forEach(btn=>{

        btn.classList.remove('active');

    });



    element.classList.add('active');


    let event=events[day];


    document.getElementById('eventInfo').innerHTML=`

    <h5>
    ${event.title}
    </h5>

    <p>
    📍 ${event.location}
    </p>

    <p>
    🕒 ${event.time}
    </p>

    `;


}



function nextMonth(){

    date.setMonth(date.getMonth()+1);

    selectedDay=null;

    renderCalendar();

}



function prevMonth(){

    date.setMonth(date.getMonth()-1);

    selectedDay=null;

    renderCalendar();

}



renderCalendar();
