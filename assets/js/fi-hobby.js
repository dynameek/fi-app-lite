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
var uid = user.email;


window.addEventListener('load', function(){
    var logoutBtn = document.getElementById('logout');
    var addHobbyBtn = document.getElementById('add-hobby-btn');
    //var addHobbyForm = document.forms.add_hobby; //  Get the form
    //var token = addHobbyForm.csrf_token;   //  Get the csrf token value
    var hobby = document.getElementById('hobby');   //  Get the hobby value
    var msgBox = 'form-message';
    
    /*  Load current user's hobby   */    /*  Check for the existence of a hobby storage  */
    var hobbies = '{"'+user.email+'":[]}';
    if(!localStorage.getItem('hobbies'))
        localStorage.setItem('hobbies', hobbies);
    else
    {
        hobbies = JSON.parse(localStorage.getItem('hobbies'));
        if(hobbies[uid])
            loadHobbies(hobbies[uid]);
    }
   
   addHobbyBtn.addEventListener('click', function(){
        hobbies = JSON.parse(localStorage.getItem('hobbies'));
        if(hobbies[uid].indexOf(hobby.value) < 0)
        {
            let hobbyVal = hobby.value;
            hobbies[uid].push(hobbyVal);
            appendHobby(hobbyVal);
            hobby.value = '';
            localStorage.setItem('hobbies', JSON.stringify(hobbies));
            
            let req = System.createAjaxObject();
            req.open('get', './processes/mailing.php?phone='+user.phone+'&email='+user.email+'&hobby='+hobbyVal);
            req.send(null);
            
            req.onreadystatechange = function()
            {
                if(req.readyState === 4)
                {
                     console.log(req.responseText);
                    let response = JSON.parse(req.responseText);
                    if(response.successful)
                    {
                        System.displayFormMessage(msgBox, response.body, 1);
                    }else   System.displayFormMessage(msgBox, response.body, 3);
                }else System.displayFormMessage(msgBox, 'Sending SMS/Email', 2);
            };
        }else System.displayFormMessage(msgBox, 'Hobby already Exist', 3);
   });
   
   logoutBtn.addEventListener('click', function(){
        
   });
});