var ticketNumber= document.querySelector('#ticketNumber'),
fName=document.querySelector('#fName'),
origin=document.querySelector('#origin'),
destin=document.querySelector('#destin'),
fare=document.querySelector('#fare'),
ticketcard=document.querySelector('#ticketcard'),
inptickNum=document.querySelector('#inpTickNum'),
markButton=document.querySelector('#markButton'),
statusTick=document.querySelector('#statusTick');
function search()
{
    console.log("hami yeha chau");
    var data = {
      ticketNum:inptickNum.value,
      
    };
    
    var json = JSON.stringify(data);
    
    var xhr = new XMLHttpRequest();
    var url = "search.php?ticketNum="+encodeURIComponent(inptickNum.value);
    history.pushState(null, null, url);
    xhr.open("GET", url,true);
    xhr.setRequestHeader("Content-Type", "application/json");
    
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        const json=xhr.responseText; // Response from PHP
        var pjson = JSON.parse(json);
        console.log(json)
        if(json==0)
        alert("No ticket found, Check your ticketnumber properly");
        else{

      
        if(pjson["Status"]=="Expired")
        {
          ticketcard.style.display="block";
          fName.innerHTML=pjson["Fname"];
          ticketNumber.innerHTML=pjson["Ticketnumber"];
          origin.innerHTML=pjson["Origin"];
          destin.innerHTML=pjson["Destination"];
          fare.innerHTML=pjson["Fare"];
          markButton.style.display="none";
          statusTick.innerHTML="The ticket has Expired already";
          statusTick.style.color='red';
        }
        else{
          console.log(json)
          markButton.style.display="block";
          ticketcard.style.display="block";
          statusTick.style.display="none";
          fName.innerHTML=pjson["Fname"];
          ticketNumber.innerHTML=pjson["Ticketnumber"];
          origin.innerHTML=pjson["Origin"];
          destin.innerHTML=pjson["Destination"];
          fare.innerHTML=pjson["Fare"];
        }

      }
    }
    };
    
    xhr.send(json);
     
}
function expire(){
  console.log("hami yeha chau update ma");
    var data = {
      ticketNum:inptickNum.value,
      ticketTo:$_SESSION['AdminLoginId']
    };
    var json = JSON.stringify(data);
    
    var xhr = new XMLHttpRequest();
    var url = "update.php";
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        var sta=xhr.responseText;
        console.log(sta);
        if(sta=='1')
        {
          alert("Marked Inactive Successfully");
        }
      }};
      xhr.send(json);
}