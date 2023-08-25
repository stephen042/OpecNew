
$(document).ready(function() {

// GET ALERT SCRIPTS
$.getScript('/dashboard/js/sweetalert/sweetalert.min.js');



// ===================================================================================================================================
// ============================ SIGN UP SCRIPT =======================================================================================
//====================================================================================================================================
$('form#signupForm').on("submit", function(e) {
e.preventDefault();

var thisButton = $(this).find('button#signupButton');
var Fullname = $(this).find('input#Fullname').val();
var Email = $(this).find('input#Email').val();
var Phone = $(this).find('input#Phone').val();
var Address = $(this).find('input#Address').val();
var Country = $(this).find('select#Country').val();
var Acc_Plan = $(this).find('select#Acc_Plan').val();

var Password = $(this).find('input#Password').val();
var termsCon = $(this).find('input#termsCon');
var confirmPassword = $(this).find('input#R_Password').val();

//=====================================================
if (termsCon.is(':checked')) {
if (Password !== confirmPassword) {
    swal("Passwords mismatch", "Please ensure password and confirm password are the same", "error");
} else {
// change button text
thisButton.text('Creating account.. ');
thisButton.attr('disabled', 'disabled');
$.post('/account/dashboard/functions/signupScript.php', {
Fullname: Fullname,
Email: Email,
Phone: Phone,
Country: Country,
Password: Password,
Address:Address,
Acc_Plan:Acc_Plan
}, function(data) {
thisButton.text('Create account');
thisButton.removeAttr('disabled');
if ($.trim(data) == "success") {

window.location = "/account/dashboard/";

} else if ($.trim(data) == "email already in used") {
    swal("Email already in used", "Please try another email to continue", "info");

} else {
    swal("Unknown error has occurred", "Please try again or contact us if this error persists.", "error");
}

});
}
}else {
// ======== TERMS AND CONDITION ================
swal("Error", "Your must accept our terms and condition in order to continue", "error");
}
//=====================================================

});

// ===================================================================================================================================
// ============================ LOGIN SCRIPT =======================================================================================
//====================================================================================================================================

$('form#loginForm').on("submit", function(e) {
e.preventDefault();
var thisButton = $(this).find('button#loginButton');
var loginEmail = $(this).find('input#Email').val();
var loginPassword = $(this).find('input#Password').val();

// change button text
thisButton.text('SECURELY LOGGING IN.. ');
thisButton.attr('disabled', 'disabled');



//=====================================================
$.post('../account/dashboard/functions/loginScript.php', {
loginEmail: loginEmail,
loginPassword: loginPassword
}, function(data) {
    
thisButton.text('Sign In');
thisButton.removeAttr('disabled');

if (data == "success") {
swal("Success", "You have been securely logged in and you are now being redirected to your trading dashboard", "success");
window.location = "/account/dashboard/";

}else if(data == "suspense"){
        swal("Account Suspended", "Your account has been suspended. Kindly contact management at support@AccurateOption247", "info");
} else {
swal("Incorrect details", "Please try again or click forget password to reset your password", "error");
}

});


});

// ===================================================================================================================================
// ============================ WITHDRAW SCRIPT =======================================================================================
//====================================================================================================================================
$('a#withBtn').on("click", function(e) {
    e.preventDefault();
    $("form#withdrawForm").submit();
});

$('form#withdrawForm').on("submit", function(e) {
    e.preventDefault();
    var thisButton = $(this).find('button#Save');
    var Amount = $(this).find('input#Amount').val();
    var Wallet_address = $(this).find('input#Wallet_address').val();

    var Method = $('select#SelectWith').val();
    
    // change button text
    thisButton.text('PROCESSING.. ');
    thisButton.attr('disabled', 'disabled');
    
    //=====================================================
 if(Method == "Bitcoin") {
    $.post('/account/dashboard/functions/withdrawScript.php', {
        Amount: Amount,
        Wallet_address: Wallet_address
    }, function(data) {
    thisButton.text('Place Withdraw Request');
    thisButton.removeAttr('disabled');
    if (data == "success") {
    swal("Notice", "Withdrawal Pending", "success");

    } else if(data == "too low") {
        swal("Info", "The minimum amount you can withdraw is $10, Please try again", "info");
     } else if(data == "insufficient funds") {
        swal("Insufficient Funds", "Your account is lower than what you are requesting to withdraw, Please try again", "info");
     }else if(data == "not verified") {
        swal("Info", "You have not verified your identity, please go to verification page to continue", "info");
     } else {
    swal("Unknown error", "Please try again or contact us if this error persists", "error");
    }
    
    });
 }else {
    $.post('/account/dashboard/functions/withdrawScript.php', {
        Amount: Amount
    }, function(data) {
    thisButton.text('Place Withdraw Request');
    thisButton.removeAttr('disabled');
    if (data == "success") {
    swal("Notice", "Withdrawal Pending", "success");

    } else if(data == "too low") {
        swal("Info", "The minimum amount you can withdraw is $10, Please try again", "info");
     } else if(data == "insufficient funds") {
        swal("Insufficient Funds", "Your account is lower than what you are requesting to withdraw, Please try again", "info");
     }else if(data == "not verified") {
        swal("Info", "You have not verified your identity, please go to verification page to continue", "info");
     } else {
    swal("Unknown error", "Please try again or contact us if this error persists", "error");
    }
    
    });
 }
    //=====================================================
    

    });
 //=====================================================
// $('a#DepositFunds').on("click", function(e) {
// e.preventDefault();
// var BitcoinAddress = $(this).data('btc');
// var AccCurr = $(this).data('cur');
// var CurrSymbol = $(this).data('curcode');
// swal({
// title: "Deposit Funds to Your Account",
// text: "Please enter amount you intend to deposit",
// type: "input",
// showCancelButton: true,
// closeOnConfirm: false,
// inputPlaceholder: "Amount($)",
// showLoaderOnConfirm: false
// }, function (inputValue) {
// if (inputValue === false)  return false;
// if (inputValue === "") {
// swal.showInputError("You need to write something!");
// return false
// }

// // INTENDED DEPOSIT
// var Amount = "$"+ inputValue +"";
// $.post('/account/dashboard/functions/intendDeposit.php', {
//     Amount: Amount
// }, function(data) {});

// // 
// swal({
// title: "Please pay $"+ inputValue+" BTC equivalent directly into your wallet address below",
// text: BitcoinAddress,
// confirmButtonText: "...",
// closeOnConfirm: false,
// });

// });
// });
$('a#DepositFunds').on("click", function(e) {
e.preventDefault();
var BitcoinAddress = $(this).data('btc');
var AccCurr = $(this).data('cur');
var CurrSymbol = $(this).data('curcode');
swal({
title: "Deposit Funds to Your Account",
text: "Please enter amount you intend to deposit",
type: "input",
showCancelButton: true,
closeOnConfirm: false,
inputPlaceholder: "Amount($)",
showLoaderOnConfirm: false
}, function (inputValue) {
if (inputValue === false)  return false;
if (inputValue === "") {
swal.showInputError("You need to write something!");
return false
}else if($.isNumeric(inputValue) === false) {
    swal.showInputError("Value must be numeric ONLY");
}else {
    // INTENDED DEPOSIT
var Amount = "$"+ inputValue +"";
$.post('/account/dashboard/functions/intendDeposit.php', {
    Amount: Amount
}, function(data) {});

window.location = "/account/dashboard/make-deposit/"+ inputValue+"";


}

});
});
 //=====================================================


 
// =========== EDIT ACCOUNT FORM ============================================================
$('form#accountInfoEdit').on("submit", function(e) {
e.preventDefault();

var thisButton = $(this).find('button#Save');
var Fullname = $(this).find('input#Fullname').val();
var Email = $(this).find('input#Email').val();
var Phone = $(this).find('input#Phone').val();
var Password = $(this).find('input#Password').val();
var Country = $(this).find('select#Country').val();



// change button text
thisButton.text('Updating Account.. ');
thisButton.attr('disabled', 'disabled');

// SAVE WITHOUT PASSWORD
var changePassword = "0";
$.post('/account/dashboard/functions/editAccount.php', {
    Fullname: Fullname,
    Email: Email,
    Phone: Phone,
    Country: Country,
    Password:Password,
    changePassword:changePassword
}, function(data) {
    thisButton.text('Update Settings');
    thisButton.removeAttr('disabled');
    if (data == "success") {
        swal("Success", "Your account information has been updated successfully", "success");
        window.location = "/account/dashboard/";
    }else if(data == "email already in used"){
        swal("Email already in use", "The email you have selected is already in use", "info");
    }else {
        swal("Unknown error has occurred", "Could not update account information, please try again or contact us if this error persists.", "error");
    }

});


});

// =========== EDIT ADMIN FORM ============================================================
$('form#adminlogin').on("submit", function(e) {
    e.preventDefault();
    
    var thisButton = $(this).find('button');
    var adminID = $(this).find('input#adminID').val();
    var adminPassword = $(this).find('input#adminPassword').val();
    
    thisButton.text("Granting access..");
    thisButton.attr('disabled', 'disabled');
    
    $.post('/admin/cPanelScript/AdminLogin.php', {adminID:adminID, adminPassword:adminPassword}, function(data) {
    thisButton.text('Login');
    thisButton.removeAttr('disabled');
    if(data == "success") {
        swal("Access Granted", "You are now being redirected to admin dashboard", "success");   
        setInterval(() => {
            location.reload();
        }, 1000);
    }else {
        swal("Error", "Unknown error occurred, please try again or contact developer", "error");
    }
    }); 
    
    
    });

//=========== DELETE CUSTOMER =======================
$('button.DeleteCustomer').click(function() {
var CustomerID = $(this).data('id');
swal({
title: "Are you sure?",
text: "You will not be able to recover this customer!",
type: "warning",
showCancelButton: true,
confirmButtonColor: "#DD6B55",
confirmButtonText: "Yes, proceed!",
cancelButtonText: "Cancel",
closeOnConfirm: false,
closeOnCancel: true
}, function(isConfirm) {
if (isConfirm) {
$.post('/admin/cPanelScript/deleteCustomer.php', {CustomerID:CustomerID}, function(data) {      
if (data == "success") {
swal("Success", "You've successfully deleted that customer", "success");
    setInterval(() => {
        location.reload();
    }, 1000);
}else {
    swal("Unknown Error", "An Error has occured, Could not delete customer", "error");
}
 }); 

}

});


});


//=========== DEACTIVATE/ACTIVATE CUSTOMER =======================
$('button.modifySuspense').click(function() {
var CustomerID = $(this).data('id');
var action = $(this).data('action');

if(action == "deactivate") {
swal({
title: "Are you sure?",
text: "You are de-activating this account",
type: "warning",
showCancelButton: true,
confirmButtonColor: "#DD6B55",
confirmButtonText: "De-Activate",
cancelButtonText: "Cancel",
closeOnConfirm: false,
closeOnCancel: true
}, function(isConfirm) {
if (isConfirm) {
$.post('/admin/cPanelScript/VerifyAccount.php', {CustomerID:CustomerID, action:action}, function(data) { 
if (data == "success") {
swal("Success", "You have successfully deactivated this account", "success");
setInterval(() => {
location.reload();
}, 2000);
}else {
swal("Unknown Error", "An Error has occured, Could not deactivate account", "error");
}
}); 

}

});

}else {

swal({
title: "Are you sure?",
text: "You are activating this account",
type: "warning",
showCancelButton: true,
confirmButtonColor: "#DD6B55",
confirmButtonText: "Activate",
cancelButtonText: "Cancel",
closeOnConfirm: false,
closeOnCancel: true
}, function(isConfirm) {
if (isConfirm) {
$.post('/admin/cPanelScript/VerifyAccount.php', {CustomerID:CustomerID, action:action}, function(data) { 
if (data == "success") {
swal("Success", "You have successfully activated this account", "success");
setInterval(() => {
location.reload();
}, 2000);
}else {
swal("Unknown Error", "An Error has occured, Could not activate that account", "error");
}
}); 

}

});
}




});



//=========== VERIFY CUSTOMER =======================
$('button.VerifyAccount').click(function() {
    var CustomerID = $(this).data('id');
    
    swal({
    title: "Are you sure?",
    text: "If you verify this customer now, you will not be able to undo",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Verify Account",
    cancelButtonText: "Cancel",
    closeOnConfirm: false,
    closeOnCancel: true
    }, function(isConfirm) {
    if (isConfirm) {
    $.post('/admin/cPanelScript/VerifyDocument.php', {CustomerID:CustomerID}, function(data) { 
    if (data == "success") {
    swal("Success", "You have successfully verified this customer", "success");
        setInterval(() => {
            location.reload();
        }, 1000);
    }else {
        swal("Unknown Error", "An Error has occured, Could not verify customer", "error");
    }
     }); 
    
    }
    
    });
    
    
    });
//=========== DENY DOCUMENT =======================
$('button.DenyVerify').click(function() {
    var CustomerID = $(this).data('id');

    swal({
    title: "Are you sure?",
    text: "If you deny this document, the file will be deleted and you will not be able to undo",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Deny document",
    cancelButtonText: "Cancel",
    closeOnConfirm: false,
    closeOnCancel: true
    }, function(isConfirm) {
    if (isConfirm) {
    $.post('/admin/cPanelScript/DenyVerify.php', {CustomerID:CustomerID}, function(data) {      
    if (data == "success") {
  
    swal("Success", "You have successfully denied this document", "success");
        setInterval(() => {
            location.reload();
        }, 1000);
    }else {
        swal("Unknown Error", "An Error has occured, Could not delete the document", "error");
    }
     }); 
    
    }
    
    });
    
    
    });


//======= FUND ACCOUNT =============================
$('button#FundAcc').on("click", function(){
$('form#FundAcc').submit();  
});
// FORM ON SUBMIT ==================================
$('form#FundAcc').on("submit", function(e){
e.preventDefault();

var thisButton = $('button#FundAcc');
thisButton.text('Funding..');
thisButton.attr('disabled', 'disabled');

var customerID = $(this).find('select#Account').val();
var Amount = $(this).find('input#Amount').val();
var Currency = $(this).find('select#Curr').val();

$.post('/admin/cPanelScript/updateBal.php',{customerID:customerID, Amount:Amount, Currency:Currency}, function(data) {

thisButton.text('Fund');
thisButton.removeAttr('disabled');


if (data == "success") {
    swal("Success", "You have successfully funded that account", "success");
    setInterval(() => {
        location.reload();
    }, 1000);
}else {
    swal("Unknown Error", "An Error has occured, Could not fund that account", "error");
}
});


});


//======= BONUS ACCOUNT =============================
$('button#AddBonus').on("click", function(){
$('form#AddBonus').submit();  
});
// FORM ON SUBMIT ==================================
$('form#AddBonus').on("submit", function(e){
e.preventDefault();

var thisButton = $('button#AddBonus');
thisButton.text('Adding..');
thisButton.attr('disabled', 'disabled');

var customerID = $(this).find('select#Account').val();
var Amount = $(this).find('input#Amount').val();

$.post('/admin/cPanelScript/Bonus.php',{customerID:customerID, Amount:Amount}, function(data) {

thisButton.text('Add');
thisButton.removeAttr('disabled');


if (data == "success") {
    swal("Success", "You have successfully added bonus to that account", "success");
    setInterval(() => {
        location.reload();
    }, 1000);
}else if(data == "not num"){
    swal("Note", "Please note that you should not include currency symbol in adding bonus", "info");
}else {
    swal("Unknown Error", "An Error has occured, Could not add bonus to that account", "error");
}
});


});


//======= COMPLETE TRANSACTIONS =============================
$('button#completeTrans').on("click", function(){
$('form#completeTrans').submit();  
});
// FORM ON SUBMIT ==================================
$('form#completeTrans').on("submit", function(e){
e.preventDefault();

var thisButton = $('button#completeTrans');
thisButton.text('Completing..');
thisButton.attr('disabled', 'disabled');

var transactionID = $(this).find('select#TransID').val();

$.post('/admin/cPanelScript/updateTrans.php',{transactionID:transactionID}, function(data) {

thisButton.text('Complete');
thisButton.removeAttr('disabled');

if (data == "success") {
    swal("Success", "You've successfully complete that transaction", "success");
    setInterval(() => {
        location.reload();
    }, 1000);
}else if(data == "already") {
    swal("Done", "That transaction is already completed", "info");
}else {
    swal("Unknown Error", "An Error has occured, Could not complete that transaction", "error");
}
});


});








//======= MAKE A TRADE =============================
$('button#makeATrade').on("click", function(){
    $('form#makeATrade').submit();  
    });
    // FORM ON SUBMIT ==================================
    $('form#makeATrade').on("submit", function(e){
    e.preventDefault();
    
    var thisButton = $('button#makeATrade');
    thisButton.text('Completing..');
    thisButton.attr('disabled', 'disabled');
    
    var Customer = $(this).find('select#Customer').val();
    var CurrencyPair = $(this).find('select#CurrencyPair').val();
    var Size = $(this).find('input#Size').val();
    var Type = $(this).find('select#Type').val();
    var Profit_or_loss = $(this).find('select#Profit_or_loss').val();
    var Price = $(this).find('input#Price').val();
    var Profit_Loss = $(this).find('input#Profit_Loss').val();
    
    $.post('/admin/cPanelScript/makeATrade.php',{Customer:Customer, CurrencyPair:CurrencyPair, Size:Size, Type:Type, 
        Profit_or_loss:Profit_or_loss, Price:Price, Profit_Loss:Profit_Loss}, function(data) {
    thisButton.text('Complete');
    thisButton.removeAttr('disabled');
    
    if (data == "success") {
        swal("Success", "You've successfully placed a trade on this account", "success");
        setInterval(() => {
            location.reload();
        }, 1000);
    }else if(data == "already") {
        swal("Done", "That transaction is already completed", "info");
    }else {
        swal("Unknown Error", "An Error has occured, Could not place trade", "error");
    }
    });
    
    
    });









//======= UPDATE WEBSITE ADDRESS =============================
$('button#UpdateAdd').on("click", function(){
    $('form#UpdateAdd').submit();  
    });
    // FORM ON SUBMIT ==================================
    $('form#UpdateAdd').on("submit", function(e){
    e.preventDefault();
    
    var thisButton = $('button#UpdateAdd');
    thisButton.text('Updating..');
    thisButton.attr('disabled', 'disabled');
    
    var NewAddress = $(this).find('input#WalletAddress').val();
    var Currency = $(this).find('select#Curr').val();
    
    $.post('/admin/cPanelScript/updateAdd.php',{NewAddress:NewAddress, Currency:Currency}, function(data) {
    
    thisButton.text('Complete');
    thisButton.removeAttr('disabled');
    
    if (data == "success") {
        swal("Success", "You've successfully updated the website wallet's address", "success");
        setInterval(() => {
            location.reload();
        }, 1000);
    }else {
        swal("Unknown Error", "An Error has occured, Could not update website's wallet address", "error");
    }
    });
    
    
    });
    

//======= UPDATE WEBSITE ADDRESS =============================
$('button#EmptyBal').on("click", function(){
    $('form#EmptyBal').submit();  
    });
    // FORM ON SUBMIT ==================================
    $('form#EmptyBal').on("submit", function(e){
    e.preventDefault();
    
    var thisButton = $('button#EmptyBal');
    thisButton.text('Updating..');
    thisButton.attr('disabled', 'disabled');
    
    var Account = $(this).find('select#Account').val();
    var AccBal = $(this).find('select#AccBal').val();
    var newBalance = $(this).find('input#newBalance').val();
    
    $.post('/admin/cPanelScript/emptyAccount.php',{Account:Account, AccBal:AccBal, newBalance:newBalance}, function(data) {
    
    thisButton.text('Update');
    thisButton.removeAttr('disabled');
    
    if (data == "success") {
        swal("Success", "You have successfully updated the account balance of selected customer", "success");
        setInterval(() => {
            location.reload();
        }, 1000);
    }else {
        swal("Unknown Error", "An Error has occured, Could not update the account balance of selected customer", "error");
    }
    });
    
    
    });
// SEND NOTIFICATION
$('button#sendNotificationButton').on("click", function(){
$('form#sendNotificationForm').submit();  
});
// FORM ON SUBMIT ==================================
$('form#sendNotificationForm').on("submit", function(e){
e.preventDefault();

var thisButton = $('button#sendNotificationButton');
thisButton.text('Sending..');
thisButton.attr('disabled', 'disabled');

var target = $(this).find('select#target').val();
var message = $(this).find('textarea').val();

$.post('/admin/cPanelScript/sendNoti.php',{target:target, message:message}, function(data) {

thisButton.text('Send');
thisButton.removeAttr('disabled');

if (data == "success") {
swal("Success", "You have successfully sent a message notification to selected target", "success");
setInterval(() => {
location.reload();
}, 1000);
}else {
swal("Unknown Error", "An Error has occured, Could not send a message notification", "error");
}
});


});

// UPDATE ACCOUNT PLANS
$('button#accPlanUpdate').on("click", function(){
$('form#accPlanUpdate').submit();  
});
// FORM ON SUBMIT ==================================
$('form#accPlanUpdate').on("submit", function(e){
e.preventDefault();

var thisButton = $('button#accPlanUpdate');
thisButton.text('Updating..');
thisButton.attr('disabled', 'disabled');

var target = $(this).find('select#target').val();
var planName = $(this).find('input#planName').val();
var planAmount = $(this).find('input#planAmount').val();
var planMaxAmount = $(this).find('input#planMaxAmount').val();

$.post('/admin/cPanelScript/accPlanUpdate.php',{target:target, planName:planName, planAmount:planAmount, planMaxAmount:planMaxAmount}, function(data) {

thisButton.text('Send');
thisButton.removeAttr('disabled');

if (data == "success") {
swal("Success", "You have successfully updated that account plan", "success");
setInterval(() => {
location.reload();
}, 1000);
}else {
swal("Unknown Error", "An Error has occured, Could not update account plan", "error");
}
});


});


//======= SUBMIT VERIFY FORM AUTOMATICALLY =============================
$('input#ImageVerifyfile').on("change", function(){
        $('form#verifyForm').submit();  
});

setInterval(function(){ 

    $("#notificationWrapper").css('left', "2%");
    $("#notificationWrapper").css('visibility', "visible");
    $('#notificationWrapper').load("/dashboard/includes/alertNotify.php");
    setTimeout(function(){ $("#notificationWrapper").css('left', "-500px");; }, 5000);
}, 10000);

// load every two seconds
setInterval(function(){ 
    $('tbody#transactionBody').load("/dashboard/functions/fetchTransactions.php");
}, 1000);

//======= CHANGE FORM ON WITHDRAW =============================

$("select#SelectWith").on('change', function(){
    if ($(this).val() == 'Bitcoin'){
        $('form#withdrawForm .btc').show(300);
        $('form#withdrawForm .withAmount').show(300);
        $('form#withdrawForm .bank').hide(300);
    } else {
        $('form#withdrawForm .bank').show(300);
        $('form#withdrawForm .withAmount').show(300);
        $('form#withdrawForm .btc').hide(300);
    }
});



// COPY ADDRESS


$("button#CopyBTC").on("click", function() {
    
 var newBTC = $("input#CopyBTC").val();
    function copyToClipboard(BitcoinAddress) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(newBTC).select();
        document.execCommand("copy");
        $temp.remove();
    }

copyToClipboard();

swal("Copied", "Your Bitcoin Address Has Been Copied To Clippboard", "success");   

});

$("button#CopyETH").on("click", function() {
    
 var newBTC = $("input#CopyETH").val();
    function copyToClipboard(BitcoinAddress) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(newBTC).select();
        document.execCommand("copy");
        $temp.remove();
    }

copyToClipboard();

swal("Copied", "Your Ethereum Address Has Been Copied To Clippboard", "success");   

});

