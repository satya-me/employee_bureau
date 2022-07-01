// $('#text-field-hero-input').mousedown(function () {
//     $("#text-field-hero-input").css("width", "400px");
// });
// $('#text-field-hero-input').mouseup(function () {
//     $("#text-field-hero-input").css("width", "auto");
// });


$(document).ready(function () {


    var divHeight = $(".walletBalance").height();
    var divWidth = $('.walletBalance').width();
    console.log(divHeight, divWidth);
    $('.walletBalance').height(divWidth);

    // $(window).resize(function () {
    // });

});

// File Upload Input
$("#FileInput").on('change', function (e) {
    var labelVal = $(".title").text();
    var oldfileName = $(this).val();
    fileName = e.target.value.split('\\').pop();

    if (oldfileName == fileName) { return false; }
    var extension = fileName.split('.').pop();

    if ($.inArray(extension, ['jpg', 'jpeg', 'png']) >= 0) {
        $(".filelabel i").removeClass().addClass('fa-solid fa-image');
        // $(".filelabel i, .filelabel .title").css({ 'color': '#7a00ff' });
        $(".filelabel").css({ 'border': ' 1px solid #7a00ff' });
    }
    else if (extension == 'pdf') {
        $(".filelabel i").removeClass().addClass('fa-solid fa-file-pdf');
        // $(".filelabel i, .filelabel .title").css({ 'color': '#7a00ff' });
        $(".filelabel").css({ 'border': ' 1px solid #7a00ff' });

    }
    else if (extension == 'doc' || extension == 'docx') {
        $(".filelabel i").removeClass().addClass('fa-solid fa-file-word');
        // $(".filelabel i, .filelabel .title").css({ 'color': '#7a00ff' });
        $(".filelabel").css({ 'border': ' 1px solid #7a00ff' });
    }
    else {
        $(".filelabel i").removeClass().addClass('fa-solid fa-file');
        // $(".filelabel i, .filelabel .title").css({ 'color': '#7a00ff' });
        $(".filelabel").css({ 'border': ' 1px solid #7a00ff' });
    }

    if (fileName) {
        if (fileName.length > 10) {
            $(".filelabel .title").text(fileName.slice(0, 4) + '...' + extension);
        }
        else {
            $(".filelabel .title").text(fileName);
        }
    }
    else {
        $(".filelabel .title").text(labelVal);
    }
});