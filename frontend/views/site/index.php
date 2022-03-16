<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
</script>
<h1>Hello!</h1>

<button id="send-api">Submit</button>
<script>
    $('#send-api').on('click',function(event){
        $.ajax({
            url: 'http://yii-aplication-advanced/api/products/index',
            type: 'GET',
            dataType: 'json',
            success: function(data){
                console.log(data)
            }
        });
    })
</script>