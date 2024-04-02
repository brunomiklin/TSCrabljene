<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
$(document).ready(function () {
    $('.meni-crtice').on('click', function () {

        $('.navigacija').toggleClass('prikazi');
        $('.navigacija ul').toggleClass('prikazi');

    });

});