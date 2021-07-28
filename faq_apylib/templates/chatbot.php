
<main>
    <!-- ***************************** CHATBOT ***************************** -->
    <div class="chatbot_wrapper">
        <div class="title">ApyConseil</div>
        <div class="form">
            <div class="bot_inbox inbox">
                <div class="icon_bot">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path d="M10.31 10.93c1.02 1.64.87 3.57-.35 4.35c-1.22.76-3.04.05-4.07-1.59c-1.02-1.64-.86-3.59.36-4.35c1.22-.76 3.04-.05 4.06 1.59M12 17.75c2 0 2.5-.75 2.5-.75s-.5 2-2.5 2s-2.5-1.97-2.5-2c0 0 .5.75 2.5.75m5.75-8.41c1.22.76 1.38 2.71.36 4.35c-1.03 1.64-2.85 2.35-4.07 1.59c-1.22-.78-1.37-2.71-.35-4.35c1.02-1.64 2.84-2.35 4.06-1.59M12 20c2.5 0 8-5.14 8-9c0-3.86-3.59-7-8-7s-8 3.14-8 7s5.5 9 8 9m0-18c5.5 0 10 4.04 10 9c0 4.08-5.68 11-10 11S2 15.08 2 11c0-4.96 4.5-9 10-9z" fill="currentColor"></path>
                    </svg>
                </div>
                <div class="txt_main">
                    <p>Bonjour, comment puis-je vous aider ?</p>
                </div>
            </div>
            <!-- ***************************** USERS ***************************** -->
        </div>
        <div class="typing_field">
            <div class="input_field">
                <input id="data" type="text" placeholder="Posez votre question...">
                <button id="send_btn">Envoyer</button>
            </div>
        </div>
    </div>
    </div>
</main>

<script>
    $(document).ready(function() {
        $("#send_btn").on("click", function() {
            $value = $("#data").val();
            $msg = '<div class="user_inbox inbox"><div class="txt_main"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);
            $("#data").val('');

            // start ajax code
            $.ajax({
                url: 'index.php',
                type: 'POST',
                data: 'text =' + $value,
                sucess: function(result) {

                }
            });
        })
    })
</script>