$("button#CopyUSDT").on("click", function() {
    
 var newBTC = $("input#CopyUSDT").val();
    function copyToClipboard(BitcoinAddress) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(newBTC).select();
        document.execCommand("copy");
        $temp.remove();
    }

copyToClipboard();

swal("Copied", "Your Tether (USDT) Address Has Been Copied To Clippboard", "success");   

});

$("button#CopyDoge").on("click", function() {
    
 var newBTC = $("input#CopyDoge").val();
    function copyToClipboard(BitcoinAddress) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(newBTC).select();
        document.execCommand("copy");
        $temp.remove();
    }

copyToClipboard();

swal("Copied", "Your Doge Address Has Been Copied To Clippboard", "success");   

});

$("button#CopySHIB").on("click", function() {
    
 var newBTC = $("input#CopySHIB").val();
    function copyToClipboard(BitcoinAddress) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(newBTC).select();
        document.execCommand("copy");
        $temp.remove();
    }

copyToClipboard();

swal("Copied", "Your Shiba Inu Address Has Been Copied To Clippboard", "success");   

});

$("button#CopyBTCC").on("click", function() {
    
    var newBTC = $("input#CopyBTCC").val();
       function copyToClipboard(BitcoinAddress) {
           var $temp = $("<input>");
           $("body").append($temp);
           $temp.val(newBTC).select();
           document.execCommand("copy");
           $temp.remove();
       }
   
   copyToClipboard();
   
   swal("Copied", "Your Bitcoin Cash Address Has Been Copied To Clippboard", "success");   
   
   });

