/*
 *
 *
 *
 *
*/
function appendHobby(hobby)
{
    let parentList = document.getElementById('hobby-list');
    let span = document.createElement('span');
    span.innerHTML = hobby;
    
    parentList.appendChild(span);
}

function loadHobbies(data)
{
    for(let i = 0; i < data.length; i++)
    {
        appendHobby(data[i]);
    }
}
if(!localStorage.getItem('uid'))
   window.location = './index.php';

/*  Set user details*/
var users = JSON.parse(localStorage.getItem('users'));
var user = users[localStorage.getItem('uid')];



window.addEventListener('load', function(){
    var logoutBtn = document.getElementById('logout');
    var addHobbyBtn = document.getElementById('add-hobby-btn');
    var addHobbyForm = document.forms.add_hobby; //  Get the form
    var token = addHobbyForm.csrf_token;   //  Get the csrf token value
    var hobby = document.getElementById('hobby');   //  Get the hobby value
    
    /*  Load current user's hobby   */    /*  Check for the existence of a hobby storage  */
    var hobbies = '{}';
    if(!localStorage.getItem('hobbies'))
        localStorage.setItem('hobbies', hobbies);
    else
    {
        hobbies = JSON.parse(localStorage.getItem('hobbies'));
        if(hobbies[user.email])
            loadHobbies(hobbies[user.email]);
    }
   
   addHobbyBtn.addEventListener('click', function(){
        var request = System.createAjaxObject();
        
        request.open('post', './processes/add-hobby.process.php');
        request.setRequestHeader('Content-Type', ' application/x-www-form-urlencoded');
        request.send('csrf_token='+token.value+'&hobby='+hobby.value);
        
        request.onreadystatechange = function()
        {
            if(request.readyState === 4)
            {
                console.log(request.responseText);
                let response = JSON.parse(request.responseText);
                if(response.isSuccessful)
                {
                    appendHobby(hobby.value);
                    System.displayFormMessage('form-message', response.body, 1);
                }else System.displayFormMessage('form-message', response.body, 3);
                
                // reset the token
                token.value = response.token;
            }
        };
   });
   
   logoutBtn.addEventListener('click', function(){
        var request = System.createAjaxObject();
        
        request.open('get', './processes/logout.process.php');
        request.send(null);
        
        request.onreadystatechange = function()
        {
            if(request.readyState === 4)
            {
                window.location = "./index.php";
            }
        };
   });
});