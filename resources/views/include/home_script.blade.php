<script src="{{ asset('assets/ui/js/jquery-2.2.3.js') }}"></script>
<script src="{{ asset('assets/ui/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/ui/js/jquery.parallax-1.1.3.js') }}"></script>
<script src="{{ asset('assets/ui/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/ui/js/jquery-countTo.js') }}"></script>
<script src="{{ asset('assets/ui/js/bootsnav.js') }}"></script>
<script src="{{ asset('assets/ui/js/jquery.cubeportfolio.min.js') }}"></script>
<script src="{{ asset('assets/ui/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/ui/js/viedobox_video.js') }}"></script>
<script src="{{ asset('assets/ui/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/ui/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('assets/ui/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('assets/ui/js/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('assets/ui/js/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/ui/js/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('assets/ui/js/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/ui/js/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('assets/ui/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/ui/js/functions-u%3d1587912412.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/alert/js/jquery.fake-notification.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
  $('#notification-1').Notification({
    // Notification varibles
    Varible1: ["Dirk", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
    "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"],
    Varible2: ["USA","UAE","ITALY", "FLORIDA",  "MEXICO",  "INDIA",  "CHINA",  "CAMBODIA",  "UNITED KINGDOM",  "GERMANY", "AUSTRALIA",  "BANGLADESH", "SWEDEN", "PAKISTAN", "MALDIVES", "SEYCHELLES", 
    "BOLIVIA",
     "SOUTH AFRICA", "ZAMBIA", "ZIMBABWE", "LEBANESE", "SAUDI ARABIA", "CHILE", "PEUTO RICO"],
    
    Amount: [9000, 25000,5000,6669,4440,7989,7052,10000,1500,2000],          
    Content: '[Varible1] from [Varible2] has just Earned <b>$[Amount]</b>',
    // Timer
    Show: ['stable', 5, 10],
    Close: 5,
    Time: [0, 23],
    // Notification style 
    LocationTop: [true, '30%'],
    LocationBottom:[false, '10%'],
    LocationRight: [false, '10%'],            
    LocationLeft:[true, '10px'],
    Background: '#000000',
    BorderRadius: 5,
    BorderWidth: 1,
    BorderColor: '#ff9900',
    TextColor: 'white',
    IconColor: '#ffffff',
    // Notification Animated   
    AnimationEffectOpen: 'slideInUp',
    AnimationEffectClose: 'slideOutDown',
    // Number of notifications
    Number: 40,
    // Notification link
    Link: [false, 'https://www.pacificfxoption.com/', '_blank']
    
  });     
});
$("form#contact-form").submit(function(e) {
    e.preventDefault();    
    var formData = new FormData(this);
    $.ajax({
        url: 'process-contact.php',
        type: 'POST',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:function(){
            $('#btnContact').html("Sending Message <i class='fa fa-spinner fa-spin'></i>").attr("disabled", true);
        },
        success: function (data) {
            $('#btnContact').html("Send Message <i class='fa fa-rocket'></i>").attr("disabled", false);
            if (data == "Done") {
                swal("Message Sent", "You message was successfully sent to support. You will get a feedback soon", "success");
                $("form#contact-form").trigger("reset");
            } else {
                swal("Error", data, "warning");
            }   
        },
        error:function(){
            swal("Network Unavailable", "Please check your internet connection", "warning");
            $('#btnContact').html("Send Message <i class='fa fa-rocket'></i>").attr("disabled", false);
        }
    });
});
</script>
<!-- GetButton.io widget -->
{{-- <script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "{{ config('app.phone') }}", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script> --}}
<!-- /GetButton.io widget -->

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '477329971cc19600ce3da180a1edc4b8c47b8cb8';
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>