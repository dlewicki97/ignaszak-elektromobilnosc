for(let i=1 ; i<5 ; i++){

    window.addEventListener('load', function () {
        document.getElementById('photo_'+i).addEventListener('change', function () {
            document.getElementById('photoViewer_'+i).innerHTML = '<i class="fas fa-spinner fa-pulse loader"></i>';

            if (this.files && this.files[0]) {
                var img = document.querySelector('img');
                img.src = URL.createObjectURL(this.files[0]);
                setTimeout(function () {
                    img.onload = imageIsLoaded;
                    var photoName = document.getElementById('photo_'+i).value;
                    document.getElementById('photoViewer_'+i).innerHTML = '<img class="img-fluid img-thumbnail" src="' + img.src + '" width="75%">';
                    document.getElementById('name_photo_'+i).value = photoName.replace(/^.*[\\\/]/, '');
                }, 500);
            }
        });
    });
}
window.addEventListener('load', function () {
    document.getElementById('photo_logo').addEventListener('change', function () {
        document.getElementById('photoViewer_logo').innerHTML = '<i class="fas fa-spinner fa-pulse loader"></i>';

        if (this.files && this.files[0]) {
            var img = document.querySelector('img');
            img.src = URL.createObjectURL(this.files[0]);
            setTimeout(function () {
                img.onload = imageIsLoaded;
                var photoName = document.getElementById('photo_logo').value;
                document.getElementById('photoViewer_logo').innerHTML = '<img class="img-fluid img-thumbnail" src="' + img.src + '" width=74>';
                document.getElementById('name_photo_logo').value = photoName.replace(/^.*[\\\/]/, '');
            }, 500);
        }
    });
});

function loadServerPhoto(name ,link , photo_nr){
    document.getElementById('photoViewer_'+photo_nr).innerHTML = '<i class="fas fa-spinner fa-pulse loader"></i>';
    var source = link+'uploads/'+ document.getElementById('server_photo_'+photo_nr).value;
    setTimeout(function () {
        document.getElementById('photoViewer_'+photo_nr).innerHTML = '<img class="img-fluid img-thumbnail" src="' + source + '" width="75%">';
    }, 500);
}

function imageIsLoaded(e) { }