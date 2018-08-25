/*
 *
 *
*/

window.addEventListener('load', function(){
    var regBtn = document.getElementById('reg-btn');
        /*   */
    if(!localStorage.getItem('users'))
    {
       localStorage.setItem('users', "{}");
    }
    var users = JSON.parse(localStorage.getItem('users'));
    
    /*  */
    regBtn.addEventListener('click', function(){
        let isFieldEmpty = false;
        let form = document.forms.fi_reg;
        let name =  form.fi_name;
        let email = form.fi_email;
        let phone = form.fi_phone;
        let passwd = form.fi_passwd;
        let cpasswd = form.fi_cpasswd;
        
        
        /*  Check if any field was left empty   */
        for(let i = 0; i < form.children.length; i++)
        {
            if(form.children[i].value == '')
            {
                isFieldEmpty = true;
                break;
            }
        }
        
        if(isFieldEmpty) System.displayFormMessage('form-message', 'Please fill all fields', 3);
        else
        {
            //  Check if passwords match
            if(passwd.value.toLowerCase() !== cpasswd.value.toLowerCase())
                System.displayFormMessage('form-message', 'Passwords do not match', 3);
            else
            {
                let uid = email.value;
                let user_info = {
                    "email" : email.value,
                    "name": name.value,
                    "phone": phone.value,
                    "password": passwd.value
                };
                users[uid] = user_info;
                
                /* Save user info*/
                localStorage.setItem('uid', uid);
                localStorage.setItem('users', JSON.stringify(users));
                
                window.location = './home.php';
            }
        }
    });
});