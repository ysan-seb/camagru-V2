loginModCount.num = 0;
registrationModCount.num = 0;
forgotPasswordModCount.num = 0;
notificationModCount.num = 0;
usernameModCount.num = 0;
emailModCount.num = 0;
passwordModCount.num = 0;


function loginModCount(param) {
    if (param === '++'){
        loginModCount.num++;
    } else if(param === '--'){
        loginModCount.num--;
    }
    return loginModCount.num;
}

function registrationModCount(param) {
    if (param === '++'){
        registrationModCount.num++;
    } else if(param === '--'){
        registrationModCount.num--;
    }
    return registrationModCount.num;
}

function forgotPasswordModCount(param) {
    if (param === '++'){
        forgotPasswordModCount.num++;
    } else if(param === '--'){
        forgotPasswordModCount.num--;
    }
    return forgotPasswordModCount.num;
}
    
function notificationModCount(param) {
    if (param === '++'){
        notificationModCount.num++;
    } else if(param === '--'){
        notificationModCount.num--;
    }
    return notificationModCount.num;
}

function usernameModCount(param) {
    if (param === '++'){
        usernameModCount.num++;
    } else if(param === '--'){
        usernameModCount.num--;
    }
    return usernameModCount.num;
}

function emailModCount(param) {
    if (param === '++'){
        emailModCount.num++;
    } else if(param === '--'){
        emailModCount.num--;
    }
    return emailModCount.num;
}

function passwordModCount(param) {
    if (param === '++'){
        passwordModCount.num++;
    } else if(param === '--'){
        passwordModCount.num--;
    }
    return passwordModCount.num;
}

function showLogin() {
    document.getElementById('loginMod').style.display = 'inherit';
    document.getElementById('registrationMod').style.display = 'none';
    document.getElementById('forgotPasswordMod').style.display = 'none';
}

function showRegistration() {
    document.getElementById('loginMod').style.display = 'none';
    document.getElementById('registrationMod').style.display = 'inherit';
    document.getElementById('forgotPasswordMod').style.display = 'none';
}

function showForgotPassword() {
    document.getElementById('loginMod').style.display = 'none';
    document.getElementById('registrationMod').style.display = 'none';
    document.getElementById('forgotPasswordMod').style.display = 'inherit';
}

function showNotification() {
    document.getElementById('notificationMod').style.display = 'inherit';
    document.getElementById('usernameMod').style.display = 'none';
    document.getElementById('emailMod').style.display = 'none';
    document.getElementById('passwordMod').style.display = 'none';
}

function showUsername() {
    document.getElementById('notificationMod').style.display = 'none';
    document.getElementById('usernameMod').style.display = 'inherit';
    document.getElementById('emailMod').style.display = 'none';
    document.getElementById('passwordMod').style.display = 'none';
}

function showEmail() {
    document.getElementById('notificationMod').style.display = 'none';
    document.getElementById('usernameMod').style.display = 'none';
    document.getElementById('emailMod').style.display = 'inherit';
    document.getElementById('passwordMod').style.display = 'none';
}

function showPassword() {
    document.getElementById('notificationMod').style.display = 'none';
    document.getElementById('usernameMod').style.display = 'none';
    document.getElementById('emailMod').style.display = 'none';
    document.getElementById('passwordMod').style.display = 'inherit';
}

function hiddenLoginMod(elem) {
    var i = loginModCount();
    var attrs = elem.attributes;    
    if (i === 0 && attrs[0].value === 'loginForm'){
        loginModCount('++')    
    } else if (i === 0 && attrs[0].value === 'loginMod'){
        document.getElementById('loginMod').style.display = 'none';
    }else if (i === 1 && attrs[0].value === 'loginMod'){
        loginModCount('--');
    }
}

function hiddenRegistrationMod(elem) {
    var i = registrationModCount();
    var attrs = elem.attributes;    
    if (i === 0 && attrs[0].value === 'registrationForm'){
        registrationModCount('++')    
    } else if (i === 0 && attrs[0].value === 'registrationMod'){
        document.getElementById('registrationMod').style.display = 'none';
    }else if (i === 1 && attrs[0].value === 'registrationMod'){
        registrationModCount('--');
    }
}

function hiddenForgotPasswordMod(elem) {
    var i = forgotPasswordModCount();
    var attrs = elem.attributes;
    if (i === 0 && attrs[0].value === 'forgotPasswordForm'){
        forgotPasswordModCount('++')    
    } else if (i === 0 && attrs[0].value === 'forgotPasswordMod'){
        document.getElementById('forgotPasswordMod').style.display = 'none';
    }else if (i === 1 && attrs[0].value === 'forgotPasswordMod'){
        forgotPasswordModCount('--');
    }
}

function hiddenNotificationMod(elem) {
    var i = notificationModCount();
    var attrs = elem.attributes;
    if (i === 0 && attrs[0].value === 'notificationForm'){
        notificationModCount('++')    
    } else if (i === 0 && attrs[0].value === 'notificationMod'){
        document.getElementById('notificationMod').style.display = 'none';
    }else if (i === 1 && attrs[0].value === 'notificationMod'){
        notificationModCount('--');
    }
}

function hiddenUsernameMod(elem) {
    var i = usernameModCount();
    var attrs = elem.attributes;
    if (i === 0 && attrs[0].value === 'usernameForm'){
        usernameModCount('++')    
    } else if (i === 0 && attrs[0].value === 'usernameMod'){
        document.getElementById('usernameMod').style.display = 'none';
    }else if (i === 1 && attrs[0].value === 'usernameMod'){
        usernameModCount('--');
    }
}

function hiddenEmailMod(elem) {
    var i = emailModCount();
    var attrs = elem.attributes;
    if (i === 0 && attrs[0].value === 'emailForm'){
        emailModCount('++')    
    } else if (i === 0 && attrs[0].value === 'emailMod'){
        document.getElementById('emailMod').style.display = 'none';
    }else if (i === 1 && attrs[0].value === 'emailMod'){
        emailModCount('--');
    }
}

function hiddenPasswordMod(elem) {
    var i = passwordModCount();
    var attrs = elem.attributes;
    if (i === 0 && attrs[0].value === 'passwordForm'){
        passwordModCount('++')    
    } else if (i === 0 && attrs[0].value === 'passwordMod'){
        document.getElementById('passwordMod').style.display = 'none';
    }else if (i === 1 && attrs[0].value === 'passwordMod'){
        passwordModCount('--');
    }
}

function hiddenLoginForm(){
    document.getElementById('loginMod').style.display ='none';
}

function hiddenRegistrationForm(){
    document.getElementById('registrationMod').style.display ='none';
}

function hiddenForgotPasswordForm(){
    document.getElementById('forgotPasswordMod').style.display ='none';
}

function hiddenNotificationForm(){
    document.getElementById('notificationMod').style.display ='none';
}

function hiddenUsernameForm(){
    document.getElementById('usernameMod').style.display ='none';
}

function hiddenEmailForm(){
    document.getElementById('emailMod').style.display ='none';
}

function hiddenPasswordForm(){
    document.getElementById('passwordMod').style.display ='none';
}