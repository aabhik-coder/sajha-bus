var origin=document.querySelector('#Origin'),
destination=document.querySelector('#Destination'),
form1=document.querySelector('.form1'),
form2=document.querySelector('.form2'),
form3=document.querySelector('.form3'),
dot2=document.querySelector('.dot2'),
dot3=document.querySelector('.dot3'),
originSpan=document.querySelector('#originSpan'),
destinSpan=document.querySelector('#destinSpan'),
totalFare=document.querySelector('#totalFare')
fName=document.querySelector('#Fname'),
image=document.querySelector('#qrcode img'),
offer=document.querySelector('#offer');
function ticketmaker1() 
{  
        if(destination.value===origin.value)
        {
         alert("Origin and Destination must be different");
        }
        else{
         form1.style.display= 'none';
         form2.style.display='block';
         dot2.style.backgroundColor='#169D24';
         originSpan.innerHTML=origin.value;
         destinSpan.innerHTML=destination.value;
         
         var dataToSend = {
            origin: origin.value,
            destination: destination.value
          };

         var xhr = new XMLHttpRequest();
         xhr.open('POST', 'Farecalculator.php', true);
         xhr.onreadystatechange = function() {
           if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
             // Set the inner HTML of the element with the fetched data
             
             localStorage.setItem('Origin', origin.value);
             localStorage.setItem('Destination', destination.value);
             localStorage.setItem('Fname', fName.value);
             if(offer.checked)
             {
              localStorage.setItem('Fare', 15);
              totalFare.innerHTML = '15';
             }
             else
             {
              localStorage.setItem('Fare', xhr.responseText);
              totalFare.innerHTML = xhr.responseText;
             }
             
             // Generate a random number between 100000 and 999999
            var ticketNumber = Math.floor(Math.random() * 90000000000) + 10000000000;
            localStorage.setItem('Ticketnumber', ticketNumber);
            localStorage.setItem('Status','Active');
           }
         };
         xhr.send(JSON.stringify(dataToSend));
     }
    
}
function ticketmaker2()
{
  
  var ticketnumber=document.querySelector('.ticketnumber'),
  fName3=document.querySelector('.fName3'),
  Origin3=document.querySelector('.Origin3'),
  Destination3=document.querySelector('.Destination3'),
  Fare3=document.querySelector('.Fare3')

  var Origin=localStorage.getItem('Origin'),
  Destination=localStorage.getItem('Destination'),
  Fname=localStorage.getItem('Fname'),
  Fare=localStorage.getItem('Fare'),
  Ticketnumber=localStorage.getItem('Ticketnumber'),
  Status=localStorage.getItem('Status');

  ticketnumber.innerHTML=Ticketnumber;
  fName3.innerHTML=Fname;
  Origin3.innerHTML=Origin;
  Destination3.innerHTML=Destination;
  Fare3.innerHTML=Fare;

  var url=`http:192.168.0.110/Sajha%20bus/search.php?TicketId=${Ticketnumber}`;
  image.src=`https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${url}`;
  
  var dataToSend = {
    Origin: Origin,
    Destination: Destination,
    Fname:Fname,
    Fare:Fare,
    Ticketnumber:Ticketnumber,
    Status:Status
  };

  var xhr = new XMLHttpRequest();
         xhr.open('POST', 'TickettoDatabase.php', true);
         xhr.onreadystatechange = function() {
           if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
             // Set the inner HTML of the element with the fetched data
            //  totalFare.innerHTML = xhr.responseText;
             
           }
         };
         xhr.send(JSON.stringify(dataToSend));

  form1.style.display= 'none';
  form2.style.display='none';
  form3.style.display='block';
  dot3.style.backgroundColor='#169D24';
}

function download()
{
  // Assuming you have an <img> element with the ID "myImage"
  var tick=document.querySelector(".mainticket")
  var options = {
    quality: 1,
    width: 450,
    height: 200
};

domtoimage.toBlob(tick,options).then(function(blob){
window.saveAs(blob,`Ticket.jpg`)
})

}
