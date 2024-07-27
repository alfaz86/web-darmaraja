var root = window.location.origin;

function loginView() {
    return window.location.pathname.match(/^.*login$/)
}

function resetPasswordView() {
    return window.location.pathname.match(/^.*password\/reset$/)
}

if (loginView()) {
    var src = root + '/images/logo-kec-darmaraja.png';
    var icon = `<div class="text-center mb-3">
        <img src="${src}" id="icon" alt="logo-insun-medal" width="120">
    </div>`;
    var html = '<a href="' + root + '">kembali ke beranda</a>';

    $(icon).insertBefore("form");
    // $("footer").hide();
    var bottomContent = $("div.text-center > a");
    $(bottomContent[0]).hide();
    $(bottomContent[1]).html(html);
}

if (resetPasswordView()) {
    var html = '<a href="' + root + '/admin/login' + '">back to login</a>';
    $("footer").hide();
    $("div.text-center.pt-3").html(html);
}