/*
 *
*/

window.addEventListener('load', function(){
   var loginBtn = document.getElementById('lg-btn');
   var msgBox = 'form-message';
   /*   */
   if(!localStorage.getItem('users'))
   {
        localStorage.setItem('users', "{}");
   }
   
   loginBtn.addEventListener('click', function(){
        let form = document.forms.fi_login;
        let email = form.fi_email.value;
        let passwd = form.fi_passwd.value;
        
        if(email == '' || passwd == '')
            System.displayFormMessage(msgBox, 'Please, fill all fields', 3);
        else
        {
            let users = JSON.parse(localStorage.getItem('users'));
            if(!users[email])
            {
                System.displayFormMessage(msgBox, 'User does not exist', 3);
            }else
            {
                let user = users[email];
                if(user.password !== passwd)
                    System.displayFormMessage(msgBox, 'Email/Password incorrect', 3);
                else
                {
                    //  Save a localSession session variable
                    localStorage.setItem('uid', user.email);
                    window.location = "./home.php";
                }
            }
        }
   });
});