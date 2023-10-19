<script src="{{ asset('js/app.js') }}"></script>

<!-- icon untuk share -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="{{ asset('js/share.js') }}"></script>
<script>
    @for ($index = 0; $index < 5; $index++)

        fetch("https://ayopromo.com/api/iklan")
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                var image = document.getElementById('gambar-iklan{{ $index }}');
                var link = document.getElementById('link-iklan{{ $index }}');
                // var responses = response.json();
                // console.log(data.gambar);
                image.src = data.gambar;
                link.href = data.link;
            })
            .catch(function (error) {
                // console.log(error);
            });

    @endfor
</script>