$("button#CopyStellar").on("click", function() {
    
    var newBTC = $("input#CopyStellar").val();
       function copyToClipboard(BitcoinAddress) {
           var $temp = $("<input>");
           $("body").append($temp);
           $temp.val(newBTC).select();
           document.execCommand("copy");
           $temp.remove();
       }
   
   copyToClipboard();
   
   swal("Copied", "Your Stellar Address Has Been Copied To Clippboard", "success");   
   
   });

$("button#CopyPolkadot").on("click", function() {
    
    var newBTC = $("input#CopyPolkadot").val();
       function copyToClipboard(BitcoinAddress) {
           var $temp = $("<input>");
           $("body").append($temp);
           $temp.val(newBTC).select();
           document.execCommand("copy");
           $temp.remove();
       }
   
   copyToClipboard();
   
   swal("Copied", "Your Polkadot Address Has Been Copied To Clippboard", "success");   
   
   });

$("button#CopyAlgorand").on("click", function() {
    
    var newBTC = $("input#CopyAlgorand").val();
       function copyToClipboard(BitcoinAddress) {
           var $temp = $("<input>");
           $("body").append($temp);
           $temp.val(newBTC).select();
           document.execCommand("copy");
           $temp.remove();
       }
   
   copyToClipboard();
   
   swal("Copied", "Your Algorand Address Has Been Copied To Clippboard", "success");   
   
   });


$("button#CopyDeso").on("click", function() {
    
    var newBTC = $("input#CopyDeso").val();
       function copyToClipboard(BitcoinAddress) {
           var $temp = $("<input>");
           $("body").append($temp);
           $temp.val(newBTC).select();
           document.execCommand("copy");
           $temp.remove();
       }
   
   copyToClipboard();
   
   swal("Copied", "Your Deso Address Has Been Copied To Clippboard", "success");   
   
   });

$("button#CopyTrueUSD").on("click", function() {
    
    var newBTC = $("input#CopyTrueUSD").val();
       function copyToClipboard(BitcoinAddress) {
           var $temp = $("<input>");
           $("body").append($temp);
           $temp.val(newBTC).select();
           document.execCommand("copy");
           $temp.remove();
       }
   
   copyToClipboard();
   
   swal("Copied", "Your TrueUSD Address Has Been Copied To Clippboard", "success");   
   
   });

$("button#CopyUSDCoin").on("click", function() {
    
    var newBTC = $("input#CopyUSDCoin").val();
       function copyToClipboard(BitcoinAddress) {
           var $temp = $("<input>");
           $("body").append($temp);
           $temp.val(newBTC).select();
           document.execCommand("copy");
           $temp.remove();
       }
   
   copyToClipboard();
   
   swal("Copied", "Your USD Coin Address Has Been Copied To Clippboard", "success");   
   
   });


$("button#CopyPaxDollar").on("click", function() {
    
    var newBTC = $("input#CopyPaxDollar").val();
       function copyToClipboard(BitcoinAddress) {
           var $temp = $("<input>");
           $("body").append($temp);
           $temp.val(newBTC).select();
           document.execCommand("copy");
           $temp.remove();
       }
   
   copyToClipboard();
   
   swal("Copied", "Your Pax Dollar Address Has Been Copied To Clippboard", "success");   
   
   });



$("button#CopyOUSD").on("click", function() {
    
    var newBTC = $("input#CopyOUSD").val();
       function copyToClipboard(BitcoinAddress) {
           var $temp = $("<input>");
           $("body").append($temp);
           $temp.val(newBTC).select();
           document.execCommand("copy");
           $temp.remove();
       }
   
   copyToClipboard();
   
   swal("Copied", "Your Original Dollar (oUSD) Address Has Been Copied To Clippboard", "success");   
   
   });



$("button#CopyUSDK").on("click", function() {
    
    var newBTC = $("input#CopyUSDK").val();
       function copyToClipboard(BitcoinAddress) {
           var $temp = $("<input>");
           $("body").append($temp);
           $temp.val(newBTC).select();
           document.execCommand("copy");
           $temp.remove();
       }
   
   copyToClipboard();
   
   swal("Copied", "Your USDK Address Has Been Copied To Clippboard", "success");   
   
   });



$("button#CopyUSDA").on("click", function() {
    
    var newBTC = $("input#CopyUSDA").val();
       function copyToClipboard(BitcoinAddress) {
           var $temp = $("<input>");
           $("body").append($temp);
           $temp.val(newBTC).select();
           document.execCommand("copy");
           $temp.remove();
       }
   
   copyToClipboard();
   
   swal("Copied", "Your USDA Address Has Been Copied To Clippboard", "success");   
   
   });



// load depositiors
function callTheDeposits() {
    $("tbody.depositors").load("/account/depositors.php");
    console.log("Executed");
}
function callTheDepositsL() {
    $("tbody.depositorsL").load("/account/depositorsL.php");
    console.log("Executed");
}

setInterval(() => {
    callTheDeposits();
    callTheDepositsL();
}, 1000);







});